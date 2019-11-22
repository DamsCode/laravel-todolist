<template>
  <div>
    <h1>Edit Post</h1>
    <form @submit.prevent="updatePost">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>List Title:</label>
            <input type="text" class="form-control" v-model="list.title" />
          </div>
        </div>
      </div>
      <div class="form-group">
        <button class="btn btn-primary">Update</button>
      </div>
    </form>
  </div>
</template>

<script>
export default {
  data() {
    return {
      list: {}
    };
  },
  created() {
    axios.get(`/lists/${this.$route.params.id}`).then(response => {
      this.list = response.data;
    });
  },
  methods: {
    updatePost() {
      axios.put(`/lists/${this.$route.params.id}`, this.list).then(response => {
        this.$router.push({ name: "lists" });
      });
    }
  }
};
</script>
