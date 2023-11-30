if ($liczba % 2 == 0) {
            echo "Liczba $liczba jest parzysta.";
        } else {
            echo "Liczba $liczba jest nieparzysta.";
        }



        if ($liczba1 % $liczba2 == 0) {
                echo "Liczba $liczba1  jest podzielna przez $liczba2.";
            } else {
                echo "Liczba $liczba1  nie jest podzielna przez $liczba2.";
            }
   




        if ($liczba >= 100 && $liczba < 150) {
            echo "Liczba $liczba mieści się w przedziale od 100  do 150 .";
        } else {
            echo "Liczba $liczba nie mieści się w przedziale od 100  do 150 .";
        }



        if ($liczba < 0) {
            echo "Liczba $liczba jest mniejsza od zera.";
        } elseif ($liczba == 0) {
            echo "Liczba $liczba jest równa zero.";
        } else {
            echo "Liczba $liczba jest większa od zera.";
        }



        if ($wiek < 11) {
            echo "Masz mniej niż 11 lat, jesteś dzieckiem.";
        } elseif ($wiek >= 11 && $wiek <= 17) {
            echo "Masz między 11 a 17 lat, jesteś nastolatkiem.";
        } else {
            echo "Masz 18 lat lub więcej, jesteś dorosły.";
        }




        if (($rok % 4 == 0 && $rok % 100 != 0) || ($rok % 400 == 0)) {
            $iloscDniWLutym = 29; // Luty w roku przestępnym ma 29 dni
        } else {
            $iloscDniWLutym = 28; // Luty w zwykłym roku ma 28 dni
        }

        echo "Luty roku $rok ma $iloscDniWLutym dni.";




        $najmniejszaLiczba = min($liczba1, $liczba2, $liczba3);

        echo "Najmniejsza liczba spośród podanych to: $najmniejszaLiczba";


        if ($liczba1 == $liczba2 || $liczba1 == $liczba3 || $liczba2 == $liczba3) {
            echo "Przynajmniej dwie z podanych liczb są takie same.";
        } else {
            echo "Żadne z podanych liczb nie są takie same.";
        }

