
<?= $this->Html->css('bootstrap.min.css') ?>
<?= $this->Html->css('StyleSheet1.css') ?>
<?= $this->Html->script('jquery-2.1.4.min.js') ?>
<?= $this->Html->script('bootstrap.min.js') ?>
<?= $this->Html->script('angular.min.js') ?>
<?= $this->Html->script('ui-bootstrap-tpls-0.14.3.min.js') ?>
<?= $this->Html->script('controllers.js') ?>

    <title>Professional Football Quick Stats</title>
    <script type="text/javascript">
    jQuery(document).ready(function () {
        jQuery('.tablinks a').on('click', function (e) {
            var currentAttrValue = jQuery(this).attr('href');

            // Show/Hide Tabs
            jQuery('.tabs ' + currentAttrValue).show().siblings().hide();

            // Change/remove current tab to active
            jQuery(this).parent('li').addClass('active').siblings().removeClass('active');

            e.preventDefault();
        });
    });
    </script>

<body>
    <div class="row">
        <div class="col-sm-12">
            <nav class="navbar navbar-default navbar-fixed-top">
              <div class="container-fluid">
                <div class="navbar-header">
                    <div class="navbar-brand" style="cursor:default">Professional Football Quick Stats</div>
                    <ul class="nav navbar-nav tablinks">
                        <li role="presentation" class="active"><a href="#tab1">Rankings</a></li>
                        <li role="presentation">
                            <a href="#tab2">Team</a>
                        </li>
                        <li role="presentation">
                            <a href="#tab3">Player</a>
                        </li>
                    </ul>
                    
                </div>
                <div class="pull-right">
                    <button class="btn btn-default navbar-btn">Login</button>
                    <button class="btn btn-default navbar-btn">Sign Up</button>
                </div>
              </div>
            </nav>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-8">
                <h1>Rankings</h1>
                <div class="panel panel-default">
                    <div class="tabs">
                        <div class="tab-content">
                            <div id="tab1" class="tab panel-body active" ng-controller="RankingsController">
                                <div ng-controller="DropdownCtrl">
                                    <div class="dropdown" uib-dropdown is-open="status.isopen">
                                        <button class="btn btn-default" uib-dropdown-toggle ng-disabled="disabled">
                                        Divisions <span class="caret"></span>
                                        </button>
                                        <ul class="uib-dropdown-menu" role="menu" aria-labelledby="single-button">
                                            <li role="menuitem" ng-repeat="division in divisions"><a href="#">{{division}}</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div ng-repeat="division in divisions">
                                    {{division}}
                                    <ul class="dropdown-menu" aria-labelledby="dLabel">
                                        <li><a href="#">{{division}}</a></li>
                                    </ul>
                                    </div>
                            <!--<button class="btn btn-default pull-right" id="RankingsFind">Find
                            </button>-->
                                <table class="table table-hover" style="width:100%;">
                                    <thead>
                                        <tr>
                                            <th>Division</th>
                                            <th>Team</th>
                                            <th>Wins</th>
                                            <th>Losses<th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>NFC South</td><!--We could dynamically create these -->
                                            <td>Panthers</td>
                                            <td>11</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>NFC South</td>
                                            <td>Falcons</td>
                                            <td>6</td>
                                            <td>5</td>
                                        </tr>
                                        <tr>
                                            <td>NFC South</td>
                                            <td>Buccaneeers</td>
                                            <td>5</td>
                                            <td>6</td>
                                        </tr>
                                        <tr>
                                            <td>NFC South</td>
                                            <td>Saints</td>
                                            <td>4</td>
                                            <td>7</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div id="tab2" class="tab panel-body">
                                <table style="width:100%;">
                                    <tr>
                                        <td>
                                            <p>
                                                Top <select id="TeamNusmD">
                                                    <option>1</option>
                                                    <option>5</option>
                                                </select> Players
                                            </p>
                                        </td>
                                        <td>
                                            <p>Team: 
                                                <select id="TeamName">
                                                    <option>
                                                        Arizona Cardinals
                                                    </option>
                                                    <option>
                                                        Atlanta Falcons
                                                    </option>
                                                    <option>
                                                        Baltimore Ravens
                                                    </option>
                                                    <option>
                                                        Buffalo Bills
                                                    </option>
                                                    <option>
                                                        Carolina Panthers
                                                    </option>
                                                    <option>
                                                        Chicago Bears
                                                    </option>
                                                    <option>
                                                        Cincinnati Bengals
                                                    </option>
                                                    <option>
                                                        Cleveland Browns
                                                    </option>
                                                    <option>
                                                        Dallas Cowboys
                                                    </option>
                                                    <option>
                                                        Denver Broncos
                                                    </option>
                                                    <option>
                                                        Detroit Lions
                                                    </option>
                                                    <option>
                                                        Green Bay Packers
                                                    </option>
                                                    <option>
                                                        Houston Texans
                                                    </option>
                                                    <option>
                                                        Indianapolis Colts
                                                    </option>
                                                    <option>
                                                        Jacksonville Jaguars
                                                    </option>
                                                    <option>
                                                        Kansas City Chiefs
                                                    </option>
                                                    <option>
                                                        Miami Dolphins
                                                    </option>
                                                    <option>
                                                        Minnesota Vikings
                                                    </option>
                                                    <option>
                                                        New England Patriots
                                                    </option>
                                                    <option>
                                                        New Orleans Saints
                                                    </option>
                                                    <option>
                                                        New York Giants
                                                    </option>
                                                    <option>
                                                        New York Jets
                                                    </option>
                                                    <option>
                                                        Oakland Raiders
                                                    </option>
                                                    <option>
                                                        Philadelphia Eagles
                                                    </option>
                                                    <option>
                                                        Pittsburgh Steelers
                                                    </option>
                                                    <option>
                                                        Saint Louis Rams
                                                    </option>
                                                    <option>
                                                        San Diego Chargers
                                                    </option>
                                                    <option>
                                                        San Francisco 49ers
                                                    </option>
                                                    <option>
                                                        Seattle Seahawks
                                                    </option>
                                                    <option>
                                                        Tampa Bay Buccaneers
                                                    </option>
                                                    <option>
                                                        Tennessee Titans
                                                    </option>
                                                    <option>
                                                        Washington Redskins
                                                    </option>
                                                </select>
                                            </p>
                                        </td>
                                        <td>
                                            <p>
                                                Stat: <select id="TeamStatDD">
                                                    <option>
                                                        Passing
                                                    </option>
                                                    <option>
                                                        Rushing
                                                    </option>
                                                    <option>
                                                        Receiving
                                                    </option>
                                                    <option>
                                                        Tackles
                                                    </option>
                                                    <option>
                                                        Interceptions
                                                    </option>
                                                    <option>
                                                        Touchdowns
                                                    </option>
                                                </select>
                                            </p>
                                        </td>
                                        <!--<td><input id="TeamFind" type="button" value="Find" /></td>-->
                                    </tr>
                                </table>
                                <table class="table table-hover" style="width:100%;">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Stat</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Markus Golden</td>
                                            <td>OLB</td>
                                            <td>22</td>
                                        </tr>
                                        <tr>
                                            <td>David Johnson</td>
                                            <td>RB</td>
                                            <td>18</td>
                                        </tr>
                                        <tr>
                                            <td>Alana Fua</td>
                                            <td>ILB</td>
                                            <td>12</td>
                                        </tr>
                                        <tr>
                                            <td>Kareem Martin</td>
                                            <td>OLB/td>
                                            <td>11</td>
                                        </tr>
                                        <tr>
                                            <td>Mike Leach</td>
                                            <td>LS</td>
                                            <td>10</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div id="tab3" class="tab panel-body">
                                    <table style="width:100%;">
                                        <tr>
                                            <td>
                                                <p>
                                                    Top <select id="PlayerNusmD">
                                                        <option>1</option>
                                                        <option>5</option>
                                                    </select> Players
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                    Team: 
                                                    <select id="PlayerTeamName">
                                                        <option>
                                                            All
                                                        </option>
                                                        <option>
                                                            Arizona Cardinals
                                                        </option>
                                                        <option>
                                                            Atlanta Falcons
                                                        </option>
                                                        <option>
                                                            Baltimore Ravens
                                                        </option>
                                                        <option>
                                                            Buffalo Bills
                                                        </option>
                                                        <option>
                                                            Carolina Panthers
                                                        </option>
                                                        <option>
                                                            Chicago Bears
                                                        </option>
                                                        <option>
                                                            Cincinnati Bengals
                                                        </option>
                                                        <option>
                                                            Cleveland Browns
                                                        </option>
                                                        <option>
                                                            Dallas Cowboys
                                                        </option>
                                                        <option>
                                                            Denver Broncos
                                                        </option>
                                                        <option>
                                                            Detroit Lions
                                                        </option>
                                                        <option>
                                                            Green Bay Packers
                                                        </option>
                                                        <option>
                                                            Houston Texans
                                                        </option>
                                                        <option>
                                                            Indianapolis Colts
                                                        </option>
                                                        <option>
                                                            Jacksonville Jaguars
                                                        </option>
                                                        <option>
                                                            Kansas City Chiefs
                                                        </option>
                                                        <option>
                                                            Miami Dolphins
                                                        </option>
                                                        <option>
                                                            Minnesota Vikings
                                                        </option>
                                                        <option>
                                                            New England Patriots
                                                        </option>
                                                        <option>
                                                            New Orleans Saints
                                                        </option>
                                                        <option>
                                                            New York Giants
                                                        </option>
                                                        <option>
                                                            New York Jets
                                                        </option>
                                                        <option>
                                                            Oakland Raiders
                                                        </option>
                                                        <option>
                                                            Philadelphia Eagles
                                                        </option>
                                                        <option>
                                                            Pittsburgh Steelers
                                                        </option>
                                                        <option>
                                                            Saint Louis Rams
                                                        </option>
                                                        <option>
                                                            San Diego Chargers
                                                        </option>
                                                        <option>
                                                            San Francisco 49ers
                                                        </option>
                                                        <option>
                                                            Seattle Seahawks
                                                        </option>
                                                        <option>
                                                            Tampa Bay Buccaneers
                                                        </option>
                                                        <option>
                                                            Tennessee Titans
                                                        </option>
                                                        <option>
                                                            Washington Redskins
                                                        </option>
                                                    </select>
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                    Position: <select id="PositionDD">
                                                        <option>
                                                            Quaterback
                                                        </option>
                                                        <option>
                                                            Running Back
                                                        </option>
                                                        <option>
                                                            Receiver
                                                        </option>
                                                        <option>
                                                            Defensive Back
                                                        </option>
                                                        <option>
                                                            Defensive Lineman
                                                        </option>
                                                        <option>
                                                            Kicker
                                                        </option>
                                                    </select>
                                                </p>
                                            </td>
                                            <td>
                                                <input id="TeamFind" type="button" value="Find" />
                                            </td>
                                        </tr>
                                    </table>
                                    <p>Tab #3 content goes here!</p>
                                    <table class="table table-hover" style="width:100%;">
                                        <tr>
                                            <td>Stats</td>
                                            <td>Go</td>
                                            <td>Here</td>
                                        </tr>
                                        <tr>
                                            <td>Player Name</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Player Name</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </table>
                                </div>
                        </div>
                    </div>
            </div>
        </div>
        <div class="col-sm-4">
            <h1>Game Center</h1>
            <div class="panel panel-default">
                <div class="gameContainer">
                    <div class="list-group">
                        <a href="#" class="list-group-item" style="padding-top:5px">
                            <div class="match">
                                <div>
                                    <span class="matchHeader"><small>NFC East</small></span>
                                    <span class="pull-right"><small>22 November 2015</small></span>
                                </div>
                                <div class="teamVs">
                                    <div class="row">
                                        <span class="col-sm-4">Buccaneers</span>
                                        <span class="col-sm-4"><strong>11 - 43</strong></span>
                                        <span class="col-sm-4">Bears</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item">
                            <div class="match">
                                <div>
                                    <span class="matchHeader"><small>NFC East</small></span>
                                    <span class="pull-right"><small>21 November 2015</small></span>
                                </div>
                                <div class="teamVs">
                                    <div class="row">
                                        <span class="col-sm-4">Cardinals</span>
                                        <span class="col-sm-4"><strong>22 - 12</strong></span>
                                        <span class="col-sm-4">Ravens</span>
                                    </div>

                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item">
                            <div class="match">
                                <div>
                                    <span class="matchHeader"><small>NFC North</small></span>
                                    <span class="pull-right"><small>21 November 2015</small></span>
                                </div>
                                <div class="teamVs">
                                    <div class="row">
                                        <span class="col-sm-4">Texans</span>
                                        <span class="col-sm-4"><strong>28 - 7</strong></span>
                                        <span class="col-sm-4">Dolphins</span>
                                    </div>

                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item">
                            <div class="match">
                                <div>
                                    <span class="matchHeader"><small>NFC East</small></span>
                                    <span class="pull-right"><small>20 November 2015</small></span>
                                </div>
                                <div class="teamVs">
                                    <div class="row">
                                        <span class="col-sm-4">Redskins</span>
                                        <span class="col-sm-4"><strong>11 - 43</strong></span>
                                        <span class="col-sm-4">Cowboys</span>
                                    </div>

                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item">
                            <div class="match">
                                <div>
                                    <span class="matchHeader"><small>NFC West</small></span>
                                    <span class="pull-right"><small>19 November 2015</small></span>
                                </div>
                                <div class="teamVs">
                                    <div class="row">
                                        <span class="col-sm-4">Seahawks</span>
                                        <span class="col-sm-4"><strong>28 - 21</strong></span>
                                        <span class="col-sm-4">49ers</span>
                                    </div>

                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>