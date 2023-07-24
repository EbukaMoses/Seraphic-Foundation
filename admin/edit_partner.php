 <?php
 include 'db/db.php';
  include 'top.php'; ?>
 <!-- partial -->
 <div class="main-panel">
     <div class="content-wrapper">
         <div class="page-header">
             <h3 class="page-title"> EDIT PARTNER SECTION </h3>
             <nav aria-label="breadcrumb">
                 <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="#">SHF</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Edit Partner Section

                     </li>
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
                         <form class="forms-sample" action="functions/allcode.php" method="POST"
                             enctype="multipart/form-data">
                             <div class="row">
                                 <div class="col-md-6">
                                     <div class="form-group">
                                         <input type="hidden" name="id" Value="<?=$id?>" class="form-control">
                                         <label class="text-success">Upload Image</label>
                                         <input type="hidden" name="pat_update_img" Value="<?=$img?>"
                                             class="form-control">
                                         <input type="file" name="new_img" class="form-control">
                                     </div>
                                     <div class="form-group">
                                         <label class="text-success" for="exampleInputName1">Full Name:
                                         </label>
                                         <input type="text" class="form-control text-white" Value="<?= $name?>"
                                             id="exampleInputName1" placeholder="Full Name" name="fullname">
                                     </div>
                                     <div class="form-group">
                                         <label class="text-success" for="exampleInputName1">Email: </label>
                                         <input type="email" class="form-control text-white" name="email"
                                             Value="<?=$email?>" id="exampleInputName1" placeholder="Email">
                                     </div>
                                     <div class="form-group">
                                         <label class="text-success" for="about">Gender</label>
                                         <select class="form-control text-white" id="about" name="gender">
                                             <option value="">--Select--</option>
                                             <option value="male" <?php if($gender == 'male') {echo 'selected'; } ?>>
                                                 Male</option>
                                             <option value="female"
                                                 <?php if($gender == 'female') {echo 'selected'; } ?>>
                                                 Female</option>
                                         </select>
                                     </div>
                                     <div class="form-group">
                                         <label class="text-success" for="exampleInputName1">Phone Number 1 (Whatsapp):
                                         </label>
                                         <input type="text" class="form-control text-white" name="phone1"
                                             Value="<?=$phone1?>" id="exampleInputName1"
                                             placeholder="Phone Number 1 (Whatsapp)">
                                     </div>
                                     <div class="form-group">
                                         <label class="text-success" for="exampleInputName1">Phone Number 2: </label>
                                         <input type="text" class="form-control text-white" name="phone2"
                                             Value="<?=$phone2?>" id="exampleInputName1" placeholder="Phone Number 2">
                                     </div>
                                     <h4 class="text-success font-weight-bold mt-4"><u>RESIDENTIAL ADDRESS</u></h4>
                                     <div class="form-group">
                                         <label class="text-success" for="exampleInputName1">Street: </label>
                                         <input type="text" class="form-control text-white" name="res_street"
                                             Value="<?=$res_street?>" id="exampleInputName1" placeholder="Street">
                                     </div>
                                     <div class="form-group">
                                         <label class="text-success" for="exampleInputName1">Town: </label>
                                         <input type="text" class="form-control text-white" name="res_town"
                                             Value="<?=$res_town?>" id="exampleInputName1" placeholder="Town">
                                     </div>
                                     <div class="form-group">
                                         <label class="text-success" for="exampleInputName1">State: </label>
                                         <input type="text" class="form-control text-white" name="res_state"
                                             Value="<?=$res_state?>" id="exampleInputName1" placeholder="State">
                                     </div>
                                 </div>
                                 <div class="col-md-6">

                                     <div class="form-group">
                                         <label class="text-success" for="exampleInputName1">Country: </label>
                                         <input type="text" class="form-control text-white" name="res_country"
                                             Value="<?=$res_country?>" id="exampleInputName1" placeholder="Country:">
                                     </div>
                                     <h4 class="text-success font-weight-bold mt-4"><u>ADDRESS OF ORIGIN</u>
                                     </h4>
                                     <div class="form-group">
                                         <label class="text-success" for="exampleInputName1">Street: </label>
                                         <input type="text" class="form-control text-white" name="orig_street"
                                             Value="<?=$orig_street?>" id="exampleInputName1" placeholder="Street">
                                     </div>
                                     <div class="form-group">
                                         <label class="text-success" for="exampleInputName1">Town: </label>
                                         <input type="text" class="form-control text-white" name="orig_town"
                                             Value="<?=$orig_town?>" id="exampleInputName1" placeholder="Town">
                                     </div>
                                     <div class="form-group">
                                         <label class="text-success" for="exampleInputName1">State: </label>
                                         <input type="text" class="form-control text-white" name="orig_state"
                                             Value="<?=$orig_state?>" id="exampleInputName1" placeholder="State">
                                     </div>
                                     <div class="form-group">
                                         <label class="text-success" for="exampleInputName1">Country: </label>
                                         <input type="text" class="form-control text-white" name="orig_country"
                                             Value="<?=$orig_country?>" id="exampleInputName1" placeholder="Country:">
                                     </div>
                                     <div class="form-group">
                                         <label class="text-success" for="exampleInputName1">Occupation/Profession:
                                         </label>
                                         <input type="text" class="form-control text-white" name="occupation"
                                             Value="<?=$occupation?>" id="exampleInputName1"
                                             placeholder="Occupation/Profession">
                                     </div>
                                     <div class="form-group">
                                         <label class="text-success" for="exampleInputName1">Monthly Vow(Amount):
                                         </label>
                                         <input type="text" class="form-control text-white" Value="<?=$pay?>"
                                             id="exampleInputName1" placeholder="Monthly Vow(Amount) e.g #200,000"
                                             name="pay">
                                     </div>
                                     <div class="form-group">
                                         <label class="text-success" for="exampleInputName1">Code: </label>
                                         <input type="text" class="form-control text-white" name="code"
                                             Value="<?=$code?>" id="exampleInputName1">
                                     </div>
                                     <div class="form-group">
                                         <label class="text-success" for="about">Status</label>
                                         <select class="form-control text-white" name="status" id="about">
                                             <option value="">--Select--</option>
                                             <option value="active"
                                                 <?php if($status == 'active') {echo 'selected'; } ?>>
                                                 Active</option>
                                             <option value="inactive"
                                                 <?php if($status == 'inactive') {echo 'selected'; } ?>>
                                                 Inactive</option>
                                         </select>
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <!-- <a href="" class="btn btn-success mr-2 mt-4"><i
                                         class="mdi mdi-upload btn-icon-prepend"></i>
                                     Update</a> -->
                                 <button type="submit" name="update_partner_btn" class="btn btn-success mr-2 mt-4"><i
                                         class="mdi mdi-upload btn-icon-prepend" name="update_partner_btn"></i>
                                     Update</button>
                                 <a href="partners.php" class="btn btn-danger mr-2 mt-4"><i
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