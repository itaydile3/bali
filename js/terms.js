window.onload = function () {

	var app = new Vue({
		el: '#terms',
		data: {
			terms_content: '',
			height: window.innerHeight,
		},
		mounted() {
				$.ajax({
					url: 'showJson',
					type: 'POST',
					data: {type: 'home'}
				})
			.done(function (response) {
				let json_str = JSON.parse(response);
				this.terms_content = json_str.terms.content;
			})
		},
	});

}