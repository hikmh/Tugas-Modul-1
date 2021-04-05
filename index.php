<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Modul 1</title>
</head>

<body>
    <center>
        <h1>Daftar Nama Anggota Keluarga</h1>
    </center>
    <?php
    $keluarga["ayah"] = "Mohammad Salam";
    $keluarga["ibu"] = "Nuriani";
    $keluarga["kakak1"] = "Muhammad Ramadhan Salam";
    $keluarga["kakak2"] = "Sitti Nur Astuti Salam";
    $keluarga["saya"] = "Sitti Nurul Hikmah Salam";
    $keluarga["adik1"] = "Miftahul Janna Salam";
    $keluarga["adik2"] = "Ayudha Rahmah Salam";
    $keluarga["adik3"] = "Muhammad Yusuf Salam";
    function hitung_jumlah_huruf($kata)
    {
        $kata_split = strlen($kata) - 1;
        $jml_huruf = 0;
        for ($i = 0; $i <= $kata_split; $i++) {
            if ($kata[$i] == " ") {
                $jml_huruf;
            } else {
                $jml_huruf++;
            }
        }

        echo $jml_huruf;
    }
    function hitung_vokal_konsonan($kata)
    {
        $jml_kata = strlen($kata) - 1;
        $huruf_vokal = ['a', 'i', 'u', 'e', 'o', 'A', 'I', 'U', 'E', 'O'];
        $jumlah_vokal = 0;
        $jumlah_konsonan = 0;

        for ($i = 0; $i <= $jml_kata; $i++) {
            if (ctype_alpha($kata[$i]) && in_array($kata[$i], $huruf_vokal)) {
                $jumlah_vokal++;
            } else {
                // $jumlah_konsonan++;
                if ($kata[$i] == " ") {
                    $jumlah_konsonan;
                } else {
                    $jumlah_konsonan++;
                }
            }
        }

        echo "<li>Jumlah Konsonan :" . $jumlah_konsonan . " </li>";
        echo "<li>Jumlah Vokal :" .  $jumlah_vokal . " </li>";
    }
    ?>
    <ol>
        <li>Identitas Ayah
            <ul>
                <li>Nama : <?= $keluarga['ayah']; ?></li>
                <li>Jumlah Kata : <?= str_word_count($keluarga['ayah']); ?></li>
                <li>Jumlah Huruf : <?= hitung_jumlah_huruf($keluarga['ayah']); ?></li>
                <li>Kebalikan Nama : <?= strrev($keluarga['ayah']); ?></li>
                <?php hitung_vokal_konsonan($keluarga["ayah"]) ?>
            </ul>
        </li>
        <li>Identitas Ibu
            <ul>
                <li>Nama : <?= $keluarga['ibu']; ?></li>
                <li>Jumlah Kata : <?= str_word_count($keluarga['ibu']); ?></li>
                <li>Jumlah Huruf : <?= hitung_jumlah_huruf($keluarga['ibu']); ?></li>
                <li>Kebalikan Nama : <?= strrev($keluarga['ibu']); ?></li>
                <?php hitung_vokal_konsonan($keluarga["ibu"]) ?>
            </ul>
        </li>
        <li>Identitas kakak pertama
            <ul>
                <li>Nama : <?= $keluarga['kakak1']; ?></li>
                <li>Jumlah Kata : <?= str_word_count($keluarga['kakak1']); ?></li>
                <li>Jumlah Huruf : <?= hitung_jumlah_huruf($keluarga['kakak1']); ?></li>
                <li>Kebalikan Nama : <?= strrev($keluarga['kakak1']); ?></li>
                <?php hitung_vokal_konsonan($keluarga["kakak1"]) ?>
            </ul>
        </li>
        <li>Identitas kakak kedua
            <ul>
                <li>Nama : <?= $keluarga['kakak2']; ?></li>
                <li>Jumlah Kata : <?= str_word_count($keluarga['kakak2']); ?></li>
                <li>Jumlah Huruf : <?= hitung_jumlah_huruf($keluarga['kakak2']); ?></li>
                <li>Kebalikan Nama : <?= strrev($keluarga['kakak2']); ?></li>
                <?php hitung_vokal_konsonan($keluarga["kakak2"]) ?>
            </ul>
        </li>
        <li>Identitas Saya
            <ul>
                <li>Nama : <?= $keluarga['saya']; ?></li>
                <li>Jumlah Kata : <?= str_word_count($keluarga['saya']); ?></li>
                <li>Jumlah Huruf : <?= hitung_jumlah_huruf($keluarga['saya']); ?></li>
                <li>Kebalikan Nama : <?= strrev($keluarga['saya']); ?></li>
                <?php hitung_vokal_konsonan($keluarga["saya"]) ?>
            </ul>
        </li>
        <li>Identitas adik pertama
            <ul>
                <li>Nama : <?= $keluarga['adik1']; ?></li>
                <li>Jumlah Kata : <?= str_word_count($keluarga['adik1']); ?></li>
                <li>Jumlah Huruf : <?= hitung_jumlah_huruf($keluarga['adik1']); ?></li>
                <li>Kebalikan Nama : <?= strrev($keluarga['adik1']); ?></li>
                <?php hitung_vokal_konsonan($keluarga["adik1"]) ?>
            </ul>
        </li>
        <li>Identitas adik kedua
            <ul>
                <li>Nama : <?= $keluarga['adik2']; ?></li>
                <li>Jumlah Kata : <?= str_word_count($keluarga['adik2']); ?></li>
                <li>Jumlah Huruf : <?= hitung_jumlah_huruf($keluarga['adik2']); ?></li>
                <li>Kebalikan Nama : <?= strrev($keluarga['adik2']); ?></li>
                <?php hitung_vokal_konsonan($keluarga["adik2"]) ?>
            </ul>
        </li>
        <li>Identitas adik ketiga
            <ul>
                <li>Nama : <?= $keluarga['adik3']; ?></li>
                <li>Jumlah Kata : <?= str_word_count($keluarga['adik3']); ?></li>
                <li>Jumlah Huruf : <?= hitung_jumlah_huruf($keluarga['adik3']); ?></li>
                <li>Kebalikan Nama : <?= strrev($keluarga['adik3']); ?></li>
                <?php hitung_vokal_konsonan($keluarga["adik3"]) ?>
            </ul>
        </li>
    </ol>
</body>

</html>
