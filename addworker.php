<?php

include('connection.php');
if(isset($_POST['b1']))
{
    $id=uniqid();
    $name=$_POST['name'];
    $task='';
    $asset='';

    $q=mysqli_query($connection,"insert into worker values('$id','$name','$task','$asset')");
    if($q)
    {
        ?>
         <script>
             alert('Worker has been added.');
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
      <title>Add A Worker</title>
    </head>
    <div class="main">
      <form action="#" method="post">
          <input type="text" class="assetForm" id="place" placeholder="Enter the  worker name" name="name">
          <button type="submit" class="assetForm" name="b1">Submit</button>
      </form>
    </div>
</html>
