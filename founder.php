<?php
    include("admin/db/db.php");
    include("header.php");
    $title = "Our Founder & Spiritual Director";
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
        <div class="col-md-12 p-4">
            <div class="row team_card">
                <?php  
                
                $query = "SELECT * FROM founder";
                $run_query = mysqli_query($connection, $query);
                if(mysqli_num_rows($run_query) > 0){
                    while($row = mysqli_fetch_assoc($run_query)){
                        				
                        $name = $row['found_name'];
                        $title = $row['found_title'];
                        $img = $row['found_pic'];
                        $detail = $row['found_about'];
                        ?>
                <div class="col-md-5">
                    <div class="pic">
                        <img src="admin/uploads/founder/<?=$img?>" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="team_detail pt-5">
                        <h4 class="font-weight-bold"><?=$name?></h4>
                        <h6 class="font-weight-bold mb-3"><?=$title?></h6>
                        <p><?=$detail?>.</p>
                    </div>
                </div>
                <?php
                    }
                }else{
                ?>
                <div class="team_card">
                    <h2>Loading</h2>
                </div>

                <?php
                }

                ?>

            </div>
        </div>


    </div>
</div>
<?php
    include("footer.php");
?>