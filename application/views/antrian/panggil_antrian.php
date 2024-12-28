<?php
$antrian1 = $antrian_non_racikan['no_antrian'];
$antrian2 = $antrian_racikan['no_antrian'];
$antrian3 = $antrianbpjs_non_racikan['no_antrian'];
$antrian4 = $antrianbpjs_racikan['no_antrian'];
?>

<audio id="suarabel" src="<?= base_url('assets/audio/bell.mp3'); ?>"></audio>
<audio id="obatnonracik" src="<?= base_url('assets/audio/non_racikan.mp3'); ?>"></audio>
<audio id="obatracik" src="<?= base_url('assets/audio/racikan.mp3'); ?>"></audio>
<audio id="no_antrian" src="<?= base_url('assets/audio/no_antrian.mp3'); ?>"></audio>
<audio id="antrian_a" src="<?= base_url('assets/audio/A.mp3'); ?>"></audio>
<audio id="antrian_b" src="<?= base_url('assets/audio/B.mp3'); ?>"></audio>
<audio id="antrian_c" src="<?= base_url('assets/audio/C.mp3'); ?>"></audio>
<audio id="antrian_d" src="<?= base_url('assets/audio/D.mp3'); ?>"></audio>
<audio id="sepuluh" src="<?= base_url('assets/audio/sepuluh.mp3'); ?>"></audio>
<audio id="sebelas" src="<?= base_url('assets/audio/sebelas.mp3'); ?>"></audio>
<audio id="seratus" src="<?= base_url('assets/audio/seratus.mp3'); ?>"></audio>
<audio id="belas" src="<?= base_url('assets/audio/belas.mp3'); ?>"></audio>
<audio id="puluh" src="<?= base_url('assets/audio/puluh.mp3'); ?>"></audio>
<audio id="ratus" src="<?= base_url('assets/audio/ratus.mp3'); ?>"></audio>
<audio id="loket1" src="<?= base_url('assets/audio/loket1.mp3'); ?>"></audio>
<audio id="loket2" src="<?= base_url('assets/audio/loket2.mp3'); ?>"></audio>

<?php
if ($antrian1 > 11 && $antrian1 < 20) { ?>
    <audio id="antrian" src="<?php echo base_url(
        "assets/audio/" . substr($antrian1, -1, 1) . ".mp3"
    ); ?>"></audio>
<?php } elseif ($antrian1 == 20) { ?>
    <audio id="antrian" src="<?php echo base_url(
        "assets/audio/" . substr($antrian1, 0, 1) . ".mp3"
    ); ?>"></audio>
<?php } elseif ($antrian1 > 20 && $antrian1 < 100) { ?>
    <audio id="antrian" src="<?php echo base_url(
        "assets/audio/" . substr($antrian1, 0, 1) . ".mp3"
    ); ?>"></audio>
    <?php
    $a = substr($antrian1, -1, 1);
    if ($a == 0) {
    } else {
        ?>
        <audio id="antrian1" src="<?php echo base_url(
            "assets/audio/" . $a . ".mp3"
        ); ?>"></audio>
        <?php
    }
} elseif ($antrian1 > 100 && $antrian1 < 110) { ?>
    <audio id="antrian" src="<?php echo base_url(
        "assets/audio/" . substr($antrian1, -1, 1) . ".mp3"
    ); ?>"></audio>
<?php } elseif ($antrian1 > 111 && $antrian1 < 120) { ?>
    <audio id="antrian" src="<?php echo base_url(
        "assets/audio/" . substr($antrian1, -1, 1) . ".mp3"
    ); ?>"></audio>
<?php } elseif ($antrian1 > 119 && $antrian1 < 200) { ?>
    <audio id="antrian" src="<?php echo base_url(
        "assets/audio/" . substr($antrian1, 1, 1) . ".mp3"
    ); ?>"></audio>
<?php } else { ?>
    <audio id="antrian" src="<?php echo base_url(
        "assets/audio/" .
        $antrian1 .
        ".mp3"
    ); ?>"></audio>
<?php } ?>

<?php
if ($antrian2 > 11 && $antrian2 < 20) { ?>
    <audio id="antrianracik" src="<?php echo base_url(
        "assets/audio/" . substr($antrian2, -1, 1) . ".mp3"
    ); ?>"></audio>
<?php } elseif ($antrian2 == 20) { ?>
    <audio id="antrianracik" src="<?php echo base_url(
        "assets/audio/" . substr($antrian2, 0, 1) . ".mp3"
    ); ?>"></audio>
<?php } elseif ($antrian2 > 20 && $antrian2 < 100) { ?>
    <audio id="antrianracik" src="<?php echo base_url(
        "assets/audio/" . substr($antrian2, 0, 1) . ".mp3"
    ); ?>"></audio>
    <?php
    $b = substr($antrian1, -1, 1);
    if ($b == 0) {
    } else {
        ?>
        <audio id="antrian2" src="<?php echo base_url(
            "assets/audio/" . $b . ".mp3"
        ); ?>"></audio>
        <?php
    }
} elseif ($antrian2 > 100 && $antrian2 < 110) { ?>
    <audio id="antrianracik" src="<?php echo base_url(
        "assets/audio/" . substr($antrian2, -1, 1) . ".mp3"
    ); ?>"></audio>
<?php } elseif ($antrian2 > 111 && $antrian2 < 120) { ?>
    <audio id="antrianracik" src="<?php echo base_url(
        "assets/audio/" . substr($antrian2, -1, 1) . ".mp3"
    ); ?>"></audio>
<?php } elseif ($antrian2 > 119 && $antrian2 < 200) { ?>
    <audio id="antrianracik" src="<?php echo base_url(
        "assets/audio/" . substr($antrian2, 1, 1) . ".mp3"
    ); ?>"></audio>
<?php } else { ?>
    <audio id="antrianracik" src="<?php echo base_url(
        "assets/audio/" .
        $antrian2 .
        ".mp3"
    ); ?>"></audio>
<?php } ?>

<?php
if ($antrian3 > 11 && $antrian3 < 20) { ?>
    <audio id="antrianbpjs" src="<?php echo base_url(
        "assets/audio/" . substr($antrian3, -1, 1) . ".mp3"
    ); ?>"></audio>
<?php } elseif ($antrian3 == 20) { ?>
    <audio id="antrianbpjs" src="<?php echo base_url(
        "assets/audio/" . substr($antrian3, 0, 1) . ".mp3"
    ); ?>"></audio>
<?php } elseif ($antrian3 > 20 && $antrian3 < 100) { ?>
    <audio id="antrianbpjs" src="<?php echo base_url(
        "assets/audio/" . substr($antrian3, 0, 1) . ".mp3"
    ); ?>"></audio>
    <?php
    $c = substr($antrian3, -1, 1);
    if ($c == 0) {
    } else {
        ?>
        <audio id="antrian3" src="<?php echo base_url(
            "assets/audio/" . $c . ".mp3"
        ); ?>"></audio>
        <?php
    }
} elseif ($antrian3 > 100 && $antrian3 < 110) { ?>
    <audio id="antrianbpjs" src="<?php echo base_url(
        "assets/audio/" . substr($antrian3, -1, 1) . ".mp3"
    ); ?>"></audio>
<?php } elseif ($antrian3 > 111 && $antrian3 < 120) { ?>
    <audio id="antrianbpjs" src="<?php echo base_url(
        "assets/audio/" . substr($antrian3, -1, 1) . ".mp3"
    ); ?>"></audio>
<?php } elseif ($antrian3 > 119 && $antrian3 < 200) { ?>
    <audio id="antrianbpjs" src="<?php echo base_url(
        "assets/audio/" . substr($antrian3, 1, 1) . ".mp3"
    ); ?>"></audio>
<?php } else { ?>
    <audio id="antrianbpjs" src="<?php echo base_url(
        "assets/audio/" .
        $antrian3 .
        ".mp3"
    ); ?>"></audio>
<?php } ?>

<?php
if ($antrian4 > 11 && $antrian4 < 20) { ?>
    <audio id="antrianracikbpjs" src="<?php echo base_url(
        "assets/audio/" . substr($antrian4, -1, 1) . ".mp3"
    ); ?>"></audio>
