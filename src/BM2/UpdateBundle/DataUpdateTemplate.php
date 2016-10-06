/* You do not need to define this with PHP headers as it will be included, raw, in another PHP file.
For that same reason, you don't need to tell Symfony to be Contianer Aware or anything. The command processing this takes care of that.
On a related note, you could name this file anything, with ANY suffix, and the update command will use it.

For simplicities sake, I've included the current DataFixtures the game uses to populate the game inially.
This is the format the update command will expect the data to be in. Though you only need the array you are actually updating.

Certain updates have unique rules, as follows:
--> Buildings: Must have both $BuildingDataUpdate and $BuildingResourceUpdate arrays defined and not null.

If the data isn't set here, the command will assume it is NULL or 0, depending on the particular data it's processing. 
Oh, you can split this up into multiple files if you want, or because you made them at different times.
The command that processes this includes them all individually. 
That said, if you have multiple updates of the same type, COMBINE THEM INTO ONE.*/

$DungeonCardsUpdate = array(
	// basic cards
	'basic.leave'		=> array('rarity' =>    0, 'monsterclass'=> '', 'target'=>array('monster'=>false, 'treasure'=>false, 'dungeoneer'=>false)),
	'basic.rest'		=> array('rarity' =>  500, 'monsterclass'=> '', 'target'=>array('monster'=>false, 'treasure'=>false, 'dungeoneer'=>false)),
	'basic.scout'		=> array('rarity' =>  750, 'monsterclass'=> '', 'target'=>array('monster'=>false, 'treasure'=>false, 'dungeoneer'=>false)),
	'basic.plunder'		=> array('rarity' =>  800, 'monsterclass'=> '', 'target'=>array('monster'=>false, 'treasure'=>true, 'dungeoneer'=>false)),
	'basic.fight'		=> array('rarity' => 1000, 'monsterclass'=> '', 'target'=>array('monster'=>true, 'treasure'=>false, 'dungeoneer'=>false)),
	
	// common / usual cards
	'action.wait'		=> array('rarity' => 1000, 'monsterclass'=> '', 'target'=>array('monster'=>false, 'treasure'=>false, 'dungeoneer'=>false)),
	'action.untrap1'	=> array('rarity' =>  600, 'monsterclass'=> '', 'target'=>array('monster'=>false, 'treasure'=>true, 'dungeoneer'=>false)),
	'fight.double'		=> array('rarity' =>  500, 'monsterclass'=> '', 'target'=>array('monster'=>true, 'treasure'=>false, 'dungeoneer'=>false)),
	'fight.strong'		=> array('rarity' =>  500, 'monsterclass'=> '', 'target'=>array('monster'=>true, 'treasure'=>false, 'dungeoneer'=>false)),
	'fight.hit'		=> array('rarity' =>  500, 'monsterclass'=> '', 'target'=>array('monster'=>true, 'treasure'=>false, 'dungeoneer'=>false)),
	'fight.weak'		=> array('rarity' =>  650, 'monsterclass'=> '', 'target'=>array('monster'=>true, 'treasure'=>false, 'dungeoneer'=>false)),
	'fight.slime'		=> array('rarity' =>  550, 'monsterclass'=> 'slime', 'target'=>array('monster'=>true, 'treasure'=>false, 'dungeoneer'=>false))
	
	// uncommon cards
	'fight.stealth'		=> array('rarity' =>  250, 'monsterclass'=> '', 'target'=>array('monster'=>true, 'treasure'=>false, 'dungeoneer'=>false)),
	'fight.sweep'		=> array('rarity' =>  400, 'monsterclass'=> '', 'target'=>array('monster'=>true, 'treasure'=>false, 'dungeoneer'=>false)),
	'fight.swing'		=> array('rarity' =>  350, 'monsterclass'=> '', 'target'=>array('monster'=>true, 'treasure'=>false, 'dungeoneer'=>false)),
	'fight.bomb1'		=> array('rarity' =>  250, 'monsterclass'=> '', 'target'=>array('monster'=>true, 'treasure'=>false, 'dungeoneer'=>false)),
	'scout.double'		=> array('rarity' =>  300, 'monsterclass'=> '', 'target'=>array('monster'=>false, 'treasure'=>false, 'dungeoneer'=>false)),
	'action.heal1'		=> array('rarity' =>  400, 'monsterclass'=> '', 'target'=>array('monster'=>false, 'treasure'=>false, 'dungeoneer'=>true)),
	'action.heal2'		=> array('rarity' =>  200, 'monsterclass'=> '', 'target'=>array('monster'=>false, 'treasure'=>false, 'dungeoneer'=>true)),
	'action.distracta'	=> array('rarity' =>  400, 'monsterclass'=> 'animal', 'target'=>array('monster'=>true, 'treasure'=>false, 'dungeoneer'=>false)),
	'action.rest2'		=> array('rarity' =>  200, 'monsterclass'=> '', 'target'=>array('monster'=>false, 'treasure'=>false, 'dungeoneer'=>false)),
	'action.untrap2'	=> array('rarity' =>  300, 'monsterclass'=> '', 'target'=>array('monster'=>false, 'treasure'=>true, 'dungeoneer'=>false)),
	
	// rare cards
	'action.heal3'		=> array('rarity' =>  100, 'monsterclass'=> '', 'target'=>array('monster'=>false, 'treasure'=>false, 'dungeoneer'=>true)),
	'action.rest3'		=> array('rarity' =>   75, 'monsterclass'=> '', 'target'=>array('monster'=>false, 'treasure'=>false, 'dungeoneer'=>false)),
	'action.untrap3'	=> array('rarity' =>  100, 'monsterclass'=> '', 'target'=>array('monster'=>false, 'treasure'=>true, 'dungeoneer'=>false)),
	'scout.tripple'		=> array('rarity' =>   50, 'monsterclass'=> '', 'target'=>array('monster'=>false, 'treasure'=>false, 'dungeoneer'=>false)),
	'fight.kill'		=> array('rarity' =>  100, 'monsterclass'=> '', 'target'=>array('monster'=>true, 'treasure'=>false, 'dungeoneer'=>false)),
	'fight.sure'		=> array('rarity' =>  100, 'monsterclass'=> '', 'target'=>array('monster'=>true, 'treasure'=>false, 'dungeoneer'=>false)),
	'fight.tripple'		=> array('rarity' =>  100, 'monsterclass'=> '', 'target'=>array('monster'=>true, 'treasure'=>false, 'dungeoneer'=>false)),
	'fight.bomb2'		=> array('rarity' =>   75, 'monsterclass'=> '', 'target'=>array('monster'=>true, 'treasure'=>false, 'dungeoneer'=>false)),
);

