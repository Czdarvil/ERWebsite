<?php
$openWrappers = 0;
$row_index = 0;
while ( have_rows( 'components' ) ) {
    the_row();
    get_template_part('templates/components/acf-component', get_row_layout());
    $row_index++;
}
if ($openWrappers > 0) {
  for ($i = $openWrappers; $i > 0 ; $i--) {
    get_template_part('templates/components/acf-component', 'closing_wrapper');
  }
}
