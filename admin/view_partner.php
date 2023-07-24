 <?php 
 include 'db/db.php';
 include 'top.php'; ?>
 <!-- partial -->
 <div class="main-panel">
     <div class="content-wrapper">
         <div class="page-header">
             <h3 class="page-title"> VIEW PARTNER SECTION </h3>
             <nav aria-label="breadcrumb">
                 <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="#">SHF</a></li>
                     <li class="breadcrumb-item active" aria-current="page">View Partner Section

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

                                        $query = "SELECT * FROM partners WHERE id = '$id'";
                                        $run_query = mysqli_query($connection, $query);
                                        
                                        while($row = mysqli_fetch_assoc($run_query)){
                                                                                            
                                            $img = $row['img'];
                                            $name = $row['fullname'];
                                            $email = $row['email'];
                                            $phone1 = $row['phone1'];
                                            $phone2 = $row['phone2'];
                                            $gender = $row['gender'];
                                            $res_street = $row['res_street'];
                                            $res_town = $row['res_town'];
                                            $res_state = $row['res_state'];
                                            $res_country = $row['res_country'];
                                            $orig_street = $row['orig_street'];
                                            $orig_town = $row['orig_town'];
                                            $orig_state = $row['orig_state'];
                                            $orig_country = $row['orig_country'];
                                            $occupation = $row['occupation'];
                                            $pay = $row['pay'];
                                            $code = $row['code'];
                                            $status = $row['status'];
                                            $date_created = $row['date_created'];
                                        }
                                    }

                                    
                                 ?>
                                 <div class="col-md-6">
                                     <div class="form-group">
                                         <div class="">
                                             <img src="uploads/profile/<?=$img?>" width="150" alt="">
                                         </div>
                                     </div>
                                     <div class="form-group">
                                         <h5><span class="text-success">Full Name:</span> <?= ucwords($name)?> </h5>
                                     </div>
                                     <div class="form-group">
                                         <h5><span class="text-success">Email:</span> <?=$email?> </h5>
                                     </div>
                                     <div class="form-group">
                                         <h5><span class="text-success">Gender:</span> <?=$gender?> </h5>
                                     </div>
                                     <div class="form-group">
                                         <h5><span class="text-success">Phone 1 (Whatsapp):</span> <?=$phone1?>
                                         </h5>
                                     </div>
                                     <div class="form-group">
                                         <h5><span class="text-success">Phone 2:</span> <?=$phone2?>
                                         </h5>
                                     </div>

                                     <div class="form-group">
                                         <h5><span class="text-success">Street:</span> <?= ucwords($res_street)?>
                                         </h5>
                                     </div>
                                     <div class="form-group">
                                         <h5><span class="text-success">Town:</span> <?= ucwords($res_town)?>
                                         </h5>
                                     </div>
                                     <div class="form-group">
                                         <h5><span class="text-success">State:</span> <?= ucwords($res_state)?>
                                         </h5>
                                     </div>
                                 </div>
                                 <div class="col-md-6 mt-md-5">
                                     <div class="form-group mt-md-5">
                                         <h5><span class="text-success">Country:</span> <?= ucwords($res_country)?>
                                         </h5>
                                     </div>
                                     <div class="form-group">
                                         <h5><span class="text-success">Street:</span> <?= ucwords($orig_street)?>
                                         </h5>
                                     </div>
                                     <div class="form-group">
                                         <h5><span class="text-success">Town:</span> <?= ucwords($orig_town)?>
                                         </h5>
                                     </div>
                                     <div class="form-group">
                                         <h5><span class="text-success">State:</span> <?= ucwords($orig_state)?>
                                         </h5>
                                     </div>
                                     <div class="form-group">
                                         <h5><span class="text-success">Country:</span> <?= ucwords($orig_country)?>
                                         </h5>
                                     </div>
                                     <div class="form-group">
                                         <h5><span class="text-success">Occupation/Profession:</span>
                                             <?= ucwords($occupation)?>
                                         </h5>
                                     </div>
                                     <div class="form-group">
                                         <h5><span class="text-success">Monthly Vow(Amount):</span>
                                             ₦‎<?= number_format($pay)?>
                                         </h5>
                                     </div>
                                     <div class="form-group">
                                         <h5><span class="text-success">Code:</span> <?=$code?>
                                         </h5>
                                     </div>
                                     <div class="form-group">
                                         <h5><span class="text-success">Status:</span> <?=$status?>
                                         </h5>
                                     </div>
                                     <div class="form-group">
                                         <h5><span class="text-success">Registered On:</span> <?=$date_created?>
                                         </h5>
                                     </div>

                                 </div>
                             </div>
                             <div class="row">
                                 <a href="functions/allcode.php?del_pat=<?=$id?>" class="btn btn-danger mr-2 mt-4"><i
                                         class="mdi mdi-heart-outline"></i>Delete</a>
                                 <?php if($status === "active"){
                                                ?>
                                 <a href="functions/allcode.php?deactive=<?=$id?>" class="btn btn-info mr-2 mt-4"><i
                                         class="mdi mdi-reload btn-icon-prepend"></i>Deactivate</a>
                                 <?php }else{ 
                                                ?>
                                 <a href="functions/allcode.php?active=<?=$id?>" class="btn btn-success mr-2 mt-4"><i
                                         class="mdi mdi-reload btn-icon-prepend"></i>Activate</a>
                                 <?php
                                             } ?>

                                 <a href="edit_partner.php?id=<?=$id?>" class="btn btn-warning mr-2 mt-4"><i
                                         class="mdi mdi-file-check btn-icon-prepend"></i>Edit</a>
                                 <a href="partners.php" class="btn btn-primary mr-2 mt-4"><i
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