<?php	$tbl_name="syslog";	$qry="SELECT * FROM $tbl_name WHERE $tbl_name.log_id = $log_id";	$result=mysql_query($qry);	if($result) {		$_SESSION['SLOG_ROWS'] = mysql_num_rows($result);		$log_detail = mysql_fetch_assoc($result);		$_SESSION['SLOG_ID'] 		= $log_detail['log_id'];		$_SESSION['SLOG_DATE'] 		= $log_detail['log_date'];		$_SESSION['SLOG_ACTIVITY'] 	= $log_detail['log_activity'];		$_SESSION['SLOG_USER']	 	= $log_detail['log_user'];		$_SESSION['SLOG_DETAIL']	= $log_detail['log_dtls'];		$_SESSION['SESS_QRY']		= $qry;				}else {		$logmessage = "Query failed!!! $result $qry";		createLogfile($logmessage, 12);				};?>