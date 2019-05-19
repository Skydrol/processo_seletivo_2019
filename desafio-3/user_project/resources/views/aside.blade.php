<!-- ============================================================== -->
            <!-- Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->
            <aside class="left-sidebar">
                <!-- Sidebar scroll-->
                <div class="scroll-sidebar">
                    <!-- Sidebar navigation-->
                    <nav class="sidebar-nav">
                        <ul id="sidebarnav">
                           
                            <!-- User Profile-->
                            <li class="nav-small-cap">
                                <i class="mdi mdi-dots-horizontal"></i>
                                <span class="hide-menu">Dashboard</span>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="icon-Add-User"></i>
                                <span class="hide-menu">Usuários </span>
                                </a>
                                <ul aria-expanded="false" class="collapse  first-level">
                                    <li class="sidebar-item">
                                        <a href="{{ url('/') }}" class="sidebar-link">
                                        <i class="icon-Record"></i>
                                        <span class="hide-menu"> Todos Usuários </span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="{{ url('/adicionar-usuario') }}" class="sidebar-link">
                                        <i class="icon-Record"></i>
                                        <span class="hide-menu"> Adicionar usuário </span>
                                        </a>
                                    </li>
                                    
                                </ul>
                            </li>                            
                        </ul>
                    </nav>
                    <!-- End Sidebar navigation -->
                </div>
                <!-- End Sidebar scroll-->
            </aside>
            <!-- ============================================================== -->
            <!-- End Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->