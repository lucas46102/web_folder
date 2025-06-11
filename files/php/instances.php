<?php
$instance['NemesisFaction'] = array_merge($instance['NemesisFaction'], array(
    "loadder" => array(
        "minecraft_version" => "1.12.2",
        "loadder_type" => "CatServer",
        "loadder_version" => "latest"
    ),
    "verify" => true,
    "ignored" => array(
        'config',
        'essential',
        'logs',
        'resourcepacks',
        'saves',
        'screenshots',
        'shaderpacks',
        'W-OVERFLOW',
        'options.txt',
        'optionsof.txt'
    ),
    "whitelist" => array(),
    "whitelistActive" => false,
    "status" => array(
        "nameServer" => "Nemesis Faction",
        "ip" => "mc.hypixel.net",
        "port" => 25565
    )
));
