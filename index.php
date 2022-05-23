<!DOCTYPE html>
<html lang="en">
<?php require "layout/head.php" ?>

<body class="sb-nav-fixed">
    <?php require "layout/sidebar.php"; ?>

    <div id="layoutSidenav_content">
        <div class="container-fluid px-4">
            <h1 class="mt-4"> <i class="fas fa-tachometer-alt"></i>Dashboard</h1>
            <hr class="bg-secondary">

            <div class="card">
                <div class="card-body">
                    <p class="card-text"> Metode Simple Additive Weighting (SAW) sering juga dikenal istilah metode penjumlahan terbobot. Konsep dasar metode SAW adalah mencari penjumlahan terbobot dari rating kinerja pada setiap alternatif pada semua atribut (Fishburn 1967). SAW dapat dianggap sebagai cara yang paling mudah dan intuitif untuk menangani masalah Multiple Criteria Decision-Making MCDM, karena fungsi linear additive dapat mewakili preferensi pembuat keputusan (Decision-Making, DM). Hal tersebut dapat dibenarkan, namun, hanya ketika asumsi preference independence (Keeney & Raiffa 1976) atau preference separability (Gorman 1968) terpenuhi.</p>

                    <hr>
                    <p class="card-text">Langkah Penyelesaian Simple Additive Weighting (SAW) adalah sebagai berikut :</p>
                    <ol type="1">
                        <li>Menentukan kriteria-kriteria yang akan dijadikan acuan dalam pengambilan keputusan, yaitu Ci</i>
                        <li>Menentukan rating kecocokan setiap alternatif pada setiap kriteria (X).</li>
                        <li>Membuat matriks keputusan berdasarkan kriteria(Ci), kemudian melakukan normalisasi matriks berdasarkan persamaan yang disesuaikan dengan jenis
                            atribut (atribut keuntungan ataupun atribut biaya) sehingga diperoleh matriks ternormalisasi R.</li>
                        <li>Hasil akhir diperoleh dari proses perankingan yaitu penjumlahan dari perkalian matriks ternormalisasi R dengan vektor bobot sehingga diperoleh
                            nilai terbesar yang dipilih sebagai alternatif terbaik (Ai)sebagai solusi</li>
                    </ol>
                </div>
            </div>
        </div>
        <hr class="bg-secondary">
        <?php require "layout/footer.php"; ?>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>