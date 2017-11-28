<template>
    <div>
        <h1>Create Item</h1>
        <form v-on:submit.prevent="addItem">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Name:</label>
                        <input type="text" class="form-control" v-model="item.name">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Price:</label>
                        <input type="number" class="form-control col-md-6" v-model="item.price">
                    </div>
                </div>
            </div>
            <br>
            <div class="form-group">
                <button class="btn btn-primary">
                    Add Item
                </button>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        data() {
            return{
                item: {}
            }
        },

        methods: {
            addItem() {
                let vm = this;
                let uri = 'http://127.0.0.1:8000/api/items';
                vm.axios.post(uri, vm.item).then((response) => {
                    vm.$router.push({name: 'DisplayItem'});
                });
            }
        }
    }
</script>