<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'demov' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ' 9Wj{Is/,<,j657;O{ypR163wb(sl)_n/5Az,.?.qdj5fjKW}}L8qDub#rkA?GZf' );
define( 'SECURE_AUTH_KEY',  '`c=4>hxeua4+P#go(>1>W#}YE]$GT;dU3ww :N82vjp%Gi.W^?5Q-St:U NKoIN[' );
define( 'LOGGED_IN_KEY',    'Cfouw9*3;}Wp|BVukN4.:=LpNy!D.D~vey5# .yv!-tp %_@lB{aZ{(zlK BHrl0' );
define( 'NONCE_KEY',        'b5m~,anr;&r*hf2?#^Qc#NK#j(ZkkZDrIG0,OPH|p=V4_a={Ci.;qz{3O%DcnV+2' );
define( 'AUTH_SALT',        't1{X7Nt#jTsX{E/_`x;+AP1.aG4~(h{c!tq#_]KvGV{YOfb`1u0))Ud8gS[ mD&H' );
define( 'SECURE_AUTH_SALT', 'bUw &.PJAUe^YQ-%bv#pC^ymOTasuM(ai@>xHDuPRJA~;LtAqc$<;YRQmFdgxN<&' );
define( 'LOGGED_IN_SALT',   'yhHHd*o<Se.9Z8|I1NW+LfB,XD3@>8hdEg&yY|E B&ByiFgw&7xdcl}c E>R_ {%' );
define( 'NONCE_SALT',       'WO/;=lh-ue,N#<T|24Gvuhwf|^c<)3/ 0gCf!g $pQYd/2!rs-9,A43)ICe.%`9f' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
