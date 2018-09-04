
   <?php 
   include_once('session.php');

   include('header3.php') ;

   @include'connection.php';
   ?>  

   <section id="title" class="emerald">
        <div class="container ">
            <div class="row">
                <div class="col-sm-10 pad">
                <br><br>
                    <h1>Search Student Profile Here</h1>
                    
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
   <!--<div class="mainContent">-->
   <section id="registration" class="container">
    <form class="form-horizontal center" role="form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
    <fieldset class="registration-form">
    <div class="form-group">
            <label class="control-label col-sm-3" for="stdid">Student ID:</label>
            <div class="col-sm-4">
              <input type="STDID" class="form-control" id="stdid" name="stdid" placeholder="Enter Student Id">
            </div>
          </div>

          
          <div class="form-group"> 
            <div class="col-sm-7">
              <button type="search" name="btnsearch" class="btn btn-default">Search</button>
            </div>
          </div>
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
          <th><center>Department</center></th>
          <th><center>Year</center></th>
          <th><center>Semister</center></th>
          <th><center>Section</center></th>
          <th><center>Contact no</center></th>
          <th><center>Email</center></th>
          
          
        </tr>

<?php

 if(isset($_POST['btnsearch']))
 {

$searid=$_POST['stdid'];
$_SESSION['user_id']=$searid;

$sql = "SELECT *  FROM  `std_info` WHERE `std_info`.`std_id` = '$searid'";
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
          <td><?php echo $data['dept'];?></td>
          <td><?php echo $data['year'];?></td>
          <td><?php echo $data['semister'];?></td>
          <td><?php echo $data['section'];?></td>
          <td><?php echo $data['contact_no'];?></td>
          <td><?php echo $data['email'];?></td>

          
          

        </tr>

 <?php 
}
}

?>
      </table>

      <!--<table border="1" width="80%" class="table-striped table-bordered table">
        
        <tr >
          <th width="30px">SL No </th>
          <th ><center>Test Id</center></th>
          <th><center>Test Name</center></th>
          <th><center>Test result</center></th>
          <th><center>Student Remark</center></th>
          <th><center>Date</center></th>
          <th><center>Next Time</center></th>
        </tr>

<!--<?php

$sql = "SELECT `test`.*, `report`.*  FROM `test` INNER JOIN `report` WHERE `test`.`test_id` = `report`.`test_id` and `report`.`std_id`='$searid'";
$res=mysql_query($sql);
$sl=0;
while($data=mysql_fetch_assoc($res))
{
  $sl++;
        //   echo '<pre>';
        // print_r($data);
        // echo '</pre>';

  ?>
        <!--<tr>
          <td><?php echo $sl;?></td>
          <td><?php echo $data['test_id'];?></td>
          <td><?php echo $data['test_name'];?></td>
          <td><?php echo $data['test_result'];?></td>
          <td><?php echo $data['std_remark'];?></td>
          <td><center><?php echo date("d-m-Y ", strtotime($data['report_date'])); ?></center></td>
          <td><center><?php echo date("d-m-Y ", strtotime($data['next_checkup'])); ?></center></td>
          

        </tr>-->

 <?php 
}

?>
      <!--</table>-->
    
    </fieldset>
    </form>
    </section>
    </div>
    
   <?php include('silder.php') ;
   ?>
  
    <?php include('footer.php') ;
   ?>
