
  <h3 class="header">Quiz Manager</h3>
  <?php settings_errors();  ?>
  <div class="wrapper">

      <form action="options.php" method="post">
        <?php settings_fields( 'LOE-quiz-settings-group' ) ?>
        <?php do_settings_sections( 'LOE_theme_options' ) ?>


        <?php submit_button( 'Add Quiz' ); ?>
      </form>

  </div>
