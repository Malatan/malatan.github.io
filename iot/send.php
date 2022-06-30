<?php 
// Define variables and initialize with empty values
$temperatura = "";
$umidita = "";
$pressione = "";
$luce = "";
$pioggia = "";
$id_stazione = "";
echo "qqqqq";
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
	echo "123";
	$json = file_get_contents('php://input');
	$data = json_decode($json);
	if(isset($data->temperatura)){
		http_response_code(200);
      if(empty($data->temperatura)){
        echo "temperatura not found";
		exit;
      } else{
        $temperatura = $data->temperatura;
		echo $temperatura;
	  }
    } else {
        echo "temperatura not found";
		http_response_code(404);
		exit;		
	}
}
?>