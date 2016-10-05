<?php

namespace BM2\UpdateBundle\Command;

use BM2\UpdateBundle\Entity\Baseline;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class BaselineCommand extends ContainerAwareCommand {

	protected function configure() {
		$this
			->setName('update:baseline')
			->setDescription('Finds and records the current fixtures and tables baseline. Run before any schema update.')
		;
	}
	
}