$DungeonMonstersUpdate = array(
	// animals
	'arachnid'	=> array('power' => 25, 'attacks' =>  1, 'defense' => 30, 'wounds' => 3, 'mindepth' => 2, 'class' => array('animal', 'melee'), 'areas' => array('cave', 'ruin', 'dungeon', 'citadel', 'lab', 'mausoleum', 'shipgrave')),
	'bat'		=> array('power' => 40, 'attacks' =>  1, 'defense' => 40, 'wounds' => 1, 'mindepth' => 2, 'class' => array('animal', 'fly', 'melee'), 'areas' => array('cave', 'ruin', 'citadel', 'lab', 'mausoleum', 'shipgrave')),
	'beetle'	=> array('power' => 10, 'attacks' =>  3, 'defense' => 10, 'wounds' => 4, 'mindepth' => 1, 'class' => array('animal', 'swarm', 'poison'), 'areas' => array('cave', 'wild', 'lab', 'mausoleum')),
	'bear'		=> array('power' => 50, 'attacks' =>  1, 'defense' => 25, 'wounds' => 2, 'mindepth' => 0, 'class' => array('animal', 'melee', 'solo'), 'areas' => array('cave', 'wild', 'ruin', 'dungeon', 'lab', 'glade')),
	'cat'		=> array('power' => 40, 'attacks' =>  1, 'defense' => 20, 'wounds' => 1, 'mindepth' => 0, 'class' => array('animal', 'solo', 'stealth'), 'areas' => array('wild', 'ruin', 'glade', 'lab', 'shipgrave')),
	'eagle'		=> array('power' => 40, 'attacks' =>  1, 'defense' => 25, 'wounds' => 2, 'mindepth' => 1, 'class' => array('animal', 'fly', 'melee'), 'areas' => array('wild', 'ruin', 'glade', 'lab')),
	'mongrel'	=> array('power' => 20, 'attacks' =>  1, 'defense' => 10, 'wounds' => 1, 'mindepth' => 0, 'class' => array('animal', 'solo', 'melee', 'pack'), 'areas' => array('cave', 'wild', 'ruin', 'dungeon', 'glade', 'citadel', 'hold', 'lab', 'mausoleum', 'flooded', 'shipgrave'))
	'rat'		=> array('power' =>  5, 'attacks' =>  1, 'defense' =>  5, 'wounds' => 1, 'mindepth' => 0, 'class' => array('animal', 'swim', 'melee'), 'areas' => array('cave', 'wild', 'ruin', 'dungeon', 'glade', 'citadel', 'hold', 'lab', 'roguefort', 'mausoleum', 'flooded', 'shipgrave')),
	'snake'		=> array('power' => 30, 'attacks' =>  1, 'defense' => 10, 'wounds' => 1, 'mindepth' => 0, 'class' => array('animal', 'melee', 'poison'), 'areas' => array('cave', 'wild', 'ruin', 'dungeon', 'lab', 'glade', 'mausoleum', 'flooded')),
	'wolf'		=> array('power' => 25, 'attacks' =>  1, 'defense' => 20, 'wounds' => 1, 'mindepth' => 0, 'class' => array('animal', 'melee', 'pack'), 'areas' => array('cave', 'wild', 'ruin',, 'lab', 'flooded')),
	'wolfb'		=> array('power' => 60, 'attacks' =>  1, 'defense' => 40, 'wounds' => 2, 'mindepth' => 1, 'class' => array('animal', 'melee', 'pack'), 'areas' => array('cave', 'wild', 'dungeon', 'citadel', 'lab', 'flooded')),

	// beasts
	'dog'		=> array('power' => 45, 'attacks' =>  1, 'defense' => 15, 'wounds' => 1, 'mindepth' => 0, 'class' => array('animal', 'solo', 'melee'), 'areas' => array('cave', 'ruin', 'dungeon', 'citadel', 'hold', 'roguefort', 'lab'))
	'falcon'	=> array('power' => 25, 'attacks' =>  1, 'defense' => 10, 'wounds' => 2, 'mindepth' => 1, 'class' => array('animal', 'fly', 'melee'), 'areas' => array('wild', 'ruin', 'glade', 'lab', 'citadel', 'roguefort', 'flooded', 'shipgrave')),
	'hawk'		=> array('power' => 40, 'attacks' =>  1, 'defense' => 25, 'wounds' => 2, 'mindepth' => 2, 'class' => array('animal', 'fly', 'melee'), 'areas' => array('wild', 'ruin', 'glade', 'lab', 'flooded', 'shipgrave')),
	
	// humans
	'bandit'	=> array('power' => 60, 'attacks' =>  1, 'defense' => 40, 'wounds' => 1, 'mindepth' => 1, 'class' => array('human', 'melee'), 'areas' => array('cave', 'ruin', 'dungeon', 'hold', 'citadel', 'lab', 'mausoleum', 'flooded', 'shipgrave')),
	'bandita'	=> array('power' => 50, 'attacks' =>  1, 'defense' => 20, 'wounds' => 1, 'mindepth' => 1, 'class' => array('human', 'mixed'), 'areas' => array('cave', 'ruin', 'dungeon', 'hold', 'lab', 'mausoleum', 'flooded', 'shipgrave')),
	'banditb'	=> array('power' => 75, 'attacks' =>  1, 'defense' => 60, 'wounds' => 2, 'mindepth' => 2, 'class' => array('human', 'melee', 'solo'), 'areas' => array('cave', 'ruin', 'dungeon', 'hold', 'lab', 'mausoleum', 'flooded', 'shipgrave')),
	'banditg'	=> array('power' => 60, 'attacks' =>  1, 'defense' => 40, 'wounds' => 1, 'mindepth' => 1, 'class' => array('human', 'mixed', 'handler'), 'areas' => array('cave', 'ruin', 'dungeon', 'hold', 'citadel', 'lab', 'mausoleum', 'flooded', 'shipgrave')),
	'crazy'		=> array('power' => 20, 'attacks' =>  1, 'defense' => 20, 'wounds' => 1, 'mindepth' => 0, 'class' => array('human', 'melee'), 'areas' => array('cave', 'ruin', 'dungeon', 'lab', 'wild', 'glade', 'mausoleum', 'flooded', 'shipgrave')),
	'monhunter'	=> array('power' => 90, 'attacks' =>  1, 'defense' => 45, 'wounds' => 2, 'mindepth' => 4, 'class' => array('human', 'ranged', 'group', 'swim', 'poison'), 'areas' => array('cave', 'ruin', 'dungeon', 'lab', 'wild', 'glade', 'citadel', 'mausoleum', 'flooded', 'shipgrave')),
	'npcdungeoneer'	=> array('power' => 65, 'attacks' =>  1, 'defense' => 80, 'wounds' => 3, 'mindepth' => 4, 'class' => array('human', 'melee', 'group', 'swim'), 'areas' => array('cave', 'ruin', 'dungeon', 'lab', 'wild', 'glade', 'citadel', 'mausoleum', 'flooded', 'shipgrave')),
	'shaman'	=> array('power' => 30, 'attacks' =>  3, 'defense' => 40, 'wounds' => 2, 'mindepth' => 3, 'class' => array('human', 'mixed', 'swim', 'solo'), 'areas' => array('cave', 'dungeon', 'ruin', 'glade', 'lab', 'wild', 'citadel', 'hold', 'mausoleum', 'flooded', 'shipgrave'))
	'lost'		=> array('power' => 80, 'attacks' =>  2, 'defense' => 80, 'wounds' => 3, 'mindepth' => 4, 'class' => array('human', 'melee', 'solo'), 'areas' => array('ruin', 'dungeon', 'hold', 'citadel', 'glade', 'lab', 'mausoleum', 'flooded', 'shipgrave')),
	'villager'	=> array('power' => 15, 'attacks' =>  1, 'defense' => 15, 'wounds' => 1, 'mindepth' => 0, 'class' => array('human', 'melee', 'swim'), 'areas' => array('cave', 'ruin', 'dungeon', 'hold', 'citadel', 'lab', 'mausoleum', 'flooded', 'shipgrave')),
	
	// monsters
	'barghest'	=> array('power' => 90, 'attacks' =>  1, 'defense' => 50, 'wounds' => 3, 'mindepth' => 3, 'class' => array('monster', 'melee'), 'areas' => array('cave', 'dungeon', 'citadel', 'glade', 'lab', 'mausoleum', 'shipgrave')),
	'chimera'	=> array('power' => 75, 'attacks' =>  3, 'defense' => 45, 'wounds' => 3, 'mindepth' => 4, 'class' => array('monster', 'mixed', 'fly', 'swim', 'poison', 'solo'), 'areas' => array('cave', 'lab', 'wild', 'citadel', 'glade', 'dungeon', 'mausoleum', 'shipgrave'))
	'dragon'	=> array('power' =>250, 'attacks' =>  3, 'defense' =>150, 'wounds' => 6, 'mindepth' => 8, 'class' => array('monster', 'solo', 'mixed', 'fly', 'swim', 'boss'), 'areas' => array('cave', 'lab', 'dungeon', 'citadel'))
	'ogre'		=> array('power' => 80, 'attacks' =>  1, 'defense' => 60, 'wounds' => 4, 'mindepth' => 4, 'class' => array('monster', 'melee'), 'areas' => array('ruin', 'dungeon', 'lab', 'shipgrave')),
	'slime'		=> array('power' =>  5, 'attacks' =>  1, 'defense' =>  1, 'wounds' => 6, 'mindepth' => 0, 'class' => array('monster', 'slime', 'melee', 'pack'), 'areas' => array('cave', 'wild', 'ruin', 'dungeon', 'glade', 'citadel', 'hold', 'lab', 'roguefort', 'mausoleum', 'flooded', 'shipgrave')),
	'troglodyte'	=> array('power' => 80, 'attacks' =>  2, 'defense' => 50, 'wounds' => 3, 'mindepth' => 4, 'class' => array('monster', 'melee'), 'areas' => array('cave', 'wild', 'lab', 'flooded', 'shipgrave')),
	'wyvern'	=> array('power' =>150, 'attacks' =>  2, 'defense' => 80, 'wounds' => 2, 'mindepth' => 5, 'class' => array('monster', 'fly'), 'areas' => array('wild', 'lab', 'flooded', 'shipgrave')),

	// Rogue Fortress
	'fortguard'	=> array('power' => 30, 'attacks' =>  1, 'defense' => 30, 'wounds' => 1, 'mindepth' => 0, 'class' => array('human', 'melee'), 'areas' => array('roguefort', 'lab'))
	'fortguarda'	=> array('power' => 45, 'attacks' =>  1, 'defense' => 30, 'wounds' => 1, 'mindepth' => 1, 'class' => array('human', 'ranged'), 'areas' => array('roguefort', 'lab'))
	'fortguardc'	=> array('power' => 75, 'attacks' =>  2, 'defense' => 35, 'wounds' => 4, 'mindepth' => 5, 'class' => array('human', 'melee', 'indiv'), 'areas' => array('roguefort', 'lab'))
	'fortguardh'	=> array('power' => 40, 'attacks' =>  1, 'defense' => 80, 'wounds' => 3, 'mindepth' => 4, 'class' => array('human', 'melee'), 'areas' => array('roguefort', 'lab'))
	'fortguardv'	=> array('power' => 60, 'attacks' =>  2, 'defense' => 60, 'wounds' => 3, 'mindepth' => 3, 'class' => array('human', 'mixed', 'solo'), 'areas' => array('roguefort', 'lab'))
	'fortguardhv'	=> array('power' => 90, 'attacks' =>  2, 'defense' => 80, 'wounds' => 4, 'mindepth' => 6, 'class' => array('human', 'mixed', 'indiv'), 'areas' => array('roguefort', 'lab'))
	'fortcavalry'	=> array('power' => 35, 'attacks' =>  2, 'defense' => 40, 'wounds' => 2, 'mindepth' => 1, 'class' => array('human', 'melee'), 'areas' => array('roguefort', 'lab'))
	'fortcavalryc'	=> array('power' => 90, 'attacks' =>  2, 'defense' => 45, 'wounds' => 4, 'mindepth' => 5, 'class' => array('human', 'mixed', 'mounted'), 'areas' => array('roguefort', 'lab'))
	'fortcavalryh'	=> array('power' => 50, 'attacks' =>  2, 'defense' => 85, 'wounds' => 3, 'mindepth' => 4, 'class' => array('human', 'melee', 'mounted'), 'areas' => array('roguefort', 'lab'))
	'fortcavalrya'	=> array('power' => 30, 'attacks' =>  2, 'defense' => 30, 'wounds' => 2, 'mindepth' => 2, 'class' => array('human', 'ranged', 'mounted,'), 'areas' => array('roguefort', 'lab'))
	'fortlesslord'	=> array('power' => 80, 'attacks' =>  3, 'defense' => 80, 'wounds' => 6, 'mindepth' => 6, 'class' => array('human', 'mixed', 'solo'), 'areas' => array('roguefort')),
	'fortlord'	=> array('power' => 95, 'attacks' =>  4, 'defense' => 95, 'wounds' => 9, 'mindepth' => 8, 'class' => array('human', 'mixed', 'indiv', 'boss'), 'areas' => array('roguefort')),
);

