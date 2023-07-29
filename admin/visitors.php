  <?php 
 include 'db/db.php'; 
 include 'top.php'; 
 ?>
  <!-- partial -->
  <div class="main-panel">
      <div class="content-wrapper">
          <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                  <div class="card">
                      <div class="card-body">
                          <h4 class="card-title mb-5">Site Visitors by Countries</h4>
                          <div class="table-responsive">
                              <table class="table text-white">
                                  <thead>
                                      <tr>
                                          <!-- <th> <i class="mdi mdi-arrange-send-backward"></i></th>
                                          <th> <i class="mdi mdi-pound"></i> </th> -->
                                          <th> Flag</th>
                                          <th> Country </th>
                                          <th class="text-center"> No of Visitors </th>
                                          <th class="text-center"> Amount </th>

                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php 
                                      $query = "SELECT country_name, COUNT(*) as code FROM visitors GROUP BY country_name";
                                      $run_query = mysqli_query($connection, $query);
                                      while($row = mysqli_fetch_assoc($run_query)){
                                        $name = $row['country_name'];
                                        $code = $row['code'];
                                      ?>
                                      <tr>
                                          <td>
                                              <i class="flag-icon flag-icon-us"></i>
                                          </td>
                                          <td><?=$name?></td>
                                          <td class="text-right text-center"><?=$code?></td>
                                          <td class="text-right text-center font-weight-medium"> 56.35% </td>
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

          <div class="row">
              <div class="col-12">
                  <div class="card">
                      <div class="card-body">
                          <h4 class="card-title">Map Of Countries</h4>
                          <div class="row">

                              <div class="col-md-12">
                                  <div id="audience-map" class="vector-map"></div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- content-wrapper ends -->
      <?php include 'bottom.php';?>