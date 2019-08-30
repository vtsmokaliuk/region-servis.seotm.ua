<?php
use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo \Yii::$app->request->baseUrl;?>/dist/images/favicon.png">
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<?= Alert::widget() ?>
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
<div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full" data-boxed-layout="full">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar" data-navbarbg="skin6">
        <nav class="navbar top-navbar navbar-expand-md navbar-light">
            <div class="navbar-header" data-logobg="skin5">
                <!-- This is for the sidebar toggle which is visible on mobile only -->
                <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                    <i class="ti-menu ti-close"></i>
                </a>
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-brand">
                    <a href="index.html" class="logo">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="<?php echo \Yii::$app->request->baseUrl;?>/dist/images/logo-icon.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="<?php echo \Yii::$app->request->baseUrl;?>/dist/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                                <!-- dark Logo text -->
                                <img src="<?php echo \Yii::$app->request->baseUrl;?>/dist/images/logo-text.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo text -->
                                <img src="<?php echo \Yii::$app->request->baseUrl;?>/dist/images/logo-light-text.png" class="light-logo" alt="homepage" />
                            </span>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Toggle which is visible on mobile only -->
                <!-- ============================================================== -->
                <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent"
                   aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="ti-more"></i>
                </a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin6">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav float-left mr-auto">
                    <!-- ============================================================== -->
                    <!-- Search -->
                    <!-- ============================================================== -->
                    <li class="nav-item search-box">
                        <a class="nav-link waves-effect waves-dark" href="javascript:void(0)">
                            <div class="d-flex align-items-center">
                                <i class="mdi mdi-magnify font-20 mr-1"></i>
                                <div class="ml-1 d-none d-sm-block">
                                    <span>Search</span>
                                </div>
                            </div>
                        </a>
                        <form class="app-search position-absolute">
                            <input type="text" class="form-control" placeholder="Search &amp; enter">
                            <a class="srh-btn">
                                <i class="ti-close"></i>
                            </a>
                        </form>
                    </li>
                </ul>
                <!-- ============================================================== -->
                <!-- Right side toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav float-right">
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="<?php echo \Yii::$app->request->baseUrl;?>/dist/images/users/2.jpg" alt="user" class="rounded-circle" width="31">
                            <span class="m-l-5 d-none d-sm-inline-block"><?=\common\models\UserSettings::getUserName()?><i class="mdi mdi-chevron-down"></i></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right user-dd animated">
                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet m-r-5 m-l-5"></i> My Balance</a>
                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email m-r-5 m-l-5"></i> Inbox</a>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                </ul>
            </div>
        </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <aside class="left-sidebar" data-sidebarbg="skin5">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/admin" aria-expanded="false">
                            <i class="mdi mdi-av-timer"></i>
                            <span class="hide-menu"><?=Yii::t('admin', 'Админпанель')?></span>
                        </a>
                    </li>
                    <li class="nav-small-cap">
                        <i class="mdi mdi-dots-horizontal"></i>
                        <span class="hide-menu"><?=Yii::t('admin', 'Продажи')?></span>
                    </li>
                    <li class="sidebar-item">
                        <a href="/admin/order" class="sidebar-link">
                            <i class="mdi mdi-shopping"></i>
                            <span class="hide-menu"><?=Yii::t('admin', 'Заказы')?></span>
                            <span class="badge badge-pill badge-info ml-auto m-r-15"><?=\backend\models\Order::getNewOrderCount()?></span>
                        </a>
                        <a href="/admin/rent" class="sidebar-link">
                            <i class="mdi mdi-cart-plus"></i>
                            <span class="hide-menu"><?=Yii::t('admin', 'Аренда инструмента')?></span>
                            <span class="badge badge-pill badge-info ml-auto m-r-15"><?=\backend\models\OrderRent::getNewOrderCount()?></span>
                        </a>
                    </li>
                    <li class="nav-small-cap">
                        <i class="mdi mdi-dots-horizontal"></i>
                        <span class="hide-menu"><?=Yii::t('admin', 'Контент')?></span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"  aria-expanded="false">
                            <i class="mdi mdi-checkbox-multiple-blank-outline"></i>
                            <span class="hide-menu"><?=Yii::t('admin', 'Материалы')?></span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a href="/admin/material" class="sidebar-link">
                                    <i class="mdi mdi-format-align-left"></i>
                                    <span class="hide-menu"><?=Yii::t('admin', 'Все материалы')?></span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="/admin/material/create" class="sidebar-link">
                                    <i class="mdi mdi-shape-square-plus"></i>
                                    <span class="hide-menu"><?=Yii::t('admin', 'Добавить материал')?></span>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"  aria-expanded="false">
                            <i class="mdi mdi-checkbox-multiple-blank-outline"></i>
                            <span class="hide-menu"><?=Yii::t('admin', 'Секции')?></span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a href="/admin/section" class="sidebar-link">
                                    <i class="mdi mdi-format-align-left"></i>
                                    <span class="hide-menu"><?=Yii::t('admin', 'Все секции')?></span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="/admin/section/create" class="sidebar-link">
                                    <i class="mdi mdi-shape-square-plus"></i>
                                    <span class="hide-menu"><?=Yii::t('admin', 'Добавить секцию')?></span>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-small-cap">
                        <i class="mdi mdi-dots-horizontal"></i>
                        <span class="hide-menu"> <?=Yii::t('admin', 'Каталог')?></span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"  aria-expanded="false">
                            <i class="mdi mdi-cart-outline"></i>
                            <span class="hide-menu"><?=Yii::t('admin', 'Магазин')?></span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a href="/admin/category" class="sidebar-link">
                                    <i class="mdi mdi-format-align-left"></i>
                                    <span class="hide-menu"><?=Yii::t('admin', 'Категории')?></span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="/admin/product" class="sidebar-link">
                                    <i class="mdi mdi-cards-variant"></i>
                                    <span class="hide-menu"><?=Yii::t('admin', 'Товары')?></span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="/admin/attribute" class="sidebar-link">
                                    <i class="mdi mdi-clipboard-check"></i>
                                    <span class="hide-menu"><?=Yii::t('admin', 'Атрибуты')?></span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="/admin/group" class="sidebar-link">
                                    <i class="mdi mdi-camera-burst"></i>
                                    <span class="hide-menu"><?=Yii::t('admin', 'Группа атрибутов')?></span>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="/admin/delivery" class="sidebar-link">
                            <i class="mdi mdi-truck-delivery"></i>
                            <span class="hide-menu"><?=Yii::t('admin', 'Доставка')?></span>
                        </a>
                    </li>
                    <li class="nav-small-cap">
                        <i class="mdi mdi-dots-horizontal"></i>
                        <span class="hide-menu"> <?=Yii::t('admin', 'Медиа')?></span>
                    </li>
                    <li class="sidebar-item">
                        <a href="/admin/filemanager/file/index" class="sidebar-link">
                            <i class="mdi mdi-folder-multiple-image"></i>
                            <span class="hide-menu"><?=Yii::t('admin', 'Менеджер изображений')?></span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="/admin/banner" class="sidebar-link">
                            <i class="mdi mdi-folder-image"></i>
                            <span class="hide-menu"><?=Yii::t('admin', 'Баннеры')?></span>
                        </a>
                    </li>
                    <li class="nav-small-cap">
                        <i class="mdi mdi-dots-horizontal"></i>
                        <span class="hide-menu"> <?=Yii::t('admin', 'Система')?></span>
                    </li>
                    <li class="sidebar-item">
                        <a href="/admin/system" class="sidebar-link">
                            <i class="mdi mdi-tune"></i>
                            <span class="hide-menu"><?=Yii::t('admin', 'Настройки')?></span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="/admin/block" class="sidebar-link">
                            <i class="mdi mdi-layers"></i>
                            <span class="hide-menu"><?=Yii::t('admin', 'Блоки')?></span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="/admin/menu" class="sidebar-link">
                            <i class="mdi mdi-sort-variant"></i>
                            <span class="hide-menu"><?=Yii::t('admin', 'Меню')?></span>
                        </a>
                    </li>



