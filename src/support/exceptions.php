<?php
namespace KnowTheCode\Support\Exceptions;

use Whoops\Run;
use Whoops\Handler\PrettyPageHandler;

$whoops = new Run;
$error_page = new PrettyPageHandler;
$error_page->setEditor( 'sublime' );
$whoops->pushHandler( $error_page );
$whoops->register();
