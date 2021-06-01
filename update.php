<?php
$user_id=$update_name=$update_password=$update_conf_password=$update_gender=$update_email=$update_number=$update_address="";
require"header.php";
require_once"db.php";
if(!isset($_POST['submit'])){
	$user_id=$_GET['user_id'];
	$sql="SELECT id,name,password,conf_password,gender,email,number,address FROM user Where id='$user_id'";
	$query = mysqli_query($conn,$sql);
	$result = mysqli_fetch_array($query);
	$name = $result['name'];
	$password = base64_decode($result['password']);
	$conf_password = base64_decode($result['conf_password']);
	$gender = $result['gender'];
	$email = $result['email'];
	$number = $result['number'];
	$address = $result['address'];
	 mysqli_close($conn);
}
if(isset($_POST['submit'])){
	$update_name = $_POST['name'];
	$update_password = base64_encode($_POST['password']);
	$update_conf_password = base64_encode($_POST['conf_password']);
	$update_gender = $_POST['gender'];
	$update_email = $_POST['email'];
	$update_number = $_POST['number'];
	$update_address = $_POST['address'];
	$user_edit_id = $_POST['user_edit_id'];
	if($update_name!=""){
		$sql="UPDATE user SET name='$update_name',password='$update_password',conf_password='$update_conf_password',gender='$update_gender',email='$update_email',number='$update_number',address='$update_address' Where id='$user_edit_id'";
		if($conn->query($sql)){
			header("location: admin_profile.php");
		}else{
			echo "error".$sql."</br>".$conn->error;
		}
		$conn->close();
	}else{
		echo "data is not found";
	}
}
?>

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
                <h4 class="card-title text-danger">Update</h4>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="update.php" method="post" enctype="multipart/form-data">
			  <input  class="form-group row"type="hidden" name="user_edit_id" id="user_edit_id" value="<?php echo $user_id;?>">
              <div class="card-body">
			  <div class="form-group row">
                <label for="inputName3" class="col-sm-2 col-form-label">Name *</label>
                <div class="col-sm-6">
                 <input type="text" name="name" class="form-control" id="inputName3" placeholder="Enter name" value="<?php echo $name;?>">
                </div>
				</div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password *</label>
                    <div class="col-sm-6">
                      <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password" value="<?php echo $password;?>">
					 </div>
					</div>
				  <div class="form-group row">
                    <label for="inputConPassword3" class="col-sm-2 col-form-label">Conf Password *</label>
                    <div class="col-sm-6">
                      <input type="password" name="conf_password" class="form-control" id="inputConPassword3" placeholder="Confirm Password" value="<?php echo $conf_password; ?>">
					 </div>
				 </div>
                    <div class="form-group row">
					<label class="col-sm-2" >Gender *</label>
					 <div class="col-sm-1">
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio1" name="gender" value="male"<?php if($gender=="male"){ echo "checked";}?>>
                          <label for="customRadio1" class="custom-control-label">&nbsp;&nbsp;Male&nbsp;&nbsp;</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio2" name="gender" value="female"<?php if($gender=="female"){ echo "checked";}?>>
                          <label for="customRadio2" class="custom-control-label">&nbsp;&nbsp;Female&nbsp;&nbsp;</label>
                        </div>
                    </div>
                    </div>
					
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Email *</label>
                      <div class="col-sm-6">
                      <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email" value="<?php echo $email;?>">
					 </div>
				   </div>
                   <div class="form-group row">
                    <label for="inputNumber3" class="col-sm-2 col-form-label">Number *</label>
                    <div class="col-sm-6">
                      <input type="tel" name="number" class="form-control" id="inputNumber3" placeholder="+91" value="<?php echo $number; ?>">
					 </div>
					</div>
				   <!-- textarea -->
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Address *</label>
					     <div class="col-sm-6">
                        <textarea type="textarea" name="address" class="form-control" rows="3" placeholder="Enter Address"><?php echo htmlspecialchars($address);?></textarea>
                        </div>
					 </div>
					 
					<!--<div class="form-group row">
                    <label for="inputFile3" class="col-sm-2 col-form-label">Profile :</label>
                    <div class="">
                      <input type="file" name="file" class="" id="inputFile3">
                    </div>
                    </div>-->
							
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="submit" value="update"class="btn btn-info">Update</button>
                  <button type="submit" name="" class="btn btn-default float-right"><a href="index.php">Cancel</a></button>
                </div>
                </div>
              </form>
            </div>
          </div>
         </div>
        </div>
    </section>
    </div>
	<?php require"footer.php";?>