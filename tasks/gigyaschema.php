<?php
/**
 * Gigya FuelPHP
 *
 * FuelPHP Package (Models, etc.) for Gigya API (using the Gigya PHP SDK)
 * (http://developers.gigya.com/030_Server_SDKs/PHP)
 *
 * @package    Gigya FuelPHP
 * @version    1.0
 * @author     Carlos Noguera
 * @license    MIT License
 * @copyright  2013 Carlos Noguera
 * @link       http://carlosnoguera.com
 */
 
namespace Fuel\Tasks;

/**
 * Performs Gigya User 360 Schema tasks
 */
class GigyaSchema
{
	
	public function run()
	{
		$this->get();
	}
	
	public function get()
	{
		$gigya_account = new \Gigya\Model\GigyaAccount();
		$gigya_account->getSchema();
		
		// TO DO: error logging
		
		echo "\nProfile Schema:\n";
		echo "---------------\n";
		print_r($gigya_account->profileSchema);
		echo "\nData Schema:\n";
		echo "------------\n";
		print_r($gigya_account->dataSchema);
	}
	
	public function set()
	{
		// Load custom Gigya schema from app/config
		\Config::load('gigyaschema', true, true, true);
		
		$profile_schema = \Config::get('gigyaschema.profileSchema');
		$data_schema =  \Config::get('gigyaschema.dataSchema');
		
		$gigya_account = new \Gigya\Model\GigyaAccount();
		$gigya_account->setSchema($profile_schema, $data_schema);
		
		// TO DO: error logging
		
		echo "\nUpdated Profile Schema:\n";
		echo "---------------\n";
		print_r($profile_schema);
		echo "\nUpdated Data Schema:\n";
		echo "------------\n";
		print_r($data_schema);
	}
	
	public function reset()
	{
		// Load default Gigya schema from gigya/config
	}
	
}