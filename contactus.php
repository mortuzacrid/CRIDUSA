<?php
    $PAGENAME = "Contact Us";
    include 'inc/header.php';
    include 'inc/navbar.php';
?>

    <section class="container about-section">
        <h1 class="animated text-center">Contact Us</h1>
        <hr>
        <div class="gap">

            <form action="thanks.php" method="post">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Your name" required>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Your email address" required>
              </div>
              <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject for the message" required>
              </div>
              <div class="form-group">
                <label for="text">Message</label>
                <textarea class="form-control" rows="5" id="text" name="message" placeholder="Message that you want to send us"></textarea>
              </div>
              <input  type="submit" name="submit" value="Send Message" class="btn btn-primary">
            </form>
            
        </div>
            <p>
                You can also join us as a student, robotic learner, mentor or a professional volunteer to help support our campaign on robotic and IoT Education. Learn, tech and grow, let’s build a robot builders community.
            </p>
    </section>


<?php include 'inc/footer.php'; ?>