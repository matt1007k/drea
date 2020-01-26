<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Example Component</div>

          <div class="card-body">{{ text.id }}</div>
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
  },
  methods: {
    name() {
      this.list.name = "sdfdsf";
    }
  }
};
</script>
