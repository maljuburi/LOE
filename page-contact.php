<?php get_header(); ?>


<div class="container-fluid contact-bg">


  <section>
    <h2 class="contact-page-title col-12 display-2"><?php the_title(); ?></h2>
    <hr>
    <div class="row">
      <form id="contactForm" class="contact-form col-xl-4 col-md-8 col-xs-12" action="#" data-url="<?php echo admin_url('admin-ajax.php') ?>" method="post">
        <div class="form-group">
          <input type="text" class="form-control contact-field" name="name" value="" placeholder="Name" maxlength="50" required>
          <input type="email" class="form-control contact-field" name="email" value="" placeholder="Email" required>
          <textarea class="form-control contact-field" name="message" placeholder="Your Message" required></textarea>
          <p class="text-right">
            <input type="reset" name="reset" class="col-md-3 contact-btn btn btn-secondary" value="Clear">
            <input type="submit" name="submit" class="col-md-3 contact-btn btn btn-secondary" value="Send">
          </p>
          <small class="form-wait text-right note-msg"><div class="loader"></div> Sending....</small>
          <small class="alert alert-success form-success note-msg"> Message was sent successfully</small>
        </div>
      </form>
    </div>
  </section>


</div>

<script>


var form = document.getElementById("contactForm");
document.addEventListener('submit', function (e) {
  e.preventDefault();
  
  var name = form.name.value;
  var email = form.email.value;
  var msg = form.message.value;
  var ajaxurl = form.dataset.url;

  if(name=='' || email=='' || msg==''){
    alert('Inputs required!');
    return;
  }

  $('.form-wait').fadeIn(300).css("display","block");
  $('#contactForm').find('input,textarea').attr('disabled', 'disabled');


  $.ajax({
    url : ajaxurl,
    type : 'post',
    data : {
      name : name,
      email : email,
      message : msg,
      action : 'LOE_submit_form'

    },
    error : function(res){
      $('#contactForm').find('input,textarea').removeAttr('disabled', 'disabled');
      $('.form-wait').css("display","none");
    },
    success : function(res){
      if(res == 0){
        $('#contactForm').find('input,textarea').removeAttr('disabled', 'disabled');
        $('.form-wait').css("display","none");
      }else{
        $('#contactForm').find('input[type="text"],input[type="email"],textarea').val('');
        $('#contactForm').find('input,textarea').removeAttr('disabled', 'disabled');
        $('.form-wait').css("display","none");
        $('.form-success').fadeIn(300).css("display","block").delay(4000).fadeOut(1500);
      }
    }

  });
  


});

</script>


<?php get_footer(); ?>
