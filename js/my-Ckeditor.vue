<template>
  <div class="app">
    <ckeditor v-model="content" @input="updateField" :height="'300px'" :toolbar="[[ 'Format', 'Bold' ]]"></ckeditor>
  </div>
</template>

<script>
import Ckeditor from 'vue-ckeditor2'

export default {
  data () {
    return {
      content: ''
    }
  },
  props: ['value'],
  components: { Ckeditor },
  methods: {
    updateField: function() {
      this.$emit('input',String(this.content));
    }
  },
  watch: {
    value: function() {
      this.content = this.value;
    }
  }
}
</script>