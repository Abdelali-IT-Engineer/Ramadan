<!-- Ramadan management-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ramadan Daily Schedule</title>
    <link rel="stylesheet" href="styles.css">

    <style>
        /* Reset CSS */
        html, body, div, span, applet, object, iframe,
        h1, h2, h3, h4, h5, h6, p, blockquote, pre,
        a, abbr, acronym, address, big, cite, code,
        del, dfn, em, img, ins, kbd, q, s, samp,
        small, strike, strong, sub, sup, tt, var,
        b, u, i, center,
        dl, dt, dd, ol, ul, li,
        fieldset, form, label, legend,
        table, caption, tbody, tfoot, thead, tr, th, td {
            margin: 0;
            padding: 0;
            border: 0;
            outline: 0;
            font-size: 100%;
            vertical-align: baseline;
            background: transparent;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1;
            color: #333;
            background-color: #f8f9fa;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            box-sizing: border-box;
        }

        .header {
            background-color: #007bff;
            color: #fff;
            padding: 20px 0;
        }

        .navbar {
            text-align: center;
        }

        .nav-menu {
            list-style: none;
            padding: 0;
        }

        .nav-menu li {
            display: inline-block;
            margin-right: 20px;
        }

        .nav-menu li:last-child {
            margin-right: 0;
        }

        .nav-menu li a {
            color: #fff;
            text-decoration: none;
            font-size: 16px;
        }

        .main-content {
            padding: 50px 0;
        }

        .section {
            background-color: #fff;
            padding: 40px;
            margin-bottom: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .section h2 {
            color: #007bff;
            font-size: 28px;
            margin-bottom: 20px;
        }

        .section p {
            font-size: 18px;
            line-height: 1.6;
            color: #333;
        }

        .footer {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        .footer p {
            font-size: 14px;
        }

        @media (max-width: 768px) {
            .container {
                padding: 0 10px;
            }

            .nav-menu li {
                display: block;
                margin-bottom: 10px;
            }
        }
    </style>
</head>

<body>
    <header class="header">
        <div class="container">
            <nav class="navbar">
                <ul class="nav-menu">
                    <li><a href="#quran">Quran/Adkar/Hadith</a></li>
                    <li><a href="#salat">Salat Management</a></li>
                    <li><a href="#activity">Physical Activity</a></li>
                    <li><a href="#recipes">Ramadan Recipes</a></li>
                    <li><a href="#knowledge">Family Involvement & Knowledge Acquisition</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="main-content">
        <section id="quran" class="section">
            <div class="container">
                <h2>📖 Quran/Adkar/Hadith</h2>
                <p>Dedicate time each day to read the Quran, engage in Adkar (remembrance of Allah), and reflect on Hadiths.</p>
                <p>Resources:
                    <a href="https://www.quran.com/" target="_blank">Quran.com</a>,
                    <a href="https://www.muslimpro.com/" target="_blank">Muslim Pro App</a>
                </p>
            </div>
        </section>

        <section id="salat" class="section">
            <div class="container">
                <h2>🕌 Salat Management</h2>
                <p>Respect the timings of obligatory prayers (fard) and perform voluntary prayers (nawafil) for increased spiritual rewards.</p>
                <p>Resources:
                    <a href="https://www.islamicfinder.org/" target="_blank">IslamicFinder</a>,
                    <a href="https://www.salah.com/" target="_blank">Salah.com</a>
                </p>
            </div>
        </section>

        <section id="activity" class="section">
            <div class="container">
                <h2>🏋️ Physical Activity</h2>
                <p>Incorporate physical exercise such as light workouts, stretching, or walking to maintain health and vitality during Ramadan.</p>
                <p>Resources:
                    <a href="https://www.youtube.com/user/FitnessBlender" target="_blank">Fitness Blender</a>,
                    <a href="https://www.darebee.com/" target="_blank">Darebee</a>
                </p>
            </div>
        </section>

        <section id="recipes" class="section">
            <div class="container">
                <h2>🍲 Ramadan Recipes</h2>
                <p>Explore and prepare delicious Ramadan recipes for iftar and suhoor meals.</p>
                <p>Resources:
                    <a href="https://www.myrecipes.com/" target="_blank">MyRecipes</a>,
                    <a href="https://www.allrecipes.com/" target="_blank">AllRecipes</a>
                </p>
            </div>
        </section>

        <section id="knowledge" class="section">
            <div class="container">
                <h2>👪 Family Involvement & Knowledge Acquisition</h2>
                <p>Engage in activities that involve your family and promote the acquisition of knowledge about Islam.</p>
                <p>Resources:
                    <a href="https://www.islamicity.org/" target="_blank">Islamicity</a>,
                    <a href="https://www.islamreligion.com/" target="_blank">Islam Religion</a>
                </p>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 Ramadan Daily Schedule. All rights reserved.</p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>

</html>
