PHP – La programmation Script
=============================

Introduction
------------

### Historique


- Publié par Rasmus Lerdorf, un habitant du Groenland en 1995.
- PHP signifie alors "Personal Home Page" en raison de son
utilisation, la maintenance de la page personnelle de Lerdorf.
- La version 2 de PHP sort en 1997 (1% des pages web).
- Zeev Suraski et Andi Gutmans réécrivent le parseur de PHP en 1997 et rebaptisent "PHP: Hypertext Preprocessor".
- PHP3 sort en 1998 (10% d’utilisation).
- Suraski et Gutmans réécrivent le cœur de PHP pour créer le moteur Zend, sorti en 1999 et utilisé par PHP4.
- PHP5 sort en 2004 avec la version 2 du moteur Zend.
- La sortie de PHP 5.3 a créé certains problèmes car de certaines ￼fonctions n'étaient plus compatibles avec la version 5.2. !  La dernière version est la 5.4.6 (septembre 2012).
- ActuellementPHPestlelangageleplusutilisésurInternet.

### Documentation

- La meilleure référence reste Internet.
- En particulier pour ses possibilités de recherche.
- Lorsque l'on développe en PHP, on a toujours le manuel ouvert :
- **http://www.php.net**

### Principe

- Lorsqu'un client effectue une requête sur un serveur celui-ci exécute le code PHP de la page et renvoie le résultat au client.
  - Le résultat est également du code, mais de langages clients tels que HTML, CSS ou JavaScript.
- Un serveur web ne fait que retourner des données aux clients qui ont effectué des requêtes.
- Un navigateur ne comprend que certains langages (HTML, CSS, JavaScript).
- Le serveur web doit donc transformer le code PHP en code client (html, css, JavaScript).
  - Ce qu'il réalise à l'aide d'un interpréteur PHP.
  - Dans le cas du serveur Apache cet interpréteur lui est fournit sous la ￼forme d'un module.
- Lorsque le serveur rencontre du code PHP, il utilisera l'interpréteur pour le transformer en code client.
- L'intérêt du code PHP est qu'il peut être mixé avec du code HTML à l'intérieur d'un même fichier.
- Lorsque le serveur rencontre du code PHP, il utilisera l'interpréteur pour le transformer en code client.
- Il est donc possible d'introduire du code PHP à l'intérieur d'une page contenant du code HTML.
- Il suffit d'informer le serveur que la page contient du code PHP.
  - Ce que l'on fait en ajoutant la bonne extension au fichier.
  - **fichier.php**

### Balises PHP portables

- Pour insérer le code PHP au milieu d’une page HTML on utilise des balises afin de délimiter la section de code PHP:
adsad

