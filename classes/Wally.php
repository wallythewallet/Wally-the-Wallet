<?php

require_once("OTAPI.php");

require_once("AccountWallet.php");
require_once("AssetType.php");
require_once("Nym.php");
require_once("Server.php");


class Wally{
	
	private $nyms = array();
	private $accounts = array();
	private $asset_types = array();
	private $servers = array();
	
	public function __construct($client_path, $wallet_filename){
		$init = OT_API_Init($client_path);
		$wallet = OT_API_LoadWallet($wallet_filename);

		if($init)
			echo "<p class='good'>Initialized..</p>\n";
		else
			echo "<p class='error'>Could not initialize, already initialized?</p>\n";
			
		if($wallet)
			echo "<p class='good'>Wallet loaded..</p>\n";
		else
			echo "<p class='error'>Wallet could not load</p>\n";
	}
	
	public function get_nyms(){
		$nym_count = OT_API_GetNymCount();
		for($i = 0; $i < $nym_count; $i++)
			$this->nyms[] = new Nym($i);
			
		return $this->nyms;
	}
	
	public function get_accounts(){
		$account_count = OT_API_GetAccountCount();
		for($i = 0; $i < $account_count; $i++)
			$this->accounts[] = new AccountWallet($i);
			
		return $this->accounts;
	}
	
	public function get_asset_types(){
		$asset_type_count = OT_API_GetAssetTypeCount();
		for($i = 0; $i < $asset_type_count; $i++)
			$this->asset_types[] = new AssetType($i);
			
		return $this->asset_types;
	}
	
	public function get_servers(){
		$server_count = OT_API_GetServerCount();
		for($i = 0; $i < $server_count; $i++)
			$this->servers[] = new Server($i);
			
		return $this->servers;
	}
	
}

?>