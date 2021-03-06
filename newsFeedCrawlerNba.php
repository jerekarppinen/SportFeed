<?php

include('httpful.phar');

$urls = array(
	"http://www.nba.com/celtics/rss.xml",
	"http://www.nba.com/nets/rss.xml",
	"http://www.nba.com/knicks/rss.xml",
	"http://www.nba.com/sixers/rss.xml",
	"http://www.nba.com/raptors/rss.xml",
	"http://www.nba.com/bulls/rss.xml",
	"http://www.nba.com/cavaliers/rss.xml",
	"http://www.nba.com/pistons/rss.xml",
	"http://www.nba.com/pacers/rss.xml",
	"http://www.nba.com/bucks/rss.xml",
	"http://www.nba.com/hawks/rss.xml",
	"http://www.nba.com/hornets/rss.xml",
	"http://www.nba.com/heat/rss.xml",
	"http://www.nba.com/magic/rss.xml",
	"http://www.nba.com/wizards/rss.xml",
	//"http://www.nba.com/mavericks/rss.xml" doesnt work
	"http://www.nba.com/rockets/rss.xml",
	"http://www.nba.com/grizzlies/rss.xml",
	"http://www.nba.com/pelicans/rss.xml",
	"http://www.nba.com/spurs/rss.xml",
	"http://www.nba.com/nuggets/rss.xml",
	"http://www.nba.com/timberwolves/rss.xml",
	"http://www.nba.com/thunder/rss.xml",
	"http://www.nba.com/blazers/rss.xml",
	"http://www.nba.com/jazz/rss.xml",
	"http://www.nba.com/warriors/rss.xml",
	"http://www.nba.com/clippers/rss.xml",
	"http://www.nba.com/lakers/rss.xml",
	"http://www.nba.com/suns/rss.xml",
	"http://www.nba.com/kings/rss.xml"
	);

$separatedTeamsArray = array();
$mixedTeamsArray = array();

foreach($urls as $url)
{
	$response = \Httpful\Request::get($url)
	->expectsXml()
	->send();

	preg_match('/http:\/\/www.nba.com\/(.*?)\\//s', $url, $arr);
	$team = $arr[1];
	$separatedTeamsArray[$team] = array();

	foreach($response->body->channel->item as $item)
	{
		$stuff = array(
			"title" => (string)$item->title,
			"link" => (string)$item->link,
			"description" => (string)$item->description,
			"pubDate" => (string)$item->pubDate,
			"timestamp" => strtotime($item->pubDate)
			);

		array_push($separatedTeamsArray[$team], $stuff);
		array_push($mixedTeamsArray, $stuff);
	}
}

$jsonSeparatedTeams = json_encode($separatedTeamsArray);
$jsonMixedTeams = json_encode($mixedTeamsArray);

$firebaseSeparatedTeams = "https://dazzling-fire-5200.firebaseio.com/nba/teamsSeparated.json?auth=KPgAAfxGv33vaNzCpLIPdx7AdINXpXR7PDI38Qkh";
$firebaseMixedTeams = "https://dazzling-fire-5200.firebaseio.com/nba/teamsMixed.json?auth=KPgAAfxGv33vaNzCpLIPdx7AdINXpXR7PDI38Qkh";

$request = \Httpful\Request::put($firebaseSeparatedTeams)->sendsJson()->body($jsonSeparatedTeams)->send();
$request = \Httpful\Request::put($firebaseMixedTeams)->sendsJson()->body($jsonMixedTeams)->send();

/*
$stringValueOfPos = (string)strpos($request->raw_headers, "HTTP/1.1 200 OK");

// if strpos returned null
if(strlen($stringValueOfPos) == 0)
{
	echo "Not ok.";
}
else
{
	echo "ok.";
}
*/

?>