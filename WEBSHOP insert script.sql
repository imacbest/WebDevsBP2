USE [WEBSHOP]
GO

DELETE PRODUCT_GERELATEERD_PRODUCT
TRUNCATE TABLE GEBRUIKER
TRUNCATE TABLE PRODUCT
DELETE CATEGORIE

INSERT [dbo].[CATEGORIE] ([CATEGORIENAAM]) VALUES ('Bier');
INSERT [dbo].[CATEGORIE] ([CATEGORIENAAM]) VALUES ('Wijn');
INSERT [dbo].[CATEGORIE] ([CATEGORIENAAM]) VALUES ('Whisky');
INSERT [dbo].[CATEGORIE] ([CATEGORIENAAM]) VALUES ('Mixen');
INSERT [dbo].[CATEGORIE] ([CATEGORIENAAM]) VALUES ('Likeuren');
INSERT [dbo].[CATEGORIE] ([CATEGORIENAAM]) VALUES ('Rum');

INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('Jameson', 'De drievoudige distillatie en de combinatie van pure pot still whiskey met grain whiskey, maken Jameson uitzonderlijk zacht. De rokerige smaak ontbreekt omdat er niet op turf gestookt wordt. Hierdoor is Jameson zeer geschikt om zowel puur als in de mix met bijvoorbeeld Ginger Ale te drinken.', 'Whisky', 29.99,5, 100, 'jameson_100.png');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('Jack Daniel’s Tennessee', 'Jack Daniel’s is een volle whisky met smaken van rijp fruit. Jack Daniels is, zoals de meesten denken, geen bourbon whiskey, maar Tennessee whisky. Dit komt omdat Jack Daniels anders gemaakt wordt. Jack Daniels wordt gefiltered in in houtskool en daarnaast wordt er een speciale vergistingstechniek toegepast. Daardoor heeft Jack Daniels’naast de bekende zoete volle smaak ook een licht rokerige smaak. De Black Label staat niet alleen bekend om zijn kwaliteit, maar ook vanwege de link met (rock)muziek. Jack Daniel’s gaat sinds 1866 hand in hand met de legendes van de muziek. Aanbevolen drinkwijze is puur, on the rocks of gemixt met cola.', 'Whisky', 24.49,3, 70, 'jack_daniels_tennessee_70.png');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('Duvel', 'Duvel is een blond bier met een lichtbittere smaak, heeft een verfijnd aroma en een uitgesproken hopkarakter. Het brouwproces duurt 90 dagen.', 'Bier', 1.29,2, 33, 'duvel_33.png');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('La Chouffe', 'Een aangenaam en fruitig bier, met koriander gekruid en een lichte hopsmaak. La Chouffe is een ongefilterd blond bier, dat zowel op fles als in het vat hergist.', 'Bier', 1.49,5, 33, 'La_Chouffe_33.png');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('Captain Morgan Spiced Gold', 'Kruiden, specerijen en andere natuurlijke aroma’s geven Captain Morgan Original Spiced Rum een zachte en verrassende smaak. Het distillaat heeft een jaar gerijpt in eiken vaten. Deze bijzondere versie van Captain Morgan is puur te drinken of heerlijk te mixen.', 'Rum', 18.49,3, 70, 'Captain_Morgan_Spiced_Gold_70.png');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('Sierra Silver', 'Het lichtere broertje van de Gold editie, Sierra Tequila Silver is een kleurloze tequila met een duidelijk aroma van Agave en alcohol. Het heeft dan ook een redelijk flinke ‘burn’ erin zitten, een goedkope tequila om mee te shotten of om mee te mixen!', 'Mixen', 17.49,8, 70, 'Sierra_Silver_70.png');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('Whales Tale Sauvignon Blanc', 'Deze witte wijn is gemaakt van druiven van vier verschillende wijngaarden, afkomstig van zowel de kust als meer hogergelegen landinwaarts. Een zeer aromatische, intense wijn met een superfrisse smaak. Een populaire wijn!', 'Wijn', 11.99,77, 75, 'Whales_Tale_Sauvignon_Blanc_75.png');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('Penfolds Grange 2009', 'De eerste Grange wijn werd gelanceerd in de begin jaren 50. Sindsdien heeft Grange de plaats veroverd van Australisch meest prestigieuze wijn. Deze prachtige rode wijn heeft een stevige kleur en smaak. En is een internationaal icoon. Voor ieder jaar zijn er vele verzamelaars die uitkijken naar het nieuwe jaar. Grange 2009 kenmerkt zich door uitgelanceerde zuren en perfect rijpe tannines. Een elegante, maar toch krachtige wijn. ', 'Wijn', 6.49,4, 75, 'Penfolds_Grange_2009_75.png');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('Smirnoff Vodka', 'Smirnoff no. 21 wodka is de nummer één spirit wereldwijd op de wereldranglijst van premium dranken. Smirnoff no. 21 wodka heeft een lange historie in de productie van hoog kwalitatieve wodka waarbij gebruik wordt gemaakt van een uniek proces waarbij de wodka drie maal gedistilleerd wordt en maar liefst tien maal gefilterd op basis van houtskool. Door de 47 afzonderlijke kwaliteitscontroles levert dit unieke proces een uiterst pure wodka op.', 'Mixen', 14.99,5, 100, 'Smirnoff_Vodka_100.png');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('Licor 43', 'De Spaanse likeur met 43 geheime ingrediënten die samen een unieke smaak opleveren. Onder meer het sap van citrus en andere vruchten en extracten van aromatische planten, zoals vanille, geven de Spaanse likeur haar ondefinieerbare geur en smaak. Tot op de dag van vandaag kent niemand het eeuwenoude recept en wordt de likeur uitsluitend in het Spaanse Cartagena geproduceerd. Het eigenzinnige karakter maakt Licor 43 heerlijk om puur te drinken of om mee te variëren, in een frisse mix of verrassende cocktail.', 'Likeuren', 19.49,8, 70, 'Licor_43_70.png');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('Napoleon', 'Deze brandy uit Frankrjk is zacht van smaak. Serveer hem licht gekoeld of door de koffie met een toefje slagroom.', 'Mixen', 10.49,9, 70, 'Napoleon_70.png');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('Grolsch Beugel XXL', 'De naam Grolsch is het bijvoeglijke naamwoord van Grol, de oude naam van Groenlo. Groenlo is de oorspronkelijke standplaats. De brouwerij heet dan ook officieel Grolsche Bierbrouwerij.', 'Bier', 8.59,55, 150, 'Grolsch_Beugel_XXL_150.png');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('Absolut Vodka', 'Wodka van excellente kwaliteit. Gemaakt van uitsluitend natuurlijke ingrediënten. De beste winter tarwe en water uit eigen bron. Geen suikers toegevoegd.', 'Mixen', 14.99,4, 70, 'Absolut_Vodka_70.png');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('Gold Strike', 'Goldstrike is herkenbaar aan zijn goud in de fles. Goldstrike komt het beste tot zijn recht als je deze puur drinkt. Dat kan gekoeld maar ook ongekoeld zijn. Daarnaast kan je Goldstrike ook goed mixen met bv wodka, tonic of fanta.', 'Mixen', 16.29,1, 50, 'Gold_Strike_50.png');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('Dropshot', 'Droplikeur met de smaak van echte salmiak.', 'Mixen', 10.79,7, 70, 'Dropshot_70.png');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('J&auml;germeister', 'Jägermeister! Alleen als ie ijs- en ijskoud is. Een heerlijke shot om mee te proosten met je vrienden! Het authentieke recept is gebaseerd op de complexe melange van 56 natuurlijke ingrediënten. Waarbij één jaar rijping, op eikenhouten vaten, en het vakmanschap van de meester-distilleerders ook vandaag de unieke smaak geven aan dit onmisbare kruidenlikeur. Een pure en natuurlijke smaak met noten van citrus, gember en steranijs: een smaak van een oprecht en authentiek karakter. Inmiddels is Jägermeister uitgegroeid tot een internationale drank met een eigenzinnig en stoer imago.', 'Mixen', 14.50,4, 70, 'Jagermeister_70.png');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('Bacardi Superior 70 CL', 'Barcardi Superior is een aromatische witte rum met onderscheidende smaken van amandel en vanille, ontwikkeld in wit eikenhouten vaten en gevormd door een geheime mix van houtskool voor de kenmerkende zachtheid. Een echte Bacardi & Cola maak je in een longdrinkglas. Vul het glas met ijsklontjes, schenk er 35ml Bacardi Superior bij, en top het glas af met cola. Garneer het glas met een partje limoen.', 'Mixen', 14.99,5, 70, 'Bacardi_Superior_70.png');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('Bacardi Superior 100 CL', 'Barcardi Superior is een aromatische witte rum met onderscheidende smaken van amandel en vanille, ontwikkeld in wit eikenhouten vaten en gevormd door een geheime mix van houtskool voor de kenmerkende zachtheid. Een echte Bacardi & Cola maak je in een longdrinkglas. Vul het glas met ijsklontjes, schenk er 35ml Bacardi Superior bij, en top het glas af met cola. Garneer het glas met een partje limoen.', 'Mixen', 23.49,8, 100, 'Bacardi_Superior_70.png');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('Bacardi Razz', 'De basis voor BACARDÍ RAZZ is BACARDÍ Rum waaraan natuurlijke frambozen aroma’s zijn toegevoegd. De smaak is fris door de fruitige frambozenaroma’s en is niet te vergelijken met welke spirit dan ook. Deze drank heeft een heldere kleur en is verpakt in een unieke onderscheidende fles.', 'Mixen', 18.68,9, 70, 'Bacardi_Razz_70.png');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('Berentzen Apfelkorn', 'De ongekende klassieker en de enige échte Apfelkorn. Sinds 1758 gangmaker auf jeder party. Apfelkorn wordt gemaakt van echte Golden Delicious en Gala appels und is daarom zoet en fris van smaak. De originele Berentzen Apfelkorn, gestookt volgens oude traditie, is friszoet van smaak e heetf 18% alcohol. Een eigenzinnig drankje lekker om puur te drinken als ijskoude borrel en ‘on the rocks’ of om te mixen met Spa Rood, 7-Up, appelsap of cassis. Een echte Apfelkorn-fan bestelt natürlich ein Rondje met z’n vrienden; Pröoβt!', 'Mixen', 14.49,6, 100, 'Berentzen_Apfelkorn_100.png');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('Trojka Pink', 'Trojka Pink is een wodka-likeur uit Zwitserland met de rijke smaak van zoete rode vruchten, cranberries en een vleugje aloë vera. Trojka betekent Trio, dit verklaart de naam, want de basis voor iedere Trojka likeur is drievoudig gedistilleerde Amerikaanse graan wodka en het allerbeste water. Het water is gaat door een twaalf-laags filter. De drank is zowel lekker als shot, maar zeker ook als longdrink of cocktail.', 'Mixen', 14.99,4, 70, 'Trojka_Pink_70.png');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('Malibu Coconut', '’s Werelds bekendste en meest verkochte likeur met kokosnoot. De unieke smaak van deze likeur is te danken aan de verfijnde melange van rum, natuurlijke kokosaroma’s en pure rietsuikers van de hoogste kwaliteit. Door het alcoholpercentage van 21% is Malibu zeer geschikt om puur te drinken. Ook lekker in de mix met cola, jus d’’orange, cassis of cranberrysap.', 'Mixen', 15.59,5, 100, 'Malibu_Coconut.png');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('Bacardi Oakheart', 'BACARDÍ Oakheart is een kruidige rum, vakkundig met de hand geblend door de Maestros de Ron BACARDÍ. Zijn smaak wordt ontwikkeld door de rijping van ten minste één jaar in verschroeide eikenhouten vaten. De geheime houtskoolfiltering en de vertrouwelijke kruidenmix geven tonen van Carribische honing en esdoorn. Vanille, kaneel en tonen van nootmuskaat geven het karakter nog extra een dimensie. De ferme smaak van BACARDÍ Oakheart heeft enkel en alleen veel ijs en cola nodig om goed tot zijn recht te komen. Mocht er een pul binnen handbereik zijn aarzel dan niet deze te gebruiken.', 'Mixen', 17.99,8, 70, 'Bacardi_Oakheart_70.png');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('Esbjaerg Vodka', 'Esbjærg Vodka is bereid van een fijne tarwe-graanalcohol die over actieve houtskool wordt gefilterd. Hierdoor ontstaat een pure, bijzonder zachte smaak. Esbjærg heeft een alcoholpercentage van 40% wat deze wodka bij uitstek geschikt maakt om mee te mixen.', 'Mixen', 16.49,7, 100, 'Esbjaerg_Vodka_100.png');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('Bombay Sapphire', 'Een premium zachte Gin met een uitgebalanceerde smaak op basis van 10 geselecteerde specerijen. De botanische kruiden van Bombay Sapphire zijn: jeneverbessen, zoethout, amandelen, citroenschil, iriswortel, engelwortel, koriander, kassiebast, staartpeper, malaguenapeper. Resulterend in een complex, maar toch subtiel karakter. Vul een groot wijnglas tot de rand met ijs, voeg 50ml Bombay Sapphire toe en vul aan met een premium tonic. Garneer met een uitgeknepen partje limoen en een zoethoutstokje.', 'Mixen', 19.19,4, 70, 'Bombay_Sapphire_70.png');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('Chivas Regal Extra', 'Chivas Regal Extra is een eerbetoon aan James en John Chivas die in de 19e eeuw niet alleen pioniers waren, maar ook excelleerden in de kunst van het blenden. Het geheim van de bijzondere smaak ligt in de blend van whiskies die gerijpt zijn in oude Oloroso sherryvaten aangevuld met zeldzame malts die lange tijd gekoesterd zijn. Deze sherryvaten geven een diepe amberkleur met rijke, zoete  tonen, terwijl de zeldzame malts complexiteit toevoegen. Chivas’ masterblender Colin Scott, creëerde hiermee een unieke Chivas blend met een rijke en genereuze smaak.', 'Whisky', 38.99,4, 70, 'Chivas_Regal_Extra_70.png');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('Chivas Regal 18 Years', 'Chivas Regal 18 Years is een luxe, zachte en rijke blend van malt- en graanwhiskies welke alle minimaal 18 jaar hebben gerijpt. Het hart van Chivas Regal wordt gevormd door de single malt Strathisla. Bijzonder aan Chivas Regal 18 Year Old is dat het huwelijk van zowel de malt- als de grainwhisky’s plaatsvindt op speciaal geselecteerde eikenhouten vaten. Dit maakt de whisky zeer verfijnd en toegankelijk. Het enigszins rokerige karakter geeft aan dat er ook invloed van de eilanden is.', 'Whisky', 68.49,1, 70, 'Chivas_Regal_18_Years_70.png');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('The Famous Grouse', 'The Famous Grouse is een geliefde whisky in Schotland, en staat bekend om zijn zachte en rijke smaak en gebruikt meer sherryvaten voor het rijpen van haar whisky’s dan andere blended whisky’s. The Famous Grouse Blended Scotch Whisky bestaat uit een blend van onder andere The Macallan en Highland Park -twee van ’s werelds meest gerespecteerde Single Malt Scotch Whisky’s- en zoete grain whisky’s voor het verkrijgen van de kenmerkende zachte smaak van The Famous Grouse.', 'Whisky', 24.49,2, 100, 'The_Famous_Grouse_100.png');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('William Lawson’s', 'Deze whisky is een blend met een milde en zachte smaak. Lekker om hem puur te drinken. Of mix hem met cola of Ginger Ale. En helemaal verrassend in een stoofpotje met kip! Zo kun je er de hele avond van genieten.', 'Whisky', 22.49,5, 100, 'William_Lawsons_100.png');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('Johnnie Walker Red Label', 'In 1906 wist Alexander Walker, de kleinzoon van John Walker een whisky te blenden met de kwaliteiten om uit te groeien tot één van de beste whisky’s ter wereld. Alexander was er in geslaagd om de Red Label zo te blenden dat de rijk en rokerige whisky perfect geschikt is om zowel ‘on the rocks’ als in de mix te drinken. De broer van Alexander, George Walker, doopte in 1909 de oorspronkelijk onder de naam Extra Special Highland Whisky gestarte whisky om tot Johnnie Walker Red Label. In dit jaar werd ook het beroemde logo “The striding man” ontworpen. Johnnie Walker Red Label is een klassieker onder de whisky’s. Red Label is een combinatie van kruidige, rokerige malts, zoals Talisker, met lichtere, zacht nasmakende granen.', 'Whisky', 24.49,4, 100, 'Johnnie_Walker_Red_Label_100.png');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('Glen Talloch', 'Glen Talloch is een blend met maar liefst 30% malt whisky’s die minimaal 5 jaar gerijpt zijn. Samen met de beste graanwhisky’s vormen ze een geweldige combinatie van kracht en finesse. Echt iets om even bij stil te staan met een mooi glas. Of eigenlijk... zitten.', 'Whisky', 18.49,1, 100, 'Glen_Talloch_100.png');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('Prosecco Santa Chiara', 'Prosecco met de smaak van zachtfris appel en perenfruit. Een ideaal aperitief en perfect voor mixen met mousserende wijnen.', 'Wijn', 4.27,4, 75, 'Prosecco_Santa_Chiara_75.png');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('Martini Prosecco', 'Martini Prosecco wordt volgens de originele methode – met respect voor traditie en kwaliteit geproduceerd. Vandaar dat de Prosecco het D.O.C. kwaliteitslabel heeft. MARTINI Prosecco is afkomstig uit de Veneto-regio Friuli vlakbij Venetië. De wijngaard gebied is sinds 2009 beschermd door de wet en Prosecco kan nu alleen afkomstig zijn van dit deel van Italië. Geproduceerd uit de Glera druif (voorheen bekend als Prosecco) is de wijn droog, fris en knapperig aromatisch.', 'Wijn', 6.74,5, 75, 'Martini_Prosecco_75.png');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('Prosecco Colle del Principe', 'Eén van de allerpopulairste Prosecco’s uit het assortiment van Gall & Gall. Fris, maar toch intens van smaak, met heel veel rijp peren- en appelfruit. Een geweldig aperitief!', 'Wijn', 5.99,6, 75, 'Prosecco_Colle_del_Principe_75.png');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('Puschkin Red', 'Puschkin Red Orange (17,7%) combineert de kracht van Puschkin wodka met de heerlijke bitterzoete smaak van rode bloedsinaasappelen. Deze kenmerkende smaak maakt Red Orange ongekend populair, Puschkin Red Orange is niet voor niets al jarenlang Nederland’s nummer 1 rode wodka. Puschkin Red Orange is heerlijk in de mix.', 'Mixen', 6.99,19, 100, 'Puschkin_Red_100.png');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('Grolsch Premium pils', 'Grolsch Premium Pilsner is een stevig goudblond bier met een volle smaak. Genieten van Grolsch Premium Pilsner betekent genieten van stevig goudblond bier met een volle smaak. Gebrouwen volgens een bijna 400 jaar oude traditie. Nog altijd gebruiken we de klassieke methode van lage gisting, met zorg geselecteerde grondstoffen en een natuurlijke rijping. Je proeft het vakmanschap in elk glas', 'Bier', 10.99,10, 720, 'Grolsch_Krat.jpg');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('Jupiler pils', 'Jupiler pils, gebrouwen met de beste ingrediënten, volgens een onberispelijk vakmanschap. Bitterzachte pils (5,2%) met een fris karakter, vlotte verteerbaarheid en een toegankelijke smaak.', 'Bier', 11.25,12, 600, 'Jupiler_Krat.jpg');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('Amstel Pilsner', 'Amstel Pilsner (5%) heeft een gematigde mild bittere smaak en een droge afdronk. Een karakteristiek licht bloemig hop aroma.', 'Bier', 11.00,11, 720, 'Amstel_Krat.jpg');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('Warsteiner Pilsner', 'Warsteiner, Duits premium pilsener met een zacht frisse smaak en licht bittere afdronk. Warsteiner wordt nog altijd gebrouwen volgens traditioneel recept en het eeuwenoude ’Reinheitsgebot’. Deze warenwet schrijft voor dat het bier enkel en alleen mag bestaan uit: mout, hop en water. We gebruiken dus geen enkele kunstmatige toevoeging. Voor Warsteiner premium pils zijn uitsluitend de beste ingrediënten van Duitse bodem geselecteerd. Het resultaat: 100% natuurzuiver pilsener.', 'Bier', 9.99,13, 720, 'Warsteiner_Krat.jpg');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('Hertog Jan', 'Hertog Jan Pilsener (5,1% alc.) is gebrouwen van zacht water uit de Ardennen en van zorgvuldig geselecteerde hop en mout. Uit liefde voor bier.', 'Bier', 9.99,22, 720, 'Hertog_Jan_Krat.jpg');


INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (1, 2) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (1, 3) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (1, 4) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (1, 5) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (1, 6) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (1, 7) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (2, 3) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (2, 4) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (2, 5) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (2, 6) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (2, 7) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (2, 8) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (3, 4) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (3, 5) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (3, 6) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (3, 7) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (3, 8) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (3, 9) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (4, 5) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (4, 6) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (4, 7) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (4, 8) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (4, 9) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (4, 10) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (5, 6) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (5, 7) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (5, 8) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (5, 9) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (5, 10) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (5, 11) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (6, 7) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (6, 8) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (6, 9) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (6, 10) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (6, 11) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (6, 12) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (7, 8) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (7, 9) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (7, 10) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (7, 11) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (7, 12) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (7, 13) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (8, 9) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (8, 10) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (8, 11) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (8, 12) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (8, 13) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (8, 14) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (9, 10) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (9, 11) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (9, 12) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (9, 13) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (9, 14) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (9, 15) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (10, 11) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (10, 12) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (10, 13) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (10, 14) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (10, 15) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (10, 16) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (11, 12) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (11, 13) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (11, 14) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (11, 15) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (11, 16) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (11, 17) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (12, 13) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (12, 14) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (12, 15) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (12, 16) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (12, 17) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (12, 18) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (13, 14) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (13, 15) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (13, 16) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (13, 17) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (13, 18) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (13, 19) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (14, 15) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (14, 16) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (14, 17) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (14, 18) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (14, 19) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (14, 20) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (15, 16) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (15, 17) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (15, 18) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (15, 19) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (15, 20) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (15, 21) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (16, 17) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (16, 18) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (16, 19) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (16, 20) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (16, 21) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (16, 22) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (17, 18) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (17, 19) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (17, 20) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (17, 21) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (17, 22) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (17, 23) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (18, 19) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (18, 20) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (18, 21) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (18, 22) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (18, 23) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (18, 24) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (19, 20) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (19, 21) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (19, 22) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (19, 23) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (19, 24) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (19, 25) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (20, 21) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (20, 22) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (20, 23) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (20, 24) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (20, 25) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (20, 26) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (21, 22) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (21, 23) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (21, 24) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (21, 25) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (21, 26) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (21, 27) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (22, 23) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (22, 24) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (22, 25) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (22, 26) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (22, 27) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (22, 28) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (23, 24) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (23, 25) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (23, 26) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (23, 27) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (23, 28) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (23, 29) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (24, 25) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (24, 26) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (24, 27) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (24, 28) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (24, 29) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (24, 30) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (25, 26) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (25, 27) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (25, 28) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (25, 29) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (25, 30) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (25, 31) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (26, 27) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (26, 28) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (26, 29) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (26, 30) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (26, 31) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (26, 32) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (27, 28) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (27, 29) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (27, 30) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (27, 31) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (27, 32) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (27, 33) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (28, 29) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (28, 30) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (28, 31) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (28, 32) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (28, 33) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (28, 34) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (29, 30) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (29, 31) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (29, 32) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (29, 33) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (29, 34) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (29, 35) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (30, 31) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (30, 32) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (30, 33) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (30, 34) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (30, 35) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (30, 36) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (31, 32) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (31, 33) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (31, 34) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (31, 35) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (31, 36) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (31, 37) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (32, 33) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (32, 34) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (32, 35) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (32, 36) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (32, 37) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (32, 38) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (33, 34) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (33, 35) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (33, 36) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (33, 37) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (33, 38) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (33, 39) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (34, 35) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (34, 36) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (34, 37) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (34, 38) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (34, 39) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (34, 40) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (35, 36) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (35, 37) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (35, 38) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (35, 39) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (35, 40) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (35, 10) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (36, 37) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (36, 38) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (36, 39) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (36, 40) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (36, 11) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (36, 42) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (37, 38) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (37, 39) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (37, 40) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (37, 9) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (37, 7) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (37, 8) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (38, 12) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (38, 13) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (38, 28) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (38, 42) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (38, 9) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (38, 1) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (39, 5) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (39, 6) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (39, 7) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (39, 9) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (39, 30) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (39, 8) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (40, 1) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (40, 2) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (40, 3) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (40, 4) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (40, 5) 
INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (40, 6)



