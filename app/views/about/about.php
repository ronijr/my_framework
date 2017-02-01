<!DOCTYPE html>
<html leng="en">
  <head>
      <title>Test Input</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" >
  </head>
<body>
<div class="container">
  <h1>Coba Inputan</h1>
  <form action="<?php echo base_url(); ?>about/inputData" method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="col-sm-4">
          <div class="form-group">
              <lable>Username</label>
              <input type="text" name="username" placeholder="Username" class="form-control">
          </div>
          <div class="form-group">
              <lable>Password</label>
              <input type="password" name="password" placeholder="" class="form-control">
          </div>
          <div class="form-group">
              <lable>First Name</label>
              <input type="text" name="first_name" placeholder="First Name" class="form-control">
          </div>
          <div class="form-group">
              <lable>Last Name</label>
              <input type="text" name="last_name" placeholder="Last Name" class="form-control">
          </div>
          <div class="form-group">
              <lable>Email </label>
              <input type="email" name="email" placeholder="Email" class="form-control">
          </div>
          <div class="form-group">
              <input type="submit" name="submit" value="Simpan" class="btn btn-primary form-control">
          </div>
        </div>
    </div>
  </form>
</div>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
</body>
</html>
