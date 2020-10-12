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
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'apoena_consultoria' );

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
define( 'AUTH_KEY',         '6tVl  1l/8(Dh<^bQA~nAlarh.[|IrAZ*zu;%du$YR0cT$qn%6:;|sFkn{^EL2-1' );
define( 'SECURE_AUTH_KEY',  ':G^N$1w_xh?1y$dxd^b^G jqI2p:+?]T[eaxDA9;Rtdi?q>DKp)Ao[q{EU>D2eg@' );
define( 'LOGGED_IN_KEY',    '5w2yPBzcC[}#;NlLJJFM@)2*S%cZub@>YsZj[H2J5qZL!JX~S<&nt-|HaWM VBE.' );
define( 'NONCE_KEY',        'z6KGlfYMf )OJ[lze;c;:X?y[^o%%qWC].LzU4N_>Tv@UwnQ}Ow8/fbdnD8I}3pU' );
define( 'AUTH_SALT',        'nK&4%%1?]FanZu}Ns&=!?N-l`nZ*A1cY;Xx/]M=yL.8w>oyxpE|r`CWh||$?qTpp' );
define( 'SECURE_AUTH_SALT', 'BTsh*~e6$+Vd#CJVm5_!*x_xz0zTURvUaJG(S BJV_^PuOq3-it[:q/eBUUlJo9n' );
define( 'LOGGED_IN_SALT',   '-]b9.c%??rNp[:S<k=BoQ:t]b;{*VNP/fou`3L^H;iZ;pmU(OZ@]Mg^b]o1y2<@C' );
define( 'NONCE_SALT',       'L3L#A%#P;Fj>gMq:mgj25cei)W820nb7M1]B[d<5;-Rb=R:KLA/VzEm;pb>>sot{' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_apoena';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
