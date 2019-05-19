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
        <title>AdminBite admin Template - The Ultimate Multipurpose admin template</title>
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
           <div class="page-wrapper" style="display: block;">

            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Adicionar usuário</h4>
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
                                    <li class="breadcrumb-item active" aria-current="page">Adicionar usuário</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

             <div class="container-fluid">
               
               <div class="row">
                   <div class="col-12">
                       <div class="card card-body">
                           <h4 class="card-title">Adicionar usuário</h4>
                           <h5 class="card-subtitle"> Preencha os campos para adicionar um novo usuário </h5>
                           <div class="row">
                               <div class="col-sm-12 col-xs-12">
                                   <form method="post" action="usuarios/criar-usuario">
                                    @csrf
                                       <div class="form-group">
                                           <label for="exampleInputEmail111">Nome</label>
                                           <input type="text" class="form-control" id="exampleInputEmail111" placeholder="Nome do usuário" name="nome">
                                       </div>
                                       <div class="form-group">
                                           <label for="exampleInputEmail12">Email</label>
                                           <input type="email" class="form-control" id="exampleInputEmail12" placeholder="Email do usuário" name="email">
                                       </div>
                                       <div class="form-group">
                                           <label for="exampleInputPassword11">Senha</label>
                                           <input type="password" class="form-control" id="exampleInputPassword11" placeholder="Senha" name="senha">
                                       </div>

                                       <div class="col-md-6">
                                           <div class="form-group">
                                               <label class="control-label">Data de nascimento</label>
                                               <input type="date" class="form-control" name="dataNascimento">
                                           </div>
                                       </div>

                                       <!--

                                       <div class="form-group">
                                           <label for="exampleInputPassword12">Password</label>
                                           <input type="password" class="form-control" id="exampleInputPassword12" placeholder="Confirm Password">
                                       </div>

                                        -->                                       
                                       <button type="submit" class="btn btn-success mr-2">Adicionar</button>
                                       
                                   </form>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
             </div>
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
        <script src="../../dist/js/pages/datatable/datatable-advanced.init.js"></script>
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

