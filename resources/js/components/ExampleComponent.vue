<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Example Component</div>

          <div class="card-body" @click="name()">{{ text.id }}</div>
          <div v-for="(index, item) in items" :key="item.id">{{ item }}</div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      text: "",
      list: {
        name: ""
      }
    };
  },
  mounted() {
    console.log("Component mounted.");
    console.log(`${this.text}`);
  },
  methods: {
    name() {
      this.list.name = "sdfdsf";
    }
  }
};
</script>
