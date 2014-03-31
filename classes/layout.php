<?php defined('SYSPATH') or die('No direct script access.');
/*
	Kohana Layout for Kohana Framework 3.2 by Embuscado, Geoffrey C. v1.0.0
	
	Twitter ID: @KriansoLaarche
	
*/

class Layout {
	protected $_config;
	public function __construct(){
		$this->_config = Kohana::$config->load('head.config');
	}
	
	// START - HTML Head Tags
	public function set_head($title = null){
		$html_head = array();
		$html_head['title'] = $title;
		$html_head['styles'] = $this->set_styles();
		$html_head['scripts'] = $this->set_scripts();
		$html_head['meta_tags'] = $this->set_meta_tags();
		
		// Renders View
		$view = View::factory("common/head");
		$view->title = $html_head['title'];
		$view->styles = $html_head['styles'];
		$view->scripts = $html_head['scripts'];
		$view->meta_tags = $html_head['meta_tags'];
		
		return $view;
		// return $html_head;
	}
	public function set_meta_tags(){
		$meta_tags = array();
		if(count($this->_config['meta_tags']) > 0){
			foreach($this->_config['meta_tags'] AS $tag){
				$meta_tags[] = '<meta' . HTML::attributes($tag) . '>';
			}
		}
		return $meta_tags;
	}
	public function set_scripts(){
		$scripts = array();
		if(count($this->_config['scripts']) > 0){
			foreach($this->_config['scripts'] AS $script){
				$scripts[] = HTML::script($script);
			}
		}
		return $scripts;
	}
	public function set_styles(){
		$styles = array();
		if(count($this->_config['styles']) > 0){
			foreach($this->_config['styles'] AS $style){
				$styles[] = HTML::style($style);
			}
		}
		return $styles;
	}
	// END - HTML Head Tags
	
	// START - HTML Table Tagging
	public function html_table($datas = array(), $class = null, $attributes = array()){

		$view = View::factory("table");
		if(isset($class)){
			$view->table_class = array("class"=>$class);
		} else {
			$view->table_class = array();
		}
		
		if(count($attributes) > 0){
			$view->table_attributes = HTML::attributes($attributes);
		} else {
			$view->table_attributes = null;
		}
		
		if(is_array($datas)){
			if(count($datas) > 0){
				$view->records = $datas;
			}
		}
		return $view;
	}
	// END - HTML Table Tagging
}
