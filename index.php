<?=
session_start();

require 'ConexionBD.php';
require 'Candidato.php';
require 'CandidatoDAO.php';

//$CandidatoDAO = new CandidatoDAO($conn);
//$candidato = $CandidatoDAO->obtener_todos('DESC', 'fecha');

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Pagina Inicio Votaciones</title>
    </head>
    <body>
        <header>
            <div>
                <h1>Votaciones</h1>
            </div>            
        </header>
        <menu>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="InsertarCandidato.php">Insertar Nuevo Candidato</a></li>
            </ul>
        </menu>
        <main>
            <h1>Candidatos</h1>
            <?php foreach ($candidato as $c): ?>
                <div>
                    <div><?= $c->getNombre ?></div>
                    <div><?= $c->getFoto ?></div>
                    <?= $c->getUsuario()->getNombre(); ?>
                    <div><a href="borrar.php?id=<?= $a->getId() ?>"></a></div>
                </div>
            <?php endforeach; ?>
        </main>
    </body>
</html>
