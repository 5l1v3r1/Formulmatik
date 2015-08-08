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
// Configuration des caractères
// ----------------------------

// Couleur de base des caractères

$charR = 50;     // Couleur des caractères au format RGB: Red (0->255)
$charG = 50;     // Couleur des caractères au format RGB: Green (0->255)
$charB = 50;     // Couleur des caractères au format RGB: Blue (0->255)

$charcolorrnd = true;      // Choix aléatoire de la couleur.
$charcolorrndlevel = 4;   

$charclear = 0;  



$tfont[] = 'WAVY.TTF';  
  


// Caracteres autorisés
// Attention, certaines polices ne distinguent pas (ou difficilement) les majuscules 
// et les minuscules. Certains caractères sont faciles à confondre, il est donc
// conseillé de bien choisir les caractères utilisés.

$charel = 'ABCDEFGHKLMNPRTWXYZ234569';       // Caractères autorisés

$crypteasy = false;       // Création de cryptogrammes "faciles à lire" (true/false)
                         // composés alternativement de consonnes et de voyelles.

$charelc = 'BCDFGYLMPRTVWX';   // Consonnes utilisées si $crypteasy = true
$charelv = 'AEIOUZ';              // Voyelles utilisées si $crypteasy = true

$difuplow = false;          // Différencie les Maj/Min lors de la saisie du code (true, false)

$charnbmin = 8;         // Nb minimum de caracteres dans le cryptogramme
$charnbmax = 8;         // Nb maximum de caracteres dans le cryptogramme

$charspace = 16;        // Espace entre les caracteres (en pixels)
$charsizemin = 16;      // Taille minimum des caractères
$charsizemax = 18;      // Taille maximum des caractères

$charanglemax  = 10;     // Angle maximum de rotation des caracteres (0-360)
$charup   = false;        // Déplacement vertical aléatoire des caractères (true/false)

// Effets supplémentaires

$cryptgaussianblur = false; // Transforme l'image finale en brouillant: méthode Gauss (true/false)
                            // uniquement si PHP >= 5.0.0
$cryptgrayscal = false;     // Transforme l'image finale en dégradé de gris (true/false)
                            // uniquement si PHP >= 5.0.0

// ----------------------
// Configuration du bruit
// ----------------------

$noisepxmin = 0;      // Bruit: Nb minimum de pixels aléatoires
$noisepxmax = 0;      // Bruit: Nb maximum de pixels aléatoires

$noiselinemin = 0;     // Bruit: Nb minimum de lignes aléatoires
$noiselinemax = 0;     // Bruit: Nb maximum de lignes aléatoires

$nbcirclemin = 0;      // Bruit: Nb minimum de cercles aléatoires 
$nbcirclemax = 0;      // Bruit: Nb maximim de cercles aléatoires

$noisecolorchar  = 2;  // Bruit: Couleur d'ecriture des pixels, lignes, cercles: 
                       // 1: Couleur d'écriture des caractères
                       // 2: Couleur du fond
                       // 3: Couleur aléatoire
                       
$brushsize = 5;        // Taille d'ecriture du princeaiu (en pixels) 
                       // de 1 à 25 (les valeurs plus importantes peuvent provoquer un 
                       // Internal Server Error sur certaines versions de PHP/GD)
                       // Ne fonctionne pas sur les anciennes configurations PHP/GD

$noiseup = true;      // Le bruit est-il par dessus l'ecriture (true) ou en dessous (false) 

// --------------------------------
// Configuration système & sécurité
// --------------------------------

$cryptformat = "png";   // Format du fichier image généré "GIF", "PNG" ou "JPG"
				                // Si vous souhaitez un fond transparent, utilisez "PNG" (et non "GIF")
				                // Attention certaines versions de la bibliotheque GD ne gerent pas GIF !!!

$cryptsecure = "md5";    // Méthode de crytpage utilisée: "md5", "sha1" ou "" (aucune)
                         // "sha1" seulement si PHP>=4.2.0
                         // Si aucune méthode n'est indiquée, le code du cyptogramme est stocké 
                         // en clair dans la session.
                       
$cryptusetimer = 0;        // Temps (en seconde) avant d'avoir le droit de regénérer un cryptogramme

$cryptusertimererror = 3;  // Action à réaliser si le temps minimum n'est pas respecté:
                           // 1: Ne rien faire, ne pas renvoyer d'image.
                           // 2: L'image renvoyée est "images/erreur2.png" (vous pouvez la modifier)
                           // 3: Le script se met en pause le temps correspondant (attention au timeout
                           //    par défaut qui coupe les scripts PHP au bout de 30 secondes)
                           //    voir la variable "max_execution_time" de votre configuration PHP

$cryptusemax = 1000;  // Nb maximum de fois que l'utilisateur peut générer le cryptogramme
                      // Si dépassement, l'image renvoyée est "images/erreur1.png"
                      // PS: Par défaut, la durée d'une session PHP est de 180 mn, sauf si 
                      // l'hebergeur ou le développeur du site en ont décidé autrement... 
                      // Cette limite est effective pour toute la durée de la session. 
                      
$cryptoneuse = true;  // Si vous souhaitez que la page de verification ne valide qu'une seule 
                       // fois la saisie en cas de rechargement de la page indiquer "true".
                       // Sinon, le rechargement de la page confirmera toujours la saisie.                          
                      
?>
