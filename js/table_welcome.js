for (var j = 0; j < 10; j++) {
  var table = document.getElementById("tb");
  var row = table.insertRow(j);
  var cell = new Array();
  for (var i = 0; i < 5; i++) {
  cell[i] = row.insertCell(i);
  cell[i].innerHTML = String.fromCharCode(j+65) + (i+1);
  cell[i].id = (j+1).toString() + (i+1).toString();
  cell[i].style.backgroundColor = "lightgreen";
  var count = 0;
  cell[i].onclick=function(){
    var pos = this.id;
    //alert(pos);
    if (this.style.backgroundColor == "lightgreen"){
        this.style.backgroundColor = "khaki ";
        count = count +1;
        document.getElementById("prenotati").innerHTML = count;

    }
    else {
      this.style.backgroundColor = "lightgreen";
      count = count -1;
      document.getElementById("prenotati").innerHTML = count;
    }
  };
}
}
