<ul class="language-list">
  <?php
    $cur_lang = ER_Translate::$current_locale;
    foreach(ER_Translate::$supported_locales as $lang => $name) {
      echo "<li>";
        if ($lang == $cur_lang) {
          echo "<span class=\"current-language\">$name</span>";
        }else {
          echo "<a href=\"?lang=$lang\">$name</a>";
        }
      echo "</li>\n";
    }
  ?>
</ul>
