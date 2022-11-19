<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    
    <form action="login.php" method="post">
          <h2>Login</h2>

          <?php if (isset($_GET['error'])) { ?>
            <p class="era"><?php echo $_GET['error'];?></p> 
            <?php 
          }?>
        <input type="text" name="uname" placeholder="User Name"> <br>
        <input type="password" name="password" placeholder="Password"> <br>
        <button type="submit">Login</button>
    </form>
</body>
</html>