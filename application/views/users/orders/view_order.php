<div class="col-10" style="margin-top:40px;">
  <div class="container" id="ordr_page">
    <h2>
      Nota <?php echo $detail->ordr_nmbr; ?>
      <a href="<?php echo base_url('order'); ?>" role="button" class="btn btn-dark btn-sm">
        <i class="fas fa-arrow-left float-right"> kembali</i>
      </a>
    </h2>
    <hr />
    <div class="card" id="printable_check" style="margin-bottom:50px;">

      <!-- card body start -->
      <div class="card-body">

        <!-- form start -->
        <div class="form-group">
          <form name="form_addn_ordr" id="form_addn_ordr">

            <!-- <input type="hidden" name="stor_indx" value="<?php // echo $stor_indx; ?>" required> -->

            <div class="row mb-2">
              <div class="col-3">
                <label for="ordr_nmbr" style="font-size:0.8em;">Nomer Nota</label>
                <input class="form-control" type="text" maxlength="12" name="ordr_nmbr" value="<?php echo $detail->ordr_nmbr; ?>" readonly />
              </div>
              <div class="col-3 offset-3">
                <label for="ordr_date" style="font-size:0.8em;">Tanggal Pesan</label>
                <input class="form-control" type="date" name="ordr_date" id="ordr_date" value="<?php echo $detail->ordr_date; ?>" readonly />
                <!-- date now -->
              </div>
              <div class="col-3">
                <label for="ordr_fndt" style="font-size:0.8em;">Tanggal Selesai</label>
                <input class="form-control" type="date" name="ordr_fndt" id="ordr_fndt" value="<?php echo $detail->ordr_fndt; ?>" readonly />
              </div>
            </div>

            <div class="row">
              <div class="col-12">
                <label for="cust_name" style="font-size:0.8em;">Nama Pelanggan</label>
              </div>
              <div class="col-6 pr-0">
                <input class="form-control" type="text" name="cust_name" id="cust_name" maxlength="32" value="<?php echo $detail->cust_name; ?>" placeholder="Nama Pelanggan" readonly />
              </div>
              <!-- <div class="col-2 pl-0 d-print-none" style="display:inline-block;">
                <button class="btn btn-outline-primary border-0" type="button" name="srch_cust" data-toggle="modal" data-target="#srch_cust_modl">
                  <i class="fas fa-search fa-lg"></i>
                </button>
                <button class="btn btn-outline-primary border-0" type="button" name="addn_cust" data-toggle="modal" data-target="#addn_cust_modl">
                  <i class="fas fa-plus-circle fa-lg"></i>
                </button>
              </div> -->
            </div>

            <!-- <input type="hidden" name="cust_indx" id="cust_indx" required> -->

            <hr />

            <div class="row">
              <div class="col-1">
                <label for="cust_ordr" style="font-size:0.8em;">Daftar Pesanan</label>
              </div>
              <div class="col">
                <div class="table-responsive">
                  <table class="table table-striped border-0" id="item_orders" style="margin-bottom:5px;">
                    <thead>
                      <tr>
                        <th style="width:8%;">No.</th>
                        <th style="width:12%;" class="text-center">Qty</th>
                        <th>Barang</th>
                        <th style="width:14%;" class="text-right">Harga</th>
                        <th style="width:16%;" class="text-right">Total</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i=1; ?>
                      <?php foreach ($item_detail as $item): ?>

                        <tr>
                          <td><?php echo $i.'.'; ?></td>
                          <td class="text-center"><?php echo $item['quantity'].' pcs'; ?></td>
                          <td><?php echo $item['category']. ' - ' .$item['type']; ?></td>
                          <td class="text-right"><?php echo $item['price']; ?></td>
                          <td class="text-right"><?php echo $item['quantity']*$item['price']; ?></td>
                        </tr>

                      <?php $i++; ?>
                      <?php endforeach; ?>
                    </tbody>
                    <!-- <div id="order_show">

                    </div> -->
                  </table>
                </div>
              </div>
            </div>

            <!-- <div id="order_container">

            </div> -->

            <div class="row">
              <div class="col-1">
                <label for="ordr_detl" style="font-size:0.8em;">Keterangan</label>
              </div>
              <div class="col">
                <textarea class="form-control" name="ordr_detl" rows="3" cols="80" style="resize:none;" readonly><?php echo $detail->ordr_detl; ?></textarea>
                <!-- <input class="form-control" type="text" name="ordr_detl" maxlength="256" placeholder="Other details"> -->
              </div>
            </div>

            <hr/>

            <div class="row" style="margin-bottom:5px;">
              <div class="col-1 offset-7">
                <label for="ordr_fees" style="font-size:0.8em;">Biaya</label>
              </div>
              <div class="col">
                <input style="text-align:right;" class="form-control" type="number" name="ordr_fees" id="ordr_fees" min="0" value="0" readonly />
              </div>
            </div>

            <div class="row" style="margin-bottom:5px;">
              <div class="col-1 offset-7">
                <label for="ordr_dopy" style="font-size:0.8em;">Bayar</label>
              </div>
              <div class="col">
                <input style="text-align:right;" class="form-control" type="number" name="ordr_dopy" id="ordr_dopy" min="0" step="1000" value="0" readonly />
              </div>
            </div>

            <div class="row" style="margin-bottom:5px;">
              <div class="col-1 offset-7">
                <label for="ordr_accr" style="font-size:0.8em;">Sisa</label>
              </div>
              <div class="col">
                <input style="text-align:right;" class="form-control" type="number" name="ordr_accr" id="ordr_accr" min="0" placeholder="0" readonly />
              </div>
            </div>

            <hr />

            <div class="row d-print-none">
              <div class="col-2 offset-8">
                <button class="btn btn-success w-100 <?php echo $detail->accr_stat == 1 ? 'disabled': '' ; ?>" type="button" name="paid" id="paid" data-toggle="modal" data-target="#paid_modl">
                  BAYAR
                </button>
              </div>
              <div class="col-2">
                <button class="btn btn-warning w-100" type="button" name="prnt" id="prnt" value="submit">PRINT</button>
              </div>
            </div>

          </form>
        </div>
        <!-- form end -->

      </div>
      <!-- card body end -->


    </div>
  </div>
