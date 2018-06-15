
<?php require_once(get_template_directory().'/admin/social/social-media-config.php') ?>

<div class="wrapper">
    <div class="container">
        <div class="social-media">
            <?php settings_errors(); ?>
            <form action="options.php" method="post">
                <?php settings_fields('LOE-social-media-group'); ?>
                <?php do_settings_sections('LOE_theme_options'); ?>
                <?php submit_button(); ?>
            </form>
        </div>
    </div>
</div>
