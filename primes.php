<?php

// Check einer Zahl ob es sich um eine Primzahl handelt
function primeCheck($num) {
  if ($num == 1) {
    return false; // Eingabe 1 = keine Primzahl
  }
  for ($i = 2; $i < $num; $i++) {
    if ($num % $i == 0) {
      return false;
    }
  }
  return true;
}

// Erstellfunktion der Tabelle
function primeList($input) {
  $totalPrimes = 0;
  $totalLines = 1;
  
  for ($n = 1; $n <= $input; $n++) {
    if ($n == 2) {
      echo "Zeile $totalLines: \t";
    }
    if (primeCheck($n)) {
      printf("%7d", $n);
      $totalPrimes ++;
      if ($totalPrimes % 10 == 0) {
        //Zeilenumbruch und Ausgabe neuer Zeilennummer
        echo "\n";
        echo "Zeile $totalLines: \t";
      }
      // separater $totalLines +Counter damit erst bei Benutzung einer neuen Zeile der Wert erhöht wird (nicht schon bei 10 wie zB. im Fall $input = 29)
      if ($totalPrimes % 10 == 1) {
        $totalLines++;
      }
    }
  }
  $totalLines -= 1; // $totalLines -1 um dem Hilfs-Startwert 1 entgegenzuwirken bei der Ausgabe 
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