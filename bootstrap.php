<?php
/**
 * Gigya Auth
 *
 * Authentication driver for the Gigya User Management 360 platform
 * (http://developers.gigya.com/010_Developer_Guide/10_UM360)
 *
 * @package    Gigya Auth
 * @version    1.0
 * @author     Carlos Noguera
 * @license    MIT License
 * @copyright  2013 Carlos Noguera
 * @link       http://carlosnoguera.com
 */
 
Autoloader::add_namespace('Gigya', __DIR__.'/classes/');

Autoloader::add_classes(array(
	'Gigya\\Model\\GigyaAPI' => __DIR__.'/classes/model/gigya.php',
	'Gigya\\Model\\GigyaAccount' => __DIR__.'/classes/model/accounts.php',
));