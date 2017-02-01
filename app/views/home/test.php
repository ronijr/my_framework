<!DOCTYPE html>
<html>
  <head>
      <title>Test</title>
  </head>
<body>
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

<?php echo $data['hitung']; ?>
</body>
</html>
