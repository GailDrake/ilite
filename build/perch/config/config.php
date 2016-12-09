<?php
    define('PERCH_LICENSE_KEY', 'P21612-MWS932-BCB889-BEK802-MJC002');

    define("PERCH_DB_USERNAME", 'root');
    define("PERCH_DB_PASSWORD", 'PandaBeard56%');
    define("PERCH_DB_SERVER", "localhost");
    define("PERCH_DB_DATABASE", "ilite");
    define("PERCH_DB_PREFIX", "perch2_");
    
    define('PERCH_TZ', 'America/New_York');

    define('PERCH_EMAIL_FROM', 'drakegd@pwcs.edu');
    define('PERCH_EMAIL_FROM_NAME', 'Gail Drake');

    define('PERCH_LOGINPATH', '/perch');
    define('PERCH_PATH', str_replace(DIRECTORY_SEPARATOR.'config', '', __DIR__));
    define('PERCH_CORE', PERCH_PATH.DIRECTORY_SEPARATOR.'core');

    define('PERCH_RESFILEPATH', PERCH_PATH . DIRECTORY_SEPARATOR . 'resources');
    define('PERCH_RESPATH', PERCH_LOGINPATH . '/resources');
    
    define('PERCH_HTML5', true);
