<section class="contact" id="contact">
  <div class="title">
    <h2>Contact <span>Me</span></h2>
  </div>

  <div class="contact-content">
    <div class="row">

      <div class="box">
        <div class="box-icon">
          <i class="ri-home-line"></i>
        </div>
        <div class="box-info">
          <h4>Address</h4>
          <span>Talibon, Bohol</span>
        </div>
      </div>

      <div class="box">
        <div class="box-icon">
          <i class="ri-phone-line"></i>
        </div>
        <div class="box-info">
          <h4>Phone Number</h4>
          <span>+639234578910</span>
        </div>
      </div>

      <div class="box">
        <div class="box-icon">
          <i class="ri-mail-line"></i>
        </div>
        <div class="box-info">
          <h4>Email Address</h4>
          <span>betboom@hotmail.com</span>
        </div>
      </div>

    </div>

    <div class="row">
      <form action="contact-process.php" method="POST" class="contact-form">

        <div class="form-box">
          <input type="text" name="name" placeholder="Enter Your Name" required>
        </div>

        <div class="form-box">
          <input type="email" name="email" placeholder="Enter Your Email" required>
        </div>

        <div class="form-box">
          <input type="text" name="subject" placeholder="Email Subject" required>
        </div>

        <div class="form-box">
          <textarea name="message" cols="10" rows="10" placeholder="Your Message" required></textarea>
        </div>

        <button type="submit" class="btn overlay">
          <span>Send Message</span>
        </button>
      </form>
    </div>

  </div>
</section>
