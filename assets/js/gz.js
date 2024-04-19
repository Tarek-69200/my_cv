// requete.js

function effectuerRequete() {
    let xhr = new XMLHttpRequest();
    xhr.open('GET', 'votre_url', true);
    xhr.setRequestHeader('Accept-Encoding', 'gzip, compress, br');
    xhr.onreadystatechange = function() {
      if (xhr.readyState == 4 && xhr.status == 200) {
        // Traitement de la réponse ici
        console.log(xhr.responseText);
      }
    };
    xhr.send();
  }
  