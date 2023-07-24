   <?php 
 include 'db/db.php'; 
 include 'top.php'; 
 ?>
   <!-- partial -->
   <div class="main-panel">
       <div class="content-wrapper">
           <div class="page-header">
               <h3 class="page-title"> FOUNDER SECTION </h3>
               <nav aria-label="breadcrumb">
                   <ol class="breadcrumb">
                       <li class="breadcrumb-item"><a href="#">SHF</a></li>
                       <li class="breadcrumb-item active" aria-current="page">Founder Section

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
                         }
                            $query = "SELECT * FROM founder WHERE id = '$id'";
                            $run_query = mysqli_query($connection, $query);
                            while($row = mysqli_fetch_assoc($run_query)){                                
                                $id = $row['id'];
                                $name = $row['found_name'];
                                $title = $row['found_title'];
                                $img = $row['found_pic'];
                                $details = $row['found_about'];
                            }
                        ?>
                           <form class="forms-sample" action="functions/allcode.php" method="POST"
                               enctype="multipart/form-data">
                               <div class="form-group">
                                   <input type="hidden" name="id" value="">
                                   <label for=" exampleInputName1">Name </label>
                                   <input type="text" class="form-control text-white" name="uname" value="<?=$name; ?>"
                                       id="exampleInputName1" placeholder="Evang. Chukwuebuka Obi">
                               </div>
                               <div class="form-group">
                                   <label for="exampleInputName1">Tile </label>
                                   <input type="text" class="form-control text-white" name="utitle" value="<?=$title?>"
                                       id="exampleInputName1" placeholder="FOUNDER & MISSION BEARER">
                               </div>
                               <div class="form-group">
                                   <label>Upload Image</label>
                                   <input type="hidden" name="old_img" value="<?=$img?>" class="form-control">
                                   <input type="file" name="new_img" class="form-control">
                               </div>
                               <div class="form-group">
                                   <label for="exampleTextarea1">About the Founder</label>
                                   <textarea class="form-control text-white" name="details" id="exampleTextarea1"
                                       rows="6" placeholder="Detail Here"><?=$details?></textarea>
                               </div>
                               <button type="submit" name="update_found" class="btn btn-primary mr-2"><i
                                       class="mdi mdi-file-check btn-icon-prepend"></i> Upload</button>
                               <!-- <button class="btn btn-dark">Cancel</button> -->
                           </form>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- content-wrapper ends -->
       <?php include 'bottom.php'; ?>