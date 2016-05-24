$(document).ready(function () {
    $('#container_compte_perso').click(function (e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            headers: {
                "cache-control": "no-cache"
            },
            url: "compte_personal_data.php",
            async: false,
            cache: false,
            data: {
                variable: 1
            },
            success: function (jsonString) {
                //var les_données = JSON.parse(jsonString); // employeeData variable contains employee array.
                if (jsonString !='')
                {
                    //alert(les_données)
                    $('#container1').remove();
                    $('#body').append("   <table><form  method=post id='modifier_form'> <tr><td><b>Identifiant</b></td><td><input type='text' name='pseudonyme' id='pseudonyme' value='{$donnees['id_utilisateur']}'></td></tr> <tr><td><b>Password</b></td><td><input type='password' name='password id='password' value='{$donnees['password']}' required></td></tr> <tr><td><b>nom</b></td><td><input type='text' name=\"nom\" id=\"nom_compte\" value='{$donnees['nom']}' ></td></tr> <tr><td><b>prenom</b></td><td><input type='text' name='prenom' id='prenom_compte' value='{$donnees['prenom']}' ></td></tr> <tr><td><b>mail</b></td><td><input type='text' name='mail' id='mail_compte value='{$donnees['mail']}'>"+"" +
                        "</td></tr> </form> </table> <button type = 'button'  id='modifier' > Modifier </button> <button type='button' id='annuler' ><a href='index.php' >annuler</a></button>");

                }
                else
                {
                    
                }
                
                $('#onglet_connexion').text('');
            },
            error: function(retour)
            {alert('script non trouvé');}
        });
    });

});