$BiomeDataUpdate = array(
	'grass'		=> array('spot' => 1.00, 'travel' => 1.00, 'roads' => 1.00, 'features' => 1.00),
	'thin grass'	=> array('spot' => 1.00, 'travel' => 1.00, 'roads' => 1.00, 'features' => 1.00),
	'scrub'		=> array('spot' => 0.80, 'travel' => 0.95, 'roads' => 1.00, 'features' => 1.00),
	'thin scrub'	=> array('spot' => 0.90, 'travel' => 0.95, 'roads' => 1.00, 'features' => 1.00),
	'desert'	=> array('spot' => 1.10, 'travel' => 0.90, 'roads' => 1.10, 'features' => 1.00),
	'marsh'		=> array('spot' => 0.80, 'travel' => 0.65, 'roads' => 1.40, 'features' => 1.20),
	'forest'	=> array('spot' => 0.60, 'travel' => 0.80, 'roads' => 1.10, 'features' => 1.10),
	'dense forest'	=> array('spot' => 0.40, 'travel' => 0.75, 'roads' => 1.25, 'features' => 1.20),
	'rock'		=> array('spot' => 0.75, 'travel' => 0.60, 'roads' => 1.60, 'features' => 1.30),
	'snow'		=> array('spot' => 0.75, 'travel' => 0.50, 'roads' => 2.00, 'features' => 1.50),
	'water'		=> array('spot' => 1.20, 'travel' => 1.50, 'roads' => 1.00, 'features' => 1.00),
	'ocean'		=> array('spot' => 1.20, 'travel' => 1.50, 'roads' => 1.00, 'features' => 1.00),
);

