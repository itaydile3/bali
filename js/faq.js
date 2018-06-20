window.onload = function () {

	var adminFaq = new Vue({
		el: '#faq',
		data: {
			values: {},
			mouseEventType: 'ddd',
			answerShown: true,
			q_indicator: null,
		},
		mounted(){
			this.getVals();
			console.log(this);
		},
		methods: {
			getVals: function(event){
				const params = new URLSearchParams();
				params.append('type', 'faq');
				axios.post('showJson', params).then(response => {this.values = response.data});
			},
			toggleAnimation: function(event){
				var element = event.target;
				var set_hidden = this.answerShown ? false : true;
				this.answerShown = set_hidden;
				this.q_indicator = $(element).closest('.faq-row').attr('id');
				if(this.answerShown){
					$(element).closest('.faq-row').find('.views-field-body').slideUp();
					$(element).closest('.faq-row').removeClass('open');
					$(element).removeClass('open');
				} else {
					$(element).closest('.faq-row').find('.views-field-body').slideDown();
				}
			},

		}
	});
}