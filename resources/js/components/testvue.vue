<template>
    <ul>
        <li v-for="todo in todos">{{todo.title}}  <button v-on:click="greet" name="test" class="btn btn-dark">Greet</button></li>
    </ul>
</template>

<script>
    export default {
        name: "testvue",
        data() {
            return {
                newTodoText: 'test',
                todos: [
                    {
                        id: 1,
                        title: 'Do the dishes',
                    },
                    {
                        id: 2,
                        title: 'Take out the trash',
                    },
                    {
                        id: 3,
                        title: 'Mow the lawn'
                    }
                ],
                nextTodoId: 4
            }
            },
        methods: {
            greet: async function (event) {
                let data;
                 data = await axios.get('/users');
                console.log(data.data);
            }
        }
    }
</script>

<style lang="scss" scoped>

</style>
