            <?php
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
    $string = '';
    $numbers = '';
    $h2String = '';
    $h1 = preg_replace($re, $string, $str);
    $txt = preg_replace($re2, $numbers, $str);
    //$h2 = preg_replace_callback($re3,$str,$h2String,-1);
    echo $txt;

