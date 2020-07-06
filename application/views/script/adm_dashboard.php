<script type="text/javascript">
    $(document).ready(function(){
        tampilDataLogSystem();
        $('#tableLogSys').DataTable();


        function tampilDataLogSystem(){
            $.ajax({
                type    : 'GET',
                url     : '<?php echo base_url()?>/Administrator/dataLogSystem',
                async   : false,
                dataType : 'JSON',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0;i<data.length; i++){
                        html += '<tr>'+
                                    '<td>'+(i+1)+'</td>'+
                                    '<td>'+data[i].id+'</td>'+
                                    '<td>'+data[i].activity+'</td>'+
                                    '<td>'+data[i].kode_brg+'</td>'+
                                    '<td>'+data[i].nama_brg+'</td>'+
                                    // '<td>'+data[i].kode_user+'</td>'+
                                    '<td>'+data[i].edit_by+'</td>'+
                                    '<td>'+data[i].date+'</td>'+
                                '</tr>';
                    }
                    $('#show_logSys').html(html);
                }
            });
      }
    });
</script>