```
<html>
<?php
//Balisededébutcodephp!
//codephp!
//Balisedefindecodephp!
?>
```
- Que l'on peut aussi écrire sur une seule ligne dans le cas d'instructions courtes (simple affichage d'une valeur):

```
<?php // code php ?>
```

- Il existe également une notation HTML:

```
<script language="php">
//code php
</script>
```

-  Mais elle est très peu utilisée.

### Balises PHP non portables

- PHP offre également des syntaxes raccourcies:

```
<? //code php ?>
<?= expression ?>
```

- La deuxième ligne étant un raccourci de: `
``<?php echo expression ?>```
- Ces syntaxes ne sont cependant disponibles que si la directive **short_open_tag** est activée dans le fichier de configuration *php.ini*.
- De même, il est possible d'utiliser des balises ASP:

```
<% //code php %>
<%= expression %>
```

- Mais uniquement si la directive **asp_tags** est activée.
- Ainsi de manière générale, il est déconseillé d'utiliser une autre syntaxe que celle de base, ne serait-ce que pour la lisibilité de votre code.

### Instructions PHP

- PHP est un langage de programmation.
- En ce sens, un script PHP consiste en l'écriture d'une suite
d'instructions.
- La fin d'une instruction est définie par un point virgule: **;**
  - Comme dans la plupart des langages courants.

```
<?php
instruction-1;
instruction-2;
...
?>
```

### Fonction de base: **echo**

- Le but du code PHP étant de produire du code client, le résultat de l'exécution du PHP est généralement des chaînes de caractères que l'on affiche directement dans le fichier qui sera retourné au navigateur.
- La principale fonction qu'on utilise est echo.
- Comme dans tout langage, les arguments d'une fonction doivent
généralement être passé entre des parenthèses.
- La fonction `echo` constitue une exception à cette règle en raison de son utilisation courante.

```
<?php
echo "Hello World !";
?>
```

  - La fonction `print` suit la même logique.
- Il est même possible d'écrire plusieurs lignes dans une chaîne de caractères à afficher.
- PHP ne prendra en compte la fin de la commande que lorsqu'il rencontrera le point virgule.

```
<?php
echo "Hello
  World !";
print "Bienvenue dans ce cours PHP";
?>
```

- Par contre il ne faut pas oublier à quoi ressemblera le code final car la présentation sera interprétée par le navigateur.

### Exercices 1

- Créez une page html minimale vide. (balises `html`, `head`, `body`).
- Ajoutez un bloc PHP qui affiche le texte suivant en tant que titre principal de la page (balise html `h1`) "Mon premier script PHP".
  - Vérifiez le fonctionnement de la page.
  - Expliquez les étapes qui ont permis l’affichage de cette page, en particulier de quelle manière la source du document HTML final a-t-elle été composée ?
- Ajoutez une deuxième ligne.
  - Si un problème d'affichage apparaît, expliquez-le et corrigez-le.

### Commentaires

- PHP supporte 2 types de commentaires mono-ligne:

```
<?php
// commentaire "à la C"
# commentaire "à la Shell"
?>
```

  - Les commentaires mono-ligne s’arrêtent à la fin d’un block PHP:

```
<?php
//commentaire ?> Ce Texte HTML s’affiche!
```

- PHP support également les commentaires multi-lignes:

```
<?php
/* Commentaire sur plusieurs lignes,
   comme dans la plupart des autres languages. */
?>
```

Variables
---------

### Variables
- Comme dans tout langage de programmation, l'utilisation de variables est nécessaire.
  - Par exemple pour stocker les résultats intermédiaires de calculs.
- PHP est un langage de script et en ce sens il possède certains avantages qui peuvent également être des inconvénients:
  - La déclaration des variables n'est pas nécessaire.
  - Une variable sera définie dès qu'elle est utilisée.
  - PHP est faiblement typé, c'est-à-dire qu'il n'est pas nécessaire d'indiquer le type de données que contiendra une variable.  L'interpréteur utilise le contexte pour déterminer s'il s'agit d'un nombre ou d'une chaîne de caractères.
- Une variable est constituée de la manière suivante :
  - Le premier caractère est toujours le signe dollars `$`.
  - Le deuxième caractères est soit une lettre soit le souligné `_`.
  - Ensuite n'importe quelle combinaison de lettre, de chiffres et de soulignés est possible.

```
<?php
  $age = 33;
  $_internal = "Bonjour";
  echo $age;
  echo "<br/>";
  echo $_internal;
?>
```

### Types de variables

- Bien que PHP ne soit pas typé et qu'il devine le types des variables et expressions, il dispose cependant de différents type de données:
  - Types scalaires:
    - boolean (TRUE ou FALSE, true ou false)
    - integer (-10, 1, 5, etc. )
    - float (-3. 2, 4. 3, etc. )
    - string ('Bonjour', etc. )
  - Typescomposés:
    - array
    - object
  - Typesspéciaux: !  resource
    - NULL

### Variables internes

- PHP possède un certain nombre de variables internes donnant accès à certaines diverses informations associés à l'exécution du script.
- Tel que les différents paramètres d'une requête.
- Pour signifier leur caractère interne, leur nom commence par `_`.
- Les plus utilisées sont:
  - `$_SERVER` : Information sur l'environnement d'exécution.
  - `$_POST` : Variables d'une requête POST.
  - `$_GET` : Variables d'une requête GET.
  - `$_REQUEST` : Variables d'une requête.
  - `$_SESSION` : Variables de session.

### Conversions implicites

- PHP convertit automatiquement les variables lorsque le contexte change:

```
<?php
$x = false;
$y=$x+2; //la valeur de $x devient 0
?>
```

- Les conversions entre booléens et nombres sont intuitives:
  - TRUE devient 1, FALSE devient 0.
  - Dans l’autre sens, 0 devient FALSE et le reste devient TRUE.

### Conversions implicites de chaînes

- La conversions de nombres en chaînes est directe.
  - Il suffit d'entourer le nombre de guillemets.
- L’inverse est un peu plus compliqué.
  - Si la chaîne commence par un nombre, PHP considère ce
nombre, que ce soit un entier ou un nombre à virgule.
  - Sinon, PHP retourne 0.

```
<?php
  $x='12test'+1;    //=12+1=13
  $y='test12'+1;    //=0+1=1!
  $z='12.4test'+1;  //=12.4+1=13.4
?>
```

### Conversions explicites

- Il peut (rarement) être intéressant de forcer le type d’une variable ou d'une expression en effectuant une conversion explicite:

```
<?php
  $as_int = (int) 12.3;            //= 12
  $as_int = settype(12.3, 'int');  //idem
?>
```

- Les étiquettes de conversion sont les suivantes:
  - `(int)`, `(integer)`, `(float)`, `(double)`, `(real)`
  - `(bool)`, `(boolean)`
  - `(string)`, `(array)`, `(object)`, `(unset)`
- **`(array)`** est intéressant car il permet de transformer une variable en un tableau à un seul élément.
  - Ce qui permettra de passer la variable à une fonction attendant un tableau.

### Fonctions relatives aux variables

- PHP offre différentes fonctions pour travailler avec les variables:
  - `string gettype(mixed)`;
  - `bool empty(mixed)`;
    - Vérifie si une variable est vide.
    - Mais uniquement une variable
  - `bool isset(mixed, ...)`;
    - Vérifie si une variable est définie.
    - Utilisé pour vérifier les paramètres passés à une page PHP, en particulier pour le traitement des formulaires.
  - `is_null(mixed)`;
  - `is_int()`; `is_double()`; `is_numeric()`;
  - `is_bool()`; `is_string()`; etc.
  - `unset()`; `var_dump()`;

```
<?php!
  $x = 1;
  echo gettype($x); //affiche le type de $x
  var_dump($x);     //affiche des infos sur $x
  unset($x);        //libère $x

  if (isset($x))
    instruction;
?>
```

### Chaînes de caractères

- Une chaîne de caractères doit être entourée de guillemets.
- PHP propose deux manières pour travailler avec les chaînes.
- Avec des guillemets simples:

```
<?php!
$chaine = 'Je vais à l\'école';
$longue_chaine = 'Une ligne ne suffit
             pas à finir cette phrase';
?>
```

  - Les `'` doivent être protégés afin d’être interprétés correctement.
  - Les caractères spéciaux (`\t`, `\n`) ne sont pas interprétés.
  - Les variables ne sont pas non plus interprétées.
  - On peut écrire sur plusieurs lignes. Ce qui est très pratique pour afficher du code HTML bien formaté.

- Avec des guillemets doubles:
```
<?php
  $prenom = 'Anthéa';
  // Les variables sont remplacées!
  echo "Bonjour $prenom";
?>
```
  - Les `"`, `\` et `$` doivent être protégés.
  - Les caractères spéciaux peuvent être utilisés:
  ```
  <?php
    // \t = tabulation, \n = retour de ligne
    echo "\tprénom: $prenom\n";
  ?>!
  ```
- De manière générale, on favorise les guillemets simples lorsque cela n’est pas trop contraignant.