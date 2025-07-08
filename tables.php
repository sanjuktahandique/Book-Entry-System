<?php  

session_start();
if(!isset($_SESSION['username'])){
  header("location:login.php");
}
?>

<?php  

$mysqli = new mysqli("localhost","root","","sanjukta_book_entry");
$sql = "SELECT * FROM `books`";
$res = $mysqli->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  
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
          <li class="active">
            <a href="./tables.php">
              <i class="nc-icon nc-bank"></i>
              <p>Books List</p>
            </a>
          </li>
          
          <li>
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
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Available Books</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Book Detail
                      </th>
                      <th>
                        Category
                      </th>
                      <th>
                        Description
                      </th>
                      <th class="text-right">
                        Price
                      </th>
                    </thead>
                    <tbody>
<?php  

while ($row = mysqli_fetch_assoc($res)) {
?>
                      <tr>
                        <td>
                          <b>Book Name: </b><?php echo base64_decode($row['name']); ?><br>
                          <b>Author: </b><?php echo base64_decode($row['author']); ?><br>
                          <b>Publisher: </b><?php echo base64_decode($row['publisher']); ?>
                        </td>
                        <td>
                          <?php echo base64_decode($row['category']); ?>
                        </td>
                        <td>
                          <?php echo base64_decode($row['description']); ?>
                        </td>
                        <td class="text-right">
                          <?php echo base64_decode($row['price']); ?>
                        </td>
                      </tr>
<?php  
}
?>
                    </tbody>
                  </table>
                </div>
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
