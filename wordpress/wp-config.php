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
define('DB_NAME', 'projet_perso');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'noblus');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'nodeya');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'vps68756.ovh.net');

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
define('AUTH_KEY',         'Vcg?>?WnEpPaB=A_9jAt$Ba/x$$5_:u8EgyEj 5`c}sRs?B7DwHZy$lc^6yKZ5ZA');
define('SECURE_AUTH_KEY',  '!1>Toi/[a[Ps-oGKF#auL4&>%8fs`P[3CT=b)N-JBX86pd[xPk6c#WcY`Glbl4L(');
define('LOGGED_IN_KEY',    '0HIy2KUMw{`%BHHgVOWz6F%8TbsR#5q^h/`~q5jOio-TjxMNUY+:.G [j7m9YKKx');
define('NONCE_KEY',        '-6*r^00U``p,?q^t{27~`tta7I;Cdga61$@~^gu5voiFc.T,R7||.9o~exd r!%|');
define('AUTH_SALT',        '@?^X&cjPK_+|A_}6y${D%~_knOt)>wC|f?}_Yr{9,EKMQ$P;)irCr`eI@#.#Xt06');
define('SECURE_AUTH_SALT', 'L/I-,3aR=uc]BL?2)~rk{{j~`{9l/i67-7CT=[L!0_Y!)^$-lN~R-21OX&RE7K_*');
define('LOGGED_IN_SALT',   '.GWM;vrRtyW;7!aS&!!d:*!kELwP7`@Zr^<g&b6P.ErQ7NMPu#3`,3hZ9zmT[xW-');
define('NONCE_SALT',       'g/_iqp/#Ah^H+qy+[$J8e6cnP/{Q[V~%:ENo1]CkB20MpLRMR=mgP~2>nDj9h.3g');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wperso_';

/**
 * Langue de localisation de WordPress, par défaut en Anglais.
 *
 * Modifiez cette valeur pour localiser WordPress. Un fichier MO correspondant
 * au langage choisi doit être installé dans le dossier wp-content/languages.
 * Par exemple, pour mettre en place une traduction française, mettez le fichier
 * fr_FR.mo dans wp-content/languages, et réglez l'option ci-dessous à "fr_FR".
 */
define('WPLANG', 'fr_FR');

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