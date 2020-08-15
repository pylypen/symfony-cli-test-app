<?php
namespace App\Models;


class ManagerModel extends BaseModel
{
    /**
     * Set Permissions
     *
     * @return void
     */
    function __construct()
    {
        parent::activatePermission('can_set_tasks');
    }
}