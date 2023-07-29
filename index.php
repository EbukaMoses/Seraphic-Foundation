<?php 
include("admin/db/db.php");
include("header.php");
?>
<!-- -----------------------------HERO SECTION------------------ -->
<?php

// $ip = isset($_SERVER['REMOTE_ADDR']);
// echo 'ip: ' . $ip;

// echo var_export(unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$_SERVER['REMOTE_ADDR'])));
// echo "<script>alert(`{$id}`)</script>";
  
// Use JSON encoded string and converts
// it into a PHP variable
$ipdat = @json_decode(file_get_contents(
    "http://www.geoplugin.net/json.gp?ip=" . $ip));
   
// echo 'Country Name: ' . $ipdat->geoplugin_countryName . "\n";
// echo 'Country Code: ' . $ipdat->geoplugin_countryCode . "\n";
// echo 'City Name: ' . $ipdat->geoplugin_city . "\n";
// echo 'Continent Name: ' . $ipdat->geoplugin_continentName . "\n";
// echo 'Continent Code: ' . $ipdat->geoplugin_continentCode . "\n";
// echo 'Latitude: ' . $ipdat->geoplugin_latitude . "\n";
// echo 'Longitude: ' . $ipdat->geoplugin_longitude . "\n";
// echo 'Currency Symbol: ' . $ipdat->geoplugin_currencySymbol . "\n";
// echo 'Currency Code: ' . $ipdat->geoplugin_currencyCode . "\n";
// echo 'Timezone: ' . $ipdat->geoplugin_timezone . "\n";
// echo 'ip: ' . $ipdat->geoplugin_request . "\n";

$CountryName = $ipdat->geoplugin_countryName;
$CountryCode = $ipdat->geoplugin_countryCode;
$CityName = $ipdat->geoplugin_city;
$ContinentName = $ipdat->geoplugin_continentName;
$ContinentCode = $ipdat->geoplugin_continentCode;
$Latitude = $ipdat->geoplugin_latitude;
$Longitude = $ipdat->geoplugin_longitude;
$CurrencyCode = $ipdat->geoplugin_currencyCode;
$Timezone = $ipdat->geoplugin_timezone;
$ip = $ipdat->geoplugin_request;

$sel_query = "SELECT * FROM visitors WHERE ip = '{$ip}' AND country_name = '{$CountryName}'";
$run_query = mysqli_query($connection, $sel_query);
if(mysqli_num_rows($run_query) > 0){
    
}else{
    $query = "INSERT INTO visitors (ip, country_name, country_code, city_name, continent_name, continent_code, latitude, longitude, currency_code, timezone) VALUES ('{$ip}','{$CountryName}','{$CountryCode}','{$CityName}','{$ContinentName}','{$ContinentCode}','{$Latitude}','{$Longitude}','{$CurrencyCode}','{$Timezone}')";
    $run_query = mysqli_query($connection, $query);
}



   
?>
<section class="hero">
    <div class="container ">
        <div class="row ">
            <div class="col-md-8 col-sm-9 col-xs-12">
                <div class="hero_text">
                    <h1 class="text-white font-weight-bold">
                        Donate For The Poor<br> Children In Their Need.
                    </h1>
                    <h5 class="text-white font-weight-bold">Save the children by helps girls and boys living in
                        poverty in Nigeria. Donate today to provide healthcare,
                        education and nutrition to a child in their need.</h5>
                </div>

            </div>
            <div class="col-md-4 col-sm-3 col-xs-12">

            </div>
        </div>
    </div>
</section>

