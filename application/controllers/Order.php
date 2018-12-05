<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('order_model','m_order');
		$this->load->model('accr_model','m_ar');
		$this->load->model('pymt_model','m_pymt');
		$this->load->model('prfl_model','m_prfl');
		$this->load->model('cust_model','m_cust');
		$this->load->model('item_model','m_item');
		$this->load->model('order_detail_model','m_detl');

		$this->stor_indx = 1; // TODO: replace with login credential
		$this->stor_prfl = $this->m_prfl->read_prfl($this->stor_indx);
	}

	public function index($message = NULL) {
		$orders = $this->m_order->getAllOrder();
		$data = array(
			'title' => 'Orders',
			'message' => $message,
			'list_order' => $orders
		);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav');
		$this->load->view('users/order');
		$this->load->view('templates/footer');
	}

	public function ordr_addn() {
		$ordernum = $this->m_order->last_order_number();
		if ($ordernum == '') {
			$ordernum = "AA000001";
		} else {
			$foreId = substr($ordernum,0,2);
			$numId = substr($ordernum,2);
			$err=0;
			if ($numId == "999999") {
				$numId = "000001";
				$foreIdA = ord(substr($foreId,0,1));
				$foreIdB = ord(substr($foreId,1));
				if ($foreIdB == 90 && $foreIdA < 90) {
					$foreId = chr($foreIdA + 1)."A";
				} elseif ($foreIdB < 90 && $foreIdA <= 90) {
					$foreId = chr($foreIdA).chr($foreIdB+1);
				} elseif ($foreIdB == 90 && $foreIdA == 90) {
					$err=1;
				}
			} else {
				$numId += 1;
				$needL = 6 - strlen($numId);
				for ($i=0; $i < $needL; $i++) {
					$numId = "0".$numId;
				}
			}
			if ($err == 0) {
				$ordernum = $foreId.$numId;
			} else {
				$ordernum = "error";
			}
		}

		$data = array(
			'title' => 'Add Order',
			'stor_indx' => $this->stor_indx,
			'stor_prfl' => $this->stor_prfl,
			'ordr_nmbr' => $ordernum,
			'item_cate' => $this->m_item->read_item_category(),
			'category' => $this->m_item->read_category(),
			'list_cust' => $this->m_cust->read_all()
		);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav');
		$this->load->view('users/modals/modals');
		$this->load->view('users/orders/add_order');
		$this->load->view('templates/invoices');
		$this->load->view('templates/footer');
	}

	public function ordr_save() {
		$result['msg'] = "";
		$result['url'] = "";

		// get inupt data
		$stor_indx = $this->input->post("stor_indx");
		$ordr_nmbr = $this->input->post("ordr_nmbr");
		$ordr_date = $this->input->post("ordr_date");
		$ordr_fndt = $this->input->post("ordr_fndt");
		$cust_indx = $this->input->post("cust_indx");
		$cust_name = $this->input->post("cust_name");
		$ordr_item = $this->input->post("ordr_item");
		$ordr_detl = $this->input->post("ordr_detl");
		$ordr_fees = $this->input->post("ordr_fees");
		$ordr_dopy = $this->input->post("ordr_dopy");
		$ordr_accr = $this->input->post("ordr_accr");
		$accr_stat = ($ordr_dopy == $ordr_fees and $ordr_accr == 0) ? 1 : 0;
		date_default_timezone_set('Asia/Jakarta');
		$trax_date = date('Y-m-d H:i:s');

		$ordr_data = array('ordr_nmbr' => $ordr_nmbr, 'trax_date' => $trax_date, 'ordr_date' => $ordr_date,'ordr_fndt' => $ordr_fndt,
			'ordr_detl' => $ordr_detl,'cust_indx' => $cust_indx);
		// insert order
		if ($this->m_order->add_order($ordr_data)) {
			$items = array();
			foreach ($ordr_item as $item) {
				$qty = explode(";",$item)[0];
				$tpy = explode(";",$item)[1];
				$prc = explode(";",$item)[2];
				array_push($items, array(
					'ordr_nmbr' => $ordr_nmbr,
					'item_qtty' => $qty,
					'caty_indx' => $tpy,
					'item_pric' => $prc
				));
			}
			$detl_rslt = $this->m_detl->add_order_detail($items);
			// insert accr
			$accr_data = array ('ordr_nmbr' => $ordr_nmbr,'accr_amnt' => $ordr_fees,'accr_stat' => $accr_stat);
			$accr_nmbr = $this->m_ar->add_accr($accr_data);
			// insert pymt
			if ($accr_nmbr != 0 and $ordr_dopy != 0) {
				$pymt_data = array('accr_nmbr' => $accr_nmbr,'pymt_date' => $trax_date,'pymt_amnt' => $ordr_dopy);
				$this->m_pymt->add_pymt($pymt_data);
			}
			if ($accr_nmbr != 0 and $detl_rslt) {
				$result['msg'] = "Order Saved";
				$result['url'] = "order";
			} else {
				$result['msg'] = "Failed to insert detail order and/or account receiveable.";
				$result['url'] = "";
			}
		} else {
			$result['msg'] = "Failed to insert order data.";
			$result['url'] = "";
		}
		echo json_encode($result);
	}

	public function cust_save() {
		$result['msg'] = "";
		$result['url'] = "";

		$cust_titl = $this->input->post("cust_titl");
		$cust_name = $this->input->post("cust_name");
		$cust_phnn = $this->input->post("cust_phnn");
		$cust_addr = $this->input->post("cust_addr");
		$cust_rgdt = date('Y-m-d H:i:s');

		$cust_data = array(
			'cust_titl' => $cust_titl,
			'cust_name' => $cust_name,
			'cust_phnn' => $cust_phnn,
			'cust_addr' => $cust_addr,
			'cust_rgdt' => $cust_rgdt
		);

		$result['msg'] = $this->m_cust->add_customer($cust_data);

		echo json_encode($result);
	}

	//
	// public function ordr_invoice($fileName){
	// 	// $pdf = base64_decode($_POST['file']);
	// 	if (!empty($_FILES['data'])) {
	// 		$pdf = $_FILES['data']['tmp_name'];
	// 		$upload_path = base_url() . "assets/images/invoices/";
	// 		$target_file = $upload_path . $fileName . ".pdf";
	// 		move_uploaded_file($pdf, $target_file);
	// 		echo "scs";
	// 	} else {
	// 		echo 'no data sent';
	// 	}
	// 	// $config['upload_path']=base_url()."assets/images/invoices/";
	// 	// $config['allowed_types']='pdf';
	// 	// $config['encrypt_name'] = FALSE;
	// 	// $this->load->library('upload',$config);
	// 	// if($this->upload->do_upload('data')){
	// 	// 	$data = array('upload_data' => $this->upload->data());
	// 		// $judul= $this->input->post('judul');
	// 		// $image= $data['upload_data']['file_name'];
	// 		// $result= $this->m_upload->simpan_upload($judul,$image);
	// 		// echo json_decode($result);
	// 	// }
	//
	// 	// $config['upload_path'] = base_url()."assets/images/invoices/";
	// 	// $config['allowed_types'] = 'pdf';
	// 	// $config['file_name'] = $fileName.'.pdf';
	// 	// $this->load->library('upload', $config);
	// 	// $this->upload->initialize($config);
	// 	// // if (!)  {
	// 	// 	$this->upload->do_upload('blob');
	// 	// 	$data = $this->upload->data();
	// 	// 	// $this->files_model->insert_file($_FILES[][], $data['upload_path'].$data['file_name']);
	// 	// 	echo $fileName;
	// 	// } else {
	// 	// 	echo "failed upload";
	// 	// }
	//
	//
	// 	// $target_file = $upload_path.basename($_FILES["pdf"]["name"]);
	// 	// $file_name = $_FILES['pdf']['tmp_name'];
	// 	// move_uploaded_file($file_name, $target_file);
	// }

}
