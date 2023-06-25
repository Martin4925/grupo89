<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <title> Entrega 2 </title>

    <link
      rel="stylesheet"
      type="text/css"
    />

    <link rel="stylesheet" href="Styles/mystyles.css" />

    <style>
      .sticky {
        position: fixed;
        top: 0;
        width: 100%;
        z-index:-1;
      }
    </style>
    <script>
      // Cuando el usuario baje la pagina, se ejecuta myFunction
      window.onload = function () {
        myFunction();
      };
      document.addEventListener("DOMContentLoaded", function (event) {
        myFunction();
      });

      // Get the header
      var header = document.getElementById("sticky_header");

      // Get the offset position of the navbar
      var sticky = header.offsetTop;

      // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
      function myFunction() {
        header.classList.add("sticky");
      }
    </script>
<div class = 'todo'>


<body class = "body">

  <header class="header" id="sticky_header">
    <div text-align = center class="primera">
      <a class="logo"> La Bodega 89 </a>
      <p> Aquí podrás encontrar información sobre nuestros productos y tiendas.</p>
    </div>

  </header>

  <br>
  
  <div class="body_3"> 
  <h3 align="center">Productos más caros de la categoría</h3> 

  <form align="center" action="Consultas/consulta1.php" method="post">
    <label for="Categoría">Seleccionar Categoría:</label>
    <select name="Categoría">
      <option value="iluminacion">Iluminación</option>
      <option value="dormitorio">Dormitorio</option>
      <option value="living">Living</option>
    </select>
    <br>
    <br>
    <input type="submit" value="Buscar">
  </form>
</div>

  <div class="body_3">
  <h3 align="center">Datos de las Tiendas de la Comuna</h3>

  <form align="center" action="Consultas/consulta2.php" method="post">
    <label for="Comuna">Ingrese una Comuna:</label>
    <input type="text" name="Comuna">
    <br/><br/>
    <input type="submit" value="Buscar">
  </form>
</div>

  <div class="body_3">
  <h3 align="center">Datos de empaque del producto</h3>

  <form align="center" action="Consultas/consulta3.php" method="post">
    <label for="id">Ingrese el ID del producto:</label>
    <input type="text" name="id">
    <br/><br/>
    <input type="submit" value="Buscar">
  </form>
