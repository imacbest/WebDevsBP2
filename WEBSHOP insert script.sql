USE [WEBSHOP]
GO

DELETE PRODUCT_GERELATEERD_PRODUCT
DELETE PRODUCT
DELETE GEBRUIKER
DELETE PRODUCT
DELETE CATEGORIE

INSERT [dbo].[CATEGORIE] ([CATEGORIENAAM]) VALUES (N'categorie AA')
INSERT [dbo].[CATEGORIE] ([CATEGORIENAAM]) VALUES (N'categorie BB')
INSERT [dbo].[CATEGORIE] ([CATEGORIENAAM]) VALUES (N'categorie CC')
INSERT [dbo].[CATEGORIE] ([CATEGORIENAAM]) VALUES (N'categorie DD')

INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('Jameson ', 'De drievoudige distillatie en de combinatie van pure pot still whiskey met grain whiskey, maken Jameson uitzonderlijk zacht. De rokerige smaak ontbreekt omdat er niet op turf gestookt wordt. Hierdoor is Jameson zeer geschikt om zowel puur als in de mix met bijvoorbeeld Ginger Ale te drinken.', 'categorie AA', 29.99,5, 100, 'jameson_1L.png');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('Jack Daniel''s Tennessee', 'Jack Daniel’s is een volle whisky met smaken van rijp fruit. Jack Daniels is, zoals de meesten denken, geen bourbon whiskey, maar Tennessee whisky. Dit komt omdat Jack Daniels anders gemaakt wordt. Jack Daniels wordt gefiltered in in houtskool en daarnaast wordt er een speciale vergistingstechniek toegepast. Daardoor heeft Jack Daniels''naast de bekende zoete volle smaak ook een licht rokerige smaak. De Black Label staat niet alleen bekend om zijn kwaliteit, maar ook vanwege de link met (rock)muziek. Jack Daniel’s gaat sinds 1866 hand in hand met de legendes van de muziek. Aanbevolen drinkwijze is puur, on the rocks of gemixt met cola.', 'categorie AA', 24.49,3, 70, 'jack_daniels_tennessee_0_7.png');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('Duvel ', 'Duvel is een blond bier met een lichtbittere smaak, heeft een verfijnd aroma en een uitgesproken hopkarakter. Het brouwproces duurt 90 dagen.', 'categorie AA', 1.29,2, 33, 'duvel_33.png');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('La Chouffe', 'Een aangenaam en fruitig bier, met koriander gekruid en een lichte hopsmaak. La Chouffe is een ongefilterd blond bier, dat zowel op fles als in het vat hergist.', 'categorie AA', 1.49,5, 33, 'La_Chouffe_33.png');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('Captain Morgan Spiced Gold', 'Kruiden, specerijen en andere natuurlijke aroma’s geven Captain Morgan Original Spiced Rum een zachte en verrassende smaak. Het distillaat heeft een jaar gerijpt in eiken vaten. Deze bijzondere versie van Captain Morgan is puur te drinken of heerlijk te mixen.', 'categorie AA', 18.49,3, 70, 'Captain_Morgan_Spiced_Gold_70.png');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('Sierra Silver ', 'Het lichtere broertje van de Gold editie, Sierra Tequila Silver is een kleurloze tequila met een duidelijk aroma van Agave en alcohol. Het heeft dan ook een redelijk flinke ‘burn’ erin zitten, een goedkope tequila om mee te shotten of om mee te mixen!', 'categorie AA', 17.49,8, 70, 'Sierra_Silver_70.png');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('Whales Tale Sauvignon Blanc', 'Deze witte wijn is gemaakt van druiven van vier verschillende wijngaarden, afkomstig van zowel de kust als meer hogergelegen landinwaarts. Een zeer aromatische, intense wijn met een superfrisse smaak. Een populaire wijn!', 'categorie AA', 11.99,77, 75, 'Whales_Tale_Sauvignon_Blanc_75.png');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('Penfolds Grange 2009', 'De eerste Grange wijn werd gelanceerd in de begin jaren 50. Sindsdien heeft Grange de plaats veroverd van Australisch meest prestigieuze wijn. Deze prachtige rode wijn heeft een stevige kleur en smaak. En is een internationaal icoon. Voor ieder jaar zijn er vele verzamelaars die uitkijken naar het nieuwe jaar. Grange 2009 kenmerkt zich door uitgelanceerde zuren en perfect rijpe tannines. Een elegante, maar toch krachtige wijn. ', 'categorie AA', 6.49,4, 75, 'Penfolds_Grange_2009_75.png');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('Smirnoff Vodka ', 'Smirnoff no. 21 wodka is de nummer één spirit wereldwijd op de wereldranglijst van premium dranken. Smirnoff no. 21 wodka heeft een lange historie in de productie van hoog kwalitatieve wodka waarbij gebruik wordt gemaakt van een uniek proces waarbij de wodka drie maal gedistilleerd wordt en maar liefst tien maal gefilterd op basis van houtskool. Door de 47 afzonderlijke kwaliteitscontroles levert dit unieke proces een uiterst pure wodka op.', 'categorie AA', 14.99,5, 100, 'Smirnoff_Vodka_100.png');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('Licor 43', 'De Spaanse likeur met 43 geheime ingrediënten die samen een unieke smaak opleveren. Onder meer het sap van citrus en andere vruchten en extracten van aromatische planten, zoals vanille, geven de Spaanse likeur haar ondefinieerbare geur en smaak. Tot op de dag van vandaag kent niemand het eeuwenoude recept en wordt de likeur uitsluitend in het Spaanse Cartagena geproduceerd. Het eigenzinnige karakter maakt Licor 43 heerlijk om puur te drinken of om mee te variëren, in een frisse mix of verrassende cocktail.', 'categorie AA', 19.49,8, 70, 'Licor_43_70.png');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('Napoleon', 'Deze brandy uit Frankrjk is zacht van smaak. Serveer hem licht gekoeld of door de koffie met een toefje slagroom.', 'categorie AA', 10.49,9, 70, 'Napoleon_70.png');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('Grolsch Beugel XXL', 'De naam Grolsch is het bijvoeglijke naamwoord van Grol, de oude naam van Groenlo. Groenlo is de oorspronkelijke standplaats. De brouwerij heet dan ook officieel Grolsche Bierbrouwerij.', 'categorie BB', 8.59,55, 150, 'Grolsch_Beugel_XXL_150.png');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('Absolut Vodka ', 'Wodka van excellente kwaliteit. Gemaakt van uitsluitend natuurlijke ingrediënten. De beste winter tarwe en water uit eigen bron. Geen suikers toegevoegd.', 'categorie AA', 14.99,4, 70, 'Absolut_Vodka_70.png');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('Gold Strike ', 'Goldstrike is herkenbaar aan zijn goud in de fles. Goldstrike komt het beste tot zijn recht als je deze puur drinkt. Dat kan gekoeld maar ook ongekoeld zijn. Daarnaast kan je Goldstrike ook goed mixen met bv wodka, tonic of fanta.', 'categorie AA', 16.29,1, 50, 'Gold_Strike_50.png');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('Dropshot ', 'Droplikeur met de smaak van echte salmiak.', 'categorie AA', 10.79,7, 70, 'Dropshot_70.png');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('Jägermeister ', 'Jägermeister! Alleen als ie ijs- en ijskoud is. Een heerlijke shot om mee te proosten met je vrienden! Het authentieke recept is gebaseerd op de complexe melange van 56 natuurlijke ingrediënten. Waarbij één jaar rijping, op eikenhouten vaten, en het vakmanschap van de meester-distilleerders ook vandaag de unieke smaak geven aan dit onmisbare kruidenlikeur. Een pure en natuurlijke smaak met noten van citrus, gember en steranijs: een smaak van een oprecht en authentiek karakter. Inmiddels is Jägermeister uitgegroeid tot een internationale drank met een eigenzinnig en stoer imago.', 'categorie AA', 14.50,4, 70, 'Jägermeister_70.png');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('Bacardi Superior 70 CL', 'Barcardi Superior is een aromatische witte rum met onderscheidende smaken van amandel en vanille, ontwikkeld in wit eikenhouten vaten en gevormd door een geheime mix van houtskool voor de kenmerkende zachtheid. Een echte Bacardi & Cola maak je in een longdrinkglas. Vul het glas met ijsklontjes, schenk er 35ml Bacardi Superior bij, en top het glas af met cola. Garneer het glas met een partje limoen.', 'categorie AA', 14.99,5, 70, 'Bacardi_Superior_70.png');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('Bacardi Superior 100 CL', 'Barcardi Superior is een aromatische witte rum met onderscheidende smaken van amandel en vanille, ontwikkeld in wit eikenhouten vaten en gevormd door een geheime mix van houtskool voor de kenmerkende zachtheid. Een echte Bacardi & Cola maak je in een longdrinkglas. Vul het glas met ijsklontjes, schenk er 35ml Bacardi Superior bij, en top het glas af met cola. Garneer het glas met een partje limoen.', 'categorie AA', 23.49,8, 100, 'Bacardi_Superior_70.png');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('Bacardi Razz ', 'De basis voor BACARDÍ RAZZ is BACARDÍ Rum waaraan natuurlijke frambozen aroma’s zijn toegevoegd. De smaak is fris door de fruitige frambozenaroma’s en is niet te vergelijken met welke spirit dan ook. Deze drank heeft een heldere kleur en is verpakt in een unieke onderscheidende fles.', 'categorie AA', 18.68,9, 70, 'Bacardi_Razz_70.png');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('Berentzen Apfelkorn ', 'De ongekende klassieker en de enige échte Apfelkorn. Sinds 1758 gangmaker auf jeder party. Apfelkorn wordt gemaakt van echte Golden Delicious en Gala appels und is daarom zoet en fris van smaak. De originele Berentzen Apfelkorn, gestookt volgens oude traditie, is friszoet van smaak e heetf 18% alcohol. Een eigenzinnig drankje lekker om puur te drinken als ijskoude borrel en ‘on the rocks’ of om te mixen met Spa Rood, 7-Up, appelsap of cassis. Een echte Apfelkorn-fan bestelt natürlich ein Rondje met z’n vrienden; Pröoβt!', 'categorie AA', 14.49,6, 100, 'Berentzen_Apfelkorn _100.png');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('Trojka Pink ', 'Trojka Pink is een wodka-likeur uit Zwitserland met de rijke smaak van zoete rode vruchten, cranberries en een vleugje aloë vera. Trojka betekent Trio, dit verklaart de naam, want de basis voor iedere Trojka likeur is drievoudig gedistilleerde Amerikaanse graan wodka en het allerbeste water. Het water is gaat door een twaalf-laags filter. De drank is zowel lekker als shot, maar zeker ook als longdrink of cocktail.', 'categorie AA', 14.99,4, 70, 'Trojka_Pink_70.png');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('Malibu Coconut ', '’s Werelds bekendste en meest verkochte likeur met kokosnoot. De unieke smaak van deze likeur is te danken aan de verfijnde melange van rum, natuurlijke kokosaroma’s en pure rietsuikers van de hoogste kwaliteit. Door het alcoholpercentage van 21% is Malibu zeer geschikt om puur te drinken. Ook lekker in de mix met cola, jus d''orange, cassis of cranberrysap.', 'categorie AA', 15.59,5, 100, 'Malibu_Coconut .png');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('Bacardi Oakheart', 'BACARDÍ Oakheart is een kruidige rum, vakkundig met de hand geblend door de Maestros de Ron BACARDÍ. Zijn smaak wordt ontwikkeld door de rijping van ten minste één jaar in verschroeide eikenhouten vaten. De geheime houtskoolfiltering en de vertrouwelijke kruidenmix geven tonen van Carribische honing en esdoorn. Vanille, kaneel en tonen van nootmuskaat geven het karakter nog extra een dimensie. De ferme smaak van BACARDÍ Oakheart heeft enkel en alleen veel ijs en cola nodig om goed tot zijn recht te komen. Mocht er een pul binnen handbereik zijn aarzel dan niet deze te gebruiken.', 'categorie AA', 17.99,8, 70, 'Bacardi_Oakheart_70.png');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('Esbjaerg Vodka ', 'Esbjærg Vodka is bereid van een fijne tarwe-graanalcohol die over actieve houtskool wordt gefilterd. Hierdoor ontstaat een pure, bijzonder zachte smaak. Esbjærg heeft een alcoholpercentage van 40% wat deze wodka bij uitstek geschikt maakt om mee te mixen.', 'categorie AA', 16.49,7, 100, 'Esbjaerg_Vodka_100.png');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('Bombay Sapphire', 'Een premium zachte Gin met een uitgebalanceerde smaak op basis van 10 geselecteerde specerijen. De botanische kruiden van Bombay Sapphire zijn: jeneverbessen, zoethout, amandelen, citroenschil, iriswortel, engelwortel, koriander, kassiebast, staartpeper, malaguenapeper. Resulterend in een complex, maar toch subtiel karakter. Vul een groot wijnglas tot de rand met ijs, voeg 50ml Bombay Sapphire toe en vul aan met een premium tonic. Garneer met een uitgeknepen partje limoen en een zoethoutstokje.', 'categorie AA', 19.19,4, 70, 'Bombay_Sapphire_70.png');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('Chivas Regal Extra', 'Chivas Regal Extra is een eerbetoon aan James en John Chivas die in de 19e eeuw niet alleen pioniers waren, maar ook excelleerden in de kunst van het blenden. Het geheim van de bijzondere smaak ligt in de blend van whiskies die gerijpt zijn in oude Oloroso sherryvaten aangevuld met zeldzame malts die lange tijd gekoesterd zijn. Deze sherryvaten geven een diepe amberkleur met rijke, zoete  tonen, terwijl de zeldzame malts complexiteit toevoegen. Chivas’ masterblender Colin Scott, creëerde hiermee een unieke Chivas blend met een rijke en genereuze smaak.', 'categorie CC', 38.99,4, 70, 'Chivas_Regal_Extra_70.png');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('Chivas Regal 18 Years', 'Chivas Regal 18 Years is een luxe, zachte en rijke blend van malt- en graanwhiskies welke alle minimaal 18 jaar hebben gerijpt. Het hart van Chivas Regal wordt gevormd door de single malt Strathisla. Bijzonder aan Chivas Regal 18 Year Old is dat het huwelijk van zowel de malt- als de grainwhisky’s plaatsvindt op speciaal geselecteerde eikenhouten vaten. Dit maakt de whisky zeer verfijnd en toegankelijk. Het enigszins rokerige karakter geeft aan dat er ook invloed van de eilanden is.', 'categorie CC', 68.49,1, 70, 'Chivas_Regal_18_Years_70.png');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('The Famous Grouse', 'The Famous Grouse is een geliefde whisky in Schotland, en staat bekend om zijn zachte en rijke smaak en gebruikt meer sherryvaten voor het rijpen van haar whisky’s dan andere blended whisky''s. The Famous Grouse Blended Scotch Whisky bestaat uit een blend van onder andere The Macallan en Highland Park -twee van ''s werelds meest gerespecteerde Single Malt Scotch Whisky''s- en zoete grain whisky''s voor het verkrijgen van de kenmerkende zachte smaak van The Famous Grouse.', 'categorie CC', 24.49,2, 100, 'The_Famous_Grouse_100.png');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('William Lawson''s', 'Deze whisky is een blend met een milde en zachte smaak. Lekker om hem puur te drinken. Of mix hem met cola of Ginger Ale. En helemaal verrassend in een stoofpotje met kip! Zo kun je er de hele avond van genieten.', 'categorie CC', 22.49,5, 100, 'William_Lawson''s_100.png');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('Johnnie Walker Red Label ', 'In 1906 wist Alexander Walker, de kleinzoon van John Walker een whisky te blenden met de kwaliteiten om uit te groeien tot één van de beste whisky’s ter wereld. Alexander was er in geslaagd om de Red Label zo te blenden dat de rijk en rokerige whisky perfect geschikt is om zowel ‘on the rocks’ als in de mix te drinken. De broer van Alexander, George Walker, doopte in 1909 de oorspronkelijk onder de naam Extra Special Highland Whisky gestarte whisky om tot Johnnie Walker Red Label. In dit jaar werd ook het beroemde logo “The striding man” ontworpen. Johnnie Walker Red Label is een klassieker onder de whisky’s. Red Label is een combinatie van kruidige, rokerige malts, zoals Talisker, met lichtere, zacht nasmakende granen.', 'categorie CC', 24.49,4, 100, 'Johnnie_Walker_Red_Label_100.png');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('Glen Talloch ', 'Glen Talloch is een blend met maar liefst 30% malt whisky''s die minimaal 5 jaar gerijpt zijn. Samen met de beste graanwhisky''s vormen ze een geweldige combinatie van kracht en finesse. Echt iets om even bij stil te staan met een mooi glas. Of eigenlijk... zitten.', 'categorie CC', 18.49,1, 100, 'Glen_Talloch_100.png');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('Prosecco Santa Chiara', 'Prosecco met de smaak van zachtfris appel en perenfruit. Een ideaal aperitief en perfect voor mixen met mousserende wijnen.', 'categorie DD', 4.27,4, 75, 'Prosecco_Santa_Chiara_75.png');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('Martini Prosecco', 'Martini Prosecco wordt volgens de originele methode – met respect voor traditie en kwaliteit geproduceerd. Vandaar dat de Prosecco het D.O.C. kwaliteitslabel heeft. MARTINI Prosecco is afkomstig uit de Veneto-regio Friuli vlakbij Venetië. De wijngaard gebied is sinds 2009 beschermd door de wet en Prosecco kan nu alleen afkomstig zijn van dit deel van Italië. Geproduceerd uit de Glera druif (voorheen bekend als Prosecco) is de wijn droog, fris en knapperig aromatisch.', 'categorie DD', 6.74,5, 75, 'Martini_Prosecco_75.png');
INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES ('Prosecco Colle del Principe ', 'Eén van de allerpopulairste Prosecco''s uit het assortiment van Gall & Gall. Fris, maar toch intens van smaak, met heel veel rijp peren- en appelfruit. Een geweldig aperitief!', 'categorie DD', 5.99,6, 75, 'Prosecco_Colle_del_Principe _75.png');


--INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES
--( 'Jameson', 'De drievoudige distillatie en de combinatie van pure pot still whiskey met grain whiskey, 
--maken Jameson uitzonderlijk zacht. De rokerige smaak ontbreekt omdat er niet op turf gestookt wordt. 
--Hierdoor is Jameson zeer geschikt om zowel puur als in de mix met bijvoorbeeld Ginger Ale te drinken.', 'categorie AA', 29.99, 5, 100,
-- 'jameson_100.png'),
--( 'Jack Daniel''s Tennessee', 'Jack Daniel', 'categorie AA', 24.49, 3, 70, 'jack_daniels_tennessee_70.png'),
--( 'Duvel', 'Duvel is een blond bier met een lichtbittere smaak, heeft een verfijnd aroma en een uitgesproken hopkarakter. Het brouwproces duurt 90 dagen.', 
--'categorie AA', 1.29, 2, 33, 'duvel_33.png'),
--( 'La Chouffe', 'Een aangenaam en fruitig bier, met koriander gekruid en een lichte hopsmaak. La Chouffe is een ongefilterd blond bier, dat zowel op fles als in het vat hergist.', 'categorie AA', 1.49, 5, 33, 'La_Chouffe_33.png'),
--('Captain Morgan Spiced Gold', 'Kruiden, specerijen en andere natuurlijke aroma', 'categorie AA', 18.49, 33,  70, 'Captain_Morgan_Spiced_Gold_70.png'),
--( 'Sierra Silver', 'Het lichtere broertje van de Gold editie, Sierra Tequila Silver is een kleurloze tequila met een duidelijk aroma van Agave en alcohol. Het heeft dan ook een redelijk flinke ', 'categorie AA', 17.49, 3,  70, 'Sierra_Silver_70.png'),
--( 'Whales Tale Sauvignon Blanc', 'Deze witte wijn is gemaakt van druiven van vier verschillende wijngaarden, afkomstig van zowel de kust als meer hogergelegen landinwaarts. Een zeer aromatische, intense wijn met een superfrisse smaak. Een populaire wijn!', 'categorie AA', 11.99, 3, 75, 'Whales_Tale_Sauvignon_Blanc_75.png'),
--( 'Penfolds Grange 2009', 'De eerste Grange wijn werd gelanceerd in de begin jaren ''50. Sindsdien heeft Grange de plaats veroverd van Australisch meest prestigieuze wijn. Deze prachtige rode wijn heeft een stevige kleur en smaak. En is een internationaal icoon. Voor ieder jaar zijn er vele verzamelaars die uitkijken naar het nieuwe jaar. Grange 2009 kenmerkt zich door uitgelanceerde zuren en perfect rijpe tannines. Een elegante, maar toch krachtige wijn.', 'categorie AA', 649,1,  75, 'Penfolds_Grange_2009_75.png'),
--( 'Smirnoff Vodka', 'Smirnoff no. 21 wodka is de nummer ', 'categorie AA', 14.99, 2, 100, 'Smirnoff_Vodka_100.png'),
--( 'Licor 43', 'De Spaanse likeur met 43 geheime ingredi', 'categorie AA', 19.49, 4, 70, 'Licor_43_70.png'),
--( 'Napoleon', 'Deze brandy uit Frankrjk is zacht van smaak. Serveer hem licht gekoeld of door de koffie met een toefje slagroom.', 'categorie AA', 10.49, 4, 70, 'Napoleon_70.png'),
--( 'Grolsch Beugel XXL', 'De naam Grolsch is het bijvoeglijke naamwoord van Grol, de oude naam van Groenlo. Groenlo is de oorspronkelijke standplaats. De brouwerij heet dan ook officieel Grolsche Bierbrouwerij.', 'categorie AA', 8.59, 3, 150, 'Grolsch_Beugel_XXL_150.png'),
--('Absolut Vodka', 'Wodka van excellente kwaliteit. Gemaakt van uitsluitend natuurlijke ingredi', 'categorie AA', 14.99, 3, 70, 'Absolut_Vodka_70.png'),
--('Gold Strike', 'Goldstrike is herkenbaar aan zijn goud in de fles. Goldstrike komt het beste tot zijn recht als je deze puur drinkt. Dat kan gekoeld maar ook ongekoeld zijn. Daarnaast kan je Goldstrike ook goed mixen met bv wodka, tonic of fanta.', 'categorie AA', 16.29,4, 50, 'Gold_Strike_50.png'),
--( 'Dropshot', 'Droplikeur met de smaak van echte salmiak.', 'categorie AA', 10.79, 4, 70, 'Dropshot_70.png');


