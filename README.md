SportFeed
=========

SportFeed project folder

KONSEPTI (hieno sana jes)

-jenkkien seuratuimpia urheilulajeja lähinnä: mlb, nfl, nba, nhl, futista

-käyttäjä valitsee näistä mitä lajeja haluaa seurata omassa näkymässään

-sivu on kuin ampparit.com, mutta vain urheiluuutisilla. you feel me, bro?

-käyttäjät vois pystyä kommentoimaan uutisia eiks je? miten ois upvote/downvote kans? hyvää paskaa

-TWITTER osio:
  hakukenttä jolla voi hakea käyttäjiä twitteristä, lisätä itsensä heidän seuraajiksi
	seurattujen twitterheebojen julkaisut näkyvät sportfeed-sivun käyttäjälle


TOTEUTUKSESTA 

versionhallintana github. aina kun committaa koodiaan, lisää kommentin mitä tuli tehtyä. ei liian häilyvää
selitystä, mutta ei yltiötarkkaakaan. esim "Lisäsin paskaa-metodiin paskan tekstuurin tarkistuksen" on hyvä

ulkoasuun kenties masonry-js kirjastoo (grid layout library). sillä tais pystyy siirteleeki elementtejä,
mikä on minusta avain juttu. ideana olisi, että käyttäjä voi muokata feedinsä esitystavan halunsa mukaan. 
eli siirtää palikoita sivulla sinne sun tänne, ja tämä tallentuu käyttäjän tietoihin jotensakin. varmaan vois toimii
että tallentaa tietokantaan palikoiden koordinaattiarvot. palikoilla tarkoitan urheilulajifeedimöhkäleitä. 
eli käyttäjä ei voi siirtää esim yksittäisiä futisuutisia sinne tänne, vaan vain koko futisuutisten parentelementtiä.

JUKKA! saat päättää tietokantatoteutuksen. mihin kaikki tallennetaan; tekstitiedostoon, xml, sql vai mikä :) hähä
tee kickass classi. you the man, bro.

kun käyttäjä kirjautuu, niin sille näkyy kaikki seuraamansa urheilulajit siinä ruudulla omissa bokseissaa. 
niistä näkyy joku 3-5 uusinta vaan siinä. sit jos painaa lisää nhl-uutisia, niin se heittää sivulle missä 
on pelkästää niitä uutisia.


ULKOASU

etusivulla eri urheilulajeista uutisia sekaisin. tarjolla eri filttereitä suodattamaan uutisista haluamiaan
nav barissa eri urheilulajeja, navbar vasemmassa laidassa

masonry käyttöön ulkoasun tekemisessä, uutismöllyköiden asetteluun vittumaisella masonrytavalla mutta jospa se ois hip and cool
gridster.js jquery plugin hoitaisi elementtien siirtelyn, jos sitä tulee tähän projektiin. 

kun käyttäjä kirjautuu, sivu näyttää käyttäjän seuraamien urheilulajien uusimmat uutiset. sama näkymä kuin etusivulla, filttereitä ja näin.
twiitit ehkäpä sivun oikeaan laitaan pitkään mutta kapeahkoon diviin? twiiteillä on tapana kuitenkin olla lyhyitä. mutta twiitit voi omata kokonaan omalle sivulleenkin masonryhommaan
