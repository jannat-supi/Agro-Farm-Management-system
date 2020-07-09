<!DOCTYPE html>

<html>
<head>
<title>Al-Modina Agro Farm</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">


<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.9/css/mdb.min.css" rel="stylesheet">
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.9/js/mdb.min.js"></script>


<?php
    $admin_id=$_SESSION["id"];
	  $user= DB::table('user')
    			->where('user_id',$admin_id)
    			->first();
	  $photo=$user->image;
?>


</head>

<!--start main manu bar  -->
<div class="wrapper row1">
	<nav class="navbar navbar-expand-lg sticky-top ">  
    <h1><a href="home" class="navbar-brand" style="color: #FF8F2B;"><i class="fas fa-horse-head" style="font-size:30px"></i>Al-Modina Agro Farm</a></h1>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> 
        <span class="navbar-toggler-icon "><i class="fa fa-navicon"></i></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">     
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-value="about_us" href="dashboard" style="color: #FF8F2B; font-size: 18px;">Dashboard</a>        
        </li>   
				<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #FF8F2B; font-size: 18px;">
					  {{$user->user_name}}
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					  <a class="dropdown-item" href="view_profile" style="color: #FF8F2B;">View Profile</a>
					  <a class="dropdown-item" href="change_password" style="color: #FF8F2B;">Change Password</a>
					  <a class="dropdown-item" href="logout" style="color: #FF8F2B;">Logout</a>
					</div>     
        </li> 
      </ul> 
    </div>
  </nav>
</div>
<!-- end main manu bar -->

<!--start main page body  -->
<div class="wrapper row3">
	<div class="container-fluid">
    <br><br><br><br>
    <div class="col col-lg-6 col-sm-12 col-12 offset-lg-3 shadow" >
  		<br>
      <h2 class="text-black" align="center" style="margin-top: 5%; color: #FF8F2B;"><b>Profile Info</b></h2>
  		<center>
        <div class="table-responsive col col-lg-10 col-sm-12 col-12" style="text-align: center; margin-top: 10px; border: 0;">
          <table id="table1" class="table" style="border:0;">
            <tbody>
			<?php 
				if($photo=='null')
				{
			?>
  						<tr class="row">
  							<td class="col col-lg-6 col-sm-12 col-12 offset-lg-3" align="center" style="padding:5px 20px 5px 20px; border-top: 0;"><img class="rounded-circle" src="images/user2.png"></td>
  						</tr>
			<?php
				}
				else
				{
			?>
  						<tr class="row">
  							<td class="col col-lg-6 col-sm-12 col-12 offset-lg-3" align="center" style="padding:5px 20px 5px 20px; border-top: 0;"><img class="rounded-circle" style="height: 200px; width: 200px;" src="{{url('/')}}/user_image/{{$user->image}}"></td>
  						</tr>
			<?php
				}
			?>
  						<tr class="row">
                <td class="col col-lg-4 col-sm-4 col-4"><b>Name:</b></td>
                <td class="col col-lg-8 col-sm-8 col-8"><a href="#"><b>{{$user->user_name}}</b></a></td>
              </tr>
              <tr class="row">
                <td class="col col-lg-4 col-sm-4 col-4"><b>User-type:</b></td>
                <td class="col col-lg-8 col-sm-8 col-8"><a href="#"><b>{{$user->user_type}}</b></a></td>
              </tr>
              <tr class="row">
                <td class="col col-lg-4 col-sm-4 col-4"><b>Address:</b></td>
                <td class="col col-lg-8 col-sm-8 col-8"><a href="#"><b>{{$user->address}}</b></a></td>
              </tr>
              <tr class="row">
                <td class="col col-lg-4 col-sm-4 col-4"><b>Mobile-No:</b></td>
                <td class="col col-lg-8 col-sm-8 col-8"><a href="#"><b>{{$user->mobile_no}}</b></a></td>
              </tr>
              <tr class="row">
                <td class="col col-lg-4 col-sm-4 col-4"><b>Email:</b></td>
                <td class="col col-lg-8 col-sm-8 col-8"><a href="#"><b>{{$user->email}}</b></a></td>
              </tr>
            </tbody>
            <tfoot>
              <tr class="row center">
                <td class="col col-lg-12 col-sm-4 "><a href="edit_profile" class="btn text-white" style="background: #FF8F2B; ">Edit Profile</a></td>
              </tr>
            </tfoot>
          </table>
        </div>
  		</center>
    </div>
  </div>
	<br><br><br><br>
</div>
		


<!-- start footer -->
<div class="wrapper row4 bgded overlay" style="background: #292b2c;">
  <footer id="footer" class="hoc clear" style="padding-top: 2%; padding-bottom: 2%;"> 
    <div class="one_half first">
      <h6 class="title" style="font-size: 22px; color: #FF8F2B;">contact info</h6>
      <ul class="nospace linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
          Street Name &amp; Number, Town, Postcode/Zip
          </address>
        </li>
        <li><i class="fa fa-phone"></i> +88 0176 8654980</li>
        <li><i class="fa fa-envelope"></i> mahbubabid2013@gmail.com</li>
      </ul>
    </div>
    <div class="one_half">
      <br> <br> <br>
      <ul class="nospace linklist contact">
        <li><i class="fab fa-facebook-square"></i><a href="#" style="color: #FF8F2B;">Al-Modina Agro Farm</a></li>
        <li><i class="fab fa-twitter-square"></i><a href="#" style="color: #FF8F2B;">Al-Modina Agro Farm</a></li>
        <li><i class="fab fa-youtube"></i><a href="#" style="color: #FF8F2B;">Al-Modina Agro Farm</a></li>
      </ul>
    </div>
  </footer>
</div>
<!-- end footer -->

<!-- start copyright -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <p class="fl_left">Copyright &copy; 2019 - All Rights Reserved For <a href="#" style="color: #FF8F2B;">Al-Modina Agro Farm</a></p>
    <p class="fl_right">Developed by <a target="_blank" href="#" style="color: #FF8F2B;" title="Free Website Templates">Nargis & Jenifa</a></p>
  </div>
</div>
<!-- end copyright -->
<style>


.navbar-brand{
	padding: 20px 16px;
	font-size: 25px;
}
.fa.fa-navicon {
  color:#fff;
}
.nav-link{ margin-right: 1em !important;}
.navbar-collapse{ justify-content: flex-end;}
.navbar-toggler{ !important; }
.dropdown-menu{
	background-color: #373737;
}
.table1 table, tr, td, th {
     border: 0;
}



</style>







