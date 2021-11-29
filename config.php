<?php
    // Website Name
    $name = "Harmonized Roleplay";

    // Description
    $desc = "Realistic FiveM Roleplay Community";

    // Discord Server ID
    $serverid = "700823865299042304";

    // FiveM Connect Link
    $fivem = "fivem://connect/172.93.102.199:30121";
    
    // Theme (light or dark)
    $theme = "dark";

    // Domain (with trailing slash)
    $domain = "http://localhost:5555/";

    // Colors (hex)
    $color = "#ae47ff";

    // Logo (must be an image ".png, .jpg, .gif, etc")
    $logo = $domain."assets/img/logo.png";

    // About Page
    $about = "bruh moment when about is just a bunch of random words i threw together so i can see what it looks like";

    // Status Page
    $servers = [
		"vMenu Server" => [
			"IP" => "172.93.102.199",
			"port" => "30120"
		],
		"Economy Server" => [
			"IP" => "172.93.102.199",
			"port" => "30121"
		],
		"Discord Bot" => [
			"IP" => "172.93.102.199",
			"port" => "8081"
		],
	];

    // Gallery
    $gallery = [
		"https://cdn.discordapp.com/attachments/875906782327885894/896546735646732308/screenshot.jpg",
		"https://cdn.discordapp.com/attachments/875906782327885894/911184680429178890/screenshot.jpg",
        "https://cdn.discordapp.com/attachments/875906782327885894/893347750618476594/screenshot.jpg"
	];

    // Navbar Links
    $link1label = "Apply";
    $link1href = $domain."apply";

    $link2label = "Status";
    $link2href = $domain."status";

    $link3label = "Gallery";
    $link3href = $domain."gallery";

    $link4label = "Store";
    $link4href = "https://store.harmonizedroleplay.com/";

    $link5label = "CAD/MDT";
    $link5href = $domain."cad";

    // Navbar Array
    $linkarray = array("link1" => "$link1label#$link1href", "link2" => "$link2label#$link2href", "link3" => "$link3label#$link3href", "link4" => "$link4label#$link4href", "link5" => "$link5label#$link5href");

    // Text Color
    if ($theme == "light"){
        $txtcolor = "dark";
    } else if ($theme == "dark") {
        $txtcolor = "light";
    }

    // Discord Member Count
    $link = file_get_contents('https://discordapp.com/api/guilds/'.$serverid.'/widget.json');
    $JSON = json_decode($link, true);
    $members = $JSON['presence_count'];
?>