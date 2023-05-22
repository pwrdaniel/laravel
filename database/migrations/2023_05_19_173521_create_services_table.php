<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->enum('type', ['Avdio, foto, video storitve',
            'Avto-moto',
            'Cenitve',
            'Cvetličarstvo, vrtnarstvo',
            'Čistilni servis',
            'Dimnikarstvo',
            'Elektro',
            'Finančne storitve',
            'Glasba',
            'Gostinstvo, gastronomija',
            'Gozdarske storitve',
            'Gradbene storitve',
            'Grafika, Tiskarstvo',
            'Izobraževanje',
            'Lepota, zdravje',
            'Nepremičninske storitve',
            'Oblačila, obutev',
            'Oglaševanje',
            'Pogrebne storitve',
            'Poroke, dogodki, sejmi',
            'Pravne storitve',
            'Prevajanje, lektoriranje',
            'Računalniške storitve',
            'Radiostezija',
            'Rekreacija, šport',
            'Razno',
            'Servis',
            'Storitve ostalo',
            'Svečar',
            'Svetovanje',
            'Teambuilding',
            'Telekomunikacije',
            'Transport, logistika',
            'Turizem',
            'Vedeževanje',
            'Vse za dom',
            'Vse za otroka',
            'Zasebni stiki',
            'Zdravstvene storitve',
            'Zlatarstvo, graverstvo, urarstvo',
            'Živali']);
            $table->string('title', 65);
            $table->decimal('price', 6,2)->nullable();
            $table->enum('region', ['Gorenjska',
            'Goriška',
            'Jugovzhodna Slovenija',
            'Koroška',
            'Notranjsko-kraška',
            'Obalno-kraška',
            'Osrednjeslovenska',
            'Podravska',
            'Pomurska',
            'Posavska',
            'Primorsko-notranjska',
            'Savinjska',
            'Zasavska']);
            $table->enum('municipality', ['Ajdovščina',
            'Ankaran',
            'Apače',
            'Beltinci',
            'Benedikt',
            'Bistrica ob Sotli',
            'Bled',
            'Bloke',
            'Bohinj',
            'Borovnica',
            'Bovec',
            'Braslovče',
            'Brda',
            'Brezovica',
            'Brežice',
            'Cankova',
            'Cerknica',
            'Cerkno',
            'Cerkvenjak',
            'Cirkulane',
            'Črenšovci',
            'Črna na Koroškem',
            'Črnomelj',
            'Destrnik',
            'Divača',
            'Dobje',
            'Dobrepolje',
            'Dobrna',
            'Dobrova-Polhov Gradec',
            'Dobrovnik',
            'Dol pri Ljubljani',
            'Dolenjske Toplice',
            'Domžale',
            'Dornava',
            'Dravograd',
            'Duplek',
            'Gorenja vas-Poljane',
            'Gorišnica',
            'Gorje',
            'Gornja Radgona',
            'Gornji Grad',
            'Gornji Petrovci',
            'Grad',
            'Grosuplje',
            'Hajdina',
            'Hoče-Slivnica',
            'Hodoš',
            'Horjul',
            'Hrastnik',
            'Hrpelje-Kozina',
            'Idrija',
            'Ig',
            'Ilirska Bistrica',
            'Ivančna Gorica',
            'Izola',
            'Jesenice',
            'Jezersko',
            'Juršinci',
            'Kamnik',
            'Kanal ob Soči',
            'Kidričevo',
            'Kobarid',
            'Kobilje',
            'Kočevje',
            'Komen',
            'Komenda',
            'Koper',
            'Kostanjevica na Krki',
            'Kostel',
            'Kozje',
            'Kranj',
            'Kranjska Gora',
            'Križevci',
            'Krško',
            'Kungota',
            'Kuzma',
            'Laško',
            'Lenart',
            'Lendava',
            'Litija',
            'Ljubljana',
            'Ljubno',
            'Ljutomer',
            'Log-Dragomer',
            'Logatec',
            'Lovrenc na Pohorju',
            'Luče',
            'Lukovica',
            'Majšperk',
            'Makole',
            'Maribor',
            'Markovci',
            'Medvode',
            'Mengeš',
            'Metlika',
            'Mežica',
            'Miklavž na Dravskem Polju',
            'Miren-Kostanjevica',
            'Mirna Peč',
            'Mislinja',
            'Mokronog-Trebelno',
            'Moravče',
            'Moravske Toplice',
            'Mozirje',
            'Murska Sobota',
            'Muta',
            'Naklo',
            'Nazarje',
            'Nova Gorica',
            'Novo mesto',
            'Odranci',
            'Oplotnica',
            'Ormož',
            'Osilnica',
            'Pesnica',
            'Piran',
            'Pivka',
            'Podčetrtek',
            'Podlehnik',
            'Podvelka',
            'Poljčane',
            'Polzela',
            'Postojna',
            'Prebold',
            'Preddvor',
            'Prevalje',
            'Ptuj',
            'Puconci',
            'Rače-Fram',
            'Radeče',
            'Radenci',
            'Radlje ob Dravi',
            'Radovljica',
            'Ravne na Koroškem',
            'Razkrižje',
            'Rečica ob Savinji',
            'Renče-Vogrsko',
            'Ribnica',
            'Ribnica na Pohorju',
            'Rogaška Slatina',
            'Rogašovci',
            'Rogatec',
            'Ruše',
            'Selnica ob Dravi',
            'Semič',
            'Sevnica',
            'Sežana',
            'Slovenj Gradec',
            'Slovenska Bistrica',
            'Slovenske Konjice',
            'Sodražica',
            'Solčava',
            'Središče ob Dravi',
            'Straža',
            'Sveta Ana',
            'Sveta Trojica v Slovenskih Goricah',
            'Sveti Andraž v Slovenskih Goricah',
            'Sveti Jurij ob Ščavnici',
            'Sveti Jurij v Slovenskih Goricah',
            'Sveti Tomaž',
            'Tabor',
            'Tišina',
            'Tolmin',
            'Trbovlje',
            'Trebnje',
            'Trnovska Vas',
            'Tržič',
            'Turnišče',
            'Velenje',
            'Veljavje',
            'Velikovec',
            'Velika Nedelja',
            'Velika Polana',
            'Veliko Mlačevo',
            'Veliko Ubeljsko',
            'Veržej',
            'Videm',
            'Vipava',
            'Vitanje',
            'Vodice',
            'Vojnik',
            'Vransko',
            'Vrhnika',
            'Vuzenica',
            'Zagorje ob Savi',
            'Zavrč',
            'Zgornja Besnica',
            'Zgornja Kungota',
            'Zgornja Ložnica',
            'Zgornja Velka',
            'Zgornje Gorje',
            'Zgornje Jezersko',
            'Zgornje Pirniče',
            'Zgornje Škofije',
            'Zreče',
            'Žalec',
            'Železniki',
            'Žetale',
            'Žiri',
            'Žirovnica',
            'Žužemberk'
        ])->nullable();
            $table->string('city', 25);
            $table->string('description');
            $table->string('url', 63)->nullable();
            $table->string('phone', 12);
            $table->string('email', 64);
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
};
