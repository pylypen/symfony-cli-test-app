<?php
namespace App\Models;


class DesignerModel extends BaseModel
{
    /**
     * Set Permissions
     *
     * @return void
     */
    function __construct()
    {
        parent::activatePermission('can_communicate_with_manager');
        parent::activatePermission('can_draw');
    }
}