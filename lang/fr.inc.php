<?php
#==============================================================================
# LTB Self Service Password
#
# Copyright (C) 2009 Clement OUDOT
# Copyright (C) 2009 LTB-project.org
#
# This program is free software; you can redistribute it and/or
# modify it under the terms of the GNU General Public License
# as published by the Free Software Foundation; either version 2
# of the License, or (at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
# GPL License: http://www.gnu.org/licenses/gpl.txt
#
#==============================================================================

#==============================================================================
# French
#==============================================================================
$messages['nophpldap'] = "Vous devriez installer PHP-Ldap pour utiliser cet outil";
$messages['nophpmhash'] = "Vous devriez installer PHP mhash pour utiliser le mode Samba";
$messages['ldaperror'] = "Erreur d'acc&egrave;s &agrave; l'annuaire";
$messages['loginrequired'] = "Vous devez indiquer votre identifiant";
$messages['oldpasswordrequired'] = "Vous devez indiquer votre ancien mot de passe";
$messages['newpasswordrequired'] = "Vous devez indiquer votre nouveau mot de passe";
$messages['confirmpasswordrequired'] = "Vous devez confirmer votre nouveau mot de passe";
$messages['passwordchanged'] = "Votre mot de passe a &eacute;t&eacute; chang&eacute;";
$messages['nomatch'] = "Les mots de passe ne correspondent pas";
$messages['badcredentials'] = "Identifiant ou mot de passe incorrect";
$messages['passworderror'] = "Le mot de passe a &eacute;t&eacute; refus&eacute;";
$messages['title'] = "Gestion du mot de passe";
$messages['login'] = "Identifiant";
$messages['oldpassword'] = "Ancien mot de passe";
$messages['newpassword'] = "Nouveau mot de passe";
$messages['confirmpassword'] = "Confirmation";
$messages['submit'] = "Envoyer";
$messages['tooshort'] = "Votre mot de passe est trop court";
$messages['toobig'] = "Votre mot de passe est trop long";
$messages['minlower'] = "Votre mot de passe n'a pas assez de minuscules";
$messages['minupper'] = "Votre mot de passe n'a pas assez de majuscules";
$messages['mindigit'] = "Votre mot de passe n'a pas assez de chiffres";
$messages['minspecial'] = "Votre mot de passe n'a pas assez de caractères spéciaux";
$messages['sameasold'] = "Votre mot de passe est identique au précédent";
$messages['policy'] = "Votre mot de passe doit respecter les contraintes suivantes&nbsp;:";
$messages['policyminlength'] = "Nombre minimum de caractères&nbsp;:";
$messages['policymaxlength'] = "Nombre maximum de caractères&nbsp;:";
$messages['policyminlower'] = "Nombre minimum de minuscules&nbsp;:";
$messages['policyminupper'] = "Nombre minimum de majuscules&nbsp;:";
$messages['policymindigit'] = "Nombre minimum de chiffres&nbsp;:";
$messages['policyminspecial'] = "Nombre minimum de caractères spéciaux&nbsp;:";
$messages['forbiddenchars'] = "Votre mot de passe contient des caractères interdits";
$messages['policyforbiddenchars'] = "Caractères interdits&nbsp;:";
$messages['policynoreuse'] = "Votre nouveau mot de passe de doit pas être identique à l'ancien";
$messages['questions']['birthday'] = "Quelle est votre date de naissance ?";
$messages['questions']['color'] = "Quelle est votre couleur préférée ?";
$messages['password'] = "Mot de passe";
$messages['question'] = "Question";
$messages['answer'] = "Réponse";
$messages['setquestionshelp'] = "Initialisez ou changez votre question/réponse pour la réinitialisation de votre mot de passe. Vous pourrez ensuite changer votre mot de passe <a href=\"?action=resetbyquestions\">ici</a>.";
$messages['answerrequired'] = "Pas de réponse donnée";
$messages['questionrequired'] = "Pas de question sélectionnée";
$messages['passwordrequired'] = "Vous devez indiquer votre mot de passe";
$messages['answermoderror'] = "Votre réponse n'a pas été enregistrée";
$messages['answerchanged'] = "Votre réponse a été enregistrée";
$messages['answernomatch'] = "Votre réponse est incorrecte";
$messages['resetbyquestionshelp'] = "Choisissez une question et répondez-y pour réinitialiser pour votre mot de passe. Vous devez avoir au préalable <a href=\"?action=setquestions\">enregistré une réponse</a>.";
$messages['changehelp'] = "Entrez votre ancien mot de passe et choisissez-en un nouveau.";
$messages['changehelpreset'] = "Mot de passe oublié ?";
$messages['changehelpquestions'] = "<a href=\"?action=resetbyquestions\">Réinitialisez votre mot de passe en répondant à des questions</a>";
$messages['changehelptoken'] = "<a href=\"?action=sendtoken\">Réinitialisez votre mot de passe via un challenge par mail</a>";
$messages['resetmessage'] = "Bonjour {login},\n\nCliquez ici pour réinitialiser votre mot de passe :\n{url}\n\nSi vous n'êtes pas à l'origine de cette demande, merci de l'ignorer.";
$messages['resetsubject'] = "Réinitialisation de votre mot de passe";
$messages['sendtokenhelp'] = "Entrez votre identifiant et votre adresse mail pour réinitialiser votre mot de passe. Cliquez ensuite sur le lien transmis par mail.";
$messages['mail'] = "Adresse mail";
$messages['mailrequired'] = "Vous devez indiquer votre adresse mail";
$messages['mailnomatch'] = "L'adresse mail ne correspond pas à l'identifiant donné";
$messages['tokensent'] = "Un mail de confirmation a été envoyé";
$messages['tokennotsent'] = "Erreur lors de l'envoi du mail de confirmation";
$messages['tokenrequired'] = "Le jeton de réinitialisation est requis";
$messages['tokennotvalid'] = "Le jeton n'est pas valide";
$messages['resetbytokenhelp'] = "Le jeton envoyé par mail vous permet de réinitialiser votre mot de passe. Pour recevoir un nouveau jeton, <a href=\"?action=sendtoken\">cliquez ici</a>.";

?>