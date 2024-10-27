<?php
session_start();
?>
<html>
<doby>

<form action="pagamentoAnnuale.php" method="post">
    <h1>ISCRIZIONE PALESTRA</h1>
    Nome:<input type="text" name="nomePersona" required><br>
    L'eta:<input type="number" min="1" max="120" name="etaPersona" required><br>
    Mese:<br>
    <input type="radio" id="html" name="mese" value="mensile">
    <label>Mensile</label><br>
    <input type="radio" name="mese" value="bimestrale">
    <label>Bimestrale</label><br>
    <input type="radio" name="mese" value="trimestrale">
    <label>Trimestrale</label><br>
    <input type="radio" name="mese" value="annuale">
    <label>Annuale</label><br>
    <input type="submit" value="vai al riepilogo">
    </form>
    <a href="reset.php">Resetta dati</a>
    <a href="stampa.php">Riepilogo finale</a>
</doby>

</html>