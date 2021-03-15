<?php

defined('_JEXEC') or die;
require_once dirname(__FILE__) . '/helper.php';
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'), ENT_COMPAT, 'UTF-8');

$par = modServiceSearchHelper::getParams($params);
$categories = modServiceSearchHelper::getCategories();

require JModuleHelper::getLayoutPath('mod_servicesearch');
//require JModuleHelper::getLayoutPath('mod_servicesearch', $params->get('layout', 'default'));