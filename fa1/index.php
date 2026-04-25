<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Resume - <?php echo $name; ?></title>

<style>
    /* Base layout */
    body {
        font-family: "Segoe UI", Arial, sans-serif;
        background-color: #f5f5f5;
        margin: 0;
        padding: 40px 0;
        color: #222;
    }

    .container {
        max-width: 900px;
        margin: auto;
        background: #ffffff;
        padding: 40px 50px;
        box-shadow: 0 0 8px rgba(0, 0, 0, 0.08);
    }

    /* Header */
    .header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        border-bottom: 2px solid #000;
        padding-bottom: 15px;
        margin-bottom: 30px;
    }

    .header h1 {
        margin: 0;
        font-size: 34px;
        font-weight: 700;
        letter-spacing: 0.5px;
    }

    .header p {
        margin: 6px 0 0;
        font-size: 15px;
        color: #555;
    }

    .contact {
        text-align: right;
        font-size: 14px;
        line-height: 1.6;
        color: #333;
    }

    /* Sections */
    .section {
        margin-top: 35px;
    }

    .section h2 {
        font-size: 18px;
        text-transform: uppercase;
        border-bottom: 1px solid #000;
        padding-bottom: 5px;
        margin-bottom: 18px;
        letter-spacing: 0.8px;
    }

    .section p {
        line-height: 1.7;
        font-size: 15px;
        color: #333;
    }

    /* Experience */
    ul {
        padding-left: 22px;
        margin-top: 8px;
    }

    ul li {
        margin-bottom: 8px;
        font-size: 14px;
        line-height: 1.6;
    }

    /* Skills */
    .skills {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        margin-top: 10px;
    }

    .skill-title {
        font-weight: 600;
        margin-bottom: 4px;
        font-size: 15px;
    }

    .skills div {
        font-size: 14px;
        line-height: 1.5;
    }

    /* Education */
    .section strong {
        font-size: 15px;
    }

    .section small {
        font-size: 13px;
        color: #555;
    }

    /* Print-friendly */
    @media print {
        body {
            background: none;
            padding: 0;
        }

        .container {
            box-shadow: none;
            padding: 0;
        }
    }
</style>
</head>

<body>
    <?php
        $name = "Harvey Espenilla";
        $jobTitle = "2nd Year Student | Web Developer";
        $email = "harvey@gmail.com";
        $phone = "09XX XXX XXXX";
        $location = "Manila, Philippines";
        $summary = "A second-year student who is continuously learning and improving skills, particularly in web development. 
                    Has intermediate knowledge of multiple programming languages including C++, Python, Java, and JavaScript. 
                    Also familiar with scripting and web technologies such as HTML, PHP, and CSS, and actively develops problem-solving 
                    and collaboration skills through hands-on projects and practical experience.";
?>

<div class="container">

    <!-- Header -->
    <div class="header">
        <div>
            <h1><?php echo $name; ?></h1>
            <p><?php echo $jobTitle; ?></p>
        </div>
        <div class="contact">
            <?php echo $email; ?><br>
            <?php echo $phone; ?><br>
            <?php echo $location; ?>
        </div>
    </div>

    <!-- Summary -->
    <div class="section">
        <h2>Summary</h2>
        <p><?php echo $summary; ?></p>
    </div>

    <!-- Work Experience -->
    <div class="section">
        <h2>Experience</h2>

        <strong>Student Web Project</strong>
        <div>School Project | 2024 - Present</div>
        <ul>
            <li>Created simple websites using HTML, CSS, and PHP</li>
            <li>Created Ecommerce website using NodeJS, React and Bootstrap</li>
            <li>Created simple banking system using C++</li>
            <li>Practiced teamwork and problem solving</li>
            <li>Created Event Attendance Monitoring System using PHP and MySQL</li>
        </ul>

    </div>

    <!-- Skills -->
    <div class="section">
        <h2>Skills</h2>
        <div class="skills">
            <div>
                <div class="skill-title">Programming</div>
                C++, Python, Java, JavaScript
            </div>
            <div>
                <div class="skill-title">Web Development</div>
                HTML, CSS, PHP
            </div>
            <div>
                <div class="skill-title">Tools</div>
                Git, VS Code
            </div>
        </div>
    </div>

    <!-- Education -->
    <div class="section">
        <h2>Education</h2>
        <strong>Junior High School</strong><br>
        Grace of Shekinah School<br>
        <small>2018 – 2022</small><br>
        <br>

        <strong>Senior High School</strong><br>
        Immaculate Conception Polytechnic - Santa Maria<br>
        Information and Communication Technology - ICT<br>
        <small>2022 – 2024</small><br>
        <br>

        <strong>College</strong><br>
        FEU Institute of Technology<br>
        Bachelor of Science in Information Technology Specialization in Web and Mobile Application<br>
        <small>2024 – Present</small>



    </div>

    <!-- Certifications -->
    <div class="section">
        <h2>Certifications</h2>
        <ul>
        <li><div class="skill-title">Information Technology Specialist in Databases<br></div>
        Databases<br>
        <small>2025 - 2030</small><br></li>
        

        <li><div class="skill-title">Information Technology Specialist in Java<br></div>
        Java<br>
        <small>2025 - 2030</small><br></li>

        <li><div class="skill-title">Information Technology Specialist in JavaScript<br></div>
        JavaScript<br>
        <small>2026 - 2031</small><br></li>

        <li><div class="skill-title">Information Technology Specialist in Python<br></div>
        Python<br>
        <small>2026 - 2031</small></li>
        </ul>
    </div>

    
<!-- Organization -->
<div class="section">
    <h2>Organization</h2>

    <strong>Concorde of Dynamic E-Learners (CODE)</strong><br>
    Event Organizer<br>
    <small>2023 - 2024</small><br>
    <br>
    <strong>Alliance of Information Technology Students (AITS)</strong><br>
    Member<br>
    <small>2024 - Present</small>

</div>
</body>
</html>
