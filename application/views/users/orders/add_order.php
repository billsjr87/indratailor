<div class="col-9" style="margin-top:40px;">
  <div class="container">
    <div class="card">

      <!-- card header start -->
      <div class="card-header">
        <?php echo $stor_name; ?> <br/>
        <?php echo $stor_addr; ?> <br />
        <?php echo $stor_phnn; ?>
      </div>
      <!-- card header end -->

      <!-- card body start -->
      <div class="card-body">

        <!-- form start -->
        <div class="form-group">
          <form name="form_addn_ordr" id="form_addn_ordr">

            <div class="row">
              <div class="col-3">
                <label for="ordr_nmbr" style="font-size:0.8em;">Order Number</label>
                <input class="form-control" type="text" maxlength="12" name="ordr_nmbr" value="<?php echo "ordr_nmbr+1"; ?>" readonly>
              </div>
              <div class="col offset-3">
                <label for="ordr_date" style="font-size:0.8em;">Order Date</label>
                <input class="form-control" type="date" name="ordr_date">
                <!-- date now -->
              </div>
              <div class="col">
                <label for="ordr_fndt" style="font-size:0.8em;">Finish Date</label>
                <input class="form-control" type="date" name="ordr_fndt">
              </div>
            </div>

            <hr />

            <div class="row">
              <div class="col-1">
                <label for="cust_name" style="font-size:0.8em;">Customer Name</label>
              </div>
              <div class="col" style="padding-right:0px;">
                <input class="form-control" type="text" name="cust_name" id="cust_name" maxlength="32" placeholder="Customer Name" readonly>
              </div>
              <div class="col-2" style="padding:0px 0px 0px 5px; display:inline-block;">
                <button class="btn btn-outline-primary border-0" type="button" name="srch_cust" data-toggle="modal" data-target="srch_cust_modl">
                  <i class="fas fa-search fa-lg"></i>
                </button>
                <button class="btn btn-outline-primary border-0" type="button" name="addn_cust" data-toggle="modal" data-target="addn_cust_modl">
                  <i class="fas fa-plus-circle fa-lg"></i>
                </button>
              </div>
            </div>

            <div class="row">
              <div class="col-1">
                <label for="cust_ordr" style="font-size:0.8em;">Customer Orders</label>
              </div>
              <div class="col">
                <div class="table-responsive">
                  <table class="table border-0" id="item_orders">
                    <tr>
                      <td style="padding:2px 0px 5px 0px;"><input type="text" name="ordr_item[]" placeholder="Item" class="form-control ordr-list" readonly /> </td>
                      <td style="padding:2px 0px 5px 5px;width:5%;"><button class="btn btn-outline-primary border-0" type="button" name="addn_item" id="addn_item"><i class="fas fa-plus-circle fa-lg"></i></button></td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-1">
                <label for="ordr_detl" style="font-size:0.8em;">Other Details</label>
              </div>
              <div class="col">
                <input class="form-control" type="text" name="ordr_detl" maxlength="256" placeholder="Other details">
              </div>
            </div>

            <hr/>

            <div class="row">
              <div class="col-1 offset-7">
                <label for="ordr_fees" style="font-size:0.8em;">Total Fees</label>
              </div>
              <div class="col">
                <input class="form-control" type="number" name="ordr_fees" id="ordr_fees" min="0" value="0" readonly />
              </div>
            </div>

            <div class="row">
              <div class="col-1 offset-7">
                <label for="ordr_dopy" style="font-size:0.8em;">Down Payment</label>
              </div>
              <div class="col">
                <input class="form-control" type="number" name="ordr_dopy" min="0" step="1000" value="0" />
              </div>
            </div>

            <div class="row">
              <div class="col-1 offset-7">
                <label for="ordr_accr" style="font-size:0.8em;">Acc. Recieveable</label>
              </div>
              <div class="col">
                <input class="form-control" type="number" name="ordr_accr" id="ordr_accr" min="0" value="0" readonly />
              </div>
            </div>

            <hr />

            <div class="row">
              <div class="col-2 offset-6">
                <button class="btn btn-danger w-100" type="button" name="cancel" value="reset">CANCEL</button>
              </div>
              <div class="col-2">
                <button class="btn btn-success w-100" type="button" name="save" id="save" value="submit">SAVE</button>
              </div>
              <div class="col-2">
                <button class="btn btn-warning w-100" type="button" name="print" id="print" value="submit">SAVE & PRINT</button>
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

<script>
  $(document).ready(function(){
    var rowItemCount = 1;
    $('#addn_item').click(function(){
      rowItemCount++;
      $('#item_orders').append('<tr id="row'+rowItemCount+'"><td style="padding:2px 0px 5px 0px;"><input type="text" name="ordr_item[]" placeholder="Item" class="form-control ordr-list" readonly /> </td>'+
        '<td style="padding:2px 0px 5px 5px;width:5%;"><button class="btn btn-outline-danger border-0 btn_remove" type="button" name="remo_item" id="'+rowItemCount+'"><i class="fas fa-minus-circle fa-lg"></i></button></td></tr>');
    });
    $(document).on('click', '.btn_remove', function(){
      var rowId = $(this).attr("id");
      $('#row'+rowId+'').remove();
    });
    $('#save').click(function(){
      $.ajax({
        // TODO: change url later
        url:"save.php",
        method:"POST",
        data:$('#form_addn_ordr').serialize(),
        success:function(data)
        {
          alert(data);
          $('#form_addn_ordr')[0].reset();
        }
      });
    });
    $('#print').click(function(){
      $.ajax({
        // TODO: change url later
        url:"save.php",
        method:"POST",
        data:$('#form_addn_ordr').serialize(),
        success:function(data)
        {
          alert(data);
          $('#form_addn_ordr')[0].reset();
          // TODO: add print function
        }
      });
    });
  });
</script>
