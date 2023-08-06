 <?php 
 include 'db/db.php'; 
 include 'top.php'; 
 ?>
 <!-- partial -->
 <div class="main-panel">
     <div class="content-wrapper">
         <div class="page-header">
             <h3 class="page-title"> VIEW MESSAGE SECTION </h3>
             <nav aria-label="breadcrumb">
                 <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="#">SHF</a></li>
                     <li class="breadcrumb-item active" aria-current="page">View Message Section

                     </li>
                 </ol>
             </nav>
         </div>
         <div class="row">
             <div class="col-12 grid-margin stretch-card">
                 <div class="card">
                     <div class="card-body">
                         <form class="forms-sample">
                             <div class="row">
                                 <?php           
                                  
                                    if(isset($_GET['id'])){
                                        $id = $_GET['id'];

                                        $checkquery = "UPDATE contactus_msg SET status = 'read' WHERE id = '$id'";
                                        $run_check = mysqli_query($connection, $checkquery);


                                        $query = "SELECT * FROM contactus_msg WHERE id = '$id'";
                                        $run_query = mysqli_query($connection, $query);
                                        
                                        while($row = mysqli_fetch_assoc($run_query)){
                                            $id = $row['id'];
                                            $name = $row['fullname'];
                                            $email = $row['email'];
                                            $phone = $row['phone'];
                                            $msg = $row['msg'];
                                            $date = $row['msg_date'];
                                            $status = $row['status'];
                                        }
                                    }

                                    
                                 ?>
                                 <div class="col-md-6">
                                     <div class="form-group">
                                         <h5><span class="text-success">Full Name: </span><?=ucwords($name)?>
                                         </h5>
                                     </div>
                                     <div class="form-group">
                                         <h5><span class="text-success">Email: </span><?=$email?></h5>
                                     </div>
                                     <div class="form-group">
                                         <h5><span class="text-success">Phone: </span><?=$phone?></h5>
                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                     <div class="form-group">
                                         <h5><span class="text-success">Message: </span><?= ucwords($msg)?>
                                         </h5>
                                     </div>
                                     <div class="form-group">
                                         <h5><span class="text-success">Date: </span><?= $date?></h5>
                                     </div>
                                     <div class="form-group">
                                         <h5><span class="text-success">Status: </span><?= ucwords($status)?></h5>
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <a href="functions/allcode.php?del_msg=<?=$id?>" class="btn btn-danger mr-2 mt-2"><i
                                         class="mdi mdi-heart-outline" name="del_vol"></i> Delete</a>
                                 <a href="message.php" class="btn btn-warning mr-2 mt-2"><i
                                         class="mdi mdi-undo"></i>Back</a>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- content-wrapper ends -->
     <?php include 'bottom.php'; ?>