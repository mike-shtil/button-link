<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_custom
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>

<div class="bl-container bl-container-<?php echo $module->id.' '.$moduleclass_sfx ?>"<?php if ($params->get('backgroundimage')) : ?> style="cursor: pointer; background-image:url(<?php echo $params->get('backgroundimage');?>)"<?php endif;?> onclick="location.href='<?php echo JRoute::_('index.php?Itemid='. $menu_link ); ?>'">
	<div class="bl-content">
		<?php echo $module->content; ?>
	</div> <!-- /.bl-content -->
	<?php if($params->get("second_img")): ?>
		<img class="bl-mainimg" src="<?php echo $params->get("second_img"); ?>">
	<?php endif; ?>
</div> <!-- /.bl-container -->