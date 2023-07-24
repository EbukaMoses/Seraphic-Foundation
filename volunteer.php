<?php
session_start();
    include("header.php");
    $title = "Volunteer";
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
    <div class="row mb-5 pb-5">
        <div class="col-md-4">
            <div class="mb-5 pt-5 d-flex justify-content-center align-items-center">
                <img src="image/volunteering.png" alt="" class="volunteer_img">
            </div>
        </div>
        <div class="col-md-8">
            <div class="team_card p-4">
                <div class="row d-flex justify-content-center align-content-center">
                    <h1 class="contact-title">Volunteer for our
                        Events</h1>
                    <!-- <div class="contact-divider d-flex mx-auto"></div> -->
                </div>
                <center>
                    <p>Help us spread the word about our organization will make a huge difference</p>
                    <?php include("admin/functions/message.php");?>
                </center>
                <form action="admin/functions/allcode.php" method="POST">
                    <div class="input-group mt-4">
                        <input type="text" value="<?php if(isset($_POST["vol_name"]))  echo $_POST["vol_name"]?>"
                            class="form-control input" placeholder="Full Name" name="vol_name">
                    </div>

                    <div class=" input-group mt-4">
                        <input type="text" value="<?php if(isset($_POST["vol_email"]))  echo $_POST["vol_email"]?>"
                            class="form-control input" placeholder="Email" name="vol_email">
                    </div>

                    <div class=" input-group mt-4">
                        <input type="text" value="<?php if(isset($_POST["vol_phone"]))  echo $_POST["vol_phone"]?>"
                            class="form-control input" placeholder="Phone" name="vol_phone">
                    </div>
                    <select name="gender" id="" class="form-control input mt-4">
                        <option value="">--Select Gender--</option>
                        <option value="male" <?php if(isset($_POST["male"])) {echo 'selected'; } ?>>Male</option>
                        <option value="female" <?php if(isset($_POST["female"])) {echo 'selected'; } ?>>Female</option>
                    </select>
                    <div class=" input-group mt-4">
                        <input type="text" value="<?php if(isset($_POST["vol_address"]))  echo $_POST["vol_address"]?>"
                            class="form-control input" placeholder="Address" name="vol_address">
                    </div>

                    <div class=" input-group mt-4">
                        <textarea name="vol_msg" value="<?php if(isset($_POST["vol_msg"]))  echo $_POST["vol_msg"]?>"
                            id="" cols="30" rows="10" class="form-control input"
                            placeholder="Message (optional)"></textarea>
                    </div>

                    <div class="input-group mt-4">
                        <button type="submit" name="vol_btn" class="text-white bg-color btn w-100"><i
                                class="fa-solid fa-handshake"></i>&nbsp;Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php
    include("footer.php");
?>