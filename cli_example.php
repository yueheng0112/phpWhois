#!/usr/local/bin/php -n
<?php
include("main.whois");

if (isset($argv[1]))
	$domain=$argv[1];
else
	$domain = "example.com";

$whois = new Whois($domain);
$result = $whois->Lookup();

print_r($result);
?>