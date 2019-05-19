<!DOCTYPE html>
<html dir="ltr" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <base href="{{ asset('/') }}" />
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="../../favicon.png">
        <title>CNM - Desafio</title>
        <!-- This page plugin CSS -->
        <link href="../../assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="../../dist/css/style.min.css" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
            
            @include('header')
            

            @include('aside') 
            <!-- ============================================================== -->
            <!-- Page wrapper  -->
            <!-- ============================================================== -->
            <div class="page-wrapper">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="page-breadcrumb">
                    <div class="row">
                        <div class="col-5 align-self-center">
                            <h4 class="page-title">Lista de usuários</h4>
                            <div class="d-flex align-items-center">
                            </div>
                        </div>
                        <div class="col-7 align-self-center">
                            <div class="d-flex no-block justify-content-end align-items-center">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="#">Home</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">Usuários</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Container fluid  -->
                <!-- ============================================================== -->
                <div class="container-fluid">
                    <!-- ============================================================== -->
                    <!-- Start Page Content -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <!-- Column -->
                        <div class="col-lg-12 col-xl-12 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex no-block align-items-center m-b-30">
                                        <h4 class="card-title">Todos os usuários</h4>
                                        <!--<div class="ml-auto">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#createmodel">
                                                Adicionar novo usuário
                                                </button>
                                            </div>
                                        </div>-->
                                    </div>
                                    <div class="table-responsive">
                                        <table id="file_export" class="table table-bordered nowrap display">
                                            <thead>
                                                <tr>
                                                    <th> </th>
                                                    <th>Nome</th>
                                                    <th>Email</th>
                                                    <th>Data de Nascimento</th>
                                                    <th>Ações</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach($usuarios as $usuario)
                                                <tr>
                                                    <td>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customControlValidation2" required>
                                                            <label class="custom-control-label" for="customControlValidation2"></label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="app-contact-detail.html"><img src="../../assets/images/users/1.jpg" alt="user" class="rounded-circle" width="30" /> {{ $usuario -> nome}}</a>
                                                    </td>
                                                    <td>{{ $usuario -> email}}</td>
                                                    <td>{{ $usuario -> dataNascimento}}</td>
                                                    
                                                    <td>
                                                        <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn btn-primary" data-toggle="tooltip" data-original-title="Editar">Editar</button>

                                                        <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn btn-danger" data-toggle="tooltip" data-original-title="Excluir"><i class="ti-close" aria-hidden="true"></i></button>

                                                    </td>
                                                </tr>
                                                @endforeach
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <!-- Column -->
                       
                        <!-- Column -->
                    </div>
                    <!-- ============================================================== -->
                    <!-- End PAge Content -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Right sidebar -->
                    <!-- ============================================================== -->
                    <!-- .right-sidebar -->
                    <!-- ============================================================== -->
                    <!-- End Right sidebar -->
                    <!-- ============================================================== -->
                </div>
                <!-- Share Modal -->
                <div class="modal fade" id="Sharemodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form>
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"><i class="mdi mdi-auto-fix m-r-10"></i> Share With</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="input-group mb-3">
                                        <button type="button" class="btn btn-info"><i class="ti-user text-white"></i></button>
                                        <input type="text" class="form-control" placeholder="Enter Name Here" aria-label="Username">
                                    </div>
                                    <div class="row">
                                        <div class="col-3 text-center">
                                            <a href="#Whatsapp" class="text-success">
                                            <i class="display-6 mdi mdi-whatsapp"></i><br><span class="text-muted">Whatsapp</span>
                                            </a>
                                        </div>
                                        <div class="col-3 text-center">
                                            <a href="#Facebook" class="text-info">
                                            <i class="display-6 mdi mdi-facebook"></i><br><span class="text-muted">Facebook</span>
                                            </a>
                                        </div>
                                        <div class="col-3 text-center">
                                            <a href="#Instagram" class="text-danger">
                                            <i class="display-6 mdi mdi-instagram"></i><br><span class="text-muted">Instagram</span>
                                            </a>
                                        </div>
                                        <div class="col-3 text-center">
                                            <a href="#Skype" class="text-cyan">
                                            <i class="display-6 mdi mdi-skype"></i><br><span class="text-muted">Skype</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i> Send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Create Modal -->
                <div class="modal fade" id="createmodel" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form>
                                <div class="modal-header">
                                    <h5 class="modal-title" id="createModalLabel"><i class="ti-marker-alt m-r-10"></i> Create New Contact</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="input-group mb-3">
                                        <button type="button" class="btn btn-info"><i class="ti-user text-white"></i></button>
                                        <input type="text" class="form-control" placeholder="Enter Name Here" aria-label="name">
                                    </div>
                                    <div class="input-group mb-3">
                                        <button type="button" class="btn btn-info"><i class="ti-more text-white"></i></button>
                                        <input type="text" class="form-control" placeholder="Enter Mobile Number Here" aria-label="no">
                                    </div>
                                    <div class="input-group mb-3">
                                        <button type="button" class="btn btn-info"><i class="ti-import text-white"></i></button>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="inputGroupFile01">
                                            <label class="custom-file-label" for="inputGroupFile01">Choose Image</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success"><i class="ti-save"></i> Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Container fluid  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- footer -->
                <!-- ============================================================== -->
                <footer class="footer text-center">
                    Desenvolvido por Thiago Laranja para o desafio da CNM.
                </footer>
                <!-- ============================================================== -->
                <!-- End footer -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Page wrapper  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- customizer Panel -->
        <!-- ============================================================== -->
       
        <!-- ============================================================== -->
        <!-- All Jquery -->
        <!-- ============================================================== -->
        <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="../../assets/libs/popper.js/dist/umd/popper.min.js"></script>
        <script src="../../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- apps -->
        <script src="../../dist/js/app.min.js"></script>
        <script src="../../dist/js/app.init.dark.js"></script>
        <script src="../../dist/js/app-style-switcher.js"></script>
        <!-- slimscrollbar scrollbar JavaScript -->
        <script src="../../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
        <script src="../../assets/extra-libs/sparkline/sparkline.js"></script>
        <!--Wave Effects -->
        <script src="../../dist/js/waves.js"></script>
        <!--Menu sidebar -->
        <script src="../../dist/js/sidebarmenu.js"></script>
        <!--Custom JavaScript -->
        <script src="../../dist/js/custom.min.js"></script>
        <!--This page plugins -->
        <script src="../../assets/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <!-- start - This is for export functionality only -->
        <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
        <!--<script src="../../dist/js/pages/datatable/datatable-advanced.init.js"></script>-->
        <script type="text/javascript">
            /*************************************************************************************/
            // -->Template Name: Bootstrap Press Admin
            // -->Author: Themedesigner
            // -->Email: niravjoshi87@gmail.com
            // -->File: datatable_advanced_init
            /*************************************************************************************/

            //=============================================//
            //    File export                              //
            //=============================================//
            $('#file_export').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    { extend: 'copy', text: 'Copiar' }, { extend: 'csv', text: 'Exportar em csv' }, { extend: 'excel', text: 'Exportar em Excel' }, { extend: 'pdf', text: 'Exportar em PDF' }, { extend: 'print', text: 'Imprimir' }
                ]
            });
            $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');

            //==================================================//
            //  Show / hide columns dynamically                 //
            //==================================================//

            var table = $('#show_hide_col').DataTable({
                "scrollY": "200px",
                "paging": false
            });

            $('a.toggle-vis').on('click', function(e) {
                e.preventDefault();

                // Get the column API object
                /*var column = table.column($(this).attr('data-column'));*/
                var column = $('#show_hide_col').dataTable().api().column($(this).attr('data-column'));
                // Toggle the visibility
                column.visible(!column.visible());
            });

            //=============================================//
            //    Column rendering                         //
            //=============================================//
            $('#col_render').DataTable({
                "columnDefs": [{
                        // The `data` parameter refers to the data for the cell (defined by the
                        // `data` option, which defaults to the column being worked with, in
                        // this case `data: 0`.
                        "render": function(data, type, row) {
                            return data + ' (' + row[3] + ')';
                        },
                        "targets": 0
                    },
                    { "visible": false, "targets": [3] }
                ]
            });

            //=============================================//
            //     Row grouping                            //
            //=============================================//
            var table = $('#row_group').DataTable({
                "pageLength": 10,
                "columnDefs": [
                    { "visible": false, "targets": 2 }
                ],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({ page: 'current' }).nodes();
                    var last = null;

                    api.column(2, { page: 'current' }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before(
                                '<tr class="group"><td colspan="5">' + group + '</td></tr>'
                            );

                            last = group;
                        }
                    });
                }
            });

            //=============================================//
            // Order by the grouping
            //=============================================//
            $('#row_group tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });

            //=============================================//
            //    Multiple table control element           //
            //=============================================//
            $('#multi_control').DataTable({
                "dom": '<"top"iflp<"clear">>rt<"bottom"iflp<"clear">>'
            });

            //=============================================//
            //    DOM/jquery events                        //
            //=============================================//
            var table = $('#dom_jq_event').DataTable();

            $('#dom_jq_event tbody').on('click', 'tr', function() {
                var data = table.row(this).data();
                alert('You clicked on ' + data[0] + '\'s row');
            });

            //=============================================//
            //    Language File                            //
            //=============================================//
            $('#lang_file').DataTable({
                "language": {
                    "url": "dist/js/pages/datatable/German.json"
                }
            });

            //=============================================//
            //    Complex headers with column visibility   //
            //=============================================//

            $('#complex_head_col').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": -1
                }]
            });

            //=============================================//
            //    Setting defaults                         //
            //=============================================//
            var defaults = {
                "searching": false,
                "ordering": false
            };

            $('#setting_defaults').dataTable($.extend(true, {}, defaults, {}));



            //=============================================//
            //    Footer callback                          //
            //=============================================//
            $('#footer_callback').DataTable({
                "footerCallback": function(row, data, start, end, display) {
                    var api = this.api(),
                        data;

                    // Remove the formatting to get integer data for summation
                    var intVal = function(i) {
                        return typeof i === 'string' ?
                            i.replace(/[\$,]/g, '') * 1 :
                            typeof i === 'number' ?
                            i : 0;
                    };

                    // Total over all pages
                    total = api
                        .column(4)
                        .data()
                        .reduce(function(a, b) {
                            return intVal(a) + intVal(b);
                        }, 0);

                    // Total over this page
                    pageTotal = api
                        .column(4, { page: 'current' })
                        .data()
                        .reduce(function(a, b) {
                            return intVal(a) + intVal(b);
                        }, 0);

                    // Update footer
                    $(api.column(4).footer()).html(
                        '$' + pageTotal + ' ( $' + total + ' total)'
                    );
                }
            });

            //=============================================//
            //    Custom toolbar elements                  //
            //=============================================//

            $('#custom_tool_ele').DataTable({
                "dom": '<"toolbar">frtip'
            });

            $("div.toolbar").html('<b>Custom tool bar! Text/images etc.</b>');


            //=============================================//
            //    Row created callback                     //
            //=============================================//
            $('#row_create_call').DataTable({
                "createdRow": function(row, data, index) {
                    if (data[5].replace(/[\$,]/g, '') * 1 > 150000) {
                        $('td', row).eq(5).addClass('highlight');
                    }
                }
            });
        </script>
    </body>
