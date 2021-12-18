<?php
function lang($phrase)
{
    static $lang = array(
        // slide presentation
        'bienvenue1' => 'bienvenue!',
        'bienvenue2' => 'choisissez votre langue préferée',
        // slide hopital
        'hopital1' => 'choisissez un service',
        'hopital2' => 'clique sur le button qui correspond a vos besoin',
        'ser1' => 'médecine generale',
        'ser2' => 'cardiologie',
        'ser3' => 'maternite',
        'ser4' => 'radiologue',
        'ser5' => 'dermatologie',
        'ser6' => 'pediatrie',
        'ser7' => 'traitement des urgences',
        'ser8' => 'pneumologie',
        'ser9' => 'médecine interne',
        // service cardio
        'opt1' => 'reserver',
        'opt2' => 'map vers mobile',
        // taxi
        'taxi1' => 'demander un taxi',
        'inp1' => 'veillez saissir votre nom complet',
        'inp2' => 'votre numero de telephone',
        'conf1' => 'confirmer',
        'conf2' => 'confirmee',
        'info1' => 'Il faut remplir les champs',
        
    );

    return $lang[$phrase];
}
