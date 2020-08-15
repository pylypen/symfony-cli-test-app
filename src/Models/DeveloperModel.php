<?php
namespace App\Models;


class DeveloperModel extends BaseModel
{
    /**
     * Set Permissions
     *
     * @return void
     */
    function __construct()
    {
        parent::activatePermission('can_write_code');
        parent::activatePermission('can_test_code');
        parent::activatePermission('can_communicate_with_manager');
    }
}