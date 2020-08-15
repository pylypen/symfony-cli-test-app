<?php
namespace App\Models;


class QAModel extends BaseModel
{
    /**
     * Set Permissions
     *
     * @return void
     */
    function __construct()
    {
        parent::activatePermission('can_test_code');
        parent::activatePermission('can_communicate_with_manager');
        parent::activatePermission('can_set_tasks');
    }
}