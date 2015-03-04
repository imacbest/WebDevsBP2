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


INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding) VALUES
( 'Jameson', 'De drievoudige distillatie en de combinatie van pure pot still whiskey met grain whiskey, 
maken Jameson uitzonderlijk zacht. De rokerige smaak ontbreekt omdat er niet op turf gestookt wordt. 
Hierdoor is Jameson zeer geschikt om zowel puur als in de mix met bijvoorbeeld Ginger Ale te drinken.', 'categorie AA', 29.99, 5, 100,
 'jameson_100.png'),
( 'Jack Daniel''s Tennessee', 'Jack Daniel', 'categorie AA', 24.49, 3, 70, 'jack_daniels_tennessee_70.png'),
( 'Duvel', 'Duvel is een blond bier met een lichtbittere smaak, heeft een verfijnd aroma en een uitgesproken hopkarakter. Het brouwproces duurt 90 dagen.', 
'categorie AA', 1.29, 2, 33, 'duvel_33.png'),
( 'La Chouffe', 'Een aangenaam en fruitig bier, met koriander gekruid en een lichte hopsmaak. La Chouffe is een ongefilterd blond bier, dat zowel op fles als in het vat hergist.', 'categorie AA', 1.49, 5, 33, 'La_Chouffe_33.png'),
('Captain Morgan Spiced Gold', 'Kruiden, specerijen en andere natuurlijke aroma', 'categorie AA', 18.49, 33,  70, 'Captain_Morgan_Spiced_Gold_70.png'),
( 'Sierra Silver', 'Het lichtere broertje van de Gold editie, Sierra Tequila Silver is een kleurloze tequila met een duidelijk aroma van Agave en alcohol. Het heeft dan ook een redelijk flinke ', 'categorie AA', 17.49, 3,  70, 'Sierra_Silver_70.png'),
( 'Whales Tale Sauvignon Blanc', 'Deze witte wijn is gemaakt van druiven van vier verschillende wijngaarden, afkomstig van zowel de kust als meer hogergelegen landinwaarts. Een zeer aromatische, intense wijn met een superfrisse smaak. Een populaire wijn!', 'categorie AA', 11.99, 3, 75, 'Whales_Tale_Sauvignon_Blanc_75.png'),
( 'Penfolds Grange 2009', 'De eerste Grange wijn werd gelanceerd in de begin jaren ''50. Sindsdien heeft Grange de plaats veroverd van Australisch meest prestigieuze wijn. Deze prachtige rode wijn heeft een stevige kleur en smaak. En is een internationaal icoon. Voor ieder jaar zijn er vele verzamelaars die uitkijken naar het nieuwe jaar. Grange 2009 kenmerkt zich door uitgelanceerde zuren en perfect rijpe tannines. Een elegante, maar toch krachtige wijn.', 'categorie AA', 649,1,  75, 'Penfolds_Grange_2009_75.png'),
( 'Smirnoff Vodka', 'Smirnoff no. 21 wodka is de nummer ', 'categorie AA', 14.99, 2, 100, 'Smirnoff_Vodka_100.png'),
( 'Licor 43', 'De Spaanse likeur met 43 geheime ingredi', 'categorie AA', 19.49, 4, 70, 'Licor_43_70.png'),
( 'Napoleon', 'Deze brandy uit Frankrjk is zacht van smaak. Serveer hem licht gekoeld of door de koffie met een toefje slagroom.', 'categorie AA', 10.49, 4, 70, 'Napoleon_70.png'),
( 'Grolsch Beugel XXL', 'De naam Grolsch is het bijvoeglijke naamwoord van Grol, de oude naam van Groenlo. Groenlo is de oorspronkelijke standplaats. De brouwerij heet dan ook officieel Grolsche Bierbrouwerij.', 'categorie AA', 8.59, 3, 150, 'Grolsch_Beugel_XXL_150.png'),
('Absolut Vodka', 'Wodka van excellente kwaliteit. Gemaakt van uitsluitend natuurlijke ingredi', 'categorie AA', 14.99, 3, 70, 'Absolut_Vodka_70.png'),
('Gold Strike', 'Goldstrike is herkenbaar aan zijn goud in de fles. Goldstrike komt het beste tot zijn recht als je deze puur drinkt. Dat kan gekoeld maar ook ongekoeld zijn. Daarnaast kan je Goldstrike ook goed mixen met bv wodka, tonic of fanta.', 'categorie AA', 16.29,4, 50, 'Gold_Strike_50.png'),
( 'Dropshot', 'Droplikeur met de smaak van echte salmiak.', 'categorie AA', 10.79, 4, 70, 'Dropshot_70.png');


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
