<?php

include('connection.php');
if(isset($_POST['b1']))
{
    $id=uniqid();
    $name=$_POST['name'];

    $q=mysqli_query($connection,"insert into asset values('$id','$name')");
    $q1=mysqli_query($connection,"insert into allocate values('$id','','','','','','','')");
    if($q && $q1)
    {
        ?>
         <script>
             alert('The Asset Has Been Added!');
             window.location.href="index.php";
         </script>
        <?php
    }
}

?>

<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/master.css">
    <title>Add An Asset</title>
  </head>
  <div class="main">
    <form action="#" method="POST">
        <input class="assetForm" id="place" type="text" placeholder="Please enter the asset's name" name="name">
        <button class="assetForm" type="submit" name="b1">Submit</button>
    </form>
  </div>
</html>
