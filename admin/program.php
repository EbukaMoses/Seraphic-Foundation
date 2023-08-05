 <?php 
 include 'db/db.php';
 include 'top.php'; ?>
 <!-- partial -->
 <div class="main-panel">
     <div class="content-wrapper">
         <div class="page-header">
             <h3 class="page-title"> PROGRAM SECTION </h3>
             <nav aria-label="breadcrumb">
                 <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="#">SHF</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Program Section

                     </li>
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
                                
                                $query = "SELECT * FROM program WHERE id = '$id'";
                                $run_query = mysqli_query($connection, $query);
                                while($row = mysqli_fetch_assoc($run_query)){
                                    $id = $row['id'];
                                    $title = $row['pro_title'];
                                    $img = $row['pro_pic'];
                                    $writeup = $row['pro_writeup'];
                                
                         ?>
                         <form class="forms-sample" action="functions/allcode.php" method="POST"
                             enctype="multipart/form-data">
                             <div class="form-group">
                                 <input type="hidden" value="<?=$id?>" name="update_id">
                                 <label for="exampleInputName1">Heading </label>
                                 <input type="text" class="form-control text-white" id="exampleInputName1"
                                     placeholder="Heading" value="<?=$title?>" name="pro_heading">
                             </div>
                             <div class="form-group">
                                 <label>Upload Image</label>
                                 <input type="hidden" name="pro_old_img" value="<?=$img?>" class="form-control">
                                 <input type="file" name="pro_img" class="form-control">
                             </div>
                             <div class="form-group">
                                 <label for="exampleTextarea1">Textarea</label>
                                 <textarea class="form-control text-white" id="exampleTextarea1" rows="6"
                                     placeholder="Detail Here" name="pro_details"><?=$writeup?></textarea>
                             </div>
                             <button type="submit" class="btn btn-success mr-2" name="update_pro_btn"><i
                                     class="mdi mdi-upload btn-icon-prepend"></i> Update</button>
                         </form>
                         <?php
                         }
                            }else{ 
                         ?>
                         <form class="forms-sample" action="functions/allcode.php" method="POST"
                             enctype="multipart/form-data">
                             <div class="form-group">
                                 <label for="exampleInputName1">Heading </label>
                                 <input type="text" class="form-control text-white" id="exampleInputName1"
                                     placeholder="Heading" name="pro_heading">
                             </div>
                             <div class="form-group">
                                 <label>Upload Image</label>
                                 <input type="file" name="pro_img" class="form-control    ">
                             </div>
                             <div class="form-group">
                                 <label for="summernote">Textarea</label>
                                 <textarea class="form-control text-white" id="summernote" rows="6"
                                     placeholder="Detail Here" name="pro_details"></textarea>
                             </div>
                             <button type="submit" class="btn btn-primary mr-2" name="pro_btn"><i
                                     class="mdi mdi-upload btn-icon-prepend"></i> Upload</button>
                         </form>
                         <?php
                            }
                         ?>

                     </div>
                 </div>
             </div>

             <?php 
             $query = "SELECT * FROM program";
             $run_query = mysqli_query($connection, $query);
             
             while($row = mysqli_fetch_assoc($run_query)){
                $id = $row['id'];
                $heading = $row['pro_title'];
                $img = $row['pro_pic'];
                $details = $row['pro_writeup'];
                ?>
             <div class="col-md-4 grid-margin stretch-card">
                 <div class="card">
                     <div class="card-body">
                         <img src="uploads/program/<?=$img?>" class="img-fluid" alt="">
                         <h5 class="mt-3"><?=strtoupper($heading) ?></h5>
                         <p>⦿→<?= substr($details, 0, 90);?></p>
                         <div class="d-flex mt-4">
                             <a href="program.php?id=<?= $id;?>" class="btn btn-success mr-2">Edit&nbsp;<i
                                     class="mdi mdi-file-check btn-icon-prepend"></i></a>
                             <a href="view_program.php?id=<?= $id; ?>"
                                 class="btn btn-warning mr-2 d-flex align-items-center"><i
                                     class="mdi mdi-heart-outline"></i>&nbsp;View</a>

                         </div>
                     </div>
                 </div>
             </div>
             <?php
                }
             ?>
         </div>
     </div>
     <!-- content-wrapper ends -->
     <?php include 'bottom.php'; ?>