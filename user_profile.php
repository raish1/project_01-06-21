<?php
require"header.php";
require_once"db.php";
$email=$name="";
$email=$_SESSION['email'];
$name=$_SESSION["name"];

?>
</br>
</br>
</br>
<style>
  #user {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#user tbody, #user thead {
  border: 3px solid black;
  padding: 8px;
}

#user tbody:nth-child(even){background-color: #f2f2f2;}

#user tbody:hover {background-color: #ddd;}

#user thead {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #04AA6D;
  color: white;
  </style>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 col-lg-12">
       <div class="col-sm-12">
	   <marquee><h4> User-<span class="text-danger"><?php echo strtoupper($_SESSION['name']);?></span></h4></marquee>
      </div>	   
    <div class="blog-page area-padding">
      <div class="container">
        <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                 <div class="comment-respond">
                     <table class="table table-bordered text-center" id="user">
						  <thead class="text-center">
							<tr>
							   
							  <th scope="col">NAME</th>
							  <th scope="col">MOBILE</th>
							  <th scope="col">ADDRESS</th>
							  <th scope="col">EMAIL</th>
							  <th scope="col">PROFILE</th>
							</tr>
						  </thead>
					     <tbody>
						 <?php 
					        $sql="SELECT id,name,number,address,email,file FROM user Where email='$email'";
							$query = mysqli_query($conn,$sql);
							$result=mysqli_fetch_assoc($query);?>
					    <tr>
							
							<td><?php echo $result['name'];?></td>
							<td><?php echo $result['number'];?></td>
							<td><?php echo $result['address'];?></td>
							<td><?php echo $result['email'];?></td>
							<td><img src="<?php echo $result['file'];?>" height="100" width="100"></td>
						</tr>
					</tbody>
					</table>
					 <button class="btn btn-success text-left"><a href="home.php">Back</a></button>
                  </div>
              </div>
            </div>
          </div>
          </div>
	      </div>
          </div>
       </div>
    </section>
   </div>

 <?php require"footer.php";?>