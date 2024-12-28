<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">


<!-- Begin Page Content -->
<div class="row justify-content-center" style="height: 560px;">
    <div class="">
        <div class="row card-antrian text-center margin: 20px;">
            <!-- antrian non racik umum -->
            <div class="card text-white bg-primary mb-3 border-primary shadow-lg"
                style="max-width: 20rem; margin:10px; width: 250px">
                <div class="card-header text-dark">Obat Non Racikan</div>
                <div class="card-body">
                    <h5 class="card-title text-white" id="antrian_nonracik"></h5>
                    <script type="text/javascript">
                        setInterval(function () {
                            $.ajax({
                                url: '<?= base_url(); ?>antrian/get_antri_nonracik/',
                                method: "post",
                                dataType: 'json',
                                success: function (data) {
                                    if (data.no_antrian == null) {

                                        document.getElementById("antrian_nonracik").innerHTML = "A 0";
                                    } else {
                                        document.getElementById("antrian_nonracik").innerHTML = "A" + data.no_antrian;
                                    }
                                }
                            })
                        }, 1000);
                    </script>
                </div>
            </div>
            <!-- antrian racik umum -->
            <div class="card text-white bg-primary mb-3 border-primary shadow-lg"
                style="max-width: 20rem; margin:10px; width: 250px">
                <div class="card-header text-dark">Obat Racikan</div>
                <div class="card-body">
                    <h5 class="card-title text-white" id="antrian_racik"></h5>
                    <script type="text/javascript ">
                        setInterval(function () {
                            $.ajax({
                                url: '<?= base_url(); ?>antrian/get_antri_racik/',
                                method: "post",
                                dataType: 'json',
                                success: function (data) {
                                    if (data.no_antrian == null) {
                                        document.getElementById("antrian_racik").innerHTML = "B 0";
                                    } else {
                                        document.getElementById("antrian_racik").innerHTML = "B" + data.no_antrian;
                                    }
                                }
                            })
                        }, 1000);
                    </script>
                </div>
            </div>
            <!-- antrian non racik bpjs -->
            <div class="card text-white bg-success mb-3 border-success shadow-lg"
                style="max-width: 20rem; margin:10px; width: 250px">
                <div class="card-header text-dark">Obat Non Racikan</div>
                <div class="card-body">
                    <h5 class="card-title text-white" id="antrianbpjs_nonracik"></h5>
                    <script type="text/javascript">
                        setInterval(function () {
                            $.ajax({
                                url: '<?= base_url(); ?>antrian/get_antribpjs_nonracik/',
                                method: "post",
                                dataType: 'json',
                                success: function (data) {
                                    if (data.no_antrian == null) {
                                        document.getElementById("antrianbpjs_nonracik").innerHTML = "C 0";
                                    } else {
                                        document.getElementById("antrianbpjs_nonracik").innerHTML = "C" + data.no_antrian;
                                    }
                                }
                            })
                        }, 1000);
                    </script>
                </div>
            </div>
            <!-- antrian racik bpjs -->
            <div class="card text-white bg-success mb-3 border-success shadow-lg"
                style="max-width: 20rem; margin:10px; width: 250px">
                <div class="card-header text-dark">Obat Racikan</div>
                <div class="card-body">
                    <h5 class="card-title text-white" id="antrianbpjs_racik"></h5>
                    <script type="text/javascript">
                        setInterval(function () {
                            $.ajax({
                                url: '<?= base_url(); ?>antrian/get_antribpjs_racik/',
                                method: "post",
                                dataType: 'json',
                                success: function (data) {
                                    if (data.no_antrian == null) {
                                        document.getElementById("antrianbpjs_racik").innerHTML = "D 0";
                                    } else {
                                        document.getElementById("antrianbpjs_racik").innerHTML = "D" + data.no_antrian;
                                    }
                                }
                            })
                        }, 1000);
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>