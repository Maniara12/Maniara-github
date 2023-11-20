<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Your Portfolio</title>
</head>
<body>

<main>
    <section id="home">
        <h1>Welcome to My Portfolio</h1>
        <p>I am Sitohang Jojor Maniara, a passionate [Information Technology Student]. This portfolio showcases my work, skills, and experiences.</p>
        <p>Feel free to explore and get in touch!</p>
    </section>
</main>

<main>
    <section id="20200042">
        <h2>About Me</h2>
        <p>I am [Sitohang Jojor Maniara]. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla in finibus urna. Ut tincidunt, ante ut efficitur aliquam, justo leo dapibus lacus, in volutpat dolor est et purus.</p>
        
        <h3>Skills & Expertise</h3>
        <ul>
            <li>Skill 1 - Cooking</li>
            <li>Skill 2 - Gardening</li>
            <!-- Add more skills -->
        </ul>
        
        <h3>Experience</h3>
        <p>Previous Experience 1 - Finance Assistant - PT. John Crane Indonesia - 2002-2011</p>
        <p>Previous Experience 2 - Administration - PT. Citra Inovasi  - 1997-2002</p>
        <!-- Add more experiences -->
        
        <a href="path/to/your/resume.pdf" download>Download Resume</a>
    </section>
</main>

<main>
    <section id="projects">
        <h2>Projects</h2>
        <div class="project">
            <h3>Project Title 1</h3>
            <p>Description of the project. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla in finibus urna.</p>
            <img src="assets/images/project1.jpg" alt="Project 1">
            <p>Tools & Technologies: Tool 1, Tool 2, Technology 1</p>
        </div>
        <!-- Add more projects following the same structure -->
    </section>
</main>

<main>
    <section id="contact">
        <h2>Contact Me</h2>
        <p>Feel free to contact me through:</p>
        <ul>
            <li>Email: <a href= "jmsitohang@pcu.edu.ph"> jmsitohang@pcu.edu.ph </a> </li>
            <li>LinkedIn: [Your LinkedIn Profile]</li>
            <!-- Add more contact information -->
        </ul>
        
        <!-- Contact form if needed -->
        <form action="submit_contact_form.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
            <button type="submit">Send Message</button>
        </form>
    </section>
</main>

</body>
</html>
