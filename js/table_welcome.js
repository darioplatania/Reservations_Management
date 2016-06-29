var m=0;
var count = 0;
var pulsante = 0;

/*FUNZIONE PULIZIA COOKIE*/
for (var t=0; t<50; t++){
  var coo = 'cookie' + (t+1).toString();
  var a = readCookie(coo);
  if (a!=null) {
    eraseCookie(coo);
  }
}

for (var j = 0; j < 10; j++) {
  var table = document.getElementById("tb");
  var row = table.insertRow(j);
  var cell = new Array();
  var array_coo = new Array();
  for (var i = 0; i < 5; i++) {
  cell[i] = row.insertCell(i);
  cell[i].innerHTML = String.fromCharCode(j+65) + (i+1);
  //cell[i].id = (j+1).toString() + (i+1).toString();
  m++;
  cell[i].id = m;
  cell[i].style.backgroundColor = "lightgreen";
  document.getElementById("bottone").style.display = "none"; //di default il bottone non viene visto se non vi sono prenotazioni selezionate
  //document.getElementById("errore").style.display = "none"; //di default il bottone non viene visto se non vi sono prenotazioni selezionate

  /*FUNZIONE PER SELEZIONE E CONTEGGIO POSTI + COLORE*/
  cell[i].onclick=function(){
          //document.getElementById("t01").rows.this;
          var pos = this.id;
          //alert(pos);
          if (this.style.backgroundColor == "lightgreen"){
              this.style.backgroundColor = "khaki";
            count = count + 1;;
            pulsante = pulsante + 1;
            document.getElementById("selezionati").innerHTML = pulsante;

            /*inserire bottone prenota*/
            if(pulsante != 0){
            document.getElementById("bottone").style.display = "block";
            }

            /*cookie*/
            var coo = 'cookie' + pos.toString();
            //alert(coo);
            createCookie(coo, pos, 5);
            array_coo[pos] = coo;
            //alert(coo);
            //m++;
        } else if(this.style.backgroundColor == "khaki") {
          this.style.backgroundColor = "lightgreen";
          pulsante = pulsante -1;
          document.getElementById("selezionati").innerHTML = pulsante;

          /*eliminare bottone prenota*/
          if(pulsante == 0){
          document.getElementById("bottone").style.display = "none";
          }
          /*cookie*/
          var c = array_coo[pos];
          eraseCookie(c);
          count--;
          }
        else {
          document.getElementById('1').disabled = true;
        }
      };
}
}
