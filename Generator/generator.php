<?php

function readLargeFile($filePath) {
    $handle = fopen($filePath, "r");
    if (!$handle) {
        return;
    }

    while (($line = fgets($handle)) !== false) {
        yield $line; // Yield one line at a time
    }

    fclose($handle);
}

// Usage
foreach (readLargeFile("bigfile.txt") as $line) {
    echo $line;
}

?>
