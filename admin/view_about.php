 <?php 
 include 'top.php';
 include 'db/db.php';
  ?>
 <!-- partial -->
 <div class="main-panel">
     <div class="content-wrapper">
         <div class="page-header">
             <h3 class="page-title"> VIEW VOLUNTEER SECTION </h3>
             <nav aria-label="breadcrumb">
                 <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="#">SHF</a></li>
                     <li class="breadcrumb-item active" aria-current="page">View Volunteer Section

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
                            $query = "SELECT * FROM about WHERE id = '$id'";
                            $run_query = mysqli_query($connection, $query);

                            while($row = mysqli_fetch_assoc($run_query)){
                                $category = $row['abt_cat'];
                                $writeup = $row['abt_writeup'];
                            }
                            
                         ?>
                         <input type="hidden" value="<?= $id;?>" name="update_id">
                         <h1 class=" mb-4"><?= strtoupper($category);?> </h1>
                         <p><?= $writeup;?></p>
                         <div class="row">
                             <a href="functions/allcode.php?del=<?= $id;?>" class="btn btn-danger mr-2 mt-4"><i
                                     class="mdi mdi-alert btn-icon-prepend"></i>Delete</a>
                             <a href="about.php?id=<?= $id;?>" class="btn btn-success mr-2 mt-4">Edit&nbsp;<i
                                     class="mdi mdi-file-check btn-icon-prepend"></i> </a>
                             <a href="about.php" class="btn btn-warning mr-2 mt-4"><i class="mdi mdi-undo"></i>Back</a>


                             <!-- </form> -->

                         </div>

                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- content-wrapper ends -->
     <?php include 'bottom.php'; ?>