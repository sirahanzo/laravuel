import {defineStore} from "pinia";
import axios from "axios";


let useTsmInfo = defineStore("tsmInfo", {
    state: () => ({
        data: null,
    }),
    actions: {
        async fetchData() {
            const response = await axios.get('/device-info');
            this.data = response.data.network;
            console.log('responsedata :',response.data.network);
        },
    },
});

export default useTsmInfo;
