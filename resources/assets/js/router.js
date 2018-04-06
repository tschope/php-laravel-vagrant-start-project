import VueRouter    from 'vue-router'

//Define route components

// lazy load components
const Trip = (resolve) => require(['./components/Trip.vue'], resolve)
const CreateTrip = (resolve) => require(['./components/CreateTrip.vue'], resolve)
const EditTrip = (resolve) => require(['./components/EditTrip.vue'], resolve)
const ViewTrip = (resolve) => require(['./components/ViewTrip.vue'], resolve)

export default new VueRouter({
    mode: 'history',
    base: __dirname,
      routes: [
        { name: 'DisplayTrip', path: '/', component: Trip },
        { name: 'CreateTrip', path: '/trips/create', component: CreateTrip },
        { name: 'EditTrip', path: '/trips/edit/:id', component: EditTrip },
        { name: 'ViewTrip', path: '/trips/view/:id', component: ViewTrip }
      ]
});
