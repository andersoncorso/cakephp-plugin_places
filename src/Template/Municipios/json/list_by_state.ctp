<?php 

	foreach ($municipios as &$municipio) {
		unset($municipio->generated_html);
	}
	echo json_encode(compact('municipios'));

?>