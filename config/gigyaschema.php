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
	 * Default Gigya schema for profile and data fields
	 * This file is for reference to the default schema. Please make all changes
	 * such as setting profile fields to 'clientModify' in a custom configuration 
	 * in your app/config folder. This will allow you to be able to reset() the schema 
	 * to Gigya default values if necessary. 
	 *
	 * http://developers.gigya.com/037_API_reference/020_Accounts/accounts.setSchema
	 * NOTE: "you may only set the writeAccess and the required properties on the Profile fields"
	 */
	 'profileSchema' => array(
		 'fields' => array(
			 'birthYear' => array(
				 'writeAccess' => 'clientModify',
				 'arrayOp' => 'push',
				 'type' => 'integer',
				 'allowNull' => true,
				 'required' => false
			),
			'country' => array(
				'writeAccess' => 'clientModify',
				'arrayOp' => 'push',
				'type' => 'string',
				'allowNull' => true,
				'required' => false
			),
			'email' => array(
				'writeAccess' => 'clientModify',
				'arrayOp' => 'push',
				'encrypt' => 'AES',
				'type' => 'string',
				'allowNull' => true,
				'format' => "regex('^[0-9a-zA-Z!#\\$%&'\\*\\+\\-/=\\?\\^_`\\array(\\|\\}\\~\\.]+@[a-zA-Z0-9-]+(\\.[a-zA-Z0-9-]+)*(\\.[a-zA-Z]array(2,4})$')",
				'required' => false
			),
			'firstName' => array(
				'writeAccess' => 'clientModify',
				'arrayOp' => 'push',
				'encrypt' => 'AES',
				'type' => 'string',
				'allowNull' => true,
				'required' => false
			),
			'lastName' => array(
				'writeAccess' => 'clientModify',
				'arrayOp' => 'push',
				'encrypt' => 'AES',
				'type' => 'string',
				'allowNull' => true,
				'required' => false
			),
			'zip' => array(
				'writeAccess' => 'clientModify',
				'arrayOp' => 'push',
				'type' => 'string',
				'allowNull' => true,
				'required' => false
			),
			'nickname' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'string',
				'allowNull' => true,
				'required' => false
			),
			'gender' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'string',
				'allowNull' => true,
				'format' => "regex('^[fm]array(1}$')",
				'required' => false
			),
			'age' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'integer',
				'allowNull' => true,
				'required' => false
			),
			'birthDay' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'integer',
				'allowNull' => true,
				'required' => false
			),
			'birthMonth' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'integer',
				'allowNull' => true,
				'required' => false
			),
			'proxyemail' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'string',
				'allowNull' => true,
				'required' => false
			),
			'state' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'string',
				'allowNull' => true,
				'required' => false
			),
			'city' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'string',
				'allowNull' => true,
				'required' => false
			),
			'profileURL' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'string',
				'allowNull' => true,
				'required' => false
			),
			'photoURL' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'string',
				'allowNull' => true,
				'required' => false
			),
			'thumbnailURL' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'string',
				'allowNull' => true,
				'required' => false
			),
			'languages' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'string',
				'allowNull' => true,
				'required' => false
			),
			'address' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'encrypt' => 'AES',
				'type' => 'string',
				'allowNull' => true,
				'required' => false
			),
			'honors' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'string',
				'allowNull' => true,
				'required' => false
			),
			'professionalHeadline' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'string',
				'allowNull' => true,
				'required' => false
			),
			'industry' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'string',
				'allowNull' => true,
				'required' => false
			),
			'specialities' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'string',
				'allowNull' => true,
				'required' => false
			),
			'religion' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'string',
				'allowNull' => true,
				'required' => false
			),
			'politicalView' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'string',
				'allowNull' => true,
				'required' => false
			),
			'interestedIn' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'string',
				'allowNull' => true,
				'required' => false
			),
			'relationshipStatus' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'string',
				'allowNull' => true,
				'required' => false
			),
			'hometown' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'string',
				'allowNull' => true,
				'required' => false
			),
			'bio' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'string',
				'allowNull' => true,
				'required' => false
			),
			'username' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'string',
				'allowNull' => true,
				'required' => false
			),
			'name' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'string',
				'allowNull' => true,
				'required' => false
			),
			'locale' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'string',
				'allowNull' => true,
				'required' => false
			),
			'verified' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'string',
				'allowNull' => true,
				'required' => false
			),
			'timezone' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'string',
				'allowNull' => true,
				'required' => false
			),
			'phones.type' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'string',
				'allowNull' => true,
				'required' => false
			),
			'phones.number' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'string',
				'allowNull' => true,
				'required' => false
			),
			'publications.title' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'string',
				'allowNull' => true,
				'required' => false
			),
			'publications.summary' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'string',
				'allowNull' => true,
				'required' => false
			),
			'publications.publisher' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'string',
				'allowNull' => true,
				'required' => false
			),
			'publications.date' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'date',
				'allowNull' => true,
				'required' => false
			),
			'publications.url' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'string',
				'allowNull' => true,
				'required' => false
			),
			'patents.title' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'string',
				'allowNull' => true,
				'required' => false
			),
			'patents.summary' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'string',
				'allowNull' => true,
				'required' => false
			),
			'patents.number' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'string',
				'allowNull' => true,
				'required' => false
			),
			'patents.office' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'string',
				'allowNull' => true,
				'required' => false
			),
			'patents.status' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'string',
				'allowNull' => true,
				'required' => false
			),
			'patents.date' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'date',
				'allowNull' => true,
				'required' => false
			),
			'patents.url' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'string',
				'allowNull' => true,
				'required' => false
			),
			'certifications.name' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'string',
				'allowNull' => true,
				'required' => false
			),
			'certifications.authority' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'string',
				'allowNull' => true,
				'required' => false
			),
			'certifications.number' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'string',
				'allowNull' => true,
				'required' => false
			),
			'certifications.startDate' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'date',
				'allowNull' => true,
				'required' => false
			),
			'certifications.endDate' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'date',
				'allowNull' => true,
				'required' => false
			),
			'skills.skill' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'string',
				'allowNull' => true,
				'required' => false
			),
			'skills.level' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'string',
				'allowNull' => true,
				'required' => false
			),
			'skills.years' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'integer',
				'allowNull' => true,
				'required' => false
			),
			'education.school' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'string',
				'allowNull' => true,
				'required' => false
			),
			'education.schoolType' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'string',
				'allowNull' => true,
				'required' => false
			),
			'education.fieldOfStudy' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'string',
				'allowNull' => true,
				'required' => false
			),
			'education.degree' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'string',
				'allowNull' => true,
				'required' => false
			),
			'education.startYear' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'integer',
				'allowNull' => true,
				'required' => false
			),
			'education.endYear' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'integer',
				'allowNull' => true,
				'required' => false
			),
			'work.company' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'string',
				'allowNull' => true,
				'required' => false
			),
			'work.companyID' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'string',
				'allowNull' => true,
				'required' => false
			),
			'work.title' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'string',
				'allowNull' => true,
				'required' => false
			),
			'work.companySize' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'integer',
				'allowNull' => true,
				'required' => false
			),
			'work.startDate' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'date',
				'allowNull' => true,
				'required' => false
			),
			'work.endDate' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'date',
				'allowNull' => true,
				'required' => false
			),
			'work.industry' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'string',
				'allowNull' => true,
				'required' => false
			),
			'work.isCurrent' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'boolean',
				'allowNull' => true,
				'required' => false
			),
			'favorites.interests.name' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'string',
				'allowNull' => true,
				'required' => false
			),
			'favorites.interests.category' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'string',
				'allowNull' => true,
				'required' => false
			),
			'favorites.activities.name' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'string',
				'allowNull' => true,
				'required' => false
			),
			'favorites.activities.category' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'string',
				'allowNull' => true,
				'required' => false
			),
			'favorites.books.name' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'string',
				'allowNull' => true,
				'required' => false
			),
			'favorites.books.category' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'string',
				'allowNull' => true,
				'required' => false
			),
			'favorites.music.name' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'string',
				'allowNull' => true,
				'required' => false
			),
			'favorites.music.category' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'string',
				'allowNull' => true,
				'required' => false
			),
			'favorites.movies.name' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'string',
				'allowNull' => true,
				'required' => false
			),
			'favorites.movies.category' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'string',
				'allowNull' => true,
				'required' => false
			),
			'favorites.television.name' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'string',
				'allowNull' => true,
				'required' => false
			),
			'favorites.television.category' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'string',
				'allowNull' => true,
				'required' => false
			),
			'likes.name' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'string',
				'allowNull' => true,
				'required' => false
			),
			'likes.category' => array(
				'writeAccess' => 'serverOnly',
				'arrayOp' => 'push',
				'type' => 'string',
				'allowNull' => true,
				'required' => false
			)
		),
		'unique' => array(),
		'dynamicSchema' => true
	),
	'dataSchema' => array(
		'fields' => array(
			'subscribe' => array(
				'writeAccess' => 'clientModify',
				'arrayOp' => 'push',
				'type' => 'boolean',
				'allowNull' => true,
				'required' => false
			),
			'terms' => array(
				'writeAccess' => 'clientModify',
				'arrayOp' => 'push',
				'type' => 'boolean',
				'allowNull' => true,
				'required' => false
			)
		),
		'unique' => array(),
		'dynamicSchema' => true
	)
);