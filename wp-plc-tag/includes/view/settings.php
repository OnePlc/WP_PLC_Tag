<?php
?>
<div class="plc-admin">
    <div class="plc-settings-wrapper">
        <!-- Header START -->
        <div class="plc-settings-header">
            <div class="plc-settings-header-main">
                <div style="width:33%; text-align: left;">
                    <div class="plc-settings-header-main-title">
                        WP PLC Tag <small>Version <?=WPPLC_TAG_VERSION?></small>
                    </div>
                </div>
                <div style="width:33%; text-align: center;">
                    <img src="<?=WPPLC_TAG_PUB_DIR?>/assets/img/icon.png" style="max-height:42px;"/>
                </div>
                <div style="width:33%; text-align: right;">
                    Need help?
                </div>
            </div>
        </div>
        <!-- Header END -->
        <main class="plc-admin-main">
            <!-- Menu START -->
            <div class="plc-admin-menu-container">
                <nav class="plc-admin-menu" style="width:70%; float:left;">
                    <ul class="plc-admin-menu-list">
                        <li class="plc-admin-menu-list-item">
                            <a href="#/general">
                                <?=__('Settings','wp-plc-tag')?>
                            </a>
                        </li>
                        <?php if(get_option('plctag_elementor_active') == true) { ?>
                        <li class="plc-admin-menu-list-item">
                            <a href="#/elementor">
                                <?=__('Elementor','wp-plc-tag')?>
                            </a>
                        </li>
                        <?php } ?>
                    </ul>
                </nav>
                <div class="plc-admin-alert-container" style="float:left; width:30%; padding:40px 0 40px 0;">

                </div>
            </div>
            <!-- Menu END -->

            <!-- Content START -->
            <div class="plc-admin-page-container" style="width:100%; display: inline-block; float: left;">
                <?php
                // Include Settings Pages
                require_once __DIR__.'/settings/general.php';
                if(get_option('plctag_elementor_active') == 1) {
                    // Include Elementor Settings
                    require_once __DIR__.'/settings/elementor.php';
                }
                ?>
            </div>
            <!-- Content END -->
        </main>
    </div>
</div>