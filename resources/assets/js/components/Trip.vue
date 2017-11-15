// Trip.vue

<template>
    <div class="panel panel-default">
        <div class="container">
            <div class="row">
                <br>
                <div class="col-md-10"></div>
                <!-- <div class="col-md-2"><router-link :to="{ name: 'CreateTrip' }" class="btn btn-primary">Add Trip</router-link></div> -->
            </div>

            <div class="row">
                <div class="col-md-8">
                    <form v-on:change="formOnChange">
                        <label>Chose your Trip! Start from:</label>
                        <select id="select2" v-model= "list">
                            <option value="">Please select one</option>
                            <option v-for="trip in trips" v-bind:value="trip.trip_group"> {{ trip.from }} </option>
                        </select>
                    </form>
                </div>
            </div>
            <div class="row">
                <br>
            </div>
        </div>
    </div>
</template>

<script>

    export default {
        data(){
            return{
                trips: []
            }
        },

        created: function()
        {
            this.fetchTrips();
        },

        methods: {
            fetchTrips()
            {
                let uri = '/trips';
                this.axios.get(uri).then((response) => {
                    this.trips = response.data;
                });
            },
            formOnChange(event) {
                // Do something with the `event` and submit the form conditionally
                const path = event.target.value;
                if (path) {
                    //do something
                    this.$router.push({ path: '/trips/view/' +`${path}` });
                }
            }
        }
    }
</script>