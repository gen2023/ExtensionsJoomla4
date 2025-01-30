<?php
/**
 * @package    [PACKAGE_NAME]
 *
 * @author     [AUTHOR] <[AUTHOR_EMAIL]>
 * @copyright  [COPYRIGHT]
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       [AUTHOR_URL]
 */

defined('_JEXEC') or die;

use Joomla\CMS\Application\CMSApplication;
use Joomla\CMS\Plugin\CMSPlugin;
use Joomla\Database\DatabaseInterface;
use Joomla\CMS\Factory;
use Joomla\CMS\Log\Log;
use Joomla\CMS\Document\Document;

/**
 * System Plugin Foo.
 *
 * @package   [PACKAGE_NAME]
 * @since     1.0.0
 */
class plgSystemFoo extends CMSPlugin
{
	/**
	 * @var CMSApplication
	 */
	protected $app;

	/**
	 * @var DatabaseInterface
	 */
	protected $db;

	/**
	 * Автоматичне завантаження мовних файлів.
	 *
	 * @var bool
	 */
	protected $autoloadLanguage = true;

	/**
	 * Викликається після ініціалізації.
	 */
	public function onAfterInitialise()
	{
		Log::add('plgSystemFoo: onAfterInitialise викликано', Log::INFO, 'plg_system_foo');
	}

	/**
	 * Викликається після маршрутизації.
	 */
	public function onAfterRoute()
	{
		Log::add('plgSystemFoo: onAfterRoute викликано', Log::INFO, 'plg_system_foo');
	}

	/**
	 * Викликається після диспетчеризації.
	 */
	public function onAfterDispatch()
	{
		// Додаємо користувацький CSS
		$doc = Factory::getApplication()->getDocument();

		if ($doc instanceof Document) {
			$doc->addStyleDeclaration('body { background-color: #f0f0f0; }');
		}
	}

	/**
	 * Викликається перед рендерингом сторінки.
	 */
	public function onAfterRender()
	{
		// Отримання параметрів плагіна
		$sample = $this->params->get('sample', '42');

		Log::add('plgSystemFoo: Значення параметра sample = ' . $sample, Log::INFO, 'plg_system_foo');
	}

	/**
	 * Викликається після компіляції заголовка сторінки.
	 */
	public function onAfterCompileHead()
	{
		Log::add('plgSystemFoo: onAfterCompileHead викликано', Log::INFO, 'plg_system_foo');
	}

	/**
	 * Викликається після стиснення контенту.
	 */
	public function onAfterCompress()
	{
		Log::add('plgSystemFoo: onAfterCompress викликано', Log::INFO, 'plg_system_foo');
	}

	/**
	 * Викликається перед відправкою відповіді сервером.
	 */
	public function onAfterRespond()
	{
		Log::add('plgSystemFoo: onAfterRespond викликано', Log::INFO, 'plg_system_foo');
	}
}
