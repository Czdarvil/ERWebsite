<?php
require_once ROOT_DIR . "/lib/php-gettext/gettext.inc";

class ER_Translate {
  const DEFAULT_LOCALE = 'en';

  public static $supported_locales = array(
    'de' => 'Deutsch',
    'en' => 'English',
    'es' => 'Español',
    'fr' => 'Français',
    'it' => 'Italiano',
    'ru' => 'Pусский'
  );
  public static $rtl = array();
  public static $encoding = 'UTF-8';

  private static $user_accepted_languages;
  private static $user_languages;
  private static $user_lang;
  private static $user_language;
  private static $lang;
  private static $previous_lang;
  private static $previous_language_reader;
  private static $previous_text_domain_bound;
  public static $current_locale;

  public static function init(){
    session_start();

    self::$user_accepted_languages = isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) && !empty($_SERVER['HTTP_ACCEPT_LANGUAGE']) ? $_SERVER['HTTP_ACCEPT_LANGUAGE'] : false;
    if (self::$user_accepted_languages) {
      self::$user_languages = explode(',', self::$user_accepted_languages);
      self::$user_lang      = substr(self::$user_accepted_languages, 0, 2);
      self::$user_language  = str_replace( '-', '_', self::$user_languages[0] );
    } else {
      self::$user_language   = self::DEFAULT_LOCALE;
    }

    // first visit no previous language
    if ( !isset( $_SESSION['previous_lang'] ) ) {
      self::$previous_lang = $_SESSION['previous_lang'] = self::DEFAULT_LOCALE;
    } else {
      self::$previous_lang = $_SESSION['previous_lang'];
    }


    $valid_language = self::DEFAULT_LOCALE;
    if (isset($_GET['lang']) && self::is_valid_language($_GET['lang'])) {
      $valid_language = $_GET['lang'];
    } else if (isset($_SESSION['lang']) && self::is_valid_language($_SESSION['lang'])) {
      $valid_language = $_SESSION['lang'];
    } else if (self::is_valid_language(self::$user_language)) {
      $valid_language = self::$user_language;
    }

    self::change_language($valid_language);
    self::start_localization();
  }

  public static function is_valid_language($lang = null){
    if (!isset($lang)) {
      return false;
    }
    if (isset(self::$supported_locales[$lang])) {
      return true;
    }

    return false;
  }

  private static function change_language($lang) {
    if (!self::is_valid_language($lang)) {
      return;
    }

    // first time selecting a language
    if (!isset( $_SESSION['lang'] ) ) {
      self::$current_locale = $_SESSION['lang'] = $lang;
    }

    // different language selected than current
    self::$previous_lang = $_SESSION['previous_lang'] = $_SESSION['lang'];
    self::$current_locale = $_SESSION['lang'] = $lang;

  }

  public static function get_lang(){
    return self::$lang;
  }

  public static function current_text_direction(){
    if ( in_array( self::$current_locale, self::$rtl ) ) {
      return 'dir="rtl"';
    }

    return 'dir="ltr"';
  }

  private static function start_localization(){
    $domain = self::$current_locale;

    _setlocale( LC_MESSAGES, self::$current_locale );

    _bindtextdomain( $domain, ROOT_DIR . '/locale' );
    _bind_textdomain_codeset( $domain, self::$encoding );
    _textdomain( $domain );

    self::$lang = substr(self::$current_locale, 0, 2);
  }

  public static function get_previous_lang($text){
    if ($_SESSION['lang'] == $_SESSION['previous_lang']) {
      return $text;
    }

    $previous = _dgettext(self::$previous_lang, $text);

    return $previous;
  }
}

ER_Translate::init();

function get_lang(){
  return ER_Translate::get_lang();
}
function the_language_selector() {
  ER_Translate::the_language_selector();
}
