<!DOCTYPE html/>
<html>
    <head>
        <meta content=" text/javascript ; charset=UTF-8"/>
        <link href="page1.css" type="text/css" rel="stylesheet"/>
        <script type="text/javascript" src='jquery-1.9.1.js'></script>

<script type="text/javascript" src='script1.js'></script>
<css>body {
 padding-top: 50px;
}
 
.form_col {
  display: inline-block;
  margin-right: 15px;
  padding: 3px 0px;
  width: 200px;
  min-height: 1px;
  text-align: right;
}
 
input {
  padding: 2px;
  border: 1px solid #CCC;
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  border-radius: 2px;
  outline: none; /* Retire la bordure orange appliquée par certains navigateurs (Chrome notamment) lors du focus des éléments <input> */
}
 
input:focus {
  border-color: rgba(82, 168, 236, 0.75);
  -moz-box-shadow: 0 0 8px rgba(82, 168, 236, 0.5);
  -webkit-box-shadow: 0 0 8px rgba(82, 168, 236, 0.5);
  box-shadow: 0 0 8px rgba(82, 168, 236, 0.5);
}
 
.correct {
  border-color: rgba(68, 191, 68, 0.75);
}
 
.correct:focus {
  border-color: rgba(68, 191, 68, 0.75);
  -moz-box-shadow: 0 0 8px rgba(68, 191, 68, 0.5);
  -webkit-box-shadow: 0 0 8px rgba(68, 191, 68, 0.5);
  box-shadow: 0 0 8px rgba(68, 191, 68, 0.5);
}
 
.incorrect {
  border-color: rgba(191, 68, 68, 0.75);
}
 
.incorrect:focus {
  border-color: rgba(191, 68, 68, 0.75);
  -moz-box-shadow: 0 0 8px rgba(191, 68, 68, 0.5);
  -webkit-box-shadow: 0 0 8px rgba(191, 68, 68, 0.5);
  box-shadow: 0 0 8px rgba(191, 68, 68, 0.5);
}
 
.tooltip {
  display: inline-block;
  margin-left: 20px;
  padding: 2px 4px;
  border: 1px solid #555;
  background-color: #CCC;
  -moz-border-radius: 4px;
  -webkit-border-radius: 4px;
  border-radius: 4px;
}
</css>



</head>
<body>
    




            


// Objectif : On veut afficher de manière dynamique si un pseudo est déjà utiliser ou non
           Vérifier à la validation si les 2 mdp sont identiques
           Vérifier si le mail entré a une syntaxe correcte

    <form id=”myForm” /*action=’login.php’ method=’post’*/>    

        <span class=”form_col”> Sexe : </span>
            <label><input type=”radio” name=”sexe[]” value=”boy” /> Homme</label>
            <label><input type=”radio” name=”sexe[]” value=”girl” /> Femme </label>
        <span class=”tooltip”>Vous devez sélectionner votre sexe </span>
        <br /> <br />


            
<label class=”form_col”>  ge : </label> // facultatif
            <input type=”text” name=”age” id=”age” />
        <span class=”tooltip”> L’âge doit être compris entre 5 et 140ans </span>
        <br /> <br />

        <label class=”form_col” for=”login”> Pseudo : </label> // facultatif
<input type=”text” name=”login” id=”login” />
        <span class=”tooltip”> Le pseudo ne peut pas faire moins de 4 caractères  </span>
        <br /> <br />


        <label class=”form_col” for=”pwd1”>* Mot de passe :</label> 
            <input type=”password” name=”pwd1” id=”pwd1” />
<span class=”tooltip”> Le mdp ne peut pas faire moins de 6 caractères </span>
<br /> <br />

        
        <label class=”form_col” for=”pwd2”>* Mot de passe (confirmation) : </label>
            <input type=”password” name=”pwd2” id=”pwd2” />
        <span class=”tooltip”> le mot de passe de confirmation doit être identique que le 1er mot de passe </span>
        <br /> <br />


        <label class=”form_col” for=”mail”> * E-mail : ( il sera privé et ne sera divulgué à personne ) </label>
                <input type=”text” name=”mail” id=”mail” />
        <span class=”tooltip”> Vous devez entrer un mail à la syntaxe valide </span>
