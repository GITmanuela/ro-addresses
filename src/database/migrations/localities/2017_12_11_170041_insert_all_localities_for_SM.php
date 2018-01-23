<?php

use Illuminate\Database\Migrations\Migration;

class InsertAllLocalitiesForSM extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $sql = 'INSERT INTO localities (county_id, township, name, created_at, updated_at) VALUES
            (33, "","Andrid", NOW(), NOW()),
            (33, "","Apa", NOW(), NOW()),
            (33, "","Ardud", NOW(), NOW()),
            (33, "","Beltiug", NOW(), NOW()),
            (33, "","Berveni", NOW(), NOW()),
            (33, "","Bixad", NOW(), NOW()),
            (33, "","Bogdand", NOW(), NOW()),
            (33, "","Botiz", NOW(), NOW()),
            (33, "","Batarci", NOW(), NOW()),
            (33, "","Carei", NOW(), NOW()),
            (33, "","Cehal", NOW(), NOW()),
            (33, "","Certeze", NOW(), NOW()),
            (33, "","Craidorolt", NOW(), NOW()),
            (33, "","Crucisor", NOW(), NOW()),
            (33, "","Calinesti-Oas", NOW(), NOW()),
            (33, "","Camin", NOW(), NOW()),
            (33, "","Camarzana", NOW(), NOW()),
            (33, "","Capleni", NOW(), NOW()),
            (33, "","Cauas", NOW(), NOW()),
            (33, "","Doba", NOW(), NOW()),
            (33, "","Dorolt", NOW(), NOW()),
            (33, "","Foieni", NOW(), NOW()),
            (33, "","Gherta Mica", NOW(), NOW()),
            (33, "","Halmeu", NOW(), NOW()),
            (33, "","Hodod", NOW(), NOW()),
            (33, "","Lazuri", NOW(), NOW()),
            (33, "","Livada", NOW(), NOW()),
            (33, "","Mediesu Aurit", NOW(), NOW()),
            (33, "","Micula", NOW(), NOW()),
            (33, "","Negresti-Oas", NOW(), NOW()),
            (33, "","Odoreu", NOW(), NOW()),
            (33, "","Orasu Nou", NOW(), NOW()),
            (33, "","Petresti", NOW(), NOW()),
            (33, "","Pir", NOW(), NOW()),
            (33, "","Piscolt", NOW(), NOW()),
            (33, "","Pomi", NOW(), NOW()),
            (33, "","Paulesti", NOW(), NOW()),
            (33, "","Sanislau", NOW(), NOW()),
            (33, "","Santau", NOW(), NOW()),
            (33, "","Satu Mare", NOW(), NOW()),
            (33, "","Socond", NOW(), NOW()),
            (33, "","Sacaseni", NOW(), NOW()),
            (33, "","Sauca", NOW(), NOW()),
            (33, "","Tarna Mare", NOW(), NOW()),
            (33, "","Terebesti", NOW(), NOW()),
            (33, "","Tiream", NOW(), NOW()),
            (33, "","Turulung", NOW(), NOW()),
            (33, "","Turt", NOW(), NOW()),
            (33, "","Tarsolt", NOW(), NOW()),
            (33, "","Tasnad", NOW(), NOW()),
            (33, "","Urziceni", NOW(), NOW()),
            (33, "","Valea Vinului", NOW(), NOW()),
            (33, "","Vama", NOW(), NOW()),
            (33, "","Vetis", NOW(), NOW()),
            (33, "","Viile Satu Mare", NOW(), NOW()),
            (33, "Acis","Acas", NOW(), NOW()),
            (33, "Acis","Ganas", NOW(), NOW()),
            (33, "Acis","Mihaieni", NOW(), NOW()),
            (33, "Acis","Unimat", NOW(), NOW()),
            (33, "Andrid","Dindesti", NOW(), NOW()),
            (33, "Andrid","Irina", NOW(), NOW()),
            (33, "Apa","Lunca Apei", NOW(), NOW()),
            (33, "Apa","Someseni", NOW(), NOW()),
            (33, "Ardud","Ardud-Vii", NOW(), NOW()),
            (33, "Ardud","Baba Novac", NOW(), NOW()),
            (33, "Ardud","Gerausa", NOW(), NOW()),
            (33, "Ardud","Madaras", NOW(), NOW()),
            (33, "Ardud","Saratura", NOW(), NOW()),
            (33, "Barsau","Barsau de Jos", NOW(), NOW()),
            (33, "Barsau","Barsau de Sus", NOW(), NOW()),
            (33, "Batarci","Comlausa", NOW(), NOW()),
            (33, "Batarci","Tamaseni", NOW(), NOW()),
            (33, "Batarci","Sirlau", NOW(), NOW()),
            (33, "Beltiug","Bolda", NOW(), NOW()),
            (33, "Beltiug","Ghirisa", NOW(), NOW()),
            (33, "Beltiug","Giungi", NOW(), NOW()),
            (33, "Beltiug","Ratesti", NOW(), NOW()),
            (33, "Beltiug","Sandra", NOW(), NOW()),
            (33, "Berveni","Lucaceni", NOW(), NOW()),
            (33, "Bixad","Boinesti", NOW(), NOW()),
            (33, "Bixad","Trip", NOW(), NOW()),
            (33, "Bogdand","Babta", NOW(), NOW()),
            (33, "Bogdand","Corund", NOW(), NOW()),
            (33, "Bogdand","Ser", NOW(), NOW()),
            (33, "Botiz","Agris", NOW(), NOW()),
            (33, "Botiz","Ciuperceni", NOW(), NOW()),
            (33, "Calinesti-Oas","Coca", NOW(), NOW()),
            (33, "Calinesti-Oas","Lechinta", NOW(), NOW()),
            (33, "Calinesti-Oas","Pasunea Mare", NOW(), NOW()),
            (33, "Carei","Ianculesti", NOW(), NOW()),
            (33, "Cauas","Ady Endre", NOW(), NOW()),
            (33, "Cauas","Ghenci", NOW(), NOW()),
            (33, "Cauas","Ghilesti", NOW(), NOW()),
            (33, "Cauas","Hotoan", NOW(), NOW()),
            (33, "Cauas","Radulesti", NOW(), NOW()),
            (33, "Cehal","Cehalut", NOW(), NOW()),
            (33, "Cehal","Orbau", NOW(), NOW()),
            (33, "Certeze","Huta Certeze", NOW(), NOW()),
            (33, "Certeze","Moiseni", NOW(), NOW()),
            (33, "Craidorolt","Criseni", NOW(), NOW()),
            (33, "Craidorolt","Eriu Sancrai", NOW(), NOW()),
            (33, "Craidorolt","Satu Mic", NOW(), NOW()),
            (33, "Craidorolt","Teghea", NOW(), NOW()),
            (33, "Crucisor","Iegheriste", NOW(), NOW()),
            (33, "Crucisor","Poiana Codrului", NOW(), NOW()),
            (33, "Culciu","Apateu", NOW(), NOW()),
            (33, "Culciu","Corod", NOW(), NOW()),
            (33, "Culciu","Culciu Mare", NOW(), NOW()),
            (33, "Culciu","Culciu Mic", NOW(), NOW()),
            (33, "Culciu","Caraseu", NOW(), NOW()),
            (33, "Culciu","Lipau", NOW(), NOW()),
            (33, "Doba","Boghis", NOW(), NOW()),
            (33, "Doba","Dacia", NOW(), NOW()),
            (33, "Doba","Paulian", NOW(), NOW()),
            (33, "Doba","Traian", NOW(), NOW()),
            (33, "Dorolt","Atea", NOW(), NOW()),
            (33, "Dorolt","Dara", NOW(), NOW()),
            (33, "Dorolt","Petea", NOW(), NOW()),
            (33, "Halmeu","Babesti", NOW(), NOW()),
            (33, "Halmeu","Cidreag", NOW(), NOW()),
            (33, "Halmeu","Dobolt", NOW(), NOW()),
            (33, "Halmeu","Halmeu Vii", NOW(), NOW()),
            (33, "Halmeu","Mesteacan", NOW(), NOW()),
            (33, "Halmeu","Porumbesti", NOW(), NOW()),
            (33, "Hodod","Giurtelecu Hododului", NOW(), NOW()),
            (33, "Hodod","Lelei", NOW(), NOW()),
            (33, "Hodod","Nadisu Hododului", NOW(), NOW()),
            (33, "Homoroade","Chilia", NOW(), NOW()),
            (33, "Homoroade","Homorodu de Jos", NOW(), NOW()),
            (33, "Homoroade","Homorodu de Mijloc", NOW(), NOW()),
            (33, "Homoroade","Homorodu de Sus", NOW(), NOW()),
            (33, "Homoroade","Necopoi", NOW(), NOW()),
            (33, "Homoroade","Solduba", NOW(), NOW()),
            (33, "Lazuri","Bercu", NOW(), NOW()),
            (33, "Lazuri","Nisipeni", NOW(), NOW()),
            (33, "Lazuri","Noroieni", NOW(), NOW()),
            (33, "Lazuri","Peles", NOW(), NOW()),
            (33, "Lazuri","Pelisor", NOW(), NOW()),
            (33, "Livada","Adrian", NOW(), NOW()),
            (33, "Livada","Dumbrava", NOW(), NOW()),
            (33, "Livada","Livada Mica", NOW(), NOW()),
            (33, "Mediesu Aurit","Babasesti", NOW(), NOW()),
            (33, "Mediesu Aurit","Iojib", NOW(), NOW()),
            (33, "Mediesu Aurit","Medies Raturi", NOW(), NOW()),
            (33, "Mediesu Aurit","Medies Vii", NOW(), NOW()),
            (33, "Mediesu Aurit","Potau", NOW(), NOW()),
            (33, "Mediesu Aurit","Romanesti", NOW(), NOW()),
            (33, "Micula","Bercu Nou", NOW(), NOW()),
            (33, "Micula","Micula Noua", NOW(), NOW()),
            (33, "Moftin","Domanesti", NOW(), NOW()),
            (33, "Moftin","Ghilvaci", NOW(), NOW()),
            (33, "Moftin","Ghirolt", NOW(), NOW()),
            (33, "Moftin","Istrau", NOW(), NOW()),
            (33, "Moftin","Moftinu Mare", NOW(), NOW()),
            (33, "Moftin","Moftinu Mic", NOW(), NOW()),
            (33, "Moftin","Sanmiclaus", NOW(), NOW()),
            (33, "Negresti-Oas","Luna", NOW(), NOW()),
            (33, "Negresti-Oas","Tur", NOW(), NOW()),
            (33, "Odoreu","Berindan", NOW(), NOW()),
            (33, "Odoreu","Cucu", NOW(), NOW()),
            (33, "Odoreu","Eteni", NOW(), NOW()),
            (33, "Odoreu","Martinesti", NOW(), NOW()),
            (33, "Odoreu","Vanatoresti", NOW(), NOW()),
            (33, "Orasu Nou","Orasu Nou-Vii", NOW(), NOW()),
            (33, "Orasu Nou","Prilog", NOW(), NOW()),
            (33, "Orasu Nou","Prilog Vii", NOW(), NOW()),
            (33, "Orasu Nou","Racsa", NOW(), NOW()),
            (33, "Orasu Nou","Racsa Vii", NOW(), NOW()),
            (33, "Orasu Nou","Remetea Oasului", NOW(), NOW()),
            (33, "Paulesti","Amati", NOW(), NOW()),
            (33, "Paulesti","Ambud", NOW(), NOW()),
            (33, "Paulesti","Hrip", NOW(), NOW()),
            (33, "Paulesti","Petin", NOW(), NOW()),
            (33, "Paulesti","Ruseni", NOW(), NOW()),
            (33, "Petresti","Dindestiu Mic", NOW(), NOW()),
            (33, "Pir","Piru Nou", NOW(), NOW()),
            (33, "Pir","Sarvazel", NOW(), NOW()),
            (33, "Piscolt","Resighea", NOW(), NOW()),
            (33, "Piscolt","Scarisoara Noua", NOW(), NOW()),
            (33, "Pomi","Aciua", NOW(), NOW()),
            (33, "Pomi","Bicau", NOW(), NOW()),
            (33, "Pomi","Borlesti", NOW(), NOW()),
            (33, "Sacaseni","Chegea", NOW(), NOW()),
            (33, "Sanislau","Berea", NOW(), NOW()),
            (33, "Sanislau","Ciumesti", NOW(), NOW()),
            (33, "Sanislau","Horea", NOW(), NOW()),
            (33, "Sanislau","Marna Noua", NOW(), NOW()),
            (33, "Sanislau","Viisoara", NOW(), NOW()),
            (33, "Santau","Chereusa", NOW(), NOW()),
            (33, "Santau","Sudurau", NOW(), NOW()),
            (33, "Satu Mare","Satmarel", NOW(), NOW()),
            (33, "Sauca","Becheni", NOW(), NOW()),
            (33, "Sauca","Cean", NOW(), NOW()),
            (33, "Sauca","Chisau", NOW(), NOW()),
            (33, "Sauca","Silvas", NOW(), NOW()),
            (33, "Socond","Cuta", NOW(), NOW()),
            (33, "Socond","Hodisa", NOW(), NOW()),
            (33, "Socond","Soconzel", NOW(), NOW()),
            (33, "Socond","Stana", NOW(), NOW()),
            (33, "Supur","Dobra", NOW(), NOW()),
            (33, "Supur","Giorocuta", NOW(), NOW()),
            (33, "Supur","Hurezu Mare", NOW(), NOW()),
            (33, "Supur","Racova", NOW(), NOW()),
            (33, "Supur","Secheresa", NOW(), NOW()),
            (33, "Supur","Supuru de Jos", NOW(), NOW()),
            (33, "Supur","Supuru de Sus", NOW(), NOW()),
            (33, "Tarna Mare","Bocicau", NOW(), NOW()),
            (33, "Tarna Mare","Valea Seaca", NOW(), NOW()),
            (33, "Tarna Mare","Vagas", NOW(), NOW()),
            (33, "Tarsolt","Aliceni", NOW(), NOW()),
            (33, "Tasnad","Blaja", NOW(), NOW()),
            (33, "Tasnad","Cig", NOW(), NOW()),
            (33, "Tasnad","Ratiu", NOW(), NOW()),
            (33, "Tasnad","Sarauad", NOW(), NOW()),
            (33, "Tasnad","Valea Morii", NOW(), NOW()),
            (33, "Terebesti","Aliza", NOW(), NOW()),
            (33, "Terebesti","Gelu", NOW(), NOW()),
            (33, "Terebesti","Piscari", NOW(), NOW()),
            (33, "Tiream","Portita", NOW(), NOW()),
            (33, "Tiream","Vezendiu", NOW(), NOW()),
            (33, "Turt","Gherta Mare", NOW(), NOW()),
            (33, "Turt","Turt Bai", NOW(), NOW()),
            (33, "Turulung","Draguseni", NOW(), NOW()),
            (33, "Turulung","Turulung Vii", NOW(), NOW()),
            (33, "Urziceni","Urziceni Padure", NOW(), NOW()),
            (33, "Valea Vinului","Marius", NOW(), NOW()),
            (33, "Valea Vinului","Rosiori", NOW(), NOW()),
            (33, "Valea Vinului","Sai", NOW(), NOW()),
            (33, "Vetis","Decebal", NOW(), NOW()),
            (33, "Vetis","Oar", NOW(), NOW()),
            (33, "Viile Satu Mare","Cionchesti", NOW(), NOW()),
            (33, "Viile Satu Mare","Medisa", NOW(), NOW()),
            (33, "Viile Satu Mare","Tireac", NOW(), NOW()),
            (33, "Viile Satu Mare","Tataresti", NOW(), NOW())
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
        $sql = 'DELETE FROM localities WHERE county_id=33;';
        DB::connection()->getPdo()->exec($sql);
    }
}
