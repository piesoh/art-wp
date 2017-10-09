<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', getenv('MYSQL_DATABASE'));

/** Utilisateur de la base de données MySQL. */
define('DB_USER', getenv('MYSQL_USER'));

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', getenv('MYSQL_PASSWORD'));

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', getenv('MYSQL_SERVICE_HOST').':'.getenv('MYSQL_SERVICE_PORT'));
//define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Lll2FT23$r`!%78m([FSXJ*|tYxX# SKHT4qOY~CqNd5Uth+uQmK/W8t@Jg+d6x.');
define('SECURE_AUTH_KEY',  '{W@RfS_&+?<#bH}yU:O2!4.eCYck)lot)NBd[TZ-rjVh/tv/%;o>m~T9:qBH%?Ot');
define('LOGGED_IN_KEY',    'UdoR.OfdRXV@]*N}TIdUvc8[MMxnsRvfzCIx~i%Fi.qV*hEl@f0vDAd__Bmu>S4Q');
define('NONCE_KEY',        'si2.w:yTtD~5Lr^1Ehy:?y`Ve}2E$5B;Sq$Yf3P8Oc.4$yA^WT)v[^C)[jJgz*kP');
define('AUTH_SALT',        'j)!Dj(=@X+AoHN#4^12ukJK}z-_5<!j]GB%++&yy6Q!]L.Q-QAg~_>QUh%N|yk)C');
define('SECURE_AUTH_SALT', 'c5c{=9XxslG%-y*>oJ(z%9TRr`j|ZH>csKI+{ES2gs[rPOF_/j7t%GaO011opRn9');
define('LOGGED_IN_SALT',   '8~&t[yC@|@Avgvs _TULVs7;o:um)RiPr/L*B+%~Jc=f,<]Nu$hc7#-db|@~L?1f');
define('NONCE_SALT',       'H:vih.qrESP_BSE7PkW@_8a7{4K<Wvs@3a#Nb1%=k3Q`{b48ci}Wa@T(zmW%Zol{');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
