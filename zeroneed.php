<?php
/**
 * ZN PHP Web Framework
 * 
 * "Simplicity is the ultimate sophistication." ~ Da Vinci
 * 
 * @package ZN
 * @license MIT [http://opensource.org/licenses/MIT]
 * @author  Ozan UYKUN [ozan@znframework.com]
 * @since   2011
 */

/*
|--------------------------------------------------------------------------
| Require Core File
|--------------------------------------------------------------------------
|
| It includes the necessary things for the operation of the system.
|
*/

require __DIR__ . '/system/autoload.php';

/*
|--------------------------------------------------------------------------
| Run ZN
|--------------------------------------------------------------------------
|
| Simplicity is our principle. Enjoy it.
|
*/

ZN\ZN::defines
([
    'BUTCHERY_DIR'    => '',
    'CONTROLLERS_DIR' => 'php/controllers/',
    'MODELS_DIR'      => 'php/models/',
    'VIEWS_DIR'       => 'html/',
    'ROUTES_DIR'      => 'routes/',
    'CONFIG_DIR'      => 'config/',
    'DATABASES_DIR'   => '',
    'STORAGE_DIR'     => 'storage/',
    'COMMANDS_DIR'    => 'php/console/',
    'LANGUAGES_DIR'   => '',
    'LIBRARIES_DIR'   => 'php/models/',
    'AUTOLOAD_DIR'    => '',
    'FILES_DIR'       => '',
    'TEMPLATES_DIR'   => '',
    'THEMES_DIR'      => 'assets/',
    'PLUGINS_DIR'     => '',
    'UPLOADS_DIR'     => ''

])::run('CE');