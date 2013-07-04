# Geolocation Redirect (Contao)

This extensions matches an url pattern and redirects to an internal or external page.
Regular Expressions can be used for Url-splitting and their results for the redirects.

## Examples

### Configuration (Backend)

#### Target
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

#### Redirect settings

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
			<th>Url</th>
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