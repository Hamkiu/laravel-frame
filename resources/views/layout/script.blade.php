
  
         <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
        <script src="{{asset('template/src/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('template/src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
        <script src="{{asset('template/src/plugins/src/mousetrap/mousetrap.min.js')}}"></script>
        <script src="{{asset('template/src/plugins/src/waves/waves.min.js')}}"></script>
        <script src="{{asset('template/layouts/vertical-light-menu/app.js')}}"></script>
        <script src="{{asset('template/src/plugins/src/global/vendors.min.js')}}"></script>
        <script src="{{asset('template/src/assets/js/custom.js')}}"></script>
        <script src="https://unpkg.com/feather-icons"></script>
        <!-- END GLOBAL MANDATORY SCRIPTS -->

        <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="{{asset('template/src/plugins/src/apex/apexcharts.min.js')}}"></script>
        <script src="{{asset('template/src/assets/js/dashboard/dash_1.js')}}"></script>
        <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        {{-- <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script> --}}

        <script src="{{asset('template/src/plugins/src/table/datatable/datatables.js')}}"></script>

        <script>
            feather.replace();
            ClassicEditor
                .create( document.querySelector( '#editor' ))
                .then( editor => {
                    console.log (editor);
                } )
                .catch( error => {
                    console.error( error );
                } );
        </script>
        <script>
            function viewPreview(gambar, idpreview){
                var gb = gambar.files;
                for(var i = 0; i<gb.length; i++){
                    var gbPreview = gb[i];
                    var imageType = /image.*/;
                    var preview = document.getElementById(idpreview);
                    var reader = new FileReader();
                    if(gbPreview.type.match(imageType)){
                        preview.file = gbPreview;
                        reader.onload = (function (element){
                            return function (e){
                                element.src = e.target.result;
                            };
                        })(preview)
                        reader.readAsDataURL(gbPreview);
                    }else{
                        alert("Type file tidak sesuai.");
                    }
                }
            }
        </script>
        <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
        @stack('scripts')