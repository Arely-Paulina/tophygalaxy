<body>
    <table border="1">

  <tr>

    <th>Id</th>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>email</th>
    <th>phone</th>
    <th>password</th>


  </tr>

<?php foreach($osito as $persona){
    echo "<tr>";
    echo "<td>".$persona['idPersona'];
    echo "<td>".$persona['nombre'];
    echo "<td>".$persona['apellido'];
    echo "<td>".$persona['correo'];
    echo "<td>".$persona['telefono'];
    echo "<td>".$persona['contrasenia'];
    echo "</tr>";
}?>


</table>