<?php 
session_start();
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
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="home.css">
     <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Auto Help</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/fdb32bd070.js" crossorigin="anonymous"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <style type="text/css">
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
        border-bottom-left-radius: 50px;
        border-bottom-right-radius: 50px;
        box-shadow: 5px 5px 10px gray;
      }

      /* Optional: Makes the sample page fill the window. */
      html,
      body {
        height: 100%;
        margin: 0;
        padding: 0;
      }

      .custom-map-control-button {
        background-color: #193350;
        border: 0;
        border-radius: 10px;
        box-shadow: 0 1px 4px -1px black;
        margin: 10px;
        padding: 0 0.5em;
        font: 400 18px Roboto, Arial, sans-serif;
        overflow: hidden;
        height: 40px;
        cursor: pointer;
        color: #FDBA3D;
      }
      .custom-map-control-button:hover {
        background: #ebebeb;
        color: black;
        box-shadow: 0 1px 4px -1px white;
      }
    </style>
    <script>
      // Note: This example requires that you consent to location sharing when
      // prompted by your browser. If you see the error "The Geolocation service
      // failed.", it means you probably did not give permission for the browser to
      // locate you.
      let map, infoWindow;

      function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
          center: { lat: -34.397, lng: 150.644 },
          zoom: 6,
        });
        infoWindow = new google.maps.InfoWindow();
        const locationButton = document.createElement("button");
        locationButton.textContent = "Lokasi saya";
        locationButton.classList.add("custom-map-control-button");
        map.controls[google.maps.ControlPosition.TOP_CENTER].push(
          locationButton
        );
        locationButton.addEventListener("click", () => {
          // Try HTML5 geolocation.
          if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(
              (position) => {
                const pos = { 

                  lat: position.coords.latitude,
                  lng: position.coords.longitude,
                };
                infoWindow.setPosition(pos);
                infoWindow.setContent("Location found.");
                infoWindow.open(map);
                map.setCenter(pos);
              },
              () => {
                handleLocationError(true, infoWindow, map.getCenter());
              }
            );
          } else {
            // Browser doesn't support Geolocation
            handleLocationError(false, infoWindow, map.getCenter());
          }
        });
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(
          browserHasGeolocation
            ? "Error: The Geolocation service failed."
            : "Error: Your browser doesn't support geolocation."
        );
        infoWindow.open(map);
      }
    </script>

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
    <div class="gcse-search">
      
      <script async src=
        "https://cse.google.com/cse.js?cx=007019498718139788174:amtiepdpgeg">
      </script>
    </div>
    <div id="map"></div>
    <main>
        <div class="menu-main">
          <div class="jual-beli">
            <a href="">
              <i class="fas fa-shopping-cart"></i>
              <p>Jual Beli Sparepart</p>
            </a>
          </div>
          <div class="komunitas">
            <a href="../komunitas/index.php">
              <i class="fas fa-photo-video"></i>
              <p>Komunitas</p> 
            </a>
          </div>
          <div class="turtorial">
            <a href="">
              <i class="fas fa-video"></i>
              <p>Turtorial</p> 
            </a>
          </div>
        </div>
        
        <div class="rekomendasi">
          <h4>Bengkel Terbaik Jakarta</h4>
          <div class="rekomendbengkel">
            <?php
              $query = "SELECT * FROM produk ORDER BY id ASC";
              $result = mysqli_query($connect, $query);
              if(mysqli_num_rows($result) > 0)
              {
                while($row = mysqli_fetch_array($result))
                {
            ?>
            <div class="daftarrekomend " >
              <form method="post" action="home.php?action=add&id=<?php echo $row["id"]; ?>">
                <img class="rekomendimg satu" src="../assets/image/<?php echo $row["image"]; ?>" alt="">
                <p class="judulrekomend"><?php echo $row["name"]; ?></p>
                <div class="markahin">
                  <p class="daerahrekomend"><?php echo $row["keterangan"]; ?></p>
                  <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
                  <input type="hidden" name="hidden_image" value="<?php echo $row["image"]; ?>" />
                  <input type="hidden" name="hidden_keterangan" value="<?php echo $row["keterangan"]; ?>" />
                  <input type="submit" name="add_to_cart"  class="btn btn-success" value="markah" class="markahbtn btn btn-success" />
                </div>
              </form>
            </div>
            <?php
                }
              }
            ?>

          </div>
        </div>
       

        <div class="bengkelfav">
          <a href="markahlogin.php">
               
            <img src="../assets/image/bengkel favorite.png" alt="">
          </a>

        </div>
    </main>
    <footer>
        <h2>Auto Help</h2>
    </footer>

    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCCMi2qKZ0ISZjoECbBZNfRLwrEgRYWMew&callback=initMap&libraries=&v=weekly"
      async
    ></script>
    
</body>
</html>
