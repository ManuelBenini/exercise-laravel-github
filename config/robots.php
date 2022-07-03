<?php

class Robot{

	public $name;
	public $production_date;
	public $description;
	public $image;
	public $nuke_Available;

	public function __construct($_name, $_production_date, $_description, $_image, $_nuke_Available) {
		$this->name = $_name;
		$this->production_date = $_production_date;
		$this->description = $_description;
		$this->image = $_image;
		$this->nuke_Available = $_nuke_Available;
	}

}

return [
	new Robot('TX-55 Metal Gear', '2009-05-14', 'TX-55 Metal Gear is the Metal Gear model\'s designation in the original Metal Gear game,[4] although it is simply referred as "Metal Gear" and no particular meaning is given behind this codename.', 'https://upload.wikimedia.org/wikipedia/en/b/b1/Metal_Gear_history.jpg', 0),

	new Robot('Metal Gear REX', '2012-06-25', 'Metal Gear REX has near-impenetrable compound armor, a pair of 30 mm gatling guns,[6] anti-tank missiles, and a free-electron laser, to protect itself from conventional forces. Its primary weapon, however, is a magnetic railgun capable of delivering an untraceable nuclear warhead anywhere in the world, without the propellant trail or launch flare that gives away the launch position of a traditional ballistic missile.', 'https://m.media-amazon.com/images/I/51AUzgkwSQL._AC_SY355_.jpg', 1),

	new Robot('Metal Gear RAY', '2013-02-19', 'RAY has a pair of Gatling guns and missile launchers on its back and knees to defend itself from more conventional battlefield threats, its primary weapon is a powerful water jet cutter, which can cut through heavily armored foes, such as Metal Gear derivatives', 'https://i.pinimg.com/originals/f8/3f/da/f83fdab8ad21dedfa9cf4675a91f46a7.jpg', 0)

];

