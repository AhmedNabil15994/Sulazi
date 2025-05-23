'use strict';

// Class definition
var KTDualListbox = function() {

  // Private functions
  var initDualListbox = function() {
    // Dual Listbox
    var listBoxes = $('.kt-dual-listbox');

    listBoxes.each(function() {
      var $this = $(this);
      // get titles
      var availableTitle = ($this.attr('data-available-title') != null) ? $this.attr('data-available-title') : 'Available options';
      var selectedTitle = ($this.attr('data-selected-title') != null) ? $this.attr('data-selected-title') : 'Selected options';

      // get button labels
      var addLabel = ($this.attr('data-add') != null) ? $this.attr('data-add') : 'Add';
      var removeLabel = ($this.attr('data-remove') != null) ? $this.attr('data-remove') : 'Remove';
      var addAllLabel = ($this.attr('data-add-all') != null) ? $this.attr('data-add-all') : 'Add All';
      var removeAllLabel = ($this.attr('data-remove-all') != null) ? $this.attr('data-remove-all') : 'Remove All';

      // get options
      var options = [];
      $this.children('option').each(function() {
        var value = $(this).val();
        var label = $(this).text();
        var selected = !!($(this).is(':selected'));
        options.push({text: label, value: value, selected: selected});
      });

      // get search option
      var search = ($this.attr('data-search') != null) ? $this.attr('data-search') : '';

      // clear duplicates
      $this.empty();

      // init dual listbox
      var dualListBox = new DualListbox($this.get(0), {
        addEvent: function(value) {
          if(value == 27){
            $('#required_work-32').hide();
            $('#required_work-31').hide();
            $('#required_work-27').show();
            $('button[data-target="#kt_modal_KTDatatable_remote"]').click();
          }else if (value == 31) {
            $('#required_work-32').hide();
            $('#required_work-31').show();
            $('#required_work-27').hide();
            $('button[data-target="#kt_modal_KTDatatable_remote"]').click();
          }else if (value == 32) {
            $('#required_work-32').show();
            $('#required_work-31').hide();
            $('#required_work-27').hide();
            $('button[data-target="#kt_modal_KTDatatable_remote"]').click();
          }
        },
        removeEvent: function(value) {
          console.log(value);
        },
        availableTitle: availableTitle,
        selectedTitle: selectedTitle,
        addButtonText: addLabel,
        removeButtonText: removeLabel,
        removeAllButtonText: removeAllLabel,
        options: options,
      });

      if (search == 'false') {
        dualListBox.search.classList.add('dual-listbox__search--hidden');
      }
    });
  };

  return {
    // public functions
    init: function() {
      initDualListbox();
    },
  };
}();

KTUtil.ready(function() {
  KTDualListbox.init();
});
