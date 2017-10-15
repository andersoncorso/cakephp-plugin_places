<?php 

	foreach ($regioes as &$regiao) {
		unset($regiao->generated_html);
	}
	echo json_encode(compact('regioes'));

?>