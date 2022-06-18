<?php

	include "config.php";

?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Nik's Fashion-Sign Up</title>

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

            <section class="sign-up-form section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 mx-auto col-12">

                            <h1 class="hero-title text-center mb-5">Sign Up</h1>                           
							
	<?php 
	
	// USER DATA INSERT
	
		if(isset($_REQUEST['btnok']))
		{
			$a = $_REQUEST['name'];
			$b = $_REQUEST['mobile'];
			$c = $_REQUEST['email'];
			$d = $_REQUEST['password'];
			$e = $_REQUEST['prsq'];
			$f = $_REQUEST['answer'];
				
				//echo $a,$b,$c,$d,$e,$f;
	
					$_SESSION['unam'] = $a;
					//echo $_SESSION['unam'];
		
				// CHECK USER ALREADY REGISTERD OR NOT
  
					$sel = mysqli_query($con, "select * from regi where u_name='$a' AND u_mob='$b'  ");

						if (mysqli_num_rows($sel) != 0) 
						{
			
							echo "<script> alert ('This Mobile Number Is Already Registerd')</script>";
							echo "<script> window.location.replace('sign-in.php'); </script> ";

						} 
		
						else 
						{
							mysqli_query($con, "insert into regi set u_name='$a' , u_mob='$b' , u_mail='$c', u_pass='$d' , u_prsq='$e' , u_ans='$f'")or die("Table Not Found".mysqli_error($con));

								echo "<script> window.location.replace('regi_success.php'); </script> ";

						}
		
		}
	
?>

                            <div class="row">
                                <div class="col-lg-8 col-11 mx-auto">
                                    <form role="form" name="form1" method="post" action="" onsubmit="return chk();">

										<div class="form-floating my-4">
                                            <input type="text" name="name" id="name" class="form-control" placeholder="Full Name" required>

                                            <label for="name">Full Name</label>
                                        </div>
										
										<div class="form-floating my-4">
                                            <input type="text" name="mobile" id="mobile" class="form-control" placeholder="Mobile Number" required>

                                            <label for="mobile">Mobile Number</label>
                                        </div>
										
										
                                        <div class="form-floating my-4">
                                            <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required>

                                            <label for="email">Email address</label>
                                        </div>

                                        <div class="form-floating my-4">
                                            <input type="password" name="password" id="password"  class="form-control" placeholder="Password" required>

                                            <label for="password">Password</label>
                                        </div>
                                       
									   <div class="form-floating my-4">
                                            <input type="password" name="cpassword" id="cpassword"  class="form-control" placeholder="Comfirm Password" required>

                                            <label for="cpassword">Comfirm Password</label>
                                        </div>
												
										<div class="form-floating my-4">
                                        <span style="color:blue">Password Recovery Security Question</span>
																				
											<select name="prsq" class="form-control" >
												
												<option value="What is the name of your favorite childhood friend?" >What is the name of your favorite childhood friend?
												</option>
												
												<option value="What is Your grandmother's first name?">What is Your grandmother's first name?
												</option>
												
												<option value="Who was your childhood hero?">Who was your childhood hero?</option>
											
											</select>
										
										</div>	
						
										<div class="form-floating my-4"> 
											<input type="text" name="answer" id="answer" class="form-control" placeholder="Answer" required>
													
													<label for="answer">Answer</label>
										</div>

                                        <button type="submit" name="btnok" class="btn custom-btn form-control mt-4 mb-3">
                                            Create account
                                        </button>

                                        <p class="text-center">Already have an account? Please <a href="sign-in.php">Sign In</a></p>

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

<script>
	function chk()
	{
		p = document.getElementById('password').value;
		//alert(p);
		q = document.getElementById('cpassword').value;
		if(p==q)
		{
			alert ("password metch");
		}
		else 
		{
			alert ("password Not Metch");
			return false;
		}
	}
		
</script>

		

   </body>


</html>
