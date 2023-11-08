<?php
class Team 
{
    private $name;
    private $totalPoints;
    private $totalGames;
    private $totalGoals;
    
    public function __construct($teamName)
    {
        $this->name = $teamName;
        $this->totalPoints = 0; 
        $this->totalGames = 0;
        $this->totalGoals = 0;
    }
    
    public function finalScore($parm1, $parm2)
    {
        $this->totalGames++;
        if ($parm1 > $parm2)
        {
            $this->totalPoints += 3;
        }
        elseif ($parm1 == $parm2)
        {
            $this->totalPoints += 1;
        }
        
        $this->totalGoals += $parm1;
    }
}
?>
