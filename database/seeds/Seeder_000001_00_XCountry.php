<?php

use Illuminate\Database\Seeder;

/**
 * See https://simple.wikipedia.org/wiki/List_of_countries for list of countries and formal names.
 * See https://countrycode.org/ or https://en.wikipedia.org/wiki/List_of_ISO_3166_country_codes 
 *     for list of countries and country codes.
 * See https://www.iban.com/currency-codes for list of countries and currency codes.
 */
class Seeder_000001_00_XCountry extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 1
            ], [
                'common_name' => 'Indonesia',
                'official_name' => 'Republic of Indonesia',
                'iso2_code' => 'ID',
                'iso3_code' => 'IDN',
                'calling_code' => '62',
                'currency_code' => 'IDR',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 2
            ], [
                'common_name' => 'Malaysia',
                'official_name' => 'Malaysia',
                'iso2_code' => 'MY',
                'iso3_code' => 'MYS',
                'calling_code' => '60',
                'currency_code' => 'MYR',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 3
            ], [
                'common_name' => 'Singapore',
                'official_name' => 'Republic of Singapore',
                'iso2_code' => 'SG',
                'iso3_code' => 'SGP',
                'calling_code' => '65',
                'currency_code' => 'SGD',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 4
            ], [
                'common_name' => 'Thailand',
                'official_name' => 'Kingdom of Thailand',
                'iso2_code' => 'TH',
                'iso3_code' => 'THA',
                'calling_code' => '66',
                'currency_code' => 'THB',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 5
            ], [
                'common_name' => 'Vietnam',
                'official_name' => 'Socialist Republic of Vietnam',
                'iso2_code' => 'VN',
                'iso3_code' => 'VNM',
                'calling_code' => '84',
                'currency_code' => 'VND',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 6
            ], [
                'common_name' => 'Myanmar',
                'official_name' => 'Republic of the Union of Myanmar',
                'iso2_code' => 'MM',
                'iso3_code' => 'MMR',
                'calling_code' => '95',
                'currency_code' => 'MMK',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 7
            ], [
                'common_name' => 'Philippines',
                'official_name' => 'Republic of the Philippines',
                'iso2_code' => 'PH',
                'iso3_code' => 'PHL',
                'calling_code' => '63',
                'currency_code' => 'PHP',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 8
            ], [
                'common_name' => 'Brunei Darussalam',
                'official_name' => 'Nation of Brunei, Abode of Peace',
                'iso2_code' => 'BN',
                'iso3_code' => 'BRN',
                'calling_code' => '673',
                'currency_code' => 'BND',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 9
            ], [
                'common_name' => 'Laos',
                'official_name' => 'Lao People\'s Democratic Republic',
                'iso2_code' => 'LA',
                'iso3_code' => 'LAO',
                'calling_code' => '856',
                'currency_code' => 'LAK',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 10
            ], [
                'common_name' => 'Cambodia',
                'official_name' => 'Kingdom of Cambodia',
                'iso2_code' => 'KH',
                'iso3_code' => 'KHM',
                'calling_code' => '855',
                'currency_code' => 'KHR',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 11
            ], [
                'common_name' => 'India',
                'official_name' => 'Republic of India',
                'iso2_code' => 'IN',
                'iso3_code' => 'IND',
                'calling_code' => '91',
                'currency_code' => 'INR',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 12
            ], [
                'common_name' => 'Afghanistan',
                'official_name' => 'Islamic Republic of Afghanistan',
                'iso2_code' => 'AF',
                'iso3_code' => 'AFG',
                'calling_code' => '93',
                'currency_code' => 'AFN',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 13
            ], [
                'common_name' => 'Albania',
                'official_name' => 'Republic of Albania',
                'iso2_code' => 'AL',
                'iso3_code' => 'ALB',
                'calling_code' => '355',
                'currency_code' => 'ALL',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 14
            ], [
                'common_name' => 'Algeria',
                'official_name' => 'People\'s Democratic Republic of Algeria',
                'iso2_code' => 'DZ',
                'iso3_code' => 'DZA',
                'calling_code' => '213',
                'currency_code' => 'DZD',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 15
            ], [
                'common_name' => 'Andorra',
                'official_name' => 'Principality of Andorra',
                'iso2_code' => 'AD',
                'iso3_code' => 'AND',
                'calling_code' => '376',
                'currency_code' => 'EUR',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 16
            ], [
                'common_name' => 'Angola',
                'official_name' => 'Republic of Angola',
                'iso2_code' => 'AO',
                'iso3_code' => 'AGO',
                'calling_code' => '244',
                'currency_code' => 'AOA',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 17
            ], [
                'common_name' => 'Antigua and Barbuda',
                'official_name' => 'Antigua and Barbuda',
                'iso2_code' => 'AG',
                'iso3_code' => 'ATG',
                'calling_code' => '1268',
                'currency_code' => 'XCD',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 18
            ], [
                'common_name' => 'Argentina',
                'official_name' => 'Argentine Republic',
                'iso2_code' => 'AR',
                'iso3_code' => 'ARG',
                'calling_code' => '54',
                'currency_code' => 'ARS',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 19
            ], [
                'common_name' => 'Armenia',
                'official_name' => 'Republic of Armenia',
                'iso2_code' => 'AM',
                'iso3_code' => 'ARM',
                'calling_code' => '374',
                'currency_code' => 'AMD',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 20
            ], [
                'common_name' => 'Australia',
                'official_name' => 'Commonwealth of Australia',
                'iso2_code' => 'AU',
                'iso3_code' => 'AUS',
                'calling_code' => '61',
                'currency_code' => 'AUD',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 21
            ], [
                'common_name' => 'Austria',
                'official_name' => 'Republic of Austria',
                'iso2_code' => 'AT',
                'iso3_code' => 'AUT',
                'calling_code' => '43',
                'currency_code' => 'EUR',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 22
            ], [
                'common_name' => 'Azerbaijan',
                'official_name' => 'Republic of Azerbaijan',
                'iso2_code' => 'AZ',
                'iso3_code' => 'AZE',
                'calling_code' => '994',
                'currency_code' => 'AZN',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 23
            ], [
                'common_name' => 'Bahamas, The',
                'official_name' => 'Commonwealth of The Bahamas',
                'iso2_code' => 'BS',
                'iso3_code' => 'BHS',
                'calling_code' => '1242',
                'currency_code' => 'BSD',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 24
            ], [
                'common_name' => 'Bahrain',
                'official_name' => 'Kingdom of Bahrain',
                'iso2_code' => 'BH',
                'iso3_code' => 'BHR',
                'calling_code' => '973',
                'currency_code' => 'BHD',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 25
            ], [
                'common_name' => 'Bangladesh',
                'official_name' => 'People\'s Republic of Bangladesh',
                'iso2_code' => 'BD',
                'iso3_code' => 'BGD',
                'calling_code' => '880',
                'currency_code' => 'BDT',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 26
            ], [
                'common_name' => 'Barbados',
                'official_name' => 'Barbados',
                'iso2_code' => 'BB',
                'iso3_code' => 'BRB',
                'calling_code' => '1246',
                'currency_code' => 'BBD',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 27
            ], [
                'common_name' => 'Belarus',
                'official_name' => 'Republic of Belarus',
                'iso2_code' => 'BY',
                'iso3_code' => 'BLR',
                'calling_code' => '375',
                'currency_code' => 'BYR',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 28
            ], [
                'common_name' => 'Belgium',
                'official_name' => 'Kingdom of Belgium',
                'iso2_code' => 'BE',
                'iso3_code' => 'BEL',
                'calling_code' => '32',
                'currency_code' => 'EUR',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 29
            ], [
                'common_name' => 'Belize',
                'official_name' => 'Belize',
                'iso2_code' => 'BZ',
                'iso3_code' => 'BLZ',
                'calling_code' => '501',
                'currency_code' => 'BZD',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 30
            ], [
                'common_name' => 'Benin',
                'official_name' => 'Republic of Benin',
                'iso2_code' => 'BJ',
                'iso3_code' => 'BEN',
                'calling_code' => '229',
                'currency_code' => 'XOF',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 31
            ], [
                'common_name' => 'Bhutan',
                'official_name' => 'Kingdom of Bhutan',
                'iso2_code' => 'BT',
                'iso3_code' => 'BTN',
                'calling_code' => '975',
                'currency_code' => 'BTN',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 32
            ], [
                'common_name' => 'Bolivia',
                'official_name' => 'Plurinational State of Bolivia',
                'iso2_code' => 'BO',
                'iso3_code' => 'BOL',
                'calling_code' => '591',
                'currency_code' => 'BOB',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 33
            ], [
                'common_name' => 'Bosnia and Herzegovina',
                'official_name' => 'Bosnia and Herzegovina',
                'iso2_code' => 'BA',
                'iso3_code' => 'BIH',
                'calling_code' => '387',
                'currency_code' => 'BAM',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 34
            ], [
                'common_name' => 'Botswana',
                'official_name' => 'Republic of Botswana',
                'iso2_code' => 'BW',
                'iso3_code' => 'BWA',
                'calling_code' => '267',
                'currency_code' => 'BWP',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 35
            ], [
                'common_name' => 'Brazil',
                'official_name' => 'Federative Republic of Brazil',
                'iso2_code' => 'BR',
                'iso3_code' => 'BRA',
                'calling_code' => '55',
                'currency_code' => 'BRL',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 36
            ], [
                'common_name' => 'Bulgaria',
                'official_name' => 'Republic of Bulgaria',
                'iso2_code' => 'BG',
                'iso3_code' => 'BGR',
                'calling_code' => '359',
                'currency_code' => 'BGN',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 37
            ], [
                'common_name' => 'Burkina Faso',
                'official_name' => 'Burkina Faso',
                'iso2_code' => 'BF',
                'iso3_code' => 'BFA',
                'calling_code' => '226',
                'currency_code' => 'XOF',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 38
            ], [
                'common_name' => 'Burundi',
                'official_name' => 'Republic of Burundi',
                'iso2_code' => 'BI',
                'iso3_code' => 'BDI',
                'calling_code' => '257',
                'currency_code' => 'BIF',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 39
            ], [
                'common_name' => 'Cameroon',
                'official_name' => 'Republic of Cameroon',
                'iso2_code' => 'CM',
                'iso3_code' => 'CMR',
                'calling_code' => '237',
                'currency_code' => 'XAF',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 40
            ], [
                'common_name' => 'Canada',
                'official_name' => 'Canada',
                'iso2_code' => 'CA',
                'iso3_code' => 'CAN',
                'calling_code' => '1',
                'currency_code' => 'CAD',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 41
            ], [
                'common_name' => 'Cabo Verde',
                'official_name' => 'Republic of Cabo Verde',
                'iso2_code' => 'CV',
                'iso3_code' => 'CPV',
                'calling_code' => '238',
                'currency_code' => 'CVE',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 42
            ], [
                'common_name' => 'Central African Republic',
                'official_name' => 'Central African Republic',
                'iso2_code' => 'CF',
                'iso3_code' => 'CAF',
                'calling_code' => '236',
                'currency_code' => 'XAF',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 43
            ], [
                'common_name' => 'Chad',
                'official_name' => 'Republic of Chad',
                'iso2_code' => 'TD',
                'iso3_code' => 'TCD',
                'calling_code' => '235',
                'currency_code' => 'XAF',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 44
            ], [
                'common_name' => 'Chile',
                'official_name' => 'Republic of Chile',
                'iso2_code' => 'CL',
                'iso3_code' => 'CHL',
                'calling_code' => '56',
                'currency_code' => 'CLP',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 45
            ], [
                'common_name' => 'China',
                'official_name' => 'People\'s Republic of China',
                'iso2_code' => 'CN',
                'iso3_code' => 'CHN',
                'calling_code' => '86',
                'currency_code' => 'CNY',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 46
            ], [
                'common_name' => 'Colombia',
                'official_name' => 'Republic of Colombia',
                'iso2_code' => 'CO',
                'iso3_code' => 'COL',
                'calling_code' => '57',
                'currency_code' => 'COP',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 47
            ], [
                'common_name' => 'Comoros',
                'official_name' => 'Union of the Comoros',
                'iso2_code' => 'KM',
                'iso3_code' => 'COM',
                'calling_code' => '269',
                'currency_code' => 'KMF',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 48
            ], [
                'common_name' => 'Congo',
                'official_name' => 'Republic of the Congo',
                'iso2_code' => 'CG',
                'iso3_code' => 'COG',
                'calling_code' => '242',
                'currency_code' => 'XAF',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 49
            ], [
                'common_name' => 'Congo, Democratic Republic',
                'official_name' => 'Democratic Republic of the Congo',
                'iso2_code' => 'CD',
                'iso3_code' => 'COD',
                'calling_code' => '243',
                'currency_code' => 'CDF',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 50
            ], [
                'common_name' => 'Costa Rica',
                'official_name' => 'Republic of Costa Rica',
                'iso2_code' => 'CR',
                'iso3_code' => 'CRI',
                'calling_code' => '506',
                'currency_code' => 'CRC',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 51
            ], [
                'common_name' => 'Croatia',
                'official_name' => 'Republic of Croatia',
                'iso2_code' => 'HR',
                'iso3_code' => 'HRV',
                'calling_code' => '385',
                'currency_code' => 'HRK',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 52
            ], [
                'common_name' => 'Cuba',
                'official_name' => 'Republic of Cuba',
                'iso2_code' => 'CU',
                'iso3_code' => 'CUB',
                'calling_code' => '53',
                'currency_code' => 'CUC',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 53
            ], [
                'common_name' => 'Cyprus',
                'official_name' => 'Republic of Cyprus',
                'iso2_code' => 'CY',
                'iso3_code' => 'CYP',
                'calling_code' => '357',
                'currency_code' => 'EUR',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 54
            ], [
                'common_name' => 'Czech Republic',
                'official_name' => 'Czech Republic',
                'iso2_code' => 'CZ',
                'iso3_code' => 'CZE',
                'calling_code' => '420',
                'currency_code' => 'CZK',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 55
            ], [
                'common_name' => 'Denmark',
                'official_name' => 'Kingdom of Denmark',
                'iso2_code' => 'DK',
                'iso3_code' => 'DNK',
                'calling_code' => '45',
                'currency_code' => 'DKK',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 56
            ], [
                'common_name' => 'Djibouti',
                'official_name' => 'Republic of Djibouti',
                'iso2_code' => 'DJ',
                'iso3_code' => 'DJI',
                'calling_code' => '253',
                'currency_code' => 'DJF',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 57
            ], [
                'common_name' => 'Dominica',
                'official_name' => 'Commonwealth of Dominica',
                'iso2_code' => 'DM',
                'iso3_code' => 'DMA',
                'calling_code' => '1767',
                'currency_code' => 'XCD',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 58
            ], [
                'common_name' => 'Dominican Republic',
                'official_name' => 'Dominican Republic',
                'iso2_code' => 'DO',
                'iso3_code' => 'DOM',
                'calling_code' => '1',
                'currency_code' => 'DOP',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 59
            ], [
                'common_name' => 'Ecuador',
                'official_name' => 'Republic of Ecuador',
                'iso2_code' => 'EC',
                'iso3_code' => 'ECU',
                'calling_code' => '593',
                'currency_code' => 'USD',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 60
            ], [
                'common_name' => 'Egypt',
                'official_name' => 'Arab Republic of Egypt',
                'iso2_code' => 'EG',
                'iso3_code' => 'EGY',
                'calling_code' => '20',
                'currency_code' => 'EGP',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 61
            ], [
                'common_name' => 'El Salvador',
                'official_name' => 'Republic of El Salvador',
                'iso2_code' => 'SV',
                'iso3_code' => 'SLV',
                'calling_code' => '503',
                'currency_code' => 'USD',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 62
            ], [
                'common_name' => 'Equatorial Guinea',
                'official_name' => 'Republic of Equatorial Guinea',
                'iso2_code' => 'GQ',
                'iso3_code' => 'GNQ',
                'calling_code' => '240',
                'currency_code' => 'XAF',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 63
            ], [
                'common_name' => 'Eritrea',
                'official_name' => 'State of Eritrea',
                'iso2_code' => 'ER',
                'iso3_code' => 'ERI',
                'calling_code' => '291',
                'currency_code' => 'ERN',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 64
            ], [
                'common_name' => 'Estonia',
                'official_name' => 'Republic of Estonia',
                'iso2_code' => 'EE',
                'iso3_code' => 'EST',
                'calling_code' => '372',
                'currency_code' => 'EUR',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 65
            ], [
                'common_name' => 'Ethiopia',
                'official_name' => 'Federal Democratic Republic of Ethiopia',
                'iso2_code' => 'ET',
                'iso3_code' => 'ETH',
                'calling_code' => '251',
                'currency_code' => 'ETB',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 66
            ], [
                'common_name' => 'Fiji',
                'official_name' => 'Republic of Fiji',
                'iso2_code' => 'FJ',
                'iso3_code' => 'FJI',
                'calling_code' => '679',
                'currency_code' => 'FJD',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 67
            ], [
                'common_name' => 'Finland',
                'official_name' => 'Republic of Finland',
                'iso2_code' => 'FI',
                'iso3_code' => 'FIN',
                'calling_code' => '358',
                'currency_code' => 'EUR',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 68
            ], [
                'common_name' => 'France',
                'official_name' => 'French Republic',
                'iso2_code' => 'FR',
                'iso3_code' => 'FRA',
                'calling_code' => '33',
                'currency_code' => 'EUR',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 69
            ], [
                'common_name' => 'Gabon',
                'official_name' => 'Gabonese Republic',
                'iso2_code' => 'GA',
                'iso3_code' => 'GAB',
                'calling_code' => '241',
                'currency_code' => 'XAF',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 70
            ], [
                'common_name' => 'Gambia',
                'official_name' => 'Republic of The Gambia',
                'iso2_code' => 'GM',
                'iso3_code' => 'GMB',
                'calling_code' => '220',
                'currency_code' => 'GMD',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 71
            ], [
                'common_name' => 'Georgia',
                'official_name' => 'Georgia',
                'iso2_code' => 'GE',
                'iso3_code' => 'GEO',
                'calling_code' => '995',
                'currency_code' => 'GEL',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 72
            ], [
                'common_name' => 'Germany',
                'official_name' => 'Federal Republic of Germany',
                'iso2_code' => 'DE',
                'iso3_code' => 'DEU',
                'calling_code' => '49',
                'currency_code' => 'EUR',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 73
            ], [
                'common_name' => 'Ghana',
                'official_name' => 'Republic of Ghana',
                'iso2_code' => 'GH',
                'iso3_code' => 'GHA',
                'calling_code' => '233',
                'currency_code' => 'GHS',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 74
            ], [
                'common_name' => 'Greece',
                'official_name' => 'Hellenic Republic',
                'iso2_code' => 'GR',
                'iso3_code' => 'GRC',
                'calling_code' => '30',
                'currency_code' => 'EUR',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 75
            ], [
                'common_name' => 'Grenada',
                'official_name' => 'Grenada',
                'iso2_code' => 'GD',
                'iso3_code' => 'GRD',
                'calling_code' => '1473',
                'currency_code' => 'XCD',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 76
            ], [
                'common_name' => 'Guatemala',
                'official_name' => 'Republic of Guatemala',
                'iso2_code' => 'GT',
                'iso3_code' => 'GTM',
                'calling_code' => '502',
                'currency_code' => 'GTQ',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 77
            ], [
                'common_name' => 'Guinea',
                'official_name' => 'Republic of Guinea',
                'iso2_code' => 'GN',
                'iso3_code' => 'GIN',
                'calling_code' => '224',
                'currency_code' => 'GNF',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 78
            ], [
                'common_name' => 'Guinea-Bissau',
                'official_name' => 'Republic of Guinea-Bissau',
                'iso2_code' => 'GW',
                'iso3_code' => 'GNB',
                'calling_code' => '245',
                'currency_code' => 'XOF',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 79
            ], [
                'common_name' => 'Guyana',
                'official_name' => 'Co-operative Republic of Guyana',
                'iso2_code' => 'GY',
                'iso3_code' => 'GUY',
                'calling_code' => '592',
                'currency_code' => 'GYD',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 80
            ], [
                'common_name' => 'Haiti',
                'official_name' => 'Republic of Haiti',
                'iso2_code' => 'HT',
                'iso3_code' => 'HTI',
                'calling_code' => '509',
                'currency_code' => 'HTG',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 81
            ], [
                'common_name' => 'Honduras',
                'official_name' => 'Republic of Honduras',
                'iso2_code' => 'HN',
                'iso3_code' => 'HND',
                'calling_code' => '504',
                'currency_code' => 'HNL',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 82
            ], [
                'common_name' => 'Hungary',
                'official_name' => 'Hungary',
                'iso2_code' => 'HU',
                'iso3_code' => 'HUN',
                'calling_code' => '36',
                'currency_code' => 'HUF',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 83
            ], [
                'common_name' => 'Iceland',
                'official_name' => 'Iceland',
                'iso2_code' => 'IS',
                'iso3_code' => 'ISL',
                'calling_code' => '354',
                'currency_code' => 'ISK',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 84
            ], [
                'common_name' => 'Iran',
                'official_name' => 'Islamic Republic of Iran',
                'iso2_code' => 'IR',
                'iso3_code' => 'IRN',
                'calling_code' => '98',
                'currency_code' => 'IRR',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 85
            ], [
                'common_name' => 'Iraq',
                'official_name' => 'Republic of Iraq',
                'iso2_code' => 'IQ',
                'iso3_code' => 'IRQ',
                'calling_code' => '964',
                'currency_code' => 'IQD',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 86
            ], [
                'common_name' => 'Ireland',
                'official_name' => 'Ireland',
                'iso2_code' => 'IE',
                'iso3_code' => 'IRL',
                'calling_code' => '353',
                'currency_code' => 'EUR',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 87
            ], [
                'common_name' => 'Israel',
                'official_name' => 'State of Israel',
                'iso2_code' => 'IL',
                'iso3_code' => 'ISR',
                'calling_code' => '972',
                'currency_code' => 'ILS',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 88
            ], [
                'common_name' => 'Italy',
                'official_name' => 'Italian Republic',
                'iso2_code' => 'IT',
                'iso3_code' => 'ITA',
                'calling_code' => '39',
                'currency_code' => 'EUR',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 89
            ], [
                'common_name' => 'Ivory Coast',
                'official_name' => 'Republic of Côte d\'Ivoire',
                'iso2_code' => 'CI',
                'iso3_code' => 'CIV',
                'calling_code' => '225',
                'currency_code' => 'XOF',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 90
            ], [
                'common_name' => 'Jamaica',
                'official_name' => 'Jamaica',
                'iso2_code' => 'JM',
                'iso3_code' => 'JAM',
                'calling_code' => '1876',
                'currency_code' => 'JMD',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 91
            ], [
                'common_name' => 'Japan',
                'official_name' => 'Japan',
                'iso2_code' => 'JP',
                'iso3_code' => 'JPN',
                'calling_code' => '81',
                'currency_code' => 'JPY',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 92
            ], [
                'common_name' => 'Jordan',
                'official_name' => 'Hashemite Kingdom of Jordan',
                'iso2_code' => 'JO',
                'iso3_code' => 'JOR',
                'calling_code' => '962',
                'currency_code' => 'JOD',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 93
            ], [
                'common_name' => 'Kazakhstan',
                'official_name' => 'Republic of Kazakhstan',
                'iso2_code' => 'KZ',
                'iso3_code' => 'KAZ',
                'calling_code' => '7',
                'currency_code' => 'KZT',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 94
            ], [
                'common_name' => 'Kenya',
                'official_name' => 'Republic of Kenya',
                'iso2_code' => 'KE',
                'iso3_code' => 'KEN',
                'calling_code' => '254',
                'currency_code' => 'KES',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 95
            ], [
                'common_name' => 'Kiribati',
                'official_name' => 'Republic of Kiribati',
                'iso2_code' => 'KI',
                'iso3_code' => 'KIR',
                'calling_code' => '686',
                'currency_code' => 'AUD',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 96
            ], [
                'common_name' => 'North Korea',
                'official_name' => 'Democratic People\'s Republic of Korea',
                'iso2_code' => 'KP',
                'iso3_code' => 'PRK',
                'calling_code' => '850',
                'currency_code' => 'KPW',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 97
            ], [
                'common_name' => 'South Korea',
                'official_name' => 'Republic of Korea',
                'iso2_code' => 'KR',
                'iso3_code' => 'KOR',
                'calling_code' => '82',
                'currency_code' => 'KRW',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 98
            ], [
                'common_name' => 'Kuwait',
                'official_name' => 'State of Kuwait',
                'iso2_code' => 'KW',
                'iso3_code' => 'KWT',
                'calling_code' => '965',
                'currency_code' => 'KWD',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 99
            ], [
                'common_name' => 'Kyrgyzstan',
                'official_name' => 'Kyrgyz Republic',
                'iso2_code' => 'KG',
                'iso3_code' => 'KGZ',
                'calling_code' => '996',
                'currency_code' => 'KGS',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 100
            ], [
                'common_name' => 'Latvia',
                'official_name' => 'Republic of Latvia',
                'iso2_code' => 'LV',
                'iso3_code' => 'LVA',
                'calling_code' => '371',
                'currency_code' => 'EUR',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 101
            ], [
                'common_name' => 'Lebanon',
                'official_name' => 'Lebanese Republic',
                'iso2_code' => 'LB',
                'iso3_code' => 'LBN',
                'calling_code' => '961',
                'currency_code' => 'LBP',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 102
            ], [
                'common_name' => 'Lesotho',
                'official_name' => 'Kingdom of Lesotho',
                'iso2_code' => 'LS',
                'iso3_code' => 'LSO',
                'calling_code' => '266',
                'currency_code' => 'LSL',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 103
            ], [
                'common_name' => 'Liberia',
                'official_name' => 'Republic of Liberia',
                'iso2_code' => 'LR',
                'iso3_code' => 'LBR',
                'calling_code' => '231',
                'currency_code' => 'LRD',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 104
            ], [
                'common_name' => 'Libya',
                'official_name' => 'State of Libya',
                'iso2_code' => 'LY',
                'iso3_code' => 'LBY',
                'calling_code' => '218',
                'currency_code' => 'LYD',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 105
            ], [
                'common_name' => 'Liechtenstein',
                'official_name' => 'Principality of Liechtenstein',
                'iso2_code' => 'LI',
                'iso3_code' => 'LIE',
                'calling_code' => '423',
                'currency_code' => 'CHF',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 106
            ], [
                'common_name' => 'Lithuania',
                'official_name' => 'Republic of Lithuania',
                'iso2_code' => 'LT',
                'iso3_code' => 'LTU',
                'calling_code' => '370',
                'currency_code' => 'EUR',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 107
            ], [
                'common_name' => 'Luxembourg',
                'official_name' => 'Grand Duchy of Luxembourg',
                'iso2_code' => 'LU',
                'iso3_code' => 'LUX',
                'calling_code' => '352',
                'currency_code' => 'EUR',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 108
            ], [
                'common_name' => 'Madagascar',
                'official_name' => 'Republic of Madagascar',
                'iso2_code' => 'MG',
                'iso3_code' => 'MDG',
                'calling_code' => '261',
                'currency_code' => 'MGA',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 109
            ], [
                'common_name' => 'Malawi',
                'official_name' => 'Republic of Malawi',
                'iso2_code' => 'MW',
                'iso3_code' => 'MWI',
                'calling_code' => '265',
                'currency_code' => 'MWK',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 110
            ], [
                'common_name' => 'Maldives',
                'official_name' => 'Republic of Maldives',
                'iso2_code' => 'MV',
                'iso3_code' => 'MDV',
                'calling_code' => '960',
                'currency_code' => 'MVR',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 111
            ], [
                'common_name' => 'Mali',
                'official_name' => 'Republic of Mali',
                'iso2_code' => 'ML',
                'iso3_code' => 'MLI',
                'calling_code' => '223',
                'currency_code' => 'XOF',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 112
            ], [
                'common_name' => 'Malta',
                'official_name' => 'Republic of Malta',
                'iso2_code' => 'MT',
                'iso3_code' => 'MLT',
                'calling_code' => '356',
                'currency_code' => 'EUR',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 113
            ], [
                'common_name' => 'Marshall Islands',
                'official_name' => 'Republic of the Marshall Islands',
                'iso2_code' => 'MH',
                'iso3_code' => 'MHL',
                'calling_code' => '692',
                'currency_code' => 'USD',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 114
            ], [
                'common_name' => 'Mauritania',
                'official_name' => 'Islamic Republic of Mauritania',
                'iso2_code' => 'MR',
                'iso3_code' => 'MRT',
                'calling_code' => '222',
                'currency_code' => 'MRU',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 115
            ], [
                'common_name' => 'Mauritius',
                'official_name' => 'Republic of Mauritius',
                'iso2_code' => 'MU',
                'iso3_code' => 'MUS',
                'calling_code' => '230',
                'currency_code' => 'MUR',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 116
            ], [
                'common_name' => 'Mexico',
                'official_name' => 'United Mexican States',
                'iso2_code' => 'MX',
                'iso3_code' => 'MEX',
                'calling_code' => '52',
                'currency_code' => 'MXN',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 117
            ], [
                'common_name' => 'Micronesia',
                'official_name' => 'Federated States of Micronesia',
                'iso2_code' => 'FM',
                'iso3_code' => 'FSM',
                'calling_code' => '691',
                'currency_code' => 'USD',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 118
            ], [
                'common_name' => 'Moldova',
                'official_name' => 'Republic of Moldova',
                'iso2_code' => 'MD',
                'iso3_code' => 'MDA',
                'calling_code' => '373',
                'currency_code' => 'MDL',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 119
            ], [
                'common_name' => 'Monaco',
                'official_name' => 'Principality of Monaco',
                'iso2_code' => 'MC',
                'iso3_code' => 'MCO',
                'calling_code' => '377',
                'currency_code' => 'EUR',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 120
            ], [
                'common_name' => 'Mongolia',
                'official_name' => 'Mongolia',
                'iso2_code' => 'MN',
                'iso3_code' => 'MNG',
                'calling_code' => '976',
                'currency_code' => 'MNT',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 121
            ], [
                'common_name' => 'Montenegro',
                'official_name' => 'Montenegro',
                'iso2_code' => 'ME',
                'iso3_code' => 'MNE',
                'calling_code' => '382',
                'currency_code' => 'EUR',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 122
            ], [
                'common_name' => 'Morocco',
                'official_name' => 'Kingdom of Morocco',
                'iso2_code' => 'MA',
                'iso3_code' => 'MAR',
                'calling_code' => '212',
                'currency_code' => 'MAD',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 123
            ], [
                'common_name' => 'Mozambique',
                'official_name' => 'Republic of Mozambique',
                'iso2_code' => 'MZ',
                'iso3_code' => 'MOZ',
                'calling_code' => '258',
                'currency_code' => 'MZN',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 124
            ], [
                'common_name' => 'Namibia',
                'official_name' => 'Republic of Namibia',
                'iso2_code' => 'NA',
                'iso3_code' => 'NAM',
                'calling_code' => '264',
                'currency_code' => 'NAD',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 125
            ], [
                'common_name' => 'Nauru',
                'official_name' => 'Republic of Nauru',
                'iso2_code' => 'NR',
                'iso3_code' => 'NRU',
                'calling_code' => '674',
                'currency_code' => 'AUD',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 126
            ], [
                'common_name' => 'Nepal',
                'official_name' => 'Federal Democratic Republic of Nepal',
                'iso2_code' => 'NP',
                'iso3_code' => 'NPL',
                'calling_code' => '977',
                'currency_code' => 'NPR',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 127
            ], [
                'common_name' => 'Netherlands',
                'official_name' => 'Kingdom of the Netherlands',
                'iso2_code' => 'NL',
                'iso3_code' => 'NLD',
                'calling_code' => '31',
                'currency_code' => 'EUR',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 128
            ], [
                'common_name' => 'New Zealand',
                'official_name' => 'New Zealand',
                'iso2_code' => 'NZ',
                'iso3_code' => 'NZL',
                'calling_code' => '64',
                'currency_code' => 'NZD',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 129
            ], [
                'common_name' => 'Nicaragua',
                'official_name' => 'Republic of Nicaragua',
                'iso2_code' => 'NI',
                'iso3_code' => 'NIC',
                'calling_code' => '505',
                'currency_code' => 'NIO',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 130
            ], [
                'common_name' => 'Niger',
                'official_name' => 'Republic of Niger',
                'iso2_code' => 'NE',
                'iso3_code' => 'NER',
                'calling_code' => '227',
                'currency_code' => 'XOF',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 131
            ], [
                'common_name' => 'Nigeria',
                'official_name' => 'Federal Republic of Nigeria',
                'iso2_code' => 'NG',
                'iso3_code' => 'NGA',
                'calling_code' => '234',
                'currency_code' => 'NGN',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 132
            ], [
                'common_name' => 'North Macedonia',
                'official_name' => 'Republic of North Macedonia',
                'iso2_code' => 'MK',
                'iso3_code' => 'MKD',
                'calling_code' => '389',
                'currency_code' => 'MKD',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 133
            ], [
                'common_name' => 'Norway',
                'official_name' => 'Kingdom of Norway',
                'iso2_code' => 'NO',
                'iso3_code' => 'NOR',
                'calling_code' => '47',
                'currency_code' => 'NOK',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 134
            ], [
                'common_name' => 'Oman',
                'official_name' => 'Sultanate of Oman',
                'iso2_code' => 'OM',
                'iso3_code' => 'OMN',
                'calling_code' => '968',
                'currency_code' => 'OMR',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 135
            ], [
                'common_name' => 'Pakistan',
                'official_name' => 'Islamic Republic of Pakistan',
                'iso2_code' => 'PK',
                'iso3_code' => 'PAK',
                'calling_code' => '92',
                'currency_code' => 'PKR',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 136
            ], [
                'common_name' => 'Palau',
                'official_name' => 'Republic of Palau',
                'iso2_code' => 'PW',
                'iso3_code' => 'PLW',
                'calling_code' => '680',
                'currency_code' => 'USD',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 137
            ], [
                'common_name' => 'Palestine',
                'official_name' => 'State of Palestine',
                'iso2_code' => 'PS',
                'iso3_code' => 'PSE',
                'calling_code' => '970',
                'currency_code' => 'ILS',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 138
            ], [
                'common_name' => 'Panama',
                'official_name' => 'Republic of Panama',
                'iso2_code' => 'PA',
                'iso3_code' => 'PAN',
                'calling_code' => '507',
                'currency_code' => 'USD',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 139
            ], [
                'common_name' => 'Papua New Guinea',
                'official_name' => 'Independent State of Papua New Guinea',
                'iso2_code' => 'PG',
                'iso3_code' => 'PNG',
                'calling_code' => '675',
                'currency_code' => 'PGK',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 140
            ], [
                'common_name' => 'Paraguay',
                'official_name' => 'Republic of Paraguay',
                'iso2_code' => 'PY',
                'iso3_code' => 'PRY',
                'calling_code' => '595',
                'currency_code' => 'PYG',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 141
            ], [
                'common_name' => 'Peru',
                'official_name' => 'Republic of Peru',
                'iso2_code' => 'PE',
                'iso3_code' => 'PER',
                'calling_code' => '51',
                'currency_code' => 'PEN',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 142
            ], [
                'common_name' => 'Poland',
                'official_name' => 'Republic of Poland',
                'iso2_code' => 'PL',
                'iso3_code' => 'POL',
                'calling_code' => '48',
                'currency_code' => 'PLN',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 143
            ], [
                'common_name' => 'Portugal',
                'official_name' => 'Portuguese Republic',
                'iso2_code' => 'PT',
                'iso3_code' => 'PRT',
                'calling_code' => '351',
                'currency_code' => 'EUR',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 144
            ], [
                'common_name' => 'Qatar',
                'official_name' => 'State of Qatar',
                'iso2_code' => 'QA',
                'iso3_code' => 'QAT',
                'calling_code' => '974',
                'currency_code' => 'QAR',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 145
            ], [
                'common_name' => 'Romania',
                'official_name' => 'Romania',
                'iso2_code' => 'RO',
                'iso3_code' => 'ROU',
                'calling_code' => '40',
                'currency_code' => 'RON',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 146
            ], [
                'common_name' => 'Russia',
                'official_name' => 'Russian Federation',
                'iso2_code' => 'RU',
                'iso3_code' => 'RUS',
                'calling_code' => '7',
                'currency_code' => 'RUB',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 147
            ], [
                'common_name' => 'Rwanda',
                'official_name' => 'Republic of Rwanda',
                'iso2_code' => 'RW',
                'iso3_code' => 'RWA',
                'calling_code' => '250',
                'currency_code' => 'RWF',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 148
            ], [
                'common_name' => 'Saint Kitts and Nevis',
                'official_name' => 'Federation of Saint Christopher and Nevis',
                'iso2_code' => 'KN',
                'iso3_code' => 'KNA',
                'calling_code' => '1869',
                'currency_code' => 'XCD',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 149
            ], [
                'common_name' => 'Saint Lucia',
                'official_name' => 'Saint Lucia',
                'iso2_code' => 'LC',
                'iso3_code' => 'LCA',
                'calling_code' => '1758',
                'currency_code' => 'XCD',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 150
            ], [
                'common_name' => 'Saint Vincent and the Grenadines',
                'official_name' => 'Saint Vincent and the Grenadines',
                'iso2_code' => 'VC',
                'iso3_code' => 'VCT',
                'calling_code' => '1784',
                'currency_code' => 'XCD',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 151
            ], [
                'common_name' => 'Samoa',
                'official_name' => 'Independent State of Samoa',
                'iso2_code' => 'WS',
                'iso3_code' => 'WSM',
                'calling_code' => '685',
                'currency_code' => 'WST',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 152
            ], [
                'common_name' => 'San Marino',
                'official_name' => 'Republic of San Marino',
                'iso2_code' => 'SM',
                'iso3_code' => 'SMR',
                'calling_code' => '378',
                'currency_code' => 'EUR',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 153
            ], [
                'common_name' => 'São Tomé and Príncipe',
                'official_name' => 'Democratic Republic of São Tomé and Príncipe',
                'iso2_code' => 'ST',
                'iso3_code' => 'STP',
                'calling_code' => '239',
                'currency_code' => 'STN',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 154
            ], [
                'common_name' => 'Saudi Arabia',
                'official_name' => 'Kingdom of Saudi Arabia',
                'iso2_code' => 'SA',
                'iso3_code' => 'SAU',
                'calling_code' => '966',
                'currency_code' => 'SAR',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 155
            ], [
                'common_name' => 'Senegal',
                'official_name' => 'Republic of Senegal',
                'iso2_code' => 'SN',
                'iso3_code' => 'SEN',
                'calling_code' => '221',
                'currency_code' => 'XOF',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 156
            ], [
                'common_name' => 'Serbia',
                'official_name' => 'Republic of Serbia',
                'iso2_code' => 'RS',
                'iso3_code' => 'SRB',
                'calling_code' => '381',
                'currency_code' => 'RSD',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 157
            ], [
                'common_name' => 'Seychelles',
                'official_name' => 'Republic of Seychelles',
                'iso2_code' => 'SC',
                'iso3_code' => 'SYC',
                'calling_code' => '248',
                'currency_code' => 'SCR',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 158
            ], [
                'common_name' => 'Sierra Leone',
                'official_name' => 'Republic of Sierra Leone',
                'iso2_code' => 'SL',
                'iso3_code' => 'SLE',
                'calling_code' => '232',
                'currency_code' => 'SLL',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 159
            ], [
                'common_name' => 'Slovakia',
                'official_name' => 'Slovak Republic',
                'iso2_code' => 'SK',
                'iso3_code' => 'SVK',
                'calling_code' => '421',
                'currency_code' => 'EUR',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 160
            ], [
                'common_name' => 'Slovenia',
                'official_name' => 'Republic of Slovenia',
                'iso2_code' => 'SI',
                'iso3_code' => 'SVN',
                'calling_code' => '386',
                'currency_code' => 'EUR',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 161
            ], [
                'common_name' => 'Solomon Islands',
                'official_name' => 'Solomon Islands',
                'iso2_code' => 'SB',
                'iso3_code' => 'SLB',
                'calling_code' => '677',
                'currency_code' => 'SBD',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 162
            ], [
                'common_name' => 'Somalia',
                'official_name' => 'Federal Republic of Somalia',
                'iso2_code' => 'SO',
                'iso3_code' => 'SOM',
                'calling_code' => '252',
                'currency_code' => 'SOS',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 163
            ], [
                'common_name' => 'South Africa',
                'official_name' => 'Republic of South Africa',
                'iso2_code' => 'ZA',
                'iso3_code' => 'ZAF',
                'calling_code' => '27',
                'currency_code' => 'ZAR',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 164
            ], [
                'common_name' => 'South Sudan',
                'official_name' => 'Republic of South Sudan',
                'iso2_code' => 'SS',
                'iso3_code' => 'SSD',
                'calling_code' => '211',
                'currency_code' => 'SSP',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 165
            ], [
                'common_name' => 'Spain',
                'official_name' => 'Kingdom of Spain',
                'iso2_code' => 'ES',
                'iso3_code' => 'ESP',
                'calling_code' => '34',
                'currency_code' => 'EUR',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 166
            ], [
                'common_name' => 'Sri Lanka',
                'official_name' => 'Democratic Socialist Republic of Sri Lanka',
                'iso2_code' => 'LK',
                'iso3_code' => 'LKA',
                'calling_code' => '94',
                'currency_code' => 'LKR',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 167
            ], [
                'common_name' => 'Sudan',
                'official_name' => 'Republic of the Sudan',
                'iso2_code' => 'SD',
                'iso3_code' => 'SDN',
                'calling_code' => '249',
                'currency_code' => 'SDG',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 168
            ], [
                'common_name' => 'Suriname',
                'official_name' => 'Republic of Suriname',
                'iso2_code' => 'SR',
                'iso3_code' => 'SUR',
                'calling_code' => '597',
                'currency_code' => 'SRD',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 169
            ], [
                'common_name' => 'Swaziland',
                'official_name' => 'Kingdom of Eswatini',
                'iso2_code' => 'SZ',
                'iso3_code' => 'SWZ',
                'calling_code' => '268',
                'currency_code' => 'SZL',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 170
            ], [
                'common_name' => 'Sweden',
                'official_name' => 'Kingdom of Sweden',
                'iso2_code' => 'SE',
                'iso3_code' => 'SWE',
                'calling_code' => '46',
                'currency_code' => 'SEK',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 171
            ], [
                'common_name' => 'Switzerland',
                'official_name' => 'Swiss Confederation',
                'iso2_code' => 'CH',
                'iso3_code' => 'CHE',
                'calling_code' => '41',
                'currency_code' => 'CHF',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 172
            ], [
                'common_name' => 'Syria',
                'official_name' => 'Syrian Arab Republic',
                'iso2_code' => 'SY',
                'iso3_code' => 'SYR',
                'calling_code' => '963',
                'currency_code' => 'SYP',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 173
            ], [
                'common_name' => 'Tajikistan',
                'official_name' => 'Republic of Tajikistan',
                'iso2_code' => 'TJ',
                'iso3_code' => 'TJK',
                'calling_code' => '992',
                'currency_code' => 'TJS',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 174
            ], [
                'common_name' => 'Tanzania',
                'official_name' => 'United Republic of Tanzania',
                'iso2_code' => 'TZ',
                'iso3_code' => 'TZA',
                'calling_code' => '255',
                'currency_code' => 'TZS',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 175
            ], [
                'common_name' => 'Timor Leste',
                'official_name' => 'Democratic Republic of Timor-Leste',
                'iso2_code' => 'TL',
                'iso3_code' => 'TLS',
                'calling_code' => '670',
                'currency_code' => 'USD',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 176
            ], [
                'common_name' => 'Togo',
                'official_name' => 'Togolese Republic',
                'iso2_code' => 'TG',
                'iso3_code' => 'TGO',
                'calling_code' => '228',
                'currency_code' => 'XOF',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 177
            ], [
                'common_name' => 'Tonga',
                'official_name' => 'Kingdom of Tonga',
                'iso2_code' => 'TO',
                'iso3_code' => 'TON',
                'calling_code' => '676',
                'currency_code' => 'TOP',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 178
            ], [
                'common_name' => 'Trinidad and Tobago',
                'official_name' => 'Republic of Trinidad and Tobago',
                'iso2_code' => 'TT',
                'iso3_code' => 'TTO',
                'calling_code' => '1868',
                'currency_code' => 'TTD',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 179
            ], [
                'common_name' => 'Tunisia',
                'official_name' => 'Republic of Tunisia',
                'iso2_code' => 'TN',
                'iso3_code' => 'TUN',
                'calling_code' => '216',
                'currency_code' => 'TND',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 180
            ], [
                'common_name' => 'Turkey',
                'official_name' => 'Republic of Turkey',
                'iso2_code' => 'TR',
                'iso3_code' => 'TUR',
                'calling_code' => '90',
                'currency_code' => 'TRY',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 181
            ], [
                'common_name' => 'Turkmenistan',
                'official_name' => 'Turkmenistan',
                'iso2_code' => 'TM',
                'iso3_code' => 'TKM',
                'calling_code' => '993',
                'currency_code' => 'TMT',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 182
            ], [
                'common_name' => 'Tuvalu',
                'official_name' => 'Tuvalu',
                'iso2_code' => 'TV',
                'iso3_code' => 'TUV',
                'calling_code' => '688',
                'currency_code' => 'AUD',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 183
            ], [
                'common_name' => 'Uganda',
                'official_name' => 'Republic of Uganda',
                'iso2_code' => 'UG',
                'iso3_code' => 'UGA',
                'calling_code' => '256',
                'currency_code' => 'UGX',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 184
            ], [
                'common_name' => 'Ukraine',
                'official_name' => 'Ukraine',
                'iso2_code' => 'UA',
                'iso3_code' => 'UKR',
                'calling_code' => '380',
                'currency_code' => 'UAH',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 185
            ], [
                'common_name' => 'United Arab Emirates',
                'official_name' => 'United Arab Emirates',
                'iso2_code' => 'AE',
                'iso3_code' => 'ARE',
                'calling_code' => '971',
                'currency_code' => 'AED',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 186
            ], [
                'common_name' => 'United Kingdom',
                'official_name' => 'United Kingdom of Great Britain and Northern Ireland',
                'iso2_code' => 'GB',
                'iso3_code' => 'GBR',
                'calling_code' => '44',
                'currency_code' => 'GBP',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 187
            ], [
                'common_name' => 'United States (USA)',
                'official_name' => 'United States of America',
                'iso2_code' => 'US',
                'iso3_code' => 'USA',
                'calling_code' => '1',
                'currency_code' => 'USD',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 188
            ], [
                'common_name' => 'Uruguay',
                'official_name' => 'Oriental Republic of Uruguay',
                'iso2_code' => 'UY',
                'iso3_code' => 'URY',
                'calling_code' => '598',
                'currency_code' => 'UYU',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 189
            ], [
                'common_name' => 'Uzbekistan',
                'official_name' => 'Republic of Uzbekistan',
                'iso2_code' => 'UZ',
                'iso3_code' => 'UZB',
                'calling_code' => '998',
                'currency_code' => 'UZS',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 190
            ], [
                'common_name' => 'Vanuatu',
                'official_name' => 'Republic of Vanuatu',
                'iso2_code' => 'VU',
                'iso3_code' => 'VUT',
                'calling_code' => '678',
                'currency_code' => 'VUV',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 191
            ], [
                'common_name' => 'Venezuela',
                'official_name' => 'Bolivarian Republic of Venezuela',
                'iso2_code' => 'VE',
                'iso3_code' => 'VEN',
                'calling_code' => '58',
                'currency_code' => 'VEF',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 192
            ], [
                'common_name' => 'Yemen',
                'official_name' => 'Republic of Yemen',
                'iso2_code' => 'YE',
                'iso3_code' => 'YEM',
                'calling_code' => '967',
                'currency_code' => 'YER',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 193
            ], [
                'common_name' => 'Zambia',
                'official_name' => 'Republic of Zambia',
                'iso2_code' => 'ZM',
                'iso3_code' => 'ZMB',
                'calling_code' => '269',
                'currency_code' => 'ZMW',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 194
            ], [
                'common_name' => 'Zimbabwe',
                'official_name' => 'Republic of Zimbabwe',
                'iso2_code' => 'ZW',
                'iso3_code' => 'ZWE',
                'calling_code' => '263',
                'currency_code' => 'ZWL',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 195
            ], [
                'common_name' => 'American Samoa',
                'official_name' => 'Territory of American Samoa',
                'iso2_code' => 'AS',
                'iso3_code' => 'ASM',
                'calling_code' => '1684',
                'currency_code' => 'USD',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 196
            ], [
                'common_name' => 'Anguilla',
                'official_name' => 'Anguilla',
                'iso2_code' => 'AI',
                'iso3_code' => 'AIA',
                'calling_code' => '1264',
                'currency_code' => 'XCD',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 197
            ], [
                'common_name' => 'Aruba',
                'official_name' => 'Aruba',
                'iso2_code' => 'AW',
                'iso3_code' => 'ABW',
                'calling_code' => '297',
                'currency_code' => 'AWG',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 198
            ], [
                'common_name' => 'Bermuda',
                'official_name' => 'Bermuda',
                'iso2_code' => 'BM',
                'iso3_code' => 'BMU',
                'calling_code' => '1441',
                'currency_code' => 'BMD',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 199
            ], [
                'common_name' => 'Bonaire, Sint Eustatius and Saba',
                'official_name' => 'Bonaire, Sint Eustatius and Saba',
                'iso2_code' => 'BQ',
                'iso3_code' => 'BES',
                'calling_code' => '599',
                'currency_code' => 'USD',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 200
            ], [
                'common_name' => 'British Indian Ocean Territory',
                'official_name' => 'British Indian Ocean Territory',
                'iso2_code' => 'IO',
                'iso3_code' => 'IOT',
                'calling_code' => '246',
                'currency_code' => 'USD',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 201
            ], [
                'common_name' => 'British Virgin Islands',
                'official_name' => 'British Virgin Islands',
                'iso2_code' => 'VG',
                'iso3_code' => 'VGB',
                'calling_code' => '1284',
                'currency_code' => 'USD',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 202
            ], [
                'common_name' => 'Cayman Islands',
                'official_name' => 'Cayman Islands',
                'iso2_code' => 'KY',
                'iso3_code' => 'CYM',
                'calling_code' => '1345',
                'currency_code' => 'KYD',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 203
            ], [
                'common_name' => 'Christmas Island',
                'official_name' => 'Territory of Christmas Island',
                'iso2_code' => 'CX',
                'iso3_code' => 'CXR',
                'calling_code' => '61',
                'currency_code' => 'AUD',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 204
            ], [
                'common_name' => 'Cook Islands',
                'official_name' => 'Cook Islands',
                'iso2_code' => 'CK',
                'iso3_code' => 'COK',
                'calling_code' => '682',
                'currency_code' => 'NZD',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 205
            ], [
                'common_name' => 'Curaçao',
                'official_name' => 'Country of Curaçao',
                'iso2_code' => 'CW',
                'iso3_code' => 'CUW',
                'calling_code' => '599',
                'currency_code' => 'ANG',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 206
            ], [
                'common_name' => 'Falkland Islands',
                'official_name' => 'Falkland Islands',
                'iso2_code' => 'FK',
                'iso3_code' => 'FLK',
                'calling_code' => '500',
                'currency_code' => 'FKP',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 207
            ], [
                'common_name' => 'Faroe Islands',
                'official_name' => 'Faroe Islands',
                'iso2_code' => 'FO',
                'iso3_code' => 'FRO',
                'calling_code' => '298',
                'currency_code' => 'DKK',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 208
            ], [
                'common_name' => 'French Guiana',
                'official_name' => 'French Guiana',
                'iso2_code' => 'GF',
                'iso3_code' => 'GUF',
                'calling_code' => '594',
                'currency_code' => 'EUR',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 209
            ], [
                'common_name' => 'French Polynesia',
                'official_name' => 'French Polynesia',
                'iso2_code' => 'PF',
                'iso3_code' => 'PYF',
                'calling_code' => '689',
                'currency_code' => 'XPF',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 210
            ], [
                'common_name' => 'Gibraltar',
                'official_name' => 'Gibraltar',
                'iso2_code' => 'GI',
                'iso3_code' => 'GIB',
                'calling_code' => '350',
                'currency_code' => 'GIP',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 211
            ], [
                'common_name' => 'Greenland',
                'official_name' => 'Greenland',
                'iso2_code' => 'GL',
                'iso3_code' => 'GRL',
                'calling_code' => '299',
                'currency_code' => 'DKK',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 212
            ], [
                'common_name' => 'Guadeloupe',
                'official_name' => 'Guadeloupe',
                'iso2_code' => 'GP',
                'iso3_code' => 'GLP',
                'calling_code' => '590',
                'currency_code' => 'EUR',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 213
            ], [
                'common_name' => 'Guam',
                'official_name' => 'Territory of Guam',
                'iso2_code' => 'GU',
                'iso3_code' => 'GUM',
                'calling_code' => '1671',
                'currency_code' => 'USD',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 214
            ], [
                'common_name' => 'Hong Kong',
                'official_name' => 'Hong Kong Special Administrative Region of China',
                'iso2_code' => 'HK',
                'iso3_code' => 'HKG',
                'calling_code' => '852',
                'currency_code' => 'HKD',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 215
            ], [
                'common_name' => 'Macau',
                'official_name' => 'Macao Special Administrative Region of China',
                'iso2_code' => 'MO',
                'iso3_code' => 'MAC',
                'calling_code' => '853',
                'currency_code' => 'MOP',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 216
            ], [
                'common_name' => 'Martinique',
                'official_name' => 'Martinique',
                'iso2_code' => 'MQ',
                'iso3_code' => 'MTQ',
                'calling_code' => '596',
                'currency_code' => 'EUR',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 217
            ], [
                'common_name' => 'Mayotte',
                'official_name' => 'Department of Mayotte',
                'iso2_code' => 'YT',
                'iso3_code' => 'MYT',
                'calling_code' => '262',
                'currency_code' => 'EUR',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 218
            ], [
                'common_name' => 'Montserrat',
                'official_name' => 'Montserrat',
                'iso2_code' => 'MS',
                'iso3_code' => 'MSR',
                'calling_code' => '1664',
                'currency_code' => 'XCD',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 219
            ], [
                'common_name' => 'New Caledonia',
                'official_name' => 'New Caledonia',
                'iso2_code' => 'NC',
                'iso3_code' => 'NCL',
                'calling_code' => '687',
                'currency_code' => 'XPF',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 220
            ], [
                'common_name' => 'Niue',
                'official_name' => 'Niue',
                'iso2_code' => 'NU',
                'iso3_code' => 'NIU',
                'calling_code' => '683',
                'currency_code' => 'NZD',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 221
            ], [
                'common_name' => 'Norfolk Island',
                'official_name' => 'Territory of Norfolk Island',
                'iso2_code' => 'NF',
                'iso3_code' => 'NFK',
                'calling_code' => '672',
                'currency_code' => 'AUD',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 222
            ], [
                'common_name' => 'Northern Mariana Islands',
                'official_name' => 'Commonwealth of the Northern Mariana Islands',
                'iso2_code' => 'MP',
                'iso3_code' => 'MNP',
                'calling_code' => '1670',
                'currency_code' => 'USD',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 223
            ], [
                'common_name' => 'Puerto Rico',
                'official_name' => 'Commonwealth of Puerto Rico',
                'iso2_code' => 'PR',
                'iso3_code' => 'PRI',
                'calling_code' => '1',
                'currency_code' => 'USD',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 224
            ], [
                'common_name' => 'Réunion',
                'official_name' => 'Réunion',
                'iso2_code' => 'RE',
                'iso3_code' => 'REU',
                'calling_code' => '262',
                'currency_code' => 'EUR',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 225
            ], [
                'common_name' => 'Saint Helena',
                'official_name' => 'Saint Helena',
                'iso2_code' => 'SH',
                'iso3_code' => 'SHN',
                'calling_code' => '290',
                'currency_code' => 'SHP',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 226
            ], [
                'common_name' => 'Saint Pierre and Miquelon',
                'official_name' => 'Overseas Collectivity of Saint-Pierre and Miquelon',
                'iso2_code' => 'PM',
                'iso3_code' => 'SPM',
                'calling_code' => '508',
                'currency_code' => 'EUR',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 227
            ], [
                'common_name' => 'Sint Maarten',
                'official_name' => 'Sint Maarten',
                'iso2_code' => 'SX',
                'iso3_code' => 'SXM',
                'calling_code' => '1721',
                'currency_code' => 'ANG',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 228
            ], [
                'common_name' => 'Taiwan',
                'official_name' => 'Republic of China',
                'iso2_code' => 'TW',
                'iso3_code' => 'TWN',
                'calling_code' => '886',
                'currency_code' => 'TWD',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 229
            ], [
                'common_name' => 'Tokelau',
                'official_name' => 'Tokelau',
                'iso2_code' => 'TK',
                'iso3_code' => 'TKL',
                'calling_code' => '690',
                'currency_code' => 'NZD',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 230
            ], [
                'common_name' => 'Turks and Caicos Islands',
                'official_name' => 'Turks and Caicos Islands',
                'iso2_code' => 'TC',
                'iso3_code' => 'TCA',
                'calling_code' => '1649',
                'currency_code' => 'USD',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 231
            ], [
                'common_name' => 'U.S. Virgin Islands',
                'official_name' => 'U.S. Virgin Islands',
                'iso2_code' => 'VI',
                'iso3_code' => 'VIR',
                'calling_code' => '1340',
                'currency_code' => 'USD',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 232
            ], [
                'common_name' => 'Wallis and Futuna',
                'official_name' => 'Territory of the Wallis and Futuna Islands',
                'iso2_code' => 'WF',
                'iso3_code' => 'WLF',
                'calling_code' => '681',
                'currency_code' => 'XPF',
                'is_enabled' => 1
            ]
        );
        DB::table('tb_x_country')->updateOrInsert(
            [
                'id' => 233
            ], [
                'common_name' => 'Kosovo',
                'official_name' => 'Republic of Kosovo',
                'iso2_code' => 'XK',
                'iso3_code' => 'XKX',
                'calling_code' => '383',
                'currency_code' => 'EUR',
                'is_enabled' => 1
            ]
        );
        
        DB::table('tb_x_country')->update([
                'flag_icon_filename' => DB::raw("CONCAT(iso2_code, '@2x.png')")
            ]);
    }
}
