<?php

class modServiceSearchHelper
{
// move here and output whole form plus options
    public static function getParams($params)
    {

        return $params;

    }

    public static function getCategories()
    {

        $db = JFactory::getDbo();


        $query = $db->getQuery(true)
                ->select(array('title', 'id'))
                ->from($db->quoteName('#__categories'))
                ->where($db->quoteName('extension') . ' LIKE ' . $db->quote('com_servicemanager'));
        
        $db->setQuery($query);

        $result = $db->loadRowList();

        return $result;
        
    }

}
