<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard Component</div>

                    <div class="card-body">
                        I'm an Dashboard component.

                        {{ site_info }}
                        <table class="table">
                            <thead>
                            <tr>
                                <th>name</th>
                                <th>value</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="info in site_info">
                                <td scope="row">{{ info }}</td>
                                <td></td>
                            </tr>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    mounted() {
        console.log('Dashboard Component mounted.')

    },
    data() {
        let site_info = {
            site_id: '',
            site_name: '',
            site_address: '',
            serial_number: '',
            part_number: '',
            model: '',
            hardware: '',
            software: '',
        }

        let network = {
            ipaddress: '',
            netmask: '',
            gateway: '',
            snmp_trap1:'',
            snmp_trap2:'',
            snmp_version:'',
            trap_repeat:'',
            repeat_time:'',
            repeat_rate:'',
            clouding_server1:'',
            clouding_server2:'',
            state_clouding1:'',
            state_clouding2:'',
            clouding_send_interval:'',

        }

        return {
            site_info,
            network

        }
    }


}
</script>
