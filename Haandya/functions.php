<?php
function Haandya_script_enqueue(){
  wp_enqueue_style('customcss1','/wp-content/themes/Haandya/css/jquery.pagepiling.css');
  wp_enqueue_style('customcss2','/wp-content/themes/Haandya/css/main.css');
  wp_enqueue_style('customcss3','/wp-content/themes/Haandya/css/animate.css');

  wp_enqueue_script('customjs1','/wp-content/themes/Haandya/js/Haandya.js',array(),'1.0.0',true);

  wp_enqueue_script('customjs2','/wp-content/themes/Haandya/js/jquery.fittext.js',array(),'1.0.0',true);
  wp_enqueue_script('customjs3','/wp-content/themes/Haandya/js/jquery.lettering.js',array(),'1.0.0',true);
  wp_enqueue_script('customjs4','/wp-content/themes/Haandya/js/jquery.textillate.js',array(),'1.0.0',true);

}
add_action('wp_enqueue_scripts','Haandya_script_enqueue');
?>
