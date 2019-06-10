<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
  Container::make( 'theme_options', 'Options' )
    ->add_tab( __('Контакты'), array(
        Field::make( 'complex', 'crb_contact_phones', 'Телефоны' )
            ->add_fields( array(
                Field::make( 'text', 'crb_contact_phone', 'Номер телефона' ),
        ) ),
        Field::make( 'complex', 'crb_contact_mails', 'Emails' )
            ->add_fields( array(
                Field::make( 'text', 'crb_contact_mail', 'Email' ),
        ) ),
        Field::make( 'textarea', 'crb_contact_address', 'Адрес' ),
        Field::make( 'textarea', 'crb_contact_map', 'Карта (Iframe)' ),
    ) )
    ->add_tab( __('Клиенты'), array(
        Field::make( 'complex', 'crb_clients', 'Клиенты' )
        ->add_fields( array(
            Field::make( 'image', 'crb_clients_icon', 'Иконка' )->set_value_type( 'url'),
            Field::make( 'text', 'crb_clients_title', 'Заголовок' ),
        ))
    ))
    ->add_tab( __('Факты'), array(
        Field::make( 'text', 'crb_facts_years', 'лет на рынке' )->set_attribute( 'type', 'number' ),
        Field::make( 'text', 'crb_facts_projects', 'завершенных проекта' )->set_attribute( 'type', 'number' ),
        Field::make( 'text', 'crb_facts_earn', 'заработали для клиентов' )->set_attribute( 'type', 'number' ),
        Field::make( 'textarea', 'crb_facts_text', 'Текст' ),
        Field::make( 'text', 'crb_facts_link', 'Ссылка на кнопке' ),
    ));
}

?>