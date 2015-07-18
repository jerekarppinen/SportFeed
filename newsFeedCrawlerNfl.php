<?php

include('httpful.phar');

$urls = array(
	"http://www.nfl.com/rss/rsslanding?searchString=team&abbr=ne",
	"http://www.nfl.com/rss/rsslanding?searchString=team&abbr=mia",
	"http://www.nfl.com/rss/rsslanding?searchString=team&abbr=nyj",
	"http://www.nfl.com/rss/rsslanding?searchString=team&abbr=buf",
	"http://www.nfl.com/rss/rsslanding?searchString=team&abbr=cin",
	"http://www.nfl.com/rss/rsslanding?searchString=team&abbr=pit",
	"http://www.nfl.com/rss/rsslanding?searchString=team&abbr=bal",
	"http://www.nfl.com/rss/rsslanding?searchString=team&abbr=clv",
	"http://www.nfl.com/rss/rsslanding?searchString=team&abbr=ind",
	"http://www.nfl.com/rss/rsslanding?searchString=team&abbr=hou",
	"http://www.nfl.com/rss/rsslanding?searchString=team&abbr=ten",
	"http://www.nfl.com/rss/rsslanding?searchString=team&abbr=jax",
	"http://www.nfl.com/rss/rsslanding?searchString=team&abbr=nc",
	"http://www.nfl.com/rss/rsslanding?searchString=team&abbr=den",
	"http://www.nfl.com/rss/rsslanding?searchString=team&abbr=sd",
	"http://www.nfl.com/rss/rsslanding?searchString=team&abbr=oak",
	"http://www.nfl.com/rss/rsslanding?searchString=team&abbr=phi",
	"http://www.nfl.com/rss/rsslanding?searchString=team&abbr=dal",
	"http://www.nfl.com/rss/rsslanding?searchString=team&abbr=was",
	"http://www.nfl.com/rss/rsslanding?searchString=team&abbr=nyg",
	"http://www.nfl.com/rss/rsslanding?searchString=team&abbr=det",
	"http://www.nfl.com/rss/rsslanding?searchString=team&abbr=chi",
	"http://www.nfl.com/rss/rsslanding?searchString=team&abbr=gb",
	"http://www.nfl.com/rss/rsslanding?searchString=team&abbr=min",
	"http://www.nfl.com/rss/rsslanding?searchString=team&abbr=no",
	"http://www.nfl.com/rss/rsslanding?searchString=team&abbr=tb",
	"http://www.nfl.com/rss/rsslanding?searchString=team&abbr=car",
	"http://www.nfl.com/rss/rsslanding?searchString=team&abbr=atl",
	"http://www.nfl.com/rss/rsslanding?searchString=team&abbr=stl",
	"http://www.nfl.com/rss/rsslanding?searchString=team&abbr=sf",
	"http://www.nfl.com/rss/rsslanding?searchString=team&abbr=sea",
	"http://www.nfl.com/rss/rsslanding?searchString=team&abbr=arz"
	);

$separatedTeamsArray = array();
$mixedTeamsArray = array();

foreach($urls as $url)
{
	$response = \Httpful\Request::get($url)
	->expectsXml()
	->send();

	$exploded = explode("&abbr=", $url);
	$team = $exploded[1];

	$separatedTeamsArray[$team] = array();

	foreach($response->body->entry as $entry)
	{
		$stuff = array(
			"title" => (string)$entry->title,
			"link" => (string)$entry->id,
			"description" => (string)$entry->summary,
			"pubDate" => (string)$entry->published,
			"timestamp" => strtotime($entry->published)
			);



		array_push($separatedTeamsArray[$team], $stuff);
		array_push($mixedTeamsArray, $stuff);
	}
	
}

$jsonSeparatedTeams = json_encode($separatedTeamsArray);
$jsonMixedTeams = json_encode($mixedTeamsArray);

$firebaseSeparatedTeams = "https://dazzling-fire-5200.firebaseio.com/nfl/teamsSeparated.json?auth=KPgAAfxGv33vaNzCpLIPdx7AdINXpXR7PDI38Qkh";
$firebaseMixedTeams = "https://dazzling-fire-5200.firebaseio.com/nfl/teamsMixed.json?auth=KPgAAfxGv33vaNzCpLIPdx7AdINXpXR7PDI38Qkh";

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