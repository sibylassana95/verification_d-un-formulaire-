<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <form action="index.php" name="form1" method="post">
    <div class="form"> 
   <div class="title">
     Bienvenue
   </div> 
   <div class="subtitle">
     Connexion
   </div> 
   <div class="input-container ic1"> 
    <input id="firstname" class="input" type="text" placeholder=" " name="login1" > 
    <div class="cut"></div> <label for="firstname" class="placeholder">Login</label> 
   </div> 
   <div class="input-container ic2"> 
    <input id="lastname" class="input" type="password" placeholder=" " name="pass1"> 
    <div class="cut"></div> <label for="lastname" class="placeholder" >Password</label> 
   </div> 
   <div class="input-container ic2"> 
    
   </div> 
   <button type="text" class="submit" onClick="valider()">Validez</button> 
  </div> 
  </form>
    <script src="index.js"></script>
</body>
</html>