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
 
/**
 * NOTICE:
 *
 * If you need to make modifications to the default configuration, copy
 * this file to your app/config folder, and make them in there.
 *
 * This will allow you to upgrade fuel without losing your custom config.
 */

return array(
	/**
	 * Making API calls requires an API Key and a Secret Key which are obtained from the Site Dashboard page 
	 * on the Gigya website. The Secret Key must be kept secret and never transmitted to an untrusted client 
	 * or over insecure networks. The API Key and the Secret Key are required parameter in each request.
	 */
	'api_key' => 'api_key_here',
	'secret_key' => 'secret_key_here',
	
	/**
	 * A comma-separated list of fields to include in the response. 
	 * The possible values are: identities-active, identities-all, loginIDs, 
	 * emails, profile, data, and irank. The default is profile and data.
	 */
	'include' => array(
		'identities-active',
		'identities-all',
		'loginIDs',
		'emails',
		'profile',
		'data',
		'irank'
	),
	
	/**
	 * A comma-separated list of additional social profile fields to retrieve. 
	 * The current valid values are: languages, address, phones, education, honors,
	 * publications, patents, certifications, professionalHeadline, bio, industry, 
	 * specialties, work, skills, religion, politicalView, interestedIn, 
	 * relationshipStatus, hometown, favorites, username, locale, verified, 
	 * and timezone.
	 */
	'extra_profile_fields' => array(
		'languages', 
		'address', 
		'phones', 
		'education', 
		'honors', 
		'publications', 
		'patents', 
		'certifications', 
		'professionalHeadline', 
		'bio', 
		'industry', 
		'specialties', 
		'work', 
		'skills', 
		'religion', 
		'politicalView', 
		'interestedIn', 
		'relationshipStatus', 
		'hometown', 
		'favorites', 
		'username', 
		'locale', 
		'verified', 
		'timezone'
	),
	
	/**
	 * Format of the Gigya response. 
	 * Options: json (default), jsonp (callback method required)
	 */
	'response_format' => 'json',
	
	/**
	 * Define the name of the callback method to be called in the response, 
	 * along with the jsonp response data.
	 */
	'callback' => null,
	
	/**
	 * HTTP response code set to reflect error if true, or always
	 * return 200 (OK) is false.
	 */
	'http_status_codes' => false,
	
	/**
	 * Time in seconds that Gigya should keep the login session valid for the user.
	 */
	'session_expiration' => null,

	/**
	 * Timeout for GSRequest, in miliseconds
	 */
	'request_timeout' => null,
	
	/**
	 * Set cURL options: http://php.net/manual/en/function.curl-setopt.php
	 */
	'curl_ssl_verifypeer' => false
);