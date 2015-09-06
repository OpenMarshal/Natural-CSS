# Natural CSS
CSS Framework




```html
<div class="encapsulated">
	Welcome
</div>
```
=> After JS
```html
<div class="encapsulated">
	<div class="sub">
		Welcome
	</div>
</div>
```

///////

```html
<div class="child-encapsulated">
	<div>
		Welcome1
	</div>
	<div>
		Welcome2
	</div>
	<div>
		Welcome3
	</div>
</div>
```
=> After JS
```html
<div class="child-encapsulated">
	<div>
		<div class="sub">
			Welcome1
		</div>
	</div>
	<div>
		<div class="sub">
			Welcome2
		</div>
	</div>
	<div>
		<div class="sub">
			Welcome3
		</div>
	</div>
</div>
```

/////////////////////////////////////////////////

3 columns auto adjusted
```html
<div class="xs-div3">
	<div>Welcome 1</div>
	<div>Welcome 2</div>
	<div>Welcome 3</div>
</div>
```
=> After CSS
[Welcome 1][Welcome 2][Welcome 3]

///////

3 columns auto adjusted
```html
<div class="xs-div3">
	<div>Welcome 1</div>
	<div>Welcome 2</div>
	<div>Welcome 3</div>
	<div>Welcome 4</div>
</div>
```
=> After CSS
[Welcome 1][Welcome 2][Welcome 3]
[Welcome 4]

///////

3 columns auto adjusted
```html
<div class="xs-div3">
	<div>Welcome 1<br>Welcome 1'</div>
	<div>Welcome 2</div>
	<div>Welcome 3</div>
	<div>Welcome 4</div>
</div>
```
=> After CSS
[Welcome 1 ][Welcome 2][Welcome 3]
[Welcome 1'][Welcome 4]

/////////////////////////////////////////////////

```html
<div class="raw">
	<div>Welcome 1</div>
	<div>Welcome 2</div>
	<div>Welcome 3</div>
</div>
```
=> After CSS
[ Welcome 1                      ]
[ Welcome 2                      ]
[ Welcome 3                      ]

/////////////////////////////////////////////////

```html
<ul class="hlist">
	<li>AAA</li>
	<li>BBB</li>
	<li>CCC</li>
	<li>DDD</li>
</ul>
```
=> After CSS
[AAA][BBB][CCC][DDD]

///////

```html
<ul class="hlist right">
	<li>AAA</li>
	<li>BBB</li>
	<li>CCC</li>
	<li>DDD</li>
</ul>
```
=> After CSS
                          [DDD][CCC][BBB][AAA]

/////////////////////////////////////////////////

<table>
	<tbody>
		<tr>
			<td>disc</td>
			<td>disc</td>
		</tr>
		<tr>
			<td>circle</td>
			<td>circle</td>
		</tr>
		<tr>
			<td>square</td>
			<td>square</td>
		</tr>
		<tr>
			<td>roman</td>
			<td>upper-roman</td>
		</tr>
		<tr>
			<td>alpha</td>
			<td>lower-alpha</td>
		</tr>
		<tr>
			<td>bigalpha</td>
			<td>upper-alpha</td>
		</tr>
	</tbody>
</table>

