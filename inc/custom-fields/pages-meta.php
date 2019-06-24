<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_page_theme_options' );
function crb_page_theme_options() {
  Container::make( 'post_meta', 'More' )
    ->where( 'post_type', '=', 'page' )
    ->where( 'post_template', '=', 'tpl_main.php' )
    ->add_fields( array(
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
    ) );
  Container::make( 'post_meta', 'More' )
    ->where( 'post_type', '=', 'page' )
    ->where( 'post_template', '=', 'tpl_energoaudit.php' )
    ->add_fields( array(
        Field::make( 'image', 'crb_energoaudit_icon', 'Иконка для главной страницы' )->set_value_type( 'url'),
        Field::make( 'separator', 'crb_separator_energo_mainblock', 'Основной блок' ),
    	Field::make( 'text', 'crb_energoaudit_title', 'Заголовок' ),
        Field::make( 'textarea', 'crb_energoaudit_description', 'Небольшое описание' ),
    	Field::make( 'image', 'crb_energoaudit_icon_one', 'Иконка для УСЛУГИ №1' )->set_value_type( 'url'),
        Field::make( 'text', 'crb_energoaudit_text_one', 'Услуга #1' ),
        Field::make( 'image', 'crb_energoaudit_icon_two', 'Иконка для УСЛУГИ №2' )->set_value_type( 'url'),
        Field::make( 'text', 'crb_energoaudit_text_two', 'Услуга #2' ),
        Field::make( 'separator', 'crb_separator_energo_whyus', 'Почему мы?' ),
        Field::make( 'image', 'crb_energo_whyus_photo', 'Картинка для фона' )->set_value_type( 'url'),
        Field::make( 'text', 'crb_energo_whyus_title', 'Заголовок' ),
        Field::make( 'textarea', 'crb_energo_whyus_text', 'Текст (пункты)' ),
        Field::make( 'textarea', 'crb_energo_whyus_quote', 'Цитата' ),
        Field::make( 'separator', 'crb_separator_energo_build', 'Услуга №1' ),
        Field::make( 'textarea', 'crb_energo_build_description', 'Описание' ),
        Field::make( 'image', 'crb_energo_build_icon_one', 'Иконка для первого этапа' )->set_value_type( 'url'),
        Field::make( 'text', 'crb_energo_build_title_one', 'Заголовок первого этапа' ),
        Field::make( 'text', 'crb_energo_build_text_one', 'Описание первого этапа' ),
        Field::make( 'image', 'crb_energo_build_icon_two', 'Иконка для второго этапа' )->set_value_type( 'url'),
        Field::make( 'text', 'crb_energo_build_title_two', 'Заголовок второго этапа' ),
        Field::make( 'text', 'crb_energo_build_text_two', 'Описание второго этапа' ),
        Field::make( 'image', 'crb_energo_build_icon_three', 'Иконка для третьего этапа' )->set_value_type( 'url'),
        Field::make( 'text', 'crb_energo_build_title_three', 'Заголовок третьего этапа' ),
        Field::make( 'text', 'crb_energo_build_text_three', 'Описание третьего этапа' ),
        Field::make( 'image', 'crb_energo_build_icon_four', 'Иконка для четвертого этапа' )->set_value_type( 'url'),
        Field::make( 'text', 'crb_energo_build_title_four', 'Заголовок четвертого этапа' ),
        Field::make( 'text', 'crb_energo_build_text_four', 'Описание четвертого этапа' ),
        Field::make( 'separator', 'crb_separator_energo_teplo', 'Услуга №2' ),
        Field::make( 'image', 'crb_energo_teplo_bg', 'Фон для блока' )->set_value_type( 'url'),
        Field::make( 'text', 'crb_energo_teplo_desc', 'Короткое описание (перед пунктами)' ),
        Field::make( 'textarea', 'crb_energo_teplo_step_one', '
            Пункт 1' ),
        Field::make( 'textarea', 'crb_energo_teplo_step_two', 'Пункт 2' ),
        Field::make( 'textarea', 'crb_energo_teplo_step_three', 'Пункт 3' ),
        Field::make( 'textarea', 'crb_energo_teplo_step_four', 'Пункт 4' ),
    ) );
  Container::make( 'post_meta', 'More' )
    ->where( 'post_type', '=', 'page' )
    ->where( 'post_template', '=', 'tpl_contract.php' )
    ->add_fields( array(
        Field::make( 'image', 'crb_contract_icon', 'Иконка для главной страницы' )->set_value_type( 'url'),
        Field::make( 'separator', 'crb_separator_contract_main', 'Первый экран' ),
        Field::make( 'textarea', 'crb_contract_main_title', 'Заголовок' ),
        Field::make( 'textarea', 'crb_contract_main_description', 'Короткое описание' ),
        Field::make( 'textarea', 'crb_contract_main_text', 'Основной текст' ),
        Field::make( 'image', 'crb_contract_main_icon_one', 'Первая иконка' )->set_value_type( 'url'),
        Field::make( 'image', 'crb_contract_main_icon_two', 'Вторая иконка' )->set_value_type( 'url'),
        Field::make( 'image', 'crb_contract_main_icon_three', 'Третья иконка' )->set_value_type( 'url'),

        Field::make( 'separator', 'crb_separator_contract_second', 'Второй экран' ),
        Field::make( 'image', 'crb_contract_second_bg', 'Фон для блока' )->set_value_type( 'url'),
        Field::make( 'textarea', 'crb_contract_second_description', 'Короткое описание' ),
        Field::make( 'textarea', 'crb_contract_second_step_one_text', 'Шаг первый (ТЕКСТ)' ),
        Field::make( 'image', 'crb_contract_second_step_one_icon', 'Шаг первый (иконка)' )->set_value_type( 'url'),
        Field::make( 'textarea', 'crb_contract_second_step_two_text', 'Шаг второй (ТЕКСТ)' ),
        Field::make( 'image', 'crb_contract_second_step_two_icon', 'Шаг второй (иконка)' )->set_value_type( 'url'),
        Field::make( 'textarea', 'crb_contract_second_step_three_text', 'Шаг третий (ТЕКСТ)' ),
        Field::make( 'image', 'crb_contract_second_step_three_icon', 'Шаг третий (иконка)' )->set_value_type( 'url'),
        Field::make( 'textarea', 'crb_contract_second_notice_text', 'Заметка внизу' ),
        Field::make( 'image', 'crb_contract_second_notice_icon', 'Иконка для заметки внизу' )->set_value_type( 'url'),

        Field::make( 'separator', 'crb_separator_contract_how', 'Как это работает' ),
        Field::make( 'text', 'crb_contract_how_step_one_text', 'Шаг первый (ТЕКСТ)' ),
        Field::make( 'image', 'crb_contract_how_step_one_icon', 'Шаг первый (иконка)' )->set_value_type( 'url'),
        Field::make( 'text', 'crb_contract_how_step_two_text', 'Шаг второй (ТЕКСТ)' ),
        Field::make( 'image', 'crb_contract_how_step_two_icon', 'Шаг второй (иконка)' )->set_value_type( 'url'),
        Field::make( 'text', 'crb_contract_how_step_three_text', 'Шаг третий (ТЕКСТ)' ),
        Field::make( 'image', 'crb_contract_how_step_three_icon', 'Шаг третий (иконка)' )->set_value_type( 'url'),
        Field::make( 'text', 'crb_contract_how_step_four_text', 'Шаг четвертый (ТЕКСТ)' ),
        Field::make( 'image', 'crb_contract_how_step_four_icon', 'Шаг четвертый (иконка)' )->set_value_type( 'url'),

        Field::make( 'separator', 'crb_separator_contract_zakon', 'Законодательная база энергосервиса Украины' ),
        Field::make( 'image', 'crb_contract_zakon_bg', 'Фон для блока' )->set_value_type( 'url'),
        Field::make( 'textarea', 'crb_contract_zakon_one', 'Для Распорядителей бюджетных средств...' ),
        Field::make( 'textarea', 'crb_contract_zakon_two', 'Для других субъектов хозяйстования...' ),
    ) );
  Container::make( 'post_meta', 'More' )
    ->where( 'post_type', '=', 'page' )
    ->where( 'post_template', '=', 'tpl_vie.php' )
    ->add_fields( array(
      Field::make( 'image', 'crb_vie_icon', 'Иконка для главной страницы' )->set_value_type( 'url'),
      Field::make( 'separator', 'crb_separator_vie', 'Первый экран' ),
      Field::make( 'text', 'crb_vie_main_title', 'Заголовок' ),
      Field::make( 'textarea', 'crb_vie_main_description', 'Описание' ),
      Field::make( 'complex', 'crb_vie_instrum', 'Энергоэффективные инструменты' )
        ->add_fields( array(
            Field::make( 'image', 'crb_vie_instrum_photo', 'Фото' )->set_value_type( 'url'),
            Field::make( 'text', 'crb_vie_instrum_text', 'Заголовок' ),
        ) ),
      Field::make( 'separator', 'crb_separator_vie_solutions', 'Второй экран (РЕШЕНИЯ' ),
      Field::make( 'textarea', 'crb_vie_solutions_description', 'Описание' ),
      Field::make( 'complex', 'crb_vie_solutions', 'Решения' )
        ->add_fields( array(
            Field::make( 'image', 'crb_vie_solutions_photo', 'Фото' )->set_value_type( 'url'),
            Field::make( 'text', 'crb_vie_solutions_text', 'Заголовок' ),
        ) ),
    ) );
  Container::make( 'post_meta', 'More' )
    ->where( 'post_type', '=', 'page' )
    ->where( 'post_template', '=', 'tpl_presentations.php' )
    ->add_fields( array(
      Field::make( 'complex', 'crb_pres', 'Презентации' )
        ->add_fields( array(
            Field::make( 'text', 'crb_pres_text', 'Заголовок' ),
            Field::make( 'text', 'crb_pres_link', 'Ссылка на pdf' ),
        ) ),
    ) );
  Container::make( 'post_meta', 'More' )
    ->where( 'post_type', '=', 'page' )
    ->where( 'post_template', '=', 'tpl_proect.php' )
    ->add_fields( array(
      Field::make( 'image', 'crb_proect_icon', 'Иконка для главной страницы' )->set_value_type( 'url'),
      Field::make( 'textarea', 'crb_proect_description', 'Описание' ),
    ) );
  Container::make( 'post_meta', 'More' )
    ->where( 'post_type', '=', 'page' )
    ->where( 'post_template', '=', 'tpl_podryad.php' )
    ->add_fields( array(
      Field::make( 'image', 'crb_podryad_icon', 'Иконка для главной страницы' )->set_value_type( 'url'),
      Field::make( 'textarea', 'crb_podryad_description', 'Описание' ),
    ) );
}

?>