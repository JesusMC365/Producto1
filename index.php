<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="nav.css">
</head>

<body>
  <nav>
    <ul>
      <li>
        <a href="index.php">Portada</a>
      </li>
      <li>
        <a type="button" onclick="loadDoc('datos5.html',myFunction2 )">Introducción</a>
      </li>
      <li>
        <a type="button" onclick="loadDoc('datos.html',myFunction2 )">Cuadro Comparativo</a>
      </li>
      <li>
        <a type="button" onclick="loadDoc('datos2.html',myFunction2 )">Entorno de Desarrollo</a>
      </li>
      <li>
        <a type="button" onclick="loadDoc('datos3.html',myFunction2 )">Conclusión</a>
      </li>
      <li>
        <a type="button" onclick="loadDoc('datos4.html',myFunction2 )">Referencias</a>
      </li>
    </ul>
  </nav>

  <div id="contenido">
    <div class="datos">
      <img src="logoUTP_nombre.webp" alt="">
      <h2>Jazmin Collado Moreno UTP0145535</h2>
      <h2>Hector de Jesus Escudero Blasco UTP0145416</h2>
      <h2>Jesus Mendoza Cabrera UTP0147041</h2>
      <h2>Producto 1</h2>
      <h2>Javier Nolasco Hernandez</h2>
      <h2>Aplicaciones WEB progresivas </h2>
      <h2>10°B</h2>
    </div>
  </div>
  <script>
    function loadDoc(url, cFunction) {
      const xhttp = new XMLHttpRequest();
      xhttp.onload = function() {
        cFunction(this);
      }
      xhttp.open("GET", url, true);
      xhttp.send();
    }

    function myFunction1(xhttp) {
      // action goes here
      document.getElementById("contenido").innerHTML = xhttp.responseText;
    }

    function myFunction2(xhttp) {
      // action goes here
      document.getElementById("contenido").innerHTML = xhttp.responseText;
    }

    function myFunction2(xhttp) {
      // action goes here
      document.getElementById("contenido").innerHTML = xhttp.responseText;
    }
  </script>
</body>

</html>