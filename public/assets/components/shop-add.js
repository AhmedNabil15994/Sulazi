$(function(){
    initialize(document.getElementById('address'),document.getElementById('address_details'));

    $('#address').keydown(function(event){
        if(event.keyCode == 13) {
          event.preventDefault();
          return false;
        }
      });
});