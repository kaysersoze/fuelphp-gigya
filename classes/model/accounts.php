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
 
namespace Gigya\Model;

/**
 * Giya Accounts
 * http://developers.gigya.com/037_API_reference/020_Accounts
 *
 * @package     Gigya
 * @subpackage  API
 */
class GigyaAccount extends GigyaAPI
{

	protected $_api_segment = 'accounts';
	
	public function __construct($debug = false)
	{
		parent::__construct($debug);
		
		$this->_include = implode(',', \Config::get('gigya.include'));
		$this->_extra_profile_fields = implode(',', \Config::get('gigya.extra_profile_fields'));
		
		return $this;
	}
	
	
	public function initRegistration()
	{
		$response = $this->_processRequest('initRegistration');
	}
	
	public function isAvailableLoginID($username_or_email)
	{
		$params = array(
			'loginID' => $username_or_email
		);
		$this->_processRequest('isAvailableLoginID', $params);
	}
	
	public function register($username = null, $email = null, $password, 
		$reg_token, $profile = array(), $data = array(), $captcha_token = null, 
		$captcha_text = null, $security_question = null, $security_answer = null, 
		$finalize_registration = true
	) {
		if(empty($username) && empty($email)) 
		{
			throw new \Exception(
				0,
				'username or email is required.'
			);
		}
		if(!empty($username)) 
		{
			$params['username'] = $username;
		}
		if(!empty($email)) 
		{
			$params['email'] = $email;
		}
		$params['password'] = $password;
		$params['regToken'] = $reg_token;
		if(!empty($profile)) 
		{
			$params['profile'] = json_encode($profile);
		}
		if(!empty($data)) 
		{
			$params['data'] = json_encode($data);
		}
		if(!empty($captcha_token)) 
		{
			$params['captchaToken'] = $captcha_token;
		}
		if(!empty($captcha_text)) 
		{
			$params['captchaText'] = $captcha_text;
		}
		if(!empty($security_question)) 
		{
			$params['securityQuestion'] = $security_question;
		}
		if(!empty($security_answer)) 
		{
			$params['securityAnswer'] = $security_answer;
		}
		$params['finalizeRegistration'] = $finalize_registration;
		
		$this->_processRequest('register', $params, true);
	}
	
	public function finalizeRegistration()
	{
		
	}
	
	public function linkAccounts()
	{
		
	}
	
	public function resendVerificationCode()
	{
		
	}
	
	public function resetPassword()
	{
		
	}
	
	public function login($username_or_email, $password)
	{
		$params = array(
			'loginID' => $username_or_email,
			'password' => $password
		);
		$this->_processRequest('login', $params, true);
		
		\Log::Error(print_r($this, true));
	}
	
	public function notifyLogin()
	{
		
	}
	
	public function logout()
	{
		
	}
	
	/**
	 * Queries accountsing using SQL-like syntax, described in:
	 * http://developers.gigya.com/037_API_reference/020_Accounts/accounts.search
	 */
	public function search($query = null, $cursor_id = null, $open_cursor = false, 
		$auto_forge = true
	) {
		if(empty($query) && empty($cursor_id)) 
		{
			throw new \Exception(
				0,
				'query or cursorId is required.'
			);
		}
		if(!empty($query)) 
		{
			$params['query'] = $query;
		}
		if(!empty($open_cursor)) 
		{
			$params['openCursor'] = $open_cursor;
		}
		if(!empty($cursor_id)) 
		{
			$params['cursorId'] = $cursor_id;
		}
		
		$this->_processRequest('search', $params);
		
		if(!empty($this->results)) {
			if($auto_forge) {
				foreach($this->results as $key => $result) {
					$this->results[$key] = $this->forge($result);
				}
			}
			
			return $this->results;
		} else {
			return false;
		}
	}
	
	public function getAccountInfo($uid = null, $reg_token = null)
	{
		if(empty($uid) && empty($reg_token)) 
		{
			throw new \Exception(
				0,
				'UID or regToken is required.'
			);
		}
		if(!empty($uid)) 
		{
			$params['UID'] = $uid;
		}
		if(!empty($reg_token)) 
		{
			$params['regToken'] = $reg_token;
		}
	}
	
	public function setAccountInfo()
	{
		
	}
	
	public function importProfilePhoto()
	{
		
	}
	
	public function publishProfilePhoto()
	{
		
	}
	
	public function deleteAccount()
	{
		
	}
	
	public function getSchema($filter = 'full')
	{
		$params = array(
			'filter' => $filter
		);
		$this->_processRequest('getSchema', $params);
	}
	
	public function setSchema($profile_schema = array(), $data_schema = array())
	{
		if(!empty($profile_schema)) 
		{
			$params['profileSchema'] = json_encode($profile_schema);
		}
		if(!empty($data_schema)) 
		{
			$params['dataSchema'] = json_encode($data_schema);
		}
		
		if(!empty($params)) 
		{
			$this->_processRequest('setSchema', $params, true);
		} else {
			throw new \Exception(
				0,
				'profileSchema or dataSchema are required.'
			);
		}
		
	}
	
	public function getPolicies()
	{
		
	}
	
	public function setPolicies()
	{
		
	}
	
	public function getScreenSets()
	{
		
	}
	
	public function setScreenSet()
	{
		
	}
	
	public function deleteScreenSet()
	{
		
	}
	
}