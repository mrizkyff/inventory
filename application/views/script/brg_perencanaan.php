<script type="text/javascript">
  $(document).ready(function() {
      tampilDataBarang();
    $('#tableBarangPerencanaan').DataTable({
        "order": [[10,"desc"]]
    });

    function reload_table(){
        table.ajax.reload(null,false);
    }

    function tampilDataBarang(){
            $.ajax({
                type    : 'GET',
                url     : '<?php echo base_url()?>/BrgPerencanaan/dataBarang',
                async   : false,
                dataType : 'JSON',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0;i<data.length; i++){
                        html += '<tr>'+
                                    '<td>'+(i+1)+'</td>'+
                                    '<td>'+data[i].id+'</td>'+
                                    '<td>'+data[i].jenis+'</td>'+
                                    '<td>'+data[i].nama+'</td>'+
                                    '<td>'+data[i].merek+'</td>'+
                                    '<td>'+data[i].seri+'</td>'+
                                    '<td>'+data[i].harga+'</td>'+
                                    '<td>'+data[i].jumlah+'</td>'+
                                    '<td>'+data[i].keterangan+'</td>'+
                                    '<td>'+data[i].spec+'</td>'+
                                    '<td>'+data[i].tanggal+'</td>'+
                                    '<td style "text-align:right;">'+
                                        '<a href="javascript:;" class="btn btn-info btn-xs item_edit" data="'+data[i].id+'">   Edit   </a>'+' '+
                                        '<a href="javascript:;" class="btn btn-danger btn-xs item_hapus" data="'+data[i].id+'" nama="'+data[i].nama+'"> Hapus </a>'+' '+
                                        '<a href="javascript:;" class="btn btn-success btn-xs item_acc" data="'+data[i].id+'">ACC</a>'+
                                    '</td>'+
                                '</tr>';
                    }
                    $('#show_brg_perencanaan').html(html);
                }
            });
      }


    //   simpan barang
    $('#btn_simpan').on('click',function(){
        
        var id = '';
        var jenis = $('#jenis').val();
        var nama = $('#nama').val();
        var merek = $('#merek').val();
        var seri = $('#seri').val();
        var harga = $('#harga').val();
        var jumlah = $('#jumlah').val();
        var keterangan = $('#keterangan').val();
        var spec = $('#spec').val();
        $.ajax({
            type    : "POST",
            url     : "<?php echo base_url('BrgPerencanaan/simpanBarang')?>",
            dataType    : "JSON",
            data : {id:id , jenis:jenis , nama:nama , merek:merek , seri:seri , harga:harga , jumlah:jumlah , keterangan:keterangan , spec:spec},
            success : function(data){
                $('[name="jenis"]').val("");
                $('[name="nama"]').val("");
                $('[name="merek"]').val("");
                $('[name="seri"]').val("");
                $('[name="harga"]').val("");
                $('[name="jumlah"]').val("");
                $('[name="keterangan"]').val("");
                $('[name="spec"]').val("");
                $('#modalTambah').modal('hide');
                alert("Item berhasil disimpan");
                tampilDataBarang();
            }
        });

        // data log simpan
        var username = $('#logUsername').val();
        var action = "menambahkan item pada perencanaan";
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('BrgPerencanaan/logSimpan')?>",
            dataType: "JSON",
            data: {username:username, action:action, id:id, nama:nama},
            succes: function(data){
                $('[name="logUsername"]').val("");

            }
        })
        
        return false;
    })


    // get update
    $('#show_brg_perencanaan').on('click','.item_edit',function(){
        var kode = $(this).attr('data');
        $.ajax({
            type    : "GET",
            url     : "<?php echo base_url('BrgPerencanaan/getBarang')?>",
            dataType : "JSON",
            data    : {id:kode},
            success : function(data){
                $.each(data,function(id, jenis, nama, merek, seri, harga, jumlah, keterangan, spec){
                    $('#modalEdit').modal('show');
                    $('[name="kodes"]').val(kode);
                    $('[name="namas"]').val(data.nama);
                    $('[name="jeniss"]').val(data.jenis);
                    $('[name="mereks"]').val(data.merek);
                    $('[name="seris"]').val(data.seri);
                    $('[name="hargas"]').val(data.harga);
                    $('[name="jumlahs"]').val(data.jumlah);
                    $('[name="keterangans"]').val(data.keterangan);
                    $('[name="specs"]').val(data.spec);
                });
            }
        });
        return false;
    });

    // get Hapus
    $('#show_brg_perencanaan').on('click','.item_hapus',function(){
        var id = $(this).attr('data');
        var nama = "Item "+$(this).attr('nama')+" akan dihapus, lanjutkan?";
        var nm = $(this).attr('nama');
        $('#modalHapus').modal('show');
        $('[name="id"]').val(id);
        $('[name="nama"]').val(nama);
        $('[name="nm"]').val(nm);

    });

    // get acc
    $('#show_brg_perencanaan').on('click','.item_acc',function(){
        var kode = $(this).attr('data');
        $.ajax({
            type    : "GET",
            url     : "<?php echo base_url('BrgPerencanaan/getBarang')?>",
            dataType : "JSON",
            data    : {id:kode},
            success : function(data){
                $.each(data,function(id, jenis, nama, merek, seri, harga, jumlah, keterangan, spec){
                    $('#modalAcc').modal('show');
                    $('[name="kodex"]').val(kode);
                    $('[name="namax"]').val(data.nama);
                    $('[name="jenisx"]').val(data.jenis);
                    $('[name="merekx"]').val(data.merek);
                    $('[name="serix"]').val(data.seri);
                    $('[name="hargax"]').val(data.harga);
                    $('[name="jumlahx"]').val(data.jumlah);
                    $('[name="keteranganx"]').val(data.keterangan);
                    $('[name="specx"]').val(data.spec);
                });
            }
        });
        return false;
    });


    // update barang
    $('#btn_update').on('click',function(){
        var id = $('#kodes').val();
        var jenis = $('#jeniss').val();
        var nama = $('#namas').val();
        var merek = $('#mereks').val();
        var seri = $('#seris').val();
        var harga = $('#hargas').val();
        var jumlah = $('#jumlahs').val();
        var keterangan = $('#keterangans').val();
        var spec = $('#specs').val();
        $.ajax({
            type : "POST",
            url : '<?php echo base_url('BrgPerencanaan/updateBarang') ?>',
            dataType : "JSON",
            data    : {id:id , jenis:jenis , nama:nama , merek:merek , seri:seri , harga:harga , jumlah:jumlah , keterangan:keterangan , spec:spec},
            success : function(data){
                $('[name="kodes"]').val("");
                $('[name="jeniss"]').val("");
                $('[name="namas"]').val("");
                $('[name="mereks"]').val("");
                $('[name="seris"]').val("");
                $('[name="hargas"]').val("");
                $('[name="jumlahs"]').val("");
                $('[name="keterangans"]').val("");
                $('[name="specs"]').val("");
                $('#modalEdit').modal('hide');
                alert("Item Berhasil diUpdate");
                tampilDataBarang();
            }
        });

        // data log update
        var username = $('#logUsername').val();
        var action = "mengedit item pada perencanaan";
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('BrgPerencanaan/logSimpan')?>",
            dataType: "JSON",
            data: {username:username, action:action, id:id, nama:nama},
            succes: function(data){
                $('[name="logUsername"]').val("");

            }
        })


        return false;
    })

    // hapus item
    $('#btn_hapus').on('click',function(){
        var id = $('#textid').val();
        var nm = $('#textnm').val();
        $.ajax({
            type    : "POST",
            url : "<?php echo base_url('BrgPerencanaan/hapusBarang') ?>",
            dataType    : "JSON",
            data    : {id:id},
            success : function(data){
                $('#modalHapus').modal('hide');
                $('[name="nama"]').val("");
                alert("Item berhasil dihapus");
                tampilDataBarang();
            }
        });

        // data log hapus
        var username = $('#logUsername').val();
        var action = "menghapus item pada perencanaan";
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('BrgPerencanaan/logSimpan')?>",
            dataType: "JSON",
            data: {username:username, action:action, id:id, nama:nm},
            succes: function(data){
                $('[name="logUsername"]').val("");

            }
        })

        return false;
    });

    // acc item
    $('#btn_acc').on('click',function(){
        var id = $('#kodex').val();
        var jenis = $('#jenisx').val();
        var nama = $('#namax').val();
        var merek = $('#merekx').val();
        var seri = $('#serix').val();
        var harga = $('#hargax').val();
        var jumlah = $('#jumlahx').val();
        var keterangan = $('#keteranganx').val();
        var spec = $('#specx').val();
    
        $.ajax({
            type : "POST",
            url : '<?php echo base_url('BrgPerencanaan/simpanBarangBaru') ?>',
            dataType : "JSON",
            data    : {id:id , jenis:jenis , nama:nama , merek:merek , seri:seri , harga:harga , jumlah:jumlah , keterangan:keterangan , spec:spec},
            success : function(data){
                $('[name="kodex"]').val("");
                $('[name="jenisx"]').val("");
                $('[name="namax"]').val("");
                $('[name="merekx"]').val("");
                $('[name="serix"]').val("");
                $('[name="hargax"]').val("");
                $('[name="jumlahx"]').val("");
                $('[name="keteranganx"]').val("");
                $('[name="specx"]').val("");
                $('#modalAcc').modal('hide');
                alert("Item berhasil dikonfirmasi");
                tampilDataBarang();
            }
        });


        // data log acc
        var username = $('#logUsername').val();
        var action = "mengkonfirmasi item pada perencanaan";
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('BrgPerencanaan/logSimpan')?>",
            dataType: "JSON",
            data: {username:username, action:action, id:id, nama:nama},
            succes: function(data){
                $('[name="logUsername"]').val("");

            }
        })


        return false;
    })


 


    
    

    

} );
</script>