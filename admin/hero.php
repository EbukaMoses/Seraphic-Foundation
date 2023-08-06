 <?php include 'top.php'; ?>
 <!-- partial -->
 <div class="main-panel">
     <div class="content-wrapper">
         <div class="page-header">
             <h3 class="page-title"> HERO SECTION </h3>
             <nav aria-label="breadcrumb">
                 <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="#">SHF</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Hero Section

                     </li>
                 </ol>
             </nav>
         </div>
         <div class="row">
             <div class="col-12 grid-margin stretch-card">
                 <div class="card">
                     <div class="card-body">
                         <!-- <h4 class="card-title">Basic form elements</h4> -->
                         <form class="forms-sample" action="functions/allcode.php" method="POST"
                             enctype="multipart/form-data">
                             <div class="form-group">
                                 <label for="exampleInputName1">Hero Heading</label>
                                 <input type="text" class="form-control" name="hero_heading" id="exampleInputName1"
                                     placeholder="Hero Heading">
                             </div>
                             <div class="form-group">
                                 <label for="exampleInputName1">Hero Sub-Heading</label>
                                 <input type="text" class="form-control" name="hero_sub_heading" id="exampleInputName1"
                                     placeholder="Hero Sub-Heading">
                             </div>

                             <div class="form-group">
                                 <label>File upload</label>
                                 <input type="file" name="hero_img" class="form-control    ">
                             </div>
                             <button type="submit" class="btn btn-primary mr-2" name="hero_btn">Upload</button>
                         </form>
                     </div>
                 </div>
             </div>
             <div class="col-md-6 grid-margin stretch-card">
                 <div class="card">
                     <div class="card-body">
                         ebuka
                     </div>
                 </div>
             </div>


         </div>
     </div>
     <!-- content-wrapper ends -->
     <?php include 'bottom.php'; ?>