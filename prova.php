<?php

// recupero tutti i file nella cartella con estensione png o jpg o gif
$images = glob('images/*.{png,jpg,gif}', GLOB_BRACE);
// ciclo l'array
foreach ($images as $value) {
    // esplodo il percorso per recuperare il nome dell'immagine
    $nome = explode("/", $value);
    // calcolo a quale elemento corrisponde il nome dell'immagine
    $el = count($nome) - 1;
    // richiamo l'immagine
    echo "<img src='" . $value . "' alt='" . $nome[$el] . "' title='" . $nome[$el] . "'/>";
}
?>