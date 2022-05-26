<?php
define('THEME', get_template_directory());
define ('THEME_URI', get_template_directory_uri());

require_once(THEME.'/functions/php-add-scripts-styles.php');
require_once(THEME.'/functions/php-remove-editor.php');
require_once(THEME.'/functions/php-allow-svg.php');
require_once(THEME.'/functions/php-admin-sticky-update.php');
require_once(THEME.'/functions/php-register-menus.php');
require_once(THEME.'/functions/php-disable-comments.php');
require_once(THEME.'/functions/php-options-page.php');
require_once(THEME.'/functions/php-register-apartament-taxonomy.php');