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
          <?php include("functions/message.php");?>

          <div class="row">
              <div class="col-12 grid-margin stretch-card">
                  <div class="card">
                      <div class="card-body">

                          <?php
                                $query = "SELECT * FROM founder";
                                $run_query = mysqli_query($connection, $query);
                                if(mysqli_num_rows($run_query) > 0){
                                    
                                    $query = "SELECT * FROM founder";
                                    $run_query = mysqli_query($connection, $query);
                                    
                                    while($row = mysqli_fetch_assoc($run_query)){
                                        $id = $row['id'];
                                        $name = $row['found_name'];
                                        $title = $row['found_title'];
                                        $img = $row['found_pic'];
                                        $bio = $row['found_about'];
                                    }
                                    ?>

                          <div class="row">
                              <div class="col-md-5">
                                  <div class="form-group">
                                      <div class="">
                                          <img src="uploads/founder/<?=$img?>" width="350" alt="">
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-7">
                                  <div class="form-group">
                                      <h2><span class="text-success">Full Name:</span> <?= ucwords($name)?> </h2>
                                  </div>
                                  <div class="form-group">
                                      <h3><span class="text-success">Title:</span> <?= ucwords($title)?> </h3>
                                  </div>
                                  <div class="form-group">
                                      <h3><span class="text-success">Biography:</span></h3>
                                      <p><?= ucwords($bio)?></p>
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <a href="functions/allcode.php?del_found=<?=$id?>" class="btn btn-danger mr-2 mt-4">
                                  <i class="mdi mdi-heart-outline"></i>Delete</a>
                              <a href="edit_founder.php?id=<?=$id?>" class="btn btn-warning mr-2 mt-4"><i
                                      class="mdi mdi-file-check btn-icon-prepend"></i>Edit</a>
                              <!-- <a href="partners.php" class="btn btn-primary mr-2 mt-4"><i
                                      class="mdi mdi-undo"></i>Back</a> -->
                          </div>

                          <?php } else {?>

                          <form class="forms-sample" action="functions/allcode.php" method="POST"
                              enctype="multipart/form-data">
                              <div class="form-group">
                                  <label>Upload Image</label>
                                  <input type="file" name="found_img" class="form-control    ">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputName1">Name </label>
                                  <input type="text" class="form-control text-white" name="found_name"
                                      id="exampleInputName1" placeholder="Evang. Chukwuebuka Obi">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputName1">Title </label>
                                  <input type="text" name="found_title" class="form-control text-white"
                                      id="exampleInputName1" placeholder="FOUNDER & MISSION BEARER">
                              </div>
                              <div class="form-group">
                                  <label for="exampleTextarea1">About the Founder</label>
                                  <textarea class="form-control text-white" name="found_writeup" id="exampleTextarea1"
                                      rows="6" placeholder="Detail Here"></textarea>
                              </div>
                              <button type="submit" class="btn btn-primary mr-2" name="found_btn"><i
                                      class="mdi mdi-file-check btn-icon-prepend"></i> Upload</button>
                              <!-- <button class="btn btn-dark">Cancel</button> -->
                          </form>

                          <?php } ?>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- content-wrapper ends -->
      <?php include 'bottom.php'; ?>