<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prompt Cards - Dark Mode</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #121212;
            color: #e0e0e0;
        }
        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .card {
            background: #1e1e1e;
            border: 1px solid #333;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
            padding: 20px;
            flex: 1 1 calc(33.333% - 40px);
            box-sizing: border-box;
            text-align: center;
            transition: transform 0.3s, background-color 0.3s;
        }
        .card:hover {
            transform: translateY(-5px);
            background-color: #292929;
        }
        .card h3 {
            margin: 0 0 10px;
            font-size: 1.5em;
            color: #ffffff;
        }
        .card p {
            font-size: 1em;
            color: #bbbbbb;
        }
        .card button {
            margin-top: 10px;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            background-color: #007BFF;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .card button:hover {
            background-color: #0056b3;
        }
        @media (max-width: 768px) {
            .card {
                flex: 1 1 calc(50% - 20px);
            }
        }
        @media (max-width: 480px) {
            .card {
                flex: 1 1 100%;
            }
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
    
        

        // Loop through prompts to create cards
        foreach ($result as $prompt) {
            echo "
            <div class='card'>
                <h3>Prompt</h3>
                <p>$prompt</p>
                <button>Explore</button>
            </div>";
        }
        ?>
    </div>
</body>
</html>
