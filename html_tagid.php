<html>
<!DOCTYPE html>
<!--HTML elemendid (v.a need, mis pole toetatud HTML5-s) -->
<head>
    <meta charset="UTF-8">
    <base href="ASSETS/" target="_blank">
    <link type="text/css" rel="stylesheet" href="CSS/css_prj2.css"/>
    <style>
        p {color:forestgreen;}
    </style>
    <title>
        HTML tagid.
    </title>
</head>
<body>

<address>
    Saada mulle kiri: <a href="mailto:kadri.mihhailova@khk.ee"><b>Kadri Mihhailova</b></a>.<br>
    või külasta kooli kodulehte:<br>
    <a href="http://khk.ee/"><abbr title="Tartu Kutsehariduskeskus">TKHK</abbr></a><br>
    Tartu, Eesti<br>
</address>
<hr>
<main>
    <article>
        <header>
            <h1>See on jänkuke.</h1>
            <p>Silmale vajutades saad <bdi> jänesesilma </bdi> devianarti, ninale vajutades saad jänkukese nina liigutuste seletuse..</p>
        </header>
    </article>

    <figure>
        <img id="bunny_pic" src="pictures/janku.gif" width="140" height="150" usemap="#bunny">
        <figcaption>See on jänku.</figcaption>
    </figure>

    <map name="bunny">
        <area shape="circle" coords="95,25,10" href="http://rabbiteyes.deviantart.com/" alt="eye">
        <area shape="circle" coords="60,46,10" href="http://language.rabbitspeak.com/follow-my-nose/" alt="nose">
    </map>
    <aside>
        <h2>Küüliku keskmine eluiga on 5-8 aastat ning eluea pikkust saab pikendada küüliku steriliseerimise/kastreerimise teel.</h2>
        <h3>Küülik ehk kodujänes (Oryctolagus cuniculus) on jäneslaste sugukonda kuuluv imetaja.</h3>
    </aside>
</main>
<br>
<br>
<br>
<div id="audio_div">
    <audio controls>
        <source src="audio/18 Lookin' Out My Back Door.mp3" type="audio/mpeg">

    </audio>
</div>


<h4 id="heading4">Sõna kirik on tagurpidi ka <bdo dir="rtl">kirik</bdo></h4>
<h5 id="heading5">Aga minu nimi Kadri on tagurpidi <bdo dir="rtl">Kadri</bdo></h5>


<h6><cite>„Varas“</cite> autor: Göran Tunströmi</h6>
<blockquote id="quote" cite="https://noiaelu.wordpress.com/2007/02/05/varas-varas-varas/">
    Johan on kolmeteistkümnes, kasulaps kaltsakaperes, väike tõsine olend keset räppa, joomist, kaklusi, koduterrorit, nõrgamõistuslikke juhme sugulasi.
    <br>
    Peaaegu üksi, kui mitte arvestada onutütar Hedvigit, teist väikest tõsiduselast. Seltsilist, trööstijat, armastatut.
</blockquote>

<canvas id="myCanvas">See on minu canvas, kuid kahjuks puudub mul JS fail..</canvas>

<code>See on arvutikood.</code>
<input list="berries" name="berry">
<datalist id="berries">
    <option value="Blueberry">
    <option value="Rasberry">
    <option value="Strawberry">
    <option value="Cherry">
</datalist>
<input type="submit">
</form>

<dl>
    <dt>Paber</dt>
    <dd>Valge ja sodimata.</dd>
    <dt>Sodipaber</dt>
    <dd>Enamasti pliiatsiga täis soditud.</dd>
</dl>

<p>Arvad, et mu tuju on <del>hea</del> <ins>halb</ins>?</p>

<details>
    <summary>Ava mind, kui tahad näha, mis siin sees on ;)</summary>
    <p> <em>Tüng!</em> Tegelikult pole ühtegi detaili.</p>
</details>

<p>Defineerin <dfn>KÜ</dfn>- Korterühistu</p>
<div id="div_dialog">
    <dialog id="dialog"open>Olen tulevikus kasulik kas hüpikakna või muu kasulikuna, et teistega suhelda. Jään teiste peale.</dialog>
</div>
<br>
<br>
<br>
<dialog id="dialog2"open>Olen tulevikus kasulik kas hüpikakna või muu kasulikuna, et teistega suhelda. Jään teiste peale.</dialog>
<br>
<br>
<br>
<embed src="pictures/blah.png" type="image/png"/>


<form>
    <fieldset>
        <legend>Isiklik info:</legend>
        <label for="name">NIMI</label>
        <input type="text" name="name" id="name"><br>
        <label for="email">E-POST</label>
        <input type="text" name="email" id="email"><br> <br>
        <button type="button">Edasi</button>
    </fieldset>
</form>
<section>
    <footer id="footer">
        <p><small>Made by: </small><i> <mark>Kats von Päts</mark></i></p>
    </footer>
</section>
<iframe src="https://noiaelu.wordpress.com/2007/02/05/varas-varas-varas/"></iframe>

