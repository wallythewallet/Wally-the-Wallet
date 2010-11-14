int OT_API_GetNymCount(void);
int OT_API_GetServerCount(void);
int OT_API_GetAssetTypeCount(void);
int OT_API_GetAccountCount(void);
const char * OT_API_GetNym_ID(int nIndex); // based on Index (above 4 functions) this returns the Nym's ID
const char * OT_API_GetNym_Name(const char * NYM_ID); // Returns Nym Name (based on NymID)
const char * OT_API_GetServer_ID(int nIndex); // based on Index (above 4 functions) this returns the Server's ID
const char * OT_API_GetServer_Name(const char * SERVER_ID); // Return's Server's name (based on server ID)
const char * OT_API_GetAssetType_ID(int nIndex); // returns Asset Type ID (based on index from GetAssetTypeCount)
const char * OT_API_GetAssetType_Name(const char * ASSET_TYPE_ID); // Returns asset type name based on Asset Type ID
const char * OT_API_GetAccountWallet_ID(int nIndex);	 // returns a string containing the account ID, based on index.
const char * OT_API_GetAccountWallet_Name(const char * ACCOUNT_ID);	 // returns the account name, based on account ID.
