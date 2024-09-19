<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - NT Education</title>
    <link rel="stylesheet" href="../CSS/about.css"> <!-- Link to external CSS -->
</head>
<body>
    <!-- Header Section -->
    <header class="header">
        <div class="container">
            <h1>About NT Education</h1>
            <p>Empowering Minds, Transforming Futures</p>
        </div>
    </header>

    <!-- Back Button -->
    <div class="container">
        <button class="back-btn" onclick="goBack()">← Back</button>
    </div>

    <!-- About Section -->
    <section class="about">
        <div class="container">
            <h2>Who We Are</h2>
            <p>NT Education is a leading platform dedicated to providing high-quality educational resources to students, professionals, and lifelong learners. We offer courses, tutorials, and comprehensive learning materials in various fields such as technology, digital marketing, and more. Our goal is to empower individuals with the skills and knowledge they need to succeed in today’s digital age.</p>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="mission">
        <div class="container">
            <h2>Our Mission</h2>
            <p>At NT Education, our mission is simple: to make education accessible to everyone. We believe in the power of education to transform lives and we are committed to providing learners with the tools they need to excel in their chosen fields.</p>
        </div>
    </section>

    <!-- Vision and Values Section -->
    <section class="values">
        <div class="container">
            <h2>Our Vision & Values</h2>
            <p>We envision a world where education is freely available to anyone, anywhere, at any time. Our core values include:</p>
            <ul>
                <li><strong>Excellence:</strong> We strive to deliver the best educational content possible.</li>
                <li><strong>Innovation:</strong> We continuously update our content to stay ahead in the rapidly evolving digital world.</li>
                <li><strong>Accessibility:</strong> We believe education should be inclusive and accessible to all.</li>
                <li><strong>Community:</strong> We foster a learning community where students can connect and collaborate.</li>
            </ul>
        </div>
    </section>

    <!-- Meet the Team Section -->
    <section class="team">
        <div class="container">
            <h2>Meet the Team</h2>
            <p>Our passionate team of educators, developers, and industry experts is here to support your learning journey:</p>
            <div class="team-members">
                <div class="team-member">
                    <img src="../img/hemant.jpg" alt="Founder" class="team-img">
                    <h3>Hemant Gautam</h3>
                    <p>Founder & Lead Educator</p>
                </div>
                <div class="team-member">
                    <img src="../img/nitin.png" alt="Designer" class="team-img">
                    <h3>Nitin Sharma</h3>
                    <p>Creative Designer</p>
                </div>
                <!-- Add more team members as needed -->
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 NT Education. All rights reserved.</p>
        </div>
    </footer>

    <!-- JavaScript for Back Button -->
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</body>
</html>
