<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?=\yii\helpers\Url::home()?>" class="brand-link">
        <img src="<?=$assetDir?>/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLotto</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?=$assetDir?>/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">

            <?php
            echo \hail812\adminlte3\widgets\Menu::widget([
                'items' => 
                [
                    ['label' => 'ห้องประชุม','url' => ['/mr'],'iconStyle' => 'far'],
                    [
                        'label' =>'การแทง',
                        'items' => [
                            [
                                ['label' => 'ข้อมูลหน้าแรก','url' => ['site/about'],'iconStyle' => 'far'],
                                'label' => 'Level2',
                                'iconStyle' => 'far',
                                'items' => [
                                    ['label' => 'Level3', 'iconStyle' => 'far', 'icon' => 'dot-circle'],
                                    ['label' => 'Level3', 'iconStyle' => 'far', 'icon' => 'dot-circle'],
                                    ['label' => 'Level3', 'iconStyle' => 'far', 'icon' => 'dot-circle']
                                    ]
                                ],
                                ['label' => 'Level2', 'iconStyle' => 'far']
                                ]
                            ],
                    ['label' => 'ลูกค้า','url' => ['/crm'],'iconStyle' => 'far'],
                    [
                        'label' => 'การเงิน',
                        'icon' => 'tachometer-alt',
                        'badge' => '<span class="right badge badge-info">6</span>',
                        'items' => [
                            ['label' => 'หน้าหลัก', 'url' => ['/financial/default'], 'iconStyle' => 'far','class' => 'active'],
                            ['label' => 'ตั้งค่า', 'url' => ['/financial/configs'], 'iconStyle' => 'far'],
                            // ['label' => 'ยอดพนันตามประเภท', 'iconStyle' => 'far'],
                            // ['label' => 'ยอดพนันตามหมายเลข', 'iconStyle' => 'far'],
                            // ['label' => 'ยอดเติมพนันทั้งหมด', 'iconStyle' => 'far'],
                            // ['label' => 'ยอดพนันตามสมาชิก', 'iconStyle' => 'far'],
                        ]
                    ],
                    [
                        'label' => 'การจัดการสมาชิก',
                        'icon' => 'user-shield',
                        'badge' => '<span class="right badge badge-info">10</span>',
                        'items' => [
                            ['label' => 'เอเย่นต์', 'url' => ['tital/index'], 'iconStyle' => 'far','class' => 'active'],
                            ['label' => 'สมาชิก', 'iconStyle' => 'far'],
                            ['label' => 'ผังสายงาน', 'iconStyle' => 'far'],
                            ['label' => 'เครดิต', 'iconStyle' => 'far'],
                            ['label' => 'ถือสู้/แบ่งหุ่น', 'iconStyle' => 'far'],
                            ['label' => 'สูงสุด', 'iconStyle' => 'far'],
                            ['label' => 'อัตตราจ่าย', 'iconStyle' => 'far'],
                            ['label' => 'ส่วนลด', 'iconStyle' => 'far'],
                            ['label' => 'เปิด/ปิดตลาด', 'iconStyle' => 'far'],
                            ['label' => 'จัดการผู้ช่วย', 'iconStyle' => 'far'],
                        ]
                    ],
                    [
                        'label' => 'รายงานชนะสุธิ',
                        'icon' => 'thumbs-up',
                        'badge' => '<span class="right badge badge-info">10</span>',
                        'items' => [
                            ['label' => 'เอเย่นต์', 'url' => ['tital/index'], 'iconStyle' => 'far','class' => 'active'],
                            ['label' => 'สมาชิก', 'iconStyle' => 'far'],
                            ['label' => 'ผังสายงาน', 'iconStyle' => 'far'],
                            ['label' => 'เครดิต', 'iconStyle' => 'far'],
                            ['label' => 'ถือสู้/แบ่งหุ่น', 'iconStyle' => 'far'],
                            ['label' => 'สูงสุด', 'iconStyle' => 'far'],
                            ['label' => 'อัตตราจ่าย', 'iconStyle' => 'far'],
                            ['label' => 'ส่วนลด', 'iconStyle' => 'far'],
                            ['label' => 'เปิด/ปิดตลาด', 'iconStyle' => 'far'],
                            ['label' => 'จัดการผู้ช่วย', 'iconStyle' => 'far'],
                        ]
                    ],
                    [
                        'label' => 'บัญชี/การเงิน',
                        'icon' => 'file-invoice-dollar',
                        'badge' => '<span class="right badge badge-info">10</span>',
                        'items' => [
                            ['label' => 'เอเย่นต์', 'url' => ['tital/index'], 'iconStyle' => 'far','class' => 'active'],
                            ['label' => 'สมาชิก', 'iconStyle' => 'far'],
                            ['label' => 'ผังสายงาน', 'iconStyle' => 'far'],
                            ['label' => 'เครดิต', 'iconStyle' => 'far'],
                            ['label' => 'ถือสู้/แบ่งหุ่น', 'iconStyle' => 'far'],
                            ['label' => 'สูงสุด', 'iconStyle' => 'far'],
                            ['label' => 'อัตตราจ่าย', 'iconStyle' => 'far'],
                            ['label' => 'ส่วนลด', 'iconStyle' => 'far'],
                            ['label' => 'เปิด/ปิดตลาด', 'iconStyle' => 'far'],
                            ['label' => 'จัดการผู้ช่วย', 'iconStyle' => 'far'],
                        ]
                    ],
                    
                   
                    ['label' => 'Level1'],
                    ['label' => 'LABELS', 'header' => true],
                    ['label' => 'Important', 'iconStyle' => 'far', 'iconClassAdded' => 'text-danger'],
                    ['label' => 'Warning', 'iconClass' => 'nav-icon far fa-circle text-warning'],
                    ['label' => 'Informational', 'iconStyle' => 'far', 'iconClassAdded' => 'text-info'],
                ],
            ]);
            ?>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>