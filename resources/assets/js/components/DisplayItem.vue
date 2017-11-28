<template>
    <div class="">
        <h1>This is Items</h1>

        <div class="row">
            <div class="col-md-10">
                <div class="col-md-2">
                    <router-link :to="{ name: 'CreateItem' }" class="btn btn-primary">Create Item</router-link>
//                    <router-link :to="{ name: 'Login' }" class="btn btn-primary">Login</router-link>
                </div>
            </div>
            <br>

            <table class="table table-hover">
                <thead>
                <tr>
                    <td>#</td>
                    <td>Name</td>
                    <td>Price</td>
                    <td></td>
                </tr>
                </thead>
                <tbody>
                <tr v-for="(value, key) in items">
                    <td>{{ key + 1 }}</td>
                    <td>{{ value.name }}</td>
                    <td>{{ value.price }}</td>
                    <td>
                        <router-link :to="{ name: 'EditItem', params: { id: value.id } }"
                                     class="btn-primary btn">
                            Edit
                        </router-link>
                    </td>
                    <td>
                        <button class="btn btn-danger" v-on:click="deleteItem(value.id)">
                            Delete
                        </button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>

    export default {
        data() {
            return {
                items: []
            }
        },

        created() {
            let vm = this;
            vm.fetchItems();
        },

        methods: {
            fetchItems() {
                let vm = this;
                let uri = 'http://127.0.0.1:8000/api/items';
                vm.axios.get(uri).then((response) => {
                    vm.items = response.data;
                });
            },

            deleteItem(id)
            {
                let vm = this;
                let uri = `http://127.0.0.1:8000/api/items/${id}`;
                vm.items.splice(id, 1);
                vm.axios.delete(uri).then((response) => {
                    window.location.reload();
                });
            }
        }
    }

</script>
