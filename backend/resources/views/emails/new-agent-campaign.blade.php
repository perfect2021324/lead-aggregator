<style>


	.emailbody {
		width:100%;
		height:100%;
		display:block;
		margin:0 auto;
		background:#f1f4f5;
		padding: 60px 0;
	}

	.bigcont {
		max-width: 380px;
		background:#fff;
		border: 1px dashed #b3b3b3;
		padding: 55px;
		margin: 0 auto;
		border-radius: 6px;
		color:#424d5e;
	}

	.emailfot {
		max-width: 450px;
		text-align: left;
		font-size: 12px;
		margin: 20px auto;
		color:#797979;

	}

	.toplogocont {
		text-align:center;
		display:block;
		width:100%;
	}

	.toplogocont img {
		width: 120px;
		margin: 10px auto !important;
		text-align: center;
		padding: 15px;
		display:block;
	}

	.bigcont p {
		font-size: 18px;
		font-family: Arial, sans-serif;
		font-weight: 400;
		line-height: 26px;
	}

	.bigcont h1 {
		font-size: 17px;
		font-family: Arial, sans-serif;
		font-weight: 600;
		color:#4d77ff;
	}

	.bigcont h2 {
		font-size: 17px;
		font-family: Arial, sans-serif;
		font-weight: 600;
	}

	.bigcont a {

		display: block;
		background:#4d77ff;
		color: #fff;
		font-size: 16px;
		font-weight: bold;
		font-family: Arial,sans-serif;
		margin: 30px auto;
		padding: 12px 30px;
		border-radius: 3px;
		text-decoration: none;
		text-align: center;
		white-space: nowrap;
		box-sizing: border-box;

	}

</style>

<div class="emailbody" style="width:100%; height:100%; display:block; margin:0 auto; background:#f1f4f5; padding: 60px 0; ">
	<div class="toplogocont" style="text-align:center; display:block; width:100%; "><img src="https://app.convertlead.com/img/logo.png" style="width: 120px; margin: 10px auto !important; text-align: center; padding: 15px; display:block;"></img></div>
	<div class="bigcont" style="max-width: 320px;background: #fff;border: 1px solid #dfdff0 !important;padding: 70px 55px 55px 55px;margin: 0 auto;border-radius: 10px;color: #354771;box-shadow: 0 1px 1px rgba(225,225,240,.9);">
		<p style="font-size: 18px; font-family: Arial, sans-serif; font-weight: 400; line-height: 26px; ">Hey, </br></br> You've just been assigned to a new ConvertLead integration : </p>
		<h1 style=" font-size: 17px; font-family: Arial, sans-serif; font-weight: 600; color:#3c3a4e; " >{{$campaign->name}} - <span style="font-style:italic; font-weight:500 !important;">{{$campaign->created_at}}</span></h1>
		<h2 style=" font-size: 17px; font-family: Arial, sans-serif; font-weight: 600; ">Company: {{$company->name}}</h2>
		<p style="font-size: 18px; font-family: Arial, sans-serif; font-weight: 400; line-height: 26px; ">Just click below to download our mobile app available on iOS and Android and start converting your leads:</p>
		<a style="display: block; background:#4d77ff; color: #fff; font-size: 16px; font-weight: bold; font-family: Arial,sans-serif; margin: 30px auto; padding: 12px 30px; border-radius: 3px; text-decoration: none; text-align: center;
		white-space: nowrap; box-sizing: border-box; " href="https://convertlead.com/downloads">Visit app download page</a>

		<p style="font-size: 18px; font-family: Arial, sans-serif; font-weight: 400; line-height: 26px; ">The ConvertLead team.</p>

	</div>
	<div class="emailfot" style="max-width: 420px; text-align: left; font-size: 12px; margin: 20px auto; color:#797979; ">
		This is an automated message. Please do not reply. You are receiving this email because you have an agent account on ConvertLead. If you wish to unsubscribe, please visit your ConvertLead settings.

	</div>

</div>
