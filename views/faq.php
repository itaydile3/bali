<body class="faq">
  <h1>F.A.Q</h1>
  <div id="faq" class="faq-container">
    <div class="faq-row" :id="value.id" :class="{open: q_indicator == value.id && !answerShown}" v-for="value in values">
      <div class="views-field views-field-title" >
        <span class="field-content">{{value.q}}</span>
      </div>  
      <div class="views-field views-field-body">
        <div class="field-content">
          <p v-html="value.a"></p>
        </div>
      </div>  
      <div class="views-field views-field-nid">
        <div class="plus_icon" :class="{open: q_indicator == value.id && !answerShown}" v-on:click="toggleAnimation($event)"></div>  
      </div>  
    </div>
  </div>
</body>
</html>