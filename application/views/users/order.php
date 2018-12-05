<div class="col-10" style="margin-top:40px;">
  <div class="container">
    <h2>Daftar Pesanan</h2>
    <hr />
    <!-- <button type="button" class="btn btn-outline-success"> -->
    <a class="btn btn-success" role="button" href="<?php echo base_url('order/ordr_addn'); ?>">
      <i class="fas fa-plus"></i> Pesanan Baru
    </a>
    <hr />
    <!-- </button> -->
    <!-- <div class="table-responsive"> -->
      <table class="table table-striped table-bordered" style="width:100%;" id="order_list_table">
        <thead>
          <tr>
            <th style="width: 10%;">Nota</th>
            <th>Nama</th>
            <th style="width: 10%;">Tgl.Order</th>
            <th style="width: 10%;">Tgl.Selesai</th>
            <th>Status</th>
            <th style="width: 10%;">Check</th>
          </tr>
        </thead>
        <tbody id="order_list_body">

        </tbody>
      </table>
    <!-- </div> -->
  </div>
</div>

<script>
$(document).ready(function(){

  var orderList = <?php echo json_encode($list_order); ?>;

  function showTableData (dataForTable) {
    $('#order_list_body').empty();
    for (var i = 0; i < dataForTable.length; i++) {
      $('#order_list_body').append('<tr><td>'+dataForTable[i]['ordr_nmbr']+'</td><td>'+dataForTable[i]['cust_name']+'</td>'+
        '<td>'+dataForTable[i]['ordr_date'].split('-')[2]+'-'+dataForTable[i]['ordr_date'].split('-')[1]+'-'+dataForTable[i]['ordr_date'].split('-')[0]+'</td>'+
        '<td>'+dataForTable[i]['ordr_fndt'].split('-')[2]+'-'+dataForTable[i]['ordr_fndt'].split('-')[1]+'-'+dataForTable[i]['ordr_fndt'].split('-')[0]+'</td>'+
        '<td>'+(dataForTable[i]['accr_stat'] == 1 ? 'Lunas' : 'Belum Lunas')+'</td>'+
        '<td><a role="button" href="#" class="btn btn-sm btn-outline-primary disabled"><i class="fas fa-file-invoice"></i> Nota</button></td></tr>');
    }
  }
  // console.log(orderList);
  showTableData(orderList);

  $('#order_list_table').DataTable({
    "order": [[ 4,'asc' ],[ 3, "asc" ]]
  });

});
</script>
