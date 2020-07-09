<!DOCTYPE html>

<html>
<head>
<title>Al-Modina Agro Farm</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">


<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
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

<!--start main page body  -->
<div class="wrapper row3">
  <br><br><br>
	<div class="container-fluid home_main center">
	  <h2 class="text-black" align="center" style="margin-top: 20px; padding:10px 0px 20px 0px"><b>Available Cow's-Info</b></h2>
	  <center>
	  @php
  		$result= DB::table('cow_info')
  		    ->where('status','!=','unavailable')
  			->get();
  	@endphp
		  <div class="search-container">
			  <form class="example" action="" style="margin:auto;max-width:300px">
			    <input type="text" placeholder="Search.." name="search2" id="myInput">
			    <button type="submit" onkeyup="myFunction()" name="search"><i class="fa fa-search"></i></button>
			  </form>
		  </div>
		  <div class="table-responsive col col-lg-6 col-sm-12 col-12" style="text-align: center; margin-top: 10px;">          
		    <table id="myTable" class="table">
    			<thead>
    			  <tr>
    				<th>ID</th>
    				<th>Image</th>
    				<th>Color</th>
    				<th>Options</th>
    			  </tr>
    			</thead>
    			<tbody id="myTable">
  			  @foreach($result as $cow)
  			    <tr>
      				<td>{{$cow->cow_id}}</td>
      				<td><img class="rounded-circle" src="{{url('/')}}/cow_image/{{$cow->cow_image}}" alt="IMG" style=" width: 50px; height: 30px; right:50%; bottom: 50%; vertical-align: middle;"></td>
      				<td>{{$cow->cow_color}}</td>
      				<td>
      					<a href="{{url('/view_cow_info?cow_id='.$cow->c_id) }}"><i class="fa fa-eye grey-text" style="font-size:16px;margin-right:10px;"></i></a>
						<a href="{{url('/update_cow?cow_id='.$cow->c_id) }}"><i class="fa fa-edit grey-text" style="font-size:16px;"></i></a>
					<?php
					if($cow->status!='sell')
					{
				  ?>
					<a href="#"  data-toggle="modal" data-target="#cart_{{$cow->c_id}}"><i class="fa fa-shopping-cart grey-text" aria-hidden="true" title="Add-for-sell" style="font-size:16px;"></i></a>
      				<?php
					}
					else if($cow->status=='sell'){
					?>
					<a href="{{ route('remove_sell', $cow->c_id) }}" ><i class="fa fa-ban grey-text" aria-hidden="true" title="remove-sell" style="font-size:16px;"></i></a>
					<?php
					}
				 ?>
					</td>
  			  @endforeach
  			    </tr>
  			  </tbody>
		    </table>
		  </div>
	  </center>
	</div>
@foreach($result as $cow)
<div class="modal fade" id="cart_{{$cow->c_id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Add for Sell</h4>
        <!--start alert massage-->
        <p class="text-red text-center">
        </p>
        <!--end alert massage-->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  <form action="{{url('/add_for_sell') }}" method="post" >
	  <input type="hidden" name="_token" value="{{csrf_token()}}">
	  
	  <input type="hidden" name="cow_id" value="{{$cow->c_id}}">
      <div class="modal-body mx-3">
	  <p class="fa fa-info-circle font-weight-bold" style="font-size:16px;">  Would you like to add the cow for sell ?</p>
	  <div class="form-group md-form mb-5">
          <i class="fa fa-info-circle prefix grey-text"></i>
          <input type="textarea" name="information" id="information" class="form-control validate">
          <label data-error="wrong" data-success="right" for="defaultForm-email">Cow-Description</label>
        </div>
      </div>
      <div class=" form-group modal-footer d-flex justify-content-center">
        <button type="submit" class="btn btn-deep-orange" name="ok">ok</button>
      </div>
	 </form>
    </div>
  </div>
</div>
@endforeach
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

<script>
$('table.paginated').each(function() {
    var currentPage = 0;
    var numPerPage = 10;
    var $table = $(this);
    $table.bind('repaginate', function() {
        $table.find('tbody tr').hide().slice(currentPage * numPerPage, (currentPage + 1) * numPerPage).show();
    });
    $table.trigger('repaginate');
    var numRows = $table.find('tbody tr').length;
    var numPages = Math.ceil(numRows / numPerPage);
    var $pager = $('<br><div class="pager"></div>');
    for (var page = 0; page < numPages; page++) {
        $('<span class="page-number"></span>').text(page + 1).bind('click', {
            newPage: page
        }, function(event) {
            currentPage = event.data['newPage'];
            $table.trigger('repaginate');
            $(this).addClass('active').siblings().removeClass('active');
        }).appendTo($pager).addClass('clickable');
    }
    $pager.insertAfter('#footer').find('span.page-number:first').addClass('active');
});



$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>


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







