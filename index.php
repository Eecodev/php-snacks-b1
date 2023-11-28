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
    

    //BONUS
    $longParagraph = "Joahina was still trying to regain her senses of the lived world. “Oh god, I really went too far, they told me this would happen,” she murmured to herself as she stumbled towards the kitchen, hitting every furniture corner and doorframe on the way. After taking some water and injecting herself with 200 mg of nicotinic acid, her heartbeat began to slow down. It was comforting to be alone again, taking hallucinogenic drugs demands radical openness and she struggled with that quite a bit. Being a part of a society that based itself on non-individuality was one thing, but exposing oneself to dissolvement of individuum was something else entirely. Her two cats started rubbing themselves on her legs and purring softly while she was trying to recover. They always seemed to like her more after or while she consumed hallucinogens.

    Ever since the new world order was established approximately 80 years ago, the monarch encouraged everyone to experiment with hallucinogens. Since most possible scientific discoveries were already achieved and climate disaster partially averted, humans have been struggling with new breakthroughs and felt like life has lost its meaning. Some have went as far as saying it would be best to collectively end it. A few radical groups (mostly artists) practiced suicidal rituals regularly. Most humans followed the monarch’s request in hopes to regain a sense of direction and they were doing so by using synthetic hallucinogens since these were much safer to use and their side effects easily controlled. The high itself and hallucinations were much clearer, easier to manage and offered a sense of relief when searching for something new in human structures.";

    $sentences = explode(" . ", $longParagraph);

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
            <!-- <h1>SNACK 2</h1> -->
            <h1>BONUS</h1>
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
            
            <!-- <form action="process.php" method="GET">
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
            </form> -->

            <!-- Bonus -->
            
            <p>
                <?php
                foreach ($sentences as $sentence){
                    echo $longParagraph;
                }
                ?>
            </p>

        </main>  
    </div>
    

</body>
</html>