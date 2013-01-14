<!DOCTYPE html>
<html>
<head>
    <title>Antrag erstellen</title>
    <meta charset="UTF-8" />
</head>
<body>
    <fieldset><legend>Antrag erstellen</legend>
    <form action="index.php" method="post">
        <table>
        <?
            if(isset($error)) {?>
            <tr><td>
                <font color="red"><?=$error;?></font>
            </td></tr>
            <?}
        ?>
        <tr><td>Titel:</td><td>
            <input type="text" size="40" name="titel" value="<?= $data['titel']; ?>">
        </td></tr>
        <tr><td>Bereich:</td><td>
            <select name="bereich">
              <option value="Anfrage">Anfrage</option>
              <option value="Antrag">Antrag</option>
              <option value="EDV-Verwaltung">&raquo; EDV-Verwaltung</option>
              <option value="Terminverwaltung">&raquo; Terminverwaltung</option>
              <option value="Mitarbeiterverwaltung">&raquo; Mitarbeiterverwaltung</option>
              <option value="Finanzgebarung">&raquo; Finanzgebarung</option>
            </select>
        </td></tr>
        <tr><td>Antragsteller:</td><td>
            <input type="text" size="40" name="antragsteller" value="<?= $data['antragsteller']; ?>">
        </td></tr>
        <tr><td>Antragsforderung:</td><td>
            <textarea rows="15" cols="80" name="antragsforderung"><?= $data['antragsforderung']; ?></textarea>
        </td></tr>
        <tr><td>Antragsbegr&uuml;ndung:</td><td>
            <textarea rows="15" cols="80" name="antragsbegruendung"><?= $data['antragsbegruendung']; ?></textarea>
        </td></tr>
        <tr><td>
                <input type="submit" name="submit" value="Erstellen">
        </td></tr>
        </table>
    </form>
    </fieldset>
</body>
</html>