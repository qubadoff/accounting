function add() {
    $.confirm({
        title: 'Prompt!',
        content: '' +
            '<form action="" class="formName">' +
            '<div class="form-group">' +
            '<label>Enter something here</label>' +
            '<input type="text" placeholder="Your name" class="name form-control" required />' +
            '</div>' +
            '</form>',
        buttons: {
            formSubmit: {
                text: 'Submit',
                btnClass: 'btn-blue',
                action: function() {
                    var name = this.$content.find('.name').val();
                    if (!name) {
                        $.alert('provide a valid name');
                        return false;
                    }
                    $.alert('Your name is ' + name);
                }
            },
            cancel: function() {
                //close
            },
        },
        onContentReady: function() {
            // bind to events
            var jc = this;
            this.$content.find('form').on('submit', function(e) {
                // if the user submits the form by pressing enter in the field.
                e.preventDefault();
                jc.$$formSubmit.trigger('click'); // reference the button and click it
            });
        }
    });
}


$(function() {

    var table = $('.yajra-datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('emp.listing') }}",
        columns: [
            { data: 'name', name: 'name' },
            { data: 'description', name: 'description' },
            { data: 'created_at', name: 'salcreated_atary' },
            {
                data: 'action',
                name: 'action',
                orderable: true,
                searchable: true
            },
        ]
    });

});