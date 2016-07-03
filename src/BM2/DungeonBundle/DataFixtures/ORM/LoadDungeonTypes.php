<?php

namespace BM2\DungeonBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use BM2\DungeonBundle\Entity\DungeonType;

/* 
Available biomes for the biome sub-array below can be found in this file: BM2/SiteBundle/DataFixtures/ORM/LoadBiomeData.php
Rarity in this case, is that higher numbers are more common. River, Lake, and Ocean are all true/false, written as 1/0 (respectively)
because I happen to like numbers. These are used to determine whether a particular dungeon is available for choosing when a new
dungeon is created. --Andrew
*/

class LoadDungeonTypes extends AbstractFixture implements OrderedFixtureInterface {

	private $dungeons = array(
		'glade'		=> array('rarity' =>  20, 'minlevel' =>  1, 'minparty' =>  2, 'startdepth' =>  1, 'river' => 0, 'lake' => 0, 'ocean' => 0, 'available' => array('thin scrub', 'scrubland', 'marsh', 'forest', 'dense forest'), 'likely' => array('marsh', 'forest', 'dense forest')),
		'cave'		=> array('rarity' =>   5, 'minlevel' =>  3, 'minparty' =>  2, 'startdepth' =>  1, 'river' => 0, 'lake' => 0, 'ocean' => 0, 'available' => array('grass', 'thin grass', 'thin scrub', 'scrubland', 'desert', 'marsh', 'forest', 'dense forest', 'rock'), 'likely' => array('forest', 'dense forest', 'desert', 'marsh', 'rock')),
		'wild'		=> array('rarity' =>  10, 'minlevel' =>  2, 'minparty' =>  2, 'startdepth' =>  2, 'river' => 0, 'lake' => 0, 'ocean' => 0, 'available' => array('thin scrub', 'scrubland', 'marsh', 'forest', 'dense forest'), 'likely' => array('marsh', 'forest', 'dense forest')),
		'ruin'		=> array('rarity' =>  50, 'minlevel' =>  1, 'minparty' =>  3, 'startdepth' =>  2, 'river' => 0, 'lake' => 0, 'ocean' => 0, 'available' => array('grass', 'thin grass', 'thin scrub', 'scrubland', 'desert', 'marsh', 'forest', 'dense forest', 'rock'), 'likely' => array('grass', 'thin grass', 'thin scrub', 'scrubland', 'desert', 'marsh', 'forest', 'dense forest', 'rock')),
		'hold'		=> array('rarity' =>  40, 'minlevel' =>  1, 'minparty' =>  3, 'startdepth' =>  2, 'river' => 0, 'lake' => 0, 'ocean' => 0, 'available' => array('grass', 'thin grass', 'thin scrub', 'scrubland', 'desert', 'marsh', 'forest', 'dense forest', 'rock'), 'likely' => array('thin scrub', 'scrubland', 'marsh', 'forest', 'dense forest', 'rock')),
		'lab'		=> array('rarity' =>  40, 'minlevel' =>  1, 'minparty' =>  7, 'startdepth' => 10, 'river' => 0, 'lake' => 0, 'ocean' => 0, 'available' => array('desert', 'marsh', 'forest', 'dense forest', 'rock'), 'likely' => array('desert', 'dense forest')),
		'dungeon'	=> array('rarity' =>  75, 'minlevel' =>  1, 'minparty' =>  4, 'startdepth' =>  5, 'river' => 0, 'lake' => 0, 'ocean' => 0, 'available' => array('grass', 'thin grass', 'thin scrub', 'scrubland', 'desert', 'marsh', 'forest', 'dense forest', 'rock'), 'likely' => array('grass', 'thin grass', 'thin scrub', 'scrubland', 'desert', 'marsh', 'forest', 'dense forest', 'rock')),
		'citadel'	=> array('rarity' => 100, 'minlevel' =>  1, 'minparty' =>  7, 'startdepth' =>  4, 'river' => 0, 'lake' => 0, 'ocean' => 0, 'available' => array('desert', 'marsh', 'forest', 'dense forest', 'rock'), 'likely' => array('desert', 'marsh', 'forest', 'dense forest', 'rock')),
		'roguefort'	=> array('rarity' => 100, 'minlevel' =>  8, 'minparty' => 10, 'startdepth' =>  3, 'river' => 0, 'lake' => 0, 'ocean' => 0, 'available' => array('grass', 'thin grass', 'thin scrub', 'scrubland', 'desert', 'marsh', 'forest', 'dense forest', 'rock'), 'likely' => array('grass', 'thin grass', 'thin scrub', 'scrubland', 'desert', 'marsh', 'forest', 'dense forest', 'rock')),
		'mausoleum'	=> array('rarity' =>  25, 'minlevel' =>  1, 'minparty' =>  3, 'startdepth' =>  2, 'river' => 0, 'lake' => 0, 'ocean' => 0, 'available' => array('grass', 'thin grass', 'thin scrub', 'scrubland', 'desert'), 'likely' => array('grass', 'thin grass', 'desert')),
		'flooded'	=> array('rarity' =>  50, 'minlevel' =>  1, 'minparty' =>  2, 'startdepth' =>  1, 'river' => 1, 'lake' => 1, 'ocean' => 1, 'available' => array('marsh'), 'likely' => array('marsh')),
		'shipgrave'	=> array('rarity' =>  50, 'minlevel' =>  1, 'minparty' =>  3, 'startdepth' =>  3, 'river' => 1, 'lake' => 1, 'ocean' => 1, 'available' => array('grass', 'thin grass', 'thin scrub', 'scrubland', 'desert', 'marsh', 'forest', 'dense forest'), 'likely' => array('grass', 'thin grass', 'thin scrub', 'scrubland', 'desert')),
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
