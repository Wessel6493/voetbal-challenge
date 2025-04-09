<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<?php

$uitslagen = [
    ['thuis' => 'Feyenoord', 'uit' => 'FC Twente', 'uitslag' => [1, 2]],
    ['thuis' => 'AZ', 'uit' => 'RKC Waalwijk', 'uitslag' => [1, 3]],
    ['thuis' => 'PEC Zwolle', 'uit' => 'PSV', 'uitslag' => [1, 2]],
    ['thuis' => 'Heracles Almelo', 'uit' => 'Sparta Rotterdam', 'uitslag' => [1, 3]],
    ['thuis' => 'sc Heerenveen', 'uit' => 'Go Ahead Eagles', 'uitslag' => [3, 1]],
    ['thuis' => 'FC Groningen', 'uit' => 'SC Cambuur', 'uitslag' => [2, 3]],
    ['thuis' => 'Vitesse', 'uit' => 'Ajax', 'uitslag' => [2, 2]],
    ['thuis' => 'Willem II', 'uit' => 'FC Utrecht', 'uitslag' => [3, 0]],
    ['thuis' => 'N.E.C.', 'uit' => 'Fortuna Sittard', 'uitslag' => [0, 1]],

    ['thuis' => 'Ajax', 'uit' => 'sc Heerenveen', 'uitslag' => [5, 0]],
    ['thuis' => 'RKC Waalwijk', 'uit' => 'Heracles Almelo', 'uitslag' => [2, 0]],
    ['thuis' => 'Fortuna Sittard', 'uit' => 'Vitesse', 'uitslag' => [1, 2]],
    ['thuis' => 'Sparta Rotterdam', 'uit' => 'PEC Zwolle', 'uitslag' => [2, 0]],
    ['thuis' => 'Go Ahead Eagles', 'uit' => 'Feyenoord', 'uitslag' => [0, 1]],
    ['thuis' => 'SC Cambuur', 'uit' => 'Willem II', 'uitslag' => [1, 1]],
    ['thuis' => 'PSV', 'uit' => 'N.E.C.', 'uitslag' => [3, 2]],
    ['thuis' => 'FC Twente', 'uit' => 'FC Groningen', 'uitslag' => [3, 0]],
    ['thuis' => 'FC Utrecht', 'uit' => 'AZ', 'uitslag' => [2, 2]],

    ['thuis' => 'Feyenoord', 'uit' => 'PSV', 'uitslag' => [2, 2]],
    ['thuis' => 'AZ', 'uit' => 'Ajax', 'uitslag' => [2, 2]],
    ['thuis' => 'Vitesse', 'uit' => 'sc Heerenveen', 'uitslag' => [1, 2]],
    ['thuis' => 'N.E.C.', 'uit' => 'Go Ahead Eagles', 'uitslag' => [1, 0]],
    ['thuis' => 'FC Groningen', 'uit' => 'Sparta Rotterdam', 'uitslag' => [1, 2]],
    ['thuis' => 'PEC Zwolle', 'uit' => 'FC Utrecht', 'uitslag' => [1, 1]],
    ['thuis' => 'Willem II', 'uit' => 'Heracles Almelo', 'uitslag' => [4, 0]],
    ['thuis' => 'FC Twente', 'uit' => 'Fortuna Sittard', 'uitslag' => [1, 2]],
    ['thuis' => 'SC Cambuur', 'uit' => 'RKC Waalwijk', 'uitslag' => [0, 0]],

    ['thuis' => 'N.E.C.', 'uit' => 'Fortuna Sittard', 'uitslag' => [0, 0]],

];


echo "<table border=1 class='tabel1'>";
echo "<tr><th>Thuis</th><th>Uit</th><th></th><th></th></tr>";
foreach ($uitslagen as $uitslag) {
    echo "<tr>";
    echo "<td>" . $uitslag['thuis'] . "</td>";
    echo "<td>" . $uitslag['uit'] . "</td>";
    echo "<td>" . $uitslag['uitslag'][0] . "</td>";
    echo "<td>" . $uitslag['uitslag'][1] . "</td>";
    echo "</tr>";
}

$punten = [];
$gespeeld = [];
foreach ($uitslagen as $uitslag) {
    $thuisClub = $uitslag['thuis'];
    $uitClub = $uitslag['uit'];
    $thuisScore = $uitslag['uitslag'][0];
    $uitScore = $uitslag['uitslag'][1];

    if (!isset($punten[$thuisClub])) {
        $punten[$thuisClub] = 0;
        $gespeeld[$thuisClub] = 0;
    }
    if (!isset($punten[$uitClub])) {
        $punten[$uitClub] = 0;
        $gespeeld[$uitClub] = 0;
    }
    if ($thuisScore > $uitScore) {
        $punten[$thuisClub] += 3;
    } elseif ($thuisScore < $uitScore) {
        $punten[$uitClub] += 3;
    } else {
        $punten[$thuisClub]++;
        $punten[$uitClub]++;
    }

    $gespeeld[$thuisClub]++;
    $gespeeld[$uitClub]++;
}

arsort($punten);

echo "<table border=1 class='tabel1'>";
echo "<tr><th>Club</th><th>Punten</th><th>Gespeeld</th></tr>";
foreach ($punten as $team => $score) {
    echo "<tr>";
    echo "<td>" . $team . "</td>";
    echo "<td>" . $score . "</td>";
    echo "<td>" . $gespeeld[$team] . "</td>";
    echo "</tr>";
}
echo "</table>";

?>
</body>
</html>

