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

<!-- add item modal start -->
<div class="modal fade" id="addn_item_modl" tabindex="-1" role="dialog" aria-labelledby="addn_item" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-dark text-white">
        <h5 class="modal-title" id="addn_cust">Add item</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="fas fa-times text-white"></i>
        </button>
      </div>
      <div class="modal-body">

        <form name="form_addn_item" id="form_addn_item">

          <div class="row" style="margin-bottom:10px;">
            <div class="col-2">
              <label for="item_ctgy" style="font-size:0.8em;">Item Category</label>
            </div>
            <div class="col-9">
              <select class="form-control" name="item_ctgy" id="item_ctgy" required>
                <option value="" disabled selected>Please Select Category</option>
              </select>
            </div>
          </div>

          <div class="row" style="margin-bottom:10px;">
            <div class="col-2">
              <label for="item_type" style="font-size:0.8em;">Item Type</label>
            </div>
            <div class="col-9">
              <select class="form-control" name="item_type" id="item_type" required>
                <option value="" disabled selected>Select Category First</option>
              </select>
            </div>
          </div>

          <div class="row">
            <div class="col-2">
              <label for="item_qtty" style="font-size:0.8em;">Item Quantity</label>
            </div>
            <div class="col-3">
              <input class="form-control" type="number" name="item_qtty" id="item_qtty" value="1" required />
            </div>
          </div>

          <div class="row">
            <div class="col-2">
              <label for="item_pric" style="font-size:0.8em;">Item Price</label>
            </div>
            <div class="col-9">
              <input class="form-control" type="number" name="item_pric" id="item_pric" value="0" required />
            </div>
          </div>

          <div class="row">
            <div class="col-2">
              <label for="item_nett" style="font-size:0.8em;">Nett Price</label>
            </div>
            <div class="col-9">
              <input class="form-control" type="number" name="item_nett" id="item_nett" value="0" required readonly />
            </div>
          </div>

          <hr />

          <div class="row">
            <div class="col-6">
            </div>
            <div class="col-3">
              <button class="btn btn-danger w-100" type="button" name="clos_item" id="clos_item" value="reset" data-dismiss="modal">CANCEL</button>
            </div>
            <div class="col-3">
              <button class="btn btn-success w-100" type="button" name="save_item" id="save_item" value="submit">ADD</button>
            </div>
          </div>

        </form>

      </div>
    </div>
  </div>
</div>
<!-- add item modal end -->

<!-- add search cust start -->
<div class="modal fade" id="srch_cust_modl" tabindex="-1" role="dialog" aria-labelledby="srch_cust" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document" style="overflow-y:initial !important;">
    <div class="modal-content">
      <div class="modal-header bg-dark text-white">
        <h5 class="modal-title" id="srch_cust">Search Customer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="fas fa-times text-white"></i>
        </button>
      </div>
      <div class="modal-body" style="height: 60vh; overflow-y:auto;">

        <form name="form_srch_cust" id="form_srch_cust">

          <div class="row" style="margin-bottom:10px;">
            <div class="col-2">
              <label for="srch_kywd" style="font-size:0.8em;">Search</label>
            </div>
            <div class="col-9 pr-0">
              <input class="form-control" type="text" name="srch_kywd" id="srch_kywd" placeholder="Name, Address or Phone Number" />
            </div>
            <div class="col-1 pl-0">
              <button class="btn btn-outline-secondary border-0" type="button" id="rset_kywd">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>

          <div class="row-fluid" style="margin-bottom:10px;">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th style="width:8%;">No.</th>
                    <th style="width:10%;">Title</th>
                    <th style="width:35%;">Name</th>
                    <th>Phone</th>
                    <th>Address</th>
                  </tr>
                </thead>
                <tbody id="cust_list">

                </tbody>
              </table>
            </div>
          </div>

          <hr />

        </form>
      </div>

      <div class="modal-footer">
        <div class="row" style="width:100%;">
          <div class="col-6">
          </div>
          <div class="col-3">
            <button class="btn btn-danger w-100" type="button" name="clos_srch" id="clos_srch" value="reset" data-dismiss="modal">CANCEL</button>
          </div>
          <div class="col-3">
            <button class="btn btn-success w-100" type="button" name="slct_cust" id="slct_cust" value="submit">ADD</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- add item modal end -->

