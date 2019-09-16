<?php
include('connection.php');

?>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/master.css">
    <title>View Workers</title>
  </head>
  <body class="main">
    <br>
    <h5>Click on the worker name to see what task has been assigned to him.</h5>
    <table style="margin-left:36vw;margin-top:6vw;position:absolute">
    <tr>
       <th>Worker Identification</th>
       <th>Worker Name</th>
   </tr>
     <?php
                     $row2=mysqli_query($connection,"select * from worker");
                     while($row=mysqli_fetch_array($row2))
                     {
                         ?>
                         <tr>
                             <td><?php echo $row['id']?></td>
                             <td><a title="Click to see tasks assigned..." href="d1.php?home=<?php echo $row['id']?>"><?php echo $row['name']?></a></td>
                         </tr>
                         <?php
                     }
                 ?>

  </table>

  </body>
</html>

<style>
    table, th, td {
  border: 1px solid black;
}

</style>
