window.onload = function () {
	var admin = new Vue({
		el: '#admin',
		data: {
			values: {
				section1_headTitle: '',
				section1_subTitle: '',
				section1_boxText: '',
				section2_rightTitle: '',
				section2_rightBullet1: '',
				section2_rightBullet2: '',
				section2_rightBullet3: '',
				section2_rightBullet4: '',
				section2_rightBullet5: '',
				section2_rightBullet6: '',
				section2_rightBullet7: '',
				section2_leftText: '',
				section3_title: '',
				section3_icon1Text: '',
				section3_icon2Text: '',
				section3_icon3Text: '',
				section3_icon4Text: '',
				section3_icon5Text: '',
				section3_icon6Text: '',
				section4_title: '',
				section4_content: ''
			}
		},
		mounted(){
			
		},
		methods: {
			send: function(event){
				var data_vals = {};
				$.each(this.values, function(index, el){
					if(el != ''){
						data_vals[index] = el;
					}
				});
				$.ajax({
					url: 'update',
					type: 'POST',
					data: data_vals,
				})
				.done(function() {
					// alert("בוצע");
				})
				
				event.preventDefault();
			},
		}
	})
	// CKEDITOR.replace( 'editor1' );
}
