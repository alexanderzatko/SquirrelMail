<?php

/**
 * Sample Fortune plugin configuration file
 *
 * Configuration defaults to /usr/games/fortune with short quotes
 *
 * @copyright 2004-2017 The SquirrelMail Project Team
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version $Id: config_sample.php 14643 2017-01-27 20:34:08Z pdontthink $
 * @package plugins
 * @subpackage fortune
 */

/**
 * Command that is used to display fortune cookies
 * @global string $fortune_command
 * @since 1.5.2
 */
$fortune_command = '/usr/games/fortune -s';
