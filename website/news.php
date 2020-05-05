<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>NWS</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="style.css" rel="stylesheet">
</head>

<body>
	<nav class = " navbar-expand-md article sticky-top article">
		<div class = "container-fluid">
			<button class = "navbar-toggler" type = "button" data-toggle = "collapse" data-target = "#navbarResponsive">
				<span class = "navbar-toggler-icon"></span>
			</button>
			<div class  = "collapse navbar-collapse" id = "navbarResponsive">
				<ul class = "navbar-nav ml-auto">
					<li class = "nav-item">
						<a class = "nav-link" href = "index.php">Home</a>
					</li>
					<li class = "nav-item">
						<a class = "nav-link active" href = "register.php">Sign Up</a>
					</li>
					<li class = "nav-item">
						<a class = "nav-link active" href = "#">News</a>
					</li>
					<li class = "nav-item">
						<a class = "nav-link" href = "login.php">Login</a>			
					</li>
					<li class = "nav-item">
						<a class = "nav-link" href = "support.php">Support</a>			
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container-fluid padding article">
	<div class="row padding">
		<div class="col-md-12 col-lg-6">
			<h2> All-in-one CrazyCoin Worm Leverages EternalBlue Exploit Kit to Spread Across Target Systems</h2>
			<p>Researchers came across the new CrazyCoin virus that integrates cryptomining, hacking, and backdoor capabilities in its arsenal. It spreads via the NSA leaked EternalBlue exploit kit.</p>
			<p>What’s new about the virus?
			Discovered by the researchers from 360 Baize Labs, the virus includes mining, hacking and backdoor modules. After it infects a user’s machine, it downloads mining and information-stealing modules. Later it plants the Double Pulsar backdoor program so that all these modules cooperate with each other and perform their own activities.</p>
			<p>According to researchers, “The powershell script is responsible for downloading various modules to the victim’s machine for execution.”
			The mining module included in the virus are used to mine Monero and HNS coins. </p>
			<p>Among the information stolen by the virus’ stealing module are victims’ sensitive files such as ID cards, passwords, bitcoin wallets etc. This stolen data are later sent back to a server controlled by attackers.   
			The CrazyCoin virus listens and receives commands on port 3611.</p>
			<p>Security advice
			As CrazyCoin leverages the EternalBlue exploit to propagate across systems and this exploit kit is known for abusing vulnerability in SMBv1, it is very necessary to update security patches against it. The vulnerability CVE-2017-0144 exists because the SMB version 1 server in various versions of Microsoft Windows mishandles specially crafted packets from remote attackers, allowing them to execute arbitrary code on the targeted computer.</p>
			<br>
		</div>

		<div class="col-lg-6">
			<img src="https://cyware-ent.s3.amazonaws.com/image_bank/shutterstock_372948544.jpg" class="img-fluid">
		</div>
	</div>
</div>


<div class="container-fluid padding article">
	<div class="row padding">
		<div class="col-md-12 col-lg-6">
			<h2> Ransomware Groups To Act Considerately During COVID-19 Pandemic</h2>
			<p>Amidst the COVID-19 pandemic, some ransomware groups have released statements saying they will not target health and medical facilities at these times. </p>
			<p>What happened?
			BleepingComputer, a computer help forum, reached out to the operators of the Maze, DoppelPaymer, Ryuk, Sodinokibi (REvil), PwndLocker, and Ako ransomware infections to inquire if they plan to continue attacking health and medical organizations during the Coronavirus outbreak. Some of the hacker groups stated that they plan not to target healthcare facilities during the ongoing health crisis.</p>
			<p>DoppelPaymer Ransomware
			The first group to respond stated that hospitals or nursing homes are generally out of their targeting list, and that they believe to continue this approach during the pandemic as well.</p>
			<p>When they were asked what if a medical organization gets encrypted, the group said that the victim can request help on their email or Tor web page to provide proof and obtain a decryptor.
			"We always try to avoid hospitals, nursing homes, if it's some local gov - we always do not touch 911 (only occasionally is possible or due to missconfig in their network) . Not only now. If we  do it by mistake - we'll decrypt for free. But about pharma - they earns lot of extra on panic nowdays, we have no any wish to support them. While doctors do something, those guys earns," read the response.</p>
			<p>Maze Ransomware
			The Maze operators posted a press release stating they have decided to shut off the ransomware attack activity against all kinds of medical organizations until the end of the pandemic.
			"We also stop all activity versus all kinds of medical organizations until the stabilization of the situation with the virus," they said. However, they did not comment on whether a free decryptor would be provided if a healthcare facility mistakenly gets encrypted by them.</p>
			<br>
		</div>

		<div class="col-lg-6">
			<img src="https://cyware-ent.s3.amazonaws.com/image_bank/shutterstock_468406259.jpg" class="img-fluid">
		</div>
	</div>
