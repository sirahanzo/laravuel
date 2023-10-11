<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Site Info Component</div>

                    <div class="card-body">
                        I'm an Site Info component.
                        <p>{{ siteInfo }}</p>

                        <ul>
                        <li v-for="(value,name,index) in siteInfo" >
                          {{ index }} . {{ name }} = {{ value }}
                        </li>
                        </ul>


                        <form id="form_siteInfo" @submit.prevent="saveSiteInfo">

                            <div class="form-group mb-3">
                                <label class="form-label" for="site_id">Site Id</label>
                                <input type="text" class="form-control" name="site_id" id="site_id" v-model="siteInfo.site_id" placeholder="Site Id">
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label" for="site_name">Site Name</label>
                                <input type="text" class="form-control" name="site_id" id="site_name" v-model="siteInfo.site_name" placeholder="Site Name">
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label" for="site_address">Site Address</label>
                                <input type="text" class="form-control" name="site_address" id="site_address" v-model="siteInfo.site_address" placeholder="Site Address">
                            </div>

                            <div class="form-group mb-3">

                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>

                        </form>


                    </div>


                </div>
            </div>
        </div>
    </div>
</template>

<script>
import {getElement} from "bootstrap/js/src/util";
import data from "bootstrap/js/src/dom/data";

export default {
    mounted() {
        console.log('Site Info Component mounted.')

    },
    data() {
        return {
            siteInfo: {
                site_id: "Site Id",
                site_name: "Site Name",
                site_address: "Site Address",
                part_number: "Part Number",
                serial_number: "Serial Number",
            }

        }
    },
    methods: {

        saveSiteInfo() {
            let form_data = this.siteInfo;
            console.log('save site info data: ', form_data);
            axios.post('save-site-info',form_data).then(res => {
                console.log('response save :', res);

            }).catch(err => {
                // alert(err.hasOwnProperty())
                console.log('show me error :',err.response.data.errors);
            })


        }


    }
}
</script>
