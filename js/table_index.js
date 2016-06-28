var posti_free = 50;
for (var j = 0; j < 10; j++) {
  var table = document.getElementById("tb");
  var row = table.insertRow(j);
  var cell = new Array();
  for (var i = 0; i < 5; i++) {
  cell[i] = row.insertCell(i);
  cell[i].innerHTML = String.fromCharCode(j+65) + (i+1);
  cell[i].id = (j+1).toString() + (i+1).toString();
  cell[i].style.backgroundColor = "lightgreen";
  document.getElementById("bottone").style.display = "none"; //di default il bottone non viene visto se non vi sono prenotazioni selezionate
  document.getElementById("errore").style.display = "none"; //di default il bottone non viene visto se non vi sono prenotazioni selezionate
  /*FUNZIONE PER SELEZIONE E CONTEGGIO POSTI + COLORE*/
  var count = 0;
  cell[i].onclick=function(){
    var pos = this.id;
    //alert(pos);
    if (this.style.backgroundColor == "lightgreen"){
        this.style.backgroundColor = "khaki ";
        count = count +1;
        posti_free = posti_free - 1;
        document.getElementById("selezionati").innerHTML = count;
        document.getElementById("free").innerHTML = posti_free;

        /*inserire bottone prenota*/
        if(count != 0){
        document.getElementById("bottone").style.display = "block";
      }
    }
    else {
      this.style.backgroundColor = "lightgreen";
      count = count -1;
      posti_free = posti_free + 1;
      document.getElementById("selezionati").innerHTML = count;
      document.getElementById("free").innerHTML = posti_free;
      
      /*eliminare bottone prenota*/
      if(count == 0){
      document.getElementById("bottone").style.display = "none";
      }
    }
  };
}
}
/*FUNZIONE ERRORE SE NON SI E' LOGGATI*/
str = document.getElementById("bottone");
str.onclick=function(){
document.getElementById("errore").style.display = "block";

// Imposto il sito di destinazione
var destinazione = "include/signup.php";
window.location = destinazione;
}
