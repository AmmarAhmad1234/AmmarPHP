<?php

require "connection/connection.php";

$viewQuery = "SELECT * FROM pdo_users";

$viewprepare = $conn->prepare($viewQuery);

$viewprepare -> execute();

$viewData = $viewprepare->fetchAll(PDO::FETCH_ASSOC);

// echo "<pre>";
// print_r($viewData);
// echo "</pre>";

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    <center><h1>View Data</h1></center>
    <div class="container">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">User Id</th>
      <th scope="col">User Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">City</th>
      <th scope="col">Registration Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
   <?php
   foreach($viewData as $data){
   ?> 
    <tr>
      <td><?= $data  ['userId']?></td>
      <td><?= $data  ['username']?></td>
      <td><?= $data  ['email']?></td>
      <td><?= $data  ['password']?></td>
      <td><?= $data  ['city']?></td>
      <td><?= $data  ['registrationTime']?></td>
      <td><a href="delete.php?delId=<?= $data ['userId']?> " style="color: black;"><i class="fa-solid fa-trash"></i></a>
     <a href="" style="color: black;"><i class="fa-solid fa-pen-to-square"></i></a></td>
    </tr>
   <?php }?>
  </tbody>
</table>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
