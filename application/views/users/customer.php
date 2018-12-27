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

<!-- edit customer modal start -->
<div class="modal fade" id="edit_cust_modl" tabindex="-1" role="dialog" aria-labelledby="edit_cust" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-dark text-white">
        <h5 class="modal-title" id="edit_cust">Customer Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="fas fa-times text-white"></i>
        </button>
      </div>
      <div class="modal-body">

        <form name="form_edit_cust" id="form_edit_cust">

          <input type="hidden" name="edit_indx" id="edit_indx" required>
          <div class="row" style="margin-bottom:10px;">
            <div class="col-1">
              <label for="edit_titl" style="font-size:0.8em;">Title</label>
            </div>
            <div class="col-2" style="padding-right:0px;">
              <select class="form-control" name="edit_titl" id="edit_titl" required>
                <option value="1">Mr.</option>
                <option value="2">Ms.</option>
              </select>
            </div>
          </div>

          <div class="row">
            <div class="col-1">
              <label for="edit_name" style="font-size:0.8em;">Customer Name</label>
            </div>
            <div class="col">
              <input class="form-control" type="text" maxlength="64" name="edit_name" id="edit_name" required>
              <small class="text-danger" id="error_edit_name"></small>
            </div>
          </div>

          <div class="row">
            <div class="col-1">
              <label for="edit_phnn" style="font-size:0.8em;">Phone Number</label>
            </div>
            <div class="col-6">
              <input class="form-control" type="text" maxlength="32" name="edit_phnn" id="edit_phnn" required>
              <small class="text-danger" id="error_edit_phnn"></small>
            </div>
          </div>

          <div class="row">
            <div class="col-1">
              <label for="edit_addr" style="font-size:0.8em;">Address</label>
            </div>
            <div class="col">
              <textarea class="form-control" name="edit_addr" id="edit_addr" rows="3" placeholder="Address" cols="150" style="resize:none;"></textarea>
            </div>
          </div>

          <hr />

          <div class="row">
            <div class="col-6">
            </div>
            <div class="col-3">
              <button class="btn btn-danger w-100" type="button" name="clos_edit" id="clos_edit" value="reset" data-dismiss="modal">CANCEL</button>
            </div>
            <div class="col-3">
              <button class="btn btn-success w-100" type="button" name="save_edit" id="save_edit" value="submit">SAVE</button>
            </div>
          </div>

        </form>

      </div>
    </div>
  </div>
</div>
<!-- edit customer modal end -->

<!-- measurement modal start -->
<div class="modal fade" id="measurement_modal" tabindex="-1" role="dialog" aria-labelledby="measurement_modal_title" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-dark text-white">
        <h5 class="modal-title" id="measurement_modal_title">Data Ukuran</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="fas fa-times text-white"></i>
        </button>
      </div>
      <div class="modal-body">

        <form name="form_data_ukuran" id="form_data_ukuran">


          <hr />

          <div class="row">
            <div class="col-6">
            </div>
            <div class="col-3">
              <button class="btn btn-danger w-100" type="button" name="close_ukuran" id="close_ukuran" value="reset" data-dismiss="modal">CANCEL</button>
            </div>
            <div class="col-3">
              <button class="btn btn-success w-100" type="button" name="simpan_ukuran" id="simpan_ukuran" value="submit">SAVE</button>
            </div>
          </div>

        </form>

      </div>
    </div>
  </div>
</div>
<!-- edit customer modal end -->

<script>
$(document).ready(function(){

  var customerList = <?php echo json_encode($customerList); ?>;
  var measureList = <?php echo json_encode($measureList); ?>;
  var baseUrl = window.location;
  var customerchoosen = {};

  // fungsi menampilkan modal edit customer
  $(document).on("click", ".open-EditCustomer", function(){
    var index = $(this).data('id');
    for (var i = 0; i < customerList.length; i++) {
      if (customerList[i]['cust_indx'] == index) {
        customerchoosen.index = index;
        customerchoosen.title = customerList[i]['cust_titl'];
        customerchoosen.name = customerList[i]['cust_name'];
        customerchoosen.phonenumber = customerList[i]['cust_phnn'];
        customerchoosen.address = customerList[i]['cust_addr'];
      }
    }
    // console.log(customerchoosen);
    $('.modal-body #edit_indx').val(customerchoosen.index);
    $('.modal-body #edit_titl').val(customerchoosen.title);
    $('.modal-body #edit_name').val(customerchoosen.name);
    $('.modal-body #edit_phnn').val(customerchoosen.phonenumber);
    $('.modal-body #edit_addr').html(customerchoosen.address);
    $('#edit_cust_modl').modal('show');
  });

  $(document).on('click', '.open-Measurement', function(){
    var index = $(this).data('id');
    var measurementData = [];
    for (var j = 0; j < measureList.length; j++) {
      if (measureList[j]['cust_indx'] == index) {
        var dataUkuran = {};
        dataUkuran.index = measureList[j]['mssr_indx'];
        dataUkuran.category_index = measureList[j]['cate_indx'];
        dataUkuran.ukuran = measureList[j]['mssr_size'];
        dataUkuran.tanggal = measureList[j]['mssr_date'];
        measurementData.push(dataUkuran);
        // console.log(measureList[j]['mssr_size']);
      }
    }
    // console.log(measurementData);

    // TODO: open measurement modal, create measurement modal
  });

  // fungsi menampilkan data table
  function showTableData (dataForTable) {
    $('#customer_list_body').empty();
    for (var i = 0; i < dataForTable.length; i++) {
      // var categoryList = [];
      $('#customer_list_body').append('<tr id="cust_'+dataForTable[i]['cust_indx']+'"><td>'+
        (dataForTable[i]['cust_titl'] == 1 ? 'Mr.' : 'Ms.')+'</td>'+
        '<td>'+dataForTable[i]['cust_name']+'</td>'+
        '<td>'+dataForTable[i]['cust_phnn']+'</td>'+
        '<td>'+dataForTable[i]['cust_addr']+'</td>'+
        '<td><button class="btn btn-sm btn-outline-success open-Measurement" data-toggle="modal" data-id="'+dataForTable[i]['cust_indx']+'"><i class="fas fa-edit"></i> Ukuran</button></td>'+
        '<td><button class="btn btn-sm btn-outline-primary open-EditCustomer disabled" data-toggle="modal" data-id="'+dataForTable[i]['cust_indx']+'"><i class="fas fa-edit"></i> Edit</button></td></tr>');
    }
  }

  showTableData(customerList);

  // data table order
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

  // onclick save customer to database
  $('#save_cust').on('click', function(){
    if (chck_cust()) {
      cust_save();
    }
  });

  $('#save_edit').on('click', function(){
    var inputTitle = $('#edit_titl').val();
    var inputName = $('#edit_name').val();
    var inputPhone = $('#edit_phnn').val();
    var inputAddr = $('#edit_addr').val();
    if (inputTitle == customerchoosen.title && inputName == customerchoosen.name && inputPhone ==customerchoosen.phonenumber &&
      inputAddr == customerchoosen.address) {
        $('#edit_cust_modl').modal('hide');
        customerchoosen = {};
    } else {
      $.ajax({
        url:"<?php echo base_url('order/cust_edit'); ?>", // TODO: create cust_edit function in controller
        method:"POST",
        data:$('#form_edit_cust').serialize(),
        success:function(dt)
        {
          var data = JSON.parse(dt);
          if (!data.msg) {
            alert('Phone number exist.');
          } else {
            alert('Perubahan data tersimpan.');
            $('#clos_edit').click();
            window.location.href = baseUrl;
          }
        }
      });
    }
  });

});
</script>
