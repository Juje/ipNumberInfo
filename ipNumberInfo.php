<?php

/**
 * This file contains the ipNumberInfo function
 * 
 * @author Jurjen Beukenhorst <info@juje007.be>
 * @version 1.0
 * @example http://juje007.be/ipNumberInfo/
 */

/**
 * ipNumberInfo() gets all the number information about an IP.
 * The Decimal, Hexadecimal, Octal and the Binary version of the IP.
 * @param string $real_ip The IP
 * @return array An array with information
 */
function ipNumberInfo($real_ip) {
	list($ipPart1, $ipPart2, $ipPart3, $ipPart4) = explode('.', $real_ip);

	$ipPart1 = ($ipPart1 == '') ? 0 : $ipPart1;
	$ipPart2 = ($ipPart2 == '') ? 0 : $ipPart2;
	$ipPart3 = ($ipPart3 == '') ? 0 : $ipPart3;
	$ipPart4 = ($ipPart4 == '') ? 0 : $ipPart4;

	$ipPart1 = ($ipPart1 > 255) ? 255 : $ipPart1;
	$ipPart2 = ($ipPart2 > 255) ? 255 : $ipPart2;
	$ipPart3 = ($ipPart3 > 255) ? 255 : $ipPart3;
	$ipPart4 = ($ipPart4 > 255) ? 255 : $ipPart4;

	$ip = 0;
	$ip += $ipPart1 * 16777216;
	$ip += $ipPart2 * 65536;
	$ip += $ipPart3 * 256;

	return array(
		'ip' => "$ipPart1.$ipPart2.$ipPart3.$ipPart4",
		'dec' => $ip + $ipPart4,
		'hex' => dechex($ip + $ipPart4),
		'oct' => decoct($ip + $ipPart4),
		'bin' => decbin($ip + $ipPart4),
		'firstIp' => array(
			'ip' => "$ipPart1.$ipPart2.$ipPart3.0",
			'dec' => $ip,
			'hex' => dechex($ip),
			'oct' => decoct($ip),
			'bin' => decbin($ip),
		),
		'lastIp' => array(
			'ip' => "$ipPart1.$ipPart2.$ipPart3.255",
			'dec' => $ip + 255,
			'hex' => dechex($ip + 255),
			'oct' => decoct($ip + 255),
			'bin' => decbin($ip + 255),
		)
	);
}

?>