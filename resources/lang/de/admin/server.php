<?php
/**
 * Pterodactyl - Panel
 * Copyright (c) 2015 - 2017 Dane Everitt <dane@daneeveritt.com>.
 *
 * This software is licensed under the terms of the MIT license.
 * https://opensource.org/licenses/MIT
 */

return [
    'exceptions' => [
        'no_new_default_allocation' => 'Sie versuchen, die Standardzuweisung für diesen Server zu löschen, aber es gibt keine Ersatzzuweisung, die verwendet werden kann.',
        'marked_as_failed' => 'Dieser Server wurde bei einer früheren Installation als fehlgeschlagen markiert. Der aktuelle Status kann in diesem Zustand nicht umgeschaltet werden.',
        'bad_variable' => 'Es gab einen Validierungsfehler mit der Variablen :name.',
        'daemon_exception' => 'Beim Versuch, mit dem Daemon zu kommunizieren, trat eine Ausnahme auf, die zu einem HTTP/:code-Antwortcode führte. Diese Ausnahme wurde protokolliert. (Anfrage-ID: :request_id)',
        'default_allocation_not_found' => 'Die angeforderte Standardzuweisung wurde in den Zuweisungen dieses Servers nicht gefunden.',
    ],
    'alerts' => [
        'startup_changed' => 'Die Startkonfiguration für diesen Server wurde aktualisiert. Wenn das Nest oder Eggs dieses Servers geändert wurde, wird nun eine Neuinstallation durchgeführt.',
        'server_deleted' => 'Der Server wurde erfolgreich aus dem System gelöscht.',
        'server_created' => 'Der Server wurde erfolgreich im Panel erstellt. Bitte geben Sie dem Daemon ein paar Minuten Zeit, um diesen Server vollständig zu installieren.',
        'build_updated' => 'Die Build-Details für diesen Server wurden aktualisiert. Einige Änderungen erfordern möglicherweise einen Neustart, um wirksam zu werden.',
        'suspension_toggled' => 'Der Status der Serversperre wurde in :status geändert.',
        'rebuild_on_boot' => 'Dieser Server wurde so markiert, dass ein Docker-Container-Rebuild erforderlich ist. Dies geschieht, wenn der Server das nächste Mal gestartet wird.',
        'install_toggled' => 'Der Installationsstatus für diesen Server wurde umgeschaltet.',
        'server_reinstalled' => 'Dieser Server steht für eine Neuinstallation in der Warteschlange.',
        'details_updated' => 'Die Serverdetails wurden erfolgreich aktualisiert.',
        'docker_image_updated' => 'Das für diesen Server zu verwendende Standard-Docker-Image wurde erfolgreich geändert. Ein Neustart ist erforderlich, um diese Änderung anzuwenden.',
        'node_required' => 'Sie müssen mindestens einen Knoten konfiguriert haben, bevor Sie einen Server zu diesem Panel hinzufügen können.',
        'transfer_nodes_required' => 'Sie müssen mindestens zwei Knoten konfiguriert haben, bevor Sie Server übertragen können.',
        'transfer_started' => 'Die Serverübertragung wurde gestartet.',
        'transfer_not_viable' => 'Der von Ihnen ausgewählte Knoten verfügt nicht über den erforderlichen Festplatten- oder Arbeitsspeicherplatz, um diesen Server aufzunehmen.',
    ],
];
