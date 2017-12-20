<?php

use Illuminate\Database\Migrations\Migration;

class InsertAllLocalitiesForVN extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $sql = 'INSERT INTO localities (county_id, township, name, created_at, updated_at) VALUES
            (42, "","Adjud", NOW(), NOW()),
            (42, "","Andreiasu de Jos", NOW(), NOW()),
            (42, "","Boghesti", NOW(), NOW()),
            (42, "","Bolotesti", NOW(), NOW()),
            (42, "","Bordesti", NOW(), NOW()),
            (42, "","Brosteni", NOW(), NOW()),
            (42, "","Barsesti", NOW(), NOW()),
            (42, "","Balesti", NOW(), NOW()),
            (42, "","Chiojdeni", NOW(), NOW()),
            (42, "","Ciorasti", NOW(), NOW()),
            (42, "","Corbita", NOW(), NOW()),
            (42, "","Cotesti", NOW(), NOW()),
            (42, "","Campineanca", NOW(), NOW()),
            (42, "","Campuri", NOW(), NOW()),
            (42, "","Carligele", NOW(), NOW()),
            (42, "","Dumbraveni", NOW(), NOW()),
            (42, "","Dumitresti", NOW(), NOW()),
            (42, "","Fitionesti", NOW(), NOW()),
            (42, "","Focsani", NOW(), NOW()),
            (42, "","Garoafa", NOW(), NOW()),
            (42, "","Golesti", NOW(), NOW()),
            (42, "","Gugesti", NOW(), NOW()),
            (42, "","Gura Calitei", NOW(), NOW()),
            (42, "","Homocea", NOW(), NOW()),
            (42, "","Jaristea", NOW(), NOW()),
            (42, "","Jitia", NOW(), NOW()),
            (42, "","Mera", NOW(), NOW()),
            (42, "","Milcovul", NOW(), NOW()),
            (42, "","Movilita", NOW(), NOW()),
            (42, "","Maicanesti", NOW(), NOW()),
            (42, "","Marasesti", NOW(), NOW()),
            (42, "","Negrilesti", NOW(), NOW()),
            (42, "","Nereju", NOW(), NOW()),
            (42, "","Nistoresti", NOW(), NOW()),
            (42, "","Nanesti", NOW(), NOW()),
            (42, "","Naruja", NOW(), NOW()),
            (42, "","Odobesti", NOW(), NOW()),
            (42, "","Paltin", NOW(), NOW()),
            (42, "","Panciu", NOW(), NOW()),
            (42, "","Ploscuteni", NOW(), NOW()),
            (42, "","Poiana Cristei", NOW(), NOW()),
            (42, "","Popesti", NOW(), NOW()),
            (42, "","Pufesti", NOW(), NOW()),
            (42, "","Paulesti", NOW(), NOW()),
            (42, "","Paunesti", NOW(), NOW()),
            (42, "","Reghiu", NOW(), NOW()),
            (42, "","Ruginesti", NOW(), NOW()),
            (42, "","Racoasa", NOW(), NOW()),
            (42, "","Sihlea", NOW(), NOW()),
            (42, "","Slobozia Bradului", NOW(), NOW()),
            (42, "","Slobozia Ciorasti", NOW(), NOW()),
            (42, "","Straoane", NOW(), NOW()),
            (42, "","Suraia", NOW(), NOW()),
            (42, "","Tulnici", NOW(), NOW()),
            (42, "","Tamboesti", NOW(), NOW()),
            (42, "","Tanasoaia", NOW(), NOW()),
            (42, "","Tataranu", NOW(), NOW()),
            (42, "","Urechesti", NOW(), NOW()),
            (42, "","Valea Sarii", NOW(), NOW()),
            (42, "","Vidra", NOW(), NOW()),
            (42, "","Vintileasca", NOW(), NOW()),
            (42, "","Vrancioaia", NOW(), NOW()),
            (42, "","Vulturu", NOW(), NOW()),
            (42, "","Vanatori", NOW(), NOW()),
            (42, "","Vartescoiu", NOW(), NOW()),
            (42, "","Tifesti", NOW(), NOW()),
            (42, "Adjud","Adjudu Vechi", NOW(), NOW()),
            (42, "Adjud","Burcioaia", NOW(), NOW()),
            (42, "Adjud","Siscani", NOW(), NOW()),
            (42, "Andreiasu De Jos","Andreiasu de Sus", NOW(), NOW()),
            (42, "Andreiasu De Jos","Arsita", NOW(), NOW()),
            (42, "Andreiasu De Jos","Fetig", NOW(), NOW()),
            (42, "Andreiasu De Jos","Hotaru", NOW(), NOW()),
            (42, "Andreiasu De Jos","Rachitasu", NOW(), NOW()),
            (42, "Andreiasu De Jos","Titila", NOW(), NOW()),
            (42, "Barsesti","Topesti", NOW(), NOW()),
            (42, "Boghesti","Bichesti", NOW(), NOW()),
            (42, "Boghesti","Boghestii de Sus", NOW(), NOW()),
            (42, "Boghesti","Chitcani", NOW(), NOW()),
            (42, "Boghesti","Iugani", NOW(), NOW()),
            (42, "Boghesti","Plesesti", NOW(), NOW()),
            (42, "Boghesti","Placinteni", NOW(), NOW()),
            (42, "Boghesti","Prisecani", NOW(), NOW()),
            (42, "Boghesti","Tabucesti", NOW(), NOW()),
            (42, "Bolotesti","Gagesti", NOW(), NOW()),
            (42, "Bolotesti","Ivancesti", NOW(), NOW()),
            (42, "Bolotesti","Pietroasa", NOW(), NOW()),
            (42, "Bolotesti","Putna", NOW(), NOW()),
            (42, "Bolotesti","Vitanestii de Sub Magura", NOW(), NOW()),
            (42, "Bordesti","Bordestii de Jos", NOW(), NOW()),
            (42, "Brosteni","Arva", NOW(), NOW()),
            (42, "Brosteni","Pitulusa", NOW(), NOW()),
            (42, "Campineanca","Pietroasa", NOW(), NOW()),
            (42, "Campineanca","Valcele", NOW(), NOW()),
            (42, "Campuri","Fetesti", NOW(), NOW()),
            (42, "Campuri","Gura Vaii", NOW(), NOW()),
            (42, "Campuri","Rotilestii Mari", NOW(), NOW()),
            (42, "Campuri","Rotilestii Mici", NOW(), NOW()),
            (42, "Carligele","Blidari", NOW(), NOW()),
            (42, "Carligele","Bontesti", NOW(), NOW()),
            (42, "Carligele","Dalhauti", NOW(), NOW()),
            (42, "Chiojdeni","Catauti", NOW(), NOW()),
            (42, "Chiojdeni","Lojnita", NOW(), NOW()),
            (42, "Chiojdeni","Luncile", NOW(), NOW()),
            (42, "Chiojdeni","Maracini", NOW(), NOW()),
            (42, "Chiojdeni","Podurile", NOW(), NOW()),
            (42, "Chiojdeni","Seciu", NOW(), NOW()),
            (42, "Chiojdeni","Tulburea", NOW(), NOW()),
            (42, "Ciorasti","Codresti", NOW(), NOW()),
            (42, "Ciorasti","Mihalceni", NOW(), NOW()),
            (42, "Ciorasti","Salcia Noua", NOW(), NOW()),
            (42, "Ciorasti","Salcia Veche", NOW(), NOW()),
            (42, "Ciorasti","Satu Nou", NOW(), NOW()),
            (42, "Ciorasti","Spatareasa", NOW(), NOW()),
            (42, "Corbita","Buda", NOW(), NOW()),
            (42, "Corbita","Izvoarele", NOW(), NOW()),
            (42, "Corbita","Largaseni", NOW(), NOW()),
            (42, "Corbita","Ochesesti", NOW(), NOW()),
            (42, "Corbita","Radacinesti", NOW(), NOW()),
            (42, "Corbita","Tutu", NOW(), NOW()),
            (42, "Corbita","Valcelele", NOW(), NOW()),
            (42, "Corbita","Serbanesti", NOW(), NOW()),
            (42, "Cotesti","Budesti", NOW(), NOW()),
            (42, "Cotesti","Golestii de Sus", NOW(), NOW()),
            (42, "Cotesti","Valea Cotesti", NOW(), NOW()),
            (42, "Dumbraveni","Alexandru Vlahuta", NOW(), NOW()),
            (42, "Dumbraveni","Candesti", NOW(), NOW()),
            (42, "Dumbraveni","Dragosloveni", NOW(), NOW()),
            (42, "Dumitresti","Bicestii de Jos", NOW(), NOW()),
            (42, "Dumitresti","Bicestii de Sus", NOW(), NOW()),
            (42, "Dumitresti","Blidari", NOW(), NOW()),
            (42, "Dumitresti","Dumitrestii de Sus", NOW(), NOW()),
            (42, "Dumitresti","Dumitrestii-Fata", NOW(), NOW()),
            (42, "Dumitresti","Galoiesti", NOW(), NOW()),
            (42, "Dumitresti","Lupoaia", NOW(), NOW()),
            (42, "Dumitresti","Lastuni", NOW(), NOW()),
            (42, "Dumitresti","Motnau", NOW(), NOW()),
            (42, "Dumitresti","Poienita", NOW(), NOW()),
            (42, "Dumitresti","Roscari", NOW(), NOW()),
            (42, "Dumitresti","Siminoc", NOW(), NOW()),
            (42, "Dumitresti","Tinoasa", NOW(), NOW()),
            (42, "Dumitresti","Trestia", NOW(), NOW()),
            (42, "Dumitresti","Valea Mica", NOW(), NOW()),
            (42, "Fitionesti","Ciolanesti", NOW(), NOW()),
            (42, "Fitionesti","Ghimicesti", NOW(), NOW()),
            (42, "Fitionesti","Holbanesti", NOW(), NOW()),
            (42, "Fitionesti","Manastioara", NOW(), NOW()),
            (42, "Focsani","Mandresti-Moldova", NOW(), NOW()),
            (42, "Focsani","Mandresti-Munteni", NOW(), NOW()),
            (42, "Garoafa","Bizighesti", NOW(), NOW()),
            (42, "Garoafa","Ciuslea", NOW(), NOW()),
            (42, "Garoafa","Doaga", NOW(), NOW()),
            (42, "Garoafa","Faurei", NOW(), NOW()),
            (42, "Garoafa","Precistanu", NOW(), NOW()),
            (42, "Garoafa","Rachitosu", NOW(), NOW()),
            (42, "Garoafa","Strajescu", NOW(), NOW()),
            (42, "Golesti","Ceardac", NOW(), NOW()),
            (42, "Gugesti","Oreavu", NOW(), NOW()),
            (42, "Gura Calitei","Balanesti", NOW(), NOW()),
            (42, "Gura Calitei","Cocosari", NOW(), NOW()),
            (42, "Gura Calitei","Dealul Lung", NOW(), NOW()),
            (42, "Gura Calitei","Groapa Tufei", NOW(), NOW()),
            (42, "Gura Calitei","Lacu lui Baban", NOW(), NOW()),
            (42, "Gura Calitei","Plopu", NOW(), NOW()),
            (42, "Gura Calitei","Poenile", NOW(), NOW()),
            (42, "Gura Calitei","Rasca", NOW(), NOW()),
            (42, "Gura Calitei","Sotarcari", NOW(), NOW()),
            (42, "Homocea","Costisa", NOW(), NOW()),
            (42, "Homocea","Lespezi", NOW(), NOW()),
            (42, "Jaristea","Padureni", NOW(), NOW()),
            (42, "Jaristea","Scanteia", NOW(), NOW()),
            (42, "Jaristea","Varsatura", NOW(), NOW()),
            (42, "Jitia","Cerbu", NOW(), NOW()),
            (42, "Jitia","Dealu Sarii", NOW(), NOW()),
            (42, "Jitia","Jitia de Jos", NOW(), NOW()),
            (42, "Jitia","Magura", NOW(), NOW()),
            (42, "Maicanesti","Belciugele", NOW(), NOW()),
            (42, "Maicanesti","Ramniceni", NOW(), NOW()),
            (42, "Maicanesti","Slobozia Botesti", NOW(), NOW()),
            (42, "Maicanesti","Stupina", NOW(), NOW()),
            (42, "Maicanesti","Tataru", NOW(), NOW()),
            (42, "Marasesti","Calimanesti", NOW(), NOW()),
            (42, "Marasesti","Haret", NOW(), NOW()),
            (42, "Marasesti","Modruzeni", NOW(), NOW()),
            (42, "Marasesti","Padureni", NOW(), NOW()),
            (42, "Marasesti","Siretu", NOW(), NOW()),
            (42, "Marasesti","Tisita", NOW(), NOW()),
            (42, "Mera","Livada", NOW(), NOW()),
            (42, "Mera","Milcovel", NOW(), NOW()),
            (42, "Mera","Rosioara", NOW(), NOW()),
            (42, "Mera","Vulcaneasa", NOW(), NOW()),
            (42, "Milcovul","Gologanu", NOW(), NOW()),
            (42, "Milcovul","Lamotesti", NOW(), NOW()),
            (42, "Milcovul","Rastoaca", NOW(), NOW()),
            (42, "Movilita","Diochetirediu", NOW(), NOW()),
            (42, "Movilita","Frecatei", NOW(), NOW()),
            (42, "Movilita","Trotusanu", NOW(), NOW()),
            (42, "Movilita","Valeni", NOW(), NOW()),
            (42, "Nanesti","Calienii Noi", NOW(), NOW()),
            (42, "Nanesti","Calienii Vechi", NOW(), NOW()),
            (42, "Naruja","Podu Narujei", NOW(), NOW()),
            (42, "Naruja","Podu Stoica", NOW(), NOW()),
            (42, "Naruja","Rebegari", NOW(), NOW()),
            (42, "Nereju","Bradacesti", NOW(), NOW()),
            (42, "Nereju","Chiricani", NOW(), NOW()),
            (42, "Nereju","Nereju Mic", NOW(), NOW()),
            (42, "Nereju","Sahastru", NOW(), NOW()),
            (42, "Nistoresti","Bradetu", NOW(), NOW()),
            (42, "Nistoresti","Batcari", NOW(), NOW()),
            (42, "Nistoresti","Fagetu", NOW(), NOW()),
            (42, "Nistoresti","Podu Schiopului", NOW(), NOW()),
            (42, "Nistoresti","Romanesti", NOW(), NOW()),
            (42, "Nistoresti","Ungureni", NOW(), NOW()),
            (42, "Nistoresti","Valea Neagra", NOW(), NOW()),
            (42, "Nistoresti","Vetresti-Herastrau", NOW(), NOW()),
            (42, "Odobesti","Unirea", NOW(), NOW()),
            (42, "Paltin","Carsochesti-Corabita", NOW(), NOW()),
            (42, "Paltin","Ghebari", NOW(), NOW()),
            (42, "Paltin","Moraresti", NOW(), NOW()),
            (42, "Paltin","Prahuda", NOW(), NOW()),
            (42, "Paltin","Pavalari", NOW(), NOW()),
            (42, "Paltin","Spulber", NOW(), NOW()),
            (42, "Paltin","Tojanii de Jos", NOW(), NOW()),
            (42, "Paltin","Tojanii de Sus", NOW(), NOW()),
            (42, "Paltin","Valcani", NOW(), NOW()),
            (42, "Paltin","Tepa", NOW(), NOW()),
            (42, "Paltin","Tipau", NOW(), NOW()),
            (42, "Panciu","Crucea de Jos", NOW(), NOW()),
            (42, "Panciu","Crucea de Sus", NOW(), NOW()),
            (42, "Panciu","Dumbrava", NOW(), NOW()),
            (42, "Panciu","Neicu", NOW(), NOW()),
            (42, "Panciu","Satu Nou", NOW(), NOW()),
            (42, "Paulesti","Haulisca", NOW(), NOW()),
            (42, "Paunesti","Viisoara", NOW(), NOW()),
            (42, "Ploscuteni","Argea", NOW(), NOW()),
            (42, "Poiana Cristei","Dealu Cucului", NOW(), NOW()),
            (42, "Poiana Cristei","Dumbrava", NOW(), NOW()),
            (42, "Poiana Cristei","Mahriu", NOW(), NOW()),
            (42, "Poiana Cristei","Odobasca", NOW(), NOW()),
            (42, "Poiana Cristei","Petreanu", NOW(), NOW()),
            (42, "Poiana Cristei","Podu Lacului", NOW(), NOW()),
            (42, "Poiana Cristei","Taratu", NOW(), NOW()),
            (42, "Popesti","Terchesti", NOW(), NOW()),
            (42, "Pufesti","Ciorani", NOW(), NOW()),
            (42, "Pufesti","Domnesti-Sat", NOW(), NOW()),
            (42, "Pufesti","Domnesti-Targ", NOW(), NOW()),
            (42, "Racoasa","Gogoiu", NOW(), NOW()),
            (42, "Racoasa","Marasti", NOW(), NOW()),
            (42, "Racoasa","Varnita", NOW(), NOW()),
            (42, "Racoasa","Verdea", NOW(), NOW()),
            (42, "Reghiu","Farcas", NOW(), NOW()),
            (42, "Reghiu","Jgheaburi", NOW(), NOW()),
            (42, "Reghiu","Piscu Reghiului", NOW(), NOW()),
            (42, "Reghiu","Raiuti", NOW(), NOW()),
            (42, "Reghiu","Ursoaia", NOW(), NOW()),
            (42, "Reghiu","Valea Milcovului", NOW(), NOW()),
            (42, "Reghiu","Sindrilari", NOW(), NOW()),
            (42, "Ruginesti","Anghelesti", NOW(), NOW()),
            (42, "Ruginesti","Copacesti", NOW(), NOW()),
            (42, "Ruginesti","Valeni", NOW(), NOW()),
            (42, "Sihlea","Bogza", NOW(), NOW()),
            (42, "Sihlea","Caiata", NOW(), NOW()),
            (42, "Sihlea","Voetin", NOW(), NOW()),
            (42, "Slobozia Bradului","Cornetu", NOW(), NOW()),
            (42, "Slobozia Bradului","Coroteni", NOW(), NOW()),
            (42, "Slobozia Bradului","Liesti", NOW(), NOW()),
            (42, "Slobozia Bradului","Olareni", NOW(), NOW()),
            (42, "Slobozia Bradului","Valea Beciului", NOW(), NOW()),
            (42, "Slobozia Ciorasti","Armeni", NOW(), NOW()),
            (42, "Slobozia Ciorasti","Jiliste", NOW(), NOW()),
            (42, "Soveja","Dragosloveni", NOW(), NOW()),
            (42, "Soveja","Rucareni", NOW(), NOW()),
            (42, "Straoane","Muncelu", NOW(), NOW()),
            (42, "Straoane","Repedea", NOW(), NOW()),
            (42, "Straoane","Valeni", NOW(), NOW()),
            (42, "Suraia","Biliesti", NOW(), NOW()),
            (42, "Tamboesti","Obrejita", NOW(), NOW()),
            (42, "Tamboesti","Pietroasa", NOW(), NOW()),
            (42, "Tamboesti","Padureni", NOW(), NOW()),
            (42, "Tamboesti","Slimnic", NOW(), NOW()),
            (42, "Tamboesti","Trestieni", NOW(), NOW()),
            (42, "Tanasoaia","Costisa", NOW(), NOW()),
            (42, "Tanasoaia","Costisa de Sus", NOW(), NOW()),
            (42, "Tanasoaia","Covrag", NOW(), NOW()),
            (42, "Tanasoaia","Calimaneasa", NOW(), NOW()),
            (42, "Tanasoaia","Feldioara", NOW(), NOW()),
            (42, "Tanasoaia","Galbeni", NOW(), NOW()),
            (42, "Tanasoaia","Nanesti", NOW(), NOW()),
            (42, "Tanasoaia","Vladnicu de Jos", NOW(), NOW()),
            (42, "Tanasoaia","Vladnicu de Sus", NOW(), NOW()),
            (42, "Tataranu","Bordeasca Noua", NOW(), NOW()),
            (42, "Tataranu","Bordeasca Veche", NOW(), NOW()),
            (42, "Tataranu","Martinesti", NOW(), NOW()),
            (42, "Tataranu","Vajaitoarea", NOW(), NOW()),
            (42, "Tifesti","Batinesti", NOW(), NOW()),
            (42, "Tifesti","Clipicesti", NOW(), NOW()),
            (42, "Tifesti","Igesti", NOW(), NOW()),
            (42, "Tifesti","Olesesti", NOW(), NOW()),
            (42, "Tifesti","Patrascani", NOW(), NOW()),
            (42, "Tifesti","Sarbi", NOW(), NOW()),
            (42, "Tifesti","Vitanesti", NOW(), NOW()),
            (42, "Tulnici","Coza", NOW(), NOW()),
            (42, "Tulnici","Gresu", NOW(), NOW()),
            (42, "Tulnici","Lepsa", NOW(), NOW()),
            (42, "Valea Sarii","Colacu", NOW(), NOW()),
            (42, "Valea Sarii","Matacina", NOW(), NOW()),
            (42, "Valea Sarii","Poduri", NOW(), NOW()),
            (42, "Valea Sarii","Prisaca", NOW(), NOW()),
            (42, "Vanatori","Balta Ratei", NOW(), NOW()),
            (42, "Vanatori","Jorasti", NOW(), NOW()),
            (42, "Vanatori","Mircestii Noi", NOW(), NOW()),
            (42, "Vanatori","Mircestii Vechi", NOW(), NOW()),
            (42, "Vanatori","Petresti", NOW(), NOW()),
            (42, "Vanatori","Radulesti", NOW(), NOW()),
            (42, "Vartescoiu","Beciu", NOW(), NOW()),
            (42, "Vartescoiu","Faraoanele", NOW(), NOW()),
            (42, "Vartescoiu","Olteni", NOW(), NOW()),
            (42, "Vartescoiu","Pietroasa", NOW(), NOW()),
            (42, "Vartescoiu","Ramniceanca", NOW(), NOW()),
            (42, "Vidra","Burca", NOW(), NOW()),
            (42, "Vidra","Iresti", NOW(), NOW()),
            (42, "Vidra","Ruget", NOW(), NOW()),
            (42, "Vidra","Scafari", NOW(), NOW()),
            (42, "Vidra","Tichiris", NOW(), NOW()),
            (42, "Vidra","Viisoara", NOW(), NOW()),
            (42, "Vidra","Voloscani", NOW(), NOW()),
            (42, "Vidra","Serbesti", NOW(), NOW()),
            (42, "Vintileasca","Bahnele", NOW(), NOW()),
            (42, "Vintileasca","Dupa Magura", NOW(), NOW()),
            (42, "Vintileasca","Neculele", NOW(), NOW()),
            (42, "Vintileasca","Poiana Stoichii", NOW(), NOW()),
            (42, "Vintileasca","Tanasari", NOW(), NOW()),
            (42, "Vizantea-Livezi","Livezile", NOW(), NOW()),
            (42, "Vizantea-Livezi","Mesteacanu", NOW(), NOW()),
            (42, "Vizantea-Livezi","Piscu Radului", NOW(), NOW()),
            (42, "Vizantea-Livezi","Vizantea Manastireasca", NOW(), NOW()),
            (42, "Vizantea-Livezi","Vizantea Razaseasca", NOW(), NOW()),
            (42, "Vrancioaia","Bodesti", NOW(), NOW()),
            (42, "Vrancioaia","Muncei", NOW(), NOW()),
            (42, "Vrancioaia","Plostina", NOW(), NOW()),
            (42, "Vrancioaia","Poiana", NOW(), NOW()),
            (42, "Vrancioaia","Spinesti", NOW(), NOW()),
            (42, "Vulturu","Botarlau", NOW(), NOW()),
            (42, "Vulturu","Hangulesti", NOW(), NOW()),
            (42, "Vulturu","Maluri", NOW(), NOW()),
            (42, "Vulturu","Vadu Rosca", NOW(), NOW())
        ;';
        DB::connection()->getPdo()->exec($sql);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $sql = 'DELETE FROM localities WHERE county_id=42;';
        DB::connection()->getPdo()->exec($sql);
    }
}