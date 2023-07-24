<?php
    include("header.php");
    $title = "Contact Us";
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
    <div class="row mb-5 pb-5">
        <div class="col-md-8">
            <div class="team_card p-4">
                <h1 class="contact-title">Hi, Talk to Us 💬</h1>
                <div class="contact-divider"></div>
                <br>
                <p>We’d love to hear from you! </p>
                <form action="">
                    <div class="input-group mt-4">
                        <input type="text" class="form-control input" placeholder="Full Name" name="fullname">
                    </div>

                    <div class=" input-group mt-4">
                        <input type="text" class="form-control input" placeholder="Email" name="email">
                    </div>

                    <div class=" input-group mt-4">
                        <input type="text" class="form-control input" placeholder="Phone" name="phone">
                    </div>

                    <div class=" input-group mt-4">
                        <textarea name="message" id="" cols="20" rows="10" class="form-control input"
                            placeholder="Message"></textarea>
                    </div>

                    <div class="input-group mt-4">
                        <button type="submit" name="sendmsg" class="text-white bg-color btn w-100"><i
                                class="fa-solid fa-paper-plane"></i>&nbsp;Send</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <h1 class="contact-title mt-4">Message Us</h1>
            <div class="contact-divider"></div>
            <br><br>
            <p><a href="mailto:info@seraphicoundation.com" class="text-decoration-none"><i
                        class="contact-fa fa-solid fa-envelope"></i>&nbsp;
                    <span class="contact-detail text-dark">info@seraphicoundation.com</span></a></p>
            <p>
                <a href="mailto:seraphichomesfoundation01@gmail.com" class="text-decoration-none"><i
                        class="contact-fa fa-solid fa-envelope"></i>&nbsp;
                    <span class="contact-detail text-dark">seraphichomesfoundation01@gmail.com</span>
                </a>
            </p>
            <p>
                <a href="tel:+2347044412156" class="text-decoration-none">
                    <i class="contact-fa fa-solid fa-phone"></i>
                    <i class="contact-fa fa-brands fa-whatsapp"></i>&nbsp;
                    <span class="contact-detail text-dark">&nbsp;+2347044412156</span>
                </a>
            </p>
            <div class="d-flex flex-row">
                <h6 class="font-weight-bold">Follow Us:</h6>
                <a href=""><i class="text-color fa-brands fa-instagram pl-2 pr-2"></i></a>
                <a href=""> <i class="text-color fa-brands fa-facebook pr-2"></i></a>
                <a href=""><i class="text-color fa-brands fa-twitter"></i></a>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d991.0608654714555!2d3.3098300250698616!3d6.49082573529536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8ecfb3eb1c25%3A0xe45e1a8d20370899!2sSeraphic%20Homes%20Foundation!5e0!3m2!1sen!2sng!4v1686935013661!5m2!1sen!2sng"
        width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>


<?php
    include("footer.php");
?>