<?php
include_once "support.php";
include_once "conn.php";


session_start();

$id_sel_reset=$_SESSION['id_admin'];

if(isset($_POST['rest'])) {
    $new_pass=$_POST['new_pass'];
    $confirm_pass=$_POST['confirm_pass'];
    if($new_pass =$confirm_pass) {
        $up_pass="UPDATE sign_in SET
            sign_in_pass='$new_pass'
            WHERE sign_in_id ='$id_sel_reset';
        ";
        $exe_up=mysqli_query($conn,$up_pass);
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
                    Please Set Your Password
                    <h6><?php echo $loginerror?></h6>
                </p>
                <div data-mdb-input-init class="form-outline">
                    <input type="password"  class="form-control my-3" name="new_pass" />
                    <label class="form-label" >New Passwordt</label>
                    <input type="password"  class="form-control my-3" name="confirm_pass" />
                    <label class="form-label" >Confirm Password</label>
                </div>
                <button class="btn btn-primary" type="submit" name="rest" value="submit"> Resent</button>
               
            </div>
        </div>
    </form>
       
</div>





<?php
include_once "footer.php";
?>