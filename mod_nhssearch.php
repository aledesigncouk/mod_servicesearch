<?php

defined('_JEXEC') or die;
require_once dirname(__FILE__) . '/helper.php';
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'), ENT_COMPAT, 'UTF-8');
$par = modNhsSearchHelper::getParams($params);

require JModuleHelper::getLayoutPath('mod_nhssearch');
//require JModuleHelper::getLayoutPath('mod_nhssearch', $params->get('layout', 'default'));