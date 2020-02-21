<script>
    $(document).ready(function(){
        $('#btn_simpan').on('click',function(){
            // update kode jenis
            var gps = $('#gps').val();
            var komputer = $('#komputer').val();
            var laptop = $('#laptop').val();
            var monitor = $('#monitor').val();
            var printer = $('#printer').val();
            var proyektor = $('#proyektor').val();
            var scanner = $('#scanner').val();
            var ups = $('#ups').val();
            var lain = $('#lain').val();
            $.ajax({
                url: '<?php echo base_url('Setting/updateKodeJenis') ?>',
                method: "POST",
                dataTaype: "JSON",
                data: {gps:gps, komputer:komputer, laptop:laptop, monitor:monitor, printer:printer, proyektor:proyektor, scanner:scanner, ups:ups, lain:lain},
                success: function(){
                    alert('kode jenis berhasil di update');
                }
            })

            // update kode bagian
            var tengah = $('#tengah').val();
            var timur = $('#timur').val();
            var barat = $('#barat').val();
            var selatan = $('#selatan').val();
            var utara = $('#utara').val();
            $.ajax({
                url: '<?php echo base_url('Setting/updateKodeBagian') ?>',
                method: "POST",
                dataType: "JSON",
                data: {tengah:tengah, timur:timur, barat:barat, selatan:selatan, utara:utara},
                success: function(data){
                    alert('kode bagian berhasil di update');
                }
            })

            // update kode subbag
            var dirut = $('#dirut').val();
            var dirum = $('#dirum').val();
            var dirtek = $('#dirtek').val();
            var kacab = $('#kacab').val();
            var kabag = $('#kabag').val();
            var admin = $('#admin').val();
            var pti = $('#pti').val();
            var teknik = $('#teknik').val();
            var hublang = $('#hublang').val();
            var perencanaan = $('#perencanaan').val();
            var asset = $('#asset').val();
            var penertiban = $('#penertiban').val();
            var pptka = $('#pptka').val();
            var server = $('#server').val();
            var umum = $('#umum').val();
            var qc = $('#qc').val();
            var lab = $('#lab').val();
            var poli = $('#poli').val();
            var humas = $('#humas').val();
            var keuangan = $('#keuangan').val();
            var kamtib = $('#kamtib').val();
    
            $.ajax({
                url: '<?php echo base_url('Setting/updateKodeSubBagian') ?>',
                method: "POST",
                dataType: "JSON",
                data: {dirut:dirut, dirum:dirum, dirtek:dirtek, kacab:kacab, kabag:kabag, admin:admin, pti:pti, teknik:teknik, hublang:hublang, perencanaan:perencanaan, asset:asset, penertiban:penertiban, pptka:pptka, server:server, umum:umum, qc:qc, lab:lab, poli:poli, humas:humas, keuangan:keuangan, kamtib:kamtib},
                success: function(data){
                    alert('kode subbagian berhasil di update');
                }
            })

        })
    });
</script>