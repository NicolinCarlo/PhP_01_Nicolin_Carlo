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




?>