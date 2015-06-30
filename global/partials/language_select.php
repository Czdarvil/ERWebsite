<!-- <div class="dropdown"> -->
  <?php ///TRANSLATORS: Language Select Label ?>
  <a href="#" id="languageLabel" class="language-label dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-globe"></span> <span class="language"><?php echo _gettext("Language"); ?></span> <span class="caret"></span> </a>
  <ul class="language-options dropdown-menu" role="menu" aria-labeledby="languageLabel">
    <?php
      $cur_lang = ER_Translate::$current_locale;
      foreach(ER_Translate::$supported_locales as $lang => $name) {
        echo "<li>";
          if ($lang == $cur_lang) {
            echo "<a href=\"?lang=$lang\" class=\"current-language\">$name</a>";
          }else {
            echo "<a href=\"?lang=$lang\">$name</a>";
          }
        echo "</li>\n";
      }
    ?>
  </ul>
<!-- </div> -->
