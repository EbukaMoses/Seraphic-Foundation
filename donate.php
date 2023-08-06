<?php
    include("admin/db/db.php");
    include("header.php");
    $title = "Donate";
?>
<div class="container-fluid pagehero pt-5 pb-5">
    <div class="container">
        <div class="row">
            <h1 class="text-center pt-5 pb-5 pagehero-title font-weight-bold">
                <?php if(isset($title)){ echo $title;} else { echo "Seraphic Foundation"; } ?>
            </h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row d-flex justify-content-center align-content-center mb-4">
        <img src="image/donate2.png" width="150" alt="">
    </div>
    <div class="row">
        <h1 class="font-weight-bold donate_title d-flex mx-auto text-center">Donate & Put A Smile On Someone's Face</h1>
    </div>
    <!-- <div class="row mb-5">
        <div class="contact-divider d-flex mx-auto"></div>

    </div> -->
    <div class="row pb-5 mb-5 mt-5">
        <?php
                $query = "SELECT * FROM account";
                $run_query = mysqli_query($connection, $query);
                if(mysqli_num_rows($run_query) > 0){
                    while($row = mysqli_fetch_assoc($run_query)){
                        								
                        $bank = $row['bank_name'];
                        $name = $row['acct_name'];
                        $number = $row['acct_number'];
                        $type = $row['acct_type'];
                        $date = $row['acct_date'];
                        ?>

        <div class="col-md-6">
            <div class="team_card p-4" style="background: #f5f5f5;">
                <h5 class="account_details"><strong class="text-success">Bank Name: </strong><?= ucwords($bank)?></h5>
                <h5 class="account_details"><strong class="text-success">Account Name: </strong><?=ucwords($name)?></h5>
                <h5 class="account_details"><strong class="text-success">Account Number: </strong><?=ucwords($number)?>
                </h5>
                <h5 class="account_details"><strong class="text-success">Account Type: </strong>
                    <?php
                        if($type === 'naira_savings'){ echo 'Naira Savings';}
                        elseif($type === 'naira_current'){ echo 'Naira Current';}
                        elseif($type === 'dollar'){ echo 'Dollars';}
                        elseif($type === 'pounds'){ echo 'Pounds';}
                        elseif($type === 'euro'){ echo 'Euro';}
                    ?>
                </h5>
                <!-- <h3 class="account_details"><strong></strong><?=ucwords($type)?></h3> -->
            </div>
        </div>
        <?php }}else{
        ?>
        <div class="col-md-8 offset-2">
            <div class="team_card p-3 d-flex justify-content-center align-content-center">
                <h3 class="account_details">Reach out For Account Numbers via <a href="contact-us.php">Here</a></h3>
            </div>
        </div>


        <?php

        } ?>
    </div>
</div>


<?php
    include("footer.php");
?>