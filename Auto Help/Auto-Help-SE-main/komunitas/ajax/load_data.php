<?php 

include("../connection.php");

if (isset($_POST['page'])) {
	$page = $_POST['page'];
}else{
	$page = 1;
}

$pagination = "";


$limit = 4;
$start = ($page - 1)* $page;

$pages = mysqli_query($connect,"SELECT count(id) AS id FROM postingsosmed");

while ($row = mysqli_fetch_array($pages)) {
	$total = $row['id'];
	$count = ceil($total / $limit);

   for ($i=1; $i <=$count ; $i++) { 
   	
$pagination .= "

  <ul class='pagination mx-4'>
    
             <a id='".$i."' href='' class='page-link '>".$i."</a>
          
     </div>
    
";
   }

}










$query = "SELECT * FROM postingsosmed LIMIT $start, $limit";
$res = mysqli_query($connect,$query);

$output = "";
if (mysqli_num_rows($res) < 1) {
	$output .= "<h1 class='text-center'>Tidak ada Postingan</h1>";
}else{

	while ($row = mysqli_fetch_array($res)) {
		 
		 $output .= "
             <div class='col-md-3 shadow-sm rounded bg-white d-flex justify-content-center'>
				<form method='post'>
					<img src='img/".$row['image']."' class='col-md-12' height='200px'>
					<h3 class='mx-3 text-center'>".$row['name']."</h3>
					<p class='mx-3 text-center'>".$row['keterangan']."</p>
					
				</form>
				</div>

		 ";
	}
}




$data['output'] = $output;
$data['pagination'] = $pagination;


echo json_encode($data);


 ?>