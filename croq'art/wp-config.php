<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'croq\'art' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'wOia~tRt-UEkU*h<6m*$~yk;NBZbN$~=3BDPo5)AM(>%#~/vwN8H50Adq^S6[u_E' );
define( 'SECURE_AUTH_KEY',  'Cn~yB#`!*MKq4=oK$MN91N;Spif?[C!$E.QN _MofgSd!hdA^Z TOADbA+1)A0t~' );
define( 'LOGGED_IN_KEY',    'uC)(d<HHKj]]}t!(aE.1i7t/Y;=2`tE=Y.jdk?~.Ad(mjRQZY;itDu;QXNdgdv$^' );
define( 'NONCE_KEY',        'wS}7ZkD!NnMDONB,L[f&v.xkxi7:5m&Nh]gK73L$du]012zSW1 xf#U_cE[?B!-q' );
define( 'AUTH_SALT',        '[|oJcNA:MY;3%SQ!jk*0!{g~,N*ZS=ygY@7E~GND9<fvI; #_NS=6ku=f#msMd[q' );
define( 'SECURE_AUTH_SALT', 'z:<oi;Q/01d%8KCTrL94xu5$ qfgU??gHdy$0zRq}m&aM4(Y4K?$(.V!15SR1dcv' );
define( 'LOGGED_IN_SALT',   '/~xOop*MMb3nWS4K=7iRyCETc~tg<aB7V}|dV2Jq|.+~mPh!r_uwXSi@h3#My}fJ' );
define( 'NONCE_SALT',       'ei0sH0H>4Q+qW%Iztcd]/$uQ|ZyVO[(3qHX|+eO=y~`KZ^)Sya1fAP&+Zl1&p`h<' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'ca_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
