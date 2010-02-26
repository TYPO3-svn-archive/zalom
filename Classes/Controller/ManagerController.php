<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2010 Juerg Langhard <tschuege@greenbanana.ch>
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

/**
 * The Backend controller for the ZALOM package
 *
 * @version $Id:$
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License, version 2
 */
class Tx_Zalom_Controller_ManagerController extends Tx_Extbase_MVC_Controller_ActionController {
	
	// Extension-Array who ZALOM promote
	protected $zalomExtList;
	
	/**
	 * Initializes the current action
	 *
	 * @return void
	 */
	public function initializeAction() {
		// Set the ExtensionArray from ZALOM
		$this->zalomExtList = explode(",", $this->settings['zalomExtList']);
	}

	/**
	 * Index-Action
	 * 
	 * @return string
	 */
	public function indexAction() {
		$this->view->assign('versionnr', '0.2.8'); //TODO:Automatisieren aus $EM_CONF[$_EXTKEY] (ext_emconf.php)
	}
	
	/**
	 * Extensions-Action
	 * 
	 * @return string
	 */
	public function extensionsAction() {
		
		$zalomExt = array();
		foreach($this->zalomExtList as $extension){
			$zalomExt[$extension]['key'] = $extension;
			$zalomExt[$extension]['isLoaded'] = t3lib_extMgm::isLoaded($extension);
			$zalomExt[$extension]['hasLocalTsSetup'] = file_exists(PATH_site.'fileadmin/ts/ext.'.$extension.'/setup.txt');
			$zalomExt[$extension]['hasLocalTsConstants'] = '';
			$zalomExt[$extension]['hasLocalTemplate'] = t3lib_extMgm::isLoaded($extension);
		}
		$this->view->assign('zalomExt', $zalomExt);
	}	
	
	/**
	 * Override getErrorFlashMessage to present
	 * nice flash error messages.
	 *
	 * @return string
	 */
	protected function getErrorFlashMessage() {
		switch ($this->actionMethodName) {
			case 'updateAction' :
				return 'Could not update the blog:';
			case 'createAction' :
				return 'Could not create the new blog:';
			default :
				return parent::getErrorFlashMessage();
		}
	}

}

?>