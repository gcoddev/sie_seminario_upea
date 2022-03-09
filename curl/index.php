<?php
	//$url = "http://localhost/firma/api.php";
	$url = "http://192.168.8.56/FirmaDigital/api/certificacion";
	echo "Enviando documento a: ".$url."<br>";
	$ruta_documento = realpath("./ejemplo.pdf");
	//$ruta_documento = realpath("./doc_enc.pdf");
	echo "El documento es: ".$ruta_documento."<br>";
	//$documento = file_get_contents($ruta_documento);
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_VERBOSE, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-type: multipart/form-data"));
	curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0(X11;Linux i686; rv:6.0) Gecko/20100101 Firefox/6.0Mozilla/4.0(compatibe;)");
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POST, true);
	$post = array(
		'identificador' => 'sis_i_e_sie',
		'password' => 'access_sis_sie',
		'nombre_documento' => 'doc_test_api',
		'documento' => new CURLFile($ruta_documento)
	);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
	$respuesta = curl_exec($ch);
	if ( curl_errno($ch) ) {
		die("Error en conexion: ".curl_error($ch));
	}else{
		switch ($respuesta) {
			case '1':
				die("Error: Credenciales no valdas");
				break;
			case '2':
				die("Error: Documento no recibido");
				break;
			case '3':
				die("error: Documento encriptado");
				break;
			case '4':
				die("Error: No se pudo registrar el documento");
				break;
			default:
				break;
		}

		curl_close($ch);

		//echo $respuesta;

		//GUARDANDO EL PDF RECIBIDO
		//file_put_contents($_SERVER['DOCUMENT_ROOT']."/curl/documento_recibido.pdf", $respuesta);
		if ( file_put_contents($_SERVER['DOCUMENT_ROOT']."/curl/documento_recibido.pdf", $respuesta) ) {
			echo "Documento guardado exitosamente";
		}else{
			echo "Error al guardar el documento";
		}
		
	}

		

	//REDIRECCIONANDO AL DOCUMENTO GARDADO
	//header("Location: http://localhost/curl/documento_recibido.pdf");

?>