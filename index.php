<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>szamprob</title>
<link rel="stylesheet" href="../base.css" />
<!-- <script type="text/javascript" src="https://stackedit.io/libs/MathJax/MathJax.js?config=TeX-AMS_HTML"></script> -->

<style> 
.mytwocol {
    -webkit-column-count: 2; /* Chrome, Safari, Opera */
    -moz-column-count: 2; /* Firefox */
    column-count: 2;
}
</style>

</head>

<body>
<div class="container"><h1 id="számítógépes-problémamegoldás-fizika-tanár-bsc">Számítógépes problémamegoldás - Fizika tanár BSc</h1>
<hr>

<table>
<tbody>

<td style="border: 0px solid #ffffff ">
<h2 id="tematika">Tematika</h2>
<blockquote>
<ul>
<li>Notebook, REPL, Python nyelv, Markdown, pylab</li>
<li>Adatok ki-be olvasása, feldolgozása és ábrázolása</li>
<li>Matplotlib, ábrázolásról egy kicsit bővebben</li>
<li>Függvény illesztés</li>
<li>Integrálás</li>
<li>Szimbolikus számítások a SymPy csomag segítségével</li>
<li>Lineáris egyenletrendszerek</li>
<li>Differenciál egyenletrendszerek</li>
<li>Interaktív widget-ek </li>
</ul>
</blockquote>
<br>
</td>

<td style="border: 0px solid #ffffff ">
<h2 id="linkek">Hasznos linkek </h3>
<?php include 'vars.php'; echo "<a href=$bevezeto_foliak>Bevezető fóliák</a><br>"; ?>
<?php include 'vars.php'; echo "<a href=$hub_link_fix>Jupyterhub@ELTE</a><br>"; ?>
<a href="http://mybinder.org:/repo/oroszl/szamprob"><img src="http://mybinder.org/badge.svg"></img></a><br>
<a href="https://cloud.sagemath.com/">Sage Math Cloud</a> / <a href="https://tmpnb.org/">Tmpnb</a> <br>
<a href="https://jupyter.org/">Jupyter</a> / <a href="http://ipython.org/">IPython</a> <br>
<a href="http://www.scipy.org/">Scipy</a> / <a href="http://matplotlib.org/">Matplotlib</a>  <br>
<a href="http://python.hu/">Magyar python oldalak </a><br>
<a href="http://pythontutorial.pergamen.hu/downloads/html/tut/tut.html"> Magyar python dokumentáció </a><br>
<a href="http://nyelvek.inf.elte.hu/leirasok/Python/index.php">ELTE python dokumentáció </a><br>
<a href="https://perso.limsi.fr/pointal/_media/python:cours:mementopython3-english.pdf">Python 3 Cheat Sheat</a><br>
<a href="http://www.ntg.nl/doc/nemeth/lrovid.pdf">Latex-ről magyarul</a><br>
<a href="./old_2015">Régi honlap</a>
</td>
<td style="border: 0px solid #ffffff ">
<h2 id="linkek"  style="text-align: right"><a href="hf_montage">HF montázs</a></h3>
<img src="hf_montage/ifelifelse.png" width=300></img>
</td>

</tbody>
</table>
<hr><div class="se-section-delimiter"></div>

<h2 id="aktualis">Aktuális információk </h2>
<?php include 'vars.php'; echo "<a href=$kurzus_adatok>Kurzus adatok</a><br>"; ?>
<?php include 'vars.php'; echo "<a href=$kiseloadas>Kiselőadás vállalások</a><br>"; ?>
<?php include 'mod.php';?>
<hr><div class="se-section-delimiter"></div>

<h2 id="notebooks">Notebookok</h2>
<p>Az alábbi táblázat tartalmazza statikus(.html) és notebook (.ipynb) formátumban az órai és a házi feladat IPython notebook-okat. Továbbá néhány rövid összefoglaló puskát is a melyek alapvető feladatok megoldásában nyújthatnak némi segítséget. A feladatok közt szereplő ☠-el jelölt feladatok vagy alfeladatok nem kötelezőek viszont megoldásuk pozitívan befolyásolják a félév végén megszerzett érdemjegyet.</p>
<div align="center">

