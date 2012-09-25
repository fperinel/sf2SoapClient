<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Services;

use Level42\SoapClientBundle\Tests\Resources\Football\Entities\AllPlayerNamesResponse;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\AllPlayerNames;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\AllDefendersResponse;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\AllDefenders;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\AllGoalKeepersResponse;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\AllGoalKeepers;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\AllForwardsResponse;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\AllForwards;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\AllMidFieldsResponse;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\AllMidFields;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\TopGoalScorersResponse;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\TopGoalScorers;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\TopSelectedGoalScorersResponse;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\TopSelectedGoalScorers;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\AllPlayersWithYellowOrRedCardsResponse;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\AllPlayersWithYellowOrRedCards;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\AllPlayersWithYellowCardsResponse;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\AllPlayersWithYellowCards;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\AllPlayersWithRedCardsResponse;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\AllPlayersWithRedCards;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\AllCardsResponse;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\AllCards;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\CitiesResponse;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\Cities;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\StadiumNamesResponse;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\StadiumNames;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\StadiumURLResponse;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\StadiumURL;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\StadiumInfoResponse;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\StadiumInfo;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\AllStadiumInfoResponse;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\AllStadiumInfo;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\FullTeamInfoResponse;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\FullTeamInfo;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\TeamsResponse;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\Teams;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\GroupCountResponse;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\GroupCount;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\GroupsResponse;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\Groups;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\GroupCompetitorsResponse;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\GroupCompetitors;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\AllGroupCompetitorsResponse;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\AllGroupCompetitors;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\GoalsScoredResponse;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\GoalsScored;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\GameInfoResponse;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\GameInfo;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\AllGamesResponse;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\AllGames;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\CountryNamesResponse;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\CountryNames;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\GamesPlayedResponse;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\GamesPlayed;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\GamesPerCityResponse;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\GamesPerCity;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\YellowCardsTotalResponse;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\YellowCardsTotal;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\RedCardsTotalResponse;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\RedCardsTotal;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\YellowAndRedCardsTotalResponse;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\YellowAndRedCardsTotal;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\GameResultCodesResponse;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\GameResultCodes;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\CoachesResponse;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\Coaches;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\PlayedAtWorldCupResponse;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\PlayedAtWorldCup;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\TeamsCompeteListResponse;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\TeamsCompeteList;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\NextGameResponse;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\NextGame;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\DateOfFirstGameResponse;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\DateOfFirstGame;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\DateOfLastGameResponse;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\DateOfLastGame;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\DateLastGroupGameResponse;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\DateLastGroupGame;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\TournamentInfoResponse;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\TournamentInfo;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\NumberOfGamesResponse;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\NumberOfGames;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\SignupsPerDateResponse;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\SignupsPerDate;
use \SoapClient;


/**
 * Info class
 */
class Info extends SoapClient
{

