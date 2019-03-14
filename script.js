function calculateScore() {
  var value = 0;
  for(i=1; i <=12; i++){
     value = value + parseInt(document.getElementById('v'+i).value);
  }
  alert("Je hebt tot nu toe " + value + " ECTS behaald.");
}
