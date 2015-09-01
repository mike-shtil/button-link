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

<a href="<?php echo JRoute::_( 'index.php?Itemid='. $menu_link ); ?>">
	<div class="bl-container <?php echo $moduleclass_sfx ?>"<?php if ($params->get('backgroundimage')) : ?> style="background-image:url(<?php echo $params->get('backgroundimage');?>)"<?php endif;?> >
		<img class="bl-mainimg" src="<?php echo $params->get("second_img"); ?>">
		<div class="bl-content">
			<?php echo $module->content; ?>
		</div> <!-- /.bl-content -->
	</div> <!-- /.bl-container -->
</a>