  /**
   * Default class map
   * @access private
   * @var array
   */
  private static $classmap = array(
    "AllPlayerNames" => "AllPlayerNames",
    "AllPlayerNamesResponse" => "AllPlayerNamesResponse",
    "AllDefenders" => "AllDefenders",
    "AllDefendersResponse" => "AllDefendersResponse",
    "AllGoalKeepers" => "AllGoalKeepers",
    "AllGoalKeepersResponse" => "AllGoalKeepersResponse",
    "AllForwards" => "AllForwards",
    "AllForwardsResponse" => "AllForwardsResponse",
    "AllMidFields" => "AllMidFields",
    "AllMidFieldsResponse" => "AllMidFieldsResponse",
    "TopGoalScorers" => "TopGoalScorers",
    "TopGoalScorersResponse" => "TopGoalScorersResponse",
    "TopSelectedGoalScorers" => "TopSelectedGoalScorers",
    "TopSelectedGoalScorersResponse" => "TopSelectedGoalScorersResponse",
    "AllPlayersWithYellowOrRedCards" => "AllPlayersWithYellowOrRedCards",
    "AllPlayersWithYellowOrRedCardsResponse" => "AllPlayersWithYellowOrRedCardsResponse",
    "AllPlayersWithYellowCards" => "AllPlayersWithYellowCards",
    "AllPlayersWithYellowCardsResponse" => "AllPlayersWithYellowCardsResponse",
    "AllPlayersWithRedCards" => "AllPlayersWithRedCards",
    "AllPlayersWithRedCardsResponse" => "AllPlayersWithRedCardsResponse",
    "AllCards" => "AllCards",
    "AllCardsResponse" => "AllCardsResponse",
    "Cities" => "Cities",
    "CitiesResponse" => "CitiesResponse",
    "StadiumNames" => "StadiumNames",
    "StadiumNamesResponse" => "StadiumNamesResponse",
    "StadiumURL" => "StadiumURL",
    "StadiumURLResponse" => "StadiumURLResponse",
    "StadiumInfo" => "StadiumInfo",
    "StadiumInfoResponse" => "StadiumInfoResponse",
    "AllStadiumInfo" => "AllStadiumInfo",
    "AllStadiumInfoResponse" => "AllStadiumInfoResponse",
    "FullTeamInfo" => "FullTeamInfo",
    "FullTeamInfoResponse" => "FullTeamInfoResponse",
    "Teams" => "Teams",
    "TeamsResponse" => "TeamsResponse",
    "GroupCount" => "GroupCount",
    "GroupCountResponse" => "GroupCountResponse",
    "Groups" => "Groups",
    "GroupsResponse" => "GroupsResponse",
    "GroupCompetitors" => "GroupCompetitors",
    "GroupCompetitorsResponse" => "GroupCompetitorsResponse",
    "AllGroupCompetitors" => "AllGroupCompetitors",
    "AllGroupCompetitorsResponse" => "AllGroupCompetitorsResponse",
    "GoalsScored" => "GoalsScored",
    "GoalsScoredResponse" => "GoalsScoredResponse",
    "GameInfo" => "GameInfo",
    "GameInfoResponse" => "GameInfoResponse",
    "AllGames" => "AllGames",
    "AllGamesResponse" => "AllGamesResponse",
    "CountryNames" => "CountryNames",
    "CountryNamesResponse" => "CountryNamesResponse",
    "GamesPlayed" => "GamesPlayed",
    "GamesPlayedResponse" => "GamesPlayedResponse",
    "GamesPerCity" => "GamesPerCity",
    "GamesPerCityResponse" => "GamesPerCityResponse",
    "YellowCardsTotal" => "YellowCardsTotal",
    "YellowCardsTotalResponse" => "YellowCardsTotalResponse",
    "RedCardsTotal" => "RedCardsTotal",
    "RedCardsTotalResponse" => "RedCardsTotalResponse",
    "YellowAndRedCardsTotal" => "YellowAndRedCardsTotal",
    "YellowAndRedCardsTotalResponse" => "YellowAndRedCardsTotalResponse",
    "GameResultCodes" => "GameResultCodes",
    "GameResultCodesResponse" => "GameResultCodesResponse",
    "Coaches" => "Coaches",
    "CoachesResponse" => "CoachesResponse",
    "PlayedAtWorldCup" => "PlayedAtWorldCup",
    "PlayedAtWorldCupResponse" => "PlayedAtWorldCupResponse",
    "TeamsCompeteList" => "TeamsCompeteList",
    "TeamsCompeteListResponse" => "TeamsCompeteListResponse",
    "NextGame" => "NextGame",
    "NextGameResponse" => "NextGameResponse",
    "DateOfFirstGame" => "DateOfFirstGame",
    "DateOfFirstGameResponse" => "DateOfFirstGameResponse",
    "DateOfLastGame" => "DateOfLastGame",
    "DateOfLastGameResponse" => "DateOfLastGameResponse",
    "DateLastGroupGame" => "DateLastGroupGame",
    "DateLastGroupGameResponse" => "DateLastGroupGameResponse",
    "TournamentInfo" => "TournamentInfo",
    "TournamentInfoResponse" => "TournamentInfoResponse",
    "NumberOfGames" => "NumberOfGames",
    "NumberOfGamesResponse" => "NumberOfGamesResponse",
    "SignupsPerDate" => "SignupsPerDate",
    "SignupsPerDateResponse" => "SignupsPerDateResponse",
  );

  /**
   * ClassService constructor
   *
   * @param string $wsdl WSDL location for this service
   * @param array $options Options for the SoapClient
   *
   * @return ClassService
   */
  public function __construct($wsdl = 'http://footballpool.dataaccess.eu/data/info.wso?WSDL', $options = array()) {
    foreach (self::$classmap as $wsdlClassName => $phpClassName) {
      if (!isset($options['classmap'][$wsdlClassName])) {
        $options['classmap'][$wsdlClassName] = $phpClassName;
      }
    }
    parent::__construct($wsdl, $options);
  }

