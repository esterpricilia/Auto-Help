<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/profile.css">
    <link rel="stylesheet" href="profillogin.css">
    
    <title>Auto Help</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/fdb32bd070.js" crossorigin="anonymous"></script>

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
    
    <main>
        <div class="profile">
            <i class="fas fa-user-circle"></i>
            <div class="datadiri">
                <div class="nama">
                    <div class="judul">Nama: </div>
                    <h4> <?php echo $_SESSION['name']; ?> </h4>
                </div>
                <div class="username">
                    <div class="judul">User Name: </div></div>
                    <h4> @<?php echo $_SESSION['user_name']; ?> </h4>
                </div>
        </div>
        
        <div class="logout">
            <a href="../logout.php">Logout</a>
        </div>
        
    </main>
    <footer>
        <h2>Auto Help</h2>
    </footer>

</body>
</html>


<?php 
}else{
     header("Location: profil.php");
     exit();
}
 ?>
