
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login signin</title>
</head>
<body>

<h1>SignIn</h1>

<form method="post" action=""> 
    <input type="text" name="email" id="email" placeholder="Votre Email" required></br></br>
    <input type="password" name="password" id="password" placeholder="Votre Mot de Passe" required></br></br>
    <input type="password" name="cpassword" id="cpassword" placeholder="Confirmez votre Mot de Passe" required></br></br>
    <input type="submit" name="formsend" id="formsend" value="SignIn">
</form>


<?php

    if(isset($_POST['formsend'])){

        extract($_POST);

        if(!empty($password) && !empty($cpassword) && !empty($email)){

            if($password==$cpassword){

           
        $options = [
            'cost' => 12,
        ];
        $haspass = password_hash($password, PASSWORD_BCRYPT, $options);
    
 
        include "database.php";
        global $db;

        $q = $db->prepare("INSERT INTO users(email,password) VALUES(:email, :password)");
        $q->execute ([
            'email' => $email,
            'password' => $haspass
        ]);

        }

       //if(password_verify("sniper", $haspass)){
        //   echo 'le mot de passe est le meme';
       //}else{
       //    echo 'le mot de passe est pas correct';
       }else{
           echo "tous les champs sont pas remplis";
       }
    }



?>

<?php
include "login.php";
?>






</body>
</html>
