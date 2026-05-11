<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <title>Evidencia produktov</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <h1>Evidencia produktov</h1>

    <form action="insert.php" method="post" class="form">
        <input type="text" name="nazov" placeholder="Názov produktu" required>
        <input type="number" step="0.01" name="cena" placeholder="Cena (€)" required>
        <textarea name="popis" placeholder="Popis produktu"></textarea>
        <button type="submit">Pridať produkt</button>
    </form>

    <table>
        <tr>
            <th>ID</th>
            <th>Názov</th>
            <th>Cena (€)</th>
            <th>Popis</th>
            <th>Akcia</th>
        </tr>
        <?php
        $result = $conn->query("SELECT * FROM produkty");
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['nazov']}</td>
                    <td>{$row['cena']}</td>
                    <td>{$row['popis']}</td>
                    <td><a href='delete.php?id={$row['id']}'>🗑️ Zmazať</a></td>
                  </tr>";
        }
        ?>
    </table>

</body>
</html>
