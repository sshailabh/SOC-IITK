<?php
$pspell_link = array("test");

if (pspell_check($pspell_link, "testt")) {
    echo "This is a valid spelling";
} else {
    echo "Sorry, wrong spelling";
}
?>