</div>

<div class="container-fluid padding article">
	<div class="row padding">
		<div class="col-md-12 col-lg-6">
			<h2> Pysa Operators Join ‘Big-Game Hunting’ by Releasing New Version of Ransomware</h2>
			<p>Pysa (or Mespinoza) has become the latest ransomware to join ‘big-game hunting’ - where ransomware gangs target high-profile businesses and manually install ransomware on their networks. 
			Recently, CERT France has issued an alert about a new version of the Pysa ransomware that has targeted several local governments.
			</p>
			<p>What does the alert say?
			The alert, issued by France’s CERT team, points to a rising number of attacks carried out with a new version of the Mespionaz ransomware. This ransomware was first spotted in October 2019. At that time, it used the .locked extension at the end of each encrypted file.</p>
			<p>Later, in December 2019, a new version of Mespinoza was spotted that used the .pysa file extension.  
			In the recent attack detected by CERT-FR, it has been found that the operators are using a newer version of the ransomware, which uses the .newversion file extension.</p>
			<p>It is unclear as to how the gang is gaining access to victims’ networks. However, forensic clue suggests that the gang launches brute-force attacks against management consoles and Active Directory accounts. 
			There are some victim organizations that reported unauthorized RDP connections to their domain controllers and the deployment of Batch and PowerShell scripts. </p>
			<p>How widespread is the ransomware?
			ZDNet reports that the Pysa ransomware gang has also claimed victims outside France, hitting both government and business-related networks. It is believed that Pysa can become the next significant ransomware like Ryuk, LockerGoga, DopplePaymer, and Maze when it comes to expanding its attack surface.</p>
			<br>
		</div>

		<div class="col-lg-6">
			<img src="https://cyware-ent.s3.amazonaws.com/image_bank/bb7f_shutterstock_660345646.jpg" class="img-fluid">
		</div>
	</div>
</div>


<div class="container-fluid padding article">
	<div class="row padding">
		<div class="col-md-12 col-lg-6">
			<h2>Here’s How ‘google.news’ Becomes ‘ɢoogle.news’ to Phish Users</h2>
			<p>
			A security researcher recently discovered a clever phishing campaign that impersonates Google News by using homographic characters. IDN Homograph attack is one of the most foolproof ways to redirect unsuspecting users to phishing pages. In this type of attack, the original characters are replaced with ASCII letters which go unnoticed by humans.</p>
			<p>‘Google.news’ used for phishing
			To demonstrate the attack, researcher Avi Lumelsky explained using a popular brand name ‘Google News’. He noted that the URL uses a homographic character as its first character: ‘ɢoogle.news’ to Phish Users’. This looks similar to the original URL i.e ‘google.news’.
			Lumelsky further explained that a few years ago in 2016, someone had bought the impersonated site ‘Google.com’ to use it for phishing purposes.</p>
			<p>This is not the only case. Upon further investigation, the researcher found that there were several fake URLs that impersonated other original Google domains. Some of the examples includes ‘ɢoogle.company’’; ɢoogle.email’; ‘ɢoogle.tv’; ‘ɢoogle.life’ and even ‘ɢoogletranslate.com’.</p>
			<p>Apart from Google, several fake domains were also registered through the domain registrars like GoDaddy and Namecheap.
			Impact
			Homograph attacks are the best weapon to steal login credentials and tokens from users. Furthermore, an attacker could also inject a malicious script into the hijacked HTTP body and execute it on a client browser connecting the fake website.</p>
			<p>Bottom Line
			The attack isn’t limited to Google but can also affect other top brands. Lumelsky highlights that “Until there is a solution out there, every big company or service will have to secure their domains and assets, by spending lots of money on similar domain names.”</p>
			<br>
		</div>

		<div class="col-lg-6">
			<img src="https://cyware-ent.s3.amazonaws.com/image_bank/4c9c_shutterstock_593626601.jpg" class="img-fluid">
		</div>
	</div>
</div>



