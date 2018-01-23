<?php

use Illuminate\Database\Migrations\Migration;

class InsertAllLocalitiesForBN extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $sql = 'INSERT INTO localities (county_id, township, name, created_at, updated_at) VALUES
            (7, "","Beclean", NOW(), NOW()),
            (7, "","Bistrita", NOW(), NOW()),
            (7, "","Bistrita Bargaului", NOW(), NOW()),
            (7, "","Branistea", NOW(), NOW()),
            (7, "","Budacu de Jos", NOW(), NOW()),
            (7, "","Budesti", NOW(), NOW()),
            (7, "","Chiochis", NOW(), NOW()),
            (7, "","Chiuza", NOW(), NOW()),
            (7, "","Ciceu-Giurgesti", NOW(), NOW()),
            (7, "","Cosbuc", NOW(), NOW()),
            (7, "","Caianu Mic", NOW(), NOW()),
            (7, "","Dumitra", NOW(), NOW()),
            (7, "","Dumitrita", NOW(), NOW()),
            (7, "","Feldru", NOW(), NOW()),
            (7, "","Galatii Bistritei", NOW(), NOW()),
            (7, "","Ilva Mare", NOW(), NOW()),
            (7, "","Ilva Mica", NOW(), NOW()),
            (7, "","Josenii Bargaului", NOW(), NOW()),
            (7, "","Lechinta", NOW(), NOW()),
            (7, "","Lesu", NOW(), NOW()),
            (7, "","Livezile", NOW(), NOW()),
            (7, "","Lunca Ilvei", NOW(), NOW()),
            (7, "","Maieru", NOW(), NOW()),
            (7, "","Matei", NOW(), NOW()),
            (7, "","Micestii de Campie", NOW(), NOW()),
            (7, "","Milas", NOW(), NOW()),
            (7, "","Monor", NOW(), NOW()),
            (7, "","Magura Ilvei", NOW(), NOW()),
            (7, "","Mariselu", NOW(), NOW()),
            (7, "","Negrilesti", NOW(), NOW()),
            (7, "","Nuseni", NOW(), NOW()),
            (7, "","Nasaud", NOW(), NOW()),
            (7, "","Parva", NOW(), NOW()),
            (7, "","Poiana Ilvei", NOW(), NOW()),
            (7, "","Prundu Bargaului", NOW(), NOW()),
            (7, "","Rebra", NOW(), NOW()),
            (7, "","Rebrisoara", NOW(), NOW()),
            (7, "","Rodna", NOW(), NOW()),
            (7, "","Romuli", NOW(), NOW()),
            (7, "","Salva", NOW(), NOW()),
            (7, "","Spermezeu", NOW(), NOW()),
            (7, "","Sangeorz-Bai", NOW(), NOW()),
            (7, "","Teaca", NOW(), NOW()),
            (7, "","Telciu", NOW(), NOW()),
            (7, "","Tiha Bargaului", NOW(), NOW()),
            (7, "","Tarlisua", NOW(), NOW()),
            (7, "","Uriu", NOW(), NOW()),
            (7, "","Urmenis", NOW(), NOW()),
            (7, "","Zagra", NOW(), NOW()),
            (7, "","Sant", NOW(), NOW()),
            (7, "","Sieu", NOW(), NOW()),
            (7, "","Sieu-Magherus", NOW(), NOW()),
            (7, "","Sieu-Odorhei", NOW(), NOW()),
            (7, "","Sieut", NOW(), NOW()),
            (7, "","Sintereag", NOW(), NOW()),
            (7, "Beclean","Coldau", NOW(), NOW()),
            (7, "Beclean","Figa", NOW(), NOW()),
            (7, "Beclean","Rusu de Jos", NOW(), NOW()),
            (7, "Bistrita","Ghinda", NOW(), NOW()),
            (7, "Bistrita","Sigmir", NOW(), NOW()),
            (7, "Bistrita","Slatinita", NOW(), NOW()),
            (7, "Bistrita","Sarata", NOW(), NOW()),
            (7, "Bistrita","Unirea", NOW(), NOW()),
            (7, "Bistrita","Viisoara", NOW(), NOW()),
            (7, "Bistrita Bargaului","Colibita", NOW(), NOW()),
            (7, "Branistea","Ciresoaia", NOW(), NOW()),
            (7, "Branistea","Malut", NOW(), NOW()),
            (7, "Budacu De Jos","Budus", NOW(), NOW()),
            (7, "Budacu De Jos","Jelna", NOW(), NOW()),
            (7, "Budacu De Jos","Monariu", NOW(), NOW()),
            (7, "Budacu De Jos","Simionesti", NOW(), NOW()),
            (7, "Budesti","Budesti-Fanate", NOW(), NOW()),
            (7, "Budesti","Tagu", NOW(), NOW()),
            (7, "Budesti","Tagsoru", NOW(), NOW()),
            (7, "Caianu Mic","Ciceu-Poieni", NOW(), NOW()),
            (7, "Caianu Mic","Caianu Mare", NOW(), NOW()),
            (7, "Caianu Mic","Dobric", NOW(), NOW()),
            (7, "Caianu Mic","Dobricel", NOW(), NOW()),
            (7, "Caianu Mic","Dumbravita", NOW(), NOW()),
            (7, "Cetate","Orheiu Bistritei", NOW(), NOW()),
            (7, "Cetate","Petris", NOW(), NOW()),
            (7, "Cetate","Satu Nou", NOW(), NOW()),
            (7, "Chiochis","Apatiu", NOW(), NOW()),
            (7, "Chiochis","Bozies", NOW(), NOW()),
            (7, "Chiochis","Buza Catun", NOW(), NOW()),
            (7, "Chiochis","Chetiu", NOW(), NOW()),
            (7, "Chiochis","Jimbor", NOW(), NOW()),
            (7, "Chiochis","Manic", NOW(), NOW()),
            (7, "Chiochis","Strugureni", NOW(), NOW()),
            (7, "Chiochis","Sannicoara", NOW(), NOW()),
            (7, "Chiochis","Tentea", NOW(), NOW()),
            (7, "Chiuza","Mires", NOW(), NOW()),
            (7, "Chiuza","Piatra", NOW(), NOW()),
            (7, "Chiuza","Sasarm", NOW(), NOW()),
            (7, "Ciceu-Giurgesti","Dumbraveni", NOW(), NOW()),
            (7, "Cosbuc","Bichigiu", NOW(), NOW()),
            (7, "Dumitra","Cepari", NOW(), NOW()),
            (7, "Dumitra","Tarpiu", NOW(), NOW()),
            (7, "Dumitrita","Budacu de Sus", NOW(), NOW()),
            (7, "Dumitrita","Ragla", NOW(), NOW()),
            (7, "Feldru","Nepos", NOW(), NOW()),
            (7, "Galatii Bistritei","Albestii Bistritei", NOW(), NOW()),
            (7, "Galatii Bistritei","Dipsa", NOW(), NOW()),
            (7, "Galatii Bistritei","Herina", NOW(), NOW()),
            (7, "Galatii Bistritei","Tonciu", NOW(), NOW()),
            (7, "Ilva Mare","Ivaneasa", NOW(), NOW()),
            (7, "Josenii Bargaului","Mijlocenii Bargaului", NOW(), NOW()),
            (7, "Josenii Bargaului","Rusu Bargaului", NOW(), NOW()),
            (7, "Josenii Bargaului","Stramba", NOW(), NOW()),
            (7, "Lechinta","Bungard", NOW(), NOW()),
            (7, "Lechinta","Chirales", NOW(), NOW()),
            (7, "Lechinta","Sangeorzu Nou", NOW(), NOW()),
            (7, "Lechinta","Saniacob", NOW(), NOW()),
            (7, "Lechinta","Vermes", NOW(), NOW()),
            (7, "Lechinta","Tigau", NOW(), NOW()),
            (7, "Lesu","Lunca Lesului", NOW(), NOW()),
            (7, "Livezile","Cusma", NOW(), NOW()),
            (7, "Livezile","Dorolea", NOW(), NOW()),
            (7, "Livezile","Dumbrava", NOW(), NOW()),
            (7, "Livezile","Valea Poenii", NOW(), NOW()),
            (7, "Magura Ilvei","Arsita", NOW(), NOW()),
            (7, "Maieru","Anies", NOW(), NOW()),
            (7, "Mariselu","Barla", NOW(), NOW()),
            (7, "Mariselu","Domnesti", NOW(), NOW()),
            (7, "Mariselu","Jeica", NOW(), NOW()),
            (7, "Mariselu","Magurele", NOW(), NOW()),
            (7, "Mariselu","Neteni", NOW(), NOW()),
            (7, "Mariselu","Santioana", NOW(), NOW()),
            (7, "Matei","Bidiu", NOW(), NOW()),
            (7, "Matei","Corvinesti", NOW(), NOW()),
            (7, "Matei","Enciu", NOW(), NOW()),
            (7, "Matei","Fantanele", NOW(), NOW()),
            (7, "Matei","Morut", NOW(), NOW()),
            (7, "Micestii De Campie","Fantanita", NOW(), NOW()),
            (7, "Micestii De Campie","Visuia", NOW(), NOW()),
            (7, "Milas","Comlod", NOW(), NOW()),
            (7, "Milas","Dupa Deal", NOW(), NOW()),
            (7, "Milas","Ghemes", NOW(), NOW()),
            (7, "Milas","Hirean", NOW(), NOW()),
            (7, "Milas","Orosfaia", NOW(), NOW()),
            (7, "Monor","Gledin", NOW(), NOW()),
            (7, "Nasaud","Liviu Rebreanu", NOW(), NOW()),
            (7, "Nasaud","Lusca", NOW(), NOW()),
            (7, "Negrilesti","Breaza", NOW(), NOW()),
            (7, "Negrilesti","Purcarete", NOW(), NOW()),
            (7, "Nimigea","Floresti", NOW(), NOW()),
            (7, "Nimigea","Mintiu", NOW(), NOW()),
            (7, "Nimigea","Mititei", NOW(), NOW()),
            (7, "Nimigea","Mocod", NOW(), NOW()),
            (7, "Nimigea","Mogoseni", NOW(), NOW()),
            (7, "Nimigea","Nimigea de Jos", NOW(), NOW()),
            (7, "Nimigea","Nimigea de Sus", NOW(), NOW()),
            (7, "Nimigea","Taure", NOW(), NOW()),
            (7, "Nuseni","Beudiu", NOW(), NOW()),
            (7, "Nuseni","Dumbrava", NOW(), NOW()),
            (7, "Nuseni","Feleac", NOW(), NOW()),
            (7, "Nuseni","Malin", NOW(), NOW()),
            (7, "Nuseni","Rusu de Sus", NOW(), NOW()),
            (7, "Nuseni","Vita", NOW(), NOW()),
            (7, "Petru Rares","Bata", NOW(), NOW()),
            (7, "Petru Rares","Ciceu-Corabia", NOW(), NOW()),
            (7, "Petru Rares","Ciceu-Mihaiesti", NOW(), NOW()),
            (7, "Petru Rares","Lelesti", NOW(), NOW()),
            (7, "Petru Rares","Reteag", NOW(), NOW()),
            (7, "Prundu Bargaului","Susenii Bargaului", NOW(), NOW()),
            (7, "Rebrisoara","Gersa I", NOW(), NOW()),
            (7, "Rebrisoara","Gersa Ii", NOW(), NOW()),
            (7, "Rebrisoara","Poderei", NOW(), NOW()),
            (7, "Rodna","Valea Vinului", NOW(), NOW()),
            (7, "Romuli","Dealu Stefanitei", NOW(), NOW()),
            (7, "Salva","Runcu Salvei", NOW(), NOW()),
            (7, "Sangeorz-Bai","Cormaia", NOW(), NOW()),
            (7, "Sangeorz-Bai","Valea Borcutului", NOW(), NOW()),
            (7, "Sanmihaiu De Cimpie","Brateni", NOW(), NOW()),
            (7, "Sanmihaiu De Cimpie","La Curte", NOW(), NOW()),
            (7, "Sanmihaiu De Cimpie","Stupini", NOW(), NOW()),
            (7, "Sanmihaiu De Cimpie","Sanmihaiu de Campie", NOW(), NOW()),
            (7, "Sanmihaiu De Cimpie","Salcuta", NOW(), NOW()),
            (7, "Sanmihaiu De Cimpie","Zoreni", NOW(), NOW()),
            (7, "Sant","Valea Mare", NOW(), NOW()),
            (7, "Sieu","Ardan", NOW(), NOW()),
            (7, "Sieu","Posmus", NOW(), NOW()),
            (7, "Sieu","Soimus", NOW(), NOW()),
            (7, "Sieu-Magherus","Arcalia", NOW(), NOW()),
            (7, "Sieu-Magherus","Chintelnic", NOW(), NOW()),
            (7, "Sieu-Magherus","Crainimat", NOW(), NOW()),
            (7, "Sieu-Magherus","Podirei", NOW(), NOW()),
            (7, "Sieu-Magherus","Saratel", NOW(), NOW()),
            (7, "Sieu-Magherus","Valea Magherusului", NOW(), NOW()),
            (7, "Sieu-Odorhei","Agrisu de Jos", NOW(), NOW()),
            (7, "Sieu-Odorhei","Agrisu de Sus", NOW(), NOW()),
            (7, "Sieu-Odorhei","Bretea", NOW(), NOW()),
            (7, "Sieu-Odorhei","Coasta", NOW(), NOW()),
            (7, "Sieu-Odorhei","Cristur-Sieu", NOW(), NOW()),
            (7, "Sieu-Odorhei","Sirioara", NOW(), NOW()),
            (7, "Sieut","Lunca", NOW(), NOW()),
            (7, "Sieut","Rustior", NOW(), NOW()),
            (7, "Sieut","Sebis", NOW(), NOW()),
            (7, "Silivasu De Cimpie","Draga", NOW(), NOW()),
            (7, "Silivasu De Cimpie","Fanatele Silivasului", NOW(), NOW()),
            (7, "Silivasu De Cimpie","Porumbenii", NOW(), NOW()),
            (7, "Silivasu De Cimpie","Silivasu de Campie", NOW(), NOW()),
            (7, "Sintereag","Blajenii de Jos", NOW(), NOW()),
            (7, "Sintereag","Blajenii de Sus", NOW(), NOW()),
            (7, "Sintereag","Caila", NOW(), NOW()),
            (7, "Sintereag","Cociu", NOW(), NOW()),
            (7, "Sintereag","Sieu-Sfantu", NOW(), NOW()),
            (7, "Sintereag","Sintereag-Gara", NOW(), NOW()),
            (7, "Spermezeu","Halmasau", NOW(), NOW()),
            (7, "Spermezeu","Lunca Borlesei", NOW(), NOW()),
            (7, "Spermezeu","Paltineasa", NOW(), NOW()),
            (7, "Spermezeu","Sita", NOW(), NOW()),
            (7, "Spermezeu","Sesuri Spermezeu-Vale", NOW(), NOW()),
            (7, "Tarlisua","Agries", NOW(), NOW()),
            (7, "Tarlisua","Agriesel", NOW(), NOW()),
            (7, "Tarlisua","Borleasa", NOW(), NOW()),
            (7, "Tarlisua","Cireasi", NOW(), NOW()),
            (7, "Tarlisua","Lunca Sateasca", NOW(), NOW()),
            (7, "Tarlisua","Moliset", NOW(), NOW()),
            (7, "Tarlisua","Oarzina", NOW(), NOW()),
            (7, "Tarlisua","Racatesu", NOW(), NOW()),
            (7, "Tarlisua","Sendroaia", NOW(), NOW()),
            (7, "Teaca","Archiud", NOW(), NOW()),
            (7, "Teaca","Budurleni", NOW(), NOW()),
            (7, "Teaca","Ocnita", NOW(), NOW()),
            (7, "Teaca","Pinticu", NOW(), NOW()),
            (7, "Teaca","Viile Tecii", NOW(), NOW()),
            (7, "Telciu","Fiad", NOW(), NOW()),
            (7, "Telciu","Telcisor", NOW(), NOW()),
            (7, "Tiha Bargaului","Ciosa", NOW(), NOW()),
            (7, "Tiha Bargaului","Muresenii Bargaului", NOW(), NOW()),
            (7, "Tiha Bargaului","Piatra Fantanele", NOW(), NOW()),
            (7, "Tiha Bargaului","Tureac", NOW(), NOW()),
            (7, "Uriu","Cristestii Ciceului", NOW(), NOW()),
            (7, "Uriu","Hasmasu Ciceului", NOW(), NOW()),
            (7, "Uriu","Ilisua", NOW(), NOW()),
            (7, "Urmenis","Coseriu", NOW(), NOW()),
            (7, "Urmenis","Camp", NOW(), NOW()),
            (7, "Urmenis","Delureni", NOW(), NOW()),
            (7, "Urmenis","Fanate", NOW(), NOW()),
            (7, "Urmenis","Podenii", NOW(), NOW()),
            (7, "Urmenis","Scoabe", NOW(), NOW()),
            (7, "Urmenis","Valea", NOW(), NOW()),
            (7, "Urmenis","Valea Mare", NOW(), NOW()),
            (7, "Urmenis","Sopteriu", NOW(), NOW()),
            (7, "Zagra","Alunisul", NOW(), NOW()),
            (7, "Zagra","Perisor", NOW(), NOW()),
            (7, "Zagra","Poienile Zagrei", NOW(), NOW()),
            (7, "Zagra","Suplai", NOW(), NOW())

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
        $sql = 'DELETE FROM localities WHERE county_id=7;';
        DB::connection()->getPdo()->exec($sql);
    }
}
