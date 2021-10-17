

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <style>
        *
        {
            font-family: Arial;
            text-decoration: none;
            margin: 0;
            font-family: Roboto;
        }

        .pesan
        {
            
            color: #FDBA3D;
            font-weight: bold;
        }
        .menu
        {
            display: flex;
            justify-content: right;
            background-color: #193350;
            
        }
        .menu a
        {   
            
            font-weight: bold;
            padding: 10px 50px;
        }
        .home, .markah, .profil
        {
            color: #FFF;
        }

        .logindulu
        {
            padding: 200px 0px;
            display: flex;
            justify-content: center;
        }
        .logindulu p
        {
            
            color: #193350;
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
    <title>Auto Help</title>
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
        <div class="logindulu">
            <p>Belum ada pesan!</p>
        </div>
    </main>
    <footer>
        <h2>Auto Help</h2>
    </footer>
</body>
</html>

