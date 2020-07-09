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
</head>
<?php
    $admin_id=$_SESSION["id"];
  $user= DB::table('user')
      ->where('user_id',$admin_id)
      ->first();
?>
<!--start main manu bar  -->
<div class="wrapper row1">
		<nav class="navbar navbar-expand-lg sticky-top ">  
        <h1><a href="dashboard" class="navbar-left navbar-brand" style="color: #FF8F2B;">Al-Modina Agro Farm</a></h1>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> 
            <span class="navbar-toggler-icon "><i class="fa fa-navicon"></i></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">     
          <ul class="navbar-nav ml-auto" >
		      <li class="nav-item ">
              <a class="nav-link Active" data-value="home" href="admin_panel" style="color: #FF8F2B; font-size: 18px;">Admin-Panel</a>        
          </li>
			    <li class="nav-item ">
              <a class="nav-link Active" data-value="home" href="dashboard" style="color: #FF8F2B; font-size: 18px;">Dashboard</a>        
          </li>
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #FF8F2B; font-size: 18px;">{{$user->user_name}}</a>
					    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					        <a class="dropdown-item" href="view_profile" style="color: #FF8F2B;">View Profile</a>
                  <a class="dropdown-item" href="change_password" style="color: #FF8F2B;">Change Password</a>
					        <a class="dropdown-item" href="#" style="color: #FF8F2B;">Logout</a>
					    </div>     
          </li>
        </ul> 
      </div>
    </nav>
</div>
<!-- end main manu bar -->

<!--start main page body  -->
<div class="wrapper row3">
  <br><br><br><br>
  <section class="hoc container clear"> 
	  <center>
        <a  href="add_admin"><button class="btn btn-deep-orange btn-lg" style="font-size:15px"><i class="fa fa-user-plus" style="font-size:24px"></i> Add Admin</button></a>
	      <a  href="remove_admin"><button class="btn btn-deep-orange btn-lg" style="font-size:15px"><i class="fa fa-user-times" style="font-size:24px"></i> Remove Admin</button></a>
	      <a  href="admin_list"><button class="btn btn-deep-orange btn-lg" style="font-size:15px"><i class="fa fa-users" style="font-size:24px"></i> Admin-list</button></a>
	  </center>
  </section>
  <br><br><br><br>
</div>
<!--end main page body  -->



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
        <li><i class=" fab fa-facebook-square"></i><a href="#" style="color: #FF8F2B;">Al-Modina Agro Farm</a></li>
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

<!-- start in page css -->
<style>
.navbar-brand{
	padding: 20px 20px;
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

.btn{
	font-size: 24px;
    cursor: pointer;
	width: 25%;	
}


.btn-lg {
  padding: 20px 10px;
  font-size: 25px;
  line-height: 4.33;
  border-radius: 8px;
}

@media screen and (max-width: 500px) {
  .btn {
    float: none;
    display: block;
    width: 100%;
    text-align: center; /* If you want the text to be left-aligned on small screens */
  }

</style>
<!-- end in page css -->







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
</head>
<?php
    $admin_id=$_SESSION["id"];
  $user= DB::table('user')
      ->where('user_id',$admin_id)
      ->first();
?>
<!--start main manu bar  -->
<div class="wrapper row1">
		<nav class="navbar navbar-expand-lg sticky-top ">  
        <h1><a href="dashboard" class="navbar-left navbar-brand" style="color: #FF8F2B;">Al-Modina Agro Farm</a></h1>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> 
            <span class="navbar-toggler-icon "><i class="fa fa-navicon"></i></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">     
          <ul class="navbar-nav ml-auto" >
		      <li class="nav-item ">
              <a class="nav-link Active" data-value="home" href="user_setting" style="color: #FF8F2B; font-size: 18px;">Shareholder Info</a>        
          </li>
			    <li class="nav-item ">
              <a class="nav-link Active" data-value="home" href="dashboard" style="color: #FF8F2B; font-size: 18px;">Dashboard</a>        
          </li>
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #FF8F2B; font-size: 18px;">{{$user->user_name}}</a>
					    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					        <a class="dropdown-item" href="view_profile" style="color: #FF8F2B;">View Profile</a>
                  <a class="dropdown-item" href="change_password" style="color: #FF8F2B;">Change Password</a>
					        <a class="dropdown-item" href="#" style="color: #FF8F2B;">Logout</a>
					    </div>     
          </li>
        </ul> 
      </div>
    </nav>
</div>
<!-- end main manu bar -->

<!--start main page body  -->
<div class="wrapper row3">
  <br><br><br><br>
  <section class="hoc container clear"> 
	  <center>
        <a  href="add_admin"><button class="btn btn-deep-orange btn-lg" style="font-size:15px"><i class="fa fa-user-plus" style="font-size:24px"></i> Add Admin</button></a>
	      <a  href="remove_admin"><button class="btn btn-deep-orange btn-lg" style="font-size:15px"><i class="fa fa-user-times" style="font-size:24px"></i> Remove Admin</button></a>
	      <a  href="admin_list"><button class="btn btn-deep-orange btn-lg" style="font-size:15px"><i class="fa fa-users" style="font-size:24px"></i> Admin-list</button></a>
	  </center>
  </section>
  <br><br><br><br>
</div>
<!--end main page body  -->



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
        <li><i class=" fab fa-facebook-square"></i><a href="#" style="color: #FF8F2B;">Al-Modina Agro Farm</a></li>
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

<!-- start in page css -->
<style>
.navbar-brand{
	padding: 20px 20px;
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

.btn{
	font-size: 24px;
    cursor: pointer;
	width: 25%;	
}


.btn-lg {
  padding: 20px 10px;
  font-size: 25px;
  line-height: 4.33;
  border-radius: 8px;
}

@media screen and (max-width: 500px) {
  .btn {
    float: none;
    display: block;
    width: 100%;
    text-align: center; /* If you want the text to be left-aligned on small screens */
  }

</style>
<!-- end in page css -->







