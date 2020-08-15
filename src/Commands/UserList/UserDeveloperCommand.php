<?php
namespace App\Commands\UserList;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use App\Traits\TraitUserList;

class UserDeveloperCommand extends Command
{
    use TraitUserList;

    /** set defaultName var **/
    protected static $defaultName = 'user:developer';

    /**
     * Configure method
     *
     * @return void
     */
    protected function configure()
    {
        $this
            ->setDescription('Get developer permission list')
            ->setHelp('This command allows you get developer permission list')
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
        $list = $this->getListOfPermissions(self::getDefaultName());

        $output->writeln($list);

        return Command::SUCCESS;
    }

}
