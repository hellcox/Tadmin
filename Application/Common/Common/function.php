<?php
/**
 * 全局公共方法
 */

/**
 * 密码加密
 * @param string $password 传入密码
 */
function get_pass($password){
	return md5($password.C('PASS_KEY'));
}