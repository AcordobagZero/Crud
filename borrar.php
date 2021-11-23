<?php

session_start();
require 'ConexionBD.php';
require 'Candidato.php';
require 'CandidatoDAO.php';

$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
$CandidatoDAO = new CandidatoDAO(ConexionBD::conectar());
$Candidato = $CandidatoDAO->find($id);
$CandidatoDAO->delete($Candidato);

header("Location: index.php");