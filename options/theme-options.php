<?php
/* Theme Options page: */

$main_tab = array(
  "name" => "main_options",
  "title" => __("Theme Options"),
  'sections' => array(
    'header' => array(
      'name' => 'main',
      'title' => __( '' ),
      'description' => __( '')
    ),
  ),
);
register_theme_option_tab($main_tab);

$mainoptions = array(
  "site_logo" => array(
    "tab" => "main_options",
    "name" => "site_logo",
    "title" => "Site Logo",
    "description" => __( "Upload logo to be used in header" ),
    "section" => "main",
    "id" => "site_logo",
    "type" => "image"
  ),
  "home_page_slider_image1" => array(
    "tab" => "main_options",
    "name" => "home_page_slider_image1",
    "title" => "Slider Image 1",
    "description" => __( "Upload slider image", "example" ),
    "section" => "main",
    "id" => "slider_image_1",
    "type" => "image"
  ),
  "home_page_slider_image1_link" => array(
    "tab" => "main_options",
    "name" => "home_page_slider_image1_link",
    "title" => "",
    "description" => __( "Enter slider image link", "example" ),
    "section" => "main",
    "id" => "slider_image_1_link",
    "type" => "text"
  ),
  "home_page_slider_image2" => array(
    "tab" => "main_options",
    "name" => "home_page_slider_image2",
    "title" => "Slider Image 2",
    "description" => __( "Upload slider image", "example" ),
    "section" => "main",
    "id" => "slider_image_2",
    "type" => "image"
  ),
  "home_page_slider_image2_link" => array(
    "tab" => "main_options",
    "name" => "home_page_slider_image2_link",
    "title" => "",
    "description" => __( "Enter slider image link", "example" ),
    "section" => "main",
    "id" => "slider_image_2_link",
    "type" => "text"
  ),
  "home_page_slider_image3" => array(
    "tab" => "main_options",
    "name" => "home_page_slider_image3",
    "title" => "Slider Image 3",
    "description" => __( "Upload slider image", "example" ),
    "section" => "main",
    "id" => "slider_image_3",
    "type" => "image"
  ),
  "home_page_slider_image3_link" => array(
    "tab" => "main_options",
    "name" => "home_page_slider_image3_link",
    "title" => "",
    "description" => __( "Enter slider image link", "example" ),
    "section" => "main",
    "id" => "slider_image_3_link",
    "type" => "text"
  ),
  "home_page_slider_image4" => array(
    "tab" => "main_options",
    "name" => "home_page_slider_image4",
    "title" => "Slider Image 4",
    "description" => __( "Upload slider image", "example" ),
    "section" => "main",
    "id" => "slider_image_4",
    "type" => "image"
  ),
  "home_page_slider_image4_link" => array(
    "tab" => "main_options",
    "name" => "home_page_slider_image4_link",
    "title" => "",
    "description" => __( "Enter slider image link", "example" ),
    "section" => "main",
    "id" => "slider_image_4_link",
    "type" => "text"
  ),
  "home_page_slider_image5" => array(
    "tab" => "main_options",
    "name" => "home_page_slider_image5",
    "title" => "Slider Image 5",
    "description" => __( "Upload slider image", "example" ),
    "section" => "main",
    "id" => "slider_image_5",
    "type" => "image"
  ),
  "home_page_slider_image5_link" => array(
    "tab" => "main_options",
    "name" => "home_page_slider_image5_link",
    "title" => "",
    "description" => __( "Enter slider image link", "example" ),
    "section" => "main",
    "id" => "slider_image_5_link",
    "type" => "text"
  ),
  "home_page_slider_image6" => array(
    "tab" => "main_options",
    "name" => "home_page_slider_image6",
    "title" => "Slider Image 6",
    "description" => __( "Upload slider image", "example" ),
    "section" => "main",
    "id" => "slider_image_6",
    "type" => "image"
  ),
  "home_page_slider_image6_link" => array(
    "tab" => "main_options",
    "name" => "home_page_slider_image6_link",
    "title" => "",
    "description" => __( "Enter slider image link", "example" ),
    "section" => "main",
    "id" => "slider_image_6_link",
    "type" => "text"
  ),
  "home_page_slider_image7" => array(
    "tab" => "main_options",
    "name" => "home_page_slider_image7",
    "title" => "Slider Image 7",
    "description" => __( "Upload slider image", "example" ),
    "section" => "main",
    "id" => "slider_image_7",
    "type" => "image"
  ),
  "home_page_slider_image7_link" => array(
    "tab" => "main_options",
    "name" => "home_page_slider_image7_link",
    "title" => "",
    "description" => __( "Enter slider image link", "example" ),
    "section" => "main",
    "id" => "slider_image_7_link",
    "type" => "text"
  ),
  "home_page_slider_image8" => array(
    "tab" => "main_options",
    "name" => "home_page_slider_image8",
    "title" => "Slider Image 8",
    "description" => __( "Upload slider image", "example" ),
    "section" => "main",
    "id" => "slider_image_8",
    "type" => "image"
  ),
  "home_page_slider_image8_link" => array(
    "tab" => "main_options",
    "name" => "home_page_slider_image8_link",
    "title" => "",
    "description" => __( "Enter slider image link", "example" ),
    "section" => "main",
    "id" => "slider_image_8_link",
    "type" => "text"
  ),
  "home_page_slider_image9" => array(
    "tab" => "main_options",
    "name" => "home_page_slider_image9",
    "title" => "Slider Image 9",
    "description" => __( "Upload slider image", "example" ),
    "section" => "main",
    "id" => "slider_image_9",
    "type" => "image"
  ),
  "home_page_slider_image9_link" => array(
    "tab" => "main_options",
    "name" => "home_page_slider_image9_link",
    "title" => "",
    "description" => __( "Enter slider image link", "example" ),
    "section" => "main",
    "id" => "slider_image_9_link",
    "type" => "text"
  ),
  "home_page_slider_image10" => array(
    "tab" => "main_options",
    "name" => "home_page_slider_image10",
    "title" => "Slider Image 10",
    "description" => __( "Upload slider image", "example" ),
    "section" => "main",
    "id" => "slider_image_10",
    "type" => "image"
  ),
  "home_page_slider_image10_link" => array(
    "tab" => "main_options",
    "name" => "home_page_slider_image10_link",
    "title" => "",
    "description" => __( "Enter slider image link", "example" ),
    "section" => "main",
    "id" => "slider_image_10_link",
    "type" => "text"
  ),
  "office_location" => array(
    "tab" => "main_options",
    "name" => "office_location",
    "title" => "Office Location",
    "description" => __( "Enter office location which will be used for displaying on Google Map for site." ),
    "section" => "main",
    "id" => "office_location",
    "type" => "text"
  )
);
register_theme_options($mainoptions);