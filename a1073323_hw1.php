<form action="submit.php" method="POST" >
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<span style="line-height: 30px;">

<head>
	<span style="font-weight:bold;"><font size=5 color="blue">【2020高雄大學資管營:<font color="red">後宮資嬛傳</font>】報名表</font></span>
	<br>
</head>

<body>
	<span style="font-weight:bold;">中文姓名:</span>
		<input type="text" name="name" value="請填全名(如:王小明)"><br>
	<span style="font-weight:bold;">團報學員姓名:</span>
		<input type="text" name="member_name" value="若為個人報名請填無"><br>
	<span style="font-weight:bold;">性別:</span><br>
		<input type=radio name="gender" value="m">男
		<input type=radio name="gender" value="f">女<br>
	<span style="font-weight:bold;">出生日期:</span>
		<input type="date" name="birth"><br>
	<span style="font-weight:bold;">您的身分證字號:</span>
		<input type="text" name="id" value="僑生請填護照號碼"><br>
	<span style="font-weight:bold;">連絡電話:</span>
		<input type="text" name="number" value="09"><br>
	<span style="font-weight:bold;">緊急聯絡人姓名:</span>
		<input type="text" name="urgent_name"><br>
	<span style="font-weight:bold;">緊急聯絡人關係:</span>
		<input type="text" name="urgent_relationship"><br>
	<span style="font-weight:bold;">緊急聯絡人連絡電話:</span>
		<input type="text" name="urgent_number"><br>
	<span style="font-weight:bold;">通訊地址:</span>
		<input type="text" name="address"><br>
	<span style="font-weight:bold;">E-mail:</span>
		<input type="text" name="email"><br>
	<span style="font-weight:bold;">就讀學校:</span>
		<input type="text" name="school"><br>
	<span style="font-weight:bold;">營服尺寸:</span>
		<select>
			<option value="2S">2S</option>
			<option value="XS">XS</option>
			<option value="S">S</option>
			<option value="M" selected>M</option>
			<option value="L">L</option>
			<option value="XL">XL</option>
			<option value="2L">2L</option>
			<option value="3L">3L</option>
		</select><br>
	<span style="font-weight:bold;">飲食:</span><br>
		<input type=radio name="food" value="m">葷
		<input type=radio name="food" value="v">素<br>
	<span style="font-weight:bold;">特殊飲食習慣:</span>
		<input type="text" name="habbit" value="如:不吃豬牛"><br>
	<span style="font-weight:bold;">特殊疾病:</span>
		<input type="text" name="ill"><br>
	<span style="font-weight:bold;">如何前來營隊？</span><br>
		<input type=radio name="come" value="nuk">自行到高雄大學<br>
		<input type=radio name="back" value="zuoying">搭乘火車/高鐵/捷運至新左營高鐵站，由我們專車接送<br>
	<span style="font-weight:bold;">營隊結束如何回家？</span><br>
		<input type=radio name="come" value="home">自行回家<br>
		<input type=radio name="back" value="zuoying">由專車接送至新左營高鐵站，搭乘火車/高鐵/捷運回家<br>
	<span style="font-weight:bold;">如何得知本營隊訊息？</span><br>
		<input type=radio name="how_to_know" value="school">學校
		<input type=radio name="how_to_know" value="relatives">親戚朋友
		<input type=radio name="how_to_know" value="net">網路
		<input type=radio name="how_to_know" value="other">其他<br>
	<span style="font-weight:bold;">是否全程參與營隊？</span><br>
		<input type=radio name="full_join" value="y">是
		<input type=radio name="full_join" value="n">否<br>
	<span style="font-weight:bold;">自我介紹及營隊期許:</span>
		<input type="text" name="introduction"><br>
	<span style="font-weight:bold;">備註:</span>
		<input type="text" name="note">
	</p>

	<p>
	<button type="submit">提交</button>
	<button type="reset">重設</button>
	</p>
</body>

</span>
</meta>
</form>