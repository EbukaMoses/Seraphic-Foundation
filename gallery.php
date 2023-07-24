<?php
    include("header.php");
    $title = "Our Gallery";
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
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 p-4">
            <div class="row team_card">
                <img src="image/logo4.png" class="img-fluid" alt="">
            </div>
        </div>
        <div class="col-md-3 p-4">
            <div class="row team_card">
                <img src="image/logo3.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</div>
<?php
    include("footer.php");
?>