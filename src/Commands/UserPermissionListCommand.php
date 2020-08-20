<?php
declare(strict_types=1);

namespace App\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use App\Models\BaseModel;

class UserPermissionListCommand extends Command
{
    /** set defaultName var **/
    protected static $defaultName = 'user:permission-list';

    /**
     * Configure method
     *
     * @return void
     */
    protected function configure()
    {
        $this
            ->setDescription('Get all permission list')
            ->setHelp('This command allows you get all permission list')
        ;
    }

    /**
     * Execute method
     *
     * @param InputInterface $input
     * @param OutputInterface $output
     *
     * @return bool
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $model = new BaseModel();
        $list = $model->getAllListPermission();

        $output->writeln($list);

        return Command::SUCCESS;
    }

}
