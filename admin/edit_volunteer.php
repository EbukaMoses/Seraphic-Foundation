 <?php 
 include 'db/db.php'; 
 include 'top.php'; 
 ?>
 <!-- partial -->
 <div class="main-panel">
     <div class="content-wrapper">
         <div class="page-header">
             <h3 class="page-title"> UPDATE VOLUNTEER SECTION </h3>
             <nav aria-label="breadcrumb">
                 <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="#">SHF</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Update Volunteer Section</li>
                 </ol>
             </nav>
         </div>
         <div class="row">
             <div class="col-12 grid-margin stretch-card">
                 <div class="card">
                     <div class="card-body">
                         <?php           
                                  
                                    if(isset($_GET['id'])){
                                        $id = $_GET['id'];

                                        $query = "SELECT * FROM volunteers WHERE id = '$id'";
                                        $run_query = mysqli_query($connection, $query);
                                        
                                        while($row = mysqli_fetch_assoc($run_query)){
                                                                                            
                                            $name = $row['vol_name'];
                                            $email = $row['vol_email'];
                                            $phone = $row['vol_phone'];
                                            $gender = $row['gender'];
                                            $address = $row['vol_address'];
                                            $msg = $row['vol_msg'];
                                        }
                                    }

                                    
                                 ?>
                         <form class="forms-sample" action="functions/allcode.php" method="POST"
                             enctype="multipart/form-data">
                             <div class="form-group">
                                 <label for="exampleInputName1">Full Name: </label>
                                 <input type="hidden" name="id" value="<?=$id?>">
                                 <input type="text" value="<?=$name?>" name="name" class="form-control text-white"
                                     id="exampleInputName1" placeholder="fullname">
                             </div>
                             <div class="form-group">
                                 <label for="exampleInputName1">Email: </label>
                                 <input type="email" value="<?=$email?>" class="form-control text-white"
                                     id="exampleInputName1" placeholder="Email" name="email">
                             </div>
                             <div class="form-group">
                                 <label for="exampleInputName1">Phone Number: </label>
                                 <input type="text" value="<?=$phone?>" class="form-control text-white"
                                     id="exampleInputName1" placeholder="Phone Number" name="phone">
                             </div>
                             <div class="form-group">
                                 <label for="about">Gender</label>
                                 <select class="form-control text-white" value="<?=$gender?>" id="about" name="gender">
                                     <option value="">--Select--</option>
                                     <option value="male" <?php if($gender == 'male') {echo 'selected'; } ?>>Male
                                     </option>
                                     <option value="female" <?php if($gender == 'female') {echo 'selected'; } ?>>Female
                                     </option>
                                 </select>
                             </div>
                             <div class="form-group">
                                 <label for="exampleInputName1">Address: </label>
                                 <input type="text" value="<?=$address?>" class="form-control text-white"
                                     id="exampleInputName1" placeholder="Address" name="address">
                             </div>
                             <div class="form-group">
                                 <label for="exampleInputName1">Message: </label>
                                 <textarea class="form-control text-white" placeholder="Message" name="message" id=""
                                     cols="30" rows="10"><?=$msg?></textarea>
                             </div>
                             <button type="submit" name="up_vol_btn" class="btn btn-success mr-2 mt-4"><i
                                     class="mdi mdi-upload btn-icon-prepend"></i>
                                 Update</button>
                             <a href="volunteers.php" class="btn btn-danger mr-2 mt-4">
                                 <i class="mdi mdi-undo"></i>Back</a>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- content-wrapper ends -->
     <?php include 'bottom.php'; ?>