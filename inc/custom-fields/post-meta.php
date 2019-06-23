<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_post_theme_options' );
function crb_post_theme_options() {
  Container::make( 'post_meta', 'More' )
    ->where( 'post_type', '=', 'clients' )
    ->add_fields( array(
      Field::make( 'image', 'crb_client_icon', 'Иконка' )->set_value_type( 'url'),
  ) );
  Container::make( 'post_meta', 'More' )
    ->where( 'post_type', '=', 'uslugi' )
    ->add_fields( array(
      Field::make( 'image', 'crb_uslugi_icon', 'Иконка' )->set_value_type( 'url'),
      Field::make( 'checkbox', 'crb_uslugi_proect', 'Проектирование' )->set_option_value('no'),
      Field::make( 'checkbox', 'crb_uslugi_podryad', 'Подрядные работы' )->set_option_value('no'),
  ) );
}

?>