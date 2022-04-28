<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/logo.png">
    <!-- Libs CSS -->
    <link href="{{asset('assets/fonts/feather/feather.css')}}" rel="stylesheet">
    <link href="{{asset('assets/libs/bootstrap-icons/font/bootstrap-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/libs/dragula/dist/dragula.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/libs/%40mdi/font/css/materialdesignicons.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/libs/dropzone/dist/dropzone.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/libs/magnific-popup/dist/magnific-popup.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/libs/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/libs/%40yaireo/tagify/dist/tagify.css')}}" rel="stylesheet">
    <link href="{{asset('assets/libs/tiny-slider/dist/tiny-slider.css')}}" rel="stylesheet">
    <link href="{{asset('assets/libs/tippy.js/dist/tippy.css')}}" rel="stylesheet">
    <link href="{{asset('assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/libs/prismjs/themes/prism-okaidia.min.css')}}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/kushalcodes/konvert-table-to-card@main/konvert-table-to-card.min.js"
        type="text/javascript">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> -->

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/theme.min.css')}}">
    <title>RKU | Dashboard</title>
     @yield('title')
     
</head>

<body>
    <!-- Wrapper -->
    <div id="db-wrapper">
        <!-- navbar vertical -->
        <!-- Sidebar -->
       @include('layouts.sidebar')
        <!-- Page Content -->
        <div id="page-content">
           @include('layouts.header')
            <!-- Container fluid -->
            @yield('content')
        </div>
    </div>
                <!-- Scripts -->
                <!-- Libs JS -->
                <script src="{{asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>
                <script src="{{asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
                <script src="{{asset('assets/libs/odometer/odometer.min.js')}}"></script>
                <script src="{{asset('assets/libs/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
                <script src="{{asset('assets/libs/magnific-popup/dist/jquery.magnific-popup.min.js')}}"></script>
                <script src="{{asset('assets/libs/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
                <script src="{{asset('assets/libs/flatpickr/dist/flatpickr.min.js')}}"></script>
                <script src="{{asset('assets/libs/inputmask/dist/jquery.inputmask.min.js')}}"></script>
                <script src="{{asset('assets/libs/apexcharts/dist/apexcharts.min.js')}}"></script>
                <script src="{{asset('assets/libs/quill/dist/quill.min.js')}}"></script>
                <script src="{{asset('assets/libs/file-upload-with-preview/dist/file-upload-with-preview.min.js')}}"></script>
                <script src="{{asset('assets/libs/dragula/dist/dragula.min.js')}}"></script>
                <script src="{{asset('assets/libs/bs-stepper/dist/js/bs-stepper.min.js')}}"></script>
                <script src="{{asset('assets/libs/dropzone/dist/min/dropzone.min.js')}}"></script>
                <script src="assets/libs/jQuery.print/jQuery.print.js')}}"></script>
                <script src="{{asset('assets/libs/prismjs/prism.js')}}"></script>
                <script src="{{asset('assets/libs/prismjs/components/prism-scss.min.js')}}"></script>
                <script src="{{asset('assets/libs/%40yaireo/tagify/dist/tagify.min.js')}}"></script>
                <script src="{{asset('assets/libs/tiny-slider/dist/min/tiny-slider.js')}}"></script>
                <script src="{{asset('assets/libs/%40popperjs/core/dist/umd/popper.min.js')}}"></script>
                <script src="{{asset('assets/libs/tippy.js/dist/tippy-bundle.umd.min.js')}}"></script>
                <script src="{{asset('assets/libs/typed.js/lib/typed.min.js')}}"></script>
                <script src="{{asset('assets/libs/jsvectormap/dist/js/jsvectormap.min.js')}}"></script>
                <script src="{{asset('assets/libs/jsvectormap/dist/maps/world.js')}}"></script>
                <script src="{{asset('assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
                <script src="{{asset('assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js')}}"></script>
                <script src="{{asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
                <script src="{{asset('assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js')}}"></script>
                <script src="{{asset('assets/libs/prismjs/plugins/toolbar/prism-toolbar.min.js')}}"></script>
                <script src="{{asset('assets/libs/prismjs/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js')}}"></script>
                <script src="{{asset('assets/libs/fullcalendar/main.min.js')}}"></script>
                <!-- Theme JS -->
                 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js" integrity="sha512-YUkaLm+KJ5lQXDBdqBqk7EVhJAdxRnVdT2vtCzwPHSweCzyMgYV/tgGF4/dCyqtCC2eCphz0lRQgatGVdfR0ww==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                <script type="text/javascript">
                    var optionsUser = { 
                    success: function(response) 
                    {
                        $('.error-text').text('');
                        if($.isEmptyObject(response.error)){
                            window.location.href = response.redirectURL;
                        }else{
                            $('.all-error').find('.text-danger').remove();
                            $.each( response.error, function( key, value ) {
                                $.each( value, function( skey, svalue ) {
                                    $('.all-error').find('ul').append('<li class="text-danger">'+svalue+'</li>');
                                });
                            });
                        }
                    }
                };

                    $("body").on("click",".form-campus-submit",function(e){
                         e.preventDefault();
                        $(".form-campus").ajaxSubmit(optionsUser);
                    });
                </script>

                <script>$(document).ready(function () {

                        $('.table-responsive-stack').each(function (i) {
                            var id = $(this).attr('id');
                            //alert(id);
                            $(this).find("th").each(function (i) {
                                $('#' + id + ' td:nth-child(' + (i + 1) + ')').prepend('<span class="table-responsive-stack-thead">' + $(this).text() + ':</span> ');
                                $('.table-responsive-stack-thead').hide();
                            });
                        });

                        $('.table-responsive-stack').each(function () {
                            var thCount = $(this).find("th").length;
                            var rowGrow = 100 / thCount + '%';
                            //console.log(rowGrow);
                            $(this).find("th, td").css('flex-basis', rowGrow);
                        });




                        function flexTable() {
                            if ($(window).width() < 768) {

                                $(".table-responsive-stack").each(function (i) {
                                    $(this).find(".table-responsive-stack-thead").show();
                                    $(this).find('thead').hide();
                                });
                            } else {
                                $(".table-responsive-stack").each(function (i) {
                                    $(this).find(".table-responsive-stack-thead").hide();
                                    $(this).find('thead').show();
                                });
                            }
                            // flextable   
                        }

                        function flexTable2() {
                            if ($(window).width() < 768) {

                                $(document).ready(function () {
                                    $(this).find(".table-responsive-stack-thead1").hide();
                                    $(this).find('.displayCard').show();
                                });
                            } else {
                                $(document).ready(function () {
                                    $(this).find(".table-responsive-stack-thead1").show();
                                    $(this).find('.displayCard').hide();
                                });
                            }
                        }
                        flexTable();
                        flexTable2();
                        window.onresize = function (event) {
                            flexTable();
                        };






                        // document ready  
                    });</script>
                <script src="assets/js/theme.min.js"></script>
                <script
                    src="https://cdn.jsdelivr.net/gh/kushalcodes/konvert-table-to-card@main/konvert-table-to-card.min.js"></script>

                <script>
                    TABLE_KONVERTER.init(".test1", {
                        style: 'simple',
                        // stickyHeader: {
                        //   tableHeadingName: 'Action'
                        // }
                    });
                </script>
</body>

</html>