<body>
	<div class="container" id="app">
		<div class="top">
			<img src="./images/experto_logo.jpg" alt="logo">
		</div>
		<section id="page1" v-bind:style="{height: heights.section1}">
			<div class="sub-container">
				<div class="title">{{texts.section1.headTitle}}</div>
				<div class="subtitle">{{texts.section1.subTitle}}</div>
				<div class="box">
					<span>{{texts.section1.boxText}}</span>
				</div>
				<div class="nav-dots_cont">
					<a v-on:click="isActive = 1" v-bind:class="{dot, selected: isActive == 1}" href="#" v-scroll-to="'#page1'"></a>
					<a v-on:click="isActive = 2" v-bind:class="{dot, selected: isActive == 2}" href="#" v-scroll-to="'#page2'"></a>
					<a v-on:click="isActive = 3" v-bind:class="{dot, selected: isActive == 3}" href="#" v-scroll-to="'#page3'"></a>
					<a v-on:click="isActive = 4" v-bind:class="{dot, selected: isActive == 4}" href="#" v-scroll-to="'#page4'"></a>
				</div>
			</div>
			<a class="arrow1" href="#" v-scroll-to="'#page2'">
				<img src="./images/down-arrow.png" alt="" class="">
			</a>
			<!-- <div class="arrow1"></div> -->
		</section>
		<section id="page2" v-bind:style="{height: heights.section2}">
			<div class="sec2contain">
				<div class="left-content">
					<div class="left-image">
						<img src="./images/bali-logo.jpg" alt="" />
					</div>
					<div class="left-text">{{texts.section2.leftText}}
						<div v-if="texts.section2.leftText.length == 0">
							כרטיס אשראי חד פעמי שמאפשר <br>
							לך לבצע קניות בחו״ל, <br>
							בארץ וברשת<br>
							באופן אנונימי ומאובטח, <br>
							בנוחות ובקלות.<br>
							לרכישה בחנויות המורשות <br>
							ברחבי הארץ
						</div>
					</div>
				</div>
				<div class="right-content">
					<div class="right-title">{{texts.section2.rightTitle}}</div>
					<div class="right-text">
						<ul>
							<li class="bullet1">{{texts.section2.rightBullet1}}</li>
							<li class="bullet2">{{texts.section2.rightBullet2}}</li>
							<li class="bullet3">{{texts.section2.rightBullet3}}</li>
							<li class="bullet4">{{texts.section2.rightBullet4}}</li>
							<li class="bullet5">{{texts.section2.rightBullet5}}</li>
							<li class="bullet6">{{texts.section2.rightBullet6}}</li>
							<li class="bullet7">{{texts.section2.rightBullet7}}</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<section id="page3" v-bind:style="{height: heights.section3}">
			<h1>{{texts.section3.title}}</h1>
			<div class="icons-container">
				<div class="box box1">
					<div class="icon_cont">
						<img src="./images/sec3-icon1.png" alt="">
					</div>
					<span class="txt-box">{{texts.section3.icon1Text}}</span>
				</div>
				<div class="box box2">
					<div class="icon_cont">
						<img src="./images/sec3-icon2.png" alt="">
					</div>
					<span class="txt-box">{{texts.section3.icon2Text}}</span>
				</div>
				<div class="box box3">
					<div class="icon_cont">
						<img src="./images/sec3-icon3.png" alt="">
					</div>
					<span class="txt-box">{{texts.section3.icon3Text}}</span>
				</div>
				<div class="box box4">
					<div class="icon_cont">
						<img src="./images/sec3-icon4.png" alt="">
					</div>
					<span class="txt-box">{{texts.section3.icon4Text}}</span>
				</div>
				<div class="box box5">
					<div class="icon_cont">
						<img src="./images/sec3-icon5.png" alt="">
					</div>
					<span class="txt-box">{{texts.section3.icon5Text}}</span>
				</div>
				<div class="box box6">
					<div class="icon_cont">
						<img src="./images/sec3-icon6.png" alt="">
					</div>
					<span class="txt-box">{{texts.section3.icon6Text}}</span>
				</div>
			</div>
		</section>
		<section id="page4" v-bind:style="{height: heights.section4}">
			<div class="sec4-cont">
				<div class="sec4title">{{texts.section4.title}}</div>
				<div class="sec4content" v-html="texts.section4.content"></div>
			</div>
		</section>
		<section id="page5">
			<div class="credits"> 03-5273300 | info@experto.win |  כנרת 9, מגדל בסר 3, בני ברק  </div>
		</section>

	</div>
</body>
</html>