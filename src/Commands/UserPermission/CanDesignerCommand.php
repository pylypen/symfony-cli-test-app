<?php
namespace App\Commands\UserPermission;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use App\Traits\TraitUserList;

class CanDesignerCommand extends Command
{
    use TraitUserList;

    /** set defaultName var **/
    protected static $defaultName = 'can:designer';

    /**
     * Configure method
     *
     * @return void
     */
    protected function configure()
    {
        $this
            ->setDescription('Check designer permission')
            ->setHelp('This command allows you check designer permission')
            ->addArgument('permission', null, 'Permission name', 'anonymous')
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
        $list = $this->checkPermissions(self::getDefaultName(), $input->getArgument('permission'));

        $output->writeln($list);

        return Command::SUCCESS;
    }

}
