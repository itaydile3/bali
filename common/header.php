<html lang="en">
<head>
	<meta charset="UTF-8">
	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
	<?php $adminJS =  $_GET['uri'] == 'admin' ? '<script src="/bali/js/admin.js" type="text/javascript"></script>' : ''; echo $adminJS; ?>
	<?php $indexJS =  $_GET['uri'] == 'index.php' ? '<script src="/bali/js/general.js" type="text/javascript"></script>' : ''; echo $indexJS; ?>
	<link rel="stylesheet" type="text/css" href="/bali/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Assistant" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/vue-scrollto"></script>
	<!-- <script src="https://unpkg.com/vue-ckeditor2"></script> -->
	<!-- <script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script> -->
	<title>Bali</title>
</head>