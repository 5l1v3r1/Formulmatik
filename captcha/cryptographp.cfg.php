<?php
$cryptwidth  = 150;  
$cryptheight = 55;   
$bgR  = 100;         
$bgG  = 230;        
$bgB  = 230;        
$bgclear = false;     
$bgimg = '';                 
$bgframe = false;    


// ----------------------------
// Configuration des caract�res
// ----------------------------

// Couleur de base des caract�res

$charR = 50;     // Couleur des caract�res au format RGB: Red (0->255)
$charG = 50;     // Couleur des caract�res au format RGB: Green (0->255)
$charB = 50;     // Couleur des caract�res au format RGB: Blue (0->255)

$charcolorrnd = true;      // Choix al�atoire de la couleur.
$charcolorrndlevel = 4;   

$charclear = 0;  



$tfont[] = 'WAVY.TTF';  
  


// Caracteres autoris�s
// Attention, certaines polices ne distinguent pas (ou difficilement) les majuscules 
// et les minuscules. Certains caract�res sont faciles � confondre, il est donc
// conseill� de bien choisir les caract�res utilis�s.

$charel = 'ABCDEFGHKLMNPRTWXYZ234569';       // Caract�res autoris�s

$crypteasy = false;       // Cr�ation de cryptogrammes "faciles � lire" (true/false)
                         // compos�s alternativement de consonnes et de voyelles.

$charelc = 'BCDFGYLMPRTVWX';   // Consonnes utilis�es si $crypteasy = true
$charelv = 'AEIOUZ';              // Voyelles utilis�es si $crypteasy = true

$difuplow = false;          // Diff�rencie les Maj/Min lors de la saisie du code (true, false)

$charnbmin = 8;         // Nb minimum de caracteres dans le cryptogramme
$charnbmax = 8;         // Nb maximum de caracteres dans le cryptogramme

$charspace = 16;        // Espace entre les caracteres (en pixels)
$charsizemin = 16;      // Taille minimum des caract�res
$charsizemax = 18;      // Taille maximum des caract�res

$charanglemax  = 10;     // Angle maximum de rotation des caracteres (0-360)
$charup   = false;        // D�placement vertical al�atoire des caract�res (true/false)

// Effets suppl�mentaires

$cryptgaussianblur = false; // Transforme l'image finale en brouillant: m�thode Gauss (true/false)
                            // uniquement si PHP >= 5.0.0
$cryptgrayscal = false;     // Transforme l'image finale en d�grad� de gris (true/false)
                            // uniquement si PHP >= 5.0.0

// ----------------------
// Configuration du bruit
// ----------------------

$noisepxmin = 0;      // Bruit: Nb minimum de pixels al�atoires
$noisepxmax = 0;      // Bruit: Nb maximum de pixels al�atoires

$noiselinemin = 0;     // Bruit: Nb minimum de lignes al�atoires
$noiselinemax = 0;     // Bruit: Nb maximum de lignes al�atoires

$nbcirclemin = 0;      // Bruit: Nb minimum de cercles al�atoires 
$nbcirclemax = 0;      // Bruit: Nb maximim de cercles al�atoires

$noisecolorchar  = 2;  // Bruit: Couleur d'ecriture des pixels, lignes, cercles: 
                       // 1: Couleur d'�criture des caract�res
                       // 2: Couleur du fond
                       // 3: Couleur al�atoire
                       
$brushsize = 5;        // Taille d'ecriture du princeaiu (en pixels) 
                       // de 1 � 25 (les valeurs plus importantes peuvent provoquer un 
                       // Internal Server Error sur certaines versions de PHP/GD)
                       // Ne fonctionne pas sur les anciennes configurations PHP/GD

$noiseup = true;      // Le bruit est-il par dessus l'ecriture (true) ou en dessous (false) 

// --------------------------------
// Configuration syst�me & s�curit�
// --------------------------------

$cryptformat = "png";   // Format du fichier image g�n�r� "GIF", "PNG" ou "JPG"
				                // Si vous souhaitez un fond transparent, utilisez "PNG" (et non "GIF")
				                // Attention certaines versions de la bibliotheque GD ne gerent pas GIF !!!

$cryptsecure = "md5";    // M�thode de crytpage utilis�e: "md5", "sha1" ou "" (aucune)
                         // "sha1" seulement si PHP>=4.2.0
                         // Si aucune m�thode n'est indiqu�e, le code du cyptogramme est stock� 
                         // en clair dans la session.
                       
$cryptusetimer = 0;        // Temps (en seconde) avant d'avoir le droit de reg�n�rer un cryptogramme

$cryptusertimererror = 3;  // Action � r�aliser si le temps minimum n'est pas respect�:
                           // 1: Ne rien faire, ne pas renvoyer d'image.
                           // 2: L'image renvoy�e est "images/erreur2.png" (vous pouvez la modifier)
                           // 3: Le script se met en pause le temps correspondant (attention au timeout
                           //    par d�faut qui coupe les scripts PHP au bout de 30 secondes)
                           //    voir la variable "max_execution_time" de votre configuration PHP

$cryptusemax = 1000;  // Nb maximum de fois que l'utilisateur peut g�n�rer le cryptogramme
                      // Si d�passement, l'image renvoy�e est "images/erreur1.png"
                      // PS: Par d�faut, la dur�e d'une session PHP est de 180 mn, sauf si 
                      // l'hebergeur ou le d�veloppeur du site en ont d�cid� autrement... 
                      // Cette limite est effective pour toute la dur�e de la session. 
                      
$cryptoneuse = true;  // Si vous souhaitez que la page de verification ne valide qu'une seule 
                       // fois la saisie en cas de rechargement de la page indiquer "true".
                       // Sinon, le rechargement de la page confirmera toujours la saisie.                          
                      
?>
