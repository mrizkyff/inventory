<script>
    $(document).ready(function(){
        $('#btn_ganti').on('click',function(){
            var id = $('#id').val();
            var pwlama = $('#pwlama').val();
            var pwbaru = $('#pwbaru').val();
            $.ajax({
                url: '<?php echo base_url('Profile/updatePassword') ?>',
                method: "POST",
                data: {id:id, pwlama:pwlama, pwbaru:pwbaru},
                dataType: "JSON",
                success: function(data){
                    alert('password berhasil di ganti!');
                }
            })
        })
    })
</script>