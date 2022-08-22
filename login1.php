
<!doctype html>
<html lang="en">
  <head>
  	<title>Login Form</title>
  	<style>
  		.error{
  			color: red;
  		}</style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
		<?php
			include 'db.php';
			session_start();
			// $errorMsg = $_SESSION["message"];

			if(isset($_POST['username'])) {
				$username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $result = mysqli_query($con,"SELECT * FROM student WHERE username='" . $_POST["username"] . "' and password = '". $_POST["password"]."'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
        		// $_SESSION['id'] = $id;
            $_SESSION['username'] = $username;
            header("Location:view.php");
            
        } else {
        	header("Location:login.php?error=Invalid Username and Password!");
          exit();
        }
    } 
     
		?>

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">LOGIN FORM</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
							<div class="text w-100">
								<h2>Welcome to login</h2>
								<p>Don't have an account?</p>
								<a href="login/modal/signup.php" class="btn btn-white btn-outline-white" data-toggle="modal" data-target="#modal_frm" id="signup">SIGN UP</a>
							</div>
			      </div>
						<div class="login-wrap p-4 p-lg-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">SIGN IN</h3>
			      		</div>   
								
			      	</div>

							<form method="POST" class="signin-form">

			      		<div class="form-group mb-3">
			      			<label class="label" for="name">Username</label>
			      			<input type="text" class="form-control" name="username" placeholder="Username">
			      		</div>
		            <div class="form-group mb-3">
		            	<label class="label" for="password">Password</label>
		              <input type="password" class="form-control" name="password" placeholder="Password">
		            </div>
		            <div class="message">
		            	<?php if(isset($_GET['error'])){
		            		?>
		            		<p class="error"><?php echo $_GET['error'];?></p>
		            	<?php } ?>		            	
		            </div>
		           
		            <div class="form-group">
		            	<button class="form-control btn btn-primary submit px-3" style="text-decoration: none; color:floralwhite; font:bold ;">SIGN IN</button>
		            </div>
		             <div class="form-group d-md-flex">
		            	<div class="w-50 text-left">
			            	<label class="checkbox-wrap checkbox-primary mb-0">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
										</label>
									</div>
									
		            </div>
		          </form>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  

	</body>
</html>




<!doctype html>
<html lang="en">
  <head>
  	<title>Sign Up</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	
		<link rel="stylesheet" href="modal/css/ionicons.min.css">
		<link rel="stylesheet" href="modal/css/style.css">
  </head>
  <body>
		
		<div class="modal fade" id="modal_frm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close d-flex align-items-center justify-content-center" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true" class="ion-ios-close"></span>
		        </button>
		      </div>
		      <div class="modal-body p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="ion-ios-person"></span>
		      	</div>
		      	<h3 class="text-center mb-4">Sign Up</h3>

		      	<form id="frm" class="login-form">

		      		<div class="form-group">
		      			<input type="text" id="username" class="form-control rounded-left" placeholder="Username">
		      		</div>
	            <div class="form-group d-flex">
	              <input type="text" id="email" class="form-control rounded-left" placeholder="Email Id">
	            </div>
	            <div class="form-group">
		      			<input type="password" id="password" class="form-control rounded-left" placeholder="Password">
		      		</div>
	            <div class="form-group d-flex">
	              <input type="password" id="confirm" class="form-control rounded-left" placeholder="Confirm Password">
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">SIGN UP</button>
	            </div>
	             <div class="modal-footer justify-content-center">
		      	<p>By creating an account, Your agree to our terms.</p>
		      </div>
	            
	          </form>
		      </div>
		     
		    </div>
		  </div>
		</div>
		<script>
			$(document).on('click','#add',function(e) {
		var data = $("#frm").serialize();
		$.ajax({
			data: data,
			type: "post",
			url: "action.php",
			success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						$('#modal_frm').modal('hide');
						alert('Data added successfully !'); 
                        location.reload();						
					}
					else if(dataResult.statusCode==201){
					   alert(dataResult);
					}
			}
		});
	});
	
	
      /*$(document).ready(function(){
        var current_row=null;
        $("#signup").click(function(){
          $("#modal_frm").modal();
        });
        
        $("#frm").submit(function(event){
          event.preventDefault();
          $.ajax({
            url:"action.php",
            type:"post",
            data:$("#frm").serialize(),
            beforeSend:function(){
              $("#frm").find("input[type='submit']").val('Loading...');
            },
            success:function(res){
              if(res){
                if($("#uid").val()=="0"){
                  $("#tbody").append(res);
                }else{
                  $(current_row).html(res);
                }
              }else{
                alert("Failed Try Again");
              }
              $("#frm").find("input[type='submit']").val('Submit');
              clear_input();
              $("#modal_frm").modal('hide');
            }
          });
        });


        });*/
    </script>
    <script src="modal/js/jquery.min.js"></script>
    <script src="modal/js/popper.js"></script>
    <script src="modal/js/bootstrap.min.js"></script>
    <script src="modal/js/main.js"></script>
  </body>
</html>