</div>

<!-- modal start -->
<div class="modal fade" id="paid_modl" tabindex="-1" role="dialog" aria-labelledby="paid_modl_titl" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-dark text-white">
        <h5 class="modal-title" id="paid_modl_titl">Pembayaran</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="fas fa-times text-white"></i>
        </button>
      </div>
      <div class="modal-body">

        <form name="payment_process" id="payment_process">

          <input type="hidden" name="order_number" value="<?php echo $detail->ordr_nmbr; ?>">

          <div class="row" style="margin-bottom:10px;">
            <div class="col-2">
              <label for="fee" style="font-size:0.8em;">Biaya</label>
            </div>
            <div class="col-3" style="padding-right:0px;">
              <input type="number" class="form-control" min="0" name="fee" id="fee" value="<?php echo $detail->accr_amnt; ?>" readonly />
            </div>
          </div>

          <div class="row" style="margin-bottom:10px;">
            <div class="col-2">
              <label for="paid_done" style="font-size:0.8em;">Terbayar</label>
            </div>
            <div class="col-3" style="padding-right:0px;">
              <input class="form-control" type="number" name="paid_done" id="paid_done" value="<?php echo $payment; ?>" readonly />
              <!-- <small class="text-danger" id="error_cust_name"></small> -->
            </div>
          </div>

          <div class="row" style="margin-bottom:10px;">
            <div class="col-2">
              <label for="addu_pymt" style="font-size:0.8em;">Pembayaran</label>
            </div>
            <div class="col-3" style="padding-right:0px;">
              <input class="form-control" type="number" name="addu_pymt" id="addu_pymt" value="0" min="0" required />
              <small class="text-danger" id="error_addu_pymt"></small>
            </div>
          </div>

          <hr />

          <div class="row">
            <div class="col-6">
            </div>
            <div class="col-3">
              <button class="btn btn-danger w-100" type="button" name="clos_pymt" id="clos_pymt" value="reset" data-dismiss="modal">CANCEL</button>
            </div>
            <div class="col-3">
              <button class="btn btn-success w-100" type="button" name="save_pymt" id="save_pymt" value="submit">SIMPAN</button>
            </div>
          </div>

        </form>

      </div>
    </div>
  </div>
