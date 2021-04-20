<?php

function debug(array $array){
    echo '<pre style="height:200px;overflow-y:scroll;font-size:.8em;padding:10px;font-family:Consolas, Monospace;background-color:#000;color:white;">';
     print_r($array); 
   echo '</pre>';
}
function showJson($data)
{
    header("Content-type: application/json");
    $json = json_encode($data, JSON_PRETTY_PRINT);
    if ($json) {
        die($json);
    } else {
        die('error in json encoding');
    }
}

function failleXSS($clean){
  return trim(strip_tags($_POST[$clean]));
}

function validForm($errors,$data,$key,$min =2,$max = 255)
{
    if(!empty($data)) {
        if(mb_strlen($data) < $min) {
            $errors[$key] = 'min '.$min.' caractères';
        } elseif(mb_strlen($data) > $max) {
            $errors[$key] = 'max '.$max.' caractères';
        }
    } else {
        $errors[$key] = 'Veuillez renseigner ce champ';
    }
    return $errors;
}

function validEmail($errors,$data,$key){

  if(!empty($data)) {

      if(filter_var($data, FILTER_VALIDATE_EMAIL) == false){ 
          $errors[$key] = 'veuillez renseignez une adresse email valide';
      } 
  } else {
          $errors[$key] = 'veuillez renseignez ce champs';
  }
  return $errors;
}

function validPhone($errors, $data, $key)
{
    if (!empty($data)) {
        // Renseigner
        if (!filter_var($data, FILTER_VALIDATE_INT) === false ) {
            $errors[$key] = 'Veuillez mettre un nombre valide';
        } elseif ($data <= 0) {
            $errors[$key] = 'erreur : nombre negatif';
        } elseif (mb_strlen($data) > 10 || mb_strlen($data) < 10) {
            $errors[$key] = 'numéro incorrect';
        }
    } else {
        // Pas afficher
        $errors[$key] = 'Veuillez renseigner ce champ';
    }

    return $errors;
}

function validDate($errors,$data,$key)
{
    if(empty($data)) {
        $errors[$key] = 'Veuillez renseigner une date';
    }
    return $errors;
}
function validNumber($errors,$data,$key){
    if(!empty($data)){
        // Renseigner
        if(!filter_var($data, FILTER_VALIDATE_INT)){
            $errors[$key] = 'Veuillez mettre un nombre valide';
        }elseif($data <=0){
            $errors[$key] = 'Veuillez renseigner un entier positif';
        }
        // elseif($data > 10){
        //     $errors[$key] = 'Nous sommes désolé, mais nous ne prenons pas de reservation au dela de 10 couverts';
        // }
    }else{
            // Pas afficher
            $errors[$key] = 'Veuillez renseigner ce champ';
    }

    return $errors;
}



  