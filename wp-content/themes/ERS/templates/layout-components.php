<?php

while ( have_rows( 'components' ) ) {
    the_row();
    get_template_part('templates/components/acf-component', get_row_layout());

}
