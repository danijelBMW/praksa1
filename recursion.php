<!doctype html>
<html lang="en">
<head>
<title>Recursion primjer</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</head>
<body>
<h1>Recursion primjer</h1>

<form action ="recursion.php" method = "GET">
<input type = "search" name = "pretraga" placeholder ="Unesite putanju do foldera">
<input type = "submit" value = "Pretrazi">
</form>

<?php
error_reporting(0);
$folderPath = $_GET['pretraga'];
function readFolder( $path ) {
 // Open the folder
 if ( !( $dir = opendir( $path ) ) ) {
     die( "Can't open $path" );
 }
 $filenames = array();
 // Read the contents of the folder, ignoring '.' and '..', and
 // appending '/' to any subfolder names. Add all the files and
 // subfolders to the $filenames array.
 while ( $filename = readdir( $dir ) ) {
   if ( $filename != '.' && $filename != '..' ) {
     if ( is_dir( "$path/$filename" ) ) {
         $filename .= '/';
     }
     $filenames[] = $filename;
   }
 }
 closedir ( $dir );
 // Sort the filenames in alphabetical order
 sort( $filenames );
 // Display the filenames, and process any subfolders
 echo "<ul>";
 foreach ( $filenames as $filename ) {
   echo "<li>$filename";
   if ( substr( $filename, -1 ) == '/' ) readFolder( "$path/" . substr( $filename, 0, -1 ) );
   echo "</li>";
 }
 echo "</ul>";
}
echo "<h2>Sadrzaj '$folderPath':</h2>";
readFolder( $folderPath );
?>
</body>
</html>