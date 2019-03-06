<?php
/**
 * Custom USLS cookies for affiliates
 *
 * @package US Law Shield
 */

	function getUrlParams() {
		$p_affid = filter_input(INPUT_GET, 'affid', FILTER_SANITIZE_STRING);
		$p_banner = filter_input(INPUT_GET, 'banner', FILTER_SANITIZE_STRING);
		$p_cpgn = filter_input(INPUT_GET, 'cpgn', FILTER_SANITIZE_STRING);
		$p_link = filter_input(INPUT_GET, 'link', FILTER_SANITIZE_STRING);
		$p_refid = filter_input(INPUT_GET, 'refid', FILTER_SANITIZE_STRING);

		substr($p_affid, 0, 64);
		substr($p_cpgn, 0, 64);
		substr($p_banner, 0, 64);
		substr($p_link, 0, 64);
		substr($p_refid, 0, 64);

		$params_array = [$p_affid, $p_cpgn, $p_banner, $p_link, $p_refid];
		return $params_array;
	}

	add_action('init', 'uslsCookies');

	function uslsCookies() {
		$params_string = implode(',', getUrlParams ());
		$cookie_exp = time() + 2592000;
		if ($params_string != ',,,,') {
			setcookie('_tls_affiliate', $params_string, $cookie_exp, '/', '', true, true);
		}
	}
?>