<?php
// Sample list of pets
$petList = [
    ['name' => 'Fluffy', 'age' => 3, 'breed' => 'Cat'],
    ['name' => 'Buddy', 'age' => 5, 'breed' => 'Dog'],
    ['name' => 'Max', 'age' => 2, 'breed' => 'Fish'],
    ['name' => 'Felix', 'age' => 4, 'breed' => 'Cat'],
    ['name' => 'Fedora', 'age' => 1, 'breed' => 'Parrot'],
];

// Get the pet name and breed from the form submission
$partialName = $_GET['name'] ?? '';
$partialBreed = $_GET['breed'] ?? '';

// If textfield is empty, show all pets
if (empty($partialName) && empty($partialBreed)) {
    $matchingPets = $petList;
} else {
    // Find pets with names and breeds that match the partial inputs
    $matchingPets = [];
    # $encodedMatchingPets = json_encode($matchingPets, true);
    foreach ($petList as $pet) {
        $nameMatches = empty($partialName) || stripos($pet['name'], $partialName) !== false;
        $breedMatches = empty($partialBreed) || stripos($pet['breed'], $partialBreed) !== false;

        if ($nameMatches && $breedMatches) {
            $matchingPets[] = $pet;
        }
    }
}
header('Content-Type: application/json');
echo json_encode($matchingPets);
exit;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Search Results</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<h1>Pet Information:</h1>

<!-- Display matching pets -->
<?php if (!empty($matchingPets)): ?>
    <ul>
        <?php foreach ($matchingPets as $pet): ?>
            <li><?= $pet['name'] ?> (Breed: <?= $pet['breed'] ?>, Age: <?= $pet['age'] ?>)</li>
        <?php endforeach; ?>
    </ul>
<?php elseif ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['name'])): ?>
    <p>No matching pets found.</p>
<?php endif; ?>

</body>
</html>
<!-- http://localhost/WEB_DEV_PHP_2024/RESTwithJSON/petServer.php?name=Fluffy -->

