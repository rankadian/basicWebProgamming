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

function showMultilevelMenu(array $menu){
    echo "<ul>";
    foreach ($menu as $key => $item) {
        echo "<li>{$item['name']}</li>";
    }
    echo "</ul>";
}
showMultilevelMenu($menu);
?>
