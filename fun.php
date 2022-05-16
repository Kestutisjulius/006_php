            <?php
            echo '<pre>';
/** Parašykite funkciją, kurios argumentas būtų tekstas, kuris yra įterpiamas į h1 tagą; */
function h1($txt){
    return "<h1>$txt</h1>";
}
/** Parašykite funkciją su dviem argumentais, pirmas argumentas tekstas, įterpiamas į h tagą, o antrasis tago numeris (1-6).
 * Rašydami šią funkciją remkitės pirmame uždavinyje parašytą funkciją;
 */
function tag($txt, $tagNr){
    return "<h$tagNr>$txt</h$tagNr>";
}
/**  Generuokite atsitiktinį stringą, pasinaudodami kodu md5(time()).
 * Visus skaitmenis stringe įdėkite į h1 tagą.
 * Raides palikite. Jegu iš eilės eina keli skaitmenys, juos į tagą reikią dėti kartu
 * (h1 atsidaro prieš pirmą ir užsidaro po paskutinio)
 * Keitimui naudokite pirmo patobulintą (jeigu reikia) uždavinio funkciją ir preg_replace_callback();
 */
    $str = md5(time());
    $re = '/[a-f]/m';
    $re2 = '/[0-9]/m';
    $re3 = '/[0-9][0-9]/m';
    $reOk = '/[0-9]+/';
    $h1tag = function ($m) {
        return '<h1 style="display:inline; color:red">'.$m[0].'</h1>';
    };
    $numbers = '';
    $h2String = '';
    $h1 = preg_replace_callback($reOk, $h1tag, $str);
    echo $str;
    echo '<br>';
    echo $h1;
    /** 4. Parašykite funkciją, kuri skaičiuotų, iš kiek sveikų skaičių jos argumentas dalijasi be liekanos
     * (išskyrus vienetą ir patį save) Argumentą užrašykite taip, kad būtų galima įvesti tik sveiką skaičių;
     */
    function fourth($argumentas){
        $counter = 0;
        for($i = 2; $i < $argumentas; $i++){
            if($argumentas % $i == 0){
                $counter ++;
            }
        }return $counter;
    }    echo '<br>';
    echo (   fourth(555));
            echo '<br>';

    /** Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 33 iki 77.
     * Išrūšiuokite masyvą pagal daliklių be liekanos kiekį mažėjimo tvarka, panaudodami ketvirto uždavinio funkciją.
     */
    $mas = [];
    foreach (range(1001,1100) as $element){
        $mas[$element] = rand(33,77);
    }
    $nmas = [];

    $srt = function ($a, $b) {return fourth($a) <=> fourth($b);};

    usort($mas, $srt);
    //print_r($mas);

    /** 6.Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 333 iki 777.
     * Naudodami 4 uždavinio funkciją iš masyvo ištrinkite pirminius skaičius.
     */
    $mas6 = [];
    foreach (range(1,100) as $el6){
        $mas6[]= rand(333,777);
    }
    function delPrimary($arr){
        $newArr = [];
        foreach ($arr as $value){
            if(fourth($value)){
                $newArr[] = $value;
            }

        }return $newArr;
    }
    // print_r(delPrimary($mas6));

            /** 7. Sugeneruokite atsitiktinio (nuo 10 iki 20) ilgio masyvą,
             * kurio visi, išskyrus paskutinį, elementai yra atsitiktiniai skaičiai nuo 0 iki 10,
             * o paskutinis masyvas, kuris generuojamas pagal tokią pat salygą kaip ir pirmasis masyvas.
             * Viską pakartokite atsitiktinį nuo 10 iki 30  kiekį kartų.
             * Paskutinio masyvo paskutinis elementas yra lygus 0;
             */

    function r(){
        $mas7 = [];
        static $count=0;
        $count ++;
        foreach (range(1,$n = rand(10,20)) as $mIlgis) {

                $mas7[] = rand(0,10);
                if($mIlgis == $n && $count != 30){
                    $mas7[] = r();
                } else{
                    $mas7[] = 0;

                }
            }

        return $mas7;
    }
   $m7 = r();

            /** 8. Suskaičiuokite septinto uždavinio elementų, kurie nėra masyvai, sumą.
             * Skaičiuoti reikia visuose masyvuose ir submasyvuose.
             */
 function sum($arr){
    $nSum = 0;
    foreach ($arr as $v8) {
        if (!is_array($v8)) {
            $nSum += $v8;

        } else {
            $nSum += sum($v8);

        }
    }
    return $nSum;
}
//print_r(sum($m7));

 /** 9. Sugeneruokite masyvą iš trijų elementų, kurie yra atsitiktiniai skaičiai nuo 1 iki 33.
  * Jeigu tarp trijų paskutinių elementų yra nors vienas ne pirminis skaičius, prie masyvo pridėkite dar vieną elementą
  * - atsitiktinį skaičių nuo 1 iki 33.
  * Vėl patikrinkite pradinę sąlygą ir jeigu reikia pridėkite dar vieną elementą.
  * Kartokite, kol sąlyga nereikalaus pridėti elemento.
  */

            function primenumber($MyNum) {
                for($i = 2; $i < ($MyNum/2+1); $i++) {
                    if($MyNum % $i == 0){
                        return true;
                    }
                }
            }
function exrcse9(){
    $arr = [];
    for ($i = 0; $i < 3; $i++){
        $arr[]=rand(1,33);
    }
    foreach ($arr as $v9){
        if(!primenumber($v9)){
            $arr[]=rand(1,33);
            exrcse9();
        }
    } return $arr;
}
print_r(exrcse9());