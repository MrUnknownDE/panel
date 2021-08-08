<?php
/**
 * Pterodactyl - Panel
 * Copyright (c) 2015 - 2017 Dane Everitt <dane@daneeveritt.com>.
 *
 * This software is licensed under the terms of the MIT license.
 * https://opensource.org/licenses/MIT
 */

return [
    'notices' => [
        'created' => 'Nest, :name, wurde erfolgreich erstellt.',
        'deleted' => 'Das Nest wurde erfolgreich aus dem Webinterface entfernt.',
        'updated' => 'Das Nest wurde erfolgreich bearbeitet.',
    ],
    'eggs' => [
        'notices' => [
            'imported' => 'Dieses Egg und die zugehörigen Variablen wurden erfolgreich importiert.',
            'updated_via_import' => 'Dieses Egg wurde anhand der bereitgestellten Datei aktualisiert.',
            'deleted' => 'Das Egg wurde erfolgreich aus dem Webinterface entfernt.',
            'updated' => 'Das Egg wurde erfolgreich bearbeitet.',
            'script_updated' => 'Das Pre-Install-Script wurde aktualisiert und wird nun bei jeder Serverinstallation ausgeführt.',
            'egg_created' => 'Ein neues Egg wurde erfolgreich angelegt. Sie müssen alle laufenden Daemons neu starten, um dieses neue Egg anzuwenden.',
        ],
    ],
    'variables' => [
        'notices' => [
            'variable_deleted' => 'Die Variable ":variable" wurde gelöscht und steht den Servern nach der Wiederherstellung nicht mehr zur Verfügung.',
            'variable_updated' => 'Die Variable ":variable" wurde aktualisiert. Sie müssen alle Server, die diese Variable verwenden, neu erstellen, um die Änderungen zu übernehmen.',
            'variable_created' => 'Die neue Variable wurde erfolgreich erstellt und diesem Egg zugewiesen.',
        ],
    ],
];
