$("#record_param_url").change(function(){
    result = check();
});

$("#record_param_title").change(function(){
    result = check();
});

function check(){

    url = $.trim($("#record_param_url").val());

    if(url == ""){

        $("#add_button").attr("disabled", "disabled");
        $("#record_param_url").closest(".form-group").removeClass("has-success").removeClass("has-error").addClass("has-error");
   
    }else{

        $.post("/admin/category/unic_record", {
            url: url
            }, function(response){
                if(response == 1){

                    $("#record_param_url").closest(".form-group").removeClass("has-success").removeClass("has-error").addClass("has-success");
                    $("#add_button").removeAttr("disabled");

                }else{

                    $("#add_button").attr("disabled", "disabled");
                    $("#record_param_url").closest(".form-group").removeClass("has-success").removeClass("has-error").addClass("has-error");

            }
        });
    }

}