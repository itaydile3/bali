<body class="faq-admin">
	<h1>ניהול שאלות ותשובות</h1>
	<div id="faq-admin">
		<!-- {{values.question1.q}} -->
		<form>
			<div v-for="value in values" class="create_q" :id="'question' + q_num">
				<h3>שאלה {{value.id}}</h3>
				<label :for="'question' + value.id">שאלה</label>
				<input type="text" :name="'question' + q_num" v-model="value.q" />
				<hr style="visibility: hidden; clear: both;">
				<label :for="'answer' + q_num">תשובה</label>
				<textarea :id="'answer' + q_num" v-model="value.a"></textarea>
				<button type="button" v-on:click="deleteQuestion('question' + value.id)">מחיקה</button>
			</div>
			<button type="button" v-on:click="send" >send</button>
			<button type="button" v-on:click="createNewQuestion">create new question</button>
		</form>
	</div>
</body>
</html>