</div>
<!-- modal end -->

<script>
  $(document).ready(function(){

    var dateStart = <?php echo $detail->ordr_date; ?>;
    var dateFinish = <?php echo $detail->ordr_fndt; ?>;
    var orderFees = <?php echo $detail->accr_amnt; ?>;
    // var custName = <?php //echo $detail->cust_name; ?>;
    var payment = <?php echo $payment; ?>;
    var itemList = <?php echo json_encode($item_detail); ?>;

    $('#ordr_fees').val(orderFees);
    $('#ordr_dopy').val(payment);
    $('#ordr_accr').val(orderFees - payment);
    $('#biaya').text(orderFees);
    $('#bayar').text(payment);
    $('#sisa').text(orderFees - payment);
    $('#print_tanggal').text($('#ordr_date').val().split('-')[2]+'-'+$('#ordr_date').val().split('-')[1]+'-'+$('#ordr_date').val().split('-')[0]);
    $('#print_nama').text($('#cust_name').val());
    $('#print_tgl_selesai').text($('#ordr_fndt').val().split('-')[2]+'-'+$('#ordr_fndt').val().split('-')[1]+'-'+$('#ordr_fndt').val().split('-')[0]);

    // show add paid modal on click
    $('#paid').click(function(){
      $('#paid_modl').modal('show');
    });

    for (var i = 0; i < itemList.length; i++) {
      $('#daftar_belanja').append('<tr><td class="text-center">'+(i+1)+'.</td>'+
          '<td class="text-center">'+itemList[i]['quantity']+' pcs</td>'+
          '<td>'+itemList[i]['category']+ ' - ' +itemList[i]['type']+'</td>'+
          '<td class="text-right">'+itemList[i]['price']+'</td>'+
          '<td class="text-right" style="padding-right:20px;">'+itemList[i]['quantity']*itemList[i]['price']+'</td></tr>');
    }

    // print order
    function ordr_prnt(divId){
      var content = document.getElementById(divId).innerHTML;
      var title = $('input[name="ordr_nmbr"]').val();
      var mywindow = window.open('', title, 'fullscreen=yes');
      mywindow.document.write('<html lang="en"><head><title>'+title+'</title>');
      mywindow.document.write('<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">'+
      '<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/modstyles.css">'+
      '<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/all.min.css">')
      mywindow.document.write('</head><body>');
      mywindow.document.write(content);
      mywindow.document.write('</body></html>');
      $(divId, mywindow.document).removeClass('d-none');
      mywindow.onafterprint = function(){
        ordr_save();
      };

      setTimeout(function(){
        mywindow.print();
        mywindow.close();
      }, 1000);
    }

    // button on print click
    $('#prnt').click(function(){
      ordr_prnt('mstr_invoice');
    });

    $('#save_pymt').on('click', function() {
      var pembayaran = $('#addu_pymt').val();
      var biayaaaa = $('#fee').val();
      var sudahBayar = $('#paid_done').val();
      var sisaBisaBayar = biayaaaa - sudahBayar;
      if (pembayaran > sisaBisaBayar) {
        alert('Maksimal pembayaran '+sisaBisaBayar);
      } else {
        $.ajax({
          url:"<?php echo base_url('order/addu_pymt'); ?>",
          method:"POST",
          data:$('#payment_process').serialize(),
          success:function(dt)
          {
            // console.log(dt);
            var data = JSON.parse(dt);
            if (data.url == "") {
              alert(data.msg);
            } else {
              alert(data.msg);
              window.location.href = "<?php echo base_url(); ?>" + data.url + "";
              $('#clos_pymt').click();
            }
          }
        });
      }
    });

  });
</script>
