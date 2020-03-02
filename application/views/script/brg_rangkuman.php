<script>
    $(document).ready(function(){
        tampilDataBarang();
        // $('#tableBarangRangkuman').DataTable({
        //     "order": [[9,"asc"]]
        // });

        $('#tableBarangRangkuman').DataTable( {
            initComplete: function () {
                this.api().columns([1,3,4,5]).every( function () {
                    var column = this;
                    var select = $('<select><option value="">Tampilkan</option></select>')
                        .appendTo( $(column.footer()).empty() )
                        .on( 'change', function () {
                            var val = $.fn.dataTable.util.escapeRegex(
                                $(this).val()
                            );
    
                            column
                                .search( val ? '^'+val+'$' : '', true, false )
                                .draw();
                        } );
    
                        column.cells('', column[0]).render('display').sort().unique().each( function ( d, j ){
                        select.append( '<option value="'+d+'">'+d+'</option>' )
                    } );
                } );
            }
        } );



        function tampilDataBarang(){
            $.ajax({
                type : 'GET',
                url : '<?php echo base_url("BrgRangkuman/barangSummary")?>',
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
                                    '<td>'+
                                            '<a class="text-primary" data-toggle="collapse" href="#collapseExample2'+i+'" role="button" aria-expanded="false" aria-controls="collapseExample">'+
                                            '<i class="fas fa-info-circle"></i>'+
                                            '</a>'+'Semua Tanggal'+
                                            '<div class="collapse" id="collapseExample2'+i+'">'+
                                            '<div class="card card-body">'+
                                            '<p>'+
                                                '<b>Tanggal Pengadaan :</b>'+data[i].tgl_perencanaan+'<br>'+
                                                '<b>Tanggal Baru :</b>'+data[i].tgl_baru+'<br>'+
                                                '<b>Tanggal Registrasi :</b>'+data[i].tgl_register+'<br>'+
                                                '<b>Tanggal Rusak :</b>'+data[i].tgl_rusak+'<br>'+
                                            '</p>'+
                                            '</div>'+
                                            '</div>'+
                                    '</td>'+
                                    '<td style "text-align:right;">'+
                                        '<p>'+data[i].status+'</p>'+
                                    '</td>'+
                                '</tr>';
                    }
                    $('#show_brg_rangkuman').html(html);
                }
            });
        }

        $('#btn-filter').on('click',function(){
            var jenis = $('#jenis').val();
            var bagian = $('#bagian').val();
            var subbag = $('#subbag').val();
                $.ajax({
                    type : 'GET',
                    url : '<?php echo base_url("BrgRangkuman/barangFilter")?>',
                    async : false,
                    data: {jenis:jenis, bagian:bagian, subbag:subbag},
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
                                        '<td>'+
                                                '<a class="text-primary" data-toggle="collapse" href="#collapseExample2'+i+'" role="button" aria-expanded="false" aria-controls="collapseExample">'+
                                                '<i class="fas fa-info-circle"></i>'+
                                                '</a>'+'Semua Tanggal'+
                                                '<div class="collapse" id="collapseExample2'+i+'">'+
                                                '<div class="card card-body">'+
                                                '<p>'+
                                                    '<b>Tanggal Pengadaan :</b>'+data[i].tgl_perencanaan+'<br>'+
                                                    '<b>Tanggal Baru :</b>'+data[i].tgl_baru+'<br>'+
                                                    '<b>Tanggal Registrasi :</b>'+data[i].tgl_register+'<br>'+
                                                    '<b>Tanggal Rusak :</b>'+data[i].tgl_rusak+'<br>'+
                                                '</p>'+
                                                '</div>'+
                                                '</div>'+
                                        '</td>'+
                                        '<td style "text-align:right;">'+
                                            '<p>'+data[i].status+'</p>'+
                                        '</td>'+
                                    '</tr>';
                        }
                        $('#show_brg_rangkuman').html(html);
                    }
                });

        })

        $('#btn-reset').on('click',function(){
            $('#jenis').val("");
            $('#bagian').val("");
            $('#subbag').val("");
            tampilDataBarang();
        })

        // get modal qr
        $('#show_brg_rangkuman').on('click','.item_qr',function(){
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
        $('#show_brg_rangkuman').on('click','.item_barcode',function(){
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


    });


</script>