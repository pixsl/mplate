<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array(
	'as' => 'home',
	'uses' => 'HomeController@home'
));

/*
 * Authenticated Group
 */

Route::group(array('before' => 'auth' ), function() {

	/*
 	* CSRF Protection Group
 	*/
	Route::group(array('before' => 'csrf'), function() {

		/*
 		* Change Password (POST)
 		*/
		Route::post('/subscription/change-password', array(
			'as' => 'subscription-change-password-post',
			'uses' => 'SubscriptionController@postChangePassword'
		));

	});

	/*
 	* Change Password (GET)
 	*/

	Route::get('/subscription/change-password', array(
		'as' => 'subscription-change-password',
		'uses' => 'SubscriptionController@getChangePassword'
	));

	/*
 	* Sign out (GET)
 	*/

	Route::get('/subscription/sign-out', array(
		'as' => 'subscription-sign-out',
		'uses' => 'SubscriptionController@getSignOut'
	));

});


/*
 * Unauthenticated Group
 */
Route::group(['before' => 'guest'], function() {

	/*
	 * CSRF Protection
	 */
	Route::group(['before' => 'csrf'], function() {

		/*
	 	* Sign In (POST)
	 	*/
		Route::post('/subscription/sign-in', array(
			'as' => 'subscription-sign-in-post',
			'uses' => 'SubscriptionController@postSignIn'
		));

		/*
	 	* Forgot Password (POST)
	 	*/
		Route::post('/subscription/forgot-password', array(
			'as' => 'subscription-forgot-password-post',
			'uses' => 'SubscriptionController@postForgotPassword'
		));



	});

	/*
	 * Create Account (GET)
	 */
	Route::get('/subscription/join', array(
		'as' => 'subscription-join',
		'uses' => 'SubscriptionController@getJoin'
	));

	/*
	 * Sign In (GET)
	 */
	Route::get('/subscription/sign-in', array(
		'as' => 'subscription-sign-in',
		'uses' => 'SubscriptionController@getSignIn'
	));

	/*
	 * Activation Code (GET)
	 */

	Route::get('/subscription/activate/{code}', array(
		'as' => 'subscription-activate',
		'uses' => 'SubscriptionController@getActivate'
	));

	/*
	 * Forgot Password (GET)
	 */

	Route::get('/subscription/forgot-password', array(
		'as' => 'subscription-forgot-password',
		'uses' => 'SubscriptionController@getForgotPassword'
	));

	/*
	 * Recover Password (GET)
	 */

	Route::get('/subscription/recover/{code}', array(
		'as' => 'subscription-recover',
		'uses' => 'SubscriptionController@getRecover'
	));

});

Route::group(['prefix' => 'subscription'], function()
{
	Route::get('/', [
		'as' => 'subscription',
		'uses' => 'SubscriptionController@getIndex'
	]);

	Route::get('/subscription/thanks', [
		'as' => 'thanks',
		'uses' => 'SubscriptionController@getThanks'
	]);

	Route::group(['before' => 'not.subscribed'], function()
	{
		Route::get('join', [
			'as' => 'subscription-join',
			'uses' => 'SubscriptionController@getJoin',
		]);

		Route::post('join', [
			'before' => 'csrf',
			'uses' => 'SubscriptionController@postJoin',
		]);
	});

	Route::group(['before' => 'subscribed'], function ()
	{

		Route::get('settings', [
			'as' => 'subscription-settings',
			'uses' => 'SubscriptionController@getSettings'
		]);

		Route::get('settings', [
			'as' => 'subscription-settings',
			'uses' => 'SubscriptionController@getSettings'
		]);

		Route::get('cancel', [
			'before' => 'not.cancelled|csrf',
			'as' => 'subscription-cancel',
			'uses' => 'SubscriptionController@getCancel'
		]);

		Route::get('resume', [
			'before' => 'cancelled|csrf',
			'as' => 'subscription-resume',
			'uses' => 'SubscriptionController@getResume'
		]);

		Route::get('card', [
			'before' => 'csrf',
			'as' => 'subscription-card',
			'uses' => 'SubscriptionController@getCard'
		]);

		Route::post('card', [
			'before' => 'csrf',
			'uses' => 'SubscriptionController@postCard'
		]);

		Route::get('/subscription/change-address', array(
			'as' => 'subscription-change-address',
			'uses' => 'SubscriptionController@getChangeAddress'
		));

		Route::post('/subscription/change-address', array(
			'as' => 'subscription-change-address-post',
			'uses' => 'SubscriptionController@postChangeAddress'
		));

		Route::get('swap', [
			'before' => 'csrf',
			'as' => 'subscription-swap',
			'uses' => 'SubscriptionController@getSwap'
		]);

		Route::post('swap', [
			'before' => 'csrf',
			'uses' => 'SubscriptionController@postSwap'
		]);
	});
});

Route::post('webhook/stripe', 'Laravel\Cashier\WebhookController@handleWebhook');