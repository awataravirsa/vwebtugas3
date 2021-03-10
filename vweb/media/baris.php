<?php

$suku1 = "";
$beda = "";
$suku_n = "";
$baris = "";
$baristampil = "";
$hasil = "";


if (isset($_POST['submit'])) {

    $suku1 = $_POST["suku1"];
    $beda = $_POST["beda"];
    $suku_n = $_POST["suku_n"];

    $a = $suku1;
    $b = $beda;
    $n = $suku_n;

    $hasil = $a + ($n - 1) * $b;


    for ($i = 1; $i < $n + 1; $i++) {
        $baris = $a + ($i - 1) * $b;
        $baristampil .= $baris . " ";
    }
}
?>

<!doctype html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS III</title>

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <div>
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light bg-light col">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-4 ml-auto">
                        <li class="nav-item">
                            <h5><a class="nav-item nav-link text-dark" href="../index.php">Back</a></h5>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>



    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form method="POST" action="#" class="bg-white form-container" id="forminput">
                    <h2>
                        <center>MENGHITUNG BARIS ARITMATIKA
                    </h2>
                    </center>
                    <br />
                    <div class="form-group">
                        <label for="input1">Suku Pertama (a)</label>
                        <input type="text" class="form-control" value="<?php echo $suku1; ?>" id="input1" name="suku1" required />
                    </div>
                    <div class="form-group">
                        <label for="input2">Beda (b)</label>
                        <input type="text" class="form-control" value="<?php echo $beda; ?>" id="input2" name="beda" required />
                    </div>
                    <div class="form-group">
                        <label for="input2">Suku Yang Dicari (n)</label>
                        <input type="text" class="form-control" value="<?php echo $suku_n; ?>" id="jmlderet" name="suku_n" required />
                    </div>

                    <button type="submit" class="btn btn-primary btn-block daftar-btn" name="submit">
                        Hitung
                    </button>

                    <br>
                    <h5> <b>Hasil :</b></h5>
                    <div class="form-group">
                        <h5><b>Suku Ke-N (Un):</b></h5>
                        <h4><?php echo $hasil; ?></h4>
                    </div>

                    <div class="form-group">
                        <h5><b>Baris Aritmatika: </b></h5>
                        <h4><?php echo $baristampil; ?></h4>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <hr>
    <div class="container-fluid mb-3">
        <div class="row">
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

</body>

</html>