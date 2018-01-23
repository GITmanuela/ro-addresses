<?php

use Illuminate\Database\Migrations\Migration;

class InsertAllLocalitiesForSB extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $sql = 'INSERT INTO localities (county_id, township, name, created_at, updated_at) VALUES
            (35, "","Agnita", NOW(), NOW()),
            (35, "","Altina", NOW(), NOW()),
            (35, "","Apoldu de Jos", NOW(), NOW()),
            (35, "","Arpasu de Jos", NOW(), NOW()),
            (35, "","Avrig", NOW(), NOW()),
            (35, "","Axente Sever", NOW(), NOW()),
            (35, "","Atel", NOW(), NOW()),
            (35, "","Bazna", NOW(), NOW()),
            (35, "","Biertan", NOW(), NOW()),
            (35, "","Blajel", NOW(), NOW()),
            (35, "","Brateiu", NOW(), NOW()),
            (35, "","Bruiu", NOW(), NOW()),
            (35, "","Bradeni", NOW(), NOW()),
            (35, "","Chirpar", NOW(), NOW()),
            (35, "","Cisnadie", NOW(), NOW()),
            (35, "","Copsa Mica", NOW(), NOW()),
            (35, "","Cristian", NOW(), NOW()),
            (35, "","Carta", NOW(), NOW()),
            (35, "","Cartisoara", NOW(), NOW()),
            (35, "","Dumbraveni", NOW(), NOW()),
            (35, "","Darlos", NOW(), NOW()),
            (35, "","Gura Raului", NOW(), NOW()),
            (35, "","Hoghilag", NOW(), NOW()),
            (35, "","Iacobeni", NOW(), NOW()),
            (35, "","Jina", NOW(), NOW()),
            (35, "","Laslea", NOW(), NOW()),
            (35, "","Loamnes", NOW(), NOW()),
            (35, "","Ludos", NOW(), NOW()),
            (35, "","Marpod", NOW(), NOW()),
            (35, "","Medias", NOW(), NOW()),
            (35, "","Merghindeal", NOW(), NOW()),
            (35, "","Micasasa", NOW(), NOW()),
            (35, "","Miercurea Sibiului", NOW(), NOW()),
            (35, "","Mihaileni", NOW(), NOW()),
            (35, "","Mosna", NOW(), NOW()),
            (35, "","Nocrich", NOW(), NOW()),
            (35, "","Ocna Sibiului", NOW(), NOW()),
            (35, "","Orlat", NOW(), NOW()),
            (35, "","Poiana Sibiului", NOW(), NOW()),
            (35, "","Poplaca", NOW(), NOW()),
            (35, "","Porumbacu de Jos", NOW(), NOW()),
            (35, "","Pauca", NOW(), NOW()),
            (35, "","Racovita", NOW(), NOW()),
            (35, "","Rosia", NOW(), NOW()),
            (35, "","Rau Sadului", NOW(), NOW()),
            (35, "","Rasinari", NOW(), NOW()),
            (35, "","Sadu", NOW(), NOW()),
            (35, "","Sibiu", NOW(), NOW()),
            (35, "","Slimnic", NOW(), NOW()),
            (35, "","Saliste", NOW(), NOW()),
            (35, "","Tilisca", NOW(), NOW()),
            (35, "","Turnu Rosu", NOW(), NOW()),
            (35, "","Tarnava", NOW(), NOW()),
            (35, "","Talmaciu", NOW(), NOW()),
            (35, "","Valea Viilor", NOW(), NOW()),
            (35, "","Vurpar", NOW(), NOW()),
            (35, "","Seica Mare", NOW(), NOW()),
            (35, "","Seica Mica", NOW(), NOW()),
            (35, "","Selimbar", NOW(), NOW()),
            (35, "","Sura Mare", NOW(), NOW()),
            (35, "","Sura Mica", NOW(), NOW()),
            (35, "Agnita","Coves", NOW(), NOW()),
            (35, "Agnita","Ruja", NOW(), NOW()),
            (35, "Altina","Benesti", NOW(), NOW()),
            (35, "Altina","Ghijasa de Sus", NOW(), NOW()),
            (35, "Apoldu De Jos","Sangatin", NOW(), NOW()),
            (35, "Arpasu De Jos","Arpasu de Sus", NOW(), NOW()),
            (35, "Arpasu De Jos","Noul Roman", NOW(), NOW()),
            (35, "Atel","Alma", NOW(), NOW()),
            (35, "Atel","Dupus", NOW(), NOW()),
            (35, "Atel","Giacas", NOW(), NOW()),
            (35, "Atel","Smig", NOW(), NOW()),
            (35, "Avrig","Bradu", NOW(), NOW()),
            (35, "Avrig","Glamboaca", NOW(), NOW()),
            (35, "Avrig","Marsa", NOW(), NOW()),
            (35, "Avrig","Sacadate", NOW(), NOW()),
            (35, "Axente Sever","Agarbiciu", NOW(), NOW()),
            (35, "Axente Sever","Soala", NOW(), NOW()),
            (35, "Bazna","Boian", NOW(), NOW()),
            (35, "Bazna","Velt", NOW(), NOW()),
            (35, "Biertan","Copsa Mare", NOW(), NOW()),
            (35, "Biertan","Richis", NOW(), NOW()),
            (35, "Birghis","Apos", NOW(), NOW()),
            (35, "Birghis","Barghis", NOW(), NOW()),
            (35, "Birghis","Ighisu Vechi", NOW(), NOW()),
            (35, "Birghis","Pelisor", NOW(), NOW()),
            (35, "Birghis","Vecerd", NOW(), NOW()),
            (35, "Birghis","Zlagna", NOW(), NOW()),
            (35, "Blajel","Paucea", NOW(), NOW()),
            (35, "Blajel","Romanesti", NOW(), NOW()),
            (35, "Bradeni","Retis", NOW(), NOW()),
            (35, "Bradeni","Teline", NOW(), NOW()),
            (35, "Brateiu","Buzd", NOW(), NOW()),
            (35, "Bruiu","Gherdeal", NOW(), NOW()),
            (35, "Bruiu","Somartin", NOW(), NOW()),
            (35, "Carta","Poienita", NOW(), NOW()),
            (35, "Chirpar","Sasaus", NOW(), NOW()),
            (35, "Chirpar","Veseud", NOW(), NOW()),
            (35, "Chirpar","Vard", NOW(), NOW()),
            (35, "Cisnadie","Cisnadioara", NOW(), NOW()),
            (35, "Darlos","Curciu", NOW(), NOW()),
            (35, "Darlos","Valea Lunga", NOW(), NOW()),
            (35, "Dumbraveni","Ernea", NOW(), NOW()),
            (35, "Dumbraveni","Saros pe Tarnave", NOW(), NOW()),
            (35, "Hoghilag","Prod", NOW(), NOW()),
            (35, "Hoghilag","Valchid", NOW(), NOW()),
            (35, "Iacobeni","Movile", NOW(), NOW()),
            (35, "Iacobeni","Netus", NOW(), NOW()),
            (35, "Iacobeni","Noistat", NOW(), NOW()),
            (35, "Iacobeni","Stejarisu", NOW(), NOW()),
            (35, "Laslea","Floresti", NOW(), NOW()),
            (35, "Laslea","Malancrav", NOW(), NOW()),
            (35, "Laslea","Nou Sasesc", NOW(), NOW()),
            (35, "Laslea","Roandola", NOW(), NOW()),
            (35, "Loamnes","Alamor", NOW(), NOW()),
            (35, "Loamnes","Armeni", NOW(), NOW()),
            (35, "Loamnes","Hasag", NOW(), NOW()),
            (35, "Loamnes","Mandra", NOW(), NOW()),
            (35, "Loamnes","Sadinca", NOW(), NOW()),
            (35, "Ludos","Gusu", NOW(), NOW()),
            (35, "Marpod","Ilimbav", NOW(), NOW()),
            (35, "Medias","Ighisu Nou", NOW(), NOW()),
            (35, "Merghindeal","Dealu Frumos", NOW(), NOW()),
            (35, "Micasasa","Chesler", NOW(), NOW()),
            (35, "Micasasa","Valeni", NOW(), NOW()),
            (35, "Micasasa","Tapu", NOW(), NOW()),
            (35, "Miercurea Sibiului","Apoldu de Sus", NOW(), NOW()),
            (35, "Miercurea Sibiului","Dobarca", NOW(), NOW()),
            (35, "Mihaileni","Metis", NOW(), NOW()),
            (35, "Mihaileni","Moardas", NOW(), NOW()),
            (35, "Mihaileni","Ravasel", NOW(), NOW()),
            (35, "Mihaileni","Salcau", NOW(), NOW()),
            (35, "Mosna","Alma Vii", NOW(), NOW()),
            (35, "Mosna","Nemsa", NOW(), NOW()),
            (35, "Nocrich","Fofeldea", NOW(), NOW()),
            (35, "Nocrich","Ghijasa de Jos", NOW(), NOW()),
            (35, "Nocrich","Hosman", NOW(), NOW()),
            (35, "Nocrich","Tichindeal", NOW(), NOW()),
            (35, "Ocna Sibiului","Toparcea", NOW(), NOW()),
            (35, "Pauca","Bogatu Roman", NOW(), NOW()),
            (35, "Pauca","Brosteni", NOW(), NOW()),
            (35, "Pauca","Presaca", NOW(), NOW()),
            (35, "Porumbacu De Jos","Colun", NOW(), NOW()),
            (35, "Porumbacu De Jos","Porumbacu de Sus", NOW(), NOW()),
            (35, "Porumbacu De Jos","Scoreiu", NOW(), NOW()),
            (35, "Porumbacu De Jos","Sarata", NOW(), NOW()),
            (35, "Racovita","Sebesu de Sus", NOW(), NOW()),
            (35, "Rasinari","Prislop", NOW(), NOW()),
            (35, "Rosia","Casolt", NOW(), NOW()),
            (35, "Rosia","Cornatel", NOW(), NOW()),
            (35, "Rosia","Daia", NOW(), NOW()),
            (35, "Rosia","Nou", NOW(), NOW()),
            (35, "Rosia","Nucet", NOW(), NOW()),
            (35, "Saliste","Aciliu", NOW(), NOW()),
            (35, "Saliste","Amnas", NOW(), NOW()),
            (35, "Saliste","Crint", NOW(), NOW()),
            (35, "Saliste","Fantanele", NOW(), NOW()),
            (35, "Saliste","Gales", NOW(), NOW()),
            (35, "Saliste","Mag", NOW(), NOW()),
            (35, "Saliste","Sibiel", NOW(), NOW()),
            (35, "Saliste","Sacel", NOW(), NOW()),
            (35, "Saliste","Vale", NOW(), NOW()),
            (35, "Seica Mare","Boarta", NOW(), NOW()),
            (35, "Seica Mare","Buia", NOW(), NOW()),
            (35, "Seica Mare","Mighindoala", NOW(), NOW()),
            (35, "Seica Mare","Petis", NOW(), NOW()),
            (35, "Seica Mare","Stenea", NOW(), NOW()),
            (35, "Seica Mica","Sorostin", NOW(), NOW()),
            (35, "Selimbar","Bungard", NOW(), NOW()),
            (35, "Selimbar","Mohu", NOW(), NOW()),
            (35, "Selimbar","Vestem", NOW(), NOW()),
            (35, "Sibiu","Paltinis", NOW(), NOW()),
            (35, "Slimnic","Albi", NOW(), NOW()),
            (35, "Slimnic","Padureni", NOW(), NOW()),
            (35, "Slimnic","Rusi", NOW(), NOW()),
            (35, "Slimnic","Veseud", NOW(), NOW()),
            (35, "Sura Mare","Hamba", NOW(), NOW()),
            (35, "Sura Mica","Rusciori", NOW(), NOW()),
            (35, "Talmaciu","Boita", NOW(), NOW()),
            (35, "Talmaciu","Colonia Talmaciu", NOW(), NOW()),
            (35, "Talmaciu","Lazaret", NOW(), NOW()),
            (35, "Talmaciu","Lotrioara", NOW(), NOW()),
            (35, "Talmaciu","Paltin", NOW(), NOW()),
            (35, "Talmaciu","Talmacel", NOW(), NOW()),
            (35, "Tarnava","Colonia Tarnava", NOW(), NOW()),
            (35, "Tilisca","Rod", NOW(), NOW()),
            (35, "Turnu Rosu","Sebesu de Jos", NOW(), NOW()),
            (35, "Valea Viilor","Motis", NOW(), NOW())
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
        $sql = 'DELETE FROM localities WHERE county_id=35;';
        DB::connection()->getPdo()->exec($sql);
    }
}
