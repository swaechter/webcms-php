<?php

/**
 * The file resourceplugin.php is responsible for the resource management
 * like uploading files.
 *
 * @license https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @author Simon Wächter
 * @version 1.0
 */

/**
 * The plugin Ressource provides a resource system which can manage all resources.
 */
class ResourcePlugin implements Plugin
{
	/**
	 * Get the plugin name.
	 *
	 * @return string Plugin name
	 */
	public function getName()
	{
		return "resource";
	}
	
	/**
	 * Get the plugin display name.
	 *
	 * @return string Plugin display name
	 */
	public function getDisplayName()
	{
		return "Ressource";
	}
	
	/**
	 * Get the plugin description.
	 *
	 * @return string Plugin description
	 */
	public function getDescription()
	{
		return "Das Plugin 'Ressource' provides a resource management systen.";
	}
	
	/**
	 * Get the plugin controller items.
	 *
	 * @return array Plugin controller items
	 */
	public function getItems()
	{
		return array(new Item("resource", "Ressourcen"));
	}
	
	/**
	 * Get the plugin dependencies as array.
	 *
	 * @return array Plugin dependencies
	 */
	public function getDependencies()
	{
		return array("admin");
	}
}

?>
