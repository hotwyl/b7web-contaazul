<?php
require 'environment.php';

global $config;
$config = array();
if(ENVIRONMENT == 'development') {
	$config['dbname'] = 'hg3won41_contaazul';
	$config['host'] = 'nspro32.hostgator.com.br';
	$config['dbuser'] = 'hg3won41_hotwyl';
	$config['dbpass'] = 'willfrombrasil';
} else {
	$config['dbname'] = 'hg3won41_contaazul';
	$config['host'] = 'nspro32.hostgator.com.br';
	$config['dbuser'] = 'hg3won41_hotwyl';
	$config['dbpass'] = 'willfrombrasil';
}
?>