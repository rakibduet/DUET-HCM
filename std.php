<?php 
include('session.php');
//if(empty($_SESSION['logedin'])){
	//header("Location: loginAll.php");
	//exit;
//}
//if($_SESSION['user_data']['user_type'] != '3'){
	//echo 'you have no permission to acces this page';
	//exit;
//}
include('header2.php') ;
   ?>

      <!--<section id="title" class="emerald">
        <div class="container ">
            <div class="row">
                <div class="col-sm-6 pad">
                <br><br>
                    <h1>Select Your Exam From Here:</h1>
                </div>
                <div class="col-sm-6 pad">
                </div>
            </div>
        </div>
    </section>-->
    <style>
.registration-form
{
    width: 960px;
    height: auto;
    direction: center;
    padding-top: 3px;

}
    </style>
   <div class="mainContent">
   <section id="registration" class="container">
    <form class="form-horizontal center" role="form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
    <fieldset class="registration-form">
          <div class="form-group">
            <h1>DUET HELTH CHECKUP SYSTEM</h1>
            <H2>DUET,GAZIPUR</H2>
            <!--<label class="control-label col-sm-3" for="userName">Student ID:</label>-->
            <!--<div class="col-sm-9">
              <input type="text" class="form-control" id="userName" name="userName" placeholder="Enter Student Id">
            </div>-->
          </div>
          <br>

          <div class="form-group">
            <div>
              <label class="control-label col-sm-3" for="userPwd">Name</label>
              <div class="col-sm-8"> 
               <input type="text" class="form-control" id="userPwd" name="userPwd" placeholder="Enter Student Name">
              </div>
            </div>
            <div>
              <label class="control-label col-sm-3" for="userPwd">Std Id:</label>
              <div class="col-sm-8"> 
                <input type="text" class="form-control" id="username" name="userName" placeholder="Enter Student ID">
              </div>
            </div>
            <div>
              <label class="control-label col-sm-3" for="fatherName">FatherName</label>
              <div class="col-sm-8"> 
                <input type="text" class="form-control" id="FatherName" name="FatherName" placeholder="Enter father name">
              </div>
            </div>
            <div>
              <label class="control-label col-sm-3" for="MotherName">MotherName</label>
              <div class="col-sm-8"> 
                <input type="text" class="form-control" id="MotherName" name="MotherName" placeholder="Enter Mother name">
              </div>
            </div>
            <div>
              <label class="control-label col-sm-3" for="fatherName">Year</label>
              <div class="col-sm-8"> 
                <input type="text" class="form-control" id="FatherName" name="MotherName" placeholder="Enter Year">
              </div>
            </div>
            <div>
              <label class="control-label col-sm-3" for="fatherName">Semister</label>
              <div class="col-sm-8"> 
                <input type="text" class="form-control" id="FatherName" name="MotherName" placeholder="Enter Semister">
              </div>
            </div>
            <!--<h3>Checkup Content</h3>-->
            <div>
              <label class="control-label col-sm-3" for="fatherName">Complete Blood(T.C,D.C,ESR)</label>
              <div class="col-sm-8"> 
                <input type="text" class="form-control" id="FatherName" name="MotherName" placeholder="Enter T.C,D.C,ESR">
              </div>
            </div>
            <div>
              <label class="control-label col-sm-3" for="fatherName">Hb%</label>
              <div class="col-sm-8"> 
                <input type="text" class="form-control" id="FatherName" name="MotherName" placeholder="Enter Hb%">
              </div>
            </div>
            <div>
              <label class="control-label col-sm-3" for="fatherName">ESR</label>
              <div class="col-sm-8"> 
                <input type="text" class="form-control" id="FatherName" name="MotherName" placeholder="Enter ESR">
              </div>
            </div>
            <div>
              <label class="control-label col-sm-3" for="fatherName">Platelet Count</label>
              <div class="col-sm-8"> 
                <input type="text" class="form-control" id="FatherName" name="MotherName" placeholder="Enter Platelet Count">
              </div>
            </div>
            <div>
              <label class="control-label col-sm-3" for="fatherName">Prepheral Blood Film</label>
              <div class="col-sm-8"> 
                <input type="text" class="form-control" id="FatherName" name="MotherName" placeholder="Enter Prepheral Blood Film">
              </div>
            </div>
            <div>
              <label class="control-label col-sm-3" for="fatherName">Blood Group & Rh Typing</label>
              <div class="col-sm-8"> 
                <input type="text" class="form-control" id="FatherName" name="MotherName" placeholder="Enter Blood Group & Rh Typing">
              </div>
            </div>
               <div>
              <label class="control-label col-sm-3" for="fatherName">Widal Test</label>
              <div class="col-sm-8"> 
                <input type="text" class="form-control" id="FatherName" name="MotherName" placeholder="Enter Widal test">
              </div>
            </div>
            <div>
              <label class="control-label col-sm-3" for="fatherName">Serum Billirubin</label>
              <div class="col-sm-8"> 
                <input type="text" class="form-control" id="FatherName" name="MotherName" placeholder="Enter Serum Billirubin">
              </div>
            </div>
            <div>
              <label class="control-label col-sm-3" for="fatherName">HBsAg</label>
              <div class="col-sm-8"> 
                <input type="text" class="form-control" id="FatherName" name="MotherName" placeholder="Enter HBsAg">
              </div>
            </div>
            <div>
              <label class="control-label col-sm-3" for="fatherName">Serum Total Cholesterol</label>
              <div class="col-sm-8"> 
                <input type="text" class="form-control" id="FatherName" name="MotherName" placeholder="Enter Serum Cholesterol">
              </div>
            </div>
            <div>
              <label class="control-label col-sm-3" for="fatherName">Blood Sugar</label>
              <div class="col-sm-8"> 
                <input type="text" class="form-control" id="FatherName" name="MotherName" placeholder="Enter Blood Sugar">
              </div>
            </div>
            <div>
              <label class="control-label col-sm-3" for="fatherName">Mantoux Test</label>
              <div class="col-sm-8"> 
                <input type="text" class="form-control" id="FatherName" name="MotherName" placeholder="Enter Mantoux">
              </div>
            </div>
            <div>
              <label class="control-label col-sm-3" for="fatherName">RA Factor</label>
              <div class="col-sm-8"> 
                <input type="text" class="form-control" id="FatherName" name="MotherName" placeholder="Enter RA Factor">
              </div>
            </div>
            <div>
              <label class="control-label col-sm-3" for="fatherName">Urine R/E</label>
              <div class="col-sm-8"> 
                <input type="text" class="form-control" id="FatherName" name="MotherName" placeholder="Enter Urine R/E">
              </div>
            </div>
            <div>
              <label class="control-label col-sm-3" for="fatherName">Urine(Pregnancy Test)</label>
              <div class="col-sm-8"> 
                <input type="text" class="form-control" id="FatherName" name="MotherName" placeholder="Enter Pregnency Result">
              </div>
            </div>
            <div>
              <label class="control-label col-sm-3" for="fatherName">Eye Test</label>
              <div class="col-sm-8"> 
                <input type="text" class="form-control" id="FatherName" name="MotherName" placeholder="Enter Eye Test Result">
              </div>
            </div>



        <!--<div class="form-group"> 
            <div class="col-sm-offset-2 col-sm-3">
              <div class="checkbox" >
                <label><input type="checkbox"> Remember me</label>
              </div>
            </div>
          </div>-->
          
          <div class="form-group"> 
            <div class="col-sm-9">
              <button type="Submit" name="submit" class="btn btn-default">Submit Report</button>
              <button type="Addtest" name="AddTEST" class="btn btn-default">Add Test</button>
            </div>
            <!--<div class="col-sm-12">
              <button type="Addtest" name="AddTEST" class="btn btn-default">Add Test</button>
            </div>-->
          </div>  

        <!--<div class="form-group"> 
            <div class="col-sm-12">
            <label class="control-label col-sm-12">He is Not Yet Registerd !! <a href="signup.php">Sign Up</a> Here </label>
            </div>
         </div>-->

      </fieldset>
    </form>
</section>
   
   </div>


    <?php include('footer2.php') ;
   ?>