$BuildingDataUpdate = array(
	'Academy'               => array('auto' =>      0, 'min' =>   9000, 'work' =>  25000, 'ratio' => 12000, 'requires' => array('University','Garrison','Mason'), 'icon'=>'buildings/academy.png'),
	'Alchemist'             => array('auto' =>   4000, 'min' =>   1000, 'work' =>  12000, 'ratio' =>  5000, 'defenses' => 10, 'icon'=>'buildings/alchemist.png'),
	'Archery Range'         => array('auto' =>      0, 'min' =>    400, 'work' =>   6000, 'ratio' =>  3000, 'requires' => array('Bowyer','Training Ground'), 'conditions'=>true),
	'Archery School'        => array('auto' =>      0, 'min' =>    600, 'work' =>  10000, 'ratio' =>  2000, 'requires' => array('Archery Range', 'Carpenter')),
	'Armourer'              => array('auto' =>   5000, 'min' =>    900, 'work' =>  10000, 'ratio' =>  1500, 'requires' => array('Leather Tanner','Blacksmith'), 'icon'=>'buildings/armorer.png'),
	'Armoury'               => array('auto' =>      0, 'min' =>   1000, 'work' =>  10000, 'ratio' =>  4000, 'requires' => array('Armourer','Weaponsmith')),
	'Bank'                  => array('auto' =>  40000, 'min' =>   4000, 'work' =>  20000, 'ratio' =>  2000, 'requires' => array('Merchants Quarter','Library','Temple','Mason')),
	'Barracks'              => array('auto' =>      0, 'min' =>    300, 'work' =>  12000, 'ratio' =>  4000, 'requires' => array('Guardhouse')),
	'Blacksmith'            => array('auto' =>   1500, 'min' =>    250, 'work' =>  10000, 'ratio' =>  1000, 'icon'=>'rpg_map/blacksmith.svg'),
	'Bladesmith'            => array('auto' =>  25000, 'min' =>   1500, 'work' =>  16000, 'ratio' =>  1800, 'requires' => array('Weaponsmith', 'Mason', 'Alchemist')),
	'Bowyer'                => array('auto' =>   2000, 'min' =>    200, 'work' =>   8000, 'ratio' =>   600),
	'Carpenter'             => array('auto' =>    600, 'min' =>     80, 'work' =>   9000, 'ratio' =>   400, 'icon'=>'buildings/carpenter.png'),
	'Citadel'               => array('auto' =>      0, 'min' =>   6000, 'work' =>1500000, 'ratio' =>  5000, 'defenses' => 70, 'requires' => array('Fortress','Bladesmith','Master Mason'), 'conditions'=>true),
	'City Hall'             => array('auto' =>  50000, 'min' =>   5000, 'work' =>  25000, 'ratio' =>  3500, 'requires' => array('Town Hall')),
	'Dirt Streets'          => array('auto' =>    400, 'min' =>     50, 'work' =>   5000, 'ratio' =>  1000),
	'Fairground'            => array('auto' =>  10000, 'min' =>   1200, 'work' =>  10000, 'ratio' =>  1000, 'requires' => array('Carpenter','Market')),
	'Fortress'              => array('auto' =>      0, 'min' =>   4000, 'work' => 500000, 'ratio' =>  4000, 'defenses' => 60, 'requires' => array('Paved Streets','Armoury','Stone Castle','Mason'), 'conditions'=>true),
	'Garrison'              => array('auto' =>      0, 'min' =>    400, 'work' =>  15000, 'ratio' =>  8000, 'requires' => array('Carpenter','Barracks')),
	'Great Temple'          => array('auto' =>  50000, 'min' =>   5000, 'work' =>  50000, 'ratio' =>  3000, 'requires' => array('University','Temple','Master Mason','Paved Streets')),
	'Guardhouse'            => array('auto' =>      0, 'min' =>    200, 'work' =>   8000, 'ratio' =>  5000, 'requires' => array('Training Ground')),
	'Heavy Armourer'        => array('auto' =>  40000, 'min' =>   4000, 'work' =>  12000, 'ratio' =>  4000, 'requires' => array('Armourer')),
	'Inn'			=> array('auto' =>   1200, 'min' =>    400, 'work' =>   6000, 'ratio' =>   500, 'requires' => array('Tavern', 'Market')),
	'Leather Tanner'        => array('auto' =>   2000, 'min' =>    300, 'work' =>   8000, 'ratio' =>  1500),
	'Lendan Tower'		=> array('auto' =>   	0, 'min' =>    500, 'work' =>  25000, 'ratio' =>  2500, 'requires' => array('Carpenter', 'Mason', 'Blacksmith')),
	'Library'               => array('auto' =>   6000, 'min' =>    700, 'work' =>  15000, 'ratio' =>  5000, 'requires' => array('School','Temple')),
	'Market'                => array('auto' =>   2500, 'min' =>    400, 'work' =>   5000, 'ratio' =>   750, 'requires' => array('Dirt Streets'), 'icon'=>'buildings/market.png'),
	'Mason'                 => array('auto' =>    800, 'min' =>    200, 'work' =>   9000, 'ratio' =>   400, 'icon'=>'buildings/mason.png'),
	'Master Mason'          => array('auto' => 100000, 'min' =>   4000, 'work' =>  12000, 'ratio' =>  4000, 'requires' => array('University','Mason'), 'icon'=>'buildings/mastermason.png'),
	'Merchants Quarter'     => array('auto' =>  60000, 'min' =>   3000, 'work' =>  25000, 'ratio' =>  1200, 'requires' => array('Paved Streets','Fairground','Mason','Tailor')),
	'Mill'			=> array('auto' =>    500, 'min' =>    200, 'work' =>  14000, 'ratio' =>  2500, 'icon'=>'rpg_map/windmill.svg', 'icon'=>'buildings/mill.png'),
	'Mine'                  => array('auto' =>      0, 'min' =>    100, 'work' =>  20000, 'ratio' =>   400, 'requires' => array('Blacksmith','Carpenter'), 'conditions'=>true, 'icon'=>'rpg_map/mine.svg'),
	'Palisade'              => array('auto' =>   3000, 'min' =>    400, 'work' =>  25000, 'ratio' =>  1000, 'defenses' => 25),
	'Paved Streets'         => array('auto' =>   5000, 'min' =>    500, 'work' =>  20000, 'ratio' =>  1000, 'requires' => array('Dirt Streets','Mason')),
	'Royal Mews'            => array('auto' =>      0, 'min' =>   5000, 'work' =>  25000, 'ratio' =>  2500, 'requires' => array('Armourer', 'Saddler', 'Training Ground'), 'conditions'=>true),
	'Saddler'               => array('auto' =>   2600, 'min' =>    250, 'work' =>   8000, 'ratio' =>   800, 'requires' => array('Leather Tanner')),
	'School'                => array('auto' =>   3000, 'min' =>    300, 'work' =>  15000, 'ratio' =>  3000),
	'Shrine'                => array('auto' =>    500, 'min' =>     50, 'work' =>   5000, 'ratio' =>  4000),
	'Stables'               => array('auto' =>   3200, 'min' =>    200, 'work' =>  10000, 'ratio' =>  1500, 'requires' => array('Saddler'), 'conditions'=>true, 'icon'=>'rpg_map/stables.svg'),
	'Stone Castle'          => array('auto' =>      0, 'min' =>   2000, 'work' => 300000, 'ratio' =>  1600, 'defenses' => 50, 'requires' => array('Stone Wall','Stone Towers','Wood Castle','Dirt Streets','Mason'), 'icon'=>'rpg_map/fortress.svg'),
	'Stone Towers'          => array('auto' =>  50000, 'min' =>   1500, 'work' => 160000, 'ratio' =>  2000, 'defenses' => 30, 'requires' => array('Wood Towers','Stone Wall','Mason'), 'icon'=>'rpg_map/tower_square.svg'),
	'Stone Wall'            => array('auto' =>  25000, 'min' =>   1000, 'work' => 120000, 'ratio' =>  2000, 'defenses' => 40, 'requires' => array('Wood Wall','Mason')),
	'Tailor'                => array('auto' =>    300, 'min' =>     30, 'work' =>   8000, 'ratio' =>   250),
	'Tavern'		=> array('auto' =>    250, 'min' =>    100, 'work' =>   4000, 'ratio' =>   400),
	'Temple'                => array('auto' =>   2400, 'min' =>    200, 'work' =>  20000, 'ratio' =>  2500, 'requires' => array('Shrine','Mason')),
	'Town Hall'             => array('auto' =>   5000, 'min' =>   1000, 'work' =>  20000, 'ratio' =>  2500, 'requires' => array('Carpenter','Garrison','Mason'), 'icon'=>'rpg_map/townhall.svg'),
	'Training Ground'       => array('auto' =>      0, 'min' =>     60, 'work' =>   6000, 'ratio' =>  3500),
	'University'            => array('auto' =>  80000, 'min' =>   8000, 'work' =>  30000, 'ratio' => 10000, 'requires' => array('Paved Streets','Library','Alchemist','Mason')),
	'Weaponsmith'           => array('auto' =>   5000, 'min' =>    600, 'work' =>  10000, 'ratio' =>  2000, 'requires' => array('Blacksmith')),
	'Wood Castle'           => array('auto' =>      0, 'min' =>   1200, 'work' =>  80000, 'ratio' =>  1200, 'defenses' => 50, 'requires' => array('Carpenter','Wood Wall','Wood Towers'), 'icon'=>'rpg_map/fort.svg'),
	'Wood Towers'           => array('auto' =>  10000, 'min' =>   1000, 'work' =>  50000, 'ratio' =>  1200, 'defenses' => 25, 'requires' => array('Carpenter','Wood Wall')),
	'Wood Wall'             => array('auto' =>   6000, 'min' =>    800, 'work' =>  40000, 'ratio' =>  1200, 'defenses' => 40, 'requires' => array('Carpenter','Palisade')),
	'Fishery'		=> array('auto' =>   1800, 'min' =>    500, 'work' =>   6000, 'ratio' =>   800, 'requires' => array('Carpenter','Blacksmith','Dirt Streets'), 'conditions'=>true),
	'Lumber Yard'           => array('auto' =>      0, 'min' =>    600, 'work' =>   8000, 'ratio' =>  1400, 'requires' => array('Carpenter','Blacksmith','Dirt Streets'), 'conditions'=>true),
	'Irrigation Ditches'    => array('auto' =>   3000, 'min' =>    200, 'work' =>  15000, 'ratio' =>   500, 'requires' => array('Carpenter','Blacksmith'), 'conditions'=>true),
);