<!-- -------------------------------ABOUT US SECTION------------------- -->
<div class="container-fluid pr-5 pl-5">
    <div class="row">
        <div class="col-md-6 mt-5">
            <img data-aos="fade-up" src="image/about_home3.png" class="img-fluid p-5" alt="Seraphic Foundation">
        </div>
        <div class="col-md-6 pt-">
            <div class="row about-text about-us">
                <h3 class="font-weight-bold text-color ">About Seraphic Foundation</h3>
            </div>
            <div class="row about-text2">
                <h1 class="font-weight-bolder landing_page_title pb-3">We Make This World Better For Poor the People
                </h1>
            </div>


            <p class="text-black">We are a non-profit charitable organization inspired by the Holy Spirit through
                God's servant <strong>EVANG. EBUKA
                    ANOZIE OBI</strong> aimed at touching and impacting lives positively.

                Over the years, God has used his Servant <strong>EVANG. EBUKA
                    ANOZIE OBI</strong> through Seraphic Homes Foundation to implement
                these divine agendas.</p>
            <div class="row">
                <div class="col-md-6">
                    <div class="sub-about">
                        <h6><span class="color"><i class="fa-sharp fa-solid fa-check-double"></i></span>&nbsp;Provide
                            Rehabilitation Home
                        </h6>
                    </div>
                    <div class="sub-about">
                        <h6><span class="color"><i class="fa-sharp fa-solid fa-check-double"></i></span>&nbsp;To Feed
                            and Cloth the Poor
                        </h6>
                    </div>
                    <div class="sub-about">
                        <h6><span class="color"><i class="fa-sharp fa-solid fa-check-double"></i></span>&nbsp;Training &
                            Empowerment for unemployed
                        </h6>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="sub-about">
                        <h6><span class="color"><i class="fa-sharp fa-solid fa-check-double"></i></span>&nbsp;Good
                            Medical Care
                        </h6>
                    </div>
                    <div class="sub-about">
                        <h6><span class="color"><i class="fa-sharp fa-solid fa-check-double"></i></span>&nbsp;To Offer
                            Scholarship
                        </h6>
                    </div>
                    <div class="sub-about">
                        <h6><span class="color"><i class="fa-sharp fa-solid fa-check-double"></i></span>&nbsp;Provide
                            and Improve Housing to the Indigent
                        </h6>
                    </div>
                </div>
            </div>
            <div class="row mt-5 d-flex justify-content-center align-content-center">
                <center><a href="about-us.php" class="btn btn_ mb-4 pr-4 pl-4 pt-2 pb-2">⦿→ Know More</a>
                </center>
                <br>
            </div>
        </div>
    </div>
</div>