</div>

  <div class="body_3">
    <h3 align="center"> Tiendas de la región con el producto en stock </h3>

    <form align="center" action="Consultas/consulta4.php" method="post">
      <label for="nombre">Ingrese el nombre del producto:</label>
      <input type="text" name="nombre">
      <br/><br/>
      <label for="region">Seleccione una Región:</label>
    <select name="region">
      <option value="New Mexico">New Mexico</option>
      <option value="Tennessee">Tennessee</option>
      <option value="Illinois">Illinois</option>
      <option value="Ohio">Ohio</option>
      <option value="Mississippi">Mississippi</option>
      <option value="Alaska">Alaska</option>
      <option value="North Carolina">North Carolina</option>
      <option value="Connecticut">Connecticut</option>
      <option value="Alabama">Alabama</option>
      <option value="Oklahoma">Oklahoma</option>
      <option value="Montana">Montana</option>
      <option value="Oregon">Oregon</option>
      <option value="Colorado">Colorado</option>
      <option value="Michigan">Michigan</option>
      <option value="Wyoming">Wyoming</option>
      <option value="Idaho">Idaho</option>
      <option value="Utah">Utah</option>
      <option value="Kansas">Kansas</option>
      <option value="West Virginia">West Virginia</option>
      <option value="Louisiana">Louisiana</option>
      <option value="Massachusetts">Massachusetts</option>
      <option value="Arkansas">Arkansas</option>
      <option value="Georgia">Georgia</option>
      <option value="North Dakota">North Dakota</option>
      <option value="Florida">Florida</option>
      <option value="Minnesota">Minnesota</option>
      <option value="Iowa">Iowa</option>
      <option value="Hawaii">Hawaii</option>
      <option value="South Dakota">South Dakota</option>
      <option value="Rhode Island">Rhode Island</option>
      <option value="Washington">Washington</option>
      <option value="Maine">Maine</option>
      <option value="California">California</option>
      <option value="South Carolina">South Carolina</option>
      <option value="Indiana">Indiana</option>
      <option value="Pennsylvania">Pennsylvania</option>
      <option value="New Jersey">New Jersey</option>
      <option value="Maryland">Maryland</option>
      <option value="Vermont">Vermont</option>
      <option value="Delaware">Delaware</option>
      <option value="Wisconsin">Wisconsin</option>
      <option value="Texas">Texas</option>
      <option value="New Hampshire">New Hampshire</option>
      <option value="Virginia">Virginia</option>
      <option value="Kentucky">Kentucky</option>
      <option value="Nevada">Nevada</option>
      <option value="Nebraska">Nebraska</option>
      <option value="New York">New York</option>
      <option value="Missouri">Missouri</option>
      <option value="Arizona">Arizona</option>
    </select>
      <input type="submit" value="Buscar">
    </form>
  </div>

  <div class="body_3">
    <h3 align="center"> Total de trabajadores en las tiendas de la región </h3>

    <form align="center" action="Consultas/consulta5.php" method="post">
      <label for="region">Seleccione una Región:</label>
    <select name="region">
      <option value="New Mexico">New Mexico</option>
      <option value="Tennessee">Tennessee</option>
      <option value="Illinois">Illinois</option>
      <option value="Ohio">Ohio</option>
      <option value="Mississippi">Mississippi</option>
      <option value="Alaska">Alaska</option>
      <option value="North Carolina">North Carolina</option>
      <option value="Connecticut">Connecticut</option>
      <option value="Alabama">Alabama</option>
      <option value="Oklahoma">Oklahoma</option>
      <option value="Montana">Montana</option>
      <option value="Oregon">Oregon</option>
      <option value="Colorado">Colorado</option>
      <option value="Michigan">Michigan</option>
      <option value="Wyoming">Wyoming</option>
      <option value="Idaho">Idaho</option>
      <option value="Utah">Utah</option>
      <option value="Kansas">Kansas</option>
      <option value="West Virginia">West Virginia</option>
      <option value="Louisiana">Louisiana</option>
      <option value="Massachusetts">Massachusetts</option>
      <option value="Arkansas">Arkansas</option>
      <option value="Georgia">Georgia</option>
      <option value="North Dakota">North Dakota</option>
      <option value="Florida">Florida</option>
      <option value="Minnesota">Minnesota</option>
      <option value="Iowa">Iowa</option>
      <option value="Hawaii">Hawaii</option>
      <option value="South Dakota">South Dakota</option>
      <option value="Rhode Island">Rhode Island</option>
      <option value="Washington">Washington</option>
      <option value="Maine">Maine</option>
      <option value="California">California</option>
      <option value="South Carolina">South Carolina</option>
      <option value="Indiana">Indiana</option>
      <option value="Pennsylvania">Pennsylvania</option>
      <option value="New Jersey">New Jersey</option>
      <option value="Maryland">Maryland</option>
      <option value="Vermont">Vermont</option>
      <option value="Delaware">Delaware</option>
      <option value="Wisconsin">Wisconsin</option>
      <option value="Texas">Texas</option>
      <option value="New Hampshire">New Hampshire</option>
      <option value="Virginia">Virginia</option>
      <option value="Kentucky">Kentucky</option>
      <option value="Nevada">Nevada</option>
      <option value="Nebraska">Nebraska</option>
      <option value="New York">New York</option>
      <option value="Missouri">Missouri</option>
      <option value="Arizona">Arizona</option>
    </select>
      <input type="submit" value="Buscar">
    </form>
  </div>  

  <div class="body_3">
    <h3 align="center"> Trabajadores por género y edad en las tiendas de la región </h3>

    <form align="center" action="Consultas/consulta6.php" method="post">
      <label for="region">Seleccione una Región:</label>
    <select name="region">
      <option value="New Mexico">New Mexico</option>
      <option value="Tennessee">Tennessee</option>
      <option value="Illinois">Illinois</option>
      <option value="Ohio">Ohio</option>
      <option value="Mississippi">Mississippi</option>
      <option value="Alaska">Alaska</option>
      <option value="North Carolina">North Carolina</option>
      <option value="Connecticut">Connecticut</option>
      <option value="Alabama">Alabama</option>
      <option value="Oklahoma">Oklahoma</option>
      <option value="Montana">Montana</option>
      <option value="Oregon">Oregon</option>
      <option value="Colorado">Colorado</option>
      <option value="Michigan">Michigan</option>
      <option value="Wyoming">Wyoming</option>
      <option value="Idaho">Idaho</option>
      <option value="Utah">Utah</option>
      <option value="Kansas">Kansas</option>
      <option value="West Virginia">West Virginia</option>
      <option value="Louisiana">Louisiana</option>
      <option value="Massachusetts">Massachusetts</option>
      <option value="Arkansas">Arkansas</option>
      <option value="Georgia">Georgia</option>
      <option value="North Dakota">North Dakota</option>
      <option value="Florida">Florida</option>
      <option value="Minnesota">Minnesota</option>
      <option value="Iowa">Iowa</option>
      <option value="Hawaii">Hawaii</option>
      <option value="South Dakota">South Dakota</option>
      <option value="Rhode Island">Rhode Island</option>
      <option value="Washington">Washington</option>
      <option value="Maine">Maine</option>
      <option value="California">California</option>
      <option value="South Carolina">South Carolina</option>
      <option value="Indiana">Indiana</option>
      <option value="Pennsylvania">Pennsylvania</option>
      <option value="New Jersey">New Jersey</option>
      <option value="Maryland">Maryland</option>
      <option value="Vermont">Vermont</option>
      <option value="Delaware">Delaware</option>
      <option value="Wisconsin">Wisconsin</option>
      <option value="Texas">Texas</option>
      <option value="New Hampshire">New Hampshire</option>
      <option value="Virginia">Virginia</option>
      <option value="Kentucky">Kentucky</option>
      <option value="Nevada">Nevada</option>
      <option value="Nebraska">Nebraska</option>
      <option value="New York">New York</option>
      <option value="Missouri">Missouri</option>
      <option value="Arizona">Arizona</option>
    </select>
      <input type="submit" value="Buscar">
    </form>
  </div>

  <div class="body_3">
    <h3 align="center"> Valor total del stock de las tiendas de la región </h3>

    <form align="center" action="Consultas/consulta7.php" method="post">
      <label for="region">Seleccione una Región:</label>
    <select name="region">
      <option value="New Mexico">New Mexico</option>
      <option value="Tennessee">Tennessee</option>
      <option value="Illinois">Illinois</option>
      <option value="Ohio">Ohio</option>
      <option value="Mississippi">Mississippi</option>
      <option value="Alaska">Alaska</option>
      <option value="North Carolina">North Carolina</option>
      <option value="Connecticut">Connecticut</option>
      <option value="Alabama">Alabama</option>
      <option value="Oklahoma">Oklahoma</option>
      <option value="Montana">Montana</option>
      <option value="Oregon">Oregon</option>
      <option value="Colorado">Colorado</option>
      <option value="Michigan">Michigan</option>
      <option value="Wyoming">Wyoming</option>
      <option value="Idaho">Idaho</option>
      <option value="Utah">Utah</option>
      <option value="Kansas">Kansas</option>
      <option value="West Virginia">West Virginia</option>
      <option value="Louisiana">Louisiana</option>
      <option value="Massachusetts">Massachusetts</option>
      <option value="Arkansas">Arkansas</option>
      <option value="Georgia">Georgia</option>
      <option value="North Dakota">North Dakota</option>
      <option value="Florida">Florida</option>
      <option value="Minnesota">Minnesota</option>
      <option value="Iowa">Iowa</option>
      <option value="Hawaii">Hawaii</option>
      <option value="South Dakota">South Dakota</option>
      <option value="Rhode Island">Rhode Island</option>
      <option value="Washington">Washington</option>
      <option value="Maine">Maine</option>
      <option value="California">California</option>
      <option value="South Carolina">South Carolina</option>
      <option value="Indiana">Indiana</option>
      <option value="Pennsylvania">Pennsylvania</option>
      <option value="New Jersey">New Jersey</option>
      <option value="Maryland">Maryland</option>
      <option value="Vermont">Vermont</option>
      <option value="Delaware">Delaware</option>
      <option value="Wisconsin">Wisconsin</option>
      <option value="Texas">Texas</option>
      <option value="New Hampshire">New Hampshire</option>
      <option value="Virginia">Virginia</option>
      <option value="Kentucky">Kentucky</option>
      <option value="Nevada">Nevada</option>
      <option value="Nebraska">Nebraska</option>
      <option value="New York">New York</option>
      <option value="Missouri">Missouri</option>
      <option value="Arizona">Arizona</option>
    </select>
      <input type="submit" value="Buscar">
    </form>
  </div>

</body>
</div>
</html>
