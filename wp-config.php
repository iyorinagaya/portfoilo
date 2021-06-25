<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'portfolio' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'karinan09' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'iT #TpW[!e[D04K`LQzMKmUZV,UNizpE%}g*,*>6)hHG8}Rl^W:|QRZzJ,?.48GC' );
define( 'SECURE_AUTH_KEY',  '+r{ft6$Pw<*{m_ZOhx4e0p-LD/oqH@^7dc[-W4I&W]}t! ,xj=-701A6LbI;AF*I' );
define( 'LOGGED_IN_KEY',    'i&Yk3j#?N2{Nx#!Y;c.A_LvsbJjg)7phs%NVvs`>(Gr7%j&n-0%=fDJjMWe0M0or' );
define( 'NONCE_KEY',        'X8_q+v0(iBcV+7L&)N5+6c@2E(4*J>v}Qfo. LXQ<Jh{LhM{w%>rd<^v4LVtASE>' );
define( 'AUTH_SALT',        'xU+12#&JnFF-*`6HEE*r;3l;=}meO}WtWqL:lOVxl*U~kSHng gL?ChlR6toUR1q' );
define( 'SECURE_AUTH_SALT', 'k@Z-Iz-futEX:qcU KRW_*kT`44a?#EL]WX&?yhuO*UqKVNVsL1Dtap7c, |qAAF' );
define( 'LOGGED_IN_SALT',   'T)#-Im<JmRaC2fdM7z+[*+K<df[MR2HneZQ2`|N~tOtU5?9yEBlO~2QR|K~2{o1_' );
define( 'NONCE_SALT',       '{EW$p($Np1rEN$iFJe`<[zt8 08Fv(PMz[fUkL]2h8S&-w,b6k4-}3sb{UO)rB?/' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
