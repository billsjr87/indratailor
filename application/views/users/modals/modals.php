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
              <input class="form-control" type="text" maxlength="64" name="cust_name" placeholder="Customer Name" required>
            </div>
          </div>

          <div class="row">
            <div class="col-1">
              <label for="cust_phnn" style="font-size:0.8em;">Phone Number</label>
            </div>
            <div class="col-4">
              <input class="form-control" type="text" maxlength="32" name="cust_phnn" placeholder="Phone Number" required>
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

    function chck_cust () {
        return TRUE;
        // TODO: add input cust validation
    }

    function cust_save () {
      $.ajax({
        url:"<?php echo base_url('order/cust_save'); ?>",
        method:"POST",
        data:$('#form_addn_cust').serialize(),
        success:function(data)
        {
          if (data.msg == "Success") {
            alert('Data saved.');
            $('#clos_cust').click();
          } else {
            alert('Phone number exist.');
          }
        }
      });
    }

    $('#save_cust').click(function(){
      if (chck_cust()) {
        cust_save();
      }
    });

  });
</script>
