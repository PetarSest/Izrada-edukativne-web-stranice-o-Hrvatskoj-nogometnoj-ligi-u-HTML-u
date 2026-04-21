<?php
$klubovi = [
    ["naziv" => "Dinamo Zagreb", "grad" => "Zagreb", "stadion" => "Maksimir", "osnovan" => 1945, "naslovi" => 24],
    ["naziv" => "Hajduk Split", "grad" => "Split", "stadion" => "Poljud", "osnovan" => 1911, "naslovi" => 6],
    ["naziv" => "Rijeka", "grad" => "Rijeka", "stadion" => "Rujevica", "osnovan" => 1946, "naslovi" => 1],
    ["naziv" => "Osijek", "grad" => "Osijek", "stadion" => "Opus Arena", "osnovan" => 1947, "naslovi" => 0],
    ["naziv" => "Lokomotiva Zagreb", "grad" => "Zagreb", "stadion" => "Kranjčevićeva", "osnovan" => 1914, "naslovi" => 0],
    ["naziv" => "Istra 1961", "grad" => "Pula", "stadion" => "Aldo Drosina", "osnovan" => 1961, "naslovi" => 0],
    ["naziv" => "Slaven Belupo", "grad" => "Koprivnica", "stadion" => "Ivan Kušek-Apaš", "osnovan" => 1907, "naslovi" => 0],
    ["naziv" => "Gorica", "grad" => "Velika Gorica", "stadion" => "Gradski stadion Velika Gorica", "osnovan" => 2009, "naslovi" => 0],
    ["naziv" => "Varaždin", "grad" => "Varaždin", "stadion" => "Stadion Varteks", "osnovan" => 2012, "naslovi" => 0],
    ["naziv" => "Rudeš", "grad" => "Zagreb", "stadion" => "Stadion Rudeš", "osnovan" => 1957, "naslovi" => 0]
];
?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1. HNL - Klubovi</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #e9f1fa;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #003366;
            color: white;
            padding: 20px;
            text-align: center;
        }

        main {
            padding: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        th, td {
            padding: 15px;
            border-bottom: 1px solid #ddd;
            text-align: center;
        }

        th {
            background-color: #0055a5;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        @media (max-width: 700px) {
            table, thead, tbody, th, td, tr {
                display: block;
            }
            thead tr {
                display: none;
            }
            td {
                position: relative;
                padding-left: 50%;
            }
            td::before {
                position: absolute;
                top: 15px;
                left: 15px;
                width: 45%;
                white-space: nowrap;
                font-weight: bold;
            }
            td:nth-of-type(1)::before { content: "#"; }
            td:nth-of-type(2)::before { content: "Klub"; }
            td:nth-of-type(3)::before { content: "Grad"; }
            td:nth-of-type(4)::before { content: "Stadion"; }
            td:nth-of-type(5)::before { content: "Osnovan"; }
            td:nth-of-type(6)::before { content: "Naslovi"; }
        }
    </style>
</head>
<body>

<header>
    <h1>Prva HNL - Klubovi</h1>
</header>

<main>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Klub</th>
                <th>Grad</th>
                <th>Stadion</th>
                <th>Godina osnutka</th>
                <th>Broj naslova</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($klubovi as $index => $klub): ?>
                <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= htmlspecialchars($klub["naziv"]) ?></td>
                    <td><?= htmlspecialchars($klub["grad"]) ?></td>
                    <td><?= htmlspecialchars($klub["stadion"]) ?></td>
                    <td><?= htmlspecialchars($klub["osnovan"]) ?></td>
                    <td><?= htmlspecialchars($klub["naslovi"]) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>

</body>
</html>
