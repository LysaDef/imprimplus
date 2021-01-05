<?php include('template/header.php'); ?>
<?php include('template/menu.php'); ?>
    <div class="container">

<h3>Chiffre d'affaire total généré mois par mois par toutes les commandes</h3>

<?php 

$totalCa='';
$totalCa.=$caClient['caMoisDernier'];
var_dump($caClient['caMoisDernier']);

//$totalCa=$caClient['caMoisDernier'];?>

<?php echo $totalCa ?>

    </div>

<?php include('template/footer.php'); ?>