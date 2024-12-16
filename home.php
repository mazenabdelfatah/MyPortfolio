<?php

$projects = [
    [
        'title' => 'BLOOD BANK AND DONATION SYSTEM using PHP',
        'description' => 'Developed a comprehensive system designed to streamline the management of blood donations and blood bank operations.

                            Efficient tracking of blood donations and donor information.
                            Inventory management, reporting, admin dashboard, and integration of blood banks in Lebanon using Google Maps coordinates.',
        'link' => '#',
    ],
    [
        'title' => 'Tic-Tac-Toe using React.js',
        'description' => 'Designed and developed an interactive Tic-Tac-Toe game using React.js, implementing game logic and responsive UI.

                        Practiced state management and component-based architecture for an engaging user experience.
                        Strengthened React skills, including hooks and functional components, while enhancing problem-solving abilities.',
        'link' => '#',
    ],
    
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>My Portfolio</title>

</head>
<body>
    <header class="header">
        <h1>My Portfolio</h1>
        <p>Welcome to my portfolio! Explore my projects below.</p>
    </header>

    <main>
        <section class="projects-section">
            <h2>Projects</h2>
            <div class="projects">
                <?php foreach ($projects as $project): ?>
                    <div class="project-card">
                        <h3><?php echo $project['title']; ?></h3>
                        <p><?php echo $project['description']; ?></p>
                        <a href="<?php echo $project['link']; ?>" target="_blank" rel="noopener noreferrer">View Project</a>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    </main>

    <footer class="footer">
        <p>&copy; 2024 Mazen Abdulfattah. All rights reserved.</p>
    </footer>
</body>
</html>
