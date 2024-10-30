<?php
/*
 * Plugin Name: Chronoforms
 * Description: Contact forms, payment forms, data lists, store or export data and much more.
 * Author: chronoengine.com
 * Author URI: http://www.chronoengine.com
 * Version: 7.0.9
 * Tested up to: 6.2
 * License: GPL3
 * License URI: http://www.gnu.org/licenses/gpl.html
 */

class Chronoforms{
	//function Chronoforms(){
	function __construct(){
		
		add_action('admin_menu', array($this, 'cf7_admin_menu'));
		
		if(!is_admin() OR (is_admin() AND isset($_GET['page']) AND $_GET['page'] == 'Chronoforms')){
			add_action('init', array($this, 'cf7_global')); //global initializing
			add_action('admin_init', array($this, 'cf7_admin')); //admin initializing
			add_shortcode('Chronoforms', array($this, 'cf7_getform'));
			add_shortcode('Chronoforms5', array($this, 'cf7_getform'));
			add_action('template_redirect', array($this, 'cf7_front'));
		}
		
		if(!is_admin()){
			if(!empty($_GET['page']) AND $_GET['page'] == 'Chronoforms' AND !empty($_GET['chronoform'])){
				add_filter('the_content', array($this, 'cf7_preview_post_content'));
				add_filter('posts_results', array($this, 'cf7_preview_trim_posts'));
			}
			if(!empty($_GET['tvout']) AND $_GET['tvout'] == 'ajax'){
				add_filter('parse_request', array($this, 'cf7_front_ajax'));
			}
		}
	}
	
	function cf7_admin_menu(){
		add_menu_page('Chronoforms', 'Chronoforms', 'administrator', 'Chronoforms', array($this, 'cf7_admin_output'));
	}
	
	function cf7_global(){
		if(!is_admin()){
			defined("GCORE_SITE") or define("GCORE_SITE", "front");
		}else{
			defined("GCORE_SITE") or define("GCORE_SITE", "admin");
		}
		
		// require_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'chronog3'.DIRECTORY_SEPARATOR.'wordpress_chrono_g3.php');
		require_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'chronog3'.DIRECTORY_SEPARATOR.'g3_loader.php');
		
		if(!class_exists('G3Loader')){
			die("Please download the CEGCore framework from www.chronoengine.com then install it using the 'Extensions Manager'");
			return;
		}
		
		\G3\L\AppLoader::initialize();

