 <?php 
 include 'db/db.php'; 
 include 'top.php'; 
 ?>
 <!-- partial -->
 <div class="main-panel">
     <div class="content-wrapper">
         <div class="page-header">
             <h3 class="page-title"> ADD VOLUNTEER SECTION </h3>
             <nav aria-label="breadcrumb">
                 <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="#">SHF</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Add Volunteer Section

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

                                        $query = "SELECT * FROM volunteers WHERE id = '$id'";
                                        $run_query = mysqli_query($connection, $query);
                                        
                                        while($row = mysqli_fetch_assoc($run_query)){
                                            $id = $row['id'];
                                            $name = $row['vol_name'];
                                            $email = $row['vol_email'];
                                            $phone = $row['vol_phone'];
                                            $gender = $row['gender'];
                                            $address = $row['vol_address'];
                                            $msg = $row['vol_msg'];
                                            $date = $row['vol_date'];
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
                                         <h5><span class="text-success">Gender: </span><?= ucwords($gender)?>
                                         </h5>
                                     </div>
                                     <div class="form-group">
                                         <h5><span class="text-success">Address: </span><?= ucwords($address)?></h5>
                                     </div>
                                     <div class="form-group">
                                         <h5><span class="text-success">Message: </span><?= ucwords($msg)?></h5>
                                     </div>
                                     <div class="form-group">
                                         <h5><span class="text-success">Date applied: </span><?=$date?></h5>
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <a href="functions/allcode.php?del_vol=<?=$id?>" class="btn btn-danger mr-2 mt-2"><i
                                         class="mdi mdi-heart-outline" name="del_vol"></i> Delete</a>
                                 <a href="edit_volunteer.php?id=<?=$id?>" class="btn btn-primary mr-2 mt-2"><i
                                         class="mdi mdi-file-check btn-icon-prepend"></i>Edit</a>
                                 <a href="volunteers.php" class="btn btn-warning mr-2 mt-2"><i
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