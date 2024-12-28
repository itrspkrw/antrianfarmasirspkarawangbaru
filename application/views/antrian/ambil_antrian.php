<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">


<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- ambil antrian -->
    <div class="row justify-content-center" style="height: 538px;">
        <div class="">
            <div class="row card-antrian text-center margin: 20px;">

                <!-- antrian non racik umum -->
                <div class="card text-white bg-primary mb-3 border-primary shadow-lg"
                    style="max-width: 18rem; margin:20px; width: 250px">
                    <div class="card-header text-dark">Obat Non Racikan</div>
                    <div class="card-body">
                        <h5 class="card-title text-white" id="nomer1">A</h5>
                        <form action="<?= base_url('antrian/tambah_nonracik/') ?>" method="post">
                            <input type="hidden" name="non_racik" id="non_racik" value="">
                            <button type="submit" class="btn btn-light font-weight-bold">Print Antrian</button>
                        </form>
                    </div>
                </div>

                <!-- antrian racik umum -->
                <div class="card text-white bg-primary mb-3 border-primary shadow-lg"
                    style="max-width: 18rem; margin: 20px; width: 250px">
                    <div class="card-header text-dark">Obat Racikan</div>
                    <div class="card-body">
                        <h5 class="card-title text-white" id="nomer2">B</h5>
                        <form action="<?= base_url('antrian/tambah_racik/') ?>" method="post">
                            <input type="hidden" name="racik" id="racik" value="">
                            <button type="submit" class="btn btn-light font-weight-bold">Print Antrian</button>
                        </form>
                    </div>
                </div>

                <!-- antrian non racik bpjs -->
                <div class="card text-white bg-success mb-3 border-success shadow-lg"
                    style="max-width: 18rem; margin: 20px; width: 250px">
                    <div class="card-header text-dark">Obat Non Racikan</div>
                    <div class="card-body">
                        <h5 class="card-title text-white" id="nomer3">C</h5>
                        <form action="<?= base_url('antrian/tambahbpjs_nonracik/') ?>" method="post">
                            <input type="hidden" name="bpjsnon_racik" id="bpjsnon_racik" value="">
                            <button type="submit" class="btn btn-light font-weight-bold">Print Antrian</button>
                        </form>
                    </div>
                </div>

                <!-- antrian racik bpjs -->
                <div class="card tex t-white bg-success mb-3 border-success shadow-lg"
                    style="max-width: 18rem; margin: 20px; width: 250px">
                    <div class="card-header text-dark">Obat Racikan</div>
                    <div class="card-body">
                        <h5 class="card-title text-white" id="nomer4">D</h5>
                        <form action="<?= base_url('antrian/tambahbpjs_racik/') ?>" method="post">
                            <input type="hidden" name="bpjs_racik" id="bpjs_racik" value="">
                            <button type="submit" class="btn btn-light font-weight-bold">Print Antrian</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- akhir ambil antrian -->
    </div>
</div>

<!-- End of Main Content -->
<script type="text/javascript">
    function nomer1() {
        var antri = parseInt(document.getElementById('nomer1').innerHTML) + 1;
        document.getElementById("nomer1").innerHTML = antri;
    }

    function nomer2() {
        var antri = parseInt(document.getElementById('nomer2').innerHTML) + 1;
        document.getElementById("nomer2").innerHTML = antri;
    }

    function nomer3() {
        var antri = parseInt(document.getElementById('nomer3').innerHTML) + 1;
        document.getElementById("nomer3").innerHTML = antri;
    }

    function nomer4() {
        var antri = parseInt(document.getElementById('nomer4').innerHTML) + 1;
        document.getElementById("nomer4").innerHTML = antri;
    }

    setInterval(function () {

        $.ajax({
            url: '<?= base_url(); ?>antrian/ambil_antri_nonracik/',
            method: "post",
            dataType: 'json',
            success: function (data) {
                // console.log(data);
                if (data.no_antrian == null) {

                    document.getElementById("nomer1").innerHTML = "A 0";
                    document.getElementById("non_racik").value = 0;
                } else {
                    document.getElementById("nomer1").innerHTML = "A" + data.no_antrian;
                    document.getElementById("non_racik").value = data.no_antrian;

                }

            }
        })

        $.ajax({
            url: '<?= base_url(); ?>antrian/ambil_antri_racik/',
            method: "post",
            dataType: 'json',
            success: function (data) {


                if (data.no_antrian == null) {

                    document.getElementById("nomer2").innerHTML = "B 0";
                    document.getElementById("racik").value = 0;

                } else {

                    document.getElementById("nomer2").innerHTML = "B" + data.no_antrian;
                    document.getElementById("racik").value = data.no_antrian;
                }


            }
        });

        $.ajax({
            url: '<?= base_url(); ?>antrian/ambil_antribpjs_nonracik/',
            method: "post",
            dataType: 'json',
            success: function (data) {
                // console.log(data);
                if (data.no_antrian == null) {

                    document.getElementById("nomer3").innerHTML = "C 0"
                    document.getElementById("bpjsnon_racik").value = 0;
                } else {
                    document.getElementById("nomer3").innerHTML = "C" + data.no_antrian;
                    document.getElementById("bpjsnon_racik").value = data.no_antrian;

                }

            }
        })

        $.ajax({
            url: '<?= base_url(); ?>antrian/ambil_antribpjs_racik/',
            method: "post",
            dataType: 'json',
            success: function (data) {


                if (data.no_antrian == null) {

                    document.getElementById("nomer4").innerHTML = "D 0";
                    document.getElementById("bpjs_racik").value = 0;

                } else {

                    document.getElementById("nomer4").innerHTML = "D" + data.no_antrian;
                    document.getElementById("bpjs_racik").value = data.no_antrian;
                }


            }
        });

    }, 1000);
</script>