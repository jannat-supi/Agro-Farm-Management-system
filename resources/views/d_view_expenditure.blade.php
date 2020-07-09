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
	$monthyear=$_REQUEST['monthyear'];
	


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
            <a class="nav-link " data-value="home" href="add_expenditure" style="color: #FF8F2B; font-size: 18px;">Daily Expenditure</a>       
          </li>
				  <li class="nav-item"> 
            <a class="nav-link " data-value="home" href="monthly_expenditure" style="color: #FF8F2B; font-size: 18px;">Monthly Expenditure Details</a>       
					</li>
					<li class="nav-item"> 
            <a class="nav-link " data-value="home" href="show_expenditure" style="color: #FF8F2B; font-size: 18px;">Show Expenditure</a>       
					</li>   
					<li class="nav-item">
            <a class="nav-link" data-value="about_us" href="dashboard" style="color: #FF8F2B; font-size: 18px;">Dashboard</a>        
          </li>   
        </ul> 
      </div>
    </nav>
</div>
<!-- end main manu bar -->

<!--start main page body  -->
<div class="wrapper row3">
  <div class="col col-lg-8 col-sm-12 col-12 offset-lg-2 working_div">
    <br><br>
    <div class="container-fluid home_main center">
	  <h2 class="text-black" align="center" style="margin-top: 20px; padding:10px 0px 20px 0px;"><b>{{$monthyear}} Expenditure Details</b></h2>
	  <center>
  	 @php
  		 $data=DB::table('expenditure')	   
  			 ->where(DB::raw("(DATE_FORMAT(date,'%M-%Y'))"),$monthyear)
  			 ->where('food','>','0')
  			 ->get();
  	 @endphp
	 
      <div class="table-responsive col col-lg-12 col-sm-12 col-12" style="text-align: center; margin-top: 10px;">          
		    <table id="myTable" class="table">
    			<thead>
    			  <tr>
    				<th>Date</th>
					<th>Uploaded By</th>
    				<th>Travel</th>
    				<th>Food</th>
    				<th>Other</th>
    				<th>Total</th>
    			  </tr>
    			</thead>
    			<tbody>
    			@foreach($data as $cost)
				   @php
						$u_id=$cost->user_id;
						$update= DB::table('user')
						  ->where('user_id',$u_id)
						  ->first()
				   @endphp
    			  <tr>
				    <td>{{$cost->date}}</td>
					<td>{{$update->user_name}}</td>
      				<td>{{$cost->travelling_cost}}</td>
      				<td>{{$cost->food}}</td>
      				<td>{{$cost->other}}</td>
      				@php
      					$total=0;
      					$t=0;
      					$f=0;
      					$o=0;
      					$t=$cost->travelling_cost;
      					$f=$cost->food;
      					$o=$cost->other;
      					$total= $t+$f+$o;
      				@endphp
  				    <td>{{$total}}</td>
  			  @endforeach
  			    </tr>
  			  </tbody>
  		  </table>
		  </div>
    </center>
    <br><br><br><br>
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









