<script>
    $(document).ready(function(){
        tampilDataUser();
        $('#tableUserList').DataTable();



        function tampilDataUser(){
            $.ajax({
                type: "GET",
                url: '<?php echo base_url()?>/SuperAdmin/getDataUser',
                async: false,
                dataType: "JSON",
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0;i<data.length; i++){
                        html += '<tr>'+
                                    '<td>'+(i+1)+'</td>'+
                                    '<td>'+data[i].id+'</td>'+
                                    '<td>'+data[i].nama+'</td>'+
                                    '<td>'+data[i].nip+'</td>'+
                                    '<td>'+data[i].username+'</td>'+
                                    '<td>'+data[i].level+'</td>'+
                                    '<td>'+data[i].tanggal+'</td>'+
                                    '<td style "text-align:right;">'+
                                        '<a href="javascript:;" class="btn btn-info btn-xs item_edit" data="'+data[i].id+'">   Edit   </a>'+' '+
                                        '<a href="javascript:;" class="btn btn-danger btn-xs item_hapus" data="'+data[i].id+'" nama="'+data[i].nama+'"> Hapus </a>'+
                                    '</td>'+
                                '</tr>';
                    }
                    $('#show_user_list').html(html);
                }
            });
        }

        // simpan user
        $('#btn_simpan_user').on('click',function(){
            var nama = $('#nama').val();
            var nip = $('#nip').val();
            var username = $('#username').val();
            var password = $('#password').val();
            var level = $('#level').val();

            $.ajax({
                type: "POST",
                url: "<?php echo base_url('SuperAdmin/tambahUser')?>",
                // dataType: "JSON",
                data: {nama:nama, nip:nip, username:username, password:password, level:level},
                success: function(data){
                    $('[name="nama"]').val("");
                    $('[name="nip"]').val("");
                    $('[name="username"]').val("");
                    $('[name="password"]').val("");
                    $('[name="level"]').val("");
                    alert("User berhasil ditambahkan");
                    $('#modalTambah').modal('hide');
                    tampilDataUser();
                }
            });
            return false;
        });


        // get hapus
        $('#show_user_list').on('click','.item_hapus',function(){
            var id = $(this).attr('data');
            var nama = 'User ' + $(this).attr('nama')+" akan dihapus, lanjutkan?";
            $('#modalHapus').modal('show');
            $('[name="id"]').val(id);
            $('[name="nama"]').val(nama);
        });


        // get update
        $('#show_user_list').on('click','.item_edit',function(){
            var kode = $(this).attr('data');
            $.ajax({
                type : "GET",
                url : "<?php echo base_url('SuperAdmin/getUser') ?>",
                data: {id:kode},
                dataType: "JSON",
                success: function(data){
                    $.each(data,function(id, nama, nip, username, password, level){
                        $('#modalEdit').modal('show');
                        $('[name="kodes"]').val(kode);
                        $('[name="namas"]').val(data.nama);
                        $('[name="nips"]').val(data.nip);
                        $('[name="usernames"]').val(data.username);
                        $('[name="passwords"]').val(data.password);
                        $('[name="levels"]').val(data.level);
                    });
                }
            });
            return false;
        });

        // hapus item
        $('#btn_hapus').on('click',function(){
            var id = $('#textid').val();
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('SuperAdmin/hapusUser')?>",
                dataType: "JSON",
                data: {id:id},
                success: function(data){
                    $('#modalHapus').modal('hide');
                    $('[name="nama"]').val("");
                    alert("User berhasil dihapus.");
                    tampilDataUser();
                }
            })
        })

        


    });
</script>