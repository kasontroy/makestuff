<?php 

//echo json_encode(array('name'=>'John','time'=>'2pm')); 
$formData = array(	'formName' => $_POST['formName'],
					'formTitle' => $_POST['formTitle'],
					'formAddress1' => $_POST['formAddress1'],
					'formAddress2' => $_POST['formAddress2'],
					'formCity' => $_POST['formCity'],
					'formState' => $_POST['formState'],
					'formZip' => $_POST['formZip'],
					'formPhone' => $_POST['formPhone'],
					'formEmail' => $_POST['formEmail'],
					'formInfoPacket' => $_POST['formInfoPacket'],
					'formProjectDescription' => $_POST['formProjectDescription'],
					'clovertest' => $_POST['clovertest']
				);
echo 1;
?>