  /**
   * Return WSDL targetNamespace
   *
   * @return string
   */
  public function getTargetNamespace() {
    return "http://footballpool.dataaccess.eu";
  }

  /**
   * Set a SOAP header
   *
   * @param string $key Key of header value
   * @param mixed $value Value of header
   */
  public function setSoapHeader($key, $value = null) {
    $soapHeader = new SoapHeader($this->getTargetNamespace(), $key, $value);
    $this->__setSoapHeaders($soapHeader);
  }

  /**
   * Set multiple SOAP headers
   *
   * @param array $header  Associative array with key/value
   */
  public function setSoapHeaders($headers = array()) {
    $headers = array();
    foreach ($headers as $key => $value) {
      $headers[] = new SoapHeader($this->getTargetNamespace(), $key, $value);
    }
    $this->__setSoapHeaders($headers);
  }

  /**
   * AllPlayerNames method
   *
   * @param AllPlayerNames $parameters
   *
   * @return AllPlayerNamesResponse
   */
  public function AllPlayerNames(AllPlayerNames $parameters) {
    return parent::__soapCall('AllPlayerNames', func_get_args());
  }

  /**
   * AllDefenders method
   *
   * @param AllDefenders $parameters
   *
   * @return AllDefendersResponse
   */
  public function AllDefenders(AllDefenders $parameters) {
    return parent::__soapCall('AllDefenders', func_get_args());
  }

  /**
   * AllGoalKeepers method
   *
   * @param AllGoalKeepers $parameters
   *
   * @return AllGoalKeepersResponse
   */
  public function AllGoalKeepers(AllGoalKeepers $parameters) {
    return parent::__soapCall('AllGoalKeepers', func_get_args());
  }

  /**
   * AllForwards method
   *
   * @param AllForwards $parameters
   *
   * @return AllForwardsResponse
   */
  public function AllForwards(AllForwards $parameters) {
    return parent::__soapCall('AllForwards', func_get_args());
  }

  /**
   * AllMidFields method
   *
   * @param AllMidFields $parameters
   *
   * @return AllMidFieldsResponse
   */
  public function AllMidFields(AllMidFields $parameters) {
    return parent::__soapCall('AllMidFields', func_get_args());
  }

  /**
   * TopGoalScorers method
   *
   * @param TopGoalScorers $parameters
   *
   * @return TopGoalScorersResponse
   */
  public function TopGoalScorers(TopGoalScorers $parameters) {
    return parent::__soapCall('TopGoalScorers', func_get_args());
  }

  /**
   * TopSelectedGoalScorers method
   *
   * @param TopSelectedGoalScorers $parameters
   *
   * @return TopSelectedGoalScorersResponse
   */
  public function TopSelectedGoalScorers(TopSelectedGoalScorers $parameters) {
    return parent::__soapCall('TopSelectedGoalScorers', func_get_args());
  }

  /**
   * AllPlayersWithYellowOrRedCards method
   *
   * @param AllPlayersWithYellowOrRedCards $parameters
   *
   * @return AllPlayersWithYellowOrRedCardsResponse
   */
  public function AllPlayersWithYellowOrRedCards(AllPlayersWithYellowOrRedCards $parameters) {
    return parent::__soapCall('AllPlayersWithYellowOrRedCards', func_get_args());
  }

  /**
   * AllPlayersWithYellowCards method
   *
   * @param AllPlayersWithYellowCards $parameters
   *
   * @return AllPlayersWithYellowCardsResponse
   */
  public function AllPlayersWithYellowCards(AllPlayersWithYellowCards $parameters) {
    return parent::__soapCall('AllPlayersWithYellowCards', func_get_args());
  }

  /**
   * AllPlayersWithRedCards method
   *
   * @param AllPlayersWithRedCards $parameters
   *
   * @return AllPlayersWithRedCardsResponse
   */
  public function AllPlayersWithRedCards(AllPlayersWithRedCards $parameters) {
    return parent::__soapCall('AllPlayersWithRedCards', func_get_args());
  }

