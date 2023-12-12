<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require "./vendor/autoload.php";

use FuzzySearch\FuzzySearch;

$theirCities = [
    [
        "name"     => "AGADIR",
        "zip_code" => "80000",
    ],
    [
        "name"     => "AIT MELLOUL",
        "zip_code" => "86150",
    ],
    [
        "name"     => "INEZGANE",
        "zip_code" => "86356",
    ],
    [
        "name"     => "TIKIOUINE",
        "zip_code" => "80652",
    ],
    [
        "name"     => "GUELMIM",
        "zip_code" => "81000",
    ],
    [
        "name"     => "BIOUGRA",
        "zip_code" => "87200",
    ],
    [
        "name"     => "LQLIAA",
        "zip_code" => "86357",
    ],
    [
        "name"     => "DRARGUA",
        "zip_code" => "80044",
    ],
    [
        "name"     => "OULAD TEIMA",
        "zip_code" => "83350",
    ],
    [
        "name"     => "TEMSIA",
        "zip_code" => "86602",
    ],
    [
        "name"     => "AOURIR",
        "zip_code" => "80750",
    ],
    [
        "name"     => "TAGHAZOUTE",
        "zip_code" => "80022",
    ],
    [
        "name"     => "TAMRAGHT",
        "zip_code" => "80023",
    ],
    [
        "name"     => "AIT IAAZA",
        "zip_code" => "83200",
    ],
    [
        "name"     => "NOUARA",
        "zip_code" => "83223",
    ],
    [
        "name"     => "SEBT EL GUERDANE",
        "zip_code" => "83400",
    ],
    [
        "name"     => "TANTAMT",
        "zip_code" => "83274",
    ],
    [
        "name"     => "TAROUDANT",
        "zip_code" => "83000",
    ],
    [
        "name"     => "AIT AMIRA",
        "zip_code" => "87052",
    ],
    [
        "name"     => "MASSA",
        "zip_code" => "87452",
    ],
    [
        "name"     => "SIDI BIBI",
        "zip_code" => "87274",
    ],
    [
        "name"     => "TIZNIT",
        "zip_code" => "85000",
    ],
    [
        "name"     => "CASABLANCA",
        "zip_code" => "20000",
    ],
    [
        "name"     => "LAHRAOUYINE",
        "zip_code" => "29004",
    ],
    [
        "name"     => "TIT MELLIL",
        "zip_code" => "29640",
    ],
    [
        "name"     => "BEN AHMED",
        "zip_code" => "26050",
    ],
    [
        "name"     => "BERRECHID",
        "zip_code" => "24232",
    ],
    [
        "name"     => "EL GARA",
        "zip_code" => "26300",
    ],
    [
        "name"     => "GUISSER",
        "zip_code" => "26352",
    ],
    [
        "name"     => "SETTAT",
        "zip_code" => "26014",
    ],
    [
        "name"     => "AIN NZARH",
        "zip_code" => "26022",
    ],
    [
        "name"     => "AIN HARROUDA",
        "zip_code" => "28630",
    ],
    [
        "name"     => "BENI YAKHLEF",
        "zip_code" => "28815",
    ],
    [
        "name"     => "ECH CHALLALATE",
        "zip_code" => "28822",
    ],
    [
        "name"     => "EL MANSOURIA",
        "zip_code" => "13072",
    ],
    [
        "name"     => "FEDALATE",
        "zip_code" => "13003",
    ],
    [
        "name"     => "MOHAMMEDIA",
        "zip_code" => "28013",
    ],
    [
        "name"     => "OULAD MRAH",
        "zip_code" => "26032",
    ],
    [
        "name"     => "SIDI EL MEKKI",
        "zip_code" => "26114",
    ],
    [
        "name"     => "BENSLIMANE",
        "zip_code" => "13000",
    ],
    [
        "name"     => "BOUZNIKA",
        "zip_code" => "13100",
    ],
    [
        "name"     => "CHERRAT",
        "zip_code" => "13104",
    ],
    [
        "name"     => "SIDI MOUSSA BEN ALI",
        "zip_code" => "28814",
    ],
    [
        "name"     => "SIDI MOUSSA MAJDOUB",
        "zip_code" => "28823",
    ],
    [
        "name"     => "DAR BOUAZZA",
        "zip_code" => "27223",
    ],
    [
        "name"     => "LAKHIAITA",
        "zip_code" => "26112",
    ],
    [
        "name"     => "OULAD AZZOUZ",
        "zip_code" => "25323",
    ],
    [
        "name"     => "HAD SOUALEM",
        "zip_code" => "26402",
    ],
    [
        "name"     => "SIDI RAHHAL CHAOUIA",
        "zip_code" => "26652",
    ],
    [
        "name"     => "SIDI RAHHAL PLAGE",
        "zip_code" => "26175",
    ],
    [
        "name"     => "AHLAF",
        "zip_code" => "13322",
    ],
    [
        "name"     => "BENI MELLAL",
        "zip_code" => "23006",
    ],
    [
        "name"     => "KHOURIBGA",
        "zip_code" => "25000",
    ],
    [
        "name"     => "BEJAAD",
        "zip_code" => "25060",
    ],
    [
        "name"     => "BOUJNIBA",
        "zip_code" => "25100",
    ],
    [
        "name"     => "BOULANOUAR",
        "zip_code" => "25152",
    ],
    [
        "name"     => "OUED ZEM",
        "zip_code" => "25350",
    ],
    [
        "name"     => "BIR MEZOUI",
        "zip_code" => "25373",
    ],
    [
        "name"     => "TACHREFT",
        "zip_code" => "25452",
    ],
    [
        "name"     => "TLETA LOULAD",
        "zip_code" => "26700",
    ],
    [
        "name"     => "BOUSKOURA",
        "zip_code" => "27182",
    ],
    [
        "name"     => "MEDIOUNA",
        "zip_code" => "29490",
    ],
    [
        "name"     => "OUED HASSAR",
        "zip_code" => "29672",
    ],
    [
        "name"     => "OULAD SALAH",
        "zip_code" => "27184",
    ],
    [
        "name"     => "AEROPORT MOHAMED V",
        "zip_code" => "29002",
    ],
    [
        "name"     => "DEROUA ",
        "zip_code" => "26202",
    ],
    [
        "name"     => "DOUAR OULED NACEUR",
        "zip_code" => "26573",
    ],
    [
        "name"     => "NOUACEUR",
        "zip_code" => "27000",
    ],
    [
        "name"     => "ZAOUIA NOUACEUR",
        "zip_code" => "41024",
    ],
    [
        "name"     => "AIN CHEGGAG",
        "zip_code" => "31052",
    ],
    [
        "name"     => "AIN CHKEF",
        "zip_code" => "36122",
    ],
    [
        "name"     => "MOULAY YACOUB",
        "zip_code" => "36150",
    ],
    [
        "name"     => "OULAD ETTAYEB",
        "zip_code" => "30024",
    ],
    [
        "name"     => "SIDI HARAZEM",
        "zip_code" => "30205",
    ],
    [
        "name"     => "FES",
        "zip_code" => "30000",
    ],
    [
        "name"     => "BHALIL",
        "zip_code" => "31100",
    ],
    [
        "name"     => "SEFROU",
        "zip_code" => "31002",
    ],
    [
        "name"     => "ALMIS GUIGOU",
        "zip_code" => "33053",
    ],
    [
        "name"     => "BOULEMANE",
        "zip_code" => "33000",
    ],
    [
        "name"     => "AGOURAI",
        "zip_code" => "51050",
    ],
    [
        "name"     => "AIN TAOUJDATE",
        "zip_code" => "51100",
    ],
    [
        "name"     => "BOUDERBALA",
        "zip_code" => "51026",
    ],
    [
        "name"     => "BOUFAKRANE",
        "zip_code" => "50300",
    ],
    [
        "name"     => "EL HADJ KADDOUR",
        "zip_code" => "50102",
    ],
    [
        "name"     => "EL HAJEB",
        "zip_code" => "51000",
    ],
    [
        "name"     => "SABAA AIYOUN",
        "zip_code" => "51150",
    ],
    [
        "name"     => "AJDIR",
        "zip_code" => "35052",
    ],
    [
        "name"     => "AKNOUL",
        "zip_code" => "35050",
    ],
    [
        "name"     => "AL HOCEIMA",
        "zip_code" => "32023",
    ],
    [
        "name"     => "BNI BOUAYACH",
        "zip_code" => "32050",
    ],
    [
        "name"     => "IMZOUREN",
        "zip_code" => "32250",
    ],
    [
        "name"     => "AIN LEUH",
        "zip_code" => "53052",
    ],
    [
        "name"     => "AZROU",
        "zip_code" => "53100",
    ],
    [
        "name"     => "IFRANE",
        "zip_code" => "53000",
    ],
    [
        "name"     => "IMOUZZER KANDAR",
        "zip_code" => "31250",
    ],
    [
        "name"     => "KHENIFRA",
        "zip_code" => "54001",
    ],
    [
        "name"     => "MRIRT",
        "zip_code" => "54450",
    ],
    [
        "name"     => "SIDI ADDI",
        "zip_code" => "53102",
    ],
    [
        "name"     => "HAMRIA",
        "zip_code" => "36123",
    ],
    [
        "name"     => "MEKNES",
        "zip_code" => "50000",
    ],
    [
        "name"     => "OUISLANE",
        "zip_code" => "50045",
    ],
    [
        "name"     => "BOUMIA",
        "zip_code" => "54154",
    ],
    [
        "name"     => "MIDELT",
        "zip_code" => "54350",
    ],
    [
        "name"     => "ITZER",
        "zip_code" => "54252",
    ],
    [
        "name"     => "TIMAHDITE",
        "zip_code" => "53104",
    ],
    [
        "name"     => "ZAIDA",
        "zip_code" => "54375",
    ],
    [
        "name"     => "AIN AICHA",
        "zip_code" => "34252",
    ],
    [
        "name"     => "AIN KANSARA",
        "zip_code" => "36222",
    ],
    [
        "name"     => "TAOUNATE",
        "zip_code" => "34000",
    ],
    [
        "name"     => "MATMATA",
        "zip_code" => "35203",
    ],
    [
        "name"     => "OUED AMLIL",
        "zip_code" => "35250",
    ],
    [
        "name"     => "TAHLA",
        "zip_code" => "35300",
    ],
    [
        "name"     => "TAZA",
        "zip_code" => "35000",
    ],
    [
        "name"     => "KENITRA",
        "zip_code" => "14005",
    ],
    [
        "name"     => "MEHDYA",
        "zip_code" => "14110",
    ],
    [
        "name"     => "SIDI TAIBI",
        "zip_code" => "14025",
    ],
    [
        "name"     => "SIDI AL KAMEL",
        "zip_code" => "16175",
    ],
    [
        "name"     => "ALLAL TAZI",
        "zip_code" => "14052",
    ],
    [
        "name"     => "OUEZZANE",
        "zip_code" => "16004",
    ],
    [
        "name"     => "EL ARBAA DU RHARB",
        "zip_code" => "14300",
    ],
    [
        "name"     => "DAR BELAMRI",
        "zip_code" => "14222",
    ],
    [
        "name"     => "SIDI KACEM",
        "zip_code" => "16011",
    ],
    [
        "name"     => "SIDI SLIMANE",
        "zip_code" => "14047",
    ],
    [
        "name"     => "SIDI YAHYA DU GHARB",
        "zip_code" => "14250",
    ],
    [
        "name"     => "BOUJDOUR",
        "zip_code" => "71000",
    ],
    [
        "name"     => "DAKHLA",
        "zip_code" => "73000",
    ],
    [
        "name"     => "LAAYOUNE",
        "zip_code" => "70000",
    ],
    [
        "name"     => "SMARA",
        "zip_code" => "72000",
    ],
    [
        "name"     => "TAN TAN",
        "zip_code" => "82000",
    ],
    [
        "name"     => "AIN ITTI",
        "zip_code" => "40022",
    ],
    [
        "name"     => "MARRAKECH",
        "zip_code" => "40000",
    ],
    [
        "name"     => "SIDI GHANEM",
        "zip_code" => "43424",
    ],
    [
        "name"     => "CHICHAOUA",
        "zip_code" => "41000",
    ],
    [
        "name"     => "MZOUDIA",
        "zip_code" => "41022",
    ],
    [
        "name"     => "SIDI ZOUINE",
        "zip_code" => "40202",
    ],
    [
        "name"     => "SOUIHLA",
        "zip_code" => "40255",
    ],
    [
        "name"     => "ESSAOUIRA",
        "zip_code" => "44003",
    ],
    [
        "name"     => "MEJJI",
        "zip_code" => "44124",
    ],
    [
        "name"     => "OUNAGHA",
        "zip_code" => "44133",
    ],
    [
        "name"     => "SIDI MOKHTAR",
        "zip_code" => "41152",
    ],
    [
        "name"     => "DECHRA",
        "zip_code" => "43074",
    ],
    [
        "name"     => "DEMNATE",
        "zip_code" => "22300",
    ],
    [
        "name"     => "EL KELAA DES SRAGHNA",
        "zip_code" => "43000",
    ],
    [
        "name"     => "LAATAMNA",
        "zip_code" => "43114",
    ],
    [
        "name"     => "LAATTAOUIA",
        "zip_code" => "43100",
    ],
    [
        "name"     => "SIDI RAHHAL",
        "zip_code" => "43350",
    ],
    [
        "name"     => "TAMALLALT",
        "zip_code" => "43450",
    ],
    [
        "name"     => "BENGUERIR",
        "zip_code" => "43150",
    ],
    [
        "name"     => "OUAHAT SIDI BRAHIM",
        "zip_code" => "41105",
    ],
    [
        "name"     => "SIDI BOU OTHMANE",
        "zip_code" => "43303",
    ],
    [
        "name"     => "SKHOUR REHAMNA",
        "zip_code" => "43402",
    ],
    [
        "name"     => "TAMANSOURT",
        "zip_code" => "40300",
    ],
    [
        "name"     => "ERRACHIDIA",
        "zip_code" => "54000",
    ],
    [
        "name"     => "OUARZAZATE",
        "zip_code" => "45022",
    ],
    [
        "name"     => "BOUMALNE DADES",
        "zip_code" => "45150",
    ],
    [
        "name"     => "EL KELAA MGOUNA",
        "zip_code" => "45200",
    ],
    [
        "name"     => "TINGHIR",
        "zip_code" => "45800",
    ],
    [
        "name"     => "AGDZ",
        "zip_code" => "47050",
    ],
    [
        "name"     => "ZAGORA",
        "zip_code" => "47900",
    ],
    [
        "name"     => "AEREPORT OUJDA ANGAD",
        "zip_code" => "60023",
    ],
    [
        "name"     => "OUJDA",
        "zip_code" => "60000",
    ],
    [
        "name"     => "SIDI YAHIA D'OUJDA",
        "zip_code" => "60700",
    ],
    [
        "name"     => "BOUARG",
        "zip_code" => "62023",
    ],
    [
        "name"     => "DRIOUCH",
        "zip_code" => "62253",
    ],
    [
        "name"     => "NADOR",
        "zip_code" => "62020",
    ],
    [
        "name"     => "SELOUANE",
        "zip_code" => "62702",
    ],
    [
        "name"     => "ZAIO",
        "zip_code" => "62900",
    ],
    [
        "name"     => "AHFIR",
        "zip_code" => "63050",
    ],
    [
        "name"     => "BERKANE",
        "zip_code" => "63300",
    ],
    [
        "name"     => "BNI DRAR",
        "zip_code" => "60350",
    ],
    [
        "name"     => "SAIDIA",
        "zip_code" => "63600",
    ],
    [
        "name"     => "EL AIOUN SIDI MELLOUK",
        "zip_code" => "65812",
    ],
    [
        "name"     => "EL AIOUNE",
        "zip_code" => "65450",
    ],
    [
        "name"     => "TAOURIRT",
        "zip_code" => "65800",
    ],
    [
        "name"     => "AIN ATTIG",
        "zip_code" => "12013",
    ],
    [
        "name"     => "BOUKNADEL",
        "zip_code" => "11052",
    ],
    [
        "name"     => "TEMARA",
        "zip_code" => "12000",
    ],
    [
        "name"     => "KASBAT OUDAYA",
        "zip_code" => "10030",
    ],
    [
        "name"     => "RABAT",
        "zip_code" => "10000",
    ],
    [
        "name"     => "SIDI SLIMANE",
        "zip_code" => "14200",
    ],
    [
        "name"     => "SALA AL JADIDA",
        "zip_code" => "11102",
    ],
    [
        "name"     => "SALE",
        "zip_code" => "11043",
    ],
    [
        "name"     => "AIN EL AOUDA",
        "zip_code" => "12100",
    ],
    [
        "name"     => "SIDI YAHIA ZAERS",
        "zip_code" => "12152",
    ],
    [
        "name"     => "SKHIRATE",
        "zip_code" => "12050",
    ],
    [
        "name"     => "TAMESNA",
        "zip_code" => "12200",
    ],
    [
        "name"     => "KHEMISSET",
        "zip_code" => "14306",
    ],
    [
        "name"     => "SIDI ALLAL EL BAHRAOUI",
        "zip_code" => "15252",
    ],
    [
        "name"     => "TIFLET",
        "zip_code" => "15402",
    ],
    [
        "name"     => "MOULAY ABDELLAH",
        "zip_code" => "24003",
    ],
    [
        "name"     => "AZEMMOUR",
        "zip_code" => "24100",
    ],
    [
        "name"     => "EL JADIDA",
        "zip_code" => "24000",
    ],
    [
        "name"     => "SIDI BOUZID",
        "zip_code" => "24005",
    ],
    [
        "name"     => "HAOUZIA",
        "zip_code" => "24123",
    ],
    [
        "name"     => "BIR JDID",
        "zip_code" => "24150",
    ],
    [
        "name"     => "TNINE CHTOUKA",
        "zip_code" => "24175",
    ],
    [
        "name"     => "SIDI ABED",
        "zip_code" => "24032",
    ],
    [
        "name"     => "OUALIDIA",
        "zip_code" => "24252",
    ],
    [
        "name"     => "OULAD RHANEM",
        "zip_code" => "24272",
    ],
    [
        "name"     => "BEDDOUZA",
        "zip_code" => "46023",
    ],
    [
        "name"     => "LAATATRA",
        "zip_code" => "24365",
    ],
    [
        "name"     => "SAFI",
        "zip_code" => "46022",
    ],
    [
        "name"     => "KHEMIS DES ZEMAMRA",
        "zip_code" => "24200",
    ],
    [
        "name"     => "SIDI BENNOUR",
        "zip_code" => "24350",
    ],
    [
        "name"     => "SIDI SMAIL",
        "zip_code" => "24402",
    ],
    [
        "name"     => "SEBT SAISS",
        "zip_code" => "24422",
    ],
    [
        "name"     => "GZENAYA",
        "zip_code" => "90102",
    ],
    [
        "name"     => "TANGER",
        "zip_code" => "90000",
    ],
    [
        "name"     => "ASSILAH",
        "zip_code" => "90050",
    ],
    [
        "name"     => "LARACHE",
        "zip_code" => "92000",
    ],
    [
        "name"     => "AL AOUAMRA",
        "zip_code" => "92052",
    ],
    [
        "name"     => "KSAR EL KEBIR",
        "zip_code" => "92150",
    ],
    [
        "name"     => "KHEMIS SAHEL",
        "zip_code" => "92102",
    ],
    [
        "name"     => "EL FENDEQ",
        "zip_code" => "93026",
    ],
    [
        "name"     => "FNIDQ",
        "zip_code" => "93100",
    ],
    [
        "name"     => "MARTIL",
        "zip_code" => "93150",
    ],
    [
        "name"     => "MDIQ",
        "zip_code" => "93200",
    ],
    [
        "name"     => "MELLOUSSA",
        "zip_code" => "94053",
    ],
    [
        "name"     => "KSAR SGHIR",
        "zip_code" => "94152",
    ],
    [
        "name"     => "TETOUAN",
        "zip_code" => "90073",
    ],
    [
        "name"     => "AIN LAHSAN",
        "zip_code" => "93054",
    ],
];

