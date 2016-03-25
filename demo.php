<?php
namespace Auth\User\Permissions;

class User_Registration {

	protected $callbacks = array();
	protected $user;
	protected $status;

	public function register_callback( $callback ) {
		$this->callbacks[] = $callback;
	}

	public function fire() {
		foreach ( $this->callbacks as $callback ) {
			call_user_func( $callback, $this->user, $this->status );
		}
	}
}


$user_registration = new User_Registration();
$user_registration->register_callback( 'Newsletters\Signups\signup_user' );
$user_registration->register_callback( 'Auth\User\change_permissions' );
$user_registration->register_callback( 'ReportingPro\Reports\user_registered_report' );
$user_registration->fire();