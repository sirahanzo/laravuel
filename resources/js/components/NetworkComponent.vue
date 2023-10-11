<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Network Component</div>

                    <div class="card-body">
                        <form @submit.prevent="saveNetwork">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Ipaddress</label>
                                <input type="text" class="form-control" id="ipaddress" aria-describedby="ipaddresslHelp" v-model="formNetwork.ipaddress">
                                <!--                <div id="ipaddresslHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Netmask</label>
                                <input type="text" class="form-control" id="netmask" aria-describedby="emailHelp" v-model="formNetwork.netmask">
                                <!--                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Gateway</label>
                                <input type="text" class="form-control" id="gateway" aria-describedby="emailHelp" v-model="formNetwork.gateway">
                                <!--                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
<!--                            <button type="button" class="btn btn-primary" @click="showAlert">Test Sweet</button>-->
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
</template>


<script>
// import useTsmInfo from "../utilities/store";
// import form from "../utilities/form";


export default {
    name: "NetworkComponent",
    components: {
        // NetworkForm
    },
    data() {
        return {
            formNetwork: new Form({
                ipaddress: '',
                netmask: '',
                gateway: ''
            }),

        }
    },
    mounted() {
        console.log('Network Component mounted.')
    },

    created() {
        axios.get('/device-info')
            .then(response=> {

            })

    },

    methods: {
        saveNetwork() {
            console.log('set ajax request to save network');
            // this.form.post('/save-network').then(status => alert('save network done'));
            // axios.post('/save-network',this.form).then(status => alert(status));
            this.formNetwork.post('/save-network').then(status => alert(status));

            // this.network.post('/save-network')

        },

        // showAlert() {
        //     this.$swal({
        //         icon: 'error',
        //         title: 'Oops...',
        //         text: 'Something went wrong!',
        //         footer: '<a href="">Why do I have this issue?</a>'
        //     });
        // },
        //
        // showErrorAlert(msg, errors) {
        //     this.$swal({
        //         icon: 'error',
        //         title: 'Oops...',
        //         text: 'Something went wrong!',
        //         footer: '<a href="">Why do I have this issue?</a>'
        //     });
        // },

    },


}
</script>
