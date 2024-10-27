<?php
session_start();

if (!isset($_SESSION["pagamento"])) {
    $_SESSION["pagamento"] = [
        "nome" => array(),
        "eta" => array(),
        "frequenzaPagamento" => array()
    ];
}

if(!isset($_SESSION["prezzi"])){
    $_SESSION["prezzi"] = [];
}

array_push($_SESSION["pagamento"]["nome"], $_POST["nomePersona"]);
array_push($_SESSION["pagamento"]["eta"], $_POST["etaPersona"]);
array_push($_SESSION["pagamento"]["frequenzaPagamento"], $_POST["mese"]);

$sconto = 1;
$prezzo;
$somma = 0;
$anno = 12;
$prezzoFinale;

if ($_POST["etaPersona"] < 18 || $_POST["etaPersona"] > 64) {
    $prezzo = 35;
} else {
    $prezzo = 45;
}

switch ($_POST["mese"]) {
    case "mensile":
        $sconto = 1;
        break;
    case "bimestrale":
        $sconto = 0.1;
        break;
    case "trimestrale":
        $sconto = 0.15;
        break;
    case "annuale":
        $sconto = 0.2;
        break;
}

$somma = $somma + $prezzo * $sconto;
$prezzoFinale = $somma * $anno;

array_push($_SESSION["prezzi"],$prezzoFinale);

?>
<html>

<body>
    <h1>Riepilogo dati</h1>
    nome:<?php print_r($_SESSION["pagamento"]["nome"]) ?>
    eta:<?php print_r($_SESSION["pagamento"]["eta"]) ?>
    frequenza:<?php print_r($_SESSION["pagamento"]["frequenzaPagamento"]) ?>
    prezzo totale annuo: <?php print_r($_SESSION["prezzi"]) ?><br>
    <a href="index.php">Home</a>
</body>

</html>