<div class="col-10 mb-4" style="margin-top:40px;">
  <div class="container">
    <h2>Daftar Pelanggan</h2>
    <hr />
    <!-- <button type="button" class="btn btn-outline-success"> -->
    <button class="btn btn-success" type="button" data-toggle="modal" data-target="#addn_cust_modl">
      <i class="fas fa-plus"></i> Pelanggan Baru
    </button>
    <hr />
    <!-- </button> -->
    <!-- <div class="table-responsive"> -->
      <table class="table table-striped table-bordered" style="width:100%;" id="customer_list_table">
        <thead>
          <tr>
            <th style="width: 6%;">Title</th>
            <th>Nama</th>
            <th style="width: 12%;">Telp.</th>
            <th style="width: 20%;">Alamat</th>
            <th style="width: 15%;">Ukuran</th>
            <th style="width: 10%;">Aksi</th>
          </tr>
        </thead>
        <tbody id="customer_list_body">

        </tbody>
      </table>
    <!-- </div> -->
  </div>
</div>

<!-- add customer modal start -->
<div class="modal fade" id="addn_cust_modl" tabindex="-1" role="dialog" aria-labelledby="addn_cust" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-dark text-white">
        <h5 class="modal-title" id="addn_cust">Customer Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="fas fa-times text-white"></i>
        </button>
      </div>
      <div class="modal-body">

        <form name="form_addn_cust" id="form_addn_cust">

          <div class="row" style="margin-bottom:10px;">
            <div class="col-1">
              <label for="cust_titl" style="font-size:0.8em;">Title</label>
            </div>
            <div class="col-2" style="padding-right:0px;">
              <select class="form-control" name="cust_titl" required>
                <option value="1">Mr.</option>
                <option value="2">Ms.</option>
              </select>
            </div>
          </div>

          <div class="row">
            <div class="col-1">
              <label for="cust_name" style="font-size:0.8em;">Customer Name</label>
            </div>
            <div class="col">
              <input class="form-control" type="text" maxlength="64" name="cust_name" id="addn_csnm" placeholder="Customer Name" required>
              <small class="text-danger" id="error_cust_name"></small>
            </div>
          </div>

          <div class="row">
            <div class="col-1">
              <label for="cust_phnn" style="font-size:0.8em;">Phone Number</label>
            </div>
            <div class="col-6">
              <input class="form-control" type="text" maxlength="32" name="cust_phnn" id="cust_phnn" placeholder="Phone Number" required>
              <small class="text-danger" id="error_cust_phnn"></small>
            </div>
          </div>

          <div class="row">
            <div class="col-1">
              <label for="cust_addr" style="font-size:0.8em;">Address</label>
            </div>
            <div class="col">
              <textarea class="form-control" name="cust_addr" rows="3" placeholder="Address" cols="150" style="resize:none;"></textarea>
            </div>
          </div>

          <hr />

          <div class="row">
            <div class="col-6">
            </div>
            <div class="col-3">
              <button class="btn btn-danger w-100" type="button" name="clos_cust" id="clos_cust" value="reset" data-dismiss="modal">CANCEL</button>
            </div>
            <div class="col-3">
              <button class="btn btn-success w-100" type="button" name="save_cust" id="save_cust" value="submit">SAVE</button>
            </div>
          </div>

        </form>

      </div>
    </div>
  </div>
</div>
<!-- add customer modal end -->

<script>
$(document).ready(function(){

  var customerList = <?php echo json_encode($customerList); ?>;
  var measureList = <?php echo json_encode($measureList); ?>;
  var baseUrl = window.location;

  function showTableData (dataForTable) {
    $('#customer_list_body').empty();
    for (var i = 0; i < dataForTable.length; i++) {
      var categoryList = [];
      for (var j = 0; j < measureList.length; j++) {
        if (measureList[j]['cust_indx'] == dataForTable[i]['cust_indx']) {
          categoryList.push(measureList[j]['cate_indx']);
        }
      }
      $('#customer_list_body').append('<tr id="cust_'+dataForTable[i]['cust_indx']+'"><td>'+
        (dataForTable[i]['cust_titl'] == 1 ? 'Mr.' : 'Ms.')+'</td><td>'+dataForTable[i]['cust_name']+'</td>'+
        '<td>'+dataForTable[i]['cust_phnn']+'</td>'+
        '<td>'+dataForTable[i]['cust_addr']+'</td>'+
        '<td>'+dataForTable[i]['cust_indx']+'</td>'+
        '<td><a href="'+baseUrl+'/show_cust/'+dataForTable[i]['cust_indx']+'" role="button" class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i> Edit</a></td></tr>');
    }
  }
  // console.log(orderList);
  showTableData(customerList);

  $('#customer_list_table').DataTable({
    "order": [[ 1,'asc' ]]
  });

  // add new customer check validation
  function chck_cust () {
    var form_addn_cust = $("#form_addn_cust");
    form_addn_cust.validate({
      errorPlacement: function ($error, $element) {
        var name = $element.attr("name");
        $("#error_" + name).append($error);
      },
      rules: {
        cust_name:{
          required:true,
          maxlength:64
        },
        cust_phnn:{
          required:true,
          minlength:5,
          maxlength:32
        }
      },
      messages: {
        cust_name: {
          required:"Name is required",
          maxlength:"Name max 64 chars"
        },
        cust_phnn:{
          required:"Phone number is required",
          minlength:"Phone min 5 chars",
          maxlength:"Phone max 32 chars"
        }
      }
    });
    return form_addn_cust.valid();
  }

  // save new customer to database
  function cust_save () {
    $.ajax({
      url:"<?php echo base_url('order/cust_save'); ?>",
      method:"POST",
      data:$('#form_addn_cust').serialize(),
      success:function(dt)
      {
        var data = JSON.parse(dt);
        if (!data.msg) {
          alert('Phone number exist.');
        } else {
          alert('Data saved.');
          $('#clos_cust').click();
          window.location.href = baseUrl;
        }
      }
    });
  }

});
</script>
