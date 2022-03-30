<script type="text/javascript">
    $(function () {
        var dataTable = $('#userManagement_datatable').DataTable({
            processing: true,
            serverSide: true,
            order: [],
            searchDelay: 500,
            "scrollX": "auto",
            // responsive: true,
            // "lengthChange": false,
            // "autoWidth": false,
            ajax: {
                url: '{{ route("usercrud::admin.user.index")}}',
                type: 'post',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: function (data) {
                        // data.fromValues = $("#filterProductType").serialize();
                },
                error: function(jqXHR, ajaxOptions, thrownError) {
                    displayAlertMsg(jqXHR, "alert-danger", false);
                },
            },
            columns: [
                {data: 'id', name: 'id', searchable: false, sortable: true},
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'contact_number', name: 'contact_number'},
                {data: 'action', name: 'action', searchable: false, sortable: false},
            ],
        });
    });
</script>