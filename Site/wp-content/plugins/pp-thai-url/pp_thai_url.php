<?php
/*
Plugin Name: PP Auto Thai URL
Plugin URI: http://www.preukson.com/
Description: เป็นปลั๊กอินจะเปลี่ยน url ภาษาไทยให้ยาว ไม่ถูกตัดสั้น จนกุดครับ จะช่วยให้ SEO ดีขึ้นด้วยนะครับ
Author: Preukson
Version: 1.0.2
Author URI: http://www.preukson.com
*/
register_activation_hook(__FILE__, 'pp_full_url_activation');
function pp_full_url_activation() {
	pp_set_db();
	
}

$thai_url = WP_CONTENT_URL.'/plugins/'.plugin_basename(dirname(__FILE__));

function pp_set_db(){  //ok
	global $wpdb;
	/* check db version*/
      $t=mysql_query("select version() as ve");
      echo mysql_error();
      $r=mysql_fetch_object($t);
      define('MYSQL_VERSION', $r->ve); 
      $min_msql = '5.0.15';
		
	  if(version_compare(MYSQL_VERSION, $min_msql) >= 0){
			$max_char=2000;
	  }else{
			$max_char=255;  
	  }
	 global $blog_id; //จะได้บล๊อกไอดี ณ ตอนนั้น
	 
	 if (!empty ($wpdb->charset))
		$charset_charset = " CHARACTER SET {$wpdb->charset} ";
	if (!empty ($wpdb->collate))
		$charset_collate = " COLLATE {$wpdb->collate} ";
		
	 if( function_exists('is_multisite') && is_multisite()==1 ){
		 	// Get all blog ids
			$blogids = $wpdb->get_col($wpdb->prepare("SELECT blog_id FROM $wpdb->blogs"));
			$i=1;
			foreach ($blogids as $blog_id) {
				if($blog_id==1){
					$table_post[$i]=$wpdb->posts;
				}else{
					$table_post[$i]=$wpdb->prefix.$blog_id.'_posts';
				}
				$i++;
			}

		 	
		 	foreach($table_post AS $table){
				 $sql= "ALTER TABLE ".$table." CHANGE post_name post_name VARCHAR(".$max_char.") $charset_charset $charset_collate NOT NULL DEFAULT ''";
   				 $results = $wpdb->query($sql);
			}//for each
			
	 }else{ //else multisite
		 $table_post=$wpdb->posts;
		 $sql= "ALTER TABLE ".$table_post." CHANGE post_name post_name VARCHAR(".$max_char.") $charset_charset $charset_collate NOT NULL DEFAULT ''";
   		 $results = $wpdb->query($sql);
	 }// if multisite
	 
	 pp_auto_update_postname('new');
	
}

remove_filter( 'sanitize_title', 'sanitize_title_with_dashes');
add_filter( 'sanitize_title', 'pp_sanitize_title_with_dash' );
function pp_sanitize_title_with_dash($title) {
	$title = strip_tags($title);
	// Preserve escaped octets.
	$title = preg_replace('|%([a-fA-F0-9][a-fA-F0-9])|', '---$1---', $title);
	// Remove percent signs that are not part of an octet.
	$title = str_replace('%', '', $title);
	// Restore octets.
	$title = preg_replace('|---([a-fA-F0-9][a-fA-F0-9])---|', '%$1', $title);

	if (seems_utf8($title)) {
		if (function_exists('mb_strtolower')) {
			$title = mb_strtolower($title, 'UTF-8');
		}
		$title = utf8_uri_encode($title, 1900);
	}

	$title = strtolower($title);
	$title = preg_replace('/&.+?;/', '', $title); // kill entities
	$title = str_replace('.', '-', $title);
	$title = preg_replace('/[^%a-z0-9 _-]/', '', $title);
	$title = preg_replace('/\s+/', '-', $title);
	$title = preg_replace('|-+|', '-', $title);
	$title = trim($title, '-');

	return $title;
}
function pp_sanitize_title_with_dash_old($title) {
	$title = strip_tags($title);
	// Preserve escaped octets.
	$title = preg_replace('|%([a-fA-F0-9][a-fA-F0-9])|', '---$1---', $title);
	// Remove percent signs that are not part of an octet.
	$title = str_replace('%', '', $title);
	// Restore octets.
	$title = preg_replace('|---([a-fA-F0-9][a-fA-F0-9])---|', '%$1', $title);

	if (seems_utf8($title)) {
		if (function_exists('mb_strtolower')) {
			$title = mb_strtolower($title, 'UTF-8');
		}
		$title = utf8_uri_encode($title, 200);
	}

	$title = strtolower($title);
	$title = preg_replace('/&.+?;/', '', $title); // kill entities
	$title = str_replace('.', '-', $title);
	$title = preg_replace('/[^%a-z0-9 _-]/', '', $title);
	$title = preg_replace('/\s+/', '-', $title);
	$title = preg_replace('|-+|', '-', $title);
	$title = trim($title, '-');

	return $title;
}

	

