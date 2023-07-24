 <?php
 include 'db/db.php'; 
 include 'top.php'; ?>

 <!-- partial -->
 <div class="main-panel">
     <div class="content-wrapper">
         <div class="page-header">
             <h3 class="page-title"> VIEW PROGRAM SECTION </h3>
             <nav aria-label="breadcrumb">
                 <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="#">SHF</a></li>
                     <li class="breadcrumb-item active" aria-current="page">View Program Section

                     </li>
                 </ol>
             </nav>
         </div>
         <div class="row">
             <div class="col-12 grid-margin stretch-card">
                 <div class="card">
                     <div class="card-body">
                         <div class="row">
                             <?php
                             if(isset($_GET['id'])){
                                $id = $_GET['id'];
                             }
                                $query = "SELECT * FROM program WHERE id = '$id'";
                                $run_query = mysqli_query($connection, $query);
                                
                                while($row = mysqli_fetch_assoc($run_query)){
                                $img = $row['pro_pic'];
                                $heading = $row['pro_title'];
                                $details = $row['pro_writeup'];
                            }
                            

                            ?>
                             <div class="col-md-4">
                                 <img src="uploads/program/<?=$img?>" class="img-fluid" alt="">
                             </div>
                             <div class="col-md-8">
                                 <h3><?=strtoupper($heading)?></h3>
                                 <p>⦿→&nbsp;<?=$details?></p>
                             </div>
                         </div>
                         <div class="row">
                             <a href="functions/allcode.php?pro_del=<?= $id;?>" class="btn btn-danger mr-2 mt-4"><i
                                     class="mdi mdi-file-check btn-icon-prepend"></i>
                                 Delete</a>
                             <a href="program.php" class="btn btn-warning mr-2 mt-4"><i
                                     class="mdi mdi-undo"></i>Back</a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- content-wrapper ends -->
     <?php include 'bottom.php'; ?>