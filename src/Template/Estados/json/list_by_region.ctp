<?php 

	foreach ($estados as &$estado) {
		unset($estado->generated_html);
	}

	$jsonData = json_encode($estados);

	$this->response->type('json');
	$this->response->body($jsonData);

	echo $this->response;

?>
