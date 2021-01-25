<?php
    if(isset($_POST['formsend'])){
        
        extract($_POST);

        if(!empty($password) && !empty($cpassword) && !empty($semail)){

            if($password == $cpassword){
                
                $options = [
                    'cost' => 12,
                ];

                $hashpass = password_hash($password, PASSWORD_BCRYPT, $options);

                global $db;

                $q = $db->prepare("INSERT INTO users(email,password) VALUES(:email, :password)");
                $q->execute([
                    'email' => $email,
                    'password' => $hashpass
                ]);
            }  
        }else{
            echo "les champs ne sont pas tous remplis";
        }
    }



?>