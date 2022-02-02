<div class="app-header header d-flex">
    <div class="container-fluid">
        <div class="d-flex">
            <a class="header-brand" href="">
                <img src="assets/images/brand/logo2.png" class="header-brand-img main-logo" alt="Control Panel">
                <img src="assets/images/brand/icon2.png" class="header-brand-img icon-logo" alt="Control Panel">
            </a><!-- logo-->
            <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a>
            
            <?php
                $datauser = $data[0];
            ?>
            
            
            <div class="d-flex order-lg-2 ml-auto header-rightmenu">
                <div class="dropdown">
                    <a  class="nav-link icon full-screen-link" id="fullscreen-button" title="Click to full screen">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-collection" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M14.5 13.5h-13A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5zm-13 1A1.5 1.5 0 0 1 0 13V6a1.5 1.5 0 0 1 1.5-1.5h13A1.5 1.5 0 0 1 16 6v7a1.5 1.5 0 0 1-1.5 1.5h-13zM2 3a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11A.5.5 0 0 0 2 3zm2-2a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7A.5.5 0 0 0 4 1z"/>
                        </svg>
                    </a>
                </div><!-- full-screen -->
                <div class="dropdown header-notify">
                    <a class="nav-link icon" data-toggle="dropdown" aria-expanded="false">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bell" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2z"/>
                            <path fill-rule="evenodd" d="M8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
                        </svg>
                        <span class="pulse bg-success"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow ">
                        <a href="#" class="dropdown-item text-center">4 New Notifications</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item d-flex pb-3">
                            <div class="notifyimg bg-green">
                                <i class="fe fe-mail"></i>
                            </div>
                            <div>
                                <strong>Message Sent.</strong>
                                <div class="small text-muted">12 mins ago</div>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item d-flex pb-3">
                            <div class="notifyimg bg-pink">
                                <i class="fe fe-shopping-cart"></i>
                            </div>
                            <div>
                                <strong>Order Placed</strong>
                                <div class="small text-muted">2  hour ago</div>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item d-flex pb-3">
                            <div class="notifyimg bg-blue">
                                <i class="fe fe-calendar"></i>
                            </div>
                            <div>
                                <strong> Event Started</strong>
                                <div class="small text-muted">1  hour ago</div>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item d-flex pb-3">
                            <div class="notifyimg bg-orange">
                                <i class="fe fe-monitor"></i>
                            </div>
                            <div>
                                <strong>Your Admin Lanuch</strong>
                                <div class="small text-muted">2  days ago</div>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item text-center">View all Notifications</a>
                    </div>
                </div><!-- notifications -->
                <div class="dropdown header-user">
                    <a class="nav-link leading-none siderbar-link"  data-toggle="sidebar-right" data-target=".sidebar-right">
                        <span class="mr-3 d-none d-lg-block ">
                            <span class="text-gray-white">
                                <span class="ml-2">
                                    <?php echo $datauser->status;?>
                                </span>
                            </span>
                        </span>
                        <span class="avatar avatar-md brround">
                            <img src="assets/images/users/avatars/<?php echo $datauser->avatars;?>" alt="Profile-img" class="avatar avatar-md brround">
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <div class="header-user text-center mt-4 pb-4">
                            <span class="avatar avatar-xxl brround">
                                <img src="assets/images/users/avatars/<?php echo $datauser->avatars;?>" alt="Profile-img" class="avatar avatar-xxl brround">
                            </span>
                            <a href="" class="dropdown-item text-center font-weight-semibold user h3 mb-0"><?php echo $datauser->fullname;?></a>
                            <small><?php echo $datauser->department;?></small>
                        </div>
                        <a class="dropdown-item" href="#">
                            <i class="dropdown-icon mdi mdi-account-outline "></i> Spruko technologies
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="dropdown-icon  mdi mdi-account-plus"></i> Add another Account
                        </a>
                        <div class="card-body border-top">
                            <div class="row">
                                <div class="col-6 text-center">
                                    <a class="" href=""><i class="dropdown-icon mdi  mdi-message-outline fs-30 m-0 leading-tight"></i></a>
                                    <div>Inbox</div>
                                </div>
                                <div class="col-6 text-center">
                                    <a class="" href="<?php echo BASEURL;?>/admin/logout"><i class="dropdown-icon mdi mdi-logout-variant fs-30 m-0 leading-tight"></i></a>
                                    <div>Sign out</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- profile -->
                <div class="dropdown">
                    <a  class="nav-link icon siderbar-link" data-toggle="sidebar-right" data-target=".sidebar-right">
                        <!-- <i class="fe fe-more-horizontal"></i> -->
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-gear" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8.837 1.626c-.246-.835-1.428-.835-1.674 0l-.094.319A1.873 1.873 0 0 1 4.377 3.06l-.292-.16c-.764-.415-1.6.42-1.184 1.185l.159.292a1.873 1.873 0 0 1-1.115 2.692l-.319.094c-.835.246-.835 1.428 0 1.674l.319.094a1.873 1.873 0 0 1 1.115 2.693l-.16.291c-.415.764.42 1.6 1.185 1.184l.292-.159a1.873 1.873 0 0 1 2.692 1.116l.094.318c.246.835 1.428.835 1.674 0l.094-.319a1.873 1.873 0 0 1 2.693-1.115l.291.16c.764.415 1.6-.42 1.184-1.185l-.159-.291a1.873 1.873 0 0 1 1.116-2.693l.318-.094c.835-.246.835-1.428 0-1.674l-.319-.094a1.873 1.873 0 0 1-1.115-2.692l.16-.292c.415-.764-.42-1.6-1.185-1.184l-.291.159A1.873 1.873 0 0 1 8.93 1.945l-.094-.319zm-2.633-.283c.527-1.79 3.065-1.79 3.592 0l.094.319a.873.873 0 0 0 1.255.52l.292-.16c1.64-.892 3.434.901 2.54 2.541l-.159.292a.873.873 0 0 0 .52 1.255l.319.094c1.79.527 1.79 3.065 0 3.592l-.319.094a.873.873 0 0 0-.52 1.255l.16.292c.893 1.64-.902 3.434-2.541 2.54l-.292-.159a.873.873 0 0 0-1.255.52l-.094.319c-.527 1.79-3.065 1.79-3.592 0l-.094-.319a.873.873 0 0 0-1.255-.52l-.292.16c-1.64.893-3.433-.902-2.54-2.541l.159-.292a.873.873 0 0 0-.52-1.255l-.319-.094c-1.79-.527-1.79-3.065 0-3.592l.319-.094a.873.873 0 0 0 .52-1.255l-.16-.292c-.892-1.64.902-3.433 2.541-2.54l.292.159a.873.873 0 0 0 1.255-.52l.094-.319z"/>
                            <path fill-rule="evenodd" d="M8 5.754a2.246 2.246 0 1 0 0 4.492 2.246 2.246 0 0 0 0-4.492zM4.754 8a3.246 3.246 0 1 1 6.492 0 3.246 3.246 0 0 1-6.492 0z"/>
                        </svg>
                    </a>
                </div><!-- Right-siebar-->
            </div>
        </div>
    </div>
