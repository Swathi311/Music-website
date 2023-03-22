<!DOCTYPE HTML>
<html>

<head>
	<title>Musical World</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />	
</head>


<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5c2396fb7a79fc1bddf24b28/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>

<body>
	<header>
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light">
				<a class="navbar-brand" href="index.php">
					Musical World
				</a>
				<button class="navbar-toggler ml-lg-auto ml-sm-5" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav text-center ml-auto">
					
						<li class="nav-item">
							<a class="nav-link scroll" href="" data-target="#modalLRForm" data-toggle="modal">Login/Signup</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</header>

	<div class="banner" id="home">
		<div class="container">
			<div class="banner-text">
				<div class="slider-info text-right">
					<h1 class="text-uppercase">listen to music anywhere.</h1>
					<p class="text-white">If you sing, upload Your Music here and get featured.</p>
					
				</div>
			</div>
		</div>
	</div>
	
	
	
<div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog cascading-modal" role="document">
	  <div class="modal-content">
		<div class="modal-c-tabs">
  
		  <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
			<li class="nav-item">
			  <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fa fa-user mr-1"></i>
				Login</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fa fa-user-plus mr-1"></i>
				Register</a>
			</li>
		  </ul>
  

		  <div class="tab-content">

			<div class="tab-pane fade in show active" id="panel7" role="tabpanel">
  
			  <form action="validate.php" method="post">
			  <div class="modal-body mb-1">
				<div class="md-form form-sm mb-5">
				  <i class="fa fa-envelope prefix"></i>
				  <input type="email" id="modalLRInput10" class="form-control form-control-sm validate" name="email_address" required>
				  <label data-error="wrong" data-success="right" for="modalLRInput10">Your email</label>
				</div>
  
				<div class="md-form form-sm mb-4">
				  <i class="fa fa-lock prefix"></i>
				  <input type="password" id="modalLRInput11" class="form-control form-control-sm validate" name="password" required>
				  <label data-error="wrong" data-success="right" for="modalLRInput11">Your password</label>
				</div>
				<div class="text-center mt-2">
				  <button class="btn btn-info" type="submit" name="login">Log in <i class="fa fa-sign-in ml-1"></i></button>
				</div>
			  </div>
			</form>

			  <div class="modal-footer">
			
				<button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
			  </div>
  
			</div>
	
			<div class="tab-pane fade" id="panel8" role="tabpanel">
  

			  <form action="validate.php" method="post">
			   <div class="modal-body">
				<div class="md-form form-sm mb-5">
					<i class="fa fa-user prefix"></i>
					<input type="text" id="modalLRInput11" class="form-control form-control-sm validate" name="username" required>
					<label data-error="wrong" data-success="right" for="modalLRInput11">User Name</label>
				</div>

				<div class="md-form form-sm mb-5">
					<i class="fa fa-mobile prefix"></i>
					<input type="text" id="modalLRInput15" class="form-control form-control-sm validate" name="mobile_number" required>
					<label data-error="wrong" data-success="right" for="modalLRInput15">Mobile Number</label>
				</div>

				<div class="md-form form-sm mb-5">
				  <i class="fa fa-envelope prefix"></i>
				  <input type="email" id="modalLRInput12" class="form-control form-control-sm validate" name="email_address" required>
				  <label data-error="wrong" data-success="right" for="modalLRInput12">Your email</label>
				</div>
  
				<div class="md-form form-sm mb-5">
				  <i class="fa fa-lock prefix"></i>
				  <input type="password" id="modalLRInput13" class="form-control form-control-sm validate" name="password" required>
				  <label data-error="wrong" data-success="right" for="modalLRInput13">Your password</label>
				</div>
  
				<div class="md-form form-sm mb-4">
				  <i class="fa fa-lock prefix"></i>
				  <input type="password" id="modalLRInput14" class="form-control form-control-sm validate" name="confirm_password" required>
				  <label data-error="wrong" data-success="right" for="modalLRInput14">Repeat password</label>
				</div>
  
				<div class="text-center form-sm mt-2">
				  <button class="btn btn-info" type="submit" name="register">Sign up <i class="fa fa-sign-in ml-1"></i></button>
				</div>
			  </div>
			</form>
			  <div class="modal-footer">
				<button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
			  </div>
			</div>

		  </div>
  
		</div>
	  </div>
	</div>
  </div>
  

  


	<script src="js/jquery-2.2.3.min.js"></script>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.14/js/mdb.min.js"></script>

	<script src="js/move-top.js "></script>
	<script src="js/easing.js "></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll ").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
			$('#forgot').click(function(){
				$('#modalLRForm').modal('hide');
				$('ForgotPasswordModal').modal('show');
			});
		});
	</script>


	<script>
		$(document).ready(function () {
			$().UItoTop({
				easingType: 'easeOutQuart'
			});
		});
	</script>
	<script src="js/SmoothScroll.min.js "></script>

	<script src="js/bootstrap.js">
	</script>

</body>

</html>