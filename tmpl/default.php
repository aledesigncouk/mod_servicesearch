<?php
defined('_JEXEC') or die;
$document = JFactory::getDocument();

use Joomla\CMS\Router\Route;
// style need do be moved in media
$document->addStyleSheet('modules/mod_servicesearch/assets/style.css');

$id = $params['page_id'];
// add placeholder, button value to parameters... et varie
$route = Route::_("index.php?Itemid={$id}");

// category[0] - name
//category[1] - id
?>

<div class="mod_servicesearch <?php echo $moduleclass_sfx; ?>">

    <form class="mod_servicesearch-form" action="<?= $route; ?>" method="POST">     
    <div class="mod_servicesearch-title"><?php echo $params['introtext']; ?></div>           
    <input type="text" name="location" placeholder="Postcode / City / Town" required>

    <select class="mod_servicesearch-service" name="service" required>
        <option value=''>Select a service</option>
    <?php foreach($categories as $category): ?>
            <option value='<?= $category[1]; ?>'><?= $category[0]; ?></option>
    <?php endforeach; ?>
    </select>

    <input type="submit" value="Search"></form>

</div>

