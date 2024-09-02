<?php

$a = array();
$size = 20;

for($y = 0 ; $y < $size; $y++ ) {
    for($x = 0 ; $x < $size; $x++) {
        $a[$y][$x] = rand(1, 55);
    }
}
echo "<h1>Завдання №1 за варіантом №6</h1>";
echo "<table>";
    for ($y = 0; $y < $size; $y++) {
        echo "<tr>";
        for ($x = 0; $x < $size; $x++) {
            echo "<td>" . $a[$y][$x] . "</td>";
        }
        echo "</tr>";
    }
echo "</table><br><br>";

for($y = 0; $y < $size; $y++) {
    $sum = 0;
    for ($x = 0; $x < $size; $x++) {
        $sum += $a[$y][$x];
    }
    
    $a[$y][$y] = $sum;
}

echo "<table>";
    for ($y = 0; $y < $size; $y++) {
        echo "<tr>";
        for ($x = 0; $x < $size; $x++) {
            if ($y == $x) {
                echo "<td style='color: red;'>" . $a[$y][$x] . "</td>";
            } else {
                echo "<td>" . $a[$y][$x] . "</td>";
            }
        }
        echo "</tr>";
    }
echo "</table>";
?>

<?php

$dir = './mp3';
$files = scandir($dir);
$files = array_filter($files, function($file) use ($dir) {
    return pathinfo($dir . $file, PATHINFO_EXTENSION) == 'mp3';
});

$artists = [];
$years = [];
foreach ($files as $f) {
    $info = getInfo($dir . '/' . $f);
    $artist[$info['artist']] = true;
    $years[$info['year']] = true;
};
ksort($artists);
ksort($years);

$sort_by = isset($_GET['sort_by']) ? $_GET['sort_by'] : 'artist';
$sort_order = isset($_GET['sort_order']) ? $_GET['sort_order'] : 'asc';
if ($sort_by === 'artist') {
    usort($files, function($a, $b) use ($dir, $sort_order) {
        $info_a = getInfo($dir . '/' . $a);
        $info_b = getInfo($dir . '/' . $b);
        return $sort_order === 'asc' ? strcmp($info_a['artist'], $info_b['artist']) : strcmp($info_b['artist'], $info_a['artist']);
    });
} else {
    usort($files, function($a, $b) use ($dir, $sort_order) {
        $info_a = getInfo($dir . '/' . $a);
        $info_b = getInfo($dir . '/' . $b);
        return $sort_order === 'asc' ? $info_a['year'] - $info_b['year'] : $info_b['year'] - $info_a['year'];
    });
}

echo "<h1>Завдання №2</h1>";
echo '
    <form method="GET">
        <div>
            <label for="sort_by">Сортування по:</label>
            <select name="sort_by" id="sort_by">
                <option value="artist">Виконавцям</option>
                <option value="year">Рік випуску</option>
            </select>
        </div>
        <div>
            <label for="sort_order">Порядок: </label>
            <select name="sort_order" id="sort_order">
                <option value="asc">Зростанням</option>
                <option value="desc">Спаданням</option>
            </select>
        </div>
        <button type="submit">Сортування</button>
    </form>
';

echo '<table border="2">';
echo "
    <tr>
        <th>Виконавець</th>
        <th>Рік випуску</th>
        <th>Альбом</th>
        <th>Назва пісні</th>
        <th>Пісня</th>
        <th>Завантажити</th>
    </tr>
";
foreach ($files as $f) {
    if($f == '.' || $f == '..') { continue; };

    $info = getInfo($dir . '/' . $f);
    echo "
        <tr>
            <td> " . $info['artist'] . "</td>
            <td> " . $info['year'] . "</td>
            <td> " . $info['album'] . "</td>
            <td> " . $info['title'] . "</td>
            <td>". '<audio controls src="' . $dir . '/' . $f . '">' . $f . '</audio>' . "</td>
            <td>". '<a href="' . $dir . '/' . $f . '" download="' . $info['artist'] . ' - ' . $info['title'] . '.mp3">Завантажити</a>' . "</td>
        </tr>
    ";
}

echo "</table>";

function getInfo($file) {
    $parts = explode(' -- ', pathinfo($file, PATHINFO_FILENAME));
    return [
        'artist' => $parts[0],
        'year' => (int) $parts[1],
        'album' => $parts[2],
        'title' => $parts[3]
    ];
}

?>