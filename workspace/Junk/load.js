-
/* ****************event 2********** */

var marker;
var position;
function event2() {
  position = new google.maps.LatLng(53.3562, 6.3053);
  map.setCenter(position);
  map.setZoom(9);
  if (marker) {
    marker.setPosition(position);
    marker.setVisible(true);
  }
  else {
    marker = new google.maps.Marker({
    position: position,
    map: map
  });
 }
}

function loadDoc2() {
  var row = 0;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      myFunction(xhttp, row);
    }
  };
  xhttp.open("GET", "db.xml", true);
  xhttp.send();
  event2();
}


/* ****************event 3********* */


function event3() {
  var position = new google.maps.LatLng(50.26863, -8.05424);
  map.setCenter(position);
  map.setZoom(9);
  if (marker) {
    marker.setPosition(position);
    marker.setVisible(true);
  }
  else {
    marker = new google.maps.Marker({
    position: position,
    map: map
  });
 }
}
function loadDoc3() {
  var row = 1;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      myFunction(xhttp, row);
    }
  };
  xhttp.open("GET", "db.xml", true);
  xhttp.send();
  event3();
}

/* ***************event 4************* */


function event4() {
  var position = new google.maps.LatLng(53.3498, 6.2657);
  map.setCenter(position);
  map.setZoom(9);
  if (marker) {
    marker.setPosition(position);
    marker.setVisible(true);
  }
  else {
    marker = new google.maps.Marker({
    position: position,
    map: map
  });
 }
}
function loadDoc4() {
  var row = 2;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      myFunction(xhttp, row);
    }
  };
  xhttp.open("GET", "db.xml", true);
  xhttp.send();
  event3();
}

/* *****************event 5*********** */


function event5() {
  var position = new google.maps.LatLng(50.26863, -8.05424);
  map.setCenter(position);
  map.setZoom(9);
  if (marker) {
    marker.setPosition(position);
    marker.setVisible(true);
  }
  else {
    marker = new google.maps.Marker({
    position: position,
    map: map
  });
 }
}
function loadDoc5() {
  var row = 3;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      myFunction(xhttp, row);
    }
  };
  xhttp.open("GET", "db.xml", true);
  xhttp.send();
  event3();
}

/* ***************event 6*** */


function event6() {
  var position = new google.maps.LatLng(53.3498, 6.2657);
  map.setCenter(position);
  map.setZoom(9);
  if (marker) {
    marker.setPosition(position);
    marker.setVisible(true);
  }
  else {
    marker = new google.maps.Marker({
    position: position,
    map: map
  });
 }
}
function loadDoc6() {
  var row = 4;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      myFunction(xhttp, row);
    }
  };
  xhttp.open("GET", "db.xml", true);
  xhttp.send();
  event3();
}