$BuildingResourcesUpdate = array(
	'Academy'               => array('wood'=>array('construction'=>12000), 'metal'=>array('construction'=>1500), 'goods'=>array('construction'=>200, 'operation'=>15), 'money'=>array('construction'=>100, 'operation'=>5)),
	'Alchemist'             => array('wood'=>array('construction'=>2500), 'metal'=>array('construction'=>500), 'goods'=>array('construction'=>100, 'operation'=>5, 'bonus'=>1), 'money'=>array('construction'=>150, 'operation'=>5, 'bonus'=>3)),
	'Archery Range'         => array('wood'=>array('construction'=>1200, 'operate'=>5), 'metal'=>array('construction'=>250, 'operate'=>5)),
	'Archery School'        => array('wood'=>array('construction'=>1600, 'operate'=>5), 'metal'=>array('construction'=>400, 'operate'=>5)),
	'Armourer'              => array('wood'=>array('construction'=>4000, 'operation'=>15), 'metal'=>array('construction'=>1500, 'operation'=>100), 'goods'=>array('provides'=>2)),
	'Armoury'               => array('wood'=>array('construction'=>3500), 'metal'=>array('construction'=>1200)),
	'Bank'                  => array('wood'=>array('construction'=>3000), 'metal'=>array('construction'=>500), 'goods'=>array('construction'=>1000), 'money'=>array('provides'=>20, 'bonus'=>6)),
	'Barracks'              => array('wood'=>array('construction'=>3000), 'metal'=>array('construction'=>400)),
	'Blacksmith'            => array('wood'=>array('construction'=>3000, 'operation'=>25), 'metal'=>array('construction'=>800, 'operation'=>80), 'goods'=>array('provides'=>8)),
	'Bladesmith'            => array('wood'=>array('construction'=>6000, 'operation'=>30), 'metal'=>array('construction'=>2500, 'operation'=>120), 'goods'=>array('operation'=>2)),
	'Bowyer'                => array('wood'=>array('construction'=>1800, 'operate'=>50), 'metal'=>array('construction'=>300, 'operate'=>10)),
	'Carpenter'             => array('wood'=>array('construction'=>2000), 'metal'=>array('construction'=>250), 'goods'=>array('provides'=>5)),
	'Citadel'               => array('wood'=>array('construction'=>25000), 'metal'=>array('construction'=>8000), 'goods'=>array('construction'=>1500, 'operation'=>10), 'money'=>array('construction'=>2500, 'operation'=>100)),
	'City Hall'             => array('wood'=>array('construction'=>10000), 'metal'=>array('construction'=>500), 'goods'=>array('construction'=>500, 'operation'=>2), 'money'=>array('construction'=>500, 'operation'=>50, 'bonus'=>10)),
	'Dirt Streets'          => array('goods'=>array('bonus'=>5), 'money'=>array('bonus'=>2)),
	'Fairground'            => array('food'=>array('bonus'=>5),'wood'=>array('construction'=>1000, 'bonus'=>5), 'metal'=>array('construction'=>100, 'bonus'=>5), 'goods'=>array('provides'=>10, 'bonus'=>10), 'money'=>array('provides'=>10, 'bonus'=>2)),
	'Fortress'              => array('wood'=>array('construction'=>20000), 'metal'=>array('construction'=>4000), 'goods'=>array('construction'=>1000, 'operation'=>5), 'money'=>array('construction'=>1000, 'operation'=>50)),
	'Garrison'              => array('wood'=>array('construction'=>4000), 'metal'=>array('construction'=>650)),
	'Great Temple'          => array('wood'=>array('construction'=>8000), 'metal'=>array('construction'=>1000), 'money'=>array('operation'=>25, 'bonus'=>8)),
	'Guardhouse'            => array('wood'=>array('construction'=>2500), 'metal'=>array('construction'=>250)),
	'Heavy Armourer'        => array('wood'=>array('construction'=>6000, 'operation'=>20), 'metal'=>array('construction'=>2500, 'operation'=>150), 'goods'=>array('provides'=>2)),
	'Inn'			=> array('wood'=>array('construction'=>1500), 'metal'=>array('construction'=>50), 'goods'=>array('construction'=>100, 'operation'=>4)),
	'Leather Tanner'        => array('wood'=>array('construction'=>2000), 'metal'=>array('construction'=>200), 'goods'=>array('provides'=>10)),
	'Lendan Tower'		=> array('wood'=>array('construction'=>4000), 'metal'=>array('construction'=>250), 'goods'=>array('construction'=>50), 'money'=>array('construction'=>100)),
	'Library'               => array('wood'=>array('construction'=>2000), 'metal'=>array('construction'=>100), 'money'=>array('construction'=>250, 'operation'=>5)),
	'Market'                => array('food'=>array('bonus'=>5), 'wood'=>array('construction'=>500, 'bonus'=>5), 'metal'=>array('bonus'=>5), 'goods'=>array('provides'=>10, 'bonus'=>10)),
	'Mason'                 => array('wood'=>array('construction'=>2500), 'metal'=>array('construction'=>300)),
	'Master Mason'          => array('wood'=>array('construction'=>4000), 'metal'=>array('construction'=>500), 'money'=>array('construction'=>100, 'operation'=>25)),
	'Merchants Quarter'     => array('wood'=>array('construction'=>3500), 'goods'=>array('construction'=>400, 'provides'=>10, 'bonus'=>10), 'money'=>array('construction'=>200, 'provides'=>20, 'bonus'=>12)),
	'Mill'                  => array('food'=>array('bonus'=>10), 'wood'=>array('construction'=>2000), 'metal'=>array('construction'=>200)),
	'Mine'                  => array('wood'=>array('construction'=>4000), 'metal'=>array('bonus'=>50), 'goods'=>array('construction'=>200, 'operation'=>5), 'money'=>array('bonus'=>12)),
	'Palisade'              => array('wood'=>array('construction'=>3000)),
	'Paved Streets'         => array('goods'=>array('bonus'=>5), 'money'=>array('bonus'=>3)),
	'Royal Mews'            => array('food'=>array('operation'=>150),'wood'=>array('construction'=>6000), 'metal'=>array('construction'=>500)),
	'Saddler'               => array('wood'=>array('construction'=>2500), 'metal'=>array('construction'=>400), 'goods'=>array('provides'=>2)),
	'School'                => array('wood'=>array('construction'=>2500), 'metal'=>array('construction'=>200), 'goods'=>array('operation'=>5), 'money'=>array('construction'=>100, 'operation'=>5)),
	'Shrine'                => array('wood'=>array('construction'=>1000), 'metal'=>array('construction'=>20), 'money'=>array('operation'=>10, 'bonus'=>2)),
	'Stables'               => array('food'=>array('operation'=>100), 'wood'=>array('construction'=>3500), 'metal'=>array('construction'=>200)),
	'Stone Castle'          => array('wood'=>array('construction'=>6000), 'metal'=>array('construction'=>3000), 'goods'=>array('construction'=>400), 'money'=>array('construction'=>500, 'operation'=>50)),
	'Stone Towers'          => array('wood'=>array('construction'=>3000), 'metal'=>array('construction'=>2000), 'goods'=>array('construction'=>200), 'money'=>array('construction'=>250, 'operation'=>20)),
	'Stone Wall'            => array('wood'=>array('construction'=>4000), 'metal'=>array('construction'=>1000), 'money'=>array('construction'=>100)),
	'Tailor'                => array('wood'=>array('construction'=>1500), 'metal'=>array('construction'=>50, 'operation'=>1), 'goods'=>array('provides'=>10)),
	'Tavern'		=> array('wood'=>array('construction'=>1000), 'metal'=>array('construction'=>20), 'goods'=>array('construction'=>50, 'operation'=>2)),
	'Temple'                => array('wood'=>array('construction'=>3000), 'metal'=>array('construction'=>200), 'money'=>array('operation'=>25, 'bonus'=>4)),
	'Town Hall'             => array('wood'=>array('construction'=>5000), 'metal'=>array('construction'=>300), 'money'=>array('construction'=>100, 'operation'=>50, 'bonus'=>7)),
	'Training Ground'       => array('wood'=>array('construction'=>500), 'metal'=>array('construction'=>200)),
	'University'            => array('wood'=>array('construction'=>15000), 'metal'=>array('construction'=>1000), 'goods'=>array('construction'=>250, 'operation'=>10), 'money'=>array('construction'=>120, 'operation'=>10)),
	'Weaponsmith'           => array('wood'=>array('construction'=>4000, 'operation'=>25), 'metal'=>array('construction'=>2000, 'operation'=>100), 'goods'=>array('provides'=>1)),
	'Wood Castle'           => array('wood'=>array('construction'=>6000), 'metal'=>array('construction'=>800), 'goods'=>array('construction'=>150), 'money'=>array('construction'=>200, 'operation'=>40)),
	'Wood Towers'           => array('wood'=>array('construction'=>4000), 'metal'=>array('construction'=>200), 'goods'=>array('construction'=>50), 'money'=>array('construction'=>100, 'operation'=>10)),
	'Wood Wall'             => array('wood'=>array('construction'=>5000), 'metal'=>array('construction'=>100)),
	'Fishery'               => array('wood'=>array('construction'=>800), 'metal'=>array('construction'=>100), 'goods'=>array('construction'=>50), 'food'=>array('provides'=>50, 'bonus'=>5)),
	'Lumber Yard'           => array('wood'=>array('construction'=>500, 'bonus'=>4), 'metal'=>array('construction'=>100, 'operation'=>1)),
	'Irrigation Ditches'    => array('wood'=>array('construction'=>600), 'metal'=>array('construction'=>25), 'goods'=>array('construction'=>20), 'food'=>array('provides'=>100, 'bonus'=>1)),
);


