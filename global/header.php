<!DOCTYPE html>
<html lang="<?php echo ER_Translate::get_lang(); ?>" <?php echo ER_Translate::current_text_direction(); ?>>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php ///TRANSLATORS: Site Meta Description ?>
  <meta name="description" content="<?php echo _gettext("Emergency Reporting is a Fire & EMS records management company based in Bellingham, WA USA."); ?>">
  <?php ///TRANSLATORS: Site Title ?>
  <title><?php echo _gettext("Emergency Reporting | Home"); ?></title>
  <link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
  <link href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/css/bootstrapvalidator.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="/js/html5shiv.js"></script>
    <script src="/js/respond.min.js"></script>
    <![endif]-->

    <link rel="shortcut icon" href="images/favicon.ico">
    <meta name="google-translate-customization" content="e1eda2fe40aa390e-ab84db2097fc03db-g82862cacbf2a2204-1d">
  </head>

  <body>
    <div class="container">
      <div class="site-bar row navbar">
        <div class="container-fluid">
          <div class="navbar-header">
            <a href="/global" class="navbar-brand">
              <?php ///TRANSLATORS: Logo alt text ?>
              <img src="images/ER-Logo-250.png" height="45" alt="<?php echo _gettext("Emergency Reporting"); ?>">
              <?php ///TRANSLATORS: Masthead tagline ?>
              <span class="tagline"><?php echo _gettext("{Powerful. Mobile. Secure. Global}"); ?></span>
            </a>
          </div>
          <ul class="nav navbar-nav navbar-right">
            <?php ///TRANSLATORS: Login Button ?>
            <li><a href="https://secure.emergencyreporting.com/login.php" class="login-btn btn btn-success"><?php echo _gettext("LOGIN"); ?></a></li>
            <li class="dropdown"><?php get_partial('language_select.php'); ?></li>
          </ul>
        </div>
      </div>
    </div>
