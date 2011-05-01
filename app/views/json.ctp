<?php
if(!isset($data)) {
	$data = array('success'=>false, 'msg'=>'Internal JSON Error: No data supplied');
}
echo $javascript->Object($data);
//echo json_encode((object)$data);
?>