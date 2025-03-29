<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <!-- Logo -->
    <div class="sidebar-logo active">
        <a href="index.html" class="logo logo-normal">
            <img src="{{asset('admin')}}/assets/img/logo.svg" alt="Img">
        </a>
        <a href="index.html" class="logo logo-white">
            <img src="{{asset('admin')}}/assets/img/logo-white.svg" alt="Img">
        </a>
        <a href="index.html" class="logo-small">
            <img src="{{asset('admin')}}/assets/img/logo-small.png" alt="Img">
        </a>
        <a id="toggle_btn" href="javascript:void(0);">
            <i data-feather="chevrons-left" class="feather-16"></i>
        </a>
    </div>
    <!-- /Logo -->
    <div class="modern-profile p-3 pb-0">
        <div class="text-center rounded bg-light p-3 mb-4 user-profile">
            <div class="avatar avatar-lg online mb-3">
                <img src="{{asset('admin')}}/assets/img/customer/customer15.jpg" alt="Img" class="img-fluid rounded-circle">
            </div>
            <h6 class="fs-14 fw-bold mb-1">Adrian Herman</h6>
            <p class="fs-12 mb-0">System Admin</p>
        </div>
        <div class="sidebar-nav mb-3">
            <ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded nav-justified bg-transparent" role="tablist">
                <li class="nav-item"><a class="nav-link active border-0" href="#">Menu</a></li>
                <li class="nav-item"><a class="nav-link border-0" href="chat.html">Chats</a></li>
                <li class="nav-item"><a class="nav-link border-0" href="email.html">Inbox</a></li>
            </ul>
        </div>
    </div>
    <div class="sidebar-header p-3 pb-0 pt-2">
        <div class="text-center rounded bg-light p-2 mb-4 sidebar-profile d-flex align-items-center">
            <div class="avatar avatar-md onlin">
                <img src="{{asset('admin')}}/assets/img/customer/customer15.jpg" alt="Img" class="img-fluid rounded-circle">
            </div>
            <div class="text-start sidebar-profile-info ms-2">
                <h6 class="fs-14 fw-bold mb-1">Adrian Herman</h6>
                <p class="fs-12">System Admin</p>
            </div>
        </div>
        <div class="d-flex align-items-center justify-content-between menu-item mb-3">
            <div>
                <a href="index.html" class="btn btn-sm btn-icon bg-light">
                    <i class="ti ti-layout-grid-remove"></i>
                </a>
            </div>
            <div>
                <a href="chat.html" class="btn btn-sm btn-icon bg-light">
                    <i class="ti ti-brand-hipchat"></i>
                </a>
            </div>
            <div>
                <a href="email.html" class="btn btn-sm btn-icon bg-light position-relative">
                    <i class="ti ti-message"></i>
                </a>
            </div>
            <div class="notification-item">
                <a href="activities.html" class="btn btn-sm btn-icon bg-light position-relative">
                    <i class="ti ti-bell"></i>
                    <span class="notification-status-dot"></span>
                </a>
            </div>
            <div class="me-0">
                <a href="general-settings.html" class="btn btn-sm btn-icon bg-light">
                    <i class="ti ti-settings"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Comptabilité</h6>
                    <ul>
                        <li class="">
                            <a href="{{url('/')}}" class="active"><i class="ti ti-layout-grid fs-16 me-2"></i><span>Tableau de bord </span></a>

                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><i class="ti ti-user-edit fs-16 me-2"></i><span>Paiements </span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{url('/admin/paiements/add')}}">Ajouter </a></li>
                                <li><a href="{{url('/admin/paiements/index')}}">Tous les paiements </a></li>

                                <li><a href="{{url('/admin/paiements/recouvrement')}}">Recouvrements </a></li>
                                <li><a href="{{url('/admin/paiements/cheques')}}">Cheques </a></li>
                                <li><a href="{{url('/admin/paiements/espaces')}}">Espaces </a></li>
                                <li><a href="{{url('/admin/paiements/parents')}}">Parents  </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><i class="ti ti-brand-apple-arcade fs-16 me-2"></i><span>Caisses </span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="">Encaisser  </a></li>

                                <li><a href="{{url('/admin/caisses/depenses')}}">Toutes les caisses </a></li>
                                <li><a href="{{url('/admin/caisses/index')}}">Dépenses </a></li>
                                <li><a href="{{url('/admin/caisses/encaissements')}}">Tous les encaissements </a></li>
                                <li><a href="{{url('/admin/caisses/decaissements')}}">Tous les déc&issements </a></li>
                                <li><a href="{{url('/admin/caisses/journaux')}}">Journaux </a></li>

                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><i class="ti ti-layout-sidebar-right-collapse fs-16 me-2"></i><span>Ecoles</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{url('/admin/cycles/index')}}">Cycles </a></li>
                                <li><a href="{{url('/admin/niveaux/index')}}">Niveaux </a></li>
                                <li><a href="{{url('/admin/classes/index')}}">Classes </a></li>
                                <li><a href="{{url('/admin/eleves/index')}}">Eleves   </a></li>

                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Cantine</h6>
                    <ul>
                        <li><a href="{{url('/admin/cantine/inscrits')}}"><i data-feather="box"></i><span>Inscrits </span></a></li>
                        <li><a href="{{url('/admin/achats/index')}}"><i class="ti ti-table-plus fs-16 me-2"></i><span>Achats </span></a></li>

                        <li><a href="{{url('/admin/cantine/mouvements')}}"><i class="ti ti-progress-alert fs-16 me-2"></i><span>Mouvements </span></a></li>

                        <li><a href="{{url('/admin/ventes/index')}}"><i class="ti ti-trending-up-2 fs-16 me-2"></i><span>Ventes </span></a></li>

                        <li><a href="{{url('/admin/magasins/index')}}"><i class="ti ti-list-details fs-16 me-2"></i><span>Magasins </span></a></li>

                        <li><a href="{{url('/admin/boutiques/index')}}"><i class="ti ti-carousel-vertical fs-16 me-2"></i><span>Boutiques </span></a></li>
                        
                        <li><a href="{{url('/admin/fournisseurs/index')}}"><i class="ti ti-triangles fs-16 me-2"></i><span>Fournisseurs </span></a></li>


                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Bus </h6>
                    <ul>
                        <li><a href="{{url('/admin/bus/inscrits')}}"><i class="ti ti-stack-3 fs-16 me-2"></i><span>Inscrits </span></a></li>
                        <li><a href="{{url('/admin/zones/index')}}"><i class="ti ti-stairs-up fs-16 me-2"></i><span>Gestion des zones </span></a></li>
                        <li><a href="{{url('/admin/lignes/index')}}"><i class="ti ti-stack-pop fs-16 me-2"></i><span>Gestion des lignes </span></a></li>
                        <li><a href="{{url('/admin/voitures/index')}}"><i class="ti ti-stack-pop fs-16 me-2"></i><span>Gestion des voitures  </span></a></li>
                        <li><a href="{{url('/admin/bus/chauffeurs')}}"><i class="ti ti-stack-pop fs-16 me-2"></i><span>Gestion des chauffeurs   </span></a></li>
                        <li><a href="{{url('/admin/bus/affectations')}}"><i class="ti ti-stack-pop fs-16 me-2"></i><span>Gestion des affectations    </span></a></li>
                        <li><a href="{{url('/admin/depensesvoitures/index')}}"><i class="ti ti-stack-pop fs-16 me-2"></i><span>Gestion des depenses     </span></a></li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Statistiques </h6>
                    <ul>

                        <li><a href="{{url('/admin/statitiques/paiement')}}"><i class="ti ti-file-invoice fs-16 me-2"></i><span>Paiements </span></a></li>
                        <li><a href="{{url('/admin/statitiques/recouvrements')}}"><i class="ti ti-receipt-refund fs-16 me-2"></i><span>Recouvrements </span></a></li>
                        <li><a href="{{url('/admin/statistiques/eleves')}}"><i class="ti ti-files fs-16 me-2"></i><span>Eleves  </span></a></li>
                        <li><a href="{{url('/admin/statistiques/cantine')}}"><i class="ti ti-files fs-16 me-2"></i><span>Cantines  </span></a></li>
                        <li><a href="{{url('/admin/statistiques/bus')}}"><i class="ti ti-files fs-16 me-2"></i><span>Bus   </span></a></li>
                        <li><a href="{{url('/admin/statistiques/autreservices')}}"><i class="ti ti-files fs-16 me-2"></i><span>Autres services   </span></a></li>
                        <li><a href="{{url('/admin/statistiques/decaissement')}}"><i class="ti ti-files fs-16 me-2"></i><span>Décaissements   </span></a></li>
                        <li><a href="{{url('/admin/statistiques/valider')}}"><i class="ti ti-files fs-16 me-2"></i><span>Valider un décaissement    </span></a></li>

                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Parametres </h6>
                    <ul>
                        <li><a href="{{url('/admin/annees/index')}}"><i class="ti ti-ticket fs-16 me-2"></i><span>Années scolaires </span></a></li>
                        <li><a href="{{url('/admin/vaccins/index')}}"><i class="ti ti-cards fs-16 me-2"></i><span>Vaccins </span></a></li>
                        <li><a href="{{url('/admin/specialites/index')}}"><i class="ti ti-cards fs-16 me-2"></i><span>Specialtés </span></a></li>
                        <li><a href="{{url('/admin/utilisateurs/index')}}"><i class="ti ti-cards fs-16 me-2"></i><span>Utilisateurs </span></a></li>
                        <li><a href="{{url('/admin/roles/index')}}"><i class="ti ti-cards fs-16 me-2"></i><span>Roles </span></a></li>

                    </ul>
                </li>

            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->
