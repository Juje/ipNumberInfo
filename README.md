ipNumberInfo
============

About ipNumberInfo
------------------
ipNumberInfo is a simple PHP function which gives the number information about an IP.
The Decimal, Hexadecimal, Octal and the Binary version of the IP.

Syntax
------
	array ipNumberInfo ( string $ip )

Usage
-----
How to get the information:

	$ip = ipNumberInfo('255.255.255.128');

The input:

	echo $ip['ip']	// 255.255.255.128
	echo $ip['dec'] // 4294967168
	echo $ip['hex']	// ffffff80
	echo $ip['oct']	// 37777777600
	echo $ip['bin']	// 11111111111111111111111110000000

The first IP in that range:

	echo $ip['firstIp']['ip']	// 255.255.255.0
	echo $ip['firstIp']['dec']	// 4294967040
	echo $ip['firstIp']['hex']	// ffffff00
	echo $ip['firstIp']['oct']	// 37777777400
	echo $ip['firstIp']['bin']	// 11111111111111111111111100000000

The last IP in that range:

	echo $ip['lastIp']['ip']	// 255.255.255.255
	echo $ip['lastIp']['dec']	// 4294967295
	echo $ip['lastIp']['hex']	// ffffffff
	echo $ip['lastIp']['oct']	// 37777777777
	echo $ip['lastIp']['bin']	// 11111111111111111111111111111111

Example
-------
A live example can be viewed at http://juje007.be/ipNumberInfo/