<?php
	require './readxlsx1/PHPExcel/Classes/PHPExcel.php'; //Agregamos la librería 


$return = Array('ok'=>TRUE);
$upload_folder ='archivo';
$nombre_archivo = $_FILES['archivo']['name'];
$tipo_archivo = $_FILES['archivo']['type'];
$tamano_archivo = $_FILES['archivo']['size'];
$tmp_archivo = $_FILES['archivo']['tmp_name'];
$archivador = $upload_folder . '/' . $nombre_archivo;
if (!move_uploaded_file($tmp_archivo, $archivador)) {
	
	$return = Array('ok' => FALSE, 'msg' => "Ocurrio un error al subir el archivo. ".$nombre_archivo." No pudo guardarse.", 'status' => 'error');

}	

header('Content-Type: application/json');
echo json_encode($return);


//require 'Conexion/Conexion_mysql.php';

/*
$ip=$_POST['ip'];
$mysqli=new mysqli("$ip","cron","@l**pbx++t3l3","asterisk"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
}

$nivel = $_POST['nivel']; 
$grupo = $_POST['grupo'];

$ruta = $_POST['archivo'];
$filename = basename($ruta);

echo $filename;

if(isset($_POST["submit"]))
{
 $nombre_archivo = $_FILES["archivo"]["name"];
 $tipo_archivo = $_FILES["archivo"]["type"];
 $tamano_archivo = $_FILES["archivo"]["size"];

 $limite = $_GET["limite"];
 if($tamano_archivo<=$_POST['limite'])
 {
 if(move_uploaded_file($_FILES["archivo"]["tmp_name"], $nombre_archivo))
 {
 echo "El archivo " . $nombre_archivo . " se ha transferido correctamente. <br />";
 echo "Su tamaño es de: " . $tamano_archivo . " bytes.";
 echo "El tipo de archivo es: " . $tipo_archivo;
 }
 else
 {
 echo "No se ha podido transferir el archivo, verifique el tamaño del archivo e intente nuevamente.";
 }
 }
 echo "<a href='.$nombre_archivo.'>";
}

/*

$select_user="";Test_reporte_Telefonia\Crear_Usuarios_vici\Public

$exec = $mysqli->query($select_user);
while($row=mysqli_fetch_array($exec)){


}
if( $mysqli->query($select_user)){


}*/
/*
	switch ($nivel) {
		case '1':
	//Variable con el nombre del archivo
	
	//Cargo la hoja de cálculo
	//$objPHPExcel = PHPExcel_IOFactory::load("C:\Users\admin\Desktop\\$filename");
	$objPHPExcel = PHPExcel_IOFactory::load($filename);
	//Asigno la hoja de calculo activa
	$objPHPExcel->setActiveSheetIndex(0);
	//Obtengo el numero de filas del archivo
	$numRows = $objPHPExcel->setActiveSheetIndex(0)->getHighestRow();


echo $filename;
date_default_timezone_set('America/Mexico_City');
$fecha = date("Y-m-d "); 

	for ($i = 1; $i <= $numRows; $i++) {
		
        
		
		$user = $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
		$pass = $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
		$full_name =$objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
		$user_level = $nivel;
		$user_group = $grupo;
		$phone_login ="";
		$phone_pass = "";
	    $delete_users = 0;
		$delete_user_groups = 0;
	    $delete_lists = 0;
		$delete_campaigns = 0;
		$delete_ingroups = 0;
		$delete_remote_agents = 0;
		$load_leads =0;
		$campaign_detail = 0;
		$ast_admin_access = 0;
		$ast_delete_phones =0;
		$delete_scripts = 0;
		$modify_leads = 0;
		$hotkeys_active =0;
		$change_agent_campaign= 0;
		$agent_choose_ingroups = 1;
		$closer_campaigns = " AGENTDIRECT -";
		$scheduled_callbacks =1;
		$agentonly_callbacks =1;
		$agentcall_manual = 1;
		$vicidial_recording=1;
		$vicidial_transfers =1;
		$delete_filters = 0;
		$alter_agent_interface_options = 0;
		$closer_default_blended = 0;
		$delete_call_times = 0;
		$modify_call_times = 0;
		$modify_users = 0;
		$modify_campaigns =0;
		$modify_lists = 0;
		$modify_scripts = 0;
		$modify_filters = 0;
		$modify_ingroups =0;
		$modify_usergroups = 0;
		$modify_remoteagents = 0;
		$modify_servers = 0;
		$view_reports =0;	
		$vicidial_recording_override ="DISABLED";	
		$alter_custdata_override ="NOT_ACTIVE";	
		$qc_enabled = 0;	
		$qc_user_level= 1;	
		$qc_pass =0;	
		$qc_finish=0;	
		$qc_commit=0;
		$add_timeclock_log=0;	
		$modify_timeclock_log= 0;	
		$delete_timeclock_log=0;	
		$alter_custphone_override="NOT_ACTIVE";	
		$vdc_agent_api_access = 0;	
		$modify_inbound_dids =0; 	
		$delete_inbound_dids=0;	
		$active='Y';	
		$alert_enabled =0;	
		$download_lists=0;	
		$agent_shift_enforcement_override ="DISABLED";	
		$manager_shift_enforcement_override=0;	
		$shift_override_flag=0;	
		$export_reports=0;	
		$delete_from_dnc=0;	
		$email="";	
		$user_code="";	
		$territory="";	
		$allow_alerts=0;	
		$agent_choose_territories=0;	
		$custom_one="";	
		$custom_two="";	
		$custom_three="";	
		$custom_four="";	
		$custom_five="";	
		$voicemail_id="";	
		$agent_call_log_view_override="DISABLED";	
		$callcard_admin=0;	
		$agent_choose_blended=1;	
		$realtime_block_user_info=0;	
		$custom_fields_modify=0;	
		$force_change_password="N";	
		$agent_lead_search_override="NOT_ACTIVE";	
		$modify_shifts=0;	
		$modify_phones=0;	
		$modify_carriers=0;	
		$modify_labels=0;	
		$modify_statuses=0;	
		$modify_voicemail=0;	
		$modify_audiostore=0;	
		$modify_moh=0;	
		$modify_tts=0;	
		$preset_contact_search ="NOT_ACTIVE";	
		$modify_contacts=0;	
		$modify_same_user_level=1;	
		$admin_hide_lead_data=0;	
		$admin_hide_phone_data=0;	
		$agentcall_email=0;	
		$modify_email_accounts=0;	
		$failed_login_count=0;	
		$last_login_date="$fecha  12:00:01";	
		$last_ip='';	
		$pass_hash='';	
		$alter_admin_interface_options=1;	
		$max_inbound_calls=0;	
		$modify_custom_dialplans=0;	
		$wrapup_seconds_override=-1;	
		$modify_languages=0;	
		$selected_language="default English";	
		$user_choose_language=0;	
		$ignore_group_on_search=0;	
		$api_list_restrict=0;	
		$api_allowed_functions="ALL_FUNCTIONS";	
		$lead_filter_id="NONE";	
		$admin_cf_show_hidden=0;	
		$agentcall_chat=0;	
		$user_hide_realtime=0;	
		$access_recordings=0;	
		$modify_colors=0;	
		$user_nickname="";	
		$user_new_lead_limit=-1;	
		$api_only_user=0;	
		$modify_auto_reports=0;	
		$modify_ip_lists=0;	
		$ignore_ip_list=0;	
		$ready_max_logout=-1;	
		$export_gdpr_leads=0;	
		$pause_code_approval=0;	
		$max_hopper_calls=0;	
		$max_hopper_calls_hour=0;
		$last_date = date();

		
		
		$sql = "INSERT INTO vicidial_users (user_id,user,pass,full_name,user_level,user_group,phone_login,phone_pass,delete_users,delete_user_groups,delete_lists,delete_campaigns,delete_ingroups,delete_remote_agents,load_leads,campaign_detail,ast_admin_access,ast_delete_phones,delete_scripts,modify_leads,hotkeys_active,change_agent_campaign,agent_choose_ingroups,closer_campaigns,scheduled_callbacks,agentonly_callbacks,agentcall_manual,vicidial_recording,vicidial_transfers,delete_filters,alter_agent_interface_options,closer_default_blended,delete_call_times,modify_call_times,modify_users,modify_campaigns,modify_lists,modify_scripts,modify_filters,modify_ingroups,modify_usergroups,modify_remoteagents,modify_servers,view_reports,vicidial_recording_override,alter_custdata_override,qc_enabled,qc_user_level,qc_pass,qc_finish,qc_commit,add_timeclock_log,	modify_timeclock_log,delete_timeclock_log,alter_custphone_override,vdc_agent_api_access,modify_inbound_dids,delete_inbound_dids,active,alert_enabled,download_lists,agent_shift_enforcement_override,manager_shift_enforcement_override,shift_override_flag,export_reports,delete_from_dnc,email,user_code,territory,allow_alerts,	agent_choose_territories,custom_one,custom_two,custom_three,custom_four,custom_five,voicemail_id,agent_call_log_view_override,	callcard_admin,agent_choose_blended,realtime_block_user_info,custom_fields_modify,force_change_password,agent_lead_search_override,modify_shifts,modify_phones,modify_carriers,modify_labels,modify_statuses,modify_voicemail,modify_audiostore,modify_moh,modify_tts,preset_contact_search,modify_contacts,modify_same_user_level,admin_hide_lead_data,admin_hide_phone_data,agentcall_email,modify_email_accounts,failed_login_count,last_login_date,last_ip,pass_hash,alter_admin_interface_options,max_inbound_calls,modify_custom_dialplans,wrapup_seconds_override,modify_languages,selected_language,user_choose_language,ignore_group_on_search,api_list_restrict,api_allowed_functions,lead_filter_id,admin_cf_show_hidden,agentcall_chat,user_hide_realtime,access_recordings,modify_colors,user_nickname,user_new_lead_limit,api_only_user,modify_auto_reports,modify_ip_lists,ignore_ip_list,ready_max_logout,export_gdpr_leads,pause_code_approval,max_hopper_calls,max_hopper_calls_hour) VALUES('','$user','$pass','$full_name','$user_level','$user_group','$phone_login','$phone_pass','$delete_users','$delete_user_groups','$delete_lists','$delete_campaigns','$delete_ingroups','$delete_remote_agents','$load_leads','$campaign_detail','$ast_admin_access','$ast_delete_phones','$delete_scripts','$modify_leads','$hotkeys_active','$change_agent_campaign','$agent_choose_ingroups','$closer_campaigns','$scheduled_callbacks','$agentonly_callbacks','$agentcall_manual','$vicidial_recording','$vicidial_transfers','$delete_filters','$alter_agent_interface_options','$closer_default_blended','$delete_call_times','$modify_call_times','$modify_users','$modify_campaigns','$modify_lists','$modify_scripts','$modify_filters','$modify_ingroups','$modify_usergroups','$modify_remoteagents','$modify_servers','$view_reports','$vicidial_recording_override','$alter_custdata_override','$qc_enabled','$qc_user_level','$qc_pass','$qc_finish','$qc_commit','$add_timeclock_log','$modify_timeclock_log','$delete_timeclock_log','$alter_custphone_override','$vdc_agent_api_access','$modify_inbound_dids','$delete_inbound_dids','$active','$alert_enabled','$download_lists','$agent_shift_enforcement_override','$manager_shift_enforcement_override','$shift_override_flag,export_reports','$export_reports','$delete_from_dnc','$email','$user_code','$territory','$allow_alerts','$agent_choose_territories','$custom_one','$custom_two','$custom_three','$custom_four','$custom_five','$voicemail_id','$agent_call_log_view_override','$callcard_admin','$agent_choose_blended','$realtime_block_user_info','$custom_fields_modify','$force_change_password','$agent_lead_search_override','$modify_shifts','$modify_phones','$modify_carriers','$modify_labels','$modify_statuses','$modify_voicemail','$modify_audiostore','$modify_moh','$modify_tts','$preset_contact_search','$modify_contacts','$modify_same_user_level','$admin_hide_lead_data','$admin_hide_phone_data','$agentcall_email','$modify_email_accounts','$failed_login_count','$last_login_date','$last_ip','$pass_hash','$alter_admin_interface_options','$max_inbound_calls','$modify_custom_dialplans','$wrapup_seconds_override','$modify_languages','$selected_language','$user_choose_language','$ignore_group_on_search','$api_list_restrict','$api_allowed_functions','$lead_filter_id','$admin_cf_show_hidden','$agentcall_chat','$user_hide_realtime','$access_recordings','$modify_colors','$user_nickname','$user_new_lead_limit','$api_only_user','$modify_auto_reports','$modify_ip_lists','$ignore_ip_list','$ready_max_logout','$export_gdpr_leads','$pause_code_approval','$max_hopper_calls','$max_hopper_calls_hour')";
		$result = $mysqli->query($sql);


		
	}
	
	

			break;
			case '7':
		//Variable con el nombre del archivo
	$nombreArchivo = 'users.xlsx';
	// Cargo la hoja de cálculo
	$objPHPExcel = PHPExcel_IOFactory::load($nombreArchivo);
	
	//Asigno la hoja de calculo activa
	$objPHPExcel->setActiveSheetIndex(0);
	//Obtengo el numero de filas del archivo
	$numRows = $objPHPExcel->setActiveSheetIndex(0)->getHighestRow();
echo '<table border=1><tr><td>Producto</td><td>Precio</td><td>Existencia</td><td>Nombre</td></tr>';
	
	for ($i = 1; $i <= $numRows; $i++) {
		
		$user_id = $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
		$user = $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
		$pass = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
		$full_name = $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
		$user_level = $objPHPExcel->getActiveSheet()->getCell('E'.$i)->getCalculatedValue();
		$user_group = $objPHPExcel->getActiveSheet()->getCell('F'.$i)->getCalculatedValue();
		$phone_login = $objPHPExcel->getActiveSheet()->getCell('G'.$i)->getCalculatedValue();
		$phone_pass = $objPHPExcel->getActiveSheet()->getCell('H'.$i)->getCalculatedValue();
		$delete_users = $objPHPExcel->getActiveSheet()->getCell('I'.$i)->getCalculatedValue();
		$delete_user_groups = $objPHPExcel->getActiveSheet()->getCell('J'.$i)->getCalculatedValue();
		$delete_lists = $objPHPExcel->getActiveSheet()->getCell('K'.$i)->getCalculatedValue();
		$delete_campaigns = $objPHPExcel->getActiveSheet()->getCell('L'.$i)->getCalculatedValue();
		$delete_ingroups = $objPHPExcel->getActiveSheet()->getCell('M'.$i)->getCalculatedValue();
		$delete_remote_agents = $objPHPExcel->getActiveSheet()->getCell('N'.$i)->getCalculatedValue();
		$campaign_detail = $objPHPExcel->getActiveSheet()->getCell('O'.$i)->getCalculatedValue();
		$ast_admin_access = $objPHPExcel->getActiveSheet()->getCell('P'.$i)->getCalculatedValue();
		$ast_delete_phones = $objPHPExcel->getActiveSheet()->getCell('Q'.$i)->getCalculatedValue();
		
		echo '<tr>';
		echo '<td>'. $user_id.'</td>';
		echo '<td>'. $user.'</td>';
		echo '<td>'. $pass.'</td>';
		echo '<td>'. $full_name.'</td>';
		echo '<td>'. $user_level.'</td>';
		echo '<td>'. $user_group.'</td>';
		echo '<td>'. $phone_login.'</td>';
		echo '<td>'. $phone_pass.'</td>';
		echo '<td>'. $delete_users.'</td>';
		echo '<td>'. $delete_user_groups.'</td>';
		echo '<td>'. $delete_lists.'</td>';
		echo '<td>'. $delete_campaigns.'</td>';
		echo '<td>'. $delete_ingroups.'</td>';
		echo '<td>'. $delete_remote_agents.'</td>';
		echo '<td>'. $campaign_detail.'</td>';
		echo '<td>'. $ast_admin_access.'</td>';
		echo '<td>'. $ast_delete_phones.'</td>';
		echo '</tr>';
		
		$sql = "INSERT INTO vicidial_users (user_id	user,pass,full_name,user_level,user_group,phone_login,phone_pass,	delete_users,delete_user_groups,delete_lists,delete_campaigns,delete_ingroups,delete_remote_agents,	load_leads,campaign_detail,ast_admin_access,ast_delete_phones,delete_scripts,modify_leads,hotkeys_active,	change_agent_campaign,agent_choose_ingroups,closer_campaigns,scheduled_callbacks,agentonly_callbacks,agentcall_manual,vicidial_recording,vicidial_transfers,delete_filters,alter_agent_interface_options,closer_default_blended,delete_call_times,modify_call_times,modify_users,modify_campaigns,modify_lists,modify_scripts,modify_filters	modify_ingroups,modify_usergroups,modify_remoteagents,modify_servers,view_reports,	vicidial_recording_override,alter_custdata_override,qc_enabled,qc_user_level,qc_pass,qc_finish,qc_commit,add_timeclock_log,	modify_timeclock_log,delete_timeclock_log,alter_custphone_override,vdc_agent_api_access,modify_inbound_dids,delete_inbound_dids,active,alert_enabled,download_lists,agent_shift_enforcement_override,manager_shift_enforcement_override,	shift_override_flag,export_reports,delete_from_dnc,email,user_code,territory,allow_alerts,	agent_choose_territories,custom_one,custom_two,custom_three,custom_four,custom_five,voicemail_id,agent_call_log_view_override,	callcard_admin,agent_choose_blended,realtime_block_user_info,custom_fields_modify,force_change_password,agent_lead_search_override,modify_shifts,modify_phones,modify_carriers,modify_labels,modify_statuses,modify_voicemail,modify_audiostore,modify_moh,modi,fy_tts,preset_contact_search,modify_contacts,modify_same_user_level,admin_hide_lead_data,admin_hide_phone_data,agentcall_email,modify_email_accounts,failed_login_count,last_login_date,last_ip,	pass_hash,alter_admin_interface_options,max_inbound_calls,modify_custom_dialplans,wrapup_seconds_override,modify_languages,selected_language,user_choose_language,ignore_group_on_search,api_list_restrict,api_allowed_functions,lead_filter_id,admin_cf_show_hidden,agentcall_chat,user_hide_realtime,access_recordings,modify_colors,user_nickname,user_new_lead_limit,api_only_user,modify_auto_reports,modify_ip_lists,ignore_ip_list,ready_max_logout,export_gdpr_leads,pause_code_approval,max_hopper_calls,max_hopper_calls_hour) VALUES('$user_id','$user','$pass','')";
		$result = $mysqli->query($sql);
	}
	
	echo '<table>';

			break;
			case '8':
			//Variable con el nombre del archivo
	$nombreArchivo = 'users.xlsx';
	// Cargo la hoja de cálculo
	$objPHPExcel = PHPExcel_IOFactory::load($nombreArchivo);
	
	//Asigno la hoja de calculo activa
	$objPHPExcel->setActiveSheetIndex(0);
	//Obtengo el numero de filas del archivo
	$numRows = $objPHPExcel->setActiveSheetIndex(0)->getHighestRow();
echo '<table border=1><tr><td>Producto</td><td>Precio</td><td>Existencia</td><td>Nombre</td></tr>';
	
	for ($i = 1; $i <= $numRows; $i++) {
		
		$user_id = $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
		$user = $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
		$pass = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
		$full_name = $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
		$user_level = $objPHPExcel->getActiveSheet()->getCell('E'.$i)->getCalculatedValue();
		$user_group = $objPHPExcel->getActiveSheet()->getCell('F'.$i)->getCalculatedValue();
		$phone_login = $objPHPExcel->getActiveSheet()->getCell('G'.$i)->getCalculatedValue();
		$phone_pass = $objPHPExcel->getActiveSheet()->getCell('H'.$i)->getCalculatedValue();
		$delete_users = $objPHPExcel->getActiveSheet()->getCell('I'.$i)->getCalculatedValue();
		$delete_user_groups = $objPHPExcel->getActiveSheet()->getCell('J'.$i)->getCalculatedValue();
		$delete_lists = $objPHPExcel->getActiveSheet()->getCell('K'.$i)->getCalculatedValue();
		$delete_campaigns = $objPHPExcel->getActiveSheet()->getCell('L'.$i)->getCalculatedValue();
		$delete_ingroups = $objPHPExcel->getActiveSheet()->getCell('M'.$i)->getCalculatedValue();
		$delete_remote_agents = $objPHPExcel->getActiveSheet()->getCell('N'.$i)->getCalculatedValue();
		$campaign_detail = $objPHPExcel->getActiveSheet()->getCell('O'.$i)->getCalculatedValue();
		$ast_admin_access = $objPHPExcel->getActiveSheet()->getCell('P'.$i)->getCalculatedValue();
		$ast_delete_phones = $objPHPExcel->getActiveSheet()->getCell('Q'.$i)->getCalculatedValue();
		
		echo '<tr>';
		echo '<td>'. $user_id.'</td>';
		echo '<td>'. $user.'</td>';
		echo '<td>'. $pass.'</td>';
		echo '<td>'. $full_name.'</td>';
		echo '<td>'. $user_level.'</td>';
		echo '<td>'. $user_group.'</td>';
		echo '<td>'. $phone_login.'</td>';
		echo '<td>'. $phone_pass.'</td>';
		echo '<td>'. $delete_users.'</td>';
		echo '<td>'. $delete_user_groups.'</td>';
		echo '<td>'. $delete_lists.'</td>';
		echo '<td>'. $delete_campaigns.'</td>';
		echo '<td>'. $delete_ingroups.'</td>';
		echo '<td>'. $delete_remote_agents.'</td>';
		echo '<td>'. $campaign_detail.'</td>';
		echo '<td>'. $ast_admin_access.'</td>';
		echo '<td>'. $ast_delete_phones.'</td>';
		echo '</tr>';
		
		$sql = "INSERT INTO vicidial_users (user_id	user,pass,full_name,user_level,user_group,phone_login,phone_pass,	delete_users,delete_user_groups,delete_lists,delete_campaigns,delete_ingroups,delete_remote_agents,	load_leads,campaign_detail,ast_admin_access,ast_delete_phones,delete_scripts,modify_leads,hotkeys_active,	change_agent_campaign,agent_choose_ingroups,closer_campaigns,scheduled_callbacks,agentonly_callbacks,agentcall_manual,vicidial_recording,vicidial_transfers,delete_filters,alter_agent_interface_options,closer_default_blended,delete_call_times,modify_call_times,modify_users,modify_campaigns,modify_lists,modify_scripts,modify_filters	modify_ingroups,modify_usergroups,modify_remoteagents,modify_servers,view_reports,	vicidial_recording_override,alter_custdata_override,qc_enabled,qc_user_level,qc_pass,qc_finish,qc_commit,add_timeclock_log,	modify_timeclock_log,delete_timeclock_log,alter_custphone_override,vdc_agent_api_access,modify_inbound_dids,delete_inbound_dids,active,alert_enabled,download_lists,agent_shift_enforcement_override,manager_shift_enforcement_override,	shift_override_flag,export_reports,delete_from_dnc,email,user_code,territory,allow_alerts,	agent_choose_territories,custom_one,custom_two,custom_three,custom_four,custom_five,voicemail_id,agent_call_log_view_override,	callcard_admin,agent_choose_blended,realtime_block_user_info,custom_fields_modify,force_change_password,agent_lead_search_override,modify_shifts,modify_phones,modify_carriers,modify_labels,modify_statuses,modify_voicemail,modify_audiostore,modify_moh,modi,fy_tts,preset_contact_search,modify_contacts,modify_same_user_level,admin_hide_lead_data,admin_hide_phone_data,agentcall_email,modify_email_accounts,failed_login_count,last_login_date,last_ip,	pass_hash,alter_admin_interface_options,max_inbound_calls,modify_custom_dialplans,wrapup_seconds_override,modify_languages,selected_language,user_choose_language,ignore_group_on_search,api_list_restrict,api_allowed_functions,lead_filter_id,admin_cf_show_hidden,agentcall_chat,user_hide_realtime,access_recordings,modify_colors,user_nickname,user_new_lead_limit,api_only_user,modify_auto_reports,modify_ip_lists,ignore_ip_list,ready_max_logout,export_gdpr_leads,pause_code_approval,max_hopper_calls,max_hopper_calls_hour) VALUES('$user_id','$user','$pass')";
		$result = $mysqli->query($sql);
	}
	
	echo '<table>';
			break;
		case '9':
			# code...
			break;
		
		default:
			# code...
			break;
	}
	
	
?>*/