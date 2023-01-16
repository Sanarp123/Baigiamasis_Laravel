//Koordinaciu nustatymas

var x = document.getElementById("geolocation");
function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition, showError);
  } else { 
    x.innerHTML = "Negalima nustatyti Jūsų buvimo vietos";
  }
}

//hidden lauku uzpildymas
function showPosition(position) {
    document.getElementById("latitude").value = position.coords.latitude;
    document.getElementById("longitude").value = position.coords.longitude;
}
function showError(error) {
  switch(error.code) {
    case error.PERMISSION_DENIED:
      console.log ('Naudotojas atsisako pateikti savo buvimo vietą'); 
      break;
    case error.POSITION_UNAVAILABLE:
        console.log ('Vietos informacija negalima'); 
      break;
    case error.TIMEOUT:
        console.log ('Užklausos galiojimo laikas baigėsi'); 
      break;
    case error.UNKNOWN_ERROR:
        console.log ('Klaida'); 
      break;
  }
}

getLocation();
