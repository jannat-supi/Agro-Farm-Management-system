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
    <h1><a href="home" class="navbar-brand" style="color: #FF8F2B;"><i class="fas fa-horse-head" style="font-size:30px"></i>Al-Modina Agro Farm</a></h1>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> 
        <span class="navbar-toggler-icon "><i class="fa fa-navicon"></i></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">     
      <ul class="navbar-nav ml-auto">
				<li class="nav-item ">
          <a class="nav-link Active" data-value="home" href="dashboard" style="color: #FF8F2B; font-size: 18px;">Dashboard</a>        
        </li>
				<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #FF8F2B; font-size: 18px;">{{$user->user_name}}</a>
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
	<div class="col col-lg-8 col-sm-12 col-12 offset-lg-2 working_div">
    <br><br><br><br>
    <center>
      <div class="col col-lg-10 col-sm-12 col-12 border shadow" >
        <h2 class="text-black" align="center" style="margin-top: 5%;color: #FF8F2B;"><center><b>Change Password</b></center></h2>
        <br>
        <!--start alert massage-->
        <?php
            $massage=Session::get('massage');
            if($massage)
            {
                if ($massage==1) {
        ?>
                    <div class="alert alert-danger col-lg-8 offset-lg-2" align="center"><strong>Your Current password is incorrect</strong></div>
        <?php
                }
                else{
        ?>
                    <div class="alert alert-success col-lg-8 offset-lg-2" align="center"><strong>Your password has changed succecs</strong></div>
        <?php
                }
                Session::put('massage',null);
            }
        ?>
        <!--end alert massage-->
        <div class="col col-lg-10 col-sm-12 offset-lg-1">
          <form action="{{url('/change_password_admin') }}" method="post" >
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="form-group row">
              <div class="col-sm-4">
                <label for="id" style="font-size: 16px;"><b>Current Password:</b></label>
              </div>
              <div class="col-sm-8">
                <input class="form-control" type="password" name="current_password" value="{{ old('current_password') }}" id="name" placeholder="Enter Current Password">
                @if($errors->has('current_password'))
                    <span class="text-danger">{{$errors->first('current_password')}}</span>
                @endif
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-4">
                <label for="id" style="font-size: 16px;"><b>New Password:</b></label>
              </div>
              <div class="col-sm-8">
                <input class="form-control" type="password" name="new_password" value="{{ old('new_password') }}" id="name" placeholder="Enter New Password">
                @if($errors->has('new_password'))
                    <span class="text-danger">{{$errors->first('new_password')}}</span>
                @endif
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-4">
                <label for="id" style="font-size: 16px;"><b>Confirm Password:</b></label>
              </div>
              <div class="col-sm-8">
                <input class="form-control" type="password" name="confirm_password" value="{{ old('confirm_password') }}" id="name" placeholder="Enter Confirm Password">
                @if($errors->has('confirm_password'))
                    <span class="text-danger">{{$errors->first('confirm_password')}}</span>
                @endif
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-12" align="center">
                <button type="submit" class="btn text-white" name="update" style="background: #FF8F2B;">Update</button>
              </div>
            </div>
            <br>
          </form>
        </div>
      </div>
		</center>
    <br><br><br><br><br><br>
	</div>
</div>
		


<!-- start footer -->

<!-- end footer -->

<!-- start copyright -->
<div class="wrapper row5" style="height: 50px">
  <div id="copyright" class="hoc clear"> 
    <p class="fl_left">Copyright &copy; @php echo date('Y') @endphp - All Rights Reserved For <a href="#" style="color: #FF8F2B;">Al-Modina Agro Farm</a></p>
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







