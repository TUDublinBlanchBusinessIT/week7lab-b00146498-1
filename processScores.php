<?php
include ('Team.php');

$name = $_GET['teamName'];
$homeTeam = new Team($name);

$matchResults = [
    ['homeTeamScore' => $_GET['home1'], 'awayTeamScore' => $_GET['away1']],
    ['homeTeamScore' => $_GET['home2'],'awayTeamScore' => $_GET['away2']],
    ['homeTeamScore' => $_GET['home3'],'awayTeamScore' => $_GET['away3']]
    
];

foreach ($matchResults as $result) {
    $homeTeamScore = $result['homeTeamScore'];
    $awayTeamScore = $result['awayTeamScore'];
    
    $homeTeam->finalScore($homeTeamScore, $awayTeamScore);
    
}
$goalAverage = $homeTeam->getGoalAverage();
echo "Goal Average for ($name): ($goalAverage)";


?>