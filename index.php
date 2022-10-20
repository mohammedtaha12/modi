<html>
    <head>
        <title>mci</title>
        <link rel="stylesheet" href="css/fontawesome-all.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/noscript.css">
       <style>
        body{
            background-color: white;
        }
        #div1{
            background-color:black;
            padding-left: 20px;
            width: 1000px;
            height: auto;
            margin-left: 160px;
            padding-bottom: 30px
        }
        #button1{
            background-color:deeppink;
            width: 50px;
            height: 40px;
        }

        #input1 , #input2 , #input3{
            background-color:darkgray;
            width: 350px;
            height: 40px;
        }
       </style>
    </head>



   <body>
        <form method="post" action="">
 <div id="div1">
        <label> Username:</label>
        <br><br>
        <input type="text" id="input1" name="input1php">
        <br><br>
        <label> email:</label>
        <br><br>
        <input type="text" id="input2" name="input2php">
        <br><br>
        <label> password:</label>
        <br><br>
        <input type="password" id="input3" name="input3php">
        <br><br>
        <button id="button1" name="button1php"> add </button>
        <button id="button1" name="button2php"> edit </button>
        <button id="button1" name="button3php"> del </button>
</div>
    </form> 
    </body>
</html>

<?php
$pdo=new PDO('mysql:host=localhost;port=3306;
dbname=modi','root','');

$colo1=$_POST['input1php'];
$colo2=$_POST['input2php'];
$colo3=$_POST['input3php'];



if(isset($_POST['button1php'])){


        $sql="INSERT INTO codeing (Username , email , password)
                                     VALUES(:input1php , :input2php , :input3php)";
    $stmt=$pdo->prepare($sql);
    $stmt->execute(array(
        ':input1php'=> $_POST['input1php'],
        ':input2php'=> $_POST['input2php'],
        ':input3php'=> $_POST['input3php']));
    
    }

    if(isset($_POST['button2php'])){
        $stmt=$pdo->query(" UPDATE codeing SET Username='$colo1' , email='$colo2' , password='$colo3' WHERE
        Username='$colo1'");
    }
    if(isset($_POST['button3php'])){

        $stmt=$pdo->query("DELETE FROM codeing  WHERE Username ='$colo1'");
       

    }

?>