$shipCities = [
    [
        "id"   => "1",
        "name" => "afourar",
    ],
    [
        "id"   => "2",
        "name" => "afsou",
    ],
    [
        "id"   => "3",
        "name" => "agadir",
    ],
    [
        "id"   => "4",
        "name" => "agalmous",
    ],
    [
        "id"   => "5",
        "name" => "agdez",
    ],
    [
        "id"   => "6",
        "name" => "agerd",
    ],
    [
        "id"   => "7",
        "name" => "aghbala",
    ],
    [
        "id"   => "8",
        "name" => "aghbalo nisrdan",
    ],
    [
        "id"   => "9",
        "name" => "aghbalo okarkar",
    ],
    [
        "id"   => "10",
        "name" => "aglou",
    ],
    [
        "id"   => "11",
        "name" => "agouim",
    ],
    [
        "id"   => "12",
        "name" => "agouray",
    ],
    [
        "id"   => "13",
        "name" => "ahfir",
    ],
    [
        "id"   => "14",
        "name" => "ain harouda",
    ],
    [
        "id"   => "15",
        "name" => "ain aaouda",
    ],
    [
        "id"   => "16",
        "name" => "ain aatiq",
    ],
    [
        "id"   => "17",
        "name" => "ain aicha",
    ],
    [
        "id"   => "19",
        "name" => "ain ariss",
    ],
    [
        "id"   => "20",
        "name" => "ain barda",
    ],
    [
        "id"   => "21",
        "name" => "ain bni mathar",
    ],
    [
        "id"   => "22",
        "name" => "ain boumassay",
    ],
    [
        "id"   => "23",
        "name" => "ain cheggag",
    ],
    [
        "id"   => "24",
        "name" => "ain chqef",
    ],
    [
        "id"   => "25",
        "name" => "ain dalia",
    ],
    [
        "id"   => "26",
        "name" => "ain kicher",
    ],
    [
        "id"   => "27",
        "name" => "ain laah",
    ],
    [
        "id"   => "28",
        "name" => "ain lahcen",
    ],
    [
        "id"   => "29",
        "name" => "ain legdeh",
    ],
    [
        "id"   => "30",
        "name" => "ain louhe",
    ],
    [
        "id"   => "31",
        "name" => "ain maatouf",
    ],
    [
        "id"   => "32",
        "name" => "ain mediouna",
    ],
    [
        "id"   => "33",
        "name" => "ain taoujdate",
    ],
    [
        "id"   => "34",
        "name" => "ain zohra",
    ],
    [
        "id"   => "35",
        "name" => "ait amira",
    ],
    [
        "id"   => "36",
        "name" => "ait attab",
    ],
    [
        "id"   => "37",
        "name" => "ait bazza",
    ],
    [
        "id"   => "38",
        "name" => "ait belkacem",
    ],
    [
        "id"   => "39",
        "name" => "ait benhddou",
    ],
    [
        "id"   => "40",
        "name" => "ait daoud",
    ],
    [
        "id"   => "41",
        "name" => "ait iaazza",
    ],
    [
        "id"   => "42",
        "name" => "ait ishak",
    ],
    [
        "id"   => "43",
        "name" => "ait kamara",
    ],
    [
        "id"   => "44",
        "name" => "ait majdan",
    ],
    [
        "id"   => "45",
        "name" => "ait melloul",
    ],
    [
        "id"   => "46",
        "name" => "ait mhamed",
    ],
    [
        "id"   => "47",
        "name" => "ait milk",
    ],
    [
        "id"   => "48",
        "name" => "ait ouallal",
    ],
    [
        "id"   => "49",
        "name" => "ait oufella",
    ],
    [
        "id"   => "50",
        "name" => "ait oumribet",
    ],
    [
        "id"   => "51",
        "name" => "ait ourir",
    ],
    [
        "id"   => "52",
        "name" => "ait sebaa",
    ],
    [
        "id"   => "53",
        "name" => "ait sedrat",
    ],
    [
        "id"   => "54",
        "name" => "ajdir gzenaya",
    ],
    [
        "id"   => "55",
        "name" => "ajdir",
    ],
    [
        "id"   => "56",
        "name" => "aklim",
    ],
    [
        "id"   => "57",
        "name" => "aknoul",
    ],
    [
        "id"   => "58",
        "name" => "allal lbehraoui",
    ],
    [
        "id"   => "59",
        "name" => "allal tazi",
    ],
    [
        "id"   => "60",
        "name" => "almis guigou",
    ],
    [
        "id"   => "61",
        "name" => "almis marmoucha",
    ],
    [
        "id"   => "62",
        "name" => "alnif",
    ],
    [
        "id"   => "63",
        "name" => "al aroui",
    ],
    [
        "id"   => "64",
        "name" => "al hoceima",
    ],
    [
        "id"   => "65",
        "name" => "amerzgane",
    ],
    [
        "id"   => "66",
        "name" => "ameskroud",
    ],
    [
        "id"   => "67",
        "name" => "amsa",
    ],
    [
        "id"   => "68",
        "name" => "amtar",
    ],
    [
        "id"   => "69",
        "name" => "amzmiz",
    ],
    [
        "id"   => "70",
        "name" => "anza",
    ],
    [
        "id"   => "71",
        "name" => "anzi",
    ],
    [
        "id"   => "72",
        "name" => "aoufous",
    ],
    [
        "id"   => "73",
        "name" => "aoulouz",
    ],
    [
        "id"   => "74",
        "name" => "aourir",
    ],
    [
        "id"   => "75",
        "name" => "aqchour",
    ],
    [
        "id"   => "76",
        "name" => "aqermud",
    ],
    [
        "id"   => "77",
        "name" => "arbaa mesti",
    ],
    [
        "id"   => "78",
        "name" => "arbaa shoul",
    ],
    [
        "id"   => "79",
        "name" => "arhbalou akorare",
    ],
    [
        "id"   => "80",
        "name" => "asjen",
    ],
    [
        "id"   => "81",
        "name" => "asni",
    ],
    [
        "id"   => "82",
        "name" => "assa",
    ],
    [
        "id"   => "83",
        "name" => "assebbab",
    ],
    [
        "id"   => "84",
        "name" => "assilah",
    ],
    [
        "id"   => "85",
        "name" => "azarzou",
    ],
    [
        "id"   => "86",
        "name" => "azemour",
    ],
    [
        "id"   => "87",
        "name" => "azilal",
    ],
    [
        "id"   => "88",
        "name" => "azla",
    ],
    [
        "id"   => "89",
        "name" => "azrou",
    ],
    [
        "id"   => "90",
        "name" => "azzaba",
    ],
    [
        "id"   => "91",
        "name" => "bab bered",
    ],
    [
        "id"   => "92",
        "name" => "bab boudir",
    ],
    [
        "id"   => "93",
        "name" => "bab marzouga",
    ],
    [
        "id"   => "94",
        "name" => "bab ouandar",
    ],
    [
        "id"   => "95",
        "name" => "bab taza",
    ],
    [
        "id"   => "96",
        "name" => "barakate erradi",
    ],
    [
        "id"   => "98",
        "name" => "belfaa",
    ],
    [
        "id"   => "99",
        "name" => "belyounoch",
    ],
    [
        "id"   => "100",
        "name" => "beni mellal",
    ],
    [
        "id"   => "101",
        "name" => "beni abdellah",
    ],
    [
        "id"   => "102",
        "name" => "ben sliman",
    ],
    [
        "id"   => "103",
        "name" => "ben grir",
    ],
    [
        "id"   => "104",
        "name" => "ben hmed",
    ],
    [
        "id"   => "105",
        "name" => "ben mansour",
    ],
    [
        "id"   => "106",
        "name" => "ben taeib",
    ],
    [
        "id"   => "107",
        "name" => "berkane",
    ],
    [
        "id"   => "108",
        "name" => "berrchid",
    ],
    [
        "id"   => "109",
        "name" => "bhalil",
    ],
    [
        "id"   => "110",
        "name" => "bin lwidan",
    ],
    [
        "id"   => "111",
        "name" => "biougra",
    ],
    [
        "id"   => "112",
        "name" => "biriyech",
    ],
    [
        "id"   => "113",
        "name" => "birkouate",
    ],
    [
        "id"   => "114",
        "name" => "bir mezoui",
    ],
    [
        "id"   => "115",
        "name" => "bir tamtam",
    ],
    [
        "id"   => "116",
        "name" => "bittit",
    ],
    [
        "id"   => "117",
        "name" => "bizdad",
    ],
    [
        "id"   => "118",
        "name" => "bnidrar",
    ],
    [
        "id"   => "119",
        "name" => "bni khloug",
    ],
    [
        "id"   => "120",
        "name" => "bni aayat",
    ],
    [
        "id"   => "121",
        "name" => "bni ansar",
    ],
    [
        "id"   => "122",
        "name" => "bni bouayach",
    ],
    [
        "id"   => "123",
        "name" => "bni boufrah",
    ],
    [
        "id"   => "124",
        "name" => "bni frassen",
    ],
    [
        "id"   => "125",
        "name" => "bni hadifa",
    ],
    [
        "id"   => "126",
        "name" => "bni korra",
    ],
    [
        "id"   => "127",
        "name" => "bni said",
    ],
    [
        "id"   => "128",
        "name" => "bni sidel louta",
    ],
    [
        "id"   => "129",
        "name" => "boizakarne",
    ],
    [
        "id"   => "130",
        "name" => "bouarg",
    ],
    [
        "id"   => "131",
        "name" => "bouarous",
    ],
    [
        "id"   => "132",
        "name" => "bouchabel",
    ],
    [
        "id"   => "133",
        "name" => "bouderbala",
    ],
    [
        "id"   => "134",
        "name" => "boudnib",
    ],
    [
        "id"   => "135",
        "name" => "boufekran",
    ],
    [
        "id"   => "136",
        "name" => "bouguedra",
    ],
    [
        "id"   => "137",
        "name" => "bouhlou",
    ],
    [
        "id"   => "138",
        "name" => "bouhouda",
    ],
    [
        "id"   => "139",
        "name" => "boujaad",
    ],
    [
        "id"   => "140",
        "name" => "boujniba",
    ],
    [
        "id"   => "141",
        "name" => "boukchmir",
    ],
    [
        "id"   => "142",
        "name" => "boukidan",
    ],
    [
        "id"   => "143",
        "name" => "boulaajoul",
    ],
    [
        "id"   => "144",
        "name" => "boulanouar",
    ],
    [
        "id"   => "145",
        "name" => "boulknadel",
    ],
    [
        "id"   => "146",
        "name" => "boulmane",
    ],
    [
        "id"   => "147",
        "name" => "boumalne dades",
    ],
    [
        "id"   => "149",
        "name" => "boumia",
    ],
    [
        "id"   => "150",
        "name" => "bounaamane",
    ],
    [
        "id"   => "151",
        "name" => "bouskoura",
    ],
    [
        "id"   => "152",
        "name" => "bouyafar",
    ],
    [
        "id"   => "153",
        "name" => "bouzemlane",
    ],
    [
        "id"   => "154",
        "name" => "bouznika",
    ],
    [
        "id"   => "155",
        "name" => "bzou",
    ],
    [
        "id"   => "156",
        "name" => "capo negro",
    ],
    [
        "id"   => "157",
        "name" => "casablanca",
    ],
    [
        "id"   => "158",
        "name" => "chefchaouen",
    ],
    [
        "id"   => "159",
        "name" => "chichawa",
    ],
    [
        "id"   => "160",
        "name" => "chtouka",
    ],
    [
        "id"   => "161",
        "name" => "chtouka ait baha",
    ],
    [
        "id"   => "162",
        "name" => "chwitar",
    ],
    [
        "id"   => "163",
        "name" => "commune bouabout",
    ],
    [
        "id"   => "164",
        "name" => "commune ishak",
    ],
    [
        "id"   => "165",
        "name" => "commune korimate",
    ],
    [
        "id"   => "166",
        "name" => "commune mejji",
    ],
    [
        "id"   => "167",
        "name" => "commune mramer",
    ],
    [
        "id"   => "168",
        "name" => "daaidat",
    ],
    [
        "id"   => "169",
        "name" => "dakhla",
    ],
    [
        "id"   => "170",
        "name" => "damnate",
    ],
    [
        "id"   => "171",
        "name" => "dar bouaza",
    ],
    [
        "id"   => "172",
        "name" => "daroua",
    ],
    [
        "id"   => "173",
        "name" => "dar belamri",
    ],
    [
        "id"   => "174",
        "name" => "dar el hamra",
    ],
    [
        "id"   => "175",
        "name" => "dar el kebdani",
    ],
    [
        "id"   => "176",
        "name" => "dar gueddari",
    ],
    [
        "id"   => "177",
        "name" => "dar laaslouji",
    ],
    [
        "id"   => "178",
        "name" => "dar lqayd si issa",
    ],
    [
        "id"   => "179",
        "name" => "dar si issa",
    ],
    [
        "id"   => "180",
        "name" => "dayet aoua",
    ],
    [
        "id"   => "181",
        "name" => "dcheira",
    ],
    [
        "id"   => "182",
        "name" => "debdou",
    ],
    [
        "id"   => "183",
        "name" => "derdara",
    ],
    [
        "id"   => "184",
        "name" => "diki",
    ],
    [
        "id"   => "185",
        "name" => "dlalha",
    ],
    [
        "id"   => "186",
        "name" => "drarga",
    ],
    [
        "id"   => "187",
        "name" => "driouch",
    ],
    [
        "id"   => "188",
        "name" => "echemmaia",
    ],
    [
        "id"   => "189",
        "name" => "eddalya",
    ],
    [
        "id"   => "190",
        "name" => "el brouj",
    ],
    [
        "id"   => "191",
        "name" => "el fokra",
    ],
    [
        "id"   => "192",
        "name" => "el adrej",
    ],
    [
        "id"   => "193",
        "name" => "el aouamra",
    ],
    [
        "id"   => "194",
        "name" => "el arbaa du rharb",
    ],
    [
        "id"   => "195",
        "name" => "el badouza",
    ],
    [
        "id"   => "196",
        "name" => "el bessabssa",
    ],
    [
        "id"   => "197",
        "name" => "el ghazoua",
    ],
    [
        "id"   => "198",
        "name" => "el gouffaf",
    ],
    [
        "id"   => "199",
        "name" => "el haddada",
    ],
    [
        "id"   => "200",
        "name" => "el hajeb",
    ],
    [
        "id"   => "201",
        "name" => "el haj kadour",
    ],
    [
        "id"   => "202",
        "name" => "el hammam jbel doum",
    ],
    [
        "id"   => "203",
        "name" => "el jadida",
    ],
    [
        "id"   => "204",
        "name" => "el jebeha",
    ],
    [
        "id"   => "205",
        "name" => "el jorf",
    ],
    [
        "id"   => "206",
        "name" => "el kensara",
    ],
    [
        "id"   => "207",
        "name" => "el melha",
    ],
    [
        "id"   => "208",
        "name" => "el menzel",
    ],
    [
        "id"   => "209",
        "name" => "el mers",
    ],
    [
        "id"   => "210",
        "name" => "el morhrane",
    ],
    [
        "id"   => "211",
        "name" => "el ouatia tantan",
    ],
    [
        "id"   => "212",
        "name" => "enjil ait lahcen",
    ],
    [
        "id"   => "213",
        "name" => "enjil",
    ],
    [
        "id"   => "214",
        "name" => "erfoud",
    ],
    [
        "id"   => "215",
        "name" => "errachidia",
    ],
    [
        "id"   => "216",
        "name" => "essaouira",
    ],
    [
        "id"   => "217",
        "name" => "essifa",
    ],
    [
        "id"   => "218",
        "name" => "famoudi",
    ],
    [
        "id"   => "219",
        "name" => "fam el hisn",
    ],
    [
        "id"   => "220",
        "name" => "farkhana",
    ],
    [
        "id"   => "221",
        "name" => "faryata",
    ],
    [
        "id"   => "222",
        "name" => "fask",
    ],
    [
        "id"   => "223",
        "name" => "fassiss",
    ],
    [
        "id"   => "224",
        "name" => "fedala",
    ],
    [
        "id"   => "225",
        "name" => "ferssioua",
    ],
    [
        "id"   => "226",
        "name" => "fes",
    ],
    [
        "id"   => "227",
        "name" => "fkih ben salah",
    ],
    [
        "id"   => "228",
        "name" => "fnideq",
    ],
    [
        "id"   => "229",
        "name" => "foret déplomatique [ haouara]",
    ],
    [
        "id"   => "230",
        "name" => "foum jamaa",
    ],
    [
        "id"   => "231",
        "name" => "foum zguid",
    ],
    [
        "id"   => "232",
        "name" => "galaz",
    ],
    [
        "id"   => "233",
        "name" => "ghafsai",
    ],
    [
        "id"   => "234",
        "name" => "ghouazi",
    ],
    [
        "id"   => "235",
        "name" => "goulmima",
    ],
    [
        "id"   => "236",
        "name" => "guelmdamane",
    ],
    [
        "id"   => "237",
        "name" => "guelmim",
    ],
    [
        "id"   => "238",
        "name" => "guenfouda",
    ],
    [
        "id"   => "239",
        "name" => "guercif",
    ],
    [
        "id"   => "240",
        "name" => "guigou",
    ],
    [
        "id"   => "241",
        "name" => "guisser",
    ],
    [
        "id"   => "242",
        "name" => "haddada el gharb",
    ],
    [
        "id"   => "243",
        "name" => "had soualam",
    ],
    [
        "id"   => "244",
        "name" => "had ait mimoun",
    ],
    [
        "id"   => "245",
        "name" => "had ait ouribel",
    ],
    [
        "id"   => "246",
        "name" => "had bni chiker",
    ],
    [
        "id"   => "247",
        "name" => "had brachoua",
    ],
    [
        "id"   => "248",
        "name" => "had draa",
    ],
    [
        "id"   => "249",
        "name" => "had gharbia",
    ],
    [
        "id"   => "250",
        "name" => "had lbradia",
    ],
    [
        "id"   => "251",
        "name" => "had old fraj",
    ],
    [
        "id"   => "252",
        "name" => "had rhoualem",
    ],
    [
        "id"   => "253",
        "name" => "hakama",
    ],
    [
        "id"   => "254",
        "name" => "haoudran",
    ],
    [
        "id"   => "255",
        "name" => "harhoura",
    ],
    [
        "id"   => "256",
        "name" => "hassi berkan",
    ],
    [
        "id"   => "257",
        "name" => "hassi bilal",
    ],
    [
        "id"   => "258",
        "name" => "hattane",
    ],
    [
        "id"   => "259",
        "name" => "ida ou kazzou",
    ],
    [
        "id"   => "260",
        "name" => "idelsane",
    ],
    [
        "id"   => "261",
        "name" => "ifran",
    ],
    [
        "id"   => "262",
        "name" => "ighezren",
    ],
    [
        "id"   => "263",
        "name" => "ighram laghlam",
    ],
    [
        "id"   => "264",
        "name" => "ighrem",
    ],
    [
        "id"   => "265",
        "name" => "ighrem n'ougdal",
    ],
    [
        "id"   => "266",
        "name" => "ihddaden",
    ],
    [
        "id"   => "267",
        "name" => "ikkaouen",
    ],
    [
        "id"   => "268",
        "name" => "ikniouen",
    ],
    [
        "id"   => "269",
        "name" => "imintanout",
    ],
    [
        "id"   => "270",
        "name" => "imi nfast",
    ],
    [
        "id"   => "271",
        "name" => "imlil  ",
    ],
    [
        "id"   => "272",
        "name" => "immouzzer kander",
    ],
    [
        "id"   => "273",
        "name" => "imouzzer marmoucha",
    ],
    [
        "id"   => "274",
        "name" => "imsouane",
    ],
    [
        "id"   => "275",
        "name" => "imzouren",
    ],
    [
        "id"   => "276",
        "name" => "inezgane",
    ],
    [
        "id"   => "277",
        "name" => "issagen",
    ],
    [
        "id"   => "279",
        "name" => "izemmouren",
    ],
    [
        "id"   => "280",
        "name" => "izerbi",
    ],
    [
        "id"   => "281",
        "name" => "jabria",
    ],
    [
        "id"   => "282",
        "name" => "jamaa idaoussemlal",
    ],
    [
        "id"   => "283",
        "name" => "jamaa shaim",
    ],
    [
        "id"   => "284",
        "name" => "jbabra",
    ],
    [
        "id"   => "285",
        "name" => "jbel lhbib",
    ],
    [
        "id"   => "286",
        "name" => "jdoure",
    ],
    [
        "id"   => "287",
        "name" => "jemaat-riah",
    ],
    [
        "id"   => "288",
        "name" => "jemaa haouafate",
    ],
    [
        "id"   => "289",
        "name" => "jemaa moul leblad",
    ],
    [
        "id"   => "290",
        "name" => "jnan annich",
    ],
    [
        "id"   => "291",
        "name" => "jorf malha",
    ],
    [
        "id"   => "292",
        "name" => "jorf sfar",
    ],
    [
        "id"   => "293",
        "name" => "jrada",
    ],
    [
        "id"   => "294",
        "name" => "kahf nsour",
    ],
    [
        "id"   => "295",
        "name" => "kalaat senada",
    ],
    [
        "id"   => "296",
        "name" => "kalaa des sraghna",
    ],
    [
        "id"   => "297",
        "name" => "kariat arckmane",
    ],
    [
        "id"   => "298",
        "name" => "kariat ba mohamed",
    ],
    [
        "id"   => "299",
        "name" => "karia benaouda",
    ],
    [
        "id"   => "300",
        "name" => "kasbat tadla",
    ],
    [
        "id"   => "301",
        "name" => "kasba",
    ],
    [
        "id"   => "302",
        "name" => "kassarat",
    ],
    [
        "id"   => "303",
        "name" => "kassita",
    ],
    [
        "id"   => "304",
        "name" => "kelaat m'gouna",
    ],
    [
        "id"   => "305",
        "name" => "kenitra",
    ],
    [
        "id"   => "306",
        "name" => "khemis ait yaddine",
    ],
    [
        "id"   => "307",
        "name" => "khemis nkheila",
    ],
    [
        "id"   => "308",
        "name" => "khemis sidi yahia",
    ],
    [
        "id"   => "309",
        "name" => "khenichet",
    ],
    [
        "id"   => "310",
        "name" => "khenifra",
    ],
    [
        "id"   => "311",
        "name" => "khenishat",
    ],
    [
        "id"   => "312",
        "name" => "khlalfa",
    ],
    [
        "id"   => "313",
        "name" => "khmis anjra",
    ],
    [
        "id"   => "314",
        "name" => "khmis d mdik",
    ],
    [
        "id"   => "315",
        "name" => "khniss ait wahi",
    ],
    [
        "id"   => "317",
        "name" => "ksar el kabir",
    ],
    [
        "id"   => "318",
        "name" => "ksar el sghir",
    ],
    [
        "id"   => "319",
        "name" => "laatawia",
    ],
    [
        "id"   => "320",
        "name" => "laayoune",
    ],
    [
        "id"   => "321",
        "name" => "laayoune charkia",
    ],
    [
        "id"   => "322",
        "name" => "lakbab",
    ],
    [
        "id"   => "323",
        "name" => "lakherachefa",
    ],
    [
        "id"   => "324",
        "name" => "lakhsas",
    ],
    [
        "id"   => "325",
        "name" => "laksiba",
    ],
    [
        "id"   => "327",
        "name" => "lalla mimouna",
    ],
    [
        "id"   => "328",
        "name" => "lamnakra el haddada",
    ],
    [
        "id"   => "329",
        "name" => "lamriss",
    ],
    [
        "id"   => "330",
        "name" => "larache",
    ],
    [
        "id"   => "331",
        "name" => "larbaa ayacha",
    ],
    [
        "id"   => "332",
        "name" => "legzira",
    ],
    [
        "id"   => "333",
        "name" => "lekhmissat",
    ],
    [
        "id"   => "334",
        "name" => "lemrija",
    ],
    [
        "id"   => "335",
        "name" => "lgara",
    ],
    [
        "id"   => "336",
        "name" => "lhad ras l3in",
    ],
    [
        "id"   => "337",
        "name" => "loudaya",
    ],
    [
        "id"   => "338",
        "name" => "loulja",
    ],
    [
        "id"   => "339",
        "name" => "machra belkssiri",
    ],
    [
        "id"   => "340",
        "name" => "marrakech",
    ],
    [
        "id"   => "341",
        "name" => "martil",
    ],
    [
        "id"   => "343",
        "name" => "massa",
    ],
    [
        "id"   => "344",
        "name" => "matmata",
    ],
    [
        "id"   => "345",
        "name" => "m'diq",
    ],
    [
        "id"   => "346",
        "name" => "mehdia",
    ],
    [
        "id"   => "347",
        "name" => "mekness",
    ],
    [
        "id"   => "348",
        "name" => "mellab",
    ],
    [
        "id"   => "349",
        "name" => "mellila",
    ],
    [
        "id"   => "350",
        "name" => "meloussa",
    ],
    [
        "id"   => "351",
        "name" => "merzoga ",
    ],
    [
        "id"   => "352",
        "name" => "meskala",
    ],
    [
        "id"   => "353",
        "name" => "messassa",
    ],
    [
        "id"   => "354",
        "name" => "messoussate",
    ],
    [
        "id"   => "355",
        "name" => "mezraoua",
    ],
    [
        "id"   => "356",
        "name" => "m'garto",
    ],
    [
        "id"   => "357",
        "name" => "mghila  ",
    ],
    [
        "id"   => "358",
        "name" => "mhamid el ghizlane",
    ],
    [
        "id"   => "359",
        "name" => "m'haya",
    ],
    [
        "id"   => "360",
        "name" => "midar",
    ],
    [
        "id"   => "361",
        "name" => "midelt",
    ],
    [
        "id"   => "362",
        "name" => "mirleft",
    ],
    [
        "id"   => "363",
        "name" => "missour",
    ],
    [
        "id"   => "364",
        "name" => "mkam tolba",
    ],
    [
        "id"   => "365",
        "name" => "mnasra",
    ],
    [
        "id"   => "366",
        "name" => "mnoud nekkour",
    ],
    [
        "id"   => "367",
        "name" => "mohamadia",
    ],
    [
        "id"   => "368",
        "name" => "moulay abdelah amghar",
    ],
    [
        "id"   => "369",
        "name" => "moulay abdelkrim",
    ],
    [
        "id"   => "370",
        "name" => "moulay bouchta",
    ],
    [
        "id"   => "371",
        "name" => "moulay bouselham",
    ],
    [
        "id"   => "372",
        "name" => "moulay bouslham",
    ],
    [
        "id"   => "373",
        "name" => "moulay driss arhbal",
    ],
    [
        "id"   => "374",
        "name" => "moulay driss zerhoun",
    ],
    [
        "id"   => "375",
        "name" => "moulay yakoub",
    ],
    [
        "id"   => "376",
        "name" => "moul bargui",
    ],
    [
        "id"   => "377",
        "name" => "mrirt",
    ],
    [
        "id"   => "378",
        "name" => "msemrir",
    ],
    [
        "id"   => "379",
        "name" => "mtarnargha",
    ],
    [
        "id"   => "380",
        "name" => "mzem sendhaja  ",
    ],
    [
        "id"   => "381",
        "name" => "m hajer",
    ],
    [
        "id"   => "382",
        "name" => "nador",
    ],
    [
        "id"   => "383",
        "name" => "naiima",
    ],
    [
        "id"   => "384",
        "name" => "naour  ",
    ],
    [
        "id"   => "385",
        "name" => "nkhaila",
    ],
    [
        "id"   => "386",
        "name" => "nkob",
    ],
    [
        "id"   => "387",
        "name" => "nouinouich",
    ],
    [
        "id"   => "388",
        "name" => "nouirate",
    ],
    [
        "id"   => "389",
        "name" => "old ghanam",
    ],
    [
        "id"   => "390",
        "name" => "oulad said loued",
    ],
    [
        "id"   => "391",
        "name" => "sidi smail",
    ],
    [
        "id"   => "392",
        "name" => "old youssef",
    ],
    [
        "id"   => "393",
        "name" => "ouad ifran",
    ],
    [
        "id"   => "394",
        "name" => "oualegh",
    ],
    [
        "id"   => "395",
        "name" => "oualidia",
    ],
    [
        "id"   => "396",
        "name" => "ouaoulzemt",
    ],
    [
        "id"   => "397",
        "name" => "ouaoumana",
    ],
    [
        "id"   => "398",
        "name" => "ouaouzgan",
    ],
    [
        "id"   => "399",
        "name" => "ouarzazate",
    ],
    [
        "id"   => "400",
        "name" => "ouazzane",
    ],
    [
        "id"   => "401",
        "name" => "oued amlil",
    ],
    [
        "id"   => "402",
        "name" => "oued el marssa",
    ],
    [
        "id"   => "403",
        "name" => "oued lahmar",
    ],
    [
        "id"   => "404",
        "name" => "oued laou",
    ],
    [
        "id"   => "405",
        "name" => "oued zem",
    ],
    [
        "id"   => "406",
        "name" => "oujda",
    ],
    [
        "id"   => "407",
        "name" => "oulad said",
    ],
    [
        "id"   => "408",
        "name" => "oulad sghier",
    ],
    [
        "id"   => "409",
        "name" => "oulad boubker",
    ],
    [
        "id"   => "410",
        "name" => "oulad daoud",
    ],
    [
        "id"   => "411",
        "name" => "oulad hammou",
    ],
    [
        "id"   => "412",
        "name" => "oulad hassoun",
    ],
    [
        "id"   => "413",
        "name" => "oulad jerrar",
    ],
    [
        "id"   => "414",
        "name" => "oulad taleb",
    ],
    [
        "id"   => "415",
        "name" => "OULED YAICHE",
    ],
    [
        "id"   => "416",
        "name" => "oulad zidouh",
    ],
    [
        "id"   => "417",
        "name" => "ouled aamar",
    ],
    [
        "id"   => "418",
        "name" => "ouled abdoune",
    ],
    [
        "id"   => "419",
        "name" => "ouled ali",
    ],
    [
        "id"   => "420",
        "name" => "ouled ayad",
    ],
    [
        "id"   => "421",
        "name" => "ouled azouz",
    ],
    [
        "id"   => "422",
        "name" => "ouled ben hammadi",
    ],
    [
        "id"   => "423",
        "name" => "ouled berrhil",
    ],
    [
        "id"   => "424",
        "name" => "ouled boughadi",
    ],
    [
        "id"   => "426",
        "name" => "ouled daoud zkhanine",
    ],
    [
        "id"   => "427",
        "name" => "ouled ftata",
    ],
    [
        "id"   => "428",
        "name" => "ouled klibe",
    ],
    [
        "id"   => "429",
        "name" => "ouled laabid",
    ],
    [
        "id"   => "430",
        "name" => "ouled mbarek",
    ],
    [
        "id"   => "431",
        "name" => "ouled moussa",
    ],
    [
        "id"   => "432",
        "name" => "ouled m koudou",
    ],
    [
        "id"   => "433",
        "name" => "ouled nacer",
    ],
    [
        "id"   => "434",
        "name" => "ouled tayeb",
    ],
    [
        "id"   => "435",
        "name" => "ouled teaima",
    ],
    [
        "id"   => "436",
        "name" => "ouled youssef",
    ],
    [
        "id"   => "437",
        "name" => "ouled zbir",
    ],
    [
        "id"   => "438",
        "name" => "ounara",
    ],
    [
        "id"   => "439",
        "name" => "ounnana",
    ],
    [
        "id"   => "440",
        "name" => "ourika",
    ],
    [
        "id"   => "441",
        "name" => "ourtzarh",
    ],
    [
        "id"   => "442",
        "name" => "outa bouabane",
    ],
    [
        "id"   => "443",
        "name" => "ouzoud",
    ],
    [
        "id"   => "444",
        "name" => "oulad abdellah",
    ],
    [
        "id"   => "445",
        "name" => "port med",
    ],
    [
        "id"   => "446",
        "name" => "quaa asserasse",
    ],
    [
        "id"   => "447",
        "name" => "rabat",
    ],
    [
        "id"   => "448",
        "name" => "rass lma",
    ],
    [
        "id"   => "449",
        "name" => "ras alma",
    ],
    [
        "id"   => "450",
        "name" => "ras el ain",
    ],
    [
        "id"   => "451",
        "name" => "ras tbouda",
    ],
    [
        "id"   => "452",
        "name" => "ribat alkhir",
    ],
    [
        "id"   => "453",
        "name" => "rissani",
    ],
    [
        "id"   => "454",
        "name" => "rouadi",
    ],
    [
        "id"   => "455",
        "name" => "sabt ait iko",
    ],
    [
        "id"   => "456",
        "name" => "sabt ben sasi",
    ],
    [
        "id"   => "457",
        "name" => "safi",
    ],
    [
        "id"   => "458",
        "name" => "saiidia",
    ],
    [
        "id"   => "459",
        "name" => "salé",
    ],
    [
        "id"   => "460",
        "name" => "sbaa ayoun",
    ],
    [
        "id"   => "461",
        "name" => "sbouya",
    ],
    [
        "id"   => "462",
        "name" => "sebaa rouadi",
    ],
    [
        "id"   => "463",
        "name" => "sebt bni frassen",
    ],
    [
        "id"   => "464",
        "name" => "sebt bni ikhlef",
    ],
    [
        "id"   => "465",
        "name" => "sebt el guirdane",
    ],
    [
        "id"   => "466",
        "name" => "sebt gezoula",
    ],
    [
        "id"   => "467",
        "name" => "sebt gzoula",
    ],
    [
        "id"   => "468",
        "name" => "sebt rmel",
    ],
    [
        "id"   => "469",
        "name" => "sefro",
    ],
    [
        "id"   => "470",
        "name" => "sefsaf",
    ],
    [
        "id"   => "471",
        "name" => "selouane",
    ],
    [
        "id"   => "472",
        "name" => "settat ",
    ],
    [
        "id"   => "473",
        "name" => "sfafaa",
    ],
    [
        "id"   => "474",
        "name" => "sidi rahal",
    ],
    [
        "id"   => "475",
        "name" => "sidi aadi",
    ],
    [
        "id"   => "476",
        "name" => "sidi abdelah",
    ],
    [
        "id"   => "477",
        "name" => "sidi abdelah ghyat",
    ],
    [
        "id"   => "478",
        "name" => "sidi abdelkrim",
    ],
    [
        "id"   => "479",
        "name" => "sidi abderrazak",
    ],
    [
        "id"   => "480",
        "name" => "sidi abed",
    ],
    [
        "id"   => "481",
        "name" => "sidi ahmed cherif",
    ],
    [
        "id"   => "482",
        "name" => "sidi ahmed el bernoussi",
    ],
    [
        "id"   => "483",
        "name" => "sidi aissa",
    ],
    [
        "id"   => "484",
        "name" => "sidi ali borakba",
    ],
    [
        "id"   => "485",
        "name" => "sidi allal lemsedder",
    ],
    [
        "id"   => "486",
        "name" => "sidi al kamel",
    ],
    [
        "id"   => "487",
        "name" => "sidi ammar el hadi",
    ],
    [
        "id"   => "488",
        "name" => "sidi azzouz",
    ],
    [
        "id"   => "489",
        "name" => "sidi benour",
    ],
    [
        "id"   => "490",
        "name" => "sidi bibi",
    ],
    [
        "id"   => "491",
        "name" => "sidi bouatman",
    ],
    [
        "id"   => "492",
        "name" => "sidi boubker el haj",
    ],
    [
        "id"   => "493",
        "name" => "sidi boukhalkhal",
    ],
    [
        "id"   => "494",
        "name" => "sidi boulaalam",
    ],
    [
        "id"   => "495",
        "name" => "sidi boulenouar",
    ],
    [
        "id"   => "496",
        "name" => "sidi bousber",
    ],
    [
        "id"   => "497",
        "name" => "sidi bouzid",
    ],
    [
        "id"   => "498",
        "name" => "sidi dahbi",
    ],
    [
        "id"   => "499",
        "name" => "sidi el mokhfi",
    ],
    [
        "id"   => "500",
        "name" => "sidi el rhandour",
    ],
    [
        "id"   => "501",
        "name" => "sidi ghanem",
    ],
    [
        "id"   => "502",
        "name" => "sidi hjaj",
    ],
    [
        "id"   => "503",
        "name" => "sidi hrazem",
    ],
    [
        "id"   => "504",
        "name" => "sidi hssaien",
    ],
    [
        "id"   => "505",
        "name" => "sidi ifni",
    ],
    [
        "id"   => "507",
        "name" => "sidi jaber",
    ],
    [
        "id"   => "508",
        "name" => "sidi kacem",
    ],
    [
        "id"   => "509",
        "name" => "sidi kaouki",
    ],
    [
        "id"   => "510",
        "name" => "sidi laaroussi",
    ],
    [
        "id"   => "511",
        "name" => "sidi lahcen el youssi",
    ],
    [
        "id"   => "512",
        "name" => "sidi l'mokhtar",
    ],
    [
        "id"   => "513",
        "name" => "sidi m'hamed ou merzouk",
    ],
    [
        "id"   => "514",
        "name" => "sidi mohamed el ahmar",
    ],
    [
        "id"   => "515",
        "name" => "sidi moussa lemhaya",
    ],
    [
        "id"   => "516",
        "name" => "sidi qanqouch",
    ],
    [
        "id"   => "517",
        "name" => "sidi redouane",
    ],
    [
        "id"   => "518",
        "name" => "sidi sliman",
    ],
    [
        "id"   => "519",
        "name" => "sidi taibi",
    ],
    [
        "id"   => "520",
        "name" => "sidi yahya du gharb",
    ],
    [
        "id"   => "522",
        "name" => "sidi yahya ousaad",
    ],
    [
        "id"   => "523",
        "name" => "sidi yahya",
    ],
    [
        "id"   => "524",
        "name" => "sidi youssef ben ahmed senhaja",
    ],
    [
        "id"   => "525",
        "name" => "sid zwin",
    ],
    [
        "id"   => "526",
        "name" => "skhirat",
    ],
    [
        "id"   => "527",
        "name" => "skoura",
    ],
    [
        "id"   => "528",
        "name" => "smiaa",
    ],
    [
        "id"   => "529",
        "name" => "smimou",
    ],
    [
        "id"   => "530",
        "name" => "souiria",
    ],
    [
        "id"   => "531",
        "name" => "souk khemis dades",
    ],
    [
        "id"   => "532",
        "name" => "souk larba",
    ],
    [
        "id"   => "533",
        "name" => "souk sebt oued beht",
    ],
    [
        "id"   => "534",
        "name" => "souk sebt oulad mimoun",
    ],
    [
        "id"   => "535",
        "name" => "souk sebt oulad nema",
    ],
    [
        "id"   => "536",
        "name" => "souk tleta el gharb",
    ],
    [
        "id"   => "537",
        "name" => "souk tnine moghane",
    ],
    [
        "id"   => "538",
        "name" => "souq khemis sahel",
    ],
    [
        "id"   => "539",
        "name" => "souq tnin sidi el yamani",
    ],
    [
        "id"   => "540",
        "name" => "stehat",
    ],
    [
        "id"   => "541",
        "name" => "sti fadma",
    ],
    [
        "id"   => "542",
        "name" => "tabouda",
    ],
    [
        "id"   => "543",
        "name" => "tachrafat",
    ],
    [
        "id"   => "544",
        "name" => "taddamout",
    ],
    [
        "id"   => "545",
        "name" => "taddart",
    ],
    [
        "id"   => "546",
        "name" => "tafersit",
    ],
    [
        "id"   => "547",
        "name" => "tafe tachte",
    ],
    [
        "id"   => "548",
        "name" => "tafoughalt",
    ],
    [
        "id"   => "549",
        "name" => "tafraoute",
    ],
    [
        "id"   => "550",
        "name" => "tafraout ait ali oulahcen",
    ],
    [
        "id"   => "551",
        "name" => "tagant",
    ],
    [
        "id"   => "552",
        "name" => "taghazout",
    ],
    [
        "id"   => "553",
        "name" => "taghbalt",
    ],
    [
        "id"   => "554",
        "name" => "taghjijt",
    ],
    [
        "id"   => "555",
        "name" => "tagounite",
    ],
    [
        "id"   => "556",
        "name" => "tagziret",
    ],
    [
        "id"   => "557",
        "name" => "tahla",
    ],
    [
        "id"   => "559",
        "name" => "tahnaout",
    ],
    [
        "id"   => "560",
        "name" => "tala youssef",
    ],
    [
        "id"   => "561",
        "name" => "taliouine",
    ],
    [
        "id"   => "562",
        "name" => "talmest",
    ],
    [
        "id"   => "563",
        "name" => "tamanar",
    ],
    [
        "id"   => "564",
        "name" => "tamassint",
    ],
    [
        "id"   => "565",
        "name" => "tamegroute",
    ],
    [
        "id"   => "566",
        "name" => "tamessna",
    ],
    [
        "id"   => "567",
        "name" => "tamlalat",
    ],
    [
        "id"   => "568",
        "name" => "tamnsort",
    ],
    [
        "id"   => "569",
        "name" => "tamri",
    ],
    [
        "id"   => "570",
        "name" => "tamsaman",
    ],
    [
        "id"   => "571",
        "name" => "tamslouht",
    ],
    [
        "id"   => "572",
        "name" => "tanant",
    ],
    [
        "id"   => "573",
        "name" => "tanger",
    ],
    [
        "id"   => "574",
        "name" => "tansikht",
    ],
    [
        "id"   => "575",
        "name" => "tantan",
    ],
    [
        "id"   => "576",
        "name" => "taounat",
    ],
    [
        "id"   => "577",
        "name" => "taourirt",
    ],
    [
        "id"   => "578",
        "name" => "targha",
    ],
    [
        "id"   => "579",
        "name" => "targuist",
    ],
    [
        "id"   => "580",
        "name" => "tarmigt",
    ],
    [
        "id"   => "581",
        "name" => "tarodant",
    ],
    [
        "id"   => "582",
        "name" => "taza",
    ],
    [
        "id"   => "583",
        "name" => "tazaghine",
    ],
    [
        "id"   => "584",
        "name" => "tazarine",
    ],
    [
        "id"   => "585",
        "name" => "taznakht",
    ],
    [
        "id"   => "586",
        "name" => "tazouta",
    ],
    [
        "id"   => "587",
        "name" => "telata rissana",
    ],
    [
        "id"   => "588",
        "name" => "telat azlaf",
    ],
    [
        "id"   => "589",
        "name" => "telouet",
    ],
    [
        "id"   => "590",
        "name" => "temara",
    ],
    [
        "id"   => "591",
        "name" => "teroual",
    ],
    [
        "id"   => "592",
        "name" => "tetouan",
    ],
    [
        "id"   => "593",
        "name" => "tidili",
    ],
    [
        "id"   => "594",
        "name" => "tiflet",
    ],
    [
        "id"   => "595",
        "name" => "tighasalin",
    ],
    [
        "id"   => "596",
        "name" => "tighirt",
    ],
    [
        "id"   => "597",
        "name" => "tighmi",
    ],
    [
        "id"   => "598",
        "name" => "tighza",
    ],
    [
        "id"   => "599",
        "name" => "tikiouine",
    ],
    [
        "id"   => "600",
        "name" => "tilmi",
    ],
    [
        "id"   => "601",
        "name" => "timahdite",
    ],
    [
        "id"   => "602",
        "name" => "timdeline",
    ],
    [
        "id"   => "603",
        "name" => "timezgana",
    ],
    [
        "id"   => "604",
        "name" => "timoulay",
    ],
    [
        "id"   => "605",
        "name" => "timoulilt",
    ],
    [
        "id"   => "606",
        "name" => "tim dghas",
    ],
    [
        "id"   => "607",
        "name" => "tinejdad",
    ],
    [
        "id"   => "608",
        "name" => "tinghir",
    ],
    [
        "id"   => "609",
        "name" => "tinzouline",
    ],
    [
        "id"   => "610",
        "name" => "tioughza",
    ],
    [
        "id"   => "611",
        "name" => "tissa",
    ],
    [
        "id"   => "612",
        "name" => "tizirine",
    ],
    [
        "id"   => "613",
        "name" => "tizi nisli",
    ],
    [
        "id"   => "614",
        "name" => "tizi ouasli",
    ],
    [
        "id"   => "615",
        "name" => "tizi tchen",
    ],
    [
        "id"   => "616",
        "name" => "tiznit",
    ],
    [
        "id"   => "617",
        "name" => "tiztoutine",
    ],
    [
        "id"   => "618",
        "name" => "tlat louled",
    ],
    [
        "id"   => "619",
        "name" => "tlat gnadiz",
    ],
    [
        "id"   => "620",
        "name" => "tleta el henchane",
    ],
    [
        "id"   => "621",
        "name" => "tlet ouled fars",
    ],
    [
        "id"   => "622",
        "name" => "tnin lgharbia",
    ],
    [
        "id"   => "623",
        "name" => "torres de alcala",
    ],
    [
        "id"   => "624",
        "name" => "touima",
    ],
    [
        "id"   => "625",
        "name" => "toundoute",
    ],
    [
        "id"   => "626",
        "name" => "touroug",
    ],
    [
        "id"   => "627",
        "name" => "trougout",
    ],
    [
        "id"   => "628",
        "name" => "ville ibn batouta",
    ],
    [
        "id"   => "629",
        "name" => "wawizaghet",
    ],
    [
        "id"   => "630",
        "name" => "yousoufia",
    ],
    [
        "id"   => "631",
        "name" => "zag",
    ],
    [
        "id"   => "632",
        "name" => "zagora",
    ],
    [
        "id"   => "633",
        "name" => "zaio",
    ],
    [
        "id"   => "634",
        "name" => "zaouiat cheikh",
    ],
    [
        "id"   => "635",
        "name" => "zaouiat sidi smail",
    ],
    [
        "id"   => "636",
        "name" => "zaouia bougrine",
    ],
    [
        "id"   => "637",
        "name" => "zaouia kadiria",
    ],
    [
        "id"   => "638",
        "name" => "zaouia sidi kacem",
    ],
    [
        "id"   => "639",
        "name" => "zawit benhmida",
    ],
    [
        "id"   => "640",
        "name" => "zayda",
    ],
    [
        "id"   => "641",
        "name" => "zemamra",
    ],
    [
        "id"   => "642",
        "name" => "zerada",
    ],
    [
        "id"   => "643",
        "name" => "zghanghan",
    ],
    [
        "id"   => "644",
        "name" => "zhiliga",
    ],
    [
        "id"   => "645",
        "name" => "zirara",
    ],
    [
        "id"   => "646",
        "name" => "zouayar",
    ],
    [
        "id"   => "647",
        "name" => "zrizer",
    ],
    [
        "id"   => "648",
        "name" => "Touarga",
    ],
    [
        "id"   => "649",
        "name" => "Gueznaia",
    ],
    [
        "id"   => "650",
        "name" => "bir jdid",
    ],
    [
        "id"   => "651",
        "name" => "medyouna",
    ],
    [
        "id"   => "652",
        "name" => "Sebaa aioun",
    ],
    [
        "id"   => "653",
        "name" => "Tajoutat",
    ],
    [
        "id"   => "654",
        "name" => "Lamhaya",
    ],
    [
        "id"   => "655",
        "name" => "Lmsaada",
    ],
    [
        "id"   => "656",
        "name" => "Chouiter",
    ],
    [
        "id"   => "657",
        "name" => "Beni Ensar",
    ],
    [
        "id"   => "658",
        "name" => "Tagadirt",
    ],
    [
        "id"   => "659",
        "name" => "Leqliaa",
    ],
    [
        "id"   => "660",
        "name" => "Dchira",
    ],
    [
        "id"   => "661",
        "name" => "Tin mansour",
    ],
    [
        "id"   => "662",
        "name" => "El maasem",
    ],
    [
        "id"   => "663",
        "name" => "Telat ressana",
    ],
    [
        "id"   => "664",
        "name" => "Krimda",
    ],
    [
        "id"   => "665",
        "name" => "Skhinate",
    ],
    [
        "id"   => "666",
        "name" => "Douiat",
    ],
    [
        "id"   => "667",
        "name" => "Mejats",
    ],
    [
        "id"   => "668",
        "name" => "Ain karma",
    ],
    [
        "id"   => "669",
        "name" => "Tihli",
    ],
    [
        "id"   => "670",
        "name" => "Begara",
    ],
    [
        "id"   => "671",
        "name" => "Oulad teima",
    ],
    [
        "id"   => "672",
        "name" => "Zemrane",
    ],
    [
        "id"   => "673",
        "name" => "Boujdor",
    ],
    [
        "id"   => "674",
        "name" => "Terfaya",
    ],
    [
        "id"   => "675",
        "name" => "Akhefnir",
    ],
    [
        "id"   => "676",
        "name" => "Semara",
    ],
    [
        "id"   => "677",
        "name" => "Bouarfa",
    ],
    [
        "id"   => "678",
        "name" => "Tata",
    ],
    [
        "id"   => "679",
        "name" => "Figuig",
    ],
    [
        "id"   => "680",
        "name" => "NOUACEUR",
    ],
    [
        "id"   => "681",
        "name" => "Ain Tizghi",
    ],
    [
        "id"   => "682",
        "name" => "Aksal",
    ],
    [
        "id"   => "683",
        "name" => "Al Ouidane",
    ],
    [
        "id"   => "684",
        "name" => "Asilah",
    ],
    [
        "id"   => "685",
        "name" => "Bedouza",
    ],
    [
        "id"   => "686",
        "name" => "Bejaad",
    ],
    [
        "id"   => "687",
        "name" => "Beni yakhlef",
    ],
    [
        "id"   => "688",
        "name" => "Chemaia",
    ],
    [
        "id"   => "689",
        "name" => "Chrifia",
    ],
    [
        "id"   => "690",
        "name" => "Douar Al Hana",
    ],
    [
        "id"   => "691",
        "name" => "EL MANSOURIA",
    ],
    [
        "id"   => "692",
        "name" => "Had Hrara",
    ],
    [
        "id"   => "693",
        "name" => "Sala Al Jadida",
    ],
    [
        "id"   => "694",
        "name" => "Sbaa ayoune",
    ],
    [
        "id"   => "695",
        "name" => "Sfirjla",
    ],
    [
        "id"   => "696",
        "name" => "Souihla",
    ],
    [
        "id"   => "697",
        "name" => "Tassoultante",
    ],
    [
        "id"   => "698",
        "name" => "Temsia",
    ],
    [
        "id"   => "699",
        "name" => "Tit Mellil",
    ],
    [
        "id"   => "700",
        "name" => "Tnin Laghyat",
    ],
    [
        "id"   => "701",
        "name" => "Zaouiat ahensal",
    ],
    [
        "id"   => "702",
        "name" => "Oued Cherat",
    ],
    [
        "id"   => "703",
        "name" => "Outatlhaj",
    ],
    [
        "id"   => "704",
        "name" => "Lagouassem",
    ],
    [
        "id"   => "705",
        "name" => "Lahebichate",
    ],
    [
        "id"   => "706",
        "name" => "Lalla Fatna",
    ],
    [
        "id"   => "707",
        "name" => "Louizia",
    ],
    [
        "id"   => "708",
        "name" => "Tamaris",
    ],
    [
        "id"   => "709",
        "name" => "Ait Moussa",
    ],
    [
        "id"   => "710",
        "name" => "DEROUA",
    ],
    [
        "id"   => "711",
        "name" => "Oulad Dahou",
    ],
    [
        "id"   => "712",
        "name" => "Oulmes",
    ],
    [
        "id"   => "713",
        "name" => "Riche",
    ],
    [
        "id"   => "714",
        "name" => "Sabaâ Aïyoun",
    ],
    [
        "id"   => "715",
        "name" => "SIDI MELOUK",
    ],
    [
        "id"   => "716",
        "name" => "Rommani",
    ],
    [
        "id"   => "717",
        "name" => "IGLI",
    ],
    [
        "id"   => "718",
        "name" => "TIDASS",
    ],
    [
        "id"   => "719",
        "name" => "LAAYAYDA",
    ],
    [
        "id"   => "720",
        "name" => "EL ARJATE",
    ],
    [
        "id"   => "721",
        "name" => "MERS ELKHEIR",
    ],
    [
        "id"   => "722",
        "name" => "SEBBAH",
    ],
    [
        "id"   => "723",
        "name" => "AIN AOUDA",
    ],
    [
        "id"   => "724",
        "name" => "AIN ELAOUDA",
    ],
    [
        "id"   => "725",
        "name" => "OUMAZZA",
    ],
    [
        "id"   => "726",
        "name" => "EL MENZEH",
    ],
    [
        "id"   => "727",
        "name" => "SIDIYAHIA ZAERS",
    ],
    [
        "id"   => "728",
        "name" => "BENNABET",
    ],
    [
        "id"   => "729",
        "name" => "EL KRASSI",
    ],
    [
        "id"   => "730",
        "name" => "TNINE OULAD ALI",
    ],
    [
        "id"   => "731",
        "name" => "ZIAIDA",
    ],
    [
        "id"   => "732",
        "name" => "SOUALEM ETTIRS",
    ],
    [
        "id"   => "733",
        "name" => "MOULAINE EL OUED",
    ],
    [
        "id"   => "734",
        "name" => "SIDI BETTACHE",
    ],
    [
        "id"   => "735",
        "name" => "AHLAF",
    ],
    [
        "id"   => "736",
        "name" => "ARBAOUA",
    ],
    [
        "id"   => "737",
        "name" => "SIDI BOUBKER ELHAJ",
    ],
    [
        "id"   => "738",
        "name" => "OUED EL MAKHAZINE",
    ],
    [
        "id"   => "739",
        "name" => "AZGHAR",
    ],
    [
        "id"   => "740",
        "name" => "CHOUAFAA",
    ],
    [
        "id"   => "741",
        "name" => "MAJMAA TOLBA",
    ],
    [
        "id"   => "742",
        "name" => "MAAZIZ",
    ],
    [
        "id"   => "743",
        "name" => "SOUK JEMAA HOUDERRANE",
    ],
    [
        "id"   => "744",
        "name" => "TARMILET",
    ],
    [
        "id"   => "745",
        "name" => "AITICHOU",
    ],
    [
        "id"   => "746",
        "name" => "AIN SBIT",
    ],
    [
        "id"   => "747",
        "name" => "MARCHOUCH",
    ],
    [
        "id"   => "748",
        "name" => "AINJOHRA",
    ],
    [
        "id"   => "749",
        "name" => "BIR TALEB",
    ],
    [
        "id"   => "750",
        "name" => "ZAGOTA",
    ],
    [
        "id"   => "751",
        "name" => "CHBANATE",
    ],
    [
        "id"   => "752",
        "name" => "HAD KOURT",
    ],
    [
        "id"   => "753",
        "name" => "AIN DEFFALI",
    ],
    [
        "id"   => "754",
        "name" => "AIN DORIJ",
    ],
    [
        "id"   => "755",
        "name" => "BNI QUOLLA",
    ],
    [
        "id"   => "756",
        "name" => "SIDIABDELAZIZ",
    ],
    [
        "id"   => "757",
        "name" => "SKATT",
    ],
    [
        "id"   => "758",
        "name" => "AIT OUARDA",
    ],
    [
        "id"   => "759",
        "name" => "TAOUNZA",
    ],
    [
        "id"   => "760",
        "name" => "IGMIR",
    ],
    [
        "id"   => "761",
        "name" => "AGHBALOU ZAOUIA",
    ],
    [
        "id"   => "762",
        "name" => "IMADAHEN",
    ],
    [
        "id"   => "763",
        "name" => "RFALA",
    ],
    [
        "id"   => "764",
        "name" => "AIT BLAL",
    ],
    [
        "id"   => "765",
        "name" => "AIT TAMLIL",
    ],
    [
        "id"   => "766",
        "name" => "ANZOU",
    ],
    [
        "id"   => "767",
        "name" => "TIFNI",
    ],
    [
        "id"   => "768",
        "name" => "TISLIT",
    ],
    [
        "id"   => "769",
        "name" => "BNI HASSANE",
    ],
    [
        "id"   => "770",
        "name" => "TABIA",
    ],
    [
        "id"   => "771",
        "name" => "OUAOUIZARHT",
    ],
    [
        "id"   => "772",
        "name" => "TABANNT",
    ],
    [
        "id"   => "773",
        "name" => "ABACHKOU",
    ],
    [
        "id"   => "774",
        "name" => "TAGUELFT",
    ],
    [
        "id"   => "775",
        "name" => "AIT TAMEJOUTE",
    ],
    [
        "id"   => "776",
        "name" => "ARBAA OUAKABLI",
    ],
    [
        "id"   => "777",
        "name" => "AIT TAGUELLA",
    ],
    [
        "id"   => "778",
        "name" => "ARBAA OU AOULA",
    ],
    [
        "id"   => "779",
        "name" => "BOUANTAR",
    ],
    [
        "id"   => "780",
        "name" => "TILOUGGUITE",
    ],
    [
        "id"   => "781",
        "name" => "ANERGUI",
    ],
    [
        "id"   => "782",
        "name" => "BNI OUKIL",
    ],
    [
        "id"   => "784",
        "name" => "LAAYAYTA",
    ],
    [
        "id"   => "785",
        "name" => "M GHILA",
    ],
    [
        "id"   => "786",
        "name" => "ARHBALA",
    ],
    [
        "id"   => "787",
        "name" => "BOUTFARDA",
    ],
    [
        "id"   => "788",
        "name" => "HAD OULAD BOUMOUSSA",
    ],
    [
        "id"   => "789",
        "name" => "BENI OUKIL",
    ],
    [
        "id"   => "790",
        "name" => "ELKRIFATE",
    ],
    [
        "id"   => "791",
        "name" => "HAL EL MARBAA",
    ],
    [
        "id"   => "792",
        "name" => "KHEMIS BNI CHAGDAL",
    ],
    [
        "id"   => "793",
        "name" => "FOUM EL ANSER",
    ],
    [
        "id"   => "794",
        "name" => "FECHTALA",
    ],
    [
        "id"   => "795",
        "name" => "HADBRADIA",
    ],
    [
        "id"   => "796",
        "name" => "LAHLALMA",
    ],
    [
        "id"   => "797",
        "name" => "OULAD ALI LOUED",
    ],
    [
        "id"   => "798",
        "name" => "OULAD DRISS BRADIA",
    ],
    [
        "id"   => "799",
        "name" => "GUETTAYA",
    ],
    [
        "id"   => "800",
        "name" => "SEMGUET",
    ],
    [
        "id"   => "801",
        "name" => "DOUAR AIT ALI",
    ],
    [
        "id"   => "802",
        "name" => "OULAD AYAD",
    ],
    [
        "id"   => "803",
        "name" => "EL BAZZAZA",
    ],
    [
        "id"   => "804",
        "name" => "EL KRAZZA",
    ],
    [
        "id"   => "805",
        "name" => "OULAD BOURAHMOUNE",
    ],
    [
        "id"   => "806",
        "name" => "OULED ZMAM",
    ],
    [
        "id"   => "807",
        "name" => "RHORM EL ALEM",
    ],
    [
        "id"   => "808",
        "name" => "TANORHA",
    ],
    [
        "id"   => "809",
        "name" => "MOULAY ABDELLAH",
    ],
    [
        "id"   => "810",
        "name" => "OULADHSSINE",
    ],
    [
        "id"   => "811",
        "name" => "OULED AMRANE",
    ],
    [
        "id"   => "812",
        "name" => "OULAD AISSA",
    ],
    [
        "id"   => "813",
        "name" => "OULAD HASSINE",
    ],
    [
        "id"   => "814",
        "name" => "KRIDID",
    ],
    [
        "id"   => "815",
        "name" => "ARBAAAOUNATE",
    ],
    [
        "id"   => "816",
        "name" => "KHEMIS KSIBA",
    ],
    [
        "id"   => "817",
        "name" => "MATRANN",
    ],
    [
        "id"   => "818",
        "name" => "TLETA BOULAOUANE",
    ],
    [
        "id"   => "819",
        "name" => "BOUCEDRA",
    ],
    [
        "id"   => "820",
        "name" => "HAOUZIA",
    ],
    [
        "id"   => "821",
        "name" => "MHAIOULA",
    ],
    [
        "id"   => "822",
        "name" => "ARBAA CHTOUKA",
    ],
    [
        "id"   => "823",
        "name" => "LAAOUISSATE",
    ],
    [
        "id"   => "824",
        "name" => "EL HAGAGCHA",
    ],
    [
        "id"   => "825",
        "name" => "OULAD BENCHAOUI",
    ],
    [
        "id"   => "826",
        "name" => "SANIAT BENRKIK",
    ],
    [
        "id"   => "827",
        "name" => "ZAOUIAT BEN HAMDOUNE",
    ],
    [
        "id"   => "828",
        "name" => "KHEMIS MTOUH",
    ],
    [
        "id"   => "829",
        "name" => "OULAD HAMDANE",
    ],
    [
        "id"   => "830",
        "name" => "OULAD SIDI ALIBEN YOUSSEF",
    ],
    [
        "id"   => "831",
        "name" => "SEBT BENI HLAL",
    ],
    [
        "id"   => "832",
        "name" => "MTAL",
    ],
    [
        "id"   => "833",
        "name" => "EL MECHREK",
    ],
    [
        "id"   => "834",
        "name" => "SEBT SAISS",
    ],
    [
        "id"   => "835",
        "name" => "OULAD GOUAOUCH",
    ],
    [
        "id"   => "836",
        "name" => "HAD BNI BATAO",
    ],
    [
        "id"   => "837",
        "name" => "TLETA BENI ZRANTIL",
    ],
    [
        "id"   => "838",
        "name" => "MFASSIS",
    ],
    [
        "id"   => "839",
        "name" => "ARBAA MAADNA",
    ],
    [
        "id"   => "840",
        "name" => "BNI SMIR",
    ],
    [
        "id"   => "841",
        "name" => "JEMAA OULAD AISSA",
    ],
    [
        "id"   => "842",
        "name" => "KASBAT TROCH",
    ],
    [
        "id"   => "843",
        "name" => "OULAD FENNANE",
    ],
    [
        "id"   => "844",
        "name" => "SEBT DECHRA BRAKSA",
    ],
    [
        "id"   => "845",
        "name" => "AIT AMMAR",
    ],
    [
        "id"   => "846",
        "name" => "TACHREFT",
    ],
    [
        "id"   => "847",
        "name" => "TLETA CHOUGRANE",
    ],
    [
        "id"   => "848",
        "name" => "ROUACHED",
    ],
    [
        "id"   => "849",
        "name" => "SETTAT BIR BAOUCH",
    ],
    [
        "id"   => "850",
        "name" => "AINNZARH",
    ],
    [
        "id"   => "851",
        "name" => "HAD MZOURA",
    ],
    [
        "id"   => "852",
        "name" => "SEBT OULAD FRIHA",
    ],
    [
        "id"   => "853",
        "name" => "SIDI EL AIDI",
    ],
    [
        "id"   => "854",
        "name" => "SIDI MOHAMMED BEN RAHAL",
    ],
    [
        "id"   => "855",
        "name" => "OULAD MHAMED",
    ],
    [
        "id"   => "856",
        "name" => "DAR CHAFFAI",
    ],
    [
        "id"   => "857",
        "name" => "OULAD NJIMA",
    ],
    [
        "id"   => "858",
        "name" => "SIDI AHMED EL KHADIR",
    ],
    [
        "id"   => "859",
        "name" => "SIDI RAHHAL PLAGE",
    ],
    [
        "id"   => "860",
        "name" => "TLET OULAD SGHIR",
    ],
    [
        "id"   => "861",
        "name" => "ARBA OULAD BOU ALI",
    ],
    [
        "id"   => "862",
        "name" => "KRAKRA",
    ],
    [
        "id"   => "863",
        "name" => "OULAD BELKACEM",
    ],
    [
        "id"   => "864",
        "name" => "OULADDRISS",
    ],
    [
        "id"   => "865",
        "name" => "RIMA",
    ],
    [
        "id"   => "866",
        "name" => "HAD SOUALEM",
    ],
    [
        "id"   => "867",
        "name" => "OULADZIANE",
    ],
    [
        "id"   => "868",
        "name" => "OUED BERS",
    ],
    [
        "id"   => "869",
        "name" => "RHNIMIYNE",
    ],
    [
        "id"   => "870",
        "name" => "SIDISAID MAACHOU",
    ],
    [
        "id"   => "871",
        "name" => "KHEMIS GDANA",
    ],
    [
        "id"   => "872",
        "name" => "OUED NAANAA",
    ],
    [
        "id"   => "873",
        "name" => "DOUAR OULED NACEUR",
    ],
    [
        "id"   => "874",
        "name" => "MRIZIG",
    ],
    [
        "id"   => "875",
        "name" => "SIDI RAHHALCHAOUIA",
    ],
    [
        "id"   => "876",
        "name" => "IMFOUT",
    ],
    [
        "id"   => "877",
        "name" => "MECHRA BEN ABBOU",
    ],
    [
        "id"   => "878",
        "name" => "TLETA AIN BLAL",
    ],
    [
        "id"   => "879",
        "name" => "TNINE TOUALET",
    ],
    [
        "id"   => "880",
        "name" => "ZEMAMRACHAOUIA",
    ],
    [
        "id"   => "881",
        "name" => "NOUACER",
    ],
    [
        "id"   => "882",
        "name" => "SOUK JEMAA SIDI EL AYACHI",
    ],
    [
        "id"   => "883",
        "name" => "BEN ABID",
    ],
    [
        "id"   => "884",
        "name" => "SIDI MOUSSA BEN ALI",
    ],
    [
        "id"   => "885",
        "name" => "OUEDHASSAR",
    ],
    [
        "id"   => "886",
        "name" => "ZOUAGHA",
    ],
    [
        "id"   => "887",
        "name" => "OULAD ETTAYEB",
    ],
    [
        "id"   => "888",
        "name" => "AIOUN SENAME",
    ],
    [
        "id"   => "889",
        "name" => "TAFAJIGHT",
    ],
    [
        "id"   => "890",
        "name" => "ZAOUIAT ELKERMATE",
    ],
    [
        "id"   => "891",
        "name" => "ARBAA TAOURIRT",
    ],
    [
        "id"   => "892",
        "name" => "CHAKRANE",
    ],
    [
        "id"   => "893",
        "name" => "BENI GMIL MESTASSA",
    ],
    [
        "id"   => "894",
        "name" => "IMRABTEN",
    ],
    [
        "id"   => "895",
        "name" => "KETAMA",
    ],
    [
        "id"   => "896",
        "name" => "TABARANNT",
    ],
    [
        "id"   => "897",
        "name" => "TAGHZOUT",
    ],
    [
        "id"   => "898",
        "name" => "BNI AMMART",
    ],
    [
        "id"   => "899",
        "name" => "AIN BENABBOU",
    ],
    [
        "id"   => "900",
        "name" => "BNIBOUNSAR",
    ],
    [
        "id"   => "901",
        "name" => "BNI BCHIR",
    ],
    [
        "id"   => "902",
        "name" => "SIDI BOUZINEB",
    ],
    [
        "id"   => "903",
        "name" => "ACHLOUJ",
    ],
    [
        "id"   => "904",
        "name" => "IFKIRNE",
    ],
    [
        "id"   => "905",
        "name" => "AIT HAMZA",
    ],
    [
        "id"   => "906",
        "name" => "AIT ABDALLAH BOUKHAMOUJ",
    ],
    [
        "id"   => "907",
        "name" => "AIT EL MANE",
    ],
    [
        "id"   => "908",
        "name" => "TALZEMT",
    ],
    [
        "id"   => "909",
        "name" => "KSABI",
    ],
    [
        "id"   => "910",
        "name" => "OUIZEGHT",
    ],
    [
        "id"   => "911",
        "name" => "OULED ALI",
    ],
    [
        "id"   => "912",
        "name" => "TINDIT",
    ],
    [
        "id"   => "913",
        "name" => "FRITISSA",
    ],
    [
        "id"   => "914",
        "name" => "TISSAF",
    ],
    [
        "id"   => "915",
        "name" => "EL ORJANE",
    ],
    [
        "id"   => "916",
        "name" => "TAGHROUTE",
    ],
    [
        "id"   => "917",
        "name" => "BNI OULID",
    ],
    [
        "id"   => "918",
        "name" => "TAFRANNT",
    ],
    [
        "id"   => "919",
        "name" => "RGHIOUA",
    ],
    [
        "id"   => "920",
        "name" => "QUALLALINE",
    ],
    [
        "id"   => "921",
        "name" => "SGOURA",
    ],
    [
        "id"   => "922",
        "name" => "BENI SELMANE",
    ],
    [
        "id"   => "923",
        "name" => "LOULJA",
    ],
    [
        "id"   => "924",
        "name" => "MKANNSSA",
    ],
    [
        "id"   => "925",
        "name" => "SIDI EL ABED",
    ],
    [
        "id"   => "926",
        "name" => "RETBA",
    ],
    [
        "id"   => "927",
        "name" => "KLAIA",
    ],
    [
        "id"   => "928",
        "name" => "OULAD SALAH",
    ],
    [
        "id"   => "929",
        "name" => "TAMESNITE",
    ],
    [
        "id"   => "930",
        "name" => "LAMKMMEL",
    ],
    [
        "id"   => "931",
        "name" => "TNINEZGHARIYINE",
    ],
    [
        "id"   => "932",
        "name" => "SIDI HAJ MHAMED",
    ],
    [
        "id"   => "933",
        "name" => "THAR ES-SOUK",
    ],
    [
        "id"   => "934",
        "name" => "BENI OUNJIL TAFRAOUTE",
    ],
    [
        "id"   => "935",
        "name" => "TAMEDIT",
    ],
    [
        "id"   => "936",
        "name" => "OUEDJEMAA",
    ],
    [
        "id"   => "937",
        "name" => "RAS EL OUED",
    ],
    [
        "id"   => "938",
        "name" => "SIDI MHAMED BEN LAHCEN",
    ],
    [
        "id"   => "939",
        "name" => "ARBAA BENI FTAH",
    ],
    [
        "id"   => "940",
        "name" => "BAB EL MROUJ",
    ],
    [
        "id"   => "941",
        "name" => "BENILENNT",
    ],
    [
        "id"   => "942",
        "name" => "MEKNASSA ACHARQIA",
    ],
    [
        "id"   => "943",
        "name" => "MERHRAOUA",
    ],
    [
        "id"   => "944",
        "name" => "TAINESTE",
    ],
    [
        "id"   => "945",
        "name" => "BECHIYINE",
    ],
    [
        "id"   => "946",
        "name" => "BENI ALI",
    ],
    [
        "id"   => "947",
        "name" => "MSOUN",
    ],
    [
        "id"   => "948",
        "name" => "TOUAHAR",
    ],
    [
        "id"   => "949",
        "name" => "KAHF EL RHAR",
    ],
    [
        "id"   => "950",
        "name" => "TNINE TAIFA",
    ],
    [
        "id"   => "951",
        "name" => "OULAD CHRIF",
    ],
    [
        "id"   => "952",
        "name" => "BOURED",
    ],
    [
        "id"   => "953",
        "name" => "OULAD BOURIMA",
    ],
    [
        "id"   => "954",
        "name" => "TLATA TRAIBA",
    ],
    [
        "id"   => "955",
        "name" => "TAZARINEMSARA",
    ],
    [
        "id"   => "956",
        "name" => "JBARNA",
    ],
    [
        "id"   => "957",
        "name" => "TIGHEZRATINE",
    ],
    [
        "id"   => "958",
        "name" => "AIN ELHAMRA",
    ],
    [
        "id"   => "959",
        "name" => "INAHNAHEN",
    ],
    [
        "id"   => "960",
        "name" => "BERKINE",
    ],
    [
        "id"   => "961",
        "name" => "MEZGUITEM",
    ],
    [
        "id"   => "962",
        "name" => "SAKA",
    ],
    [
        "id"   => "963",
        "name" => "RCHIDA",
    ],
    [
        "id"   => "964",
        "name" => "RAS LAKSAR",
    ],
    [
        "id"   => "965",
        "name" => "HAD MSILA",
    ],
    [
        "id"   => "966",
        "name" => "EL GOUZAT",
    ],
    [
        "id"   => "967",
        "name" => "AOURA",
    ],
    [
        "id"   => "968",
        "name" => "OULAD AYYAD",
    ],
    [
        "id"   => "969",
        "name" => "ZAOUIA SIDIABDEJLIL",
    ],
    [
        "id"   => "970",
        "name" => "BENI MGARA",
    ],
    [
        "id"   => "971",
        "name" => "BOUCHFAA",
    ],
    [
        "id"   => "972",
        "name" => "KAOUANE",
    ],
    [
        "id"   => "973",
        "name" => "AIN EL FENDEL",
    ],
    [
        "id"   => "974",
        "name" => "IFRANE AITASSOU",
    ],
    [
        "id"   => "975",
        "name" => "SIDI ALI BENNACER",
    ],
    [
        "id"   => "976",
        "name" => "ZERARDA",
    ],
    [
        "id"   => "977",
        "name" => "OUED EL MALEH",
    ],
    [
        "id"   => "978",
        "name" => "HAMRIA",
    ],
    [
        "id"   => "979",
        "name" => "LAAJAJRA",
    ],
    [
        "id"   => "980",
        "name" => "MIKKES",
    ],
    [
        "id"   => "981",
        "name" => "MOULAY YACOUB",
    ],
    [
        "id"   => "982",
        "name" => "SEBTLOUDAYA",
    ],
    [
        "id"   => "983",
        "name" => "SIDI DAOUD",
    ],
    [
        "id"   => "984",
        "name" => "AIN KANSARA",
    ],
    [
        "id"   => "985",
        "name" => "MRABTINE",
    ],
    [
        "id"   => "986",
        "name" => "OUED LAHJAR",
    ],
    [
        "id"   => "987",
        "name" => "OUAHAT SIDIBRAHIM",
    ],
    [
        "id"   => "988",
        "name" => "OULAD BELAAGUID",
    ],
    [
        "id"   => "989",
        "name" => "OULAD DLIM",
    ],
    [
        "id"   => "990",
        "name" => "KETTARA",
    ],
    [
        "id"   => "991",
        "name" => "NZALAT EL HARMEL",
    ],
    [
        "id"   => "992",
        "name" => "HADMNABHA",
    ],
    [
        "id"   => "993",
        "name" => "M NABHA",
    ],
    [
        "id"   => "994",
        "name" => "SEBT AIT IMOUR",
    ],
    [
        "id"   => "995",
        "name" => "OUKAIMEDEN",
    ],
    [
        "id"   => "996",
        "name" => "TINMEL",
    ],
    [
        "id"   => "997",
        "name" => "MZOUDIA",
    ],
    [
        "id"   => "998",
        "name" => "SAIDATE",
    ],
    [
        "id"   => "999",
        "name" => "ZAOUIA NOUACEUR",
    ],
    [
        "id"   => "1000",
        "name" => "AHDIL",
    ],
    [
        "id"   => "1001",
        "name" => "ASSERRATOU",
    ],
    [
        "id"   => "1002",
        "name" => "LALLA AZIZA",
    ],
    [
        "id"   => "1003",
        "name" => "TAOULOUKOUT",
    ],
    [
        "id"   => "1004",
        "name" => "TIMEZGUADIOUINE",
    ],
    [
        "id"   => "1005",
        "name" => "OUADLBOUR",
    ],
    [
        "id"   => "1006",
        "name" => "ICHAMRAREN",
    ],
    [
        "id"   => "1007",
        "name" => "AFALLA ISSEN",
    ],
    [
        "id"   => "1008",
        "name" => "AIT HADI",
    ],
    [
        "id"   => "1009",
        "name" => "ARBAA DOUIRANE",
    ],
    [
        "id"   => "1010",
        "name" => "BOULAOUANE",
    ],
    [
        "id"   => "1011",
        "name" => "GUEMASSA",
    ],
    [
        "id"   => "1012",
        "name" => "HAD MJATT",
    ],
    [
        "id"   => "1013",
        "name" => "SEBT MZOUDA",
    ],
    [
        "id"   => "1014",
        "name" => "ZAOUIAT ANNAHLIA",
    ],
    [
        "id"   => "1015",
        "name" => "HADABADALLAH RHIATE",
    ],
    [
        "id"   => "1016",
        "name" => "ABADOU",
    ],
    [
        "id"   => "1017",
        "name" => "AIT AADEL",
    ],
    [
        "id"   => "1018",
        "name" => "ARBAA TIRHEDOUINE",
    ],
    [
        "id"   => "1019",
        "name" => "HAD ZERKTEN",
    ],
    [
        "id"   => "1020",
        "name" => "AITFASKA",
    ],
    [
        "id"   => "1021",
        "name" => "AIT SIDI DAOUD",
    ],
    [
        "id"   => "1022",
        "name" => "TAZZARTE",
    ],
    [
        "id"   => "1023",
        "name" => "TIDILI MESFIOUA",
    ],
    [
        "id"   => "1024",
        "name" => "TOUAMA",
    ],
    [
        "id"   => "1025",
        "name" => "TIZGUINE",
    ],
    [
        "id"   => "1026",
        "name" => "AZGOUR",
    ],
    [
        "id"   => "1027",
        "name" => "ASSIF EL MAL",
    ],
    [
        "id"   => "1028",
        "name" => "ANOUGAL",
    ],
    [
        "id"   => "1029",
        "name" => "IMGDAL",
    ],
    [
        "id"   => "1030",
        "name" => "OUIRGANE",
    ],
    [
        "id"   => "1031",
        "name" => "MOULAY BRAHIM",
    ],
    [
        "id"   => "1032",
        "name" => "LALLA TAKARKOUSTE",
    ],
    [
        "id"   => "1033",
        "name" => "AGHMATE",
    ],
    [
        "id"   => "1034",
        "name" => "RHMATE",
    ],
    [
        "id"   => "1035",
        "name" => "TAMAZOUZTE",
    ],
    [
        "id"   => "1036",
        "name" => "TLETA NYACOUB",
    ],
    [
        "id"   => "1037",
        "name" => "IGOUDAR",
    ],
    [
        "id"   => "1038",
        "name" => "AGHBALOU",
    ],
    [
        "id"   => "1039",
        "name" => "EL HYDANA",
    ],
    [
        "id"   => "1040",
        "name" => "MAYATE",
    ],
    [
        "id"   => "1041",
        "name" => "OULAD YACOUB",
    ],
    [
        "id"   => "1042",
        "name" => "SEBT OUNASDASS",
    ],
    [
        "id"   => "1043",
        "name" => "OULADZARRAD",
    ],
    [
        "id"   => "1044",
        "name" => "EL AAMRIA",
    ],
    [
        "id"   => "1045",
        "name" => "AIN IGLI",
    ],
    [
        "id"   => "1046",
        "name" => "CHTAIBA",
    ],
    [
        "id"   => "1047",
        "name" => "DECHRA",
    ],
    [
        "id"   => "1048",
        "name" => "PONT TASSAOUTE",
    ],
    [
        "id"   => "1049",
        "name" => "OULAD AAMER",
    ],
    [
        "id"   => "1050",
        "name" => "SIDI EL HATTAB",
    ],
    [
        "id"   => "1051",
        "name" => "OULADMSABBEL",
    ],
    [
        "id"   => "1052",
        "name" => "BOUYA OMAR",
    ],
    [
        "id"   => "1053",
        "name" => "DZOUZ",
    ],
    [
        "id"   => "1054",
        "name" => "HADFRAITA",
    ],
    [
        "id"   => "1055",
        "name" => "LAATMNA SRARHNA",
    ],
    [
        "id"   => "1056",
        "name" => "BENGUERIR BASE MILITAIRE",
    ],
    [
        "id"   => "1057",
        "name" => "TNINE BOUCHANE",
    ],
    [
        "id"   => "1058",
        "name" => "JEMAA EL MA BARED",
    ],
    [
        "id"   => "1059",
        "name" => "SEBTBRIKYINE",
    ],
    [
        "id"   => "1060",
        "name" => "OULAD AAMER TIZMARINE",
    ],
    [
        "id"   => "1061",
        "name" => "AIT HAMMOU",
    ],
    [
        "id"   => "1062",
        "name" => "OULAD HASSOUNE HAMRI",
    ],
    [
        "id"   => "1063",
        "name" => "HAD RAS EL AIN",
    ],
    [
        "id"   => "1064",
        "name" => "AKERMA",
    ],
    [
        "id"   => "1065",
        "name" => "JAIDATE",
    ],
    [
        "id"   => "1066",
        "name" => "SAHRIJ",
    ],
    [
        "id"   => "1067",
        "name" => "LOUAD LAKHDAR",
    ],
    [
        "id"   => "1068",
        "name" => "OUARGUI",
    ],
    [
        "id"   => "1069",
        "name" => "SIDI AISSA BENSLIMANE",
    ],
    [
        "id"   => "1070",
        "name" => "SIDI DRISS",
    ],
    [
        "id"   => "1071",
        "name" => "TLETA MZEM",
    ],
    [
        "id"   => "1072",
        "name" => "NZALATE LAADIM",
    ],
    [
        "id"   => "1073",
        "name" => "TNINE MHARA",
    ],
    [
        "id"   => "1074",
        "name" => "LAMHARRA",
    ],
    [
        "id"   => "1075",
        "name" => "SKHOUR REHAMNA",
    ],
    [
        "id"   => "1076",
        "name" => "HADJAAFRA",
    ],
    [
        "id"   => "1077",
        "name" => "TAMALLALT",
    ],
    [
        "id"   => "1078",
        "name" => "EJJOUALA",
    ],
    [
        "id"   => "1079",
        "name" => "JBIEL",
    ],
    [
        "id"   => "1080",
        "name" => "ZEMRANE CHERQIA",
    ],
    [
        "id"   => "1081",
        "name" => "ARBAA IDAOUGOURD",
    ],
    [
        "id"   => "1082",
        "name" => "IDA OUAZZA",
    ],
    [
        "id"   => "1083",
        "name" => "SEBT MEKNAFA",
    ],
    [
        "id"   => "1084",
        "name" => "TAFEDNA",
    ],
    [
        "id"   => "1085",
        "name" => "TIDZI",
    ],
    [
        "id"   => "1086",
        "name" => "TNINE IMI NTLIT",
    ],
    [
        "id"   => "1087",
        "name" => "SIDI AHMED ESSAYEH",
    ],
    [
        "id"   => "1088",
        "name" => "ASSAIS",
    ],
    [
        "id"   => "1089",
        "name" => "LAMZILATE",
    ],
    [
        "id"   => "1090",
        "name" => "KHEMIS TAKATE",
    ],
    [
        "id"   => "1091",
        "name" => "TAMANAR",
    ],
    [
        "id"   => "1092",
        "name" => "ARBAA IDA OU TROUMA",
    ],
    [
        "id"   => "1093",
        "name" => "IDA OU GUELLOUL",
    ],
    [
        "id"   => "1094",
        "name" => "SEBTIMGHADE",
    ],
    [
        "id"   => "1095",
        "name" => "TIMZGUIDA OUFTAS",
    ],
    [
        "id"   => "1096",
        "name" => "AIN ZELTEN",
    ],
    [
        "id"   => "1097",
        "name" => "TNINE IDA OU ZEMZEM",
    ],
    [
        "id"   => "1098",
        "name" => "MOUARID",
    ],
    [
        "id"   => "1099",
        "name" => "GHESSATE",
    ],
    [
        "id"   => "1100",
        "name" => "TABOURAHTE",
    ],
    [
        "id"   => "1101",
        "name" => "TIOUINE",
    ],
    [
        "id"   => "1102",
        "name" => "GUERNANE",
    ],
    [
        "id"   => "1103",
        "name" => "IMINI",
    ],
    [
        "id"   => "1104",
        "name" => "TAMDAKHTE",
    ],
    [
        "id"   => "1105",
        "name" => "AIT YOUL",
    ],
    [
        "id"   => "1106",
        "name" => "AIT SEDRATE JBEL EL OULIA",
    ],
    [
        "id"   => "1107",
        "name" => "AITRIDI",
    ],
    [
        "id"   => "1108",
        "name" => "AIT SEDRATE SAHL CHARKIA",
    ],
    [
        "id"   => "1109",
        "name" => "TABERKHACHTE",
    ],
    [
        "id"   => "1110",
        "name" => "TALOUET",
    ],
    [
        "id"   => "1111",
        "name" => "DOUAR SOUR",
    ],
    [
        "id"   => "1112",
        "name" => "ZAOUIT EL BIR",
    ],
    [
        "id"   => "1113",
        "name" => "OUSSIKIS AIT AZZA",
    ],
    [
        "id"   => "1114",
        "name" => "SKOURA AHL AL OUST",
    ],
    [
        "id"   => "1115",
        "name" => "IMASSINE",
    ],
    [
        "id"   => "1116",
        "name" => "TARHZOUTE NAIT ATTA",
    ],
    [
        "id"   => "1117",
        "name" => "AIT ELFARSI",
    ],
    [
        "id"   => "1118",
        "name" => "ANZAL",
    ],
    [
        "id"   => "1119",
        "name" => "ASDIF",
    ],
    [
        "id"   => "1120",
        "name" => "BOUAZZER",
    ],
    [
        "id"   => "1121",
        "name" => "KHOUZAMA",
    ],
    [
        "id"   => "1122",
        "name" => "IMIDER",
    ],
    [
        "id"   => "1123",
        "name" => "OUAKLIM",
    ],
    [
        "id"   => "1124",
        "name" => "TOUDGHA EL OULIA",
    ],
    [
        "id"   => "1125",
        "name" => "TOUDGHA ELSOUFLA",
    ],
    [
        "id"   => "1126",
        "name" => "IMI NOULAOUEN",
    ],
    [
        "id"   => "1127",
        "name" => "AZIB DERAI",
    ],
    [
        "id"   => "1128",
        "name" => "SAFI MIFTAH KHEIR",
    ],
    [
        "id"   => "1129",
        "name" => "ARBAA KHATTAZAKARNE",
    ],
    [
        "id"   => "1130",
        "name" => "SIDI TIJI",
    ],
    [
        "id"   => "1131",
        "name" => "LAAKARTA",
    ],
    [
        "id"   => "1132",
        "name" => "SOUK EYR",
    ],
    [
        "id"   => "1133",
        "name" => "OULED SELMANE",
    ],
    [
        "id"   => "1134",
        "name" => "TLETA IRHOUD",
    ],
    [
        "id"   => "1135",
        "name" => "ATIAMIM",
    ],
    [
        "id"   => "1136",
        "name" => "LAKHOUALQA",
    ],
    [
        "id"   => "1137",
        "name" => "RAS EL AINAHMAR",
    ],
    [
        "id"   => "1138",
        "name" => "SIDI CHIKER",
    ],
    [
        "id"   => "1139",
        "name" => "JNANE BOUIH",
    ],
    [
        "id"   => "1140",
        "name" => "LABKHATI",
    ],
    [
        "id"   => "1141",
        "name" => "TLETA SIDI AISSA",
    ],
    [
        "id"   => "1142",
        "name" => "LAMSABIH",
    ],
    [
        "id"   => "1143",
        "name" => "SEBT GZOULA",
    ],
    [
        "id"   => "1144",
        "name" => "ATOUABET",
    ],
    [
        "id"   => "1145",
        "name" => "KHEMIS NGA",
    ],
    [
        "id"   => "1146",
        "name" => "NEGGA",
    ],
    [
        "id"   => "1147",
        "name" => "LAMRASLA",
    ],
    [
        "id"   => "1148",
        "name" => "SIDI AHMED",
    ],
    [
        "id"   => "1149",
        "name" => "ESBIAAT",
    ],
    [
        "id"   => "1150",
        "name" => "AIT SAOUN",
    ],
    [
        "id"   => "1151",
        "name" => "HARBIL",
    ],
    [
        "id"   => "1152",
        "name" => "TANSSIFTE",
    ],
    [
        "id"   => "1153",
        "name" => "AFRA",
    ],
    [
        "id"   => "1154",
        "name" => "OULAD DRISS EL GHOUZLANE",
    ],
    [
        "id"   => "1155",
        "name" => "EL BLIDA",
    ],
    [
        "id"   => "1156",
        "name" => "NESRATE",
    ],
    [
        "id"   => "1157",
        "name" => "ZAOUIT SIDI SALAH",
    ],
    [
        "id"   => "1158",
        "name" => "FEZOUATA",
    ],
    [
        "id"   => "1159",
        "name" => "TAZZARINE",
    ],
    [
        "id"   => "1160",
        "name" => "TAFTECHNA",
    ],
    [
        "id"   => "1161",
        "name" => "BNI ZOLI",
    ],
    [
        "id"   => "1162",
        "name" => "TERNATA",
    ],
    [
        "id"   => "1163",
        "name" => "BOUZEROUAL",
    ],
    [
        "id"   => "1164",
        "name" => "BLEIDA",
    ],
    [
        "id"   => "1165",
        "name" => "AIN EL ORMA",
    ],
    [
        "id"   => "1166",
        "name" => "AIT AISSAADDI",
    ],
    [
        "id"   => "1167",
        "name" => "OUED ROMMANE",
    ],
    [
        "id"   => "1168",
        "name" => "AIT RAHHOU MJATT",
    ],
    [
        "id"   => "1169",
        "name" => "ZOUALET",
    ],
    [
        "id"   => "1170",
        "name" => "OUISLANE",
    ],
    [
        "id"   => "1171",
        "name" => "BRIDIA",
    ],
    [
        "id"   => "1172",
        "name" => "AIN JEMAA",
    ],
    [
        "id"   => "1173",
        "name" => "TOULAL",
    ],
    [
        "id"   => "1174",
        "name" => "SIDI SLIMANEMJATT",
    ],
    [
        "id"   => "1175",
        "name" => "NZALATE BNI AMMAR",
    ],
    [
        "id"   => "1176",
        "name" => "BENI AMMAR",
    ],
    [
        "id"   => "1178",
        "name" => "KERMAT BEN SALEM",
    ],
    [
        "id"   => "1179",
        "name" => "MOUSSAOUA",
    ],
    [
        "id"   => "1180",
        "name" => "MRHASSIYNE",
    ],
    [
        "id"   => "1181",
        "name" => "SIDI ALIBENHAMDOUCHE",
    ],
    [
        "id"   => "1182",
        "name" => "VOLUBILIS",
    ],
    [
        "id"   => "1183",
        "name" => "HAFRAT BEN TAYBI",
    ],
    [
        "id"   => "1184",
        "name" => "AIT YAAZEM",
    ],
    [
        "id"   => "1185",
        "name" => "RAS JERRI",
    ],
    [
        "id"   => "1186",
        "name" => "SEBTJEHJOUH",
    ],
    [
        "id"   => "1187",
        "name" => "LAQSIR",
    ],
    [
        "id"   => "1188",
        "name" => "OUED AL JADIDAH",
    ],
    [
        "id"   => "1189",
        "name" => "ASRIR OUED FERKLA",
    ],
    [
        "id"   => "1190",
        "name" => "BOUTALMINE",
    ],
    [
        "id"   => "1191",
        "name" => "AITOTHMAN",
    ],
    [
        "id"   => "1192",
        "name" => "CHORFA MDARHRA",
    ],
    [
        "id"   => "1193",
        "name" => "KHENG",
    ],
    [
        "id"   => "1194",
        "name" => "MESKI",
    ],
    [
        "id"   => "1195",
        "name" => "ZRIGATE",
    ],
    [
        "id"   => "1196",
        "name" => "DOUIRA",
    ],
    [
        "id"   => "1197",
        "name" => "OULAD CHAKER",
    ],
    [
        "id"   => "1198",
        "name" => "ASSOUL",
    ],
    [
        "id"   => "1199",
        "name" => "AIT HANI",
    ],
    [
        "id"   => "1200",
        "name" => "KSAR SAHLI",
    ],
    [
        "id"   => "1201",
        "name" => "TAZOUGARTE",
    ],
    [
        "id"   => "1202",
        "name" => "MFISS",
    ],
    [
        "id"   => "1203",
        "name" => "SIFA ARAB SEBBAH ZIZ",
    ],
    [
        "id"   => "1204",
        "name" => "TAOUZ",
    ],
    [
        "id"   => "1205",
        "name" => "HANNABOU",
    ],
    [
        "id"   => "1206",
        "name" => "TAMHRACHRHERISS",
    ],
    [
        "id"   => "1207",
        "name" => "GOURRAMA",
    ],
    [
        "id"   => "1208",
        "name" => "FAZNA",
    ],
    [
        "id"   => "1209",
        "name" => "GUERSTIALLALINE",
    ],
    [
        "id"   => "1210",
        "name" => "IMILCHIL",
    ],
    [
        "id"   => "1211",
        "name" => "AMOUGUER",
    ],
    [
        "id"   => "1212",
        "name" => "MZIZIL TILLECHTE",
    ],
    [
        "id"   => "1213",
        "name" => "NZALA AIT IZDEG",
    ],
    [
        "id"   => "1214",
        "name" => "ZAOUIASIDI HAMZA",
    ],
    [
        "id"   => "1215",
        "name" => "OUTERBAT",
    ],
    [
        "id"   => "1216",
        "name" => "BOU AZMOU",
    ],
    [
        "id"   => "1217",
        "name" => "SEFFALATE",
    ],
    [
        "id"   => "1218",
        "name" => "BNI MHAMMED",
    ],
    [
        "id"   => "1219",
        "name" => "HSSYIA",
    ],
    [
        "id"   => "1220",
        "name" => "MSSICI",
    ],
    [
        "id"   => "1221",
        "name" => "SIDI ALI TAFRAOUT",
    ],
    [
        "id"   => "1222",
        "name" => "JBIYEL",
    ],
    [
        "id"   => "1223",
        "name" => "ACHBAROU",
    ],
    [
        "id"   => "1224",
        "name" => "TADIRHOUST",
    ],
    [
        "id"   => "1225",
        "name" => "TIMEZGUITE",
    ],
    [
        "id"   => "1226",
        "name" => "ARHBALOU NKERDOUSS",
    ],
    [
        "id"   => "1227",
        "name" => "AIT HAMAD RIBAA",
    ],
    [
        "id"   => "1228",
        "name" => "ZAOUIAAIT SIDI ABDESSLAM",
    ],
    [
        "id"   => "1229",
        "name" => "SIDI ADDI",
    ],
    [
        "id"   => "1230",
        "name" => "AIT YAHIA OU ALLA",
    ],
    [
        "id"   => "1231",
        "name" => "BEN SMIM",
    ],
    [
        "id"   => "1232",
        "name" => "OUGMAS",
    ],
    [
        "id"   => "1233",
        "name" => "EL HRI",
    ],
    [
        "id"   => "1234",
        "name" => "SIDI BOUABBED",
    ],
    [
        "id"   => "1235",
        "name" => "AIN AICHA AIT SAADELLI",
    ],
    [
        "id"   => "1236",
        "name" => "AITHNINI",
    ],
    [
        "id"   => "1237",
        "name" => "ITZER",
    ],
    [
        "id"   => "1238",
        "name" => "TAMAYOUSTE",
    ],
    [
        "id"   => "1239",
        "name" => "KERROUCHEN",
    ],
    [
        "id"   => "1240",
        "name" => "BOUAYACHE",
    ],
    [
        "id"   => "1241",
        "name" => "AIT OUMGHAR",
    ],
    [
        "id"   => "1242",
        "name" => "MIBLADEN",
    ],
    [
        "id"   => "1243",
        "name" => "TAAKIT",
    ],
    [
        "id"   => "1244",
        "name" => "TAGHZOUTECHORAFA",
    ],
    [
        "id"   => "1245",
        "name" => "SOUK HAD BOUHSOUSSEN",
    ],
    [
        "id"   => "1246",
        "name" => "MOULAY BOUAZZA",
    ],
    [
        "id"   => "1247",
        "name" => "SOUK SEBT AIT RAHOU",
    ],
    [
        "id"   => "1248",
        "name" => "SOUK TNINE AIT BOUKHAYYOU",
    ],
    [
        "id"   => "1249",
        "name" => "SIDI MHAMED BEN MBAREK",
    ],
    [
        "id"   => "1250",
        "name" => "EL HAMMAM",
    ],
    [
        "id"   => "1251",
        "name" => "OUMRABIA",
    ],
    [
        "id"   => "1252",
        "name" => "TOUNFITE",
    ],
    [
        "id"   => "1253",
        "name" => "AGOUDIM",
    ],
    [
        "id"   => "1254",
        "name" => "ANEMZI",
    ],
    [
        "id"   => "1255",
        "name" => "AIN ES SFA",
    ],
    [
        "id"   => "1256",
        "name" => "EL BESSARA",
    ],
    [
        "id"   => "1257",
        "name" => "AEREPORT OUJDA ANGAD",
    ],
    [
        "id"   => "1258",
        "name" => "ZOUDJ BGHAL",
    ],
    [
        "id"   => "1259",
        "name" => "MESTEFERKI",
    ],
    [
        "id"   => "1260",
        "name" => "OUJDA BNI OUKIL",
    ],
    [
        "id"   => "1261",
        "name" => "TZAIEST",
    ],
    [
        "id"   => "1262",
        "name" => "AIN CHOUATER",
    ],
    [
        "id"   => "1263",
        "name" => "BENITAJJITE",
    ],
    [
        "id"   => "1264",
        "name" => "AIT AHMAD OU HADDOU",
    ],
    [
        "id"   => "1265",
        "name" => "BOUANANE",
    ],
    [
        "id"   => "1266",
        "name" => "AIN ECHCHAIR",
    ],
    [
        "id"   => "1267",
        "name" => "MENGOUB",
    ],
    [
        "id"   => "1268",
        "name" => "TALSINNT",
    ],
    [
        "id"   => "1269",
        "name" => "ANOUAL BOUCHAOUEN",
    ],
    [
        "id"   => "1270",
        "name" => "BOUMERIEM",
    ],
    [
        "id"   => "1271",
        "name" => "TENDRARA",
    ],
    [
        "id"   => "1272",
        "name" => "MECHRA KLILA",
    ],
    [
        "id"   => "1273",
        "name" => "TALILIT",
    ],
    [
        "id"   => "1274",
        "name" => "BOUDINAR",
    ],
    [
        "id"   => "1275",
        "name" => "OULAD AMGHAR",
    ],
    [
        "id"   => "1276",
        "name" => "AJERMOUNAS",
    ],
    [
        "id"   => "1277",
        "name" => "KACETA",
    ],
    [
        "id"   => "1278",
        "name" => "BENI BOU IFROUR",
    ],
    [
        "id"   => "1279",
        "name" => "TLETAJBEL",
    ],
    [
        "id"   => "1280",
        "name" => "ARHBAL",
    ],
    [
        "id"   => "1281",
        "name" => "AIN ERREGGADA",
    ],
    [
        "id"   => "1282",
        "name" => "MADAGH",
    ],
    [
        "id"   => "1283",
        "name" => "ZAYEST",
    ],
    [
        "id"   => "1284",
        "name" => "ZEGZEL",
    ],
    [
        "id"   => "1285",
        "name" => "LAATMNA",
    ],
    [
        "id"   => "1286",
        "name" => "SIDI BOUHOURIA",
    ],
    [
        "id"   => "1287",
        "name" => "RISLANE",
    ],
    [
        "id"   => "1288",
        "name" => "TAFORHALT",
    ],
    [
        "id"   => "1289",
        "name" => "OUED EL HEIMER",
    ],
    [
        "id"   => "1290",
        "name" => "MERIJA",
    ],
    [
        "id"   => "1291",
        "name" => "OULED GHZIYEL",
    ],
    [
        "id"   => "1292",
        "name" => "EL AOUINET",
    ],
    [
        "id"   => "1293",
        "name" => "GUEFAIT",
    ],
    [
        "id"   => "1294",
        "name" => "TOUISSIT",
    ],
    [
        "id"   => "1295",
        "name" => "TIOULI",
    ],
    [
        "id"   => "1296",
        "name" => "ZELLIDJA BOUBKER",
    ],
    [
        "id"   => "1297",
        "name" => "MECHRA HOUMMADI",
    ],
    [
        "id"   => "1298",
        "name" => "MESTIGMER",
    ],
    [
        "id"   => "1299",
        "name" => "TANCHERFI",
    ],
    [
        "id"   => "1300",
        "name" => "SIDI LAHCEN",
    ],
    [
        "id"   => "1301",
        "name" => "MELG ELOUIDANE",
    ],
    [
        "id"   => "1302",
        "name" => "FOUM EL OUED",
    ],
    [
        "id"   => "1303",
        "name" => "DCHEIRA TAFOUDART",
    ],
    [
        "id"   => "1304",
        "name" => "DAOURA",
    ],
    [
        "id"   => "1305",
        "name" => "AKHFENIR",
    ],
    [
        "id"   => "1306",
        "name" => "AOUSSERD",
    ],
    [
        "id"   => "1307",
        "name" => "TAMRAGHT",
    ],
    [
        "id"   => "1308",
        "name" => "IMOUZZER IDA OU TANANE",
    ],
    [
        "id"   => "1309",
        "name" => "IDMINE",
    ],
    [
        "id"   => "1310",
        "name" => "TIQQI",
    ],
    [
        "id"   => "1311",
        "name" => "AZIAR",
    ],
    [
        "id"   => "1312",
        "name" => "TADRART",
    ],
    [
        "id"   => "1313",
        "name" => "KSABI AIT LAHCEN",
    ],
    [
        "id"   => "1314",
        "name" => "AOUINATE AITOUSSA",
    ],
    [
        "id"   => "1315",
        "name" => "AOUINATE TOURKOZ",
    ],
    [
        "id"   => "1316",
        "name" => "ABAINOU",
    ],
    [
        "id"   => "1317",
        "name" => "AFEREKET AIT YASSINE",
    ],
    [
        "id"   => "1318",
        "name" => "ASRIR AZOUAFIT",
    ],
    [
        "id"   => "1319",
        "name" => "TARGAWASSAY",
    ],
    [
        "id"   => "1320",
        "name" => "RASS OUMLIL",
    ],
    [
        "id"   => "1321",
        "name" => "LABOUIRAT",
    ],
    [
        "id"   => "1322",
        "name" => "ALMAHBASS",
    ],
    [
        "id"   => "1323",
        "name" => "LABIAR",
    ],
    [
        "id"   => "1324",
        "name" => "TILOUINE ASSAKA",
    ],
    [
        "id"   => "1325",
        "name" => "TIGHMERT AZOUAFIT",
    ],
    [
        "id"   => "1326",
        "name" => "AIT BOUFOULNE",
    ],
    [
        "id"   => "1327",
        "name" => "IFRANEATLAS SEGHIR",
    ],
    [
        "id"   => "1328",
        "name" => "AMSRA",
    ],
    [
        "id"   => "1329",
        "name" => "TANKERT",
    ],
    [
        "id"   => "1330",
        "name" => "TNINEADAI",
    ],
    [
        "id"   => "1331",
        "name" => "ABTEH",
    ],
    [
        "id"   => "1332",
        "name" => "M SIED",
    ],
    [
        "id"   => "1333",
        "name" => "AHMAR",
    ],
    [
        "id"   => "1334",
        "name" => "HAD IMOULASS",
    ],
    [
        "id"   => "1335",
        "name" => "MECHRAA EL AIN",
    ],
    [
        "id"   => "1336",
        "name" => "SEBTTAFRAOUTE",
    ],
    [
        "id"   => "1337",
        "name" => "SIDI BORJA",
    ],
    [
        "id"   => "1338",
        "name" => "HAD MENIZLA",
    ],
    [
        "id"   => "1339",
        "name" => "IDA OU MOUMEN",
    ],
    [
        "id"   => "1340",
        "name" => "TAZZEMMOURTE",
    ],
    [
        "id"   => "1341",
        "name" => "TLATA AITTALEB",
    ],
    [
        "id"   => "1342",
        "name" => "ZAOUIAT SIDI TAHAR",
    ],
    [
        "id"   => "1343",
        "name" => "EL FAID",
    ],
    [
        "id"   => "1344",
        "name" => "IOUZIOUA OU NEINE",
    ],
    [
        "id"   => "1345",
        "name" => "TISRASSE",
    ],
    [
        "id"   => "1346",
        "name" => "ARGANA",
    ],
    [
        "id"   => "1347",
        "name" => "KHEMIS BIGOUDINE",
    ],
    [
        "id"   => "1348",
        "name" => "IMILMAISS",
    ],
    [
        "id"   => "1349",
        "name" => "ASKAOUN",
    ],
    [
        "id"   => "1350",
        "name" => "AHL TIFNOUTE",
    ],
    [
        "id"   => "1351",
        "name" => "IGUIDI",
    ],
    [
        "id"   => "1352",
        "name" => "TAOUYALTE",
    ],
    [
        "id"   => "1353",
        "name" => "TOUBKAL",
    ],
    [
        "id"   => "1354",
        "name" => "AIT IGAS",
    ],
    [
        "id"   => "1355",
        "name" => "NOUARA",
    ],
    [
        "id"   => "1356",
        "name" => "TIOUTE",
    ],
    [
        "id"   => "1357",
        "name" => "AZRAR",
    ],
    [
        "id"   => "1358",
        "name" => "IRHERM",
    ],
    [
        "id"   => "1359",
        "name" => "AIT ABDALLAH",
    ],
    [
        "id"   => "1360",
        "name" => "SEBT TATAOUTE",
    ],
    [
        "id"   => "1361",
        "name" => "HAD IMAOUEN",
    ],
    [
        "id"   => "1362",
        "name" => "OULKADI",
    ],
    [
        "id"   => "1363",
        "name" => "TANTAMT",
    ],
    [
        "id"   => "1364",
        "name" => "TLETA NIHIT",
    ],
    [
        "id"   => "1365",
        "name" => "TNINE ADDAR",
    ],
    [
        "id"   => "1366",
        "name" => "TNINE TOUFLAAZT",
    ],
    [
        "id"   => "1367",
        "name" => "OUZOUNE",
    ],
    [
        "id"   => "1368",
        "name" => "TINDINE",
    ],
    [
        "id"   => "1369",
        "name" => "DAR BAHBAZ",
    ],
    [
        "id"   => "1370",
        "name" => "KHEMIS ARAZANE",
    ],
    [
        "id"   => "1371",
        "name" => "KHEMIS TALAGJOUNT",
    ],
    [
        "id"   => "1372",
        "name" => "TNINEIDA OU GAILAL",
    ],
    [
        "id"   => "1373",
        "name" => "TNINE TIGOUGA",
    ],
    [
        "id"   => "1374",
        "name" => "TOUGHMART",
    ],
    [
        "id"   => "1375",
        "name" => "SIDI OUAAZIZ",
    ],
    [
        "id"   => "1376",
        "name" => "EL KOUDIA",
    ],
    [
        "id"   => "1377",
        "name" => "ISSEN",
    ],
    [
        "id"   => "1378",
        "name" => "KSIBA AHL RMEL",
    ],
    [
        "id"   => "1379",
        "name" => "SEBT KFIFATE",
    ],
    [
        "id"   => "1380",
        "name" => "SIDIBOUMOUSSA",
    ],
    [
        "id"   => "1381",
        "name" => "SIDI MOUSSA",
    ],
    [
        "id"   => "1382",
        "name" => "ARBAA ASSADS",
    ],
    [
        "id"   => "1383",
        "name" => "LAKHNAFIF",
    ],
    [
        "id"   => "1384",
        "name" => "LAMHADI",
    ],
    [
        "id"   => "1385",
        "name" => "TIDSINISSENDALENE",
    ],
    [
        "id"   => "1386",
        "name" => "TAFINGOULT",
    ],
    [
        "id"   => "1387",
        "name" => "OUNEINE",
    ],
    [
        "id"   => "1388",
        "name" => "TALIOUINE",
    ],
    [
        "id"   => "1389",
        "name" => "ARBAA ASSAIS",
    ],
    [
        "id"   => "1390",
        "name" => "ASSAKI",
    ],
    [
        "id"   => "1391",
        "name" => "IRHIL NOURHOU",
    ],
    [
        "id"   => "1392",
        "name" => "TASSOUSFI",
    ],
    [
        "id"   => "1393",
        "name" => "TIZGZAOUINE",
    ],
    [
        "id"   => "1394",
        "name" => "AKKA IGHANE",
    ],
    [
        "id"   => "1395",
        "name" => "KHEMISADDIS",
    ],
    [
        "id"   => "1396",
        "name" => "OUM EL GUERDANE",
    ],
    [
        "id"   => "1397",
        "name" => "TLATA TAGMOUTE",
    ],
    [
        "id"   => "1398",
        "name" => "IBN YACOUB",
    ],
    [
        "id"   => "1399",
        "name" => "AKKA",
    ],
    [
        "id"   => "1400",
        "name" => "KHEMIS ISSAFEN",
    ],
    [
        "id"   => "1401",
        "name" => "TISSINT",
    ],
    [
        "id"   => "1402",
        "name" => "AIT OUABELLI",
    ],
    [
        "id"   => "1403",
        "name" => "KASBAT SIDI ABDELLAHBEN MBAREK",
    ],
    [
        "id"   => "1404",
        "name" => "TIZOUININE",
    ],
    [
        "id"   => "1405",
        "name" => "TIZAGHTE",
    ],
    [
        "id"   => "1406",
        "name" => "AGUINANE",
    ],
    [
        "id"   => "1407",
        "name" => "ALLOUGOUM",
    ],
    [
        "id"   => "1408",
        "name" => "LAKHRIOUIA",
    ],
    [
        "id"   => "1409",
        "name" => "TLITE",
    ],
    [
        "id"   => "1410",
        "name" => "ARBAA SAHEL",
    ],
    [
        "id"   => "1411",
        "name" => "SEBT OUIJJANE",
    ],
    [
        "id"   => "1412",
        "name" => "TNINE AGLOU",
    ],
    [
        "id"   => "1413",
        "name" => "EL MAADER EL KEBIR",
    ],
    [
        "id"   => "1414",
        "name" => "HADRAGGADA",
    ],
    [
        "id"   => "1415",
        "name" => "IGHIR MELLOULEN",
    ],
    [
        "id"   => "1416",
        "name" => "LAOUINA",
    ],
    [
        "id"   => "1417",
        "name" => "TOUBOUZAR",
    ],
    [
        "id"   => "1418",
        "name" => "EL KREIMA",
    ],
    [
        "id"   => "1419",
        "name" => "ASSAKA",
    ],
    [
        "id"   => "1420",
        "name" => "OULED NOUMMEUR",
    ],
    [
        "id"   => "1421",
        "name" => "BOUZERZ",
    ],
    [
        "id"   => "1422",
        "name" => "AIT ERKHA",
    ],
    [
        "id"   => "1423",
        "name" => "SIDI ABDELLAH OU BELAID",
    ],
    [
        "id"   => "1424",
        "name" => "TIRHMI",
    ],
    [
        "id"   => "1425",
        "name" => "ADAYALMEZOUARTE",
    ],
    [
        "id"   => "1426",
        "name" => "ARBA AIT AHMED",
    ],
    [
        "id"   => "1427",
        "name" => "TAFRAOUT EL MOULOUD",
    ],
    [
        "id"   => "1428",
        "name" => "TIFERMITE",
    ],
    [
        "id"   => "1429",
        "name" => "TLATA IDA GOUGMAR",
    ],
    [
        "id"   => "1430",
        "name" => "ZAOUIA SIDIAHMED OU MOUSSA",
    ],
    [
        "id"   => "1431",
        "name" => "AIT ISSAFEN",
    ],
    [
        "id"   => "1432",
        "name" => "ARBAA RAS MOUKA",
    ],
    [
        "id"   => "1433",
        "name" => "AIT BRAHIM OU YOUSSEF",
    ],
    [
        "id"   => "1434",
        "name" => "ANFEG",
    ],
    [
        "id"   => "1435",
        "name" => "SEBTENNABOUR",
    ],
    [
        "id"   => "1436",
        "name" => "IBDAR",
    ],
    [
        "id"   => "1437",
        "name" => "BOUTROUCH",
    ],
    [
        "id"   => "1438",
        "name" => "SIDIBOUABDELLI",
    ],
    [
        "id"   => "1439",
        "name" => "TAFRAOUTE NAIT DAOUD",
    ],
    [
        "id"   => "1440",
        "name" => "HAD TAHALA",
    ],
    [
        "id"   => "1441",
        "name" => "ANAMEUR",
    ],
    [
        "id"   => "1442",
        "name" => "HAD AFFELA IRHIR",
    ],
    [
        "id"   => "1443",
        "name" => "OUMESNATE",
    ],
    [
        "id"   => "1444",
        "name" => "TANFIT AIT OUMZIL",
    ],
    [
        "id"   => "1445",
        "name" => "TLETA TIDLI",
    ],
    [
        "id"   => "1446",
        "name" => "BNI RZINE",
    ],
    [
        "id"   => "1447",
        "name" => "ZOUMI",
    ],
    [
        "id"   => "1448",
        "name" => "BNI AROUSS",
    ],
    [
        "id"   => "1449",
        "name" => "AL AOUAMRA",
    ],
    [
        "id"   => "1450",
        "name" => "MOULAY ABDESSLAM",
    ],
    [
        "id"   => "1451",
        "name" => "RESTINGA",
    ],
    [
        "id"   => "1452",
        "name" => "LAMAACHATE",
    ],
    [
        "id"   => "1453",
        "name" => "AAZANEN",
    ],
    [
        "id"   => "1454",
        "name" => "TIZIRHINE",
    ],
    [
        "id"   => "1455",
        "name" => "AMELAGO",
    ],
    [
        "id"   => "1456",
        "name" => "AGDAL IMILCHIL",
    ],
    [
        "id"   => "1457",
        "name" => "AGOUDI NLKHAIR",
    ],
    [
        "id"   => "1458",
        "name" => "AIT ABBAS",
    ],
    [
        "id"   => "1459",
        "name" => "AIT BOU OULLI",
    ],
    [
        "id"   => "1460",
        "name" => "AIT MAZIGH",
    ],
    [
        "id"   => "1461",
        "name" => "AIT OUM EL BEKHT",
    ],
    [
        "id"   => "1462",
        "name" => "AIT OUMDIS",
    ],
    [
        "id"   => "1463",
        "name" => "AIT YOUSSEF OU ALI",
    ],
    [
        "id"   => "1464",
        "name" => "AL KHALFIA",
    ],
    [
        "id"   => "1465",
        "name" => "AROUIT",
    ],
    [
        "id"   => "1466",
        "name" => "BEN AHMED",
    ],
    [
        "id"   => "1467",
        "name" => "BENGUERIR",
    ],
    [
        "id"   => "1468",
        "name" => "FOUM OUDI",
    ],
    [
        "id"   => "1469",
        "name" => "GZENAYA",
    ],
    [
        "id"   => "1470",
        "name" => "ISSEKSI",
    ],
    [
        "id"   => "1471",
        "name" => "KHEMIS MAJDEN",
    ],
    [
        "id"   => "1472",
        "name" => "KHOURIBGA",
    ],
    [
        "id"   => "1473",
        "name" => "MOULAY AISSA BEN DRISS",
    ],
    [
        "id"   => "1474",
        "name" => "MOULAY IDRISS",
    ],
    [
        "id"   => "1475",
        "name" => "NAOUR",
    ],
    [
        "id"   => "1476",
        "name" => "OULAD GNAOUA",
    ],
    [
        "id"   => "1477",
        "name" => "SIDI ALI",
    ],
    [
        "id"   => "1478",
        "name" => "SIDI BOULKHALF",
    ],
    [
        "id"   => "1479",
        "name" => "SIDI HAMMADI",
    ],
    [
        "id"   => "1480",
        "name" => "TABAROUCHT",
    ],
    [
        "id"   => "1481",
        "name" => "TAMDA NOUMERCID",
    ],
    [
        "id"   => "1482",
        "name" => "TIFFERT NAIT HAMZA",
    ],
    [
        "id"   => "1483",
        "name" => "TISQI",
    ],
    [
        "id"   => "1484",
        "name" => "AIN BENI MATHAR",
    ],
    [
        "id"   => "1485",
        "name" => "Segangan",
    ],
    [
        "id"   => "1486",
        "name" => "Sebt Zeniate",
    ],
    [
        "id"   => "1487",
        "name" => "Sebt Bni Garfet",
    ],
    [
        "id"   => "1488",
        "name" => "Sebt Assaka",
    ],
    [
        "id"   => "1489",
        "name" => "Sania El Jadida",
    ],
    [
        "id"   => "1490",
        "name" => "Rissana Janoubia",
    ],
    [
        "id"   => "1491",
        "name" => "Ras Tabouda",
    ],
    [
        "id"   => "1492",
        "name" => "Ras El Ma",
    ],
    [
        "id"   => "1493",
        "name" => "Mokrisset",
    ],
    [
        "id"   => "1494",
        "name" => "Mokrisset",
    ],
    [
        "id"   => "1495",
        "name" => "Mecherah",
    ],
    [
        "id"   => "1496",
        "name" => "Massa Tassila",
    ],
    [
        "id"   => "1497",
        "name" => "Mansoura",
    ],
    [
        "id"   => "1498",
        "name" => "Le Sais",
    ],
    [
        "id"   => "1499",
        "name" => "Khmis Ida Ou Gnidif",
    ],
    [
        "id"   => "1500",
        "name" => "Khemis Ait Oufka",
    ],
    [
        "id"   => "1501",
        "name" => "Aquouass Briech",
    ],
    [
        "id"   => "1502",
        "name" => "Kaa Asrass",
    ],
    [
        "id"   => "1503",
        "name" => "Ksar El Majaz",
    ],
    [
        "id"   => "1504",
        "name" => "Jemaa Takouchte",
    ],
    [
        "id"   => "1505",
        "name" => "Tarouma",
    ],
    [
        "id"   => "1506",
        "name" => "Tah",
    ],
    [
        "id"   => "1507",
        "name" => "Ida Ougnidif",
    ],
    [
        "id"   => "1508",
        "name" => "Iouane",
    ],
    [
        "id"   => "1509",
        "name" => "Imi El Had Tasguedelft",
    ],
    [
        "id"   => "1510",
        "name" => "Imhilen",
    ],
    [
        "id"   => "1511",
        "name" => "Tizguite",
    ],
    [
        "id"   => "1512",
        "name" => "Tigrigra",
    ],
    [
        "id"   => "1513",
        "name" => "Hajr Enhal",
    ],
    [
        "id"   => "1514",
        "name" => "Had Targa Ntouchka",
    ],
    [
        "id"   => "1515",
        "name" => "Had Rhdir Krouch",
    ],
    [
        "id"   => "1516",
        "name" => "Tanalt",
    ],
    [
        "id"   => "1517",
        "name" => "Freija",
    ],
    [
        "id"   => "1518",
        "name" => "Fifi",
    ],
    [
        "id"   => "1519",
        "name" => "El Fendeq",
    ],
    [
        "id"   => "1520",
        "name" => "Derkoul",
    ],
    [
        "id"   => "1521",
        "name" => "Derdera",
    ],
    [
        "id"   => "1522",
        "name" => "Dar Chaoui",
    ],
    [
        "id"   => "1523",
        "name" => "Dar Ben Saddouk",
    ],
    [
        "id"   => "1524",
        "name" => "Brikcha",
    ],
    [
        "id"   => "1525",
        "name" => "Boukhrisse",
    ],
    [
        "id"   => "1526",
        "name" => "Bni Smih",
    ],
    [
        "id"   => "1527",
        "name" => "Bni Karrich Fouki",
    ],
    [
        "id"   => "1528",
        "name" => "Bni Ahmed Gharbia",
    ],
    [
        "id"   => "1529",
        "name" => "Bni Ahmed",
    ],
    [
        "id"   => "1530",
        "name" => "Bghaghza",
    ],
    [
        "id"   => "1531",
        "name" => "Souk L'Arebaa Lghareb",
    ],
    [
        "id"   => "1531",
        "name" => "Souk L'Arebaa Lghareb",
    ],
    [
        "id"   => "1532",
        "name" => "Sidi Hsaine Ou Ali",
    ],
    [
        "id"   => "1533",
        "name" => "Iqaddar",
    ],
    [
        "id"   => "1534",
        "name" => "Inchaden",
    ],
    [
        "id"   => "1535",
        "name" => "Imi Mqourn",
    ],
    [
        "id"   => "1536",
        "name" => "Bessabes",
    ],
    [
        "id"   => "1537",
        "name" => "Beni Yder",
    ],
    [
        "id"   => "1538",
        "name" => "Beni Bouzra",
    ],
    [
        "id"   => "1539",
        "name" => "Bahriyne El Aouama",
    ],
    [
        "id"   => "1540",
        "name" => "Bahriyne El Aouama",
    ],
    [
        "id"   => "1541",
        "name" => "Asmaten",
    ],
    [
        "id"   => "1542",
        "name" => "Asifane",
    ],
    [
        "id"   => "1543",
        "name" => "Arbaa Ait Abdellah",
    ],
    [
        "id"   => "1544",
        "name" => "Anmiter Ounilla",
    ],
    [
        "id"   => "1545",
        "name" => "Ait Ouadrim",
    ],
    [
        "id"   => "1546",
        "name" => "Ain Itti",
    ],
    [
        "id"   => "1547",
        "name" => "Ain Beida",
    ],
    [
        "id"   => "1548",
        "name" => "El Ksiba",
    ],
    [
        "id"   => "1549",
        "name" => "Aguerd Ntezke",
    ],
    [
        "id"   => "1550",
        "name" => "Saadla",
    ],
    [
        "id"   => "1551",
        "name" => "Dar Oum Soltane",
    ],
    [
        "id"   => "1552",
        "name" => "Sidi Maarouf",
    ],
    [
        "id"   => "1553",
        "name" => "Oulad Yahya",
    ],
    [
        "id"   => "1554",
        "name" => "Dkhissa",
    ],
    [
        "id"   => "1555",
        "name" => "Al Machouar - Stinia",
    ],
    [
        "id"   => "1556",
        "name" => "Aksri",
    ],
    [
        "id"   => "1557",
        "name" => "Segangan",
    ],
    [
        "id"   => "1558",
        "name" => "Allyene",
    ],
    [
        "id"   => "1559",
        "name" => "Ait Siberne",
    ],
    [
        "id"   => "1560",
        "name" => "Ait Naamane",
    ],
    [
        "id"   => "1561",
        "name" => "Zouada",
    ],
    [
        "id"   => "1562",
        "name" => "Zoco Jemis De Anyera",
    ],
    [
        "id"   => "1563",
        "name" => "Zaaroura",
    ],
    [
        "id"   => "1564",
        "name" => "Tnine Tarsouat",
    ],
    [
        "id"   => "1565",
        "name" => "Tnine Hilala",
    ],
    [
        "id"   => "1566",
        "name" => "Tnine Amellou",
    ],
    [
        "id"   => "1567",
        "name" => "Tleta Tassrirt",
    ],
    [
        "id"   => "1568",
        "name" => "Jemaa El Oued",
    ],
    [
        "id"   => "1569",
        "name" => "Sidi Abdellah El Bouchouari",
    ],
];

