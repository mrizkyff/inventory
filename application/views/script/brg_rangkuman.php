<script>
    $(document).ready(function(){
        tampilDataBarang();
        $('#tableBarangRangkuman').DataTable({
            "order": [[9,"asc"]]
        });



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


    });


</script>