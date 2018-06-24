<body class="faq-admin">
	<h1>ניהול שאלות ותשובות</h1>
	<div id="faq-admin">
		<!-- {{values.question1.q}} -->
		<form>
			<div v-for="value in values" class="create_q" :id="'question' + value.id">
				<h3>שאלה {{value.id}}</h3>
				<label :for="'question' + value.id">שאלה</label>
				<input type="text" :name="'question' + value.id" v-model="value.q" />
				<hr style="visibility: hidden; clear: both;">
				<label :for="'answer' + value.id">תשובה</label>
				<!-- <textarea :id="'answer' + value.id" v-model="value.a"></textarea> -->
				<ckeditor :id="'answer' + value.id" v-model="value.a"></ckeditor>
				<button type="button" v-on:click="deleteQuestion('question' + value.id)">מחיקה</button>
			</div>
			<button type="button" v-on:click="send" >send</button>
			<button type="button" v-on:click="createNewQuestion">create new question</button>
		</form>
	</div>
</body>
</html>