<br /> <br />    
        
        <span class=”form_col”></span>

<input type=”submit” value=”Valider Inscription” id=”valider”>
    
    </form>

(function() { // On utilise une IEF pour ne pas polluer l'espace global
     
    // Fonction de désactivation de l'affichage des « tooltips »
     
    function deactivateTooltips() {
     
        var spans = document.getElementsByTagName('span'),
        spansLength = spans.length;
         
        for (var i = 0 ; i < spansLength ; i++) {
            if (spans[i].className == 'tooltip') {
                spans[i].style.display = 'none';
            }
        }
     
    }
    
function getTooltip(element) {
    while( element = element.nextSibling ) {
        if (element.className == ‘tooltip’ ) {
            return tooltip;
        }
    }
    return false;
}

 // Fonctions de vérification du formulaire, elles renvoient « true » si tout est OK
     
    var check = {}; // On met toutes nos fonctions dans un objet littéral

check[‘sex’] = function() {
    
    var sex = document.getElementsById(id);
        tooltipStyle= getTooltip(name).style;

    if ( sex[0].checked || sex[1].checked ) {
        tooltipStyle.display = ‘none’;
        return true; }
    else {  tooltipStyle.display = 'inline-block';
            return false;
        }
     
    };
     
/*    check['lastName'] = function(id) {
     
        var name = document.getElementById(id),
            tooltipStyle = getTooltip(name).style;
     
        if (name.value.length >= 2) {
            name.className = 'correct';
            tooltipStyle.display = 'none';
            return true;
        } else {
            name.className = 'incorrect';
            tooltipStyle.display = 'inline-block';
            return false;
        }
     
    };
     
    check['firstName'] = check['lastName']; // La fonction pour le prénom est la même que celle du nom                  */
     
    check['age'] = function() {
     
        var age = document.getElementById('age'),
            tooltipStyle = getTooltip(age).style,
            ageValue = parseInt(age.value);
         
        if (!isNaN(ageValue) && ageValue >= 5 && ageValue <= 140) {
            age.className = 'correct';
            tooltipStyle.display = 'none';
            return true;
        } else {
            age.className = 'incorrect';
            tooltipStyle.display = 'inline-block';
            return false;
        }
     
    };
     
    check['login'] = function() {
     
        var login = document.getElementById('login'),
            tooltipStyle = getTooltip(login).style;
         
        if (login.value.length >= 4) {
            login.className = 'correct';
            tooltipStyle.display = 'none';
            return true;
        } else {
            login.className = 'incorrect';
            tooltipStyle.display = 'inline-block';
            return false;
        }
     
    };
     
    check['pwd1'] = function() {
     
        var pwd1 = document.getElementById('pwd1'),
            tooltipStyle = getTooltip(pwd1).style;
         
        if (pwd1.value.length >= 6) {
            pwd1.className = 'correct';
            tooltipStyle.display = 'none';
            return true;
        } else {
            pwd1.className = 'incorrect';
            tooltipStyle.display = 'inline-block';
            return false;
        }
     
    };
     
    check['pwd2'] = function() {
     
        var pwd1 = document.getElementById('pwd1'),
            pwd2 = document.getElementById('pwd2'),
            tooltipStyle = getTooltip(pwd2).style;
         
        if (pwd1.value == pwd2.value && pwd2.value != '') {
            pwd2.className = 'correct';
            tooltipStyle.display = 'none';
            return true;
        } else {
            pwd2.className = 'incorrect';
            tooltipStyle.display = 'inline-block';
            return false;
        }
     
    };
     
    check['country'] = function() {
     
        var country = document.getElementById('country'),
            tooltipStyle = getTooltip(country).style;
         
        if (country.options[country.selectedIndex].value != 'none') {
            tooltipStyle.display = 'none';
            return true;
        } else {
            tooltipStyle.display = 'inline-block';
            return false;
        }
     
    };
     
     
    // Mise en place des événements
     
    (function() { // Utilisation d'une fonction anonyme pour éviter les variables globales.
     
        var myForm = document.getElementById('myForm'),
            inputs = document.getElementsByTagName('input'),
            inputsLength = inputs.length;
     
        for (var i = 0 ; i < inputsLength ; i++) {
            if (inputs[i].type == 'text' || inputs[i].type == 'password') {
     
                inputs[i].onkeyup = function() {
                    check[this.id](this.id); // « this » représente l'input actuellement modifié
                };
     
            }
        }
     
        myForm.onsubmit = function() {
     
            var result = true;
     
            for (var i in check) {
                result = check[i](i) && result;
            }
     
            if (result) {
                alert('Le formulaire est bien rempli.');
            }
     
            return false;
     
        };
     
        myForm.onreset = function() {
     
            for (var i = 0 ; i < inputsLength ; i++) {
                if (inputs[i].type == 'text' || inputs[i].type == 'password') {
                    inputs[i].className = '';
                }
            }
     
            deactivateTooltips();
     
        };
     
    })();
     
     
    // Maintenant que tout est initialisé, on peut désactiver les « tooltips »
     
    deactivateTooltips();
 
})();


