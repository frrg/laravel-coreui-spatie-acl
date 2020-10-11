<?php

return [
    [
        "name"         => "user",
        "display_name" => "Manage User",
        "controller"   => "UserController",
        "action"       => ["read", "create", "edit", "update", "delete", "reset-password"],
        "parent"       => "settings",
        "usages"       => ["main"]
    ]
];
