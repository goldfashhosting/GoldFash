<?PHP
$goldCustom_App_three='';
$server_hostname=''; 
 $api_endpoint="https://www.rfig.us/A-GOLD/plugin.stream/cx.VERF./GeT/e.X.5/api/index.php?mod=license&task=SPBAS_validate_license&license_key={$goldSecurity}&server_hostname={$server_hostname}";
$key_data=file_get_contents($api_endpoint);
$url_decoded_key_data=urldecode($key_data);
$base64_decoded_key_data=base64_decode($url_decoded_key_data);
list($response, $valid_checksum) = explode('{spbas}', $base64_decoded_key_data);
if (md5('95274604f3c8d23b8ff1c9f62abd9d45'.$response)!=$valid_checksum) {
    die('Please Contact <a href="https://www.goldfash.com/G3TGOLD.php?ref=Hosting+Suspension">GoldFash Hosting</a>. [CODE B100C]');
}
$key_data=unserialize($response);
echo '<pre>';
echo '</pre>';
