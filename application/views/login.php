<div class="col-12" style="margin-top:60px;">
  <div class="container text-center">
    <h1>Indra Tailor
      <br />
      <h6>
        Integrated Information System
      </h6>
    </h1>
    <hr style="width:40%;" />
    <div class="card" style="margin: 0 auto; float: none; margin-bottom: 10px;width:40%;">
      <div class="card-body">
        <form class="" action="<?php echo base_url() ?>uac/login_attempt" method="post">
          <div class="form-group text-left">
            <label class="">Username</label>
            <input type="text" name="username" class="form-control" placeholder="username" value="<?php echo $this->input->post('username'); ?>" />
            <small class="text-danger"><?php echo form_error('username'); ?></small>
          </div>
          <div class="form-group text-left mb-4">
            <label class="">Enter Password</label>
            <input type="password" name="password" class="form-control" value="<?php echo $this->input->post('password'); ?>" placeholder="password" />
            <small class="text-danger"><?php echo form_error('password'); ?></small>
          </div>
          <div class="form-group mt-2 mb-2">
            <input type="submit" name="login" value="Login" class="btn btn-info w-100" />
            <?php
            echo '<br/><small class="text-danger">'.$this->session->flashdata("error").'</small>';
            ?>
          </div>
        </form>
      </div>
    </div>
    <!-- </div> -->
  </div>
</div>
<!-- footer -->
</div>
</div>
<footer style="">
<div class="container-fluid h-100 text-center">
  <small class="mb-0 pt-3">
    Copyright &copy; 2018 by Creative Lab. All Rights Reserved.
  </small>
</div>
</footer>
</body>
</html>
