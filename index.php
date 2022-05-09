
<?php

    $bdd = new PDO("mysql:host=localhost;dbname=aasite;charset=utf8","root","");
    $req = $bdd->query("SELECT * FROM users");

    while($donn = $req->fetch()){
        echo $donn["nom"];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <select name="select" id="select">
        <option value="0">
            test
        </option>
        <option value="1">
            test1
        </option>
        <option value="2">
            test2
        </option>
    </select>
    <input type="submit" value="submit">
    </form>

    <?php
        if(isset($_POST["select"])){
            $select = $_POST["select"];
            switch ($select) {
                case '0':
                    $req = $bdd->query("SELECT * FROM users");
                    break;
                
                default:
                    # code...
                    break;
            }
        }

        while($row = $req->fetch()){
            echo $row["ID"];
        }
        $req = $bdd->query("SELECT * FROM url");

        while($row = $req->fetch()){
            echo '<img src="'.$row[0].'" alt="">';
        }
    ?>
</body>
</html>