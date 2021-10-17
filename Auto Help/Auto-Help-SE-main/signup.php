<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="assets/profile.css">
     <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
     <script src="https://kit.fontawesome.com/fdb32bd070.js" crossorigin="anonymous"></script>
</head>
<body>
     <div class="backlogin">
          <a href="profil.php"> 
               <i class="fas fa-chevron-circle-left"></i>

          </a>
          
     </div>

     <div class="login">
          <form action="signup-check.php" method="post">
               <h2>SIGN UP</h2>
               <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
               <?php } ?>
     
               <?php if (isset($_GET['success'])) { ?>
                    <p class="success"><?php echo $_GET['success']; ?></p>
               <?php } ?>
     
               <label>Name</label>
               <?php if (isset($_GET['name'])) { ?>
                    <input type="text" 
                           name="name" 
                           placeholder="Name"
                           value="<?php echo $_GET['name']; ?>"><br>
               <?php }else{ ?>
                    <input type="text" 
                           name="name" 
                           placeholder="Name"><br>
               <?php }?>
     
               <label>User Name</label>
               <?php if (isset($_GET['uname'])) { ?>
                    <input type="text" 
                           name="uname" 
                           placeholder="User Name"
                           value="<?php echo $_GET['uname']; ?>"><br>
               <?php }else{ ?>
                    <input type="text" 
                           name="uname" 
                           placeholder="User Name"><br>
               <?php }?>
     
     
               <label>Password</label>
               <input type="password" 
                      name="password" 
                      placeholder="Password"><br>
     
               <label>Re Password</label>
               <input type="password" 
                      name="re_password" 
                      placeholder="Re_Password"><br>
     
               <button type="submit">Sign Up</button>
               <a href="profil.php" class="ca">Already have an account?</a>
          </form>

     </div>

     <footer>
        <h2>Auto Help</h2>
    </footer>

</body>
</html>