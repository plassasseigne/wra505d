<?php
$url = 'https://restcountries.com/v3.1/all';

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($curl);

if (curl_error($curl)) {
    echo "<pre>", var_dump(curl_error($curl)), "</pre>";
    die;
} else {
    file_put_contents("countries.json", $result);

    $countries = json_decode($result, true);

    if (is_array($countries)){
        foreach ($countries as $country){
            $img = file_get_contents($country['flags']['png']);
            $pathinfo = pathinfo($country['flags']['png']);
            $filename = $country['cca2'].'.'.$pathinfo['extension'];
            file_put_contents('flags/'.$filename, $img);
        }
    }
}

curl_close($curl);

?>