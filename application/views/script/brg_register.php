<script>
    $(document).ready(function(){
        tampilDataBarang();
        $('#tableBarangRegister').DataTable({
            "order": [[8,"desc"]]
        });
        


        function tampilDataBarang(){
            $.ajax({
                type : 'GET',
                url : '<?php echo base_url("BrgRegister/dataBarang")?>',
                async : false,
                dataType : "JSON",
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0;i<data.length; i++){
                        html += '<tr>'+
                                    '<td>'+(i+1)+'</td>'+
                                    '<td>'+data[i].jenis+'</td>'+
                                    '<td>'+
                                        
                                        '  <a class="text-primary" data-toggle="collapse" href="#collapseExample'+i+'" role="button" aria-expanded="false" aria-controls="collapseExample">'+
                                            '<i class="fas fa-info-circle"></i>'+
                                        '</a>    '+data[i].nama+
                                        '<div class="collapse" id="collapseExample'+i+'">'+
                                        '<div class="card card-body">'+
                                        '<p>'+
                                            '<b>Nomor Seri :</b>'+data[i].seri+'<br>'+
                                            '<b>Keterangan :</b>'+data[i].keterangan+'<br>'+
                                            '<b>Spesifikasi :</b>'+data[i].spec+'<br>'+
                                            '<b>Harga :</b>'+data[i].harga+'<br>'+
                                            '<b>History Perbaikan :</b>'+data[i].perbaikan+'<br>'+
                                            '<b>History Kerusakan :</b>'+data[i].kerusakan+'<br>'+
                                            '<b>History Upgrade :</b>'+data[i].upgrade+
                                        '</p>'+
                                        '</div>'+
                                        '</div>'+
                                    '</td>'+
                                    '<td>'+data[i].merek+'</td>'+
                                    '<td>'+data[i].bagian+'</td>'+
                                    '<td>'+data[i].subBagian+'</td>'+
                                    '<td>'+
                                        '<a href="javascript:;" class="btn btn-secondary btn-xs item_qr" id="'+data[i].id+'" nama="'+data[i].nama+'" kdReg="'+data[i].kodeRegister+'" jenis="'+data[i].jenis+'" tgl="'+data[i].tgl_register+'"> <i class="fas fa-qrcode"></i> QRCode</a>'+'  '+
                                        '<a href="javascript:;" class="btn btn-primary btn-xs item_barcode" id="'+data[i].id+'" nama="'+data[i].nama+'" kdReg="'+data[i].kodeRegister+'" jenis="'+data[i].jenis+'" tgl="'+data[i].tgl_register+'"> <i class="fas fa-barcode"></i> Barcode</a>    '+
                                        data[i].kodeRegister+
                                    '</td>'+
                                    '<td>'+'<img src="<?php echo base_url()?>/upload/img/'+data[i].foto+'" alt="" class="img-thumbnail zoom">'+'</td>'+
                                    '<td>'+data[i].tgl_register+'</td>'+
                                    '<td style "text-align:right;">'+
                                        '<a href="javascript:;" class="btn btn-info btn-xs item_edit" jenis="'+data[i].jenis+'" id="'+data[i].id+'" data="'+data[i].id+'" nama="'+data[i].nama+'" bag="'+data[i].bagian+'" subbag="'+data[i].subBagian+'">Edit</a>'+'  '+
                                        '<a href="javascript:;" class="btn btn-secondary btn-xs item_upgrade" jenis="'+data[i].jenis+'" id="'+data[i].id+'" data="'+data[i].id+'" nama="'+data[i].nama+'" bag="'+data[i].bagian+'" subbag="'+data[i].subBagian+'" spec="'+data[i].spec+'" up="'+data[i].upgrade+'">Upgrade</a>'+'  '+
                                        '<a href="javascript:;" class="btn btn-danger btn-xs item_rusak" data="'+data[i].id+'" arr="'+data+'" nama="'+data[i].nama+'" rusak="'+data[i].kerusakan+'">Rusak</a>'+
                                    '</td>'+
                                '</tr>';
                    }
                    $('#show_brg_register').html(html);
                }
            });
        }

        // get modal qr
        $('#show_brg_register').on('click','.item_qr',function(){
            var id = $(this).attr('id');
            var nama = '';
            var kdReg = $(this).attr('kdReg');
            var jenis = '';
            var tgl = '';
            $.ajax({
                url: '<?php echo base_url('BrgRegister/getInfoQr') ?>',
                method: 'POST',
                data: {id:id},
                dataType: "JSON",
                success: function(data){
                    $('#judulQr').text(data['judul']);
                    $('#ket1').text(data['ket1']);
                    $('#ket2').text(data['ket2']);
                    $('#ket3').text(data['ket3']);
                    $('#ket4').text(data['ket4']);
                    var alamat = "<?php echo base_url() ?>upload/qr/"+kdReg+".png";
                    $('#fotoQr').attr("src",alamat);
                    
                    $('#modalQr').modal('show');
                    // console.log(data[]);

                }
            })
        })

        // get modal barcode
        $('#show_brg_register').on('click','.item_barcode',function(){
            var id = $(this).attr('id');
            var kdReg = $(this).attr('kdReg');

            $.ajax({
                url: '<?php echo base_url('BrgRegister/getInfoBarcode')?>',
                data: {id:id},
                method: 'POST',
                dataType: 'JSON',
                success: function(data){
                    console.log(data);
                    $('#judulBc').text(data['judul']);
                    $('#ket1Bc').text(data['ket1']);
                    $('#ket2Bc').text(data['ket2']);
                    $('#ket3Bc').text(data['ket3']);
                    $('#ket4Bc').text(data['ket4']);
                    var alamat = "<?php echo base_url() ?>upload/barcode/"+kdReg+".png";
                    $('#fotoBarcode').attr("src",alamat);

                    $('#modalBarcode').modal('show');
                }
            })

        })

        // get modal edit
        $('#show_brg_register').on('click','.item_edit',function(){
            var idBarang = $(this).attr('data');
            var nama = $(this).attr('nama');
            var bag = $(this).attr('bag');
            var subbag = $(this).attr('subbag');
            var idReg = $(this).attr('id');
            var jenis = $(this).attr('jenis');
            console.log(bag);
            console.log(jenis);
            $('#namas').val(nama);
            $('#ids').val(idBarang);
            $('#bagian').val(bag);
            $('#subbag').val(subbag);
            $('#idReg').val(idReg);
            $('#jenis').val(jenis);
            console.log(idReg);
            $('#modalEditRegister').modal('show');

        })

        // get modal rusak
        $('#show_brg_register').on('click','.item_rusak',function(){
            var nama = $(this).attr('nama');
            var id = $(this).attr('data');
            var rusak = $(this).attr('rusak');
            console.log(nama);
            console.log(id);    
            $('#namez').val(nama);
            $('#idz').val(id);
            
            $("#textRusak").text("Konfirmasi bahwa barang "+nama+" rusak?");
            $('#modalRusak').modal('show');

            // aksi rusak
            $('#btn_konfirmasi').on('click',function(){
                var kerusakan = $('#kerusakan').val();
                // kerusakan = rusak+ ";"+ " update: "+kerusakan;
                var username = $('#logUsernames').val();
                var action = $('#actions').val();
                $.ajax({
                    url: '<?php echo base_url("BrgRegister/barangRusak")?>',
                    method: "POST",
                    data: {id:id, kerusakan:kerusakan, nama:nama, username:username, action:action},
                    dataType: "JSON",
                    success: function(data){
                        alert('Data berhasil diupdate');
                        $('#modalRusak').modal('hide');
                        tampilDataBarang();
                    }
                })
            })
            
        })


        // update register barang
        $('#btn_register').on('click',function(){
            var idBarang = $('#ids').val();
            var namaBarang = $('#namas').val();
            var bagian = $('#bagian').val();
            var subbag = $('#subbag').val();
            var username = $('#logUsernames').val();
            var action = $('#actions').val();
            var idReg = $('#idReg').val();
            var jenis = $('#jenis').val();
            $.ajax({
                url: "<?php echo base_url('BrgRegister/updateBarang') ?>",
                method: "POST",
                // dataType: "JSON",
                data: {idBarang:idBarang, namaBarang:namaBarang, bagian:bagian, subbag:subbag, username:username, action:action, idReg:idReg, jenis:jenis},
                success: function(data){
                    console.log(data);
                    alert('Barang berhasil di update');
                    $('#modalEditRegister').modal('hide');
                    tampilDataBarang();
                }
            })
        })


        // get modal upgrade
        $('#show_brg_register').on('click','.item_upgrade',function(){
            var id = $(this).attr('data');
            var nama = $(this).attr('nama');
            var username = $('#logUsernames').val();
            var action = $('#actionx').val();
            var up = $(this).attr('up');
            

            $('#namex').val(nama);
            $('#idx').val(id);
            $('#modalUpgrade').modal('show');

            // aksi perbaikan
            $('#btn_upgrade').on('click',function(){
            var upgrade = $('#upgrade').val();
            // upgrade = up+"; "+"update: "+upgrade;
                $.ajax({
                    url: '<?php echo base_url('BrgRusak/upgrade') ?>',
                    method: 'POST',
                    dataType: 'JSON',
                    data: {id:id, nama:nama, username:username, action:action, upgrade:upgrade},
                    success: function(data){
                        $('#modalUpgrade').modal('hide');
                        $('#upgrade').val("");
                        alert('Barang berhasil di upgrade');
                        tampilDataBarang();
                    }
                })
                
            })
        })

        



        
    });

</script>