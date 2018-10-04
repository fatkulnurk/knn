<?php
/**
 * Created by PhpStorm.
 * User: Rudi
 * Date: 30/09/2018
 * Time: 16.45
 */

session_start();

require_once __DIR__ . '/vendor/autoload.php';

use Phpml\Classification\KNearestNeighbors;
include 'app.php';

if(!isset($_GET['number'])){
    header("location:./index.php");
}

$nilaik = $_GET['number'];
$_SESSION['k'] = $nilaik;

$classifier = new KNearestNeighbors($k=$_SESSION['k']);
$classifier->train($data, $label);
$benar=0;
?>
<!DOCTYPE html>
<html lang="en" class="has-navbar-fixed-bottom">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KNN</title>
    <link rel="stylesheet" href="./asset/bulma-0.7.1/css/bulma.min.css" media="all">
    <style>
        .scrol{
            max-height: 350px;
            overflow-y: scroll;
        }
    </style>
</head>
<body>
<body>
<section class="hero is-info is-bold is-fullwidth is-fullheight">
    <div class="hero-head">
        <div class="container has-text-centered">
            <p></p>
            <br>
            <h1 class="title">K Nearest Neighbors</h1>
            <h2 class="subtitle">~~ Fatkul Nur Koirudin / 2110161019 ~~</h2>
        </div>
    </div>
    <div class="hero-body">
        <div class="container box">
            <h2 class="subtitle has-text-black-bis">Hasil Untuk K = <?php echo $_GET['number']; ?></h2>
            <div class="scrol has-text-centered is-center is-centered">
                <table class="table is-fullwidth is-bordered">
                    <tr>
                        <td><b>No.</b></td>
                        <td class="has-text-centered has-background-warning"><b>x</b></td>
                        <td class="has-text-centered has-background-light"><b>y</b></td>
                        <td class="has-text-centered"><b>Label Asli</b></td>
                        <td class="has-text-centered"><b>Label Benar</b></td>
                        <td class="has-text-centered has-background-info"><b>Status</b></td>
                    </tr>
                    <?php
                    for ($a=0; $a <$jbaristest; $a++) {
                        $tes = (int)$datatest[$a][0];
                        $tes2 = (int)$datatest[$a][1];
                        $hasil[$a] = $classifier->predict([$tes,$tes2]);
                        ?>
                        <tr>
                            <td class="has-text-centered"><?=$a+1?></td>
                            <td class="has-text-centered has-background-warning"><?=$tes?></td>
                            <td class="has-text-centered has-background-light"><?=$tes2?></td>
                            <td class="has-text-centered"><?=$hasil[$a]?></td>
                            <td class="has-text-centered"><?=$labelbenar[$a]?></td>
                            <?php
                            if ($a==14) {
                                $hasil[$a]=trim($hasil[$a]);
                            }
                            if ($hasil[$a]===$labelbenar[$a]) {
                                echo "<td class='has-background-success'>TRUE</td>";
                                $benar++;
                            }else{
                                echo "<td class='has-background-danger'>FALSE</td>";
                            }
                            ?>
                        </tr>

                        <?php
                    }
                    $presentasebenar = ($benar/15)*100;
                    session_destroy();
                    ?>
                </table>
            </div>
        </div>
    </div>
</section>
    <nav class="navbar is-light is-fixed-bottom is-fullwidth" role="navigation" aria-label="main navigation">
        <div class="container">
            <a class="navbar-item">
                <span class="has-text-weight-bold is-bold">
                    Tingkat Keberhasilan <?php echo $presentasebenar;?> %
                </span>
            </a>
            <div class="navbar-end">
                <a class="navbar-item" href="./index.php">
                    <span class="button is-link is-rounded">Back To Home</span>
                </a>
            </div>
        </div>
    </nav>
</body>
</html>
