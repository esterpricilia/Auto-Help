
<?php 

$connect = mysqli_connect("localhost", "id17056886_mariaberlianayapputri", "M4ri41234567890!", "id17056886_test_db");

if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
        'item_image'			=>	$_POST["hidden_image"],
				'item_keterangan'		=>	$_POST["hidden_keterangan"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_image'			=>	$_POST["hidden_image"],
			'item_keterangan'		=>	$_POST["hidden_keterangan"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="home.php"</script>';
			}
		}
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Markah</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <style>
        *
        {
            font-family: Arial;
            text-decoration: none;
            margin: 0;
            font-family: Roboto;
            
        }
        .menu
        {
            display: flex;
            justify-content: right;
            background-color: #193350;
        }
        .markah
        {
            
            color: #FDBA3D;
            font-weight: bold;
        }
        .menu a
        {   
            font-weight: bold;
            padding: 10px 50px;
        }
        .pesan, .home, .profil
        {
            color: #FFF;
        }
        .menu-main
        {
            display: flex;
            justify-content: center;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px; 
        }
        .selection{
            display: flex;
            justify-content: space-evenly;
            text-align: center;
            padding-bottom: 5%;
            margin-top: 50px; 
        }

        .beng{
            background-color: rgb(222, 221, 226);
            width: 40%;
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            align-items: center;
            padding: 4% 0;
            
        }
        .beng img{
            width: 90%;
        }
        .beng h5{
            font-size: 1.3vw;
            padding-top: 2%;
            color: black;
            text-align: left;
        }
        .selection :hover{
            background-color: #FDBA3D;
            transition: 0.2s ease;
        }
        #mark{
            width: 50%;
        }

        footer
        {
            background-color: #193350;
            padding: 70px 0px;
        }
        footer h2
        {
            display: flex;
            justify-content: center;
            color: #FFF;
            font-size: 50px;
        }
    </style>
</head>
<body>
        <nav>
            <div class="menu">
                <a href="home.php" class="home">Bengkel</a>
                <a href="pesanlogin.php" class="pesan">Pesan</a>
                <a href="markahlogin.php" class="markah">Markah</a>
                <a href="profillogin.php" class="profil">Profil</a>
                
            </div>
        
        </nav>
        <div class="selection">
            <?php
                if(!empty($_SESSION["shopping_cart"]))
                {
                    foreach($_SESSION["shopping_cart"] as $keys => $values)
                    {
                ?>
            <div class="beng">
                <img src="../assets/image/<?php echo $values["item_image"]; ?>" alt="">
                <div class="detail">
                    <h3><?php echo $values["item_name"]; ?></h3>
                    <p><?php echo $values["item_keterangan"]; ?></p>
                    <a href="home.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a>
                </div>
            </div>
            <?php
                    }
				}
			?>
						
            <!-- <div class="beng">
                <img src="assets/image/bengkel-mobil-jakarta-kjs-motor.jpg" alt="">
                <div class="detail">
                    <h3>CARfix</h3><p>Jakarta Timur</p>
                    <h3>Karang Tengah</h3>
                    <img src="assets/image/markah.png" id="mark" alt="">
                </div> 
            </div>     
            <div class="beng">
                <img src="assets/image/bengkel-mobil-jakarta-dokter-mobil.jpg" alt="">
                <div class="detail">
                    <h3>CARfix</h3><p>Jakarta Timur</p>
                    <h3>Karang Tengah</h3>
                    <img src="assets/image/markah.png" id="mark" alt="">
                </div>   
            </div> 
            
            <div class="beng">
                <img src="../assets/image/bengkel-mobil-jakarta-kudamas-resepsionis.jpg" alt="">
                <div class="detail">
                    <h3>CARfix</h3><p>Jakarta Timur</p>
                    <h3>Karang Tengah</h3>
                    <img src="assets/image/markah.png" id="mark" alt="">
                </div>
            </div>    -->
        </div>

        <footer>
            <h2>Auto Help</h2>
        </footer>
</body>
</html>
