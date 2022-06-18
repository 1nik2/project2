<?php
include "header.php";

//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~		Update	Product	~~~~~~~~~~~~~~~~~~~~~~//

	if(isset($_REQUEST['go1']))
	{
		$go2 = $_REQUEST['go1'];
		//echo $go2;
	
		$go3 = mysqli_query($con, "select * from product where p_id='$go2'")or die("Select Error".mysqli_error($con));
		
		$go4 = mysqli_fetch_array($go3);
		//echo $go4['p_name'];
	
		if(@$_REQUEST['inspro']=='Update Product')
		{
			$nid = $_REQUEST['oid'];	
			$pnam = $_REQUEST['pronam'];
			$pmrp = $_REQUEST['promrp'];
			$pupc = $_REQUEST['proupc'];
			$pstatus = $_REQUEST['prostatus'];
			$pimg = $_REQUEST['oimg'];
	
			if($_FILES['proimg']['name']!="")
			{
				$pimg = "img/".$_FILES['proimg']['name'];
				move_uploaded_file(@$_FILES['proimg']['tmp_name'],$pimg); 	
			}
	
			//echo $pnam,$pmrp,$pupc,$pstatus,$pimg;
	
				mysqli_query($con, "update product set  p_name='$pnam' , p_mrp='$pmrp' , p_upc='$pupc' ,
				p_status='$pstatus' , p_img='$pimg'  where p_id=$nid " )or die("Insert Error".mysqli_error($con));
	
				echo "<script>alert('Data Updated')</script>";
		
		}
	}

//~~~~~~~~~~~~~~~~~~~~~~~~~~~	Insert	Product~~~~~~~~~~~~~~~~~~~~~~~~~~~//

	if(@$_REQUEST['inspro']=='Insert Product')
	{
		$pnam = $_REQUEST['pronam'];
		$pmrp = $_REQUEST['promrp'];
		$pupc = $_REQUEST['proupc'];
		$pstatus = $_REQUEST['prostatus'];
		@$pimg = "img/".$_FILES['proimg']['name'];
	
		//echo $pnam,$pmrp,$pupc,$pstatus,$pimg;
		move_uploaded_file(@$_FILES['proimg']['tmp_name'],$pimg); 

		mysqli_query($con, "insert into product set p_name='$pnam' , p_mrp='$pmrp' , p_upc='$pupc' , p_status='$pstatus' , p_img='$pimg'" )or die("Insert Error".mysqli_error($con));
	
		echo "<script>alert('Data Inserted')</script>";
	}
?>
	
	
	<section class="insert product-form section-padding">
                <div class="container" style="margin-top:15px;">
                    <div class="row">

                        <div class="col-lg-8 mx-auto col-12">

                            <h3 class="hero-title text-center mb-5">Insert Product</h3>                           
							
                            <div class="row">
                                <div class="col-lg-8 col-11 mx-auto">
                                    <form role="form" name="porduct_form" method="post" action="" enctype="multipart/form-data" >

										<div class="form-floating my-4">
                                            <input type="hidden" name="oid" class="form-control" value="<?= @$go4['p_id']?>"  readonly >
                                        </div>
										
                                        <div class="form-floating my-4">
                                            <input type="text" name="pronam" class="form-control" placeholder="Enter Product Name"  value="<?= @$go4['p_name']?>"  required>

                                            <label for="pronam">Enter Product Name</label>
                                        </div>
                                       
									   <div class="form-floating my-4">
                                            <input type="text" name="promrp" class="form-control" placeholder="Enter Product MRP" value="<?= @$go4['p_mrp']?>" required>

                                            <label for="promrp">Enter Product MRP</label>
                                        </div>
                                       
									   <div class="form-floating my-4">
                                            <input type="text" name="proupc" class="form-control" placeholder="Enter Product UPC" value="<?= @$go4['p_upc']?>"required>

                                            <label for="proupc">Enter Product UPC</label>
                                       </div>
										
									   <div class="form-floating my-4">
                                           <span style="color:grey;"> Product Status &nbsp; &nbsp; 
										   &nbsp; &nbsp;  Available   
											<input type="radio" name="prostatus"  value="Available"  
											<?php if(@$go4['p_status']=='Available')echo 'checked';?> required>
											
												&nbsp; &nbsp;
											
											Not-Available
											<input type="radio" name="prostatus"  value="Not-Available" 
											<?php if(@$go4['p_status']=='Not-Available')echo 'checked';?> required>
											</span>

                                       </div>
                                       
									   <div class="form-floating my-4">
                                            <center><input type="file" name="proimg" class="form-control"></center>
                                       </div>
										
									   <div class="form-floating my-4">
											<input name="oimg" readonly class="form-control" value="<?php echo @$go4['p_img'];?>"> 
									   </div>
                                       
                                       
										<input type="submit" name="inspro" class="btn custom-btn form-control mt-4 mb-3" value="<?php if(isset($_REQUEST['go1'])) echo 'Update Product'; else echo 'Insert Product' ?>">
										
										
									</form>
                                </div>
                            </div>
                            
                        </div>

                    </div>
                </div>
            </section>

        </main>

</body>
</html>
