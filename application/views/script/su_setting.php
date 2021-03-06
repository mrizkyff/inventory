<script>
    $(document).ready(function(){

        //set nilai layout barcode
        $.ajax({
            type: 'GET',
            url: '<?php echo base_url('Setting/getLayoutSettingBc')?>',
            async: false,
            dataType: 'JSON',
            success: function(data){
                $('#set_judulBc').val(data[0].judul);
                $('#set_field1Bc').val(data[0].ket1);
                $('#set_field2Bc').val(data[0].ket2);
                $('#set_field3Bc').val(data[0].ket3);
                $('#set_field4Bc').val(data[0].ket4);
            }
        })

        // set nilai layout qr
        $.ajax({
            type: 'GET',
            url: '<?php echo base_url('Setting/getLayoutSettingQr')?>',
            async: false,
            dataType: 'JSON',
            success: function(data){
                $('#set_judulQr').val(data[0].judul);
                $('#set_field1Qr').val(data[0].ket1);
                $('#set_field2Qr').val(data[0].ket2);
                $('#set_field3Qr').val(data[0].ket3);
                $('#set_field4Qr').val(data[0].ket4);
            }
        })


        $('#btn_simpan_kode').on('click',function(){
            // update kode primary
            var primary = $('#primary').val();
            $.ajax({
                url: '<?php echo base_url('Setting/updateKodePrimary') ?>',
                method: 'POST',
                dataType: "JSON",
                data: {primary:primary},
                success: function(data){
                    alert('kode primary berhasil di update');
                }
            })

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


        // simpan layout 
        $('#btn_simpan_layout').on('click',function(){
            // barcode
            var judulBc = $('#set_judulBc').val();
            var ket1Bc = $('#set_field1Bc').val();
            var ket2Bc = $('#set_field2Bc').val();
            var ket3Bc = $('#set_field3Bc').val();
            var ket4Bc = $('#set_field4Bc').val();
        
            // qr
            var judulQr = $('#set_judulQr').val();
            var ket1Qr = $('#set_field1Qr').val();
            var ket2Qr = $('#set_field2Qr').val();
            var ket3Qr = $('#set_field3Qr').val();
            var ket4Qr = $('#set_field4Qr').val();
            $.ajax({
                url: '<?php echo base_url('Setting/simpanLayout') ?>',
                method: 'POST',
                data: {judulQr:judulQr, ket1Qr:ket1Qr, ket2Qr:ket2Qr, ket3Qr:ket3Qr, ket4Qr:ket4Qr, judulBc:judulBc, ket1Bc:ket1Bc, ket2Bc:ket2Bc, ket3Bc:ket3Bc, ket4Bc:ket4Bc},
                dataType: 'JSON',
                success: function(data){
                    alert('Layout QR dan Barcode berhasil di update');
                }
            })

        })

    });
</script>