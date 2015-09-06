<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Strict//EN">
<html>
	<head>
		<style><?php include('../style/style.php'); ?></style>

		<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
		<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	</head>
	<body>
	

		<div class="raw" style="background-color: white;">
			ssss
		</div>
		<div class="mainlogo xs-div3 lg-div3">
			<div style="background-color: pink;" class="lg-col2 md-col3">
				<div class="raw" style="background-color: white;">
					AAA
				</div>
			</div>
			<div style="background-color: gray;">
				AAA
			</div>
			<div style="background-color: green;">
				AAA
			</div>
		</div>

		<div class="mainbody">

			<div class="blockbanner child-encapsulated">
				<div class="block lg-hidden" url="bobo">
					<div>LOGO2</div>
					<div>Chocolat</div>
				</div>
				<div class="block">
					<div>LOGO</div>
					<div>Chocolat</div>
				</div>
				<div class="block">
					<div>LOGO</div>
					<div>Chocolat</div>
				</div>
				<div class="block">
					<div>LOGO</div>
					<div>Chocolat</div>
				</div>
				<div class="block">
					<div>LOGO</div>
					<div>Chocolat</div>
				</div>
				<div class="block">
					<div>LOGO</div>
					<div>Chocolat</div>
				</div>
			</div>

			<div style="margin-top: 10px;" class="xs-div4">
				<div class="bandeau right">
					<div class="loggin">
						Bonjour
					</div>
					<div class="body">
						Bonjour
					</div>
				</div>
				<div class="bodycontent col3">
					<div class="ariane">
						WebSite /
					</div>
					<div class="content">
						Bonjouraa
						<br>
						<ul class="empty-circle">
							<li>AAA</li>
							<li>BBB</li>
							<li>CCC</li>
							<li>DDD</li>
						</ul>
						<br>
						<ul class="full-circle">
							<li>AAA</li>
							<li>BBB</li>
							<li>CCC</li>
							<li>DDD</li>
						</ul>
						
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
					</div>
					<div class="footer">
						Bonjour
					</div>
				</div>
			</div>
		</div>


		<script>
			jQuery(function($)
			{
				$('div[url]').click(function() { window.location.href = $(this).attr("url"); });
				$('.encapsulated, .child-encapsulated > div').each(function()
				{
					var _this = $(this);
					var children = _this.children();
					_this.append('<div class="sub"></div>');
					_this.children('.sub').append(children);
				});
			});
		</script>

	</body>
</html>
