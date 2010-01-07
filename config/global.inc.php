<?php
error_reporting(E_ALL | E_STRICT);
set_include_path(
  '.'
  . PATH_SEPARATOR . dirname(dirname(__FILE__))
  . PATH_SEPARATOR . dirname(dirname(__FILE__)).'/lib'
  . PATH_SEPARATOR . dirname(dirname(__FILE__)).'/thirdparty/konstrukt/lib'
  . PATH_SEPARATOR . dirname(dirname(__FILE__)).'/thirdparty/pdoext/lib'
  . PATH_SEPARATOR . dirname(dirname(__FILE__)).'/thirdparty/bucket/lib'
  . PATH_SEPARATOR . dirname(dirname(__FILE__)).'/thirdparty/zf'
  . PATH_SEPARATOR . get_include_path()
);

require_once 'konstrukt/konstrukt.inc.php';
require_once 'pdoext.inc.php';
require_once 'pdoext/connection.inc.php';
require_once 'pdoext/query.inc.php';
require_once 'pdoext/tablegateway.php';

set_error_handler('k_exceptions_error_handler');
spl_autoload_register('k_autoload');
require_once 'openid.inc.php';
require_once 'viewhelpers.inc.php';

// This loads the site-configuration. By default, it will load the development environment.
//
// You shouldn't alter this file or `development.inc.php`.
// Instead, create a file called `SITENAME.inc.php`, where SITENAME is the name of the site.
// Check all `SITENAME.inc.php` into the repository.
// On each site (server), create a link:
//
//     ln -s SITENAME.inc.php local.inc.php
//
// If your server doesn't support symlinks (Windows), you can instead use:
//
//   copy default.inc.php local.inc.php
//
//, and change the include inside `local.inc.php`.
//
// Don't check `local.inc.php` into the repository.
//
$debug_log_path = null;
$debug_enabled = false;
$GLOBALS['EMAIL_NOTIFY'] = 'troelskn@gmail.com';
if (is_file(dirname(__FILE__) . '/local.inc.php')) {
  require_once dirname(__FILE__) . '/local.inc.php';
} else {
  require_once dirname(__FILE__) . '/development.inc.php';
}

