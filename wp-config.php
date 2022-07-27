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
define( 'DB_NAME', 'wordtheme' );

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
define( 'AUTH_KEY',         'GH_Pmfnd<%N&gzpz3cwOIRf=&q_v:s#xW@z>Ce!T?oI/Sj3,:gwC}[_5nC~C*6B-' );
define( 'SECURE_AUTH_KEY',  'RbNZ,;Zd-r!dFSe2s.<2(vJpi$ztQ04IUM7{a9B)9T_pLIien6^JS}0S:^q?<9t*' );
define( 'LOGGED_IN_KEY',    'dm/%Zf:URg|uq9J[LR!`LMBN$RDp#SO_){}_[5gcCNj&Vnu*,_IIwr7yC3aqL{@?' );
define( 'NONCE_KEY',        '_h5&g.u_RO[#4xu0Hg_h)^^a!tL)rzxW&r_9Cb#$i@wv(wP4DGa,LFj0=|%}h3Qt' );
define( 'AUTH_SALT',        'Sml:^tMXS;3)#|MWik,v[|5I=V,ZGoZa,cXPZ33B~|)M.@u4},|$a4dF>c!G{q4;' );
define( 'SECURE_AUTH_SALT', 'Q3Mj2$FwCSI-QHwNFOLy0Wf3YUf=DWzFpn.4TpNo^Z`gzY]J{Wz$CxIXi=av={Un' );
define( 'LOGGED_IN_SALT',   ';!,,ji-XdN9{7?Y7NQ{0Q7-}I|H|2?-o@W?lF{P ]jFw0JY/G&@c{(Pa.>bF8.-x' );
define( 'NONCE_SALT',       ':*:rDNTp3lR-^0[gN2Li66fY]s^pq/{^+QJ#M3&!13l||gMQe|Zow0 [YrO6tg|_' );
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
