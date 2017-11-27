<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "home";
$route['trang-chu'] = 'home';
$route['gioi-thieu'] = 'introduc';
$route['khuyen-mai'] = 'promotion';
$route['doi-tac'] = 'partner';
$route['dich-vu'] = 'service';
$route['tin-tuc'] = 'news';
$route['huong-dan'] = 'news/huongdan';
$route['lien-he'] = 'news/lienhe';
$route['tin-tuc/(:num)'] = 'news/index/$1';
$route['xem-tin/(:num)(:any)'] = 'news/detail/$1';//chitiet_huongdan
$route['huong-dan/(:num)(:any)'] = 'news/chitiet_huongdan/$1';
$route['send-lien-he']  = "news/guilienhe";
$route['send-thanh-cong']  = "news/sendthanhcong";

$route['tin-tuc-xo-so'] = 'newsxoso';
$route['tin-tuc-xo-so/(:num)'] = 'newsxoso/index/$1';
$route['xem-tin-xo-so/(:num)(:any)'] = 'newsxoso/detail/$1';//chitiet_huongdan
 
$route['tag/(:any)'] = 'newsxoso/tag/$1';//chitiet_huongdan

$route['kien-thuc'] = 'kien_thuc';
$route['mega-6-45/so-ket-qua'] = 'ketquasoxo/soketqua_mega';
$route['max-4d/so-ket-qua'] = 'ketquasoxo/soketqua_max4d';
$route['mega-6-45/thong-ke-chi-tiet'] = 'thongke/thong_ke_chi_tiet';
$route['mega-6-45/thong-ke-dau-so'] = 'thongke/thong_ke_dau_so';
$route['mega-6-45/thong-ke-duoi-so'] = 'thongke/thong_ke_duoi_so';
$route['mega-6-45/thong-ke-chan-le'] = 'thongke/thong_ke_chan_le';
$route['mega-6-45/thong-ke-jackpot'] = 'thongke/thong_ke_jackpot';
$route['mega-6-45/thong-ke-tan-suat'] = 'thongke/thong_ke_tan_suat';
$route['thong-ke'] = 'thongke/thong_ke';
$route['ket-qua-so-xo-vietlott-mega-6-45/(:any)'] = 'home/view/$1';
$route['ket-qua-so-xo-vietlott-max-4d/(:any)'] = 'home/view_max/$1';

//may cai chua lam

$route['mega-6-45/ma-tran-mega'] = 'thongke/thong_ke_ma_tran_mega';
$route['mega-6-45/tan-suat-chi-tiet'] = 'thongke/thong_ke_ban_tan_suat_chi_tiet';
$route['mega-6-45/quay-thu-mega'] = 'thongke/thong_ke_quay_thu_mega';
$route['max-4d/thong-ke-tan-suat'] = 'thongke/thong_ke_max4d_thong_ke_tan_suat';
$route['max-4d/quay-thu-max4d'] = 'thongke/thong_ke_quay_thu_max4d';
 

//end may cai chua lam

$route['xem-danh-muc/(:num)(:any)'] = 'product/category/$1';
$route['xem-danh-muc/(:num)(:any)/page/(:num)'] = 'product/category/$1/$2';
$route['xem-san-pham/(:num)(:any)'] = 'product/detail/$1';
$route['tim-kiem'] = 'product/search';
$route['tim-kiem/?key=(:any)&page(:num)'] = 'product/search/?key=$1&page=$2';


$route['404_override'] = 'home/trang404';


/* End of file routes.php */
/* Location: ./application/config/routes.php */