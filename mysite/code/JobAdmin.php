<?php
class JobAdmin extends ModelAdmin {

    private static $managed_models = array(
        'Job',
        // 'JobApplication'
    );

    private static $url_segment = 'job-application';

    private static $menu_title = 'Job Applications';

}
