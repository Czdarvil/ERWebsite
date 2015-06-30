  <footer role="main" class="footercta">
    <div class="container" id="footercta">
      <?php ///TRANSLATORS: Sign up Title ?>
      <h2><?php echo _gettext("Sign up today for a free trial"); ?></h2>
      <!-- <p style="margin&#45;top: 30px;">(Please fill out all of the fields.)</p> -->
      <div class="row">
        <form class="form-horizontal" role="form" action="http://www2.emergencyreporting.com/l/15912/2014-07-07/2wnr6p" id="subscribeForm" method="POST">
          <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2">
            <div class="form-group">
              <?php ///TRANSLATORS: First Name input label ?>
              <label class="control-label" for="first_name"><?php echo _gettext("First Name"); ?></label>
              <?php ///TRANSLATORS: First Name input placeholder ?>
              <input class="form-control input-lg" name="first_name" type="text" id="first_name" placeholder="<?php echo _pgettext("first_name_placeholder", "Max"); ?>" required="required">
            </div>
            <div class="form-group">
              <?php ///TRANSLATORS: Last Name input label ?>
              <label class="control-label" for="last_name"><?php echo _gettext("Last Name"); ?></label>
              <?php ///TRANSLATORS: Last Name input placeholder ?>
              <input class="form-control input-lg" name="last_name" type="text" id="last_name" placeholder="<?php echo _pgettext("last_name_placeholder", "Mustermann"); ?>" required="required">
            </div>
            <div class="form-group">
              <?php ///TRANSLATORS: Email input label ?>
              <label class="control-label" for="email"><?php echo _gettext("Email"); ?></label>
              <?php ///TRANSLATORS: Email input placeholder ?>
              <input class="form-control input-lg" name="email" type="email" id="email" placeholder="<?php echo _pgettext("email_placeholder", "max.mustermann@ffberlin.de"); ?>" data-validate="validate(required, email)" required="required">
            </div>
            <div class="form-group">
              <?php ///TRANSLATORS: Phone input label ?>
              <label class="control-label" for="Phone"><?php echo _gettext("Phone"); ?></label>
              <?php ///TRANSLATORS: Phone input placeholder ?>
              <input class="form-control input-lg" type="phone" id="phone" name="phone" placeholder="<?php echo _pgettext("phone_placeholder", "optional"); ?>">
            </div>
            <div class="form-group">
              <?php ///TRANSLATORS: Country input label ?>
              <label class="control-label" for="country"><?php echo _gettext("Country"); ?></label>
              <?php ///TRANSLATORS: Country input placehlder ?>
              <input class="form-control input-lg" name="country" type="text" id="country" placeholder="<?php echo _pgettext("country_placeholder", "Germany"); ?>" required="required">
            </div>
            <div class="form-group">
              <?php ///TRANSLATORS: Department Name input label ?>
              <label class="control-label" for="department_name"><?php echo _gettext("Department Name"); ?></label>
              <?php ///TRANSLATORS: Department Name input placeholder ?>
              <input class="form-control input-lg" name="department_name" type="text" id="department" placeholder="<?php echo _pgettext("department_name_placeholder","FF Berlin"); ?>" data-validate="validate(required, email)" required="required">
            </div>
            <div class="form-group">
              <input type="hidden" name="Language_Viewed" value="<?php echo get_lang(); ?>">
              <?php ///TRANSLATORS: Language Preference selection label ?>
              <label for="language-preference"><?php echo _gettext("Language Preference"); ?></label>
              <select id="language-preference" name="Language_Preference" class="form-control input-lg">
                <option data-iso-val="en" value="English (en)">English</option>
                <option data-iso-val="de" value="German (de)">Deutsch</option>
                <option data-iso-val="es" value="Spanish (es)">Español</option>
                <option data-iso-val="fr" value="French (fr)">Français</option>
                <option data-iso-val="it" value="Italian (it)">Italiano</option>
                <option data-iso-val="nl" value="Dutch (nl)">Nederlands</option>
                <option data-iso-val="pl" value="Polish (pl)">polski</option>
                <option data-iso-val="pt" value="Portuguese (pt)">Português</option>
                <option data-iso-val="tr" value="Turkish (tr)">Türkçe</option>
                <option data-iso-val="ru" value="Russian (ru)">Русский</option>
                <option data-iso-val="ar" value="Arabic (ar)">العربية</option>
                <option data-iso-val="th" value="Thai (th)">ไทย</option>
                <option data-iso-val="ko" value="Korean (ko)">한국어</option>
                <option data-iso-val="ja" value="Japanese (ja)">日本語</option>
                <option data-iso-val="zh-s" value="Simplified Chinese (zh-s)">简体中文</option>
                <option data-iso-val="zh-t" value="Traditional Chinese (zh-t)">繁體中文</option>

                <option value="" disabled="disabled"></option>
                <option value="" disabled="disabled">---- All languages ----</option>

                <option data-iso-val="af" value="Afrikaans (af)">Afrikaans</option>
                <option data-iso-val="ak" value="Akan (ak)">Akan</option>
                <option data-iso-val="ay" value="Aymara (ay)">Aymara</option>
                <option data-iso-val="az" value="Azerbaijani (az)">azərbaycan</option>
                <option data-iso-val="id" value="Indonesian (id)">Bahasa Indonesia</option>
                <option data-iso-val="ms" value="Malay (ms)">Bahasa Melayu</option>
                <option data-iso-val="bh" value="Bihari (bh)">Bihari</option>
                <option data-iso-val="bs" value="Bosnian (bs)">bosanski</option>
                <option data-iso-val="br" value="Breton (br)">brezhoneg</option>
                <option data-iso-val="ca" value="Catalan (ca)">català</option>
                <option data-iso-val="cs" value="Czech (cs)">Čeština</option>
                <option data-iso-val="sn" value="Shona (sn)">chiShona</option>
                <option data-iso-val="co" value="Corsican (co)">Corsican</option>
                <option data-iso-val="cy" value="Welsh (cy)">Cymraeg</option>
                <option data-iso-val="da" value="Danish (da)">Dansk</option>
                <option data-iso-val="de" value="German (de)">Deutsch</option>
                <option data-iso-val="yo" value="Yoruba (yo)">Èdè Yorùbá</option>
                <option data-iso-val="et" value="Estonian (et)">eesti</option>
                <option data-iso-val="es" value="Spanish (es)">Español</option>
                <option data-iso-val="eo" value="Esperanto (eo)">esperanto</option>
                <option data-iso-val="eu" value="Basque (eu)">euskara</option>
                <option data-iso-val="ee" value="Ewe (ee)">eʋegbe</option>
                <option data-iso-val="fil" value="Filipino (fil)">Filipino</option>
                <option data-iso-val="fo" value="Faroese (fo)">føroyskt</option>
                <option data-iso-val="fr" value="French (fr)">Français</option>
                <option data-iso-val="ga" value="Irish (ga)">Gaeilge</option>
                <option data-iso-val="gd" value="Scottish Gaelic (gd)">Gàidhlig</option>
                <option data-iso-val="gl" value="Galician (gl)">galego</option>
                <option data-iso-val="gn" value="Guaraní (gn)">Guarani</option>
                <option data-iso-val="ht" value="Haitian (ht)">Haitian</option>
                <option data-iso-val="ha" value="Hausa (ha)">Hausa</option>
                <option data-iso-val="hr" value="Croatian (hr)">Hrvatski</option>
                <option data-iso-val="ig" value="Igbo (ig)">Igbo</option>
                <option data-iso-val="rn" value="Kirundi (rn)">Ikirundi</option>
                <option data-iso-val="ia" value="Interlingua (ia)">Interlingua</option>
                <option data-iso-val="zu" value="Zulu (zu)">isiZulu</option>
                <option data-iso-val="is" value="Icelandic (is)">íslenska</option>
                <option data-iso-val="it" value="Italian (it)">Italiano</option>
                <option data-iso-val="jv" value="Javanese (jv)">Javanese</option>
                <option data-iso-val="rw" value="Kinyarwanda (rw)">Kinyarwanda</option>
                <option data-iso-val="sw" value="Swahili (sw)">Kiswahili</option>
                <option data-iso-val="kg" value="Kongo (kg)">Kongo</option>
                <option data-iso-val="ku" value="Kurdish (ku)">Kurdish</option>
                <option data-iso-val="la" value="Latin (la)">Latin</option>
                <option data-iso-val="lv" value="Latvian (lv)">latviešu</option>
                <option data-iso-val="to" value="Tonga (to)">lea fakatonga</option>
                <option data-iso-val="lt" value="Lithuanian (lt)">lietuvių</option>
                <option data-iso-val="ln" value="Lingala (ln)">lingála</option>
                <option data-iso-val="lg" value="Ganda (lg)">Luganda</option>
                <option data-iso-val="hu" value="Hungarian (hu)">magyar</option>
                <option data-iso-val="mg" value="Malagasy (mg)">Malagasy</option>
                <option data-iso-val="mt" value="Maltese (mt)">Malti</option>
                <option data-iso-val="mi" value="Māori (mi)">Maori</option>
                <option data-iso-val="nl" value="Dutch (nl)">Nederlands</option>
                <option data-iso-val="no" value="Norwegian (no)">norsk</option>
                <option data-iso-val="ny" value="Chichewa (ny)">Nyanja</option>
                <option data-iso-val="nn" value="Norwegian Nynorsk (nn)">nynorsk</option>
                <option data-iso-val="oc" value="Occitan (oc)">Occitan</option>
                <option data-iso-val="uz" value="Uzbek (uz)">oʻzbekcha</option>
                <option data-iso-val="om" value="Oromo (om)">Oromoo</option>
                <option data-iso-val="pl" value="Polish (pl)">polski</option>
                <option data-iso-val="pt" value="Portuguese (pt)">Português</option>
                <option data-iso-val="ro" value="Romanian (ro)">română</option>
                <option data-iso-val="rm" value="Romansh (rm)">rumantsch</option>
                <option data-iso-val="qu" value="Quechua (qu)">Runasimi</option>
                <option data-iso-val="sa" value="Sanskrit (sa)">Sanskrit</option>
                <option data-iso-val="sq" value="Albanian (sq)">shqip</option>
                <option data-iso-val="sd" value="Sindhi (sd)">Sindhi</option>
                <option data-iso-val="sk" value="Slovak (sk)">Slovenčina</option>
                <option data-iso-val="sl" value="Slovene (sl)">slovenščina</option>
                <option data-iso-val="so" value="Somali (so)">Soomaali</option>
                <option data-iso-val="st" value="Southern Sotho (st)">Southern Sotho</option>
                <option data-iso-val="su" value="Sundanese (su)">Sundanese</option>
                <option data-iso-val="fi" value="Finnish (fi)">Suomi</option>
                <option data-iso-val="sv" value="Swedish (sv)">Svenska</option>
                <option data-iso-val="tg" value="Tajik (tg)">Tajik</option>
                <option data-iso-val="tt" value="Tatar (tt)">Tatar</option>
                <option data-iso-val="vi" value="Vietnamese (vi)">Tiếng Việt</option>
                <option data-iso-val="tn" value="Tswana (tn)">Tswana</option>
                <option data-iso-val="tr" value="Turkish (tr)">Türkçe</option>
                <option data-iso-val="tk" value="Turkmen (tk)">Turkmen</option>
                <option data-iso-val="fy" value="Western Frisian (fy)">West-Frysk</option>
                <option data-iso-val="wo" value="Wolof (wo)">Wolof</option>
                <option data-iso-val="xh" value="Xhosa (xh)">Xhosa</option>
                <option data-iso-val="el" value="Greek (el)">Ελληνικά</option>
                <option data-iso-val="be" value="Belarusian (be)">беларуская</option>
                <option data-iso-val="bg" value="Bulgarian (bg)">български</option>
                <option data-iso-val="ky" value="Kyrgyz (ky)">кыргызча</option>
                <option data-iso-val="kk" value="Kazakh (kk)">қазақ тілі</option>
                <option data-iso-val="mk" value="Macedonian (mk)">македонски</option>
                <option data-iso-val="mn" value="Mongolian (mn)">монгол</option>
                <option data-iso-val="ru" value="Russian (ru)">Русский</option>
                <option data-iso-val="sr" value="Serbian (sr)">српски</option>
                <option data-iso-val="uk" value="Ukrainian (uk)">Українська</option>
                <option data-iso-val="ka" value="Georgian (ka)">ქართული</option>
                <option data-iso-val="hy" value="Armenian (hy)">հայերեն</option>
                <option data-iso-val="yi" value="Yiddish (yi)">ייִדיש</option>
                <option data-iso-val="he" value="Hebrew (he)">עברית</option>
                <option data-iso-val="ug" value="Uyghur (ug)">ئۇيغۇرچە</option>
                <option data-iso-val="ur" value="Urdu (ur)">اردو</option>
                <option data-iso-val="ar" value="Arabic (ar)">العربية</option>
                <option data-iso-val="ps" value="Pashto (ps)">پښتو</option>
                <option data-iso-val="fa" value="Persian (fa)">فارسی</option>
                <option data-iso-val="ti" value="Tigrinya (ti)">ትግርኛ</option>
                <option data-iso-val="am" value="Amharic (am)">አማርኛ</option>
                <option data-iso-val="ne" value="Nepali (ne)">नेपाली</option>
                <option data-iso-val="mr" value="Marathi (mr)">मराठी</option>
                <option data-iso-val="hi" value="Hindi (hi)">हिन्दी</option>
                <option data-iso-val="bn" value="Bengali (bn)">বাংলা</option>
                <option data-iso-val="pa" value="Panjabi (pa)">ਪੰਜਾਬੀ</option>
                <option data-iso-val="gu" value="Gujarati (gu)">ગુજરાતી</option>
                <option data-iso-val="or" value="Oriya (or)">ଓଡ଼ିଆ</option>
                <option data-iso-val="ta" value="Tamil (ta)">தமிழ்</option>
                <option data-iso-val="te" value="Telugu (te)">తెలుగు</option>
                <option data-iso-val="kn" value="Kannada (kn)">ಕನ್ನಡ</option>
                <option data-iso-val="ml" value="Malayalam (ml)">മലയാളം</option>
                <option data-iso-val="si" value="Sinhala (si)">සිංහල</option>
                <option data-iso-val="th" value="Thai (th)">ไทย</option>
                <option data-iso-val="lo" value="Lao (lo)">ລາວ</option>
                <option data-iso-val="my" value="Burmese (my)">ဗမာ</option>
                <option data-iso-val="km" value="Khmer (km)">ខ្មែរ</option>
                <option data-iso-val="ko" value="Korean (ko)">한국어</option>
                <option data-iso-val="ja" value="Japanese (ja)">日本語</option>
                <option data-iso-val="zh-s" value="Simplified Chinese (zh-s)">简体中文</option>
                <option data-iso-val="zh-t" value="Traditional Chinese (zh-t)">繁體中文</option>
            </select>
            </div>
            <?php ///TRANSLATORS: Sign up submit button text ?>
            <button type="submit" class="btn btn-success btn-lg"><?php echo _pgettext("sign_up_form_submit_button", "GET FREE TRIAL"); ?></button>
          </div>
          <div style="position:absolute; left:-9999px; top: -9999px;">
            <?php ///TRANSLATORS: Comment field label ?>
            <label for="pardo echot_xtra_field"><?php echo _gettext("Comments"); ?></label>
            <input type="text" id="pardo echot_xtra_field" name="pardo echot_xtra_field">
          </div>
        </form>
        <span id="result" class="alertMsg"></span>
      </div>
    </div><!--/container -->
  </footer><!--/main -->
