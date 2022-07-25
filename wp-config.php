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
define( 'DB_NAME', 'themepro' );

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
define( 'AUTH_KEY',         ')>R:X!Vt_oKa>(hGL=FHlWDtg_B8u7Ez5%WZ[*|0_Q|[2iGjA]gewPRpdJQTSazH' );
define( 'SECURE_AUTH_KEY',  '[(Y`oHIi4Y+3EUU2DVM$5=&Gi,`Kh.jV%T?gGaqk%-7eDd4fZ93ofQn%-AMfu/69' );
define( 'LOGGED_IN_KEY',    'SNN w<6,f5K=v@<v(j`<$lu(9nct#0CIBU QT-d/n`GcCl#:K}%^G{IZ9!U(odFV' );
define( 'NONCE_KEY',        'oq2E([p+hrH~3y*C0oi}ub~Hz63Te<|t7;-kdln^K/)bs@F4N){~oyDyh4Uiw|hC' );
define( 'AUTH_SALT',        '|Ky7eAyF,7al@lOvBF2GKHKZ0JN~UURjX[I)#=yF1R$zEDP)KS5Nfz{6l0o11=~n' );
define( 'SECURE_AUTH_SALT', 'wzj{tr6Dl|a.M*&1JF[D{t&,axd[h= qrtPzR@bD9=GY^>_#[.bj(>=q}<Oct?G@' );
define( 'LOGGED_IN_SALT',   '>J a,mVqlxwD6+(!AyYy/ka+rQ_9LU9t!8z~T^Ttl#t/<JxZjrz2Y;)G%#j]IRQG' );
define( 'NONCE_SALT',       'U7mStIX^=h9|}JlNd=s$v2O,~{:S}:7A+e?W$#0S_iA/5F):}arPcY@@x`V+<8|}' );
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
