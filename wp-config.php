<?php

/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost:8888' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '?~Z(D6Omc;tY[a3#dWb.x&-HITS!0yM!fb{fhzbo!FeP*%MMac7q]epv3DOz!)0+' );
define( 'SECURE_AUTH_KEY',  'Imy C[^:/L(r5MH>s5o7;;*@}nZ02)!GjqMMh9R<ed+I}rvY;fa&Qe<Yd _0c@|z' );
define( 'LOGGED_IN_KEY',    '<&fTm(xi/2PAce93/AsyZv7pA1!dv7_008Ro<A-kr(7=(!<n3Wo8S=qEwW40uTXP' );
define( 'NONCE_KEY',        '6M|~u# G~^`OYJ&C1Q/QN{Klb)foyeui(IwNpNSe$Z9u[gfp{^&ROp}Mt}@JrGYI' );
define( 'AUTH_SALT',        'Eivyx5J}Z?O$yXJf!],I? U(a8CaXIH-68T+Dli*(i!xiswGs<7yk*=w7 tZ?2 u' );
define( 'SECURE_AUTH_SALT', 'QNx8eW75gSNSY9[l?6xF!sl=BSl-D25=1pwvV/McYUYHUBIMt?%;{n]E[U>QOR0B' );
define( 'LOGGED_IN_SALT',   'O1xc@!mjr3H?TY4IE]Yi QR<{nBgP!C}4abqobH;5Gp]iorTvPdtWHd2+o5wY&O3' );
define( 'NONCE_SALT',       'SHX?<c;|ZTCmQY%S=3L&gvN#X8A-2DH5{!XOUIMvtc6FLZSs@2(-Z]bXVbu+m]OW' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
