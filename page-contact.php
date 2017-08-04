<?php get_header(); ?>

<div class="container-fluid contact-bg">
  <div class="row">

    <h2 class="contact-page-title col-12 display-2"><?php the_title(); ?></h2>

    <section class="formWrapper col-xl-4 col-md-8 col-xs-12">
      <form action="success.php" method="post">
        <div class="form-group">
          <input type="text" class="form-control contact-input" name="name" value="" placeholder="Name" maxlength="50">
          <input type="text" class="form-control contact-input" name="email" value="" placeholder="Email">
          <textarea class="form-control contact-input" name="message" placeholder="Your Message"></textarea>
          <input type="submit" name="submit" class="btn btn-block btn-secondary" value="Send">
        </div>
      </form>
    </section>
  </div>

  <div class="row">
    <div class="map col-xl-4 col-md-8 col-xs-12">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2935.0821685953306!2d-73.7824366840984!3d42.63841797916925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89de0a70331fd329%3A0x36cf958a339d615b!2s11+Alden+Ave%2C+Albany%2C+NY+12209!5e0!3m2!1sen!2sus!4v1501820478629" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </div>
</div>
<?php get_footer(); ?>
