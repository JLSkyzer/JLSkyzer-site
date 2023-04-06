<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1697298388471610"
     crossorigin="anonymous"></script>
    <title>JLSkyzers's Web</title>
</head>
<body>
    
    <?php include "navbar.php"; ?> <br>

    <form action="" method="post">
        <input type="email" name="email" id="emailpost" placeholder="Votre email" required>
        <input type="password" name="password" id="passwordpost" placeholder="Votre mot de passe" required>
        <input type="submit" id="submit" name="submit">
    </form>

    <?php
        include 'database.php';
        global $db;

        $q = $db->query("SELECT * FROM user");
        while($user = $q->fetch()){
            echo "id : " . $user['id'] . "<br/>";
            echo "email : " . $user['email'] . "<br/><br/>";
        }

        if(isset($_POST['submit'])){
            $email = $_POST['emailpost'];
            $password = $_POST['password'];
        }
    ?>

</body>
</html>