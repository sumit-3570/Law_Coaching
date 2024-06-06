<?php
    include_once "support.php";
    include_once "conn.php";

    p($_GET);
    // status is start
    $stat_id=$_GET['stat_id'];
    $status=$_GET['status'];
    session_start();
  
    if( $_SESSION['admin_sign_id'] == '') {
         header('location:index.php');
    }
    if(isset($stat_id)) {
        $up_course="UPDATE clat_classes SET
            clat_classes_status='$status'
            WHERE clat_classes_id='$stat_id';
        
        ";
            $exe_courses=mysqli_query($conn,$up_course);
    }

    // status is end

    // single delete start
   $del_course_id=$_GET['del_course_id'];
   if(isset($del_course_id)) {
    $del_course_clat="DELETE FROM  clat_classes WHERE clat_classes_id='$del_course_id'";
    $exe_course_clat=mysqli_query($conn,$del_course_clat);
   }

   // single delete end

//    delete all start
   p($_POST);

   $del_all_courses=$_POST['del_all'];
   if(isset($del_all_courses)) {
    foreach ($del_all_courses as  $value) {
        $del_all="DELETE FROM clat_classes WHERE clat_classes_id ='$value'";
        $exe_delall_courses=mysqli_query($conn,$del_all);
   }
   }
   





    include_once "header_admin.php";
?>
      <div class="col-9 clm_dash">
                <a href="home.php">
                    <span class="text-black">Home</span>
                </a>
                <h2 class="my-1 text-center"> View Clat Courses </h2>
                
                <form method="post">
                        <table class="table">
                            <thead class="table-dark">
                                <tr>
                                    <th>
                                        <button class="btn btn-danger"type="submit">Delete</button>
                                    </th>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Duration</th>
                                    <th>Eligible</th>
                                    <th>Hour</th>
                                    <th>Price</th>
                                    <th>Live</th>
                                    <th>Link</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                                    <?php
                                       $sel_clat_p="SELECT * FROM clat_classes ";
                                       $exe_clat_p=mysqli_query($conn,$sel_clat_p);
                                       while($fetch_clat_p=mysqli_fetch_assoc($exe_clat_p)) {
                                           
                                    ?>
                            <tbody>
                                 <tr>
                                    <td>
                                        <input type="checkbox" name="del_all[]" value="<?php echo $fetch_clat_p['clat_classes_id'] ?>">
                                    </td>
                                    <td><?php echo $fetch_clat_p['clat_classes_id'] ?></td>
                                    <td><?php echo $fetch_clat_p['clat_classes_title'] ?></td>
                                    <td><?php echo $fetch_clat_p['clat_classes_duration'] ?></td>
                                    <td><?php echo $fetch_clat_p['clat_classes_eligible'] ?></td>
                                    <td><?php echo $fetch_clat_p['clat_classes_hour'] ?></td>
                                    <td><?php echo $fetch_clat_p['price'] ?></td>
                                    <td><?php echo $fetch_clat_p['live_classes'] ?></td>
                                    <td><?php echo $fetch_clat_p['clat_classes_link'] ?></td>
                                    <td>
                                        <?php  
                                                if($fetch_clat_p['clat_classes_status']) {
                                        ?>
                                                    <a href="view_clat_courses.php?stat_id=<?php echo $fetch_clat_p['clat_classes_id'] ?>& status=0">
                                                        <button class="btn btn-success" type="button">Status</button>
                                                    </a>
                                                    
                                        <?php
                                                }else {
                                        ?>
                                                <a href="view_clat_courses.php?stat_id=<?php echo $fetch_clat_p['clat_classes_id'] ?>& status=1">
                                                     <button class="btn btn-danger" type="button">Inactive</button>
                                                </a>
                                                    
                                        <?php
                                                }

                                        ?>
                                    
                                    </td>
                                    
                                   
                                    <td>
                                        <a href="edit_clat_courses.php? edit_id=<?php echo $fetch_clat_p['clat_classes_id'] ?>">
                                                <button class="btn btn-success px-4" type="button">Edit</button>
                                        </a>
                                        <a href="view_clat_courses.php?del_course_id=<?php echo $fetch_clat_p['clat_classes_id'] ?>">
                                            <button class="btn btn-danger mt-2" type="button">Delete</button>
                                        </a>
                                        
                                        
                                        
                                    </td>
                                   
                                    
                                 </tr>
                                 <?php
                                       }              
                                 ?>
                            </tbody>
                        </table>
                        
                    </form>
                   

     </div>

<?php
        include_once "footer_admin.php";

?>