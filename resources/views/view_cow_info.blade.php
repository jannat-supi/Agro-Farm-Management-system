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
                    <a class="nav-link Active" data-value="home" href="cow_info" style="color: #FF8F2B; font-size: 18px;">Cow-info</a>        
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-value="about_us" href="add_cow" style="color: #FF8F2B; font-size: 18px;">Add Cow</a>        
                </li>  
                <li class="nav-item"> 
                    <a class="nav-link " data-value="contact_us" href="cow_list" style="color: #FF8F2B; font-size: 18px;">All Cow-list</a>       
                </li> 
                <li class="nav-item"> 
                    <a class="nav-link " data-value="contact_us" href="dashboard" style="color: #FF8F2B; font-size: 18px;">Dashboard</a>       
                </li>
            </ul> 
        </div>
    </nav>
</div>
<!-- end main manu bar -->

<?php
	$cow_id=$_REQUEST['cow_id'];
	$cow= DB::table('cow_info')
			->where('c_id',$cow_id)
			->first()
?>


<!--start main page body  -->
<div class="wrapper row3 col col-lg-8 offset-lg-2">
	<div class="container-fluid">
      <br><br><br><br>
      <div class="col col-lg-10 col-sm-12 col-12 offset-lg-1 shadow">
				<br><br>
        <h2 class="text-black" align="center"><b>View Cow-Info</b></h2>
        <br>
				<center>
          <div class="table-responsive col col-lg-10 col-sm-12 col-12" style="text-align: center; border: 0;">
              <table id="table1" class="table" style="border:0;">
                <tbody>
						      <tr class="row">
								    <td class="col col-lg-10 col-sm-12 col-12 offset-lg-1 " align="center" style="padding:5px 20px 5px 20px; border-top: 0;" ><img src="{{url('/')}}/cow_image/{{$cow->cow_image}}" ></td>
						      </tr>
							    <tr class="row">
                    <td class="col col-lg-4 col-sm-4 col-4"><b>ID:</b></td>
                    <td class="col col-lg-8 col-sm-8 col-8"><a href="#"><b>{{$cow->cow_id}}</b></a></td>
                  </tr>
                  <tr class="row">
                    <td class="col col-lg-4 col-sm-4 col-4"><b>Type:</b></td>
                    <td class="col col-lg-8 col-sm-8 col-8"><a href="#"><b>{{$cow->cow_type}}</b></a></td>
                  </tr>
                  <tr class="row">
                    <td class="col col-lg-4 col-sm-4 col-4"><b>color:</b></td>
                    <td class="col col-lg-8 col-sm-8 col-8"><a href="#"><b>{{$cow->cow_color}}</b></a></td>
                  </tr>
                  <tr class="row">
                    <td class="col col-lg-4 col-sm-4 col-4"><b>Buying-Price:</b></td>
                    <td class="col col-lg-8 col-sm-8 col-8"><a href="#"><b>{{$cow->buying_price}}</b></a></td>
                  </tr>
                  <tr class="row">
                    <td class="col col-lg-4 col-sm-4 col-4"><b>Buying-Date:</b></td>
                    <td class="col col-lg-8 col-sm-8 col-8"><a href="#"><b>{{$cow->buying_date}}</b></a></td>
                  </tr>
                  <tr class="row">
                    <td class="col col-lg-4 col-sm-4 col-4"><b>Buying-Place:</b></td>
                    <td class="col col-lg-8 col-sm-8 col-8"><a href="#"><b>{{$cow->buying_place}}</b></a></td>
                  </tr>
                  <tr class="row">
                    <td class="col col-lg-4 col-sm-4 col-4"><b>Current-Price:</b></td>
                    <td class="col col-lg-8 col-sm-8 col-8"><a href="#"><b>{{$cow->buying_price + $cow->cost}}</b></a></td>
                  </tr>
                  <tr class="row">
                    <td class="col col-lg-4 col-sm-4 col-4"><b>Selling-Date:</b></td>
                    <td class="col col-lg-8 col-sm-8 col-8"><a href="#"><b>{{$cow->selling_date}}</b></a></td>
                  </tr>
	                <tr class="row">
                    <td class="col col-lg-4 col-sm-4 col-4"><b>Selling-price:</b></td>
                    <td class="col col-lg-8 col-sm-8 col-8"><a href="#"><b>{{$cow->selling_price}}</b></a></td>
                  </tr>
	                <tr class="row">
                    <td class="col col-lg-4 col-sm-4 col-4"><b>Status:</b></td>
                    <td class="col col-lg-8 col-sm-8 col-8"><a href="#"><b>{{$cow->status}}</b></a></td>
                  </tr>
				  <?php
					If($cow->status!='unavailable')
					{
				  ?>
					  <tr class="row">
						<td class="col col-lg-12 col-sm-12 col-12 "><a href="{{url('/update_cow?cow_id='.$cow->c_id) }}" class="btn text-white" style="background: #FF8F2B; "><b>Edit Info</b></a></td>
					  </tr>
				<?php
					}
				?>
                </tbody>
              </table>
              <br><br>
          </div>
        </center>
			</div>
			<br><br><br><br><br>
	</div>
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