(function() { // Utilisation d'une fonction anonyme pour éviter les variables globales.
 
var myForm = document.getElementById('myForm'),
    inputs = document.getElementsByTagName('input'),
    inputsLength = inputs.length;
 
for (var i = 0 ; i < inputsLength ; i++) {
    if (inputs[i].type == 'text' || inputs[i].type == 'password') {
 
        inputs[i].onkeyup = function() {
            check[this.id](this.id); // « this » représente l'input actuellement modifié
        };
 
    }
}
 
myForm.onsubmit = function() {
 
    var result = true;
 
    for (var i in check) {
        result = check[i](i) && result;
    }
 
    if (result) {
        alert('Le formulaire est bien rempli.');

// évènement déclenché lorsque clic sur submit ⇒
<?php
    try { $bdd = new PDO('mysql:host=localhost;dbname=wiki-traducteur', 'root', '');
        echo ‘Connexion établie’; }
        catch(PDOException $dbex) {
            die(‘Erreur de connexion :’ .$dbex -> getMessage()) ; }    

        $verifUser = $bdd->query(‘SELECT pseudo from utilisateurs’);
        while ( $donnees = $verifUser->fetch() )
        {
        ?>
            if ( $pseudo = $donnees ) {
<p class=”enRouge”> Ce pseudo est déjà utilisé </p>    
}
else {
    $newUser = $bdd->prepare(‘INSERT INTO utilisateurs ( pseudo, mdp, age, sexe, e-mail) VALUES ( :pseudo, :mdp, :age, :sexe, :e-mail ) ;
        $newUser -> execute(array(‘pseudo’ => $_POST[‘pseudo’],
‘mdp’ => $_POST[‘pass’],
‘age’ => $_POST[‘age’],
‘sexe’ => $_POST[‘sexe’],
‘e-mail’ => $_POST[‘mail’])); 
            }
        ?>
        }



    }
 
    return false;
 
})();








//Qd on appuie sur Valider ouverture de la base de donnée et ajout si pas de pseudo différent  des différents champs 

/*try { $bdd = new PDO('mysql:host=localhost;dbname=wiki-traducteur', 'root', '');
        echo ‘Connexion établie’; }
        catch(PDOException $dbex) {
            die(‘Erreur de connexion :’ .$dbex -> getMessage()) ; }    

        $verifUser = $bdd->query(‘SELECT pseudo from utilisateurs’);
        while ( $donnees = $verifUser->fetch() )
        {
        ?>
            if ( $pseudo = $donnees ) {
<p class=”enRouge”> Ce pseudo est déjà utilisé </p>    
}
else {
    $newUser = $bdd->prepare(‘INSERT INTO utilisateurs ( pseudo, mdp, age, sexe, e-mail) VALUES ( :pseudo, :mdp, :age, :sexe, :e-mail ) ;
        $newUser -> execute(array(‘pseudo’ => $_POST[‘pseudo’],
‘mdp’ => $_POST[‘pass’],
‘age’ => $_POST[‘age’],
‘sexe’ => $_POST[‘sexe’],
‘e-mail’ => $_POST[‘mail’])); 
            }
        }

        <?php
        $verifUser->closeCursor();
        $bdd=null;
        ?>


        </form>

    ?>
</body>
</html>    
