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
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.9/js/mdb.min.js"></script>




</head>
<body id="top">
<!-- start mini manu bar -->
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
    <div class="fl_left">
      <ul class="nospace inline pushright">
        <li><i class="fa fa-sign-in" style="font-size: 17px;"></i> <a href="#" style="font-size: 15px; color: #FF8F2B;" data-toggle="modal" data-target="#loginForm">Login</a></li>
      </ul>
    </div>
  </div>
</div>
<!-- end  mini manu bar-->

<!-- start popup window code segment -->
<div class="modal fade" id="loginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Login</h4>
        <!--start alert massage-->
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
        <!--end alert massage-->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	 <form action="{{url('/login') }}" method="post" >
	  <input type="hidden" name="_token" value="{{csrf_token()}}">
      <div class="modal-body mx-3">
        <div class="form-group md-form mb-5">
          <i class="fa fa-envelope prefix grey-text"></i>
          <input type="email" name="email" id="email" class="form-control validate">
          <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
        </div>

        <div class="form-group md-form mb-4">
          <i class="fa fa-lock prefix grey-text"></i>
          <input type="password" name="password" id="password" class="form-control validate">
          <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
        </div>

      </div>
      <div class=" form-group modal-footer d-flex justify-content-center">
        <button type="submit" class="btn btn-deep-orange" name="login">Login</button>
      </div>
	 </form>
    </div>
  </div>
</div>
<!-- end popup window code segment -->




<!--start main manu bar  -->
<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <div id="logo" class="fl_left">
      <h1><a href="home" style="color: #FF8F2B;">Al-Modina Agro Farm</a></h1>
    </div>

    <nav id="mainav" class="fl_right">
      <ul class="clear">
        <li class="active"><a href="home">Home</a></li>
        <li ><a href="about">About</a></li>
        <li ><a href="contact">Contact</a></li>
      </ul>
    </nav>
  </header>
</div>
<!-- end main manu bar -->

<!-- start slider -->
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="1"></li>
    <li data-target="#carousel-example-2" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="view">
        <img class="d-block w-100" src="images/d1.jpg" alt="First slide" style="height: 70vh;">
        <div class="mask rgba-black-light"></div>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="images/d2.jpg" alt="Second slide" style="height: 70vh;">
        <div class="mask rgba-black-light"></div>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="images/d3.jpg" alt="Third slide" style="height: 70vh;">
        <div class="mask rgba-black-light"></div>
      </div>
    </div>
  </div>
  <!--/.Slides-->
</div>
<!-- end slider -->


<!-- start page body -->
<div class="wrapper row3">
  <section class="hoc container clear"> 
    <div class="group">
      <div class="one_third first btmspace-30">
        <h6 class="font-x3 uppercase" style="color: #FF8F2B;">Al-Modina Agro Farm</h6>
      </div>
      <article class="two_third btmspace-30">
        <p class="nospace">Posuere enim sed  odio nam vulputate lorem scelerisque eget ut sed magna finibus auctor dui nec mollis turpis sed sollicitudin urna commodo
        Posuere enim sed  odio nam vulputate lorem scelerisque eget ut sed magna finibus auctor dui nec mollis turpis sed sollicitudin urna commodo
        Posuere enim sed  odio nam vulputate lorem scelerisque eget ut sed magna finibus auctor dui nec mollis turpis sed sollicitudin urna commodo
        Posuere enim sed  odio nam vulputate lorem scelerisque eget ut sed magna finibus auctor dui nec mollis turpis sed sollicitudin urna commodo
        Posuere enim sed  odio nam vulputate lorem scelerisque eget ut sed magna finibus auctor dui nec mollis turpis sed sollicitudin urna commodo
        Posuere enim sed  odio nam vulputate lorem scelerisque eget ut sed magna finibus auctor dui nec mollis turpis sed sollicitudin urna commodo
        Posuere enim sed  odio nam vulputate lorem scelerisque eget ut sed magna finibus auctor dui nec mollis turpis sed sollicitudin urna commodo&hellip;</p>
      </article>
    </div>
  </section>
</div>
<!-- end page body -->




<!-- strat card -->
<!-- <div class="wrapper row3">
  <main class="hoc container clear"> 
    <div class="center btmspace-50">
      <h2 class="heading" style="font-size: 35px;">New Collections</h2>
    </div>
    <ul class="nospace group btmspace-50">
      <li class="one_third first">
        <article class="element">
          <figure><img src="images/demo/1.jpg" alt="" style="height: 40vh;">
            <figcaption><a class="btn small" href="#">Details</a></figcaption>
          </figure>
          <div >
            <h6 class="heading"><a href="#" style="color: #FF8F2B;">product 1</a></h6>
            <p>Cursus massa porta erat ac porttitor finibus velit elit mollis lorem ac&hellip;</p>
          </div>
        </article>
      </li>
      <li class="one_third">
        <article class="element">
          <figure><img src="images/demo/2.jpg" alt="" style="height: 40vh;">
            <figcaption><a class="btn small" href="#">Details</a></figcaption>
          </figure>
          <div >
            <h6 class="heading"><a href="#">product 2</a></h6>
            <p>Cursus massa porta erat ac porttitor finibus velit elit mollis lorem ac&hellip;</p>
          </div>
        </article>
      </li>
      <li class="one_third">
        <article class="element">
          <figure><img src="images/demo/3.jpg" alt="" style="height: 40vh;">
            <figcaption><a class="btn small" href="#">Details</a></figcaption>
          </figure>
          <div >
            <h6 class="heading"><a href="#">product 3</a></h6>
            <p>Cursus massa porta erat ac porttitor finibus velit elit mollis lorem ac&hellip;</p>
          </div>
        </article>
      </li>
    </ul>
    <p class="center nospace"><a class="btn" href="#">See More</a></p>
    <div class="clear"></div>
  </main>
</div> -->
<!-- end card -->


<!-- start footer -->
<div class="wrapper row4 bgded overlay" style="background: #292b2c;">
  <footer id="footer" class="hoc clear"> 
    <div class="one_half first">
      <h6 class="title" style="font-size: 22px; color: #FF8F2B;">contact info</h6>
      <ul class="nospace linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
          Street Name &amp; Number, Town, Postcode/Zip
          </address>
        </li>
        <li><i class="fa fa-phone"></i> +88 0176 8654980</li>
        <li><i class="fa fa-envelope-o"></i> mahbubabid2013@gmail.com</li>
      </ul>
    </div>
    <div class="one_half">
      <br> <br> <br>
      <ul class="nospace linklist contact">
        <li><i class="fa fa-facebook"></i><a href="#" style="color: #FF8F2B;">Al-Modina Agro Farm</a></li>
        <li><i class="fa fa-twitter"></i><a href="#" style="color: #FF8F2B;">Al-Modina Agro Farm</a></li>
        <li><i class="fa fa-youtube"></i><a href="#" style="color: #FF8F2B;">Al-Modina Agro Farm</a></li>
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
  //for slider
  $('.carousel').carousel()

  $('.carousel').carousel({
    interval: 1000
  }

  //for login modal
  $("#loginForm").modal()
</script>
<!-- end js for slider -->

<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<!-- IE9 Placeholder Support -->
<script src="layout/scripts/jquery.placeholder.min.js"></script>
<!-- / IE9 Placeholder Support -->
</body>
</html>