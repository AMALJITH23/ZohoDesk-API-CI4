
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>


<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" >

<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<!-- <script src="<?php echo base_url(); ?>custom_plugins/plugins/iCheck/icheck.min.js"></script> -->
<!-- iCheck -->
<!-- <script src="<?php echo base_url(); ?>template/plugins/iCheck/icheck.min.js"></script>	
<script src="<?php echo base_url(); ?>assets/bootstrap-notify/bootstrap-notify.min.js"></script> -->

<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/png" href="<?php echo base_url() ; ?>/favicon.ico">
	<title>Zoho Ticket Desk</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="styles.css">
    <style>
        /* Made with love by Mutiullah Samim*/

            @import url('https://fonts.googleapis.com/css?family=Numans');

            html,body{
            /* background-image: url('http://getwallpapers.com/wallpaper/full/a/5/d/544750.jpg'); */
            /* background-image: url('http://getwallpapers.com/wallpaper/full/1/a/8/286740.jpg'); */
            background-image: url('<?php echo base_url() ; ?>/bg.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            height: 100%;
            font-family: 'Numans', sans-serif;
            }

            .container{
            height: 100%;
            align-content: center;
            }

            .card{
            margin-top: auto;
            margin-bottom: auto;
            width: 400px;
            background-color: rgba(0,0,0,0.5) !important;
            }

            .social_icon span{
            font-size: 60px;
            margin-left: 10px;
            color: #FFC312;
            }

            .social_icon span:hover{
            color: white;
            cursor: pointer;
            }

            .card-header h3{
            color: white;
            }

            .social_icon{
            position: absolute;
            right: 20px;
            top: -45px;
            }

            .input-group-prepend span{
            width: 50px;
            background-color: #FFC312;
            color: black;
            border:0 !important;
            }

            input:focus{
            outline: 0 0 0 0  !important;
            box-shadow: 0 0 0 0 !important;

            }

            .remember{
            color: white;
            }

            .remember input
            {
            width: 20px;
            height: 20px;
            margin-left: 15px;
            margin-right: 5px;
            }

            .login_btn{
            color: black;
            background-color: #FFC312;
            width: 100px;
            }

            .login_btn:hover{
            color: black;
            background-color: white;
            }

            .links{
            color: white;
            }

            .links a{
            margin-left: 4px;
            }

			/* spinner button test */
			@base:#212121;
			@color:silver;
			@accent:#27ae60;
			@borderRadius:4px;

			.twoToneButton {
				display: inline-block;
				border:1px solid darken(@base,50%);
				outline:none;
				padding:10px 20px;
				line-height: 1.4;
				background: @base; 
				background: linear-gradient(to bottom,  lighten(@base,20%) 0%,lighten(@base,15%) 50%,darken(@base,5%) 51%,darken(@base,2.5%) 100%);      
				border-radius: @borderRadius;
				border: 1px solid darken(@base,30%);
				color:lighten(@color,10%);
				text-shadow: darken(@color,80%) -1px -1px 0px;
				
				position: relative;
				transition: padding-right .3s ease;
				font-weight:700;
				box-shadow:0 1px 0 lighten(@base,30%) inset, 0px 1px 0 lighten(@base,10%);
				
			}

			.twoToneButton:hover {
				box-shadow:0 0 10px darken(@base,10%) inset, 0px 1px 0 lighten(@base,10%);
				color:lighten(@color,20%);
			}

			.twoToneButton:active{
				box-shadow:0 0 10px darken(@base,10%) inset, 0px 1px 0 lighten(@base,10%);
				color:lighten(@color,30%);
				background: darken(@base,10%); 
				background: linear-gradient(to bottom,  lighten(@base,10%) 0%,lighten(@base,5%) 50%,darken(@base,5%) 51%,darken(@base,10%) 100%);  
				
			}

			.twoToneButton.spinning {
				background-color: @base;
				padding-right: 40px;
			}
			.twoToneButton.spinning:after {
				content: '' !important;
				position: absolute !important;
				right: 6px !important;
				top: 50% !important;
				width: 20px !important;
				height: 20px !important;
				box-shadow: 0px 0px 0 1px darken(@base,10%) !important;
				position: absolute !important;
				border-radius: 50% !important;
				animation: rotate360 .5s infinite linear, exist .1s forwards ease !important;
			}

			.twoToneButton.spinning:before {
				content: "" !important;
				width: 20px !important;
				height: 20px !important;
				border-radius: 50% !important;
				right: 6px !important;
				top: 50% !important;
				position: absolute !important;
				border: 2px solid darken(@base,40%) !important;
				border-right: 3px solid @accent !important;
				border: 3px solid #b08916;
                border-right-color: black;
				animation: rotate360 .5s infinite linear, exist .1s forwards ease  !important;
				
			}



			@keyframes rotate360 { 
				100% {
					transform: rotate(360deg);
				}
			}
			@keyframes exist { 
				100% {
					width: 15px;
					height: 15px;
					margin: -8px 5px 0 0;
				}
			}

			body {background:@base; }
			/* spinner button test */
    </style>
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Zoho Ticket Desk </h3>
				<div class="d-flex justify-content-end social_icon">
					<!-- <span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span> -->
					<!-- <span><i class="fab fa-car-square"></i></span> -->
					<!-- <span><i class="fab fa-twitter-square"></i></span> -->
				</div>
			</div>
			<div class="card-body">
				<form id="loginForm" action="" method="post">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="username"
                        required="true" name="username" value="">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="password"
                        required="true" name="password"value="">
					</div>
					<!-- <div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div> -->
					<div class="form-group">
						<!-- <button type="submit" id="submitBtn"  value="Login" class="btn float-right login_btn">Login</button> -->
						<button type="submit" 
								id="submitBtn"  
								value="Login" 
								class="btn float-right login_btn twoToneButton"
								style="width: auto !important;" >
								Sign In
						</button>
						<!-- <button class="twoToneButton">Spin In</button> -->
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

	<script>
		$('#loginForm').submit(function (e) {
			var twoToneButton = document.querySelector('.twoToneButton');
			twoToneButton.innerHTML = "Signing In";
			twoToneButton.classList.add('spinning');
			e.preventDefault();
			e.returnValue = false;
			if ($('input.podkres1').length > 0) {
				// do nothing
			} else {
				var $form = $(this);
				$("#submitBtn").attr("disabled", true);
				$.ajax({
					type: 'post',
					url: '<?php echo base_url(); ?>/login/ajax_login',
					data: $("#loginForm").serialize(), //only input
					success: function (data) { // your success handler
						data = JSON.parse(data);
						console.log("login data res :", data);
						console.log("data.status :", data.status);
						if (data.status == true) {
								toastr.options = {
								"closeButton": false,
								"debug": false,
								"newestOnTop": false,
								"progressBar": false,
								"positionClass": "toast-top-right",
								"preventDuplicates": false,
								"onclick": null,
								"showDuration": "300",
								"hideDuration": "1000",
								"timeOut": "5000",
								"extendedTimeOut": "1000",
								"showEasing": "swing",
								"hideEasing": "linear",
								"showMethod": "fadeIn",
								"hideMethod": "fadeOut"
								}
								toastr["success"]("Loading...", "Login Success.")
							//test
							setTimeout(function () {
								location.reload();
							}, 1000);



						} else {
						$("#submitBtn").attr("disabled", false);	
						twoToneButton.classList.remove('spinning');
						twoToneButton.innerHTML = "Sign In";
						console.log("data.status is in false");
							toastr.options = {
							"closeButton": false,
							"debug": false,
							"newestOnTop": false,
							"progressBar": false,
							"positionClass": "toast-top-right",
							"preventDuplicates": false,
							"onclick": null,
							"showDuration": "300",
							"hideDuration": "1000",
							"timeOut": "5000",
							"extendedTimeOut": "1000",
							"showEasing": "swing",
							"hideEasing": "linear",
							"showMethod": "fadeIn",
							"hideMethod": "fadeOut"
							}
						toastr["error"]("Invalid credentials...", "Attempt Failed.");
						}
					},
					error: function () { // your error handler
						console.log("Err something went wrong 401");
						$("#submitBtn").attr("disabled", false);
						twoToneButton.classList.remove('spinning');
						twoToneButton.innerHTML = "Sign In";
						console.log("data.status is in false");
							toastr.options = {
							"closeButton": false,
							"debug": false,
							"newestOnTop": false,
							"progressBar": false,
							"positionClass": "toast-top-right",
							"preventDuplicates": false,
							"onclick": null,
							"showDuration": "300",
							"hideDuration": "1000",
							"timeOut": "5000",
							"extendedTimeOut": "1000",
							"showEasing": "swing",
							"hideEasing": "linear",
							"showMethod": "fadeIn",
							"hideMethod": "fadeOut"
							}

						toastr["warning"]("Something went wrong.", "Attempt Failed.");

					},
					complete: function () {
						console.log("Err something went wrong 231");
					}
				});
			}
		});

	</script>

</body>
</html>