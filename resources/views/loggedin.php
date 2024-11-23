<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prompt Cards - Dark Mode</title>
    <style>
        /* Global Styles */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #121b29; /* Dark Blue Background */
            color: #e0e0e0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
            text-align: center;
        }

        /* Container for Cards */
        .container {
            max-width: 1400px;
            width: 100%;
            margin: 20px;
            padding: 30px;
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            justify-content: center;
        }

        /* Card Styling */
        .card {
            background: #1f2d3a; /* Dark Blue Card Background */
            border: 1px solid #2b3e55;
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.6);
            padding: 25px;
            width: calc(33.333% - 40px);
            box-sizing: border-box;
            transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
            background-color: #263945;
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.7);
        }

        /* Title with Typewriter Effect */
        .card h3 {
            margin: 0 0 15px;
            font-size: 1.6em;
            color: #ffffff;
            font-weight: 600;
            overflow: hidden;
            border-right: .15em solid #fff;
            white-space: nowrap;
            width: 0;
            animation: typing 2s steps(30) forwards, blink 0.75s step-end infinite;
        }

        /* Typewriter Animation */
        @keyframes typing {
            from {
                width: 0;
            }
            to {
                width: 100%;
            }
        }

        @keyframes blink {
            50% {
                border-color: transparent;
            }
        }

        /* Paragraph Styling */
        .card p {
            font-size: 1.1em;
            color: #bbbbbb;
            margin-bottom: 15px;
            line-height: 1.6;
        }

        /* Button Styling */
        .card button, .card a {
            display: inline-block;
            padding: 12px 20px;
            margin-top: 15px;
            border-radius: 6px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            font-weight: 500;
            text-transform: uppercase;
            transition: background-color 0.3s ease, transform 0.3s ease;
            border: none;
        }

        .card a:hover, .card button:hover {
            background-color: #0056b3;
            transform: translateY(-3px);
        }

        /* Media Queries */
        @media (max-width: 768px) {
            .card {
                width: calc(50% - 40px);
            }
        }

        @media (max-width: 480px) {
            .card {
                width: 100%;
            }
        }

        /* Fixed Logout Button */
        .logout {
            position: fixed;
            bottom: 20px;
            right: 20px;
            padding: 15px 30px;
            background-color: #FF4C4C;
            color: #fff;
            border: none;
            border-radius: 6px;
            font-size: 1.1em;
            cursor: pointer;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4);
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .logout:hover {
            background-color: #e03e3e;
            transform: translateY(-3px);
        }

    </style>
</head>
<body>
    <div class="container">
        <?php
        // Array of prompts
        $pdo = DB::connection()->getPdo();

        $stmt = $pdo->prepare("SELECT * FROM composite_prompt WHERE author_id = :id");
        $stmt->execute(['id' =>  Auth::id()]);
        $result = $stmt->fetchAll();

        foreach ($result as $prompt) {
            echo "
            <div class='card'>
                <h3>" . htmlspecialchars($prompt[2]) . "</h3>
                <p>" . htmlspecialchars($prompt[3]) . "</p>
                <a href='https://www.chatgpt.com/?q=" . urlencode($prompt[3]) . "'>Ask GPT</a>
            </div>";
        }
        ?>
    </div>

    <!-- Enhanced Logout Button -->
    <button class="logout" onclick="window.location.href='/logout';">Logout</button>
</body>
</html>
