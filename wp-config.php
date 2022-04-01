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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'f`:W#+ jWVc9DTOa/? TEQlbq2$#$EQg,zB4Vh4bV$.0hB~v@}Vkmgg<:vr(q@mA' );
define( 'SECURE_AUTH_KEY',  'y$R^~gwcXn-&ll[0mfx NUw*0Q!KCTpX|i&BsAmYP,i..Ks7_SlXo5$V:n(Ar=L(' );
define( 'LOGGED_IN_KEY',    'h?ZLPu]sz|v;z;UBY9<(M1X/%L u_7|T8ERB}~1Z1KzV@@1)X0K->hlIJfpi9TS>' );
define( 'NONCE_KEY',        'Z^uo_!X.]ikxMV@e[CL^!f<]5->tu3rR5/Ej)GQ/J<=b?=6NTQg2XQllP<z(%X=O' );
define( 'AUTH_SALT',        '90/#(o!`edOs*:+eOe/KO#~ ~zJi,Pd3]t9A[WyJtMQST0?IyDC@.iA+Mnc>J*R_' );
define( 'SECURE_AUTH_SALT', 'L+;*KgP_af/s+2>9FGagZ?<@?b;MGQj6]1:<o/s4j+S%%M?9ozlC-Rn%OtFx)`p.' );
define( 'LOGGED_IN_SALT',   ';c=AI~-x(87xf7C,nUPGK.Ju9{5g6u(]M-mxb(jH-[J_7e|of9z5Su2ZlCxcL.d(' );
define( 'NONCE_SALT',       'E:&kpe>]z=X nq3NaXY1*=7]9%>iz5vux}EY}hUp=2!iWUJ9{v<h8h)smF=$WE9[' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

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