<form>
    <label for="age">VANUS</label>
    <input type="text" name="age" id="age"><br>
    Vaata kui turvaline: <keygen name="security">
</form>


<kbd>Keyboard input</kbd>
<br>
<label for="radiobutton">Proovi radiobutton</label>
<input type="radio" name="button" id="radiobutton" value="button"><br>


<menu type="toolbar" id="mymenu">
    <menuitem label="Feisbuuk" icon="pictures/FB.jpg" onclick="window.open('//facebook.com/sharer/sharer.php?u=' + window.location.href);">
    </menuitem>
</menu>
<meter value="0.95">95%</meter>


<nav>
    <a href="/html/">HTML</a> |
    <a href="/css/">CSS</a> |
    <a href="/js/">JavaScript</a> |
    <a href="/jquery/">jQuery</a> |
    <a href="/python">Python</a>
</nav>

<script>
    document.write("Scripti kiri")
</script>
<br>
<br>
<noscript>See on brauserile, mis ei toeta scripti</noscript>
<object data="pictures/blah3.png" type="image/png"></object>

<select id="selection">
    <optgroup label="Maiused">
        <option value="icecream">jäätis</option>
        <option value="candy">komm</option>
    </optgroup>
</select><br><br>

<form id="a_plus_b" oninput="x.value=parseInt(a.value)+parseInt(b.value)">
    <label for="a">First number</label> +
    <label for="b">Second number</label> = Equals <br>
    <input type="number" id="a" value="0">
    +<input type="number" id="b" value="0">
    =<output name="x" for="ab"></output>
</form>

<!--<object data="audio/01 - Kukerpillid - Mis teed.mp3">
    <param name="autoplay" value="false">

</object>-->

<pre id="pre">
    Nende "< pre >" tagide vahel
    olev, jätab kõik samaks.
    (tühikud    , reavahetused jne..)
</pre>
<br>
<br>
<textarea id="txt_area" rows="5">Laulan suurima hea meelega. Teie aga kuulake.</textarea>
<progress id="progress_bar" value="15" max="100">15/100</progress>

<span id="only_span">Tarmo Amer kirjutab Delfis vabamüürlastest <wbr> <q>Inimene on kummaline olend — läbi kogu oma ajaloo <wbr> on ta toetunud müütidele ja nendest jõudu ammutanud, <wbr>teisalt aga imekspandava visadusega üritanud neid eitada, <wbr> purustada, paljastada, olematuks teha. <wbr>Võib-olla ongi Coelhol õigus, kui ta ütleb, et <wbr> me hävitame selle, mida armastame.</q></span>


<ruby>
    漢 <rt><rp>(</rp>ゴシック体<rp>)</rp></rt>
</ruby>
<br>
<p><s>Täna on reede.</s> Ei, täna on ikka teisipäev.</p>
<samp>Tip: This tag( "< samp >" is <strong>not deprecated </strong>, but it is possible to achieve richer effect with CSS.
</samp>

<p id="methane">Metaani ehk metüülhüdriidi molekulvalem on CH<sub>4</sub></p><br>
<p id="equation"> Ühe tundmatuga ruutvõrrand on teisendatav kujule <b>ax<sup>2</sup>+ bx+ c= 0</b></p>

<table id="table">
    <caption>See ongi päris tabel.</caption>
    <colgroup>
        <col span="2">
    </colgroup>
    <thead>

    <tr>
        <th>See on tabel.</th>
    </tr>
    </thead>
    <tfoot>
    <tr>
        <td>Tabeli</td>
        <td>jalg</td>
    </tr>
    </tfoot>
    <tbody>
    <tr>
        <td>
            1. esimene
        </td>
        <td>
            1. teine
        </td>
    </tr>
    <tr>
        <td>
            2. esimene
        </td>
        <td>
            2. teine
        </td>
    </tr>
    </tbody>
</table>

<p>Joel on sündinud: <time datetime="2010-04-30 19:57">Vastlapäeval</time>.</p>

<video id="video" controls>
    <source src="video/Terminator 4.mp4" type="video/mp4">
    <track src="video/subs/subtitle.vtt" kind="subtitles" srclang="en" label="English">
</video>

<p>Kas sa oskad kirjutada sõna: apelsin? Või kirjutad selle kui <u>apelsiin?</u> </p>
<p id="useful">Note: The HTML 5 specification reminds developers that other elements are almost always more appropriate than < u >.</p>
<var>Kasulik variable.</var>
<div id="lists">
    <ul> Unordered list
        <li>Unordered listi esimene liige
            <ol>Ordered list
                <li>Ordered listi esimene liige
                </li>
                <li> Ordered listi teine liige
                </li>
            </ol>
        </li>
        <li>Unordered listi teine liige
            <ol>Ordered list
                <li>Ordered listi esimene liige
                </li>

                <li> Ordered listi teine liige
                </li>
            </ol>
        </li>
    </ul>
</div>




</body>

</html>