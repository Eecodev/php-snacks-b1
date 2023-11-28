<?php

    // snack 1
    // $games = [
        /*
        [
            'in_house_team' => 'Chicago Bulls',
            'foreign_team' => 'Boston Celtics',
            'in_house_score' => '65',
            'foreign_score' => '40',
        ],
        [
            'in_house_team' => 'Miami Heat',
            'foreign_team' => 'Orlando Magic',
            'in_house_score' => '35',
            'foreign_score'=> '70',
        ],
        [
            'in_house_team' => 'New York Knicks',
            'foreign_team' => 'Toronto Raptors',
            'in_house_score' => '46',
            'foreign_score'=> '55',
        ],
        [
            'in_house_team' => 'Detroit Pistons',
            'foreign_team' => 'Indiana Pacers',
            'in_house_score' => '83',
            'foreign_score'=> '76',
        ],
    // ]
    */

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Snacks B1</title>
</head>
<body>
    <div class="container">
        <header>
            <!-- <h1>NBA SCORES</h1> -->
            <h1>SNACK 2</h1>
            <!-- <h1>BONUS</h1> -->
        </header>
        <main>
            <!-- snack 1 -->
            <?php
                /*foreach($games as $game){
                    echo "<div>{$game['in_house_team']} - {$game['foreign_team']} | {$game['in_house_score']} - {$game['foreign_score']}</div>";
                    }
                */
            ?> 

            <!-- snack 2 -->
            <form action="process.php" method="GET">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="name" class="form-control" name="name" id="name" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Age</label>
                    <input type="age" class="form-control" name="age" id="age" aria-describedby="emailHelp">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </main>  
    </div>
    

</body>
</html>