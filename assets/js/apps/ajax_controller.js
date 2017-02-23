/**
 * Created by Gowtham on 10/21/2015.
 */

tisa_ajax = {
    obj : null,
    data : {
        url : "",
        data : "",
        type : "post",
        dataType : ""
    },
    init:function(){
        obj = $.ajax( data );
    },
    done : function(){
        obj.done(function() {
            alert( "success" );
        })
            .fail(function() {
                alert( "error" );
            })
            .always(function() {
                alert( "complete" );
            });
    }
};