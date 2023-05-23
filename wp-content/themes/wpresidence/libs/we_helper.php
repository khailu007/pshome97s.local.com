<?php
class weHelper
{
	public static function weGetLatinh($str) {
	    $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
	    $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
	    $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
	    $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
	    $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
	    $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
	    $str = preg_replace("/(đ)/", 'd', $str);
	    $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $str);
	    $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
	    $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
	    $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $str);
	    $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $str);
	    $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $str);
	    $str = preg_replace("/(Đ)/", 'D', $str);
	    $str = preg_replace("/(\“|\”|\‘|\’|\,|\!|\&|\;|\@|\#|\%|\~|\`|\=|\_|\'|\]|\[|\}|\{|\)|\(|\+|\^)/", ' ', $str);
	    // $str = preg_replace("/( )/", '-', $str);
	    return $str;
	}

	public static function weGetLatinhDay($str) {
	    $str = preg_replace("/(Thứ 2)/", 'Monday', $str);
	    $str = preg_replace("/(Thứ 3)/", 'Tuesday', $str);
	    $str = preg_replace("/(Thứ 4)/", 'Wednesday', $str);
	    $str = preg_replace("/(Thứ 5)/", 'Thursday', $str);
	    $str = preg_replace("/(Thứ 6)/", 'Friday', $str);
	    $str = preg_replace("/(Thứ 7)/", 'Saturday', $str);
	    $str = preg_replace("/(Chủ nhật)/", 'Sunday', $str);
	    return $str;
	}
}
?>