import VueRouter from "vue-router";

let routes = [

    {
        // path: '/dashboard',
        path: '/',  //use as default
        component: require('./components/DashboardComponent.vue').default,
    },
    {
        path: '/site-info',
        component: require('./components/SiteInfoComponent.vue').default,
    },
    {
        path: '/network',
        component: require('./components/NetworkComponent.vue').default,
    },
    {
        path: '/datetime',
        component: require('./components/DateTimeComponent.vue').default,
    },
    {
        path: '/setting',
        component: require('./components/SettingComponent.vue').default,
    },
    {
        path: '/datalog',
        component: require('./components/DatalogComponent.vue').default,
    },
    {
        path: '/eventlog',
        component: require('./components/EventlogComponent.vue').default,
    },
    {
        path: '/utilities',
        component:require('./components/UtilitiesComponent.vue').default,
    },
    {
        path: '/about',
        component: require('./components/AboutComponent.vue').default,
    },


];

export default new VueRouter({
    // mode:'history', //remove #hastag from URL
    routes,
    linkActiveClass: "active",

});
