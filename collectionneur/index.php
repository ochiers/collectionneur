<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/style.css">
        <script type="text/javascript" src="js/main.js"></script>
        <title>Le collectionneur</title>
    </head>
    <body>
        <div id="header">
            <h1>Le collectionneur.</h1>
        </div>
        <div id="center">
            <?php 
            if (!isset($_GET['pages'])){
                include("pages/Person.php");
            }
            else {
                include("pages/".$_GET['pages'].".php");
            }

             ?>
        </div>
        <div id="footer">
            
        </div>
    </body>
</html>
