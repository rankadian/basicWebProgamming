<?php
$menu = [
    ["name" => "Homepage"],
    [
        "name" => "News",
        "submenu" => [
            [
                "name" => "Tour",
                "subMenu" => [
                    ["name" => "Beach"],
                    ["name" => "Mountain"]
                ]
            ],
            ["name" => "Culinary"],
            ["name" => "Entertainment"]
        ]
    ],
    ["name" => "About"],
    ["name" => "Contact"],
];

function showMultilevelMenu($menu) {
    echo "<ul>";
    foreach ($menu as $item) {
        echo "<li>{$item['name']}";

        if (!empty($item['submenu'])) {
            showMultilevelMenu($item['submenu']);
        } elseif (!empty($item['subMenu'])) {
            showMultilevelMenu($item['subMenu']);
        }
        echo "</li>";
    }
    echo "</ul>";
}

showMultilevelMenu($menu);
?>
