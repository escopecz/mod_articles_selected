<?php
/**
 * @subpackage	mod_articles_selected
 * @copyright	Copyright (C) Jan Linhart (escope.cz). All rights reserved.
 * @license		GNU General Public License version 2 or later
 */

// no direct access
defined('_JEXEC') or die;
?>
<div class="selectedArticles<?php echo $moduleclass_sfx; ?>">
<?php foreach ($list as $item) :?>
	<?php
	 require JModuleHelper::getLayoutPath('mod_articles_selected', '_item');?>
<?php endforeach; ?>
</div>
