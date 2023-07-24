 <?php 
 include 'db/db.php'; 
 include 'top.php'; 
 ?>
 <!-- partial -->
 <div class="main-panel">
     <div class="content-wrapper">
         <div class="page-header">
             <h3 class="page-title"> ADD BANK ACCOUNTS </h3>
             <nav aria-label="breadcrumb">
                 <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="#">SHF</a></li>
                     <li class="breadcrumb-item active" aria-current="page"> Bank Accounts</li>
                 </ol>
             </nav>
         </div>
         <?php include("functions/message.php");?>

         <div class="row">
             <div class="col-lg-4 grid-margin stretch-card">
                 <div class="card">
                     <div class="card-body">
                         <?php
                         if(isset($_GET['editid'])){
                            $editid = $_GET['editid'];

                            $sel_query = "SELECT * FROM account WHERE id = '{$editid}'";
                            $run_query = mysqli_query($connection, $sel_query);
                            while($row = mysqli_fetch_assoc($run_query)){
                                $id = $row['id'];
                                $bankName = $row['bank_name'];
                                $acctName = $row['acct_name'];
                                $acctNum = $row['acct_number'];
                                $acctTyp = $row['acct_type'];
                                $date = $row['acct_date'];
                            }


                            ?>
                         <!-- editing account details  -->
                         <form class="forms-sample" action="functions/allcode.php" method="POST">
                             <div class="form-group">
                                 <input type="hidden" name="update_id" value="<?=$id?>">
                                 <label for="exampleInputName1">Bank Name:</label>
                                 <input type="text" value="<?=$bankName?>" class="form-control text-white"
                                     id="exampleInputName1" placeholder="Bank Name" name="ubank_name">
                             </div>
                             <div class="form-group">
                                 <label for="exampleInputName1">Account Name: </label>
                                 <input type="text" value="<?=$acctName?>" class="form-control text-white"
                                     id="exampleInputName1" placeholder="Account Name" name="uacct_name">
                             </div>
                             <div class="form-group">
                                 <label for="exampleInputName1">Account Number: </label>
                                 <input type="text" value="<?=$acctNum?>" class="form-control text-white"
                                     id="exampleInputName1" placeholder="Account Number" name="uacct_num">
                             </div>

                             <div class="form-group">
                                 <label for="about">Account Type:</label>
                                 <select class="form-control text-white" id="about" name="ubank_type">
                                     <option value="">--Select--</option>
                                     <option value="naira_savings"
                                         <?php if($acctTyp == 'naira_savings') {echo 'selected'; } ?>>
                                         Naira(Savings)</option>
                                     <option value="naira_current"
                                         <?php if($acctTyp == 'naira_current') {echo 'selected'; } ?>>
                                         Naira(Current)</option>
                                     <option value="dollar" <?php if($acctTyp == 'dollar') {echo 'selected'; } ?>>Dollar
                                     </option>
                                     <option value="pounds" <?php if($acctTyp == 'pounds') {echo 'selected'; } ?>>Pounds
                                     </option>
                                     <option value="euro" <?php if($acctTyp == 'euro') {echo 'selected'; } ?>>Euro
                                     </option>
                                 </select>
                             </div>

                             <button type="submit" class="btn btn-warning mr-2" name="update_bank_btn"> <i
                                     class="mdi mdi-upload btn-icon-prepend"></i> Update Details</button>
                         </form>
                         <?php

                         }else{
                            ?>
                         <!-- dding account details -->
                         <form class="forms-sample" action="functions/allcode.php" method="POST">
                             <div class="form-group">
                                 <label for="exampleInputName1">Bank Name:</label>
                                 <input type="text" class="form-control text-white" id="exampleInputName1"
                                     placeholder="Bank Name" name="bank_name">
                             </div>
                             <div class="form-group">
                                 <label for="exampleInputName1">Account Name: </label>
                                 <input type="text" class="form-control text-white" id="exampleInputName1"
                                     placeholder="Account Name" name="acct_name">
                             </div>
                             <div class="form-group">
                                 <label for="exampleInputName1">Account Number: </label>
                                 <input type="text" class="form-control text-white" id="exampleInputName1"
                                     placeholder="Account Number" name="acct_num">
                             </div>

                             <div class="form-group">
                                 <label for="about">Account Type:</label>
                                 <select class="form-control text-white" id="about" name="bank_type">
                                     <option value="">--Select--</option>
                                     <option value="naira_savings">Naira(Savings)</option>
                                     <option value="naira_current">Naira(Current)</option>
                                     <option value="dollar">Dollar</option>
                                     <option value="pounds">Pounds</option>
                                     <option value="euro">Euro</option>
                                 </select>
                             </div>

                             <button type="submit" class="btn btn-primary mr-2" name="add_bank_btn"> <i
                                     class="mdi mdi-upload btn-icon-prepend"></i> Upload Details</button>
                         </form>
                         <?php
                         }
                         ?>

                     </div>
                 </div>
             </div>
             <div class="col-lg-8 grid-margin stretch-card">
                 <div class="card">
                     <div class="card-body">
                         <h4 class="card-title">Acount Details</h4>
                         </p>
                         <?php
                                if(isset($_GET['bank_view'])){
                                    $id = $_GET['bank_view'];

                                    $bank_query = "SELECT * FROM account";
                                    $run_bank = mysqli_query($connection, $bank_query);
                                    
                                    while($row = mysqli_fetch_assoc($run_bank)){
                                        $id = $row['id'];
                                        $bankName = $row['bank_name'];
                                        $acctName = $row['acct_name'];
                                        $acctNum = $row['acct_number'];
                                        $acctTyp = $row['acct_type'];
                                        $date = $row['acct_date'];
                                    }                                    
                                    ?>
                         <div class="form-group">
                             <h6><span class="text-primary">Bank Name: </span><?=ucwords($bankName)?></h6>
                             <h6><span class="text-primary">Account Name: </span><?=ucwords($acctName)?></h6>
                             <h6><span class="text-primary">Account Number: </span><?=$acctNum?></h6>
                             <h6><span class="text-primary">Account Type: </span>
                                 <?php
                                    if($acctTyp === 'naira_savings'){ echo 'Naira Savings';}
                                    elseif($acctTyp === 'naira_current'){ echo 'Naira Current';}
                                    elseif($acctTyp === 'dollar'){ echo 'Dollars';}
                                    elseif($acctTyp === 'pounds'){ echo 'Pounds';}
                                    elseif($acctTyp === 'euro'){ echo 'Euro';}
                                ?>
                             </h6>
                             <h6><span class="text-primary">Date Created : </span><?=$date?></h6>
                         </div>
                         <div class="row">
                             <a href="functions/allcode.php?del_acct=<?=$id?>" class="btn btn-danger mr-2 mt-2"><i
                                     class="mdi mdi-heart-outline" name="del_vol"></i> Delete</a>
                             <a href="account_details.php?editid=<?=$id?>" class="btn btn-primary mr-2 mt-2"><i
                                     class="mdi mdi-file-check btn-icon-prepend"></i>Edit</a>
                             <a href="account_details.php" class="btn btn-warning mr-2 mt-2"><i
                                     class="mdi mdi-undo"></i>Back</a>
                         </div>
                         <?php
                         }else{
                         ?>
                         <div class="table-responsive">
                             <table class="table text-white">
                                 <thead>
                                     <tr>
                                         <th>Bank</th>
                                         <th>Account Number</th>
                                         <th>Account Type</th>
                                         <th>Status</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php           
                                
                                        $query = "SELECT * FROM account";
                                        $run_query = mysqli_query($connection, $query);
                                        				
                                        while($row = mysqli_fetch_assoc($run_query)){
                                            $id = $row['id'];
                                            $bankName = $row['bank_name'];
                                            $acctName = $row['acct_name'];
                                            $acctNum = $row['acct_number'];
                                            $acctTyp = $row['acct_type'];
                                            $date = $row['acct_date'];
                                    ?>
                                     <tr>
                                         <td><?=ucwords($bankName)?></td>
                                         <td><?=$acctNum?></td>
                                         <td class="text-success"> <?php
                                         if($acctTyp === 'naira_savings'){ echo 'Naira Savings';}
                                         elseif($acctTyp === 'naira_current'){ echo 'Naira Current';}
                                         elseif($acctTyp === 'dollar'){ echo 'Dollars';}
                                         elseif($acctTyp === 'pounds'){ echo 'Pounds';}
                                         elseif($acctTyp === 'euro'){ echo 'Euro';}
                                         ?><i class="mdi mdi-arrow-up"></i></td>
                                         <td> <a href="account_details.php?editid=<?=$id?>"
                                                 class="btn btn-sm btn-primary mr-2"><i
                                                     class="mdi mdi-file-check btn-icon-prepend"></i>Edit</a>
                                             <a href="account_details.php?bank_view=<?=$id?>"
                                                 class="btn btn-sm btn-warning mr-2"><i
                                                     class="mdi mdi-basecamp"></i>View</a>
                                         </td>
                                     </tr>
                                     <?php
                                     }
                                     ?>
                                 </tbody>
                             </table>
                         </div>
                         <?php
                             }
                             ?>
                     </div>
                 </div>
             </div>

         </div>
     </div>
     <!-- content-wrapper ends -->
     <?php include 'bottom.php'; ?>