<div class="container-fluid">
    <br>
    <h4 class=" text-gray-900 text-center" style="font-family: sans-serif; margin-bottom: -4px; font-size: 45px;">
        RS PERMATA KELUARGA KARAWANG
    </h4>
    <h4 class=" text-gray-900 text-center" style="font-family: sans-serif; margin-bottom: -4px; font-size: 45px;">
        =================================================================
    </h4>
    <br><br>
    <div class="row " style="height: 700px;">
        <div class="col-md " style="margin-top: -10px;">
            <div class="text-center text-gray-900 ">
                <h4 style="font-size: 45px;">OBAT RACIKAN</h4>
                <h1 style="font-size: 300px;">D
                    <?php echo $antrianbpjs_racikan['no_antrian']; ?>
                    <?php if ($antrianbpjs_racikan['no_antrian'] < 1) {
                        $antri = 0;
                    } else {
                        $antri = $antrianbpjs_racikan['no_antrian'];
                    }
                    ?>
                </h1>
                <h5 style="font-size: 40px;">Silahkan menunggu sampai dipanggil.</h5>
                <h5 style="font-size: 40px;">Terima kasih telah memilih kami.</h5>
                <h5 class="text-gray-900" style="font-size:  45px;">Tanggal:
                    <?= $jam; ?>
                </h5>
            </div>
        </div>
    </div>
</div>
<script>
    window.print();
    location = "<?= base_url() ?>antrian/ambil_antrian/";
</script>