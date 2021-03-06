<?php

/**
 * The file contactplugin.php contains the contact plugin and is responsible
 * for sending user mails to the website owner.
 *
 * @license https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @author Simon Wächter
 * @version 1.0
 */

/**
 * The plugin Contact provides a contact form with a mail engine as backend.
 */
class ContactPlugin implements Plugin
{
	/**
	 * Get the plugin name.
	 *
	 * @return string Plugin name
	 */
	public function getName()
	{
		return "contact";
	}
	
	/**
	 * Get the plugin display name.
	 *
	 * @return string Plugin display name
	 */
	public function getDisplayName()
	{
		return "Kontakt";
	}
	
	/**
	 * Get the plugin description.
	 *
	 * @return string Plugin description
	 */
	public function getDescription()
	{
		return "Das Plugin 'Kontakt' stellt ein Kontaktformular zur Verfügung.";
	}
	
	/**
	 * Get the plugin controller items.
	 *
	 * @return array Plugin controller items
	 */
	public function getItems()
	{
		return array(new Item("contact", "Kontakt"));
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
