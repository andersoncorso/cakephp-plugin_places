<?php 

	foreach ($municipios as &$municipio) {
		unset($municipio->generated_html);
	}

	$jsonData = json_encode($municipios);

	$this->response->type('json');
	$this->response->body($jsonData);

	echo $this->response;

?>
