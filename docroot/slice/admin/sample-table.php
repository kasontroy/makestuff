<?php 
/*

{
    "head": [
        {
            "label": "{String}",
            "column": "{String}",
            "direction": "{neutral|asc|desc}"
        }
    ],
    "rows": [
        {
            "key": "{String}"
        }
    ],
    "pages": 10
}
*/


if (isset($_GET['v'])) {
    $version = $_GET['v'];
}

if ($version == "1") {

    $table = array(
        "pages" => 5,
        "head" => array(
            array(
                "label" => "Column 1",
                "column" => "col1",
                "direction" => "asc"
            ),
            array(
                "label" => "Column 2",
                "column" => "col2",
                "direction" => "neutral"
            ),
            array(
                "label" => "Column 3",
                "column" => "col3",
                "direction" => "neutral"
            )
        ),
        "rows" => array(
            array(
                "name" => "Whitney Pacheco",
                "email" => "whitney@lifeblue.com",
                "phone" => "555-333-4444"
            ),
            array(
                "name" => "Jonny Pacheco",
                "email" => "jonny@lifeblue.com",
                "phone" => "555-555-5555"
            )
        )
    );

} else {

    $table = array(
        "pages" => 10,
        "head" => array(
            array(
                "label" => "Column 1",
                "column" => "col1",
                "direction" => "neutral"
            ),
            array(
                "label" => "Column 2",
                "column" => "col2",
                "direction" => "neutral"
            ),
            array(
                "label" => "Column 3",
                "column" => "col3",
                "direction" => "neutral"
            )
        ),
        "rows" => array(
            array(
                "name" => "Jonny Pacheco",
                "email" => "jonny@lifeblue.com",
                "phone" => "555-555-5555"
            ),
            array(
                "name" => "Whitney Pacheco",
                "email" => "whitney@lifeblue.com",
                "phone" => "555-333-4444"
            )
        )
    );

}

echo json_encode($table);

?>
