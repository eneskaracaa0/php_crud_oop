
<?php
require_once('signupConfig.php');
$data=new signupConfig();
$all=$data->fetchAll();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

  <h2>List of all records</h2>
  <center>
    <a class="btn btn-success" href="./signup.php">add New</a>
    <br>
  </center>
  <br>
  <table class="table">
  <thead>
    <tr>
     
      <th scope="col">FirstName</th>
      <th scope="col">LastName</th>
      <th scope="col">Addres</th>
        <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($all as $key => $val) {
     
    ?>
    
    <tr>
      <th scope="row"><?php echo $val['firstname'];?></th>
      <td><?php echo $val['lastname'];?></td>
      <td><?php echo $val['address'];?></td>
      <td><a class="btn btn-danger" href="delete.php?id=<?php $val['id'];?>&req=delete">Delete</a>
   <a class="btn btn-warning" href="edit.php?id=<?php $val['id']?>">EDİT</a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
  
  

   
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>