<?php } elseif ($antrian4 == 20) { ?>
    <audio id="antrianracikbpjs" src="<?php echo base_url(
        "assets/audio/" . substr($antrian4, 0, 1) . ".mp3"
    ); ?>"></audio>
<?php } elseif ($antrian4 > 20 && $antrian4 < 100) { ?>
    <audio id="antrianracikbpjs" src="<?php echo base_url(
        "assets/audio/" . substr($antrian4, 0, 1) . ".mp3"
    ); ?>"></audio>
    <?php
    $d = substr($antrian4, -1, 1);
    if ($d == 0) {
    } else {
        ?>
        <audio id="antrian4" src="<?php echo base_url(
            "assets/audio/" . $d . ".mp3"
        ); ?>"></audio>
        <?php
    }
} elseif ($antrian4 > 100 && $antrian4 < 110) { ?>
    <audio id="antrianracikbpjs" src="<?php echo base_url(
        "assets/audio/" . substr($antrian4, -1, 1) . ".mp3"
    ); ?>"></audio>
<?php } elseif ($antrian4 > 111 && $antrian4 < 120) { ?>
    <audio id="antrianracikbpjs" src="<?php echo base_url(
        "assets/audio/" . substr($antrian4, -1, 1) . ".mp3"
    ); ?>"></audio>
<?php } elseif ($antrian4 > 119 && $antrian4 < 200) { ?>
    <audio id="antrianracikbpjs" src="<?php echo base_url(
        "assets/audio/" . substr($antrian4, 1, 1) . ".mp3"
    ); ?>"></audio>
<?php } else { ?>
    <audio id="antrianracikbpjs" src="<?php echo base_url(
        "assets/audio/" .
        $antrian4 .
        ".mp3"
    ); ?>"></audio>
<?php } ?>


<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

<div class="container-fluid">

    <!-- ambil antrian -->
    <div class="row justify-content-center" style="height: 538px;">
        <div class="">
            <div class="row card-antrian text-center margin: 20px;">
                <div class="card text-white bg-primary mb-3 border-primary shadow-lg"
                    style="max-width: 18rem; margin:20px; width: 250px">
                    <div class="card-header text-dark">Obat Non Racikan</div>
                    <div class="card-body text-primary">
                        <input type="hidden" name="non_racik" id="non_racik" value="<?= $antrian_non_racikan[
                            "no_antrian"
                        ] ?>">
                        <h5 class="card-title text-white" id="nomer1">A</h5>
                        <button class="btn btn-light font-weight-bold panggilnon "
                            style=" font-size: 13px; margin-bottom:10px;" onclick="panggilnon_loket1()">Panggil
                            Ke Loket 1
                        </button>
                        <button class="btn btn-success font-weight-bold panggilnon "
                            style=" font-size: 13px; margin-bottom:10px;" onclick="panggilnon_loket2()">Panggil
                            Ke Loket 2
                        </button>
                        <a href="<?= base_url(
                            "antrian/antrian_non_racikan/"
                        ) ?>" class="btn btn-danger font-weight-bold" style="font-size: 13px;">Antrian Selanjutnya</a>
                    </div>
                </div>


                <div class="card text-white bg-primary mb-3 border-primary shadow-lg"
                    style="max-width: 18rem; margin:20px; width: 250px">
                    <div class="card-header text-dark">Obat Racikan</div>
                    <div class="card-body text-primary">
                        <input type="hidden" name="racik" id="racik" value="<?= $antrian_racikan[
                            "no_antrian"
                        ] ?>">
                        <h5 class="card-title text-white" id="nomer2">B</h5>
                        <button class="btn btn-light font-weight-bold panggilracik "
                            style=" font-size: 13px; margin-bottom:10px; " onclick="panggilracik_loket1()">Panggil
                            Ke Loket 1
                        </button>
                        <button class="btn btn-success font-weight-bold panggilracik "
                            style=" font-size: 13px; margin-bottom:10px; " onclick="panggilracik_loket2()">Panggil
                            Ke Loket 2
                        </button>
                        <a href="<?= base_url(
                            "antrian/antrian_racikan/"
                        ) ?>" class="btn btn-danger font-weight-bold" style="font-size: 13px;">Antrian Selanjutnya</a>
                    </div>
                </div>

                <div class="card text-white bg-success mb-3 border-success shadow-lg"
                    style="max-width: 18rem; margin:20px; width: 250px">
                    <div class="card-header text-dark">Obat Non Racikan</div>
                    <div class="card-body text-primary">
                        <input type="hidden" name="bpjsnon_racik" id="bpjsnon_racik" value="<?= $antrianbpjs_non_racikan[
                            "no_antrian"
                        ] ?>">
                        <h5 class="card-title text-white" id="nomer3">C</h5>
                        <button class="btn btn-primary font-weight-bold panggilbpjsnon "
                            style=" font-size: 13px; margin-bottom:10px;" onclick="panggilbpjsnon_loket1()">Panggil
                            Ke Loket 1
                        </button>
                        <button class="btn btn-light font-weight-bold panggilbpjsnon "
                            style=" font-size: 13px; margin-bottom:10px;" onclick="panggilbpjsnon_loket2()">Panggil
                            Ke Loket 2
                        </button>
                        <a href="<?= base_url(
                            "antrian/antrianbpjs_non_racikan/"
                        ) ?>" class="btn btn-danger font-weight-bold" style="font-size: 13px;">Antrian Selanjutnya</a>
                    </div>
                </div>

                <div class="card text-white bg-success mb-3 border-success shadow-lg"
                    style="max-width: 18rem; margin:20px; width: 250px">
                    <div class="card-header text-dark">Obat Racikan</div>
                    <div class="card-body text-primary">
                        <input type="hidden" name="bpjs_racik" id="bpjs_racik" value="<?= $antrianbpjs_racikan[
                            "no_antrian"
                        ] ?>">
                        <h5 class="card-title text-white" id="nomer4">D</h5>
                        <button class="btn btn-primary font-weight-bold panggilbpjsracik "
                            style=" font-size: 13px; margin-bottom:10px; " onclick="panggilbpjsracik_loket1()">Panggil
                            Ke Loket 1
                        </button>
                        <button class="btn btn-light font-weight-bold panggilbpjsracik "
                            style=" font-size: 13px; margin-bottom:10px; " onclick="panggilbpjsracik_loket2()">Panggil
                            Ke Loket 2
                        </button>
                        <a href="<?= base_url(
                            "antrian/antrianbpjs_racikan/"
                        ) ?>" class="btn btn-danger font-weight-bold" style="font-size: 13px;">Antrian Selanjutnya</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- End of Main Content -->

