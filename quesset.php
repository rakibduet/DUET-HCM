<?php
include('session.php');
if(empty($_SESSION['logedin'])){
	header("Location: loginAll.php");
	exit;
}
if($_SESSION['user_data']['user_type'] != '2'){
	echo 'you have no permission to acces this page';
	exit;
}

?>
<?php 
include('header3.php') ;
   ?>

      <section id="title" class="emerald">
        <div class="container ">
            <div class="row">
                <div class="col-sm-6 pad">
                <br><br>
                    <h1>Ques Set Wizard</h1>
                </div>
                <div class="col-sm-6 pad">
                </div>
            </div>
        </div>
    </section>

<?php 

@include'connection.php';

$err='';
$message='';

if($_SERVER["REQUEST_METHOD"]=="POST")
{

    $ques=test_input($_POST['Ques']);
    $ques_type=test_input($_POST['ques_type']);
    $Op1=test_input($_POST['op_1']);
    $Op2=test_input($_POST['op_2']);
    $Op3=test_input($_POST['op_3']);
    $Op4=test_input($_POST['op_4']);
    $Ans=test_input($_POST['correct_ans']);
    $exam_id = test_input($_POST['exam_id']);

 } 

 function test_input($data)
{
    $data= trim($data);
    $data= stripcslashes($data);
    $data= htmlspecialchars($data);
    
    return $data;
}

if(isset($_POST['createQues']))
{

	if(!empty($ques) && !empty($Op1) && !empty($Op2) && !empty($Op3) && !empty($Op4) && !empty($Ans) && !empty($exam_id))
    {
			$query=mysql_query("insert into quiz (`exam_id`,`ques`,`ques_type`,`op1`,`op2`,`op3`,`op4`,`correct_ans`,`quiz_status`) values('$exam_id','$ques','$ques_type','$Op1','$Op2','$Op3','$Op4','$Ans','1')");

			$aff=mysql_affected_rows();
			
			if($aff>0)
			{
				echo "Data added";
			}
			else
			{
				echo "Data didnot added";
			}
    }

    else
    {
         $message='<span style="font-weight:bold;">'."Please enter all field....".'<span>';
    }

    echo "$message";
	
}

?>

 <style type="text/css">

.registration-form
{
	width: 600px;
	height: auto;
	direction: center;

}

 </style>
 

<div class="container ">
    <div class="row ">
        <div class="col-sm-2">
        <br>
            <h1>Teahers Profile</h1>
        </div>

        <div class="col-sm-10 pad">
             <section id="registration" class="container">
				<form class="form-horizontal center " role="form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
				<fieldset class="registration-form">
					<div class="form-group">
					    <label class="control-label col-sm-3" for="Ques">Select Exam </label>
					    <div class="col-sm-9">
					    <?php 
					    	$sql = "select id, exam_name from exam where teacher_id = ".$_SESSION['user_data']['id'];
							$res = mysql_query($sql);
					    ?>
					    	<select name="exam_id" class="form-control">
					    		<option value="">Select Exam</option>
					    		<?php while($data = mysql_fetch_assoc($res)){ ?>
					    		<option value="<?php echo $data['id'] ?>"><?php echo $data['exam_name'] ?></option>
					    		<?php } ?>
					    	</select>
					    </div>
					  </div>
						<div class="form-group">
					    <label class="control-label col-sm-8" for="ques">Now Add Your Ques Here...</label>
					    </div>

					  <div class="form-group">
					    <label class="control-label col-sm-3" for="Ques">Ques </label>
					    <div class="col-sm-9">
					    	<textarea class="form-control" rows="5" id="Ques" name="Ques" placeholder="Type Your Question" ></textarea>
					    </div>
					  </div>

					 <div class="form-group">
				        <label class="control-label col-sm-3" for="ques_type">User Type</label>
				        <div class="col-sm-9">
				          <select name="ques_type" class="form-control" id="ques_type">
				            <option value="1">MCQ</option>
				            <option value="2">True-False</option>
				          </select>
				        </div>
				      </div>

					  <div class="form-group">
					    <label class="control-label col-sm-3" for="op_1">Option 1</label>
					    <div class="col-sm-9">
			                 <input type="text" id="op_1" name="op_1" placeholder="Option 1" class="form-control">
					    </div>
					  </div>


					  <div class="form-group">
					    <label class="control-label col-sm-3" for="op_2">Option 2</label>
					    <div class="col-sm-9">
			                 <input type="text" id="op_2" name="op_2" placeholder="Option 2" class="form-control">
					    </div>
					  </div>


					  <div class="form-group">
					    <label class="control-label col-sm-3" for="op_3">Option 3</label>
					    <div class="col-sm-9">
			                 <input type="text" id="op_3" name="op_3" placeholder="Option 3" class="form-control">
					    </div>
					  </div>


					  <div class="form-group">
					    <label class="control-label col-sm-3" for="op_4">Option 4</label>
					    <div class="col-sm-9">
			                 <input type="text" id="op_4" name="op_4" placeholder="Option 4" class="form-control">
					    </div>
					  </div>


					  <div class="form-group">
					    <label class="control-label col-sm-3" for="correct_ans">Answer</label>
					    <div class="col-sm-9">
			                 <input type="text" id="correct_ans" name="correct_ans" placeholder="Answer" class="form-control">
					    </div>
					  </div>

					  <div class="form-group"> 
					    <div class="col-sm-offset-6 col-sm-10">
					      <button type="submit" class="btn btn-default" name="createQues" value="createQues">Submit</button>
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