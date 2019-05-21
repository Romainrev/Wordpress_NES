<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'nes' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'k>5Uxb3ur1w8D0)qWkA(xE)XSNmP{YrgL>+Wxcd 71>MK$j1rz7v?@.;k%{B)cF:' );
define( 'SECURE_AUTH_KEY',  'Mc=xvg)BL/H+z3w*H<jDDh<cG[AzUx?v$gx()Su;F(no^{WXo%;$)x?y1E_K?~/k' );
define( 'LOGGED_IN_KEY',    '}M4E~*ss%a&4@FNIr4$1u5/yV2Rw-K.B^Oes)svN~78wC>i*PJ&oT_kYGe_hj*f.' );
define( 'NONCE_KEY',        'Kp),ikJ&6}@=S?`3Btc/I0~sRg2T/eF ,>tZow?9cS)Wtz(iCmZ*r29X@~S]F(`a' );
define( 'AUTH_SALT',        '#!$TgCk`R7L%=Tez7m$f:]HhfkKjFpk+qMXs$PHo3$l~Ho)Z}d*bGT80]S,,#VCk' );
define( 'SECURE_AUTH_SALT', ';Cm?5Rs:mocLK_6W-*CdeI.=$y&fMCH~Yx#?U@,l$[.IsXD1Cl?m|OaJoY9~y|*Z' );
define( 'LOGGED_IN_SALT',   'AF>@<R({`O5J%:p.z<b(?rv!1)jba(jG9<OjA70_X}UEJle+,db9&Yi)J1cfC S8' );
define( 'NONCE_SALT',       'id7n`%3AQoJwl=@rEkK#_wm0#r#O/hZ*xv=L9M=Ig!H#l#c%Ud1;$)LZ2[y.#/[E' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
