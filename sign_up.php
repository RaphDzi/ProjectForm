<html>
    <head>
    
    </head>
    
    <body>
        <?php
            $username=$_POST['username'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            $passwordValidation=$_POST['passwordValidation'];
            
            echo "Bienvenue $username, merci d'avoir créé votre compte ! "?><br><"";
            echo 'Vous pouvez maintenant vous connecter en';
            ?><a href='index.html'>cliquant ici</a><?php
        ?>
    </body>
</html>