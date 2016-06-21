<?php

namespace BM2\DungeonBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use BM2\DungeonBundle\Entity\DungeonType;


class LoadDungeonTypes extends AbstractFixture implements OrderedFixtureInterface {

// Available biomes for the biome sub-array below can be found in this file: BM2/SiteBundle/DataFixtures/ORM/LoadBiomeData.php

	private $dungeons = array(
		'glade'		=> array('rarity' => 25, 'minlevel' =>  1, 'minparty' =>  1, 'startdepth' => 1, 'available' => array('thin scrub', 'scrubland', 'marsh', 'forest', 'dense forest'), 'likely' => array('marsh', 'forest', 'dense forest')),
		'cave'		=> array('rarity' => 40, 'minlevel' =>  1, 'minparty' =>  1, 'startdepth' => 1, 'available' => array('grass', 'thin grass', 'thin scrub', 'scrubland', 'desert', 'marsh', 'forest', 'dense forest', 'rock'), 'likely' => array('forest', 'dense forest', 'desert', 'marsh', 'rock')),
		'wild'		=> array('rarity' => 10, 'minlevel' =>  1, 'minparty' =>  1, 'startdepth' => 1, 'available' => array('thin scrub', 'scrubland', 'marsh', 'forest', 'dense forest'), 'likely' => array('marsh', 'forest', 'dense forest')),
		'ruin'		=> array('rarity' => 50, 'minlevel' =>  1, 'minparty' =>  1, 'startdepth' => 1, 'available' => array('grass', 'thin grass', 'thin scrub', 'scrubland', 'desert', 'marsh', 'forest', 'dense forest', 'rock'), 'likely' => array('grass', 'thin grass', 'thin scrub', 'scrubland', 'desert', 'marsh', 'forest', 'dense forest', 'rock')),
		'hold'		=> array('rarity' => 40, 'minlevel' =>  1, 'minparty' =>  1, 'startdepth' => 1, 'available' => array('grass', 'thin grass', 'thin scrub', 'scrubland', 'desert', 'marsh', 'forest', 'dense forest', 'rock'), 'likely' => array('thin scrub', 'scrubland', 'marsh', 'forest', 'dense forest', 'rock')),
		'lab'		=> array('rarity' => 40, 'minlevel' =>  1, 'minparty' =>  1, 'startdepth' => 1, 'available' => array('desert', 'marsh', 'forest', 'dense forest', 'rock'), 'likely' => array('desert', 'dense forest')),
		'dungeon'	=> array('rarity' => 20, 'minlevel' =>  1, 'minparty' =>  1, 'startdepth' => 1, 'available' => array('grass', 'thin grass', 'thin scrub', 'scrubland', 'desert', 'marsh', 'forest', 'dense forest', 'rock'), 'likely' => array('grass', 'thin grass', 'thin scrub', 'scrubland', 'desert', 'marsh', 'forest', 'dense forest', 'rock')),
		'citadel'	=> array('rarity' =>  5, 'minlevel' =>  1, 'minparty' =>  1, 'startdepth' => 1, 'available' => array('desert', 'marsh', 'forest', 'dense forest', 'rock'), 'likely' => array('desert', 'marsh', 'forest', 'dense forest', 'rock')),
		'firstfort'	=> array('rarity' =>  5, 'minlevel' =>  1, 'minparty' => 10, 'startdepth' => 1, 'available' => array('grass', 'thin grass', 'thin scrub', 'scrubland', 'desert', 'marsh', 'forest', 'dense forest', 'rock'), 'likely' => array('grass', 'thin grass', 'thin scrub', 'scrubland', 'desert', 'marsh', 'forest', 'dense forest', 'rock')),
	);

	/**
	 * {@inheritDoc}
	 */
	public function getOrder() {
		return 1000; // or anywhere, really
	}

	/**
	 * {@inheritDoc}
	 */
	public function load(ObjectManager $manager) {
		foreach ($this->dungeons as $name=>$data) {
			$type = new DungeonMonsterType;
			$type->setName($name);
			$type->setRarity($data['rarity']);
			$type->setMinLevel($data['minlevels']);
			$type->setMinParty($data['minparty']);
			$type->setStartDepth($data['startdepth']);
			$manager->persist($type);
		}

		$manager->flush();
	}
}
