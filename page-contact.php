<?php get_header(); ?>


<div class="container-fluid contact-bg">


  <section>
    <h2 class="contact-page-title col-12 display-2"><?php the_title(); ?></h2>
    <hr>
    <div class="row">
      <form class="contact-form col-xl-4 col-md-8 col-xs-12" action="" method="post">
        <div class="form-group">
          <input type="text" class="form-control contact-field" name="name" value="" placeholder="Name" maxlength="50" required>
          <input type="email" class="form-control contact-field" name="email" value="" placeholder="Email" required>
          <textarea class="form-control contact-field" name="message" placeholder="Your Message" required></textarea>
          <p class="text-right">
            <input type="reset" name="reset" class="col-md-3 contact-btn btn btn-secondary" value="Clear">
            <input type="submit" name="submit" class="col-md-3 contact-btn btn btn-secondary" value="Send">
          </p>
        </div>
      </form>
    </div>
  </section>


</div>




<?php get_footer(); ?>
