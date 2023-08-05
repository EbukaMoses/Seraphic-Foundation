 <?php 
 include 'db/db.php';
 include 'top.php'; ?>
 <!-- partial -->
 <div class="main-panel">
     <div class="content-wrapper">
         <div class="page-header">
             <h3 class="page-title"> ABOUT SECTION </h3>
             <nav aria-label="breadcrumb">
                 <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="#">SHF</a></li>
                     <li class="breadcrumb-item active" aria-current="page">About Section</li>
                 </ol>
             </nav>
         </div>
         <?php include("functions/message.php");?>
         <div class="row">
             <div class="col-12 grid-margin stretch-card">
                 <div class="card">
                     <div class="card-body">
                         <?php
                            if(isset($_GET['id'])){
                                $id = $_GET['id'];
                            ?>
                         <!-- update about us form  -->
                         <form class="forms-sample" action="functions/allcode.php" method="POST">
                             <?php

                                $query = "SELECT * FROM about WHERE id = '$id'";
                                $run_query = mysqli_query($connection, $query);

                                while($row = mysqli_fetch_assoc($run_query)){
                                    $category = $row['abt_cat'];
                                    $writeup = $row['abt_writeup'];
                                }
                             ?>

                             <div class="form-group">
                                 <?php
                                    if(isset($_GET['id'])){
                                        $id = $_GET['id'];
                                ?>

                                 <input type="hidden" value="<?= $id ?>" name="update_id">

                                 <?php
                                    }
                                ?>
                                 <label for="">Topic</label>
                                 <select class="form-control text-white" id="about" name="update_about_topic">
                                     <option value="">--Select--</option>
                                     <option value="about" <?php if($category == 'about') {echo 'selected'; } ?>>
                                         AboutSeraphic</option>
                                     <option value="mission" <?php if($category == 'mission') {echo 'selected'; } ?>>
                                         Seraphic
                                         Mission</option>
                                     <option value="vision" <?php if($category == 'vision') {echo 'selected'; } ?>>
                                         Seraphic
                                         Vision</option>
                                     <option value="value" <?php if($category == 'value') {echo 'selected'; } ?>>
                                         Seraphic
                                         Value</option>
                                     <option value="motto" <?php if($category == 'motto') {echo 'selected'; } ?>>
                                         Seraphic
                                         Motto</option>
                                 </select>
                             </div>
                             <div class="form-group">
                                 <label for="exampleTextarea1">Writeup</label>
                                 <textarea class="form-control text-white" id="exampleTextarea1" rows="6"
                                     placeholder="Detail Here" name="update_write_up"
                                     value="<?php if(isset($_POST["write_up"])) {echo $_POST["write_up"]; } ?>"><?php if(!empty($writeup)) {echo $writeup; } ?></textarea>
                             </div>

                             <button type="submit" class="btn btn-warning mr-2" name="update_about_btn"><i
                                     class="mdi mdi-file-check btn-icon-prepend"></i> Update</button>
                         </form>

                         <?php
                            }else{
                         ?>

                         <!-- normal insert about form -->
                         <form class="forms-sample" action="functions/allcode.php" method="POST">
                             <div class="form-group">
                                 <label for="">Topic</label>
                                 <select class="form-control text-white" id="about" name="about_topic">
                                     <option value="">--Select--</option>
                                     <option value="about" <?php if(isset($_POST['about'])) {echo 'selected'; } ?>>
                                         AboutSeraphic</option>
                                     <option value="mission" <?php if(isset($_POST['mission'])) {echo 'selected'; } ?>>
                                         Seraphic
                                         Mission</option>
                                     <option value="vision" <?php if(isset($_POST['vision'])) {echo 'selected'; } ?>>
                                         Seraphic
                                         Vision</option>
                                     <option value="value" <?php if(isset($_POST['value'])) {echo 'selected'; } ?>>
                                         Seraphic
                                         Value</option>
                                     <option value="motto" <?php if(isset($_POST['motto'])) {echo 'selected'; } ?>>
                                         Seraphic
                                         Motto</option>
                                 </select>
                             </div>
                             <div class="form-group">
                                 <label for="summernote">Writeup</label>
                                 <textarea class="form-control text-white" id="summernote" rows="6"
                                     placeholder="Detail Here" name="write_up"
                                     value="<?php if(isset($_POST["write_up"])) {echo $_POST["write_up"]; } ?>"></textarea>
                             </div>
                             <button type="submit" class="btn btn-primary mr-2" name="about_btn"><i
                                     class="mdi mdi-file-check btn-icon-prepend"></i> Submit</button>
                         </form>
                         <?php } ?>
                     </div>
                 </div>
             </div>

             <div class="col-md-12 grid-margin stretch-card">
                 <div class="card">
                     <div class="card-body">
                         <div class="table-responsive pt-2">
                             <table class="table table-bordered">
                                 <thead>
                                     <tr>
                                         <th> # </th>
                                         <th> Category</th>
                                         <th colspan="4"> Details </th>
                                         <th> Action </th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php

                                        $fetch_query = "SELECT * FROM about";
                                        $run_fetch = mysqli_query($connection, $fetch_query);
                                        while($row = mysqli_fetch_assoc( $run_fetch)){
                                            $id = $row['id'];
                                            $cat = $row['abt_cat'];
                                            $writeup = $row['abt_writeup'];
                                       


                                    ?>
                                     <tr>
                                         <td> <?= $id; ?> </td>
                                         <td>
                                             <?= ucwords($cat); ?> </td>
                                         <td colspan="4"> <?= substr($writeup, 0, 90); ?>..
                                         </td>

                                         <td class="d-flex">
                                             <a href="about.php?id=<?= $id;?>" class="btn btn-success mr-2">Edit&nbsp;<i
                                                     class="mdi mdi-file-check btn-icon-prepend"></i></a>
                                             <a href="view_about.php?id=<?= $id; ?>"
                                                 class="btn btn-warning mr-2 d-flex align-items-center"><i
                                                     class="mdi mdi-heart-outline"></i>&nbsp;View</a>

                                         </td>
                                     </tr>
                                     <?php  } ?>
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