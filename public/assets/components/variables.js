/**
 * Groups Js
 */

function deleteVariable($id) {
    swal.fire({
        "title": "Are you sure?",
        "text": "You will not be able to recover this imaginary data!",
        "type": "warning",
        "confirmButtonClass": "btn btn-secondary"
    }).then((result) => {
        if(result.value){
            swal.fire("Deleted!", "Your imaginary data has been deleted.", "success");
            $.get('/backend/variables/delete/' + $id,function(data) {
                if (data.status.original.status.status == 1) {
                    $('#tableRaw' + $id).remove();
                } 
            });
        }
    });
}

$(function () {

});
