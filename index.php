<?php
// \www\vcd-games\index.php

// --- CONFIG PARTAGÉE ---
$EJS_BASE = 'emulatorjs';
$EJS_DATA = $EJS_BASE . '/data';
$DEFAULT_TITLE = 'VCD 300 – Menu';


$GAMES = [
    1   => ['name' => '1942', 'file' => 'emulatorjs/roms/nes/1-1942.nes', 'core' => 'nes'],
    2   => ['name' => '1943', 'file' => 'emulatorjs/roms/nes/2-1943.nes', 'core' => 'nes'],
    3   => ['name' => 'Adventure Island', 'file' => 'emulatorjs/roms/nes/3-AdventureIsland.nes', 'core' => 'nes'],
    4   => ['name' => 'Battle City', 'file' => 'emulatorjs/roms/nes/4-BattleCity.nes', 'core' => 'nes'],
    5   => ['name' => 'Twin Bee', 'file' => 'emulatorjs/roms/nes/5-TwinBee.nes', 'core' => 'nes'],
    6   => ['name' => 'Bomber Man', 'file' => 'emulatorjs/roms/nes/6-BomberMan.nes', 'core' => 'nes'],
    7   => ['name' => 'Bomb Jack', 'file' => 'emulatorjs/roms/nes/7-BombJack.nes', 'core' => 'nes'],
    8   => ['name' => 'Shufflepuck Cafe', 'file' => 'emulatorjs/roms/nes/8-ShufflepuckCafe.nes', 'core' => 'nes'],
    9   => ['name' => 'Circus', 'file' => 'emulatorjs/roms/nes/9-Circus.nes', 'core' => 'nes'],
    10  => ['name' => 'Contra', 'file' => 'emulatorjs/roms/nes/10-Contra.nes', 'core' => 'nes'],
    11  => ['name' => 'Dhexdes', 'file' => 'emulatorjs/roms/nes/1-Dhexdes.nes', 'core' => 'nes'],
    12  => ['name' => 'Space Hospital', 'file' => 'emulatorjs/roms/nes/2-SpaceHospital.nes', 'core' => 'nes'],
    13  => ['name' => 'Fire Dragon', 'file' => 'emulatorjs/roms/nes/3-FireDragon.nes', 'core' => 'nes'],
    14  => ['name' => 'Galg', 'file' => 'emulatorjs/roms/nes/4-Galg.nes', 'core' => 'nes'],
    15  => ['name' => 'Jewelry', 'file' => 'emulatorjs/roms/nes/5-Jewelry.nes', 'core' => 'nes'],
    16  => ['name' => 'Super Mario', 'file' => 'emulatorjs/roms/nes/6-SuperMario.nes', 'core' => 'nes'],
    17  => ['name' => 'Pooyan', 'file' => 'emulatorjs/roms/nes/7-Pooyan.nes', 'core' => 'nes'],
    18  => ['name' => 'Rainbow Island', 'file' => 'emulatorjs/roms/nes/8-RainbowIsland.nes', 'core' => 'nes'],
    19  => ['name' => 'Tank 2', 'file' => 'emulatorjs/roms/nes/9-Tank2.nes', 'core' => 'nes'],
    20  => ['name' => 'Tetris', 'file' => 'emulatorjs/roms/nes/10-Tetris.nes', 'core' => 'nes'],
    21  => ['name' => '10 Yard Fighter', 'file' => 'emulatorjs/roms/nes/1-10-YardFight.nes', 'core' => 'nes'],
    22  => ['name' => 'Arabian', 'file' => 'emulatorjs/roms/nes/2-Arabian.nes', 'core' => 'nes'],
    23  => ['name' => 'Argus', 'file' => 'emulatorjs/roms/nes/3-Argus.nes', 'core' => 'nes'],
    24  => ['name' => 'Arkaniod', 'file' => 'emulatorjs/roms/nes/4-Arkanoid.nes', 'core' => 'nes'],
    25  => ['name' => 'Binary Land', 'file' => 'emulatorjs/roms/nes/5-BinaryLand.nes', 'core' => 'nes'],
    26  => ['name' => 'Bloon Fight', 'file' => 'emulatorjs/roms/nes/6-BalloonFight.nes', 'core' => 'nes'],
    27  => ['name' => 'Burger Time', 'file' => 'emulatorjs/roms/nes/7-BurgerTime.nes', 'core' => 'nes'],
    28  => ['name' => 'B-wings', 'file' => 'emulatorjs/roms/nes/8-B-Wings.nes', 'core' => 'nes'],
    29  => ['name' => 'Route', 'file' => 'emulatorjs/roms/nes/1-RoadFighter.nes', 'core' => 'nes'],
    30  => ['name' => 'Chess', 'file' => 'emulatorjs/roms/nes/10-Chess.nes', 'core' => 'nes'],
    31  => ['name' => 'Clu Land', 'file' => 'emulatorjs/roms/nes/1-CluLand.nes', 'core' => 'nes'],
    32  => ['name' => 'Combat', 'file' => 'emulatorjs/roms/nes/2-Combat.nes', 'core' => 'nes'],
    33  => ['name' => 'Digdug', 'file' => 'emulatorjs/roms/nes/3-Digdug.nes', 'core' => 'nes'],
    34  => ['name' => 'Donkey 1', 'file' => 'emulatorjs/roms/nes/4-Donkey1.nes', 'core' => 'nes'],
    35  => ['name' => 'Donkey 2', 'file' => 'emulatorjs/roms/nes/5-Donkey2.nes', 'core' => 'nes'],
    36  => ['name' => 'Donkey 3', 'file' => 'emulatorjs/roms/nes/6-Donkey3.nes', 'core' => 'nes'],
    37  => ['name' => 'Double Dribble', 'file' => 'emulatorjs/roms/nes/7-DoubleDribble.nes', 'core' => 'nes'],
    38  => ['name' => 'Dragon Unit', 'file' => 'emulatorjs/roms/nes/8-DragonUnit.nes', 'core' => 'nes'],
    39  => ['name' => 'Elevator', 'file' => 'emulatorjs/roms/nes/9-Elevator.nes', 'core' => 'nes'],
    40  => ['name' => 'Exerion', 'file' => 'emulatorjs/roms/nes/10-Exerion.nes', 'core' => 'nes'],
    41  => ['name' => 'Fire', 'file' => 'emulatorjs/roms/nes/1-Fire.nes', 'core' => 'nes'],
    42  => ['name' => 'Formation 2', 'file' => 'emulatorjs/roms/nes/2-Formation2.nes', 'core' => 'nes'],
    43  => ['name' => 'Front Line', 'file' => 'emulatorjs/roms/nes/3-FrontLine.nes', 'core' => 'nes'],
    44  => ['name' => 'Galage', 'file' => 'emulatorjs/roms/nes/4-Galage.nes', 'core' => 'nes'],
    45  => ['name' => 'Golf', 'file' => 'emulatorjs/roms/nes/5-Golf.nes', 'core' => 'nes'],
    46  => ['name' => 'Goones 2', 'file' => 'emulatorjs/roms/nes/6-Goones2.nes', 'core' => 'nes'],
    47  => ['name' => 'Gradius', 'file' => 'emulatorjs/roms/nes/7-Gradius.nes', 'core' => 'nes'],
    48  => ['name' => 'Green Ruslin Attack', 'file' => 'emulatorjs/roms/nes/8-GreenRuslinAttack.nes', 'core' => 'nes'],
    49  => ['name' => 'Gygroone', 'file' => 'emulatorjs/roms/nes/9-Gygroone.nes', 'core' => 'nes'],
    50  => ['name' => 'Hely', 'file' => 'emulatorjs/roms/nes/10-Hely.nes', 'core' => 'nes'],
    51  => ['name' => 'Hogan\'s Alley', 'file' => 'emulatorjs/roms/nes/1-HogansAlley.nes', 'core' => 'nes'],
    52  => ['name' => 'Ice Climber', 'file' => 'emulatorjs/roms/nes/2-IceClimber.nes', 'core' => 'nes'],
    53  => ['name' => 'Ice Hockey', 'file' => 'emulatorjs/roms/nes/3-IceHockey.nes', 'core' => 'nes'],
    54  => ['name' => 'Jackal', 'file' => 'emulatorjs/roms/nes/4-Jackal.nes', 'core' => 'nes'],
    55  => ['name' => 'Jianqai', 'file' => 'emulatorjs/roms/nes/5-Jianqai.nes', 'core' => 'nes'],
    56  => ['name' => 'Legend Kage', 'file' => 'emulatorjs/roms/nes/6-LegendKage.nes', 'core' => 'nes'],
    57  => ['name' => 'Karateke', 'file' => 'emulatorjs/roms/nes/7-Karateke.nes', 'core' => 'nes'],
    58  => ['name' => 'Knit', 'file' => 'emulatorjs/roms/nes/8-Knit.nes', 'core' => 'nes'],
    59  => ['name' => 'Yie Ar Kung-Fu', 'file' => 'emulatorjs/roms/nes/9-YieArKung-Fu.nes', 'core' => 'nes'],
    60  => ['name' => 'The Little Lady Mermaid', 'file' => 'emulatorjs/roms/nes/10-TheLittleLadyMermaid.nes', 'core' => 'nes'],
    61  => ['name' => 'Lode Running', 'file' => 'emulatorjs/roms/nes/1-LodeRunning.nes', 'core' => 'nes'],
    62  => ['name' => 'Lode Running 2', 'file' => 'emulatorjs/roms/nes/2-LodeRunning2.nes', 'core' => 'nes'],
    63  => ['name' => 'Lot Lot', 'file' => 'emulatorjs/roms/nes/3-LotLot.nes', 'core' => 'nes'],
    64  => ['name' => 'Lunar Ball', 'file' => 'emulatorjs/roms/nes/4-LunarBall.nes', 'core' => 'nes'],
    65  => ['name' => 'Magmax', 'file' => 'emulatorjs/roms/nes/5-Magmax.nes', 'core' => 'nes'],
    66  => ['name' => 'Mahj4', 'file' => 'emulatorjs/roms/nes/6-Mahj4.nes', 'core' => 'nes'],
    67  => ['name' => 'Majong', 'file' => 'emulatorjs/roms/nes/7-Majong.nes', 'core' => 'nes'],
    68  => ['name' => 'Mr mary', 'file' => 'emulatorjs/roms/nes/9-Mrmary.nes', 'core' => 'nes'],
    69  => ['name' => 'Mappy', 'file' => 'emulatorjs/roms/nes/8-Mappy.nes', 'core' => 'nes'],
    70  => ['name' => 'Millipede', 'file' => 'emulatorjs/roms/nes/10-Millipede.nes', 'core' => 'nes'],
    71  => ['name' => 'Mirror', 'file' => 'emulatorjs/roms/nes/1-Mirror.nes', 'core' => 'nes'],
    72  => ['name' => 'Knit 2', 'file' => 'emulatorjs/roms/nes/2-Knit2.nes', 'core' => 'nes'],
    73  => ['name' => 'Nuts Milk', 'file' => 'emulatorjs/roms/nes/3-NutsMilk.nes', 'core' => 'nes'],
    74  => ['name' => 'Othello', 'file' => 'emulatorjs/roms/nes/4-Othello.nes', 'core' => 'nes'],
    75  => ['name' => 'Pacman', 'file' => 'emulatorjs/roms/nes/5-Pacman.nes', 'core' => 'nes'],
    76  => ['name' => 'Pacland', 'file' => 'emulatorjs/roms/nes/6-Pacland.nes', 'core' => 'nes'],
    77  => ['name' => 'Antarctic Adventure', 'file' => 'emulatorjs/roms/nes/7-AntarcticAdventure.nes', 'core' => 'nes'],
    78  => ['name' => 'Poke', 'file' => 'emulatorjs/roms/nes/8-Poke.nes', 'core' => 'nes'],
    79  => ['name' => 'Animal Town', 'file' => 'emulatorjs/roms/nes/9-AnimalTown.nes', 'core' => 'nes'],
    80  => ['name' => 'Popeye', 'file' => 'emulatorjs/roms/nes/10-Popeye.nes', 'core' => 'nes'],
    81  => ['name' => 'Gun Smoke', 'file' => 'emulatorjs/roms/nes/9-GunSmoke.nes', 'core' => 'nes'],
    82  => ['name' => 'Rock Man', 'file' => 'emulatorjs/roms/nes/2-RockMan.nes', 'core' => 'nes'],
    83  => ['name' => 'Sasa', 'file' => 'emulatorjs/roms/nes/3-Sasa.nes', 'core' => 'nes'],
    84  => ['name' => 'Star Juster', 'file' => 'emulatorjs/roms/nes/4-StarJuster.nes', 'core' => 'nes'],
    85  => ['name' => 'Shadow', 'file' => 'emulatorjs/roms/nes/5-Shadow.nes', 'core' => 'nes'],
    86  => ['name' => 'Side Pocket', 'file' => 'emulatorjs/roms/nes/6-SidePocket.nes', 'core' => 'nes'],
    87  => ['name' => 'Sky Destroyer', 'file' => 'emulatorjs/roms/nes/7-SkyDestroyer.nes', 'core' => 'nes'],
    88  => ['name' => 'Sloon', 'file' => 'emulatorjs/roms/nes/8-Sloon.nes', 'core' => 'nes'],
    89  => ['name' => 'Gun_smoke', 'file' => 'emulatorjs/roms/nes/9-GunSmoke.nes', 'core' => 'nes'],
    90  => ['name' => 'Space', 'file' => 'emulatorjs/roms/nes/10-Space.nes', 'core' => 'nes'],
    91  => ['name' => 'Spelunk', 'file' => 'emulatorjs/roms/nes/1-Spelunk.nes', 'core' => 'nes'],
    92  => ['name' => 'Star Gate', 'file' => 'emulatorjs/roms/nes/3-StarGate.nes', 'core' => 'nes'],
    93  => ['name' => 'Star Soldier', 'file' => 'emulatorjs/roms/nes/4-StarSoldier.nes', 'core' => 'nes'],
    94  => ['name' => 'Star Steet', 'file' => 'emulatorjs/roms/nes/2-StarForce.nes', 'core' => 'nes'],
    95  => ['name' => 'Blades Steet', 'file' => 'emulatorjs/roms/nes/5-BladesSteet.nes', 'core' => 'nes'],
    96  => ['name' => 'Tennis', 'file' => 'emulatorjs/roms/nes/6-Tennis.nes', 'core' => 'nes'],
    97  => ['name' => 'Jerra Presta', 'file' => 'emulatorjs/roms/nes/7-JerraPresta.nes', 'core' => 'nes'],
    98  => ['name' => 'Wrecking Crew', 'file' => 'emulatorjs/roms/nes/8-WreckingCrew.nes', 'core' => 'nes'],
    99  => ['name' => 'Wres', 'file' => 'emulatorjs/roms/nes/9-Wres.nes', 'core' => 'nes'],
    100 => ['name' => 'Iron Fighter', 'file' => 'emulatorjs/roms/nes/10-IronFighter.nes', 'core' => 'nes'],
    101 => ['name' => 'Badminton', 'file' => 'emulatorjs/roms/nes/1-Badminton.nes', 'core' => 'nes'],
    102 => ['name' => 'Bokosuka', 'file' => 'emulatorjs/roms/nes/2-Bokosuka.nes', 'core' => 'nes'],
    103 => ['name' => 'Dough Boy', 'file' => 'emulatorjs/roms/nes/3-DoughBoy.nes', 'core' => 'nes'],
    104 => ['name' => 'Flappy', 'file' => 'emulatorjs/roms/nes/4-Flappy.nes', 'core' => 'nes'],
    105 => ['name' => 'Geimos', 'file' => 'emulatorjs/roms/nes/5-Geimos.nes', 'core' => 'nes'],
    106 => ['name' => 'Penguin Ball', 'file' => 'emulatorjs/roms/nes/6-PenguinBall.nes', 'core' => 'nes'],
    107 => ['name' => 'Seicross', 'file' => 'emulatorjs/roms/nes/7-Seicross.nes', 'core' => 'nes'],
    108 => ['name' => 'Chack Pop', 'file' => 'emulatorjs/roms/nes/8-ChackPop.nes', 'core' => 'nes'],
    109 => ['name' => 'Joust', 'file' => 'emulatorjs/roms/nes/9-Joust.nes', 'core' => 'nes'],
    110 => ['name' => 'Macro', 'file' => 'emulatorjs/roms/nes/10-Macross.nes', 'core' => 'nes'],
    111 => ['name' => 'Majiang2', 'file' => 'emulatorjs/roms/nes/1-Maijang2.nes', 'core' => 'nes'],
    112 => ['name' => 'Hector', 'file' => 'emulatorjs/roms/nes/2-Hector.nes', 'core' => 'nes'],
    113 => ['name' => 'Wrestling', 'file' => 'emulatorjs/roms/nes/3-Wrestling.nes', 'core' => 'nes'],
    114 => ['name' => 'China Chess', 'file' => 'emulatorjs/roms/nes/4-ChinaChess.nes', 'core' => 'nes'],
    115 => ['name' => 'Baseball', 'file' => 'emulatorjs/roms/nes/6-Baseball.nes', 'core' => 'nes'],
    116 => ['name' => 'Card Game', 'file' => 'emulatorjs/roms/nes/7-CardGame.nes', 'core' => 'nes'],
    117 => ['name' => 'Space Ship', 'file' => 'emulatorjs/roms/nes/8-SpaceShip.nes', 'core' => 'nes'],
    118 => ['name' => 'Kero', 'file' => 'emulatorjs/roms/nes/9-Kero.nes', 'core' => 'nes'],
    119 => ['name' => 'King Knight', 'file' => 'emulatorjs/roms/nes/10-KingKnight.nes', 'core' => 'nes'],
    120 => ['name' => 'Dragon\'s Lair', 'file' => 'emulatorjs/roms/nes/3-Commando.nes', 'core' => 'nes'],
    121 => ['name' => 'Moal', 'file' => 'emulatorjs/roms/nes/1-Moal.nes', 'core' => 'nes'],
    122 => ['name' => '80 Day Navigation', 'file' => 'emulatorjs/roms/nes/2-80DayNavigation.nes', 'core' => 'nes'],
    123 => ['name' => 'Puzzle', 'file' => 'emulatorjs/roms/nes/3-Puzzle.nes', 'core' => 'nes'],
    124 => ['name' => 'Squar Shoot', 'file' => 'emulatorjs/roms/nes/4-SquarShoot.nes', 'core' => 'nes'],
    125 => ['name' => 'The New Type', 'file' => 'emulatorjs/roms/nes/5-TheNewType.nes', 'core' => 'nes'],
    126 => ['name' => 'Sumo', 'file' => 'emulatorjs/roms/nes/6-Sumo.nes', 'core' => 'nes'],
    127 => ['name' => 'King Rail', 'file' => 'emulatorjs/roms/nes/7-KingRail.nes', 'core' => 'nes'],
    128 => ['name' => 'Toco', 'file' => 'emulatorjs/roms/nes/8-Toco.nes', 'core' => 'nes'],
    129 => ['name' => 'Mickey', 'file' => 'emulatorjs/roms/nes/9-Mickey.nes', 'core' => 'nes'],
    130 => ['name' => '4wd Battle', 'file' => 'emulatorjs/roms/nes/10-4wdBattle.nes', 'core' => 'nes'],
    131 => ['name' => 'ASO', 'file' => 'emulatorjs/roms/nes/1-ASO.nes', 'core' => 'nes'],
    132 => ['name' => 'Ashura', 'file' => 'emulatorjs/roms/nes/2-Ashura.nes', 'core' => 'nes'],
    133 => ['name' => 'Battle Life', 'file' => 'emulatorjs/roms/nes/3-Commando.nes', 'core' => 'nes'],
    134 => ['name' => 'Buggy Pop', 'file' => 'emulatorjs/roms/nes/4-BuggyPop.nes', 'core' => 'nes'],
    135 => ['name' => 'Champion', 'file' => 'emulatorjs/roms/nes/5-Champion.nes', 'core' => 'nes'],
    136 => ['name' => 'Lost Karate', 'file' => 'emulatorjs/roms/nes/7-Karate.nes', 'core' => 'nes'],
    137 => ['name' => 'Gambling', 'file' => 'emulatorjs/roms/nes/8-Gambling.nes', 'core' => 'nes'],
    138 => ['name' => 'Maze', 'file' => 'emulatorjs/roms/nes/9-Maze.nes', 'core' => 'nes'],
    139 => ['name' => 'Mteal Gear', 'file' => 'emulatorjs/roms/nes/10-MTealGear.nes', 'core' => 'nes'],
    140 => ['name' => 'Lost World', 'file' => 'emulatorjs/roms/nes/6-LostWorld.nes', 'core' => 'nes'],
    141 => ['name' => 'Space Hot', 'file' => 'emulatorjs/roms/nes/1-SpaceHot.nes', 'core' => 'nes'],
    142 => ['name' => 'Tennis2', 'file' => 'emulatorjs/roms/nes/2-Tennis2.nes', 'core' => 'nes'],
    143 => ['name' => 'Tiger', 'file' => 'emulatorjs/roms/nes/3-Tiger.nes', 'core' => 'nes'],
    144 => ['name' => 'Pyramid', 'file' => 'emulatorjs/roms/nes/4-Pyramid.nes', 'core' => 'nes'],
    145 => ['name' => 'Brush', 'file' => 'emulatorjs/roms/nes/5-Brush.nes', 'core' => 'nes'],
    146 => ['name' => 'Donkey Math', 'file' => 'emulatorjs/roms/nes/6-DonkeyMath.nes', 'core' => 'nes'],
    147 => ['name' => 'Son Son', 'file' => 'emulatorjs/roms/nes/7-SonSon.nes', 'core' => 'nes'],
    148 => ['name' => 'Exed Exes', 'file' => 'emulatorjs/roms/nes/8-ExedExes.nes', 'core' => 'nes'],
    149 => ['name' => 'Volley Ball', 'file' => 'emulatorjs/roms/nes/9-VolleyBall.nes', 'core' => 'nes'],
    150 => ['name' => 'Volguard', 'file' => 'emulatorjs/roms/nes/10-Volguard.nes', 'core' => 'nes'],
    151 => ['name' => 'Brush', 'file' => 'emulatorjs/roms/nes/5-Brush.nes', 'core' => 'nes'],
    152 => ['name' => 'Mappy', 'file' => 'emulatorjs/roms/nes/8-Mappy.nes', 'core' => 'nes'],
    153 => ['name' => 'Formation2', 'file' => 'emulatorjs/roms/nes/2-Formation2.nes', 'core' => 'nes'],
    154 => ['name' => 'Twin Bee', 'file' => 'emulatorjs/roms/nes/5-TwinBee.nes', 'core' => 'nes'],
    155 => ['name' => 'Adventure Island', 'file' => 'emulatorjs/roms/nes/3-AdventureIsland.nes', 'core' => 'nes'],
    156 => ['name' => 'Argus', 'file' => 'emulatorjs/roms/nes/3-Argus.nes', 'core' => 'nes'],
    157 => ['name' => 'Mteal Gear', 'file' => 'emulatorjs/roms/nes/10-MTealGear.nes', 'core' => 'nes'],
    158 => ['name' => 'Majiang2', 'file' => 'emulatorjs/roms/nes/1-Maijang2.nes', 'core' => 'nes'],
    159 => ['name' => 'Sumo', 'file' => 'emulatorjs/roms/nes/6-Sumo.nes', 'core' => 'nes'],
    160 => ['name' => 'Card Game', 'file' => 'emulatorjs/roms/nes/7-CardGame.nes', 'core' => 'nes'],
    161 => ['name' => 'Son Son', 'file' => 'emulatorjs/roms/nes/7-SonSon.nes', 'core' => 'nes'],
    162 => ['name' => 'ASO', 'file' => 'emulatorjs/roms/nes/1-ASO.nes', 'core' => 'nes'],
    163 => ['name' => 'Bloon Fight', 'file' => 'emulatorjs/roms/nes/6-BalloonFight.nes', 'core' => 'nes'],
    164 => ['name' => 'Hely', 'file' => 'emulatorjs/roms/nes/10-Hely.nes', 'core' => 'nes'],
    165 => ['name' => 'Maze', 'file' => 'emulatorjs/roms/nes/9-Maze.nes', 'core' => 'nes'],
    166 => ['name' => 'Doney Math', 'file' => 'emulatorjs/roms/nes/6-DonkeyMath.nes', 'core' => 'nes'],
    167 => ['name' => 'B-wings', 'file' => 'emulatorjs/roms/nes/8-B-Wings.nes', 'core' => 'nes'],
    168 => ['name' => 'Volguard', 'file' => 'emulatorjs/roms/nes/10-Volguard.nes', 'core' => 'nes'],
    169 => ['name' => 'Flappy', 'file' => 'emulatorjs/roms/nes/4-Flappy.nes', 'core' => 'nes'],
    170 => ['name' => 'Hogan\'sAlley', 'file' => 'emulatorjs/roms/nes/1-HogansAlley.nes', 'core' => 'nes'],
    171 => ['name' => 'Dragon Unit', 'file' => 'emulatorjs/roms/nes/8-DragonUnit.nes', 'core' => 'nes'],
    172 => ['name' => 'Karate', 'file' => 'emulatorjs/roms/nes/7-Karate.nes', 'core' => 'nes'],
    173 => ['name' => 'Bomber Man', 'file' => 'emulatorjs/roms/nes/6-BomberMan.nes', 'core' => 'nes'],
    174 => ['name' => 'Badminton', 'file' => 'emulatorjs/roms/nes/1-Badminton.nes', 'core' => 'nes'],
    175 => ['name' => 'Ashura', 'file' => 'emulatorjs/roms/nes/2-Ashura.nes', 'core' => 'nes'],
    176 => ['name' => 'Donkey3', 'file' => 'emulatorjs/roms/nes/6-Donkey3.nes', 'core' => 'nes'],
    177 => ['name' => 'Star Solider', 'file' => 'emulatorjs/roms/nes/4-StarSoldier.nes', 'core' => 'nes'],
    178 => ['name' => 'Millpede', 'file' => 'emulatorjs/roms/nes/10-Millipede.nes', 'core' => 'nes'],
    179 => ['name' => 'Hector', 'file' => 'emulatorjs/roms/nes/2-Hector.nes', 'core' => 'nes'],
    180 => ['name' => 'Gun Smoke', 'file' => 'emulatorjs/roms/nes/9-GunSmoke.nes', 'core' => 'nes'],
    181 => ['name' => 'Gygroone', 'file' => 'emulatorjs/roms/nes/9-Gygroone.nes', 'core' => 'nes'],
    182 => ['name' => 'Buggy Pop', 'file' => 'emulatorjs/roms/nes/4-BuggyPop.nes', 'core' => 'nes'],
    183 => ['name' => 'Jewelry', 'file' => 'emulatorjs/roms/nes/5-Jewelry.nes', 'core' => 'nes'],
    184 => ['name' => 'Space', 'file' => 'emulatorjs/roms/nes/10-Space.nes', 'core' => 'nes'],
    185 => ['name' => 'Space Ship', 'file' => 'emulatorjs/roms/nes/8-SpaceShip.nes', 'core' => 'nes'],
    186 => ['name' => 'Galg', 'file' => 'emulatorjs/roms/nes/4-Galg.nes', 'core' => 'nes'],
    187 => ['name' => 'Rainbow Island', 'file' => 'emulatorjs/roms/nes/8-RainbowIsland.nes', 'core' => 'nes'],
    188 => ['name' => 'Shufflepuck Cafe', 'file' => 'emulatorjs/roms/nes/8-ShufflepuckCafe.nes', 'core' => 'nes'],
    189 => ['name' => 'Burger Time', 'file' => 'emulatorjs/roms/nes/7-BurgerTime.nes', 'core' => 'nes'],
    190 => ['name' => 'Jackal', 'file' => 'emulatorjs/roms/nes/4-Jackal.nes', 'core' => 'nes'],
    191 => ['name' => 'Magmax', 'file' => 'emulatorjs/roms/nes/5-Magmax.nes', 'core' => 'nes'],
    192 => ['name' => 'Knit 2', 'file' => 'emulatorjs/roms/nes/2-Knit2.nes', 'core' => 'nes'],
    193 => ['name' => 'Yie Ar Kung-Fu', 'file' => 'emulatorjs/roms/nes/9-YieArKung-Fu.nes', 'core' => 'nes'],
    194 => ['name' => 'Side Pocket', 'file' => 'emulatorjs/roms/nes/6-SidePocket.nes', 'core' => 'nes'],
    195 => ['name' => 'Lode Running', 'file' => 'emulatorjs/roms/nes/1-LodeRunning.nes', 'core' => 'nes'],
    196 => ['name' => 'Kero', 'file' => 'emulatorjs/roms/nes/9-Kero.nes', 'core' => 'nes'],
    197 => ['name' => 'Sky Destroyer', 'file' => 'emulatorjs/roms/nes/7-SkyDestroyer.nes', 'core' => 'nes'],
    198 => ['name' => 'Othello', 'file' => 'emulatorjs/roms/nes/4-Othello.nes', 'core' => 'nes'],
    199 => ['name' => 'Circus', 'file' => 'emulatorjs/roms/nes/9-Circus.nes', 'core' => 'nes'],
    200 => ['name' => 'Puzzle', 'file' => 'emulatorjs/roms/nes/3-Puzzle.nes', 'core' => 'nes'],
    201 => ['name' => 'Seicross', 'file' => 'emulatorjs/roms/nes/7-Seicross.nes', 'core' => 'nes'],
    202 => ['name' => 'Mirror', 'file' => 'emulatorjs/roms/nes/1-Mirror.nes', 'core' => 'nes'],
    203 => ['name' => 'Tank 2', 'file' => 'emulatorjs/roms/nes/9-Tank2.nes', 'core' => 'nes'],
    204 => ['name' => 'Clu Land', 'file' => 'emulatorjs/roms/nes/1-CluLand.nes', 'core' => 'nes'],
    205 => ['name' => 'Popeye', 'file' => 'emulatorjs/roms/nes/10-Popeye.nes', 'core' => 'nes'],
    206 => ['name' => 'Star Gate', 'file' => 'emulatorjs/roms/nes/3-StarGate.nes', 'core' => 'nes'],
    207 => ['name' => 'Chack Pop', 'file' => 'emulatorjs/roms/nes/8-ChackPop.nes', 'core' => 'nes'],
    208 => ['name' => 'Jianqai', 'file' => 'emulatorjs/roms/nes/5-Jianqai.nes', 'core' => 'nes'],
    209 => ['name' => 'Contra', 'file' => 'emulatorjs/roms/nes/10-Contra.nes', 'core' => 'nes'],
    210 => ['name' => 'Karateke', 'file' => 'emulatorjs/roms/nes/7-Karateke.nes', 'core' => 'nes'],
    211 => ['name' => 'Moal', 'file' => 'emulatorjs/roms/nes/1-Moal.nes', 'core' => 'nes'],
    212 => ['name' => 'Galage', 'file' => 'emulatorjs/roms/nes/4-Galage.nes', 'core' => 'nes'],
    213 => ['name' => 'Wrestling', 'file' => 'emulatorjs/roms/nes/3-Wrestling.nes', 'core' => 'nes'],
    214 => ['name' => 'Ice Climber', 'file' => 'emulatorjs/roms/nes/2-IceClimber.nes', 'core' => 'nes'],
    215 => ['name' => 'Bomb Jack', 'file' => 'emulatorjs/roms/nes/7-BombJack.nes', 'core' => 'nes'],
    216 => ['name' => 'Pacland', 'file' => 'emulatorjs/roms/nes/6-Pacland.nes', 'core' => 'nes'],
    217 => ['name' => 'Wrecking Crew', 'file' => 'emulatorjs/roms/nes/8-WreckingCrew.nes', 'core' => 'nes'],
    218 => ['name' => 'Double Dribble', 'file' => 'emulatorjs/roms/nes/7-DoubleDribble.nes', 'core' => 'nes'],
    219 => ['name' => 'Battle City', 'file' => 'emulatorjs/roms/nes/4-BattleCity.nes', 'core' => 'nes'],
    220 => ['name' => 'Baseball', 'file' => 'emulatorjs/roms/nes/6-Baseball.nes', 'core' => 'nes'],
    221 => ['name' => 'Lode Running 2', 'file' => 'emulatorjs/roms/nes/2-LodeRunning2.nes', 'core' => 'nes'],
    222 => ['name' => 'Gun_smoke', 'file' => 'emulatorjs/roms/nes/9-GunSmoke.nes', 'core' => 'nes'],
    223 => ['name' => 'Elevator', 'file' => 'emulatorjs/roms/nes/9-Elevator.nes', 'core' => 'nes'],
    224 => ['name' => 'Front Line', 'file' => 'emulatorjs/roms/nes/3-FrontLine.nes', 'core' => 'nes'],
    225 => ['name' => 'Glof', 'file' => 'emulatorjs/roms/nes/5-Golf.nes', 'core' => 'nes'],
    226 => ['name' => 'Antarctic Adventure', 'file' => 'emulatorjs/roms/nes/7-AntarcticAdventure.nes', 'core' => 'nes'],
    227 => ['name' => 'Bokosuka', 'file' => 'emulatorjs/roms/nes/2-Bokosuka.nes', 'core' => 'nes'],
    228 => ['name' => 'MahJ4', 'file' => 'emulatorjs/roms/nes/6-Mahj4.nes', 'core' => 'nes'],
    229 => ['name' => 'Wrcs', 'file' => 'emulatorjs/roms/nes/9-Wres.nes', 'core' => 'nes'],
    230 => ['name' => 'King Rail', 'file' => 'emulatorjs/roms/nes/7-KingRail.nes', 'core' => 'nes'],
    231 => ['name' => 'Geimos', 'file' => 'emulatorjs/roms/nes/5-Geimos.nes', 'core' => 'nes'],
    232 => ['name' => 'King Knight', 'file' => 'emulatorjs/roms/nes/10-KingKnight.nes', 'core' => 'nes'],
    233 => ['name' => '3.4wd Battle', 'file' => 'emulatorjs/roms/nes/10-4wdBattle.nes', 'core' => 'nes'],
    234 => ['name' => 'China Chess', 'file' => 'emulatorjs/roms/nes/4-ChinaChess.nes', 'core' => 'nes'],
    235 => ['name' => 'Knit', 'file' => 'emulatorjs/roms/nes/8-Knit.nes', 'core' => 'nes'],
    236 => ['name' => '6.1942', 'file' => 'emulatorjs/roms/nes/1-1942.nes', 'core' => 'nes'],
    237 => ['name' => 'Pyramid', 'file' => 'emulatorjs/roms/nes/4-Pyramid.nes', 'core' => 'nes'],
    238 => ['name' => 'Space Hot', 'file' => 'emulatorjs/roms/nes/1-SpaceHot.nes', 'core' => 'nes'],
    239 => ['name' => 'Macro', 'file' => 'emulatorjs/roms/nes/10-Macross.nes', 'core' => 'nes'],
    240 => ['name' => 'Route', 'file' => 'emulatorjs/roms/nes/1-RoadFighter.nes', 'core' => 'nes'],
    241 => ['name' => 'Arkaniod', 'file' => 'emulatorjs/roms/nes/4-Arkanoid.nes', 'core' => 'nes'],
    242 => ['name' => 'Dough Boy', 'file' => 'emulatorjs/roms/nes/3-DoughBoy.nes', 'core' => 'nes'],
    243 => ['name' => 'Lot Lot', 'file' => 'emulatorjs/roms/nes/3-LotLot.nes', 'core' => 'nes'],
    244 => ['name' => 'Exerion', 'file' => 'emulatorjs/roms/nes/10-Exerion.nes', 'core' => 'nes'],
    245 => ['name' => 'Lost World', 'file' => 'emulatorjs/roms/nes/6-LostWorld.nes', 'core' => 'nes'],
    246 => ['name' => 'Tennis 2', 'file' => 'emulatorjs/roms/nes/2-Tennis2.nes', 'core' => 'nes'],
    247 => ['name' => 'Goones 2', 'file' => 'emulatorjs/roms/nes/6-Goones2.nes', 'core' => 'nes'],
    248 => ['name' => 'Shadow', 'file' => 'emulatorjs/roms/nes/5-Shadow.nes', 'core' => 'nes'],
    249 => ['name' => '9.10 Yard Fighter', 'file' => 'emulatorjs/roms/nes/1-10-YardFight.nes', 'core' => 'nes'],
    250 => ['name' => 'The Little Lady Mermaid', 'file' => 'emulatorjs/roms/nes/10-TheLittleLadyMermaid.nes', 'core' => 'nes'],
    251 => ['name' => 'Tennis', 'file' => 'emulatorjs/roms/nes/6-Tennis.nes', 'core' => 'nes'],
    252 => ['name' => 'Chess', 'file' => 'emulatorjs/roms/nes/10-Chess.nes', 'core' => 'nes'],
    253 => ['name' => 'Tiger', 'file' => 'emulatorjs/roms/nes/3-Tiger.nes', 'core' => 'nes'],
    254 => ['name' => 'Toko', 'file' => 'emulatorjs/roms/nes/8-Toco.nes', 'core' => 'nes'],
    255 => ['name' => 'Tetris', 'file' => 'emulatorjs/roms/nes/10-Tetris.nes', 'core' => 'nes'],
    256 => ['name' => 'Rock Man', 'file' => 'emulatorjs/roms/nes/2-RockMan.nes', 'core' => 'nes'],
    257 => ['name' => 'Sasa', 'file' => 'emulatorjs/roms/nes/3-Sasa.nes', 'core' => 'nes'],
    258 => ['name' => 'Volley Ball', 'file' => 'emulatorjs/roms/nes/9-VolleyBall.nes', 'core' => 'nes'],
    259 => ['name' => 'Star Force', 'file' => 'emulatorjs/roms/nes/2-StarForce.nes', 'core' => 'nes'],
    260 => ['name' => 'Mr mary', 'file' => 'emulatorjs/roms/nes/9-Mrmary.nes', 'core' => 'nes'],
    261 => ['name' => 'Majong', 'file' => 'emulatorjs/roms/nes/7-Majong.nes', 'core' => 'nes'],
    262 => ['name' => 'Digdug', 'file' => 'emulatorjs/roms/nes/3-Digdug.nes', 'core' => 'nes'],
    263 => ['name' => 'Blades Steet', 'file' => 'emulatorjs/roms/nes/5-BladesSteet.nes', 'core' => 'nes'],
    264 => ['name' => 'Mickey', 'file' => 'emulatorjs/roms/nes/9-Mickey.nes', 'core' => 'nes'],
    265 => ['name' => 'Nuts Milk', 'file' => 'emulatorjs/roms/nes/3-NutsMilk.nes', 'core' => 'nes'],
    266 => ['name' => 'Exed Exes', 'file' => 'emulatorjs/roms/nes/8-ExedExes.nes', 'core' => 'nes'],
    267 => ['name' => 'Donkey2', 'file' => 'emulatorjs/roms/nes/5-Donkey2.nes', 'core' => 'nes'],
    268 => ['name' => 'Lunar Ball', 'file' => 'emulatorjs/roms/nes/4-LunarBall.nes', 'core' => 'nes'],
    269 => ['name' => 'Gambling', 'file' => 'emulatorjs/roms/nes/8-Gambling.nes', 'core' => 'nes'],
    270 => ['name' => 'Gradius', 'file' => 'emulatorjs/roms/nes/7-Gradius.nes', 'core' => 'nes'],
    271 => ['name' => 'Poke', 'file' => 'emulatorjs/roms/nes/8-Poke.nes', 'core' => 'nes'],
    272 => ['name' => '80 Day Navigation', 'file' => 'emulatorjs/roms/nes/2-80DayNavigation.nes', 'core' => 'nes'],
    273 => ['name' => 'Squar shoot', 'file' => 'emulatorjs/roms/nes/4-SquarShoot.nes', 'core' => 'nes'],
    274 => ['name' => 'Star Juster', 'file' => 'emulatorjs/roms/nes/4-StarJuster.nes', 'core' => 'nes'],
    275 => ['name' => 'Donkey1', 'file' => 'emulatorjs/roms/nes/4-Donkey1.nes', 'core' => 'nes'],
    276 => ['name' => 'Green Ruslin Attack', 'file' => 'emulatorjs/roms/nes/8-GreenRuslinAttack.nes', 'core' => 'nes'],
    277 => ['name' => 'Iron Fighter', 'file' => 'emulatorjs/roms/nes/10-IronFighter.nes', 'core' => 'nes'],
    278 => ['name' => 'Sloon', 'file' => 'emulatorjs/roms/nes/8-Sloon.nes', 'core' => 'nes'],
    279 => ['name' => 'Joust', 'file' => 'emulatorjs/roms/nes/9-Joust.nes', 'core' => 'nes'],
    280 => ['name' => 'Pooyan', 'file' => 'emulatorjs/roms/nes/7-Pooyan.nes', 'core' => 'nes'],
    281 => ['name' => 'Fire', 'file' => 'emulatorjs/roms/nes/1-Fire.nes', 'core' => 'nes'],
    282 => ['name' => 'Champion', 'file' => 'emulatorjs/roms/nes/5-Champion.nes', 'core' => 'nes'],
    283 => ['name' => 'Jerra Presta', 'file' => 'emulatorjs/roms/nes/7-JerraPresta.nes', 'core' => 'nes'],
    284 => ['name' => 'Animal Town', 'file' => 'emulatorjs/roms/nes/9-AnimalTown.nes', 'core' => 'nes'],
    285 => ['name' => '5.1943', 'file' => 'emulatorjs/roms/nes/2-1943.nes', 'core' => 'nes'],
    286 => ['name' => 'Space Life', 'file' => 'emulatorjs/roms/nes/2-SpaceHospital.nes', 'core' => 'nes'],
    287 => ['name' => 'Battle Life', 'file' => 'emulatorjs/roms/nes/3-Commando.nes', 'core' => 'nes'],
    288 => ['name' => 'Fire Dragon', 'file' => 'emulatorjs/roms/nes/3-FireDragon.nes', 'core' => 'nes'],
    289 => ['name' => 'Binary Land', 'file' => 'emulatorjs/roms/nes/5-BinaryLand.nes', 'core' => 'nes'],
    290 => ['name' => 'Ice Hockey', 'file' => 'emulatorjs/roms/nes/3-IceHockey.nes', 'core' => 'nes'],
    291 => ['name' => 'The New Type', 'file' => 'emulatorjs/roms/nes/5-TheNewType.nes', 'core' => 'nes'],
    292 => ['name' => 'Super Mario', 'file' => 'emulatorjs/roms/nes/6-SuperMario.nes', 'core' => 'nes'],
    293 => ['name' => 'Spelunk', 'file' => 'emulatorjs/roms/nes/1-Spelunk.nes', 'core' => 'nes'],
    294 => ['name' => 'Legend Kage', 'file' => 'emulatorjs/roms/nes/6-LegendKage.nes', 'core' => 'nes'],
    295 => ['name' => 'Combat', 'file' => 'emulatorjs/roms/nes/2-Combat.nes', 'core' => 'nes'],
    296 => ['name' => 'Arabian', 'file' => 'emulatorjs/roms/nes/2-Arabian.nes', 'core' => 'nes'],
    297 => ['name' => 'Dhexbian', 'file' => 'emulatorjs/roms/nes/1-Dhexdes.nes', 'core' => 'nes'],
    298 => ['name' => 'Pacman', 'file' => 'emulatorjs/roms/nes/5-Pacman.nes', 'core' => 'nes'],
    299 => ['name' => 'Dark Chess', 'file' => 'emulatorjs/roms/nes/5-DarkChess.nes', 'core' => 'nes'],
    300 => ['name' => 'Penguin Ball', 'file' => 'emulatorjs/roms/nes/6-PenguinBall.nes', 'core' => 'nes'],
];

