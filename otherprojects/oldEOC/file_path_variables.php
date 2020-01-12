<!DOCTYPE html>
<html lang="en">


<?php 
// Setup our filepath locations
$ROOT_DIR = $_SERVER["DOCUMENT_ROOT"]."/";
$INCL_DIR = $_SERVER["DOCUMENT_ROOT"]."/include/"; // The include directory for headers and footers
// $MEMBERS_DIR = $_SERVER["DOCUMENT_ROOT"]."/members/"; // The members directory
// $IMAGES_DIR = $_SERVER["DOCUMENT_ROOT"]."/images/"; // The imagers directory
// $MEMBER_PHOTOS_DIR = $_SERVER["DOCUMENT_ROOT"]."/images/MemberPhotos/"; // The member photos directory
// $PDF_DOCS_DIR = $_SERVER["DOCUMENT_ROOT"]."/pdf-doc-files/";  // Location of premiums PDF files
// $CSS_DIR = $_SERVER["DOCUMENT_ROOT"]."/css/"; // CSS directory

// Necessary files
$HEADER_NAV_FILENAME = "header_navigation.php";
$META_FILENAME = "meta_file.html";
$FOOTER_FILENAME = "footer_standard.html";
$CSS_FILENAME = "eocstyles.html";

// Main Page files
$INDEX_FILENAME = "index.php";
$CLASSES_FILENAME = "classes.html";
$TRIALS_FILENAME = "trials.html";
$FUNMATCHES_FILENAME = "funmatches.html";
$SEMINARS_FILENAME = "seminars.html";
$OTHERCLUBSEVENTS_FILENAME = "other-clubs-events.html";

// Create full filepath files
$HEADER_FILE = $INCL_DIR.$HEADER_NAV_FILENAME;
$META_FILE = $INCL_DIR.$META_FILENAME;
$FOOTER_FILE = $INCL_DIR.$FOOTER_FILENAME;

$INDEX_FILE = $ROOT_DIR.$INDEX_FILENAME;
$CLASSES_FILE = $ROOT_DIR.$CLASSES_FILENAME;
$TRIALS_FILE = $ROOT_DIR.$TRIALS_FILENAME;
$FUNMATCHES_FILE = $ROOT_DIR.$FUNMATCHES_FILENAME;
$SEMINARS_FILE = $ROOT_DIR.$SEMINARS_FILENAME;
$OTHERCLUBSEVENTS_FILE = $ROOT_DIR.$OTHERCLUBSEVENTS_FILENAME;
//$CSS_FILE = $CSS_DIR.$CSS_FILENAME;

// echo $HEADER_FILE."<br>";
// echo $META_FILE."<br>";
// echo $FOOTER_FILE."<br>";
//echo $CSS_FILE."<br>";

?>

</html>

