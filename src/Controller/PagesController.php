<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link http://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{

    /**
     * Displays a view
     *
     * @return void|\Cake\Network\Response
     * @throws \Cake\Network\Exception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     */
    public function display()
    {
        $path = func_get_args();

        $count = count($path);
        if (!$count) {
            return $this->redirect('/');
        }
        $page = $subpage = null;

        if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }
        $this->set(compact('page', 'subpage'));

        try {
            $this->render(implode('/', $path));
        } catch (MissingTemplateException $e) {
            if (Configure::read('debug')) {
                throw $e;
            }
            throw new NotFoundException();
        }
        $dsn = 'mysql://root:password@localhost/quick_stats';
        //ConnectionManager::config('default',['url' => $dsn]);
        $connection = ConnectionManager::get('default');

        $Division = $connection->execute("Select tname as 'Team', division as 'Division', wins as 'Wins', losses as 'Losses', ties as 'Ties'
                                        From Team
                                        Order by Division, Wins Desc, Losses, Ties")->fetchAll('assoc');

        $Passing = $connection->execute("select pname as 'Name', tname as 'Team',passingyards as 'Passing Yards', passingTDs as 'Passing Touchdowns'
                                        From Player, QuarterBack, Plays_On
                                        Where Player.pid = Quarterback.pid and Player.pid = Plays_On.pid 
                                        Order by 'Passing Yards' Desc")->fetchAll('assoc');
        $Rushing = $connection->execute("select pname as 'Name', tname as 'Team', rushingyards as 'Rushing Yards', rushingTDs as 'Rushing Touchdowns'
                                        From Player, RunningBack, Plays_On
                                        Where Player.pid = RunningBack.pid and Player.pid = Plays_On.pid 
                                        Union
                                        select pname as 'Name', tname as 'Team', rushingyards as 'Rushing Yards', rushingTDs as 'Rushing Touchdowns'
                                        From Player, Quarterback, Plays_On
                                        Where Player.pid = Quarterback.pid and Player.pid = Plays_On.pid 
                                        Order by 'Rushing Yards' Desc")->fetchAll('assoc');
        $Receiving = $connection->execute("select pname as 'Name', tname as 'Team', receivingYards as 'Receiving Yards', receivingTDs as 'Receiving Touchdowns'
                                        From Player, Receiver, Plays_On
                                        Where Player.pid = Receiver.pid and Player.pid = Plays_On.pid 
                                        Order by 'Receiving Yards' Desc")->fetchAll('assoc');
        $Tackles = $connection->execute("select pname as 'Name', tname as 'Team', tackles as 'Tackles'
                                        From Player, DefensiveLineman, Plays_On
                                        Where Player.pid = DefensiveLineman.pid and Player.pid = Plays_On.pid 
                                        Union
                                        select pname as 'Name', tname as 'Team', tackles as 'Tackles'
                                        From Player, DefensiveBack, Plays_On
                                        Where Player.pid = DefensiveBack.pid and Player.pid = Plays_On.pid 
                                        Order by Tackles Desc")->fetchAll('assoc');
        $Interceptions = $connection->execute("select pname as 'Name', tname as 'Team', interceptions as 'Interceptions' 
                                        From Player, DefensiveBack, Plays_On
                                        Where Player.pid = DefensiveBack.pid and Player.pid = Plays_On.pid 
                                        Order by Interceptions Desc
                                        ")->fetchAll('assoc');
        $Touchdowns = $connection->execute("select pname as 'Name', tname as 'Team', receivingTDs as 'Touchdowns'
                                        From Player, Receiver, Plays_On
                                        Where Player.pid = Receiver.pid and Player.pid = Plays_On.pid 
                                        Union
                                        select pname as 'Name', tname as 'Team', rushingTDs as 'Touchdowns'
                                        From Player, RunningBack, Plays_On
                                        Where Player.pid = RunningBack.pid and Player.pid = Plays_On.pid 
                                        Union
                                        select pname as 'Name', tname as 'Team', rushingTDs+passingTDs as 'Touchdowns'
                                        From Player, Quarterback, Plays_On
                                        Where Player.pid = Quarterback.pid and Player.pid = Plays_On.pid
                                        Order by Touchdowns Desc")->fetchAll('assoc');
        $Quarterback = $connection->execute("select pname as 'Name', tname as 'Team',passingyards as 'Passing Yards', passingTDs as 'Passing Touchdowns', rushingyards as 'Rushing Yards', rushingTDs as 'Rushing Touchdowns', interceptionsThrown as 'Interceptions'
                                        From Player, QuarterBack, Plays_On
                                        Where Player.pid = Quarterback.pid and Player.pid = Plays_On.pid 
                                        Order by  'Passing Yards' Desc, 'Passing Touchdowns' Desc, 'Rushing Yards' Desc, 'Rushing Touchdowns' Desc, Interceptions, Team Desc
                                        ")->fetchAll('assoc');
        $RunningBack = $connection->execute("select pname as 'Name', tname as 'Team', rushingyards as 'Rushing Yards', rushingTDs as 'Rushing Touchdowns'
                                        From Player, RunningBack, Plays_On
                                        Where Player.pid = RunningBack.pid and Player.pid = Plays_On.pid
                                        Order by 'Rushing Yards' Desc, 'Rushing Touchdowns' Desc, Team Desc")->fetchAll('assoc');
        $Receiver = $connection->execute("select pname as 'Name', tname as 'Team', receivingYards as 'Receiving Yards', receivingTDs as 'Receiving Touchdowns'
                                        From Player, Receiver, Plays_On
                                        Where Player.pid = Receiver.pid and Player.pid = Plays_On.pid 
                                        Order by 'Receiving Yards' Desc, 'Receiving Touchdowns' Desc, Team Desc")->fetchAll('assoc');
        $DefensiveBack = $connection->execute("select pname as 'Name', tname as 'Team', tackles as 'Tackles', interceptions as 'Interceptions'
                                            From Player, DefensiveBack, Plays_On
                                            Where Player.pid = DefensiveBack.pid and Player.pid = Plays_On.pid 
                                            Order by Tackles Desc, Interceptions Desc, Team Desc")->fetchAll('assoc');
        $DefensiveLineman = $connection->execute("select pname as 'Name', tname as 'Team', tackles as 'Tackles'
                                            From Player, DefensiveLineman, Plays_On
                                            Where Player.pid = DefensiveLineman.pid and Player.pid = Plays_On.pid 
                                            Order by Tackles Desc, Team Desc")->fetchAll('assoc');
        $Kicker = $connection->execute("select pname as 'Name', tname as 'Team', fieldgoals as 'Field Goals', extrapoints as 'Extra Points', touchbacks as 'Touchbacks'
                                            From Player, Kicker, Plays_On
                                            Where Player.pid = Kicker.pid and Player.pid = Plays_On.pid 
                                            Order by 'Field Goals' Desc, 'Extra Points' Desc, Touchbacks Desc, Team Desc")->fetchAll('assoc');
        $RecentGames = $connection->execute("select hometeam as 'Home', homescore as 'Score', awayteam as 'Away', awayscore as 'Score', dateOfGame as 'Date'
                                            from Plays
                                            order by Date Desc
                                            limit 5")->fetchAll('assoc');
        $this->set('divisions', json_encode($Division));
        $this->set('passing', json_encode($Passing));
        $this->set('rushing', json_encode($Rushing));
        $this->set('receiving', json_encode($Receiving));
        $this->set('tackles', json_encode($Tackles));
        $this->set('interceptions', json_encode($Interceptions));
        $this->set('touchdowns', json_encode($Touchdowns));
        $this->set('quarterback', json_encode($Quarterback));
        $this->set('runningback', json_encode($RunningBack));
        $this->set('receiver', json_encode($Receiver));
        $this->set('defensiveback', json_encode($DefensiveBack));
        $this->set('defensivelineman', json_encode($DefensiveLineman));
        $this->set('kicker', json_encode($Kicker));
        $this->set('recentgames', json_encode($RecentGames));
    }

    public function index(){
       // $Team = TableRegistry::get('Team');
       // $Plays = TableRegistry::get('Plays');
       // $PlaysOn = TableRegistry::get('PlaysOn');
        //$Player = TableRegistry::get('Player');
       // $Quarterback = TableRegistry::get('Quarterback');
        //$Receiver = TableRegistry::get('Receiver');
        //$Runningback = TableRegistry::get('Runningback');
       // $Kicker = TableRegistry::get('Kicker');
        //$Defensiveback = TableRegistry::get('Defensiveback');
        //$Defensivelineman = TableRegistry::get('Defensivelineman');

       // $division = $Team->find()
        //    ->select(['Team' => 'tname', 'Division' => 'division'])
        $dsn = 'mysql://root:password@localhost/quick_stats';
        ConnectionManager::config('default',['url' => $dsn]);
        $connection = ConnectionManager::get('default');

        $Division = $connection->execute("Select tname as 'Team', division as 'Division', wins as 'Wins', losses as 'Losses', ties as 'Ties'
                                        From Team
                                        Order by Division, Wins Desc, Losses, Ties");
        $this->set('divisions', json_encode($Division));
    }
}
