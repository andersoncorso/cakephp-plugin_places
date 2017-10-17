<?php 

	foreach ($regioes as &$regiao) {
		unset($regiao->generated_html);
	}

	$jsonData = json_encode($regioes);

	$this->response->type('json');
	$this->response->body($jsonData);

	echo $this->response;

?>