<div class="w-100 pt-5 pb-5 bg-white">
    <div class="container-fluid pl-5 pr-5">
        <div class="row mt-5 about-text">
            <!-- <h3 class="text-color font-weight-bold d-flex mx-auto our_clause">Our Clause</h3> -->
            <h3 class="font-weight-bold">HELP THE PEOPLE</h3>
        </div>
        <div class="row about-text2">
            <!-- <h1 class="text-black font-weight-bold ">Make This World Better For The Poor </h1> -->
            <h1 class="font-weight-bolder landing_page_title">Take part In Global Cause <br>
                By Raising Your Hand </h1>
        </div>
        <div class="row pt-5 pb-5">
            <div data-aos="fade-right"
                class="col-md-4 col-sm-6 col-xs-12 d-flex justify-content-center text-center align-items-center flex-column">
                <div class="card  p-3">
                    <div class="container">
                        <div class="row">
                            <div class="card-img">
                                <img src="image/x.jpg" class="img-fluid rounded" alt="Seraphic Foundation">
                            </div>
                        </div>
                        <div class="row">
                            <h4 class="card-title">
                                <h5 class="text-black font-weight-bold">Emergency campaign for medical treatment</h5>
                            </h4>
                        </div>
                        <div class="row d-flex justify-content-center align-content-center">
                            <div class="card-stat d-flex flex-row">
                                <div class="card-stat p-2">
                                    <h6>Goals</h6>
                                    <h6>$2,000</h6>
                                </div>
                                <div class="card-stat border-right border-left  p-2">
                                    <h6>Raised</h6>
                                    <h6>$2,000</h6>
                                </div>
                                <div class="card-stat p-2">
                                    <h6>To Go</h6>
                                    <h6>$2,000</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="" class="btn btn_ mt-3 mb-2">Donate Now</a>
                </div>
            </div>
            <div data-aos="fade-up"
                class="col-md-4 col-sm-6 col-xs-12 d-flex justify-content-center text-center align-items-center flex-column">
                <div class="card  p-3 clause2">
                    <div class="container">
                        <div class="row">
                            <div class="card-img">
                                <img src="image/y.jpg" class="img-fluid rounded" alt="Seraphic Foundation">
                            </div>
                        </div>
                        <div class="row">
                            <h4 class="card-title">
                                <h5 class="text-black font-weight-bold">Urgent raising for homeless children</h5>
                            </h4>
                        </div>
                        <div class="row d-flex justify-content-center align-content-center">
                            <div class="card-stat d-flex flex-row">
                                <div class="card-stat p-2">
                                    <h6>Goals</h6>
                                    <h6>$2,000</h6>
                                </div>
                                <div class="card-stat border-right border-left  p-2">
                                    <h6>Raised</h6>
                                    <h6>$2,000</h6>
                                </div>
                                <div class="card-stat p-2">
                                    <h6>To Go</h6>
                                    <h6>$2,000</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="" class="btn btn_ mt-3 mb-2">Donate Now</a>
                </div>
            </div>
            <div data-aos="fade-right"
                class="col-md-4 col-sm-6 col-xs-12 d-flex justify-content-center text-center align-items-center flex-column mt-sm-4">
                <div class="card  p-3 clause2">
                    <div class="container">
                        <div class="row">
                            <div class="card-img">
                                <img src="image/y.jpg" class="img-fluid rounded" alt="Seraphic Foundation">
                            </div>
                        </div>
                        <div class="row">
                            <h4 class="card-title">
                                <h5 class="text-black font-weight-bold">Raising fund for better child education</h5>
                            </h4>
                        </div>
                        <div class="row d-flex justify-content-center align-content-center">
                            <div class="card-stat d-flex flex-row">
                                <div class="card-stat p-2">
                                    <h6>Goals</h6>
                                    <h6>$2,000</h6>
                                </div>
                                <div class="card-stat border-right border-left  p-2">
                                    <h6>Raised</h6>
                                    <h6>$2,000</h6>
                                </div>
                                <div class="card-stat p-2">
                                    <h6>To Go</h6>
                                    <h6>$2,000</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="" class="btn btn_ mt-3 mb-2">Donate Now</a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid bg-img pb-5">
    <div class="container pb-5">
        <div class="row pt-5">
            <h1 class="text-white testimony font-weight-bold landing_page_title d-flex mx-auto mt-5">Give Your Donation
                In A <br>
                Specific Important Crisis
            </h1>
        </div>
        <div class="row">
            <p class="text-white landing_page_title2 font-weight-bold d-flex text-center mx-auto">Right now we are
                working so many
                types of
                projects. In some of the <br> projects are very much successfull between our donours.
            </p>
        </div>
        <br><br>
        <div class="row mb-5">
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="card d-flex align-items-center justify-items-center p-3">
                    <div class="icon">
                        <i class="fa-sharp fa-solid fa-house"></i>
                    </div>
                    <h5 class="font-weight-bold text-black text-center">Provide Rehabilitation Home/Hospital</h5>
                    <div class="wrap-title pr-4 pl-4">
                        <p>⦿→ Provide educational funds for lower income children for elementary school; </p>
                    </div>
                    <a href="program.php" class="btn btn_ mt-3 mb-2">Donate Now</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="card d-flex align-items-center justify-items-center p-3 clause2">
                    <div class="icon">
                        <i class="fa-sharp fa-solid fa-droplet"></i>
                    </div>
                    <h5 class="font-weight-bold text-black">Feed and Cloth the Poor</h5>
                    <div class="wrap-title pr-4 pl-4">
                        <p>⦿→ Provide financial and emotional support to widows and orphans who need assistance </p>
                    </div>
                    <a href="program.php" class="btn btn_ mt-3 mb-2">Donate Now</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 mt-sm-5">
                <div class="card d-flex align-items-center justify-items-center p-3 clause2">
                    <div class="icon">
                        <i class="fa-sharp fa-solid fa-head-side-virus"></i>
                    </div>
                    <h5 class="font-weight-bold text-black">Good Medical Care</h5>
                    <div class="wrap-title pr-4 pl-4">
                        <p>⦿→ Provide books, clothes, diapers and food for infants and toddlers from underserved
                            communities </p>
                    </div>
                    <a href="program.php" class="btn btn_ mt-3 mb-2">Donate Now</a>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center align-content-center">
            <center><a href="program.php" class="btn btn_2 mt-4 pr-4 pl-4">⦿→See More</a></center>

        </div>
    </div>
