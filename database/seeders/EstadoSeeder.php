<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estados')->insert(array (
            0 =>
            array (
                //'est_id' => '1',
                'est_nome' => 'Acre',
                'est_id' => 'AC',
                // 'iso' => '12',
                // 'slug' => 'acre',
                // 'population' => '816687',
            ),
            1 =>
            array (
                //'est_id' => '2',
                'est_nome' => 'Alagoas',
                'est_id' => 'AL',
                // 'iso' => '27',
                // 'slug' => 'alagoas',
                // 'population' => '3358963',
            ),
            2 =>
            array (
                //'est_id' => '3',
                'est_nome' => 'Amazonas',
                'est_id' => 'AM',
                // 'iso' => '13',
                // 'slug' => 'amazonas',
                // 'population' => '4001667',
            ),
            3 =>
            array (
                //'est_id' => '4',
                'est_nome' => 'Amapá',
                'est_id' => 'AP',
                // 'iso' => '16',
                // 'slug' => 'amapa',
                // 'population' => '782295',
            ),
            4 =>
            array (
                //'est_id' => '5',
                'est_nome' => 'Bahia',
                'est_id' => 'BA',
                // 'iso' => '29',
                // 'slug' => 'bahia',
                // 'population' => '15276566',
            ),
            5 =>
            array (
                //'est_id' => '6',
                'est_nome' => 'Ceará',
                 'est_id' => 'CE',
                // 'iso' => '23',
                // 'slug' => 'ceara',
                // 'population' => '8963663',
            ),
            6 =>
            array (
                //'est_id' => '7',
                'est_nome' => 'Distrito Federal',
                 'est_id' => 'DF',
                // 'iso' => '53',
                // 'slug' => 'distrito-federal',
                // 'population' => '2977216',
            ),
            7 =>
            array (
                //'est_id' => '8',
                'est_nome' => 'Espírito Santo',
                 'est_id' => 'ES',
                // 'iso' => '32',
                // 'slug' => 'espirito-santo',
                // 'population' => '3973697',
            ),
            8 =>
            array (
                //'est_id' => '9',
                'est_nome' => 'Goiás',
                'est_id' => 'GO',
                // 'iso' => '52',
                // 'slug' => 'goias',
                // 'population' => '6695855',
            ),
            9 =>
            array (
                //'est_id' => '10',
                'est_nome' => 'Maranhão',
                'est_id' => 'MA',
                // 'iso' => '21',
                // 'slug' => 'maranhao',
                // 'population' => '6954036',
            ),
            10 =>
            array (
                //'est_id' => '11',
                'est_nome' => 'Minas Gerais',
                 'est_id' => 'MG',
                // 'iso' => '31',
                // 'slug' => 'minas-gerais',
                // 'population' => '20997560',
            ),
            11 =>
            array (
                //'est_id' => '12',
                'est_nome' => 'Mato Grosso do Sul',
                 'est_id' => 'MS',
                // 'iso' => '50',
                // 'slug' => 'mato-grosso-do-sul',
                // 'population' => '2682386',
            ),
            12 =>
            array (
                //'est_id' => '13',
                'est_nome' => 'Mato Grosso',
                'est_id' => 'MT',
                // 'iso' => '51',
                // 'slug' => 'mato-grosso',
                // 'population' => '3305531',
            ),
            13 =>
            array (
                //'est_id' => '14',
                'est_nome' => 'Pará',
                'est_id' => 'PA',
                // 'iso' => '15',
                // 'slug' => 'para',
                // 'population' => '8272724',
            ),
            14 =>
            array (
                //'est_id' => '15',
                'est_nome' => 'Paraiba',
                'est_id' => 'PB',
                // 'iso' => '25',
                // 'slug' => 'paraiba',
                // 'population' => '3999415',
            ),
            15 =>
            array (
                //'est_id' => '16',
                'est_nome' => 'Pernambuco',
                'est_id' => 'PE',
                // 'iso' => '26',
                // 'slug' => 'pernambuco',
                // 'population' => '9410336',
            ),
            16 =>
            array (
                //'est_id' => '17',
                'est_nome' => 'Piauí',
                'est_id' => 'PI',
                // 'iso' => '22',
                // 'slug' => 'piaui',
                // 'population' => '3212180',
            ),
            17 =>
            array (
                //'est_id' => '18',
                'est_nome' => 'Paraná',
                'est_id' => 'PR',
                // 'iso' => '41',
                // 'slug' => 'parana',
                // 'population' => '11242720',
            ),
            18 =>
            array (
                //'est_id' => '19',
                'est_nome' => 'Rio de Janeiro',
                'est_id' => 'RJ',
                // 'iso' => '33',
                // 'slug' => 'rio-de-janeiro',
                // 'population' => '16635996',
            ),
            19 =>
            array (
                //'est_id' => '20',
                'est_nome' => 'Rio Grande do Norte',
                'est_id' => 'RN',
                // 'iso' => '24',
                // 'slug' => 'rio-grande-do-norte',
                // 'population' => '3474998',
            ),
            20 =>
            array (
                //'est_id' => '21',
                'est_nome' => 'Rondônia',
                'est_id' => 'RO',
                // 'iso' => '11',
                // 'slug' => 'rondonia',
                // 'population' => '1787279',
            ),
            21 =>
            array (
                //'est_id' => '22',
                'est_nome' => 'Roraima',
                'est_id' => 'RR',
                // 'iso' => '14',
                // 'slug' => 'roraima',
                // 'population' => '514229',
            ),
            22 =>
            array (
                //'est_id' => '23',
                'est_nome' => 'Rio Grande do Sul',
                'est_id' => 'RS',
                // 'iso' => '43',
                // 'slug' => 'rio-grande-do-sul',
                // 'population' => '11286500',
            ),
            23 =>
            array (
                //'est_id' => '24',
                'est_nome' => 'Santa Catarina',
                'est_id' => 'SC',
                // 'iso' => '42',
                // 'slug' => 'santa-catarina',
                // 'population' => '6910553',
            ),
            24 =>
            array (
                //'est_id' => '25',
                'est_nome' => 'Sergipe',
                'est_id' => 'SE',
                // 'iso' => '28',
                // 'slug' => 'sergipe',
                // 'population' => '2265779',
            ),
            25 =>
            array (
                //'est_id' => '26',
                'est_nome' => 'São Paulo',
                'est_id' => 'SP',
                // 'iso' => '35',
                // 'slug' => 'sao-paulo',
                // 'population' => '44749699',
            ),
            26 =>
            array (
                //'est_id' => '27',
                'est_nome' => 'Tocantins',
                'est_id' => 'TO',
                // 'iso' => '17',
                // 'slug' => 'tocantins',
                // 'population' => '1532902',
            ),
        ));
    
    }
}
