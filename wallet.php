<html>
	<head>
		<title>Wally the Open Transaction Wallet</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>

<?php

require_once('classes/Wally.php');

$client_path = '/Users/bleicke/Sites/Wally/Open-Transactions/testwallet/data_folder';
$wallet_filename = 'wallet.xml';

$wally = new Wally($client_path, $wallet_filename);

echo "<br>\n";


foreach($wally->get_nyms() as $key=>$value){
	echo "<p class='box'>";
	$value->printAll();
	echo "</p>";
}

foreach($wally->get_accounts() as $key=>$value){
	echo "<p class='box'>";
	$value->printAll();
	echo "</p>";
}	

foreach($wally->get_asset_types() as $key=>$value){
	echo "<p class='box'>";
	$value->printAll();
	echo "</p>";
}

foreach($wally->get_servers() as $key=>$value){
	echo "<p class='box'>";
	$value->printAll();
	echo "</p>";
}

?>

	</body>
</html>