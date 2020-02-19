<script>
    $(document).ready(function(){
        tampilDataBarang();
        $('#tableBarangRusak').DataTable();

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
                                    '<td>'+data[i].kodeBarang+'</td>'+
                                    '<td>'+data[i].jenis+'</td>'+
                                    '<td>'+
                                        
                                        '  <a class="text-primary" data-toggle="collapse" href="#collapseExample'+i+'" role="button" aria-expanded="false" aria-controls="collapseExample">'+
                                            '<i class="fas fa-info-circle"></i>'+
                                        '</a>    '+data[i].namaBarang+
                                        '<div class="collapse" id="collapseExample'+i+'">'+
                                        '<div class="card card-body">'+
                                        '<p>'+
                                            '<b>Nomor Seri :</b>'+data[i].seri+'<br>'+
                                            '<b>Keterangan :</b>'+data[i].keterangan+'<br>'+
                                            '<b>Nomor Spesifikasi :</b>'+data[i].spec+
                                        '</p>'+
                                        '</div>'+
                                        '</div>'+
                                    '</td>'+
                                    '<td>'+data[i].merek+'</td>'+
                                    '<td>'+data[i].bagian+'</td>'+
                                    '<td>'+data[i].subBagian+'</td>'+
                                    '<td>'+
                                        '<a class="btn btn-secondary btn-xs item_qr" id="'+data[i].id+'" nama="'+data[i].namaBarang+'" kdReg="'+data[i].kodeRegister+'" jenis="'+data[i].jenis+'" tgl="'+data[i].tanggal+'"> <i class="fas fa-qrcode"></i> QRCode</a>'+'  '+
                                        '<a class="btn btn-primary btn-xs item_barcode" id="'+data[i].id+'" nama="'+data[i].namaBarang+'" kdReg="'+data[i].kodeRegister+'" jenis="'+data[i].jenis+'" tgl="'+data[i].tanggal+'"> <i class="fas fa-barcode"></i> Barcode</a>    '+
                                        data[i].kodeRegister+
                                    '</td>'+
                                    '<td>'+'<img src="<?php echo base_url()?>/upload/img/'+data[i].foto+'" alt="" class="img-thumbnail zoom">'+'</td>'+
                                    '<td>'+data[i].tanggal+'</td>'+
                                    '<td style "text-align:right;">'+
                                        // '<a href="javascript:;" class="btn btn-info btn-xs item_edit" data="'+data[i].id+'">   Edit   </a>'+' '+
                                        // '<a href="javascript:;" class="btn btn-danger btn-xs item_hapus" data="'+data[i].id+'" nama="'+data[i].nama+'"> Hapus </a>'+' '+
                                        '<a href="javascript:;" class="btn btn-info btn-xs item_edit" jenis="'+data[i].jenis+'" id="'+data[i].id+'" data="'+data[i].kodeBarang+'" nama="'+data[i].namaBarang+'" bag="'+data[i].bagian+'" subbag="'+data[i].subBagian+'">Edit</a>'+'  '+
                                        '<a href="javascript:;" class="btn btn-success btn-xs item_rusak" data="'+data[i].kodeBarang+'" arr="'+data+'" nama="'+data[i].nama+'">Perbaikan</a>'+
                                    '</td>'+
                                '</tr>';
                    }
                    $('#show_brg_rusak').html(html);
                }
            });
        }
    });
</script>