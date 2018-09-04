
   <?php 
   include_once('session.php');

   include('header2.php') ;

   @include'connection.php';
   ?>  

   <section id="title" class="emerald">
        <div class="container ">
            <div class="row">
                <div class="col-sm-10 pad">
                <br><br>
                    <h1>Update Your Profile Here</h1>
                    
            </div>
        </div>
    </section>



   <style type="text/css">

   .sty
   {
      font-family: Times New Roman;
      font-size: 30px;
      font-style: center;
   }


   </style>
   <div class="mainContent">
   <?php
 // $searid=$_POST['stdid'];
  //echo $searid;
    ?>
   <section id="registration" class="container">
    <form class="form-horizontal center" role="form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
    <fieldset class="registration-form">
 
          <div class="form-group">
            <h1>DUET HELTH CHECKUP SYSTEM</h1>
            <H2>DUET,GAZIPUR</H2>
            </div>
          <br>

    <div class="container pad"> 

     <table border="1" width="80%" class="table-striped table-bordered table">
        
        <tr >
          <th width="30px">SL No </th>
          <th ><center>Student Id</center></th>
          <th><center>Name</center></th>
          <th><center>Gender</center></th>
          <th><center>age</center></th>
          <th><center>Fathe Name</center></th>
          <th><center>Mother Name</center></th>
        </tr>

<?php
$sel=$_SESSION['user_data']['std_id'];
//echo $sel;

$sql = "SELECT *  FROM  `std_info` WHERE `std_info`.`std_id` = '$sel'";
$res=mysql_query($sql);
$sl=0;
while($data=mysql_fetch_assoc($res))
{
  $sl++;
        //   echo '<pre>';
        // print_r($data);
        // echo '</pre>';

  ?>
        <tr>
          <td><?php echo $sl;?></td>
          <td><?php echo $data['std_id'];?></td>
          <td><?php echo $data['first_name']." ".$data['last_name'];?></td>
          <td><?php echo $data['gender'];?></td>
          <td><?php echo $data['age'];?></td>
          <td><?php echo $data['f_name'];?></td>
          <td><?php echo $data['m_name'];?></td>

          
          

        </tr>

 <?php 
}

?>
      </table>

      <table border="1" width="80%" class="table-striped table-bordered table">
        
        <tr >
          <th width="30px">SL No </th>
          <th ><center>Test Id</center></th>
          <th><center>Test Name</center></th>
          <th><center>Test result</center></th>
          <th><center>Student Remark</center></th>
          <th><center>Date</center></th>
          <th><center>Next Time</center></th>
        </tr>

<?php

$sql = "SELECT `test`.*, `report`.*  FROM `test` INNER JOIN `report` WHERE `test`.`test_id` = `report`.`test_id` and `report`.`std_id`='$sel'";
$res=mysql_query($sql);
$sl=0;
while($data=mysql_fetch_assoc($res))
{
  $sl++;
        //   echo '<pre>';
        // print_r($data);
        // echo '</pre>';

  ?>
        <tr>
          <td><?php echo $sl;?></td>
          <td><?php echo $data['test_id'];?></td>
          <td><?php echo $data['test_name'];?></td>
          <td><?php echo $data['test_result'];?></td>
          <td><?php echo $data['std_remark'];?></td>
          <td><center><?php echo date("d-m-Y ", strtotime($data['report_date'])); ?></center></td>
          <td><center><?php echo date("d-m-Y ", strtotime($data['next_checkup'])); ?></center></td>
          

        </tr>

 <?php 
}

?>
      </table>
    
    </fieldset>
    </form>
    </section>
    </div>
    
   <?php include('silder.php') ;
   ?>
  
    <?php include('footer.php') ;
   ?>
