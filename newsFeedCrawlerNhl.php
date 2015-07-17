<?php
include('httpful.phar');

$urls = array(
	"http://ducks.nhl.com/rss/news.xml",
	"http://flames.nhl.com/rss/news.xml",
	"http://blackhawks.nhl.com/rss/news.xml",
	"http://avalanche.nhl.com/rss/news.xml",
	"http://stars.nhl.com/rss/news.xml",
	"http://oilers.nhl.com/rss/news.xml",
	"http://kings.nhl.com/rss/news.xml",
	"http://wild.nhl.com/rss/news.xml",
	"http://predators.nhl.com/rss/news.xml",
	"http://coyotes.nhl.com/rss/news.xml",
	"http://sharks.nhl.com/rss/news.xml",
	"http://blues.nhl.com/rss/news.xml",
	"http://canucks.nhl.com/rss/news.xml",
	"http://jets.nhl.com/rss/news.xml",
	"http://bruins.nhl.com/rss/news.xml",
	"http://sabres.nhl.com/rss/news.xml",
	"http://hurricanes.nhl.com/rss/news.xml",
	"http://bluejackets.nhl.com/rss/news.xml",
	"http://redwings.nhl.com/rss/news.xml",
	"http://panthers.nhl.com/rss/news.xml",
	"http://canadiens.nhl.com/rss/news.xml",
	"http://devils.nhl.com/rss/news.xml",
	"http://islanders.nhl.com/rss/news.xml",
	"http://rangers.nhl.com/rss/news.xml",
	"http://senators.nhl.com/rss/news.xml",
	"http://flyers.nhl.com/rss/news.xml",
	"http://penguins.nhl.com/rss/news.xml",
	"http://lightning.nhl.com/rss/news.xml",
	"http://mapleleafs.nhl.com/rss/news.xml",
	"http://capitals.nhl.com/rss/news.xml"
	);

$responseArray = array();

foreach($urls as $url)
{
	$response = \Httpful\Request::get($url)
	->expectsXml()
	->send();

	preg_match('/http:\/\/(.*?)\./s', $url, $arr);
	$team = $arr[1];
	
	$responseArray[$team] = array();

	foreach($response->body->channel->item as $item)
	{
		$stuff = array(
			"title" => (string)$item->title,
			"link" => (string)$item->link,
			"description" => (string)$item->description,
			"pubDate" => (string)$item->pubDate
			);

		array_push($responseArray[$team], $stuff);
	}
	
}

$json = json_encode($responseArray);


$firebase = "https://dazzling-fire-5200.firebaseio.com/nhl.json?auth=KPgAAfxGv33vaNzCpLIPdx7AdINXpXR7PDI38Qkh";

$request = \Httpful\Request::put($firebase)->sendsJson()->body($json)->send();

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


?>

