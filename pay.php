<?php
require "connect.php";
if(isset($_POST['pay'])){
	$t_id=$_POST['t_id'];
	$name = $_POST['name'];
	$id = $_POST['card-id'];
	$cvv = $_POST['cvv'];
	$sql= "SELECT * FROM `kartu_kredit` WHERE `id_kartu` LIKE '".$id."' AND `nama` LIKE '".$name."' AND `cvv` = ".$cvv;
	$res=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($res);
	if(!empty($row)){
				$sql = "UPDATE transaksi set status = 1 WHERE id_transaksi='".$t_id."';";
				mysqli_query($con,$sql);
				header("location: Order Summary.php");}
	else{
		echo("<script LANGUAGE = 'JavaScript'>
        window.alert('Payment Failed');
        window.location.href = 'Order Summary.php';
        </script>");
	}
}
?>