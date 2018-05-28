<body class="admin">
	<div id="admin"> 
	<form>
		<div class="update_section" id="section1">
			<h1>עריכת דף ראשון</h1>
			<label for="sec1_headTitle">כותרת</label>
			<input v-model="values.section1_headTitle" type="text" class="section1" />
			<br>
			<label for="sec1_subtitle">כותרת משנה</label>
			<input v-model="values.section1_subTitle" type="text" class="section1" />
			<br>
			<label for="sec1_box">עריכת קוביה</label>
			<input v-model="values.section1_boxText" v-model="sec1_box" type="text" class="section1" />
		</div>
		<div class="update_section" id="section2">
			<h1>עריכת דף שני</h1>
			<h2>חלק ימני</h2>
			<label for="rightTitle">כותרת</label>
			<input v-model="values.section2_rightTitle" type="text" name="rightTitle" />
			<br>
			<label for="rightBullet1">נקודה 1</label>
			<input v-model="values.section2_rightBullet1" type="text" name="section2_rightBullet1" />
			<br>
			<label for="rightBullet2">נקודה 2</label>
			<input v-model="values.section2_rightBullet2" type="text" name="section2_rightBullet2" />
			<br>
			<label for="rightBullet3">נקודה 3</label>
			<input v-model="values.section2_rightBullet3" type="text" name="section2_rightBullet3" />
			<br>
			<label for="rightBullet4">נקודה 4</label>
			<input v-model="values.section2_rightBullet4" type="text" name="section2_rightBullet4" />
			<br>
			<label for="rightBullet5">נקודה 5</label>
			<input v-model="values.section2_rightBullet5" type="text" name="section2_rightBullet5" />
			<br>
			<label for="rightBullet6">נקודה 6</label>
			<input v-model="values.section2_rightBullet6" type="text" name="section2_rightBullet6" />
			<br>
			<label for="rightBullet7">נקודה 7</label>
			<input v-model="values.section2_rightBullet7" type="text" name="section2_rightBullet7" />
			
			<h2>חלק שמאלי</h2>
			<label for="section2_leftText">תוכן</label>
			<input v-model="values.section2_leftText" type="textarea" name="section3_leftText" />
		</div>
		<div class="update_section" id="section3">
			<h1>עריכת דף  שלישי</h1>
			<label for="section3_title">טקסט סמל  1</label>
			<input v-model="values.section3_title" type="text" name="section3_title">
			<br>
			<label for="icon1Text">טקסט סמל  1</label>
			<input v-model="values.section3_icon1Text" type="text" name="section3_icon1Text">
			<br>
			<label for="icon2Text">טקסט סמל  2</label>
			<input v-model="values.section3_icon2Text" type="text" name="section3_icon2Text">
			<br>
			<label for="icon3Text">טקסט סמל  3</label>
			<input v-model="values.section3_icon3Text" type="text" name="section3_icon3Text">
			<br>
			<label for="icon4Text">טקסט סמל  4</label>
			<input v-model="values.section3_icon4Text" type="text" name="section3_icon4Text">
			<br>
			<label for="icon5Text">טקסט סמל  5</label>
			<input v-model="values.section3_icon5Text" type="text" name="section3_icon5Text">
			<br>
			<label for="icon6Text">טקסט סמל  6</label>
			<input v-model="values.section3_icon6Text" type="text" name="section3_icon6Text">
			<br>
		</div>
		<div class="update_section" id="section4">
			<h1>עריכת דף רביעי</h1>
			<label for="section4_title">כותרת</label>
			<input v-model="values.section4_title" type="text" name="section4_title" />
			<br>
			<label for="content">עריכת תוכן</label>
			<input v-model="values.section4_content" type="text" name="section4_content" />
		</div>
		<button type="button" v-on:click="send" >send</button>
	</form>
</body>
</html>