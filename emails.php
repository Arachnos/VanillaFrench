<?php if (!defined('APPLICATION')) exit();

// Définition des messages envoyés par email

$Definition['EmailHeader'] = 'Bonjour {User.Name},
';
$Definition['EmailFooter'] = '
Cordialement,
L\'équipe de gestion du forum';

// Demande de Confirmation
$Definition['EmailConfirmEmail'] = 'Vous devez confirmer votre adresse email pour poursuivre votre inscription.

Merci de confirmer votre adresse email en cliquant sur le lien suivant :
{/entry/emailconfirm,exurl,domain}/{User.UserID,rawurlencode}/{EmailKey,rawurlencode}';

// Inscription en attente acceptée
$Definition['EmailMembershipApproved'] = 'Votre inscription a été approuvée. Pour accéder maintenant au site, suivez le lien ci-dessous :

  %2$s';

// Invitation
$Definition['EmailInvitation'] = 'Bonjour,
%1$s vous invite à rejoindre %2$s.

Pour vous inscrire, suivez le lien ci-dessous :
  %3$s

Cordialement,
L\'équipe de gestion du forum';

// Messages de Bienvenue
$Definition['EmailWelcome'] = '%2$s a créé un compte pour vous sur %3$s.

Vos identifiants de connexion sont :

  Adresse Email: %6$s
  Mot de passe: %5$s
  Connectez-vous à l\'adresse suivante : %4$s';

$Definition['EmailWelcomeConnect'] = 'Vous vous êtes connecté à {Title} avec succès.

Voici vos informations :

  Nom d\'Utilisateur: {User.Name}
  Connecté depuis: {ProviderName}

Vous pouvez vous connecter au forum ici : {/,exurl,domain}.';

$Definition['EmailWelcomeRegister'] = 'Votre inscription sur {Title} a bien été prise en compte.

Voici vos informations :

  Nom d\'Utilisateur: {User.Name}
  Adresse Email: {User.Email}

Vous pouvez vous connecter au forum ici : {/,exurl,domain}.';

// Nouveau mot de passe
$Definition['[%s] Password Reset Request'] = '[%s] Demande de réinitialisation de mot de passe';
$Definition['PasswordRequest'] = 'Bonjour,
Une demande de réinitialisation de votre mot de passe a été effectuée sur le forum %2$s.

Pour réinitialiser votre mot de passe, cliquez sur le lien ci-dessous :
  %3$s

Si vous n\'avez pas fait cette demande, vous pouvez ignorer ce message.

Cordialement,
L\'équipe de gestion du forum %2$s';

$Definition['EmailPassword'] = '%2$s a réinitialisé votre mot de passe pour le forum %3$s.

Vos informations de connexion sont désormais :
  Courriel : %6$s
  Mot de passe : %5$s
  Url : %4$s';

// Notification
$Definition['EmailNotification'] = '%1$s

Suivez ce lien pour en savoir plus :
%2$s';

$Definition['EmailStoryNotification'] = '%1$s

%3$s

---
Suivez ce lien pour en savoir plus :
%2$s';
