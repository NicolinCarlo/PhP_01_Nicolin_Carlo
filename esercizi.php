<?php

// <!-- -Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array


// $numbers = [20,10,7];

// $sum = 0;
// $count = 0;

// foreach ($numbers as $value){
//     if ($value % 2 == 0 ) {
//         $sum += $value;
//         $count++;

//     }
// }

// if ($count > 0){
//     $media = $sum/$count;
//     echo "La media dei numeri pari è:" . $media;
// } else {
//     echo "Non ci sono numeri pari nell array";
// }

// var_dump ($media)

// -Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome”  o “Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del genere
// $users = [
//   ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB'],
// ];

// $utenti =[
//     [
//         'nome' => 'Arianna',
//         'cognome' => 'Sanfilippo',
//         'genere' => 'Donna',
//     ],
//     [
//         'nome' => 'Mamacita',
//         'cognome' => 'Canepa',
//         'genere' => 'Donna',
//     ],
// ];

// foreach ($utenti as $persona){
//     if ($persona ['genere'] == 'Donna') {
//         echo "Sig.ra" . " " . $persona ['nome'] . " " . $persona ['cognome'] . " \n";
//     } else {
//         echo "Sig." . " " . $persona ['nome'] . " " . $persona ['cognome'] . " \n";
//     };
// };

// -Scrivere un programma che stampi in console tutti i numeri da uno a cento. Se il numero è multiplo di 3 stampare “PHP” al posto del numero; se multiplo di 5 stampare “JAVASCRIPT”; se multiplo di 3 e 5 contemporaneamente deve stampare “HACKADEMY75".

//  for ($i=1; $i <=100 ; $i++) { 
//      if ($i % 15 == 0) {
//          echo "HACKADEMY75 ";
//      }elseif($i % 5 == 0) {
//          echo "JAVASCRIPT ";
//      }elseif ($i % 3 == 0){
//          echo "PHP ";
//     }else {
//         echo $i . " ";
//     }
//  };

// Verifica se la password  inserita è valida secondo questi criteri 
// 1) deve essere lunga almeno 8 caratteri 
// 2) deve contenere almeno 1 numero 
// 3) deve contenere una lettera in UPPERCASE
// 4) deve contenere un carattere speciale 

// $password = readline("Inserisci la Password ");
// echo "La tua password è : $password  \n";
// $firstCondition = False;
// $secondCondition = False;
// $thirdCondition = False;
// $fouthCondition = False;

// if (strlen($password) >= 8) {
//     $firstCondition = true;
    
// };

// echo "La prima regola è $firstCondition  \n";

// for ($i=0; $i < strlen($password) ; $i++) { 
//     if (is_numeric($password[$i])) {
//         $secondCondition = true;
//         break;
//     }
// };

// echo "La seconda regola è $secondCondition  \n";

// for ($j=0; $j < strlen($password) ; $j++) { 
//     if (ctype_upper($password[$j])) {
//         $thirdCondition = true;
//         break;
//     }
// };

// echo "La terza regola è $thirdCondition  \n";

// $specicialChar = ['!', 'ç', '£'];

// for ($i=0; $i < strlen($password); $i++) { 
//     for ($j=0; $j < count($specicialChar); $j++) { 
//         if ($password[$i] == $specicialChar [$j]) {
//             $fouthCondition = true;
//             break;
//         }
//     }
// }

// echo "La terza regola è $fouthCondition  \n";

// if ($firstCondition == true && $secondCondition == true && $thirdCondition == true && $fouthCondition == true ) {
//     echo "La tua password è accettata";
// }else {
//     echo "la tua password è rifiutata,riprova ";
// };


// TRASFORMO TUTTO IN UNA FUNZIONE

// $password = readline("Inserisci la Password ");

// function CheckLen ($pw){
//     if (strlen($pw) >= 8 ) {
//         return true;
//     }
//     return false;
// }

//  $firstCondition = CheckLen($password);
//  echo "La prima condizione è $firstCondition \n";

//  function checkNum ($pw){
//      for ($i=0; $i < strlen($pw); $i++) { 
//          if (is_numeric($pw[$i])) {
//              return true;
//          }
//          return false;
//      }
//      return false;
//  }
//  $secondCondition = checkNum ($password);
//  echo "La seconda condizione è $secondCondition \n";

//  function checkUpper ($pw){
//     for ($i=0; $i < strlen($pw) ; $i++) { 
//         if (ctype_upper($pw[$i])) {
//             return true;
//         }
        
//     }
//     return false;
// };
// $thirdCondition = checkUpper ($password);
// echo "la terza condizione è $thirdCondition \n";

// function checkSpecialChar($pw){
// $specialChar = ["!","&","£"];
// for ($i=0; $i < strlen($pw[$i]) ; $i++) { 
//     for ($j=0; $j < count($specialChar) ; $j++) { 
//         if ($pw [$i] == $specialChar[$j]) {
//             return true;
//         }
//     }
// }
// return false;

// }

// $fouthCondition = checkSpecialChar ($password);
// echo "la quarta condizione è $fouthCondition";




// Riprodurre una concessionaria di automobili in OOP seguendo questa gerarchia di classi, con caratteristiche a scelta (Marchio, Modello, Numero porte, Prezzo….e altri a vostra scelta)
// Automobile
// SUV
// Utilitaria
// Sportiva
// Tenere il conto degli oggetti creati per ogni classe

class Automobile {
    public $marchio;
    public $modello;
    public $numeroPorte;
    public $prezzo;
    public static $acquisti = 0;

    public function __construct($mar,$mod,$numPort,$prez){
        $this->marchio = $mar;
        $this->modello = $mod;
        $this->numeroPorte = $numPort;
        $this->prezzo = $prez;
        self::$acquisti ++;
    }

    public static function autoacquistate (){
        echo 'Sono state acquistate' . self::$acquisti . ' ' . 'Automobili' . "\n";
    }
}


$auto1 = new Automobile ('Bmw','120D','3','15.000$');
var_dump ($auto1);
Automobile::autoacquistate();







?>