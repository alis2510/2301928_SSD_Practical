<?php
require_once 'validate.php';

$search = $_POST['search'] ?? '';
$search = trim($search);

if (is_xss($search)) {
    header("Location: index.php");
    exit;
}

if (is_sql_injection($search)) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head><title>Search Result</title></head>
<body>
    <h2>Search Term: <?php echo htmlspecialchars($search); ?></h2>
    <form action="index.php" method="get">
        <button type="submit">Back</button>
    </form>
</body>
</html>