INSERT [dbo].[PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (10, 11)
INSERT [dbo].[PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (10, 13)
INSERT [dbo].[PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (11, 10)
INSERT [dbo].[PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (11, 13)
INSERT [dbo].[PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (11, 16)
INSERT [dbo].[PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (17, 10)
INSERT [dbo].[PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (17, 11)
INSERT [dbo].[PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (17, 36)
INSERT [dbo].[PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (36, 34)
INSERT [dbo].[PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (36, 35)
INSERT [dbo].[PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (36, 37)

INSERT [dbo].[GEBRUIKER] ([GEBRUIKERSNAAM], [VOORNAAM], [TUSSENVOEGSEL], [ACHTERNAAM], [STRAATNAAM], [HUISNUMMER], [POSTCODE], [WOONPLAATS], [EMAIL], [SEXE], [WACHTWOORD]) VALUES (N'barabas', N'Professor', NULL, N'Barabas', N'Bollebozen', 12, N'9574EC', N'Amoras', N'barabase@vandersteen.be', N'm', N'teletijdmachine')
INSERT [dbo].[GEBRUIKER] ([GEBRUIKERSNAAM], [VOORNAAM], [TUSSENVOEGSEL], [ACHTERNAAM], [STRAATNAAM], [HUISNUMMER], [POSTCODE], [WOONPLAATS], [EMAIL], [SEXE], [WACHTWOORD]) VALUES (N'franka', N'Frank', NULL, N'Francesca Victoria', N'Museumstraat', 1, N'4920DD', N'Groterdam', N'franka@striphelden.eu', N'v', N'Bars')
INSERT [dbo].[GEBRUIKER] ([GEBRUIKERSNAAM], [VOORNAAM], [TUSSENVOEGSEL], [ACHTERNAAM], [STRAATNAAM], [HUISNUMMER], [POSTCODE], [WOONPLAATS], [EMAIL], [SEXE], [WACHTWOORD]) VALUES (N'pietjepuk', N'Pietje', NULL, N'Puk', N'Postlaan', 6, N'3453AA', N'Keteldorp ', N'pietjepuk@pttpost.nl', N'm', N'spitsoor')
INSERT [dbo].[GEBRUIKER] ([GEBRUIKERSNAAM], [VOORNAAM], [TUSSENVOEGSEL], [ACHTERNAAM], [STRAATNAAM], [HUISNUMMER], [POSTCODE], [WOONPLAATS], [EMAIL], [SEXE], [WACHTWOORD]) VALUES (N'wdviking', N'Wicky', N'de', N'Viking', N'Whalhalla', 87, N'4326BB', N'Flake', N'wicky@halmar.com', N'm', N'ylvi')

USE MASTER
GO
