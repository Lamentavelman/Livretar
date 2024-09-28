<?php

/** O nome do banco de dados */
if (!defined('DB_NAME')) {
    define('DB_NAME', 'wda_crud');
}

/** Usuário do banco de dados MySQL */
if (!defined('DB_USER')) {
    define('DB_USER', 'root');
}

/** Senha do banco de dados MySQL */
if (!defined('DB_PASSWORD')) {
    define('DB_PASSWORD', '');
}

/** nome do host do MySQL */
if (!defined('DB_HOST')) {
    define('DB_HOST', 'localhost');
}

/** caminho absoluto para a pasta do sistema **/
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}

/** caminho no servidor para o sistema **/
if (!defined('BASEURL')) {
    define('BASEURL', '/crud_livretar/');
}

/** caminho do arquivo de banco de dados **/
if (!defined('DBAPI')) {
    define('DBAPI', ABSPATH . 'inc/database.php');
}

/** caminhos dos templates de header e footer **/
if (!defined('HEADER_TEMPLATE')) {
    define('HEADER_TEMPLATE', ABSPATH . 'inc/header.php');
}

if (!defined('FOOTER_TEMPLATE')) {
    define('FOOTER_TEMPLATE', ABSPATH . 'inc/footer.php');
}

// Ensure these definitions are not duplicated
if (!defined('DB_SERVER')) {
    define('DB_SERVER', 'localhost');
}

if (!defined('DB_DATABASE')) {
    define('DB_DATABASE', 'your_database_name');
}

?>
