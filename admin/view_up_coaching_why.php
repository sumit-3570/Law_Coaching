<?php
    include_once "support.php";
    include_once "conn.php";


    session_start();
  
    if( $_SESSION['admin_sign_id'] == '') {
         header('location:index.php');
    }
   
// single Delete clat Prep


$c_p_del=$_GET['c_p_del'];
if(isset($c_p_del)) {
    $del_clat_p="DELETE FROM up_judiciry_coach WHERE up_judiciry_coach_id ='$c_p_del'";
    $exe_clat__del=mysqli_query($conn,$del_clat_p);
}

// single Delete clat end Prep

// multi delete start

    $clatdel=$_POST['clatdel'];
    foreach ($clatdel as $key => $value) {
        if($_POST['submit']) {
           $delall_clat_p="DELETE FROM up_judiciry_coach WHERE up_judiciry_coach_id ='$value'"; 
           $exe_delall_clat_p=mysqli_query($conn,$delall_clat_p);
        }

    }

// multi delete end 

// update status is start

$id_stst=$_GET['id_stst'];
$status=$_GET['status'];
if(isset($id_stst)) {
    $up="UPDATE up_judiciry_coach SET
        up_judiciry_coach_status='$status'
        WHERE up_judiciry_coach_id ='$id_stst';
    ";
    $exe_up=mysqli_query($conn,$up);
}

// update status is end

// pegination is start

$Limit = 6;

$sel_pagination = "SELECT * FROM up_judiciry_coach  ";

$exe_pagination = mysqli_query($conn,$sel_pagination);

$no_of_records = mysqli_num_rows($exe_pagination);

$no_of_pages = ceil($no_of_records / $Limit);



$start = 0;

$page = $_GET['page'];

$current_page = $_GET['page'];

if($page > 1) {

    $prev = $page - 1;
} else {

    $prev = 1;
}

if($page < $no_of_pages) {

    $next = $page + 1;
} else {

    $next = $no_of_pages;
}

$page--;

$start = $page * $Limit;

// pegination is end

    include_once "header_admin.php";
?>
      <div class="col-9 clm_dash">
                <a href="home.php">
                    <span class="text-black">Home</span>
                </a>
                <h2 class="my-1 text-center"> View Up coaching Why? Course </h2>
                
                <form method="post">
                        <table class="table">
                            <thead class="table-dark">
                                <tr>
                                    <th>
                                        <button class="btn btn-danger" name="submit" value="submit" type="submit">Delete</button>
                                    </th>
                                    <th> ID </th>
                                    <th> Heading </th>
                                    <th>Paragraph</th>
                                    <th>Image</th>
                                    <th> Status </th>
                                    <th> Action </th>
                                </tr>
                            </thead>
                                    <?php
                                       $sel_clat_p="SELECT * FROM up_judiciry_coach LIMIT $start,$Limit";
                                       $exe_clat_p=mysqli_query($conn,$sel_clat_p);
                                       while($fetch_clat_p=mysqli_fetch_assoc($exe_clat_p)) {
                                        
                                          
                                    ?>
                            <tbody>
                                 <tr>
                                    <td>
                                        <input type="checkbox" name="clatdel[]" value="<?php echo $fetch_clat_p['up_judiciry_coach_id'] ?>">
                                    </td>
                                    <td><?php echo $fetch_clat_p['up_judiciry_coach_id'] ?></td>
                                    
                                    <td><?php echo $fetch_clat_p['up_judiciry_coach_title'] ?></td>
                                    
                                    <td><?php echo $fetch_clat_p['up_judiciry_coach_para'] ?></td>
                                    <td><?php echo $fetch_clat_p['up_judiciry_coach_image'] ?></td>
                                   
                                    

                                    <td>
                                        <?php 
                                            if($fetch_clat_p['up_judiciry_coach_status']) {
                                        ?>
                                        <a href="view_up_coaching_why.php?id_stst=<?php echo $fetch_clat_p['up_judiciry_coach_id'] ?>&status=0">
                                                <button class="btn btn-success" type="button">ACTIVE</button>
                                        </a>
                                            
                                        <?php
                                            }else{
                                        ?>
                                            <a href="view_up_coaching_why.php?id_stst=<?php echo $fetch_clat_p['up_judiciry_coach_id'] ?>&status=1">
                                                <button class="btn btn-danger" type="button">INACTIVE</button>
                                            </a>
                                        <?php
                                            }
                                        ?>
                                    </td>
                                    <td>
                                        <a href="edit_up_coaching_why.php?edit_all=<?php echo $fetch_clat_p['up_judiciry_coach_id'] ?>">
                                            <button class="btn btn-success" type="button">Edit</button>
                                        </a>
                                        
                                        <a href="view_up_coaching_why.php?c_p_del=<?php echo $fetch_clat_p['up_judiciry_coach_id'] ?>">
                                             <button class="btn btn-danger " type="button">Delete</button>
                                        </a>
                                        
                                    </td>
                                   
                                    
                                 </tr>
                                 <?php
                                       }              
                                 ?>
                            </tbody>
                        </table>
                        
                    </form>
                    <nav aria-label="Page navigation example">
                    <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="view_up_coaching_why.php?page=<?php echo $prev; ?>">Previous</a></li>

                                <?php
                                    for($i = 1 ; $i <= $no_of_pages ; $i++) {


                                    if($i == $_GET['page'])  {

                                ?>

                                    <li class="page-item active">
                                        <a class="page-link" href="view_up_coaching_why.php?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                                    </li>
                                <?php


                                    } else {

                                ?>
                                    <li class="page-item">
                                        <a class="page-link" href="view_up_coaching_why.php?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                                    </li>
                                <?php

                                    }
            
                               
                                    }
                                ?>
                            
                                <li class="page-item">
                                    <a class="page-link" href="view_enquiry.php?page=<?php echo $next; ?>">Next</a>
                                </li>
                            </ul>
                    </nav>  
                   

     </div>

<?php
        include_once "footer_admin.php";

?>