<?php
if(isset($_POST['data'])) {
    file_put_contents('content.html', $_POST['data']);
    echo "✅ Content saved successfully!";
} else {
    echo "❌ No data received.";
}
?>
