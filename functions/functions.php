<?php

function getServerInfo($ip)
  {
    $curl = curl_init('https://mcapi.ca/query/'.$ip.'/players');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $curl_response = curl_exec($curl);
    if ($curl_response === false) {
        $info = curl_getinfo($curl);
        curl_close($curl);
        die('error occured during curl exec.');
    }
    curl_close($curl);
    $decoded = json_decode($curl_response);
    if (isset($decoded)) {
        return $decoded;
    }
  }
function roundInt($totalCredits)
  {
    /* Rundet eine Zahl zu Millionen usw. */
    if($totalCredits >= 1000000 && $totalCredits <= 9999999999)
      {
        $totalCredits = $totalCredits / 1000000;
        $text = number_format($totalCredits, 2, ',', '.').' Millionen';
      } else if($totalCredits >= 1000000000)
        {
          $totalCredits = $totalCredits / 1000000000;
          $text = number_format($totalCredits, 0, ',', '.').' Milliarden';
        } else {
          $text = number_format($totalCredits, 0, ',', '.');
        }

        return $text;
  }

 ?>
