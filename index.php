<?php
    // === CONFIGURATION ===
    // Ekhane shob details change korun

    $name = "Hridoy // 0xHRIDOY";
    $tagline = "Cybersecurity Analyst & Backend Developer";
    
    // Bio line by line. Prottek line er jonno "" use korun
    $bio_lines = [
        "System online. Authenticating user...",
        "Welcome to my console. I build secure & scalable systems.",
        "Status: Caffeinated."
    ];

    // Links (Icon gulo Font Awesome theke)
    $links = [
        [
            "name" => "GitHub Projects",
            "url" => "https://github.com",
            "icon" => "fa-brands fa-github"
        ],
        [
            "name" => "SecureNet Blog",
            "url" => "#",
            "icon" => "fa-solid fa-shield-halved"
        ],
        [
            "name" => "LinkedIn Profile",
            "url" => "https://linkedin.com",
            "icon" => "fa-brands fa-linkedin"
        ],
        [
            "name" => "My API Endpoint",
            "url" => "http://api.hridoyxqc.qzz.io:5070",
            "icon" => "fa-solid fa-server"
        ]
    ];

    // Server info (dynamic PHP)
    $server_ip = $_SERVER['SERVER_ADDR'] ?? '127.0.0.1';
    $visitor_ip = $_SERVER['REMOTE_ADDR'] ?? 'UNKNOWN';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booting <?php echo $name; ?>'s Console...</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;700&family=Share+Tech+Mono&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <header class="header">
            <h1 class="glitch" data-text="<?php echo htmlspecialchars($name); ?>">
                <?php echo htmlspecialchars($name); ?>
            </h1>
            <p class="tagline">[ <?php echo htmlspecialchars($tagline); ?> ]</p>
        </header>

        <section class="terminal">
            <div class="terminal-header">
                <div class="dots">
                    <span></span><span></span><span></span>
                </div>
                <span>root@hridoy:~/bio</span>
            </div>
            <div class="terminal-body">
                <?php foreach ($bio_lines as $line): ?>
                    <p><span class="prompt">$</span> <?php echo htmlspecialchars($line); ?></p>
                <?php endforeach; ?>
                <p><span class="prompt">$</span> <span class="cursor">_</span></p>
            </div>
        </section>

        <section class="links">
            <?php foreach ($links as $link): ?>
                <a href="<?php echo htmlspecialchars($link['url']); ?>" target="_blank" class="link-button">
                    <i class="<?php echo htmlspecialchars($link['icon']); ?>"></i>
                    <span><?php echo htmlspecialchars($link['name']); ?></span>
                </a>
            <?php endforeach; ?>
        </section>

        <footer>
            <p>SERVER_IP: <?php echo $server_ip; ?> // CLIENT_IP: <?php echo $visitor_ip; ?></p>
            <p>&copy; <?php echo date("Y"); ?>. All systems operational.</p>
        </footer>
    </div>

</body>
</html>
