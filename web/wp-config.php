<?php
/** 
 * Zakladna konfiguracia pre WordPress.
 *
 * Tento subor ma nasledujuce konfiguracie: nastavenia MySQL, predpony tabulky,
 * tajne kluce, jazyk WordPress, a ABSPATH. Mozete sa dozvediet viac informacii
 * navstivenim {@link http://codex.wordpress.org/Editing_wp-config.php Uprava
 * wp-config.php} Codex Stranky. Nastavenia MySQL mozete zuskat z vasho hostingu.
 *
 * Tento subor je pouzity vytvaracim skriptom pre wp-config.php pocas
 * instalacie. Nemali by ste ho pouzivat na stranke, staci nakopirovat jeho obsah
 * do "wp-config.php" a vyplnit hodnoty.
 *
 * @package WordPress
 */

// ** Nastavenia MySQL - Tieto informacie mozete ziskat od vasho hostingu ** //
/** Meno databazy pre WordPress */
define('DB_NAME', 'spolocenstvounited');

/** Uzivatel databazy MySQL */
define('DB_USER', 'united_admin');

/** Heslo databazy MySQL */
define('DB_PASSWORD', 'SpolocenstvoUnited*');

/** Umiestnenie databazy MySQL */
define('DB_HOST', 'localhost');

/** Kodvanie databazy pouzivane pri tvorbe databazovych tabuliek. */
define('DB_CHARSET', 'utf8');

/** Databazova kolekcia. Nemente, pokial si nieste isty. */
define('DB_COLLATE', '');

/**#@+
 * Autorizacia unikatnych klucov.
 *
 * Zmente tieto na rozne unikatne frazy! 
 * Mozete ich vytvarat pomocou {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Tieto mozete zmenit kedykolvek to uznate za vhodne, aby ste znehodnotili vsetky existujuce cookies. Toto donuti vsetkych uzivatelov sa znova prihlasit.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'qP)+PE-K:IKXLl?+Mpe5S>-QH-ge^lx^K^=J|&]{%,,asy;o#|GElz<edYu=$K(c');
define('SECURE_AUTH_KEY',  'b+7 #;xOx|w1!UMZqq;06t)l>}VM&h|d4NgfH|D:#gGRkXD@|{R>S]]EuE05E>H=');
define('LOGGED_IN_KEY',    '5mbJv9zYSnT6Nh0#o`AIn0LWrS-zO}-p49A@e~v@t=_W9(DIx8s2?|m7x-M73TC5');
define('NONCE_KEY',        'Z5Hsl^#&Z2&=U?AT+r?|jDk(={_]l`@.`},{oDC-Mv/2-k65%]+-*ko|$}:NQm p');
define('AUTH_SALT',        '<KRn,T|b-E`Zn:,_~z@&6X!(y~Z-*}08-aO5o~VF%Hq%tYgJm,,^9Ej=A+tlC3W=');
define('SECURE_AUTH_SALT', '=90zpzVfr<o0J@u@=Tl0ycg5LcLjLqw[ZOd^aBU,j7I(0S/Nj]c_6LqOK(.7FkPQ');
define('LOGGED_IN_SALT',   ']/h3ZE1nm:t<%wR2p48dCQU6wL_rHOM$~#8IH*28LuZ$-Q|{OL[T%Jz}9#x]ibq(');
define('NONCE_SALT',       '6RKD!:(W[pQS&BSA?XAif@InX#Ggb:qLFYkH@5SGisnH2|f jqhNaZQB/{]{@gyo');

/**#@-*/

/**
 * Predpona databazovej tabulky WordPress.
 *
 * Mozete mat viacero instalacii v jednej databaze tym ak kazdej date unikatnu
 * predponu. Len cisla, pismena a podtrhnutia, prosim!
 */
$table_prefix  = 'wp_';

/**
 * Lokalizacny jazyk WordPress, zakladne nastavenie Slovencina (sk_SK).
 *
 * Toto zmente pokial chcete zmenit jazyk WordPress.  Musi suhlasit s MO suborom pre vybrany
 * jazyk ktory musi byt instalovany do wp-content/languages. Ako priklad, instalovany subor
 * de.mo do wp-content/languages a nastavenie WPLANG na 'de' zapne podporu nemeckeho
 * jazyka. Pre anglictinu nechajte hodnotu prazdnu ''.
 */
define ('WPLANG', 'sk_SK');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* To je vsetko, prestante upravovat! Vesele blogovanie. */

/** Absolutna cesta WordPress k priecinku WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Nastavenia premennych WordPress a vkladanych suborov. */
require_once(ABSPATH . 'wp-settings.php');
