<?php  

session_start();
if(!isset($_SESSION['username'])){
  header("location:login.php");
}
?>

<?php

if(isset($_POST['add'])){
  $mysqli = new mysqli("localhost","root","","sanjukta_book_entry");
  extract($_POST);
  $name = base64_encode($name);
  $category = base64_encode($category);
  $publisher = base64_encode($publisher);
  $author = base64_encode($author);
  $price = base64_encode($price);
  $description = base64_encode($description);
  $sql = "INSERT INTO `books`(`name`, `category`, `publisher`, `author`, `price`, `description`) VALUES ('$name','$category','$publisher','$author','$price','$description')";
  if($mysqli->query($sql)){
    header("refresh:0");
  }else{
    echo $mysqli->error;
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
   Book Entry System
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <link href="assets/demo/demo.css" rel="stylesheet" />
</head>

<body>
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="./tables.php">
              <i class="nc-icon nc-bank"></i>
              <p>Book List</p>
            </a>
          </li>
          
          <li class="active">
            <a href="./user.php">
              <i class="nc-icon nc-tile-56"></i>
              <p>Book Entry</p>
            </a>
          </li>
          
          <li class="active-pro">
            <a href="./login.php">
              <p class="btn btn-danger">Logout</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      
      <div class="content">
        <div class="row">
          <div class="col-md-4">
            
            
          </div>
          <div class="col-md-12">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Book Entry</h5>
              </div>
              <div class="card-body">
                <form method="POST">
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>Book Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Book">
                      </div>
                    </div>
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Category</label>
                        <select name="category" required="" class="form-control">
                          <option value="">--Select Category--</option>
                          <option value="Category 1">Category 1</option>
                          <option value="Category 2">Category 2</option>
                          <option value="Category 3">Category 3</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Author's Name</label>
                        <input type="text" name="author" class="form-control" placeholder="Author">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Publication</label>
                        <input type="text" name="publisher" class="form-control" placeholder="Publisher">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Price</label>
                        <input type="text" name="price" class="form-control" placeholder="Price">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" class="form-control textarea"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" name='add' class="btn btn-primary btn-round">Add Book To Database</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
              
            </nav>
            <div class="credits ml-auto">
              
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  
  <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  
  
</body>

</html>