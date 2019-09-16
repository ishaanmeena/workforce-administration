<?php

include('connection.php');

if(isset($_POST['b1']))
{
    $asset=$_POST['asset'];
    $worker=$_POST['worker'];
    $task=$_POST['task'];
    $freq=$_POST['freq'];
    $ddate=$_POST['ddate'];
    $dtime=$_POST['dtime'];
    date_default_timezone_set("Asia/Calcutta");
    $adate=date('m/d/y');
    $atime=date('H:i:s');
    $q1=mysqli_fetch_array(mysqli_query($connection,"select * from allocate where asset='".$asset."'"));
    $q2=mysqli_fetch_array(mysqli_query($connection,"select * from worker where id='".$worker."'"));
    $taskz=$task.",".$q2['task'];
    $assz=$asset.",".$q2['asset'];
    $task1=$task.",".$q1['task'];
    $worker1=$worker.",".$q1['worker'];
    $freq1=$freq.",".$q1['frequency'];
    $ddate1=$ddate.",".$q1['ddate'];
    $dtime1=$dtime.",".$q1['dtime'];
    $adate1=$adate.",".$q1['adate'];
    $atime1=$adate.",".$q1['atime'];
    $query=mysqli_query($connection,"update allocate set task='".$task1."',worker='".$worker1."',frequency='".$freq1."',ddate='".$ddate1."',dtime='".$dtime1."',adate='".$adate1."',atime='".$atime1."' where asset='".$asset."'");
    $query2=mysqli_query($connection,"update worker set task='".$taskz."',asset='".$assz."' where id='".$worker."'");
    if($query && $query2)
    {
        ?>
         <script>
             alert('Task allocated');
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
    <title>Allocate A Task</title>
  </head>
  <body class="main">
    <br><br><br>
    <div>
      <form action="#" method="post">
          <select name="asset">
              <option>Select the asset</option>
              <?php
                  $t1=mysqli_query($connection,"select * from allocate");
                  while($t2=mysqli_fetch_array($t1))
                  {
                      $name=mysqli_fetch_array(mysqli_query($connection,"select * from asset where id='".$t2['asset']."'"));

                      ?><option value="<?php echo $name['id']?>"><?php echo $name['name']?></option><?php
                  }
              ?>
          </select>



          <select name="worker">
              <option>Select the worker</option>
              <?php
                  $t1=mysqli_query($connection,"select * from worker");
                  while($t2=mysqli_fetch_array($t1))
                  {
                      ?><option value="<?php echo $t2['id']?>"><?php echo $t2['name']?></option><?php
                  }
              ?>
          </select>



          <select name="task">
              <option>Select the task</option>
              <?php
                  $t1=mysqli_query($connection,"select * from task");
                  while($t2=mysqli_fetch_array($t1))
                  {
                      ?><option value="<?php echo $t2['id']?>"><?php echo $t2['task']?></option><?php
                  }
              ?>
          </select>

          <select name="freq">
              <option>Select Frequency</option>
              <option>Every Hour</option>
              <option>Every Day</option>
              <option>Every Week</option>
              <option>Once A Month</option>
              <option>Once A Year</option>
          </select>
          <br><br>
          <input name="ddate" type="date" placeholder="Enter the deadline for date">
          <input name="dtime" type="time" placeholder="Enter the deadline for time">
          <button type="submit" name="b1">Submit</button>
      </form>
    </div>
  </body>

</html>


<script>
