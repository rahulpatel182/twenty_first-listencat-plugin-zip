<?php

$curl = curl_init();
    $request = '{
        "post": {
            "id": "1",
            "audioEnabled": false,
            "audioFile": "audioFilePath",
            "playCount": 10
        }
    }';

curl_setopt($curl, CURLOPT_URL, "https://listencat.com/api/v1/post?id=1");
curl_setopt($curl, CURLOPT_POST, true); 
curl_setopt($curl, CURLOPT_HTTPHEADER, ['content-type: application/json']); 
curl_setopt($curl, CURLOPT_POSTFIELDS, $request);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  CURLOPT_HTTPHEADER => array(
    "Authorization: Bearer jwI74CeYhJsDUrgP8VJ8L9njhtxVDQfhS8twIo78MCnGLFMhrqy5LA0IxzFg", 

$output = curl_exec($curl); 

 $error = curl_error($curl);

 if ($error) {
  echo "curl error" .$error;
 }else{

    echo $output;
 }





curl_setopt_array($curl, 
  CURLOPT_URL => "https://listencat.com/api/v1/post?id=1",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "Authorization: Bearer jwI74CeYhJsDUrgP8VJ8L9njhtxVDQfhS8twIo78MCnGLFMhrqy5LA0IxzFg",
    "Authorization: Bearer jwI74CeYhJsDUrgP8VJ8L9njhtxVDQfhS8twIo78MCnGLFMhrqy5LA0IxzFg"
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;




       curl_setopt( $curl, CURLOPT_URL, $url );
        //curl_setopt( $res, CURLOPT_POST, 3 ); 
        //curl_setopt( $res, CURLOPT_POSTFIELDS, $fields );
        curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true ); 
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "X-API-Key: $key"
            )); //you can specify multiple custom keys.


        $result = curl_exec( $res );
        print_r($result);
                // print_r($checking);

        $curl = curl_init();

        $curl_url = curl_setopt($curl, CURLOPT_URL, "https://listencat.com/api/v1/post?id=1");
        print_r($curl_url);







        <?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://www.example.com",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "content-type: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}




<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://listencat.com/api/v1/post?id=1",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "Authorization: Bearer jwI74CeYhJsDUrgP8VJ8L9njhtxVDQfhS8twIo78MCnGLFMhrqy5LA0IxzFg",
    "Authorization: Bearer jwI74CeYhJsDUrgP8VJ8L9njhtxVDQfhS8twIo78MCnGLFMhrqy5LA0IxzFg"
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;



        connect_your_account


       