<script>
  var validation_fields = {
      first_name: {
        validators: {
          notEmpty: {
            <?php ///TRANSLATORS: Form validation, required field message ?>
            message: <?php echo json_encode(_gettext("First name is required.")); ?>
          }
        }
      },
      last_name: {
        validators: {
          notEmpty: {
            <?php ///TRANSLATORS: Form validation, required field message ?>
            message: <?php echo json_encode(_gettext("Last name is required.")); ?>
          }
        }
      },
      country: {
        validators: {
          notEmpty: {
            <?php ///TRANSLATORS: Form validation, required field message ?>
            message: <?php echo json_encode(_gettext("Country is required.")); ?>
          }
        }
      },
      department_name: {
        validators: {
          notEmpty: {
            <?php ///TRANSLATORS: Form validation, required field message ?>
            message: <?php echo json_encode(_gettext("Department name is required.")); ?>
          }
        }
      },
      email: {
        validators: {
          notEmpty: {
            <?php ///TRANSLATORS: Form validation, required field message ?>
            message: <?php echo json_encode(_gettext("Email is required.")); ?>
          },
          emailAddress: {
            <?php ///TRANSLATORS: Form validation, invalid field message ?>
            message: <?php echo json_encode(_gettext("Not a valid email address.")); ?>
          }
        }
      }
    };
</script>
