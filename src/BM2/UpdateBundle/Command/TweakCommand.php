<?php

namespace BM2\UpdateBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class TweakCommand extends ContainerAwareCommand {
	
	protected function configure() {
		$this
			->setName('update:tweak')
			->setDescription('Use to apply minor changes to the database, like adding or removing an item or changing its values.')
			->addArgument(
				'files',
				InputArgument::IS_ARRAY | InputArgument::REQUIRED,
				'Please declare which file(s) to use? You can use multiple, but they must all update different data sets.'
			)
		;
	}
	protected function execute(InputInterface $input, OutputInterface $output) {
		# First we define $files as an array, and then add all 'files' submitted to it.
		$files = array();
		$files = $input->getArgument('files');
		# This array will come into play later, after we make sure files exist.
		$checked = array();
		# And now the fun begins. With this we check that there are actually files. I'm not sure it's actually possible to get to this without there being some form of argument submitted, but who knows.
		if ($files) {
			# If there are files, we need to do things to them individually.
			foreach ($files as $checkfile) {
				# Namely, make sure that what you submitted is actually a file. If not, we yell error you. :)
				# It should be stated, that this won't actually stop the command from continuing to run. 
				if (is_file(string $checkfile) == FALSE) {
					$text = 'ERROR! No file located at '.checkfile;
					$output->writeln($text);
					$text = 'Proceeding with update. . .';
					$output->writeln($text);
				} 
				# And if there is a file, we report we found it and add it to that array we made earlier.
				else {
					$text = 'File located at '.checkfile;
					$output->writeln($text);
					$checked[] = $checkfile;
					$text = 'Proceeding with update. . .';
					$output->writeln($text);
				}
			}
			/* Now that we've checked that the files exist and you aren't submitting a random string, 
			we need to figure out what they are and act on them. This next chunk of code processes all
			individual files depending on the $[DataType]Update array within them. */
			foreach ($checked as $update) {
				include ($update);
				switch (true) {
					# Checking for DungeonCards to be updated.
					case (isset($DungeonCardsUpdate)):
						
						break;
					# Checking for DungeonMonsters to be updated.	
					case (isset($DungeonMonstersUpdate)):
					
						break;
					
					# Yes, I know, these aren't in yet. I'm just saving myself some time later.
					case (isset($DungeonTypesUpdate)):
						
						break;
					# Checking for BiomeData to update.	
					case (isset($BiomeDataUpdate)):
						
						break;
					# Checking for BuildingData to update.
					case (isset($BuildingDataUpdate && $BuildingResourcesUpdate)):
						# And no, if you read this, I've not actually started on any of this part yet.
						# I literally just copied it from the forum topic. It's on the TODO list.
						$all = new ArrayCollection();
						foreach ($this->buildings as $name=>$data) {
						$type = $manager->getRepository('BM2SiteBundle:BuildingType')->findOneByName($name);
						if (!$type) {
							$type = new BuildingType();
							$manager->persist($type);
						}
						$type->setName($name);
						$type->setBuildHours($data['work']);
						$type->setAutoPopulation($data['auto'])->setMinPopulation($data['min']);
						$type->setPerPeople($data['ratio']);
						$type->setDefenses(isset($data['defenses'])?$data['defenses']:0);
						$type->setSpecialConditions(isset($data['conditions'])?true:false);
						if (isset($data['icon'])) {
							$type->setIcon($data['icon']);
						}
						$all->add($type);
						$this->addReference('buildingtype: '.strtolower($name), $type);
						foreach ($this->resources[$name] as $resourcename => $resourcedata) {
							$rt = $manager->getRepository('BM2SiteBundle:ResourceType')->findOneByName($resourcename);
							if (!$rt) {
								echo "can't find $resourcename needed by $name.\n";
							}
							$br = null;
							foreach ($type->getResources() as $r) {
								if ($r->getResourceType() == $rt) {
									$br = $r;
									break;
									}
								}
								if (!$br) {
									$br = new BuildingResource;
									$manager->persist($br);
								}
								$br->setBuildingType($type);
								$br->setResourceType($rt);
								$br->setRequiresConstruction(isset($resourcedata['construction'])?$resourcedata['construction']:0);
								$br->setRequiresOperation(isset($resourcedata['operation'])?$resourcedata['operation']:0);
								$br->setProvidesOperation(isset($resourcedata['provides'])?$resourcedata['provides']:0);
								$br->setProvidesOperationBonus(isset($resourcedata['bonus'])?$resourcedata['bonus']:0);
							}
						}
						// FIXME: this does not yet clean out old data (for updates)
						foreach ($this->buildings as $name=>$data) {
							if (isset($data['requires'])) {
								$me = $all->filter(function($type) use ($name) {
									return $type->getName() == $name;
									})->first();
								foreach ($data['requires'] as $requires) {
									$enabler = $all->filter(function($type) use ($requires) {
										return $type->getName() == $requires;
									})->first();
									if ($enabler) {
										if (!$me->getRequires()->contains($enabler)) {
											$me->getRequires()->add($enabler);
										}
									} else {
									echo "can't find $requires needed by $name.\n";
									}
								}
							}
						}
						$manager->flush();
						break;
					# Checking for EntourageData to update.	
					case (isset($EntourageDataUpdate)):
						
						break;
					# Checking for EquipmentData to update.	
					case (isset($EquipmentDataUpdate)):
						
						break;
					# Checking for FeatureData to update.	
					case (isset($FeatureDataUpdate)):
						
						break;
					# Checking for Names to update.	
					case (isset($NamesUpdate)):
						
						break;
					# Checking for PermissionsData to update.
					case (isset($PermissionDataUpdate)):
						
						break;
					# Checking for ResourceData to update.
					case (isset($ResourceDataUpdate)):
						
						break;
					# Checking for Settings to update.	
					case (isset($SettingsUpdate)):
						
						break;
					
					# And in case you had a bad $updatetype declared in the file we're pulling the info from . . .
					default:
						$text = 'ERROR! '.checkfile' does not have a compatible update type!.';
						$output->writeln($text);
						$text = 'Variable $updatetype should be set to the name of a DataFixture found in DataFixture/ORM minus the Load prefacing it.';
						$output->writeln($text);
						break;
				}
			}		
		} else {
			$text = 'I am not sure how you reached this message given that the command REQUIRES an argument, but bravo, a round of applause for you.';
			$output->writeln($text);
		}
        }
}
