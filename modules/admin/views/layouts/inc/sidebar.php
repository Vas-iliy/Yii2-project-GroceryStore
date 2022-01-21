<?php

use yii\helpers\Url;

?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?=Yii::$app->user->identity->username?></a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="active">
                    <a href="<?=Url::to()?>">
                        <i class="fa fa-link"></i>
                        <span>Статистика магазина</span>
                    </a>
                </li><li class="active">
                    <a href="<?=Url::to(['order/index'])?>">
                        <i class="fa fa-link"></i>
                        <span>Заказы</span>
                    </a>
                </li>
                <li class="nav-item menu-is-opening menu-open">
                    <i class="fa fa-link"></i>
                    <span>Категории</span>
                    <i class="right fas fa-angle-left"></i>
                    <ul class="nav nav-treeview" style="display: block;">
                        <li><a href="<?=Url::to(['category/index'])?>">Список категорий</a></li>
                        <li><a href="<?=Url::to(['category/create'])?>">Добавить категорию</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="<?=Url::to(['auth/logout'])?>" class="nav-link">
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>