<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <?= yii\helpers\Html::img('@web/img/user-icon.png',['class'=>'img-circle']);?>
            </div>
            <div class="pull-left info">
                <p><?=Yii::$app->user->identity->fullname ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    //['label' => Yii::t('app', 'Action Menu'), 'options' => ['class' => 'header']],
                    //['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii']],
                    //['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug']],
                    //['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                     ['label' => Yii::t('app', 'Laman Utama'), 'icon' => 'fa fa-dashboard', 'url' => ['/site/index'],],
                    [
                        'label' => Yii::t('app', 'Menu CMS'),
                        'icon' => 'fa fa-rocket',
                        'url' => '#',
                        'items' => [
                           
                             ['label' => Yii::t('app', 'Menu'), 'icon' => 'fa fa-list', 'url' => ['/menu/index'],],
                            ['label' => Yii::t('app', 'Parameter'), 'icon' => 'fa fa-list', 'url' => ['/refcat/index'],],
                        ],
                    ],
                    [
                        'label' => Yii::t('app', 'Menu Pentadbir'),
                        'icon' => 'fa fa-user-secret',
                        'url' => '#',
                        'items' => [
                            
                            [
                                'label' => Yii::t('app', 'Selenggara Pengguna'),
                                'icon' => 'fa fa-users',
                                'url' => '#',
                                'items' => [
                                    ['label' => Yii::t('app', 'Senarai Pengguna'), 'icon' => 'fa fa-circle-o', 'url' => ['/user/index'],],
//                                    ['label' => Yii::t('app', 'Pengguna Baru'), 'icon' => 'fa fa-user-plus', 'url' => ['/user/create'],],
                                ],
                            ],
                            [
                                'label' => Yii::t('app', 'Selenggara Role'),
                                'icon' => 'fa fa-key',
                                'url' => '#',
                                'items' => [
                                    ['label' => Yii::t('app', 'Senarai Role'), 'icon' => 'fa fa-circle-o', 'url' => ['/role/index'],],
//                                    ['label' => Yii::t('app', 'Role Baru'), 'icon' => 'fa fa-plus-square-o', 'url' => ['/role/create'],],
                                ],
                            ],
                             
                        ],
                    ],
                    [
                        'label' => Yii::t('app', 'Menu Pertubuhan'),
                        'icon' => 'fa fa-users',
                        'url' => '#',
                        'items' => [
                           
//                            [
//                                'label' => Yii::t('app', 'Selenggara Pertubuhan'),
//                                'icon' => 'fa fa-users',
//                                'url' => '#',
//                                'items' => [
//                                    ['label' => Yii::t('app', 'Senarai Pengguna'), 'icon' => 'fa fa-circle-o', 'url' => ['/user/index'],],
////                                    ['label' => Yii::t('app', 'Pengguna Baru'), 'icon' => 'fa fa-user-plus', 'url' => ['/user/create'],],
//                                ],
//                            ],
//                            [
//                                'label' => Yii::t('app', 'Selenggara Role'),
//                                'icon' => 'fa fa-key',
//                                'url' => '#',
//                                'items' => [
//                                    ['label' => Yii::t('app', 'Senarai Role'), 'icon' => 'fa fa-circle-o', 'url' => ['/role/index'],],
//                                    ['label' => Yii::t('app', 'Role Baru'), 'icon' => 'fa fa-plus-square-o', 'url' => ['/role/create'],],
//                                ],
//                            ],
                             
                        ],
                    ],
                     [
                        'label' => Yii::t('app', 'Menu Lawatan Tapak'),
                        'icon' => 'fa fa-flag',
                        'url' => '#',
                        'items' => [
                           
                            [
                                'label' => Yii::t('app', 'Selenggara Laporan'),
                                'icon' => 'fa fa-file-text',
                                'url' => '#',
                                'items' => [
                                    ['label' => Yii::t('app', 'Laporan Lawatan Tapak'), 'icon' => 'fa fa-circle-o', 'url' => ['/visiting-info/index'],],
//                                    ['label' => Yii::t('app', 'Pengguna Baru'), 'icon' => 'fa fa-user-plus', 'url' => ['/user/create'],],
                                ],
                            ],
//                            [
//                                'label' => Yii::t('app', 'Selenggara Role'),
//                                'icon' => 'fa fa-key',
//                                'url' => '#',
//                                'items' => [
//                                    ['label' => Yii::t('app', 'Senarai Role'), 'icon' => 'fa fa-circle-o', 'url' => ['/role/index'],],
//                                    ['label' => Yii::t('app', 'Role Baru'), 'icon' => 'fa fa-plus-square-o', 'url' => ['/role/create'],],
//                                ],
//                            ],
                             
                        ],
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>