$EntourageDataUpdate = array(
	'follower'          => array('train' => 50, 'provider' =>'Inn'),
	'herald'            => array('train' =>100, 'provider' =>'School'),
	'merchant'          => array('train' =>120, 'provider' =>'Market'),
	'priest'            => array('train' =>150, 'provider' =>'Temple'),
	'prospector'        => array('train' =>200, 'provider' =>'Library'),
	'scholar'           => array('train' =>300, 'provider' =>'University'),
	'scout'             => array('train' => 65, 'provider' =>'Inn'),
	'spy'               => array('train' =>500, 'provider' =>'Academy'),
	'translator'        => array('train' =>125, 'provider' =>'School'),
);

$EquipmentDataUpdate = array(
	'axe'               => array('type' => 'weapon',    'ranged' =>  0, 'melee' =>  10, 'defense' =>   0, 'train' => 20, 'resupply' => 20,	'provider' => 'Blacksmith',  'trainer' => 'Training Ground',		'icon' => 'items/streitaxt2.png'),
	'spear'             => array('type' => 'weapon',    'ranged' =>  0, 'melee' =>  20, 'defense' =>   0, 'train' => 30, 'resupply' => 30,	'provider' => 'Blacksmith',  'trainer' => 'Training Ground',		'icon' => 'items/spear2.png'),
	'pike'              => array('type' => 'weapon',    'ranged' =>  0, 'melee' =>  30, 'defense' =>   0, 'train' => 50, 'resupply' => 60,	'provider' => 'Weaponsmith',  'trainer' => 'Guardhouse',				'icon' => 'items/hellebarde2.png'),
	'mace'              => array('type' => 'weapon',    'ranged' =>  0, 'melee' =>  35, 'defense' =>   0, 'train' => 60, 'resupply' =>100,	'provider' => 'Weaponsmith',  'trainer' => 'Barracks',				'icon' => 'items/hellebarde2.png'),
	'sword'             => array('type' => 'weapon',    'ranged' =>  0, 'melee' =>  45, 'defense' =>   0, 'train' => 80, 'resupply' =>250,	'provider' => 'Bladesmith', 'trainer' => 'Barracks',					'icon' => 'items/schwert2.png'),
	'broadsword'        => array('type' => 'weapon',    'ranged' =>  0, 'melee' =>  50, 'defense' =>   0, 'train' => 90, 'resupply' =>350,	'provider' => 'Bladesmith', 'trainer' => 'Garrison',					'icon' => 'items/claymore2.png'),
	'shortbow'          => array('type' => 'weapon',    'ranged' => 40, 'melee' =>   0, 'defense' =>   0, 'train' => 50, 'resupply' => 50,	'provider' => 'Bowyer',      'trainer' => 'Archery Range',			'icon' => 'items/shortbow2.png'),
	'crossbow'          => array('type' => 'weapon',    'ranged' => 60, 'melee' =>   0, 'defense' =>   0, 'train' => 60, 'resupply' => 75,	'provider' => 'Bowyer',      'trainer' => 'Archery Range',			'icon' => 'items/armbrust2.png'),
	'longbow'           => array('type' => 'weapon',    'ranged' => 80, 'melee' =>   0, 'defense' =>   0, 'train' =>100, 'resupply' => 80,	'provider' => 'Bowyer',      'trainer' => 'Archery School',			'icon' => 'items/longbow2.png'),
	'cloth armour'      => array('type' => 'armour',    'ranged' =>  0, 'melee' =>   0, 'defense' =>  10, 'train' => 10, 'resupply' => 30,	'provider' => 'Tailor',				'trainer' => 'Training Ground',	'icon' => 'items/clotharmour2.png'),
	'leather armour'    => array('type' => 'armour',    'ranged' =>  0, 'melee' =>   0, 'defense' =>  20, 'train' => 20, 'resupply' => 50,	'provider' => 'Leather Tanner',	'trainer' => 'Guardhouse',			'icon' => 'items/leatherarmour2.png'),
	'scale armour'      => array('type' => 'armour',    'ranged' =>  0, 'melee' =>   0, 'defense' =>  40, 'train' => 30, 'resupply' =>100,	'provider' => 'Armourer',			'trainer' => 'Barracks',			'icon' => 'items/schuppenpanzer2.png'),
	'chainmail'         => array('type' => 'armour',    'ranged' =>  0, 'melee' =>   0, 'defense' =>  60, 'train' => 50, 'resupply' =>300,	'provider' => 'Armourer',			'trainer' => 'Garrison',			'icon' => 'items/kettenpanzer2.png'),
	'plate armour'      => array('type' => 'armour',    'ranged' =>  0, 'melee' =>   0, 'defense' =>  80, 'train' => 80, 'resupply' =>500,	'provider' => 'Heavy Armourer',	'trainer' => 'Wood Castle',		'icon' => 'items/plattenpanzer2.png'),
	'horse'             => array('type' => 'equipment', 'ranged' =>  0, 'melee' =>  20, 'defense' =>  20, 'train' => 60, 'resupply' =>300,	'provider' => 'Stables',     'trainer' => 'Barracks',					'icon' => 'items/packpferd2.png'),
	'war horse'         => array('type' => 'equipment', 'ranged' =>  0, 'melee' =>  25, 'defense' =>  30, 'train' =>100, 'resupply' =>800,	'provider' => 'Royal Mews',  'trainer' => 'Wood Castle',				'icon' => 'items/warhorse2.png'),
	'shield'            => array('type' => 'equipment', 'ranged' =>  0, 'melee' =>   0, 'defense' =>  25, 'train' => 40, 'resupply' => 40,	'provider' => 'Carpenter',   'trainer' => 'Guardhouse',				'icon' => 'items/shield2.png'),
	'javelin'           => array('type' => 'equipment', 'ranged' => 65, 'melee' =>  10, 'defense' =>   0, 'train' => 40, 'resupply' => 35,	'provider' => 'Weaponsmith', 'trainer' => 'Guardhouse',				'icon' => 'items/javelin2.png'),
	'short sword'       => array('type' => 'equipment', 'ranged' =>  0, 'melee' =>  10, 'defense' =>   5, 'train' => 40, 'resupply' => 50,	'provider' => 'Bladesmith', 'trainer' => 'Barracks',					'icon' => 'items/kurzschwert2.png'),
);

