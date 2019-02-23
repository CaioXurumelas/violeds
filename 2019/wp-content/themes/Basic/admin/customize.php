<?php
/**
 * Basic Customizer functionality
 *
 * @package Basic
 * @since Basic 1.0
 */

/**
 * List of Google Fonts
 */
$google_fonts = array(
	"ABeeZee" => "ABeeZee",
	"Abel" => "Abel",
	"Abril Fatface" => "Abril Fatface",
	"Aclonica" => "Aclonica",
	"Acme" => "Acme",
	"Actor" => "Actor",
	"Adamina" => "Adamina",
	"Advent Pro" => "Advent Pro",
	"Aguafina Script" => "Aguafina Script",
	"Akronim" => "Akronim",
	"Aladin" => "Aladin",
	"Aldrich" => "Aldrich",
	"Alegreya" => "Alegreya",
	"Alegreya SC" => "Alegreya SC",
	"Alex Brush" => "Alex Brush",
	"Alfa Slab One" => "Alfa Slab One",
	"Alice" => "Alice",
	"Alike" => "Alike",
	"Alike Angular" => "Alike Angular",
	"Allan" => "Allan",
	"Allerta" => "Allerta",
	"Allerta Stencil" => "Allerta Stencil",
	"Allura" => "Allura",
	"Almendra" => "Almendra",
	"Almendra Display" => "Almendra Display",
	"Almendra SC" => "Almendra SC",
	"Amarante" => "Amarante",
	"Amaranth" => "Amaranth",
	"Amatic SC" => "Amatic SC",
	"Amethysta" => "Amethysta",
	"Anaheim" => "Anaheim",
	"Andada" => "Andada",
	"Andika" => "Andika",
	"Angkor" => "Angkor",
	"Annie Use Your Telescope" => "Annie Use Your Telescope",
	"Anonymous Pro" => "Anonymous Pro",
	"Antic" => "Antic",
	"Antic Didone" => "Antic Didone",
	"Antic Slab" => "Antic Slab",
	"Anton" => "Anton",
	"Arapey" => "Arapey",
	"Arbutus" => "Arbutus",
	"Arbutus Slab" => "Arbutus Slab",
	"Architects Daughter" => "Architects Daughter",
	"Archivo Black" => "Archivo Black",
	"Archivo Narrow" => "Archivo Narrow",
	"Arimo" => "Arimo",
	"Arizonia" => "Arizonia",
	"Armata" => "Armata",
	"Artifika" => "Artifika",
	"Arvo" => "Arvo",
	"Asap" => "Asap",
	"Asset" => "Asset",
	"Astloch" => "Astloch",
	"Asul" => "Asul",
	"Atomic Age" => "Atomic Age",
	"Aubrey" => "Aubrey",
	"Audiowide" => "Audiowide",
	"Autour One" => "Autour One",
	"Average" => "Average",
	"Average Sans" => "Average Sans",
	"Averia Gruesa Libre" => "Averia Gruesa Libre",
	"Averia Libre" => "Averia Libre",
	"Averia Sans Libre" => "Averia Sans Libre",
	"Averia Serif Libre" => "Averia Serif Libre",
	"Bad Script" => "Bad Script",
	"Balthazar" => "Balthazar",
	"Bangers" => "Bangers",
	"Basic" => "Basic",
	"Baskerville" => "Baskerville",
	"Battambang" => "Battambang",
	"Baumans" => "Baumans",
	"Bayon" => "Bayon",
	"Belgrano" => "Belgrano",
	"Belleza" => "Belleza",
	"BenchNine" => "BenchNine",
	"Bentham" => "Bentham",
	"Berkshire Swash" => "Berkshire Swash",
	"Bevan" => "Bevan",
	"Bigelow Rules" => "Bigelow Rules",
	"Bigshot One" => "Bigshot One",
	"Bilbo" => "Bilbo",
	"Bilbo Swash Caps" => "Bilbo Swash Caps",
	"Bitter" => "Bitter",
	"Black Ops One" => "Black Ops One",
	"Bokor" => "Bokor",
	"Bonbon" => "Bonbon",
	"Boogaloo" => "Boogaloo",
	"Bowlby One" => "Bowlby One",
	"Bowlby One SC" => "Bowlby One SC",
	"Brawler" => "Brawler",
	"Bree Serif" => "Bree Serif",
	"Bubblegum Sans" => "Bubblegum Sans",
	"Bubbler One" => "Bubbler One",
	"Buda" => "Buda",
	"Buenard" => "Buenard",
	"Butcherman" => "Butcherman",
	"Butterfly Kids" => "Butterfly Kids",
	"Cabin" => "Cabin",
	"Cabin Condensed" => "Cabin Condensed",
	"Cabin Sketch" => "Cabin Sketch",
	"Caesar Dressing" => "Caesar Dressing",
	"Cagliostro" => "Cagliostro",
	"Calligraffitti" => "Calligraffitti",
	"Cambo" => "Cambo",
	"Candal" => "Candal",
	"Cantarell" => "Cantarell",
	"Cantata One" => "Cantata One",
	"Cantora One" => "Cantora One",
	"Capriola" => "Capriola",
	"Cardo" => "Cardo",
	"Carme" => "Carme",
	"Carrois Gothic" => "Carrois Gothic",
	"Carrois Gothic SC" => "Carrois Gothic SC",
	"Carter One" => "Carter One",
	"Caudex" => "Caudex",
	"Cedarville Cursive" => "Cedarville Cursive",
	"Ceviche One" => "Ceviche One",
	"Changa One" => "Changa One",
	"Chango" => "Chango",
	"Chau Philomene One" => "Chau Philomene One",
	"Chela One" => "Chela One",
	"Chelsea Market" => "Chelsea Market",
	"Chenla" => "Chenla",
	"Cherry Cream Soda" => "Cherry Cream Soda",
	"Cherry Swash" => "Cherry Swash",
	"Chewy" => "Chewy",
	"Chicle" => "Chicle",
	"Chivo" => "Chivo",
	"Cinzel" => "Cinzel",
	"Cinzel Decorative" => "Cinzel Decorative",
	"Clicker Script" => "Clicker Script",
	"Coda" => "Coda",
	"Coda Caption" => "Coda Caption",
	"Codystar" => "Codystar",
	"Combo" => "Combo",
	"Comfortaa" => "Comfortaa",
	"Coming Soon" => "Coming Soon",
	"Concert One" => "Concert One",
	"Condiment" => "Condiment",
	"Content" => "Content",
	"Contrail One" => "Contrail One",
	"Convergence" => "Convergence",
	"Cookie" => "Cookie",
	"Copse" => "Copse",
	"Corben" => "Corben",
	"Courgette" => "Courgette",
	"Cousine" => "Cousine",
	"Coustard" => "Coustard",
	"Covered By Your Grace" => "Covered By Your Grace",
	"Crafty Girls" => "Crafty Girls",
	"Creepster" => "Creepster",
	"Crete Round" => "Crete Round",
	"Crimson Text" => "Crimson Text",
	"Croissant One" => "Croissant One",
	"Crushed" => "Crushed",
	"Cuprum" => "Cuprum",
	"Cutive" => "Cutive",
	"Cutive Mono" => "Cutive Mono",
	"Damion" => "Damion",
	"Dancing Script" => "Dancing Script",
	"Dangrek" => "Dangrek",
	"Dawning of a New Day" => "Dawning of a New Day",
	"Days One" => "Days One",
	"Delius" => "Delius",
	"Delius Swash Caps" => "Delius Swash Caps",
	"Delius Unicase" => "Delius Unicase",
	"Della Respira" => "Della Respira",
	"Denk One" => "Denk One",
	"Devonshire" => "Devonshire",
	"Didact Gothic" => "Didact Gothic",
	"Diplomata" => "Diplomata",
	"Diplomata SC" => "Diplomata SC",
	"Domine" => "Domine",
	"Donegal One" => "Donegal One",
	"Doppio One" => "Doppio One",
	"Dorsa" => "Dorsa",
	"Dosis" => "Dosis",
	"Dr Sugiyama" => "Dr Sugiyama",
	"Droid Sans" => "Droid Sans",
	"Droid Sans Mono" => "Droid Sans Mono",
	"Droid Serif" => "Droid Serif",
	"Duru Sans" => "Duru Sans",
	"Dynalight" => "Dynalight",
	"EB Garamond" => "EB Garamond",
	"Eagle Lake" => "Eagle Lake",
	"Eater" => "Eater",
	"Economica" => "Economica",
	"Electrolize" => "Electrolize",
	"Elsie" => "Elsie",
	"Elsie Swash Caps" => "Elsie Swash Caps",
	"Emblema One" => "Emblema One",
	"Emilys Candy" => "Emilys Candy",
	"Engagement" => "Engagement",
	"Englebert" => "Englebert",
	"Enriqueta" => "Enriqueta",
	"Erica One" => "Erica One",
	"Esteban" => "Esteban",
	"Euphoria Script" => "Euphoria Script",
	"Ewert" => "Ewert",
	"Exo" => "Exo",
	"Expletus Sans" => "Expletus Sans",
	"Fanwood Text" => "Fanwood Text",
	"Fascinate" => "Fascinate",
	"Fascinate Inline" => "Fascinate Inline",
	"Faster One" => "Faster One",
	"Fasthand" => "Fasthand",
	"Federant" => "Federant",
	"Federo" => "Federo",
	"Felipa" => "Felipa",
	"Fenix" => "Fenix",
	"Finger Paint" => "Finger Paint",
	"Fjalla One" => "Fjalla One",
	"Fjord One" => "Fjord One",
	"Flamenco" => "Flamenco",
	"Flavors" => "Flavors",
	"Fondamento" => "Fondamento",
	"Fontdiner Swanky" => "Fontdiner Swanky",
	"Forum" => "Forum",
	"Francois One" => "Francois One",
	"Freckle Face" => "Freckle Face",
	"Fredericka the Great" => "Fredericka the Great",
	"Fredoka One" => "Fredoka One",
	"Freehand" => "Freehand",
	"Fresca" => "Fresca",
	"Frijole" => "Frijole",
	"Fruktur" => "Fruktur",
	"Fugaz One" => "Fugaz One",
	"GFS Didot" => "GFS Didot",
	"GFS Neohellenic" => "GFS Neohellenic",
	"Gabriela" => "Gabriela",
	"Gafata" => "Gafata",
	"Galdeano" => "Galdeano",
	"Galindo" => "Galindo",
	"Gentium Basic" => "Gentium Basic",
	"Gentium Book Basic" => "Gentium Book Basic",
	"Geo" => "Geo",
	"Geostar" => "Geostar",
	"Geostar Fill" => "Geostar Fill",
	"Germania One" => "Germania One",
	"Gilda Display" => "Gilda Display",
	"Give You Glory" => "Give You Glory",
	"Glass Antiqua" => "Glass Antiqua",
	"Glegoo" => "Glegoo",
	"Gloria Hallelujah" => "Gloria Hallelujah",
	"Goblin One" => "Goblin One",
	"Gochi Hand" => "Gochi Hand",
	"Gorditas" => "Gorditas",
	"Goudy Bookletter 1911" => "Goudy Bookletter 1911",
	"Graduate" => "Graduate",
	"Grand Hotel" => "Grand Hotel",
	"Gravitas One" => "Gravitas One",
	"Great Vibes" => "Great Vibes",
	"Griffy" => "Griffy",
	"Gruppo" => "Gruppo",
	"Gudea" => "Gudea",
	"Habibi" => "Habibi",
	"Hammersmith One" => "Hammersmith One",
	"Hanalei" => "Hanalei",
	"Hanalei Fill" => "Hanalei Fill",
	"Handlee" => "Handlee",
	"Hanuman" => "Hanuman",
	"Happy Monkey" => "Happy Monkey",
	"Headland One" => "Headland One",
	"Henny Penny" => "Henny Penny",
	"Herr Von Muellerhoff" => "Herr Von Muellerhoff",
	"Holtwood One SC" => "Holtwood One SC",
	"Homemade Apple" => "Homemade Apple",
	"Homenaje" => "Homenaje",
	"IM Fell DW Pica" => "IM Fell DW Pica",
	"IM Fell DW Pica SC" => "IM Fell DW Pica SC",
	"IM Fell Double Pica" => "IM Fell Double Pica",
	"IM Fell Double Pica SC" => "IM Fell Double Pica SC",
	"IM Fell English" => "IM Fell English",
	"IM Fell English SC" => "IM Fell English SC",
	"IM Fell French Canon" => "IM Fell French Canon",
	"IM Fell French Canon SC" => "IM Fell French Canon SC",
	"IM Fell Great Primer" => "IM Fell Great Primer",
	"IM Fell Great Primer SC" => "IM Fell Great Primer SC",
	"Iceberg" => "Iceberg",
	"Iceland" => "Iceland",
	"Imprima" => "Imprima",
	"Inconsolata" => "Inconsolata",
	"Inder" => "Inder",
	"Indie Flower" => "Indie Flower",
	"Inika" => "Inika",
	"Irish Grover" => "Irish Grover",
	"Istok Web" => "Istok Web",
	"Italiana" => "Italiana",
	"Italianno" => "Italianno",
	"Jacques Francois" => "Jacques Francois",
	"Jacques Francois Shadow" => "Jacques Francois Shadow",
	"Jim Nightshade" => "Jim Nightshade",
	"Jockey One" => "Jockey One",
	"Jolly Lodger" => "Jolly Lodger",
	"Josefin Sans" => "Josefin Sans",
	"Josefin Slab" => "Josefin Slab",
	"Joti One" => "Joti One",
	"Judson" => "Judson",
	"Julee" => "Julee",
	"Julius Sans One" => "Julius Sans One",
	"Junge" => "Junge",
	"Jura" => "Jura",
	"Just Another Hand" => "Just Another Hand",
	"Just Me Again Down Here" => "Just Me Again Down Here",
	"Kameron" => "Kameron",
	"Karla" => "Karla",
	"Kaushan Script" => "Kaushan Script",
	"Kavoon" => "Kavoon",
	"Keania One" => "Keania One",
	"Kelly Slab" => "Kelly Slab",
	"Kenia" => "Kenia",
	"Khmer" => "Khmer",
	"Kite One" => "Kite One",
	"Knewave" => "Knewave",
	"Kotta One" => "Kotta One",
	"Koulen" => "Koulen",
	"Kranky" => "Kranky",
	"Kreon" => "Kreon",
	"Kristi" => "Kristi",
	"Krona One" => "Krona One",
	"La Belle Aurore" => "La Belle Aurore",
	"Lancelot" => "Lancelot",
	"Lato" => "Lato",
	"League Script" => "League Script",
	"Leckerli One" => "Leckerli One",
	"Ledger" => "Ledger",
	"Lekton" => "Lekton",
	"Lemon" => "Lemon",
	"Libre Baskerville" => "Libre Baskerville",
	"Life Savers" => "Life Savers",
	"Lilita One" => "Lilita One",
	"Limelight" => "Limelight",
	"Linden Hill" => "Linden Hill",
	"Lobster" => "Lobster",
	"Lobster Two" => "Lobster Two",
	"Londrina Outline" => "Londrina Outline",
	"Londrina Shadow" => "Londrina Shadow",
	"Londrina Sketch" => "Londrina Sketch",
	"Londrina Solid" => "Londrina Solid",
	"Lora" => "Lora",
	"Love Ya Like A Sister" => "Love Ya Like A Sister",
	"Loved by the King" => "Loved by the King",
	"Lovers Quarrel" => "Lovers Quarrel",
	"Luckiest Guy" => "Luckiest Guy",
	"Lusitana" => "Lusitana",
	"Lustria" => "Lustria",
	"Macondo" => "Macondo",
	"Macondo Swash Caps" => "Macondo Swash Caps",
	"Magra" => "Magra",
	"Maiden Orange" => "Maiden Orange",
	"Mako" => "Mako",
	"Marcellus" => "Marcellus",
	"Marcellus SC" => "Marcellus SC",
	"Marck Script" => "Marck Script",
	"Margarine" => "Margarine",
	"Marko One" => "Marko One",
	"Marmelad" => "Marmelad",
	"Marvel" => "Marvel",
	"Mate" => "Mate",
	"Mate SC" => "Mate SC",
	"Maven Pro" => "Maven Pro",
	"McLaren" => "McLaren",
	"Meddon" => "Meddon",
	"MedievalSharp" => "MedievalSharp",
	"Medula One" => "Medula One",
	"Megrim" => "Megrim",
	"Meie Script" => "Meie Script",
	"Merienda" => "Merienda",
	"Merienda One" => "Merienda One",
	"Merriweather" => "Merriweather",
	"Merriweather Sans" => "Merriweather Sans",
	"Metal" => "Metal",
	"Metal Mania" => "Metal Mania",
	"Metamorphous" => "Metamorphous",
	"Metrophobic" => "Metrophobic",
	"Michroma" => "Michroma",
	"Milonga" => "Milonga",
	"Miltonian" => "Miltonian",
	"Miltonian Tattoo" => "Miltonian Tattoo",
	"Miniver" => "Miniver",
	"Miss Fajardose" => "Miss Fajardose",
	"Modern Antiqua" => "Modern Antiqua",
	"Molengo" => "Molengo",
	"Molle" => "Molle",
	"Monda" => "Monda",
	"Monofett" => "Monofett",
	"Monoton" => "Monoton",
	"Monsieur La Doulaise" => "Monsieur La Doulaise",
	"Montaga" => "Montaga",
	"Montez" => "Montez",
	"Montserrat" => "Montserrat",
	"Montserrat Alternates" => "Montserrat Alternates",
	"Montserrat Subrayada" => "Montserrat Subrayada",
	"Moul" => "Moul",
	"Moulpali" => "Moulpali",
	"Mountains of Christmas" => "Mountains of Christmas",
	"Mouse Memoirs" => "Mouse Memoirs",
	"Mr Bedfort" => "Mr Bedfort",
	"Mr Dafoe" => "Mr Dafoe",
	"Mr De Haviland" => "Mr De Haviland",
	"Mrs Saint Delafield" => "Mrs Saint Delafield",
	"Mrs Sheppards" => "Mrs Sheppards",
	"Muli" => "Muli",
	"Mystery Quest" => "Mystery Quest",
	"Neucha" => "Neucha",
	"Neuton" => "Neuton",
	"New Rocker" => "New Rocker",
	"News Cycle" => "News Cycle",
	"Niconne" => "Niconne",
	"Nixie One" => "Nixie One",
	"Nobile" => "Nobile",
	"Nokora" => "Nokora",
	"Norican" => "Norican",
	"Nosifer" => "Nosifer",
	"Nothing You Could Do" => "Nothing You Could Do",
	"Noticia Text" => "Noticia Text",
	"Noto Sans" => "Noto Sans",
	"Noto Serif" => "Noto Serif",
	"Nova Cut" => "Nova Cut",
	"Nova Flat" => "Nova Flat",
	"Nova Mono" => "Nova Mono",
	"Nova Oval" => "Nova Oval",
	"Nova Round" => "Nova Round",
	"Nova Script" => "Nova Script",
	"Nova Slim" => "Nova Slim",
	"Nova Square" => "Nova Square",
	"Numans" => "Numans",
	"Nunito" => "Nunito",
	"Odor Mean Chey" => "Odor Mean Chey",
	"Offside" => "Offside",
	"Old Standard TT" => "Old Standard TT",
	"Oldenburg" => "Oldenburg",
	"Oleo Script" => "Oleo Script",
	"Oleo Script Swash Caps" => "Oleo Script Swash Caps",
	"Open Sans" => "Open Sans",
	"Open Sans Condensed" => "Open Sans Condensed",
	"Oranienbaum" => "Oranienbaum",
	"Orbitron" => "Orbitron",
	"Oregano" => "Oregano",
	"Orienta" => "Orienta",
	"Original Surfer" => "Original Surfer",
	"Oswald" => "Oswald",
	"Over the Rainbow" => "Over the Rainbow",
	"Overlock" => "Overlock",
	"Overlock SC" => "Overlock SC",
	"Ovo" => "Ovo",
	"Oxygen" => "Oxygen",
	"Oxygen Mono" => "Oxygen Mono",
	"PT Mono" => "PT Mono",
	"PT Sans" => "PT Sans",
	"PT Sans Caption" => "PT Sans Caption",
	"PT Sans Narrow" => "PT Sans Narrow",
	"PT Serif" => "PT Serif",
	"PT Serif Caption" => "PT Serif Caption",
	"Pacifico" => "Pacifico",
	"Paprika" => "Paprika",
	"Parisienne" => "Parisienne",
	"Passero One" => "Passero One",
	"Passion One" => "Passion One",
	"Patrick Hand" => "Patrick Hand",
	"Patrick Hand SC" => "Patrick Hand SC",
	"Patua One" => "Patua One",
	"Paytone One" => "Paytone One",
	"Peralta" => "Peralta",
	"Permanent Marker" => "Permanent Marker",
	"Petit Formal Script" => "Petit Formal Script",
	"Petrona" => "Petrona",
	"Philosopher" => "Philosopher",
	"Piedra" => "Piedra",
	"Pinyon Script" => "Pinyon Script",
	"Pirata One" => "Pirata One",
	"Plaster" => "Plaster",
	"Play" => "Play",
	"Playball" => "Playball",
	"Playfair Display" => "Playfair Display",
	"Playfair Display SC" => "Playfair Display SC",
	"Podkova" => "Podkova",
	"Poiret One" => "Poiret One",
	"Poller One" => "Poller One",
	"Poly" => "Poly",
	"Pompiere" => "Pompiere",
	"Pontano Sans" => "Pontano Sans",
	"Poppins" => "Poppins",
	"Port Lligat Sans" => "Port Lligat Sans",
	"Port Lligat Slab" => "Port Lligat Slab",
	"Prata" => "Prata",
	"Preahvihear" => "Preahvihear",
	"Press Start 2P" => "Press Start 2P",
	"Princess Sofia" => "Princess Sofia",
	"Prociono" => "Prociono",
	"Prosto One" => "Prosto One",
	"Puritan" => "Puritan",
	"Purple Purse" => "Purple Purse",
	"Quando" => "Quando",
	"Quantico" => "Quantico",
	"Quattrocento" => "Quattrocento",
	"Quattrocento Sans" => "Quattrocento Sans",
	"Questrial" => "Questrial",
	"Quicksand" => "Quicksand",
	"Quintessential" => "Quintessential",
	"Qwigley" => "Qwigley",
	"Racing Sans One" => "Racing Sans One",
	"Radley" => "Radley",
	"Raleway" => "Raleway",
	"Raleway Dots" => "Raleway Dots",
	"Rambla" => "Rambla",
	"Rammetto One" => "Rammetto One",
	"Ranchers" => "Ranchers",
	"Rancho" => "Rancho",
	"Rationale" => "Rationale",
	"Redressed" => "Redressed",
	"Reenie Beanie" => "Reenie Beanie",
	"Revalia" => "Revalia",
	"Ribeye" => "Ribeye",
	"Ribeye Marrow" => "Ribeye Marrow",
	"Righteous" => "Righteous",
	"Risque" => "Risque",
	"Roboto" => "Roboto",
	"Roboto Condensed" => "Roboto Condensed",
	"Rochester" => "Rochester",
	"Rock Salt" => "Rock Salt",
	"Rokkitt" => "Rokkitt",
	"Romanesco" => "Romanesco",
	"Ropa Sans" => "Ropa Sans",
	"Rosario" => "Rosario",
	"Rosarivo" => "Rosarivo",
	"Rouge Script" => "Rouge Script",
	"Ruda" => "Ruda",
	"Rufina" => "Rufina",
	"Ruge Boogie" => "Ruge Boogie",
	"Ruluko" => "Ruluko",
	"Rum Raisin" => "Rum Raisin",
	"Ruslan Display" => "Ruslan Display",
	"Russo One" => "Russo One",
	"Ruthie" => "Ruthie",
	"Rye" => "Rye",
	"Sacramento" => "Sacramento",
	"Sail" => "Sail",
	"Salsa" => "Salsa",
	"Sanchez" => "Sanchez",
	"Sancreek" => "Sancreek",
	"Sansita One" => "Sansita One",
	"Sarina" => "Sarina",
	"Satisfy" => "Satisfy",
	"Scada" => "Scada",
	"Schoolbell" => "Schoolbell",
	"Seaweed Script" => "Seaweed Script",
	"Sevillana" => "Sevillana",
	"Seymour One" => "Seymour One",
	"Shadows Into Light" => "Shadows Into Light",
	"Shadows Into Light Two" => "Shadows Into Light Two",
	"Shanti" => "Shanti",
	"Share" => "Share",
	"Share Tech" => "Share Tech",
	"Share Tech Mono" => "Share Tech Mono",
	"Shojumaru" => "Shojumaru",
	"Short Stack" => "Short Stack",
	"Siemreap" => "Siemreap",
	"Sigmar One" => "Sigmar One",
	"Signika" => "Signika",
	"Signika Negative" => "Signika Negative",
	"Simonetta" => "Simonetta",
	"Sintony" => "Sintony",
	"Sirin Stencil" => "Sirin Stencil",
	"Six Caps" => "Six Caps",
	"Skranji" => "Skranji",
	"Slackey" => "Slackey",
	"Smokum" => "Smokum",
	"Smythe" => "Smythe",
	"Sniglet" => "Sniglet",
	"Snippet" => "Snippet",
	"Snowburst One" => "Snowburst One",
	"Sofadi One" => "Sofadi One",
	"Sofia" => "Sofia",
	"Sonsie One" => "Sonsie One",
	"Sorts Mill Goudy" => "Sorts Mill Goudy",
	"Source Code Pro" => "Source Code Pro",
	"Source Sans Pro" => "Source Sans Pro",
	"Source Serif Pro" => "Source Serif Pro",
	"Special Elite" => "Special Elite",
	"Spicy Rice" => "Spicy Rice",
	"Spinnaker" => "Spinnaker",
	"Spirax" => "Spirax",
	"Squada One" => "Squada One",
	"Stalemate" => "Stalemate",
	"Stalinist One" => "Stalinist One",
	"Stardos Stencil" => "Stardos Stencil",
	"Stint Ultra Condensed" => "Stint Ultra Condensed",
	"Stint Ultra Expanded" => "Stint Ultra Expanded",
	"Stoke" => "Stoke",
	"Strait" => "Strait",
	"Sue Ellen Francisco" => "Sue Ellen Francisco",
	"Sunshiney" => "Sunshiney",
	"Supermercado One" => "Supermercado One",
	"Suwannaphum" => "Suwannaphum",
	"Swanky and Moo Moo" => "Swanky and Moo Moo",
	"Syncopate" => "Syncopate",
	"Tangerine" => "Tangerine",
	"Taprom" => "Taprom",
	"Tauri" => "Tauri",
	"Telex" => "Telex",
	"Tenor Sans" => "Tenor Sans",
	"Text Me One" => "Text Me One",
	"The Girl Next Door" => "The Girl Next Door",
	"Tienne" => "Tienne",
	"Tinos" => "Tinos",
	"Titan One" => "Titan One",
	"Titillium Web" => "Titillium Web",
	"Trade Winds" => "Trade Winds",
	"Trocchi" => "Trocchi",
	"Trochut" => "Trochut",
	"Trykker" => "Trykker",
	"Tulpen One" => "Tulpen One",
	"Ubuntu" => "Ubuntu",
	"Ubuntu Condensed" => "Ubuntu Condensed",
	"Ubuntu Mono" => "Ubuntu Mono",
	"Ultra" => "Ultra",
	"Uncial Antiqua" => "Uncial Antiqua",
	"Underdog" => "Underdog",
	"Unica One" => "Unica One",
	"UnifrakturCook" => "UnifrakturCook",
	"UnifrakturMaguntia" => "UnifrakturMaguntia",
	"Unkempt" => "Unkempt",
	"Unlock" => "Unlock",
	"Unna" => "Unna",
	"VT323" => "VT323",
	"Vampiro One" => "Vampiro One",
	"Varela" => "Varela",
	"Varela Round" => "Varela Round",
	"Vast Shadow" => "Vast Shadow",
	"Vibur" => "Vibur",
	"Vidaloka" => "Vidaloka",
	"Viga" => "Viga",
	"Voces" => "Voces",
	"Volkhov" => "Volkhov",
	"Vollkorn" => "Vollkorn",
	"Voltaire" => "Voltaire",
	"Waiting for the Sunrise" => "Waiting for the Sunrise",
	"Wallpoet" => "Wallpoet",
	"Walter Turncoat" => "Walter Turncoat",
	"Warnes" => "Warnes",
	"Wellfleet" => "Wellfleet",
	"Wendy One" => "Wendy One",
	"Wire One" => "Wire One",
	"Work Sans" => "Work Sans",
	"Yanone Kaffeesatz" => "Yanone Kaffeesatz",
	"Yellowtail" => "Yellowtail",
	"Yeseva One" => "Yeseva One",
	"Yesteryear" => "Yesteryear",
	"Zeyada" => "Zeyada"
);