  /**
   * AllCards method
   *
   * @param AllCards $parameters
   *
   * @return AllCardsResponse
   */
  public function AllCards(AllCards $parameters) {
    return parent::__soapCall('AllCards', func_get_args());
  }

  /**
   * Cities method
   *
   * @param Cities $parameters
   *
   * @return CitiesResponse
   */
  public function Cities(Cities $parameters) {
    return parent::__soapCall('Cities', func_get_args());
  }

  /**
   * StadiumNames method
   *
   * @param StadiumNames $parameters
   *
   * @return StadiumNamesResponse
   */
  public function StadiumNames(StadiumNames $parameters) {
    return parent::__soapCall('StadiumNames', func_get_args());
  }

  /**
   * StadiumURL method
   *
   * @param StadiumURL $parameters
   *
   * @return StadiumURLResponse
   */
  public function StadiumURL(StadiumURL $parameters) {
    return parent::__soapCall('StadiumURL', func_get_args());
  }

  /**
   * StadiumInfo method
   *
   * @param StadiumInfo $parameters
   *
   * @return StadiumInfoResponse
   */
  public function StadiumInfo(StadiumInfo $parameters) {
    return parent::__soapCall('StadiumInfo', func_get_args());
  }

  /**
   * AllStadiumInfo method
   *
   * @param AllStadiumInfo $parameters
   *
   * @return AllStadiumInfoResponse
   */
  public function AllStadiumInfo(AllStadiumInfo $parameters) {
    return parent::__soapCall('AllStadiumInfo', func_get_args());
  }

  /**
   * FullTeamInfo method
   *
   * @param FullTeamInfo $parameters
   *
   * @return FullTeamInfoResponse
   */
  public function FullTeamInfo(FullTeamInfo $parameters) {
    return parent::__soapCall('FullTeamInfo', func_get_args());
  }

  /**
   * Teams method
   *
   * @param Teams $parameters
   *
   * @return TeamsResponse
   */
  public function Teams(Teams $parameters) {
    return parent::__soapCall('Teams', func_get_args());
  }

  /**
   * GroupCount method
   *
   * @param GroupCount $parameters
   *
   * @return GroupCountResponse
   */
  public function GroupCount(GroupCount $parameters) {
    return parent::__soapCall('GroupCount', func_get_args());
  }

  /**
   * Groups method
   *
   * @param Groups $parameters
   *
   * @return GroupsResponse
   */
  public function Groups(Groups $parameters) {
    return parent::__soapCall('Groups', func_get_args());
  }

  /**
   * GroupCompetitors method
   *
   * @param GroupCompetitors $parameters
   *
   * @return GroupCompetitorsResponse
   */
  public function GroupCompetitors(GroupCompetitors $parameters) {
    return parent::__soapCall('GroupCompetitors', func_get_args());
  }

  /**
   * AllGroupCompetitors method
   *
   * @param AllGroupCompetitors $parameters
   *
   * @return AllGroupCompetitorsResponse
   */
  public function AllGroupCompetitors(AllGroupCompetitors $parameters) {
    return parent::__soapCall('AllGroupCompetitors', func_get_args());
  }

  /**
   * GoalsScored method
   *
   * @param GoalsScored $parameters
   *
   * @return GoalsScoredResponse
   */
  public function GoalsScored(GoalsScored $parameters) {
    return parent::__soapCall('GoalsScored', func_get_args());
  }

  /**
   * GameInfo method
   *
   * @param GameInfo $parameters
   *
   * @return GameInfoResponse
   */
  public function GameInfo(GameInfo $parameters) {
    return parent::__soapCall('GameInfo', func_get_args());
  }

  /**
   * AllGames method
   *
   * @param AllGames $parameters
   *
   * @return AllGamesResponse
   */
  public function AllGames(AllGames $parameters) {
    return parent::__soapCall('AllGames', func_get_args());
  }

  /**
   * CountryNames method
   *
   * @param CountryNames $parameters
   *
   * @return CountryNamesResponse
   */
  public function CountryNames(CountryNames $parameters) {
    return parent::__soapCall('CountryNames', func_get_args());
  }

  /**
   * GamesPlayed method
   *
   * @param GamesPlayed $parameters
   *
   * @return GamesPlayedResponse
   */
  public function GamesPlayed(GamesPlayed $parameters) {
    return parent::__soapCall('GamesPlayed', func_get_args());
  }

