<script>
    $(document).ready(function(){
        tampilDataBarang();
        $('#tableBarangRusak').DataTable({
            "order": [[9,"desc"]]
        });

        function tampilDataBarang(){
            $.ajax({
                type : 'GET',
                url : '<?php echo base_url("BrgRusak/loadBarang")?>',
                async : false,
                dataType : "JSON",
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0;i<data.length; i++){
                        html += '<tr>'+
                                    '<td>'+(i+1)+'</td>'+
                                    '<td>'+data[i].id+'</td>'+
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
                                            '<b>Nomor Spesifikasi :</b>'+data[i].spec+'<br>'+
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
                                    '<td>'+data[i].tgl_rusak+'</td>'+
                                    '<td style "text-align:right;">'+
                                        '<a href="javascript:;" class="btn btn-info btn-xs item_upgrade" jenis="'+data[i].jenis+'" id="'+data[i].id+'" data="'+data[i].id+'" nama="'+data[i].nama+'" bag="'+data[i].bagian+'" subbag="'+data[i].subBagian+'" spec="'+data[i].spec+'" up="'+data[i].upgrade+'">Upgrade</a>'+'  '+
                                        '<a href="javascript:;" class="btn btn-success btn-xs item_perbaikan" data="'+data[i].id+'" arr="'+data+'" nama="'+data[i].nama+'" repair="'+data[i].perbaikan+'">Perbaikan</a>'+
                                    '</td>'+
                                '</tr>';
                    }
                    $('#show_brg_rusak').html(html);
                }
            });

        }

        // get modal qr
        $('#show_brg_rusak').on('click','.item_qr',function(){
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
        $('#show_brg_rusak').on('click','.item_barcode',function(){
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

        // get modal perbaikan
        $('#show_brg_rusak').on('click','.item_perbaikan',function(){
            var id = $(this).attr('data');
            var nama = $(this).attr('nama');
            var username = $('#logUsernames').val();
            var action = $('#actions').val();
            var repair = $(this).attr('repair');
            

            $('#namez').val(nama);
            $('#idz').val(id);
            $('#modalPerbaikan').modal('show');

            // aksi perbaikan
            $('#btn_perbaikan').on('click',function(){
            var perbaikan = $('#perbaikan').val();
            // perbaikan = repair+"; "+"update: "+perbaikan;
                $.ajax({
                    url: '<?php echo base_url('BrgRusak/perbaikan') ?>',
                    method: 'POST',
                    dataType: 'JSON',
                    data: {id:id, nama:nama, username:username, action:action, perbaikan:perbaikan},
                    success: function(data){
                        $('#modalPerbaikan').modal('hide');
                        alert('Status barang berhasil di update');
                        tampilDataBarang();
                    }
                })
            })
        })

        // // get modal upgrade
        // $('#show_brg_rusak').on('click','.item_upgrade',function(){
        //     var id = $(this).attr('data');
        //     var nama = $(this).attr('nama');
        //     var username = $('#logUsernames').val();
        //     var action = $('#actionx').val();
        //     var up = $(this).attr('up');
            

        //     $('#namex').val(nama);
        //     $('#idx').val(id);
        //     $('#modalUpgrade').modal('show');

        //     // aksi perbaikan
        //     $('#btn_upgrade').on('click',function(){
        //     // var upgrade = $('#upgrade').val();
        //     upgrade = up+"; "+"update: "+upgrade;
        //         $.ajax({
        //             url: '<?php echo base_url('BrgRusak/upgrade') ?>',
        //             method: 'POST',
        //             dataType: 'JSON',
        //             data: {id:id, nama:nama, username:username, action:action, upgrade:upgrade},
        //             success: function(data){
        //                 $('#modalUpgrade').modal('hide');
        //                 alert('Status barang berhasil di update');
        //                 tampilDataBarang();
        //             }
        //         })
                
        //     })
        // })


    });
</script>