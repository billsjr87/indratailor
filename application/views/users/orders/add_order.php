<div class="col-9" style="margin-top:40px;">
  <div class="container" id="ordr_page">
    <div class="card" id="printable_check" style="margin-bottom:50px;">

      <!-- card header start -->
      <div class="card-header">
        <h1 class="text-center">
          <?php echo $stor_prfl['stor_name']; ?>
        </h1>
        <h6 class="text-center">
          <i>
            <?php echo $stor_prfl['stor_addr']; ?>
          </i>
        </h6>
        <h6 class="text-center">
          <b style="font-size:0.8em;">
            <?php echo $stor_prfl['stor_phnn']; ?>
          </b>
        </h6>
      </div>
      <!-- card header end -->

      <!-- card body start -->
      <div class="card-body">

        <!-- form start -->
        <div class="form-group">
          <form name="form_addn_ordr" id="form_addn_ordr">

            <input type="hidden" name="stor_indx" value="<?php echo $stor_indx; ?>" required>

            <div class="row">
              <div class="col-3">
                <label for="ordr_nmbr" style="font-size:0.8em;">Order Number</label>
                <input class="form-control" type="text" maxlength="12" name="ordr_nmbr" value="<?php echo $ordr_nmbr; ?>" readonly required>
              </div>
              <div class="col offset-3">
                <label for="ordr_date" style="font-size:0.8em;">Order Date</label>
                <input class="form-control" type="date" name="ordr_date" id="ordr_date" required>
                <!-- date now -->
              </div>
              <div class="col">
                <label for="ordr_fndt" style="font-size:0.8em;">Finish Date</label>
                <input class="form-control" type="date" name="ordr_fndt" id="ordr_fndt">
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
              <div class="col-2 d-print-none" style="padding:0px 0px 0px 5px; display:inline-block;">
                <button class="btn btn-outline-primary border-0" type="button" name="srch_cust" data-toggle="modal" data-target="#srch_cust_modl">
                  <i class="fas fa-search fa-lg"></i>
                </button>
                <button class="btn btn-outline-primary border-0" type="button" name="addn_cust" data-toggle="modal" data-target="#addn_cust_modl">
                  <i class="fas fa-plus-circle fa-lg"></i>
                </button>
              </div>
            </div>

            <input type="hidden" name="cust_indx" id="cust_indx" required>

            <div class="row">
              <div class="col-1">
                <label for="cust_ordr" style="font-size:0.8em;">Customer Orders</label>
              </div>
              <div class="col">
                <div class="table-responsive">
                  <table class="table border-0" id="item_orders" style="margin-bottom:5px;">
                    <tr>
                      <td style="padding:2px 0px 5px 0px;"><input type="text" name="" placeholder="Item" class="form-control ordr-list" readonly required /> </td>
                      <td style="padding:2px 0px 5px 5px;width:5%;"><button class="btn btn-outline-primary border-0 d-print-none" type="button" name="addn_item" id="addn_item"><i class="fas fa-plus-circle fa-lg"></i></button></td>
                    </tr>
                    <div id="order_show">

                    </div>
                  </table>
                </div>
              </div>
            </div>

            <div id="order_container">

            </div>

            <div class="row">
              <div class="col-1">
                <label for="ordr_detl" style="font-size:0.8em;">Other Details</label>
              </div>
              <div class="col">
                <textarea class="form-control" name="ordr_detl" rows="3" cols="80" placeholder="Other details" style="resize:none;"></textarea>
                <!-- <input class="form-control" type="text" name="ordr_detl" maxlength="256" placeholder="Other details"> -->
              </div>
            </div>

            <hr/>

            <div class="row" style="margin-bottom:5px;">
              <div class="col-1 offset-7">
                <label for="ordr_fees" style="font-size:0.8em;">Total Fees</label>
              </div>
              <div class="col">
                <input style="text-align:right;" class="form-control" type="number" name="ordr_fees" id="ordr_fees" min="0" placeholder="0" readonly required />
              </div>
            </div>

            <div class="row" style="margin-bottom:5px;">
              <div class="col-1 offset-7">
                <label for="ordr_dopy" style="font-size:0.8em;">Payment</label>
              </div>
              <div class="col">
                <input style="text-align:right;" class="form-control" type="number" name="ordr_dopy" id="ordr_dopy" min="0" step="1000" placeholder="0" />
              </div>
            </div>

            <div class="row" style="margin-bottom:5px;">
              <div class="col-1 offset-7">
                <label for="ordr_accr" style="font-size:0.8em;">Acc. Recieveable</label>
              </div>
              <div class="col">
                <input style="text-align:right;" class="form-control" type="number" name="ordr_accr" id="ordr_accr" min="0" placeholder="0" readonly required />
              </div>
            </div>

            <hr />

            <div class="row d-print-none">
              <div class="col-2 offset-6">
                <button class="btn btn-danger w-100" type="button" name="cancel" value="reset">CANCEL</button>
              </div>
              <div class="col-2">
                <button class="btn btn-success w-100" type="button" name="save" id="save" value="submit">SAVE</button>
              </div>
              <div class="col-2">
                <button class="btn btn-warning w-100" type="button" name="prnt" id="prnt" value="submit">SAVE & PRINT</button>
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

    // calculate account recieveable after focus out on downpayment
    $('#ordr_dopy').on('focusout',function(){
      var intDP = $('#ordr_dopy').val();
      var intFees = $('#ordr_fees').val();
      if (intFees != 0 && intFees - intDP > 0) {
        $('#ordr_accr').val(intFees - intDP);
      }
    });

    // add & calculate date start and date end
    var now = new Date();
    var day = ("0" + now.getDate()).slice(-2);
    var month = ("0" + (now.getMonth() + 1)).slice(-2);
    var today = now.getFullYear()+"-"+(month)+"-"+(day) ;
    $('#ordr_date').val(today);
    var amonthafter = new Date();
    amonthafter.setDate(amonthafter.getDate() + 14);
    var daya = ("0" + amonthafter.getDate()).slice(-2);
    var montha = ("0" + (amonthafter.getMonth() + 1)).slice(-2);
    var todaya = now.getFullYear()+"-"+(montha)+"-"+(daya) ;
    $('#ordr_fndt').val(todaya);

    // show add item modal on click
    $('#addn_item').click(function(){
      $('#addn_item_modl').modal('show');
    });

    // remove item on click
    $(document).on('click', '.btn_remove', function(){
      var rowId = $(this).attr("id");
      $('#row'+rowId+'').remove();
      $('#orderIndex_'+rowId+'').remove();
    });

    // order validation
    function chck_inpt(){
      var err = false;
      var err_msg = '';
      if ($('#ordr_date').val() == '') {
        $('#ordr_date').val(today);
        err = false;
      } else if ($('#cust_indx').val() == '') {
        err_msg = 'No customer choosen.';
        err = true;
      } else if (itemInCart.length == 0) {
        err_msg = 'No Item add.';
        err = true;
      }
      if (err) {
        alert(err_msg);
      }
      return !err;
    }

    // add order to database
    function ordr_save(){
      $.ajax({
        url:"<?php echo base_url('order/ordr_save'); ?>",
        method:"POST",
        data:$('#form_addn_ordr').serialize(),
        success:function(data)
        {
          if (data.url != "") {
            alert(data.msg);
            window.location.href = "<?php echo base_url(); ?>" + data.url + "";
          } else {
            alert(data.msg);
          }
        }
      });
    }

    // print order
    // TODO: add print name and place (pdf), print out to printers
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
      mywindow.focus();

      setTimeout(function(){
        mywindow.print();
        mywindow.close();
      }, 200);
    }

    // button save order on click
    $('#save').click(function(){
      if (chck_inpt()) {
        ordr_save();
      }
    });

    // button on save n print click
    // TODO: add save after finish printing or always print after saving pdf to database (add hidden input for pdf files)
    $('#prnt').click(function(){
      if (chck_inpt()) {
        // ordr_save();
        ordr_prnt('printable_check');
      }
    });

  });
</script>
