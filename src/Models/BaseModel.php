<?php
namespace App\Models;


class BaseModel
{
    /** Permissions vars **/
    private $can_write_code = 0;
    private $can_test_code = 0;
    private $can_communicate_with_manager = 0;
    private $can_draw = 0;
    private $can_set_tasks = 0;

    /** Permissions list **/
    private $list_of_permissions = [
         'can_write_code' => '- code writing',
         'can_test_code' => '- code testing',
         'can_communicate_with_manager' => '- communication with manager',
         'can_draw' => '- draw',
         'can_set_tasks' => '- set tasks',
    ];

    /**
     * Get All List Permission
     *
     * @return array
     */
    public function getAllListPermission() : array
    {
        return $this->list_of_permissions;
    }

    /**
     * Activate Permission
     *
     * @param string $permission
     *
     * @return void
     */
    protected function activatePermission($permission): void
    {
        $this->$permission = 1;
    }

    /**
     * Get List Of Permissions
     *
     * @return array
     */
    public function getListOfPermissions() : array
    {
        $list = [];

        foreach ($this->list_of_permissions as $key => $permission) {
            if ($this->$key) {
                $list[] = $permission;
            }
        }

        return $list;
    }

    /**
     * Check List Of Permissions
     *
     * @param string $permission
     *
     * @return bool
     */
    public function checkListOfPermissions($permission) : bool
    {
        foreach ($this->list_of_permissions as $key => $val) {
            $clear = strtolower(str_replace(['can', '_'], '', $key));

            if ($clear == strtolower($permission) && $this->$key) {
                return true;
            }
        }

        return false;
    }

}