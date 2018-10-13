<?php
  $output = array();
  $months = ["ENERO","FEBRERO","MARZO","ABRIL","MAYO","JUNIO","JULIO","AGOSTO","SEPTIEMBRE","OCTRUBRE","NOVIEMBRE","DICIEMBRE"];
  if (($handle = fopen("assets/data/Precipitaciones_Totales_Mensuales.csv", "r")) !== FALSE) {
    $header = array();
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
      if(empty($header)){
        $header = $data;
      }else{
        $d = array();
        $row = array();
        foreach ($data as $key => $value) {
          $d[$header[$key]] = $value;
        }

        foreach ($d as $key => $value) {
          if(in_array($key, $months) && $value != "***"){
            $output[] = array(
              "municipality" => $d["MUNICIPIO"],
              "date" => $d["AÑO"]."-".getMonth($key),
              "value" => $value
            );
          }
        }
      }
    }
    fclose($handle);

    $fp = fopen('assets/data/rain.json', 'w');
    fwrite($fp, json_encode($output));
    fclose($fp);
  }

  function getMonth($month){
    switch ($month) {
      case 'ENERO': return "01";
      case 'FEBRERO': return "02";
      case 'MARZO': return "03";
      case 'ABRIL': return "04";
      case 'MAYO': return "05";
      case 'JUNIO': return "06";
      case 'JULIO': return "07";
      case 'AGOSTO': return "08";
      case 'SEPTIEMBRE': return "09";
      case 'OCTRUBRE': return "10";
      case 'NOVIEMBRE': return "11";
      case 'DICIEMBRE': return "12";
    }
  }
?>
<pre><?php print_r($output); ?></pre>