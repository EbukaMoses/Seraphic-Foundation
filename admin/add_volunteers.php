 <?php include 'top.php'; ?>
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
                         <form class="forms-sample" action="functions/allcode.php" method="POST">
                             <div class="form-group">
                                 <label for="exampleInputName1">Full Name: </label>
                                 <input type="text"
                                     value="<?php if(isset($_POST["fullname"]))  echo $_POST["fullname"]?>"
                                     class="form-control text-white" id="exampleInputName1" placeholder="fullname"
                                     name="name">
                             </div>
                             <div class="form-group">
                                 <label for="exampleInputName1">Email: </label>
                                 <input type="email" value="<?php if(isset($_POST["email"]))  echo $_POST["email"]?>"
                                     class="form-control text-white" id="exampleInputName1" placeholder="Email"
                                     name="email">
                             </div>
                             <div class="form-group">
                                 <label for="exampleInputName1">Phone Number: </label>
                                 <input type="text" value="<?php if(isset($_POST["phone"]))  echo $_POST["phone"]?>"
                                     class="form-control text-white" id="exampleInputName1" placeholder="Phone Number"
                                     name="phone">
                             </div>
                             <div class="form-group">
                                 <label for="about">Gender</label>
                                 <select class="form-control text-white"
                                     value="<?php if(isset($_POST["gender"]))  echo $_POST["gender"]?>" id="about"
                                     name="gender">
                                     <option value="">--Select--</option>
                                     <option value="male">Male</option>
                                     <option value="female">Female</option>
                                 </select>
                             </div>

                             <div class="form-group">
                                 <label for="exampleInputName1">Address: </label>
                                 <input type="text" value="<?php if(isset($_POST["address"]))  echo $_POST["address"]?>"
                                     class="form-control text-white" id="exampleInputName1" placeholder="Address"
                                     name="address">
                             </div>
                             <div class="form-group">
                                 <label for="exampleInputName1">Message: </label>
                                 <textarea class="form-control text-white" placeholder="Message" name="message" id=""
                                     cols="30"
                                     rows="10"><?php if(isset($_POST["message"]))  echo $_POST["message"]?></textarea>
                             </div>

                             <button type="submit" name="add_vol_btn" class="btn btn-success mr-2 mt-4"><i
                                     class="mdi mdi-upload btn-icon-prepend"></i>
                                 Update</button>
                             <a href="volunteers.php" class="btn btn-danger mr-2 mt-4"><i
                                     class="mdi mdi-undo"></i>Back</a>

                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- content-wrapper ends -->
     <?php include 'bottom.php'; ?>