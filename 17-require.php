<?php require 'includes/header.php';
require 'funciones.php';

iniciarApp();

//Llamando función desde otro archivo
//Un archivo de funciones
//MEjor organización
//Pagos, templates, base de datos, etc

//require: fatal error, usar cuando haya funciones críticas para la aplicación
//indlude: Warning, usar para incluir otros templates

//include sigue ejecutandose si no encuentra el recurso
//incluye deja de ejecutarse

//require_once: si ya se incluyó ignora, si no, lo incluye



include 'includes/footer.php';