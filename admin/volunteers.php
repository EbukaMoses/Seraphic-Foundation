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

                             <a href="add_volunteers.php" class="btn btn-primary mr-2 mb-3 pt-2">Add
                                 Volunteer</a>

                         </div>
                         <hr>
                         <div class="table-responsive pt-2">
                             <table class="table table-bordered text-white">
                                 <thead>
                                     <tr>
                                         <th> <i class="mdi mdi-arrange-send-backward"></i></th>
                                         <th> <i class="mdi mdi-pound"></i> </th>
                                         <th> Full Name </th>
                                         <th> E-mail </th>
                                         <th> Phone </th>
                                         <th> Gender </th>
                                         <th> Address </th>
                                         <th> Action </th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php

                                                                                     						 
                                            $select_query = "SELECT * FROM volunteers";
                                            $run_query = mysqli_query($connection, $select_query);
                                            
                                            while($row = mysqli_fetch_assoc($run_query)){
                                                $id = $row['id'];
                                                $name = $row['vol_name'];
                                                $email = $row['vol_email'];
                                                $phone = $row['vol_phone'];
                                                $gender = $row['gender'];
                                                $address = $row['vol_address'];
                                                $msg = $row['vol_msg'];
                                                $date = $row['vol_date'];
                                         ?>
                                     <tr>
                                         <td><input type="checkbox" name="" id=""></td>
                                         <td> <?=$id?></td>
                                         <td> <?= ucwords($name)?></td>
                                         <td> <?=$email?> </td>
                                         <td>
                                             <?=$phone?>
                                         </td>
                                         <td> <?=$gender?> </td>
                                         <td> <?=ucwords($address)?> </td>
                                         <td>
                                             <a href="edit_volunteer.php?id=<?=$id?>"
                                                 class="btn btn-sm btn-primary mr-2"><i
                                                     class="mdi mdi-file-check btn-icon-prepend"></i>Edit</a>
                                             <a href="view_volunteer.php?id=<?=$id?>"
                                                 class="btn btn-sm btn-warning mr-2"><i
                                                     class="mdi mdi-basecamp"></i>View</a>
                                             <!-- <button type="submit" class="btn btn-primary mr-2"><i
                                                     class="mdi mdi-file-check btn-icon-prepend"></i> Upload</button> -->
                                         </td>
                                     </tr>
                                     <?php }?>

                                 </tbody>
                             </table>
                         </div>
                     </div>
                 </div>
             </div>

         </div>
     </div>
     <!-- content-wrapper ends -->
     <?php include 'bottom.php'; ?>