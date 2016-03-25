<?php
namespace Auth\User;

function change_permissions( $email, $first_name, $last_name, $status ) {
	printf( '<p>%s</p>', __NAMESPACE__ . '\change_permissions callback fired' );
}