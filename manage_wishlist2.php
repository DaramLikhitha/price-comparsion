<?php
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	if(isset($_POST['Add_To_Wishlist']))
	{
		if(isset($_SESSION['wish']))
		{
			$myitems=array_column($_SESSION['wish'],'Item_Name');
			if(in_array($_POST['Item_Name'],$myitems))
			{
				echo"<script>
					alert('Item Already Added');
					window.location.href='All products.php';
				</script>";
			}
			else
			{
				$count=count($_SESSION['wish']);
				$_SESSION['wish'][$count]=array('Item_Name'=>$_POST['Item_Name'],'APrice'=>$_POST['APrice'],'FPrice'=>$_POST['FPrice'],'BBPrice'=>$_POST['BBPrice'],'RDPrice'=>$_POST['RDPrice'],'APrice'=>$_POST['APrice'],'FPrice'=>$_POST['FPrice'],'BBPrice'=>$_POST['BBPrice'],'RDPrice'=>$_POST['RDPrice'],'Alink'=>$_POST['Alink'],'Flink'=>$_POST['Flink'],'Blink'=>$_POST['Blink'],'Rlink'=>$_POST['Rlink']);
				echo"<script>
					alert('Item Added');
					window.location.href='All products.php';
				</script>";
			}
		}
		else
		{
			$_SESSION['wish'][0]=array('Item_Name'=>$_POST['Item_Name'],'APrice'=>$_POST['APrice'],'FPrice'=>$_POST['FPrice'],'BBPrice'=>$_POST['BBPrice'],'RDPrice'=>$_POST['RDPrice'],'APrice'=>$_POST['APrice'],'FPrice'=>$_POST['FPrice'],'BBPrice'=>$_POST['BBPrice'],'RDPrice'=>$_POST['RDPrice'],'Alink'=>$_POST['Alink'],'Flink'=>$_POST['Flink'],'Blink'=>$_POST['Blink'],'Rlink'=>$_POST['Rlink']);
			echo"<script>
				alert('Item Added');
				window.location.href='All products.php';
			</script>";
		}
	}
	if(isset($_POST['Remove_Item']))
	{
		foreach($_SESSION['wish'] as $key => $value)
		{
			if($value['Item_Name']==$_POST['Item_Name'])
			{
				unset($_SESSION['wish'][$key]);
				$_SESSION['wish']= array_values($_SESSION['wish']);
				echo"<script>
					alert('Item Removed');
					window.location.href='wishlist.php';
				</script>";
			}
		}
	}
}

?>