</div>

<div class="container pt-5 pb-5 mb-5">
    <div class="row about-text2 d-flex justify-content-center pt-5 pb-5">
        <h1 class="font-weight-bolder landing_page_title"> We Believe that We can<br> saveMore Lifes with you</h1>
    </div>
    <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="d-flex justify-content-center align-content-center">
                <img src="image/volunteer.png" class="img-fluid" width="70" alt="Seraphic Foundation">
            </div>
            <h4 class="d-flex justify-content-center align-content-center font-weight-bold">Become a volunteer</h4>
            <p class="text-center">We encourage you to get involved with Friends of Seraphic Homes Foundation .
                Any assistance – volunteering, hosting an event or helping us spread the word about our organization
                will make a huge difference</p>

            <center><a href="volunteer.php" class="btn btn_2 mb-4 pr-4 pl-4">Volunteer</a></center>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="d-flex justify-content-center align-content-center">
                <img src="image/fund_raising.png" class="img-fluid" width="70" alt="Seraphic Foundation">
            </div>
            <h4 class="d-flex justify-content-center align-content-center font-weight-bold">Quick Fundraising</h4>
            <p class="text-center">Lorem ipsum dolor sit amet
                consectetur adipisicing elit. Sit modi sapiente delectus omnis aut
                reprehenderit tempora consequatur eum illo odio labore ipsum similique magni assumenda distinctio
                voluptatibus laboriosam quis dolorem iusto a, numquam iure. Enim natus sunt dicta cum nostrum omnis
                nobis cumque? Optio quis inventore ducimus cupiditate, ex ipsam!</p>

            <center><a href="donate.php" class="btn btn_2 mb-4 pr-4 pl-4">Fund Us</a></center>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="d-flex justify-content-center align-content-center">
                <img src="image/start_donating.png" class="img-fluid" width="90" alt="Seraphic Foundation">
            </div>
            <h4 class="d-flex justify-content-center align-content-center font-weight-bold">Start Donating</h4>
            <p class="text-center">Lorem ipsum dolor sit amet
                consectetur adipisicing elit. Sit modi sapiente delectus omnis aut
                reprehenderit tempora consequatur eum illo odio labore ipsum similique magni assumenda distinctio
                voluptatibus laboriosam quis dolorem iusto a, numquam iure. Enim natus sunt dicta cum nostrum omnis
                nobis cumque? Optio quis inventore ducimus cupiditate, ex ipsam!</p>

            <center><a href="donate.php" class="btn btn_2 mb-4 pr-4 pl-4">Secret Donation</a></center>

        </div>

    </div>

</div>

<div class="w-100 bg-white">
    <div class="container">
        <div class="col-md-12 col-sm-12 col-xs-12 pt-3 pl-5 pr-5 d-flex justify-content-center align-content-center">
            <img src="image/handshake.png" class="img-fluid" alt="Seraphic Foundation" width="280">
        </div>
        <div class="row about-text2">
            <h1 class="font-weight-bolder landing_page_title d-flex mx-auto">Be Our partner</h1>
        </div>
        <div class="row">
            <h5 class="text-black font-weight-bold landing_page_title2 pb-3 d-flex mx-auto text-center">Interested in
                what we are
                doing
                <br />Please
                partner with us!
            </h5>
        </div>
        <div class="row mb-5 d-flex justify-content-center align-content-center">
            <center><a href="partner.php" class="btn btn_ mb-4 pr-4 pl-4">Partner With us Now</a></center>
            <br>
        </div>
        <br>
    </div>
</div>



<?php include("footer.php") ?>

</body>
</html>