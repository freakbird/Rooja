<?php
/**
 * MageParts
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * @category   MageParts
 * @package    MageParts_Adminhtml
 * @copyright  Copyright (c) 2009 MageParts (http://www.mageparts.com/)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class MAgeParts_CEM_IndexController extends Mage_Adminhtml_Controller_Action
{
	
	/**
	 * Noroute action
	 */
	public function norouteAction($coreRoute = null)
    {
        $this->_forward('index','adminhtml_packages','cem');
    }
        
    
    /**
     * Fixes changeLocale bug
     *
     */
  	public function changeLocaleAction()
  	{
  		$this->_forward('changeLocale', 'index','admin');
  	}
    
  	
  	/**
  	 * Check if a user is allowed here
  	 *
  	 * @return boolean
  	 */
	protected function _isAllowed()
	{
		return Mage::getSingleton('admin/session')->isAllowed('system/extensions/cem');
	}
	
}