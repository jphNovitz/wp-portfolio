<h1>Présentation du Portfolio</h1>
<form action="options.php" method="post">
    <?php settings_errors(); ?>
    <?php  settings_fields('portfolio-configuration-group'); ?>
    <?php do_settings_sections('portfolio_configuration') ?>
    <?php submit_button(); ?>
</form>