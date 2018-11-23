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
              <input class="form-control" type="number" name="item_nett" value="0" required readonly />
            </div>
          </div>

          <hr />

          <div class="row">
            <div class="col-6">
            </div>
            <div class="col-3">
              <button class="btn btn-danger w-100" type="button" name="clos_cust" id="clos_item" value="reset" data-dismiss="modal">CANCEL</button>
            </div>
            <div class="col-3">
              <button class="btn btn-success w-100" type="button" name="save_cust" id="save_item" value="submit">ADD</button>
            </div>
          </div>

        </form>

      </div>
    </div>
  </div>
</div>
<!-- add item modal end -->

<script>
  $(document).ready(function(){

    var categories = <?php echo json_encode($category); ?>;
    var itemCategory = <?php echo json_encode($item_cate); ?>;
    var nunmOfItems = 0;

    for (var i = 0; i < categories.length; i++) {
      $('#item_ctgy').append('<option value="'+categories[i].cate_indx+'">'+categories[i].cate_name+'</option>');
    }

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
            $('#clos_cust').click();
          }
        }
      });
    }

    $('#save_cust').click(function(){
      if (chck_cust()) {
        cust_save();
      }
    });

    $('#save_item').click(function(){
      var price = $('#item_pric').val();
      if (price != 0) {
        item_save();
      } else {
        // TODO: need price
      }
    });

    function item_save(){
      nunmOfItems++;
      var price = $('#item_pric').val();
      var quantity = $('#item_qtty').val();
      var type = $('#item_type').val();
      // index,type,qty,price
    }

  });
</script>
