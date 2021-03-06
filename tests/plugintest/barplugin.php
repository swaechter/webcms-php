<?php

/**
 * Test plugin.
 */
class BarPlugin implements Plugin
{
	/**
	 * Get the plugin name.
	 *
	 * @return string Plugin name
	 */
	public function getName()
	{
		return "bar";
	}
	
	/**
	 * Get the plugin display name.
	 *
	 * @return string Plugin display name
	 */
	public function getDisplayName()
	{
		return "Bar";
	}
	
	/**
	 * Get the plugin description.
	 *
	 * @return string Plugin description
	 */
	public function getDescription()
	{
		return "Bar is a test plugin.";
	}
	
	/**
	 * Get the plugin controller items.
	 *
	 * @return array Plugin controller items
	 */
	public function getItems()
	{
		return array();
	}
	
	/**
	 * Get the plugin dependencies as array.
	 *
	 * @return array Plugin dependencies
	 */
	public function getDependencies()
	{
		return array();
	}
}

?>
