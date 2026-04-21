<?php
// Podaci o klubovima u 1. HNL
$klubovi = [
    ["naziv" => "Dinamo Zagreb", "grad" => "Zagreb", "stadion" => "Maksimir"],
    ["naziv" => "Hajduk Split", "grad" => "Split", "stadion" => "Poljud"],
    ["naziv" => "Rijeka", "grad" => "Rijeka", "stadion" => "Rujevica"],
    ["naziv" => "Osijek", "grad" => "Osijek", "stadion" => "Opus Arena"],
    ["naziv" => "Lokomotiva Zagreb", "grad" => "Zagreb", "stadion" => "Kranjčevićeva"],
    ["naziv" => "Istra 1961", "grad" => "Pula", "stadion" => "Stadion Aldo Drosina"],
    ["naziv" => "Slaven Belupo", "grad" => "Koprivnica", "stadion" => "Stadion Ivan Kušek-Apaš"],
    ["naziv" => "Gorica", "grad" => "Velika Gorica", "stadion" => "Gradski stadion Velika Gorica"],
    ["naziv" => "Rudeš", "grad" => "Zagreb", "stadion" => "Stadion Rudeš"],
    ["naziv" => "Varaždin", "grad" => "Varaždin", "stadion" => "Stadion Varteks"]
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
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f2f5;
        }

        header {
            background-color: #003366;
            color: white;
            padding: 20px;
            text-align: center;
        }

        main {
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #0055a5;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
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
                </tr>
            </thead>
            <tbody>
                <?php foreach($klubovi as $index => $klub): ?>
                    <tr>
                        <td><?php echo $index + 1; ?></td>
                        <td><?php echo htmlspecialchars($klub['naziv']); ?></td>
                        <td><?php echo htmlspecialchars($klub['grad']); ?></td>
                        <td><?php echo htmlspecialchars($klub['stadion']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>

    <script>
        // Primjer JavaScript funkcionalnosti (opcionalno)
        document.addEventListener("DOMContentLoaded", () => {
            console.log("Stranica učitana!");
        });
    </script>
</body>
</html>
