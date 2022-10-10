
    jQuery.ajaxSetup({


        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }


});
        jQuery.noConflict();
       
        
        var table = jQuery('#manager').DataTable({
            ajax: '/user',
            serverSide: true,
            processing: true,
            aaSorting:[[0,"asc"]],
            columns: [
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
              
                {data: 'action', name: 'action'},
            ]
        });


    
            

        jQuery(document).on('click','.btn-delete',function(){
            if(!confirm("Are you sure?")) return;

            var rowid = jQuery(this).data('rowid')
            var el = jQuery(this)
            if(!rowid) return;
            
           
            jQuery.ajax({
                type: "POST",
                dataType: 'JSON',
                url: "user/"+rowid,
                data: {_method: 'delete'},
                success: function (data) {
                    if (data.success) {
                        table.row(el.parents('tr'))
                            .remove()
                            .draw();
                    }
                }
            }); //end ajax
        })

    