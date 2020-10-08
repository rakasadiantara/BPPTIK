<html>
<head>
    <title>Calculator Sederhana</title>
    <link rel="stylesheet" href="ui.css">
</head>

<body>
<h1 id="ij0ei" data-anim-type="fadeInUp">Calculator sederhana
</h1>
<section id="ia14" class="gpd-section">
  <div id="i9x3m" class="gpd-container">
    <div id="ipx9g" class="gpd-text">
      <b>Input Nilai
      </b>
      <br>
    </div>
    <form method="post" data-redirect="" id="izxp" class="form">
      <div id="" class="form-group">
        <label for="" id="isxki" class="label">Bilangan 1</label>
        <input placeholder="Masukan bilangan disini" name="bil1" id="ipvoq" type="number" required class="input"/>
      </div>
      <div id="inkho" class="form-group">
        <label id="ie47l" class="label">Bilangan 2</label>
        <input type="number" placeholder="Masukan bilangan disini" name="bil2" id="imv0m" required class="input"/>
      </div>
      <div id="iv6pi" class="form-group">
        <button type="submit" id="iiysa" class="button">Hitung</button>
      </div>
    <div><br></div>
    </form>
    <div id="irngi" class="gpd-text">
    <?php
    $bil1 = $_POST['bil1'];//karena pada bagian awal terdapat penampilan bilangan nya maka kita tangkap dulu datanya dan masukan ke variabel bil1 dan juga bil 2
    $bil2 = $_POST['bil2'];
    echo 'Bilangan 1 : '. $bil1. '<br>';//disini saya menampilkan datanya dan juga ditambah string diawalnya
    echo 'Bilangan 2 : '. $bil2. '<br>';
    ?>
    </div>
    <div id="i4g3h">
    </div>
    <div class="gpd-text" id="izfiz">
    <?php 
        function penjumlahan($bil1,$bil2){ // ini merupakan fungsi pertama yang saya buat dengan nama penjumlahan
            $hasiljumlah = $bil1 + $bil2; // ini adalah proses penjumlahannya
            echo "Hasil penjumlahan adalah ". $hasiljumlah; // ini adalah tampilan yang akan dimunculkan jika fungsi penjumlahan diambil.
            echo "<br>"; // ini untuk membuat enter pada program nantinya
        }

        function pengurangan($bil1,$bil2){// selanjutnya saya membuat fungsi yang namanya pengurangan
            $hasilkurang = $bil1 - $bil2; // proses pengurangan
            echo "Hasil pengurangan adalah " . $hasilkurang; // hsail tampilan
            echo "<br>"; // enter
        }
        
        function perkalian($bil1,$bil2){// membuat fungsi yang namanya perkalian
            $hasilkali = $bil1 * $bil2; // proses perkalian
            echo "Hasil perkalian adalah " . $hasilkali; // tampilan
            echo "<br>"; //enter
        }

        function pembagian($bil1,$bil2){// membuat fungsi yang namanya pembagian dengan parameternya bil1 dan bil 2
            $hasilbagi = $bil1 / $bil2; //proses pembagian
            echo "Hasil pembagian adalah " . $hasilbagi; //tampilan hasil baginya
            echo "<br>"; //enter
        }
        
        //ini adalah bagian dimana kita melakukan pemanggilan fungsi
        penjumlahan($bil1,$bil2);
        pengurangan($bil1,$bil2);
        perkalian($bil1,$bil2);
        pembagian($bil1,$bil2);
    ?>

    </div>
  </div>
</section>
</body>
</html>