window.onload = function () {

	var adminFaq = new Vue({
		el: '#faq-admin',
		data: {
			values: {},
			q_num: 1
		},
		mounted(){
			this.getVals();
		},
		methods: {
			send: function(event){
				var data_vals = this.values;
				console.log(data_vals);
				$.ajax({
					url: 'updateFaq',
					type: 'POST',
					data: data_vals,
				})
				.done(function() {
					// alert("בוצע");
				})
				
				event ? event.preventDefault() : null;
			},
			getVals: function(event){
				const params = new URLSearchParams();
				params.append('type', 'faq');
				axios.post('showJson', params).then(response => {this.values = response.data});
			},
			createNewQuestion: function(){
				let currentJson = JSON.parse(JSON.stringify(this.values));
				let past_quantity = Object.keys(currentJson).length;
				let new_quantity = past_quantity + 1;
				currentJson['question'+ new_quantity] = {id: new_quantity, q: '',a: ''};
				this.values = currentJson
				this.send();
			},
			deleteQuestion: function(id){
				Vue.delete(this.values, id);
				let currentJson = JSON.parse(JSON.stringify(this.values));
				adminFaq.$forceUpdate();
				console.log("AAA", this.values);
				this.send();
			}
		}
	});
}