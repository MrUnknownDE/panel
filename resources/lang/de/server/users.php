<?php

return [
    'permissions' => [
        'websocket_*' => 'Ermöglicht den Zugriff auf den Websocket für diesen Server.',
        'control_console' => 'Ermöglicht es dem Benutzer, Daten an die Serverkonsole zu senden.',
        'control_start' => 'Ermöglicht es dem Benutzer, die Serverinstanz zu starten.',
        'control_stop' => 'Ermöglicht es dem Benutzer, die Serverinstanz herunterzufahren.',
        'control_restart' => 'Ermöglicht es dem Benutzer, die Serverinstanz neu zu starten.',
        'control_kill' => 'Ermöglicht es dem Benutzer, die Serverinstanz zu killen.',
        'user_create' => 'Ermöglicht es dem Benutzer, neue Benutzerkonten für den Server zu erstellen.',
        'user_read' => 'Allows the user permission to view users associated with this server.',
        'user_update' => 'Allows the user to modify other users associated with this server.',
        'user_delete' => 'Allows the user to delete other users associated with this server.',
        'file_create' => 'Allows the user permission to create new files and directories.',
        'file_read' => 'Allows the user to see files and folders associated with this server instance, as well as view their contents.',
        'file_update' => 'Allows the user to update files and folders associated with the server.',
        'file_delete' => 'Allows the user to delete files and directories.',
        'file_archive' => 'Allows the user to create file archives and decompress existing archives.',
        'file_sftp' => 'Allows the user to perform the above file actions using a SFTP client.',
        'allocation_read' => 'Allows access to the server allocation management pages.',
        'allocation_update' => 'Allows user permission to make modifications to the server\'s allocations.',
        'database_create' => 'Allows user permission to create a new database for the server.',
        'database_read' => 'Allows user permission to view the server databases.',
        'database_update' => 'Allows a user permission to make modifications to a database. If the user does not have the "View Password" permission as well they will not be able to modify the password.',
        'database_delete' => 'Allows a user permission to delete a database instance.',
        'database_view_password' => 'Allows a user permission to view a database password in the system.',
        'schedule_create' => 'Allows a user to create a new schedule for the server.',
        'schedule_read' => 'Allows a user permission to view schedules for a server.',
        'schedule_update' => 'Allows a user permission to make modifications to an existing server schedule.',
        'schedule_delete' => 'Allows a user to delete a schedule for the server.',
    ],
];