<!--                    <li class="sidebar-item">-->
<!--                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="pages-profile.html" aria-expanded="false">-->
<!--                            <i class="mdi mdi-account-network"></i>-->
<!--                            <span class="hide-menu">Profile</span>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li class="sidebar-item">-->
<!--                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="table-basic.html" aria-expanded="false">-->
<!--                            <i class="mdi mdi-border-none"></i>-->
<!--                            <span class="hide-menu">Table</span>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li class="sidebar-item">-->
<!--                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="icon-material.html" aria-expanded="false">-->
<!--                            <i class="mdi mdi-face"></i>-->
<!--                            <span class="hide-menu">Icon</span>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li class="sidebar-item">-->
<!--                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="starter-kit.html" aria-expanded="false">-->
<!--                            <i class="mdi mdi-file"></i>-->
<!--                            <span class="hide-menu">Blank</span>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li class="sidebar-item">-->
<!--                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="error-404.html" aria-expanded="false">-->
<!--                            <i class="mdi mdi-alert-outline"></i>-->
<!--                            <span class="hide-menu">404</span>-->
<!--                        </a>-->
<!--                    </li>-->
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
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
                    <h4 class="page-title"><?=$this->title?></h4>
                </div>
                <div class="col-7 align-self-center">
                    <div class="d-flex align-items-center justify-content-end">
                        <?=Breadcrumbs::widget([
                            'itemTemplate' => "<li class='breadcrumb-item'>{link}</li>\n",
                            'activeItemTemplate' => "<li class='breadcrumb-item active'>{link}</li>\n",
                            'homeLink' => ['label' => Yii::t('admin','Админпанель'), 'url' => ['/']],
                            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                        ]) ?>
                        <?php if(!empty($this->params['createBtn']))echo $this->params['createBtn'];?>
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
            <!-- Email campaign chart -->
            <!-- ============================================================== -->
            <?=$content?>
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer text-center">
          <p>2019</p>

        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>


           

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
