<?php 

include("connection.php");

if (isset($_POST['add'])) {
	
	$file = $_FILES['image']['name'];
	$name = $_POST['name'];
	$keterangan = $_POST['keterangan'];



	if (empty($file)  && empty($name) && empty($keterangan)) {
		echo "fff";
	}else{
		$query = "INSERT INTO postingsosmed(name,keterangan,image) VALUES('$name','$keterangan','$file')";
		$res = mysqli_query($connect,$query);

		if ($res) {
		  move_uploaded_file($_FILES['image']['tmp_name'], "img/$file");

		  $name = "";
		  header("Location: index.php");
		}else{
			
		}
	}
}


 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Social Media</title>
</head>
<body>

	<?php 
      include("header.php");
	 ?>


	 <div class="container">
	 	<div class="col-md-12 d-flex justify-content-center ">
	 	
	 			<div class="col-md-4 bg-light mt-4">
	 				<h3 class="text-center text-black" style="padding:20px 20px;">Tambah Postingan</h3>
	 				<form method="post" enctype="multipart/form-data">
	 					<label>Pilih foto</label>
	 					<input type="file" name="image" class="form-control">
	 					<label>Judul</label>
	 					<input type="text" name="name" class="form-control">
						 <label>Postingan</label>
	 					<input type="text" name="keterangan" class="form-control">
	 					<input type="submit" name="add" class="btn btn-dark my-5" value="Tambah Postingan">
	 				</form>
	 		</div>
	 	</div>
	 </div>

</body>
</html>