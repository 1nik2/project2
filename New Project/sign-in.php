<?php 

	include "config.php";


	if(isset($_REQUEST['btnok']))
	{
	
		$email = $_REQUEST['email'];
		$password = $_REQUEST['password'];
	
		$select = mysqli_query($con,"SELECT * FROM regi WHERE u_mail='$email' AND u_pass='$password' ");
	
	
		if(mysqli_num_rows($select)>0)
		{
			$fetch = mysqli_fetch_array($select);
			$unam = $fetch['u_name'];
			$_SESSION['unam'] = $unam; 
	
				header('location:header.php');

		}
		else
		{
		
			echo "<script>alert('Invalid User-id or Password');</script>";
		}
	}

?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Nik's Fashion-Sign In</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link rel="stylesheet" href="css/slick.css"/>

        <link href="css/tooplate-little-fashion.css" rel="stylesheet">
        
		<script>
			if (window.history.replaceState) {
			window.history.replaceState(null, null, window.location.href);
			}
		</script>

    </head>
    
    <body>

        <section class="preloader">
            <div class="spinner">
                <span class="sk-inner-circle"></span>
            </div>
        </section>
    
        <main>

            <section class="sign-in-form section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 mx-auto col-12">

                            <h1 class="hero-title text-center mb-5">Sign In</h1>

                            <div class="row">
                                <div class="col-lg-8 col-11 mx-auto">
                                    <form role="form" action="" method="post">

                                        <div class="form-floating mb-4 p-0">
                                            <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required>

                                            <label for="email">Email address</label>
                                        </div>

                                        <div class="form-floating p-0">
                                            <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>

                                            <label for="password">Password</label>
                                        </div>

                                        <input type="submit" name="btnok" class="btn custom-btn form-control mt-4 mb-3">
										
										<p class="text-center"><a href="forgot_password.php">Forgot-password?</a></p>
                                        <p class="text-center">Don’t have an account? <a href="sign-up.php">Create One</a></p>
                                        		
                                    </form>
                                </div>
                            </div>
                            
                        </div>

                    </div>
                </div>
            </section>

        </main>

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/Headroom.js"></script>
        <script src="js/jQuery.headroom.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>