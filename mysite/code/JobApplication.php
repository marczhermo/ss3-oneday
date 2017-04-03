<?php
class JobApplication extends DataObject {
    private static $db = [
        'Name' => 'Varchar(255)',
        'Email' => 'Varchar(255)',
        'Phone' => 'Varchar(255)',
        'Content' => 'Text',//Application
        'Status' => 'Enum("Applied, Short list, Unsuccessful, Hired", "Applied")'
    ];

    private static $has_one = [
        'Job' => 'Job'
    ];

    private static $summary_fields = [
        'Job.Reference' => 'Job Reference #',
        'Name' => 'Full name',
        'Email' => 'Email',
        'Phone' => 'Phone',
        'Status' => 'Status',
    ];

    public function canView($member = null)
    {
        return Permission::check('CMS_ACCESS_JobAdmin');
    }

    public function canEdit($member = null)
    {
        return Permission::check('CMS_ACCESS_JobAdmin');
    }

    public function canDelete($member = null)
    {
        return Permission::check('CMS_ACCESS_JobAdmin');
    }

    public function canCreate($member = null)
    {
        return Permission::check('CMS_ACCESS_JobAdmin');
    }
}
