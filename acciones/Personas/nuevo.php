<?php

require_once '../../modelo/persona.php';
require_once '../../configuracion/database.php';
require_once 'request/nuevoRequest.php';
require_once 'responses/nuevoResponse.php';

header('Content-Type: application/json');

$json = file_get_contents('php://input',true);
$resp = new nuevoResponse();
$req = json_decode($json);

$Per = new Persona();
$Per->Nombre=$req->Nombre;
$Per->Apellido=$req->Apellido;
$Per->NroDocumento=$req->NroDocumento;
$Per->Direccion=$req->Direccion;
$Per->Email=$req->Email;
$Per->Agregar();

$resp->IsOk = true;

echo json_encode($resp);