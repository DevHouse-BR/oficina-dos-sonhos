<?php

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

class mtwMigratorControllerhelp extends mtwMigratorController
{
	/**
	 * constructor (registers additional tasks to methods)
	 * @return void
	 */
	function __construct()
	{
		parent::__construct();

	}

    function display() {
    
        JRequest::setVar( 'view', 'help' );

        parent::display();
    }


}
?>
