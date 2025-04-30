<?php 

    $translations = [
        'pl' => [
            'Home' => 'Strona Główna',
            'About' => 'O mnie',
            'Skills' => 'Umiejętności',
            'Projects' => 'Projekty',
            'Contact' => 'Kontakt',
            'Hi!' => 'Cześć!',
            "My name is Igor and I'm Frontend Developer" => 'Mam na imię Igor i jestem Frontend Developerem',
            'About me' => 'O mnie',
            "I'm Igor" => 'Mam na imię Igor',
            'My skills' => 'Moje umiejętności',
            'My projects' => 'Moje projekty',
            'Find me on:' => 'Znajdź mnie na:',
        ],
        'en' => [
            'Home' => 'Home',
            'About' => 'About',
            'Skills' => 'Skills',
            'Projects' => 'Projects',
            'Contact' => 'Contact',
            'Hi!' => 'Hi!',
            "My name is Igor and I'm Frontend Developer" => "My name is Igor and I'm Frontend Developer",
            'About me' => 'About me',
            "I'm Igor" => "I'm Igor",
            'My skills' => 'My skills',
            'My projects' => 'My projects',
            'Find me on:' => 'Find me on:',
        ]


        ];

        $language = 'en';
        if (isset($_GET['lang']) && in_array($_GET['lang'], ['pl', 'en'])) {
            $language = $_GET['lang'];
        }

        function translate($key) {
            global $translations, $language;
            if (isset($translations[$language][$key])) {
                return $translations[$language][$key];
            }
            return $key; 
        }



?>