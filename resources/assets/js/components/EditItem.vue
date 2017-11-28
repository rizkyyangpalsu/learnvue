<template>
    <div>
        <h1>Edit Item</h1>
        <div class="row">
            <div class="col-md-10"></div>
                <div class="col-md-2">
                    <router-link :to="{name: 'DisplayItem'}"
                                 class="btn btn-success">Return to Home</router-link>
            </div>
        </div>

        <form v-on:submit.prevent="updateItem">
            <div class="form-group">
                <label>Name:</label>
                <input type="text" class="form-control" v-model="item.name">
            </div>
            <div class="form-group">
                <label>Prive:</label>
                <input type="number" class="form-control" v-model="item.price">
            </div>
            <div class="form-group">
                <button class="btn-primary btn">Update Item</button>
            </div>
        </form>
    </div>
</template>

<script>

    export default {
        data() {
            return {
                item: {}
            }
        },
        created() {
            this.getItem();
        },
        methods: {
            getItem() {
                let vm = this;
                let uri = `http://127.0.0.1:8000/api/items/${vm.$route.params.id}/edit`;
                vm.axios.get(uri).then((response) => {
                    vm.item = response.data;
                });
            },

            updateItem() {
                let vm = this;
                let uri = 'http://127.0.0.1:8000/api/items/'+vm.$route.params.id;
                vm.axios.patch(uri, vm.item).then((response) => {
                    vm.$router.push({ name: 'DisplayItem'});
                });
            },
        }
    }

</script>