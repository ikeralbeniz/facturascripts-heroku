<?php

// ** Heroku Postgres settings - from Heroku Environment ** //
$db = parse_url($_ENV["DATABASE_URL"]);

define('FS_DB_TYPE', 'postgresql');
define('FS_DB_HOST', $db["host"]);
define('FS_DB_PORT', $db["port"]);
define('FS_DB_NAME', trim($db["path"],"/"));
define('FS_DB_USER', $db["user"]);
define('FS_DB_PASS', $db["pass"]);
define('FS_DB_HISTORY', FALSE);
define('FS_DEMO', FALSE);
define('FS_CACHE_HOST', 'localhost');
define('FS_CACHE_PORT', 11211);
define('FS_CACHE_PREFIX', 'CnBx2Mes_');
define('FS_COOKIES_EXPIRE', 7776000);
define('FS_ITEM_LIMIT', 50);
define('FS_DISABLE_MOD_PLUGINS', FALSE);
define('FS_DISABLE_ADD_PLUGINS', FALSE);
define('FS_DISABLE_RM_PLUGINS', FALSE);

?>
