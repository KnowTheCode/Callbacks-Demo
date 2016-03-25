<?php
namespace ReportingPro\Reports;

function user_registered_report() {
	printf( '<p>%s</p>', __NAMESPACE__ . '\user_registered_report callback fired' );
}
