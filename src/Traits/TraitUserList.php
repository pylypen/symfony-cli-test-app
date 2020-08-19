<?php
namespace App\Traits;

use App\Models\DesignerModel;
use App\Models\DeveloperModel;
use App\Models\ManagerModel;
use App\Models\QAModel;
use App\Models\BaseModel;

trait TraitUserList
{
    /**
     * Get List Of Permissions
     *
     * @param string $user
     *
     * @return array
     */
    private function getListOfPermissions(string $user) : array
    {
        $model = $this->generateModel($user);

        return $model->getListOfPermissions();
    }

    /**
     * Check Permissions
     *
     * @param string $user
     * @param string $permission
     *
     * @return string
     */
    private function checkPermissions(string $user, string $permission) : string
    {
        $model = $this->generateModel($user);


        return $model->checkListOfPermissions($permission) ? 'true' : 'false';
    }

    /**
     * Generate Model
     *
     * @param string $user
     *
     * @return BaseModel
     */
    private function generateModel(string $user) : BaseModel
    {

        switch ($user) {
            case 'user:developer':
            case 'can:developer':
                return new DeveloperModel;
                break;
            case 'user:designer':
            case 'can:designer':
                return new DesignerModel;
                break;
            case 'user:qa':
            case 'can:qa':
                return new QAModel;
                break;
            case 'user:manager':
            case 'can:manager':
                return new ManagerModel;
                break;
            default:
                return new BaseModel;
        }
    }

}