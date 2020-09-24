<?php
defined('_JEXEC') or die;
$document = JFactory::getDocument();

use Joomla\CMS\Router\Route;
// move to media
$document->addStyleSheet('modules/mod_nhssearch/assets/style.css');

$id = $params['page_id'];
$route = Route::_("index.php?Itemid={$id}");

// get other op - move into class
// print_r(JRequest::getVar('jform')['services']);

/*
    \'DEN\'
    \'GPP\' -> API issue
    \'GPB\'
    \'OPT\'
    \'PHA\'
*/
?>

<div class="nhs_search <?php echo $moduleclass_sfx; ?>">
<?php echo $params['introtext']; ?>
  
    <form action="<?= $route; ?>" method="POST">                

    <label for="service">Choose a service:</label>
      <select id="service" name="service">
        <option value="\'DEN\'">Dentist</option>
        <option value="\'GPB\'">GP Practice</option>
        <option value="\'OPT\'">Optician</option>
        <option value="\'PHA\'">Pharmacy</option>
    </select><br />

    <label for="pcode">Postcode:</label>
    <input name="pcode"><br />

    <!-- <input type="hidden" id="count" name="count" value="<?php // echo $params['count']; ?>"> -->
        
    <input type="submit" value="Search"></form>

</div>

