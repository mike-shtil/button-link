<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_custom
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

if ($params->def('prepare_content', 1))
{
	JPluginHelper::importPlugin('content');
	$module->content = JHtml::_('content.prepare', $module->content, '', 'mod_button_link.content');
}

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
$menu_link = $params->get('menu_link');

require JModuleHelper::getLayoutPath('mod_button_link', $params->get('layout', 'default'));
