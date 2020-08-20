<?php
declare(strict_types=1);

namespace App\Commands\UserList;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use App\Traits\TraitUserList;

class UserManagerCommand extends Command
{
    use TraitUserList;

    /** set defaultName var **/
    protected static $defaultName = 'user:manager';

    /**
     * Configure method
     *
     * @return void
     */
    protected function configure()
    {
        $this
            ->setDescription('Get manager permission list')
            ->setHelp('This command allows you get manager permission list')
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
