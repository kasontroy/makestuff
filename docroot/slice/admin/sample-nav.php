<?php 

if (isset($_GET['v'])) {
    $version = $_GET['v'];
}
if ($version == "q") {
    $nav = array(
        "nav" => array(
            array(
                "url" => "/",
                "label" => "A Notification",
                "type" => "unread",
                "structure" => "object", 
                "description" => "<time>Nov 18, 2012 | 8:15am</time>"
            ),
            array(
                "url" => "/",
                "label" => "Savannah Cox",
                "type" => "user",
                "structure" => "object", 
                "description" => ""
            ),
            array(
                "url" => "/",
                "label" => "Data Object",
                "type" => "data",
                "structure" => "object", 
                "description" => ""
            )
        ),
        "back" => array(
            "url" => "/slice/admin/sample-nav.php?v=1",
            "label" => "Previous"
        )
    );
} else if ($version == "2") {
    $nav = array(
        "nav" => array(
            array(
                "url" => "/",
                "label" => "Visiting With",
                "type" => "published",
                "structure" => "object", 
                "description" => ""
            ),
            array(
                "url" => "/",
                "label" => "Children",
                "type" => "unpublished",
                "structure" => "object", 
                "description" => ""
            ),
            array(
                "url" => "/",
                "label" => "School Group",
                "type" => "pending",
                "structure" => "object", 
                "description" => ""
            )
        ),
        "back" => array(
            "url" => "/slice/admin/sample-nav.php?v=1",
            "label" => "Visiting With"
        )
    );
} else if ($version == "1") {

    $nav = array(
        "nav" => array(
            array(
                "url" => "/",
                "label" => "Visiting the Museum",
                "type" => "published",
                "structure" => "object", 
                "description" => ""
            ),
            array(
                "url" => "/",
                "label" => "Hours and Admission",
                "type" => "unpublished",
                "structure" => "object", 
                "description" => ""
            ),
            array(
                "url" => "/",
                "label" => "Location",
                "type" => "pending",
                "structure" => "object", 
                "description" => ""
            ),
            array(
                "url" => "/slice/admin/sample-nav.php?v=2",
                "label" => "Visiting With",
                "type" => "folder",
                "structure" => "folder", 
                "description" => ""
            )
        ),
        "back" => array(
            "url" => "/slice/admin/sample-nav.php",
            "label" => "Index"
        )
    );
} else {

    $nav = array(
        "nav" => array(
            array(
                "url" => "/slice/admin/sample-nav.php?v=1",
                "label" => "Visit The Museum",
                "type" => "folder",
                "structure" => "folder", 
                "description" => ""
            ),
            array(
                "url" => "/slice/admin/sample-nav.php?v=1",
                "label" => "Explore The Museum",
                "type" => "folder",
                "structure" => "folder", 
                "description" => ""
            ),
            array(
                "url" => "/slice/admin/sample-nav.php?v=1",
                "label" => "Events And Programs",
                "type" => "folder",
                "structure" => "folder", 
                "description" => ""
            ),
            array(
                "url" => "/slice/admin/sample-nav.php?v=1",
                "label" => "About The Perot",
                "type" => "folder",
                "structure" => "folder", 
                "description" => ""
            ),
            array(
                "url" => "/slice/admin/sample-nav.php?v=1",
                "label" => "Join The Perot",
                "type" => "folder",
                "structure" => "folder", 
                "description" => ""
            ),
            array(
                "url" => "/slice/admin/sample-nav.php?v=1",
                "label" => "Giving",
                "type" => "folder",
                "structure" => "folder", 
                "description" => ""
            ),
            array(
                "url" => "/",
                "label" => "index",
                "type" => "published",
                "structure" => "object", 
                "description" => ""
            )
        )
    );
}
echo json_encode($nav);

?>
