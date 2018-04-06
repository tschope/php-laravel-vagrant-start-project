// ViewItem.vue

<template>
    <div class="panel panel-default">
        <div class="container">
            <h3>Your Trip Details</h3>
            <div class="row">
                <div class="col-md-10"></div>
                <!-- <div class="col-md-2"><router-link :to="{ name: 'DisplayTrip' }" class="btn btn-success">Return to Trips</router-link></div> -->
            </div>

            <ul id="trips">
                <li v-for="trip in trips">
                    {{ trip.message }}
                </li>
            </ul>

            <div class="row">

                <div class="col-md-2"><router-link :to="{ name: 'DisplayTrip' }" class="btn btn-success">Choose another Trip!</router-link></div>
            </div>
            <br />
        </div>
    </div>
</template>

<script>

    export default{
        data(){
            return{
                trips:{}
            }
        },

        created: function(){
            this.getTrip();
        },

        methods: {
            getTrip()
            {
                let uri = `/trips/${this.$route.params.id}`;
                this.axios.get(uri).then((response) => {
                    this.trips = response.data;
                });
            }
        }
    }
</script>