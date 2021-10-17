<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/profile.css">
    <link rel="stylesheet" href="style.css">
    
    <title>Auto Help</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
 
</head>
<body>
    <nav>
        <div class="menu">
            <a href="index.html" class="home">Bengkel</a>
            <a href="pesan.html" class="pesan">Pesan</a>
            <a href="markah.html" class="markah">Markah</a>
            <a href="profil.php" class="profil">Profil</a>
            
        </div>
    </nav>
    
    <main>
        <div class="login">
            
            <div class="login">

                <form action="login.php" method="post">
                    <h2>LOGIN</h2>
                    <?php if (isset($_GET['error'])) { ?>
                        <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>
                    <label>User Name</label>
                    <input type="text" name="uname" placeholder="User Name"><br>
           
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Password"><br>
           
                    <button type="submit">Masuk</button>
                     <a href="signup.php" class="ca">Buat akun baru</a>
                </form>
            </div>

        </div>
        
    </main>
    <footer>
        <h2>Auto Help</h2>
    </footer>

</body>
</html>