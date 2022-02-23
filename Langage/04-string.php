<?php

echo 'Je m\'appelle Romain\n';
echo "Je m'appelle Romain\n";

$prenom = 'Romain';
echo 'Je m\'appelle $prenom\n';
echo "Je m'appelle $prenom\n";

$html = "<div id=\"prenom\">Je m'appelle $prenom</div>";

if (true) {
    // HEREDOC (équivalent au ")
    $html = <<<HTML
<div id="prenom">Je m'appelle $prenom</div>
HTML; // fin de la str
}

// NOWDOC (équivalent au ')
$html = <<<'HTML'
<div id="prenom">Je m'appelle $prenom</div>
HTML; // fin de la str
