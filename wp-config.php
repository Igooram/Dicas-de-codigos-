<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'sitewordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '}|T<-eLx1l.:+%C48My}!9C^;~qiuezRC#@v3mt;JO|D*2;INbDnD*:SI!^af~/o' );
define( 'SECURE_AUTH_KEY',  'Pu{=U+M1S@_?+|WKP@P7*dg!B:_RBC6sj^;%m-ha. q aw[G0t3`0ESnVX@,B72a' );
define( 'LOGGED_IN_KEY',    '6/hV#Tdd1?[KzN&oYU.Glc.@m;Xvlye]<s-<l%*bB9Ro5n)Lh-f|_v4#n+ei3~M<' );
define( 'NONCE_KEY',        '%z(jYJ}tfq>cOu`,ieY9@VYS$ vj(07Y3IJ9(.)zo%w*6@6NLOVRIjJy48LU~s m' );
define( 'AUTH_SALT',        '-;;I7u]zs.#[6K]tm>njV-VPlZqs*l@#kH!6Wuvgqjjr~jcvP}QB/|(0!Chvoz^U' );
define( 'SECURE_AUTH_SALT', 's.@kysAyW b`* 1Z$wk.k$^~3JEsZ9XbnxycM1MRyXdtn+8Ztr3x &+mB3HH&u{x' );
define( 'LOGGED_IN_SALT',   '5J.,>3V*pQn!+HB;VC{*eN5D}$n5<mPo3Fti4L,<NIZl^AOz|tDlDiX1=S:Mu%@8' );
define( 'NONCE_SALT',       '6O?$Igp%LQQm2X`uMj;$+Rn.*5fXr,M|cY=~~ruxZ N,n9R-MZ1aG$sIxJ?1:Z*=' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