</html> 


<style type="text/css">
	.left-sidebar {
		background: #005bab!important;
	}

	#main-wrapper[data-layout=vertical] .left-sidebar[data-sidebarbg=skin5], #main-wrapper[data-layout=vertical] .left-sidebar[data-sidebarbg=skin5] ul, #main-wrapper[data-layout=horizontal] .left-sidebar[data-sidebarbg=skin5], #main-wrapper[data-layout=horizontal] .left-sidebar[data-sidebarbg=skin5] ul {
	   background: #005bab!important;
	}

	#main-wrapper[data-layout=vertical] .topbar .navbar-collapse[data-navbarbg=skin1], #main-wrapper[data-layout=vertical] .topbar[data-navbarbg=skin1], #main-wrapper[data-layout=horizontal] .topbar .navbar-collapse[data-navbarbg=skin1], #main-wrapper[data-layout=horizontal] .topbar[data-navbarbg=skin1] {
	    background: #005bab;
	}

	#main-wrapper[data-layout=vertical] .topbar .top-navbar .navbar-header[data-logobg=skin5], #main-wrapper[data-layout=horizontal] .topbar .top-navbar .navbar-header[data-logobg=skin5] {
	    background: #005bab;
	}

	.logo-text {
		padding-top: 15px;
		display: block;
		margin: 0 auto;
	}
</style>

