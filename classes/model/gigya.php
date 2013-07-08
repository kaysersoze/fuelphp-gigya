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

class GigyaAPI extends \Model implements \ArrayAccess
{
	
	private $_api_key;
	private $_secret_key;
	private $_debug;
	
	private $_lang;
	private $_target_env;
	private $_response_format;
	private $_callback_method;
	private $_http_status_codes;
	private $_session_expiration;
	
	private $_request;
	private $_response;
	private $_data;
	private $_error;
	
	public function __construct($debug = false)
	{
		// Core Gigya API settings
		$this->_api_key = \Config::get('gigya.api_key');
		$this->_secret_key = \Config::get('gigya.secret_key');
		$this->_debug = (bool)$debug;
		
		// Response defaults
		$this->_response_format = \Config::get('gigya.response_format');
		$this->_callback_method = \Config::get('gigya.callback');
		$this->_http_status_codes = \Config::get('gigya.http_status_codes');
		$this->_session_expiration = \Config::get('gigya.session_expiration');
		
		// GigyaAPI object defaults
		$this->_response = false;
		$this->_data = false;
		$this->_error = false;
		
		return $this;
	}
	
	/**
	 * init the class
	 */
   	public static function _init()
	{
		// auth config
		\Config::load('gigya', true);

		// model language file
		// \Lang::load('gigya', true);
	}
	
	public static function forge(\stdClass $data = null)
	{
		$forged_class_name = "\\" . get_called_class();
		$forged_class = new $forged_class_name;
		foreach($data as $key => $item)
		{
			$forged_class->{$key} = $item;
		}
		
		return $forged_class;
	}
	
	public function hasErrors()
	{
		if($this->_error['code'] == 0) {
			return false;
		} else {
			return true;
		}
	}

	
	/**
	 * Sets the value of the given offset (class property).
	 *
	 * @param   string  $offset  class property
	 * @param   string  $value   value
	 * @return  void
	 */
	public function offsetSet($offset, $value)
	{
		$this->{$offset} = $value;
	}

	/**
	 * Checks if the given offset (class property) exists.
	 *
	 * @param   string  $offset  class property
	 * @return  bool
	 */
	public function offsetExists($offset)
	{
		return property_exists($this, $offset);
	}

	/**
	 * Unsets the given offset (class property).
	 *
	 * @param   string  $offset  class property
	 * @return  void
	 */
	public function offsetUnset($offset)
	{
		unset($this->{$offset});
	}

	/**
	 * Gets the value of the given offset (class property).
	 *
	 * @param   string  $offset  class property
	 * @return  mixed
	 */
	public function offsetGet($offset)
	{
		if (property_exists($this, $offset))
		{
			return $this->{$offset};
		}

		throw new \OutOfBoundsException('Property "'.$offset.'" not found for '.get_called_class().'.');
	}
	
	public function _processRequest($function, $params = array(), $https = false) 
	{
		// Set global optional call parameters
		if(!empty($this->_response_format)) 
		{
			$params['format'] = $this->_response_format;
		}
		if(!empty($this->_callback_method)) 
		{
			$params['callback'] = $this->_callback_method;
		}
		if(!empty($this->_http_status_codes)) 
		{
			$params['httpStatusCodes'] = $this->_http_status_codes;
		}
		
		// Set fields to be included in response
		if(!empty($this->_include)) 
		{
			$params['include'] = $this->_include;
		}
		if(!empty($this->_extra_profile_fields)) 
		{
			$params['extra_profile_fields'] = $this->_extra_profile_fields;
		}
	
		// Make Gigya API Request
		if(!empty($this->_api_segment)) 
		{
			$this->_request = new \Gigya\GSRequest(
				$this->_api_key,
				$this->_secret_key,
				$this->_api_segment . '.' . $function,
				new \Gigya\GSObject($params),
				$https
			);
		} else {
			
		}
		
		// Set Gigya cURL options
		$this->_request->setCurlOptionsArray(array(
			CURLOPT_SSL_VERIFYPEER => \Config::get('gigya.curl_ssl_verifypeer')
		));
		
		// Process Gigya API response
		$this->_response = $this->_request->send();
		if(!empty($this->_response))
		{
			$this->_data = $this->_response->getData();
			$this->_processResponse();
		}
		
		// Debug logging - log
		/*
		if(!empty($this->_response) && $this->_debug) 
		{
			\Log::error($this->_response->getResponseText());
			\Log::error($this->_response->getLog());
		}
		*/
		
		return $this->_response;
	}
	
	public function _getRequest()
	{
		return $this->_request;
	}
	
	public function _processResponse()
	{
		$this->_processErrors();
		
		$data = json_decode($this->_data->toJsonString());
		foreach($data as $key => $item)
		{
			$this->{$key} = $item;
		}
	}
	
	public function _getResponse()
	{
		return $this->_response;
	}
	
	public function _processErrors()
	{
		$this->_error = array(
			'code' => $this->_response->getErrorCode(),
			'message' => $this->_response->getErrorMessage()
		);
		
		if($this->_debug && ($this->_error['code'] != 0)) 
		{
			\Log::error($this->_error['code'] . ' - ' . $this->_error['message']);
		}
	}
	
	public function _getErrors()
	{
		return $this->_errors;
	}
	
}