/**
 * Add customization options
 *
 * @since Basic 1.0
 */
function basic_customizer($wp_customize) {

	global $google_fonts;

	// Enqueue Styling
	function enqueue_customizer_styles() {
		wp_enqueue_script('cg-customize-controls', get_template_directory_uri() . '/admin/js/customize-controls.js');
	}
	add_action('customize_controls_enqueue_scripts', 'enqueue_customizer_styles');

	// Remove Title & Site Tagline section
	$wp_customize->remove_section('title_tagline');

	/**
	 * Add subsection heading 
	 */
	class Section_Heading extends WP_Customize_Control {
		public $type = 'heading';

		public function render_content() { ?>
			<h3 style="background: #ddd; padding: 10px; border-bottom: 1px solid #eaeaea; margin: 15px 0 0; color: #555"><?php echo esc_html($this->label); ?></h3>
			<?php
		}
	}

	/**
	 * Adds textarea support to the theme customizer
	 */
	class Textarea_Control extends WP_Customize_Control {
	    public $type = 'textarea';
	 
	    public function render_content() { ?>
            <label>
                <span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
                <span class="description customize-control-description"><?php echo esc_html($this->description); ?></span>
                <textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea($this->value()); ?></textarea>
            </label>
	       	<?php
	    }
	}

	class Multi_Checkbox extends WP_Customize_Control {

		public $type = 'checkbox-multiple';

		public function render_content() {

	        if (empty($this->choices))
	            return; ?>

	        <?php if (!empty( $this->label)): ?>
	            <span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
	        <?php endif; ?>

	        <?php if (!empty( $this->description)): ?>
	            <span class="description customize-control-description"><?php echo $this->description; ?></span>
	        <?php endif; ?>

	        <?php $multi_values = !is_array($this->value()) ? explode(',', $this->value()) : $this->value(); ?>

	        <ul>
	            <?php foreach ($this->choices as $value => $label) : ?>

	                <li>
	                    <label>
	                        <input type="checkbox" value="<?php echo esc_attr($value); ?>" <?php checked(in_array($value, $multi_values)); ?> /> 
	                        <?php echo esc_html($label); ?>
	                    </label>
	                </li>

	            <?php endforeach; ?>
	        </ul>

	        <input type="hidden" <?php $this->link(); ?> value="<?php echo esc_attr(implode(',', $multi_values)); ?>" />
	        <script type="text/javascript">
	        jQuery(document).ready( function() {

			    /* === Checkbox Multiple Control === */

			    jQuery('.customize-control-checkbox-multiple input[type="checkbox"]').on(
			        'change',
			        function() {

			            checkbox_values = jQuery(this).parents('.customize-control').find('input[type="checkbox"]:checked').map(
			                function() {
			                    return this.value;
			                }
			            ).get().join( ',' );

			            jQuery(this).parents('.customize-control').find('input[type="hidden"]').val( checkbox_values ).trigger('change');
			        }
			    );

			} ); 
			</script>
		<?php 
		}

	}

	class Layout_Control extends WP_Customize_Control {
		public $type = 'layout';

		public function render_content() { ?>
			<label>
                <span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
                <span class="description customize-control-description"><?php echo esc_html($this->description); ?></span>
               
				<div class="layout_selector">
					<?php
					if (empty($this->choices))
                		return;

                	$name = '_customize-multicheckbox-' . $this->id;

	           		foreach ($this->choices as $value => $label) : ?>
	                <input type="radio" id="<?php echo esc_attr($value); ?>" value="<?php echo esc_attr($value); ?>" name="<?php echo esc_attr($name); ?>" <?php $this->link(); checked($this->value(), $value); ?> />
					<label for="<?php echo esc_attr($value); ?>" class="layout_<?php echo esc_attr($value); ?>"></label>
	                <?php endforeach; ?>
				</div>

            </label>
		<?php
		}
	}

	/**
	 * Customizer Options
	 */
	$wp_customize->add_section(
		'general',
		array(
			'title' => __('General', 'Basic'),
			'priority' => 20
		)
	);

	// Logo
	$wp_customize->add_setting(
		'logo',
		array(
			'default' => get_template_directory_uri() . '/images/logo.png',
			'sanitize_callback' => 'sanitize_img'
		)
	);
 
	$wp_customize->add_control(
	    new WP_Customize_Image_Control(
	        $wp_customize,
	        'logo',
	        array(
	            'label' => __('Logo', 'Basic'),
	            'section' => 'general',
	            'settings' => 'logo'
	        )
	    )
	);

	// Standard Logo Width
	$wp_customize->add_setting(
		'logo_width',
		array(
			'default' => '32',
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    'logo_width',
	    array(
	        'label' => __('Logo Width (px)', 'Basic'),
	        'description' => __('This only needs to be set if your logo has a larger width than you want and need to limit it or if you want to upload a large logo for retina devices. The height will be automatically set.', 'Basic'),
	        'section' => 'general'
	    )
	);

	// Favicon
	$wp_customize->add_setting(
		'favicon',
		array(
			'sanitize_callback' => 'sanitize_favicon'
		)
	);
 
	$wp_customize->add_control(
	    new WP_Customize_Image_Control(
	        $wp_customize,
	        'favicon',
	        array(
	            'label' => __('Favicon', 'Basic'),
	            'section' => 'general',
	            'settings' => 'favicon'
	        )
	    )
	);

	// Page content width
	$wp_customize->add_setting(
		'page_width',
		array(
			'default' => 1240,
			'sanitize_callback' => 'sanitize_page_width'
		)
	);

	$wp_customize->add_control(
	    'page_width',
	    array(
	        'label' => __('Page Width (px)', 'Basic'),
	        'description' => __('Set the page container width. Default is 1240.', 'Basic'),
	        'section' => 'general'
	    )
	);

	// Copyright text
	$wp_customize->add_setting(
		'copyright',
		array(
			'default' => __('© 2016 Basic WordPress Theme', 'Basic'),
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    'copyright',
	    array(
	        'label' => __('Copyright Text', 'Basic'),
	        'section' => 'general'
	    )
	);

	// Custom CSS
	$wp_customize->add_setting( 
		'custom_css',
		array(
			'sanitize_callback' => 'sanitize_code'
		)
	);
 
	$wp_customize->add_control(
	    new Textarea_Control(
	        $wp_customize,
	        'custom_css',
	        array(
	            'label' => __('Custom CSS', 'Basic'),
	            'section' => 'general',
	            'settings' => 'custom_css'
	        )
	    )
	);

	/**
	 * Header 
	 */
	$wp_customize->add_section(
		'header',
		array(
			'title' => __('Header', 'Basic'),
			'priority' => 21
		)
	);

	$wp_customize->add_setting(
		'sticky_header',
		array(
			'default' => false,
			'sanitize_callback' => 'sanitize_checkbox'
		)
	);

	$wp_customize->add_control(
		'sticky_header',
		array(
			'type' => 'checkbox',
			'label' => __('Enable Sticky Header', 'Basic'),
			'section' => 'header'
		)
	);

	// $wp_customize->add_setting(
	// 	'transparent_header',
	// 	array(
	// 		'default' => true,
	// 		'sanitize_callback' => 'sanitize_checkbox'
	// 	)
	// );

	// $wp_customize->add_control(
	// 	'transparent_header',
	// 	array(
	// 		'type' => 'checkbox',
	// 		'label' => __('Enable Transparent Header',
	// 		'section' => 'header',
	// 		'description' => __('Note: You can change this on a per post/page basis.'
	// 	)
	// );

	// // Header Style
	// $wp_customize->add_setting(
	//     'header',
	//     array(
	//         'default' => 'default',
	//         'sanitize_callback' => 'sanitize_header_layout'
	//     )
	// );
	 
	// $wp_customize->add_control(
	//     'header',
	//     array(
	//         'type' => 'select',
	//         'label' => __('Header Style',
	//         'section' => 'header',
	//         'choices' => array(
	//         	'default' => 'Header 1',
	//         	'headertwo' => 'Header 2',
	//             'headerthree' => 'Header 3'
	//         ),
	//     )
	// );

	// Header Height
	$wp_customize->add_setting(
		'header_height',
		array(
			'default' => '150',
			'sanitize_callback' => 'sanitize_menu_height'
		)
	);

	$wp_customize->add_control(
	    'header_height',
	    array(
	        'label' => __('Header Height (px)', 'Basic'),
	        'section' => 'header',
	        'description' => __('Default 150.', 'Basic'),
	    )
	);

	// // Navigation Settings
	// $wp_customize->add_setting( 
	// 	'nav_section',
	// 	array(
	// 		'sanitize_callback' => 'sanitize_text'
	// 	)
	// );

	// $wp_customize->add_control(
	//     new Section_Heading(
	//         $wp_customize,
	//         'nav_section',
	//         array(
	//             'label' => __('Navigation', 'Basic'),
	//             'section' => 'header',
	//             'settings' => 'nav_section'
	//         )
	//     )
	// );

	// // Navigation Style
	// $wp_customize->add_setting(
	//     'nav_style',
	//     array(
	//         'default' => 'fullscreen',
	//         'sanitize_callback' => 'sanitize_nav_style'
	//     )
	// );
	 
	// $wp_customize->add_control(
	//     'nav_style',
	//     array(
	//         'type' => 'select',
	//         'label' => __('Navigation Style',
	//         'section' => 'header',
	//         'choices' => array(
	//         	'fullscreen' => 'Fullscreen',
	//         	'right' => 'Slide From Right',
	//             'classic' => 'Classic',
	//             'classictoggle' => 'Classic Toggle'
	//         ),
	//     )
	// );

	/**
	 * Colors
	 */
	$wp_customize->add_section(
		'colors',
		array(
			'title' => __('Colors', 'Basic'),
			'priority' => 25
		)
	);

	// Page/body Background Color
	$wp_customize->add_setting(
	    'page_bg_color',
	    array(
	        'default' => '#ffffff',
	        'sanitize_callback' => 'sanitize_hex_color'
	    )
	);

	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'page_bg_color',
	        array(
	            'label' => __('Page Background Color', 'Basic'),
	            'section' => 'colors',
	            'settings' => 'page_bg_color'
	        )
	    )
	);

	// Text Color
	$wp_customize->add_setting(
	    'text_color',
	    array(
	        'default' => '#000000',
	        'sanitize_callback' => 'sanitize_hex_color'
	    )
	);

	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'text_color',
	        array(
	            'label' => __('Text Color', 'Basic'),
	            'section' => 'colors',
	            'settings' => 'text_color'
	        )
	    )
	);

	// Link Color
	$wp_customize->add_setting(
	    'link_color',
	    array(
	        'default' => '#000000',
	        'sanitize_callback' => 'sanitize_hex_color'
	    )
	);

	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'link_color',
	        array(
	            'label' => __('Link Color', 'Basic'),
	            'section' => 'colors',
	            'settings' => 'link_color'
	        )
	    )
	);

	// Link Hover Color
	$wp_customize->add_setting(
	    'link_hover_color',
	    array(
	        'default' => '#777777',
	        'sanitize_callback' => 'sanitize_hex_color'
	    )
	);

	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'link_hover_color',
	        array(
	            'label' => __('Link Hover Color', 'Basic'),
	            'section' => 'colors',
	            'settings' => 'link_hover_color'
	        )
	    )
	);

	// Link Color
	$wp_customize->add_setting(
	    'content_link_color',
	    array(
	        'default' => '#999999',
	        'sanitize_callback' => 'sanitize_hex_color'
	    )
	);

	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'content_link_color',
	        array(
	            'label' => __('Content Link Color', 'Basic'),
	            'section' => 'colors',
	            'settings' => 'content_link_color',
	            'description' => __('Color for links in articles/content.', 'Basic'),
	        )
	    )
	);

	// Link Hover Color
	$wp_customize->add_setting(
	    'content_link_hover_color',
	    array(
	        'default' => '#000000',
	        'sanitize_callback' => 'sanitize_hex_color'
	    )
	);

	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'content_link_hover_color',
	        array(
	            'label' => __('Content Link Hover Color', 'Basic'),
	            'section' => 'colors',
	            'settings' => 'content_link_hover_color'
	        )
	    )
	);

	// Divider Color
	$wp_customize->add_setting(
	    'divider_color',
	    array(
	        'default' => '#eaeaea',
	        'sanitize_callback' => 'sanitize_hex_color'
	    )
	);

	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'divider_color',
	        array(
	            'label' => __('Content Divider Color', 'Basic'),
	            'description' => __('Set the color of the content divider. Used in the blog to separate blog posts, and used in the sidebar to separate list items.', 'Basic'),
	            'section' => 'colors',
	            'settings' => 'divider_color'
	        )
	    )
	);

	// Headings Color Settings
	$wp_customize->add_setting( 
		'headings_color_section',
		array(
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    new Section_Heading(
	        $wp_customize,
	        'headings_color_section',
	        array(
	            'label' => __('Headings', 'Basic'),
	            'section' => 'colors',
	            'settings' => 'headings_color_section'
	        )
	    )
	);

	// Headings Color
	$wp_customize->add_setting(
	    'headings_color',
	    array(
	        'default' => '#000000',
	        'sanitize_callback' => 'sanitize_hex_color'
	    )
	);

	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'headings_color',
	        array(
	            'label' => __('Headings Color', 'Basic'),
	            'section' => 'colors',
	            'description' => __('Used for all headings (h1, h2, h3, etc) including post titles.', 'Basic'),
	            'settings' => 'headings_color'
	        )
	    )
	);

	// Page Subtitle Color
	$wp_customize->add_setting(
	    'page_subtitle_color',
	    array(
	        'default' => '#bbbbbb',
	        'sanitize_callback' => 'sanitize_hex_color'
	    )
	);

	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'page_subtitle_color',
	        array(
	            'label' => __('Page Subtitle Color', 'Basic'),
	            'section' => 'colors',
	            'description' => __('Select the color for page subtitles.', 'Basic'),
	            'settings' => 'page_subtitle_color'
	        )
	    )
	);

	// Post Title Hover Color
	$wp_customize->add_setting(
	    'post_title_hover_color',
	    array(
	        'default' => '#777777',
	        'sanitize_callback' => 'sanitize_hex_color'
	    )
	);

	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'post_title_hover_color',
	        array(
	            'label' => __('Post Title Hover Color', 'Basic'),
	            'section' => 'colors',
	            'settings' => 'post_title_hover_color'
	        )
	    )
	);

	/**
	 * Header Color Settings
	 */
	$wp_customize->add_setting( 
		'header_section',
		array(
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    new Section_Heading(
	        $wp_customize,
	        'header_section',
	        array(
	            'label' => __('Header', 'Basic'),
	            'section' => 'colors',
	            'settings' => 'header_section'
	        )
	    )
	);

	// Heading Background Color
	$wp_customize->add_setting(
	    'header_bg_color',
	    array(
	        'default' => '#ffffff',
	        'sanitize_callback' => 'sanitize_hex_color'
	    )
	);

	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'header_bg_color',
	        array(
	            'label' => __('Header Background Color', 'Basic'),
	            'section' => 'colors',
	            'settings' => 'header_bg_color'
	        )
	    )
	);

	/**
	 * Menu Color Settings
	 */
	$wp_customize->add_setting( 
		'menu_colors_section',
		array(
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    new Section_Heading(
	        $wp_customize,
	        'menu_colors_section',
	        array(
	            'label' => __('Menu', 'Basic'),
	            'section' => 'colors',
	            'settings' => 'menu_colors_section'
	        )
	    )
	);

	// Menu Background Color
	$wp_customize->add_setting(
	    'menu_bg_color',
	    array(
	        'default' => '#ffffff',
	        'sanitize_callback' => 'sanitize_hex_color'
	    )
	);

	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'menu_bg_color',
	        array(
	            'label' => __('Menu Background Color', 'Basic'),
	            'section' => 'colors',
	            'settings' => 'menu_bg_color'
	        )
	    )
	);

	// Menu Link Color
	$wp_customize->add_setting(
	    'menu_link_color',
	    array(
	        'default' => '#000000',
	        'sanitize_callback' => 'sanitize_hex_color'
	    )
	);

	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'menu_link_color',
	        array(
	            'label' => __('Menu Link Color', 'Basic'),
	            'section' => 'colors',
	            'settings' => 'menu_link_color'
	        )
	    )
	);

	// Menu Link Hover Color
	$wp_customize->add_setting(
	    'menu_link_hover_color',
	    array(
	        'default' => '#a5a5a5',
	        'sanitize_callback' => 'sanitize_hex_color'
	    )
	);

	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'menu_link_hover_color',
	        array(
	            'label' => __('Menu Link Hover Color', 'Basic'),
	            'section' => 'colors',
	            'settings' => 'menu_link_hover_color'
	        )
	    )
	);

	// Drop Down Link Color
	$wp_customize->add_setting(
	    'dd_link_color',
	    array(
	        'default' => '#a5a5a5',
	        'sanitize_callback' => 'sanitize_hex_color'
	    )
	);

	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'dd_link_color',
	        array(
	            'label' => __('Drop Down Link Color', 'Basic'),
	            'section' => 'colors',
	            'settings' => 'dd_link_color'
	        )
	    )
	);

	// Drop Down Link Hover Color
	$wp_customize->add_setting(
	    'dd_link_hover_color',
	    array(
	        'default' => '#000000',
	        'sanitize_callback' => 'sanitize_hex_color'
	    )
	);

	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'dd_link_hover_color',
	        array(
	            'label' => __('Drop Down Link Hover Color', 'Basic'),
	            'section' => 'colors',
	            'settings' => 'dd_link_hover_color'
	        )
	    )
	);

	// Sidebar Color Settings
	$wp_customize->add_setting( 
		'sidebar_color_section',
		array(
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    new Section_Heading(
	        $wp_customize,
	        'sidebar_color_section',
	        array(
	            'label' => __('Sidebar', 'Basic'),
	            'section' => 'colors',
	            'settings' => 'sidebar_color_section'
	        )
	    )
	);

	// Sidebar Title Color
	$wp_customize->add_setting(
	    'sidebar_title_color',
	    array(
	        'default' => '#999999',
	        'sanitize_callback' => 'sanitize_hex_color'
	    )
	);

	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'sidebar_title_color',
	        array(
	            'label' => __('Widget Title Color', 'Basic'),
	            'section' => 'colors',
	            'settings' => 'sidebar_title_color'
	        )
	    )
	);

	// Sidebar Link Color
	$wp_customize->add_setting(
	    'sidebar_link_color',
	    array(
	        'default' => '#000000',
	        'sanitize_callback' => 'sanitize_hex_color'
	    )
	);

	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'sidebar_link_color',
	        array(
	            'label' => __('Link Color', 'Basic'),
	            'section' => 'colors',
	            'settings' => 'sidebar_link_color'
	        )
	    )
	);

	// Sidebar Link Hover Color
	$wp_customize->add_setting(
	    'sidebar_link_hover_color',
	    array(
	        'default' => '#aeaeae',
	        'sanitize_callback' => 'sanitize_hex_color'
	    )
	);

	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'sidebar_link_hover_color',
	        array(
	            'label' => __('Link Hover Color', 'Basic'),
	            'section' => 'colors',
	            'settings' => 'sidebar_link_hover_color'
	        )
	    )
	);

	// Footer Styling
	$wp_customize->add_setting( 
		'footer_styling',
		array(
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    new Section_Heading(
	        $wp_customize,
	        'footer_styling',
	        array(
	            'label' => __('Footer', 'Basic'),
	            'section' => 'colors',
	            'settings' => 'footer_styling'
	        )
	    )
	);

	// Footer Background Color
	$wp_customize->add_setting(
	    'footer_bg_color',
	    array(
	        'default' => '#f9f9f9',
	        'sanitize_callback' => 'sanitize_hex_color'
	    )
	);

	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'footer_bg_color',
	        array(
	            'label' => __('Footer Background Color', 'Basic'),
	            'section' => 'colors',
	            'settings' => 'footer_bg_color'
	        )
	    )
	);

	// Footer Text Color
	$wp_customize->add_setting(
	    'footer_text_color',
	    array(
	        'default' => '#000000',
	        'sanitize_callback' => 'sanitize_hex_color'
	    )
	);

	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'footer_text_color',
	        array(
	            'label' => __('Footer Text Color', 'Basic'),
	            'section' => 'colors',
	            'settings' => 'footer_text_color'
	        )
	    )
	);

	// Footer Link Color
	$wp_customize->add_setting(
	    'footer_link_color',
	    array(
	        'default' => '#000000',
	        'sanitize_callback' => 'sanitize_hex_color'
	    )
	);

	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'footer_link_color',
	        array(
	            'label' => __('Footer Link Color', 'Basic'),
	            'section' => 'colors',
	            'settings' => 'footer_link_color'
	        )
	    )
	);

	// Footer Link Hover Color
	$wp_customize->add_setting(
	    'footer_link_hover_color',
	    array(
	        'default' => '#777777',
	        'sanitize_callback' => 'sanitize_hex_color'
	    )
	);

	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'footer_link_hover_color',
	        array(
	            'label' => __('Footer Link Hover Color', 'Basic'),
	            'section' => 'colors',
	            'settings' => 'footer_link_hover_color'
	        )
	    )
	);

	/**
	 * Portfolio Filter Color Settings
	 */
	$wp_customize->add_setting( 
		'portfolio_filter_color_section',
		array(
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    new Section_Heading(
	        $wp_customize,
	        'portfolio_filter_color_section',
	        array(
	            'label' => __('Portfolio Filter', 'Basic'),
	            'section' => 'colors',
	            'settings' => 'portfolio_filter_color_section'
	        )
	    )
	);

	// Portfolio Filter Link Color
	$wp_customize->add_setting(
	    'portfolio_filter_link_color',
	    array(
	        'default' => '#777777',
	        'sanitize_callback' => 'sanitize_hex_color'
	    )
	);

	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'portfolio_filter_link_color',
	        array(
	            'label' => __('Filter Link Color', 'Basic'),
	            'section' => 'colors',
	            'settings' => 'portfolio_filter_link_color'
	        )
	    )
	);

	// Portfolio Filter Link Hover Color
	$wp_customize->add_setting(
	    'portfolio_filter_link_hover_color',
	    array(
	        'default' => '#000000',
	        'sanitize_callback' => 'sanitize_hex_color'
	    )
	);

	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'portfolio_filter_link_hover_color',
	        array(
	            'label' => __('Filter Link Hover / Selected Color', 'Basic'),
	            'section' => 'colors',
	            'settings' => 'portfolio_filter_link_hover_color'
	        )
	    )
	);

	/**
	 * Fonts
	 */
	$wp_customize->add_section(
		'fonts',
		array(
			'title' => __('Fonts', 'Basic'),
			'priority' => 27
		)
	);

	// Primary Font
	$wp_customize->add_setting(
	    'primary_font',
	    array(
	        'default' => 'Open Sans',
	        'sanitize_callback' => 'sanitize_primary_font'
	    )
	);
	 
	$wp_customize->add_control(
	    'primary_font',
	    array(
	        'type' => 'select',
	        'label' => __('Primary Font', 'Basic'),
	        'section' => 'fonts',
	        'choices' => $google_fonts
	    )
	);

	// Secondary Font
	$wp_customize->add_setting(
	    'secondary_font',
	    array(
	        'default' => 'Lato',
	        'sanitize_callback' => 'sanitize_secondary_font'
	    )
	);
	 
	$wp_customize->add_control(
	    'secondary_font',
	    array(
	        'type' => 'select',
	        'label' => __('Seconary Font', 'Basic'),
	        'section' => 'fonts',
	        'choices' => $google_fonts
	    )
	);

	// Body Font Family
	$wp_customize->add_setting(
	    'body_font',
	    array(
	        'default' => 'primary',
	        'sanitize_callback' => 'sanitize_font'
	    )
	);
	 
	$wp_customize->add_control(
	    'body_font',
	    array(
	        'type' => 'select',
	        'label' => __('Body Font', 'Basic'),
	        'section' => 'fonts',
	        'choices' => array(
	        	'primary' => __('Primary Font', 'Basic'),
	        	'secondary' => __('Secondary Font', 'Basic'),
	        )
	    )
	);

	// Body Font Size
	$wp_customize->add_setting(
		'font_size',
		array(
			'default' => '15',
			'sanitize_callback' => 'sanitize_font_size'
		)
	);

	$wp_customize->add_control(
	    'font_size',
	    array(
	        'label' => __('Font Size (px)', 'Basic'),
	        'section' => 'fonts',
	        'description' => __('Default 15', 'Basic'),
	    )
	);

	// Body Font Weight
	$wp_customize->add_setting(
		'body_font_weight',
		array(
			'default' => '300',
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    'body_font_weight',
	    array(
	        'label' => __('Font Weight', 'Basic'),
	        'section' => 'fonts',
	        'description' => __('Set the font weight for body text. Default 400. Values 100 - 900.', 'Basic'),
	    )
	);

	// Body Text Letter Spacing
	$wp_customize->add_setting(
		'body_text_letter_spacing',
		array(
			'default' => '0',
			'sanitize_callback' => 'sanitize_letter_spacing'
		)
	);

	$wp_customize->add_control(
	    'body_text_letter_spacing',
	    array(
	        'label' => __('Text Letter Spacing', 'Basic'),
	        'section' => 'fonts',
	        'description' => __('Set the spacing (in pixels) in between characters for body text. Default 0. Values -6 to 8.', 'Basic'),
	    )
	);

	/**
	 * Menu Font Settings
	 */
	$wp_customize->add_setting( 
		'menu_section',
		array(
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    new Section_Heading(
	        $wp_customize,
	        'menu_section',
	        array(
	            'label' => __('Menu', 'Basic'),
	            'section' => 'fonts',
	            'settings' => 'menu_section'
	        )
	    )
	);

	// Menu Font
	$wp_customize->add_setting(
	    'menu_font',
	    array(
	        'default' => 'secondary',
	        'sanitize_callback' => 'sanitize_font'
	    )
	);
	 
	$wp_customize->add_control(
	    'menu_font',
	    array(
	        'type' => 'select',
	        'label' => __('Menu Font', 'Basic'),
	        'section' => 'fonts',
	        'description' => __('Select the font you want to use for menu/navigation links.', 'Basic'),
	       	'choices' => array(
	        	'primary' => __('Primary Font', 'Basic'),
	        	'secondary' => __('Secondary Font', 'Basic'),
	        )
	    )
	);

	// Menu Font Size
	$wp_customize->add_setting(
		'menu_font_size',
		array(
			'default' => '28',
			'sanitize_callback' => 'sanitize_font_size'
		)
	);

	$wp_customize->add_control(
	    'menu_font_size',
	    array(
	        'label' => __('Menu Font Size (px)', 'Basic'),
	        'section' => 'fonts',
	        'description' => __('Default 28', 'Basic'),
	    )
	);

	// Menu Text Transform
	$wp_customize->add_setting(
		'menu_text_transform',
		array(
			'default' => 'uppercase',
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    'menu_text_transform',
	    array(
	        'label' => __('Menu Text Transform', 'Basic'),
	        'section' => 'fonts',
	        'description' => __('Set the text transform property for menu links. Values: none, capitalize, uppercase, lowercase, initial, inherit. Default is uppercase.', 'Basic'),
	    )
	);

	// Menu Font Weight
	$wp_customize->add_setting(
		'menu_font_weight',
		array(
			'default' => '300',
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    'menu_font_weight',
	    array(
	        'label' => __('Menu Font Weight', 'Basic'),
	        'section' => 'fonts',
	        'description' => __('Set the font weight for menu links. Default is 300. Values 100 - 900.', 'Basic'),
	    )
	);

	// Menu Text Letter Spacing
	$wp_customize->add_setting(
		'menu_text_letter_spacing',
		array(
			'default' => '4',
			'sanitize_callback' => 'sanitize_letter_spacing'
		)
	);

	$wp_customize->add_control(
	    'menu_text_letter_spacing',
	    array(
	        'label' => __('Menu Text Letter Spacing', 'Basic'),
	        'section' => 'fonts',
	        'description' => __('Set the spacing (in pixels) in between characters for menu links. Default 4. Values -6 to 8.', 'Basic'),
	    )
	);

	/**
	 * Drop Down Font Settings
	 */
	$wp_customize->add_setting( 
		'menu_dd_section',
		array(
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    new Section_Heading(
	        $wp_customize,
	        'menu_dd_section',
	        array(
	            'label' => __('Menu Drop Down', 'Basic'),
	            'section' => 'fonts',
	            'settings' => 'menu_dd_section'
	        )
	    )
	);

	// Drop Down Font Size
	$wp_customize->add_setting(
		'dd_font_size',
		array(
			'default' => '13',
			'sanitize_callback' => 'sanitize_font_size'
		)
	);

	$wp_customize->add_control(
	    'dd_font_size',
	    array(
	        'label' => __('Drop Down Font Size (px)', 'Basic'),
	        'section' => 'fonts',
	        'description' => __('Default 13', 'Basic'),
	    )
	);

	// Menu Text Transform
	$wp_customize->add_setting(
		'dd_text_transform',
		array(
			'default' => 'uppercase',
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    'dd_text_transform',
	    array(
	        'label' => __('Drop Down Text Transform', 'Basic'),
	        'section' => 'fonts',
	        'description' => __('Set the text transform property for menu links in drop downs. Values: none, capitalize, uppercase, lowercase, initial, inherit. Default is uppercase.', 'Basic'),
	    )
	);

	// Menu Font Weight
	$wp_customize->add_setting(
		'dd_font_weight',
		array(
			'default' => '400',
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    'dd_font_weight',
	    array(
	        'label' => __('Drop Down Font Weight', 'Basic'),
	        'section' => 'fonts',
	        'description' => __('Set the font weight for menu links in drop downs. Default is 400. Values 100 - 900.', 'Basic'),
	    )
	);

	// Menu Text Letter Spacing
	$wp_customize->add_setting(
		'dd_text_letter_spacing',
		array(
			'default' => '4',
			'sanitize_callback' => 'sanitize_letter_spacing'
		)
	);

	$wp_customize->add_control(
	    'dd_text_letter_spacing',
	    array(
	        'label' => __('Drop Down Text Letter Spacing', 'Basic'),
	        'section' => 'fonts',
	        'description' => __('Set the spacing (in pixels) in between characters for menu links in dropdowns. Default 4. Values -6 to 8.', 'Basic'),
	    )
	);

	/**
	 * Pages/Posts Title Settings
	 */
	$wp_customize->add_setting( 
		'pages_section',
		array(
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    new Section_Heading(
	        $wp_customize,
	        'pages_section',
	        array(
	            'label' => __('Pages / Posts', 'Basic'),
	            'section' => 'fonts',
	            'settings' => 'pages_section'
	        )
	    )
	);

	// Page Title Size
	$wp_customize->add_setting(
		'page_title_size',
		array(
			'default' => '36',
			'sanitize_callback' => 'sanitize_font_size'
		)
	);

	$wp_customize->add_control(
	    'page_title_size',
	    array(
	        'label' => __('Page Title Size (px)', 'Basic'),
	        'section' => 'fonts',
	        'description' => __('Default 36', 'Basic'),
	    )
	);

	// Post Title Size
	$wp_customize->add_setting(
		'post_title_size',
		array(
			'default' => '28',
			'sanitize_callback' => 'sanitize_font_size'
		)
	);

	$wp_customize->add_control(
	    'post_title_size',
	    array(
	        'label' => __('Post Title Size (px)', 'Basic'),
	        'section' => 'fonts',
	        'description' => __('Default 28', 'Basic'),
	    )
	);

	// Widget Title Settings
	$wp_customize->add_setting( 
		'widget_section',
		array(
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    new Section_Heading(
	        $wp_customize,
	        'widget_section',
	        array(
	            'label' => __('Sidebar Widget Titles', 'Basic'),
	            'section' => 'fonts',
	            'settings' => 'widget_section'
	        )
	    )
	);

	// Widget Title Font
	$wp_customize->add_setting(
	    'sidebar_title_font',
	    array(
	        'default' => 'primary',
	        'sanitize_callback' => 'sanitize_font'
	    )
	);
	 
	$wp_customize->add_control(
	    'sidebar_title_font',
	    array(
	        'type' => 'select',
	        'label' => __('Widget Title Font', 'Basic'),
	        'section' => 'fonts',
	        'description' => __('Select the font you want to use for widget titles.', 'Basic'),
	       	'choices' => array(
	        	'primary' => __('Primary Font', 'Basic'),
	        	'secondary' => __('Secondary Font', 'Basic'),
	        )
	    )
	);

	// Widget Title Size
	$wp_customize->add_setting(
		'sidebar_title_size',
		array(
			'default' => '12',
			'sanitize_callback' => 'sanitize_font_size'
		)
	);

	$wp_customize->add_control(
	    'sidebar_title_size',
	    array(
	        'label' => __('Widget Title Size (px)', 'Basic'),
	        'section' => 'fonts',
	        'description' => __('Default 12', 'Basic'),
	    )
	);

	// Widget Title Font Weight
	$wp_customize->add_setting(
		'sidebar_title_font_weight',
		array(
			'default' => '400',
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    'sidebar_title_font_weight',
	    array(
	        'label' => __('Widget Title Font Weight', 'Basic'),
	        'section' => 'fonts',
	        'description' => __('Set the font weight for widget titles. Default is 400. Values 100 - 900.', 'Basic'),
	    )
	);

	// Widget Title Text Transform
	$wp_customize->add_setting(
		'sidebar_title_text_transform',
		array(
			'default' => 'uppercase',
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    'sidebar_title_text_transform',
	    array(
	        'label' => __('Widget Title Text Transform', 'Basic'),
	        'section' => 'fonts',
	        'description' => __('Set the text transform property. Values: none, capitalize, uppercase, lowercase, initial, inherit. Default is uppercase.', 'Basic'),
	    )
	);

	// Widget Title Letter Spacing
	$wp_customize->add_setting(
		'sidebar_title_letter_spacing',
		array(
			'default' => '3',
			'sanitize_callback' => 'sanitize_letter_spacing'
		)
	);

	$wp_customize->add_control(
	    'sidebar_title_letter_spacing',
	    array(
	        'label' => __('Widget Title Letter Spacing', 'Basic'),
	        'section' => 'fonts',
	        'description' => __('Set the spacing (in pixels) in between characters for widget titles. Default 3. Values -6 to 8.', 'Basic'),
	    )
	);

	/**
	 * Heading Font Settings
	 */
	$wp_customize->add_setting( 
		'headings_section',
		array(
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    new Section_Heading(
	        $wp_customize,
	        'headings_section',
	        array(
	            'label' => __('Headings', 'Basic'),
	            'section' => 'fonts',
	            'settings' => 'headings_section'
	        )
	    )
	);

	// Heading Font
	$wp_customize->add_setting(
	    'heading_font',
	    array(
	        'default' => 'primary',
	        'sanitize_callback' => 'sanitize_font'
	    )
	);
	 
	$wp_customize->add_control(
	    'heading_font',
	    array(
	        'type' => 'select',
	        'label' => __('Headings Font', 'Basic'),
	        'section' => 'fonts',
	        'description' => __('Select the font you want to use for headings.', 'Basic'),
	        'choices' => array(
	        	'primary' => __('Primary Font', 'Basic'),
	        	'secondary' => __('Secondary Font', 'Basic'),
	        )
	    )
	);

	// Headings Font Weight
	$wp_customize->add_setting(
		'headings_font_weight',
		array(
			'default' => '300',
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    'headings_font_weight',
	    array(
	        'label' => __('Headings Font Weight', 'Basic'),
	        'section' => 'fonts',
	        'description' => __('Set the font weight for headings. Default is 300. Values 100 - 900.', 'Basic'),
	    )
	);

	// Headings Text Transform
	$wp_customize->add_setting(
		'headings_text_transform',
		array(
			'default' => 'none',
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    'headings_text_transform',
	    array(
	        'label' => __('Headings Text Transform', 'Basic'),
	        'section' => 'fonts',
	        'description' => __('Set the text transform property for all headings. Values: none, capitalize, uppercase, lowercase, initial, inherit. Default is none.', 'Basic'),
	    )
	);

	// Headings Letter Spacing
	$wp_customize->add_setting(
		'headings_letter_spacing',
		array(
			'default' => '0',
			'sanitize_callback' => 'sanitize_letter_spacing'
		)
	);

	$wp_customize->add_control(
	    'headings_letter_spacing',
	    array(
	        'label' => __('Headings Letter Spacing', 'Basic'),
	        'section' => 'fonts',
	        'description' => __('Set the spacing (in pixels) in between characters for headings. Default 0. Values -6 to 8.', 'Basic'),
	    )
	);

	// H1 Font Size
	$wp_customize->add_setting(
		'h1_font_size',
		array(
			'default' => '36',
			'sanitize_callback' => 'sanitize_font_size'
		)
	);

	$wp_customize->add_control(
	    'h1_font_size',
	    array(
	        'label' => __('H1 Font Size (px)', 'Basic'),
	        'section' => 'fonts',
	        'description' => __('Default 36', 'Basic'),
	    )
	);

	// H2 Font Size
	$wp_customize->add_setting(
		'h2_font_size',
		array(
			'default' => '28',
			'sanitize_callback' => 'sanitize_font_size'
		)
	);

	$wp_customize->add_control(
	    'h2_font_size',
	    array(
	        'label' => __('H2 Font Size (px)', 'Basic'),
	        'section' => 'fonts',
	        'description' => __('Default 28', 'Basic'),
	    )
	);

	// H3 Font Size
	$wp_customize->add_setting(
		'h3_font_size',
		array(
			'default' => '24',
			'sanitize_callback' => 'sanitize_font_size'
		)
	);

	$wp_customize->add_control(
	    'h3_font_size',
	    array(
	        'label' => __('H3 Font Size (px)', 'Basic'),
	        'section' => 'fonts',
	        'description' => __('Default 24', 'Basic'),
	    )
	);

	// H4 Font Size
	$wp_customize->add_setting(
		'h4_font_size',
		array(
			'default' => '22',
			'sanitize_callback' => 'sanitize_font_size'
		)
	);

	$wp_customize->add_control(
	    'h4_font_size',
	    array(
	        'label' => __('H4 Font Size (px)', 'Basic'),
	        'section' => 'fonts',
	        'description' => __('Default 22', 'Basic'),
	    )
	);

	// H5 Font Size
	$wp_customize->add_setting(
		'h5_font_size',
		array(
			'default' => '18',
			'sanitize_callback' => 'sanitize_font_size'
		)
	);

	$wp_customize->add_control(
	    'h5_font_size',
	    array(
	        'label' => __('H5 Font Size (px)', 'Basic'),
	        'section' => 'fonts',
	        'description' => __('Default 18', 'Basic'),
	    )
	);

	// H6 Font Size
	$wp_customize->add_setting(
		'h6_font_size',
		array(
			'default' => '16',
			'sanitize_callback' => 'sanitize_font_size'
		)
	);

	$wp_customize->add_control(
	    'h6_font_size',
	    array(
	        'label' => __('H6 Font Size (px)', 'Basic'),
	        'section' => 'fonts',
	        'description' => __('Default 16', 'Basic'),
	    )
	);

	/**
	 * Portfolio Filter Font Settings
	 */
	$wp_customize->add_setting( 
		'portfolio_section',
		array(
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    new Section_Heading(
	        $wp_customize,
	        'portfolio_section',
	        array(
	            'label' => __('Portfolio Filter', 'Basic'),
	            'section' => 'fonts',
	            'settings' => 'portfolio_section'
	        )
	    )
	);

	// Filter Font
	$wp_customize->add_setting(
	    'filter_font',
	    array(
	        'default' => 'secondary',
	        'sanitize_callback' => 'sanitize_font'
	    )
	);
	 
	$wp_customize->add_control(
	    'filter_font',
	    array(
	        'type' => 'select',
	        'label' => __('Filter Font', 'Basic'),
	        'section' => 'fonts',
	        'description' => __('Select the font you want to use for the portfolio filter.', 'Basic'),
	       	'choices' => array(
	        	'primary' => __('Primary Font', 'Basic'),
	        	'secondary' => __('Secondary Font', 'Basic'),
	        )
	    )
	);

	// Filter Font Size
	$wp_customize->add_setting(
		'filter_font_size',
		array(
			'default' => '12',
			'sanitize_callback' => 'sanitize_font_size'
		)
	);

	$wp_customize->add_control(
	    'filter_font_size',
	    array(
	        'label' => __('Filter Font Size (px)', 'Basic'),
	        'section' => 'fonts',
	        'description' => __('Default 12', 'Basic'),
	    )
	);

	// Filter Font Weight
	$wp_customize->add_setting(
		'filter_font_weight',
		array(
			'default' => '300',
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    'filter_font_weight',
	    array(
	        'label' => __('Filter Font Weight', 'Basic'),
	        'section' => 'fonts',
	        'description' => __('Set the font weight for the portfolio filter. Default is 300. Values 100 - 900.', 'Basic'),
	    )
	);

	// Filter Text Transform
	$wp_customize->add_setting(
		'filter_text_transform',
		array(
			'default' => 'uppercase',
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    'filter_text_transform',
	    array(
	        'label' => __('Filter Text Transform', 'Basic'),
	        'section' => 'fonts',
	        'description' => __('Set the text transform property. Values: none, capitalize, uppercase, lowercase, initial, inherit. Default is uppercase.', 'Basic'),
	    )
	);

	// Filter Letter Spacing
	$wp_customize->add_setting(
		'filter_letter_spacing',
		array(
			'default' => '3',
			'sanitize_callback' => 'sanitize_letter_spacing'
		)
	);

	$wp_customize->add_control(
	    'filter_letter_spacing',
	    array(
	        'label' => __('Filter Letter Spacing', 'Basic'),
	        'section' => 'fonts',
	        'description' => __('Set the spacing (in pixels) in between characters for the portfolio filter. Default 2. Values -6 to 8.', 'Basic'),
	    )
	);

	/**
	 * Portfolio Item Title Font Settings
	 */
	$wp_customize->add_setting( 
		'portfolio_item_title_font_section',
		array(
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    new Section_Heading(
	        $wp_customize,
	        'portfolio_item_title_font_section',
	        array(
	            'label' => __('Portfolio Item Titles', 'Basic'),
	            'section' => 'fonts',
	            'settings' => 'portfolio_item_title_font_section'
	        )
	    )
	);

	// Portfolio Item Title Font
	$wp_customize->add_setting(
	    'portfolio_item_title_font',
	    array(
	        'default' => 'primary',
	        'sanitize_callback' => 'sanitize_font'
	    )
	);
	 
	$wp_customize->add_control(
	    'portfolio_item_title_font',
	    array(
	        'type' => 'select',
	        'label' => __('Title Font', 'Basic'),
	        'section' => 'fonts',
	        'description' => __('Select the font you want to use for the portfolio item titles on portfolio listing pages.', 'Basic'),
	       	'choices' => array(
	        	'primary' => __('Primary Font', 'Basic'),
	        	'secondary' => __('Secondary Font', 'Basic'),
	        )
	    )
	);

	// Footer Font Size
	$wp_customize->add_setting(
		'portfolio_item_title_font_size',
		array(
			'default' => '12',
			'sanitize_callback' => 'sanitize_font_size'
		)
	);

	$wp_customize->add_control(
	    'portfolio_item_title_font_size',
	    array(
	        'label' => __('Title Font Size (px)', 'Basic'),
	        'section' => 'fonts',
	        'description' => __('Default 12', 'Basic'),
	    )
	);

	// Footer Font Weight
	$wp_customize->add_setting(
		'portfolio_item_title_font_weight',
		array(
			'default' => '600',
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    'portfolio_item_title_font_weight',
	    array(
	        'label' => __('Title Font Weight', 'Basic'),
	        'section' => 'fonts',
	        'description' => __('Set the font weight for footer text. Default is 600. Values 100 - 900.', 'Basic'),
	    )
	);

	// Footer Text Transform
	$wp_customize->add_setting(
		'portfolio_item_title_text_transform',
		array(
			'default' => 'uppercase',
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    'portfolio_item_title_text_transform',
	    array(
	        'label' => __('Title Text Transform', 'Basic'),
	        'section' => 'fonts',
	        'description' => __('Set the text transform property. Values: none, capitalize, uppercase, lowercase, initial, inherit. Default is uppercase.', 'Basic'),
	    )
	);

	// Footer Letter Spacing
	$wp_customize->add_setting(
		'portfolio_item_title_letter_spacing',
		array(
			'default' => '3',
			'sanitize_callback' => 'sanitize_letter_spacing'
		)
	);

	$wp_customize->add_control(
	    'portfolio_item_title_letter_spacing',
	    array(
	        'label' => __('Title Letter Spacing', 'Basic'),
	        'section' => 'fonts',
	        'description' => __('Set the spacing (in pixels) in between characters for item titles. Default 3. Values -6 to 8.', 'Basic'),
	    )
	);

	/**
	 * Portfolio Item Categories Font Settings
	 */
	$wp_customize->add_setting( 
		'portfolio_item_cat_font_section',
		array(
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    new Section_Heading(
	        $wp_customize,
	        'portfolio_item_cat_font_section',
	        array(
	            'label' => __('Portfolio Item Categories', 'Basic'),
	            'section' => 'fonts',
	            'settings' => 'portfolio_item_cat_font_section'
	        )
	    )
	);

	// Portfolio Categories Font
	$wp_customize->add_setting(
	    'portfolio_item_cat_font',
	    array(
	        'default' => 'primary',
	        'sanitize_callback' => 'sanitize_font'
	    )
	);
	 
	$wp_customize->add_control(
	    'portfolio_item_cat_font',
	    array(
	        'type' => 'select',
	        'label' => __('Categories Font', 'Basic'),
	        'section' => 'fonts',
	        'description' => __('Select the font you want to use for categories listed below the titles on portfolio listing pages.', 'Basic'),
	       	'choices' => array(
	        	'primary' => __('Primary Font', 'Basic'),
	        	'secondary' => __('Secondary Font', 'Basic'),
	        )
	    )
	);

	// Portfolio Categories Font Size
	$wp_customize->add_setting(
		'portfolio_item_cat_font_size',
		array(
			'default' => '12',
			'sanitize_callback' => 'sanitize_font_size'
		)
	);

	$wp_customize->add_control(
	    'portfolio_item_cat_font_size',
	    array(
	        'label' => __('Categories Font Size (px)', 'Basic'),
	        'section' => 'fonts',
	        'description' => __('Default 12', 'Basic'),
	    )
	);

	// Portfolio Categories Font Weight
	$wp_customize->add_setting(
		'portfolio_item_cat_font_weight',
		array(
			'default' => '400',
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    'portfolio_item_cat_font_weight',
	    array(
	        'label' => __('Categories Font Weight', 'Basic'),
	        'section' => 'fonts',
	        'description' => __('Set the font weight for footer text. Default is 400. Values 100 - 900.', 'Basic'),
	    )
	);

	// Portfolio Categories Text Transform
	$wp_customize->add_setting(
		'portfolio_item_cat_text_transform',
		array(
			'default' => 'capitalize',
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    'portfolio_item_cat_text_transform',
	    array(
	        'label' => __('Categories Text Transform', 'Basic'),
	        'section' => 'fonts',
	        'description' => __('Set the text transform property. Values: none, capitalize, uppercase, lowercase, initial, inherit. Default is capitalize.', 'Basic'),
	    )
	);

	// Portfolio Categories Letter Spacing
	$wp_customize->add_setting(
		'portfolio_item_cat_letter_spacing',
		array(
			'default' => '1',
			'sanitize_callback' => 'sanitize_letter_spacing'
		)
	);

	$wp_customize->add_control(
	    'portfolio_item_cat_letter_spacing',
	    array(
	        'label' => __('Categories Letter Spacing', 'Basic'),
	        'section' => 'fonts',
	        'description' => __('Set the spacing (in pixels) in between characters for categories listed below the title. Default 1. Values -6 to 8.', 'Basic'),
	    )
	);

	/**
	 * Footer Font Settings
	 */
	$wp_customize->add_setting( 
		'footer_font_section',
		array(
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    new Section_Heading(
	        $wp_customize,
	        'footer_font_section',
	        array(
	            'label' => __('Footer', 'Basic'),
	            'section' => 'fonts',
	            'settings' => 'footer_font_section'
	        )
	    )
	);

	// Footer Font
	$wp_customize->add_setting(
	    'footer_font',
	    array(
	        'default' => 'secondary',
	        'sanitize_callback' => 'sanitize_font'
	    )
	);
	 
	$wp_customize->add_control(
	    'footer_font',
	    array(
	        'type' => 'select',
	        'label' => __('Footer Font', 'Basic'),
	        'section' => 'fonts',
	        'description' => __('Select the font you want to use for the footer.', 'Basic'),
	       	'choices' => array(
	        	'primary' => __('Primary Font', 'Basic'),
	        	'secondary' => __('Secondary Font', 'Basic'),
	        )
	    )
	);

	// Footer Font Size
	$wp_customize->add_setting(
		'footer_font_size',
		array(
			'default' => '11',
			'sanitize_callback' => 'sanitize_font_size'
		)
	);

	$wp_customize->add_control(
	    'footer_font_size',
	    array(
	        'label' => __('Footer Font Size (px)', 'Basic'),
	        'section' => 'fonts',
	        'description' => __('Default 11', 'Basic'),
	    )
	);

	// Footer Font Weight
	$wp_customize->add_setting(
		'footer_font_weight',
		array(
			'default' => '400',
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    'footer_font_weight',
	    array(
	        'label' => __('Footer Font Weight', 'Basic'),
	        'section' => 'fonts',
	        'description' => __('Set the font weight for footer text. Default is 400. Values 100 - 900.', 'Basic'),
	    )
	);

	// Footer Text Transform
	$wp_customize->add_setting(
		'footer_text_transform',
		array(
			'default' => 'uppercase',
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    'footer_text_transform',
	    array(
	        'label' => __('Footer Text Transform', 'Basic'),
	        'section' => 'fonts',
	        'description' => __('Set the text transform property. Values: none, capitalize, uppercase, lowercase, initial, inherit. Default is uppercase.', 'Basic'),
	    )
	);

	// Footer Letter Spacing
	$wp_customize->add_setting(
		'footer_letter_spacing',
		array(
			'default' => '3',
			'sanitize_callback' => 'sanitize_letter_spacing'
		)
	);

	$wp_customize->add_control(
	    'footer_letter_spacing',
	    array(
	        'label' => __('Footer Letter Spacing', 'Basic'),
	        'section' => 'fonts',
	        'description' => __('Set the spacing (in pixels) in between characters for font text. Default 3. Values -6 to 8.', 'Basic'),
	    )
	);

	/**
	 * Blog
	 */
	$wp_customize->add_section(
		'blog',
		array(
			'title' => __('Blog', 'Basic'),
			'priority' => 30
		)
	);

	// Choose Blog Style
	$wp_customize->add_setting(
	    'blog_layout',
	    array(
	        'default' => 'classic',
	        'sanitize_callback' => 'sanitize_blog_layout'
	    )
	);
	 
	$wp_customize->add_control(
	    'blog_layout',
	    array(
	        'type' => 'select',
	        'label' => __('Blog Layout', 'Basic'),
	        'section' => 'blog',
	        'choices' => array(
	        	'classic' => __('Classic', 'Basic'),
	        	'grid' => __('Grid', 'Basic'),
	            'fullwidth' => __('Fullwidth', 'Basic'),
	            //'classic' => 'Classic'
	        ),
	    )
	);

	// Blog Title
	$wp_customize->add_setting(
		'blog_title',
		array(
			'default' => __('Our Blog', 'Basic'),
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    'blog_title',
	    array(
	        'label' => __('Blog Title', 'Basic'),
	        'description' => __('Only applies if the homepage is set to display the blog.', 'Basic'),
	        'section' => 'blog'
	    )
	);

	// Blog Sub Title
	$wp_customize->add_setting(
		'blog_subtitle',
		array(
			'default' => __('This is an optional subtitle.', 'Basic'),
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    'blog_subtitle',
	    array(
	    	'type' => 'textarea',
	        'label' => __('Blog Subtitle', 'Basic'),
	        'description' => __('Only applies if the homepage is set to display the blog.', 'Basic'),
	        'section' => 'blog'
	    )
	);

	// Show Title
	$wp_customize->add_setting(
		'show_blog_title',
		array(
			'default' => true,
			'sanitize_callback' => 'sanitize_checkbox'
		)
	);

	$wp_customize->add_control(
	    'show_blog_title',
	    array(
	    	'type' => 'checkbox',
	        'label' => __('Show Blog Title', 'Basic'),
	        'description' => __('Only applies if the homepage is set to display the blog.', 'Basic'),
	        'section' => 'blog'
	    )
	);

	// "Read more" text
	$wp_customize->add_setting(
		'read_more',
		array(
			'default' => __('Read More', 'Basic'),
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    'read_more',
	    array(
	        'label' => __('Read More Text', 'Basic'),
	        'section' => 'blog'
	    )
	);

	// Post Meta Settings
	$wp_customize->add_setting( 
		'post_meta_section',
		array(
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    new Section_Heading(
	        $wp_customize,
	        'post_meta_section',
	        array(
	            'label' => __('Post Meta', 'Basic'),
	            'section' => 'blog',
	            'settings' => 'post_meta_section'
	        )
	    )
	);

	// Show date
	$wp_customize->add_setting(
		'show_date',
		array(
			'default' => true,
			'sanitize_callback' => 'sanitize_checkbox'
		)
	);

	$wp_customize->add_control(
		'show_date',
		array(
			'type' => 'checkbox',
			'label' => __('Show date', 'Basic'),
			'section' => 'blog'
		)
	);

	// Show comments link
	$wp_customize->add_setting(
		'show_comments',
		array(
			'default' => true,
			'sanitize_callback' => 'sanitize_checkbox'
		)
	);

	$wp_customize->add_control(
		'show_comments',
		array(
			'type' => 'checkbox',
			'label' => __('Show comments link', 'Basic'),
			'section' => 'blog'
		)
	);

	// Show categories
	$wp_customize->add_setting(
		'show_categories',
		array(
			'default' => false,
			'sanitize_callback' => 'sanitize_checkbox'
		)
	);

	$wp_customize->add_control(
		'show_categories',
		array(
			'type' => 'checkbox',
			'label' => __('Show categories', 'Basic'),
			'section' => 'blog'
		)
	);

	// Show author
	$wp_customize->add_setting(
		'show_author',
		array(
			'default' => true,
			'sanitize_callback' => 'sanitize_checkbox'
		)
	);

	$wp_customize->add_control(
		'show_author',
		array(
			'type' => 'checkbox',
			'label' => __('Show author\'s name', 'Basic'),
			'section' => 'blog'
		)
	);

	// Pagination
	$wp_customize->add_setting( 
		'pagination_section',
		array(
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    new Section_Heading(
	        $wp_customize,
	        'pagination_section',
	        array(
	            'label' => __('Pagination', 'Basic'),
	            'section' => 'blog',
	            'settings' => 'pagination_section'
	        )
	    )
	);

	// Post navigation type (standard & numbered)
	$wp_customize->add_setting(
	    'post_nav',
	    array(
	        'default' => 'standard',
	        'sanitize_callback' => 'sanitize_blog_post_nav'
	    )
	);
	 
	$wp_customize->add_control(
	    'post_nav',
	    array(
	        'type' => 'select',
	        'label' => __('Post Navigation Type', 'Basic'),
	        'section' => 'blog',
	        'choices' => array(
	            //'default' => 'Infinite Scroll',
	            'standard' => __('Previous/Next', 'Basic'),
	            'numbered' => __('Numbered', 'Basic'),
	        ),
	    )
	);

	// Previous Page Text
	$wp_customize->add_setting(
		'previous_text',
		array(
			'default' => __('← Previous Page', 'Basic'),
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    'previous_text',
	    array(
	        'label' => __('Previous Page Text', 'Basic'),
	        'section' => 'blog'
	    )
	);

	// Next page text
	$wp_customize->add_setting(
		'next_text',
		array(
			'default' => __('Next Page →', 'Basic'),
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    'next_text',
	    array(
	        'label' => __('Next Page Text', 'Basic'),
	        'section' => 'blog'
	    )
	);

	// Single Post Settings
	$wp_customize->add_setting( 
		'single_post_section',
		array(
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    new Section_Heading(
	        $wp_customize,
	        'single_post_section',
	        array(
	            'label' => __('Single Post', 'Basic'),
	            'section' => 'blog',
	            'settings' => 'single_post_section'
	        )
	    )
	);

	// Show author bio
	$wp_customize->add_setting(
		'show_author_info',
		array(
			'default' => true,
			'sanitize_callback' => 'sanitize_checkbox'
		)
	);

	$wp_customize->add_control(
		'show_author_info',
		array(
			'type' => 'checkbox',
			'label' => __('Show author bio', 'Basic'),
			'section' => 'blog'
		)
	);

	// Show post navigation
	$wp_customize->add_setting(
		'show_post_nav',
		array(
			'default' => true,
			'sanitize_callback' => 'sanitize_checkbox'
		)
	);

	$wp_customize->add_control(
		'show_post_nav',
		array(
			'type' => 'checkbox',
			'label' => __('Show post navigation', 'Basic'),
			'section' => 'blog'
		)
	);

	// Show post tags
	$wp_customize->add_setting(
		'show_tags',
		array(
			'default' => false,
			'sanitize_callback' => 'sanitize_checkbox'
		)
	);

	$wp_customize->add_control(
		'show_tags',
		array(
			'type' => 'checkbox',
			'label' => __('Show post tags', 'Basic'),
			'section' => 'blog'
		)
	);

	// Social Sharing
	$wp_customize->add_setting( 
		'social_sharing_section',
		array(
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    new Section_Heading(
	        $wp_customize,
	        'social_sharing_section',
	        array(
	            'label' => __('Social Sharing', 'Basic'),
	            'section' => 'blog',
	            'settings' => 'social_sharing_section'
	        )
	    )
	);

	// Enable Social Sharing
	$wp_customize->add_setting(
		'enable_social',
		array(
			'default' => true,
			'sanitize_callback' => 'sanitize_checkbox'
		)
	);

	$wp_customize->add_control(
		'enable_social',
		array(
			'type' => 'checkbox',
			'label' => __('Enable Social Sharing', 'Basic'),
			'section' => 'blog'
		)
	);

	// Show Facebook
	$wp_customize->add_setting(
		'show_fb',
		array(
			'default' => true,
			'sanitize_callback' => 'sanitize_checkbox'
		)
	);

	$wp_customize->add_control(
		'show_fb',
		array(
			'type' => 'checkbox',
			'label' => __('Enable Facebook share', 'Basic'),
			'section' => 'blog'
		)
	);

	// Show Twitter
	$wp_customize->add_setting(
		'show_twitter',
		array(
			'default' => true,
			'sanitize_callback' => 'sanitize_checkbox'
		)
	);

	$wp_customize->add_control(
		'show_twitter',
		array(
			'type' => 'checkbox',
			'label' => __('Enable Twitter share', 'Basic'),
			'section' => 'blog'
		)
	);

	// Show Google+
	$wp_customize->add_setting(
		'show_gplus',
		array(
			'default' => true,
			'sanitize_callback' => 'sanitize_checkbox'
		)
	);

	$wp_customize->add_control(
		'show_gplus',
		array(
			'type' => 'checkbox',
			'label' => __('Enable Google+ share', 'Basic'),
			'section' => 'blog'
		)
	);

	// Show LinkedIn
	$wp_customize->add_setting(
		'show_linkedin',
		array(
			'default' => true,
			'sanitize_callback' => 'sanitize_checkbox'
		)
	);

	$wp_customize->add_control(
		'show_linkedin',
		array(
			'type' => 'checkbox',
			'label' => __('Enable LinkedIn share', 'Basic'),
			'section' => 'blog'
		)
	);

	// Show Pinterest
	$wp_customize->add_setting(
		'show_pinterest',
		array(
			'default' => true,
			'sanitize_callback' => 'sanitize_checkbox'
		)
	);

	$wp_customize->add_control(
		'show_pinterest',
		array(
			'type' => 'checkbox',
			'label' => __('Enable Pinterest share', 'Basic'),
			'section' => 'blog'
		)
	);

	// Show Reddit
	$wp_customize->add_setting(
		'show_reddit',
		array(
			'default' => true,
			'sanitize_callback' => 'sanitize_checkbox'
		)
	);

	$wp_customize->add_control(
		'show_reddit',
		array(
			'type' => 'checkbox',
			'label' => __('Enable Reddit share', 'Basic'),
			'section' => 'blog'
		)
	);

	// Show Delicious
	$wp_customize->add_setting(
		'show_delicious',
		array(
			'default' => true,
			'sanitize_callback' => 'sanitize_checkbox'
		)
	);

	$wp_customize->add_control(
		'show_delicious',
		array(
			'type' => 'checkbox',
			'label' => __('Enable Delicious share', 'Basic'),
			'section' => 'blog'
		)
	);

	// Show StumbleUpon
	$wp_customize->add_setting(
		'show_stumbleupon',
		array(
			'default' => true,
			'sanitize_callback' => 'sanitize_checkbox'
		)
	);

	$wp_customize->add_control(
		'show_stumbleupon',
		array(
			'type' => 'checkbox',
			'label' => __('Enable StumbleUpon share', 'Basic'),
			'section' => 'blog'
		)
	);

	// Show Tumblr
	$wp_customize->add_setting(
		'show_tumblr',
		array(
			'default' => true,
			'sanitize_callback' => 'sanitize_checkbox'
		)
	);

	$wp_customize->add_control(
		'show_tumblr',
		array(
			'type' => 'checkbox',
			'label' => __('Enable Tumblr share', 'Basic'),
			'section' => 'blog'
		)
	);

	/**
	 * Portfolio
	 */
	$wp_customize->add_section(
		'portfolio',
		array(
			'title' => __('Portfolio', 'Basic'),
			'priority' => 31
		)
	);

	// Choose Portfolio Layout
	$wp_customize->add_setting(
	    'portfolio_layout',
	    array(
	        'default' => 'default',
	        'sanitize_callback' => 'sanitize_portfolio_layout'
	    )
	);
	 
	$wp_customize->add_control(
	    'portfolio_layout',
	    array(
	        'type' => 'select',
	        'label' => __('Portfolio Layout', 'Basic'),
	        'section' => 'portfolio',
	        'choices' => array(
	        	'2col' => __('2 Column', 'Basic'),
	        	'default' => __('3 Column', 'Basic'),
	        	'4col' => __('4 Column', 'Basic'),
	        	'5col' => __('5 Column', 'Basic'),
	        	'3colfullwidth' => __('3 Column Fullwidth', 'Basic'),
	        	'4colfullwidth' => __('4 Column Fullwidth', 'Basic'),
	        	'5colfullwidth' => __('5 Column Fullwidth', 'Basic'),
	        	'2colgrid' => __('2 Column Grid', 'Basic'),
	        	'3colgrid' => __('3 Column Grid', 'Basic'),
	        	'4colgrid' => __('4 Column Grid', 'Basic'),
	        	'5colgrid' => __('5 Column Grid', 'Basic'),
	        	'3colgridfullwidth' => __('3 Column Grid Fullwidth', 'Basic'),
	        	'4colgridfullwidth' => __('4 Column Grid Fullwidth', 'Basic'),
	        	'5colgridfullwidth' => __('5 Column Grid Fullwidth', 'Basic'),
	        ),
	    )
	);

	$wp_customize->add_setting(
		'show_filter',
		array(
			'default' => true,
			'sanitize_callback' => 'sanitize_checkbox'
		)
	);

	$wp_customize->add_control(
		'show_filter',
		array(
			'type' => 'checkbox',
			'label' => __('Show Filter', 'Basic'),
			'section' => 'portfolio'
		)
	);

	// Portfolio Item Spacing
	$wp_customize->add_setting(
		'portfolio_padding',
		array(
			'default' => '20',
			'sanitize_callback' => 'sanitize_portfolio_item_padding'
		)
	);

	$wp_customize->add_control(
	    'portfolio_padding',
	    array(
	        'label' => __('Portfolio Item Spacing', 'Basic'),
	        'section' => 'portfolio',
	        'description' => __('Enter the amount of spacing (in pixels) that you want to be between each item. Default is 20.', 'Basic'),
	    )
	);

	// Portfolio Posts Per Page
	$wp_customize->add_setting(
		'portfolio_posts_per_page',
		array(
			'default' => '9',
			'sanitize_callback' => 'sanitize_portfolio_posts_per_page'
		)
	);

	$wp_customize->add_control(
	    'portfolio_posts_per_page',
	    array(
	        'label' => __('Posts Per Page', 'Basic'),
	        'section' => 'portfolio',
	        'description' => __('Enter the number of items you want to display per page. To display all items set the value to -1. Default is 9.', 'Basic'),
	    )
	);

	// Enable Post Navigation
	$wp_customize->add_setting(
		'enable_post_nav',
		array(
			'default' => true,
			'sanitize_callback' => 'sanitize_checkbox'
		)
	);

	$wp_customize->add_control(
		'enable_post_nav',
		array(
			'type' => 'checkbox',
			'label' => __('Enable Pagination', 'Basic'),
			'section' => 'portfolio'
		)
	);

	// Post navigation type (standard & numbered)
	$wp_customize->add_setting(
	    'portfolio_post_nav',
	    array(
	        'default' => 'default',
	        'sanitize_callback' => 'sanitize_post_nav'
	    )
	);
	 
	$wp_customize->add_control(
	    'portfolio_post_nav',
	    array(
	        'type' => 'select',
	        'label' => __('Pagination Type', 'Basic'),
	        'section' => 'portfolio',
	        'choices' => array(
	            'default' => __('Infinite Scroll', 'Basic'),
	            'arrows' => __('Arrows', 'Basic'),
	            'standard' => __('Previous/Next', 'Basic'),
	            'numbered' => __('Numbered', 'Basic'),
	        ),
	    )
	);

	// Previous Page Text
	$wp_customize->add_setting(
		'portfolio_previous_text',
		array(
			'default' => __('← Previous Page', 'Basic'),
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    'portfolio_previous_text',
	    array(
	        'label' => __('Previous Page Text', 'Basic'),
	        'section' => 'portfolio'
	    )
	);

	// Next page text
	$wp_customize->add_setting(
		'portfolio_next_text',
		array(
			'default' => __('Next Page →', 'Basic'),
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    'portfolio_next_text',
	    array(
	        'label' => __('Next Page Text', 'Basic'),
	        'section' => 'portfolio'
	    )
	);

	// Single Item Hover Settings
	$wp_customize->add_setting( 
		'item_title_section',
		array(
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    new Section_Heading(
	        $wp_customize,
	        'item_title_section',
	        array(
	            'label' => __('Item Options', 'Basic'),
	            'section' => 'portfolio',
	            'settings' => 'item_title_section'
	        )
	    )
	);

	$wp_customize->add_setting(
	    'title_pos',
	    array(
	        'default' => 'hover',
	        'sanitize_callback' => 'sanitize_text_pos'
	    )
	);
	 
	$wp_customize->add_control(
	    'title_pos',
	    array(
	        'type' => 'select',
	        'label' => __('Title Position', 'Basic'),
	        'section' => 'portfolio',
	        'choices' => array(
	        	'hover' => __('Show on Hover', 'Basic'),
	        	'below' => __('Show Below Post', 'Basic'),
	        ),
	    )
	);

	$wp_customize->add_setting(
		'show_item_categories',
		array(
			'default' => true,
			'sanitize_callback' => 'sanitize_checkbox'
		)
	);

	$wp_customize->add_control(
		'show_item_categories',
		array(
			'type' => 'checkbox',
			'label' => __('Show Categories on Hover', 'Basic'),
			'section' => 'portfolio'
		)
	);

	$wp_customize->add_setting(
	    'hover_bg_color',
	    array(
	        'default' => 'white',
	        'sanitize_callback' => 'sanitize_hover_bg_color'
	    )
	);
	 
	$wp_customize->add_control(
	    'hover_bg_color',
	    array(
	        'type' => 'select',
	        'label' => __('Hover Background Color', 'Basic'),
	        'section' => 'portfolio',
	        'choices' => array(
	        	'white' => __('White', 'Basic'),
	        	'black' => __('Black', 'Basic'),
	            'custom' => __('Custom', 'Basic'),
	        ),
	    )
	);

	$wp_customize->add_setting(
	    'custom_hover_bg_color',
	    array(
	        'default' => '#000000',
	        'sanitize_callback' => 'sanitize_hex_color'
	    )
	);

	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'custom_hover_bg_color',
	        array(
	            'label' => __('Custom Hover Background Color', 'Basic'),
	            'section' => 'portfolio',
	            'settings' => 'custom_hover_bg_color',
	            'description' => __('Only applies if "Custom" is set as the hover background color.', 'Basic'),
	        )
	    )
	);

	$wp_customize->add_setting(
	    'custom_hover_text_color',
	    array(
	        'default' => '#ffffff',
	        'sanitize_callback' => 'sanitize_hex_color'
	    )
	);

	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'custom_hover_text_color',
	        array(
	            'label' => __('Custom Hover Text Color', 'Basic'),
	            'section' => 'portfolio',
	            'settings' => 'custom_hover_text_color',
	            'description' => __('Only applies if "Custom" is set as the hover background color.', 'Basic'),
	        )
	    )
	);

	$wp_customize->add_setting(
	    'hover_opacity',
	    array(
	        'default' => 0.9,
	        'sanitize_callback' => 'sanitize_opacity'
	    )
	);
	 
	$wp_customize->add_control(
	    'hover_opacity',
	    array(
	        'type' => 'text',
	        'label' => __('Hover Background Opacity', 'Basic'),
	        'description' => __('Values: 0 - 1. ie. 0.8 = 80%', 'Basic'),
	        'section' => 'portfolio'
	    )
	);

	// Hover Padding
	$wp_customize->add_setting(
		'hover_padding',
		array(
			'default' => 0,
			'sanitize_callback' => 'sanitize_hover_padding'
		)
	);

	$wp_customize->add_control(
	    'hover_padding',
	    array(
	        'label' => __('Hover Padding (px)', 'Basic'),
	        'section' => 'portfolio',
	        'description' => __('Enter the padding (in pixels) you want to have around the hover background. Default is 0.', 'Basic'),
	    )
	);

	/**
	 * Shop
	 */
	$wp_customize->add_section(
		'shop',
		array(
			'title' => __('Shop', 'Basic'),
			'priority' => 35,
			'active_callback' => 'is_woocommerce_active'
		)
	);

	// Post navigation type (standard & numbered)
	$wp_customize->add_setting(
	    'shop_layout',
	    array(
	        'default' => 'default',
	        'sanitize_callback' => 'sanitize_shop_layout'
	    )
	);
	 
	$wp_customize->add_control(
	    'shop_layout',
	    array(
	        'type' => 'select',
	        'label' => __('Shop Layout', 'Basic'),
	        'section' => 'shop',
	        'choices' => array(
	            'default' => __('Sidebar', 'Basic'),
	            'fullwidth' => __('Fullwidth', 'Basic')
	        ),
	    )
	);

	/**
	 * Social
	 */
	$wp_customize->add_section(
		'social_profiles',
		array(
			'title' => __('Social', 'Basic'),
			'priority' => 40
		)
	);

	// Facebook Profile URL
	$wp_customize->add_setting(
		'facebook_profile_url',
		array(
			'default' => '#',
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    'facebook_profile_url',
	    array(
	        'label' => __('Facebook Profile URL', 'Basic'),
	        'section' => 'social_profiles'
	    )
	);

	// Twitter Profile URL
	$wp_customize->add_setting(
		'twitter_profile_url',
		array(
			'default' => '#',
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    'twitter_profile_url',
	    array(
	        'label' => __('Twitter Profile URL', 'Basic'),
	        'section' => 'social_profiles'
	    )
	);

	// Instagram Profile URL
	$wp_customize->add_setting(
		'instagram_profile_url',
		array(
			'default' => '#',
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    'instagram_profile_url',
	    array(
	        'label' => __('Instagram Profile URL', 'Basic'),
	        'section' => 'social_profiles'
	    )
	);

	// YouTube Profile URL
	$wp_customize->add_setting(
		'youtube_profile_url',
		array(
			'default' => '#',
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    'youtube_profile_url',
	    array(
	        'label' => __('YouTube Profile URL', 'Basic'),
	        'section' => 'social_profiles'
	    )
	);

	// Dribbble Profile URL
	$wp_customize->add_setting(
		'dribbble_profile_url',
		array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    'dribbble_profile_url',
	    array(
	        'label' => __('Dribbble Profile URL', 'Basic'),
	        'section' => 'social_profiles'
	    )
	);

	// Google Plus Profile URL
	$wp_customize->add_setting(
		'gplus_profile_url',
		array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    'gplus_profile_url',
	    array(
	        'label' => __('Google+ Profile URL', 'Basic'),
	        'section' => 'social_profiles'
	    )
	);

	// Behance Profile URL
	$wp_customize->add_setting(
		'behance_profile_url',
		array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    'behance_profile_url',
	    array(
	        'label' => __('Behance Profile URL', 'Basic'),
	        'section' => 'social_profiles'
	    )
	);

	// Reddit Profile URL
	$wp_customize->add_setting(
		'reddit_profile_url',
		array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    'reddit_profile_url',
	    array(
	        'label' => __('Reddit Profile URL', 'Basic'),
	        'section' => 'social_profiles'
	    )
	);

	// Vine Profile URL
	$wp_customize->add_setting(
		'vine_profile_url',
		array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    'vine_profile_url',
	    array(
	        'label' => __('Vine Profile URL', 'Basic'),
	        'section' => 'social_profiles'
	    )
	);

	// Tumblr Profile URL
	$wp_customize->add_setting(
		'tumblr_profile_url',
		array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    'tumblr_profile_url',
	    array(
	        'label' => __('Tumblr Profile URL', 'Basic'),
	        'section' => 'social_profiles'
	    )
	);

	// Flickr Profile URL
	$wp_customize->add_setting(
		'flickr_profile_url',
		array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    'flicker_profile_url',
	    array(
	        'label' => __('Flicker Profile URL', 'Basic'),
	        'section' => 'social_profiles'
	    )
	);

	// LinkedIn Profile URL
	$wp_customize->add_setting(
		'linkedin_profile_url',
		array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    'linkedin_profile_url',
	    array(
	        'label' => __('LinkedIn Profile URL', 'Basic'),
	        'section' => 'social_profiles'
	    )
	);

	// Pinterest Profile URL
	$wp_customize->add_setting(
		'pinterest_profile_url',
		array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    'pinterest_profile_url',
	    array(
	        'label' => __('Pinterest Profile URL', 'Basic'),
	        'section' => 'social_profiles'
	    )
	);

	// Facebook Profile URL
	$wp_customize->add_setting(
		'vk_profile_url',
		array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    'vk_profile_url',
	    array(
	        'label' => __('VK Profile URL', 'Basic'),
	        'section' => 'social_profiles'
	    )
	);

	// Function to handle AJAX updates
	if ( $wp_customize->is_preview() && ! is_admin() ) {
	   add_action( 'wp_footer', 'customize_preview', 21 );
	}

	// Updates the settings in real time using AJAX
	function customize_preview() { ?>
		<?php
		/* Page & Content Width */
		$page_width = get_theme_mod('page_width', 1240);

		/**
		 * Header 
		 */
		$header_height = (get_theme_mod('header_height', 150)) ? get_theme_mod('header_height', 150) : 150;
		$sticky_header = get_theme_mod('sticky_header', false);

		/**
		 * Colors
		 */
		$page_bg_color = get_theme_mod('page_bg_color', '#ffffff');
		$header_bg_color = get_theme_mod('header_bg_color', '#ffffff');
		$text_color = get_theme_mod('text_color', '#000000');
		$link_color = get_theme_mod('link_color', '#0000000');
		$link_hover_color = get_theme_mod('link_hover_color', '#777777');
		$divider_color = get_theme_mod('divider_color', '#eaeaea');

		/* Pages */
		$content_link_color = get_theme_mod('content_link_color', '#999999');
		$content_link_hover_color = get_theme_mod('content_link_hover_color', '#000000');

		/* Headings */
		$headings_color = get_theme_mod('headings_color', '#000000');
		$page_subtitle_color = get_theme_mod('page_subtitle_color', '#bbbbbb');
		$post_title_hover_color = get_theme_mod('post_title_hover_color', '#777777');

		/* Menu */
		$menu_bg_color = get_theme_mod('menu_bg_color', '#ffffff');
		$menu_link_color = get_theme_mod('menu_link_color', '#0000000');
		$menu_link_hover_color = get_theme_mod('menu_link_hover_color', '#a5a5a5');
		$dd_link_color = get_theme_mod('dd_link_color', '#a5a5a5');
		$dd_link_hover_color = get_theme_mod('dd_link_hover_color', '#000000');

		/* Sidebar */
		$widget_title_color = get_theme_mod('sidebar_title_color', '#999999');
		$sidebar_link_color = get_theme_mod('sidebar_link_color', '#000000');
		$sidebar_link_hover_color = get_theme_mod('sidebar_link_hover_color', '#aeaeae');

		/* Footer */
		$footer_bg_color = get_theme_mod('footer_bg_color', '#f6f6f6');
		$footer_text_color = get_theme_mod('footer_text_color', '#000000');
		$footer_link_color = get_theme_mod('footer_link_color', '#000000');
		$footer_link_hover_color = get_theme_mod('footer_link_hover_color', '#777777');

		/* Portfolio Filter */
		$portfolio_filter_link_color = get_theme_mod('portfolio_filter_link_color', '#777777');
		$portfolio_filter_link_hover_color = get_theme_mod('portfolio_filter_link_hover_color', '#000000');

		/**
		 * Fonts
		 */
		$primary_font = get_theme_mod('primary_font', 'Open Sans');
		$secondary_font = get_theme_mod('secondary_font', 'Lato');

		/* Body/Page */
		$body_font = get_theme_mod('body_font', 'primary');

		if($body_font == 'primary') {
			$body_font = $primary_font;
		} else {
			$body_font = $secondary_font;
		}

		$font_size = get_theme_mod('font_size', 15);
		$body_font_weight = get_theme_mod('body_font_weight', 300);
		$body_text_letter_spacing = get_theme_mod('body_text_letter_spacing', 0);

		/* Menu/Nav */
		$menu_font = get_theme_mod('menu_font', 'secondary');

		if($menu_font == 'primary') {
			$menu_font = $primary_font;
		} else {
			$menu_font = $secondary_font;
		}

		$menu_font_size = get_theme_mod('menu_font_size', 28);
		$menu_font_weight = get_theme_mod('menu_font_weight', 300);
		$menu_text_transform = get_theme_mod('menu_text_transform', 'uppercase');
		$menu_text_letter_spacing = get_theme_mod('menu_text_letter_spacing', 4);

		/* Menu Drop Down Links */
		$dd_font_size = get_theme_mod('dd_font_size', 13);
		$dd_font_weight = get_theme_mod('dd_font_weight', 400);
		$dd_text_transform = get_theme_mod('dd_text_transform', 'uppercase');
		$dd_text_letter_spacing = get_theme_mod('dd_text_letter_spacing', 4);

		/* Page/Post Title */
		$page_title_size = get_theme_mod('page_title_size', 36);
		$post_title_size = get_theme_mod('post_title_size', 28);

		/* Headings */
		$headings_font = get_theme_mod('heading_font', 'primary');

		if($headings_font == 'primary') {
			$headings_font = $primary_font;
		} else {
			$headings_font = $secondary_font;
		}

		$headings_font_weight = get_theme_mod('headings_font_weight', 300);
		$headings_text_transform = get_theme_mod('headings_text_transform', 'none');
		$headings_letter_spacing = get_theme_mod('headings_letter_spacing', 0);
		$h1_font_size = get_theme_mod('h1_font_size', 36);
		$h2_font_size = get_theme_mod('h2_font_size', 28);
		$h3_font_size = get_theme_mod('h3_font_size', 24);
		$h4_font_size = get_theme_mod('h4_font_size', 22);
		$h5_font_size = get_theme_mod('h5_font_size', 18);
		$h6_font_size = get_theme_mod('h6_font_size', 16);

		/* Sidebar/Widgets */
		$widget_title_font = get_theme_mod('sidebar_title_font', 'primary');

		if($widget_title_font == 'primary') {
			$widget_title_font = $primary_font;
		} else {
			$widget_title_font = $secondary_font;
		}

		$widget_title_size = get_theme_mod('sidebar_title_size', 12);
		$widget_title_font_weight = get_theme_mod('sidebar_title_font_weight', 400);
		$widget_title_text_transform = get_theme_mod('sidebar_title_text_transform', 'uppercase');
		$widget_title_letter_spacing = get_theme_mod('sidebar_title_letter_spacing', 3);

		/* Portfolio Filter */
		$filter_font = get_theme_mod('filter_font', 'secondary');

		if($filter_font == 'primary') {
			$filter_font = $primary_font;
		} else {
			$filter_font = $secondary_font;
		}

		$filter_font_size = get_theme_mod('filter_font_size', 12);
		$filter_font_weight = get_theme_mod('filter_font_weight', 300);
		$filter_text_transform = get_theme_mod('filter_text_transform', 'uppercase');
		$filter_letter_spacing = get_theme_mod('filter_letter_spacing', 3);

		/* Portfolio Item Titles */
		$portfolio_item_title_font = get_theme_mod('portfolio_item_title_font', 'primary');

		if($portfolio_item_title_font == 'primary') {
			$portfolio_item_title_font = $primary_font;
		} else {
			$portfolio_item_title_font = $secondary_font;
		}

		$portfolio_item_title_font_size = get_theme_mod('portfolio_item_title_font_size', 12);
		$portfolio_item_title_font_weight = get_theme_mod('portfolio_item_title_font_weight', 600);
		$portfolio_item_title_text_transform = get_theme_mod('portfolio_item_title_text_transform', 'uppercase');
		$portfolio_item_title_letter_spacing = get_theme_mod('portfolio_item_title_letter_spacing', 3);

		/* Portfolio Item Categories */
		$portfolio_item_cat_font = get_theme_mod('portfolio_item_cat_font', 'primary');

		if($portfolio_item_cat_font == 'primary') {
			$portfolio_item_cat_font = $primary_font;
		} else {
			$portfolio_item_cat_font = $secondary_font;
		}

		$portfolio_item_cat_font_size = get_theme_mod('portfolio_item_cat_font_size', 12);
		$portfolio_item_cat_font_weight = get_theme_mod('portfolio_item_cat_font_weight', 400);
		$portfolio_item_cat_text_transform = get_theme_mod('portfolio_item_cat_text_transform', 'capitalize');
		$portfolio_item_cat_letter_spacing = get_theme_mod('portfolio_item_cat_letter_spacing', 2);

		/* Footer Font */
		$footer_font = get_theme_mod('footer_font', 'secondary');

		if($footer_font == 'primary') {
			$footer_font = $primary_font;
		} else {
			$footer_font = $secondary_font;
		}

		$footer_font_size = get_theme_mod('footer_font_size', 11);
		$footer_font_weight = get_theme_mod('footer_font_weight', 400);
		$footer_text_transform = get_theme_mod('footer_text_transform', 'uppercase');
		$footer_letter_spacing = get_theme_mod('footer_letter_spacing', 3);

		/**
		 * Portfolio
		 */
		$portfolio_padding = get_theme_mod('portfolio_padding', '20') / 2;
		$hover_padding = get_theme_mod('hover_padding', 0);

		/* Get custom hover color for portfolio posts and convert to rgba */
		$opacity = get_theme_mod('hover_opacity', 0.8);
		$rgb = cg_hex2rgb(get_theme_mod('custom_hover_bg_color', '#000000'), $opacity);
		
		$custom_hover_bg_color = sprintf('rgba(%s, %s, %s, %s)', $rgb[0], $rgb[1], $rgb[2], $rgb[3]);

		$custom_hover_text_color = get_theme_mod('custom_hover_text_color', '#ffffff');
		if(!$custom_hover_text_color) $custom_hover_text_color = '#ffffff';

		/** 
		 * Get Shop Custom Hover Color
		 */
		// $shop_hover_opacity = (get_theme_mod('shop_hover_opacity', 0.9)) ? get_theme_mod('shop_hover_opacity', 0.9) : 0.9;
		// $rgb = hex2rgb( get_theme_mod('shop_custom_hover_bg_color', '#000000'), $shop_hover_opacity);
		// $shop_custom_hover_bg_color = sprintf('rgba(%s, %s, %s, %s)', $rgb[0], $rgb[1], $rgb[2], $rgb[3]);

		// $shop_custom_hover_text_color = get_theme_mod('shop_custom_hover_text_color', '#ffffff');
		// if(!$shop_custom_hover_text_color) $shop_custom_hover_text_color = '#ffffff';

		?>
		<style type="text/css">
		body {
			background-color: <?php echo $page_bg_color; ?>;
		}

		body,
		p {
			font-family: '<?php echo $body_font; ?>';
			font-size: <?php echo $font_size; ?>px;
			font-weight: <?php echo $body_font_weight; ?>;
			letter-spacing: <?php echo $body_text_letter_spacing; ?>px;
			color: <?php echo $text_color; ?>;
		}

		h1,
		h2,
		h3,
		h4,
		h5,
		h6,
		.page-title h3 {
			font-family: '<?php echo $headings_font; ?>';
			font-weight: <?php echo $headings_font_weight; ?>;
			text-transform: <?php echo $headings_text_transform; ?>;
			letter-spacing: <?php echo $headings_letter_spacing; ?>px;
			color: <?php echo $headings_color; ?>;
		}

		.page-title p {
			font-family: '<?php echo $headings_font; ?>';
			font-weight: <?php echo $headings_font_weight; ?>;
			font-weight: <?php echo $headings_font_weight; ?>;
			letter-spacing: <?php echo $body_text_letter_spacing; ?>px;
		}

		.page-title p.lead {
			color: <?php echo $page_subtitle_color; ?>;
		}

		a { color: <?php echo $link_color; ?>; }
		a:hover { color: <?php echo $link_hover_color; ?>; }

		p a { color: <?php echo $content_link_color; ?>; }
		p a:hover { color: <?php echo $content_link_hover_color; ?>; }

		h1 { font-size: <?php echo $h1_font_size; ?>px; }
		h2 { font-size: <?php echo $h2_font_size; ?>px; }
		h3 { font-size: <?php echo $h3_font_size; ?>px; }
		h4 { font-size: <?php echo $h4_font_size; ?>px; }
		h5 { font-size: <?php echo $h5_font_size; ?>px; }
		h6 { font-size: <?php echo $h6_font_size; ?>px; }

		.container { max-width: <?php echo $page_width; ?>px; }

		/**
		 * Header 
		 */
		#header #logo,
		#header .menu-toggle {
			height: <?php echo $header_height; ?>px;
		}

		#header {
			height: <?php echo $header_height; ?>px;
			background-color: <?php echo $header_bg_color; ?>;
		}

		<?php if($sticky_header == true) { ?>
		#header { 
			position: fixed; 
			z-index: 99999;
			background-color: <?php echo $header_bg_color; ?>;
		}
		#page {
			margin-top: <?php echo $header_height; ?>px;
		}
		<?php } else { ?>
		#header {
			position: static;
		}
		#page {
			margin-top: 0;
		}
		<?php } ?>

		/**
		 * Menu 
		 */
		#navigation,
		#navigation footer {
			background-color: <?php echo $menu_bg_color; ?>;
		}

		#menu-right {
			height: <?php echo $header_height; ?>px;
		}

		.main-menu li a {
			font-family: '<?php echo $menu_font; ?>';
			font-size: <?php echo $menu_font_size; ?>px;
			font-weight: <?php echo $menu_font_weight; ?>;
			letter-spacing: <?php echo $menu_text_letter_spacing; ?>px;
			text-transform: <?php echo $menu_text_transform; ?>;
			color: <?php echo $menu_link_color; ?>;
		}

		.main-menu li a:hover {
			color: <?php echo $menu_link_hover_color; ?>;
		}

		.main-menu li li a {
			font-size: <?php echo $dd_font_size; ?>px;
			font-weight: <?php echo $dd_font_weight; ?>;
			letter-spacing: <?php echo $dd_text_letter_spacing; ?>px;
			text-transform: <?php echo $dd_text_transform; ?>;
			color: <?php echo $dd_link_color; ?>;
		}

		.main-menu li li a:hover {
			color: <?php echo $dd_link_hover_color; ?>;
		}

		/**
		 * Post 
		 */
		.blog article,
		.search article,
		.archive article {
			border-bottom: 1px solid <?php echo $divider_color; ?>;
		}

		h3.post-title { font-size: <?php echo $post_title_size; ?>px; }

		h3.post-title a {
			color: <?php echo $headings_color; ?>;
		}

		h3.post-title a:hover {
			color: <?php echo $post_title_hover_color; ?>;
		}

		.page-title h1,
		.page-title h3 { font-size: <?php echo $page_title_size; ?>px; }

		/**
		 * Sidebar
		 */
		.sidebar h3.widgettitle {
			font-family: '<?php echo $widget_title_font; ?>';
			font-size: <?php echo $widget_title_size; ?>px;
			font-weight: <?php echo $widget_title_font_weight; ?>;
			text-transform: <?php echo $widget_title_text_transform; ?>;
			letter-spacing: <?php echo $widget_title_letter_spacing; ?>px;
			color: <?php echo $widget_title_color; ?>
		}

		.sidebar a {
			color: <?php echo $sidebar_link_color; ?>;
		}

		.sidebar a:hover {
			color: <?php echo $sidebar_link_hover_color; ?>;
		}

		.widget ul li {
			border-bottom: 1px solid <?php echo $divider_color; ?>;
		}

		.recent-posts .widget-post-meta .post-date { color: <?php echo $content_link_color; ?>; }

		/**
		 * Portfolio
		 */
		/* Item Title */
		.item h3 {
			font-family: '<?php echo $portfolio_item_title_font; ?>';
			font-size: <?php echo $portfolio_item_title_font_size; ?>px;
			font-weight: <?php echo $portfolio_item_title_font_weight; ?>;
			letter-spacing: <?php echo $portfolio_item_title_letter_spacing; ?>px;
			text-transform: <?php echo $portfolio_item_title_text_transform; ?>
		}

		/* Item Categories */
		.terms {
			font-family: '<?php echo $portfolio_item_cat_font; ?>';
			font-size: <?php echo $portfolio_item_cat_font_size; ?>px;
			font-weight: <?php echo $portfolio_item_cat_font_weight; ?>;
			letter-spacing: <?php echo $portfolio_item_cat_letter_spacing; ?>px;
			text-transform: <?php echo $portfolio_item_cat_text_transform; ?>
		}

		/* Filter */
		.filter ul li a {
			font-family: '<?php echo $filter_font; ?>';
			font-size: <?php echo $filter_font_size; ?>px;
			font-weight: <?php echo $filter_font_weight; ?>;
			letter-spacing: <?php echo $filter_letter_spacing; ?>px;
			text-transform: <?php echo $filter_text_transform; ?>;
			color: <?php echo $portfolio_filter_link_color; ?>;
		}

		.filter ul li a:hover,
		.filter ul li a.selected {
			color: <?php echo $portfolio_filter_link_hover_color; ?>;
		}

		/**
		 * Footer
		 */
		#footer,
		#footer p {
			font-family: '<?php echo $footer_font; ?>';
			font-size: <?php echo $footer_font_size; ?>px;
			font-weight: <?php echo $footer_font_weight; ?>;
			letter-spacing: <?php echo $footer_letter_spacing; ?>px;
			text-transform: <?php echo $footer_text_transform; ?>;	
		}

		#footer {
			background-color: <?php echo $footer_bg_color; ?>;
			color: <?php echo $footer_text_color; ?>;
		}

		#footer p,
		#footer p.copyright {
			color: <?php echo $footer_text_color; ?>;
		}

		#footer a {
			color: <?php echo $footer_link_color; ?>;
		}

		#footer a:hover {
			color: <?php echo $footer_link_hover_color; ?>;
		}

		/**
		 * WooCommerce
		 */
		.woocommerce a.remove {
			color: #333!important;
		}

		.woocommerce a.remove:hover {
			color: #999!important;
		}

		/**
		 * Responsive
		 */
		@media only screen and ( max-width: 768px ) {
			.page-title h1,
			.page-title h3 {
				font-size: <?php echo $page_title_size - 6; ?>px;
			}
			.page-title h3 span {
				font-size: <?php echo $page_title_size - 10; ?>px;
			}
		}

		<?php if(get_theme_mod('custom_css', '') != '') {
			echo esc_html(get_theme_mod('custom_css'));
		} ?>
		</style>

	<?php }

}
add_action( 'customize_register', 'basic_customizer' );

function is_woocommerce_active() {
	if(class_exists('WooCommerce')) {
		return true;
	} else {
		return false;
	}
}

/*
 * Sanitization Functions
 */
function sanitize_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}

function sanitize_code( $input ) {
	$allowed_html = array(
		'style' => array(
			'type' => array()
		),
		'script' => array(
			'type' => array()
		),
		'link' => array(
			'rel' => array(),
			'href' => array()
		),
		'div' => array(
			'class' => array(),
			'id' => array(),
			'style' => array()
		)
	);

	return wp_kses( $input, $allowed_html );
}

function sanitize_hover_padding( $input ) {
	if( is_numeric( $input ) ) {
		if( $input > 100 ) {
			return 25;
		} else {
			return $input;
		}
	} else {
		return 0;
	}
}

function sanitize_related_posts_no( $input ) {
	if( is_numeric( $input ) ) {
		if( $input >= 1 && $input <= 4 ) {
			return intval( $input );
		} else {
			return 3;
		}
	} else {
		return '';
	}
}

function sanitize_footer_widget_areas( $input ) {
	if( is_numeric( $input ) ) {
		if( $input >= 1 && $input <= 4 ) {
			return intval( $input );
		} else {
			return 4;
		}
	} else {
		return '';
	}
}

function sanitize_page_width( $input ) {
	if( is_numeric( $input ) ) {
		if( $input >= 600 && $input <= 1920 ) {
			return intval( $input );
		} else {
			return 980;
		}
	} else {
		return '';
	}
}

function sanitize_content_width( $input ) {
	if( is_numeric( $input ) ) {
		if( $input >= 300 && $input <= 1920 ) {
			return intval( $input );
		} else {
			return 980;
		}
	} else {
		return '';
	}
}

function sanitize_nav_style( $input ) {
	$values = array(
		'fullscreen',
		'right',
		'classic',
		'classictoggle'
	);

	if( !in_array( $input, $values ) ) {
		return 'fullscreen';
	} else {
		return $input;
	}
}

function sanitize_fullscreen_nav_style( $input ) {
	$values = array(
		'stacked',
		'sidebyside'
	);

	if( !in_array( $input, $values ) ) {
		return 'stacked';
	} else {
		return $input;
	}
}

function sanitize_page_layout( $input ) {
	$values = array(
		'default',
		'sidebar',
		'sidebarleft'
	);

	if( !in_array( $input, $values ) ) {
		return 'default';
	} else {
		return $input;
	}
}

function sanitize_shop_layout($input) {
	if($input == 'default' || $input == 'fullwidth') {
		return $input;
	} else {
		return 'default';
	}
}

function sanitize_font_size( $input ) {
	if( is_numeric( $input ) ) {
		if( $input >= 4 && $input <= 100 ) {
			return intval( $input );
		} else {
			return 17;
		}
	} else {
		return '';
	}
}

function sanitize_letter_spacing( $input ) {
	if( is_numeric( $input ) ) {
		if( $input >= -6 && $input <= 8 ) {
			return intval( $input );
		} else {
			return 0;
		}
	} else {
		return 0;
	}
}

function sanitize_logo_margin( $input ) {
	if( is_numeric( $input ) ) {
		if( $input >= 0 && $input <= 100 ) {
			return intval( $input );
		} else {
			return 18;
		}
	} else {
		return '';
	}
}

function sanitize_menu_height( $input ) {
	if( is_numeric( $input ) ) {
		if( $input >= 0 && $input <= 300 ) {
			return intval( $input );
		} else {
			return 80;
		}
	} else {
		return '';
	}
}

function sanitize_checkbox( $input ) {
    if ( $input == 1 ) {
        return true;
    } else {
        return false;
    }

    return false;
}

function sanitize_bg_text( $input ) {
    return wp_kses( 
    	$input, 
    	array(
    		'a' => array(
		        'href' => array(),
		        'title' => array(),
		        'class' => array()
		    ),
		    'br' => array(),
		    'em' => array(),
		    'strong' => array(),
		    'h1' => array(),
		    'h2' => array(),
		    'h3' => array(),
		    'h4' => array(),
		    'h5' => array(),
		    'h6' => array(),
		    'p' => array(
		    	'class' => array(),
		    	'style' => array()
		    ),
		    'div' => array(
		    	'class' => array()
		    ),
    	)
    );
}

function sanitize_int( $input ) {
	if( is_numeric( $input ) ) {
		if( $input >= 0 && $input <= 100 ) {
			return intval( $input );
		} else {
			return 35;
		}
	} else {
		return '';
	}
}

function sanitize_img( $input ) {
	$types = array( 'jpg', 'png', 'gif' );
	$ext = explode( '.', $input );
	$ext = strtolower( end( $ext ) );

	if( in_array( $ext, $types ) == true ) {
		return $input;
	} else {
		return '';
	}
}

function sanitize_favicon( $input ) {
	$types = array( 'ico', 'png', 'gif' );
	$ext = explode( '.', $input );
	$ext = strtolower( end( $ext ) );

	if( in_array( $ext, $types ) == true ) {
		return $input;
	} else {
		return '';
	}
}

function sanitize_slider_page( $input ) {
	$values = array( 'blog', 'page' );

	if( !in_array( $input, $values ) ) {
		return 'blog';
	} else {
		return $input;
	}
}

function sanitize_text_pos($input) {
	if($input == 'hover' || $input == 'below') {
		return $input;
	} else {
		return 'hover';
	}
}

function sanitize_lightdark( $input ) {
	$values = array( 'light', 'dark' );

	if( !in_array( $input, $values ) ) {
		return 'light';
	} else {
		return $input;
	}
}

function sanitize_featured_slider_type( $input ) {
	$values = array( 'carousel', 'slider' );

	if( !in_array( $input, $values ) ) {
		return 'carousel';
	} else {
		return $input;
	}
}

function sanitize_primary_font($input) {
	global $google_fonts;

	if(!in_array($input, $google_fonts)) {
		return 'Open Sans';
	} else {
		return $input;
	}
}

function sanitize_secondary_font($input) {
	global $google_fonts;

	if(!in_array($input, $google_fonts)) {
		return 'Lato';
	} else {
		return $input;
	}
}

function sanitize_font($input) {
	$options = array(
		'primary',
		'secondary'
	);

	if(!in_array($input, $options)) {
		return 'primary';
	} else {
		return $input;
	}
}

function sanitize_header_layout( $input ) {
	$values = array(
		'default',
		'headertwo',
		'headerthree'
	);

	if( !in_array( $input, $values ) ) {
		return 'default';
	} else {
		return $input;
	}
}

function sanitize_blog_layout( $input ) {
	$values = array( 
		'classic',
		'grid',
		'fullwidth',
		//'classic'
	);

	if( !in_array( $input, $values ) ) {
		return 'default';
	} else {
		return $input;
	}
}

function sanitize_portfolio_layout( $input ) {
	$values = array(
		'2col',
    	'default',
    	'4col',
    	'5col',
    	'3colfullwidth',
    	'4colfullwidth',
    	'5colfullwidth',
    	'2colgrid',
    	'3colgrid',
    	'4colgrid',
    	'5colgrid',
    	'3colgridfullwidth',
    	'4colgridfullwidth',
    	'5colgridfullwidth'
	);

	if( !in_array( $input, $values ) ) {
		return 'default';
	} else {
		return $input;
	}
}

function sanitize_portfolio_item_padding( $input ) {
	if( is_numeric( $input ) ) {
		if( $input < 100 ) {
			return intval( $input );
		} else {
			return 30;
		}
	} else {
		return 30;
	}
}

function sanitize_portfolio_posts_per_page( $input ) {
	if( is_numeric( $input ) ) {
		if( $input >= -1 && $input <= 40 ) {
			return intval( $input );
		} else {
			return 9;
		}
	} else {
		return 9;
	}
}

function sanitize_opacity( $input ) {
	if( is_numeric( $input ) ) {
		if( $input >= 0 || $input <= 1 ) {
			return $input;
		} else {
			return 0.8;
		}
	} else {
		return 0.8;
	}
}

function sanitize_hover_bg_color( $input ) {
	$values = array(
		'none',
		'black',
        'white',
        'custom'
    );

	if( !in_array( $input, $values ) ) {
		return 'hover-white';
	} else {
		return $input;
	}
}

function sanitize_post_nav( $input ) {
	$values = array( 
		'default',
        'arrows',
        'standard',
        'numbered'
    );

	if( !in_array( $input, $values ) ) {
		return 'default';
	} else {
		return $input;
	}
}

function sanitize_blog_post_nav( $input ) {
	$values = array(
        'standard',
        'numbered'
    );

	if( !in_array( $input, $values ) ) {
		return 'standard';
	} else {
		return $input;
	}
}


function sanitize_post_layout( $input ) {
	$values = array( 
		'default',
        'classic'
    );

	if( !in_array( $input, $values ) ) {
		return 'default';
	} else {
		return $input;
	}
}

function sanitize_portfolio_categories( $values ) {

    $multi_values = !is_array( $values ) ? explode( ',', $values ) : $values;

    return !empty( $multi_values ) ? array_map( 'sanitize_text_field', $multi_values ) : array();
}