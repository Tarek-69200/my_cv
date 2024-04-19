function myFunction() {
  let e = document.getElementById("mySidebar");
  -1 == e.className.indexOf("w3-show")
    ? (e.className += " w3-show")
    : (e.className = e.className.replace(" w3-show", ""));
}
