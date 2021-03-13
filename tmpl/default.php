<?php
defined('_JEXEC') or die;
$document = JFactory::getDocument();

use Joomla\CMS\Router\Route;
// style need do be moved in media
$document->addStyleSheet('modules/mod_servicesearch/assets/style.css');

$id = $params['page_id'];
// add placeholder, button value to parameters
$route = Route::_("index.php?Itemid={$id}");

?>

<div class="mod_servicesearch <?php echo $moduleclass_sfx; ?>">

    <form class="mod_servicesearch-form" action="<?= $route; ?>" method="POST">     
    <div class="mod_servicesearch-title"><?php echo $params['introtext']; ?></div>           
    <input type="text" name="pcode" placeholder="Postcode / City / Town">      
    <input type="submit" value="Search"></form>

</div>

