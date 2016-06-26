<!--
// Imposto il sito di destinazione
var destinazione = "include/signup.php";

// Imposto il numero di secondi per il conto alla rovescia
var secondi = 11;

// Creo la variabile conteggio e contestualmente
// imposto il valore di partenza al numero di secondi + 1
var conteggio = document.redirect.counter.value = secondi + 1;

// Creo la funzione che gestisce il conto alla rovescia
function contoallarovescia()
{
  // Se la variabile conteggio è maggiore di 1...
  if (conteggio > 1)
  {
    // decremento il valore della variabile conteggio
    conteggio = conteggio - 1;
    // e contestualmente aggiorno il numero mostrato a video
    document.redirect.counter.value = conteggio;
  // ...se conteggio è uguale o minore di 1 eseguo il redirect
  }else{
    window.location = destinazione;
    return
  }
  // La funzione ri-esegue se stessa ogni secondo fino alla
  // esecuzione del redirect
  setTimeout("contoallarovescia()", 1000);
}

// Lancio per la prima volta la funzione (che poi, come sappiamo
// provvederà autonomamente ad auto eseguirsi ogni secondo)
contoallarovescia()
//-->