</div>


<!-- ======================================== -->
<!-- =============Right-sidebar============== -->
<!-- ======================================== -->

<!-- Right-sidebar-->
<div class="sidebar sidebar-right sidebar-animate">
    <div class="tab-menu-heading siderbar-tabs border-0">
        <div class="text-center">
                Tools Panel == โหมดเครื่องมือ
        </div>
    </div>
    <div class="panel-body tabs-menu-body side-tab-body p-0 border-0 ">
        <div class="tab-content border-top">
            <div class="tab-pane active " id="tab">
                <div class="card-body p-0">
                    <div class="header-user text-center mt-4 pb-4">
                        <span class="avatar avatar-xxl brround">
                            <img src="assets/images/users/avatars/<?php echo $datauser->avatars;?>" alt="Profile-img" class="avatar avatar-xxl brround">
                        </span>
                        <div class="dropdown-item text-center font-weight-semibold user h3 mb-0"><?php echo $datauser->fullname;?></div>
                        <small><?php echo $datauser->department;?></small>
                    </div>
                    <a class="dropdown-item  border-top" href="#">
                        <i class="dropdown-icon mdi mdi-account-outline "></i> ดูรายชื่อเจ้าหน้าที่ทั้งหมด
                    </a>
                    <a class="dropdown-item border-top" href="#">
                        <i class="dropdown-icon  mdi mdi-account-plus"></i> เพิ่มบัญชีผู้ใช้งาน (Admin)
                    </a>
                    <div class="card-body border-top">
                        <div class="row">
                            <div class="col-4 text-center">
                                <a class="" href="<?php echo BASEURL;?>/admin"><i class="dropdown-icon mdi  mdi-message-outline fs-30 m-0 leading-tight"></i></a>
                                <div>Home</div>
                            </div>
                            <div class="col-4 text-center">
                                <a class="" href="<?php echo BASEURL;?>/setting"><i class="dropdown-icon mdi mdi-tune fs-30 m-0 leading-tight"></i></a>
                                <div>Settings</div>
                            </div>
                            <div class="col-4 text-center">
                                <a class="" href="<?php echo BASEURL;?>/admin/logout"><i class="dropdown-icon mdi mdi-logout-variant fs-30 m-0 leading-tight"></i></a>
                                <div>Sign out</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- End Rightsidebar-->