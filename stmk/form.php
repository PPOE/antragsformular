<!DOCTYPE html>
<html>
<head>
    <title>Antrag erstellen</title>
    <meta charset="UTF-8" />
</head>
<body>
<fieldset><legend>Antrag erstellen</legend>
<form action="addHaltestelle.php" method="post">
    <table>
    <tr><td>Titel</td><td>
        <input type="text" size="40" name="titel">
    </td></tr>
    <tr><td>Bereich</td><td>
        <select name="bereich">
          <option value="Anfrage">Anfrage</option>
          <option value="Antrag">Antrag</option>
          <option value="EDV-Verwaltung">&raquo; EDV-Verwaltung</option>
          <option value="Terminverwaltung">&raquo; Terminverwaltung</option>
          <option value="Mitarbeiterverwaltung">&raquo; Mitarbeiterverwaltung</option>
          <option value="Finanzgebarung">&raquo; Finanzgebarung</option>
        </select>
    </td></tr>
    <tr><td>Antragsteller</td><td>
        <input type="text" size="40" name="antragsteller">
    </td></tr>
    <tr><td>Antragsforderung</td><td>
        <textarea rows="4" cols="50" name="antragsforderung"></textarea>
    </td></tr>
    <tr><td>Antragsbegr&uuml;ndung</td><td>
        <textarea rows="4" cols="50" name="antragsbegründung"></textarea>
    </td></tr>
    <tr><td>
            <input type="submit" name="submit" value="Erstellen">
    </td></tr>
    </table>
</form>
</fieldset>
</body>
</html>