$keyToBeSearched = 'name';
$fuzzy = new FuzzySearch($shipCities, $keyToBeSearched);

$uncommonCities = [];
$commonCities = [];
foreach ($theirCities as $theirCity) {
    $maxDistance = 3;
    $similarities = $fuzzy->search($theirCity['name'], $maxDistance);

    if (count($similarities) === 0) {
        $uncommonCities[] = $theirCity;

        continue;
    }

    $possibleValuesCount = count($similarities);
    $possibleValues = implode('<>', array_map(fn($value) => $value['name'], $similarities));

    $commonCities[] = [
        'their_city_name'       => $theirCity['name'],
        'their_city_zip_code'   => $theirCity['zip_code'],
        'ship_city_name'        => $similarities[0]['name'],
        'ship_city_id'          => $similarities[0]['id'],
        'possible_values_count' => $possibleValuesCount,
        'possible_values'       => $possibleValues,
    ];
}

echo sprintf('All Cities: %s<br>', count($theirCities));
echo sprintf('Common Cities: %s<br><br>', count($commonCities));
echo "<pre>";
echo 'YCS City ID,YCS City Name,Their City Name, Their City Zip Code, Possible Values Count, Possible Values<br>';
foreach ($commonCities as $city) {
    echo sprintf(
        '%s,%s,%s,%s,%s,%s<br>',
        $city['ship_city_id'],
        $city['ship_city_name'],
        $city['their_city_name'],
        $city['their_city_zip_code'],
        $city['possible_values_count'],
        $city['possible_values']
    );
}
