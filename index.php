<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP2</title>
    <link rel="stylesheet" href="stilus.css">
</head>
<body>
    <h1>Vezérlési szerkezetek</h1>
    <?php
        echo "<h2>Véletlen pozitív egész szám</h2>";
        echo(rand() . "<br>");
        echo "<h2>Zárt intervallumban (10, 20) véletlen szám</h2>";
        echo "A véletlen szám maximuma: <br>".getrandmax(). "<br>";

        $x= 7;
        $y = 6;
        $k;
            
        function myTest0() {
            //nem működik:
            //$y = $x + $y;
            $x = 1;
            $y = 2;
            $z = $x + $y;
            echo "Lokális változók összege: $z";
            // működik:
            $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
            echo "Az összeadás eredménye: ".$GLOBALS['z'];
        }
        myTest0();
        echo "<h3>Asszociatív tömb használata</h3>";
        $nevKor = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
        print_r($nevKor);
        $nevKor["Peter"] = 46;
        print_r($nevKor);
        echo "<br>Ben életkora: ".$nevKor["Ben"]. "<br>";

        echo (8/3)."<br>";
        echo "<h3>matematikai programcsalád</h3>";
        $adat1 = 8/3;
        echo "Két egész szám hányadosa: $adat1";
        echo floor($adat1)."<br>";

        echo "<h3>Elágazások</h3>";
        echo "<h2>Ternary operator</h2>";
        $logikai = 3 > 2;
        echo ($logikai ? 'Ez igaz.' : 'Ez hamis.')."<br>";
        echo (0 != null ? 'Ez igaz.' : 'Ez hamis.')."<br>";

        echo "<h2>OG Elágazás</h2>";
        if($logikai){
            echo "Ez igaz<br>";
        }
        else{
            echo "Ez hamis<br>";
        }

        echo "<h2>Switch elágazás</h2>";
        $honap = rand(1,12);
        switch ($honap) {
            case 1:
                echo "JANUÁR";
                break;
            case 2:
                echo "FEBRUÁR";
                break;
            case 3:
                echo "MÁRCIUS";
                break;
            case 4:
                echo "ÁPRILIS";
                break;
            case 5:
                echo "MÁJUS";
                break;
            case 6:
                echo "JÚNIUS";
                break;
            case 7:
                echo "JÚLIUS";
                break;
            case 8:
                echo "AUGUSZTUS";
                break;
            case 9:
                echo "SZEPTEMBER";
                break;
            case 10:
                echo "OKTÓBER";
                break;
            case 11:
                echo "NOVEMBER";
                break;
            default:
                echo "DECEMBER";
                break;
        }

        $otelemuTomb = array();
        echo "<h3>Véletlen számok:</h3><ul>";
        for ($i=0; $i < 5; $i++) { 
            $velSzam = rand(20, 30);
            array_push($otelemuTomb, $velSzam);
            echo "<li>$velSzam</li>";
        }
        echo "</ul>";

        $sakBetuk = 97;
        
        for ($i=97; $i < 105; $i++) {          
            echo chr($sakBetuk)." ";
            
            $sakBetuk++;
        }
    ?>
</body>
</html>