<script type="text/javascript">

    function panggilnon_loket1() {
        document.getElementById("suarabel").pause();
        document.getElementById("suarabel").currentTime = 0;
        document.getElementById("suarabel").play();

        //set delay
        totalWaktu = document.getElementById("suarabel").duration * 700;

        //playnomerurutnya
        setTimeout(function () {
            document.getElementById("obatnonracik").pause();
            document.getElementById("obatnonracik").currentTime = 0;
            document.getElementById("obatnonracik").play();
        }, totalWaktu);
        totalWaktu = totalWaktu + 2000;

        setTimeout(function () {
            document.getElementById("no_antrian").pause();
            document.getElementById("no_antrian").currentTime = 0;
            document.getElementById("no_antrian").play();
        }, totalWaktu);
        totalWaktu = totalWaktu + 1700;

        setTimeout(function () {
            document.getElementById("antrian_a").pause();
            document.getElementById("antrian_a").currentTime = 0;
            document.getElementById("antrian_a").play();
        }, totalWaktu);
        totalWaktu = totalWaktu + 700;

        <?php if ($antrian1 < 10) { ?>
            setTimeout(function () {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

            setTimeout(function () {
                document.getElementById("loket1").pause();
                document.getElementById("loket1").currentTime = 0;
                document.getElementById("loket1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian1 == 10) { ?>
            setTimeout(function () {
                document.getElementById("sepuluh").pause();
                document.getElementById("sepuluh").currentTime = 0;
                document.getElementById("sepuluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;
            setTimeout(function () {
                document.getElementById("loket1").pause();
                document.getElementById("loket1").currentTime = 0;
                document.getElementById("loket1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian1 == 11) { ?>
            setTimeout(function () {
                document.getElementById("sebelas").pause();
                document.getElementById("sebelas").currentTime = 0;
                document.getElementById("sebelas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

            setTimeout(function () {
                document.getElementById("loket1").pause();
                document.getElementById("loket1").currentTime = 0;
                document.getElementById("loket1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian1 > 11 && $antrian1 < 20) { ?>
            setTimeout(function () {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

            setTimeout(function () {
                document.getElementById("belas").pause();
                document.getElementById("belas").currentTime = 0;
                document.getElementById("belas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

            setTimeout(function () {
                document.getElementById("loket1").pause();
                document.getElementById("loket1").currentTime = 0;
                document.getElementById("loket1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian1 == 20) { ?>
            setTimeout(function () {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("puluh").pause();
                document.getElementById("puluh").currentTime = 0;
                document.getElementById("puluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

            setTimeout(function () {
                document.getElementById("loket1").pause();
                document.getElementById("loket1").currentTime = 0;
                document.getElementById("loket1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian1 > 20 && $antrian1 < 100) { ?>
            setTimeout(function () {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("puluh").pause();
                document.getElementById("puluh").currentTime = 0;
                document.getElementById("puluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

            setTimeout(function () {
                document.getElementById("antrian1").pause();
                document.getElementById("antrian1").currentTime = 0;
                document.getElementById("antrian1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("loket1").pause();
                document.getElementById("loket1").currentTime = 0;
                document.getElementById("loket1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian1 == 100) { ?>

            setTimeout(function () {
                document.getElementById("seratus").pause();
                document.getElementById("seratus").currentTime = 0;
                document.getElementById("seratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

        <?php } elseif ($antrian1 > 100 && $antrian1 < 110) { ?>
            setTimeout(function () {
                document.getElementById("seratus").pause();
                document.getElementById("seratus").currentTime = 0;
                document.getElementById("seratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("loket1").pause();
                document.getElementById("loket1").currentTime = 0;
                document.getElementById("loket1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian1 == 110) { ?>
            setTimeout(function () {
                document.getElementById("seratus").pause();
                document.getElementById("seratus").currentTime = 0;
                document.getElementById("seratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("sepuluh").pause();
                document.getElementById("sepuluh").currentTime = 0;
                document.getElementById("sepuluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("loket1").pause();
                document.getElementById("loket1").currentTime = 0;
                document.getElementById("loket1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian1 == 111) { ?>
            setTimeout(function () {
                document.getElementById("seratus").pause();
                document.getElementById("seratus").currentTime = 0;
                document.getElementById("seratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("sebelas").pause();
                document.getElementById("sebelas").currentTime = 0;
                document.getElementById("sebelas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("loket1").pause();
                document.getElementById("loket1").currentTime = 0;
                document.getElementById("loket1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian1 > 111 && $antrian1 < 120) { ?>
            setTimeout(function () {
                document.getElementById("seratus").pause();
                document.getElementById("seratus").currentTime = 0;
                document.getElementById("seratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("belas").pause();
                document.getElementById("belas").currentTime = 0;
                document.getElementById("belas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("loket1").pause();
                document.getElementById("loket1").currentTime = 0;
                document.getElementById("loket1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian1 > 119 && $antrian1 < 200) { ?>
            setTimeout(function () {
                document.getElementById("seratus").pause();
                document.getElementById("seratus").currentTime = 0;
                document.getElementById("seratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("puluh").pause();
                document.getElementById("puluh").currentTime = 0;
                document.getElementById("puluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("antrian1").pause();
                document.getElementById("antrian1").currentTime = 0;
                document.getElementById("antrian1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("loket1").pause();
                document.getElementById("loket1").currentTime = 0;
                document.getElementById("loket1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;
        <?php } ?>
    };

    function panggilnon_loket2() {
        document.getElementById("suarabel").pause();
        document.getElementById("suarabel").currentTime = 0;
        document.getElementById("suarabel").play();

        //set delay
        totalWaktu = document.getElementById("suarabel").duration * 700;

        //playnomerurutnya
        setTimeout(function () {
            document.getElementById("obatnonracik").pause();
            document.getElementById("obatnonracik").currentTime = 0;
            document.getElementById("obatnonracik").play();
        }, totalWaktu);
        totalWaktu = totalWaktu + 2000;

        setTimeout(function () {
            document.getElementById("no_antrian").pause();
            document.getElementById("no_antrian").currentTime = 0;
            document.getElementById("no_antrian").play();
        }, totalWaktu);
        totalWaktu = totalWaktu + 1700;

        setTimeout(function () {
            document.getElementById("antrian_a").pause();
            document.getElementById("antrian_a").currentTime = 0;
            document.getElementById("antrian_a").play();
        }, totalWaktu);
        totalWaktu = totalWaktu + 700;

        <?php if ($antrian1 < 10) { ?>
            setTimeout(function () {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

            setTimeout(function () {
                document.getElementById("loket2").pause();
                document.getElementById("loket2").currentTime = 0;
                document.getElementById("loket2").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian1 == 10) { ?>
            setTimeout(function () {
                document.getElementById("sepuluh").pause();
                document.getElementById("sepuluh").currentTime = 0;
                document.getElementById("sepuluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;
            setTimeout(function () {
                document.getElementById("loket2").pause();
                document.getElementById("loket2").currentTime = 0;
                document.getElementById("loket2").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian1 == 11) { ?>
            setTimeout(function () {
                document.getElementById("sebelas").pause();
                document.getElementById("sebelas").currentTime = 0;
                document.getElementById("sebelas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

            setTimeout(function () {
                document.getElementById("loket2").pause();
                document.getElementById("loket2").currentTime = 0;
                document.getElementById("loket2").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian1 > 11 && $antrian1 < 20) { ?>
            setTimeout(function () {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

            setTimeout(function () {
                document.getElementById("belas").pause();
                document.getElementById("belas").currentTime = 0;
                document.getElementById("belas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

            setTimeout(function () {
                document.getElementById("loket2").pause();
                document.getElementById("loket2").currentTime = 0;
                document.getElementById("loket2").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian1 == 20) { ?>
            setTimeout(function () {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("puluh").pause();
                document.getElementById("puluh").currentTime = 0;
                document.getElementById("puluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

            setTimeout(function () {
                document.getElementById("loket2").pause();
                document.getElementById("loket2").currentTime = 0;
                document.getElementById("loket2").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian1 > 20 && $antrian1 < 100) { ?>
            setTimeout(function () {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("puluh").pause();
                document.getElementById("puluh").currentTime = 0;
                document.getElementById("puluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

            setTimeout(function () {
                document.getElementById("antrian1").pause();
                document.getElementById("antrian1").currentTime = 0;
                document.getElementById("antrian1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("loket2").pause();
                document.getElementById("loket2").currentTime = 0;
                document.getElementById("loket2").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian1 == 100) { ?>

            setTimeout(function () {
                document.getElementById("seratus").pause();
                document.getElementById("seratus").currentTime = 0;
                document.getElementById("seratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

        <?php } elseif ($antrian1 > 100 && $antrian1 < 110) { ?>
            setTimeout(function () {
                document.getElementById("seratus").pause();
                document.getElementById("seratus").currentTime = 0;
                document.getElementById("seratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("loket2").pause();
                document.getElementById("loket2").currentTime = 0;
                document.getElementById("loket2").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian1 == 110) { ?>
            setTimeout(function () {
                document.getElementById("seratus").pause();
                document.getElementById("seratus").currentTime = 0;
                document.getElementById("seratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("sepuluh").pause();
                document.getElementById("sepuluh").currentTime = 0;
                document.getElementById("sepuluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("loket2").pause();
                document.getElementById("loket2").currentTime = 0;
                document.getElementById("loket2").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian1 == 111) { ?>
            setTimeout(function () {
                document.getElementById("seratus").pause();
                document.getElementById("seratus").currentTime = 0;
                document.getElementById("seratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("sebelas").pause();
                document.getElementById("sebelas").currentTime = 0;
                document.getElementById("sebelas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("loket2").pause();
                document.getElementById("loket2").currentTime = 0;
                document.getElementById("loket2").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian1 > 111 && $antrian1 < 120) { ?>
            setTimeout(function () {
                document.getElementById("seratus").pause();
                document.getElementById("seratus").currentTime = 0;
                document.getElementById("seratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("belas").pause();
                document.getElementById("belas").currentTime = 0;
                document.getElementById("belas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("loket2").pause();
                document.getElementById("loket2").currentTime = 0;
                document.getElementById("loket2").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian1 > 119 && $antrian1 < 200) { ?>
            setTimeout(function () {
                document.getElementById("seratus").pause();
                document.getElementById("seratus").currentTime = 0;
                document.getElementById("seratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("puluh").pause();
                document.getElementById("puluh").currentTime = 0;
                document.getElementById("puluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("antrian1").pause();
                document.getElementById("antrian1").currentTime = 0;
                document.getElementById("antrian1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("loket2").pause();
                document.getElementById("loket2").currentTime = 0;
                document.getElementById("loket2").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;
        <?php } ?>
    };


    function panggilracik_loket1() {
        document.getElementById("suarabel").pause();
        document.getElementById("suarabel").currentTime = 0;
        document.getElementById("suarabel").play();

        //set delay
        totalWaktu = document.getElementById("suarabel").duration * 700;

        //playnomerurutnya
        setTimeout(function () {
            document.getElementById("obatracik").pause();
            document.getElementById("obatracik").currentTime = 0;
            document.getElementById("obatracik").play();
        }, totalWaktu);
        totalWaktu = totalWaktu + 2000;

        setTimeout(function () {
            document.getElementById("no_antrian").pause();
            document.getElementById("no_antrian").currentTime = 0;
            document.getElementById("no_antrian").play();
        }, totalWaktu);
        totalWaktu = totalWaktu + 1700;

        setTimeout(function () {
            document.getElementById("antrian_b").pause();
            document.getElementById("antrian_b").currentTime = 0;
            document.getElementById("antrian_b").play();
        }, totalWaktu);
        totalWaktu = totalWaktu + 700;

        <?php if ($antrian2 < 10) { ?>
            setTimeout(function () {
                document.getElementById("antrianracik").pause();
                document.getElementById("antrianracik").currentTime = 0;
                document.getElementById("antrianracik").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

            setTimeout(function () {
                document.getElementById("loket1").pause();
                document.getElementById("loket1").currentTime = 0;
                document.getElementById("loket1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian2 == 10) { ?>
            setTimeout(function () {
                document.getElementById("sepuluh").pause();
                document.getElementById("sepuluh").currentTime = 0;
                document.getElementById("sepuluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

            setTimeout(function () {
                document.getElementById("loket1").pause();
                document.getElementById("loket1").currentTime = 0;
                document.getElementById("loket1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian2 == 11) { ?>
            setTimeout(function () {
                document.getElementById("sebelas").pause();
                document.getElementById("sebelas").currentTime = 0;
                document.getElementById("sebelas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

            setTimeout(function () {
                document.getElementById("loket1").pause();
                document.getElementById("loket1").currentTime = 0;
                document.getElementById("loket1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian2 > 11 && $antrian2 < 20) { ?>
            setTimeout(function () {
                document.getElementById("antrianracik").pause();
                document.getElementById("antrianracik").currentTime = 0;
                document.getElementById("antrianracik").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

            setTimeout(function () {
                document.getElementById("belas").pause();
                document.getElementById("belas").currentTime = 0;
                document.getElementById("belas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

            setTimeout(function () {
                document.getElementById("loket1").pause();
                document.getElementById("loket1").currentTime = 0;
                document.getElementById("loket1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian2 == 20) { ?>
            setTimeout(function () {
                document.getElementById("antrianracik").pause();
                document.getElementById("antrianracik").currentTime = 0;
                document.getElementById("antrianracik").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("puluh").pause();
                document.getElementById("puluh").currentTime = 0;
                document.getElementById("puluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

            setTimeout(function () {
                document.getElementById("loket1").pause();
                document.getElementById("loket1").currentTime = 0;
                document.getElementById("loket1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian2 > 20 && $antrian2 < 100) { ?>
            setTimeout(function () {
                document.getElementById("antrianracik").pause();
                document.getElementById("antrianracik").currentTime = 0;
                document.getElementById("antrianracik").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("puluh").pause();
                document.getElementById("puluh").currentTime = 0;
                document.getElementById("puluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

            setTimeout(function () {
                document.getElementById("antrian2").pause();
                document.getElementById("antrian2").currentTime = 0;
                document.getElementById("antrian2").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("loket1").pause();
                document.getElementById("loket1").currentTime = 0;
                document.getElementById("loket1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian2 == 100) { ?>
            setTimeout(function () {
                document.getElementById("seratus").pause();
                document.getElementById("seratus").currentTime = 0;
                document.getElementById("seratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("loket1").pause();
                document.getElementById("loket1").currentTime = 0;
                document.getElementById("loket1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian2 > 100 && $antrian2 < 110) { ?>
            setTimeout(function () {
                document.getElementById("seratus").pause();
                document.getElementById("seratus").currentTime = 0;
                document.getElementById("seratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("antrianracik").pause();
                document.getElementById("antrianracik").currentTime = 0;
                document.getElementById("antrianracik").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("loket1").pause();
                document.getElementById("loket1").currentTime = 0;
                document.getElementById("loket1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian2 == 110) { ?>
            setTimeout(function () {
                document.getElementById("seratus").pause();
                document.getElementById("seratus").currentTime = 0;
                document.getElementById("seratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("sepuluh").pause();
                document.getElementById("sepuluh").currentTime = 0;
                document.getElementById("sepuluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("loket1").pause();
                document.getElementById("loket1").currentTime = 0;
                document.getElementById("loket1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian2 == 111) { ?>
            setTimeout(function () {
                document.getElementById("seratus").pause();
                document.getElementById("seratus").currentTime = 0;
                document.getElementById("seratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("sebelas").pause();
                document.getElementById("sebelas").currentTime = 0;
                document.getElementById("sebelas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("loket1").pause();
                document.getElementById("loket1").currentTime = 0;
                document.getElementById("loket1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian2 > 111 && $antrian2 < 120) { ?>
            setTimeout(function () {
                document.getElementById("seratus").pause();
                document.getElementById("seratus").currentTime = 0;
                document.getElementById("seratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("antrianracik").pause();
                document.getElementById("antrianracik").currentTime = 0;
                document.getElementById("antrianracik").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("belas").pause();
                document.getElementById("belas").currentTime = 0;
                document.getElementById("belas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("loket1").pause();
                document.getElementById("loket1").currentTime = 0;
                document.getElementById("loket1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian2 > 119 && $antrian2 < 200) { ?>
            setTimeout(function () {
                document.getElementById("seratus").pause();
                document.getElementById("seratus").currentTime = 0;
                document.getElementById("seratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("antrianracik").pause();
                document.getElementById("antrianracik").currentTime = 0;
                document.getElementById("antrianracik").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("puluh").pause();
                document.getElementById("puluh").currentTime = 0;
                document.getElementById("puluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("antrian2").pause();
                document.getElementById("antrian2").currentTime = 0;
                document.getElementById("antrian2").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("loket1").pause();
                document.getElementById("loket1").currentTime = 0;
                document.getElementById("loket1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } ?>
    };

    function panggilracik_loket2() {
        document.getElementById("suarabel").pause();
        document.getElementById("suarabel").currentTime = 0;
        document.getElementById("suarabel").play();

        //set delay
        totalWaktu = document.getElementById("suarabel").duration * 700;

        //playnomerurutnya
        setTimeout(function () {
            document.getElementById("obatracik").pause();
            document.getElementById("obatracik").currentTime = 0;
            document.getElementById("obatracik").play();
        }, totalWaktu);
        totalWaktu = totalWaktu + 2000;

        setTimeout(function () {
            document.getElementById("no_antrian").pause();
            document.getElementById("no_antrian").currentTime = 0;
            document.getElementById("no_antrian").play();
        }, totalWaktu);
        totalWaktu = totalWaktu + 1700;

        setTimeout(function () {
            document.getElementById("antrian_b").pause();
            document.getElementById("antrian_b").currentTime = 0;
            document.getElementById("antrian_b").play();
        }, totalWaktu);
        totalWaktu = totalWaktu + 700;

        <?php if ($antrian2 < 10) { ?>
            setTimeout(function () {
                document.getElementById("antrianracik").pause();
                document.getElementById("antrianracik").currentTime = 0;
                document.getElementById("antrianracik").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

            setTimeout(function () {
                document.getElementById("loket2").pause();
                document.getElementById("loket2").currentTime = 0;
                document.getElementById("loket2").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian2 == 10) { ?>
            setTimeout(function () {
                document.getElementById("sepuluh").pause();
                document.getElementById("sepuluh").currentTime = 0;
                document.getElementById("sepuluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

            setTimeout(function () {
                document.getElementById("loket2").pause();
                document.getElementById("loket2").currentTime = 0;
                document.getElementById("loket2").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian2 == 11) { ?>
            setTimeout(function () {
                document.getElementById("sebelas").pause();
                document.getElementById("sebelas").currentTime = 0;
                document.getElementById("sebelas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

            setTimeout(function () {
                document.getElementById("loket2").pause();
                document.getElementById("loket2").currentTime = 0;
                document.getElementById("loket2").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian2 > 11 && $antrian2 < 20) { ?>
            setTimeout(function () {
                document.getElementById("antrianracik").pause();
                document.getElementById("antrianracik").currentTime = 0;
                document.getElementById("antrianracik").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

            setTimeout(function () {
                document.getElementById("belas").pause();
                document.getElementById("belas").currentTime = 0;
                document.getElementById("belas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

            setTimeout(function () {
                document.getElementById("loket2").pause();
                document.getElementById("loket2").currentTime = 0;
                document.getElementById("loket2").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian2 == 20) { ?>
            setTimeout(function () {
                document.getElementById("antrianracik").pause();
                document.getElementById("antrianracik").currentTime = 0;
                document.getElementById("antrianracik").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("puluh").pause();
                document.getElementById("puluh").currentTime = 0;
                document.getElementById("puluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

            setTimeout(function () {
                document.getElementById("loket2").pause();
                document.getElementById("loket2").currentTime = 0;
                document.getElementById("loket2").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian2 > 20 && $antrian2 < 100) { ?>
            setTimeout(function () {
                document.getElementById("antrianracik").pause();
                document.getElementById("antrianracik").currentTime = 0;
                document.getElementById("antrianracik").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("puluh").pause();
                document.getElementById("puluh").currentTime = 0;
                document.getElementById("puluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

            setTimeout(function () {
                document.getElementById("antrian2").pause();
                document.getElementById("antrian2").currentTime = 0;
                document.getElementById("antrian2").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("loket2").pause();
                document.getElementById("loket2").currentTime = 0;
                document.getElementById("loket2").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian2 == 100) { ?>
            setTimeout(function () {
                document.getElementById("seratus").pause();
                document.getElementById("seratus").currentTime = 0;
                document.getElementById("seratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("loket2").pause();
                document.getElementById("loket2").currentTime = 0;
                document.getElementById("loket2").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian2 > 100 && $antrian2 < 110) { ?>
            setTimeout(function () {
                document.getElementById("seratus").pause();
                document.getElementById("seratus").currentTime = 0;
                document.getElementById("seratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("antrianracik").pause();
                document.getElementById("antrianracik").currentTime = 0;
                document.getElementById("antrianracik").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("loket2").pause();
                document.getElementById("loket2").currentTime = 0;
                document.getElementById("loket2").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian2 == 110) { ?>
            setTimeout(function () {
                document.getElementById("seratus").pause();
                document.getElementById("seratus").currentTime = 0;
                document.getElementById("seratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("sepuluh").pause();
                document.getElementById("sepuluh").currentTime = 0;
                document.getElementById("sepuluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("loket2").pause();
                document.getElementById("loket2").currentTime = 0;
                document.getElementById("loket2").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian2 == 111) { ?>
            setTimeout(function () {
                document.getElementById("seratus").pause();
                document.getElementById("seratus").currentTime = 0;
                document.getElementById("seratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("sebelas").pause();
                document.getElementById("sebelas").currentTime = 0;
                document.getElementById("sebelas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("loket2").pause();
                document.getElementById("loket2").currentTime = 0;
                document.getElementById("loket2").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian2 > 111 && $antrian2 < 120) { ?>
            setTimeout(function () {
                document.getElementById("seratus").pause();
                document.getElementById("seratus").currentTime = 0;
                document.getElementById("seratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("antrianracik").pause();
                document.getElementById("antrianracik").currentTime = 0;
                document.getElementById("antrianracik").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("belas").pause();
                document.getElementById("belas").currentTime = 0;
                document.getElementById("belas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("loket2").pause();
                document.getElementById("loket2").currentTime = 0;
                document.getElementById("loket2").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian2 > 119 && $antrian2 < 200) { ?>
            setTimeout(function () {
                document.getElementById("seratus").pause();
                document.getElementById("seratus").currentTime = 0;
                document.getElementById("seratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("antrianracik").pause();
                document.getElementById("antrianracik").currentTime = 0;
                document.getElementById("antrianracik").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("puluh").pause();
                document.getElementById("puluh").currentTime = 0;
                document.getElementById("puluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("antrian2").pause();
                document.getElementById("antrian2").currentTime = 0;
                document.getElementById("antrian2").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("loket2").pause();
                document.getElementById("loket2").currentTime = 0;
                document.getElementById("loket2").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } ?>
    };

    function panggilbpjsnon_loket1() {
        document.getElementById("suarabel").pause();
        document.getElementById("suarabel").currentTime = 0;
        document.getElementById("suarabel").play();

        //set delay
        totalWaktu = document.getElementById("suarabel").duration * 700;

        //playnomerurutnya
        setTimeout(function () {
            document.getElementById("obatnonracik").pause();
            document.getElementById("obatnonracik").currentTime = 0;
            document.getElementById("obatnonracik").play();
        }, totalWaktu);
        totalWaktu = totalWaktu + 2000;

        setTimeout(function () {
            document.getElementById("no_antrian").pause();
            document.getElementById("no_antrian").currentTime = 0;
            document.getElementById("no_antrian").play();
        }, totalWaktu);
        totalWaktu = totalWaktu + 1700;

        setTimeout(function () {
            document.getElementById("antrian_c").pause();
            document.getElementById("antrian_c").currentTime = 0;
            document.getElementById("antrian_c").play();
        }, totalWaktu);
        totalWaktu = totalWaktu + 700;

        <?php if ($antrian3 < 10) { ?>
            setTimeout(function () {
                document.getElementById("antrianbpjs").pause();
                document.getElementById("antrianbpjs").currentTime = 0;
                document.getElementById("antrianbpjs").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

            setTimeout(function () {
                document.getElementById("loket1").pause();
                document.getElementById("loket1").currentTime = 0;
                document.getElementById("loket1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian3 == 10) { ?>
            setTimeout(function () {
                document.getElementById("sepuluh").pause();
                document.getElementById("sepuluh").currentTime = 0;
                document.getElementById("sepuluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

            setTimeout(function () {
                document.getElementById("loket1").pause();
                document.getElementById("loket1").currentTime = 0;
                document.getElementById("loket1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian3 == 11) { ?>
            setTimeout(function () {
                document.getElementById("sebelas").pause();
                document.getElementById("sebelas").currentTime = 0;
                document.getElementById("sebelas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

            setTimeout(function () {
                document.getElementById("loket1").pause();
                document.getElementById("loket1").currentTime = 0;
                document.getElementById("loket1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian3 > 11 && $antrian3 < 20) { ?>
            setTimeout(function () {
                document.getElementById("antrianbpjs").pause();
                document.getElementById("antrianbpjs").currentTime = 0;
                document.getElementById("antrianbpjs").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

            setTimeout(function () {
                document.getElementById("belas").pause();
                document.getElementById("belas").currentTime = 0;
                document.getElementById("belas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

            setTimeout(function () {
                document.getElementById("loket1").pause();
                document.getElementById("loket1").currentTime = 0;
                document.getElementById("loket1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian3 == 20) { ?>
            setTimeout(function () {
                document.getElementById("antrianbpjs").pause();
                document.getElementById("antrianbpjs").currentTime = 0;
                document.getElementById("antrianbpjs").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("puluh").pause();
                document.getElementById("puluh").currentTime = 0;
                document.getElementById("puluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

            setTimeout(function () {
                document.getElementById("loket1").pause();
                document.getElementById("loket1").currentTime = 0;
                document.getElementById("loket1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian3 > 20 && $antrian3 < 100) { ?>
            setTimeout(function () {
                document.getElementById("antrianbpjs").pause();
                document.getElementById("antrianbpjs").currentTime = 0;
                document.getElementById("antrianbpjs").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("puluh").pause();
                document.getElementById("puluh").currentTime = 0;
                document.getElementById("puluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

            setTimeout(function () {
                document.getElementById("antrian3").pause();
                document.getElementById("antrian3").currentTime = 0;
                document.getElementById("antrian3").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("loket1").pause();
                document.getElementById("loket1").currentTime = 0;
                document.getElementById("loket1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian3 == 100) { ?>
            setTimeout(function () {
                document.getElementById("seratus").pause();
                document.getElementById("seratus").currentTime = 0;
                document.getElementById("seratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("loket1").pause();
                document.getElementById("loket1").currentTime = 0;
                document.getElementById("loket1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian3 > 100 && $antrian3 < 110) { ?>
            setTimeout(function () {
                document.getElementById("seratus").pause();
                document.getElementById("seratus").currentTime = 0;
                document.getElementById("seratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("antrianbpjs").pause();
                document.getElementById("antrianbpjs").currentTime = 0;
                document.getElementById("antrianbpjs").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("loket1").pause();
                document.getElementById("loket1").currentTime = 0;
                document.getElementById("loket1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian3 == 110) { ?>
            setTimeout(function () {
                document.getElementById("seratus").pause();
                document.getElementById("seratus").currentTime = 0;
                document.getElementById("seratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("sepuluh").pause();
                document.getElementById("sepuluh").currentTime = 0;
                document.getElementById("sepuluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("loket1").pause();
                document.getElementById("loket1").currentTime = 0;
                document.getElementById("loket1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian3 == 111) { ?>
            setTimeout(function () {
                document.getElementById("seratus").pause();
                document.getElementById("seratus").currentTime = 0;
                document.getElementById("seratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("sebelas").pause();
                document.getElementById("sebelas").currentTime = 0;
                document.getElementById("sebelas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("loket1").pause();
                document.getElementById("loket1").currentTime = 0;
                document.getElementById("loket1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian3 > 111 && $antrian3 < 120) { ?>
            setTimeout(function () {
                document.getElementById("seratus").pause();
                document.getElementById("seratus").currentTime = 0;
                document.getElementById("seratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("antrianbpjs").pause();
                document.getElementById("antrianbpjs").currentTime = 0;
                document.getElementById("antrianbpjs").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("belas").pause();
                document.getElementById("belas").currentTime = 0;
                document.getElementById("belas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("loket1").pause();
                document.getElementById("loket1").currentTime = 0;
                document.getElementById("loket1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian3 > 119 && $antrian3 < 200) { ?>
            setTimeout(function () {
                document.getElementById("seratus").pause();
                document.getElementById("seratus").currentTime = 0;
                document.getElementById("seratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("antrianbpjs").pause();
                document.getElementById("antrianbpjs").currentTime = 0;
                document.getElementById("antrianbpjs").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("puluh").pause();
                document.getElementById("puluh").currentTime = 0;
                document.getElementById("puluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("antrian3").pause();
                document.getElementById("antrian3").currentTime = 0;
                document.getElementById("antrian3").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("loket1").pause();
                document.getElementById("loket1").currentTime = 0;
                document.getElementById("loket1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } ?>
    };

    function panggilbpjsnon_loket2() {
        document.getElementById("suarabel").pause();
        document.getElementById("suarabel").currentTime = 0;
        document.getElementById("suarabel").play();

        //set delay
        totalWaktu = document.getElementById("suarabel").duration * 700;

        //playnomerurutnya
        setTimeout(function () {
            document.getElementById("obatnonracik").pause();
            document.getElementById("obatnonracik").currentTime = 0;
            document.getElementById("obatnonracik").play();
        }, totalWaktu);
        totalWaktu = totalWaktu + 2000;

        setTimeout(function () {
            document.getElementById("no_antrian").pause();
            document.getElementById("no_antrian").currentTime = 0;
            document.getElementById("no_antrian").play();
        }, totalWaktu);
        totalWaktu = totalWaktu + 1700;

        setTimeout(function () {
            document.getElementById("antrian_c").pause();
            document.getElementById("antrian_c").currentTime = 0;
            document.getElementById("antrian_c").play();
        }, totalWaktu);
        totalWaktu = totalWaktu + 700;

        <?php if ($antrian3 < 10) { ?>
            setTimeout(function () {
                document.getElementById("antrianbpjs").pause();
                document.getElementById("antrianbpjs").currentTime = 0;
                document.getElementById("antrianbpjs").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

            setTimeout(function () {
                document.getElementById("loket2").pause();
                document.getElementById("loket2").currentTime = 0;
                document.getElementById("loket2").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian3 == 10) { ?>
            setTimeout(function () {
                document.getElementById("sepuluh").pause();
                document.getElementById("sepuluh").currentTime = 0;
                document.getElementById("sepuluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

            setTimeout(function () {
                document.getElementById("loket2").pause();
                document.getElementById("loket2").currentTime = 0;
                document.getElementById("loket2").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian3 == 11) { ?>
            setTimeout(function () {
                document.getElementById("sebelas").pause();
                document.getElementById("sebelas").currentTime = 0;
                document.getElementById("sebelas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

            setTimeout(function () {
                document.getElementById("loket2").pause();
                document.getElementById("loket2").currentTime = 0;
                document.getElementById("loket2").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian3 > 11 && $antrian3 < 20) { ?>
            setTimeout(function () {
                document.getElementById("antrianbpjs").pause();
                document.getElementById("antrianbpjs").currentTime = 0;
                document.getElementById("antrianbpjs").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

            setTimeout(function () {
                document.getElementById("belas").pause();
                document.getElementById("belas").currentTime = 0;
                document.getElementById("belas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

            setTimeout(function () {
                document.getElementById("loket2").pause();
                document.getElementById("loket2").currentTime = 0;
                document.getElementById("loket2").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian3 == 20) { ?>
            setTimeout(function () {
                document.getElementById("antrianbpjs").pause();
                document.getElementById("antrianbpjs").currentTime = 0;
                document.getElementById("antrianbpjs").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("puluh").pause();
                document.getElementById("puluh").currentTime = 0;
                document.getElementById("puluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

            setTimeout(function () {
                document.getElementById("loket2").pause();
                document.getElementById("loket2").currentTime = 0;
                document.getElementById("loket2").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian3 > 20 && $antrian3 < 100) { ?>
            setTimeout(function () {
                document.getElementById("antrianbpjs").pause();
                document.getElementById("antrianbpjs").currentTime = 0;
                document.getElementById("antrianbpjs").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("puluh").pause();
                document.getElementById("puluh").currentTime = 0;
                document.getElementById("puluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

            setTimeout(function () {
                document.getElementById("antrian3").pause();
                document.getElementById("antrian3").currentTime = 0;
                document.getElementById("antrian3").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("loket2").pause();
                document.getElementById("loket2").currentTime = 0;
                document.getElementById("loket2").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian3 == 100) { ?>
            setTimeout(function () {
                document.getElementById("seratus").pause();
                document.getElementById("seratus").currentTime = 0;
                document.getElementById("seratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("loket2").pause();
                document.getElementById("loket2").currentTime = 0;
                document.getElementById("loket2").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian3 > 100 && $antrian3 < 110) { ?>
            setTimeout(function () {
                document.getElementById("seratus").pause();
                document.getElementById("seratus").currentTime = 0;
                document.getElementById("seratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("antrianbpjs").pause();
                document.getElementById("antrianbpjs").currentTime = 0;
                document.getElementById("antrianbpjs").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("loket2").pause();
                document.getElementById("loket2").currentTime = 0;
                document.getElementById("loket2").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian3 == 110) { ?>
            setTimeout(function () {
                document.getElementById("seratus").pause();
                document.getElementById("seratus").currentTime = 0;
                document.getElementById("seratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("sepuluh").pause();
                document.getElementById("sepuluh").currentTime = 0;
                document.getElementById("sepuluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("loket2").pause();
                document.getElementById("loket2").currentTime = 0;
                document.getElementById("loket2").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian3 == 111) { ?>
            setTimeout(function () {
                document.getElementById("seratus").pause();
                document.getElementById("seratus").currentTime = 0;
                document.getElementById("seratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("sebelas").pause();
                document.getElementById("sebelas").currentTime = 0;
                document.getElementById("sebelas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("loket2").pause();
                document.getElementById("loket2").currentTime = 0;
                document.getElementById("loket2").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian3 > 111 && $antrian3 < 120) { ?>
            setTimeout(function () {
                document.getElementById("seratus").pause();
                document.getElementById("seratus").currentTime = 0;
                document.getElementById("seratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("antrianbpjs").pause();
                document.getElementById("antrianbpjs").currentTime = 0;
                document.getElementById("antrianbpjs").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("belas").pause();
                document.getElementById("belas").currentTime = 0;
                document.getElementById("belas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("loket2").pause();
                document.getElementById("loket2").currentTime = 0;
                document.getElementById("loket2").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian3 > 119 && $antrian3 < 200) { ?>
            setTimeout(function () {
                document.getElementById("seratus").pause();
                document.getElementById("seratus").currentTime = 0;
                document.getElementById("seratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("antrianbpjs").pause();
                document.getElementById("antrianbpjs").currentTime = 0;
                document.getElementById("antrianbpjs").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("puluh").pause();
                document.getElementById("puluh").currentTime = 0;
                document.getElementById("puluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("antrian3").pause();
                document.getElementById("antrian3").currentTime = 0;
                document.getElementById("antrian3").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("loket2").pause();
                document.getElementById("loket2").currentTime = 0;
                document.getElementById("loket2").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } ?>
    };

    function panggilbpjsracik_loket1() {
        document.getElementById("suarabel").pause();
        document.getElementById("suarabel").currentTime = 0;
        document.getElementById("suarabel").play();

        //set delay
        totalWaktu = document.getElementById("suarabel").duration * 700;

        //playnomerurutnya
        setTimeout(function () {
            document.getElementById("obatracik").pause();
            document.getElementById("obatracik").currentTime = 0;
            document.getElementById("obatracik").play();
        }, totalWaktu);
        totalWaktu = totalWaktu + 2000;

        setTimeout(function () {
            document.getElementById("no_antrian").pause();
            document.getElementById("no_antrian").currentTime = 0;
            document.getElementById("no_antrian").play();
        }, totalWaktu);
        totalWaktu = totalWaktu + 1700;

        setTimeout(function () {
            document.getElementById("antrian_d").pause();
            document.getElementById("antrian_d").currentTime = 0;
            document.getElementById("antrian_d").play();
        }, totalWaktu);
        totalWaktu = totalWaktu + 700;

        <?php if ($antrian4 < 10) { ?>
            setTimeout(function () {
                document.getElementById("antrianracikbpjs").pause();
                document.getElementById("antrianracikbpjs").currentTime = 0;
                document.getElementById("antrianracikbpjs").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

            setTimeout(function () {
                document.getElementById("loket1").pause();
                document.getElementById("loket1").currentTime = 0;
                document.getElementById("loket1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian4 == 10) { ?>
            setTimeout(function () {
                document.getElementById("sepuluh").pause();
                document.getElementById("sepuluh").currentTime = 0;
                document.getElementById("sepuluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

            setTimeout(function () {
                document.getElementById("loket1").pause();
                document.getElementById("loket1").currentTime = 0;
                document.getElementById("loket1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian4 == 11) { ?>
            setTimeout(function () {
                document.getElementById("sebelas").pause();
                document.getElementById("sebelas").currentTime = 0;
                document.getElementById("sebelas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

            setTimeout(function () {
                document.getElementById("loket1").pause();
                document.getElementById("loket1").currentTime = 0;
                document.getElementById("loket1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian4 > 11 && $antrian4 < 20) { ?>
            setTimeout(function () {
                document.getElementById("antrianracikbpjs").pause();
                document.getElementById("antrianracikbpjs").currentTime = 0;
                document.getElementById("antrianracikbpjs").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

            setTimeout(function () {
                document.getElementById("belas").pause();
                document.getElementById("belas").currentTime = 0;
                document.getElementById("belas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

            setTimeout(function () {
                document.getElementById("loket1").pause();
                document.getElementById("loket1").currentTime = 0;
                document.getElementById("loket1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian4 == 20) { ?>
            setTimeout(function () {
                document.getElementById("antrianracikbpjs").pause();
                document.getElementById("antrianracikbpjs").currentTime = 0;
                document.getElementById("antrianracikbpjs").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("puluh").pause();
                document.getElementById("puluh").currentTime = 0;
                document.getElementById("puluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

            setTimeout(function () {
                document.getElementById("loket1").pause();
                document.getElementById("loket1").currentTime = 0;
                document.getElementById("loket1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian4 > 20 && $antrian4 < 100) { ?>
            setTimeout(function () {
                document.getElementById("antrianracikbpjs").pause();
                document.getElementById("antrianracikbpjs").currentTime = 0;
                document.getElementById("antrianracikbpjs").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("puluh").pause();
                document.getElementById("puluh").currentTime = 0;
                document.getElementById("puluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

            setTimeout(function () {
                document.getElementById("antrian4").pause();
                document.getElementById("antrian4").currentTime = 0;
                document.getElementById("antrian4").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("loket1").pause();
                document.getElementById("loket1").currentTime = 0;
                document.getElementById("loket1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian4 == 100) { ?>
            setTimeout(function () {
                document.getElementById("seratus").pause();
                document.getElementById("seratus").currentTime = 0;
                document.getElementById("seratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("loket1").pause();
                document.getElementById("loket1").currentTime = 0;
                document.getElementById("loket1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian4 > 100 && $antrian4 < 110) { ?>
            setTimeout(function () {
                document.getElementById("seratus").pause();
                document.getElementById("seratus").currentTime = 0;
                document.getElementById("seratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("antrianracikbpjs").pause();
                document.getElementById("antrianracikbpjs").currentTime = 0;
                document.getElementById("antrianracikbpjs").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("loket1").pause();
                document.getElementById("loket1").currentTime = 0;
                document.getElementById("loket1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian4 == 110) { ?>
            setTimeout(function () {
                document.getElementById("seratus").pause();
                document.getElementById("seratus").currentTime = 0;
                document.getElementById("seratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("sepuluh").pause();
                document.getElementById("sepuluh").currentTime = 0;
                document.getElementById("sepuluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("loket1").pause();
                document.getElementById("loket1").currentTime = 0;
                document.getElementById("loket1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian4 == 111) { ?>
            setTimeout(function () {
                document.getElementById("seratus").pause();
                document.getElementById("seratus").currentTime = 0;
                document.getElementById("seratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("sebelas").pause();
                document.getElementById("sebelas").currentTime = 0;
                document.getElementById("sebelas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("loket1").pause();
                document.getElementById("loket1").currentTime = 0;
                document.getElementById("loket1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian4 > 111 && $antrian4 < 120) { ?>
            setTimeout(function () {
                document.getElementById("seratus").pause();
                document.getElementById("seratus").currentTime = 0;
                document.getElementById("seratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("antrianracikbpjs").pause();
                document.getElementById("antrianracikbpjs").currentTime = 0;
                document.getElementById("antrianracikbpjs").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("belas").pause();
                document.getElementById("belas").currentTime = 0;
                document.getElementById("belas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("loket1").pause();
                document.getElementById("loket1").currentTime = 0;
                document.getElementById("loket1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian4 > 119 && $antrian4 < 200) { ?>
            setTimeout(function () {
                document.getElementById("seratus").pause();
                document.getElementById("seratus").currentTime = 0;
                document.getElementById("seratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("antrianracikbpjs").pause();
                document.getElementById("antrianracikbpjs").currentTime = 0;
                document.getElementById("antrianracikbpjs").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("puluh").pause();
                document.getElementById("puluh").currentTime = 0;
                document.getElementById("puluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("antrian4").pause();
                document.getElementById("antrian4").currentTime = 0;
                document.getElementById("antrian4").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("loket1").pause();
                document.getElementById("loket1").currentTime = 0;
                document.getElementById("loket1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } ?>
    };

    function panggilbpjsracik_loket2() {
        document.getElementById("suarabel").pause();
        document.getElementById("suarabel").currentTime = 0;
        document.getElementById("suarabel").play();

        //set delay
        totalWaktu = document.getElementById("suarabel").duration * 700;

        //playnomerurutnya
        setTimeout(function () {
            document.getElementById("obatracik").pause();
            document.getElementById("obatracik").currentTime = 0;
            document.getElementById("obatracik").play();
        }, totalWaktu);
        totalWaktu = totalWaktu + 2000;

        setTimeout(function () {
            document.getElementById("no_antrian").pause();
            document.getElementById("no_antrian").currentTime = 0;
            document.getElementById("no_antrian").play();
        }, totalWaktu);
        totalWaktu = totalWaktu + 1700;

        setTimeout(function () {
            document.getElementById("antrian_d").pause();
            document.getElementById("antrian_d").currentTime = 0;
            document.getElementById("antrian_d").play();
        }, totalWaktu);
        totalWaktu = totalWaktu + 700;

        <?php if ($antrian4 < 10) { ?>
            setTimeout(function () {
                document.getElementById("antrianracikbpjs").pause();
                document.getElementById("antrianracikbpjs").currentTime = 0;
                document.getElementById("antrianracikbpjs").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

            setTimeout(function () {
                document.getElementById("loket2").pause();
                document.getElementById("loket2").currentTime = 0;
                document.getElementById("loket2").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian4 == 10) { ?>
            setTimeout(function () {
                document.getElementById("sepuluh").pause();
                document.getElementById("sepuluh").currentTime = 0;
                document.getElementById("sepuluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

            setTimeout(function () {
                document.getElementById("loket2").pause();
                document.getElementById("loket2").currentTime = 0;
                document.getElementById("loket2").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian4 == 11) { ?>
            setTimeout(function () {
                document.getElementById("sebelas").pause();
                document.getElementById("sebelas").currentTime = 0;
                document.getElementById("sebelas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

            setTimeout(function () {
                document.getElementById("loket2").pause();
                document.getElementById("loket2").currentTime = 0;
                document.getElementById("loket2").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian4 > 11 && $antrian4 < 20) { ?>
            setTimeout(function () {
                document.getElementById("antrianracikbpjs").pause();
                document.getElementById("antrianracikbpjs").currentTime = 0;
                document.getElementById("antrianracikbpjs").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

            setTimeout(function () {
                document.getElementById("belas").pause();
                document.getElementById("belas").currentTime = 0;
                document.getElementById("belas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

            setTimeout(function () {
                document.getElementById("loket2").pause();
                document.getElementById("loket2").currentTime = 0;
                document.getElementById("loket2").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian4 == 20) { ?>
            setTimeout(function () {
                document.getElementById("antrianracikbpjs").pause();
                document.getElementById("antrianracikbpjs").currentTime = 0;
                document.getElementById("antrianracikbpjs").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("puluh").pause();
                document.getElementById("puluh").currentTime = 0;
                document.getElementById("puluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

            setTimeout(function () {
                document.getElementById("loket2").pause();
                document.getElementById("loket2").currentTime = 0;
                document.getElementById("loket2").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian4 > 20 && $antrian4 < 100) { ?>
            setTimeout(function () {
                document.getElementById("antrianracikbpjs").pause();
                document.getElementById("antrianracikbpjs").currentTime = 0;
                document.getElementById("antrianracikbpjs").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("puluh").pause();
                document.getElementById("puluh").currentTime = 0;
                document.getElementById("puluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

            setTimeout(function () {
                document.getElementById("antrian4").pause();
                document.getElementById("antrian4").currentTime = 0;
                document.getElementById("antrian4").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("loket2").pause();
                document.getElementById("loket2").currentTime = 0;
                document.getElementById("loket2").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian4 == 100) { ?>
            setTimeout(function () {
                document.getElementById("seratus").pause();
                document.getElementById("seratus").currentTime = 0;
                document.getElementById("seratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("loket2").pause();
                document.getElementById("loket2").currentTime = 0;
                document.getElementById("loket2").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian4 > 100 && $antrian4 < 110) { ?>
            setTimeout(function () {
                document.getElementById("seratus").pause();
                document.getElementById("seratus").currentTime = 0;
                document.getElementById("seratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("antrianracikbpjs").pause();
                document.getElementById("antrianracikbpjs").currentTime = 0;
                document.getElementById("antrianracikbpjs").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("loket2").pause();
                document.getElementById("loket2").currentTime = 0;
                document.getElementById("loket2").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian4 == 110) { ?>
            setTimeout(function () {
                document.getElementById("seratus").pause();
                document.getElementById("seratus").currentTime = 0;
                document.getElementById("seratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("sepuluh").pause();
                document.getElementById("sepuluh").currentTime = 0;
                document.getElementById("sepuluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("loket2").pause();
                document.getElementById("loket2").currentTime = 0;
                document.getElementById("loket2").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian4 == 111) { ?>
            setTimeout(function () {
                document.getElementById("seratus").pause();
                document.getElementById("seratus").currentTime = 0;
                document.getElementById("seratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("sebelas").pause();
                document.getElementById("sebelas").currentTime = 0;
                document.getElementById("sebelas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("loket2").pause();
                document.getElementById("loket2").currentTime = 0;
                document.getElementById("loket2").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian4 > 111 && $antrian4 < 120) { ?>
            setTimeout(function () {
                document.getElementById("seratus").pause();
                document.getElementById("seratus").currentTime = 0;
                document.getElementById("seratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("antrianracikbpjs").pause();
                document.getElementById("antrianracikbpjs").currentTime = 0;
                document.getElementById("antrianracikbpjs").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("belas").pause();
                document.getElementById("belas").currentTime = 0;
                document.getElementById("belas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("loket2").pause();
                document.getElementById("loket2").currentTime = 0;
                document.getElementById("loket2").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } elseif ($antrian4 > 119 && $antrian4 < 200) { ?>
            setTimeout(function () {
                document.getElementById("seratus").pause();
                document.getElementById("seratus").currentTime = 0;
                document.getElementById("seratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("antrianracikbpjs").pause();
                document.getElementById("antrianracikbpjs").currentTime = 0;
                document.getElementById("antrianracikbpjs").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("puluh").pause();
                document.getElementById("puluh").currentTime = 0;
                document.getElementById("puluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("antrian4").pause();
                document.getElementById("antrian4").currentTime = 0;
                document.getElementById("antrian4").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("loket2").pause();
                document.getElementById("loket2").currentTime = 0;
                document.getElementById("loket2").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } ?>
    };

    setInterval(function () {

        $.ajax({
            url: '<?= base_url(); ?>antrian/get_antri_nonracik/',
            method: "post",
            dataType: 'json',
            success: function (data) {
                // console.log(data);
                if (data.no_antrian == null) {

                    document.getElementById("nomer1").innerHTML = "A 0";
                } else {
                    document.getElementById("nomer1").innerHTML = "A" + data.no_antrian;

                }

            }
        })

        $.ajax({
            url: '<?= base_url(); ?>antrian/get_antri_racik/',
            method: "post",
            dataType: 'json',
            success: function (data) {


                if (data.no_antrian == null) {

                    document.getElementById("nomer2").innerHTML = "B 0";

                } else {

                    document.getElementById("nomer2").innerHTML = "B" + data.no_antrian;

                }


            }
        })

        $.ajax({
            url: '<?= base_url(); ?>antrian/get_antribpjs_nonracik/',
            method: "post",
            dataType: 'json',
            success: function (data) {
                // console.log(data);
                if (data.no_antrian == null) {

                    document.getElementById("nomer3").innerHTML = "C 0";
                } else {
                    document.getElementById("nomer3").innerHTML = "C" + data.no_antrian;

                }

            }
        })

        $.ajax({
            url: '<?= base_url(); ?>antrian/get_antribpjs_racik/',
            method: "post",
            dataType: 'json',
            success: function (data) {


                if (data.no_antrian == null) {

                    document.getElementById("nomer4").innerHTML = "D 0";

                } else {

                    document.getElementById("nomer4").innerHTML = "D" + data.no_antrian;

                }


            }
        })

    }, 1000);
</script>