<table>
<tbody>
<tr>
<td style="text-align:center; border: 1px solid #dddddd "><p style="font-weight: bold;"> Mintapéldák </p> </td>
<td style="text-align:center; border: 1px solid #dddddd "><a href='static_notebooks/Package00/mintapelda00.html'>Mintapélda<br>00</a><br> 
                                                          <a href='notebooks/Package00/mintapelda00.ipynb' download>(forrás)</a></td>
<td style="text-align:center; border: 1px solid #dddddd "><a href='static_notebooks/Package01/mintapelda01.html'>Mintapélda<br>01</a><br> 
                                                          <a href='notebooks/Package01/mintapelda01.ipynb' download>(forrás)</a></td>
<td style="text-align:center; border: 1px solid #dddddd "><a href='static_notebooks/Package02/mintapelda02.html'>Mintapélda<br>02</a><br>  
                                                          <a href='notebooks/Package02/mintapelda02.ipynb' download>(forrás)</a></td>
<td style="text-align:center; border: 1px solid #dddddd "><a href='static_notebooks/Package03/mintapelda03.html'>Mintapélda<br>03</a><br>  
                                                          <a href='notebooks/Package03/mintapelda03.ipynb' download>(forrás)</a></td>
<td style="text-align:center; border: 1px solid #dddddd "><a href='static_notebooks/Package04/mintapelda04.html'>Mintapélda<br>04</a><br>  
                                                          <a href='notebooks/Package04/pakk.tgz' download>(forrás)</a></td>
<td style="text-align:center; border: 1px solid #dddddd "><a href='static_notebooks/Package05/mintapelda05.html'>Mintapélda<br>05</a><br>  
                                                          <a href='notebooks/Package05/mintapelda05.ipynb' download>(forrás)</a>
							  <a href='notebooks/Package05/data/' >(adatok)</a></td>
<td style="text-align:center; border: 1px solid #dddddd "><a href='static_notebooks/Package06/mintapelda06.html'>Mintapélda<br>06</a><br>  
                                                          <a href='notebooks/Package06/mintapelda06.ipynb' download>(forrás)</a>
							  <a href='notebooks/Package06/data/' >(adatok)</a></td>
<td style="text-align:center; border: 1px solid #dddddd "><a href='static_notebooks/Package07/mintapelda07.html'>Mintapélda<br>07</a><br>  
                                                          <a href='notebooks/Package07/mintapelda07.ipynb' download>(forrás)</a>
							  <a href='notebooks/Package07/data/' >(adatok)</a></td>
<td style="text-align:center; border: 1px solid #dddddd "><a href='static_notebooks/Package08/mintapelda08.html'>Mintapélda<br>08</a><br>  
                                                          <a href='notebooks/Package08/mintapelda08.ipynb' download>(forrás)</a></td>

    
</tr>
<tr>
<td style="text-align:center; border: 1px solid #dddddd "><p style="font-weight: bold;"> Feladatok </p> </td>
<td style="text-align:center; border: 1px solid #dddddd "><a href='static_notebooks/Package00/feladat00.html'>Feladat-00</a><br>  
                                                          <a href='notebooks/Package00/feladat00.ipynb' download>(forrás)</a></td>
<td style="text-align:center; border: 1px solid #dddddd "><a href='static_notebooks/Package01/feladat01.html'>Feladat-01</a><br>  
                                                          <a href='notebooks/Package01/feladat01.ipynb' download>(forrás)</a></td>
<td style="text-align:center; border: 1px solid #dddddd "><a href='static_notebooks/Package02/feladat02.html'>Feladat-02</a><br>  
                                                          <a href='notebooks/Package02/feladat02.ipynb' download>(forrás)</a></td>
<td style="text-align:center; border: 1px solid #dddddd "><a href='static_notebooks/Package03/feladat03.html'>Feladat-03</a><br>  
                                                          <a href='notebooks/Package03/feladat03.ipynb' download>(forrás)</a></td>
<td style="text-align:center; border: 1px solid #dddddd "><a href='static_notebooks/Package04/feladat04.html'>Feladat-04</a><br>  
                                                          <a href='notebooks/Package04/feladat04.ipynb' download>(forrás)</a></td>
<td style="text-align:center; border: 1px solid #dddddd "><a href='static_notebooks/Package05/feladat05.html'>Feladat-05</a><br>  
                                                          <a href='notebooks/Package05/feladat05.ipynb' download>(forrás)</a></td>
<td style="text-align:center; border: 1px solid #dddddd "><a href='static_notebooks/Package06/feladat06.html'>Feladat-06</a><br>  
                                                          <a href='notebooks/Package06/feladat06.ipynb' download>(forrás)</a></td>
