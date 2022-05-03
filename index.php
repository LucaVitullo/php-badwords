<?php
/* Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
*/
$name = 'php';
$paragrafo = 'ciao mi chiamo ' . $name;
$censura = $_GET['ban'];
$sostituto = str_replace($censura, "***", $paragrafo);
?>
<h1>Parola Originale</h1>
<h3><?php echo $paragrafo ?></h3>
<h3>Lunghezza: <?php echo strlen($paragrafo) ?></h3>

<h1>Parola da censurare</h1>
<h3><?php echo ($sostituto) ?></h3>
<h3>Lunghezza: <?php echo strlen($sostituto) ?></h3>