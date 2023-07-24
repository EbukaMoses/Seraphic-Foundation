 <?php 
 include 'db/db.php'; 
 include 'top.php'; 
 ?>
 <!-- partial -->
 <div class="main-panel">
     <div class="content-wrapper">
         <div class="page-header">
             <h3 class="page-title"> CONTACT SECTION </h3>
             <nav aria-label="breadcrumb">
                 <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="#">SHF</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Contact Section</li>
                 </ol>
             </nav>
         </div>
         <?php include("functions/message.php");?>
         <div class="row">
             <div class="col-6 grid-margin stretch-card">
                 <div class="card">
                     <div class="card-body">
                         <form class="forms-sample" action="functions/allcode.php" method="POST">
                             <div class="form-group">
                                 <label for="exampleInputName1">Phone Number: </label>
                                 <input type="text" name="add_phone"
                                     value="<?php if(isset($_POST["add_phone"]))  echo $_POST["add_phone"]?>"
                                     class="form-control text-white" id="exampleInputName1" placeholder="Phone Number">
                             </div>
                             <button type="submit" name="add_phone_btn" class="btn btn-success mr-2 mt-4">
                                 <i class="mdi mdi-upload btn-icon-prepend"></i>
                                 Add Number
                             </button>
                         </form>
                     </div>
                 </div>
             </div>
             <div class="col-md-6 grid-margin stretch-card">
                 <div class="card">
                     <div class="card-body">
                         <form class="forms-sample" action="functions/allcode.php" method="POST">
                             <div class="form-group">
                                 <label for="exampleInputName1">Email: </label>
                                 <input type="email" class="form-control text-white" name="add_email"
                                     value="<?php if(isset($_POST["add_email"]))  echo $_POST["add_email"]?>"
                                     id="exampleInputName1" placeholder="Email">
                             </div>
                             <button type="submit" name="add_email_btn" class="btn btn-success mr-2 mt-4">
                                 <i class="mdi mdi-upload btn-icon-prepend"></i>
                                 Add E-mail
                             </button>
                         </form>
                     </div>
                 </div>
             </div>
             <div class="col-md-12 grid-margin stretch-card">
                 <div class="card">
                     <div class="card-body">
                         <div class="row">
                             <div class="col-md-6 ">
                                 <div class="table-responsive">
                                     <table class="table table-bordered text-white">
                                         <thead>
                                             <tr>
                                                 <th> <i class="mdi mdi-pound"></i> </th>
                                                 <th> Phone </th>
                                                 <th> Action </th>
                                             </tr>
                                         </thead>
                                         <tbody>
                                             <?php
                                                $fetch_phone = "SELECT * FROM phone";
                                                $run_fetch = mysqli_query($connection, $fetch_phone);
                                                
                                                while($row = mysqli_fetch_assoc($run_fetch)){
                                                    $id = $row['id'];
                                                    $phone = $row['con_phone'];
                                            ?>
                                             <tr>
                                                 <td> <?=$id?></td>
                                                 <td>
                                                     <h5 class="mt-2"><?=$phone?></h5>
                                                 </td>
                                                 <td>
                                                     <a href="functions/allcode.php?idphone=<?=$id?>"
                                                         class="btn btn-sm btn-danger mr-2 mt-2"><i
                                                             class="mdi mdi-heart-outline" name="del_vol"></i>
                                                         Delete</a>
                                                 </td>
                                             </tr>

                                             <?php
                                            }
                                            ?>
                                         </tbody>
                                     </table>
                                 </div>
                             </div>
                             <div class="col-md-6 grid-margin stretch-card">
                                 <div class="table-responsive">
                                     <table class="table table-bordered text-white">
                                         <thead>
                                             <tr>
                                                 <th> <i class="mdi mdi-pound"></i> </th>
                                                 <th> Phone </th>
                                                 <th> Action </th>
                                             </tr>
                                         </thead>
                                         <tbody>
                                             <?php
                                                $fetch_phone = "SELECT * FROM email";
                                                $run_fetch = mysqli_query($connection, $fetch_phone);
                                                
                                                while($row = mysqli_fetch_assoc($run_fetch)){
                                                    $id = $row['id'];
                                                    $email = $row['con_email'];
                                            ?>
                                             <tr>
                                                 <td> <?=$id?></td>
                                                 <td>
                                                     <h5 class="mt-2"><?=$email?></h5>
                                                 </td>
                                                 <td>
                                                     <a href="functions/allcode.php?idemail=<?=$id?>"
                                                         class="btn btn-sm btn-danger mr-2 mt-2"><i
                                                             class="mdi mdi-heart-outline" name="del_vol"></i>
                                                         Delete</a>
                                                 </td>
                                             </tr>

                                             <?php
                                            }
                                            ?>
                                         </tbody>
                                     </table>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- content-wrapper ends -->
     <?php include 'bottom.php'; ?>