<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="$_GET">
        <p>
            <label for="tanggal">
                tanggal
                <input type="number" name="tanggal">
            </label>
        </p>

        <p>
            <label for="bulan">
                bulan
                <input type="number" name="bulan">
            </label>
        </p>

        <input type="submit" value="kirim">
    </form>

    <?php 
    
    $hasil = "Tidak ada";
    
    if (isset($_GET['bulan']) && isset($_GET['tanggal'])) {
        $bulan = $_GET['bulan'];
        $tanggal = $_GET['tanggal'];
    }
    
    switch ($bulan) {
        case 1:
            if ($tanggal >= 1 && $tanggal <= 19) {
                $hasil = "CAPRICORN";
            } elseif ($tanggal >= 20 && $tanggal <= 31) {
                $hasil = "AQUARIUS";
            }

        case 2:
            if ($tanggal >= 1 && $tanggal <= 18) {
                $hasil = "AQUARIUS";
            } elseif ($tanggal >= 19 && $tanggal <= 31) {
                $hasil = "PISCES";
            }

        case 3:
            if ($tanggal >= 1 && $tanggal <= 20) {
                $hasil = "PISCES";
            } elseif ($tanggal >= 21 && $tanggal <= 31) {
                $hasil = "ARIES";
            }

        case 4:
            if ($tanggal >= 1 && $tanggal <= 19) {
                $hasil = "ARIES";
            } elseif ($tanggal >= 20 && $tanggal <= 30) {
                $hasil = "TAURUS";
            }

        case 5:
            if ($tanggal >= 1 && $tanggal <= 20) {
                $hasil = "TAURUS";
            } elseif ($tanggal >= 21 && $tanggal <= 31) {
                $hasil = "GEMINI";
            }

        case 6:
            if ($tanggal >= 1 && $tanggal <= 20) {
                $hasil = "GEMINI";
            } elseif ($tanggal >= 21 && $tanggal <= 30) {
                $hasil = "CANCER";
            }

        case 7:
            if ($tanggal >= 1 && $tanggal <= 22) {
                $hasil = "CANCER";
            } elseif ($tanggal >= 23 && $tanggal <= 31) {
                $hasil = "LEO";
            }

        case 8:
            if ($tanggal >= 1 && $tanggal <= 22) {
                $hasil = "LEO";
            } elseif ($tanggal >= 23 && $tanggal <= 31) {
                $hasil = "VIRGO";
            }

        case 9:
            if ($tanggal >= 1 && $tanggal <= 22) {
                $hasil = "VIRGO";
            } elseif ($tanggal >= 23 && $tanggal <= 30) {
                $hasil = "LIBRA";
            }

        case 10:
            if ($tanggal >= 1 && $tanggal <= 22) {
                $hasil = "LIBRA";
            } elseif ($tanggal >= 23 && $tanggal <= 31) {
                $hasil = "SCORPIO";
            }

        case 11:
            if ($tanggal >= 1 && $tanggal <= 21) {
                $hasil = "SCORPIO";
            } elseif ($tanggal >= 22 && $tanggal <= 30) {
                $hasil = "SAGITARIUS";
            }

        case 12:
            if ($tanggal >= 1 && $tanggal <= 21) {
                $hasil = "SAGITARIUS";
            } elseif ($tanggal >= 22 && $tanggal <= 31) {
                $hasil = "CAPRICORN";
            }
    }

    echo "<h1>$hasil<h1>";

    ?>
</body>
</html>