/*--------- Auto Update Post name ----------*/
 function pp_auto_update_postname($type){
		global $wpdb;
	if( function_exists('is_multisite') && is_multisite()==1 ){
		$blogids = $wpdb->get_col($wpdb->prepare("SELECT blog_id FROM $wpdb->blogs"));
		$i=1;
		foreach ($blogids as $blog_id) {
			if($blog_id==1||$blog_id==""||$blog_id==0){
				$table_post[$i]=$wpdb->posts;
			}else{
				$table_post[$i]=$wpdb->prefix.$blog_id.'_posts';
			}
			$i++;
		}
		foreach($table_post AS $table){
			$posts = $wpdb->get_results("SELECT ID, post_title,post_name FROM ".$table." WHERE post_status = 'publish' OR post_status = 'draft' OR post_status = 'pending' OR post_status = 'private' OR post_status = 'future' OR post_status = 'trash'"	);
			 	foreach ( $posts as $post ) {
					if($type=='new'){
						$new_postname=pp_sanitize_title_with_dash($post->post_title);
					}else{
						$new_postname=pp_sanitize_title_with_dash_old($post->post_title);
					}
					$sql2= "UPDATE ".$table." SET post_name ='$new_postname' WHERE ID ='$post->ID'";
					$results2 = $wpdb->query($sql2);
				}//foreach
		}//foreach all blog
	}else{
		$table=$wpdb->posts;
		$posts = $wpdb->get_results("SELECT ID, post_title,post_name FROM ".$table." WHERE post_status = 'publish' OR post_status = 'draft' OR post_status = 'pending' OR post_status = 'private' OR post_status = 'future' OR post_status = 'trash'"	);
			 	foreach ( $posts as $post ) {
					if($type=='new'){
						$new_postname=pp_sanitize_title_with_dash($post->post_title);
					}else{
						$new_postname=pp_sanitize_title_with_dash_old($post->post_title);
					}
					$sql2= "UPDATE ".$table." SET post_name ='$new_postname' WHERE ID ='$post->ID'";
					$results2 = $wpdb->query($sql2);
				}//foreach
	}
		
 }//function


register_deactivation_hook(__FILE__, 'pp_full_url_deactivation');
function pp_full_url_deactivation() {
	global $wpdb;
	remove_filter( 'sanitize_title', 'pp_sanitize_title_with_dash');
	add_filter( 'sanitize_title','pp_sanitize_title_with_dash_old');
	pp_auto_update_postname('old');
	
	
	if (!empty ($wpdb->charset))
		$charset_charset = " CHARACTER SET {$wpdb->charset} ";
	if (!empty ($wpdb->collate))
		$charset_collate = " COLLATE {$wpdb->collate} ";
		
	 if( function_exists('is_multisite') && is_multisite()==1 ){
		 	// Get all blog ids
			$blogids = $wpdb->get_col($wpdb->prepare("SELECT blog_id FROM $wpdb->blogs"));
			$i=1;
			foreach ($blogids as $blog_id) {
				if($blog_id==1){
					$table_post[$i]=$wpdb->posts;
				}else{
					$table_post[$i]=$wpdb->prefix.$blog_id.'_posts';
				}
				$i++;
			}

		 	
		 	foreach($table_post AS $table){
				 $sql= "ALTER TABLE ".$table." CHANGE post_name post_name VARCHAR(200) $charset_charset $charset_collate NOT NULL DEFAULT ''";
   				 $results = $wpdb->query($sql);
			}//for each
			
	 }else{ //else multisite
		 $table_post=$wpdb->posts;
		 $sql= "ALTER TABLE ".$table_post." CHANGE post_name post_name VARCHAR(200) $charset_charset $charset_collate NOT NULL DEFAULT ''";
   		 $results = $wpdb->query($sql);
	 }// if multisite
}

function modify_footer_admin () {
	$pp_url=get_bloginfo('url');
  echo 'Thank you for creating with <a href="http://wordpress.org/">WordPress</a>. • 
  <a href="http://codex.wordpress.org/">Documentation</a> • 
  <a href="'.$pp_url.'/wp-admin/freedoms.php">Freedoms</a> • 
  <a href="http://wordpress.org/support/forum/4">Feedback</a> • 
  <a href="'.$pp_url.'/wp-admin/credits.php">Credits</a> • ';
  echo '<a href="http://www.preukson.com">PP Auto Thai URL</a>.';
}

add_filter('admin_footer_text', 'modify_footer_admin');
?>