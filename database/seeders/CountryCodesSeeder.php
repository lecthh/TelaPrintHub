<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountryCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run() {
        $countries = [
            ['name' => 'Afghanistan', 'code' => '+93', 'flag_emoji' => '🇦🇫'],
            ['name' => 'Albania', 'code' => '+355', 'flag_emoji' => '🇦🇱'],
            ['name' => 'Algeria', 'code' => '+213', 'flag_emoji' => '🇩🇿'],
            ['name' => 'Andorra', 'code' => '+376', 'flag_emoji' => '🇦🇩'],
            ['name' => 'Angola', 'code' => '+244', 'flag_emoji' => '🇦🇴'],
            ['name' => 'Argentina', 'code' => '+54', 'flag_emoji' => '🇦🇷'],
            ['name' => 'Armenia', 'code' => '+374', 'flag_emoji' => '🇦🇲'],
            ['name' => 'Australia', 'code' => '+61', 'flag_emoji' => '🇦🇺'],
            ['name' => 'Austria', 'code' => '+43', 'flag_emoji' => '🇦🇹'],
            ['name' => 'Azerbaijan', 'code' => '+994', 'flag_emoji' => '🇦🇿'],
            ['name' => 'Bahamas', 'code' => '+1-242', 'flag_emoji' => '🇧🇸'],
            ['name' => 'Bahrain', 'code' => '+973', 'flag_emoji' => '🇧🇭'],
            ['name' => 'Bangladesh', 'code' => '+880', 'flag_emoji' => '🇧🇩'],
            ['name' => 'Barbados', 'code' => '+1-246', 'flag_emoji' => '🇧🇧'],
            ['name' => 'Belarus', 'code' => '+375', 'flag_emoji' => '🇧🇾'],
            ['name' => 'Belgium', 'code' => '+32', 'flag_emoji' => '🇧🇪'],
            ['name' => 'Belize', 'code' => '+501', 'flag_emoji' => '🇧🇿'],
            ['name' => 'Benin', 'code' => '+229', 'flag_emoji' => '🇧🇯'],
            ['name' => 'Bhutan', 'code' => '+975', 'flag_emoji' => '🇧🇹'],
            ['name' => 'Bolivia', 'code' => '+591', 'flag_emoji' => '🇧🇴'],
            ['name' => 'Bosnia and Herzegovina', 'code' => '+387', 'flag_emoji' => '🇧🇦'],
            ['name' => 'Botswana', 'code' => '+267', 'flag_emoji' => '🇧🇼'],
            ['name' => 'Brazil', 'code' => '+55', 'flag_emoji' => '🇧🇷'],
            ['name' => 'Brunei', 'code' => '+673', 'flag_emoji' => '🇧🇳'],
            ['name' => 'Bulgaria', 'code' => '+359', 'flag_emoji' => '🇧🇬'],
            ['name' => 'Burkina Faso', 'code' => '+226', 'flag_emoji' => '🇧🇫'],
            ['name' => 'Burundi', 'code' => '+257', 'flag_emoji' => '🇧🇮'],
            ['name' => 'Cambodia', 'code' => '+855', 'flag_emoji' => '🇰🇭'],
            ['name' => 'Cameroon', 'code' => '+237', 'flag_emoji' => '🇨🇲'],
            ['name' => 'Canada', 'code' => '+1', 'flag_emoji' => '🇨🇦'],
            ['name' => 'Cape Verde', 'code' => '+238', 'flag_emoji' => '🇨🇻'],
            ['name' => 'Central African Republic', 'code' => '+236', 'flag_emoji' => '🇨🇫'],
            ['name' => 'Chad', 'code' => '+235', 'flag_emoji' => '🇹🇩'],
            ['name' => 'Chile', 'code' => '+56', 'flag_emoji' => '🇨🇱'],
            ['name' => 'China', 'code' => '+86', 'flag_emoji' => '🇨🇳'],
            ['name' => 'Colombia', 'code' => '+57', 'flag_emoji' => '🇨🇴'],
            ['name' => 'Comoros', 'code' => '+269', 'flag_emoji' => '🇰🇲'],
            ['name' => 'Congo', 'code' => '+242', 'flag_emoji' => '🇨🇬'],
            ['name' => 'Costa Rica', 'code' => '+506', 'flag_emoji' => '🇨🇷'],
            ['name' => 'Croatia', 'code' => '+385', 'flag_emoji' => '🇭🇷'],
            ['name' => 'Cuba', 'code' => '+53', 'flag_emoji' => '🇨🇺'],
            ['name' => 'Cyprus', 'code' => '+357', 'flag_emoji' => '🇨🇾'],
            ['name' => 'Czech Republic', 'code' => '+420', 'flag_emoji' => '🇨🇿'],
            ['name' => 'Denmark', 'code' => '+45', 'flag_emoji' => '🇩🇰'],
            ['name' => 'Djibouti', 'code' => '+253', 'flag_emoji' => '🇩🇯'],
            ['name' => 'Dominica', 'code' => '+1-767', 'flag_emoji' => '🇩🇲'],
            ['name' => 'Dominican Republic', 'code' => '+1-809', 'flag_emoji' => '🇩🇴'],
            ['name' => 'Ecuador', 'code' => '+593', 'flag_emoji' => '🇪🇨'],
            ['name' => 'Egypt', 'code' => '+20', 'flag_emoji' => '🇪🇬'],
            ['name' => 'El Salvador', 'code' => '+503', 'flag_emoji' => '🇸🇻'],
            ['name' => 'Equatorial Guinea', 'code' => '+240', 'flag_emoji' => '🇬🇶'],
            ['name' => 'Eritrea', 'code' => '+291', 'flag_emoji' => '🇪🇷'],
            ['name' => 'Estonia', 'code' => '+372', 'flag_emoji' => '🇪🇪'],
            ['name' => 'Eswatini', 'code' => '+268', 'flag_emoji' => '🇸🇿'],
            ['name' => 'Ethiopia', 'code' => '+251', 'flag_emoji' => '🇪🇹'],
            ['name' => 'Fiji', 'code' => '+679', 'flag_emoji' => '🇫🇯'],
            ['name' => 'Finland', 'code' => '+358', 'flag_emoji' => '🇫🇮'],
            ['name' => 'France', 'code' => '+33', 'flag_emoji' => '🇫🇷'],
            ['name' => 'Gabon', 'code' => '+241', 'flag_emoji' => '🇬🇦'],
            ['name' => 'Gambia', 'code' => '+220', 'flag_emoji' => '🇬🇲'],
            ['name' => 'Georgia', 'code' => '+995', 'flag_emoji' => '🇬🇪'],
            ['name' => 'Germany', 'code' => '+49', 'flag_emoji' => '🇩🇪'],
            ['name' => 'Ghana', 'code' => '+233', 'flag_emoji' => '🇬🇭'],
            ['name' => 'Greece', 'code' => '+30', 'flag_emoji' => '🇬🇷'],
            ['name' => 'Grenada', 'code' => '+1-473', 'flag_emoji' => '🇬🇩'],
            ['name' => 'Guatemala', 'code' => '+502', 'flag_emoji' => '🇬🇹'],
            ['name' => 'Guinea', 'code' => '+224', 'flag_emoji' => '🇬🇳'],
            ['name' => 'Guinea-Bissau', 'code' => '+245', 'flag_emoji' => '🇬🇼'],
            ['name' => 'Guyana', 'code' => '+592', 'flag_emoji' => '🇬🇾'],
            ['name' => 'Haiti', 'code' => '+509', 'flag_emoji' => '🇭🇹'],
            ['name' => 'Honduras', 'code' => '+504', 'flag_emoji' => '🇭🇳'],
            ['name' => 'Hungary', 'code' => '+36', 'flag_emoji' => '🇭🇺'],
            ['name' => 'Iceland', 'code' => '+354', 'flag_emoji' => '🇮🇸'],
            ['name' => 'India', 'code' => '+91', 'flag_emoji' => '🇮🇳'],
            ['name' => 'Indonesia', 'code' => '+62', 'flag_emoji' => '🇮🇩'],
            ['name' => 'Iran', 'code' => '+98', 'flag_emoji' => '🇮🇷'],
            ['name' => 'Iraq', 'code' => '+964', 'flag_emoji' => '🇮🇶'],
            ['name' => 'Ireland', 'code' => '+353', 'flag_emoji' => '🇮🇪'],
            ['name' => 'Israel', 'code' => '+972', 'flag_emoji' => '🇮🇱'],
            ['name' => 'Italy', 'code' => '+39', 'flag_emoji' => '🇮🇹'],
            ['name' => 'Jamaica', 'code' => '+1-876', 'flag_emoji' => '🇯🇲'],
            ['name' => 'Japan', 'code' => '+81', 'flag_emoji' => '🇯🇵'],
            ['name' => 'Jordan', 'code' => '+962', 'flag_emoji' => '🇯🇴'],
            ['name' => 'Kazakhstan', 'code' => '+7', 'flag_emoji' => '🇰🇿'],
            ['name' => 'Kenya', 'code' => '+254', 'flag_emoji' => '🇰🇪'],
            ['name' => 'Kiribati', 'code' => '+686', 'flag_emoji' => '🇰🇮'],
            ['name' => 'Kuwait', 'code' => '+965', 'flag_emoji' => '🇰🇼'],
            ['name' => 'Kyrgyzstan', 'code' => '+996', 'flag_emoji' => '🇰🇬'],
            ['name' => 'Laos', 'code' => '+856', 'flag_emoji' => '🇱🇦'],
            ['name' => 'Latvia', 'code' => '+371', 'flag_emoji' => '🇱🇻'],
            ['name' => 'Lebanon', 'code' => '+961', 'flag_emoji' => '🇱🇧'],
            ['name' => 'Lesotho', 'code' => '+266', 'flag_emoji' => '🇱🇸'],
            ['name' => 'Liberia', 'code' => '+231', 'flag_emoji' => '🇱🇷'],
            ['name' => 'Libya', 'code' => '+218', 'flag_emoji' => '🇱🇾'],
            ['name' => 'Liechtenstein', 'code' => '+423', 'flag_emoji' => '🇱🇮'],
            ['name' => 'Lithuania', 'code' => '+370', 'flag_emoji' => '🇱🇹'],
            ['name' => 'Luxembourg', 'code' => '+352', 'flag_emoji' => '🇱🇺'],
            ['name' => 'Madagascar', 'code' => '+261', 'flag_emoji' => '🇲🇬'],
            ['name' => 'Malawi', 'code' => '+265', 'flag_emoji' => '🇲🇼'],
            ['name' => 'Malaysia', 'code' => '+60', 'flag_emoji' => '🇲🇾'],
            ['name' => 'Maldives', 'code' => '+960', 'flag_emoji' => '🇲🇻'],
            ['name' => 'Mali', 'code' => '+223', 'flag_emoji' => '🇲🇱'],
            ['name' => 'Malta', 'code' => '+356', 'flag_emoji' => '🇲🇹'],
            ['name' => 'Marshall Islands', 'code' => '+692', 'flag_emoji' => '🇲🇭'],
            ['name' => 'Mauritania', 'code' => '+222', 'flag_emoji' => '🇲🇷'],
            ['name' => 'Mauritius', 'code' => '+230', 'flag_emoji' => '🇲🇺'],
            ['name' => 'Mexico', 'code' => '+52', 'flag_emoji' => '🇲🇽'],
            ['name' => 'Micronesia', 'code' => '+691', 'flag_emoji' => '🇫🇲'],
            ['name' => 'Moldova', 'code' => '+373', 'flag_emoji' => '🇲🇩'],
            ['name' => 'Monaco', 'code' => '+377', 'flag_emoji' => '🇲🇨'],
            ['name' => 'Mongolia', 'code' => '+976', 'flag_emoji' => '🇲🇳'],
            ['name' => 'Montenegro', 'code' => '+382', 'flag_emoji' => '🇲🇪'],
            ['name' => 'Morocco', 'code' => '+212', 'flag_emoji' => '🇲🇦'],
            ['name' => 'Mozambique', 'code' => '+258', 'flag_emoji' => '🇲🇿'],
            ['name' => 'Myanmar', 'code' => '+95', 'flag_emoji' => '🇲🇲'],
            ['name' => 'Namibia', 'code' => '+264', 'flag_emoji' => '🇳🇦'],
            ['name' => 'Nauru', 'code' => '+674', 'flag_emoji' => '🇳🇷'],
            ['name' => 'Nepal', 'code' => '+977', 'flag_emoji' => '🇳🇵'],
            ['name' => 'Netherlands', 'code' => '+31', 'flag_emoji' => '🇳🇱'],
            ['name' => 'New Zealand', 'code' => '+64', 'flag_emoji' => '🇳🇿'],
            ['name' => 'Nicaragua', 'code' => '+505', 'flag_emoji' => '🇳🇮'],
            ['name' => 'Niger', 'code' => '+227', 'flag_emoji' => '🇳🇪'],
            ['name' => 'Nigeria', 'code' => '+234', 'flag_emoji' => '🇳🇬'],
            ['name' => 'North Korea', 'code' => '+850', 'flag_emoji' => '🇰🇵'],
            ['name' => 'North Macedonia', 'code' => '+389', 'flag_emoji' => '🇲🇰'],
            ['name' => 'Norway', 'code' => '+47', 'flag_emoji' => '🇳🇴'],
            ['name' => 'Oman', 'code' => '+968', 'flag_emoji' => '🇴🇲'],
            ['name' => 'Pakistan', 'code' => '+92', 'flag_emoji' => '🇵🇰'],
            ['name' => 'Palau', 'code' => '+680', 'flag_emoji' => '🇵🇼'],
            ['name' => 'Palestine', 'code' => '+970', 'flag_emoji' => '🇵🇸'],
            ['name' => 'Panama', 'code' => '+507', 'flag_emoji' => '🇵🇦'],
            ['name' => 'Papua New Guinea', 'code' => '+675', 'flag_emoji' => '🇵🇬'],
            ['name' => 'Paraguay', 'code' => '+595', 'flag_emoji' => '🇵🇾'],
            ['name' => 'Peru', 'code' => '+51', 'flag_emoji' => '🇵🇪'],
            ['name' => 'Philippines', 'code' => '+63', 'flag_emoji' => '🇵🇭'],
            ['name' => 'Poland', 'code' => '+48', 'flag_emoji' => '🇵🇱'],
            ['name' => 'Portugal', 'code' => '+351', 'flag_emoji' => '🇵🇹'],
            ['name' => 'Qatar', 'code' => '+974', 'flag_emoji' => '🇶🇦'],
            ['name' => 'Romania', 'code' => '+40', 'flag_emoji' => '🇷🇴'],
            ['name' => 'Russia', 'code' => '+7', 'flag_emoji' => '🇷🇺'],
            ['name' => 'Rwanda', 'code' => '+250', 'flag_emoji' => '🇷🇼'],
            ['name' => 'Saint Kitts and Nevis', 'code' => '+1-869', 'flag_emoji' => '🇰🇳'],
            ['name' => 'Saint Lucia', 'code' => '+1-758', 'flag_emoji' => '🇱🇨'],
            ['name' => 'Saint Vincent and the Grenadines', 'code' => '+1-784', 'flag_emoji' => '🇻🇨'],
            ['name' => 'Samoa', 'code' => '+685', 'flag_emoji' => '🇼🇸'],
            ['name' => 'San Marino', 'code' => '+378', 'flag_emoji' => '🇸🇲'],
            ['name' => 'Sao Tome and Principe', 'code' => '+239', 'flag_emoji' => '🇸🇹'],
            ['name' => 'Saudi Arabia', 'code' => '+966', 'flag_emoji' => '🇸🇦'],
            ['name' => 'Senegal', 'code' => '+221', 'flag_emoji' => '🇸🇳'],
            ['name' => 'Serbia', 'code' => '+381', 'flag_emoji' => '🇷🇸'],
            ['name' => 'Seychelles', 'code' => '+248', 'flag_emoji' => '🇸🇨'],
            ['name' => 'Sierra Leone', 'code' => '+232', 'flag_emoji' => '🇸🇱'],
            ['name' => 'Singapore', 'code' => '+65', 'flag_emoji' => '🇸🇬'],
            ['name' => 'Slovakia', 'code' => '+421', 'flag_emoji' => '🇸🇰'],
            ['name' => 'Slovenia', 'code' => '+386', 'flag_emoji' => '🇸🇮'],
            ['name' => 'Solomon Islands', 'code' => '+677', 'flag_emoji' => '🇸🇧'],
            ['name' => 'Somalia', 'code' => '+252', 'flag_emoji' => '🇸🇴'],
            ['name' => 'South Africa', 'code' => '+27', 'flag_emoji' => '🇿🇦'],
            ['name' => 'South Korea', 'code' => '+82', 'flag_emoji' => '🇰🇷'],
            ['name' => 'South Sudan', 'code' => '+211', 'flag_emoji' => '🇸🇸'],
            ['name' => 'Spain', 'code' => '+34', 'flag_emoji' => '🇪🇸'],
            ['name' => 'Sri Lanka', 'code' => '+94', 'flag_emoji' => '🇱🇰'],
            ['name' => 'Sudan', 'code' => '+249', 'flag_emoji' => '🇸🇩'],
            ['name' => 'Suriname', 'code' => '+597', 'flag_emoji' => '🇸🇷'],
            ['name' => 'Sweden', 'code' => '+46', 'flag_emoji' => '🇸🇪'],
            ['name' => 'Switzerland', 'code' => '+41', 'flag_emoji' => '🇨🇭'],
            ['name' => 'Syria', 'code' => '+963', 'flag_emoji' => '🇸🇾'],
            ['name' => 'Taiwan', 'code' => '+886', 'flag_emoji' => '🇹🇼'],
            ['name' => 'Tajikistan', 'code' => '+992', 'flag_emoji' => '🇹🇯'],
            ['name' => 'Tanzania', 'code' => '+255', 'flag_emoji' => '🇹🇿'],
            ['name' => 'Thailand', 'code' => '+66', 'flag_emoji' => '🇹🇭'],
            ['name' => 'Togo', 'code' => '+228', 'flag_emoji' => '🇹🇬'],
            ['name' => 'Tonga', 'code' => '+676', 'flag_emoji' => '🇹🇴'],
            ['name' => 'Trinidad and Tobago', 'code' => '+1-868', 'flag_emoji' => '🇹🇹'],
            ['name' => 'Tunisia', 'code' => '+216', 'flag_emoji' => '🇹🇳'],
            ['name' => 'Turkey', 'code' => '+90', 'flag_emoji' => '🇹🇷'],
            ['name' => 'Turkmenistan', 'code' => '+993', 'flag_emoji' => '🇹🇲'],
            ['name' => 'Tuvalu', 'code' => '+688', 'flag_emoji' => '🇹🇻'],
            ['name' => 'Uganda', 'code' => '+256', 'flag_emoji' => '🇺🇬'],
            ['name' => 'Ukraine', 'code' => '+380', 'flag_emoji' => '🇺🇦'],
            ['name' => 'United Arab Emirates', 'code' => '+971', 'flag_emoji' => '🇦🇪'],
            ['name' => 'United Kingdom', 'code' => '+44', 'flag_emoji' => '🇬🇧'],
            ['name' => 'United States', 'code' => '+1', 'flag_emoji' => '🇺🇸'],
            ['name' => 'Uruguay', 'code' => '+598', 'flag_emoji' => '🇺🇾'],
            ['name' => 'Uzbekistan', 'code' => '+998', 'flag_emoji' => '🇺🇿'],
            ['name' => 'Vanuatu', 'code' => '+678', 'flag_emoji' => '🇻🇺'],
            ['name' => 'Vatican City', 'code' => '+39-06', 'flag_emoji' => '🇻🇦'],
            ['name' => 'Venezuela', 'code' => '+58', 'flag_emoji' => '🇻🇪'],
            ['name' => 'Vietnam', 'code' => '+84', 'flag_emoji' => '🇻🇳'],
            ['name' => 'Yemen', 'code' => '+967', 'flag_emoji' => '🇾🇪'],
            ['name' => 'Zambia', 'code' => '+260', 'flag_emoji' => '🇿🇲'],
            ['name' => 'Zimbabwe', 'code' => '+263', 'flag_emoji' => '🇿🇼'],
        ];

        DB::table('country_codes')->insert($countries);
        
    }
}
