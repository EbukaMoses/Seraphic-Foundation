 <?php 
 include 'db/db.php'; 
 include 'top.php'; 
 ?>
 <!-- partial -->
 <div class="main-panel">
     <div class="content-wrapper">
         <div class="page-header">
             <h3 class="page-title"> ADD SOCIAL MEDIA HANDLES </h3>
             <nav aria-label="breadcrumb">
                 <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="#">SHF</a></li>
                     <li class="breadcrumb-item active" aria-current="page"> Social Media Handles</li>
                 </ol>
             </nav>
         </div>
         <?php include("functions/message.php");?>
         <div class="row">
             <div class="col-lg-4 grid-margin stretch-card">
                 <div class="card">
                     <div class="card-body">
                         <form class="forms-sample" action="functions/allcode.php" method="POST">
                             <div class="form-group">
                                 <label for="about">Social Media</label>
                                 <select class="form-control text-white" name="handle" id="about">
                                     <option value="">--Select--</option>
                                     <option value="facebook">Facebook</option>
                                     <option value="youtube">Youtube</option>
                                     <option value="twitter">Twitter</option>
                                     <option value="instagram">Instagram</option>
                                     <option value="">Skype</option>
                                 </select>
                             </div>
                             <div class="form-group">
                                 <label for="exampleInputName1">URL: </label>
                                 <input type="link" class="form-control text-white" name="url" id="exampleInputName1"
                                     placeholder="Paste the account url">
                             </div>

                             <button type="submit" class="btn btn-primary mr-2 mt-3" name="social_btn"><i
                                     class="mdi mdi-file-check btn-icon-prepend"></i> Upload</button>
                         </form>
                     </div>
                 </div>
             </div>
             <div class="col-lg-8 grid-margin stretch-card">
                 <div class="card">
                     <div class="card-body">
                         <h4 class="card-title">Social Media Details</h4>
                         </p>
                         <div class="table-responsive">
                             <table class="table text-white">
                                 <thead>
                                     <tr>
                                         <th>#</th>
                                         <th>Handle</th>
                                         <th>Url</th>
                                         <th>Action</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php
                                        $fetch = "SELECT * FROM social_media";
                                        $run_fetch = mysqli_query($connection, $fetch);
                                        
                                        while($row = mysqli_fetch_assoc($run_fetch)){
                                            $id = $row['id'];
                                            $name = $row['social_name'];
                                            $url = $row['social_url'];
                                    ?>
                                     <tr>
                                         <td><?=$id?></td>
                                         <td><?=ucwords($name)?></td>
                                         <td><?=$url?></td>
                                         <td> <a href="functions/allcode.php?del_sol=<?=$id?>"
                                                 class="btn btn-sm btn-danger mr-2 mt-2"><i
                                                     class="mdi mdi-heart-outline" name="del_vol"></i> Delete</a></td>
                                     </tr>
                                     <?php } ?>
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