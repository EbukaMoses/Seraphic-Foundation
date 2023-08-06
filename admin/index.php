  <?php 
 include 'db/db.php'; 
 include 'top.php'; 
 ?>
  <!-- partial -->
  <div class="main-panel">
      <div class="content-wrapper">
          <?php include("functions/message.php");?>

          <!-- <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card corona-gradient-card">
                  <div class="card-body py-0 px-0 px-sm-3">
                    <div class="row align-items-center">
                      <div class="col-4 col-sm-3 col-xl-2">
                        <img src="assets/images/dashboard/Group126@2x.png" class="gradient-corona-img img-fluid" alt="">
                      </div>
                      <div class="col-5 col-sm-7 col-xl-8 p-0">
                        <h4 class="mb-1 mb-sm-0">Want even more features?</h4>
                        <p class="mb-0 font-weight-normal d-none d-sm-block">Check out our Pro version with 5 unique layouts!</p>
                      </div>
                      <div class="col-3 col-sm-2 col-xl-2 pl-0 text-center">
                        <span>
                          <a href="https://www.bootstrapdash.com/product/corona-admin-template/" target="_blank" class="btn btn-outline-light btn-rounded get-started-btn">Upgrade to PRO</a>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
          <div class="row">
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                      <div class="card-body">
                          <div class="row">
                              <div class="col-9">
                                  <div class="d-flex align-items-center align-self-start">
                                      <h3 class="mb-0">Visitors</h3>
                                      <?php
                                        $query = "SELECT * FROM visitors";
                                        $run_query = mysqli_query($connection, $query);
                                        $row_visit = mysqli_num_rows($run_query);
                                    ?>
                                      <p class="text-primary ml-2 mb-0 font-weight-medium">
                                          <?=$row_visit?>
                                      </p>
                                  </div>
                              </div>
                              <div class="col-3">
                                  <div class="icon icon-box-primary ">
                                      <span class="mdi mdi-arrow-top-right icon-item"></span>
                                  </div>
                              </div>
                          </div>
                          <small class="text-muted font-weight-normal">people who have visited your Website</small>
                      </div>
                  </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                      <div class="card-body">
                          <div class="row">
                              <div class="col-9">
                                  <div class="d-flex align-items-center align-self-start">
                                      <h3 class="mb-0 mr-2">Partners</h3>
                                      <?php
                                        $query = "SELECT * FROM partners";
                                        $run_query = mysqli_query($connection, $query);
                                        $row = mysqli_num_rows($run_query);
                                    ?>
                                      <p class="text-success ml-2 mb-0 font-weight-medium"><?=$row; ?></p>
                                  </div>
                              </div>
                              <div class="col-3">
                                  <div class="icon icon-box-success px-2">
                                      <span class="mdi mdi-arrow-top-right icon-item"></span>
                                  </div>
                              </div>
                          </div>
                          <small class="text-muted font-weight-normal">Number of Partners you have</small>
                      </div>
                  </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                      <div class="card-body">
                          <div class="row">
                              <div class="col-9">
                                  <div class="d-flex align-items-center align-self-start">
                                      <h3 class="mb-0">Volunteers</h3>
                                      <?php
                                        $query = "SELECT * FROM volunteers";
                                        $run_query = mysqli_query($connection, $query);
                                        $row_vol = mysqli_num_rows($run_query);
                                    ?>
                                      <p class="text-warning ml-2 mb-0 font-weight-medium"><?=$row_vol?></p>
                                  </div>
                              </div>
                              <div class="col-3">
                                  <div class="icon icon-box-warning pr-2">
                                      <span class="mdi mdi-arrow-top-right icon-item"></span>
                                  </div>
                              </div>
                          </div>
                          <small class="text-muted font-weight-normal">Number of Volunteers you have currently</small>
                      </div>
                  </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                      <div class="card-body">
                          <div class="row">
                              <div class="col-9">
                                  <div class="d-flex align-items-center align-self-start">
                                      <h3 class="mb-0">Inflow</h3>
                                      <?php
                                            $query = "SELECT SUM(pay) as total FROM partners WHERE status ='active'";
                                            $run_query = mysqli_query($connection, $query);
                                            while($row = mysqli_fetch_assoc($run_query)){
                                                $count_pay = $row['total'];
                                        ?>

                                      <p class="text-success ml-2 mb-0 font-weight-medium">
                                          <?=number_format($count_pay)?>
                                      </p>

                                      <?php } ?>
                                  </div>
                              </div>
                              <div class="col-3">
                                  <div class="icon icon-box-success ">
                                      <span class="mdi mdi-arrow-top-right icon-item"></span>
                                  </div>
                              </div>
                          </div>
                          <small class="text-muted font-weight-normal">Monthly expented Income</small>
                      </div>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-4 grid-margin stretch-card">
                  <div class="card">
                      <div class="card-body">
                          <h4 class="card-title">Transaction History</h4>
                          <canvas id="transaction-history" class="transaction-chart"></canvas>
                          <div
                              class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                              <div class="text-md-center text-xl-left">
                                  <h6 class="mb-1">Transfer to Paypal</h6>
                                  <p class="text-muted mb-0">07 Jan 2019, 09:12AM</p>
                              </div>
                              <div
                                  class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                                  <h6 class="font-weight-bold mb-0">$236</h6>
                              </div>
                          </div>
                          <div
                              class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                              <div class="text-md-center text-xl-left">
                                  <h6 class="mb-1">Tranfer to Stripe</h6>
                                  <p class="text-muted mb-0">07 Jan 2019, 09:12AM</p>
                              </div>
                              <div
                                  class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                                  <h6 class="font-weight-bold mb-0">$593</h6>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-8 grid-margin stretch-card">
                  <div class="card">
                      <div class="card-body">
                          <h4 class="card-title mb-5">Visitors by Countries</h4>
                          <div class="table-responsive">
                              <table class="table">
                                  <tbody>
                                      <?php 
                                      $query = "SELECT country_name, COUNT(*) as code FROM visitors GROUP BY country_name LIMIT 7";
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
                                          <td class="text-right"><?=$code?></td>
                                          <td class="text-right font-weight-medium"> 56.35% </td>
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