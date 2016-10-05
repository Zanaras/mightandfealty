<?php

namespace BM2\UpdateBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class UpdateCommand extends ContainerAwareCommand {
	
	protected function configure() {
		$this
			->setName('update:tweak')
			->setDescription('Use to apply minor changes to the database, like adding or removing an item or changing its values.')
		;
	}

}
