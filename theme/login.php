<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<!-- Title here -->
		<title>About Us - Louisa Coffee</title>
		<!-- Description, Keywords and Author -->
		<meta name="description" content="Your description">
		<meta name="keywords" content="Your,Keywords">
		<meta name="author" content="ResponsiveWebInc">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- Styles -->
		<!-- Bootstrap CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- Portfolio CSS -->
		<link href="css/prettyPhoto.css" rel="stylesheet">
		<!-- Font awesome CSS -->
		<link href="css/font-awesome.min.css" rel="stylesheet">	
		<!-- Custom Less -->
		<link href="css/less-style.css" rel="stylesheet">	
		<!-- Custom CSS -->
		<link href="css/style.css" rel="stylesheet">
		<!--[if IE]><link rel="stylesheet" href="css/ie-style.css"><![endif]-->
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="#">
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.0-rc.3/angular.min.js"></script>
		<script src="menu.js"></script>
	</head>
	
	<body>
		
			
		<!-- Shopping cart Modal -->
		<div class="modal fade" id="shoppingcart1" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Shopping Cart</h4>
					</div>
					<div class="modal-body">
						<!-- Items table -->
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Name</th>
									<th>Quantity</th>
									<th>Price</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><a href="#">Exception Reins Evocative</a></td>
									<td>2</td>
									<td>$200</td>
								</tr>
								<tr>
									<td><a href="#">Taut Mayoress Alias Appendicitis</a></td>
									<td>1</td>
									<td>$190</td>
								</tr>
								<tr>
									<td><a href="#">Sinter et Molests Perfectionist</a></td>
									<td>4</td>
									<td>$99</td>
								</tr>
								<tr>
									<th></th>
									<th>Total</th>
									<th>$489</th>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Continue Shopping</button>
						<button type="button" class="btn btn-info">Checkout</button>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
		<!-- Model End -->
		
		<!-- Page Wrapper -->
		<div class="wrapper">
		
			<!-- Header Start -->
			
			<div class="header">
				<div class="container">
					<!-- Header top area content -->
					<div class="header-top">
						<div class="row">
							<div class="col-md-3 col-sm-3">
								<!-- Header top left content contact -->
								<div class="header-contact">
									<!-- Contact number -->
									<span><i class="fa fa-phone red"></i>02-2766-6672</span>
								</div>
							</div>
							<div class="col-md-3 col-sm-3">
								<!-- Header top right content search box -->
								<div class=" header-search">
									<form class="form" role="form">
										<div class="input-group">
										  <input type="text" class="form-control" placeholder="Search...">
										  <span class="input-group-btn">
											<button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
										  </span>
										</div>
									</form>
								</div>
							</div>

							<div class="col-md-3 col-sm-3">
								<div class="pull-right">
								<a href="login.php" class="btn btn-danger btn-sm" >會員登入</a>
								</div>
							</div>

							
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 col-sm-5">
							<!-- Link -->
							<a href="index.html">
								<!-- Logo area -->
								<div class="logo">
									<img class="img-responsive" src="img/logo.jpg" alt="" />
									<!-- Heading -->
									<h1>Louisa Coffee </h1>
									<!-- Paragraph -->
									<h3>永春概念店</h3>
								</div>
							</a>
						</div>
						<div class="col-md-8 col-sm-7">
							<!-- Navigation -->
							<nav class="navbar navbar-default navbar-right" role="navigation">
								<div class="container-fluid">
									<!-- Brand and toggle get grouped for better mobile display -->
									<div class="navbar-header">
										<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
											<span class="sr-only">Toggle navigation</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
									</div>

									<!-- Collect the nav links, forms, and other content for toggling -->
									<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
										<ul class="nav navbar-nav">
											<li><a href="index.html"><img src="img/nav-menu/slider4.jpg" class="img-responsive" alt="" /> Home</a></li>
											<li class="dropdown hidden-xs">
												<a href="menu1.php"><img src="img/nav-menu/slider5.jpg" class="img-responsive" alt="" /> Menu </a>
												
											</li>
											
											
											<li><a href="aboutus.html"><img src="img/nav-menu/slider7.jpg" class="img-responsive" alt="" /> About</a></li>
										</ul>
									</div><!-- /.navbar-collapse --> 
								</div><!-- /.container-fluid -->
							</nav>
						</div>
					</div>
				</div> <!-- / .container -->
			</div>
			
			<!-- Header End -->
			
			<!-- Banner Start -->
			
			<div class="banner padd">
				<div class="container">
					<!-- Image -->
					<img class="img-responsive" src="img/crown-white.png" alt="" />
					<!-- Heading -->
					<h2 class="white">Log in</h2>
					<ol class="breadcrumb">
						<li><a href="index.html">Home</a></li>
						<li class="active">Log in</li>
					</ol>
					<div class="clearfix"></div>
				</div>
			</div>
			
			<!-- Banner End -->
			
			<!-- Form Start -->


				<div class="row">
  					<div class="col-md-6 col-md-offset-3">
  						<form class="form-horizontal" role="form" action="menu1.php" method="post">
  							<div class="form-group">
    							<label for="inputEmail3" class="col-sm-2 control-label">帳號</label>
    								<div class="col-sm-10">
      									<input type="text" class="form-control" id="inputEmail3" name="username" placeholder="請輸入帳號">
   									</div>
  							</div>
 							<div class="form-group">
   			 					<label for="inputPassword3" class="col-sm-2 control-label">密碼</label>
    							<div class="col-sm-10">
      								<input type="password" class="form-control" id="inputPassword3" name="password"placeholder="請輸入密碼">
    							</div>
  							</div>
 							<!--<div class="form-group">
    							<div class="col-sm-offset-2 col-sm-10">
      								<div class="checkbox">
        								<label>
         		 							<input type="checkbox"> 記得我
        								</label>
      								</div>
    							</div>
  							</div>-->
  							<div class="form-group">
    							<div class="col-sm-offset-2 col-sm-10">
      								<button type="submit" class="btn btn-default">登入</button>
    							</div>
  							</div>
						</form>
  					
  					</div>
				</div>
				
			
			<!-- Form End -->
			
			<!-- Footer Start -->
			
			<div class="footer padd">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-6">
							<!-- Footer widget -->
							<div class="footer-widget">
								<!-- Logo area -->
								<div class="logo">
									<img class="img-responsive" src="img/logo.jpg" alt="" />
									<!-- Heading -->
									<h1>Louisa Coffee</h1>
								</div>
								<!-- Paragraph -->
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua.</p>
								
								<!-- Heading -->
							</div> <!--/ Footer widget end -->
						</div>
						
						<div class="clearfix visible-sm"></div>
						
						<div class="col-md-3 col-sm-6">
							<!-- Footer widget -->
							<div class="footer-widget">
								<!-- Heading -->
								<h4>Contact Us</h4>
								<div class="contact-details">
									<!-- Address / Icon -->
									<i class="fa fa-map-marker br-red"></i> <span>板南線永春捷運站1號出口左轉永吉路326巷<br /><永吉公園旁></span>
									<div class="clearfix"></div>
									<!-- Contact Number / Icon -->
									<i class="fa fa-phone br-green"></i> <span>02-2766-6672</span>
									<div class="clearfix"></div>
									<!-- Email / Icon -->
									<i class="fa fa-envelope-o br-lblue"></i> <span><a href="#">週一 - 週六: 7:00 - 21:00<br/>週日: 8:00 - 21:00</a></span>
									<div class="clearfix"></div>
								</div>
								<!-- Social media icon -->
								<div class="social">
									<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
									
								</div>
							</div> <!--/ Footer widget end -->
						</div>
					</div>
					<!-- Copyright -->
					<div class="footer-copyright">
						<!-- Paragraph -->
						<p>&copy; Copyright 2014 <a href="#">Louisa coffee 永春概念店</a></p>
					</div>
				</div>
			</div>
			
			<!-- Footer End -->
			
		</div><!-- / Wrapper End -->
		
		
		<!-- Scroll to top -->
		<span class="totop"><a href="#"><i class="fa fa-angle-up"></i></a></span> 
		
		
		
		<!-- Javascript files -->
		<!-- jQuery -->
		<script src="js/jquery.js"></script>
		<!-- Bootstrap JS -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Pretty Photo JS -->
		<script src="js/jquery.prettyPhoto.js"></script>
		<!-- Respond JS for IE8 -->
		<script src="js/respond.min.js"></script>
		<!-- HTML5 Support for IE -->
		<script src="js/html5shiv.js"></script>
		<!-- Custom JS -->
		<script src="js/custom.js"></script>
		<!-- JS code for this page -->
		<script>
		</script>
	</body>	
</html>