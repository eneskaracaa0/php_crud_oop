<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
      .row{
        align-items: center;
        justify-content: center;
      }
    </style>
  </head>
  <body>

  <h2 class="text-center">Fill out the information</h2>
  
  <div class="row">
    <div class="col-md-4">
        <div class="container">
    <form action="signupProcess.php" method="POST">

    
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">FirstName</label>
    <input type="text" name="firstname" class="form-control" id="firstname" aria-describedby="emailHelp">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Lastname</label>
    <input type="text" name="lastname" class="form-control" id="lastname" aria-describedby="emailHelp">
   
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Adress</label>
    <input type="text" name="address" class="form-control" id="address" aria-describedby="emailHelp">
   
  </div>
  
  <button type="submit" class="btn btn-primary" name="save">Submit</button>

        
    </form>
  </div>

    </div>
  </div>
  

  
  
  

   
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>