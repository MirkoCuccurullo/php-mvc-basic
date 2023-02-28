<?php
include __DIR__ . '/../header.php';

echo "<h1>Homepage!</h1>";

if (isset($dataUri)){
    echo "<p>Here's a QR code:</p>";
    echo "<img src='$dataUri' />";
}else{
    ?>
    <form action="/" method="post">
        <input type='text' name='url' placeholder='insert a link' />
        <input type='submit' name='generate' value='Generate QR code' />
    </form>
    <?php
}


include __DIR__ . '/../footer.php';
