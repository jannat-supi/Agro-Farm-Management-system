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
  <div class="col col-lg-10 col-sm-12 col-12 working_div">
    <center>
      <br><br><br><br><br>
      <div class="col col-lg-8 col-sm-12 col-12 offset-lg-2 border shadow" >
        <h2 class="text-black" align="center" style="margin-top: 5%; color: #FF8F2B;"><center><b>Add Shareholder</b></center></h2>
        <br>
				<p class="text-red text-center">
          <strong>
          <?php
              $massage=Session::get('massage');
              if($massage)
              {
                  echo $massage;
                  Session::put('massage',null);
              }
          ?>
          </strong>
        </p>
        <div class="col col-lg-10 col-sm-12 offset-lg-1">
          <form method="post" action="{{url('/adding_user') }}" enctype="multipart/form-data">
					    <input type="hidden" name="_token" value="{{csrf_token()}}">
              <div class="form-group row">
                <div class="col-sm-3">
                    <label for="id" style="font-size: 16px;"><b> Name:</b></label>
                </div>
                <div class="col-sm-9">
                    <input class="form-control" type="text" name="uname" id="uname" placeholder="enter username..." required>
                </div>
              </div>
			  <div class="form-group row">
                <div class="col-sm-3">
                    <label for="cow-color" style="font-size: 16px;"><b>Address:</b></label>
                </div>
                <div class="col-sm-9">
                    <input class="form-control" type="text" name="address" id="address" placeholder="enter user address..." required>
                </div>
              </div>
						  <div class="form-group row">
                <div class="col-sm-3">
                    <label for="buying-price" style="font-size: 16px;"><b>Email:</b></label>
                </div>
                <div class="col-sm-9">
                    <input class="form-control" type="email" name="email" id="email" placeholder="enter user email..." required>
                </div>
              </div>
						  <div class="form-group row">
                <div class="col-sm-3">
                    <label for="buying-place" style="font-size: 16px;"><b>Mobile No:</b></label>
                </div>
                <div class="col-sm-9">
                    <input class="form-control" type="tel" name="mobile_no" id="mobile_no" placeholder="enter user mobile_no..." required>
                </div>
              </div>
						  <div class="form-group row">
                <div class="col-sm-3">
                    <label for="buying-date" style="font-size: 16px;"><b>Password:</b></label>
                </div>
                <div class="col-sm-9">
                    <input class="form-control" type="password" name="password" id="password" placeholder="enter user password..." required>
                </div>
              </div>
			  <div class="form-group row">
                <div class="col-sm-3">
                    <label for="id" style="font-size: 16px;"><b> Profession:</b></label>
                </div>
                <div class="col-sm-9">
                    <input class="form-control" type="text" name="Profession" id="uname" placeholder="enter professoin..." required>
                </div>
              </div>
			  <div class="form-group row">
                <div class="col-sm-3">
                    <label for="id" style="font-size: 16px;"><b> Share:</b></label>
                </div>
                <div class="col-sm-9">
                    <input class="form-control" type="text" name="share" id="uname" placeholder="enter share-percentage..." required>
                </div>
              </div>
			  <div class="form-group row">
			  <div class="col-sm-3">
                <label for="image" style="font-size: 16px;"><b>Image:</b></label>
              </div>
              <div class="col-sm-9">
                <input class="form-control" type="file" name="image" id="image">
              </div>
            </div>
              <div class="form-group row">
                <div class="col-sm-12" align="center">
                  <button type="submit" class="btn text-white" name="add" style="background: #FF8F2B;">Add Shareholder</button>
                </div>
              </div>
              <br>
          </form>
        </div>
        <br>
      </div>
      <br><br><br><br><br>
    </center>
  </div>
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
* {
  box-sizing: border-box;
}

form.example input[type=text] {
  padding: 10px;
  font-size: 18px;
  border: 1px solid #ddd;
  margin-bottom:10px;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #ddd;
  color: white;
  font-size: 18px;
  border: 1px solid #ddd;
  margin-bottom: 10px;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #FF8F2B;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}











</style>









