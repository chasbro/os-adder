<?php
/*
Plugin Name: OS-Adder
Description: This Plugin provides a class for the body-element that includes the used OS and the used language
Version: 0.1
Author: Lukas Kindermann
*/
?>
<?php
//setting javascript
wp_enqueue_script("jquery");
add_action('wp_head', 'insert_head_OSA');


function insert_head_OSA(){
    ?>
    <script type="text/javascript" src="<?php echo plugins_url( 'OS-Adder.js' , __FILE__ );?>"></script>

    <?php

}






?>