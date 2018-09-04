   <?php 
   include_once('session.php');

   include('header3.php') ;

   @include'connection.php';

 ?>

      <section id="title" class="emerald">
        <div class="container ">
            <div class="row">
                <div class="col-sm-6 pad">
                <br><br>
                    <h1>Test </h1>
                </div>
                <div class="col-sm-6 pad">
                </div>
            </div>
        </div>
    </section>



 <?php


 if(isset($_POST['btnsearch']))
 {

$searid=$_POST['stdid'];
$_SESSION['user_id']=$searid;


//echo $searid;
$sql = "SELECT *  FROM  `std_info` WHERE `std_info`.`std_id` = '$searid'";
$res=mysql_query($sql);
$data=mysql_fetch_array($res);

$_SESSION['user']=$data;
$name=$data['first_name']." ".$data['last_name'];
$gender=$data['gender'];
$age=$data['age'];
$fname=$data['f_name'];
$mname=$data['m_name'];


}

else
{
 // $mess="Hello";
 // echo $mess;
}

?>
 <?php 






$mess='';
if(isset($_POST['submitReport']))
{

    $tst_res=$_POST['tst_res'];
    $test_remark=$_POST['test_remark'];
    $tst_date=$_POST['tst_date'];
    $tst_nextdate=$_POST['tst_nextdate'];
    $doc_name=$_POST['doc_name'];
    $exam_id = $_POST['exam_id'];


  $id=$_SESSION['user_id'];
  //echo $id;
  //echo $exam_id;
      echo '<pre>';
      //print_r($_POST);
      echo '</pre>';

  if(!empty($tst_res) && !empty($test_remark) && !empty($tst_date) && !empty($tst_nextdate) && !empty($doc_name) && !empty($exam_id))
    {

      $qry="INSERT INTO report (`std_id`, `test_id`, `test_result`, `std_remark`, `report_date`, `next_checkup`, `doc_name`) VALUES ('$id', '$exam_id', '$tst_res', '$test_remark', '$tst_date', '$tst_nextdate', '$doc_name')";

      // $query=mysql_query("insert into report (`std_id`,`test_id`,`test_result`,`std_remark`,`report_date`,`next_checkup`,`doc_name`) values('$id','$exam_id','$tst_res','$test_remark','$tst_date','$tst_nextdate','$doc_name'");

      $res=mysql_query($qry);
     // echo $res;
      //echo $qry;
      $aff=mysql_affected_rows();
      
      if($aff>0)
      {
        $mess="Data Added";
        echo "Data added";



      }
      else
      {
        $mess="Data Didn't Added";
        echo "Data didnot added";
      }


    }


    else
    {
         $mess='<span style="font-weight:bold">'."Please enter all field....".'<span>';
    }

    //echo "$message";
    $searid=$_SESSION['user_id'];


//echo $searid;
$sql = "SELECT *  FROM  `std_info` WHERE `std_info`.`std_id` = '$searid'";
$res=mysql_query($sql);
$data=mysql_fetch_array($res);

$_SESSION['user']=$data;
$name=$data['first_name']." ".$data['last_name'];
$gender=$data['gender'];
$age=$data['age'];
$fname=$data['f_name'];
$mname=$data['m_name'];
  
}


 function test_input($data)
{
    $data= trim($data);
    $data= stripcslashes($data);
    $data= htmlspecialchars($data);
    
    return $data;
}


?>
 
 <style type="text/css">

.registration-form
{
  width: 750px;
  height: auto;
  direction: center;

}

.middle
{
  text-align: left;
  color: red;
}

 </style>

   <form class="form-horizontal center" role="form" method="post" action="" style="padding-top:5px">
    <fieldset class="registration-form">
    <div class="form-group">
            <label class="control-label col-sm-3" for="stdid">Student ID:</label>
            <div class="col-sm-6">
              <input type="stdid" class="form-control" id="stdid" name="stdid" placeholder="Enter Student Id">
            </div>
          </div>

          <div class="form-group"> 
            <div class="col-sm-8">
              <button type="submit" name="btnsearch" class="btn btn-default">submit</button>
            </div>
          </div> 
      
      </fieldset>
      </form>
   
<?php
  if(isset($_POST['btnsearch'])|| isset($_POST['submitReport']))
 { ?>
  <form class="form-horizontal center" role="form" method="post" action="">
    <fieldset class="registration-form">
    <div class="form-groupn">
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
      </div>
      </fieldset>
      </form>
      <?php
}?>
    <div class="row ">

    <!--<?php echo $mess; ?>-->
        <div class="col-sm-12 pad">
             <section id="registration" class="container">
        <form class="form-horizontal center " role="form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
        <fieldset class="registration-form">
          <div class="form-group">
              <label class="control-label col-sm-3" for="Ques">Select Test </label>
              <div class="col-sm-9">
              <?php 
                $sql = "select * from test";
              $res = mysql_query($sql);
              // $data1=mysql_fetch_assoc($res);
              ?>
                <select name="exam_id" class="form-control">
                  <option value="">Select Test</option>
                  <?php while($data = mysql_fetch_assoc($res)){ ?>
                  <option value="<?php echo $data['test_id'] ?>"><?php echo $data['test_name'] ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <div class="form-group ">
              <label class="control-label col-sm-12 "for="tst_res">Now Add Student test Here...</label>
              </div>

            <div class="form-group">
              <label class="control-label col-sm-3" for="tst_res">Test Result </label>
              <div class="col-sm-9">
                <textarea class="form-control" rows="5" id="tst_res" name="tst_res" placeholder="Type checkup result" ></textarea>
              </div>
            </div>

           <div class="form-group">
                <label class="control-label col-sm-3" for="test_remark">Student Remark</label>
                <div class="col-sm-9">
                   <select name="test_remark" class="form-control" id="test_remark">
                    <option value="Normal">Normal</option>
                    <option value="Positive">Positive</option>
                    <option value="Affeted">effeted</option>
                  </select>
                </div>
              </div>

            <div class="form-group">
              <label class="control-label col-sm-3" for="tst_date">Test Date:</label>
              <div class="col-sm-6">
                    <input type="date" name="tst_date" class="form-control" id="tst_date"/>
              </div>
            </div>


            <div class="form-group">
              <label class="control-label col-sm-3" for="tst_nextdate">Next Chekup Date:</label>
              <div class="col-sm-6">
                  <input type="date" name="tst_nextdate" class="form-control" id="tst_nextdate"/>
              </div>
            </div>


            <div class="form-group">
              <label class="control-label col-sm-3" for="doc_name">Doctors Name</label>
              <div class="col-sm-9">
                       <input type="text" id="doc_name" name="doc_name" placeholder="Enter Doctor name" class="form-control">
              </div>
            </div>

            <div class="form-group"> 
              <div class="col-sm-offset-6 col-sm-10">
                <button type="submit" class="btn btn-default" name="submitReport" value="submitReport">Submit</button>
              </div>
            </div>
           
          </fieldset>
        </form>
      </section><!--/#registration-->

        </div>
    </div>
</div>

<?php include('footer3.php') ;
   ?>