<?php

namespace App\Models\Sushi;

use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class Language extends Model
{
    use Sushi;

    protected $rows = [
        [
            'name' => 'AKAN', 
            'abbreviation' => 'TWS'
        ],
        [
            'name' => 'AMHARIC', 
            'abbreviation' => 'AMH'
        ],
        [
            'name' => 'ARABIC, ALGERIAN SPOKEN', 
            'abbreviation' => 'ARQ'
        ],
        [
            'name' => 'ARABIC, EGYPTIAN SPOKEN', 
            'abbreviation' => 'ARZ'
        ],
        [
            'name' => 'ARABIC, MESOPOTAMIAN SPOKEN', 
            'abbreviation' => 'ACM'
        ],
        [
            'name' => 'ARABIC, MOROCCAN SPOKEN', 
            'abbreviation' => 'ARY'
        ],
        [
            'name' => 'ARABIC, NAJDI SPOKEN', 
            'abbreviation' => 'ARS'
        ],
        [
            'name' => 'ARABIC, NORTH LEVANTINE SPOKEN', 
            'abbreviation' => 'APC'
        ],
        [
            'name' => 'ARABIC, SAIDI SPOKEN', 
            'abbreviation' => 'AEC'
        ],
        [
            'name' => 'ARABIC, SANAANI SPOKEN', 
            'abbreviation' => 'AYN'
        ],
        [
            'name' => 'ARABIC, SUDANESE SPOKEN', 
            'abbreviation' => 'APD'
        ],
        [
            'name' => 'ARABIC, TUNISIAN SPOKEN', 
            'abbreviation' => 'AEB'
        ],
        [
            'name' => 'ASSAMESE', 
            'abbreviation' => 'ASM'
        ],
        [
            'name' => 'AWADHI', 
            'abbreviation' => 'AWD'
        ],
        [
            'name' => 'AZERBAIJANI, NORTH', 
            'abbreviation' => 'AZE'
        ],
        [
            'name' => 'AZERBAIJANI, SOUTH', 
            'abbreviation' => 'AZB'
        ],
        [
            'name' => 'BELARUSAN', 
            'abbreviation' => 'RUW'
        ],
        [
            'name' => 'BENGALI', 
            'abbreviation' => 'BNG'
        ],
        [
            'name' => 'BHOJPURI', 
            'abbreviation' => 'BHJ'
        ],
        [
            'name' => 'BULGARIAN', 
            'abbreviation' => 'BLG'
        ],
        [
            'name' => 'BURMESE', 
            'abbreviation' => 'BMS'
        ],
        [
            'name' => 'CEBUANO', 
            'abbreviation' => 'CEB'
        ],
        [
            'name' => 'CHHATTISGARHI', 
            'abbreviation' => 'HNE'
        ],
        [
            'name' => 'CHINESE, GAN', 
            'abbreviation' => 'KNN'
        ],
        [
            'name' => 'CHINESE, HAKKA', 
            'abbreviation' => 'HAK'
        ],
        [
            'name' => 'CHINESE, JINYU', 
            'abbreviation' => 'CJY'
        ],
        [
            'name' => 'CHINESE, MANDARIN', 
            'abbreviation' => 'CHN'
        ],
        [
            'name' => 'CHINESE, MIN BEI', 
            'abbreviation' => 'MNP'
        ],
        [
            'name' => 'CHINESE, MIN NAN', 
            'abbreviation' => 'CFR'
        ],
        [
            'name' => 'CHINESE, WU', 
            'abbreviation' => 'WUU'
        ],
        [
            'name' => 'CHINESE, XIANG', 
            'abbreviation' => 'HSN'
        ],
        [
            'name' => 'CHINESE, YUE', 
            'abbreviation' => 'YUH'
        ],
        [
            'name' => 'CHITTAGONIAN', 
            'abbreviation' => 'CIT'
        ],
        [
            'name' => 'CZECH', 
            'abbreviation' => 'CZC'
        ],
        [
            'name' => 'DECCAN', 
            'abbreviation' => 'DCC'
        ],
        [
            'name' => 'DUTCH', 
            'abbreviation' => 'DUT'
        ],
        [
            'name' => 'ENGLISH', 
            'abbreviation' => 'ENG'
        ],
        [
            'name' => 'FARSI, EASTERN', 
            'abbreviation' => 'PRS'
        ],
        [
            'name' => 'FARSI, WESTERN', 
            'abbreviation' => 'PES'
        ],
        [
            'name' => 'FRENCH', 
            'abbreviation' => 'FRN'
        ],
        [
            'name' => 'FULFULDE, NIGERIAN', 
            'abbreviation' => 'FUV'
        ],
        [
            'name' => 'GERMAN, STANDARD', 
            'abbreviation' => 'GER'
        ],
        [
            'name' => 'GREEK', 
            'abbreviation' => 'GRK'
        ],
        [
            'name' => 'GUJARATI', 
            'abbreviation' => 'GJR'
        ],
        [
            'name' => 'HAITIAN CREOLE FRENCH', 
            'abbreviation' => 'HAT'
        ],
        [
            'name' => 'HARYANVI', 
            'abbreviation' => 'BGC'
        ],
        [
            'name' => 'HAUSA', 
            'abbreviation' => 'HUA'
        ],
        [
            'name' => 'HILIGAYNON', 
            'abbreviation' => 'HIL'
        ],
        [
            'name' => 'HINDI', 
            'abbreviation' => 'HND'
        ],
        [
            'name' => 'HUNGARIAN', 
            'abbreviation' => 'HNG'
        ],
        [
            'name' => 'IGBO', 
            'abbreviation' => 'IGR'
        ],
        [
            'name' => 'ILOCANO', 
            'abbreviation' => 'ILO'
        ],
        [
            'name' => 'INDONESIAN', 
            'abbreviation' => 'INZ'
        ],
        [
            'name' => 'ITALIAN', 
            'abbreviation' => 'ITN'
        ],
        [
            'name' => 'JAPANESE', 
            'abbreviation' => 'JPN'
        ],
        [
            'name' => 'JAVANESE', 
            'abbreviation' => 'JAN'
        ],
        [
            'name' => 'KANNADA', 
            'abbreviation' => 'KJV'
        ],
        [
            'name' => 'KAZAKH', 
            'abbreviation' => 'KAZ'
        ],
        [
            'name' => 'KHMER, CENTRAL', 
            'abbreviation' => 'KMR'
        ],
        [
            'name' => 'KOREAN', 
            'abbreviation' => 'KKN'
        ],
        [
            'name' => 'KURMANJI', 
            'abbreviation' => 'KUR'
        ],
        [
            'name' => 'LOMBARD', 
            'abbreviation' => 'LMO'
        ],
        [
            'name' => 'MADURA', 
            'abbreviation' => 'MHJ'
        ],
        [
            'name' => 'MAGAHI', 
            'abbreviation' => 'MQM'
        ],
        [
            'name' => 'MAITHILI', 
            'abbreviation' => 'MKP'
        ],
        [
            'name' => 'MALAGASY', 
            'abbreviation' => 'MEX'
        ],
        [
            'name' => 'MALAY', 
            'abbreviation' => 'MLI'
        ],
        [
            'name' => 'MALAYALAM', 
            'abbreviation' => 'MJS'
        ],
        [
            'name' => 'MARATHI', 
            'abbreviation' => 'MRT'
        ],
        [
            'name' => 'MARWARI', 
            'abbreviation' => 'MKD'
        ],
        [
            'name' => 'NAPOLETANO-CALABRESE', 
            'abbreviation' => 'NPL'
        ],
        [
            'name' => 'NEPALI', 
            'abbreviation' => 'NEP'
        ],
        [
            'name' => 'ORIYA', 
            'abbreviation' => 'ORY'
        ],
        [
            'name' => 'OROMO, WEST-CENTRAL', 
            'abbreviation' => 'GAZ'
        ],
        [
            'name' => 'PANJABI, EASTERN', 
            'abbreviation' => 'PNJ'
        ],
        [
            'name' => 'PANJABI, WESTERN', 
            'abbreviation' => 'PNB'
        ],
        [
            'name' => 'PASHTO, NORTHERN', 
            'abbreviation' => 'PBU'
        ],
        [
            'name' => 'PASHTO, SOUTHERN', 
            'abbreviation' => 'PBT'
        ],
        [
            'name' => 'POLISH', 
            'abbreviation' => 'PQL'
        ],
        [
            'name' => 'PORTUGUESE', 
            'abbreviation' => 'POR'
        ],
        [
            'name' => 'ROMANIAN', 
            'abbreviation' => 'RUM'
        ],
        [
            'name' => 'RUSSIAN', 
            'abbreviation' => 'RUS'
        ],
        [
            'name' => 'RWANDA', 
            'abbreviation' => 'RUA'
        ],
        [
            'name' => 'SARAIKI', 
            'abbreviation' => 'SKR'
        ],
        [
            'name' => 'SERBO-CROATIAN', 
            'abbreviation' => 'SRC'
        ],
        [
            'name' => 'SHONA', 
            'abbreviation' => 'SHD'
        ],
        [
            'name' => 'SINDHI', 
            'abbreviation' => 'SND'
        ],
        [
            'name' => 'SINHALA', 
            'abbreviation' => 'SNH'
        ],
        [
            'name' => 'SOMALI', 
            'abbreviation' => 'SOM'
        ],
        [
            'name' => 'SPANISH', 
            'abbreviation' => 'SPN'
        ],
        [
            'name' => 'SUNDA', 
            'abbreviation' => 'SUO'
        ],
        [
            'name' => 'SWEDISH', 
            'abbreviation' => 'SWD'
        ],
        [
            'name' => 'TAGALOG', 
            'abbreviation' => 'TGL'
        ],
        [
            'name' => 'TAMIL', 
            'abbreviation' => 'TCV'
        ],
        [
            'name' => 'TATAR', 
            'abbreviation' => 'TTR'
        ],
        [
            'name' => 'TELUGU', 
            'abbreviation' => 'TCW'
        ],
        [
            'name' => 'THAI', 
            'abbreviation' => 'THJ'
        ],
        [
            'name' => 'THAI, NORTHEASTERN', 
            'abbreviation' => 'TTS'
        ],
        [
            'name' => 'TURKISH', 
            'abbreviation' => 'TRK'
        ],
        [
            'name' => 'UKRAINIAN', 
            'abbreviation' => 'UKR'
        ],
        [
            'name' => 'URDU', 
            'abbreviation' => 'URD'
        ],
        [
            'name' => 'UYGHUR', 
            'abbreviation' => 'UIG'
        ],
        [
            'name' => 'UZBEK, NORTHERN', 
            'abbreviation' => 'UZB'
        ],
        [
            'name' => 'VIETNAMESE', 
            'abbreviation' => 'VIE'
        ],
        [
            'name' => 'YORUBA', 
            'abbreviation' => 'YOR'
        ],
        [
            'name' => 'ZHUANG, NORTHERN', 
            'abbreviation' => 'CCX'
        ],
        [
            'name' => 'ZULU', 
            'abbreviation' => 'ZUU'
            ]
    ];
}