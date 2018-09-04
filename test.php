
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
    <form class="form-horizontal center" role="form" method="post" action="<?php //echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
    <fieldset class="registration-form">
    <!--<div class="form-group">
            <label class="control-label col-sm-3" for="stdid">Student ID:</label>
            <div class="col-sm-5">
              <input type="STDID" class="form-control" id="stdid" name="stdid" placeholder="Enter Student Id">
            </div>
          </div>

          
          <--<div class="form-group"> 
            <div class="col-sm-8">
              <button type="search" name="btnsearch" class="btn btn-default">Search</button>
            </div>
          </div>-->
          <div class="form-group">
            <h1>DUET HELTH CHECKUP SYSTEM</h1>
            <H2>DUET,GAZIPUR</H2>
            </div>
          <br>



<!--<?php

//$SID=$_POST['$_SESSION['id']'];

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

          
          

        </tr>

 <?php 
}

?>-->
      </table>

      <table border="1" width="80%" class="table-striped table-bordered table">
        
        <tr >
          <th width="30px">SL No </th>
          <th ><center>Test Id</center></th>
          <th><center>Test Name</center></th>
          <th><center>Test Type</center></th>
          <th><center>Test Cost</center></th>
        </tr>

<?php

$sql = "SELECT *  FROM `test`";
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
          <td><?php echo $data['test_type'];?></td>
          <td><?php echo $data['test_cost'];?></td>
          
        </tr>

 <?php 
}

?>
      </table>
       <div class="form-group"> 
            <div class="col-sm-8">
              <button type="search" name="btnsearch" class="btn btn-default">Addn Test</button>
            </div>
          </div>
          <?php
         if(isset($_POST['btnsearch']))
 			{
 				echo "<script>window.location='uptest.php'</script>";
 				}
          //isset(var)
          ?>

    
    </fieldset>
    </form>
    </section>
    </div>
    
   <?php include('silder.php') ;
   ?>
  
    <?php include('footer.php') ;
   ?>
