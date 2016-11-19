<?php

namespace BM2\SiteBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use BM2\SiteBundle\Entity\WeatherType;

class LoadWeatherData extends AbstractFixture implements OrderedFixtureInterface {
	
	private $weather = array(
		'no wind'		=> array('type' =>       'wind', 'wind' =>   1, 'light' =>   1, 'precipitation' =>   1, 'visibility' =>   1, 'magic' =>   1),
		'light breeze'		=> array('type' =>       'wind', 'wind' => 0.9, 'light' =>   1, 'precipitation' =>   1, 'visibility' =>   1, 'magic' =>   1),
		'mild breeze'		=> array('type' =>       'wind', 'wind' => 0.8, 'light' =>   1, 'precipitation' =>   1, 'visibility' =>   1, 'magic' =>   1),
		'light wind'		=> array('type' =>       'wind', 'wind' => 0.7, 'light' =>   1, 'precipitation' =>   1, 'visibility' =>   1, 'magic' =>   1),
		'medium wind'		=> array('type' =>       'wind', 'wind' => 0.5, 'light' =>   1, 'precipitation' =>   1, 'visibility' =>   1, 'magic' =>   1),
		'heavy wind'		=> array('type' =>       'wind', 'wind' => 0.3, 'light' =>   1, 'precipitation' =>   1, 'visibility' =>   1, 'magic' =>   1),
		'gale force wind'	=> array('type' =>       'wind', 'wind' =>0.05, 'light' =>   1, 'precipitation' =>   1, 'visibility' =>   1, 'magic' =>   1),
		'no weather'		=> array('type' =>    'weather', 'wind' =>   1, 'light' =>   1, 'precipitation' =>   1, 'visibility' =>   1, 'magic' =>   1),
		'drizzle'		=> array('type' =>    'weather', 'wind' =>   1, 'light' =>0.97, 'precipitation' => 0.9, 'visibility' =>0.95, 'magic' =>   1, 'mintemp' => 32),
		'light rain'		=> array('type' =>    'weather', 'wind' =>   1, 'light' =>0.93, 'precipitation' =>0.75, 'visibility' => 0.9, 'magic' =>   1, 'mintemp' => 32),
		'rain'			=> array('type' =>    'weather', 'wind' =>   1, 'light' => 0.9, 'precipitation' => 0.6, 'visibility' => 0.8, 'magic' =>   1, 'mintemp' => 32),
		'heavy rain'		=> array('type' =>    'weather', 'wind' =>   1, 'light' => 0.8, 'precipitation' => 0.4, 'visibility' => 0.7, 'magic' =>   1, 'mintemp' => 32),
		'torrential rain'	=> array('type' =>    'weather', 'wind' =>   1, 'light' => 0.7, 'precipitation' => 0.1, 'visibility' =>   1, 'magic' =>   1, 'mintemp' => 32),
		'rain snow mix'		=> array('type' =>    'weather', 'wind' =>   1, 'light' => 0.7, 'precipitation' => 0.1, 'visibility' =>   1, 'magic' =>   1, 'maxtemp' => 42),
		'light snow'		=> array('type' =>    'weather', 'wind' =>   1, 'light' => 0.7, 'precipitation' => 0.1, 'visibility' =>   1, 'magic' =>   1, 'maxtemp' => 42),
		'snow'			=> array('type' =>    'weather', 'wind' =>   1, 'light' => 0.7, 'precipitation' => 0.1, 'visibility' =>   1, 'magic' =>   1, 'maxtemp' => 42),
		'heavy snow'		=> array('type' =>    'weather', 'wind' =>   1, 'light' => 0.7, 'precipitation' => 0.1, 'visibility' =>   1, 'magic' =>   1, 'maxtemp' => 42),
		'blizzard'		=> array('type' =>    'weather', 'wind' =>   1, 'light' => 0.7, 'precipitation' => 0.1, 'visibility' =>   1, 'magic' =>   1, 'maxtemp' => 42),
		'clear sky'		=> array('type' =>        'sky', 'wind' =>   1, 'light' =>   1, 'precipitation' =>   1, 'visibility' =>   1, 'magic' =>   1),
		'partly cloudy'		=> array('type' =>        'sky', 'wind' =>   1, 'light' =>0.95, 'precipitation' =>   1, 'visibility' =>   1, 'magic' =>   1),
		'cloudy'		=> array('type' =>        'sky', 'wind' =>   1, 'light' => 0.9, 'precipitation' =>   1, 'visibility' =>   1, 'magic' =>   1),
		'heavy cloudcover'	=> array('type' =>        'sky', 'wind' =>   1, 'light' => 0.8, 'precipitation' =>   1, 'visibility' =>   1, 'magic' =>   1),
		'no fog'		=> array('type' => 'visibility', 'wind' =>   1, 'light' => 0.9, 'precipitation' =>   1, 'visibility' =>   1, 'magic' =>   1, 'mintemp' => 32),
		'light fog'		=> array('type' => 'visibility', 'wind' =>   1, 'light' =>0.95, 'precipitation' =>   1, 'visibility' => 0.9, 'magic' =>   1, 'mintemp' => 32),
		'fog'			=> array('type' => 'visibility', 'wind' =>   1, 'light' => 0.9, 'precipitation' =>   1, 'visibility' => 0.7, 'magic' =>   1, 'mintemp' => 32),
		'heavy fog'		=> array('type' => 'visibility', 'wind' =>   1, 'light' => 0.8, 'precipitation' =>   1, 'visibility' => 0.5, 'magic' =>   1, 'mintemp' => 32),
		'very heavy fog'	=> array('type' => 'visibility', 'wind' =>   1, 'light' => 0.7, 'precipitation' =>   1, 'visibility' => 0.4, 'magic' =>   1, 'mintemp' => 32),
		'light dust storm'	=> array('type' => 'visibility', 'wind' =>   1, 'light' =>0.95, 'precipitation' =>   1, 'visibility' =>0.85, 'magic' =>   1, 'biome' => array('badlands', 'desert')),
		'dust storm'		=> array('type' => 'visibility', 'wind' =>   1, 'light' => 0.9, 'precipitation' =>   1, 'visibility' => 0.7, 'magic' =>   1, 'biome' => array('badlands', 'desert')),
		'heavy dust storm'	=> array('type' => 'visibility', 'wind' =>   1, 'light' => 0.8, 'precipitation' =>   1, 'visibility' => 0.5, 'magic' =>   1, 'biome' => array('badlands', 'desert')),
		'new moon'		=> array('type' =>      'lunar', 'wind' =>   1, 'light' => 0.5, 'precipitation' =>   1, 'visibility' =>   1, 'magic' =>   1),
		'quarter moon'		=> array('type' =>      'lunar', 'wind' =>   1, 'light' =>0.63, 'precipitation' =>   1, 'visibility' =>   1, 'magic' =>   1),
		'half moon'		=> array('type' =>      'lunar', 'wind' =>   1, 'light' =>0.75, 'precipitation' =>   1, 'visibility' =>   1, 'magic' =>   1),
		'three-quarters moon'   => array('type' =>      'lunar', 'wind' =>   1, 'light' =>0.87, 'precipitation' =>   1, 'visibility' =>   1, 'magic' =>   1),
		'full moon'		=> array('type' =>      'lunar', 'wind' =>   1, 'light' =>   1, 'precipitation' =>   1, 'visibility' =>   1, 'magic' =>   1),
		'lunar eclipse'		=> array('type' =>      'lunar', 'wind' =>   1, 'light' => 0.5, 'precipitation' =>   1, 'visibility' =>   1, 'magic' =>   1),
		'day'			=> array('type' =>      'solar', 'wind' =>   1, 'light' =>   1, 'precipitation' =>   1, 'visibility' =>   1, 'magic' =>   1),
		'evening'		=> array('type' =>      'solar', 'wind' =>   1, 'light' =>0.75, 'precipitation' =>   1, 'visibility' =>   1, 'magic' =>   1),
		'night'			=> array('type' =>      'solar', 'wind' =>   1, 'light' => 0.5, 'precipitation' =>   1, 'visibility' =>   1, 'magic' =>   1),
		'morning'		=> array('type' =>      'solar', 'wind' =>   1, 'light' =>0.75, 'precipitation' =>   1, 'visibility' =>   1, 'magic' =>   1),
		'solar eclipse'		=> array('type' =>      'solar', 'wind' =>   1, 'light' => 0.4, 'precipitation' =>   1, 'visibility' =>   1, 'magic' =>   1),
		
	);
	/**
	 * {@inheritDoc}
	 */
	public function getOrder() {
		return 15; // Requires LoadBiomeData
	}
	/**
	 * {@inheritDoc}
	 */
	public function load(ObjectManager $manager) {
		foreach ($this->weather as $name=>$data) {
			$type = new Weather;
			$type->setName($name);
			$type->setType($data['type']);
			$type->setWind($data['wind']);
			$type->setLight($data['light']);
			$type->setPrecipitation($data['precipitation']);
			$type->setVisibility($data['visibility']);
			$type->setMagic($data['magic']);
			$type->setMinTemp(isset($data['mintemp'])?$data['mintemp']:NULL);
			$type->setMaxTemp(isset($data['maxtemp'])?$data['maxtemp']:NULL);
			$type->setBiome(isset($data['biome'])?$data['biome']:NULL);
			$manager->persist($type);
		}
		$manager->flush();
	}
}
