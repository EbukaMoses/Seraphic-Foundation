<?php

    include("header.php");
    $title = "Partner With Us";
?>
<div class="container-fluid pagehero pt-5 pb-5">
    <div class=" container">
        <div class="row">
            <h1 class="text-center pt-5 pb-5 pagehero-title font-weight-bold">
                <?php if(isset($title)){ echo $title;} else { echo "Seraphic Foundation"; } ?>

            </h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <h1 class="font-weight-bold d-flex mx-auto partner_title text-center">SERAPHIC HOME FOUNDATION <br> PARTNERSHIP
            FORM
        </h1>
    </div>
    <div class="row mb-5">
        <div class="contact-divider d-flex mx-auto"></div>

    </div>
    <div class="row mb-5 pb-5">
        <div class="col-md-9 col-sm-12 col-xs-12 team_card p-5">
            <ol start="a" class="pr-3 pl-3">
                <h6>
                    <li>Instructios must be strictly followed in the completion of this form nd must be completed by
                        the "PARTNER"
                    </li>
                </h6>
                <h6>
                    <li>Please note that by being a partner you are not under any form of obligation to Seraphic Home
                        Foundation but a volunter convenant with "GOD"</li>
                </h6>
            </ol>
            <?php include("admin/functions/message.php");?>

            <hr>

            <form action="admin/functions/allcode.php" method="POST" enctype="multipart/form-data">

                <div class="input-group mt-5">


                    <!-- <div class="custom-file">
                        <input type="file" name="upload_profile" class="custom-file-input form-control-file"
                            id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="inputGroupFile01">Upload Picture</label>
                    </div> -->
                    <!-- <input type="file" name="upload_profile"> -->
                    <br>
                    <div class="d-flex mx-auto" id="register">
                        <div class="upload-profile-image d-flex flex-column justify-content-center pb-5">
                            <div class="d-flex justify-content-center">
                                <img src="image/camera.png" width="80" alt="camera" class="camera_icon">
                            </div>
                            <img src="image/avatar.png" alt="profile" width="120" class="img rounded-cricle">
                            <small class="form-text text-black-50 small_text text-center">Choose Image</small>
                            <input type="file" class="form-control-file" id="upload-profile" name="upload_profile">
                        </div>
                    </div>

                </div>
                <div class="row d-flex justify-content-between">
                    <div class="col-md-6">
                        <div class=" input-form-group mt-4">
                            <label for="">
                                <h6>Full Name:</h6>
                            </label>
                            <input type="text" value="<?php if(isset($_POST["fullname"]))  echo $_POST["fullname"]?>"
                                class="form-control" placeholder="Full Name" name="fullname">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class=" input-form-group mt-4">
                            <label for="">
                                <h6>Email:</h6>
                            </label>
                            <input type="text" value="<?php if(isset($_POST["email"]))  echo $_POST["email"]?>"
                                class="form-control" placeholder="Email" name="email">
                        </div>
                    </div>
                </div>

                <div class="row d-flex justify-content-between">
                    <div class="col-md-6">
                        <div class=" input-form-group mt-4">
                            <label for="">
                                <h6>Phone Number 1 (Whatsapp):</h6>
                            </label>
                            <input type="text" value="<?php if(isset($_POST["phone1"]))  echo $_POST["phone1"]?>"
                                class="form-control" placeholder="Phone Number 1 (Whatsapp)" name="phone1">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class=" input-form-group mt-4">
                            <label for="">
                                <h6>Phone Number 2:</h6>
                            </label>
                            <input type="text" value="<?php if(isset($_POST["phone2"]))  echo $_POST["phone2"]?>"
                                class="form-control" placeholder="Phone Number 2" name="phone2">
                        </div>
                    </div>
                </div>
                <div class=" input-form-group mt-4">
                    <label for="">
                        <h6>
                            Gender:
                        </h6>
                    </label>

                    <select name="gender" id="" class="form-control">
                        <option value="">--Select--</option>
                        <option value="male" <?php if(isset($_POST["male"])) {echo 'selected'; } ?>>Male</option>
                        <option value="female" <?php if(isset($_POST["female"])) {echo 'selected'; } ?>>female</option>
                    </select>
                </div>
                <br>
                <h5 class="mt-4"><strong><u>RESIDENTIAL ADDRESS</u></strong></h5>
                <div class="row d-flex justify-content-between">
                    <div class="col-md-6">
                        <div class=" input-form-group mt-4">
                            <label for="">
                                <h6>Street:</h6>
                            </label>
                            <input type="text"
                                value="<?php if(isset($_POST["res_street"]))  echo $_POST["res_street"]?>"
                                class="form-control d-block mx-auto" placeholder="Street" name="res_street"
                                width="100%">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class=" input-form-group mt-4">
                            <label for="">
                                <h6>Town:</h6>
                            </label>
                            <input type="text" value="<?php if(isset($_POST["res_town"]))  echo $_POST["res_town"]?>"
                                class="form-control" placeholder="Town" name="res_town">
                        </div>
                    </div>
                </div>


                <div class="row d-flex justify-content-between">
                    <div class="col-md-6">
                        <div class=" input-form-group mt-4">
                            <label for="">
                                <h6>State:</h6>
                            </label>
                            <input type="text" value="<?php if(isset($_POST["res_state"]))  echo $_POST["res_state"]?>"
                                class="form-control d-block mx-auto" placeholder="State" name="res_state" width="100%">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class=" input-form-group mt-4">
                            <label for="">
                                <h6>Country:</h6>
                            </label>
                            <input type="text"
                                value="<?php if(isset($_POST["res_country"]))  echo $_POST["res_country"]?>"
                                class="form-control" placeholder="Country" name="res_country">
                        </div>
                    </div>
                </div>
                <br>
                <h5 class="mt-4"><strong><u>ADDRESS OF ORIGIN</u></strong></h5>
                <div class="row d-flex justify-content-between">
                    <div class="col-md-6">
                        <div class=" input-form-group mt-4">
                            <label for="">
                                <h6>Street:</h6>
                            </label>
                            <input type="text"
                                value="<?php if(isset($_POST["orig_street"]))  echo $_POST["orig_street"]?>"
                                class="form-control d-block mx-auto" placeholder="Street" name="orig_street"
                                width="100%">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class=" input-form-group mt-4">
                            <label for="">
                                <h6>Town:</h6>
                            </label>
                            <input type="text" value="<?php if(isset($_POST["orig_town"]))  echo $_POST["orig_town"]?>"
                                class="form-control" placeholder="Town" name="orig_town">
                        </div>
                    </div>
                </div>

                <div class="row d-flex justify-content-between">
                    <div class="col-md-6">
                        <div class=" input-form-group mt-4">
                            <label for="">
                                <h6>State:</h6>
                            </label>
                            <input type="text"
                                value="<?php if(isset($_POST["orig_state"]))  echo $_POST["orig_state"]?>"
                                class="form-control d-block mx-auto" placeholder="State" name="orig_state" width="100%">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class=" input-form-group mt-4">
                            <label for="">
                                <h6>Country:</h6>
                            </label>
                            <input type="text"
                                value="<?php if(isset($_POST["orig_country"]))  echo $_POST["orig_country"]?>"
                                class="form-control" placeholder="Country" name="orig_country">
                        </div>
                    </div>
                </div>

                <div class=" input-form-group mt-4">
                    <label for="">
                        <h6>
                            Occupation/Profession:
                        </h6>
                    </label>
                    <input type="text" value="<?php if(isset($_POST["occupation"]))  echo $_POST["occupation"]?>"
                        class="form-control" placeholder="Occupation/Profession" name="occupation">
                </div>

                <div class=" input-form-group mt-4">
                    <label for="">
                        <h6>
                            Monthly Vow(Amount):
                        </h6>
                    </label>
                    <input type="number" value="<?php if(isset($_POST["pay"]))  echo $_POST["pay"]?>"
                        class="form-control" placeholder="Monthly Vow(Amount) e.g ₦200,000" name="pay">
                </div>

                <div class="input-form-group mt-4">
                    <button type="submit" name="partner_btn" class="text-white bg-color btn w-100"><i
                            class="fa-solid fa-paper-plane"></i>&nbsp;Submit</button>
                </div>
            </form>
        </div>
        <div class="col-md-3 col-sm-0 col-xs-0">
            <!-- <img src="image/wheat.png" class="partner_img pt-5" alt=""> -->
        </div>
    </div>
</div>


<?php
    include("footer.php");
?>