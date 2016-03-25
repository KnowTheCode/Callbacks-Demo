<?php
namespace Newsletters\Signups;

function signup_user( $email, $first_name ) {
	printf( '<p>%s</p>', __NAMESPACE__ . '\signup_user callback fired' );
}
