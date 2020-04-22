<!DOCTYPE HTML>
  <html>
    <head> 
      <meta charset="utf-8"/>
      <title>COURS HTML</title>
    </head>
    <body>
    	<h1 align="center">HTML</h1>
    	<h4 id="position_paragraphe">1/POSITION PARAGRAPHE</h4>
    	<p> pour écrire une pargraphe dans n'importe quel position il faut ajouter "align" acoté de <mark>"p"</mark> , exemple : <mark>p align="center" </mark>. </p>
    	<h4>2/SAUTER LA LIGNE</h4>
    	<p> on utilise la balise <mark>"br/"</mark> .</p>
    	<h4>3/LA TAILLE D ECRITURE</h4>
    	<p>on travaille avec les <mark>"hx"</mark>,avec <mark>x="1,2,3,4,5,6" </mark>.</p>
    	<h4>4/AFFICHAFE D UN TEXTE</h4>
    	<ol><li><strong>en gras</strong> : "strong"</li><li><em>en italique</em> : "em"</li><li><mark>surligné</mark> : "mark"</li><li><del>supprimé</del>(barré) : "del"</li><li><ins>ajouté</ins>(souligné) : "ins"</li><li><sub>en indice</sub> : "sub"</li><li><sup>en exposant</sup> : "sup"</li></ol>
    	<h4>5/LIGNES non ORDONNEES</h4>
    	<p>pour créer des lignes non ordonnées on travaille avec la balise <mark>"ul""li"</mark> exemple : <ul><li>texte 1</li><li>texte 2</li><li>texte 3</li></ul> </p>
    	<h4>6/LIGNES ORDONNEES</h4>
    	<p>pour créer des lignes ordonnées on travaille avec la balise <mark>"ol""li"</mark> exemple : <ol><li>texte 1</li><li>texte 2</li><li>texte 3</li></ol> </p>
    	<h4>7/STRUCTURE DE DEFINITION</h4>
    	<p>objectif de cette partie c'est comment écrire les définitions,alors on a besoin des balises <mark>"dl""dt"</mark>terme à définire<mark>"dt""dd"</mark>définition<mark>"dd""dl"</mark> <br/><strong> exmple </strong>: <dl><dt>HTML5</dt><dd>Le HTML5, pour HyperText Markup Language 5, est une version du célèbre format HTML utilisé pour concevoir les sites Internet .</dd></dl></p>
    	<h4>8/LIEN</h4>
    	<p>SYNTAXE :<br/> <img src="image/syntaxe_lien.png"/> <br/>EXEMPLE : <a href="login.php">page login</a></p>
    	<h4>9/ANCRE INTERNE</h4>
    	<p>un ancre nous facilite la navigation sur une page web . on a besoin d'un ancre , lien et leu . <br/> Exemple : <a href="#position_paragraphe">partie postion paragraphe</a></p>
    	<h4>9/ANCRE EXTERNE</h4>
    	<p>un ancre externe a besoin à des liens externes . <br/> Exemple : <a href="login.php#login">id</a></p>
    	<h4>10/L ATTRIBUT TARGET</h4>
    	<p>cette attribut nous aide à ouvrire un lien dans une autre angle ou dans la meme angle .<br/>EXEMPEL : <a target="_blank" href="login.php">login dans aune autre angle</a><br/>EXEMPEL : <a target="_self" href="login.php">login dans cette angle</a></p>
    	<h4>11/L INFO BULLE</h4>
    	<p>cette attribut nous décrit le site qu'on veut accéder .<br/>EXEMPLE : <a href="login.php" title="page d'identification">login</a></p>
    	<h4>12/IMAGE</h4>
    	<p>pour inserer une image on a besoin de ce syntaxe suivant :<br/><img src="image/syntaxe_image.jpg" title="syntaxe_image" border=1/></p>
    	<h4>13/AUDIO</h4>
    	<p>pour inserer un audio on a besoin de ce syntaxe suivant :<br/><img src="image/syntaxe_audio.png" title="syntaxe_audio"  border=1/></p>
    	<h4>14/VIDEO</h4>
    	<p>pour inserer un video on a besoin de ce syntaxe suivant :<br/><img src="image/syntaxe_video.jpg" title="syntaxe_video" border=1/></p>
    	<h4>15/TABLEAU</h4>
    	<p>tout simplement pour dessiner un tableau on a besoin de balise suivants : <mark>"table" , "caption" , "tr" et "td"</mark>.<br/><br/>COMMENT?<br/><br/>alors on utilise le syntaxe suivant : <br/><br/><img src="image/syntaxe_tableau.png" title="syntexe_tableau" border=1 /><br/><br/>EXEMPLE : 
    		       <table align="center" width="40%" border=1>
                     <caption> IDENTIFICATION </caption>
                       <tr><td>nom</td><td>prénom</td></tr>
                       <tr><td>HAMOUCHE</td><td>Mohammed</td></tr>
                  </table>
        <br/><br/>si on veut fusioner des colonnes ou des ligne on utile les atrribut <mark>"colspan"</mark> pour fusioner des colones dans un meme ligne et pour fusioner des lignes dans une meme colone on utilise l'attribut <mark>"rowspan"</mark><br/><br/>EXEMPLE :
                  <table align="center" width="40%" border=1>
                     <caption> IDENTIFICATION </caption>
                       <tr><td>nom</td><td>prénom</td><td>surnom</td></tr>
                       <tr><td rowspan=2>HAMOUCHE </td><td colspan="2">Mohammed</td></tr>
                       <tr><td>Yasser</td><td>lion</td></tr>
                  </table>
       </p>
       <h4>16/FORMULAIRE (TEXTE,PASSWORD,AREA)</h4>
       <p>1-TEXTE : <br/><img src="image/syntax_text.png" border=1><br/><br/>EXEMPLE : <br/>
       <form>
       <p>
       email :&nbsp;
       <input type="text" name="email" id="email"/>
       </p>
       </form><br/><br/>
       2-PASSWORD : <br/><img src="image/syntax_password.png" border=1><br/><br/>EXEMPLE : <br/>
       <form>
       <p>
       password :&nbsp;
       <input type="password" name="password" id="password"/>
       </p>
       </form><br/><br/>
        3-AREA : <br/><img src="image/syntax_area.png" border=1><br/><br/>EXEMPLE : <br/>
       <form>
       <p>
       paragraphe :<br/><br/>
       <textarea name="paragraphe" id="paragraphe" rows="10" cols="50"></textarea>
       </p>
       </form>
       </p>   
       <h4>17/FORMULAIRE TYPE RADIO</h4>
       <p>SYNTAXE : <br/><img src="image/syntaxe_radio.png" border=1/><br/><br/>EXEMPLE : <br/>
       <form>
       <p>
       genre :<br/>
       <input type="radio" name="genre" value="garçon"/>
       garçon<br/>
       <input type="radio" name="genre" value="fille"/>
       fille
       </p>
       </form>
       </p>
       <h4>18/FORMULAIRE TYPE CHECKBOX</h4>
       <p>SYNTAXE : <br/><img src="image/syntaxe_check.png" border=1/><br/><br/>EXEMPLE : <br/>
       <form>
       <p>
       genre :<br/>
       <input type="CHECKBOX" name="genre" value="garçon"/>
       garçon<br/>
       <input type="CHECKBOX" name="genre" value="fille"/>
       fille
       </p>
       </form>
       </p>
       <h4>19/FORMULAIRE TYPE SELECT</h4>
        <p>SYNTAXE : <br/><img src="image/syntaxe_select.png" border=1/><br/><br/>EXEMPLE : <br/>
       <form>
       <p>pays<br/>
       <select name="pays" id="pays">
       	<optgroup label="europe">
       		<option value="france">france</option>
       		<option value="italie">italie</option>
       	</optgroup>
       	<optgroup label="afrique">
       		<option value="maroc">maroc</option>
       		<option value="egypt">egypt</option>
       	</optgroup>
       </select>
       </p>
       </form>
       <h4>20/FORMULAIRE TYPE SUBMIT</h4>
       SYNTAXE :<br/><img src="image/syntaxe_submit.png" border=1/>
       <br/><br/>EXEMPLE :<br/>
       <form>
       	<input type="submit" value="envoyer"/>
       </form>
       </p>
    </body>
  </html>