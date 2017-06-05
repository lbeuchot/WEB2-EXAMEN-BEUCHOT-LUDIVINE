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
define('DB_NAME', 'web2-examen');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'l|f2@KJ9 y(#pyYzHg0lf1ZTwa9(<7SZ1~&JFjqx`(_jf/cNG3~E|SitWY^Yu5UK');
define('SECURE_AUTH_KEY',  ')a=$(>Xn,l>t!jPWqPM@{LQZX-W$*!kweZ2Ae&BPE])^Q$O*-WA<;O+wV.d)}[+F');
define('LOGGED_IN_KEY',    'Ug&SD!RpHxq<1,o3HaTH)n4?R}Wd>Ml^Oz/:zVfx<eyT|ilb:NZSx-v6={[3uJ+]');
define('NONCE_KEY',        'ki,s=+4Ho 7T.3uQOCx-|%I.7g>PCv3F(k@XnB1.L*usWX&H=crz?}V:F$01SBul');
define('AUTH_SALT',        '[12rD0l!=5B#[Z8dP;jYfS%]V:PbFUl--^{=ue|G<ryzSwgN3Q VTExAliOJ%qT4');
define('SECURE_AUTH_SALT', 'uFklbsQ}pGjz_0VOB7/g%< +1<45q]>%:e=l!q~p_1X3i|3B|j4n903.jNCUYF6?');
define('LOGGED_IN_SALT',   'XX5sp=mh<VH~5ww+1iy746uf[e[~dnO9mTo>g/1z?e[1$[I-|H_@xGKgeNs-!6pf');
define('NONCE_SALT',       '-<~Q)]!}vCMoEz[W@!_3;YBL(m=7:S7%AC;~V9k66Zh;RMI?BQ#IgowaU?mZRIpK');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_2k17_lacoop_lb_';

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