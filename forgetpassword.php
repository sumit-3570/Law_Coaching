<?php
include_once "support.php";
include_once "conn.php";

session_start();
$submit=$_POST['submit'];
if(isset($submit)) {
  $email_forget=$_POST['email_forget'];
  
   $sel_sign_in="SELECT * FROM sign_in WHERE sign_in_email='$email_forget'";
   $exe_sign_in=mysqli_query($conn,$sel_sign_in);
   $fetch_sign_in_check=mysqli_num_rows($exe_sign_in);
   if( $fetch_sign_in_check == 1) {
        $fetch_data=mysqli_fetch_assoc($exe_sign_in);
      $_SESSION['id_admin']=$fetch_data['sign_in_id'];
   
       header("location:otp_check.php");

   }else {
    $loginerror="please enter the correct email id";
   } 
}
include_once "header.php";

?>
<div class="container-fluid pass_form py-5">
    <form method="post">
    <div class="card text-center " style="width: 500px; margin: 0px 504px; background-color:background: #373B44;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #4286f4, #373B44);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #4286f4, #373B44); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
;">
            <div class="card-header h5 text-white bg-primary">Password Reset</div>
            <div class="card-body px-5">
                <p class="card-text py-2">
                    Enter your email address and we'll send you 4 digit OTP with instructions to reset your password.
                    <h6><?php echo $loginerror?></h6>
                </p>
                <div data-mdb-input-init class="form-outline">
                    <input type="email"  class="form-control my-3" name="email_forget" />
                    <label class="form-label" >Email input</label>
                </div>
                <button class="btn btn-primary" type="submit" name="submit" value="submit"> Send</button>
               
            </div>
        </div>
    </form>
       
</div>





<?php
include_once "footer.php";
?>