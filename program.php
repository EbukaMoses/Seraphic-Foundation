<?php
    include("admin/db/db.php");
    include("header.php");
    $title = "Our Program";
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
<div class="w-100">
    <div class="container mb-5 pb-5">
        <div class="row">
            <h5 class="text-color font-weight-bold d-flex mx-auto">Our Clause</h5>
        </div>
        <div class="row">
            <h1 class="text-black program_title font-weight-bold d-flex mx-auto">We Make This World Better For Poor
                Children
            </h1>
        </div>
        <div class="row">

            <?php  
                
                $query = "SELECT * FROM program";
                $run_query = mysqli_query($connection, $query);
                if(mysqli_num_rows($run_query) > 0){
                    while($row = mysqli_fetch_assoc($run_query)){
                                        		
                        $title = $row['pro_title'];
                        $pic = $row['pro_pic'];
                        $details = $row['pro_writeup'];
                        ?>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mt-5 mt-sm-2">
                <div class="card d-flex align-items-center justify-items-center p-3">
                    <div class="card-img mb-4">
                        <img src="admin/uploads/program/<?=$pic?>" class="img-fluid rounded" alt="Seraphic Foundation">
                    </div>
                    <h4 class="font-weight-bold text-black text-center"><?=$title?></h4>
                    <div class="wrap-title pr-4 pl-4">
                        <p>⦿→ <?=$details?>.</p>
                    </div>
                    <a href="donate.php" class="btn btn_ mt-3 mb-2">Donate Now</a>
                </div>
            </div>
            <?php
                    }
                }
            ?>
            <!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mt-5 mt-sm-2">
                <div class="card d-flex align-items-center justify-items-center p-3">
                    <div class="card-img mb-4">
                        <img src="image/cloth&food.jpg" class="img-fluid rounded" alt="Seraphic Foundation">
                    </div>
                    <h4 class="font-weight-bold text-black">Feed and Cloth the Poor</h4>
                    <div class="wrap-title pr-4 pl-4">
                        <p>⦿→ Due to the severe economic haedship that birthed the high cost of living in our country,
                            many families find it diffcult to feed once a day not to talk more of cloths to wear.</p>
                        <p>Starvation makes them vulnerable to diseases and illness that might lead to deaths.</p>
                        <p>We provide time to time distribution of food materials and clothing to support the deserving
                            amongst us.</p>
                        <p>Matthew 25:35 "I was hungry and you gave me food, thirsty and you gave me water to drink; I
                            was a stranger you received me in your home".</p>
                    </div>
                    <a href="donate.php" class="btn btn_ mt-3 mb-2">Donate Now</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mt-5">
                <div class="card d-flex align-items-center justify-items-center p-3">
                    <div class="card-img mb-4">
                        <img src="image/training.jpg" class="img-fluid rounded" alt="Seraphic Foundation">
                    </div>
                    <h4 class="font-weight-bold text-black text-center">Vocational training & Empowerment</h4>
                    <div class="wrap-title pr-4 pl-4">
                        <p>⦿→ Nigeria has a pathetic rate of unemployment saddled with economic hardship, many are
                            jobless/hopeless and in turn this situation breeds criminals in our society.</p>
                        <p>We aim at providing relevant vocational and skillful trainings in arts and crafts, farming,
                            sowing etc to individuals to be self supporting and independent through ones own labour.</p>
                        <p>We also provide financial support to small businesses of perishable and non-perishable goods
                            that will al least give succor ot less privileged families.</p>
                    </div>
                    <a href="donate.php" class="btn btn_ mt-3 mb-2">Donate Now</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mt-5">
                <div class="card d-flex align-items-center justify-items-center p-3">
                    <div class="card-img mb-4">
                        <img src="image/medicalcare.jpg" class="img-fluid rounded" alt="Seraphic Foundation">
                    </div>
                    <h4 class="font-weight-bold text-black text-center">Good Medical Care</h4>
                    <div class="wrap-title pr-4 pl-4">
                        <p>⦿→ Healthcare management is among the basics needs of man. Alot of people have gone down
                            their gaves early as a result of poverty which is being financially incapacitated to take
                            good care of their health leading to poor health management which results to death.</p>
                        <p>Our goal is to alleviate such medical problems by providing a world class hospital and
                            financial supports towards healthcare to the deserving amongst us.</p>
                    </div>
                    <a href="donate.php" class="btn btn_ mt-3 mb-2">Donate Now</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mt-5">
                <div class="card d-flex align-items-center justify-items-center p-3">
                    <div class="card-img mb-4">
                        <img src="image/scholarship.jpg" class="img-fluid rounded" alt="Seraphic Foundation">
                    </div>
                    <h4 class="font-weight-bold text-black">Scholarship Program</h4>
                    <div class="wrap-title pr-4 pl-4">
                        <p>⦿→ Due to the high rise in poverty and high cost of living in the country: education is now
                            meant for the rich; leading to alarming increase in number of out of school children.</p>
                        <p>The poor can no longer afford quality education, many children are out of school and this
                            portrays a big risk to the society.</p>
                        <p>We offer educational scholarships to the children of the less privileged to ensure they have
                            quality education and a well fulfilling future ahead.</p>
                    </div>
                    <a href="donate.php" class="btn btn_ mt-3 mb-2">Donate Now</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mt-5">
                <div class="card d-flex align-items-center justify-items-center p-3">
                    <div class="card-img mb-4">
                        <img src="image/estate.jpg" class="img-fluid rounded" alt="Seraphic Foundation">
                    </div>
                    <h4 class="font-weight-bold text-black">Improve Housing to the Indigent</h4>
                    <div class="wrap-title pr-4 pl-4">
                        <p>⦿→ Housing is the basis of stability and security for any individual or family. It also
                            provides psychological stability to an individual by affording them personal space and
                            privacy, regrettably a huge population of nigerians is not privy to this. The millions of
                            her population are forced to live in abject poverty.</p>
                        <p>Most of them are homeless or living in an ill environment because they can't afford the money
                            to build or rent a good habitable space/house.</p>
                        <p>This provision will help to reduce the level of homeless people by providing a conductive
                            housing or a housing support program for them.</p>
                    </div>
                    <a href="donate.php" class="btn btn_ mt-3 mb-2">Donate Now</a>
                </div>
            </div> -->
        </div>
    </div>
</div>
<?php
    include("footer.php");
?>