INSERT [dbo].[GEBRUIKER] ([GEBRUIKERSNAAM], [VOORNAAM], [TUSSENVOEGSEL], [ACHTERNAAM], [STRAATNAAM], [HUISNUMMER], [POSTCODE], [WOONPLAATS], [EMAIL], [SEXE], [WACHTWOORD]) VALUES (N'barabas', N'Professor', NULL, N'Barabas', N'Bollebozen', 12, N'9574EC', N'Amoras', N'barabase@vandersteen.be', N'm', N'teletijdmachine')
INSERT [dbo].[GEBRUIKER] ([GEBRUIKERSNAAM], [VOORNAAM], [TUSSENVOEGSEL], [ACHTERNAAM], [STRAATNAAM], [HUISNUMMER], [POSTCODE], [WOONPLAATS], [EMAIL], [SEXE], [WACHTWOORD]) VALUES (N'franka', N'Frank', NULL, N'Francesca Victoria', N'Museumstraat', 1, N'4920DD', N'Groterdam', N'franka@striphelden.eu', N'v', N'Bars')
INSERT [dbo].[GEBRUIKER] ([GEBRUIKERSNAAM], [VOORNAAM], [TUSSENVOEGSEL], [ACHTERNAAM], [STRAATNAAM], [HUISNUMMER], [POSTCODE], [WOONPLAATS], [EMAIL], [SEXE], [WACHTWOORD]) VALUES (N'pietjepuk', N'Pietje', NULL, N'Puk', N'Postlaan', 6, N'3453AA', N'Keteldorp ', N'pietjepuk@pttpost.nl', N'm', N'spitsoor')
INSERT [dbo].[GEBRUIKER] ([GEBRUIKERSNAAM], [VOORNAAM], [TUSSENVOEGSEL], [ACHTERNAAM], [STRAATNAAM], [HUISNUMMER], [POSTCODE], [WOONPLAATS], [EMAIL], [SEXE], [WACHTWOORD]) VALUES (N'wdviking', N'Wicky', N'de', N'Viking', N'Whalhalla', 87, N'4326BB', N'Flake', N'wicky@halmar.com', N'm', N'ylvi')
INSERT [dbo].[GEBRUIKER] ([GEBRUIKERSNAAM], [VOORNAAM], [TUSSENVOEGSEL], [ACHTERNAAM], [STRAATNAAM], [HUISNUMMER], [POSTCODE], [WOONPLAATS], [EMAIL], [SEXE], [WACHTWOORD]) VALUES (N'testing22', N'Professor', NULL, N'Barabas', N'Bollebozen', 12, N'9574EC', N'Amoras', N'barabase@vandersteen.be', N'm', N'testing')
INSERT [dbo].[GEBRUIKER] ([GEBRUIKERSNAAM], [VOORNAAM], [TUSSENVOEGSEL], [ACHTERNAAM], [STRAATNAAM], [HUISNUMMER], [POSTCODE], [WOONPLAATS], [EMAIL], [SEXE], [WACHTWOORD], RECHTEN) VALUES (N'testing', N'Testing', NULL, N'Tester', N'Bollebozen', 12, N'9574EC', N'Amoras', N'barabase@vandersteen.be', N'm', '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08', 2)
INSERT [dbo].[GEBRUIKER] ([GEBRUIKERSNAAM], [VOORNAAM], [TUSSENVOEGSEL], [ACHTERNAAM], [STRAATNAAM], [HUISNUMMER], [POSTCODE], [WOONPLAATS], [EMAIL], [TELEFOONNUMMER], [SEXE], [WACHTWOORD], RECHTEN) VALUES (N'maxgroen', N'Max', NULL, N'Groenendijk', N'Abraham Teerlinkstraat', 4, N'7424DM', N'Deventer', N'maxgroenendijk@outlook.com', N'0642582694', N'm', '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08', 2)
INSERT [dbo].[GEBRUIKER] ([GEBRUIKERSNAAM], [VOORNAAM], [TUSSENVOEGSEL], [ACHTERNAAM], [STRAATNAAM], [HUISNUMMER], [POSTCODE], [WOONPLAATS], [EMAIL], [SEXE], [WACHTWOORD], RECHTEN) VALUES (N'testt', N'Test', NULL, N'Tester', N'Bollebozen', 12, N'9574EC', N'Amoras', N'barabase@vandersteen.be', N'm', '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08', 2)

USE MASTER
GO
