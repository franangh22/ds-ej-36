<?php

require_once '../../modelo/persona.php';
require_once '../../configuracion/database.php';
require_once 'responses/consultarTodosResponse.php';

header('Content-Type: application/json');
$resp = new consultarTodosResponse();

$resp->ListPersonas = Persona::BuscarTodas();

echo json_encode($resp);