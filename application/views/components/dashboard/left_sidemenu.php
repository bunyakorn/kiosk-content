<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar toggle-sidebar">
    <div class="app-sidebar__user pb-0">
        <div class="user-body">
            <span class="avatar avatar-xxl brround text-center cover-image"
                data-image-src="assets/images/users/avatars/<?php echo $datauser->avatars;?>"></span>
        </div>
        <div class="user-info">
            <a href="" class="ml-2">
                <span
                    class="text-dark app-sidebar__user-name font-weight-semibold"><?php echo $datauser->fullname; ?></span>
                <br>
                <span class="text-muted app-sidebar__user-name text-sm">
                    <?php echo $datauser->department;?>
                </span>
            </a>
        </div>
    </div>

    <div class="tab-menu-heading siderbar-tabs border-0  p-0">
        <div class="tabs-menu ">
            <!-- Tabs -->
            <ul class="nav panel-tabs">
                <li class=""><a href="#index1" class="active" data-toggle="tab"><i class="ti-home fs-17"></i></a></li>
                <li><a href="#index2" data-toggle="tab"><i class="si si-envelope fs-17"></i></a></li>
                <li><a href="#index3" data-toggle="tab"><i class="ti-user fs-17"></i></a></li>
                <li><a href="<?php echo BASEURL;?>/admin/logout" title="logout"><i class="ti-power-off fs-17"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="panel-body tabs-menu-body side-tab-body p-0 border-0 ">
        <div class="tab-content">
            <div class="tab-pane active " id="index1">
                <ul class="side-menu toggle-menu">
                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide" href="#">
                            <i class="side-menu__icon typcn typcn-device-desktop"></i>
                            <span class="side-menu__label">หน้าหลัก</span><i class="angle fa fa-angle-right"></i>
                        </a>
                        <ul class="slide-menu">
                            <li><a class="slide-item" href="<?php echo BASEURL;?>/admin"><span>สรุปข้อมูลในระบบทั้งหมด</span></a></li>
                        </ul>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide" href="#">
                            <i class="side-menu__icon fa fa-file-image-o"></i>
                            <span class="side-menu__label">Poster -- โปสเตอร์</span><i
                                class="angle fa fa-angle-right"></i>
                        </a>
                        <ul class="slide-menu">
                            <li><a href="<?php echo BASEURL;?>/poster" class="slide-item"> เพิ่มข้อมูล ภาพโปสเตอร์ </a></li>
                            <li><a href="<?php echo BASEURL;?>/editPoster" class="slide-item"> แก้ไข - ลบ ภาพโปสเตอร์</a></li>
                            <li><a href="<?php echo BASEURL;?>/configPoster" class="slide-item"> ปรับแต่งการแสดงผล</a></li>
                        </ul>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide" href="#">
                            <i class="side-menu__icon fa fa-rss"></i>
                            <span class="side-menu__label">Hot News -- ข้อความวิ่ง</span><i
                                class="angle fa fa-angle-right"></i>
                        </a>
                        <ul class="slide-menu">
                            <li><a href="<?php echo BASEURL;?>/hotnews" class="slide-item"> เพิ่มข้อมูล Hot News </a></li>
                            <li><a href="<?php echo BASEURL;?>/editHotnews" class="slide-item"> แก้ไข - ลบ Hot News</a></li>
                            <li><a href="<?php echo BASEURL;?>/configHotnews" class="slide-item"> ปรับแต่งการแสดงผล</a></li>
                        </ul>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide" href="#">
                            <i class="side-menu__icon fa fa-film"></i>
                            <span class="side-menu__label">Multimedia -- มัลติมีเดีย</span><i
                                class="angle fa fa-angle-right"></i>
                        </a>
                        <ul class="slide-menu">
                            <li><a href="<?php echo BASEURL;?>/multimedia" class="slide-item"> เพิ่มข้อมูล มัลติมีเดีย </a></li>
                            <li><a href="<?php echo BASEURL;?>/editMultimedia" class="slide-item"> แก้ไข - ลบ มัลติมีเดีย</a></li>
                            <li><a href="<?php echo BASEURL;?>/configMultimedia" class="slide-item"> ปรับแต่งการแสดงผล</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="side-menu__item" href="<?php echo BASEURL;?>/profileAccount">
                            <i class="side-menu__icon fa fa-vcard-o"></i>
                            <span class="side-menu__label">โปรไฟล์ผู้ใช้งานระบบ</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="tab-pane border-top" id="index2" style="visibility: hidden;">
                <div class="list-group list-group-transparent mb-0 mail-inbox">
                    <div class="mt-3 mb-3 ml-3 mr-3 text-center">
                        <a href="#" class="btn btn-primary btn-block"><i class="typcn typcn-pencil fs-14"></i> <span
                                class="email-text">Compose</span></a>
                    </div>
                    <a href="#" class="list-group-item list-group-item-action d-flex align-items-center active">
                        <span class="icon mr-3"><i class="fe fe-inbox"></i></span><span class="email-text">Inbox</span>
                        <span class="ml-auto badge-pill badge badge-success email-text">05</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                        <span class="icon mr-3"><i class="fe fe-send"></i></span><span class="email-text">Sent
                            Mail</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                        <span class="icon mr-3"><i class="fe fe-alert-circle"></i></span><span
                            class="email-text">Important</span>
                        <span class="ml-auto badge-pill badge badge-danger email-text">01</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                        <span class="icon mr-3"><i class="fe fe-star"></i></span><span class="email-text">Starred</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                        <span class="icon mr-3"><i class="fe fe-file"></i></span><span class="email-text">Drafts</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                        <span class="icon mr-3"><i class="fe fe-tag"></i></span><span class="email-text">Tags</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                        <span class="icon mr-3"><i class="fe fe-trash-2"></i></span><span class="email-text">
                            Trash</span>
                    </a>
                </div>
            </div>
            <div class="tab-pane border-top" id="index3" style="visibility: hidden;">
                <div class="list-group list-group-flush ">
                    <form class="form-inline p-4 m-0">
                        <div class="search-element">
                            <input class="form-control header-search w-100" type="search" placeholder="Search..."
                                aria-label="Search">
                            <span class="Search-icon"><i class="fa fa-search"></i></span>
                        </div>
                    </form>
                    <div class="list-group-item d-flex  align-items-center">
                        <div class="mr-2">
                            <span class="avatar avatar-md brround cover-image"
                                data-image-src="assets/images/users/female/12.jpg"><span
                                    class="avatar-status bg-green"></span></span>
                        </div>
                        <div class="user-name">
                            <div class="font-weight-semibold">Mozelle Belt</div>
                        </div>
                    </div>
                    <div class="list-group-item d-flex  align-items-center">
                        <div class="mr-2">
                            <span class="avatar avatar-md brround cover-image"
                                data-image-src="assets/images/users/female/21.jpg"></span>
                        </div>
                        <div class="user-name">
                            <div class="font-weight-semibold">Florinda Carasco</div>
                        </div>
                    </div>
                    <div class="list-group-item d-flex  align-items-center">
                        <div class="mr-2">
                            <span class="avatar avatar-md brround cover-image"
                                data-image-src="assets/images/users/female/29.jpg"><span
                                    class="avatar-status bg-green"></span></span>
                        </div>
                        <div class="user-name">
                            <div class="font-weight-semibold">Alina Bernier</div>
                        </div>
                    </div>
                    <div class="list-group-item d-flex  align-items-center">
                        <div class="mr-2">
                            <span class="avatar avatar-md brround cover-image"
                                data-image-src="assets/images/users/female/2.jpg"><span
                                    class="avatar-status bg-green"></span></span>
                        </div>
                        <div class="user-name">
                            <div class="font-weight-semibold">Zula Mclaughin</div>
                        </div>
                    </div>
                    <div class="list-group-item d-flex  align-items-center">
                        <div class="mr-2">
                            <span class="avatar avatar-md brround cover-image"
                                data-image-src="assets/images/users/male/34.jpg"></span>
                        </div>
                        <div class="user-name">
                            <div class="font-weight-semibold">Isidro Heide</div>
                        </div>
                    </div>
                    <div class="list-group-item d-flex  align-items-center">
                        <div class="mr-2">
                            <span class="avatar avatar-md brround cover-image"
                                data-image-src="assets/images/users/male/12.jpg"><span
                                    class="avatar-status bg-green"></span></span>
                        </div>
                        <div class="user-name">
                            <div class="font-weight-semibold">Mozelle Belt</div>
                        </div>
                    </div>
                    <div class="list-group-item d-flex  align-items-center">
                        <div class="mr-2">
                            <span class="avatar avatar-md brround cover-image"
                                data-image-src="assets/images/users/male/21.jpg"></span>
                        </div>
                        <div class="user-name">
                            <div class="font-weight-semibold">Florinda Carasco</div>
                        </div>
                    </div>
                    <div class="list-group-item d-flex  align-items-center">
                        <div class="mr-2">
                            <span class="avatar avatar-md brround cover-image"
                                data-image-src="assets/images/users/male/29.jpg"></span>
                        </div>
                        <div class="user-name">
                            <div class="font-weight-semibold">Alina Bernier</div>
                        </div>
                    </div>
                    <div class="list-group-item d-flex  align-items-center">
                        <div class="mr-2">
                            <span class="avatar avatar-md brround cover-image"
                                data-image-src="assets/images/users/male/2.jpg"></span>
                        </div>
                        <div class="user-name">
                            <div class="font-weight-semibold">Zula Mclaughin</div>
                        </div>
                    </div>
                    <div class="list-group-item d-flex  align-items-center">
                        <div class="mr-2">
                            <span class="avatar avatar-md brround cover-image"
                                data-image-src="assets/images/users/female/14.jpg"><span
                                    class="avatar-status bg-green"></span></span>
                        </div>
                        <div class="user-name">
                            <div class="font-weight-semibold">Isidro Heide</div>
                        </div>
                    </div>
                    <div class="list-group-item d-flex  align-items-center">
                        <div class="mr-2">
                            <span class="avatar avatar-md brround cover-image"
                                data-image-src="assets/images/users/male/11.jpg"></span>
                        </div>
                        <div class="user-name">
                            <div class="font-weight-semibold">Florinda Carasco</div>
                        </div>
                    </div>
                    <div class="list-group-item d-flex  align-items-center">
                        <div class="mr-2">
                            <span class="avatar avatar-md brround cover-image"
                                data-image-src="assets/images/users/male/9.jpg"></span>
                        </div>
                        <div class="user-name">
                            <div class="font-weight-semibold">Alina Bernier</div>
                        </div>
                    </div>
                    <div class="list-group-item d-flex  align-items-center">
                        <div class="mr-2">
                            <span class="avatar avatar-md brround cover-image"
                                data-image-src="assets/images/users/male/22.jpg"><span
                                    class="avatar-status bg-green"></span></span>
                        </div>
                        <div class="user-name">
                            <div class="font-weight-semibold">Zula Mclaughin</div>
                        </div>
                    </div>
                    <div class="list-group-item d-flex  align-items-center">
                        <div class="mr-2">
                            <span class="avatar avatar-md brround cover-image"
                                data-image-src="assets/images/users/female/4.jpg"></span>
                        </div>
                        <div class="user-name">
                            <div class="font-weight-semibold">Isidro Heide</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>