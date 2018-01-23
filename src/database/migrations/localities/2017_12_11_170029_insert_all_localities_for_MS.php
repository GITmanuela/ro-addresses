<?php

use Illuminate\Database\Migrations\Migration;

class InsertAllLocalitiesForMS extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $sql = 'INSERT INTO localities (county_id, township, name, created_at, updated_at) VALUES
            (29, "","Acatari", NOW(), NOW()),
            (29, "","Adamus", NOW(), NOW()),
            (29, "","Albesti", NOW(), NOW()),
            (29, "","Alunis", NOW(), NOW()),
            (29, "","Apold", NOW(), NOW()),
            (29, "","Atintis", NOW(), NOW()),
            (29, "","Bahnea", NOW(), NOW()),
            (29, "","Band", NOW(), NOW()),
            (29, "","Batos", NOW(), NOW()),
            (29, "","Beica de Jos", NOW(), NOW()),
            (29, "","Bichis", NOW(), NOW()),
            (29, "","Bogata", NOW(), NOW()),
            (29, "","Breaza", NOW(), NOW()),
            (29, "","Brancovenesti", NOW(), NOW()),
            (29, "","Bagaciu", NOW(), NOW()),
            (29, "","Bala", NOW(), NOW()),
            (29, "","Balauseri", NOW(), NOW()),
            (29, "","Ceuasu de Campie", NOW(), NOW()),
            (29, "","Chetani", NOW(), NOW()),
            (29, "","Chibed", NOW(), NOW()),
            (29, "","Chiheru de Jos", NOW(), NOW()),
            (29, "","Coroisanmartin", NOW(), NOW()),
            (29, "","Cozma", NOW(), NOW()),
            (29, "","Cristesti", NOW(), NOW()),
            (29, "","Craciunesti", NOW(), NOW()),
            (29, "","Craiesti", NOW(), NOW()),
            (29, "","Cucerdea", NOW(), NOW()),
            (29, "","Cuci", NOW(), NOW()),
            (29, "","Danes", NOW(), NOW()),
            (29, "","Deda", NOW(), NOW()),
            (29, "","Eremitu", NOW(), NOW()),
            (29, "","Ernei", NOW(), NOW()),
            (29, "","Fantanele", NOW(), NOW()),
            (29, "","Faragau", NOW(), NOW()),
            (29, "","Gheorghe Doja", NOW(), NOW()),
            (29, "","Ghindari", NOW(), NOW()),
            (29, "","Glodeni", NOW(), NOW()),
            (29, "","Gornesti", NOW(), NOW()),
            (29, "","Grebenisu de Campie", NOW(), NOW()),
            (29, "","Gurghiu", NOW(), NOW()),
            (29, "","Galesti", NOW(), NOW()),
            (29, "","Ganesti", NOW(), NOW()),
            (29, "","Hodac", NOW(), NOW()),
            (29, "","Hodosa", NOW(), NOW()),
            (29, "","Ibanesti", NOW(), NOW()),
            (29, "","Iclanzel", NOW(), NOW()),
            (29, "","Ideciu de Jos", NOW(), NOW()),
            (29, "","Iernut", NOW(), NOW()),
            (29, "","Livezeni", NOW(), NOW()),
            (29, "","Ludus", NOW(), NOW()),
            (29, "","Lunca", NOW(), NOW()),
            (29, "","Lunca Bradului", NOW(), NOW()),
            (29, "","Mica", NOW(), NOW()),
            (29, "","Miercurea Nirajului", NOW(), NOW()),
            (29, "","Mihesu de Campie", NOW(), NOW()),
            (29, "","Magherani", NOW(), NOW()),
            (29, "","Nades", NOW(), NOW()),
            (29, "","Neaua", NOW(), NOW()),
            (29, "","Ogra", NOW(), NOW()),
            (29, "","Papiu Ilarian", NOW(), NOW()),
            (29, "","Petelea", NOW(), NOW()),
            (29, "","Pogaceaua", NOW(), NOW()),
            (29, "","Panet", NOW(), NOW()),
            (29, "","Pasareni", NOW(), NOW()),
            (29, "","Reghin", NOW(), NOW()),
            (29, "","Rusii-Munti", NOW(), NOW()),
            (29, "","Rastolita", NOW(), NOW()),
            (29, "","Sarmasu", NOW(), NOW()),
            (29, "","Saschiz", NOW(), NOW()),
            (29, "","Sighisoara", NOW(), NOW()),
            (29, "","Solovastru", NOW(), NOW()),
            (29, "","Sovata", NOW(), NOW()),
            (29, "","Stanceni", NOW(), NOW()),
            (29, "","Suplac", NOW(), NOW()),
            (29, "","Suseni", NOW(), NOW()),
            (29, "","Sancraiu de Mures", NOW(), NOW()),
            (29, "","Sangeorgiu de Mures", NOW(), NOW()),
            (29, "","Sangeorgiu de Padure", NOW(), NOW()),
            (29, "","Sanger", NOW(), NOW()),
            (29, "","Sanpaul", NOW(), NOW()),
            (29, "","Sanpetru de Campie", NOW(), NOW()),
            (29, "","Santana de Mures", NOW(), NOW()),
            (29, "","Targu Mures", NOW(), NOW()),
            (29, "","Tarnaveni", NOW(), NOW()),
            (29, "","Taureni", NOW(), NOW()),
            (29, "","Ungheni", NOW(), NOW()),
            (29, "","Valea Larga", NOW(), NOW()),
            (29, "","Vetca", NOW(), NOW()),
            (29, "","Viisoara", NOW(), NOW()),
            (29, "","Voivodeni", NOW(), NOW()),
            (29, "","Vanatori", NOW(), NOW()),
            (29, "","Vargata", NOW(), NOW()),
            (29, "","Vatava", NOW(), NOW()),
            (29, "","Zagar", NOW(), NOW()),
            (29, "","Zau de Campie", NOW(), NOW()),
            (29, "","Sincai", NOW(), NOW()),
            (29, "","Saulia", NOW(), NOW()),
            (29, "Acatari","Corbesti", NOW(), NOW()),
            (29, "Acatari","Gruisor", NOW(), NOW()),
            (29, "Acatari","Gaiesti", NOW(), NOW()),
            (29, "Acatari","Murgesti", NOW(), NOW()),
            (29, "Acatari","Roteni", NOW(), NOW()),
            (29, "Acatari","Stejeris", NOW(), NOW()),
            (29, "Acatari","Suveica", NOW(), NOW()),
            (29, "Acatari","Valenii", NOW(), NOW()),
            (29, "Adamus","Chincius", NOW(), NOW()),
            (29, "Adamus","Cornesti", NOW(), NOW()),
            (29, "Adamus","Craiesti", NOW(), NOW()),
            (29, "Adamus","Dambau", NOW(), NOW()),
            (29, "Adamus","Herepea", NOW(), NOW()),
            (29, "Albesti","Boiu", NOW(), NOW()),
            (29, "Albesti","Barlibasoaia", NOW(), NOW()),
            (29, "Albesti","Jacu", NOW(), NOW()),
            (29, "Albesti","Valea Albestiului", NOW(), NOW()),
            (29, "Albesti","Valea Daii", NOW(), NOW()),
            (29, "Albesti","Valea Sapartocului", NOW(), NOW()),
            (29, "Albesti","Sapartoc", NOW(), NOW()),
            (29, "Albesti","Topa", NOW(), NOW()),
            (29, "Alunis","Fitcau", NOW(), NOW()),
            (29, "Alunis","Lunca Muresului", NOW(), NOW()),
            (29, "Apold","Daia", NOW(), NOW()),
            (29, "Apold","Vulcan", NOW(), NOW()),
            (29, "Apold","Saes", NOW(), NOW()),
            (29, "Atintis","Botez", NOW(), NOW()),
            (29, "Atintis","Cecalaca", NOW(), NOW()),
            (29, "Atintis","Istihaza", NOW(), NOW()),
            (29, "Atintis","Maldaoci", NOW(), NOW()),
            (29, "Atintis","Saniacob", NOW(), NOW()),
            (29, "Bagaciu","Delenii", NOW(), NOW()),
            (29, "Bahnea","Bernadea", NOW(), NOW()),
            (29, "Bahnea","Cund", NOW(), NOW()),
            (29, "Bahnea","Daia", NOW(), NOW()),
            (29, "Bahnea","Gogan", NOW(), NOW()),
            (29, "Bahnea","Idiciu", NOW(), NOW()),
            (29, "Bahnea","Lepindea", NOW(), NOW()),
            (29, "Bala","Ercea", NOW(), NOW()),
            (29, "Balauseri","Agristeu", NOW(), NOW()),
            (29, "Balauseri","Chendu", NOW(), NOW()),
            (29, "Balauseri","Dumitreni", NOW(), NOW()),
            (29, "Balauseri","Filitelnic", NOW(), NOW()),
            (29, "Balauseri","Senereus", NOW(), NOW()),
            (29, "Band","Draculea Bandului", NOW(), NOW()),
            (29, "Band","Fanate", NOW(), NOW()),
            (29, "Band","Fanatele Madarasului", NOW(), NOW()),
            (29, "Band","Istan-Tau", NOW(), NOW()),
            (29, "Band","Madaras", NOW(), NOW()),
            (29, "Band","Marasesti", NOW(), NOW()),
            (29, "Band","Negrenii de Campie", NOW(), NOW()),
            (29, "Band","Oroiu", NOW(), NOW()),
            (29, "Band","Petea", NOW(), NOW()),
            (29, "Band","Valea Mare", NOW(), NOW()),
            (29, "Band","Valea Rece", NOW(), NOW()),
            (29, "Band","Tiptelnic", NOW(), NOW()),
            (29, "Batos","Dedrad", NOW(), NOW()),
            (29, "Batos","Goreni", NOW(), NOW()),
            (29, "Batos","Uila", NOW(), NOW()),
            (29, "Beica De Jos","Beica de Sus", NOW(), NOW()),
            (29, "Beica De Jos","Cacuciu", NOW(), NOW()),
            (29, "Beica De Jos","Nadasa", NOW(), NOW()),
            (29, "Beica De Jos","Sanmihai de Padure", NOW(), NOW()),
            (29, "Beica De Jos","Serbeni", NOW(), NOW()),
            (29, "Bichis","Gambut", NOW(), NOW()),
            (29, "Bichis","Nandra", NOW(), NOW()),
            (29, "Bichis","Ozd", NOW(), NOW()),
            (29, "Bogata","Ranta", NOW(), NOW()),
            (29, "Brancovenesti","Idicel", NOW(), NOW()),
            (29, "Brancovenesti","Idicel-Padure", NOW(), NOW()),
            (29, "Brancovenesti","Sacalu de Padure", NOW(), NOW()),
            (29, "Brancovenesti","Valenii de Mures", NOW(), NOW()),
            (29, "Breaza","Filpisu Mare", NOW(), NOW()),
            (29, "Breaza","Filpisu Mic", NOW(), NOW()),
            (29, "Ceuasu De Campie","Bozed", NOW(), NOW()),
            (29, "Ceuasu De Campie","Culpiu", NOW(), NOW()),
            (29, "Ceuasu De Campie","Campenita", NOW(), NOW()),
            (29, "Ceuasu De Campie","Herghelia", NOW(), NOW()),
            (29, "Ceuasu De Campie","Porumbeni", NOW(), NOW()),
            (29, "Ceuasu De Campie","Sabed", NOW(), NOW()),
            (29, "Ceuasu De Campie","Voiniceni", NOW(), NOW()),
            (29, "Chetani","Coasta Grindului", NOW(), NOW()),
            (29, "Chetani","Cordos", NOW(), NOW()),
            (29, "Chetani","Giurgis", NOW(), NOW()),
            (29, "Chetani","Grindeni", NOW(), NOW()),
            (29, "Chetani","Hadareni", NOW(), NOW()),
            (29, "Chetani","Lint", NOW(), NOW()),
            (29, "Chiheru De Jos","Chiheru de Sus", NOW(), NOW()),
            (29, "Chiheru De Jos","Urisiu de Jos", NOW(), NOW()),
            (29, "Chiheru De Jos","Urisiu de Sus", NOW(), NOW()),
            (29, "Coroisanmartin","Coroi", NOW(), NOW()),
            (29, "Coroisanmartin","Odrihei", NOW(), NOW()),
            (29, "Coroisanmartin","Soimus", NOW(), NOW()),
            (29, "Cozma","Fanatele Socolului", NOW(), NOW()),
            (29, "Cozma","Socolu de Campie", NOW(), NOW()),
            (29, "Cozma","Valea Sasului", NOW(), NOW()),
            (29, "Cozma","Valea Ungurului", NOW(), NOW()),
            (29, "Craciunesti","Budiu Mic", NOW(), NOW()),
            (29, "Craciunesti","Cinta", NOW(), NOW()),
            (29, "Craciunesti","Cornesti", NOW(), NOW()),
            (29, "Craciunesti","Tirimioara", NOW(), NOW()),
            (29, "Craiesti","Lefaia", NOW(), NOW()),
            (29, "Craiesti","Milasel", NOW(), NOW()),
            (29, "Craiesti","Nima Milaselului", NOW(), NOW()),
            (29, "Cristesti","Valureni", NOW(), NOW()),
            (29, "Crăciunești","Ciba", NOW(), NOW()),
            (29, "Crăciunești","Foi", NOW(), NOW()),
            (29, "Crăciunești","Nicolesti", NOW(), NOW()),
            (29, "Cucerdea","Bord", NOW(), NOW()),
            (29, "Cucerdea","Seulia de Mures", NOW(), NOW()),
            (29, "Cuci","Dupa Deal", NOW(), NOW()),
            (29, "Cuci","Dataseni", NOW(), NOW()),
            (29, "Cuci","Orosia", NOW(), NOW()),
            (29, "Cuci","Petrilaca", NOW(), NOW()),
            (29, "Danes","Cris", NOW(), NOW()),
            (29, "Danes","Seleus", NOW(), NOW()),
            (29, "Danes","Stejarenii", NOW(), NOW()),
            (29, "Deda","Bistra Muresului", NOW(), NOW()),
            (29, "Deda","Filea", NOW(), NOW()),
            (29, "Deda","Pietris", NOW(), NOW()),
            (29, "Eremitu","Campu Cetatii", NOW(), NOW()),
            (29, "Eremitu","Calugareni", NOW(), NOW()),
            (29, "Eremitu","Damieni", NOW(), NOW()),
            (29, "Eremitu","Matrici", NOW(), NOW()),
            (29, "Ernei","Caluseri", NOW(), NOW()),
            (29, "Ernei","Dumbravioara", NOW(), NOW()),
            (29, "Ernei","Icland", NOW(), NOW()),
            (29, "Ernei","Sangeru de Padure", NOW(), NOW()),
            (29, "Ernei","Sacareni", NOW(), NOW()),
            (29, "Fantanele","Bordosiu", NOW(), NOW()),
            (29, "Fantanele","Cibu", NOW(), NOW()),
            (29, "Fantanele","Calimanesti", NOW(), NOW()),
            (29, "Fantanele","Roua", NOW(), NOW()),
            (29, "Fantanele","Viforoasa", NOW(), NOW()),
            (29, "Faragau","Fanate", NOW(), NOW()),
            (29, "Faragau","Hodaia", NOW(), NOW()),
            (29, "Faragau","Onuca", NOW(), NOW()),
            (29, "Faragau","Poarta", NOW(), NOW()),
            (29, "Faragau","Tonciu", NOW(), NOW()),
            (29, "Galesti","Adrianu Mare", NOW(), NOW()),
            (29, "Galesti","Adrianu Mic", NOW(), NOW()),
            (29, "Galesti","Bedeni", NOW(), NOW()),
            (29, "Galesti","Maiad", NOW(), NOW()),
            (29, "Galesti","Troita", NOW(), NOW()),
            (29, "Ganesti","Paucisoara", NOW(), NOW()),
            (29, "Ganesti","Sub Padure", NOW(), NOW()),
            (29, "Gheorghe Doja","Ilieni", NOW(), NOW()),
            (29, "Gheorghe Doja","Leordeni", NOW(), NOW()),
            (29, "Gheorghe Doja","Satu Nou", NOW(), NOW()),
            (29, "Gheorghe Doja","Tirimia", NOW(), NOW()),
            (29, "Ghindari","Abud", NOW(), NOW()),
            (29, "Ghindari","Ceie", NOW(), NOW()),
            (29, "Ghindari","Solocma", NOW(), NOW()),
            (29, "Ghindari","Trei Sate", NOW(), NOW()),
            (29, "Glodeni","Merisor", NOW(), NOW()),
            (29, "Glodeni","Moisa", NOW(), NOW()),
            (29, "Glodeni","Pacureni", NOW(), NOW()),
            (29, "Glodeni","Paingeni", NOW(), NOW()),
            (29, "Gornesti","Iara de Mures", NOW(), NOW()),
            (29, "Gornesti","Ilioara", NOW(), NOW()),
            (29, "Gornesti","Mura Mare", NOW(), NOW()),
            (29, "Gornesti","Mura Mica", NOW(), NOW()),
            (29, "Gornesti","Peris", NOW(), NOW()),
            (29, "Gornesti","Petrilaca de Mures", NOW(), NOW()),
            (29, "Gornesti","Padureni", NOW(), NOW()),
            (29, "Gornesti","Teleac", NOW(), NOW()),
            (29, "Grebenisu De Campie","Leorinta", NOW(), NOW()),
            (29, "Grebenisu De Campie","Valea Sanpetrului", NOW(), NOW()),
            (29, "Gurghiu","Adrian", NOW(), NOW()),
            (29, "Gurghiu","Casva", NOW(), NOW()),
            (29, "Gurghiu","Comori", NOW(), NOW()),
            (29, "Gurghiu","Fundoaia", NOW(), NOW()),
            (29, "Gurghiu","Glajarie", NOW(), NOW()),
            (29, "Gurghiu","Larga", NOW(), NOW()),
            (29, "Gurghiu","Orsova", NOW(), NOW()),
            (29, "Gurghiu","Orsova-Padure", NOW(), NOW()),
            (29, "Gurghiu","Pauloaia", NOW(), NOW()),
            (29, "Gălești","Sanvasii", NOW(), NOW()),
            (29, "Gănești","Seuca", NOW(), NOW()),
            (29, "Hodac","Arsita", NOW(), NOW()),
            (29, "Hodac","Bicasu", NOW(), NOW()),
            (29, "Hodac","Dubistea de Padure", NOW(), NOW()),
            (29, "Hodac","Mirigioaia", NOW(), NOW()),
            (29, "Hodac","Toaca", NOW(), NOW()),
            (29, "Hodac","Uricea", NOW(), NOW()),
            (29, "Hodosa","Ihod", NOW(), NOW()),
            (29, "Hodosa","Isla", NOW(), NOW()),
            (29, "Hodosa","Sambrias", NOW(), NOW()),
            (29, "Ibanesti","Blidireasa", NOW(), NOW()),
            (29, "Ibanesti","Bradetelu", NOW(), NOW()),
            (29, "Ibanesti","Dulcea", NOW(), NOW()),
            (29, "Ibanesti","Ibanesti-Padure", NOW(), NOW()),
            (29, "Ibanesti","Lapusna", NOW(), NOW()),
            (29, "Ibanesti","Parau Mare", NOW(), NOW()),
            (29, "Ibanesti","Tireu", NOW(), NOW()),
            (29, "Ibanesti","Tisieu", NOW(), NOW()),
            (29, "Ibanesti","Zimti", NOW(), NOW()),
            (29, "Iclanzel","Chisalita", NOW(), NOW()),
            (29, "Iclanzel","Capusu de Campie", NOW(), NOW()),
            (29, "Iclanzel","Dupa Deal", NOW(), NOW()),
            (29, "Iclanzel","Fanate", NOW(), NOW()),
            (29, "Iclanzel","Fanatele Capusului", NOW(), NOW()),
            (29, "Iclanzel","Ghidasteu", NOW(), NOW()),
            (29, "Iclanzel","Iclandu Mare", NOW(), NOW()),
            (29, "Iclanzel","Madaraseni", NOW(), NOW()),
            (29, "Iclanzel","Tablaseni", NOW(), NOW()),
            (29, "Iclanzel","Valea Iclandului", NOW(), NOW()),
            (29, "Ideciu De Jos","Deleni", NOW(), NOW()),
            (29, "Ideciu De Jos","Ideciu de Sus", NOW(), NOW()),
            (29, "Iernut","Cipau", NOW(), NOW()),
            (29, "Iernut","Deag", NOW(), NOW()),
            (29, "Iernut","Lechinta", NOW(), NOW()),
            (29, "Iernut","Oarba de Mures", NOW(), NOW()),
            (29, "Iernut","Porumbac", NOW(), NOW()),
            (29, "Iernut","Racamet", NOW(), NOW()),
            (29, "Iernut","Sfantu Gheorghe", NOW(), NOW()),
            (29, "Iernut","Salcud", NOW(), NOW()),
            (29, "Livezeni","Bozeni", NOW(), NOW()),
            (29, "Livezeni","Corunca", NOW(), NOW()),
            (29, "Livezeni","Ivanesti", NOW(), NOW()),
            (29, "Livezeni","Poienita", NOW(), NOW()),
            (29, "Livezeni","Sanisor", NOW(), NOW()),
            (29, "Ludus","Avramesti", NOW(), NOW()),
            (29, "Ludus","Cioarga", NOW(), NOW()),
            (29, "Ludus","Ciurgau", NOW(), NOW()),
            (29, "Ludus","Fundatura", NOW(), NOW()),
            (29, "Ludus","Gheja", NOW(), NOW()),
            (29, "Ludus","Rosiori", NOW(), NOW()),
            (29, "Lunca","Baita", NOW(), NOW()),
            (29, "Lunca","Frunzeni", NOW(), NOW()),
            (29, "Lunca","Logig", NOW(), NOW()),
            (29, "Lunca","Santu", NOW(), NOW()),
            (29, "Lunca Bradului","Neagra", NOW(), NOW()),
            (29, "Lunca Bradului","Salard", NOW(), NOW()),
            (29, "Magherani","Bereni", NOW(), NOW()),
            (29, "Magherani","Bara", NOW(), NOW()),
            (29, "Magherani","Candu", NOW(), NOW()),
            (29, "Magherani","Drojdii", NOW(), NOW()),
            (29, "Magherani","Eremieni", NOW(), NOW()),
            (29, "Magherani","Maia", NOW(), NOW()),
            (29, "Magherani","Marculeni", NOW(), NOW()),
            (29, "Magherani","Torba", NOW(), NOW()),
            (29, "Magherani","Silea Nirajului", NOW(), NOW()),
            (29, "Mica","Abus", NOW(), NOW()),
            (29, "Mica","Ceuas", NOW(), NOW()),
            (29, "Mica","Capalna de Sus", NOW(), NOW()),
            (29, "Mica","Deaj", NOW(), NOW()),
            (29, "Mica","Haranglab", NOW(), NOW()),
            (29, "Mica","Somostelnic", NOW(), NOW()),
            (29, "Miercurea Nirajului","Beu", NOW(), NOW()),
            (29, "Miercurea Nirajului","Dumitrestii", NOW(), NOW()),
            (29, "Miercurea Nirajului","Laureni", NOW(), NOW()),
            (29, "Miercurea Nirajului","Mosuni", NOW(), NOW()),
            (29, "Miercurea Nirajului","Tampa", NOW(), NOW()),
            (29, "Miercurea Nirajului","Veta", NOW(), NOW()),
            (29, "Miercurea Nirajului","Sardu Nirajului", NOW(), NOW()),
            (29, "Mihesu De Campie","Bujor", NOW(), NOW()),
            (29, "Mihesu De Campie","Cirhagau", NOW(), NOW()),
            (29, "Mihesu De Campie","Groapa Radaii", NOW(), NOW()),
            (29, "Mihesu De Campie","Mogoaia", NOW(), NOW()),
            (29, "Mihesu De Campie","Razoare", NOW(), NOW()),
            (29, "Mihesu De Campie","Stefanca", NOW(), NOW()),
            (29, "Mihesu De Campie","Saulita", NOW(), NOW()),
            (29, "Nades","Magherus", NOW(), NOW()),
            (29, "Nades","Pipea", NOW(), NOW()),
            (29, "Nades","Tigmandru", NOW(), NOW()),
            (29, "Neaua","Ghinesti", NOW(), NOW()),
            (29, "Neaua","Rigmani", NOW(), NOW()),
            (29, "Neaua","Sansimion", NOW(), NOW()),
            (29, "Neaua","Vadas", NOW(), NOW()),
            (29, "Ogra","Dileu Vechi", NOW(), NOW()),
            (29, "Ogra","Giulus", NOW(), NOW()),
            (29, "Ogra","Lascud", NOW(), NOW()),
            (29, "Ogra","Vaideiu", NOW(), NOW()),
            (29, "Panet","Berghia", NOW(), NOW()),
            (29, "Panet","Cuiesd", NOW(), NOW()),
            (29, "Panet","Hartau", NOW(), NOW()),
            (29, "Panet","Santioana de Mures", NOW(), NOW()),
            (29, "Papiu Ilarian","Dobra", NOW(), NOW()),
            (29, "Papiu Ilarian","Merisoru", NOW(), NOW()),
            (29, "Papiu Ilarian","Ursoaia", NOW(), NOW()),
            (29, "Papiu Ilarian","Sandru", NOW(), NOW()),
            (29, "Pasareni","Bolintineni", NOW(), NOW()),
            (29, "Pasareni","Galateni", NOW(), NOW()),
            (29, "Petelea","Habic", NOW(), NOW()),
            (29, "Pogaceaua","Bologaia", NOW(), NOW()),
            (29, "Pogaceaua","Ciulea", NOW(), NOW()),
            (29, "Pogaceaua","Deleni", NOW(), NOW()),
            (29, "Pogaceaua","Fantana Babii", NOW(), NOW()),
            (29, "Pogaceaua","Parau Crucii", NOW(), NOW()),
            (29, "Pogaceaua","Scurta", NOW(), NOW()),
            (29, "Pogaceaua","Sicele", NOW(), NOW()),
            (29, "Pogaceaua","Valea Sanpetrului", NOW(), NOW()),
            (29, "Pogaceaua","Valeni", NOW(), NOW()),
            (29, "Rastolita","Andreneasa", NOW(), NOW()),
            (29, "Rastolita","Borzia", NOW(), NOW()),
            (29, "Rastolita","Galaoaia", NOW(), NOW()),
            (29, "Rastolita","Iod", NOW(), NOW()),
            (29, "Reghin","Apalina", NOW(), NOW()),
            (29, "Reghin","Iernuteni", NOW(), NOW()),
            (29, "Riciu","Coasta Mare", NOW(), NOW()),
            (29, "Riciu","Cotorinau", NOW(), NOW()),
            (29, "Riciu","Curete", NOW(), NOW()),
            (29, "Riciu","Caciulata", NOW(), NOW()),
            (29, "Riciu","Hagau", NOW(), NOW()),
            (29, "Riciu","Lenis", NOW(), NOW()),
            (29, "Riciu","Nima Raciului", NOW(), NOW()),
            (29, "Riciu","Obarsie", NOW(), NOW()),
            (29, "Riciu","Parau Crucii", NOW(), NOW()),
            (29, "Riciu","Raciu", NOW(), NOW()),
            (29, "Riciu","Sanmartinu de Campie", NOW(), NOW()),
            (29, "Riciu","Ulies", NOW(), NOW()),
            (29, "Riciu","Valea Seaca", NOW(), NOW()),
            (29, "Riciu","Valea Sanmartinului", NOW(), NOW()),
            (29, "Riciu","Valea Uliesului", NOW(), NOW()),
            (29, "Rusii-Munti","Maioresti", NOW(), NOW()),
            (29, "Rusii-Munti","Morareni", NOW(), NOW()),
            (29, "Rusii-Munti","Sebes", NOW(), NOW()),
            (29, "Sancraiu De Mures","Nazna", NOW(), NOW()),
            (29, "Sangeorgiu De Mures","Cotus", NOW(), NOW()),
            (29, "Sangeorgiu De Mures","Tofalau", NOW(), NOW()),
            (29, "Sangeorgiu De Padure","Bezid", NOW(), NOW()),
            (29, "Sangeorgiu De Padure","Bezidu Nou", NOW(), NOW()),
            (29, "Sangeorgiu De Padure","Lotu", NOW(), NOW()),
            (29, "Sanger","Barza", NOW(), NOW()),
            (29, "Sanger","Cipaieni", NOW(), NOW()),
            (29, "Sanger","Dalu", NOW(), NOW()),
            (29, "Sanger","Pripoare", NOW(), NOW()),
            (29, "Sanger","Valisoara", NOW(), NOW()),
            (29, "Sanger","Zapodea", NOW(), NOW()),
            (29, "Sanpaul","Chirileu", NOW(), NOW()),
            (29, "Sanpaul","Dileu Nou", NOW(), NOW()),
            (29, "Sanpaul","Sanmarghita", NOW(), NOW()),
            (29, "Sanpaul","Valea Izvoarelor", NOW(), NOW()),
            (29, "Sanpetru De Campie","Barlibas", NOW(), NOW()),
            (29, "Sanpetru De Campie","Dambu", NOW(), NOW()),
            (29, "Sanpetru De Campie","Satu Nou", NOW(), NOW()),
            (29, "Sanpetru De Campie","Sangeorgiu de Campie", NOW(), NOW()),
            (29, "Sanpetru De Campie","Tusinu", NOW(), NOW()),
            (29, "Santana De Mures","Bardesti", NOW(), NOW()),
            (29, "Santana De Mures","Chinari", NOW(), NOW()),
            (29, "Santana De Mures","Curteni", NOW(), NOW()),
            (29, "Sarmasu","Balda", NOW(), NOW()),
            (29, "Sarmasu","Larga", NOW(), NOW()),
            (29, "Sarmasu","Morut", NOW(), NOW()),
            (29, "Sarmasu","Sarmasel", NOW(), NOW()),
            (29, "Sarmasu","Sarmasel-Gara", NOW(), NOW()),
            (29, "Sarmasu","Titiana", NOW(), NOW()),
            (29, "Sarmasu","Visinelu", NOW(), NOW()),
            (29, "Saschiz","Cloasterf", NOW(), NOW()),
            (29, "Saschiz","Mihai Viteazu", NOW(), NOW()),
            (29, "Saulia","Leorinta-Saulia", NOW(), NOW()),
            (29, "Saulia","Macicasesti", NOW(), NOW()),
            (29, "Saulia","Padurea", NOW(), NOW()),
            (29, "Sighisoara","Angofa", NOW(), NOW()),
            (29, "Sighisoara","Aurel Vlaicu", NOW(), NOW()),
            (29, "Sighisoara","Hetiur", NOW(), NOW()),
            (29, "Sighisoara","Rora", NOW(), NOW()),
            (29, "Sighisoara","Venchi", NOW(), NOW()),
            (29, "Sighisoara","Viilor", NOW(), NOW()),
            (29, "Sighisoara","Soromiclea", NOW(), NOW()),
            (29, "Sincai","Lechincioara", NOW(), NOW()),
            (29, "Sincai","Pusta", NOW(), NOW()),
            (29, "Sincai","Sincai-Fanate", NOW(), NOW()),
            (29, "Solovastru","Jabenita", NOW(), NOW()),
            (29, "Sovata","Capeti", NOW(), NOW()),
            (29, "Sovata","Iliesi", NOW(), NOW()),
            (29, "Sovata","Sacadat", NOW(), NOW()),
            (29, "Sovata","Sarateni", NOW(), NOW()),
            (29, "Stanceni","Ciobotani", NOW(), NOW()),
            (29, "Stanceni","Mestera", NOW(), NOW()),
            (29, "Suplac","Idrifaia", NOW(), NOW()),
            (29, "Suplac","Laslau Mare", NOW(), NOW()),
            (29, "Suplac","Laslau Mic", NOW(), NOW()),
            (29, "Suplac","Vaidacuta", NOW(), NOW()),
            (29, "Suseni","Luieriu", NOW(), NOW()),
            (29, "Targu Mures","Mureseni", NOW(), NOW()),
            (29, "Targu Mures","Remetea", NOW(), NOW()),
            (29, "Tarnaveni","Bobohalma", NOW(), NOW()),
            (29, "Tarnaveni","Botorca", NOW(), NOW()),
            (29, "Tarnaveni","Custelnic", NOW(), NOW()),
            (29, "Taureni","Fanate", NOW(), NOW()),
            (29, "Taureni","Moara de Jos", NOW(), NOW()),
            (29, "Ungheni","Cerghid", NOW(), NOW()),
            (29, "Ungheni","Cerghizel", NOW(), NOW()),
            (29, "Ungheni","Moresti", NOW(), NOW()),
            (29, "Ungheni","Recea", NOW(), NOW()),
            (29, "Ungheni","Vidrasau", NOW(), NOW()),
            (29, "Ungheni","Sausa", NOW(), NOW()),
            (29, "Valea Larga","Gradini", NOW(), NOW()),
            (29, "Valea Larga","Malaesti", NOW(), NOW()),
            (29, "Valea Larga","Poduri", NOW(), NOW()),
            (29, "Valea Larga","Valea Fratiei", NOW(), NOW()),
            (29, "Valea Larga","Valea Glodului", NOW(), NOW()),
            (29, "Valea Larga","Valea Padurii", NOW(), NOW()),
            (29, "Valea Larga","Valea Uriesului", NOW(), NOW()),
            (29, "Valea Larga","Valea Surii", NOW(), NOW()),
            (29, "Vanatori","Archita", NOW(), NOW()),
            (29, "Vanatori","Feleag", NOW(), NOW()),
            (29, "Vanatori","Mureni", NOW(), NOW()),
            (29, "Vanatori","Soard", NOW(), NOW()),
            (29, "Vargata","Grausorul", NOW(), NOW()),
            (29, "Vargata","Mitresti", NOW(), NOW()),
            (29, "Vargata","Vadu", NOW(), NOW()),
            (29, "Vargata","Valea", NOW(), NOW()),
            (29, "Vatava","Dumbrava", NOW(), NOW()),
            (29, "Vatava","Rapa de Jos", NOW(), NOW()),
            (29, "Vetca","Jacodu", NOW(), NOW()),
            (29, "Vetca","Salasuri", NOW(), NOW()),
            (29, "Viisoara","Ormenis", NOW(), NOW()),
            (29, "Viisoara","Santioana", NOW(), NOW()),
            (29, "Voivodeni","Toldal", NOW(), NOW()),
            (29, "Zagar","Seleus", NOW(), NOW()),
            (29, "Zau De Campie","Botei", NOW(), NOW()),
            (29, "Zau De Campie","Bujor-Hodaie", NOW(), NOW()),
            (29, "Zau De Campie","Barbosi", NOW(), NOW()),
            (29, "Zau De Campie","Ciretea", NOW(), NOW()),
            (29, "Zau De Campie","Gaura Sangerului", NOW(), NOW()),
            (29, "Zau De Campie","Malea", NOW(), NOW()),
            (29, "Zau De Campie","Tau", NOW(), NOW()),
            (29, "Zau De Campie","Stefaneaca", NOW(), NOW())
        ;';
        if (config('app.env') !== 'testing') {
            DB::connection()->getPdo()->exec($sql);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $sql = 'DELETE FROM localities WHERE county_id=29;';
        DB::connection()->getPdo()->exec($sql);
    }
}
