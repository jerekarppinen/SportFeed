SportFeed
=========

SportFeed project folder

KONSEPTI (hieno sana jes)

-jenkkien seuratuimpia urheilulajeja lähinnä: 
	mlb http://mlb.mlb.com/partnerxml/gen/news/rss/mlb.xml / joukkuekohtaiset myöhemmi http://mlb.mlb.com/news/rss/
	nfl http://www.nfl.com/rss/rsslanding?searchString=home / joukkuekohtaset myöhemmi http://www.nfl.com/rss
	nba http://www.nba.com/rss/nba_rss.xml / jne http://www.nba.com/rss/
	nhl http://www.nhl.com/rss/news.xml
	futista (vitun futis, laitetaa myähemmi)


-käyttäjä valitsee näistä mitä lajeja haluaa seurata omassa näkymässään

-sivu on kuin ampparit.com, mutta vain urheiluuutisilla. you feel me, bro?

-käyttäjät vois pystyä kommentoimaan uutisia eiks je? miten ois upvote/downvote kans? hyvää paskaa

-tarjolla eri filttereitä suodattamaan uutisista haluamiaan. kuten suosituimmat ja ajan mukaan. myös video/artikkeli uutisille?

-TWITTER osio:
  hakukenttä jolla voi hakea käyttäjiä twitteristä, lisätä itsensä heidän seuraajiksi
	seurattujen twitterheebojen julkaisut näkyvät sportfeed-sivun käyttäjälle


TOTEUTUKSESTA 

versionhallintana github. aina kun committaa koodiaan, lisää kommentin mitä tuli tehtyä. ei liian häilyvää
selitystä, mutta ei yltiötarkkaakaan. esim "Lisäsin paskaa-metodiin paskan tekstuurin tarkistuksen" on hyvä

JUKKA! saat päättää tietokantatoteutuksen. mihin kaikki tallennetaan; tekstitiedostoon, xml, sql vai mikä :) hähä
tee kickass classi. you the man, bro.


ULKOASU

etusivulla eri urheilulajeista uutisia sekaisin.
nav barissa eri urheilulajeja, navbar vasemmassa laidassa

masonry käyttöön ulkoasun tekemisessä, uutismöllyköiden asetteluun vittumaisella masonrytavalla mutta jospa se ois hip and cool
gridster.js jquery plugin hoitaisi elementtien siirtelyn, jos sitä tulee tähän projektiin. 

kun käyttäjä kirjautuu, sivu näyttää käyttäjän seuraamien urheilulajien uusimmat uutiset. sama näkymä kuin etusivulla, filttereitä ja näin.
twiitit ehkäpä sivun oikeaan laitaan pitkään mutta kapeahkoon diviin? twiiteillä on tapana kuitenkin olla lyhyitä. mutta twiitit voi omata kokonaan omalle sivulleenkin masonryhommaan