<script>
  $(document).ready(function(){

    var listCustomer = <?php echo json_encode($list_cust); ?>;
    var categories = <?php echo json_encode($category); ?>;
    var itemCategory = <?php echo json_encode($item_cate); ?>;
    var numOfItems = 0;
    var itemInCart = [];
    var customerContainer = $('#cust_list');
    var customers = [];

    // show list of customers
    function showCustomers (list) {
      $('#cust_list').empty();
      var selectedOption;
      customers = [];
      if (list.length > 0) {
        for (var i = 0; i < list.length; i++) {
          $('#cust_list').append('<tr name="cust_optn" id="'+list[i].cust_indx+'"><td>'+(i+1)+'</td><td>'+(list[i].cust_titl == 1 ? "Mr." : "Ms.")+
          '</td><td>'+list[i].cust_name+'</td><td>'+list[i].cust_phnn+'</td><td>'+
          list[i].cust_addr+'</td></tr>');
          customers.push(list[i]);
        }
        $('tr[name="cust_optn"]').on('click', function(event){
          if (selectedOption != null) {
            selectedOption.removeClass('table-active');
          }
          $(this).addClass('table-active');
          selectedOption = $(this);
        });
      } else {
        $('#cust_list').append('<tr><td colspan="5">No customer recorded.</td></tr>');
      }
    }

    // add customer button click, return value to order
    $('#slct_cust').on('click',function(){
      if (!$('tr[name="cust_optn"]').hasClass('table-active')) {
        alert('No Customer Selected.');
      } else {
        var selectedId = $('tr.table-active[name="cust_optn"]').attr('id');
        $('#cust_indx').val(selectedId);
        for (var i = 0; i < customers.length; i++) {
          if (customers[i].cust_indx == selectedId) {
            $('#cust_name').val(customers[i].cust_name);
            $('#print_nama').text(customers[i].cust_name);
          }
        }
        $('#srch_cust_modl').modal('hide');
      }
    });

    showCustomers(listCustomer);

    // add timer to search by keyword
    var timer;
    $('#srch_kywd').keyup(function(){
      clearTimeout(timer);
      timer = setTimeout(function (event) {
        var searchList = searchAndGet($('#srch_kywd').val());
        showCustomers(searchList);
      },800);
    });

    // get customer with keyword
    function searchAndGet(keyword) {
      var result = [];
      for (var i = 0; i < listCustomer.length; i++) {
        if (listCustomer[i].cust_name.toLowerCase().includes(keyword.toLowerCase()) ||
        listCustomer[i].cust_addr.toLowerCase().includes(keyword.toLowerCase()) ||
        listCustomer[i].cust_phnn.includes(keyword.toLowerCase())) {
          result.push(listCustomer[i]);
        }
      }
      return result;
    }

    // reset search keyword and customers list
    $('#rset_kywd').on('click',function(){
      $('#srch_kywd').val('');
      showCustomers(listCustomer);
    });

    // add category to combobox
    for (var i = 0; i < categories.length; i++) {
      $('#item_ctgy').append('<option value="'+categories[i].cate_indx+'">'+categories[i].cate_name+'</option>');
    }

    // add item type after click category
    $('#item_ctgy').on('change',function(){
      var selectedCategory = this.value;
      $('#item_type').empty();
      $('#item_type').append('<option value="" disabled selected>Please Select Category</option>');
      for (var i = 0; i < itemCategory.length; i++) {
        if (itemCategory[i].cate_indx == selectedCategory) {
          $('#item_type').append('<option value="'+itemCategory[i].item_cate_indx+'">'+itemCategory[i].item_name+'</option>');
        }
      }
    });

    // calculate after focus out in price
    $('#item_pric').on('focusout', function(){
      $('#item_nett').val(calculateNettPrice());
    });

    // calculate after focus out in quatity
    $('#item_qtty').on('focusout', function(){
      $('#item_nett').val(calculateNettPrice());
    });

    // calculating nett price
    function calculateNettPrice(){
      var price = $('#item_pric').val();
      var quantity = $('#item_qtty').val();
      return quantity * price;
    }

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
            var nmcs = $('#addn_csnm').val();
            alert(nmcs+"-"+data.msg);
            alert('Data saved.');
            $('#cust_indx').val(data.msg);
            $('#cust_name').val(nmcs);
            $('#print_nama').text(nmcs);
            $('#clos_cust').click();
          }
        }
      });
    }

    // button save new customer click
    $('#save_cust').click(function(){
      if (chck_cust()) {
        cust_save();
      }
    });

    // button add item click
    $('#save_item').click(function(){
      var price = $('#item_pric').val();
      if (price != 0) {
        item_save();
      } else {
        alert('Price needed.');
      }
    });

    // add item to order list
    function item_save(){
      var price = $('#item_pric').val();
      var quantity = $('#item_qtty').val();
      var type = $('#item_type').val();
      var typeName = $('#item_type option:selected').text();
      var cate = $('#item_ctgy').val();
      var cateName = $('#item_ctgy option:selected').text();

      var itemToPut = quantity+';'+type+';'+price;
      var itemToSHow = quantity+'x '+cateName+' : '+typeName;

      // var additem = {qty: quantity, item: cateName+' - '+typeName, prc: price};
      // itemInvoice.push(addn_item);
      itemInCart.push(itemToPut);

      // alert(itemInvoice[0].qty);
      numOfItems++;
      for (var i = 0; i < itemInCart.length; i++) {
        if ((numOfItems-1) == i) {
          $('#order_container').append('<input type="hidden" name="ordr_item[]" id="orderIndex_'+numOfItems+'" class="form-control" value="'+itemInCart[i]+'" />');
          $('#order_show').append('<tr id="row'+numOfItems+'"><td style="padding:2px 0px 5px 0px;"><input type="text" name="" placeholder="Item" class="form-control ordr-list" value="'+itemToSHow+'" readonly /> </td>'+
          '<td style="padding:2px 0px 5px 5px;width:5%;"><button class="btn btn-outline-danger border-0 btn_remove d-print-none" type="button" name="remo_item" id="'+numOfItems+'"><i class="fas fa-minus-circle fa-lg"></i></button></td></tr>');
          $('#daftar_belanja').append('<tr id="daftar_'+numOfItems+'"><td class="text-center">'+(i+1)+'</td><td class="text-center">'+itemInCart[i].split(";")[0]+' pcs</td><td>'+itemToSHow.split("x")[1]+'</td><td class="text-right">'+itemInCart[i].split(";")[2]+'</td><td class="text-right" style="padding-right:20px;">'+(itemInCart[i].split(";")[0]*itemInCart[i].split(";")[2])+'</td></tr>');
        }
      }

      $('#clos_item').click();
      var totalFees = parseInt($('#ordr_fees').val());
      totalFees += parseInt(price*quantity);
      $('#ordr_fees').val(totalFees);
      $('#biaya').text(totalFees);
      var dp = $('#ordr_dopy').val();
      if (dp != 0) {
        if (totalFees < dp) {
          dp = totalFees;
          $('#ordr_dopy').val(dp);
        }
        $('#ordr_accr').val(totalFees - dp);
        $('#sisa').text((totalFees - dp));
      } else {
        $('#ordr_accr').val(totalFees - dp);
        $('#sisa').text((totalFees - dp));
      }
    }

    // remove item on click
    $(document).on('click', '.btn_remove', function(){
      var rowId = $(this).attr("id");
      $('#row'+rowId+'').remove();
      $('#orderIndex_'+rowId+'').remove();
      $('#daftar_'+rowId+'').remove();
      var minPrc = itemInCart[rowId-1].split(";")[2];
      var minQty = itemInCart[rowId-1].split(";")[0];
      var minFee = minQty * minPrc;
      var totalFees = $('#ordr_fees').val();
      totalFees -= minFee;
      $('#ordr_fees').val(totalFees);
      $('#biaya').text(totalFees);
    });

  });
</script>
