
   <?php 
   include_once('session.php');

   include('header.php') ;

   @include'connection.php';
   $Sid=$_POST['stdid'];

 ?>
 
   <section id="title" class="emerald">
        <div class="container ">
            <div class="row">
                <div class="col-sm-10 pad">
                <br><br>
                    <h1>Update report Here</h1>
                    
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
   <section id="registration" class="container">
   
   
   
    <form class="form-horizontal center" role="form" method="post" action="">
    <fieldset class="registration-form">
    <div class="form-group">
            <label class="control-label col-sm-3" for="stdid">Student ID:</label>
            <div class="col-sm-5">
              <input type="stdid" class="form-control" id="stdid" name="stdid" placeholder="Enter Student Id">
            </div>
          </div>


          
          <div class="form-group"> 
            <div class="col-sm-7">
              <button type="submit" name="btnsearch" class="btn btn-default">submit</button>
            </div>
          </div> 
		  </form>
		  </fieldset>


<?php
 if(isset($_POST['submit_report']))
 {



  //$data1=$_POST['submit_report'];

echo "hello";
$id=$_SESSION['user_id'];


echo $id;
$sql = "SELECT *  FROM  test";
$res=mysql_query($sql);
// $data=mysql_fetch_assoc($res);
while($data=mysql_fetch_assoc($res))
{

      echo '<pre>';
      print_r($data);
      echo '</pre>';

}

    // $sql = "INSERT INTO `report` (`test_result`, `std_remark`,`report_date`,`next_checkup`,`doc_name`) VALUES ($value, $hob)";
  // foreach ($_POST as $key => $value1) {

  //   // echo $value1['tst_res'];

  //   $data=$value1;

  //     // for($i=0;$i<=3;$i++)
  //     // {
  //     //   echo $data[$i];
  //     // }


  //   // foreach ($data as $key => $value) {
          
  //   // $data1=$value;
  //   // $i=0;

  //   // echo $data1;
  //   // $i++;
  //   //   // echo '<br>';
  //   //   // echo $value;

  //   // }

  // }





}

?>
   <?php
 if(isset($_POST['btnsearch']))
 {
$searid=$_POST['stdid'];
$_SESSION['user_id']=$searid;


//echo $searid;
$sql = "SELECT *  FROM  `std_info` WHERE `std_info`.`std_id` = '$searid'";
$res=mysql_query($sql);
while($data=mysql_fetch_array($res))
{
$name=$data['first_name']." ".$data['last_name'];
$gender=$data['gender'];
$age=$data['age'];
$fname=$data['f_name'];
$mname=$data['m_name'];
}

?>
   <fieldset class="registration-form">
      <form class="form-horizontal"   enctype="multipart/form-data">

          <div class="form-group">
            <h1>DUET HELTH CHECKUP SYSTEM</h1>
            <H2>DUET,GAZIPUR</H2>
            </div>
          <br>

    <div class="container pad"> 

     <table border="1" width="80%" class="table-striped table-bordered table">
        
        <tr >

          <th ><center>Student Id</center></th>
          <th><center>Name</center></th>
          <th><center>Gender</center></th>
          <th><center>age</center></th>
          <th><center>Fathe Name</center></th>
          <th><center>Mother Name</center></th>
        </tr>



        <tr>

          <td><?php echo $searid; ?></td>
          <td><?php echo $name; ?></td>
          <td><?php echo $gender; ?></td>
          <td><?php echo $age; ?></td>
          <td><?php echo $fname; ?></td>
          <td><?php echo $mname; ?></td>

          
          

        </tr>


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
          <th><center>Doctor Name</center></th>
        </tr>

<?php

$sql = "SELECT *  FROM  test";
$res=mysql_query($sql);
$sl=0;
while($data=mysql_fetch_assoc($res))
{

$testid=$data['test_id'];
//$t_RES=$_POST['tst_res'];
//echo $t_RES;

/*if($_SERVER["REQUEST_METHOD"]=="POST")
    {
      $test_result=$_POST['tst_res'];
        $TR=$_POST['test_remark'];
        $TD=$_POST['tst_date'];
        $TND=$_POST['tst_nextdate'];
        $Doc_name=$_POST['doc_name'];
    }
    echo $test_result;*/
$sl++;

  ?>
        <tr>
          <td><?php  echo $sl;?></td>
          <td><?php  echo $data['test_id'];?></td>
          <td><?php echo $data['test_name'];?></td>
          <td><input type="text" name="tst_res" class="form-control" /></td>
           <td><select name="test_remark" class="form-control" id="test_remark">
            <option value="Normal">Normal</option>
            <option value="Positive">Positive</option>
            <option value="Affeted">Affeted</option>
          </select></td>
          <td><input type="date" name="tst_date[]" class="form-control" id="tst_date"/></td>
          <td><input type="date" name="tst_nextdate[]" class="form-control" id="tst_nextdate"/></td>
          <td><input type="text" name="doc_name[]" class="form-control" id="doc_name"/></td>
          <a style="text-decoration: none;" href="edit.php?user=">Submit </a>
<!--           <td><input type="hidden" name="test[]" value="<?php echo $data['test_id'] ; ?>"></td> -->
          
        </tr>


 <?php 
}

?>
</table>
 <div class="form-group"> 
            <div class="col-sm-9">
              <input type="Submit" name="submit_report"  value="AddReport"class="btn btn-default"/>
             
          </div> 
    </div>
    </fieldset>
    </form>
    </section>
 
    <?php
      }
        ?>
      

    
   <?php include('silder.php') ;
   ?>
  
    <?php include('footer.php') ;
   ?>
