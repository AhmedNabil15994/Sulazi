$(function(){
	$('.searchable').multiSelect({
        selectableHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='Search'>",
        selectionHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='Search'>",
        afterInit: function(ms){
            var that = this,
                $selectableSearch = that.$selectableUl.prev(),
                $selectionSearch = that.$selectionUl.prev(),
                selectableSearchString = '#'+that.$container.attr('id')+' .ms-elem-selectable:not(.ms-selected)',
                selectionSearchString = '#'+that.$container.attr('id')+' .ms-elem-selection.ms-selected';
            that.qs1 = $selectableSearch.quicksearch(selectableSearchString)
                .on('keydown', function(e){
                    if (e.which === 40){
                        that.$selectableUl.focus();
                        return false;
                    }
                });

            that.qs2 = $selectionSearch.quicksearch(selectionSearchString)
                .on('keydown', function(e){
                    if (e.which == 40){
                        that.$selectionUl.focus();
                        return false;
                    }
                });
        },
        afterSelect: function(){
            this.qs1.cache();
            this.qs2.cache();
        },
        afterDeselect: function(){
            this.qs1.cache();
            this.qs2.cache();
        }
    });

	$('.btn.btn-brand.kt-font-transform-u').on('click',function(){
		$('span.name').html($('input[name="name"]').val());
		$('span.email').html($('input[name="email"]').val());
        $('span.phone').html($('input[name="phone"]').val());
		$('span.user_type').html($('select.user_type option:selected').text());
		  
        var rulesString = '';
		var searc = $('select.searchable').val();
		for (var i = 0; i < searc.length; i++) {
			rulesString+= searc[i] + ' '+'<br>';
		}

        var addressObj = JSON.parse($('#address_details').val());
        var addressString = addressObj.street+' '+addressObj.home+'<br>'+addressObj.postal_code+ ' '+addressObj.city+'<br>'+addressObj.country;

        $('div.extra_rules').html(rulesString);
		$('div.address').html(addressString);
	});
    
    $('#image').on('change',function(){
        $('.kt-avatar__holder').css('background-image', "url("+window.URL.createObjectURL($(this)[0].files[0])+")");
    });

    initialize(document.getElementById('address'),document.getElementById('address_details'));

    $('#address').keydown(function(event){
        if(event.keyCode == 13) {
          event.preventDefault();
          return false;
        }
      });
});