<?php

include('connection.php');
if(isset($_POST['b1']))
{
    $id=uniqid();
    $name=$_POST['name'];

    $q=mysqli_query($connection,"insert into task values('$id','$name')");
    if($q)
    {
        ?>
         <script>
             alert('Task added');
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
      <title>Add A Task</title>
    </head>
    <div class="main">
      <form action="#" method="post">
          <input class="assetForm" id="place" type="text" placeholder="Enter the  task name" name="name">
          <button class="assetForm" type="submit" name="b1">Submit</button>
      </form>
    </div>
</html>
