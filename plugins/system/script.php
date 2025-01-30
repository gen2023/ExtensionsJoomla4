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

/**
 * Скрипт установки для плагіна System - Foo.
 *
 * @package   [PACKAGE_NAME]
 * @since     1.0.0
 */
class plgSystemFooInstallerScript
{
	/**
	 * Викликається перед будь-якою дією.
	 *
	 * @param   string  $type    Тип дії (install, update, discover_install)
	 * @param   object  $parent  Об'єкт, що виконує цей скрипт
	 *
	 * @return  boolean  True у разі успіху
	 */
	public function preflight($type, $parent)
	{
		echo '<p>Підготовка до ' . $type . '</p>';
		return true;
	}

	/**
	 * Викликається після будь-якої дії.
	 *
	 * @param   string  $type    Тип дії (install, update, discover_install)
	 * @param   object  $parent  Об'єкт, що виконує цей скрипт
	 *
	 * @return  boolean  True у разі успіху
	 */
	public function postflight($type, $parent)
	{
		echo '<p>Завершено ' . $type . '</p>';
		return true;
	}

	/**
	 * Викликається під час встановлення.
	 *
	 * @param   object  $parent  Об'єкт, що виконує цей скрипт
	 *
	 * @return  boolean  True у разі успіху
	 */
	public function install($parent)
	{
		echo '<p>Плагін встановлено успішно!</p>';
		return true;
	}

	/**
	 * Викликається під час оновлення.
	 *
	 * @param   object  $parent  Об'єкт, що виконує цей скрипт
	 *
	 * @return  boolean  True у разі успіху
	 */
	public function update($parent)
	{
		echo '<p>Плагін оновлено успішно!</p>';
		return true;
	}

	/**
	 * Викликається під час видалення.
	 *
	 * @param   object  $parent  Об'єкт, що виконує цей скрипт
	 *
	 * @return  boolean  True у разі успіху
	 */
	public function uninstall($parent)
	{
		echo '<p>Плагін видалено успішно!</p>';
		return true;
	}
}
