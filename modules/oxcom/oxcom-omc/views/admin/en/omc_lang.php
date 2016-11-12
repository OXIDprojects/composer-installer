<?php
/**
 * ioly
 *
 * PHP version 5.3
 *
 * @category ioly_modulmanager
 * @package  OXID Connector
 * @author   Dave Holloway <dh@gn2-netwerk.de>
 * @author   Tobias Merkl <merkl@proudsourcing.de>
 * @author   Stefan Moises <stefan@rent-a-hero.de>
 * @license  MIT License http://opensource.org/licenses/MIT
 * @link     http://getioly.com/
 * @version  1.9.0
 */
$sLangName  = "English";
// -------------------------------
// RESOURCE IDENTITFIER = STRING
// -------------------------------
$aLang = array(
    'charset'                                   => 'UTF-8',
    'mxomc'                                     => 'Connector',
    'IOLY_MAIN_TITLE'                           => 'OXID Module Connector',
    'IOLY_MODULE_NAME'                          => 'Search/sort by name',
    'IOLY_VERSION_MODULE'                       => 'OXID Module Connector Version:',
    'IOLY_VERSION_CORE'                         => 'ioly core version:',
    'IOLY_VERSION_RECIPES'                      => 'OXID recipes version:',
    'IOLY_MODULE_DOWNLOAD'                      => 'Module download',
    'IOLY_IOLY_UPDATE_BUTTON'                   => 'Update core',
    'IOLY_RECIPE_UPDATE_BUTTON'                 => 'Update modules',
    'IOLY_CONNECTOR_UPDATE_BUTTON'              => 'Update connector',
    'IOLY_MODULE_OXID_VERSION'                  => 'supported OXID versions',
    'IOLY_MODULE_DOWNLOAD_SUCCESS'              => 'Module downloaded successfully!',
    'IOLY_MODULE_UNINSTALL_SUCCESS'             => 'Module files removed successfully!',
    'IOLY_MAIN_INFOTEXT'                        => 'With OXID Module Connector, you can download and install OXID modules with one click in your shop. For more information visit <a href="https://github.com/ioly/ioly" target="_blank">github.com/ioly/ioly</a> or <a href="https://getioly.com" target="_blank">getioly.com</a>.<br>',
    'IOLY_RECIPE_UPDATE_SUCCESS'                => 'updated OXID recipes successfully!',
    'IOLY_RECIPE_UPDATE_ERROR'                  => 'problem while updating OXID recipes: ',
    'IOLY_IOLY_UPDATE_SUCCESS'                  => 'updated ioly core successfully!',
    'IOLY_IOLY_UPDATE_ERROR'                    => 'problem while updating ioly core: ',
    'IOLY_CONNECTOR_UPDATE_SUCCESS'             => 'updated OXID Module Connector successfully!',
    'IOLY_CONNECTOR_UPDATE_ERROR'               => 'problem while updating OXID Module Connector.',
    'IOLY_INSTALL_MODULE_HINT'                  => 'download module or lib files to the shop directory and extract them',
    'IOLY_REINSTALL_MODULE_HINT'                => 'download module or lib files to the shop directory and extract them again',
    'IOLY_UNINSTALL_MODULE_HINT'                => 'remove module files from shop directory?',
    'IOLY_MODULE_INSTALLED'                     => 'Module installed',
    'IOLY_EXCEPTION_CORE_NOT_LOADED'            => "Unable to load ioly core!<br>Please check write permissions in the following folders:<i>&lsaquo;shoproot&rsaquo;/modules/<br>&lsaquo;shoproot&rsaquo;/modules/ioly/ioly/</i>",
    'IOLY_PROJECT_URL'                          => 'module details',
    'IOLY_PRICE_FREE'                           => 'free',
    'IOLY_OXID_VERSIONS'                        => 'OXID',
    'IOLY_TOGGLE_INFO'                          => 'Toggle info',
    'IOLY_ERROR_BASELIB_MISSING'                => "JS libs not found. Installing '%s' in version '%s' to 'modules/oxcom/oxcom-omc/libs' ...",
    'IOLY_BUTTON_DOWNLOAD_VERSION_1'            => 'install version',
    'IOLY_BUTTON_DOWNLOAD_VERSION_2'            => '',
    'IOLY_BUTTON_DOWNLOAD_VERSION_3'            => 'reinstall version',
    'IOLY_BUTTON_REMOVE_VERSION_1'              => '',
    'IOLY_BUTTON_REMOVE_VERSION_2'              => 'remove version',
    'IOLY_OXID_MAPPINGS'                        => 'File mappings',
    'IOLY_EXCEPTION_MESSAGE_CODE_1022'          => 'The module was uninstalled, but the following files could not be deleted:',
    'IOLY_EXCEPTION_MESSAGE_CODE_1023'          => 'The module was uninstalled, but the following files have been modified and could not be deleted:',
    'IOLY_EXCEPTION_MESSAGE_CODE_1021'          => 'Could not find specified digest version.',
    'IOLY_EXCEPTION_MESSAGE_CODE_1020'          => 'Could not find any digest version.',
    'IOLY_EXCEPTION_MESSAGE_CODE_1030'          => 'No license found for commercial package.',
    'IOLY_EXCEPTION_MESSAGE_CODE_1008'          => 'Please check permissions on the following files/folders:<br>',
    'IOLY_EXCEPTION_MESSAGE_CODE_1007'          => 'Download server responded with error:',
    'IOLY_EXCEPTION_MESSAGE_CODE_1010'          => 'Please check permissions on the following files/folders:<br>',
    'IOLY_EXCEPTION_MESSAGE_CODE_1011'          => 'Please check permissions on the following files/folders:<br>',
    'IOLY_EXCEPTION_MESSAGE_CODE_1000'          => 'Please call \$ioly->setSystemBasePath(\$path) run: export IOLY_SYSTEM_BASE=%path%',
    'IOLY_EXCEPTION_MESSAGE_CODE_1001'          => 'Please call \$ioly->setSystemVersion(\$version) or run: export IOLY_SYSTEM_VERSION=%version%',
    'IOLY_EXCEPTION_MESSAGE_CODE_1003'          => 'Could not find module version:',
    'IOLY_EXCEPTION_MESSAGE_CODE_1005'          => 'Could not find module:',
    'IOLY_EXCEPTION_MESSAGE_CODE_1006'          => 'Please use vendor/package to install a module.',
    'SHOP_MODULE_GROUP_IOLY'                    => 'Settings',
    'SHOP_MODULE_iolycookbookurl'               => 'Cookbook URL (URL to the recipes as ZIP file)',
    'SHOP_MODULE_iolyautoupdate'                => 'auto update OXID Module Connector (core, recipes, connector)?',
    'SHOP_MODULE_iolyenableinst'                => 'Allow module de-/activation?',
    'HELP_SHOP_MODULE_iolyenableinst'           => 'You can de-/activate any installed module for any sub shop with OXID Module Connector',
    'SHOP_MODULE_iolycheckactive'               => 'Check if modules are activated in any sub shop in module list (performance!)',
    'HELP_SHOP_MODULE_iolycheckactive'          => 'For every module in the module list, check if the module is activated in any sub shop (costly, because the metadata.php files of all modules have to be checked etc.)?',
    'IOLY_RECIPES'                              => 'Recipes',
    'IOLY_EXCEPTION_MESSAGE_MODULE_ACTIVE'      => 'The module is still active in the shop and cannot be removed! Please deactivate it before removal.',
    'IOLY_ACTIVATE_MODULE'                      => 'Activate module ...',
    'IOLY_DEACTIVATE_MODULE'                    => 'Deactivate module ...',
    'IOLY_DROPDOWN_MORE_ACTIONS'                => 'Maintenance',
    'IOLY_CLEAR_TEMP'                           => 'Clear tmp dir',
    'IOLY_CREATE_VIEWS'                         => 'Create views ...',
    'IOLY_ONLY_INSTALLED'                       => 'Show installed',
    'IOLY_ONLY_ACTIVE'                          => 'Show activated',
);
?>