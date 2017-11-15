// CreateItem.vue
// TODO: This is not a complete view

<template>
    <div>
        <h1>Create A Trip</h1>
        <form v-on:submit.prevent="addTrip">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Name:</label>
                        <input v-validate="'required'" type="text" class="form-control" v-model="trip.name">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Trip GPS Code:</label>
                        <input v-validate="'required'" type="text" class="form-control col-md-6" v-model="trip.gps_code" />
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="active">Active</label>
                <select v-validate="'required'" class="form-control" id="active" v-model="trip.active">
                    <option value="Y">Active</option>
                    <option value="N">Inactive</option>
                </select>
            </div><br />
            <div class="form-group">
                <button class="btn btn-primary">Add Trip</button>
            </div>
        </form>
    </div>
</template>
<script>
    export default {
        data(){
            return{
                trip:{}
            }
        },
        methods: {
            addTrip(){
                let uri = '/trips';
                this.axios.post(uri, this.trip).then((response) => {
                    this.$router.push({name: 'DisplayTrip'})
                })
            }
        }
    }
</script>