<?php
    include_once "support.php";
    include_once "conn.php";
    session_start();
  
    if( $_SESSION['admin_sign_id'] == '') {
         header('location:index.php');
    }
    // single delete concept
    $enquiry_del=$_GET['enquiry_del'];
    if(isset($enquiry_del)) {
        $del="DELETE FROM couseling WHERE couseling_id ='$enquiry_del'";
        $exe_del=mysqli_query($conn,$del);
    }

    //  Multiple delete
    $del=$_POST['del'];

    foreach($del as $value){
        if(isset($_POST['submit'])) {
            $del_all="DELETE FROM couseling WHERE couseling_id='$value' ";
            $exe_del_all=mysqli_query($conn,$del_all);
        }
    }
// pagination

$Limit = 6;

$sel_pagination = "SELECT * FROM couseling";

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

    

    include_once "header_admin.php";
?>
      <div class="col-9 clm_dash">
                <a href="home.php">
                    <span class="text-black">Home</span>
                </a>
                <h2 class="my-1 text-center"> View News </h2>
                
                <form method="post">
                        <table class="table">
                            <thead class="table-dark">
                                <tr>
                                    <th>
                                        <button class="btn btn-danger" name="submit" value="submit" type="submit">Delete</button>
                                    </th>
                                    <th> ID </th>
                                    <th>  User Name </th>
                                    <th> Email </th>
                                    <th> Mobile </th>
                                    <th> Category </th>
                                    <th> Action </th>
                                </tr>
                            </thead>
                                    <?php
                                        $sel="SELECT * FROM couseling LIMIT $start,$Limit";
                                        $exe_sel=mysqli_query($conn,$sel);
                                        while($fetch_couse=mysqli_fetch_assoc($exe_sel)) {  
                                    ?>
                            <tbody>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="del[]" value="<?php echo $fetch_couse['couseling_id']?>">
                                        </td>
                                        <td><?php echo $fetch_couse['couseling_id'] ?></td>
                                        <td><?php echo $fetch_couse['couseling_name'] ?></td>
                                        <td><?php echo $fetch_couse['couseling_email'] ?></td>
                                        <td><?php echo $fetch_couse['mobile'] ?></td>
                                        <td><?php echo $fetch_couse['couseling_category'] ?></td>
                                        <td>
                                            <a href="view_enquiry.php? enquiry_del=<?php echo $fetch_couse['couseling_id'] ?>">
                                                <button class="btn btn-danger" type="button" >Delete</button>
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
                                <li class="page-item"><a class="page-link" href="view_enquiry.php?page=<?php echo $prev; ?>">Previous</a></li>

                                <?php
                                    for($i = 1 ; $i <= $no_of_pages ; $i++) {


                                    if($i == $_GET['page'])  {

                                ?>

                                    <li class="page-item active">
                                        <a class="page-link" href="view_enquiry.php?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                                    </li>
                                <?php


                                    } else {

                                ?>
                                    <li class="page-item">
                                        <a class="page-link" href="view_enquiry.php?page=<?php echo $i; ?>"><?php echo $i; ?></a>
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