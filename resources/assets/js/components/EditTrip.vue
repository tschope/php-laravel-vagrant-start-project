// EditItem.vue
// TODO: This is not a complete view

<template>
    <div>
        <h1>Update Trip</h1>
        <div class="row">
            <div class="col-md-10"></div>
            <div class="col-md-2"><router-link :to="{ name: 'DisplayTrip' }" class="btn btn-success">Return to Trip</router-link></div>
        </div>

        <form v-on:submit.prevent="updateTrip">
            <div class="form-group">
                <label>Name</label>
                <input v-validate="'required'" type="text" class="form-control" v-model="trip.name">
            </div>

            <div class="form-group">
                <label name="gps_code">GPS Code</label>
                <input v-validate="'required'" type="text" class="form-control" v-model="trip.gps_code">
            </div>
            <div class="form-group">
                <label for="active">Active</label>
                <select v-validate="'required'" class="form-control" id="active" v-model="trip.active">
                    <option value="Y">Active</option>
                    <option value="N">Inactive</option>
                </select>
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</template>

<script>

    export default{
        data(){
            return{
                trip:{}
            }
        },

        created: function(){
            this.getTrip();
        },

        methods: {
            getTrip()
            {
                let uri = `/trips/${this.$route.params.id}/edit`;
                this.axios.get(uri).then((response) => {
                    this.trip = response.data;
                });
            },

            updateTrip()
            {
                let uri = '/trips/'+this.$route.params.id;
                this.axios.patch(uri, this.trip).then((response) => {
                    this.$router.push({name: 'DisplayTrip'});
                });
            }
        }
    }
</script>