<!-- jQuery -->
{{--
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
--}}

<!-- Bootstrap -->
{{--
<script src="{{ asset('plugins/bootstrap/bootstrap.bundle.js') }}"></script>
--}}

<!-- AdminLTE -->
{{--
<script src="{{ asset('dist/js/adminlte.js') }}"></script>
--}}

<!-- OPTIONAL SCRIPTS -->
{{--
<script src="{{ asset('dist/js/demo.js') }}"></script>
--}}

<!-- Scripts -->
{{--
<script src="{{ asset('js/app.js') }}"></script>
--}}
{{--
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
--}}
{{--
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
--}}

<!-- plugins:js -->
<script src="theme_2/vendors/js/vendor.bundle.base.js"></script>
<script src="theme_2/vendors/js/vendor.bundle.addons.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="theme_2/js/off-canvas.js"></script>
{{--
<script src="theme_2/js/miscx.js"></script>
--}}
<!-- endinject -->
<!-- Custom js for this page-->
<script src="theme_2/js/dashboard.js"></script>
<!-- End custom js for this page-->

<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.5.3/dist/sweetalert2.all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>



<script type="text/javascript">
    $(document).ready(function () {
        

      

        $('.retiro').on('click', function(){  
            $.get($(this).attr("data-url"), function(){
                location.reload();
             
            })
        });

        $('.retiro2').on('click', function(){ 
           
            const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
            })

            swalWithBootstrapButtons.fire({
            title: 'Mensaje de confirmación',
            text: "Desea revertir el proceso de asignación",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: '  Sí  ',
            cancelButtonText:  '  No  ',
            reverseButtons: true
            }).then((result) => {
            if (result.value) {

                $.get($(this).attr("data-url"), function(){
                location.reload();
                });
                swalWithBootstrapButtons.fire(
                'Proceso revertido correctamente',
                
                )
            } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire(
                'Cancelado',
               
                )
            }
            })

            
            
            // if (r == true) {
            //     $.get($(this).attr("data-url"), function(){
            //     location.reload();
            // })
            // } 

           
             
        // });

    })
        
    // guarda en localstorage el nombre del menu para luego volver a abrirlo
     var menu = localStorage.getItem('menu');
    
    $('.sidebar li a').each(function()
    {
        if($(this).text() == menu)
        {
            $(this).parents().each(function(){
                    $(this).parents().addClass('show');
                    $(this).addClass('active');
                    $(this).children('a').addClass('active');
                });
        }                 
    });

    $('.menu-title').on('click',function(){
      localStorage.setItem('menu-title',$(this).text());
    });


        $('.select2').select2();

        $('.datepicker').datepicker({
            format: 'dd-mm-yyyy'

        });

        $('#table').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
            }
        });

        var menu = localStorage.getItem('menu');

        $('.nav-link').each(function(){
            //console.log($(this).text());
            console.log(menu);
            if($(this).text() == menu)
            {
                $(this).parent().parent().addClass('active');
            }
        });

       /* $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });*/


        // guarda en localstorage el nombre del menu para luego volver a abrirlo

       /* $('.sidebar li a').each(function(){

            if($(this).text() == menu){
                if($(this).parent().hasClass('nav-treeview')){
                    $(this).parent().parent().toggle();
                    $(this).parent().parent().parent().addClass('menu-open');

                    $(this).addClass('active');
                }else
                    $(this).addClass('active');

            }
        });
*/

        $('.nav-link').on('click',function()
        {
            localStorage.setItem('menu',$(this).text());
        });
    });
</script>