 <?php 
 include 'db/db.php'; 
 include 'top.php'; 
 ?>
 <!-- partial -->
 <div class="main-panel">
     <div class="content-wrapper">
         <div class="page-header">
             <h3 class="page-title">VOLUNTEER SECTION </h3>
             <nav aria-label="breadcrumb">
                 <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="#">SHF</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Volunteer Section</li>
                 </ol>
             </nav>
         </div>
         <?php include("functions/message.php");?>
         <div class="row">
             <div class="col-lg-12 grid-margin stretch-card">
                 <div class="card">
                     <div class="card-body">
                         <div class="d-flex">
                             <div class="form-group col-sm-4">
                                 <!-- <label for="">Action</label> -->
                                 <div class="input-group">
                                     <select class="custom-select" id="inputGroupSelect04"
                                         aria-label="Example select with button addon">
                                         <option selected>--select--</option>
                                         <option value="delete">Delete</option>
                                     </select>
                                     <div class="input-group-append">
                                         <button class="btn btn-primary btn-outline-primary"
                                             type="button">Action</button>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <hr>
                         <div class="table-responsive pt-2">
                             <table class="table table-bordered text-white">
                                 <thead>
                                     <tr>
                                         <th> <i class="mdi mdi-arrange-send-backward"></i></th>
                                         <th> <i class="mdi mdi-pound"></i> </th>
                                         <th> Full Name </th>
                                         <th> Category </th>
                                         <th> Content </th>
                                         <th> Gender </th>
                                         <th> Action </th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php
                                            
                                        if(isset($_GET['page'])){
                                            $page = $_GET['page'];
                                        }else{
                                            $page = "";
                                        }
                                        
                                        if($page == "" || $page == 1){
                                            $page_1 = 0;   
                                        }else{
                                            $page_1 = ($page * 5) - 5;
                                        }
                                    
                                        $partner_query = "SELECT * FROM message";
                                        $find_count = mysqli_query($connection, $partner_query);
                                        $count = mysqli_num_rows($find_count);

                                        $count = ceil($count / 5);
                                                                                                            
                                        $select_query = "SELECT * FROM message LIMIT $page_1, 5";
                                        $run_query = mysqli_query($connection, $select_query);
                                        
                                        while($row = mysqli_fetch_assoc($run_query)){
                                            $id = $row['id'];
                                            $name = $row['name'];
                                            $cat = $row['msg_cat'];
                                            $content = $row['msg_content'];
                                            $status = $row['msg_status'];
                                            $date = $row['msg_date'];
                                    ?>
                                     <tr>
                                         <td>
                                             <!-- <input type="checkbox" name="" id=""> -->
                                             <input type="checkbox" class="checkBoxes" name='checkBoxArray[]'
                                                 value='<?= $id ?>'>
                                         </td>
                                         <td> <?=$id?></td>
                                         <td> <?= ucwords($name)?></td>
                                         <td> <?=$cat?> </td>
                                         <td>
                                             <?=$content?>
                                         </td>
                                         <td>
                                             <?php if($status === "active"){
                                                ?>
                                             <div class="badge badge-outline-success"><?=ucfirst($status)?></div>
                                             <?php }else{ 
                                                ?>
                                             <div class="badge badge-outline-danger"><?=ucfirst($status)?></div>
                                             <?php
                                             } ?>
                                         </td>
                                         <td>
                                             <a href="edit_volunteer.php?id=<?=$id?>"
                                                 class="btn btn-sm btn-danger mr-2"><i
                                                     class="mdi mdi-file-check btn-icon-prepend"></i>Delete</a>
                                             <a href="view_volunteer.php?id=<?=$id?>"
                                                 class="btn btn-sm btn-warning mr-2"><i
                                                     class="mdi mdi-basecamp"></i>View</a>
                                         </td>
                                     </tr>
                                     <?php }?>

                                 </tbody>
                             </table>
                         </div>
                     </div>
                     <ul class="pagination d-flex justify-content-center align-items-center">
                         <?php 
                     for($i = 1; $i <= $count; $i++){

                        if($i == $page){
                            echo "<li class='page-item active'><a class='page-link' href='notification.php?page={$i}'>{$i}</a></li>";
                            
                        }else{
                            echo "<li class='page-item'><a class='page-link bg-light' href='notification.php?page={$i}'>{$i}</a></li>";  
                        }                        
                     }
                     ?>
                     </ul>
                 </div>
             </div>

         </div>
     </div>
     <!-- content-wrapper ends -->
     <?php include 'bottom.php'; ?>