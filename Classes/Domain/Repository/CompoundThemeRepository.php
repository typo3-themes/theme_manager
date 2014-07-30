<?php
/**
 * Created by PhpStorm.
 * User: kay
 * Date: 30.07.14
 * Time: 14:01
 */

namespace TYPO3\CMS\ThemesManager\Domain\Repository;

/**
 * Will make it possible to search all repos at once, to find Themes independent from source
 *
 * Class CompoundThemeRepository
 * @package TYPO3\CMS\ThemesManager\Domain\Repository
 */
class CompoundThemeRepository extends AbstractThemeRepository{

	/**
	 * Find a theme given an identifier.
	 *
	 * @param string $identifier
	 * @return \TYPO3\CMS\ThemesManager\Interfaces\ThemeInterface
	 */
	public function findByIdentifier($identifier) {
		// TODO: Implement findByIdentifier() method.
	}

	/**
	 * Find all themes regardless of their status. Possible status can be downloaded, installed, etc...
	 *
	 * @return \TYPO3\CMS\ThemesManager\Interfaces\ThemeInterface[]
	 */
	public function findAll() {
		// TODO: Implement findAll() method.
	}

	/**
	 * Find all installed themes on the system.
	 *
	 * @return \TYPO3\CMS\ThemesManager\Interfaces\ThemeInterface[]
	 */
	public function findInstalled() {
		// TODO: Implement findInstalled() method.
	}

	/**
	 * Find all downloaded themes on the system regardless if they are installed or not.
	 *
	 * @return \TYPO3\CMS\ThemesManager\Interfaces\ThemeInterface[]
	 */
	public function findDownloaded() {
		// TODO: Implement findDownloaded() method.
	}
}