<?php

	include "config.php";

		//echo $_SESSION['mobile'];

		$mob = $_SESSION['mobile'];				

			$vom = mysqli_query($con, "select * from regi where u_mob='$mob' ");
			$kim = mysqli_fetch_array($vom);
			
			$_SESSION['unam'] = $kim['u_name'];
			
		if (isset($_REQUEST['cng_pass']))
		{
			$upass = $_REQUEST['upassword'];
			$repass = $_REQUEST['repassword'];

				//echo $upass,$repass,$mob;
    
			if ($upass !== $repass)
			{
				echo "<script>alert('Your Password And Re-type Password Is Different..!!')</script>";
			} 
			else
			{
				mysqli_query($con,"update regi set u_pass='$upass' where u_mob='$mob' ");

				$_SESSION['upass'] = true;  
	 
				header("location:regi_success.php");
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

        <title>Nik's Fashion-Update Password</title>

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

            <section class="update-password-form section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 mx-auto col-12">

                            <h1 class="hero-title text-center mb-5">Change Your Password</h1>                           
							
                            <div class="row">
                                <div class="col-lg-8 col-11 mx-auto">
                                    <form role="form" name="update_form" method="post" action="" >

                                        <div class="form-floating my-4">
                                            <input type="password" name="upassword" id="upassword"  class="form-control" placeholder="Change Your Password" required>

                                            <label for="password">Change Your Password</label>
                                        </div>
                                       
									   <div class="form-floating my-4">
                                            <input type="password" name="repassword" id="repassword"  class="form-control" placeholder="Re-tyrp Your Password" required>

                                            <label for="repassword">Re-tyrp Your Password</label>
                                        </div>
										
										 <button type="submit" name="cng_pass" class="btn custom-btn form-control mt-4 mb-3">
                                         Change My Password  
                                        </button>
										
										
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
