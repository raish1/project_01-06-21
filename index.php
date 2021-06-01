<?php
require"header.php";
$loginFail = $result="";
require_once"db.php";
if(isset($_POST['submit'])){
	$email = $_POST['email'];
	$password = base64_encode($_POST['password']);
	$sql = "SELECT id,name,password,email FROM user Where email='$email' and password='$password'";
	$query = mysqli_query($conn,$sql);
	$result = mysqli_num_rows($query);
	$row = mysqli_fetch_array($query);
	if($result==1){
		$_SESSION['name']=$row['name'];
		$_SESSION['email']=$row['email'];
		header("location: home.php");
		}else{
			$loginFail = "Login is failed";
		}
		
	}

?>

</br>
</br>
<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6 col-lg-12">
            
            <!-- /.card -->
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h4 class="card-title text-danger">USER & ADMIN</h4>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="index.php" method="post">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email :</label>
                    <div class="col-sm-10">
                      <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password :</label>
                    <div class="col-sm-10">
                      <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck2">
                        <label class="form-check-label" for="exampleCheck2">Remember me</label>
                      </div>
                    </div>
                  </div>
                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-info">Login</button>
                  <button type="submit" name="" class="btn btn-default float-right"><a href="signup.php">New User</a></button>
                </div>
                </div>
				</form>
				<div class="alert alert-danger">
                <span><strong>NOTICE :</strong> <?php if ($loginFail!=1){ echo $loginFail;}?></span>
               </div>


<?php require"footer.php";?>