<?php
/**
 * @subpackage	mod_articles_selected
 * @copyright	Copyright (C) Jan Linhart (escope.cz). All rights reserved.
 * @license		GNU General Public License version 2 or later
 */

// no direct access
defined('_JEXEC') or die;

// Include the syndicate functions only once
require_once dirname(__FILE__).'/helper.php';

$list = modArticlesSelectedHelper::getList($params);
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

require JModuleHelper::getLayoutPath('mod_articles_selected', $params->get('layout', 'horizontal'));
