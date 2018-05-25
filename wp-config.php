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
define('DB_NAME', '');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', '');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', '127.0.0.1');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '#2gl.`=nG=V7O25f)^2dDB%!b1=p..(5>98yft<_,)J/I(SVggJ}c $09DEhr+ta');
define('SECURE_AUTH_KEY',  'uQSvxFJO6)j7b&OnNkyV!{k0F~m7w98MhqA<%~i$sP-@,VPW12$NyCo; y4dy?_E');
define('LOGGED_IN_KEY',    '_#NsGpfT7n?H5v@CE_}A+pYs*Yb2$7pfmhfd4?|%[bQ#u@EW Al2G$l,g4LtES2(');
define('NONCE_KEY',        '$O{v9F(P?{;k:uUSnb2x]D%tB:XiGa5K5PDedi^j7 tIPr~G(8sLE7ip*XupL):N');
define('AUTH_SALT',        'y3QLgy7sRQo/co?dVfSQyG.1,FNSp<PyMG=4b.e:.H:Sd7Z6:Z;-zs,l=/;Kk:UK');
define('SECURE_AUTH_SALT', 'I(G(t@6Mo|*8 LymZ*91R?D_jG><ZcwyH.G4~5W8Jz@Zu;NND]#Y+tT!&tgEZ^{U');
define('LOGGED_IN_SALT',   'oqe;T:]#GYUkI^u/o<43;aBpwu<X}q?@aGw8bm:]=<_CQ~3Go2kuuV0Jz(e,q#U0');
define('NONCE_SALT',       '+U,h68X`$XEN5JATSv_gW$V|HE:Zp6VI9)a?]CZ38K[5zQ<w%7J7T`1SAWKvCpMZ');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'baybay_';

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
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