$AVAILABLE_GAMES_JS = json_encode($GAMES, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
?>
<!doctype html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="icon" type="image/png" href="./img/icon.png" />
<title><?= htmlspecialchars($DEFAULT_TITLE) ?></title>
<style>
    /* ------------------------------ */
    /* --- Styles Généraux & Fonts ---*/
    /* ------------------------------ */
    @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Press+Start+2P&display=swap');
    
    html, body {
        height: 100%;
        margin: 0;
        background: #000;
        font-family: 'Orbitron', sans-serif;
        color: #fff;
    }
    
    #intro, svg {
        display: block;
        width: 100vw;
        height: 100vh;
    }

    /* ----------------------- */
    /* --- Interface Intro --- */
    /* ----------------------- */
    #intro {
        position: fixed;
        inset: 0;
        background: linear-gradient(45deg, #001122 0%, #003366 50%, #001122 100%);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        z-index: 5;
        animation: introGlow 3s ease-in-out infinite alternate;
        overflow: hidden; /* Empêche les particules de déborder */
    }
    
    @keyframes introGlow {
        0% { background: linear-gradient(45deg, #001122 0%, #003366 50%, #001122 100%); }
        100% { background: linear-gradient(45deg, #002244 0%, #004488 50%, #002244 100%); }
    }
    
    .intro-container {
        text-align: center;
        max-width: 800px;
        padding: 40px 20px;
        position: relative;
        z-index: 1;
        box-sizing: border-box;
    }
    
    .intro-container::before {
        content: '';
        position: absolute;
        inset: 0;
        background: repeating-linear-gradient(
            0deg,
            rgba(0, 0, 0, 0.1) 0,
            rgba(0, 0, 0, 0.1) 1px,
            transparent 2px,
            transparent 4px
        );
        opacity: 0.5;
        z-index: -1;
    }
    
    .intro-title {
        font-family: 'Orbitron', sans-serif;
        font-weight: 900;
        font-size: 4rem;
        color: #00ffff;
        text-shadow: 0 0 20px #00ffff, 0 0 40px #0088ff;
        margin-bottom: 10px;
        animation: titlePulse 2s ease-in-out infinite alternate;
        letter-spacing: 0.1em;
    }
    
    @keyframes titlePulse {
        0% { text-shadow: 0 0 20px #00ffff, 0 0 40px #0088ff; transform: scale(1); }
        100% { text-shadow: 0 0 30px #00ffff, 0 0 60px #0088ff, 0 0 80px #00aaff; transform: scale(1.05); }
    }
    
    .intro-subtitle {
        font-family: 'Press Start 2P', monospace;
        font-size: 1.2rem;
        color: #ffff00;
        text-shadow: 2px 2px 0px #ff8800;
        margin-bottom: 20px;
        animation: subtitleBlink 1.5s ease-in-out infinite;
    }
    
    @keyframes subtitleBlink {
        0%, 50% { opacity: 1; }
        51%, 100% { opacity: 0.7; }
    }
    
    .intro-description {
        font-family: 'Orbitron', sans-serif;
        font-size: 1.1rem;
        color: #cccccc;
        line-height: 1.6;
        margin-bottom: 30px;
        text-shadow: 1px 1px 2px #000;
    }
 
    /* Guide d'utilisation */
    .intro-guide {
        font-family: 'Press Start 2P', monospace;
        font-size: 0.9rem;
        color: #aaa;
        text-shadow: 1px 1px 0px #000;
        margin-bottom: 20px;
        display: none;
    }
    
    .start-button {
        font-family: 'Orbitron', sans-serif;
        font-weight: 700;
        font-size: 1.5rem;
        color: #ffffff;
        background: linear-gradient(45deg, #ff0066, #ff3388, #ff0066);
        border: 3px solid #ff0066;
        border-radius: 15px;
        padding: 15px 40px;
        cursor: pointer;
        text-decoration: none;
        display: inline-block;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
        box-shadow: 0 0 20px rgba(255, 0, 102, 0.5), inset 0 0 20px rgba(255, 255, 255, 0.1);
        transition: all 0.3s ease;
        animation: buttonGlow 2s ease-in-out infinite alternate;
    }
    
    @keyframes buttonGlow {
        0% { box-shadow: 0 0 20px rgba(255, 0, 102, 0.5), inset 0 0 20px rgba(255, 255, 255, 0.1); }
        100% { box-shadow: 0 0 30px rgba(255, 0, 102, 0.8), inset 0 0 30px rgba(255, 255, 255, 0.2); }
    }
    
    .start-button:hover {
        background: linear-gradient(45deg, #ff3388, #ff66aa, #ff3388);
        transform: scale(1.1);
        box-shadow: 0 0 40px rgba(255, 0, 102, 0.8), inset 0 0 40px rgba(255, 255, 255, 0.3);
    }
    
    /* Section Crédits & GitHub */
    .intro-footer {
        position: absolute;
        bottom: 30px;
        left: 50%;
        transform: translateX(-50%);
        width: 100%;
        text-align: center;
        max-width: 800px;
        box-sizing: border-box;
        padding: 0 20px;
    }
    
    .credits {
        font-family: 'Press Start 2P', monospace;
        font-size: 0.8rem;
        color: #888888;
        line-height: 1.8;
        margin-bottom: 10px;
    }
    
    .credits .dev {
        color: #00ff88;
        text-shadow: 0 0 10px #00ff88;
    }
    
    .credits .engine {
        color: #ffaa00;
        text-shadow: 0 0 10px #ffaa00;
    }
    
    .github-link {
        font-family: 'Press Start 2P', monospace;
        font-size: 0.8rem;
        color: #5555ff;
        text-shadow: 0 0 5px #5555ff;
        text-decoration: none;
        display: inline-block;
        transition: all 0.2s ease-in-out;
    }
    
    .github-link:hover {
        color: #8888ff;
        text-shadow: 0 0 15px #8888ff;
        animation: glitch 0.5s steps(2, end) infinite;
    }
    
    @keyframes glitch {
        0% { transform: translate(0); }
        20% { transform: translate(-2px, 2px); }
        40% { transform: translate(-2px, -2px); }
        60% { transform: translate(2px, 2px); }
        80% { transform: translate(2px, -2px); }
        100% { transform: translate(0); }
    }
    
    /* ------------------- */
    /* --- Particules --- */
    /* ------------------- */
    .particle {
        position: absolute;
        width: 2px;
        height: 2px;
        background: #00ffff;
        animation: float 6s ease-in-out infinite;
    }
    
    @keyframes float {
        0%, 100% { transform: translateY(0px) rotate(0deg); opacity: 0; }
        50% { transform: translateY(-100px) rotate(180deg); opacity: 1; }
    }
    
    /* ---------------------- */
    /* --- Zone de jeu SVG ---*/
    /* ---------------------- */
    svg { display: none; }
    text { font-family: Arial, Helvetica, sans-serif; fill: #000; }
    a text { cursor: pointer; }

    /* ---------------------- */
    /* --- Zone de l'émulateur --- */
    /* ---------------------- */
    #display, #game { position: fixed; inset: 0; width: 100vw; height: 100vh; }
    #display { display: none; z-index: 10; background: #000; }
    #game canvas { width: 100% !important; height: 100% !important; display: block; background: #000; }
    
    /* Bouton retour */
    #backBtn {
        position: fixed;
        left: 12px;
        top: 12px;
        z-index: 20;
        display: none;
        color: #eee;
        background: rgba(0, 0, 0, .4);
        border: 1px solid #555;
        border-radius: 10px;
        padding: 8px 12px;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 14px;
        text-decoration: none;
        transition: background-color 0.2s ease;
    }
    #backBtn:hover { background: #222; }

    .ejs_menu_bar_hidden {
        display: none !important;
        visibility: hidden !important;
        opacity: 0 !important;
        height: 0 !important;
        width: 0 !important;
        pointer-events: none !important;
    }
    
    /* Fix pour les contrôles EmulatorJS sur mobile */
    .ejs_control_ui_mobile {
        transform: scale(1) !important;
    }

    /* ------------------------- */
    /* --- Media Queries pour la responsivité --- */
    /* ------------------------- */
    @media (max-width: 768px) {
        .intro-title { font-size: 2.5rem; margin-bottom: 5px; }
        .intro-subtitle { font-size: 1rem; margin-bottom: 15px; }
        .intro-description { font-size: 1rem; margin-bottom: 20px; }
        .intro-guide.mobile-only { display: block; }
        .intro-guide.desktop-only { display: none; }
        .start-button { font-size: 1.2rem; padding: 12px 30px; }
        .intro-footer { bottom: 20px; }
        .credits, .github-link { font-size: 0.6rem; }
        .mobile-only { display: block !important; }
        .desktop-only { display: none !important; }
    }
    
    @media (max-width: 480px) {
        .intro-title { font-size: 2rem; letter-spacing: 0.05em; }
        .intro-subtitle { font-size: 0.8rem; }
        .intro-description { font-size: 0.9rem; line-height: 1.4; margin-bottom: 15px; }
        .intro-guide { font-size: 0.7rem; margin-bottom: 10px; }
        .start-button { font-size: 1rem; padding: 10px 25px; }
    }
    @media (min-width: 769px) {
        .intro-guide.desktop-only { display: block; }
        .intro-guide.mobile-only { display: none; }
    }
</style>
</head>
<body>
<a id="backBtn" href="#" title="Retour au menu">⟵ Retour</a>

<div id="intro" aria-label="Introduction VCD-300-GAME">
    <div class="particle" style="left:10%; animation-delay:0s;"></div>
    <div class="particle" style="left:20%; animation-delay:1s;"></div>
    <div class="particle" style="left:30%; animation-delay:2s;"></div>
    <div class="particle" style="left:40%; animation-delay:0.5s;"></div>
    <div class="particle" style="left:50%; animation-delay:1.5s;"></div>
    <div class="particle" style="left:60%; animation-delay:2.5s;"></div>
    <div class="particle" style="left:70%; animation-delay:0.8s;"></div>
    <div class="particle" style="left:80%; animation-delay:1.8s;"></div>
    <div class="particle" style="left:90%; animation-delay:2.8s;"></div>
    
    <div class="intro-container">
        <h1 class="intro-title">VCD-300-GAME</h1>
        <p class="intro-subtitle">SIMULATION AUTHENTIQUE</p>
        <div class="intro-description">
            Découvrez l'expérience authentique du légendaire système VCD-300.<br>
            Plongez dans une collection de jeux classiques avec une interface fidèle<br>
            aux consoles des années 2000.
        </div>

        <div class="intro-guide desktop-only">
            Utilisez les touches flèches pour parcourir les menus.<br>
            Cliquez sur un jeu pour jouer.
        </div>
        <div class="intro-guide mobile-only">
            Utilisez les flèches à l'écran pour naviguer.<br>
            Touchez un jeu pour jouer.
        </div>

        <button class="start-button" onclick="startGame()">
            ▶ DÉMARRER LE SYSTÈME
        </button>
    </div>
    
    <div class="intro-footer">
        <div class="credits">
            Interface développée par <span class="dev">FilinoDZ</span><br>
            Moteur d'émulation : <span class="engine">EmulatorJS</span>
        </div>
        <a href="https://github.com/filinodz/vcd-300-game" class="github-link" target="_blank">
            > git clone https://github.com/filinodz/vcd-300-game
        </a>
    </div>
</div>

<svg id="scene" viewBox="0 0 1365 768" preserveAspectRatio="xMidYMid meet" aria-label="VCD 300 – Menu">
    <image id="bg" href="img/page1.png" x="0" y="0" width="1365" height="768" />
    <text x="288" y="161" font-size="50" font-weight="800" letter-spacing="1">GAME MENU</text>
    <g id="menu-list" transform="translate(0,20)" font-weight="900"></g>
    <text id="pageLabel" x="280" y="675" font-size="40" font-weight="795">PAGE 1</text>

    <g class="mobile-only">
        <text id="prevPageMobile" x="50" y="700" font-size="60" fill="#eee" style="cursor: pointer; text-shadow: 2px 2px 5px #000;">&#9664;</text>
        <text id="nextPageMobile" x="1250" y="700" font-size="60" fill="#eee" style="cursor: pointer; text-shadow: 2px 2px 5px #000;">&#9654;</text>
    </g>
</svg>

<div id="display"><div id="game"></div></div>

<script>
/* ---------- PARAMETRES ---------- */
const ITEMS_PER_PAGE=10;
const TOTAL_PAGES=30;
const BACKGROUNDS=["img/page1.png","img/page2.png","img/page3.png","img/page4.png","img/page5.png"];
const Y=[204,244,284,324,364,404,444,484,524,564];
const X=290;
const EJS_DATA = <?= json_encode($EJS_DATA . '/', JSON_UNESCAPED_SLASHES) ?>;

/* Jeux réellement lançables */
const AVAILABLE = <?= $AVAILABLE_GAMES_JS ?>;

/* Ta liste complète d'étiquettes */
const GAMES_LABELS = [
"1942","1943","Adventure Island","Battle City","Twin Bee","Bomber Man","Bomb Jack","Shufflepuck Cafe","Circus","Contra",
"Dhexdes","Space Hospital","Fire Dragon","Galg","Jewelry","Super Mario","Pooyan","Rainbow Island","Tank 2","Tetris",
"10 Yard Fighter","Arabian","Argus","Arkaniod","Binary Land","Bloon Fight","Burger Time","B-wings","Route","Chess",
"Clu Land","Combat","Digdug","Donkey 1","Donkey 2","Donkey 3","Double Dribble","Dragon Unit","Elevator","Exerion",
"Fire","Formation 2","Front Line","Galage","Golf","Goones 2","Gradius","Green Ruslin Attack","Gygroone","Hely",
"Hogan's Alley","Ice Climber","Ice Hockey","Jackal","Jianqai","Legend Kage","Karateke","Knit","Yie Ar Kung-Fu","The Little Lady Mermaid",
"Lode Running","Lode Running 2","Lot Lot","Lunar Ball","Magmax","Mahj4","Majong","Mr mary","Mappy","Millipede",
"Mirror","Knit 2","Nuts Milk","Othello","Pacman","Pacland","Antarctic Adventure","Poke","Animal Town","Popeye",
"Gun Smoke","Rock Man","Sasa","Star Juster","Shadow","Side Pocket","Sky Destroyer","Sloon","Gun_smoke","Space",
"Spelunk","Star Gate","Star Soldier","Star Steet","Blades Steet","Tennis","Jerra Presta","Wrecking Crew","Wres","Iron Fighter",
"Badminton","Bokosuka","Dough Boy","Flappy","Geimos","Penguin Ball","Seicross","Chack Pop","Joust","Macro",
"Majiang2","Hector","Wrestling","China Chess","Baseball","Card Game","Space Ship","Kero","King Knight","Dragon's Lair",
"Moal","80 Day Navigation","Puzzle","Squar Shoot","The New Type","Sumo","King Rail","Toco","Mickey","4wd Battle",
"ASO","Ashura","Battle Life","Buggy Pop","Champion","Lost Karate","Gambling","Maze","Mteal Gear","Lost World",
"Space Hot","Tennis2","Tiger","Pyramid","Brush","Donkey Math","Son Son","Exed Exes","Volley Ball","Volguard",
"Brush","Mappy","Formation2","Twin Bee","Adventure Island","Argus","Mteal Gear","Majiang2","Sumo","Card Game",
"Son Son","ASO","Bloon Fight","Hely","Maze","Doney Math","B-wings","Volguard","Flappy","Hogan'sAlley",
"Dragon Unit","Karate","Bomber Man","Badminton","Ashura","Donkey3","Star Solider","Millpede","Hector","Gun Smoke",
"Gygroone","Buggy Pop","Jewelry","Space","Space Ship","Galg","Rainbow Island","Shufflepuck Cafe","Burger Time","Jackal",
"Magmax","Knit 2","Yie Ar Kung-Fu","Side Pocket","Lode Running","Kero","Sky Destroyer","Othello","Circus","Puzzle",
"Seicross","Mirror","Tank 2","Clu Land","Popeye","Star Gate","Chack Pop","Jianqai","Contra","Karateke",
"Moal","Galage","Wrestling","Ice Climber","Bomb Jack","Pacland","Wrecking Crew","Double Dribble","Battle City","Baseball",
"Lode Running 2","Gun_smoke","Elevator","Front Line","Glof","Antarctic Adventure","Bokosuka","MahJ4","Wrcs","King Rail",
"Geimos","King Knight","3.4wd Battle","China Chess","Knit","6.1942","Pyramid","Space Hot","Macro","Route",
"Arkaniod","Dough Boy","Lot Lot","Exerion","Lost World","Tennis 2","Goones 2","Shadow","9.10 Yard Fighter","The Little Lady Mermaid",
"Tennis","Chess","Tiger","Toko","Tetris","Rock Man","Sasa","Volley Ball","Star Force","Mr mary",
"Majong","Digdug","Blades Steet","Mickey","Nuts Milk","Exed Exes","Donkey2","Lunar Ball","Gambling","Gradius",
"Poke","80 Day Navigation","Squar shoot","Star Juster","Donkey1","Green Ruslin Attack","Iron Fighter","Sloon","Joust","Pooyan",
"Fire","Champion","Jerra Presta","Animal Town","5.1943","Space Life","Battle Life","Fire Dragon","Binary Land","Ice Hockey",
"The New Type","Super Mario","Spelunk","Legend Kage","Combat","Arabian","Dhexbian","Pacman","Dark Chess","Penguin Ball"
];

BACKGROUNDS.forEach(src=>{const i=new Image();i.src=src;});
const svgNS="http://www.w3.org/2000/svg", xlink="http://www.w3.org/1999/xlink";
const bg=document.getElementById('bg'), listG=document.getElementById('menu-list'), pageLb=document.getElementById('pageLabel');
const intro=document.getElementById('intro'), scene=document.getElementById('scene');
const display=document.getElementById('display'), gameDiv=document.getElementById('game'), backBtn=document.getElementById('backBtn');
const prevPageMobileBtn = document.getElementById('prevPageMobile');
const nextPageMobileBtn = document.getElementById('nextPageMobile');

let page=1;
let IN_GAME=false; // <- évite que les flèches changent de page pendant le jeu

/* --------- FONCTION DE DÉMARRAGE --------- */
function startGame(){
    intro.style.display='none';
    scene.style.display='block';
    
    // Afficher la navigation mobile si sur un petit écran
    if (window.innerWidth <= 768) {
        document.querySelector('#scene .mobile-only').style.display = 'block';
    }

    renderPage(page);
}

/* --------- UTILITAIRES --------- */
function setBackgroundForPage(n){const idx=((n-1)%BACKGROUNDS.length);const file=BACKGROUNDS[idx];bg.setAttribute('href',file);bg.setAttributeNS(xlink,'href',file);}
function slugify(s){return (s||"").toString().toLowerCase().normalize('NFKD').replace(/[\u0300-\u036f]/g,'').replace(/[^a-z0-9]+/g,'-').replace(/^-+|-+$/g,'');}
function pad3(n){return String(n).padStart(3,'0');}

/* Affiche 10 éléments */
function renderPage(n){
    setBackgroundForPage(n);
    pageLb.textContent=`PAGE ${n}`;
    while(listG.firstChild)listG.removeChild(listG.firstChild);
    const start=(n-1)*ITEMS_PER_PAGE;
    for(let i=0;i<ITEMS_PER_PAGE;i++){
        const gi=start+i, displayNumber=i+1, globalNumber=gi+1;
        const name=GAMES_LABELS[gi]||`Game ${globalNumber}`;
        const a=document.createElementNS(svgNS,'a');
        const url=`/game-${pad3(globalNumber)}-${slugify(name)}`;
        a.setAttribute('href',url); a.setAttributeNS(xlink,'href',url);
        a.addEventListener('click',(e)=>{e.preventDefault(); launchById(globalNumber, name);});
        const t=document.createElementNS(svgNS,'text');
        t.setAttribute('x',X); t.setAttribute('y',Y[i]); t.setAttribute('font-size','35'); t.textContent=`${displayNumber}.${name}`;
        a.appendChild(t); listG.appendChild(a);
    }
}

/* Navigation clavier du menu — ignorée pendant le jeu */
function nextPage(){ if(IN_GAME) return; page=(page%TOTAL_PAGES)+1; renderPage(page); }
function prevPage(){ if(IN_GAME) return; page=(page-2+TOTAL_PAGES)%TOTAL_PAGES+1; renderPage(page); }
document.addEventListener('keydown',e=>{
    if(IN_GAME) return; // ne pas changer de page durant le jeu
    if(e.key==='ArrowRight'||e.key==='Right') nextPage();
    if(e.key==='ArrowLeft'||e.key==='Left')    prevPage();
});

// Écouteurs pour les boutons de navigation mobile
prevPageMobileBtn.addEventListener('click', (e) => {
    e.preventDefault();
    prevPage();
});

nextPageMobileBtn.addEventListener('click', (e) => {
    e.preventDefault();
    nextPage();
});

/* ---------- CAPTURE workers & audio POUR UN ARRET PROPRE ---------- */
const EJS_RES = { workers: [], audioCtx: [] };

// Capture des Workers créés après ce patch
(function(){
    const NativeWorker = window.Worker;
    window.Worker = function(...args){
        const w = new NativeWorker(...args);
        EJS_RES.workers.push(w);
        return w;
    };
})();

// Capture des AudioContext (WebAudio)
(function(){
    const NativeAC = window.AudioContext || window.webkitAudioContext;
    if (NativeAC) {
        const Patched = function(...args){
            const ctx = new NativeAC(...args);
            EJS_RES.audioCtx.push(ctx);
            return ctx;
        };
        Patched.prototype = NativeAC.prototype;
        window.AudioContext = window.webkitAudioContext = Patched;
    }
})();

/* ---------- MASQUAGE SPECIFIQUE ejs_menu_bar ---------- */
function hideEJSMenubarClassOnly(root=document){
    root.querySelectorAll('.ejs_menu_bar').forEach(el=>{
        // ajoute/maintient la classe "hidden"
        if(!el.classList.contains('ejs_menu_bar_hidden')) el.classList.add('ejs_menu_bar_hidden');
    });
}
const menubarObserver = new MutationObserver(()=> {
    hideEJSMenubarClassOnly(document);
    // idem dans les iframes si même origine
    document.querySelectorAll('iframe').forEach(iframe=>{
        try{
            const doc = iframe.contentDocument || iframe.contentWindow?.document;
            if(doc) hideEJSMenubarClassOnly(doc);
        }catch(_e){}
    });
});
menubarObserver.observe(document.documentElement,{childList:true,subtree:true});

// filet de sécurité pendant ~20s
let menubarTries=0;
const menubarInterval = setInterval(()=>{
    hideEJSMenubarClassOnly(document);
    if(++menubarTries>40) clearInterval(menubarInterval);
},500);

/* ---------- BLOQUAGE DU "HOVER BAS D'ECRAN" PENDANT LE JEU ---------- */
function bottomHoverBlocker(e){
    if(!IN_GAME) return;
    const threshold = 36; // px en bas d'écran
    if (e.clientY >= (window.innerHeight - threshold)) {
        // Empêche l'event d'atteindre un éventuel écouteur EmulatorJS qui afficherait la barre
        e.stopPropagation();
        // Ne pas e.preventDefault() pour ne pas casser d'autres entrées souris
    }
}
// capture VRAIMENT en phase "capture"
document.addEventListener('mousemove', bottomHoverBlocker, true);
document.addEventListener('pointermove', bottomHoverBlocker, true);

/* ---------- LANCEMENT / ARRET ---------- */
let ejsLoaderScript = null;

function clearEJS(){
    // 1) Stopper l'audio
    try { if (window.Module?.SDL2?.audioContext) window.Module.SDL2.audioContext.close(); } catch(_e){}
    try { if (window.EJS_audioctx && typeof window.EJS_audioctx.close==='function') window.EJS_audioctx.close(); } catch(_e){}
    EJS_RES.audioCtx.forEach(ctx=>{
        try { ctx.close(); } catch(_e){ try{ ctx.suspend(); }catch(_e2){} }
    });
    EJS_RES.audioCtx.length = 0;

    // 2) Tuer les workers
    EJS_RES.workers.forEach(w=>{ try { w.terminate(); } catch(_e){} });
    EJS_RES.workers.length = 0;

    // 3) Nettoyer scripts loader + conteneur
    if (ejsLoaderScript) { try { ejsLoaderScript.remove(); } catch(_e){} ejsLoaderScript=null; }
    document.querySelectorAll('script[data-ejs]').forEach(s=>{ try{s.remove();}catch(_e){} });
    gameDiv.innerHTML='';

    // 4) Retirer iframes créés par l'émulateur (si certains builds en utilisent)
    document.querySelectorAll('#game iframe').forEach(f=>{ try{ f.remove(); }catch(_e){} });

    // 5) Couper le son global en dernier recours
    try { Howler && Howler.mute(true); } catch(_e) {}
}

function launchById(globalId, displayName){
    const entry = AVAILABLE[String(globalId)];
    if(!entry){
        alert(`Le jeu #${globalId} (« ${displayName} ») n'est pas disponible.`);
        return;
    }

    IN_GAME = true; // <-- important pour bloquer la navigation de pages et le hover bas
    scene.style.display='none';
    display.style.display='block';
    backBtn.style.display='inline-block';
    
    // Cacher la navigation mobile une fois le jeu lancé
    document.querySelector('#scene .mobile-only').style.display = 'none';

    clearEJS();

    // --- Config EmulatorJS ---
    window.EJS_player             = "#game";
    window.EJS_gameName           = entry.name;
    window.EJS_biosUrl            = "";
    window.EJS_gameUrl            = entry.file;
    window.EJS_core               = entry.core;
    window.EJS_pathtodata         = EJS_DATA;
    window.EJS_startOnLoaded      = true;
    window.EJS_disableDatabases   = true;
    window.EJS_DEBUG_XX           = false;
    window.EJS_threads            = false;
    
    // masquage UI/menus + plein écran si supporté
    window.EJS_fullscreen         = true;
    window.EJS_menu               = false;
    window.EJS_showMenu           = false;
    window.EJS_disableMenu        = true;
    window.EJS_hideUI             = true;

    // Injection du loader
    const s=document.createElement('script');
    s.src = EJS_DATA + 'loader.js';
    s.setAttribute('data-ejs','1');
    document.body.appendChild(s);
    ejsLoaderScript = s;

    // Maintien du masquage (si la barre apparaît tard)
    let tries=0;
    const it=setInterval(()=>{
        hideEJSMenubarClassOnly(document);
        // Ajout d'une classe spécifique pour le fix mobile
        const ejsUI = document.querySelector('.ejs_control_ui');
        if (ejsUI) {
            ejsUI.classList.add('ejs_control_ui_mobile');
        }
        if(++tries>40) clearInterval(it);
    },500);
}

function backToMenu(){
    // Stoppe l'émulateur et nettoie
    clearEJS();

    // Retour au menu SANS changer la page
    display.style.display='none';
    scene.style.display='block';
    backBtn.style.display='none';
    
    // Réafficher la navigation mobile si sur un petit écran
    if (window.innerWidth <= 768) {
        document.querySelector('#scene .mobile-only').style.display = 'block';
    }

    IN_GAME = false; // <-- permet de réutiliser les flèches pour la pagination
    renderPage(page); // on reste sur la même page qu'avant le lancement
}
backBtn.addEventListener('click',(e)=>{e.preventDefault();backToMenu();});
document.addEventListener('keydown',(e)=>{ if(e.key==='Escape') backToMenu(); });

/* Optionnels : bloquer clic droit ou raccourcis pouvant rouvrir un menu */
window.addEventListener('contextmenu', e => e.preventDefault(), {capture:true});
window.addEventListener('keydown', (e) => {
    if (e.key === 'F10' || (e.altKey && (e.key === 'm' || e.key === 'M'))) {
        e.preventDefault(); e.stopPropagation();
    }
}, true);
</script>
</body>
</html>