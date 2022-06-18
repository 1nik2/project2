<?php

	include "header.php";

//~~~~~~~~~~~~~~~~~~~~~	Delete Product~~~~~~~~~~~~~~~~~~~~~//

	if(isset($_REQUEST['delete']))

	{
	
		foreach($_POST['pid'] as $idv)
		{
       
			mysqli_query($con,"DELETE FROM product WHERE p_id=$idv");

		}
			echo "Data Deleted";

	}


//~~~~~~~~~~~~~~~~~~~~	View Product~~~~~~~~~~~~~~~~~~~~~//

	$pro1 = mysqli_query($con, "select * from product")or die("Table Not Found".mysqli_error($con));

			echo "<br><br><br><br>br><br><br><br><br><center><h3>View Product</h3><table cellspacing='15' border='10' cellpadding='30'style='border: 3px solid grey; border-collapse: collapse;' >";

			echo "<tr><th>Product ID</th><th>Product Name</th><th>Product M.R.P.</th><th>UPC</th><th>Product Status</th><th>Product Photo</th>


            <th> <input type='submit' value='Delete' name='delete' form='form1' class='btn btn-warning'> </th>
            <th> <input type='button' value='Edit' class='btn btn-primary'> </th></tr>";



		while($pro2 = mysqli_fetch_array($pro1))
		{
			echo "<tr>";
			echo "<td>".$pro2['p_id']."</td>";
			echo "<td>".$pro2['p_name']."</td>";
			echo "<td>".$pro2['p_mrp']."</td>";
			echo "<td>".$pro2['p_upc']."</td>";
			echo "<td>".$pro2['p_status']."</td>";
			echo "<td><img src='". $pro2['p_img']. "'height='100'  width='100'></td>";
	
	?>
	
	

			<form action="" id="form1" method="POST">
	
	<?php
	
			echo "<th> <input type='checkbox' name='pid[]' value=".$pro2['p_id'].">
            </th>";


			echo "<td><a href='inpro.php?go1=".$pro2['p_id']."'>Edit</td></td>";
			echo "</tr>";
		}

			echo "</table></center>";
?>



