<?php
	header( 'Cache-Control: no-cache' );
	header( 'Content-type: application/xml; charset="utf-8"', true );

	$con = mysql_connect( 'localhost', 'vilad103_at', '46669a00' ) ;
	mysql_select_db( 'vilad103_clientes', $con );

	$id = mysql_real_escape_string( $_REQUEST['id'] );

	$users = array();

	$sql = "SELECT invoiceid, companyname
			FROM tblclients
			WHERE id=$id
			ORDER BY id";
	$res = mysql_query( $sql );
	while ( $row = mysql_fetch_assoc( $res ) ) {
		$cidades[] = array(
			'invoiceid'	=> $row['invoiceid'],
			'userid'	=> $row['userid'],
		);
	}

	echo( json_encode( $users ) );