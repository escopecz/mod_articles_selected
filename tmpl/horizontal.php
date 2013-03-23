<?php
/**
 * @subpackage	mod_articles_selected
 * @copyright	Copyright (C) Jan Linhart (escope.cz). All rights reserved.
 * @license		GNU General Public License version 2 or later
 */

// no direct access
defined('_JEXEC') or die;
?>

<ul class="selectedArticles-horiz<?php echo $params->get('moduleclass_sfx'); ?>">
<?php for ($i = 0, $n = count($list); $i < $n; $i ++) :
	$item = $list[$i]; ?>
	<li>
	<?php require JModuleHelper::getLayoutPath('mod_articles_selected', '_item');

	if ($n > 1 && (($i < $n - 1) || $params->get('showLastSeparator'))) : ?>

	<span class="article-separator">&#160;</span>

	<?php endif; ?>
	</li>
<?php endfor; ?>
</ul>
