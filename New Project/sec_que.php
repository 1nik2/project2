<?php

	include "config.php";

	//echo $_SESSION['mobile'];

		$mob = $_SESSION['mobile'];				

			$res = mysqli_query($con,"select u_prsq from regi where u_mob='$mob' ");
			
			$red = mysqli_fetch_array($res);
 
			//echo $red['u_prsq'];


				if(isset($_REQUEST['sub_ans']))
				{
					$i = $_REQUEST['uprsq'];
					$j = $_REQUEST['answer'];
					$k = $_SESSION['mobile'];
    
					//echo $i,$j,$k;
						
						$wr = mysqli_query($con, "select u_prsq , u_ans from regi where u_prsq='$i' AND u_ans='$j' AND u_mob='$k' ");
				
							$wrc = mysqli_fetch_array($wr);
	
					//echo $wrc['u_prsq'];
					//echo $wrc['u_ans'];
    
					if(mysqli_num_rows($wr)!=0)
					{
						header("location:update_password.php");
					}
					else
					{
						echo "<script>alert('Your Answer Is Wrong..!!')</script>";
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

        <title>Nik's Fashion Security Question</title>

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

            <section class="sec_que-form section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 mx-auto col-12">

                            <h1 class="hero-title text-center mb-5">Password Recovery Security Question</h1>

                            <div class="row">
                                <div class="col-lg-8 col-11 mx-auto">
                                    <form role="form" action="" method="post">

                                        <div class="form-floating mb-4 p-0">
                                            <input type="text" name="uprsq" id="uprsq" class="form-control" placeholder="Password Recovery Security Question" style="color:blue; font-weight:bold;" value="<?php 
													echo @$red['u_prsq']; 
											
											?>" readonly required>

                                            <label for="rp" style="color:grey;" >Password Recovery Security Question</label>
                                        </div>

                                        <div class="form-floating p-0">
                                            <input type="text" name="answer" id="answer" class="form-control" placeholder="Type Your Answer" required>

                                            <label for="answer">Type Your Answer</label>
                                        </div>

                                        <button type="submit" name="sub_ans" class="btn custom-btn form-control mt-4 mb-3">
                                         Submit Answer  
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