		if(\G3\L\Request::data('chronoservice') == 'google.oauth'){
			if(!empty(\G3\L\Request::data('state'))){
				$url = json_decode(\G3\L\Request::data('state'), true)['url'];
				$url = \G3\L\Url::build($url, [
					'code' => $_GET['code'] ?? '',
					'authuser' => $_GET['authuser'] ?? '',
					'error' => $_GET['error'] ?? '',
					'requestid' => json_decode(\G3\L\Request::data('state'), true)['requestid'],
				]);
				
				\GApp3::redirect($url);
			}
		}
	}
	function cf7_preview_post_content($content){
		if(!empty($_GET['chronoform'])){
			global $chronoforms7_forms;

			$doc = \GApp3::document();
			$doc->buildHeader();
			
			echo $chronoforms7_forms[$_GET['chronoform']];
		}
	}
	/*
	function cf7_preview_post_content($content){
		echo $this->cf7_front();
		echo '<br><br><br>';
		echo $content;
	}
	
	function cf7_preview_trim_posts($posts){
		return array(array_pop($posts));
	}
	
	function cf7_front_ajax(){
		echo $this->cf7_front();
		die();
	}
	*/
	function cf7_preview_trim_posts($posts){
		return $posts;//array(array_pop($posts));
	}
	
	function cf7_getform($attrs = array()){
		global $chronoforms7_forms;
		
		$doc = \GApp3::document();
		$doc->buildHeader();
		
		if(!empty($attrs['chronoform']) AND !empty($chronoforms7_forms[$attrs['chronoform']])){
			return $chronoforms7_forms[$attrs['chronoform']];
		}
	}
	
	function cf7_front(){
		global $post;
		
		global $chronoforms7_forms;
		
		$chronoforms7_forms = [];

		if(!is_singular()){
			if(!empty($_GET['chronoform'])){
				$chronoforms7_forms[$_GET['chronoform']] = $this->cf7_render(['chronoform' => $_GET['chronoform']]);
			}
			return;
		}
		
		if(has_shortcode($post->post_content, 'Chronoforms')){
			preg_match_all('/'.get_shortcode_regex(['Chronoforms']).'/', $post->post_content, $matches);
			if(!empty($matches[3])){
				foreach($matches[3] as $formString){
					parse_str($formString, $info);
					
					foreach($info as $k => $v){
						$info[$k] = trim($v, '"');
					}
					
					$chronoforms7_forms[$info['chronoform']] = $this->cf7_render($info);
				}
			}
		}

		if(has_shortcode($post->post_content, 'Chronoforms5')){
			preg_match_all('/'.get_shortcode_regex(['Chronoforms5']).'/', $post->post_content, $matches);
			if(!empty($matches[3])){
				foreach($matches[3] as $formString){
					parse_str($formString, $info);
					
					foreach($info as $k => $v){
						$info[$k] = trim($v, '"');
					}
					
					$chronoforms7_forms[$info['chronoform']] = $this->cf7_render($info);
				}
			}
		}
	}
	
	function cf7_render($attrs = array()){
		$chronoform = \G3\L\Request::data('chronoform', '');
		$gpage = \G3\L\Request::data('gpage', '');
		$params = new \G3\L\Parameter($attrs);
		$formname = $params->get('chronoform', '');
		if(!empty($formname)){
			if(!empty($gpage)){
				if($formname == $chronoform){
					$vars = array('chronoform' => $params->get('chronoform'), 'gpage' => $gpage);
				}
			}else{
				$vars = array('chronoform' => $params->get('chronoform'), 'gpage' => $params->get('gpage', null));
			}
		}

		global $chronoforms7_output;
		ob_start();
		// $output = new WordpressChronoG3('front', self::get_plugin_name(), 'chronoforms', $chronoforms7_setup);
		$output = new G3Loader([
			'site' => 'front',
			'alias' => self::get_plugin_name(),
			'extension' => 'chronoforms',
			'vars' => $vars ?? [],
		]);
		return $chronoforms7_output = ob_get_clean();
	}
	
	function cf7_admin(){
		global $wpdb;
		//$database = new \G3\L\DatabaseAdapters\Wordpress();
		$database = new \G3\L\Wordpress\DatabaseAdapter();
		$tables = $database->getTablesList();
		if(\G3\L\Request::data('cont') != 'installer'){
			if(!empty($tables) AND !in_array($wpdb->prefix.'chronog3_forms7', $tables)){
				\G3\L\Env::redirect(r3('index.php?ext=chronoforms&cont=installer'));
			}
		}
		
		global $chronoforms7_output;
		ob_start();
		// $output = new WordpressChronoG3('admin', self::get_plugin_name(), 'chronoforms');
		$output = new G3Loader([
			'site' => 'admin',
			'alias' => self::get_plugin_name(),
			'extension' => 'chronoforms',
		]);
		$chronoforms7_output = ob_get_clean();
	}
	
	function cf7_admin_output(){
		global $chronoforms7_output;
		
		$doc = \GApp3::document();
		$doc->buildHeader();
		
		echo '<br>';
		echo $chronoforms7_output;
	}
	
	function get_plugin_name(){
		$plugin_path = plugin_dir_url(__FILE__);
		$plugin_path_parts = array_filter(explode('/', $plugin_path));
		$plugin_name = array_pop($plugin_path_parts);
		return $plugin_name;
	}
}
$Chronoforms = new Chronoforms();
//add_shortcode('Chronoforms', array($Chronoforms, 'run'));
?>