  /**
   * GamesPerCity method
   *
   * @param GamesPerCity $parameters
   *
   * @return GamesPerCityResponse
   */
  public function GamesPerCity(GamesPerCity $parameters) {
    return parent::__soapCall('GamesPerCity', func_get_args());
  }

  /**
   * YellowCardsTotal method
   *
   * @param YellowCardsTotal $parameters
   *
   * @return YellowCardsTotalResponse
   */
  public function YellowCardsTotal(YellowCardsTotal $parameters) {
    return parent::__soapCall('YellowCardsTotal', func_get_args());
  }

  /**
   * RedCardsTotal method
   *
   * @param RedCardsTotal $parameters
   *
   * @return RedCardsTotalResponse
   */
  public function RedCardsTotal(RedCardsTotal $parameters) {
    return parent::__soapCall('RedCardsTotal', func_get_args());
  }

  /**
   * YellowAndRedCardsTotal method
   *
   * @param YellowAndRedCardsTotal $parameters
   *
   * @return YellowAndRedCardsTotalResponse
   */
  public function YellowAndRedCardsTotal(YellowAndRedCardsTotal $parameters) {
    return parent::__soapCall('YellowAndRedCardsTotal', func_get_args());
  }

  /**
   * GameResultCodes method
   *
   * @param GameResultCodes $parameters
   *
   * @return GameResultCodesResponse
   */
  public function GameResultCodes(GameResultCodes $parameters) {
    return parent::__soapCall('GameResultCodes', func_get_args());
  }

  /**
   * Coaches method
   *
   * @param Coaches $parameters
   *
   * @return CoachesResponse
   */
  public function Coaches(Coaches $parameters) {
    return parent::__soapCall('Coaches', func_get_args());
  }

  /**
   * PlayedAtWorldCup method
   *
   * @param PlayedAtWorldCup $parameters
   *
   * @return PlayedAtWorldCupResponse
   */
  public function PlayedAtWorldCup(PlayedAtWorldCup $parameters) {
    return parent::__soapCall('PlayedAtWorldCup', func_get_args());
  }

  /**
   * TeamsCompeteList method
   *
   * @param TeamsCompeteList $parameters
   *
   * @return TeamsCompeteListResponse
   */
  public function TeamsCompeteList(TeamsCompeteList $parameters) {
    return parent::__soapCall('TeamsCompeteList', func_get_args());
  }

  /**
   * NextGame method
   *
   * @param NextGame $parameters
   *
   * @return NextGameResponse
   */
  public function NextGame(NextGame $parameters) {
    return parent::__soapCall('NextGame', func_get_args());
  }

  /**
   * DateOfFirstGame method
   *
   * @param DateOfFirstGame $parameters
   *
   * @return DateOfFirstGameResponse
   */
  public function DateOfFirstGame(DateOfFirstGame $parameters) {
    return parent::__soapCall('DateOfFirstGame', func_get_args());
  }

  /**
   * DateOfLastGame method
   *
   * @param DateOfLastGame $parameters
   *
   * @return DateOfLastGameResponse
   */
  public function DateOfLastGame(DateOfLastGame $parameters) {
    return parent::__soapCall('DateOfLastGame', func_get_args());
  }

  /**
   * DateLastGroupGame method
   *
   * @param DateLastGroupGame $parameters
   *
   * @return DateLastGroupGameResponse
   */
  public function DateLastGroupGame(DateLastGroupGame $parameters) {
    return parent::__soapCall('DateLastGroupGame', func_get_args());
  }

  /**
   * TournamentInfo method
   *
   * @param TournamentInfo $parameters
   *
   * @return TournamentInfoResponse
   */
  public function TournamentInfo(TournamentInfo $parameters) {
    return parent::__soapCall('TournamentInfo', func_get_args());
  }

  /**
   * NumberOfGames method
   *
   * @param NumberOfGames $parameters
   *
   * @return NumberOfGamesResponse
   */
  public function NumberOfGames(NumberOfGames $parameters) {
    return parent::__soapCall('NumberOfGames', func_get_args());
  }

  /**
   * SignupsPerDate method
   *
   * @param SignupsPerDate $parameters
   *
   * @return SignupsPerDateResponse
   */
  public function SignupsPerDate(SignupsPerDate $parameters) {
    return parent::__soapCall('SignupsPerDate', func_get_args());
  }

}
