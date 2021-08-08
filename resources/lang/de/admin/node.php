<?php
/**
 * Pterodactyl - Panel
 * Copyright (c) 2015 - 2017 Dane Everitt <dane@daneeveritt.com>.
 *
 * This software is licensed under the terms of the MIT license.
 * https://opensource.org/licenses/MIT
 */

return [
    'validation' => [
        'fqdn_not_resolvable' => 'Der FQDN wird nicht zu der angebenen IP-Adresse aufgelöst.',
        'fqdn_required_for_ssl' => 'A fully qualified domain name that resolves to a public IP address is required in order to use SSL for this node.',
    ],
    'notices' => [
        'allocations_added' => 'Diesem Knoten wurden erfolgreich Ports zugewiesen.',
        'node_deleted' => 'Der Knoten wurde erfolgreich aus dem Webinterface entfernt.',
        'location_required' => 'Sie müssen mindestens einen Standort konfiguriert haben, bevor Sie einen Knoten zu diesem Bereich hinzufügen können.',
        'node_created' => 'Erfolgreich einen neuen Knoten erstellt. Sie können den Daemon auf diesem Rechner automatisch konfigurieren, indem sie die \'Configuration\' aufrufen. <strong>Bevor Sie einen Server hinzufügen können, müssen Sie zunächst mindestens eine IP-Adresse und einen Port zuweisen.</strong>'
        'node_updated' => 'Die Knoteninformationen wurden aktualisiert. Wenn die Einstellungen des Daemons geändert wurden, müssen Sie ihn neu starten, damit die Änderungen wirksam werden.',
        'unallocated_deleted' => 'Alle nicht zugewiesenen Ports für <code>:ip</code> wurden gelöscht.',
    ],
];
