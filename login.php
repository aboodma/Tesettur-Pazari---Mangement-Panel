<?php
$url="http://localhost/edit";


?>
<!DOCTYPE html>

<html lang="en" >
    <!-- begin::Head -->
    <head>
        <meta charset="utf-8" />

        <title>Tesetturpazari | Login </title>
        <meta name="description" content="Latest updates and statistic charts">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

        <!--begin::Web font -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
        <script>
          WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>
        <!--end::Web font -->

        <!--begin::Base Styles -->



				<link href="<?=$url?>/app/assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
				<link href="<?=$url?>/app/assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="<?=$assets?>/assets/jquery-ui.css">
		        <!--end::Base Styles -->

        <link rel="shortcut icon" href="<?=$url?>/app/assets/demo/default/media/img/logo/tesetturpazari.ico" />
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-37564768-1', 'auto');
  ga('send', 'pageview');

</script>
</head>
<div class="m-page-loader m-page-loader--base" id="loader">
    <div class="m-blockui" style="margin-left: 6px;margin-left: 600px;margin-top: 260px;" >
        <span>Please wait...</span>
        <span>
            <div class="m-loader m-loader--brand"></div>
        </span>
    </div>
</div>
    <!-- end::Head -->


    <!-- end::Body -->
    <body  class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >



    	<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page" id="toggle">
  <audio id="error" >
  <source src="<?=$assets?>/assets/error.mp3" type="audio/mpeg">
  </audio>
  <audio id="ok" >
  <source src="<?=$assets?>/assets/ok.mp3" type="audio/mpeg">
  </audio>

				<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-3" id="m_login" style="background-image: url(./app/assets/app/media/img//bg/bg-2.jpg);">
	<div class="m-grid__item m-grid__item--fluid	m-login__wrapper">
		<div class="m-login__container">
			<div class="m-login__logo">
				<a href="#">
				<img src="<?=$url?>/app/assets/app/media/img//logos/d.png" width="40%">
				</a>
			</div>
			<div class="m-login__signin">
				<div class="m-login__head">
					<h3 class="m-login__title">Sign In To Admin</h3>
				</div>
				<form class="m-login__form m-form" id="loginform">
					<div class="form-group m-form__group">
						<input class="form-control m-input" id="username"  type="text" placeholder="kullanici Adi " name="username" autocomplete="on">
					</div>
					<div class="form-group m-form__group">
						<input class="form-control m-input m-login__form-input--last" id="password" type="password" placeholder="Password" name="password">
					</div>
					<div class="row m-login__form-sub">


					</div>
					<div class="m-login__form-action">
						<button id="m_login_signin_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn">Sign In</button>
					</div>
				</form>
			</div>
			<div class="m-login__signup">
				<div class="m-login__head">
					<h3 class="m-login__title">Sign Up</h3>
					<div class="m-login__desc">Enter your details to create your account:</div>
				</div>
				<form class="m-login__form m-form" action="">
					<div class="form-group m-form__group">
						<input class="form-control m-input" type="text" placeholder="Fullname" name="fullname">
					</div>
					<div class="form-group m-form__group">
						<input class="form-control m-input" type="text" placeholder="Email" name="email" autocomplete="off">
					</div>
					<div class="form-group m-form__group">
						<input class="form-control m-input" type="password" placeholder="Password" name="password">
					</div>
					<div class="form-group m-form__group">
						<input class="form-control m-input m-login__form-input--last" type="password" placeholder="Confirm Password" name="rpassword">
					</div>
					<div class="row form-group m-form__group m-login__form-sub">
						<div class="col m--align-left">
							<label class="m-checkbox m-checkbox--light">
							<input type="checkbox" name="agree">I Agree the <a href="#" class="m-link m-link--focus">terms and conditions</a>.
							<span></span>
							</label>
							<span class="m-form__help"></span>
						</div>
					</div>
					<div class="m-login__form-action">
						<button id="m_login_signup_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn">Sign Up</button>&nbsp;&nbsp;
						<button id="m_login_signup_cancel" class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom m-login__btn">Cancel</button>
					</div>
				</form>
			</div>
			<div class="m-login__forget-password">
				<div class="m-login__head">
					<h3 class="m-login__title">Forgotten Password ?</h3>
					<div class="m-login__desc">Enter your email to reset your password:</div>
				</div>
				<form class="m-login__form m-form" action="">
					<div class="form-group m-form__group">
						<input class="form-control m-input" type="text" placeholder="Email" name="email" id="m_email" autocomplete="off">
					</div>
					<div class="m-login__form-action">
						<button id="m_login_forget_password_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn m-login__btn--primary">Request</button>&nbsp;&nbsp;
						<button id="m_login_forget_password_cancel" class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom  m-login__btn">Cancel</button>
					</div>
				</form>
			</div>

		</div>
	</div>
</div>


</div>
<!-- end:: Page -->


    	<!--begin::Base Scripts -->
    	    	<script src="<?=$url?>/app/assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
		    	<script src="<?=$url?>/app/assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
          	<script src="<?=$assets?>/assets/jquery.min.js"></script>
              <script src="<?=$assets?>/assets/jquery-ui.js"></script>
          <script>

            $(document).ready(function () {

              $('#loginform').submit(function (event) {
                var form = $("#loginform");
                var username = $("#username").val();
                var password = $("#password").val();
                var url = "<?=$authcontrol?>/login.php";
                // Stop the browser from submitting the form.
                event.preventDefault();
                // Serialize the form data.
                var formData = $("#loginform").serialize();
                // Submit the form using AJAX.
                $("#loader").css("display", "block");
                $.ajax({
                  type: 'POST',
                  url:url ,
                  data: {
                    username: username,
                    password: password
                  }
                }).done(function (data, status) {
                  $("#loader").css("display", "none");
                  if (data === '2') {

                    document.getElementById("error").play();
                    setTimeout(function () {
                      $( "#toggle" ).effect( "shake" );
                    }, 1000);

                  }
                  if (data === '1') {
                    document.getElementById("ok").play();
                    location.reload();
                  }
                })

              });
            });
          </script>
				<!--end::Base Scripts -->





        <!--begin::Page Snippets -->

                <!--end::Page Snippets -->


            </body>
    <!-- end::Body -->
</html>
