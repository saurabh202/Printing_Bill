<html>
    <body>
        <div class="header">
            <div class="loginform">
                <div class="saurabhmart">
        </div>
        <link rel="stylesheet" href="style1.css"></link>
        <form action="prog3.php">
            <br>
            <h1>Enter First Product Details:</h1><br>

            <h2>Enter Product Name :<h2>
            <input type="text" name="p1"/><br>
        
            Enter Product Quantity :
            <input type="text" name="q1"/><br>
            Enter Product Cost :
            <input type="text" name="c1"/><br><br></h2>

            <h1>Enter Second Product Details:</h1><br>

            <h2>Enter Product Name :
            <input type="text" name="p2"/><br>
            Enter Product Quantity :
            <input type="text" name="q2"/><br>
            Enter Product Cost :
            <input type="text" name="c2"/><br><br></h2>

            <input type="submit" name="submit"/>
        </form>
    </body>
</html>


<?php
    session_start();
    $_SESSION['name']=$_REQUEST['name'];
    $_SESSION['addr']=$_REQUEST['addr'];
    $_SESSION['number']=$_REQUEST['number'];
?>