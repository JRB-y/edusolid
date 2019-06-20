<template>
    <div>
        <li class="sidebar-item">
            <label class="switch">
                <input
                        type="checkbox"
                        v-model="qr"
                        true-value="1"
                        false-value="0"
                        @change="QrChanged"
                >
                <span class="slider round"></span>
            </label>
            <div>
                Question Réponse
            </div>
        </li>
        <li class="sidebar-item">
            <label class="switch">
                <input
                        type="checkbox"
                        v-model="sl"
                        true-value="1"
                        false-value="0"
                        @change="SlChanged"
                >
                <span class="slider round"></span>
            </label>
            <div>
                Session Live
            </div>
        </li>
    </div>
</template>

<script>
    export default {
        name: "TutorGoOnline",
        data(){
            return {
                qr: null,
                sl: null
            }
        },
        mounted(){
            this.getQrValue();
            this.getSlValue();
        },
        methods: {
            getQrValue(){
                axios.get('tutor/getAvailabilityQr').then((res) => {
                    this.qr = res.data;
                });
            },
            getSlValue(){
                axios.get('tutor/getAvailabilitySl').then((res) => {
                    this.sl = res.data;
                });
            },
            QrChanged(){
                axios.post('tutor/qrGoOnline');
            },
            SlChanged(){
                axios.post('tutor/slGoOnline');
            }
        }
    }
</script>

<style scoped>

</style>