$FeatureDataUpdate = array(
	'settlement'    => array('hidden'=>true,    'work'=>0,     'icon'=>null,                           'icon_uc'=>null),
	'bridge'        => array('hidden'=>false,   'work'=>15000, 'icon'=>'rpg_map/bridge_stone1.svg',    'icon_uc'=>'rpg_map/bridge_stone1_outline.svg'),
	'tower'         => array('hidden'=>false,   'work'=>9000,  'icon'=>'rpg_map/watch_tower.svg',      'icon_uc'=>'rpg_map/watch_tower_outline.svg'),
	'borderpost'    => array('hidden'=>false,   'work'=>100,   'icon'=>'rpg_map/sign_post.svg',        'icon_uc'=>'rpg_map/sign_post_outline.svg'),
	'signpost'      => array('hidden'=>false,   'work'=>60,    'icon'=>'rpg_map/sign_crossroad.svg',   'icon_uc'=>'rpg_map/sign_crossroad_outline.svg'),
	'docks'         => array('hidden'=>false,   'work'=>10000, 'icon'=>'rpg_map/docks.svg',            'icon_uc'=>'rpg_map/docks_outline.svg'),
);

$NamesUpdate = array(
	array('name'=>'european.central', 'colour'=>'#ffffff', 'free'=>true, 'cost'=>0, 'contains'=>array('names')),
	array('name'=>'european.northern', 'colour'=>'#ddddff', 'free'=>false, 'cost'=>250, 'contains'=>array('names')),
	array('name'=>'european.southern', 'colour'=>'#ffdddd', 'free'=>false, 'cost'=>250, 'contains'=>array('names')),
	array('name'=>'european.eastern', 'colour'=>'#ddffdd', 'free'=>false, 'cost'=>250, 'contains'=>array('names')),
	array('name'=>'oriental', 'colour'=>'#f02040', 'free'=>false, 'cost'=>500, 'contains'=>array('names')),
	array('name'=>'indian', 'colour'=>'#702020', 'free'=>false, 'cost'=>500, 'contains'=>array('names')),
	array('name'=>'asian', 'colour'=>'#803060', 'free'=>false, 'cost'=>500, 'contains'=>array('names')),
	array('name'=>'african', 'colour'=>'#302000', 'free'=>false, 'cost'=>500, 'contains'=>array('names')),
);

