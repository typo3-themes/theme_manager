<?php
/**
 * Created by PhpStorm.
 * User: kay
 * Date: 30.07.14
 * Time: 14:00
 */

namespace TYPO3\CMS\ThemesManager\Domain\Repository;

/**
 * Class TerThemeRepository
 *
 * Takes care of searching Themes in TER
 *
 * @package TYPO3\CMS\ThemesManager\Domain\Repository
 */
class TerThemeRepository extends AbstractThemeRepository {

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
	 * Find all themes regardless of their status. Possible status can be
	 * downloaded, installed, etc...
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
	 * Find all downloaded themes on the system regardless if they are
	 * installed or not.
	 *
	 * @return \TYPO3\CMS\ThemesManager\Interfaces\ThemeInterface[]
	 */
	public function findDownloaded() {
		// TODO: Implement findDownloaded() method.
	}
}