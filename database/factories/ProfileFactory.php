<?php

namespace Database\Factories;

use App\Models\Profile;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Profile::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {        
        $lastName = $this->faker->randomElement([
            'Tan','dela Cruz','Bautista','Lim','Villanueva','Chua','Aquino','de Leon','Ong','delos Santos','delos Reyes','delos Angeles','Francisco','Tolentino','Mercado','Soriano','Dizon','Sy','Domingo','del Rosario','Javier','Ocampo','Manalo','Miranda','Yap','Sarmiento','Yu','Pineda','Angeles','Evangelista','Cortez','Ang','Salvador','Salazar','de Jesus','Alcantara','Medina','Espiritu','Sison','Antonio','Rosales','Valencia','Padilla','Corpuz','Concepcion','Fajardo','Manuel','Mariano','Legaspi','Samson','Vergara','Trinidad','Ignacio','de Vera','Atienza','Peralta','Bernardo','Roxas','Guzman','Galang','de Castro','Agustin','Briones','Guevarra','Chavez','Esguerra','Borja','Luna','Robles','Roque','Panganiban','Abad','Mallari','Pangilinan','Estrada','Sevilla','Lao','Austria','Villegas','Gonzaga','Pascua','Asuncion','Zamora','Valenzuela','Arellano','Espinosa','Ilagan','Magno','Tamayo','Beltran','Marasigan','Carlos','Fernando','Gamboa','Estrella','Canlas','Tuazon','Abella','Solis','Rosario','Tiu','Cunanan','Villa','Palma','Natividad','Nicolas','Galvez','Gabriel','Ledesma','Buenaventura','Villamor','Marcelo','Gregorio','Cordero','Carreon','Umali','dela Rosa','Andres','Bartolome','Mateo','Lazaro','Geronimo','Carpio','Baltazar','dela Peña','San Juan','Sales','Ventura','Avila','Lacson','Crisostomo','Custodio','Toledo','Ponce','Velasquez','So','Rey','Clemente','Salcedo','Ng','Punzalan','Ching','Ancheta','Cariño','Sia','Jacinto','Aguirre','Feliciano','Cuevas','Cañete','Manzano','Villar','Constantino','Lucero','Viray','Santillan','Miguel','Ronquillo','Bernal','Borromeo','Franco','Alonzo','Bondoc','Cristobal','Sebastian','Arevalo','Villareal','Alfonso','Camacho','Bernabe','Espina','Pangan','Calderon','Raymundo','Apostol','Bonifacio','Aguila','Castañeda','Samonte','Eugenio','dela Torre','Quinto','Ybañez','Ballesteros','Pablo','Roldan','Cervantes','Teves','Mejia','ustamante','Nepomuceno','Quiambao','Adriano','Espino','del Mundo','Oliveros','Lozada','Dionisio',
        ]);

        $middleName = $this->faker->randomElement([
            'Tan','dela Cruz','Bautista','Lim','Villanueva','Chua','Aquino','de Leon','Ong','delos Santos','delos Reyes','delos Angeles','Francisco','Tolentino','Mercado','Soriano','Dizon','Sy','Domingo','del Rosario','Javier','Ocampo','Manalo','Miranda','Yap','Sarmiento','Yu','Pineda','Angeles','Evangelista','Cortez','Ang','Salvador','Salazar','de Jesus','Alcantara','Medina','Espiritu','Sison','Antonio','Rosales','Valencia','Padilla','Corpuz','Concepcion','Fajardo','Manuel','Mariano','Legaspi','Samson','Vergara','Trinidad','Ignacio','de Vera','Atienza','Peralta','Bernardo','Roxas','Guzman','Galang','de Castro','Agustin','Briones','Guevarra','Chavez','Esguerra','Borja','Luna','Robles','Roque','Panganiban','Abad','Mallari','Pangilinan','Estrada','Sevilla','Lao','Austria','Villegas','Gonzaga','Pascua','Asuncion','Zamora','Valenzuela','Arellano','Espinosa','Ilagan','Magno','Tamayo','Beltran','Marasigan','Carlos','Fernando','Gamboa','Estrella','Canlas','Tuazon','Abella','Solis','Rosario','Tiu','Cunanan','Villa','Palma','Natividad','Nicolas','Galvez','Gabriel','Ledesma','Buenaventura','Villamor','Marcelo','Gregorio','Cordero','Carreon','Umali','dela Rosa','Andres','Bartolome','Mateo','Lazaro','Geronimo','Carpio','Baltazar','dela Peña','San Juan','Sales','Ventura','Avila','Lacson','Crisostomo','Custodio','Toledo','Ponce','Velasquez','So','Rey','Clemente','Salcedo','Ng','Punzalan','Ching','Ancheta','Cariño','Sia','Jacinto','Aguirre','Feliciano','Cuevas','Cañete','Manzano','Villar','Constantino','Lucero','Viray','Santillan','Miguel','Ronquillo','Bernal','Borromeo','Franco','Alonzo','Bondoc','Cristobal','Sebastian','Arevalo','Villareal','Alfonso','Camacho','Bernabe','Espina','Pangan','Calderon','Raymundo','Apostol','Bonifacio','Aguila','Castañeda','Samonte','Eugenio','dela Torre','Quinto','Ybañez','Ballesteros','Pablo','Roldan','Cervantes','Teves','Mejia','ustamante','Nepomuceno','Quiambao','Adriano','Espino','del Mundo','Oliveros','Lozada','Dionisio',
        ]);

        $firstName = $this->faker->randomElement([
            'Maria','Nicole','Patricia','Bianca','Angelica','Christine','Marie','Jane','Grace','Angela','Hannah','Kate','Joyce','Kim','Camille','Bea','Kristine','Anne','Sophia','Valerie','Diana','Ella','Mary','Trisha','Rose','Michelle','Mae','Ana','Aly','Karen','Marian','Clarissa','Aya','Stephanie','Lea','Catherine','Joan','Louise','Alexa','Claire','Faye','Alyssa','Loysa','Aira','Nina','Sofia','Thea','Danielle','Elle','Sarah','Lorraine','Angel','Jan','Eirene','Denise','Andrea','Ruth','Trina','Anna','Ice','Tricia','Pia','Nica','Jilliane','Jean','Yana','Nadine','Mika','Cristine','Danica','Kris','Frances','Julia','Cindy','Jem','Aj','Abby','Kaye','Precious','Irish','Keziah','Cha','Mica','Daniela','Anj','Jeanne','Lyn','Jessica','Pamela','Kyla','Judy','Angelie','Kimberly','Jennly','Cai','Kathleen','Nikki','Isabel','Allie','Vee','Ian','John','Mark','Kevin','Daniel','Joseph','Francis','Jake','Melvin','Angelo','Joshua','Anthony','Adrian','Jr','Christopher','Brian','Jan','Gabriel','Karl','Sean','Jeff','Grant','Ben','Josh','Ivan','Nicholas','Edenjevy','Hans','Ryan','Jeffrey','Jack','Mark Rio','Joel','Ace','Kyle','Carlo','Kim','Michael','Kenneth','Marc','Carl','Clarence','Genesis','Felix','Christian','Nathan','Robert','Justin','Jose Mari','Jim','Peter','Leon','Chris','Paul','Jonathan','Mike','Ken','Jj','Geo','Arvin','Kindred','Ritzer','Brent','Ced','Fau','Exequiel','Carlos','Ronick','Will','Jingco','Ramos','Israel','Rr','Jaymes Thiago','Reuven','French','Jiwan','Philip','Koy','Lyrold','Alfhonse','Pocholo','Kroy','Cally','Geoffrey','Beboy','Kim Philip','Sammy','Faustino','Soren','Kenny','Junrey','Jaber','Kiko','Junhel','Noah','Lee','John Joseph','Marco','Julio',
        ]);

        return [
            'first_name' => $firstName,
            'middle_name' => $middleName,
            'last_name' => $lastName,
            'suffix' => $this->faker->suffix,
            'contact' => $this->faker->e164PhoneNumber,
            'gender' => $this->faker->randomElement(['male', 'female']),
        ];
    }
}
