<template>
  <div>
    <h1>Lists</h1>
    <div class="row">
      <div class="col-md-10"></div>
      <div class="col-md-2">
        <router-link :to="{ name: 'create' }" class="btn btn-primary">Create List</router-link>
      </div>
    </div>
    <br />

    <table class="table table-hover">
      <thead>
        <tr>
          <th>ID</th>
          <th>List Name</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="list in lists" :key="lists.id">
          <td>{{ list.id }}</td>
          <td>{{ list.title }}</td>
          <td>
            <router-link :to="{name: 'listedit', params: { id: list.id }}" class="btn btn-primary">Edit</router-link>
          </td>
          <td>
            <button class="btn btn-danger" @click.prevent="deletePost(list.id)">Delete</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
export default {
  data() {
    return {
      lists: []
    };
  },
  created() {
    axios.get("/lists").then(response => {
      this.lists = response.data;
    });
  },
  methods: {
    deletePost(id) {
      axios.delete(`/lists/${id}`).then(response => {
        this.lists.splice(this.lists.indexOf(id), 1);
      });
    }
  }
};
</script>
