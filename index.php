<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<meta charset="UTF-8" />
		<title>𝔐𝔞𝔱𝔥𝔉𝔬𝔫𝔱</title>
		<style type="text/css">
			* {
				font-family:"Segoe UI","HelveticaNeue","Helvetica Neue",Helvetica,Arial,Verdana,sans-serif;
			}
			body,html {
				background-color:#333;
				color:#ccc;
				text-align:left;
				margin:0 12px;
			}
			h1 {
				font-size:28px;
				font-weight:normal;
				margin:24px 0;
			}
			label {
				border-top:1px dotted #999;
				border-left:1px dotted #999;
				border-right:1px dotted #999;
				padding:0 8px;
				margin:0;
			}
			textarea {
				background-color:#ccc;
				color:#333;
				border:1px dotted #333;
				display:block;
				padding:3px 6px;
				margin:0 12px 16px 0;
				min-width:320px;
				width:98%;
				height:72px;
			}
			input {
				background-color:#ccc;
				color:#333;
				border:1px dotted #333;
				cursor:pointer;
				font-size:18px;
				margin:0 0 38px 0;
				padding:0 0 4px 0;
			}
			input:hover {
				background-color:#999;
			}
			hr {
				border-width:0;
				height:1px;
				border-bottom:1px dotted #999;
			}
		</style>
	</head>
	<body>
		<h1>𝔐𝔞𝔱𝔥𝔉𝔬𝔫𝔱</h1>
		<form name="form" action="" method="GET">
			<?php
				function addFrakturRegular($str) {
					$a = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
					$b = array('𝔄', '𝔅', 'ℭ', '𝔇', '𝔈', '𝔉', '𝔊', 'ℌ', 'ℑ', '𝔍', '𝔎', '𝔏', '𝔐', '𝔑', '𝔒', '𝔓', '𝔔', 'ℜ', '𝔖', '𝔗', '𝔘', '𝔙', '𝔚', '𝔛', '𝔜', 'ℨ', '𝔞', '𝔟', '𝔠', '𝔡', '𝔢', '𝔣', '𝔤', '𝔥', '𝔦', '𝔧', '𝔨', '𝔩', '𝔪', '𝔫', '𝔬', '𝔭', '𝔮', '𝔯', '𝔰', '𝔱', '𝔲', '𝔳', '𝔴', '𝔵', '𝔶', '𝔷');
					return str_replace($a, $b, $str);
				}
				function addFrakturBold($str) {
					$a = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
					$b = array('𝕬', '𝕭', '𝕮', '𝕯', '𝕰', '𝔉', '𝔊', 'ℌ', 'ℑ', '𝔍', '𝔎', '𝔏', '𝔐', '𝔑', '𝔒', '𝔓', '𝔔', 'ℜ', '𝔖', '𝔗', '𝔘', '𝔙', '𝔚', '𝔛', '𝔜', 'ℨ', '𝔞', '𝔟', '𝔠', '𝔡', '𝔢', '𝔣', '𝔤', '𝔥', '𝔦', '𝔧', '𝔨', '𝔩', '𝔪', '𝔫', '𝔬', '𝔭', '𝔮', '𝔯', '𝔰', '𝔱', '𝔲', '𝔳', '𝔴', '𝔵', '𝔶', '𝔷 ');
					return str_replace($a, $b, $str);
				}
				function addCalligraphyRegular($str) {
					$a = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
					$b = array('𝕬', '𝕭', 'ℭ', '𝔇', '𝔈', '𝔉', '𝔊', 'ℌ', 'ℑ', '𝔍', '𝔎', '𝔏', '𝔐', '𝔑', '𝔒', '𝔓', '𝔔', 'ℜ', '𝔖', '𝔗', '𝔘', '𝔙', '𝔚', '𝔛', '𝔜', 'ℨ', '𝔞', '𝔟', '𝔠', '𝔡', '𝔢', '𝔣', '𝔤', '𝔥', '𝔦', '𝔧', '𝔨', '𝔩', '𝔪', '𝔫', '𝔬', '𝔭', '𝔮', '𝔯', '𝔰', '𝔱', '𝔲', '𝔳', '𝔴', '𝔵', '𝔶', '𝔷 ');
					return str_replace($a, $b, $str);
				}
				function addCalligraphyBold($str) {
					$a = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
					$b = array('𝕬', '𝕭', 'ℭ', '𝔇', '𝔈', '𝔉', '𝔊', 'ℌ', 'ℑ', '𝔍', '𝔎', '𝔏', '𝔐', '𝔑', '𝔒', '𝔓', '𝔔', 'ℜ', '𝔖', '𝔗', '𝔘', '𝔙', '𝔚', '𝔛', '𝔜', 'ℨ', '𝔞', '𝔟', '𝔠', '𝔡', '𝔢', '𝔣', '𝔤', '𝔥', '𝔦', '𝔧', '𝔨', '𝔩', '𝔪', '𝔫', '𝔬', '𝔭', '𝔮', '𝔯', '𝔰', '𝔱', '𝔲', '𝔳', '𝔴', '𝔵', '𝔶', '𝔷 ');
					return str_replace($a, $b, $str);
				}
				function addMonospaced($str) {
					$a = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
					$b = array('𝕬', '𝕭', 'ℭ', '𝔇', '𝔈', '𝔉', '𝔊', 'ℌ', 'ℑ', '𝔍', '𝔎', '𝔏', '𝔐', '𝔑', '𝔒', '𝔓', '𝔔', 'ℜ', '𝔖', '𝔗', '𝔘', '𝔙', '𝔚', '𝔛', '𝔜', 'ℨ', '𝔞', '𝔟', '𝔠', '𝔡', '𝔢', '𝔣', '𝔤', '𝔥', '𝔦', '𝔧', '𝔨', '𝔩', '𝔪', '𝔫', '𝔬', '𝔭', '𝔮', '𝔯', '𝔰', '𝔱', '𝔲', '𝔳', '𝔴', '𝔵', '𝔶', '𝔷 ', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
					return str_replace($a, $b, $str);
				}
				function addBlackboardBold($str) {
					$a = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
					$b = array('𝕬', '𝕭', 'ℭ', '𝔇', '𝔈', '𝔉', '𝔊', 'ℌ', 'ℑ', '𝔍', '𝔎', '𝔏', '𝔐', '𝔑', '𝔒', '𝔓', '𝔔', 'ℜ', '𝔖', '𝔗', '𝔘', '𝔙', '𝔚', '𝔛', '𝔜', 'ℨ', '𝔞', '𝔟', '𝔠', '𝔡', '𝔢', '𝔣', '𝔤', '𝔥', '𝔦', '𝔧', '𝔨', '𝔩', '𝔪', '𝔫', '𝔬', '𝔭', '𝔮', '𝔯', '𝔰', '𝔱', '𝔲', '𝔳', '𝔴', '𝔵', '𝔶', '𝔷 ', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
					return str_replace($a, $b, $str);
				}
			?>
			
			<textarea name="input" onclick="this.value='';">Write something in this text box. Or don't. See if I care.

Works in FF and IE11. Somewhat works in Opera. Does not work in Chrome, I guess.</textarea>

			<br/>
			
			<input type="submit"  value="☞ 𝔇𝔬 𝔰𝔬𝔪𝔢𝔱𝔥𝔦𝔫𝔤. ☜" />
			
			<br/>
			
			<label>𝔉𝔯𝔞𝔨𝔱𝔲𝔯 ℜ𝔢𝔤𝔲𝔩𝔞𝔯</label>
			<textarea name="output1" readonly="readonly"><?php echo addFrakturRegular($_GET["input"]); ?></textarea>
			
			<label>𝕱𝖗𝖆𝖐𝖙𝖚𝖗 𝕭𝖔𝖑𝖉</label>
			<textarea name="output2" readonly="readonly"><?php echo addFrakturBold($_GET["input"]); ?></textarea>
			
			<label>𝒞𝒶𝓁𝓁𝒾ℊ𝓇𝒶𝓅𝒽𝓎 ℛℯℊ𝓊𝓁𝒶𝓇</label>
			<textarea name="output3" readonly="readonly"><?php echo addCalligraphyRegular($_GET["input"]); ?></textarea>
			
			<label>𝓒𝓪𝓵𝓵𝓲𝓰𝓻𝓪𝓹𝓱𝔂 𝓑𝓸𝓵𝓭</label>
			<textarea name="output4" readonly="readonly"><?php echo addCalligraphyBold($_GET["input"]); ?></textarea>
			
			<label>𝙼𝚘𝚗𝚘𝚜𝚙𝚊𝚌𝚎𝚍</label>
			<textarea name="output5" readonly="readonly"><?php echo addMonospaced($_GET["input"]); ?></textarea>
			
			<label>𝔹𝕝𝕒𝕔𝕜𝕓𝕠𝕒𝕣𝕕 𝔹𝕠𝕝𝕕</label>
			<textarea name="output6" readonly="readonly"><?php echo addBlackboardBold($_GET["input"]); ?></textarea>
			
		</form>
		<br/>
		<hr/>
		<br/>
		<!-- fraktur regular -->
		𝔄𝔅ℭ𝔇𝔈𝔉𝔊ℌℑ𝔍𝔎𝔏𝔐𝔑𝔒𝔓𝔔ℜ𝔖𝔗𝔘𝔙𝔚𝔛𝔜ℨ𝔞𝔟𝔠𝔡𝔢𝔣𝔤𝔥𝔦𝔧𝔨𝔩𝔪𝔫𝔬𝔭𝔮𝔯𝔰𝔱𝔲𝔳𝔴𝔵𝔶𝔷
		<!-- /fraktur regular -->
		<br/>
		<!-- fraktur bold -->
		𝕬𝕭𝕮𝕯𝕰𝕱𝕲𝕳𝕴𝕵𝕶𝕷𝕸𝕹𝕺𝕻𝕼𝕽𝕾𝕿𝖀𝖁𝖂𝖃𝖄𝖅𝖆𝖇𝖈𝖉𝖊𝖋𝖌𝖍𝖎𝖏𝖐𝖑𝖒𝖓𝖔𝖕𝖖𝖗𝖘𝖙𝖚𝖛𝖜𝖝𝖞𝖟
		<!-- /fraktur bold -->
		<br/>
		<!-- calligraphy regular -->
		𝒜ℬ𝒞𝒟ℰℱ𝒢ℋℐ𝒥𝒦ℒℳ𝒩𝒪𝒫𝒬ℛ𝒮𝒯𝒰𝒱𝒲𝒳𝒴𝒵𝒶𝒷𝒸𝒹ℯ𝒻ℊ𝒽𝒾𝒿𝓀𝓁𝓂𝓃ℴ𝓅𝓆𝓇𝓈𝓉𝓊𝓋𝓌𝓍𝓎𝓏
		<!-- /calligraphy regular -->
		<br/>
		<!-- calligraphy bold -->
		𝓐𝓑𝓒𝓓𝓔𝓕𝓖𝓗𝓘𝓙𝓚𝓛𝓜𝓝𝓞𝓟𝓠𝓡𝓢𝓣𝓤𝓥𝓦𝓧𝓨𝓩𝓪𝓫𝓬𝓭𝓮𝓯𝓰𝓱𝓲𝓳𝓴𝓵𝓶𝓷𝓸𝓹𝓺𝓻𝓼𝓽𝓾𝓿𝔀𝔁𝔂𝔃
		<!-- /calligraphy bold -->
		<br/>
		<!-- monospaced -->
		𝙰𝙱𝙲𝙳𝙴𝙵𝙶𝙷𝙸𝙹𝙺𝙻𝙼𝙽𝙾𝙿𝚀𝚁𝚂𝚃𝚄𝚅𝚆𝚇𝚈𝚉𝚊𝚋𝚌𝚍𝚎𝚏𝚐𝚑𝚒𝚓𝚔𝚕𝚖𝚗𝚘𝚙𝚚𝚛𝚜𝚝𝚞𝚟𝚠𝚡𝚢𝚣𝟶𝟷𝟸𝟹𝟺𝟻𝟼𝟽𝟾𝟿
		<!-- /monospaced -->
		<br/>
		<!-- blackboard bold -->
		𝔸𝔹ℂ𝔻𝔼𝔽𝔾ℍ𝕀𝕁𝕂𝕃𝕄ℕ𝕆ℙℚℝ𝕊𝕋𝕌𝕍𝕎𝕏𝕐ℤ𝕒𝕓𝕔𝕕𝕖𝕗𝕘𝕙𝕚𝕛𝕜𝕝𝕞𝕟𝕠𝕡𝕢𝕣𝕤𝕥𝕦𝕧𝕨𝕩𝕪𝕫𝟘𝟙𝟚𝟛𝟜𝟝𝟞𝟟𝟠𝟡
		<!-- /blackboard bold -->
		<br/>
		<br/>
	</body>
</html>

<!-- http://en.wikipedia.org/wiki/Blackletter#Unicode -->
<!-- http://en.wikipedia.org/wiki/Mathematical_Alphanumeric_Symbols#Latin_letters -->
<!-- http://en.wikipedia.org/wiki/Letterlike_Symbols -->
