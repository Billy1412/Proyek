<?php
require "connect.php";
if(isset($_POST['update'])){
	$t_id=$_POST['t_id'];
	$sql= "SELECT breakfast, smoking FROM detail_transaksi WHERE id_transaksi = '".$t_id."';";
	$res=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($res);
	if(isset($_POST['breakfast'])){
		$breakfast=$_POST['breakfast'];
	}
	else{
		$breakfast=$row["breakfast"];
	}
	if(isset($_POST['smoking'])){
		$smoking=$_POST['smoking'];
	}
	else{
		$smoking=$row["smoking"];
	}
	$details=$_POST['detail'];
	$sql = "UPDATE detail_transaksi set breakfast='$breakfast', smoking='$smoking', detail = '$details' WHERE id_transaksi='".$t_id."';";
	mysqli_query($con,$sql);
    header("location: Order Summary.php");
}
?>