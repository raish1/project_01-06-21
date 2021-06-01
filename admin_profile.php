<?php
require"header.php";
require_once"db.php";
$email = $_SESSION['email'];
$sql="SELECT*FROM user";
$query = mysqli_query($conn,$sql);
//$result = mysqli_fetch_array($query);
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
	   <marquee><h4> Admin-<span class="text-danger"><?php echo strtoupper($_SESSION['name']);?></span></h4></marquee>
      </div>	   
    <div class="blog-page area-padding">
      <div class="container">
        <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                 <div class="comment-respond">
                     <table class="table table-bordered text-center" id="user">
						  <thead class="text-center">
							<tr>
							   <th scope="col">ID</th>
							  <th scope="col">NAME</th>
							  <th scope="col">GENDER</th>
							  <th scope="col">MOBILE</th>
							  <th scope="col">ADDRESS</th>
							  <th scope="col">EMAIL</th>
							  <th scope="col">PROFILE</th>
							  <th scope="col">UPDATE</td>
			                  <td scope="col">DELETE</td>
							</tr>
						  </thead>
						  <?php while($result=mysqli_fetch_array($query)){?>
					     <tbody>
                         <tr>
							<td><?php echo $result['id'];?></td>
							<td><?php echo $result['name'];?></td>
							<td><?php echo $result['gender'];?></td>
							<td><?php echo $result['number'];?></td>
							<td><?php echo $result['address'];?></td>
							<td><?php echo $result['email'];?></td>
							<td><img src="<?php echo $result['file'];?>" height="100" width="100"></td>
							<td class="text-denger"><a href="update.php?user_id=<?php echo $result['id'];?>"/><img src="image\writing.png" width="30" height="30"></a></td>
	                        <!--<td><a href="delete.php?user_id=<?php echo $result['id'];?>"/><img src="image\delete.png" width="30" height="30"></a></td>-->
							<td class='deleteUser' id="<?php echo $result['id'];?>"><a><img src="image\delete.png" width="30" height="30"></a></td>
						</tr>
					    </tbody>
					    <?php }?>
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