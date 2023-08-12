<!DOCTYPE html>
<html lang="en">

<?php include("include/head.php"); ?>

<body>


<?php include("include/header.php"); ?>

  <!-- THIS IS FORM -->

  <section class="top-banner">
    <img src="<?php echo HDOMAIN?>images/cont.jpg" alt="">
    <h1>Contact Us</h1>
  </section>

  <section class="form-sec">
    <div class="container">
        <div class="main">
            <div class="lt">
                <h2>Say Hello</h2>
                <form action="">
                    <div class="inp">
                        <input type="text" class="name" val="" placeholder="Full Name" required />
                    </div>
                    <div class="inp">
                        <input type="text" class="phone" val="" placeholder="Phone" required />
                    </div>
                    <div class="inp">
                        <input type="email" class="email" val="" placeholder="Email" required />
                    </div>
                    <div class="inp">
                        <textarea name="" id="" cols="30" rows="10" placeholder="Enter your text"></textarea>
                    </div>
                    <button class="btn">Send</button>
                </form>
            </div>
            <div class="rt">
                <h2>Contact Us</h2>
                <div class="detail">
                    <i class="fa fa-map-marker"></i>
                    <p> Main Road, Sector-32, Greater Noida, UP</p>
                </div>
                <div class="detail">
                    <i class="fa fa-phone"></i>
                    <p><a href="tel:+919999886287 ">+91-9999886287 </a></p>
                </div>
                <div class="detail">
                    <i class="fa fa-phone"></i>
                    <p><a href="tel:+918390065492  ">+91-8390065492  </a></p>
                </div>
                <div class="detail">
                    <i class="fa fa-envelope"></i>
                    <p><a href="mailto:amansales@amaninfradeveloper.co.in">amansales@amaninfradeveloper.co.in</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3491.6662567449275!2d77.5267910154783!3d28.937956882298383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390c610f7464bd8d%3A0x770b30593ba24cb7!2sAman%20Infra%20Developer!5e0!3m2!1sen!2sin!4v1670328902954!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

  <?php include("include/footer.php"); ?>

</body>

</html>