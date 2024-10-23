@extends('layout/main')
@section('content')
    <div class="row">
        <div class="seperator-header layout-top-spacing">
            <h4 class="">List of Task</h4>
        </div>
        <div>
            @if(session()->has('message'))
                <div class="alert alert-{{ session()->get('message')[0] }}">
                {{ session()->get('message')[1] }}
                </div>
            @endif
        </div>
        <div class=" text-end">
            <a href="{{ route('user.create') }}" class="btn btn-success"><i data-feather="plus"></i> Tambah</a>
        </div>
    </div>
    <div class="row layout-spacing">
        <div class="col-lg-12">
            <div class="statbox widget box box-shadow">
                <div class="widget-content widget-content-area">
                    <table id="datatable" class="table datatable dt-table-hover">
                        <thead>
                            <tr>
                                <th class="" scope="col"><b>No</b></th>
                                <th scope="col"><b>Username</b></th>
                                <th scope="col"><b>Status</b></th>
                                <th scope="col"><b>Role</b></th>
                                <th class="text-center" scope="col"><b>Tindakan</b></th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection  
@push('scripts')
    <script>
        // $(function () {
            
        //     var table = $('.datatable').DataTable({
        //         processing: true,
        //         serverSide: true,
        //         ajax: "{{ route('user.list') }}",
        //         columns: [
        //             {
        //                 data: 'DT_RowIndex',
        //                 name: 'DT_RowIndex',
        //                 width: '5%',
        //                 className: "text-center"
        //             },
        //             {
        //                 data: 'name',
        //                 name: 'name'
        //             },
        //             {
        //                 data: 'statue',
        //                 name: 'statue',
                        
        //                 className: "text-center"
        //             },
        //             {
        //                 data: 'role',
        //                 name: 'role',
                       
        //             },
        //             {
        //                 data: 'action',
        //                 name: 'action',
        //                 orderable: false,
        //                 searchable: false,
        //                 width: '10%',
        //                 className: "text-center"
        //             },
        //         ]
        //     });
        // });
        // function confirmDelete(deleteUrl) {
        //     Swal.fire({
        //         title: 'Are you sure?',
        //         text: "You won't be able to revert this!",
        //         icon: 'warning',
        //         showCancelButton: true,
        //         confirmButtonColor: '#3085d6',
        //         cancelButtonColor: '#d33',
        //         confirmButtonText: 'Yes, delete it!'
        //     }).then((result) => {
        //         if (result.isConfirmed) {
        //             window.location.href = deleteUrl;
        //         }
        //     })
        // }
        $(function () {
    var table = $('.datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('user.list') }}",
        columns: [
            {
                data: 'DT_RowIndex',
                name: 'DT_RowIndex',
                width: '5%',
                className: "text-center"
            },
            {
                data: 'name',
                name: 'name',
                width: '20%',
                className: "text-center"
            },
            {
                data: 'statue',
                name: 'statue',
                width: '15%',
                className: "text-center"
            },
            {
                data: 'role',
                name: 'role',
                width: '15%',
                className: "text-center"
            },
            {
                data: 'action',
                name: 'action',
                orderable: false,
                searchable: false,
                width: '15%',
                className: "text-center"
            },
        ],
        "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
            "<'table-responsive'tr>" +
            "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count mb-sm-0 mb-3'i><'dt--pagination'p>>",
        "oLanguage": {
            "oPaginate": { 
                "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', 
                "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' 
            },
            "sInfo": "Showing page _PAGE_ of _PAGES_",
            "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
            "sSearchPlaceholder": "Search...",
            "sLengthMenu": "Results :  _MENU_",
        },
        "stripeClasses": [],
        "lengthMenu": [5, 10, 20, 50],
        "pageLength": 10
    });

    // Call your multiCheck function, if needed
    multiCheck(table);
});

    </script>  
@endpush

