<!DOCTYPE html>
<html lang="en" class="has-navbar-fixed-bottom">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KNN</title>
    <link rel="stylesheet" href="./asset/bulma-0.7.1/css/bulma.min.css" media="all">
    <style>
        .scrol{
            max-height: 400px;
            overflow-y: scroll;
        }
    </style>
</head>
<body>
<section class="hero is-link is-bold is-fullheight is-fullwidth">
    <div class="hero-head">
        <div class="container has-text-centered">
            <p></p>
            <br>
            <h1 class="title">K Nearest Neighbors</h1>
            <h2 class="subtitle">~~ Fatkul Nur Koirudin / 2110161019 ~~</h2>
        </div>
    </div>
    <div class="hero-body">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <div class="content box scrol">
                        <h1 class="title has-text-black-bis">List Data Set</h1>
                        <?php
                        $data = file_get_contents('http://localhost/knn/data/datasetruspini.txt');
                        echo "<pre>".$data."</pre>";
                        ?>
                    </div>
                </div>
                <div class="column">
                    <div class="content box scrol">
                        <h1 class="title has-text-black-bis">List Data Tes</h1>
                        <?php
                        $data = file_get_contents('http://localhost/knn/data/datatesruspini.txt');
                        echo "<pre>".$data."</pre>";
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<nav class="navbar is-white is-fixed-bottom" role="navigation" aria-label="main navigation">
    <div class="container">
        <a class="navbar-item">
            MASUKAN JUMLAH K
        </a>
        <div class="columns">
            <div class="column">
                <a class="navbar-item" href="#">
                    <form action="result.php" method="GET">
                        <div class="columns is-flex">
                            <div class="column">
                                <input class="input is-info is-fullwidth" type="number" name="number" placeholder="masukan angka k" required>
                            </div>
                            <div class="column">
                                <input class="button is-info is-rounded" type="submit" value="Submit">
                            </div>
                        </div>
                    </form>
                </a>
            </div>
        </div>
    </div>
</nav>
</body>
</html>