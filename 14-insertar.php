<?php   // ini

// ---- include ----
include "header.php";   // si falla, warning
echo "Contenido principal<br>";

// ---- require ----
require "footer.php";   // si falla, error fatal
echo "Fin de página<br>";

?>  // fin
