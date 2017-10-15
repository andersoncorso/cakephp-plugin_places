<?php 

	foreach ($estados as &$estado) {
		unset($estado->generated_html);
	}
	echo json_encode(compact('estados'));

?>