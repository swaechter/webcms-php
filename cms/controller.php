<?php

/**
 * The file controller.php provides an abstract controller that can
 * be used by a controller of a plugin. Additionally, a controller
 * has to implement the SystemController or ModuleController interface.
 *
 * @license https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @author Simon Wächter
 * @version 1.0
 */

/**
 * The class Controller provides a class that can be used to create a part
 * for a plugin.
 */
abstract class Controller
{
	/**
	 * The database manager.
	 *
	 * @var DatabaseManager
	 */
	private $databasemanager;
	
	/**
	 * The data container with all data.
	 *
	 * @var DataContainer
	 */
	private $datacontainer;
	
	/**
	 * The view with all template information.
	 *
	 * @var View
	 */
	private $view;
	
	/**
	 * Constructor of the class Controller.
	 *
	 * @param DatabaseManager $databasemanager The database manager to access the database
	 * @param DataContainer $datacontainer The data container with all information that are needed
	 * @param View $view The view that can be filled with data
	 */
	public function __construct($databasemanager, $datacontainer, $view)
	{
		$this->databasemanager = $databasemanager;
		$this->datacontainer = $datacontainer;
		$this->view = $view;
	}
	
	/**
	 * Get the database manager.
	 *
	 * @return DatabaseManager Database manager
	 */
	public function getDatabaseManager()
	{
		return $this->databasemanager;
	}
	
	/**
	 * Get the data container.
	 *
	 * @return DataContainer Data container
	 */
	public function getDataContainer()
	{
		return $this->datacontainer;
	}
	
	/**
	 * Get the view.
	 *
	 * @return View View
	 */
	public function getView()
	{
		return $this->view;
	}
}

?>