$PermissionDataUpdate = array(
	'settlement' => array(
		'visit'    	=> array('use_value'=>false, 'use_reserve'=>false),
		'docks'    	=> array('use_value'=>false, 'use_reserve'=>false),
		'resupply'  => array('use_value'=>true, 'use_reserve'=>false),
		'mobilize'  => array('use_value'=>true, 'use_reserve'=>true),
		'construct' => array('use_value'=>false, 'use_reserve'=>true),
		'recruit'   => array('use_value'=>true, 'use_reserve'=>false),
		'trade'    	=> array('use_value'=>false, 'use_reserve'=>false),
	),
	'realm' => array(
		'expel'   	=> array('use_value'=>false, 'use_reserve'=>false),
		'diplomacy'	=> array('use_value'=>false, 'use_reserve'=>false),
		'laws'		=> array('use_value'=>false, 'use_reserve'=>false),
		'positions'	=> array('use_value'=>false, 'use_reserve'=>false),
	)
);

$ResourceDataUpdate = array(
	'food'          => array('gold'=>0.01),
        'wood'          => array('gold'=>0.02),
        'metal'         => array('gold'=>0.025),
        'goods'         => array('gold'=>0.1),
        'money'         => array('gold'=>0.5),
);

$SettingsUpdate = array(
        'travel.bridgedistance' => 250,
        'spot.basedistance' => 1000,
        'spot.scoutmod' => 500,
        'spot.towerdistance' => 2500,
        'act.basedistance' => 250,
        'act.scoutmod' => 50,
        'cycle' => 0
);
