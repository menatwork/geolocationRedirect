Geolocation Redirect - English
==============================

geolocationRedirect matches an url pattern and redirects to internal or external pages after setting the configured contry information (geolocation). Regular expressions can be used for URL splitting and their results for the redirects.

### Settings

**System => Settings => Kill Query-String**

All GET parameters of the URL in form of "?key=value" will be removed with this option.


### Redirect definitions

You can choose between two types of redirects. The redirect type can be chosen under "target type".

* Internal redirect
* External redirect

The first option redirects to an internal page, which can be selected with a pagepicker. The second option is for redirecting to external URL or using placeholders.


### Example configuration

**Target**

<table>
	<thead>
		<tr>
			<th>Setting</th>
			<th>Value</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>URL</td>
			<td>be-(.*)</td>
		</tr>
		<tr>
			<td>Regexp</td>
			<td>true</td>
		</tr>
	</tbody>
</table>

**Redirect settings**

<table>
	<thead>
		<tr>
			<th>Setting</th>
			<th>Value</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Redirect Url</td>
			<td>$1</td>
		</tr>
		<tr>
			<td>Countries</td>
			<td>be</td>
		</tr>
	</tbody>
</table>

### Result

<table>
	<thead>
		<tr>
			<th>URL</th>
			<th>Redirect target</th>
			<th>Country<br/>(set with geoprotection)</th>
		</th>
	</thead>
	<tbody>
		<tr>
			<td>/be-nl/start.html</td>
			<td>/nl/start.html</td>
			<td>be</td>
		</tr>
		<tr>
			<td>/be-de/start.html</td>
			<td>/de/start.html</td>
			<td>be</td>
		</tr>
		<tr>
			<td>/be-en/start.html</td>
			<td>/en/start.html</td>
			<td>be</td>
		</tr>
	</tbody>
</table>


Geolocation Redirect - Deutsch
==============================

geolocationRedirect wertet URL-Muster aus und leitet auf interne oder externe Seiten weiter und setzt dabei die eingestellten Länderinformationen (Geolocation). Reguläre Ausdrücke können für die URL-Auswertung und die Redirects verwendet werden.

### Einstellungen

**System => Einstellungen => Kill Query-String**

Mit dieser Einstellungen werden alle GET Parameter, die mit "?key=value" an der Url angehängt werden, entfernt.


### Definition der Weiterleitungen

Es gibt zwei Arten der Weiterleitungen. Diese können unter Targettyp ausgewählt werden.

* Interne Weiterleitung
* Externe Weiterleitung

Die erste erlaubt es direkt eine Seite auszuwählen. Die zweite Option hingegen erlaubt es externe Seiten aufzurufen, bzw. mit Platzhaltern zu arbeiten.


### Beispielkonfiguration

**Ziel**

<table>
    <thead>
        <tr>
            <th>Einstellung</th>
            <th>Wert</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>URL</td>
            <td>be-(.*)</td>
        </tr>
        <tr>
            <td>Regexp</td>
            <td>true</td>
        </tr>
    </tbody>
</table>

**Weiterleitungseinstellungen**

<table>
    <thead>
        <tr>
            <th>Einstellung</th>
            <th>Wert</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Weiterleitungs-URL</td>
            <td>$1</td>
        </tr>
        <tr>
            <td>Land</td>
            <td>be</td>
        </tr>
    </tbody>
</table>

### Ergebnis

<table>
    <thead>
        <tr>
            <th>URL</th>
            <th>Weiterleitungsziel</th>
            <th>Land<br/>(Durch geoprotection konfiguriert)</th>
        </th>
    </thead>
    <tbody>
        <tr>
            <td>/be-nl/start.html</td>
            <td>/nl/start.html</td>
            <td>be</td>
        </tr>
        <tr>
            <td>/be-de/start.html</td>
            <td>/de/start.html</td>
            <td>be</td>
        </tr>
        <tr>
            <td>/be-en/start.html</td>
            <td>/en/start.html</td>
            <td>be</td>
        </tr>
    </tbody>
</table>