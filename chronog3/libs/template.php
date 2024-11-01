<?php
/**
* ChronoCMS version 1.0
* Copyright (c) 2012 ChronoCMS.com, All rights reserved.
* Author: (ChronoCMS.com Team)
* license: Please read LICENSE.txt
* Visit http://www.ChronoCMS.com for regular updates and information.
**/
namespace G3\L;
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
class Template {
	var $name = '';
	var $doc = null;
	var $params = null;
	var $view = 'index';

	function __construct($document, $name = '', $view = 'index', $params = null){
		$this->name = $name;
		$this->view = $view;

		$this->doc = &$document;
		$this->params = empty($params) ? new Parameter('') : $params;
	}

	public static function getInstance($document, $name = '', $view = 'index', $params = null){
		static $instances;
		if(!isset($instances)){
			$instances = array();
		}
		if(empty($instances[$document->site][$document->thread][trim($name)][$view])){
			$instances[$document->site][$document->thread][trim($name)][$view] = new Template($document, $name, $view, $params);
			return $instances[$document->site][$document->thread][trim($name)][$view];
		}else{
			return $instances[$document->site][$document->thread][trim($name)][$view];
		}
	}

	function render(){
		$output = '';
		ob_start();
		include($this->doc->path.'templates'.DS.$this->name.DS.$this->view.'.php');
		$output = ob_get_clean();
		//insert system messages
		$output = strpos($output, '__GCORE_SYSTEM_MESSAGES__') !== false ? str_replace('__GCORE_SYSTEM_MESSAGES__', $this->_renderSystemMessages(), $output) : $output;
		//insert header data now
		$output = strpos($output, '__GCORE_HEADER__') !== false ? str_replace('__GCORE_HEADER__', $this->_renderHeader(), $output) : $output;
		//insert debug now
		$dbo = Database::getInstance();
		$debug = array(
			l_('EXECUTION_TIME') => microtime(true) - \G3\Loader::$start_time,
			l_('MEMORY_USAGE') => memory_get_usage() - \G3\Loader::$memory_usage,
			l_('ERRORS') => Error::getErrors(),
			l_('DATABASE_LOG') => $dbo->log
		);
		$output = strpos($output, '__GCORE_DEBUG__') !== false ? str_replace('__GCORE_DEBUG__', p3($debug, true), $output) : $output;
		return $output;
	}

	function _renderHeader(){
		$chunks = array($this->doc->getBase(), $this->doc->getMeta(), $this->doc->getTitle(), $this->doc->getFavicon());
		//add css files list
		foreach($this->doc->cssfiles as $cssfile){
			$chunks[] = \G3\H\Html::_concat($cssfile, array_keys($cssfile), '<link ', ' />');
		}
		//add css code list
		foreach($this->doc->csscodes as $media => $codes){
			$chunks[] = \G3\H\Html::container('style', implode("\n", $codes), array('type' => 'text/css', 'media' => $media));
		}
		//add js files list
		foreach($this->doc->jsfiles as $jsfile){
			$chunks[] = \G3\H\Html::_concat($jsfile, array_keys($jsfile), '<script ', '></script>');
		}
		//add js code list
		foreach($this->doc->jscodes as $type => $codes){
			$chunks[] = \G3\H\Html::container('script', implode("\n", $codes), array('type' => $type));
		}

		foreach($this->doc->headertags as $k => $code){
			$chunks[] = $code;
		}
		return implode("\n", array_filter($chunks));
	}

	function _renderSystemMessages(){
		$session = Base::getSession();
		$types = $session->getFlash();
		return \G3\H\Message::render($types);
	}
}