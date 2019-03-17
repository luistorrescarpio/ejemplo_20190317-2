<?php 
$obj = (object)$_REQUEST;

require("lt_script/uploadFiles.php");

switch ($obj->action) {
	case 'recibirArchivos':
		
		$path = "archivos";

		$fileName_arr = uploadFiles($path, $_FILES['file_content']);
		echo json_encode($fileName_arr);
		break;

	case 'guardar_imagenes':

		break;
	case 'saveVideo':

		break;
	case 'eliminar_archivo':

		break;
}

?>