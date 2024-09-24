<?php
$courses = [
    ["title" => "Ethical Hacking for Beginners", "price" => "50", "description" => "Learn the basics of ethical hacking."],
    ["title" => "Advanced Cybersecurity", "price" => "100", "description" => "Advanced techniques in securing networks."],
    ["title" => "Computer Parts 101", "price" => "30", "description" => "Understand hardware components."],
    ["title" => "Programming in Python", "price" => "40", "description" => "Master Python programming."],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses - Hacking Learning</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Our Courses</h1>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="courses.php">Courses</a></li>
                <li><a href="contact.html">Contact Us</a></li>
            </ul>
        </nav>
    </header>

    <section id="courses">
        <h2>Available Courses</h2>
        <div class="course-list">
            <?php foreach($courses as $course): ?>
                <div class="course-item">
                    <h3><?php echo $course['title']; ?></h3>
                    <p><?php echo $course['description']; ?></p>
                    <p><strong>Price: $<?php echo $course['price']; ?></strong></p>
                    <a href="https://wa.me/yourwhatsappnumber?text=I%20am%20interested%20in%20the%20<?php echo urlencode($course['title']); ?>%20course." class="btn">Buy on WhatsApp</a>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Hacking Learning. All Rights Reserved.</p>
    </footer>
</body>
</html>
