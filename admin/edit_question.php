<?php
    include_once "support.php";
    include_once "conn.php";

   
   $question=$_POST['question'];
   $answer=$_POST['answer'];
   $ques_edit=$_GET['ques_edit'];
   session_start();
  
   if( $_SESSION['admin_sign_id'] == '') {
        header('location:index.php');
   }

   
   if(isset($_POST['save'])) {
    $up_prep_c="UPDATE  question SET
        	question_heading='$question',
        	question_para='$answer'
            WHERE question_id='$ques_edit';
           
       
    ";
        $exe_clat_prep=mysqli_query($conn,$up_prep_c);
   }
    include_once "header_admin.php";

?>
            <div class="col-9 clm_dash">
                    <span class="text-black"><a href="home.php">Home/</a>Add Question and ans</span>
                    <h3 class="my-3 text-center"> Add Question and ans </h3>
                    <form method="post">

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Question</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="question" placeholder="<?php echo $question ?>">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Answer</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="answer" placeholder="<?php echo $answer ?>">
                               
                                
                            </div>
                            <button type="submit" name="save" value="1" class="btn btn-dark text-white mb-1">Insert</button>
                    </form>

            </div>

<?php
    include_once "footer_admin.php";
?>