<div class="container-fluid padding article">
	<div class="row padding">
		<div class="col-md-12 col-lg-6">
			<h2> Newly Found Nefilim Ransomware Borrows Code From Nemty 2.5 Ransomware</h2>
			<p>A new ransomware strain called Nefilim that shares its code with Nemty 2.5 ransomware has been uncovered by researchers. The ransomware has started to become active in the wild and threatens to release stolen data.</p>
			<p>About the ransomware
			As reported by BleepingComputer, the ransomware most likely spreads through exposed remote Desktop Services. The other important aspect of the ransomware is that it has removed the Ransomware-as-a-Service (RaaS) component and now relies on emails for payments rather than a Tor payment site.</p>
			<p>How does it operate?
			Once launched, Nefilim encrypts victims’ files using a combination of AES-128 and RSA-2048 algorithms. For each encrypted file, the ransomware appends the .NEFILIM extension to the file name.</p>
			<p>When done with encryption, the ransomware drops a ransom note ‘NEFILIM-DECRYPT.txt’ that instructs the victim on how to recover their files.The ransom note contains different contact emails to contact the developers. It also includes a line that warns victims of leaking their data if the ransom is not paid within seven days.</p>
			<p>Bottom Line
			Lately, prominent ransomware like Maze, Nemty, and DopplePaymer have adopted the new ‘Naming and Shaming’ technique to disrupt the reputation of organizations that fail to pay the ransom. With the tactic growing popular among ransomware developers, it is expected that Nefilim is most likely to join the bandwagon of notorious ransomware to shame its victims.</p>
			<br>
		</div>

		<div class="col-lg-6">
			<img src="https://cyware-ent.s3.amazonaws.com/image_bank/ab55_shutterstock_640345744.jpg">
		</div>
	</div>
</div>


<div class="container-fluid padding article">
	<div class="row padding">
		<div class="col-md-12 col-lg-6">
			<h2> Attackers Leverage ‘COVID-19’ Scare to Target Mongolian Public Sector With RAT Module</h2>
			<p>Threat actors have started leveraging the ongoing ‘COVID-19’ scare as a lure to trick organizations. One such malware campaign has been identified by Check Point researchers.</p>
			<p>What does the report say?
			Check Point Research has uncovered a new campaign that takes advantage of the current Coronavirus scare to target the Mongolian public sector. A close look at the campaign reveals that it is carried out by the same anonymous group, dating back to at least 2016.</p>
			<p>Researchers claim that the group has targeted various government and private sectors previously.
			Infection vector
			The attack begins with RTF documents sent to the Mongolian public sector. The documents are written in the Mongolian language, with one of them from the Mongolian Ministry of Foreign Affairs. These documents contain information about the new COVID-19 infections. </p>
			<p>These RTF files are weaponized with newer versions of RoyalRoad. RoyalRoad is sometimes called ‘8.t RTF exploits builder which is mainly used here to exploit the Equation Editor vulnerabilities of Microsoft Word.
			Once the victim opens the malicious RTF document, RoyalRoad exploits the vulnerability in the Microsoft Word and later drops a new file named intel.wll into the Word startup folder.
			These newer versions of RoyalRoad utilizes the persistence technique to launch all the DLL files with a WLLextension in the Word Startup folder.</p>
			<p>An extensive analysis of the TTPs used by threat actors has revealed that all the C2 servers are hosted on Vultr servers and the domains are registered via the GoDaddy registrar.</p>
			<br>
		</div>

		<div class="col-lg-6">
			<img src="https://cyware-ent.s3.amazonaws.com/image_bank/9630_shutterstock_509521306.jpg" class="img-fluid">
		</div>
	</div>
</div>


	<footer class="article">
	<div class="article ">
		<div class=" article row text-center">	
			<div class="col-md-4">
				<hr class="light">
				<h5>Our contacts</h5>
				<hr class="light">
				<p>7-(7172)-45-23-79</p>
				<p>nws@security.com</p>
				<p>Turan avenue, 55</p>
				<p>Astana, 10000</p>
			</div>

			<div class="col-md-4">
				<hr class="light">
				<h5>Our hours</h5>
				<hr class="light">
				<p>9AM - 20AM</p>
				<p>In case of emergency we work 24/7 :)</p>
			</div>

			<div class="col-md-4">
				<hr class="light">
				<h5>Our offices</h5>
				<hr class="light">
				<p>Moscow</p>
				<p>New-York</p>
				<p>San-Francisco</p>
				<p>London</p>
			</div>

			<div class="col-12">
				<hr class="light-100">
				<h5>&copy: Made by Temirlan</h5>
			</div>

		</div>
	</div>
</footer>
</body>
</html>