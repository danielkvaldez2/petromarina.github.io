-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-02-2020 a las 20:41:34
-- Versión del servidor: 10.1.39-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `petromar_supply`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `id` int(11) NOT NULL,
  `dia` int(11) NOT NULL,
  `mes` varchar(12) NOT NULL,
  `posted` varchar(25) NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `texto` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `archivo` varchar(100) NOT NULL,
  `video` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id`, `dia`, `mes`, `posted`, `titulo`, `texto`, `archivo`, `video`, `date`) VALUES
(18, 12, 'December', ' SINGAPORE, MERCHANT NAVY', 'IT\'S TIME FOR MORE BUNKER MARKETS TO FOLLOW SINGAPORE\'S LEADERSHIP IN THE FIGHT AGAINST BUNKER\'S BAD PRACTICE', '  En In a way, we, as buyers, have created these problems ourselves, Peter GrÃ¼nwaldt of Hafnia Management tells Ship & Bunke', 'aprojects-news-906.jpg', 0, '2020-01-24 21:37:09'),
(19, 15, 'December', ' INVESTORS, MERCHANT NAVY', 'INVESTORS SMELL AN OPPORTUNITY AMID ARGENTINA CRISIS', '  Argentine assets have plummeted a lot and very fast, but some courageous investors say it could be time to buy. \"Find me a high-yielding sovereign country and an IMF program that pays so generously,\" said Jean-Dominique Butikofer, emerging markets fixed income director at Voya Investment Management, based in Atlanta, which oversees about $ 205 billion. \"We can agree on the outlook for growth, the inflation that is unexpectedly out of control, the dynamics of the debt after the depreciation of the currency and the technical problems. But at these levels, value has been created. \" It refers to figures like these: 16.2 percent in dollar bonds maturing in three years or better still, 17.8 percent in bonds that mature in two. At a time when the benchmark Treasury bonds of the United States have a yield of 2.5 percent and those of other more stable emerging markets like Chile only 4 percent, these are attractive figures, especially in a country that received a historic loan of US $ 56,000 million from the International Monetary Fund, is reducing its fiscal deficit and even registers a trade surplus. \"I would be very reluctant to leave Argentina completely,\" Paul McNamara, GAM\'s investment director in London, who oversees some US $ 135 billion, said in an interview. \"The currency is cheap and unlike what happened last year they have a large external trade surplus.\" Of course, there are many things to worry about. One of them is the country\'s history of non-compliance. He did not pay bond investors for 15 years until they finally reached an agreement in 2016, months after Mauricio Macri took office. The peso lost more than half of its value last year and is on track to repeat as the world\'s worst performing currency in 2019. And perhaps the most relevant is the threat that Macri will not achieve re-election in October and lose out to his populist predecessor, Cristina FernÃ¡ndez de Kirchner. The concern for his return to power after the polls showed that he surpasses Macri motivated the collapse this week. In the absence of six months for the elections, the popularity of Macri has been affected since the economy is going through the second recession in his government with inflation that is above 50 percent, which led the Executive to announce controls on prices that in the opinion of analysts are signs of panic. But Jaime Duran Barba, who has accompanied Macri throughout his political career, says that investors exaggerated. Focus now on the surveys, he says, \"is absurd.\" Volatility is typical of emerging markets, said Jan Dehn, head of London-based research at Ashmore Group, which manages about $ 85 billion. \"If you\'re afraid of market volatility, you should not be in this business,\" Dehn shot. \"Volatility is a permanent feature in emerging markets, but we know that permanent losses are small in comparison. Volatility is, in almost every case, absolutely your best friend. \" In addition, there is a good chance that inflation will go down from now on, creating a window of opportunity as support for Macri rebounds, according to Whitney Baker, founder of the New Yorker Totem Macro, which advises funds that have more than US dollars. $ 3 billion. Local investors are also looking for offers. The state pension fund of Argentina bought on Thursday the so-called local law bonds (bonds in dollars are sold only at the national level) with expiration in 2020 and 2024, according to people with direct knowledge of the matter.', 'aprojects-news-905.jpg', 0, '2020-01-24 21:39:37'),
(20, 16, 'December', 'SHIPPING, MERCHANT NAVY ', 'THE FEDERATION OF ARGENTINE SHIPPING COMPANIES KEEPS ITS EXECUTIVE COMMITTEE AND ITS OBJECTIVES UNALTERED', '  Shortly after completing 4 years of life, the Federation of Argentine Shipping Companies (FENA) decided to extend the mandate of its current board of directors for the period 2019/2021. The entity will continue to be chaired by JosÃ© Pablo ElverdÃ­n. FENA brings together the Chambers of Shipping Companies and Shippers (CAENA), Naviera Argentina (CNA), Argentine Flag Shipowners (CARBA) and Tugboat Shipowners (CAR). It was founded in May 2015 with the aim of ending years of fragmentation in the lobby Argentine shipping company, and to position with a unified voice the weight of the sector. Then, inexplicably, the Government of Cristina FernÃ¡ndez decided to extirpate the Undersecretariat of Ports and Waterways (under Horacio Tettamanti), of the Ministry of Transport that led Florencio Randazzo and deposit it in the Ministry of Economy of Axel Kicillof. The companies grouped in FENA represent 95% of national flag vessels, between barges and push tugs, port maneuvering trailers, fluvial and maritime transport of fuels, diesel and fuel oil, grains and oils, iron ore, containers, ships of support offshore, among other activities. Continuum \"This decision aims to continue generating actions tending to weather the difficult situation that the merchant marine crosses and to promote alternatives that make possible the development sustainable activity. The Federation has the vocation to intensify the dialogue with all the actors to reach agreements that allow positioning the Argentine merchant marine as a fundamental sector for the development of the Nation, \"they said in a statement. Elverdin, from CAENA, will be accompanied by Gustavo D\'Amico (CAENA, vice president); MarÃ­a Cecilia Virasoro (CARBA, secretary); Claudio Pablo LÃ³pez (CAENA, prosecutor); Jorge JosÃ© Ãlvarez (CNA, treasurer), and Francisco Raimondi (CAR, protestor). The memberships will be in charge of Diego HernÃ¡n Ãlvarez Blanco (CNA); Gustavo Alberto Rodriguez (CAR); Marcelo Sibione (CAR), and Francisco AndrÃ©s Nadal (CAENA). Meanwhile, Alberto Blanco Armada and Stella Maris Morosoly will continue in the review committee of accounts, both by CAENA. Finally, Carlos Augusto LÃ³pez (CAENA), Carlos Ruiz Moreno (CAR) and Aldo Fabio RodrÃ­guez (CARBA) will be part of the Court of Honor. Great challenges \"FENA considers that steps have been taken to improve the national logistics system and is convinced that the Argentine merchant marine, has great challenges ahead that must have the understanding and collaboration of all actors involved in the sector,\" they added. Among the last steps of the federation are negotiations with the Undersecretariat of Ports, Navigable Roads and Merchant Marine and the General Ports Administration (AGP), in claim for equal treatment with respect to the bonus rates for vessels of the Paraguayan and Bolivian flag established by resolution 40/2019, on the one hand, and the need to better understand the traceability of requests for exceptions to the cabotage law.', 'aprojects-news-904.jpg', 0, '2020-01-24 21:42:44'),
(21, 16, 'December', ' TRADENEWS ', '\"MERCOSUR IS VERY IMPORTANT TO THINK THAT IT WILL END\"', '  \"The Bolsonaro government began with a speech in which it announced that it would carry out a reform of what it considered a third-world tradition in Brazil. There was a strong discourse of rapprochement with the United States, Israel and countries like Italy and Hungary that have right-wing governments. It all started with a presidential visit by the United States. and Israel, and the idea that Brazil has to move forward with more important economic agreements to develop, \"says Barral. - To what extent are the current policies coherent with the campaign discourse? - Once real life arrives, there is a very clear distinction between measures and discourse. First, because Brazil was never a country that only saw or interacted with developing nations. And on the other hand, when they arrived at the government they realized that Mercosur has a very great relevance, and the relationship with Argentina is quite important. In any case, although they are beginning to see reality, there is still a discourse that Brazil was very isolated and that it would have to try to reach broader agreements with more developed countries. The idea that Brazil has to try to close an agreement with the European Union (EU), Canada and Korea as priorities for this year is stronger. On the other hand, it insists that Brazil has to open more to the world and make a reduction in tariffs. In this line there is an expectation of the Bolsonaro government that when Brazil occupies the presidency of Mercosur, in the second half of this year, some reforms of the bloc or the Mercosur decision mechanism will be proposed. That is what is in the head of the government of Bolsonaro especially to advance more with international agreements and the negotiation of tariffs. Cut yourself -It includes in these Mercosur reforms the fact that countries can sign agreements independently and that negotiations are not necessarily en bloc? - According to the government, they will try to continue with a Mercosur negotiation policy as a bloc, but if the bloc does not advance, the alternative would be to change the rule that does not allow to seal agreements of its own. - Beyond the interminable negotiation with the EU (the contacts began in 1994), in the last time the Mercosur resumed its agenda with other countries and blocks. What changed to believe that concrete advances can be registered this time? -In the negotiation mechanisms, offers have been on the table since last year. Now the only thing different is the optimism of the government (of Bolsonaro). Those of us who have been waiting for Europe for many years to move are less optimistic. The new government is so optimistic that it believes that this year could end the negotiation with Europe.', 'aprojects-news-903.jpg', 0, '2020-01-24 21:45:31'),
(22, 16, 'December', ' DIEGO BALVERDE', 'HOPE OR UTOPIA', '  About 7 years ago I started a report to rebuild a Dead Port and give it an innovative, logical development. For all this I prepared myself with the best in their subjects and take note, I asked, I asked, I took it to scale, I even studied the probabilities of each of my hypotheses. This led me to a conclusion that the recruitment of information was important, relevant and with a potential for improvement. That\'s why I started working on how an Intelligent Port would be, I called it ... without knowing that there were already people who had established this terminology and even work methodology. Finally, through a book that many people helped me complete, I proposed the change with reliable statistical data and previously checked studies that provided accurate data on how to carry them out, development costs and estimated profits. To that I added the presentation of the book in several provinces and conferences to which I was invited .. all in pursuit of the growth of the Port that saw me being born and was practically managed by people with the motor and intellectual capacity of a kindergarten child of the smallest room (without pretending to offend the sweet children with so much desire to learn to the contrary of these infamous public workers armored in their posts without having even been communicated because they occupy it). In each site that I visited, I was enriched both in knowledge and a walk back through the university. It was great!!. From there a new world before me, of offers for the WORLD that demanded from our COUNTRIES, so many products. Visit more than 100 productive sites to choose 40, 40 products that are useful for those who touch our Ports. Doing a study in conjunction with a sociologist about MIGRATIONS in our COUNTRY and its crops, Experts in Ports (of the most important in the WORLD), elite engineers in each sector and economists with extensive knowledge in each of the areas to be developed , with enough experience in them. All this gave us an expertiz on the field of Foreign Trade A vital point for growth. \"KNOW WHAT WE HAVE TO SELL TO THOSE WHO KNOW THAT THEY VISIT US\". That\'s why after working with professionals in the area and bringing together industry leaders to boost growth, we find this cluster of inoperantes without a compass. What neither dumb nor lazy took the most superfluous idea and tried to do something .. something is the propitious knowledge that corresponds to the question. They were so incompetent and careless that they did not ask for help and took the risk of doing it as the old saying \"tie it with wire\" says. This happened in the place that before this study were thinking of entering boats of 12 meters in length or making a city in the port with all the inclemencies against it especially environmental ... but more important shortening what we promoted with the growth of SMART PORT that we offered. To all this in record time in 140 years of stagnation, they moved that unknown muscle called gluteus so that in 15 days with my idea they do something similar to the mamarracho that I was painting a work of art. Without more ... I leave with me cognitive synthesis about the sad way of stealing an idea. This synthesis is accompanied by a painting made by @ marianoh22o what shows all the lamebotas that Goliath had in the village hanging from a mate (his inseparable friend), trying to eat from above like the giraffes. Between hope and utopia .. I prefer HOPE because it is not a minor difference: utopia is prefabricated, it is a model of instructions, while HOPE is a territory to be built. Therefore, it requires the meeting of wills who still do not know what they propose and what they must do to get out of a world dominated by FINANCE, a political class that empties the language of meaning, together with a group of paid applauds like a Mexican sitcom full of comfortable and common places. I keep waiting for those QUESTIONS wisely guided (by trained people that do not exist), to find possible paths to that HOPE that can take the WORLD out of the DEMEMORITY and the FALSE MESSAGES of the ALWAYS explorers.', 'aprojects-news-902.jpg', 0, '2020-01-24 21:47:46'),
(23, 20, 'December', ' TRADENEWS', 'THE 10 LARGEST CONTAINER PORTS IN THE WORLD', '  Each day, millions of cargo freight travel from one port to another, connecting people and businesses around the world. We usually take their work for granted, but we are not fully aware of how much work they really have to handle. So we decided to present the world\'s top 10 container ports based on the volume they handle. International logistics is one of the most important industries in the world. He is in charge of moving all the goods in the world so that people can have access to everything they need and want. Around 90% of global trade is carried out through maritime shipments, in which large volumes are handled. Thus, while international trade continues to grow, ports have no choice but to grow and work on their efficiency to meet demand. The volume of commercial exchange will continue to increase, that\'s for sure. In just 5 years, the average annual volume of the top 10 ports in the world went from 20.34 to 22.40 million TEU (unit of measurement of a container of 20 feet). So, which ports managed to locate in this top 10? It is easy to see that most of the top 10 container ports are located in China (70%) and that the ten are all in Asia. So it is not uncommon to see that freight passes mainly through the South China Sea. This country has become the king of maritime shipments worldwide in the last decade. About two-thirds of the container trade passes through at least one Chinese port or ports that are financed by China. After seeing this ranking, it is not easy to believe that just over 10 years ago, in 2006, only 3 of the top 10 ports in the world were located in China (Hong Kong, Shanghai and Shenzhen). This shows how things can change when the market evolves towards new trends. This also applies to other aspects, such as digitization, since those who are really taking advantage will be those who will be leading the market in a short time. That is why all the players in the logistics industry should seek to keep up with the inevitable digital revolution in the industry.', 'aprojects-news-01.jpg', 0, '2020-01-24 21:50:06'),
(24, 20, 'December', ' TRADENEWS', 'THE WTO SHOWS THE PROGRESS OF PROTECTIONISM IN THE G20', '  According to the World Trade Organization, this value is the second highest since the May 2012 G20 trade monitoring report began to include data on the value of trade covered (the highest mark of US $ 480,900). it was in the previous period). A few days before the Summit of the G20 Heads of State (they will meet in Osaka, Japan, next Friday and Saturday), the WTO published the 21st surveillance report detailing that the G20 economies implemented 20 new measures of restriction on trade, including tariff increases, import prohibitions and new customs procedures for exports. When less is more The paper clarifies that while it is true that in the last period fewer measures were introduced than in previous periods, \"the scale of these measures is much greater in terms of their commercial coverage and the level of tariffs imposed\". \"This report provides additional evidence that turbulence generated by current trade tensions continues, and new trade restrictions have affected trade flows at a historically high level,\" said WTO Director-General Roberto AzevÃªdo. The official, who will participate in the G20 Summit in Japan, called on the Group\'s economies to collaborate urgently in mitigating trade tensions. Who are they The G20, brings together the main industrialized and emerging countries of the planet (19 countries and the European Union), which account for two thirds of the world population, 80% of trade and 85% of the wealth produced. The member countries are USA, China, Japan, Germany, United Kingdom, France, India, Brazil, Italy, Canada, South Korea, Russia, Australia, Mexico, Indonesia, Turkey, Saudi Arabia, Argentina and South Africa. The latest WTO report makes it clear that the trade war that has the main protagonists of the United States and China - and that includes the exchange of tariff restrictions and mirror measures - has an impact on the entire global economy.', 'aprojects-news-900.jpg', 0, '2020-01-24 21:51:47'),
(25, 14, 'January', ' FINANCIAL TIMES ', 'HOW WILL THE WORLD CHANGE IN 2020?', 'The FT\'s US managing editor Peter Spiegel, Moscow bureau chief Henry Foy, chief foreign affairs commentator Gideon Rachman and Asia editor Jamil Anderlini give their predictions for the coming year and discuss the threats to the liberal world order.', 'DtO80SG3-fs', 1, '2020-01-24 21:54:05'),
(26, 17, 'January', 'TRADENEWS', 'THEY ANTICIPATE A MODERATE GROWTH OF THE GLOBAL CONTAINER MOVEMENT IN 2020', '  The English consulting firm specializing in the maritime industry, Drewry, said the global container movement during 2020 will remain \"weak\" even \"despite the positive momentum of the Phase 1 trade agreement signed between the United States and China.\" As indicated in his latest Container Forecaster report, Drewry expects the global container operation to grow 3.3% in 2020, one point above the performance recorded in 2019. \"A quick and friendly end to the trade dispute between the United States and China has the potential to boost the global economy,\" said the consultant, after suggesting a more prudent approach to its immediate effects on maritime trade. Impossible to solve \"There are a number of differences that are apparently impossible to resolve,\" said Simon Heaney, manager of the company\'s Containers unit. \"It is a step in the right direction - he added - that eliminates a layer of uncertainty, but as with the previous truces, the foundations are weak and there is still a reasonably high possibility that hostilities will resume,\" he reflected. Indeed, the report warns of the imminent risk of imposition of protectionist measures by the United States in relation to automobiles and their parts coming from Europe, one of the most relevant segments of container trade on transatlantic routes. Oversupply While the consultant is confident that 2020 will see a growth in demand â€œfaster than in 2019â€, it also projected â€œa slight increase in overcapacity (from the supply of winery), higher rates (including bunkers) than in 2019 and a small reduction in the annual (already low) profits of carriers â€. Along the same lines, they suggested that shipping companies should not assume that trade flows with China will resume the same pace as they existed before the trade war with the United States.', 'aprojects-news-899.jpg', 0, '2020-01-24 21:55:07'),
(27, 18, 'January', ' PORTAL PORTUARIO ', 'USA: JAXPORT AND OTHER FLORIDA PORTS INNOVATE IN THE USE OF ALTERNATIVE FUELS ...', '  A report published by the Florida Ports Council shows that seaports and industry partners are investing in innovations to be more efficient and effective, including the implementation of ecological, less expensive and nationally produced liquefied natural gas (LNG) \"With more than a billion dollars in LNG investments in Jacksonville alone, there is no doubt that Florida is the state for LNG, both as fuel and type of cargo,\" said Eric Green, CEO of Jaxport, adding that \"the opportunity it is just beginning and it is an exciting time for our industry and our community â€ As the International Maritime Organization demands and applies more stringent regulations on air quality for port operations and sea vessels worldwide, there is a greater demand for alternative fuels in the national and global transport industry, according to the Study of Alternative Fuels .... Jaxport tiene la mayor operaciÃ³n de abastecimiento de GNL en un puerto de Estados Unidos, que incluye las instalaciones de JAX LNG y Eagle LNG Crowley Maritime puso en lÃ­nea su segundo barco propulsado con GNL en la Terminal MarÃ­tima Talleyrand de Jaxport en 2019. Combinado con los buques propulsados por GNL operados por TOTE Maritime Puerto Rico, cuatro buques propulsados por GNL tienen puerto de origen en Jaxport. \"The rapid expansion of the natural gas industry and the alternative fuel market provides an exciting opportunity for Florida\'s seaports to expand their use of natural gas, creating economic and environmental benefits for the state,\" said Doug Wheeler, president and Executive Director of the Florida Ports Council.', 'aprojects-news-898.jpg', 0, '2020-01-24 21:56:16'),
(28, 23, 'January', ' SHIP & BUNKER ', 'CRUDE DOWN NEARLY 3% AS POTENTIAL ECONOMIC IMPACT OF CHINA CORONAVIRUS SPOOKS TRADERS...', 'Travel activity could be particularly affected, says Goldman.....  ', 'aprojects-news-897.jpg', 0, '2020-01-24 21:57:19'),
(29, 23, 'January', ' SHIP & BUNKER ', 'FEATURE: VLSFOS - THE CONCERNING FUEL MANAGEMENT ISSUES SO FAR....', 'VPS gives background and presents three real-world case studies where ships have encountered problem VLSFO fuel....', 'aprojects-news-896.jpg', 0, '2020-01-24 21:58:40'),
(30, 23, 'January', 'Ship & Bunker', 'CONCERN FOR CHINESE CORONAVIRUS ARRIVES AT THE PORT OF VALPARAÃSO ...', 'Concern for the Chinese coronavirus reached the Port of ValparaÃ­so and, proof of this, is that regional health authorities will attend the precinct of the regional capital of Buenos Aires to deliver information to local stevedores .... Although the presence of the disease has not yet been detected in Chile, staff of the Regional Ministry of Health (Seremi) - as has happened on other occasions for similar cases - will visit the facility that is a vulnerable point to be a door of entry of goods and people to the country ....  ', 'aprojects-news-895.jpg', 0, '2020-01-24 21:59:45'),
(31, 23, 'January', 'Ship & Bunker', 'THE PORT OF VANCOUVER â€” WHAT DRIVES CANADAâ€™S BUSIEST GATEWAY', '  Itâ€™s no accident that Vancouver, British Columbia, is consistently ranked one of the â€œmost livableâ€ cities in the world. Itâ€™s surrounded by exceptional natural beauty. Nestled between the Pacific Ocean and the Rocky Mountains, itâ€™s cooler in the summer and warmer in the winter than the rest of Canada. Also, a strong economy, rich cultural diversity, and solid infrastructure, all contribute to making the city a great place to live and work. Central to Vancouverâ€™s vitality is its port. The tourist that pour in on cruise lines â€” 1 million passengers are expected in 2019 â€” are probably blissfully unaware that theyâ€™ve just passed through the busiest port in Canada. But not because of tourism: automobiles (400K cars annually), breakbulk (steel, lumber, machinery, etc.), bulk (grain, chemicals, petroleum, etc.), and containerized cargo account for the lionâ€™s share of traffic. Worldwide, the Port of Vancouver ranks 47th, according the JOC.com Top 50 list[1]. On this blog nowthatslogistics, we ranked it the 7th busiest port in the Americas region (North and South America combined), based on 2016 numbers. But 3.3M TEUs of cargo in 2017 would move it up two positions, just behind Santos, Brazil. The port generates 115,000 Canadian jobs (49,000 work directly for the port, the balance are indirect and induced jobs), and adds $18.8B to Canadaâ€™s GDP, according to a 2016 economic impact study[2]. Last year, the value of the goods handled by the port exceeded $200B.', 'aprojects-news-894.jpg', 0, '2020-01-24 22:00:52'),
(32, 23, 'January', 'Ship & Bunker', 'AMMONIA-POWERED FUEL CELL PROJECT RECEIVES â‚¬10 MILLION OF EU FUNDING', 'The ship will be able to run on green ammonia for 3,000 hours per year after the system is installed.  ', 'aprojects-news-893.jpg', 0, '2020-01-24 22:01:38'),
(33, 24, 'January', 'Trade News ', ' The dredging positioned Ecuador in the port club suitable for 14,000 TEU ships', 'Ecuador took another step to position itself in global supply chains as an alternative on the west coast of South America.\r\nLast week, Guayaquil was one of the Pacific ports that proved to be in a position to receive the largest vessel that so far stood at ports on the west coast: the APL Esplanade, 368 meters long and 52 wide.\r\nThe record entry for Ecuador was not only possible due to the extension of the pier carried out by the Port Terminal of Guayaquil (TPG), but also for the opening, deepening and maintenance works of the 93 km long entrance channel, carried out in 2019 by the Belgian company Jan de Nul.', 'aprojects-news-892.jpg', 0, '2020-01-25 00:57:56'),
(34, 24, 'January', 'TRADENEWS', ' What is the cost of zeroing carbon emissions on ships', '  The shipping industry, on which more than 90% of global merchandise trade depends, faces an expensive challenge: at least $ 1 trillion in infrastructure investment to mitigate the environmental impact.\r\nAnd the world merchandise trade will have to follow this type of global initiatives very closely because, ultimately, it will be the cost of the transition.\r\nAccording to the International Maritime Organization (IMO), shipping must reduce the amount of greenhouse gases emitted in 2008 by 2050 by at least 50%.\r\nZero emission\r\nAchieving â€œzero emissionâ€ of carbon will require a transition of proportions, ranging from the production of new fuels to the construction of ships with cleaner engines, the cost of which is estimated at 1 trillion dollars according to calculations of the Getting to Zero Coalition , an organization of 90 companies committed to reducing the effects of climate change.\r\nThe report highlights that halving ship emissions by 2050 will involve annual investments of between 50 and 70 billion dollars for the next 20 years.\r\nThe total \"decarbonization\" of the merchant fleet will require investments of up to US $ 400,000 million over the next 20 years.', 'aprojects-news-891.jpg', 0, '2020-01-25 01:02:52'),
(35, 24, 'January', 'Ship & Bunker', 'Coronavirus May Cause \'Short-Term Headwinds\' for Tanker Market: Analyst', ' The consultancy cited the SARS epidemic in 2003 in analysing the potential impact on the tanker market if the virus spreads further. ', 'aprojects-news-890.jpg', 0, '2020-01-25 01:07:04'),
(36, 27, 'January', 'Trade News ', 'CSAV leaves the vehicle business to focus only on containers', 'The Chilean maritime CSAV (South American Steam Company), decided to leave the vehicle transport and rolling cargo segment.\r\n\r\nCSAV, which recently increased its shareholding by 30% in the German shipping company Hapag-Lloyd, set aside the Ro-Ro business during the first half of the year, according to the specialized site Splash247.\r\n\r\nAccording to the publication, management made the decision to concentrate fully on the container business.\r\n\r\nCSAV has been reducing its exposure in the Ro-Ro segment in recent years and currently has only two such vessels in operations, chartered to Zodiac Maritime.  ', 'aprojects-news-889.jpg', 0, '2020-02-01 15:48:28'),
(37, 28, 'January', 'Trade News ', 'The dredging positioned Ecuador in the club of ports suitable for 14,000 TEU ships', 'Ecuador took another step to position itself in global supply chains as an alternative on the west coast of South America.\r\n\r\nLast week, Guayaquil was one of the Pacific ports that proved to be in a position to receive the largest vessel that so far stood at ports on the west coast: the APL Esplanade, 368 meters long and 52 wide.\r\n\r\nThe record entry for Ecuador was not only possible due to the extension of the pier carried out by the Port Terminal of Guayaquil (TPG), but also for the opening, deepening and maintenance works of the 93 km long entrance channel, carried out in 2019 by the Belgian company Jan de Nul.  \r\n\r\nDraft\r\n\r\nThe Esplanade entered with a draft of 10.5 meters. Until a year ago, the depth limit was 9.75 meters, which made the entry of this 14,000 TEU vessel, which connects services between Asia and the Americas, unfeasible.\r\n\r\nAt the beginning of 2019, the dredging of the Los Goles pass was tendered in Ecuador, a rocky fund whose opening was concessioned to Jan de Nul, also responsible for 25 years of channel maintenance, an investment of US $ 100 million on behalf of the concessionaire Recover with toll collection.\r\n\r\nSources from the Belgian company highlighted in dialogue with Trade News that the dredging \"was done in record time.\"\r\n\r\nâ€œBetween January and October 2019, what had to be done within two years was achieved. That is, the opening and a depth of 12.5 meters, â€they said.', 'aprojects-news-888.jpg', 0, '2020-02-01 15:53:08'),
(38, 29, 'January', 'Trade News ', 'The WTO earns two extra lives', 'The president of the United States and the Director General of the WTO held a meeting of about 45 minutes.\r\n\r\n\"It was mostly an explanatory talk in which AzevÃªdo told Trump what the WTO is and what it does,\" said a source working in Geneva.\r\n\r\nInformal treat\r\nWith the same informality with which the meeting was organized, Trump invited the Brazilian diplomat to participate in the press conference he would give next.\r\n\r\nThe US president did not miss the opportunity to criticize the agency. Referring to the reform he is promoting, he said they are discussing something \"drastic\" since the WTO \"has been very unfair to the US. for many, many years. â€\r\n\r\nâ€œWe are talking about a completely new structure to reach agreements. We have to do something, â€he said before commenting that AzevÃªdo will travel to the US For the negotiations.  ', 'aprojects-news-887.jpg', 0, '2020-02-01 15:55:32'),
(39, 29, 'January', 'Trade News ', 'Climate change exists and is paid with lives and money', 'The 2019 almanac of climate change is tremendous. Tremendously expensive. It is paid with money, but also with lives.\r\n\r\nAs Tanya Steele, executive director of WWF United Kingdom (World Wide Fund for Nature) warned, we are the first generation to know that we are destroying our planet and the last to do something about it.\r\n\r\nSome signs seem encouraging. For example, that at the Annual Meeting of the World Economic Forum (WEF) held in Davos, Switzerland, until tomorrow, the issue is one of the central issues.\r\n\r\nFor three days, in the middle of the Alps, the call brings together more than 3000 world leaders in politics, government, civil society, academia, arts and culture, and the media.\r\n\r\nThe president of the United States, Donald Trump, and the Swedish activist Greta Thunberg crossed this week.  ', 'aprojects-news-886.jpg', 0, '2020-02-01 16:01:39'),
(40, 30, 'January', 'PortalPortuario', ' The United States lifts sanctions on COSCO Shipping Tanker ...', 'The United States lifted sanctions against one of COSCO\'s oil units, the Treasury Department reported, partially revoking the punishment against the Chinese giant for alleged Iranian oil transportation ....  \r\n\r\nLast September, the administration of President Donald Trump put two COSCO Dalian units on the \"blacklist\", which raised freight costs worldwide at record prices ....\r\n\r\n\r\nThe US Department of the Treasury said it removed COSCO Shipping Tanker (Dalian) Co from its sanctions list, which did not happen with COSCO Shipping Tanker (Dalian) Seaman & Ship Management Co Ltd ....', 'aprojects-news-885.jpg', 0, '2020-02-01 16:08:12'),
(41, 31, 'January', 'Ship & Bunker', ' Fourth direct weekly loss of crude oil, as analysts predict the devastating impact of coronavirus', 'Meanwhile, Jim Kramer says that young investors no longer care about fossil fuels.  \r\n', 'aprojects-news-884.jpg', 0, '2020-02-01 19:40:19');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
