<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
<style type="text/css" media="screen">
* {
margin: 0;
}

html, body
{
	margin: 0;
	padding: 0;
	width: 100%;
	height: 100%;
	font-family: 'Arial', 'Helvetica', sans-serif;
}
table {
	margin: 0;
	padding: 0;
	width: 100%;
}
body
{
	background: #f8f8f8;
	overflow:hidden
}

td.email-header {
	background-color: #f47063;
	font-size: 16px;
	line-height: 18px;
	color: #fff;
}
td.email-subheader small {
	display: block;
	color: #f47063;
}
td.email-closing, td.email-body, td.email-subheader, td.email-header {
	padding: 20px 18px 12px;
}
</style>
	</head>
	<body>
	<table>
		<tr>
			<td class="email-header">Respond Letter from josephlacerna.com</td>
		</tr>
		<tr>
			<td class="email-subheader">
				Thank you for your time.
				<small>Generated {{ date('Y-m-d') }}</small>
			</td>
		</tr>
		<tr>
			<td class="email-body">

				<p>Hi {{ $name }}!</p>
				<p>Thank you for the interest you show by subscribing to my site. I'll let you know some updates on my site specifically on my portfolio and my web development.</p>

			</td>
		</tr>
		<tr>
			<td class="email-closing">
				<p>Warm Regards,</p>
				<p>Joseph Lacerna</p>
				<p><a href="http://josephlacerna.com" title="josephlacerna.com">josephlacerna.com</a></p>
				<p><a href="mailto:me@josephlacerna.com?subject=contact-us" "let's talk">me@josephlacerna.com</a></p>
			</td>
		</tr>
	</table>
	</body>
</html>
