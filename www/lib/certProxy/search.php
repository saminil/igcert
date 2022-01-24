<?php
//https://cert.igcert.org/search/?sn=IGC&cn=18-A-0826

$certCode = $_GET['code'];
//echo $certCode;
if(empty($certCode))$certCode = '18-A-0826';


$url = 'https://cert.igcert.org/search/?sn=IGC&cn='.$certCode;
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($curl, CURLOPT_REFERER, 'https://cert.igcert.org');
curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.157 Safari/537.36");
$data = curl_exec($curl);
curl_close($curl);



//$data  = 'Customer: AREM LOJISTIK HIZ. LTD. STI.<br/>Certificate Number: 18-A-0826<br/>UIC Number: 18-C-0307<br/>System Type: ISO 9001:2015 & 14001:2015 (IMS)<br/>Scope (EN): INTERNATIONAL TRANSPORTATION AND LOGISTICS ACTIVITIES<br/>System State: WITHDRAWN<br/>Registration Number: 740493820<br/>Address (EN): Merkez Mah. Gunesli Yolu Radar Mevkii Cagrı Ismerkezi No:24 K:2 Yenibosna – Bahcelievler / Istanbul<br/>';
/*
Customer: AREM LOJISTIK HIZ. LTD. STI.<br/>Certificate Number: 18-A-0826<br/>UIC Number: 18-C-0307<br/>System Type: ISO 9001:2015 & 14001:2015 (IMS)<br/>Scope (EN): INTERNATIONAL TRANSPORTATION AND LOGISTICS ACTIVITIES<br/>System State: WITHDRAWN<br/>Registration Number: 740493820<br/>Address (EN): Merkez Mah. Gunesli Yolu Radar Mevkii Cagrı Ismerkezi No:24 K:2 Yenibosna – Bahcelievler / Istanbul<br/>
*/


if(empty($data) || $data == "Doesn't Exsist")exit('');

$data = str_replace(': ','</b><span>',$data);
$data = '<div><b>'.str_replace('<br/>','</span></div><div><b>',$data).'</b></div>';
$data = str_replace('<div><b></b></div>','',$data);

echo $data;
?>