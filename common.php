<?php 
//
#@
#====================CHÚ THÍCH================
# * VỚI CÁC BIẾN CÓ = TRUE TỨC ĐÂY LÀ BIẾN ON VÀ OFF ( KÍCH HOẠT VÀ VÔ HIỆU HÓA ), VÌ VẬY CHỈ ĐƯỢC PHÉP SỬ DỤNG FALSE HOẶC TRUE CHO CẤU HÌNH NÀY.
# * NẾU BIẾN CÓ CONF SET TỨC $_CONF['SET'], ĐÂY LÀ BIẾN ĐỂ CHỨA NỘI DUNG.
# * PHẦN CHỨC NĂNG BẢO VỆ, NẾU BẠN ĐÃ BẬT ANTI-F12-PRO RỒI THÌ KHÔNG ĐƯỢC PHÉP BẬT ANTI-F12 BASIC, VÀ NGƯỢC LẠI ( NẾU BẠN CỐ TÌNH, NÓ SẼ GÂY XUNG ĐỘT MÃ, LÀM CHO 1 MÃ TẮT 1 MÃ BẬT )
# * CÁC KÍ HIỆU ĐÁNH DẤU: (1,2,3) TỨC CẤP BẬC QUAN TRỌNG CỦA MÃ
# * NẾU HÀM CÓ CHỨA (3) ĐỒNG NGHĨA BẮT BUỘC PHẢI CÓ VÀ SỬ DỤNG, NẾU (1) CÓ NGHĨA NÓ KHÔNG QUAN TRỌNG. VÀ (2) CÓ NGHĨA MUỐN CÓ HAY KHÔNG CŨNG ĐƯỢC.
#=============================================
#@
//
function RandCache($len=8) #(3)
{
	return substr(md5(openssl_random_pseudo_bytes(5)),-$len);
}
    function initLocalConf() {
        $_CONF = array();
        return $_CONF;
    }
    
    $set_domain = $_SERVER['SERVER_NAME'];
    $set_domain = str_replace("https://", "", $set_domain);
    $set_domain = rtrim($set_domain, '/');
    $_CONF = initLocalConf();
    $ip = $_SERVER['REMOTE_ADDR'];
    $CACHE_CONF = '?'.bin2hex(random_bytes(20));
    $jsonapi = file_get_contents('https://api.thanhdieu.com/geoip.php');
    $data = json_decode($jsonapi, true);
    $country = isset($data['country']) ? $data['country'] : 'Unknow';

// CHỨC NĂNG BẢO VỆ
function ThannhDieuProtect() { 
        global $_CONF;
        $_CONF['anti-f12-pro'] = true; #(3) Bật siêu chống anti f12
        $_CONF['anti-f12-basic'] = true; #(2) Chống anti-f12 cơ bản
        $_CONF['anti-view-source'] = true; #(3) Chống view source ẩn mã nguồn
        $_CONF['combo-anti-ctrl+u'] = true; #(3) Combo ngăn nhấn phím vào dev-tools
        $_CONF['obf-resource-basic'] = true; #(3) Xáo trộn phần tử nếu người dùng ctrl+u
        $_CONF['captcha-anti-badbot'] = false; #(1) Captcha ngăn badbot độc hại
        // CHECK STATUS
        $status = "null";
        if ($_CONF['anti-f12-pro'] 
        || $_CONF['anti-f12-basic'] 
        || $_CONF['anti-view-source']
        || $_CONF['combo-anti-ctrl+u'] 
        || $_CONF['obf-resource-basic']
        || $_CONF['captcha-anti-badbot']) {
        $status = "Bạn đã bật chức năng phòng thủ";} else {$status = "Bạn đã tắt chức năng phòng thủ";}return $status;}
    
// CẤU HÌNH WEBSITE
function ThanhDieuConfig() {
        global $_CONF;
        $_CONF['SET']['name_site'] =  $GLOBALS['set_domain']; #(3)
        $_CONF['SET']['url_facebook'] = "https://fb.com/wusthanhdieu"; #(2)
        $_CONF['SET']['url_github'] = "https://github.com/wusthanhdieu"; #(2)
        $_CONF['SET']['url_blog'] = "https://blog.thanhdieu.com"; #(2)
        $_CONF['SET']['join_chat'] = "https://zalo.me/g/zxqlfs050"; #(2)
    }
// THÔNG SỐ ĐẦU TRANG
function ThanhDieuHead() {
    global $_CONF;
    $_CONF['SET']['title'] = "Profile Thông Tin Thanh Toán - " .$GLOBALS['set_domain']; // Tiêu đề trang #(3)
    $_CONF['SET']['keywords'] = "thanhdieu.com, blog.thanhdieu.com, api.thanhdieu.com, thanhdieu, profile thanhdieu, web thanh diệu, thông tin thanh toán website"; #(3) // Từ khóa tìm kiếm cách nhau bằng dấu phẩy
    $_CONF['SET']['description'] = "Trang thông tin thanh toán, copy số tài khoản chỉ với 1 click"; #(3) // Mô tả của trang
    $_CONF['SET']['og:description'] = "Trang profile thông tin thanh toán cá nhân"; #(3) // Mô tả nhỏ của trang
    $_CONF['SET']['og:site_name'] = "ThanhDieu.Com"; #(3) // Tên website
    $_CONF['SET']['og:title'] = "Profile Thông Tin Thanh Toán - ".$_CONF['SET']['og:site_name']; #(3) // Không cần đụng vào
    $_CONF['SET']['shortcut_icon'] = "https://i.imgur.com/mruOsLm.jpg "; // Icon của trang
    $_CONF['SET']['og:image'] = "https://i.imgur.com/NopdDnz.png"; #(3) // Hình thu nhỏ
}
// CHỈNH SỬA CHÂN TRANG
function ThanhDieuEffect() { #(2)
    global $_CONF;
        // HIỆU ỨNG HOA RƠI
        $_CONF['effect-hoaroi'] = true; #(2)
        // CỬA SỔ BẬT LÊN + NHẠC 
        $_CONF['effect-porn-up'] = true; #(3)
          // CHẾ ĐỘ DARK MODE
        $_CONF['dark-mode'] = false; #(3) // Nếu đặt đây là true, website sẽ luôn hiển thị chế độ tối, và nếu là false, tối hay sáng do người dùng tự bật.
         // HIỆU ỨNG CLICK
        $_CONF['effect-click'] = false; #(3) // Nếu đây là true, chức năng dark mode trên website sẽ bị xung đột. Chú ý, mặc định là false
}
$result = ThannhDieuProtect();
echo "<!--\nTrạng Thái: $result\nYour IP: $ip\n-->\n";
?>