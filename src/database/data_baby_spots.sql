INSERT INTO usuario (nome_completo, email, senha) VALUES
('João Dutra', 'j.dutra@hotmail.com', 'joao123'),
('Zamira Duarte', 'z.duarte@gmail.com', 'zamira123'),
('Alaquias Silva', 'a.silva@outlook.com', 'silva123'),
('Herméias Souza', 'h.souza@bol.com.br', 'souza123'),
('Ronaldo Caféow', 'r.cafeow@uol.com.br', 'roooonaldinho123');

INSERT INTO estabelecimento (nome, id_usuario, data_cadastro, cep, rua, numero, complemento, bairro, cidade, estado) VALUES
('Restaurante Rua da Mooca', 5, '2017-12-12', '79061-050', 'Rua da Mooca', '1460', 'Prédio', 'Mooca', 'São Paulo', 'SP'),
('Canto do Cupim', 1, '2017-12-05', '79003-027', 'Avenida Ricardo Brandão', '230', 'Prédio', 'Chácara Cachoeira', 'Campo Grande', 'MS'),
('Gaúcho Gastão', 2, '2017-12-05', '79040-040', 'Rua Dr. Zerbini', '38', 'Casa', 'Chácara Cachoeira', 'Campo Grande', 'MS'),
('Província di Salerno', 2, '2017-10-11', '30150-330', 'R. Maranhão', '18', 'Casa', 'Santa Efigênia', 'Belo Horizonte', 'MG'),
('Tradição de Minas', 3, '2016-09-03', '30730-430', 'R. Monte Líbano', '119', 'Casa', 'Padre Eustáquio', 'Belo Horizonte', 'MG'),
('Fasano', 3, '2016-04-10', '22420-000', 'Av. Vieira Souto', '80', 'Casa', 'Ipanema', 'Rio de Janeiro', 'RJ'),
('Skylab', 1, '2017-08-20', '22070-001', 'Av. Atlântica', '3264', 'Casa', 'Copacabana', 'Rio de Janeiro', 'RJ'),
('Outback Steakhouse', 5, '2017-01-23', '91340-001', 'Av. João Wallig', '1800', 'Casa', 'Iguatemi', 'Porto Alegre', 'RS'),
('Boteco Kabanas', 3, '2015-02-09', '74215-110', 'Rua Dr. Zerbini', '2693', 'Casa', 'St. Bueno', 'Goiânia', 'GO');


INSERT INTO estabelecimento_foto (id_est, url_imagem, data_cadastro) VALUES
(3, 'foto-estabelecimento-1.png', '2017-12-12'),
(4, 'foto-estabelecimento-2.png', '2017-12-05'),
(5, 'foto-estabelecimento-3.png', '2017-12-05'),
(6, 'foto-estabelecimento-4.png', '2017-10-11'),
(7, 'foto-estabelecimento-1.png', '2016-09-03'),
(8, 'foto-estabelecimento-2.png', '2016-04-10'),
(9, 'foto-estabelecimento-4.png', '2017-08-20'),
(10, 'foto-estabelecimento-3.png', '2017-01-23'),
(12, 'foto-estabelecimento-1.png', '2015-02-09');

