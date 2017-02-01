<!DOCTYPE html>
<html>
  <head>
      <title>Test</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" type="text/css"/>
  </head>
<body>
<div class="container">
<h4><?php echo isset($data['pesan']) ? $data['pesan'] : ''; ?></h4>  
<table>
  <thead>
      <tr>
          <td>No</td>
          <td>Username</td>
          <td>Password</td>
          <td>First Name</td>
          <td>Last Name</td>
          <td>Active</td>
      </tr>
    </thead>
    <tbody>
      <?php
        $no=1;
        foreach($data['result'] as $user){
          echo "
              <tr>
              <td>".$no."</td>
              <td>".$user['username']."</td>
              <td>".$user['password']."</td>
              <td>".$user['first_name']."</td>
              <td>".$user['last_name']."</td>
              <td>".$user['active']."</td>
              </tr>
          ";
          $no++;
        }
       ?>
    </tbody>
</table>
</div>
<script src="<?php echo base_url(); ?>assets/js/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>