<td style="text-align:center; border: 1px solid #dddddd "><a href='static_notebooks/Package07/feladat07.html'>Feladat-07</a><br>  
                                                          <a href='notebooks/Package07/feladat07.ipynb' download>(forrás)</a></td>
<td style="text-align:center; border: 1px solid #dddddd "><a href='static_notebooks/Package08/feladat08.html'>Feladat-08</a><br>  
                                                          <a href='notebooks/Package08/feladat08.ipynb' download>(forrás)</a></td>


</tr>
<tr>
<td style="text-align:center; border: 1px solid #dddddd "><p style="font-weight: bold;"> Puskák </p> </td>
<td style="text-align:center; border: 1px solid #dddddd "></td> 
<td style="text-align:center; border: 1px solid #dddddd "></td>
<td style="text-align:center; border: 1px solid #dddddd "><a href='static_notebooks/Package02/Cheat_sheet02.html'>Vezérlő utasítások<br>függvények</a></td>
<td style="text-align:center; border: 1px solid #dddddd "><a href='static_notebooks/Package03/Cheat_sheet03.html'>Modulok <br>ábrák</a></td>
<td style="text-align:center; border: 1px solid #dddddd "><a href='static_notebooks/Package04/Cheat_sheet04.html'>Matplotlib<br>interaktivitás</a></td>
<td style="text-align:center; border: 1px solid #dddddd "><a href='static_notebooks/Package05/Cheat_sheet05.html'>File-I/O</a></td>
<td style="text-align:center; border: 1px solid #dddddd "></td>
<td style="text-align:center; border: 1px solid #dddddd "><a href='static_notebooks/Package07/Cheat_sheet07.html'>Fit,FFT</a></td>
<td style="text-align:center; border: 1px solid #dddddd "><a href='static_notebooks/Package08/Cheat_sheet08.html'>Szimbolikus<br>számítások</a></td>

</tr>
</tbody>
</table>
</div>


<hr><div class="se-section-delimiter"></div>

<h2 id="javaslatok-egyéni-projektekre">Javaslatok egyéni projektekre</h2>
<blockquote>
<ul>
<li>A <a href="http://www.wolframalpha.com/">Wolfram Alpha</a> használata a matematika (és/vagy fizika/biológia/stb.) tanításában</li>
<li>Interaktív fizikai szimulációk az Interneten (keress!!)</li>
<li><a href="https://www.geogebra.org/">GeoGebra</a></li>
<li>Virtuális világok pl. <a href="http://www.crayonphysics.com/">Crayon Physics</a>, <a href="http://www.algodoo.com/">Algodoo</a>, mint fizkia illusztrációk</li>
<li>Fizikai kísérletek mobiltelefonnal (pl. Medvegy Tibor Fizikai Szemle <a href="http://fizikaiszemle.hu/archivum/fsz1403/MedvegyTibor.pdf">cikke</a> alapján)</li>
<li>Tanítást/tanulást segítő App-ok</li>
<li>Interaktív táblák a fizika oktatásában</li>
<li>E-learning eszközök a fizika oktatásban</li>
<li><a href="https://classroom.google.com">Google Class</a></li>
<li><a href="https://www.khanacademy.org/">Khan Academy</a></li>
<li>Citizen Science,<a href="http://setiathome.ssl.berkeley.edu/">SETI@HOME</a></li>
<li><a href="https://en.wikipedia.org/wiki/Peer_instruction">Peer Instruction</a></li>
<li><a href="https://scratch.mit.edu">Scratch</a></li>
<li><a href="https://phet.colorado.edu/hu/simulations/translated/hu">Phet</a></li>
<li><a href="http://portal.coospace.hu/hu/">CooSpace</a>,<a href="http://portal.coospace.hu/hu/">CooSpace az ELTE-n</a></li>
</ul>
</blockquote>

<p>Egy-egy témából egyeztetés után több projekt is készíthető. Használjátok bátran az Internetet témák és háttéranyg kereséséhez!</p>

<hr><div class="se-section-delimiter"></div>

<h2 id="követelmények">Követelmények</h2>

<blockquote>
<ul>
<li>Feladat Notebook-ok beadása</li>
<li>kisZHk</li>
<li>Egyéni prezentáció (kb 10p)</li>
</ul>
</blockquote>
</div></body>

</html>
