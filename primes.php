<?php

// Check einer Zahl ob es sich um eine Primzahl handelt
function primeCheck($num) {
  if ($num == 1) {                    // Eingabe 1 = keine Primzahl
    return false;                       
  }
  for ($i = 2; $i < $num; $i++) {     // bei $num = 2 -> "2 < 2" ist nicht "true", geht daher nicht in den for-Loop, und wird so direkt "true"
    if ($num % $i == 0) {         
      return false;
    }
  }
  return true;
}

// Erstellfunktion der Tabelle
function primeList($input) {
  $totalPrimes = 0;
  $totalLines = 0;
  
  for ($n = 1; $n <= $input; $n++) {  // jede Zahl bis $input erreicht ist wird auf Primzahl-Eigenschaft überprüft
    if (primeCheck($n)) {
      $totalPrimes ++;                // Primzahlcounter +1 wenn primeCheck($n) "true"
      if ($totalPrimes % 10 == 1) {   // Check ob Primzahlencounter 11 erreicht hat, dann Umbruch und Zeilencounter +1
        $totalLines++;
        echo "\n";
        echo "Zeile $totalLines: \t";
      }
      echo "$n\t";                    // Primzahl wird gelistet
    }
  }

  // Ausgabefeld
  echo "\n\n";
  echo "Anzahl der Zeilen: $totalLines\n";
  echo "Anzahl der Primzahlen: $totalPrimes\n";
}

// User-Inputfeld um Ausgabebereich der Liste anzugeben
$input = readline("Gib eine Nummer ein bis zu der die Primzahlen gelistet werden sollen: ");
echo "\n";
primeList($input);

?>