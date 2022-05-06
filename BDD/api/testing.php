<?php

require_once __DIR__.("/conexiones/veterinario.php");

$veterinarioConexion = new veterinarioConexion();
$veterinarioConexion->insertar("Stuart", "123", "Little", "Little", "stuart@little.com", "en algun lugar de NY", "74828883", date('Y/m/d H:i:s'));
$veterinarioConexion->editar(2,"Stuart", "123", "Little", "Little", "stuart@little.com", "en algun lugar de NY", "74828883", date('Y/m/d H:i:s'));