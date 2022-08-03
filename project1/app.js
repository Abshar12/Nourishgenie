$(".country_change").on('change',function(){
    var country_id = $(this).val(),
        state_list = $(this).data('target'); // The dropdown ID
    $.ajax({
        url:"<?php echo site_url('Customer_control/statename');?>",
        method:"POST",
        data:"country_id="+country_id,
        dataType: "json",
        success:function(data){
            $('#'+state_list).empty();
            var placeholder="<option value='' disabled selected>Select state</option>";
            $('#'+state_list).html(placeholder);
            $.each(data, function(i, data) {
                $('#'+state_list).append("<option value='" + data.id + "'>" + data.state_name + "</option>");
            });
        }
    });
});