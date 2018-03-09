<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Bitcoin Index Config
 * 
 * This file contains the list of configured bitcoin price index sources
 * Requests to these URL's act according to the global proxy, configurable
 * in the admin panel.
 */
 
$config = array();
$config['Disabled'] = array('disabled' => true);
$config['CoinDesk'] = array('url' => 'http://api.coindesk.com/v1/bpi/currentprice.json');
$config['BitcoinAverage'] = array('url' => 'https://api.bitcoinaverage.com/all');
$config['Blockchain'] = array('url' => 'https://blockchain.info/it/ticker');
$config['Cryptocompare'] = array('url' => 'https://min-api.cryptocompare.com/data/price?fsym=BTC&tsyms=BTC,BCH,ETH,LTC,USD,EUR,GBP,CAD,AUD,SEK,NOK,DKK,TRY,CNH,HKD,RUB,INR,JPY,CNY');
