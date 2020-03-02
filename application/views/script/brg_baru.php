<script type="text/javascript">
    $(document).ready(function(){
        tampilDataBarang();
        $('#tableBarangBaru').DataTable({
            "order": [[9,"desc"]]
        });

        function tampilDataBarang(){
            $.ajax({
                type    : 'GET',
                url     : '<?php echo base_url()?>/BrgBaru/dataBarang',
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
                                    '<td>'+data[i].keterangan+'</td>'+
                                    '<td>'+data[i].spec+'</td>'+
                                    '<td>'+'<img src="<?php echo base_url()?>/upload/img/'+data[i].foto+'" alt="" class="img-thumbnail zoom">'+'</td>'+
                                    '<td>'+data[i].tgl_baru+'</td>'+
                                    '<td style "text-align:right;">'+
                                        '<a href="javascript:;" class="btn btn-info btn-xs item_foto" data="'+data[i].id+'" nama="'+data[i].nama+'">Foto</a>'+'  '+
                                        '<a href="javascript:;" class="btn btn-success btn-xs item_register" data="'+data[i].id+'" arr="'+data+'" nama="'+data[i].nama+'">Register</a>'+
                                    '</td>'+
                                '</tr>';
                    }
                    $('#show_brg_baru').html(html);
                }
            });
        }

        // get update foto
        $('#show_brg_baru').on('click','.item_foto',function(){
            var id = $(this).attr('data');
            var nama = $(this).attr('nama');
            $('#modalFoto').modal('show');
            $('[name="id"]').val(id);
            $('[name="nama"]').val(nama);
        });

        $(document).ready(function(){ 
            // upload foto
            $('#submit').submit(function(e){
                e.preventDefault(); 
                    $.ajax({
                        url:'<?php echo base_url();?>BrgBaru/do_upload',
                        type:"post",
                        data:new FormData(this),
                        processData:false,
                        contentType:false,
                        cache:false,
                        async:false,
                        success: function(data){
                            alert("Upload Image Berhasil.");
                            $('#modalFoto').modal('hide');
                            tampilDataBarang();
                        }
                    });
                });

            });
        
        // get modal register
        $('#show_brg_baru').on('click','.item_register',function(){
            var id = $(this).attr('data');

            
            // variabel dari database
            var kodeBarang;
            var jenis;
            var nama;
            $('#modalRegister').modal('show');

            $('[name="ids"]').val(id);
            $.ajax({
                url: "<?php echo base_url('BrgBaru/getBarangByCode') ?>",
                method: "POST",
                dataType: "JSON",
                data: {id:id},
                success: function(data){
                    // console.log(data);
                    kodeBarang = data[0].id;
                    jenis = data[0].jenis; 
                    nama = data[0].nama;          
                }
            })

            $('#btn_register').on('click', function(){
                var username = $('#logUsernames').val();
                var action = $('#actions').val();
                var bagian = $('#bagian').val();
                var subbag = $('#subbag').val();
                // console.log(bagian);
                console.log(nama);
                $.ajax({
                    url: "<?php echo base_url('BrgBaru/registerBarang') ?>",
                    method: "POST",
                    // dataType: "JSON",
                    data: {kodeBarang:kodeBarang,jenis:jenis, bagian:bagian, subbag:subbag, id:id, username:username, action:action, nama:nama},
                    success: function(data){
                        console.log(data);
                        alert("Registrasi barang berhasil!");
                        $('#modalRegister').modal('hide');
                        tampilDataBarang();
                    }
                })

            })




        })

        




    })
</script>