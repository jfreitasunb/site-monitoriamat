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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'site_monitoria_mat');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'site_monitoria_mat');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'estudos');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         ' (Y5s7h&Slv5c#%M/XOb.spJ8$?hdh+l2+F3uu# )Y]p%e`cr`P}@pOlV*1=qK}_');
define('SECURE_AUTH_KEY',  '8=Ez5s{XYjhj5Dqac0~USngKY[$B`A&wu/~ycaA>{Qu=X(@C#yO[iI0M)2x5cwTI');
define('LOGGED_IN_KEY',    '*mdI*]]+b6(x2Ht{B:m+TRa- ,-vxeyM$:%,E2$mj;Z3^1;xSL4d Q_bQ<IPeI;&');
define('NONCE_KEY',        'Q|(rMf3/Qj[%HRs.t~=bnktR_]J($w08UAht0TMXIS+{(e1Ge+:I8C,oxaL#hI+f');
define('AUTH_SALT',        'J:)!-dT{QdNzB]Ck0s-tK6b]6@YJat,mR,Vl@NodI,JGHL#HAc[~P%Ks@;GYB}`>');
define('SECURE_AUTH_SALT', '&rAq%P`2OEn<u9sg1yqJ[(i69@-sp^$<5qW< }!^Z&u#ZqUS{Ai4*S>@ztL+6f=k');
define('LOGGED_IN_SALT',   '-;A?Ff,jJq6@1/bql^?fUuH6vt`Wh^pfh$KTrjl8jroYvEL^j?>3tRk{Q(ro3`K,');
define('NONCE_SALT',       'dJ!d=EjdjIQ5A^aQp*-`$*DWl7fTU~U ~dt8=G_z~uyjJ{v+&G?M)jR3>.[nj{7#');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_smm_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
