<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
  Container::make( 'theme_options', 'Options' )
    ->add_tab( __('Главная страница'), array(
        Field::make( 'separator', 'crb_separator_mainblock', 'Основной блок' ),
        Field::make( 'image', 'crb_mainblock_photo', 'Картинка (на фон) для основного блока' )->set_value_type( 'url'),
        Field::make( 'textarea', 'crb_mainblock_text', 'Текст для основного блока' ),
        Field::make( 'separator', 'crb_separator_uslugi', 'Что мы делаем? Услуги' ),
        Field::make( 'textarea', 'crb_uslugi_title', 'Основной текст для блока' ),
        Field::make( 'text', 'crb_uslugi_description', 'Дополнительный текст для блока' ),
        Field::make( 'image', 'crb_uslugi_icon_one', 'Иконка для УСЛУГИ №1' )->set_value_type( 'url'),
        Field::make( 'text', 'crb_uslugi_text_one', 'Услуга #1' ),
        Field::make( 'image', 'crb_uslugi_icon_two', 'Иконка для УСЛУГИ №2' )->set_value_type( 'url'),
        Field::make( 'text', 'crb_uslugi_text_two', 'Услуга #2' ),
        Field::make( 'separator', 'crb_separator_abousus', 'Блок О НАС' ),
        Field::make( 'image', 'crb_aboutus_photo', 'Картинка (на фон) для блока' )->set_value_type( 'url'),
        Field::make( 'textarea', 'crb_aboutus_title', 'Заголовок блока' ),
        Field::make( 'rich_text', 'crb_aboutus_text', 'Наш подход' ),
        Field::make( 'separator', 'crb_separator_energo', 'Энергоэффективные мероприятия и модернизация' ),
        Field::make( 'image', 'crb_energo_icon_one', 'Иконка для УСЛУГИ №1' )->set_value_type( 'url'),
        Field::make( 'text', 'crb_energo_text_one', 'Услуга #1' ),
        Field::make( 'image', 'crb_energo_icon_two', 'Иконка для УСЛУГИ №2' )->set_value_type( 'url'),
        Field::make( 'text', 'crb_energo_text_two', 'Услуга #2' ),
    ) )
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