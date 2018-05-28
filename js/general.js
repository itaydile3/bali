window.onload = function () {
	var winHeight = window.innerHeight;
	var topHeight = $('.top').height();
	var imageInfo;

	var app = new Vue({
		el: '#app',
		data: {
			heights: {
				section1: '',
				section2: '',
				section3: '',
				section4: ''
			},
			texts: {
				section1: {
					headTitle: 'כרטיס אשראי חד פעמי ישראלי ובינלאומי ',
					subTitle: 'לקניות בחו"ל⚫בארץ⚫ובאינטרנט',
					boxText: '500 ש"ח או 1000 ש"ח'
				},
				section2: {
					rightTitle: '',
					rightBullet1: "",
					rightBullet2: "",
					rightBullet3: "",
					rightBullet4: "",
					rightBullet5: "",
					rightBullet6: "",
					rightBullet7: "",
					leftText: ''
				},
				section3: {
					title: "",
					icon1Text: "",
					icon2Text: "",
					icon3Text: "",
					icon4Text: "",
					icon5Text: "",
					icon6Text: ""
				},
				section4: {
					title: "",
					content: ""
				},
			},
			winHeight: winHeight,
			isActive: undefined,
			dot: true,
		},
		mounted() {
			axios.get("images_info").then(response => 
				this.calc(response.data)
				);
			axios.get("showJson")
			.then(response => {this.texts = response.data})
		},
		methods: {
			calc: function (resp){
				$.each(resp, function(index, prop){
					var w = prop[0];
					var h = prop[1];
					var fw = window.innerWidth;
					var nw = (h / w) * fw;
					// (original height / original width) x new width = new height
					
					switch (index) {
						case 'section1-back':
						app.heights.section1 = nw.toFixed(2);
						break;
						case 'section2-back':
						app.heights.section2 = nw.toFixed(2);
						break;
						case 'section3-back':
						app.heights.section3 = nw.toFixed(2);
						break;
						case 'section4-back':
						app.heights.section4 = nw.toFixed(2);
						break;

						default:
							// statements_def
							break;
						}
					});
			},
			getDetail:function(){
				axios.get("show_json").then(response => 
					this.globalJson = response.data
					);
			},
		},
	});
	VueScrollTo.setDefaults({
		container: "body",
		duration: 500,
		easing: "ease",
		offset: 0,
		cancelable: true,
		onStart: false,
		onDone: false,
		onCancel: false,
		x: false,
		y: true
	});
}