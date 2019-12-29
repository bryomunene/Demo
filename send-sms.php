<?php 

require_once 'vendor/autoload.php'; 

$client = new Nexmo\Client(new Nexmo\Client\Credentials\Basic('6b8051ae', 'DXbxE3jqEyhJgt8S')); 

$texts = array( 'This is message one', 'This is message two', 'This is message three', 'This is message four', 'This is message five');

$phoneNos = array('+254727348562', '+254727348562');

$phoneNo = '';

$text = "";

foreach( $texts as $text ){
		foreach($phoneNos as $phoneNo){
			$message = $client->message()->send([
			'to' => $phoneNo,
			'from' => 'Bryo',
			'text' => $text,
		]);
	
		echo "Sent message To " . $message['to'] . ". Balance is now " . $message['remaining-balance'] . PHP_EOL . "<br/>";
	}
};

?>