INSERT INTO avaliacao (id_est, id_usu, descricao) VALUES 
(1, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),  
(2, 2, 'Test Nagłówek Il Test Intestazione. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat...'),  
(3, 3, 'Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc., li tot Europa usa li sam vocabularium. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. Omnicos directe al desirabilit? de un nov lingua franca: on refusa continuar payar custosi traductores. It solmen va esser necessi far uniform grammatica, pronunciation e plu sommun paroles.'),  
(5, 3, 'Un título tentativo, Ma quande lingues coalesce, li grammatica del resultant lingue es plu simplic e regulari quam ti del coalescent lingues. Li nov lingua franca va esser plu simplic e regulari quam li existent Europan lingues...'),  
(2, 2, 'Lorem ipsum dolor sit amet diam ut lorem. In tristique senectus et enim. Sed justo fringilla non, dolor. Nullam viverra justo. Praesent vitae massa in faucibus a, laoreet vel, ipsum. Donec erat volutpat. Nunc justo elit, pulvinar at, nibh. Quisque eu lectus nec nunc commodo nec, pede. Mauris nec libero. Nam libero quis nibh ut sapien. Fusce blandit a, lorem. Suspendisse eget dolor gravida sem. Integer adipiscing. Vestibulum dignissim a, gravida tellus tortor, hendrerit wisi. Aliquam vel lorem. Mauris imperdiet, urna mauris, consectetuer congue eleifend. Nulla gravida vel, dui. Cras ut ante. Mauris luctus laoreet. Nam ullamcorper lorem. Aliquam erat metus dolor, porttitor egestas. Proin imperdiet quis, justo. Fusce venenatis quis, congue ac, urna. Vestibulum ornare tortor et augue. Nulla pellentesque accumsan. Quisque consectetuer congue arcu elementum vitae, cursus dolor placerat sagittis non, tristique senectus et malesuada leo vel urna eu lobortis augue. Nulla facilisi. Nam placerat a, gravida iaculis ornare. Nam molestie. Phasellus lacinia neque. Donec condimentum sed, luctus tellus hendrerit wisi. Praesent wisi at ante. Proin id erat volutpat. Nam sed justo. Sed lacinia, risus velit, rhoncus nunc. '),
(1, 5, 'finfoot cusparine antipathetic countenancer geosyncline beglerbeg hypobranchiate Ermanaric dronepipe cocitizen hostship grantor aswing geostatic islandless Cytosporina cloy inextensible armed Hepatica befountained commemorativeness hatherlite Apalachee'),
(3, 11, 'assuredly egotist bushelful coresort beastie barrulee brier desegmented deducibleness catadromous exserted fort athletism endeared Gryllotalpa Eskimoic Germanical counterlove ayah interglobular bedevilment cataracted caryopsis emulant'),
(0, 10, 'grallatorial bibliosoph calyptro entirely consolidated closen brandywine inconscient folletage indigenousness Ephraitic heredofamilial electropneumatically confirmee interlaminar Capriola becurtained elapine executancy barlock guffin irreportable Alumel dikelocephalid'),
(2, 9, 'deferentitis binman Eclectics diplokaryon harvestless debarbarization intercommuner bimonthly entomere extratropical ambulative bolter areological ischiadicus examinability discerption Circaeaceae carbolxylol ethylamide cookhouse bodicemaker insipient ghostism falconlike'),
(4, 8, 'desition Celluloid arrentation headboard coign arsnicker Ammodytes hypercube horizontical extracutaneous abridge gerefa heteropathic bash holethnos Irrisoridae dermophytic collarbird climatometer buildable bangiaceous barretter apothegmatic inviolability'),
(1, 10, 'introit freewill censureless achordal adenomatous caser convexed adamellite intersect garlandlike daymare glomerulonephritis grave heredosyphilitic apagogical daiker dispossession hamatum caudata cheerly antlerless enstate formagen actinogram'),
(1, 9, 'ependyme detest extent hedgeless drupetum focometer Chordeiles gitoxigenin bilsh galvanotropic Crossopterygii hypospray existence indemoniate esophagoscopy aire embraceable coelelminth adjudicate assented hypoendocrinism brittle canada Cynognathus'),
(3, 8, 'fermentativeness coxarthropathy ethography collatee disdainfulness discreation hyporhachis holotony divellicate Byzantine decretory appetizement exigency bijugular descension Homoean chondropharyngeus enzootic airmail implosion antroscopy inarticulacy helianthic albarium'),
(2, 7, 'bumblepuppy hippopotamian beloeilite feedbin erosely bouche ave epistasis gastroadenitis disproportionalness Francophile bibble cavernicolous electrotechnology Cestidae chronophotography isatic homophyllous instantaneousness bahnung coccyges addleheaded hematomphalocele Arctamerican'),
(4, 5, 'Basilidianism entosternum appleblossom cacophonical discredence Excipulaceae equidimensional columbin autosymbolically includer guereza bifistular intersterility discographical hamleteer inquietly hoodwort clavacin embolus collectivism hermidin cuttingness eremitish ganglioma'),
(3, 5, 'bimanual fusil bedust dacryocystoblennorrhea disadventure Babuma forewarm Almira gentilitian autodifferentiation byssal arthrogryposis cerago choop defyingly glochidia costicervical funicule atlantal artistic homochiral brilliantly dracontites Haidan'),
(4, 11, 'eelspear anoplocephalic actinautographic bloodstroke chard banally goffered faced appinite impoliteness exergue aflush darnation analgesia hydroxy Fraxinus canarin illiberal gin botfly eutherian bredi flabby antarctical'),
(2, 11, 'difformity Eumenidae dyarchical cavil hallowed besmirch exuberantly gumptious famelessness Duralumin indocibleness governessy absorptivity acanthion girder acutograve hydrosulphureted gradefinder introgressive ceroplasty charry calyptra bucketer corporation'),
(3, 6, 'afterage chinche agaricaceae boarwood hydrogenation hanse ichor disprobative hyposthenuria definiteness isolative hymenopterology duplexity Athyridae Docetically florigen gersum introvertive epistemolog amasser imprecant goalee entomological Cursa'),
(0, 6, 'chromatophobia aglimmer betwixt bequeather chidingness Apocynum inorganization continuedness ingather hydroxyacetic epiphanous faulty divers imperially conus advisive covenanted basivertebral godless binarium emplacement formulism conductance insurrectionism'),
(3, 7, 'Centauridium cabureiba fluidly antisialic brutely aperispermic acrochordon anandrarious egging imagistic eudiometrically flattery dialyzator bronchoplasty iconoclast chitterling ashery angustifoliate aquacade canthal demipomada intercollegiate delineator hydrocystic'),
(3, 11, 'dulcification buaze Chromididae cantharidate clearheadedness dewanee adfix gagee Griff charlatanically cymoid elkwood freely chirographer copatain extrasensory estruate feucht allower honeysuckle inoculator dihedron baton henwoodite'),
(3, 11, 'hundredwork deferrization giggler Antaimerina inductive clanfellow Eranthis embossment counterintrigue autophagia apprense irregularly coabound celery bibliomanianism feu admixture historial ctenidial archiblast fiacre bedded angioleucitis cataloguist'),
(1, 3, 'hydrotechnic eclecticism Hamelia concluding Causus bilaterally Boxerism apogeal accused isoagglutinative Cuculi adephagia accountably anesthetic fraternal exallotriote heliogravure aboon Iranic coleopteroid incoincident incalculableness interopercular Eleusine'),
(3, 6, 'infield affectional druidess incompactly entepicondylar emotionize esophagectomy Etchimin centuplicate aregeneratory gastrocolotomy assertable cardiagraph cholesterol amarevole Baluchitherium Algonquin isocyanate auletris collegialism bottomlessly dithionic cavilingness camstane'),
(0, 3, 'grossart banking dolorous benzophloroglucinol forint crickle erotogenesis defect brachyfacial clifflike incredulity endodermic intraperiosteal disalign driftless chaka inanimately hellhole Hamadan animadversional ferritungstite Atnah Chamkanni galvanotactic'),
(1, 12, 'antacid deuteroscopy arthrocarcinoma glomerular ellagic afterhope bardling clarin ectobatic calciphyre expire hotelization hydrothorax chiefish dawdle funiculitis encyclopedial atrorubent anchusin autogenetic biretta irregardless Chaucerianism biternate'),
(4, 6, 'galling gonosomal alterer Gromia gridelin ironweed antiwedge acclinate coproprietor diaereses Bahima Chalukyan hyle Guarnieri Deidesheimer intercolumniation hotspur autography Hispa gem chanter druggister homoousia gandurah'),
(0, 9, 'emboscata appetitional inferiorize drapery crawley aliunde heimin Antikamnia balonea bloodshed fellage flowerwork incondensible digestibly illoyal bronzen Bellerophontidae calibration disk incommensurableness equison autophotometry angelize cephalotribe'),
(4, 7, 'heliograph irreticent commensurability Ancyloceras homogeneal intentively freeway impoundment bluebottle ectoplastic guerdonable engastrimythic abasement excremental baggit gatetender bitanhol accordionist catchall angostura didelphian Derris benedictionary cytomorphosis'),
(0, 11, 'hologastrular Babbie combing hyponychial consumpted endobronchially brackmard emblossom carving guillemot gradiometric hackney cosse bhut Celastrus arduous foreword fearingly artware flankwise bianco bumpkinly dentiferous Cunas'),
(3, 8, 'antipapacy Gilbertian earshot disheartening begohm hunkers acouasm bisilicate Augustus ileostomy ghizite darned appendiculated assist broguery Blephillia hermaphroditism hepatite fussily hyperpigmentation desmid angster appropriative actinomorphic'),
(3, 5, 'bloodybones informal expressionist gopura hisingerite Fellatah gigsman illustrational dyemaker enchest Ascabart fraud hekteus Actinidia insupportably humify inquirable aerobic demographically bayard importance curber infrastapedial Betulites'),
(0, 10, 'calciclase asymptotic Frankify azotometer hemodiagnosis Hottentotic electrogilt interstapedial breakwater exarchate chinquapin counterpoint actin deviser haziness beslubber artiphyllous canephor conscionable hinderingly effeminate diedric Epimenidean hoopoe'),
(2, 4, 'Guesdist gonosphere Bim freshness Aechmophorus Adam feretrum dentex Coleosporium chromatype alliable homogonous erogenetic chun hearthward Abnaki arborical eristically epiklesis gynecocrat brier gavialoid antiserum anis'),
(1, 9, 'analepsis irreversibly infringer Guarani gregal Dendrocolaptidae acheirus galuth biostatical bismutoplagionite disintegratory clogmaking damn disrobe baculiform dormilona digitizer cornfloor aleuroscope caryopilite Brunnichia gris gasman deficiently'),
(1, 7, 'braggartism Ervum diaspirin helsingkite aquilege haustorium hyoides birdweed disembargo intertill instigatrix electrothanasia hydrarch burdock demibuckram eaglet floricin dispel hymnographer corseting feltlike dasheen epithalamial inhospitable'),
(1, 8, 'hysterorrhaphy hutukhtu constrainedly bridgewards Achyranthes introvolution hypotonia bauckiebird ctetology crash errant groomling caraibe interwreathe chorioid breakfast humorize interosculant beshrew grozet abacinate encyclic coralline behoot'),
(3, 10, 'cutocellulose exultingly Cantorian atropine isohyetal apodous hyperfastidious badland flecklessly Elaeagnaceae congressionalist amoeboid antiforeignism amateurism cuirass expiation gaudless Achatinidae hippocrepian hoghood heedy entermete airway amatol'),
(1, 5, 'huiscoyol geta homotactic horseway courtiership coexpand depullulation fantasist Elamitic edriophthalmatous ecostate erbium heterogeneal disreputably dirigibility feigningly chancewise exaltedly gladden anacrustically equirotal carotin fiduciarily gatelike'),
(0, 4, 'enchantingness diversiform gharry indescriptive cadger apocalypt ahimsa coracle anticous birdling hieroglyphical expensive erogeny glutenin Gurkha chlorine ast catechumenal Gaussian enlace Gyarung featherhead infinitary gallanilide'),
(0, 7, 'incogitability Arctalian enemy creatorhood friedcake flouter alcoholemia bename decry arabesque dragade Devon hydroaviation archfelon apostrophation histotherapy coemanate isomorphic ateliosis Exonian intercoccygeal Downingia gratify debruise'),
(4, 3, 'idiorrhythmic caique benzalphthalide interlocker coercibility harpula geologian autoanticomplement coadaptation Eskimauan gastroschisis disinfectant beerpull amniotome diaplexal automobilism circumspectively faradmeter cardroom harl hyaloandesite bourette choragion banty'),
(3, 9, 'deceptiveness handstand humoristical fireworm athenor exiguity chukar adverbially counterenamel Inghamite inevitable interresponsibility irreticence Argyle brazilein demilion balantidiosis anthropomorphous doughlike cytoblastema diallagic biconcavity Elmer azoxyphenetole');


INSERT INTO servico (nome, classe) VALUES 
()
()
()
()
()

INSERT INTO avaliacao_servico (id_ava, id_ser, pontuacao) VALUES 
(28 , 3, 2),
(39 , 3, 1),
(5 , 9, 5),
(20 , 4, 5),
(41 , 11, 4),
(39 , 12, 2),
(8 , 13, 2),
(2 , 8, 5),
(41 , 13, 5),
(33 , 11, 3),
(11 , 1, 2),
(21 , 7, 4),
(14 , 13, 5),
(28 , 9, 4),
(25 , 6, 1),
(5 , 11, 2),
(18 , 12, 5),
(12 , 10, 2),
(1 , 6, 5),
(7 , 1, 4),
(28 , 1, 1),
(28 , 8, 1),
(14 , 6, 5),
(36 , 8, 4),
(12 , 13, 5),
(37 , 4, 3),
(42 , 9, 5),
(37 , 13, 2);
INSERT INTO estabelecimento_servico (id_est, id_ser) VALUES 
()
()
()
()
()
