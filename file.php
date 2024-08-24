<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>My Portfolio</h1>
        <nav>
            <ul>
                <li><a href="#about">About</a></li>
                <li><a href="#projects">Trainings</a></li>
                <li><a href="#Skills"> Skills</a></li>
                <li><a href="#contact">Contact</a></li>
               
            </ul>
        </nav>
    </header>
    <section id="about">
        <h1>About Me</h1>
        <div>
    <h3><lI>Name:</lI></h3>
    <P>Ahmed Mohamed Bakr Mohamed</P>
</div>
<div>
    <h3> <li>Age:</li></h3>
    <p>My age is 20</p>
</div>
<div>
<div>
    <h3><li>Collage:</li></h3>
<p>I'm study at the Faculty of Engineering, Al-Azhar University in Cairo, Department of Electrical Systems and Computers</p>
</div>
<div>
    </section>
    <section id="projects">
        <h2>Trainings</h2>
        <div class="project">
            <h3><li>PHP </li></h3>
            <p>I'm Training With ITI And I'm Currently Practicing With Mindset</p>
        </div>
    
    </section>
    <section id="Skills">
    <div>
    <h2><li>Skills</li></h2>
     
        <li>HTML</li>
        <li>CSS</li>
        <li>Java Languge Programming</li>
        <li>C Languge Programming </li>
        <li>PHP Languge Programming  </li>
     
</div>

    </section>
    <section id="contact">
        <h2>Contact</h2>
        <form action="contact.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
            <button type="submit">Send</button>
        </form>
        <br>
        <div><a href="https://wa.me/qr/KG6SFDSIF7UXI1" style="color: green;">communicate With Me</a></div>
    </section>
</body>
</html>
