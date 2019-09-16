
<?php
include('connection.php');
$id=$_GET['home'];

$q1=mysqli_fetch_array(mysqli_query($connection,"select * from worker where id='".$id."'"));

$asset=explode(',',$q1['asset']);
$task=explode(',',$q1['task']);
?>
<table style="margin-left:30vw;margin-top:3vw;position:absolute">

     <tr>
        <th>Asset Identification</th>
        <th>Asset Name</th>
         <th>Task Identification</th>
         <th>Task Name</th>
    </tr>

<?php

for($i=0;$i<count($asset)-1;$i++)
{
    ?>


      <?php
                      $ass=mysqli_fetch_array(mysqli_query($connection,"select * from asset where id='".$asset[$i]."'"));

                      $tas=mysqli_fetch_array(mysqli_query($connection,"select * from task where id='".$task[$i]."'"));



                          ?>
                          <tr>
                              <td><?php echo $asset[$i]?></td>
                              <td><?php echo $ass[1]?></td>
                              <td><?php echo $task[$i]?></td>
                              <td><?php echo $tas[1]?></td>
                          </tr>
           <br><br>
                          <?php

      ?>
    <?php
}
    ?>
    </table>
    <?php

?>

<!--<html>
<div id="a1"><b>LIST OF WORK ALLOCATED TO WORKER <?php echo $q1['name'] ?></b></div><br>
</html>-->

<style>
    table, th, td {
  border: 1px solid black;
}
    *
    {
        background-image: linear-gradient(to right top, #051937, #004d7a, #008793, #00bf72, #a8eb12);
    }
    #a1
    {
        position:fixed;
        margin-left:30vw;
        margin-top:0vw;
        width:40vw;
        height:3vw;
        text-align:center;
        border-radius:.3vw;
        font-size:3vw;
    }

</style>
