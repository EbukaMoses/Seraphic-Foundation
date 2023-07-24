<?php
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
    <div class="row pb-5 mb-5">
        <div class="col-md-12">
            <div class="team_card d-flex justify-content-center align-content-center">
                <h3 class="account_details">Seraphic Account Number will appear hear</h3>
            </div>
        </div>
    </div>
</div>


<?php
    include("footer.php");
?>