<?php

include "config.php";

	if(isset($_REQUEST['btnokk']))
	{
		$g = $_REQUEST['name'];
		$h = $_REQUEST['mobile'];

			$rev = mysqli_query($con,"select * from regi where u_name='$g' AND u_mob=$h")or die("select error");

			if(mysqli_num_rows($rev)!=0)
			{
				$rec = mysqli_fetch_array($rev);				//FETCH DATA FROM REGISTRATION TABLE
				//echo $rec['u_mob'];
		
				$_SESSION['mobile'] = $rec['u_mob'];		 // CREATE SESSION FOR MOBILE NUMBER
        
				//echo $_SESSION['mobile'];
					header("location:sec_que.php");
			}

			else
			{
				echo "<script>alert('Invalid User Name or Mobile Number..!!')</script>";
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

        <title>Nik's Fashion forgot password</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link rel="stylesheet" href="css/slick.css"/>

        <link href="css/tooplate-little-fashion.css" rel="stylesheet">
        
	<script>
		if (window.history.replaceState) 
		{
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

            <section class="forgot-password-form section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 mx-auto col-12">

                            <h1 class="hero-title text-center mb-5">Forgot-Password</h1>

                            <div class="row">
                                <div class="col-lg-8 col-11 mx-auto">
                                    <form role="form" action="" method="post">

                                        <div class="form-floating mb-4 p-0">
                                            <input type="text" name="name" id="name" class="form-control" placeholder="Full Name" required>
                                            <label for="name">Full Name</label>
                                        </div>

                                        <div class="form-floating p-0">
                                            <input type="text" name="mobile" id="mobile" class="form-control" placeholder="Mobile Number" required>
                                            <label for="mobile">Mobile Number</label>
                                        </div>

                                        <button type="submit" name="btnokk" class="btn custom-btn form-control mt-4 mb-3">
                                         Submit   
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
