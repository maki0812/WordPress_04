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
 * * データベース設定
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

// ** データベース設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'wp04db' );

/** データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** データベースのパスワード */
define( 'DB_PASSWORD', '' );

/** データベースのホスト名 */
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
define( 'AUTH_KEY',         'OO^rRNyrK.I4`7IgCg<FM_N,=y[28Lf.2b9eR=V/5?<6p$6EmB|HnE_xl_Pn2q)j' );
define( 'SECURE_AUTH_KEY',  '@L:/*10X,%]!N*aMhap0gW6xl{)lZn:{w DeIH{hgz1Rp^a@n@|.ZE,7JnjN6UPZ' );
define( 'LOGGED_IN_KEY',    'E)*XHD[P;Fb&{}wb(x=Oo<6eZM+X(ZRucB9EuyqAwQ&t/@8`oP_!Poj8+|`x[)oy' );
define( 'NONCE_KEY',        'B9bsiDo>R1l`k{[2IjA`dW8O9h)GQ.@pB+.zpq4 243t@7HB2sa)h10hztq1I!ir' );
define( 'AUTH_SALT',        'Ab.6l_!MU29k~mp+,^&ARi/X(O5|i[|**BHb0iX9O:]T@>*IzP~aBBd>;,[7lfi:' );
define( 'SECURE_AUTH_SALT', 'OS=d11FUb5pBU,]f9Z?]Y@KbFC30XyAfj)EMac{.)LttX{PN:rh>V9vT_u<VyAQ.' );
define( 'LOGGED_IN_SALT',   'Iksg. f3%>Pe;>It~8$U+49ewh%h_NZF?jUj_FVP,r]ObwCtRl)k!~VUj~DaZ(C_' );
define( 'NONCE_SALT',       'uo$fR&-Es1F<gbz~}tg8N;<-z]e=6&C`YI4VFj|q2_V~b|;$2YZ}YFyEW2z!64:W' );

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

/* カスタム値は、この行と「編集が必要なのはここまでです」の行の間に追加してください。 */



/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
