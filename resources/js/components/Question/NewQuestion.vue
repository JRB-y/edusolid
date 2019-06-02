<template>
    <div class="col-md-12">
        <div class="col-md-12">
            <!-- Form -->
            <b-form v-if="show">
                <b-form-group
                    id="input-title"
                    label="Votre question:"
                    label-for="title"
                    description="Posez une question claire."
                >
                    <b-form-input
                            id="title"
                            v-model="question.title"
                            type="text"
                            required
                            placeholder="Enter email"
                    ></b-form-input>
                </b-form-group>

                <b-form-group
                    id="input-body"
                    label="Donner plus de détails:"
                    label-for="body"
                >
                    <vue-editor v-model="question.body"></vue-editor>
                </b-form-group>
                <b-button @click="onSubmit" type="button" variant="primary">Envoyer</b-button>
                <b-button type="reset" variant="danger">Reset</b-button>
            </b-form>

            <!-- Header message -->
            <div class="" v-if="questionSended">
                <b-alert
                    show
                    variant="success"
                    dismissible
                    @dismissed="returnToDashboard()"
                >
                    Votre question est envoyée avec success
                </b-alert>
            </div>
        </div>
    </div>
</template>

<script>
    import { VueEditor } from 'vue2-editor'

    export default {
        name: 'NewQuestion',
        components: { VueEditor },
        data() {
            return {
                show: true,
                questionSended: false,
                question: {
                    title: "",
                    body: ""
                }
            }
        },
        methods: {
            onSubmit(){
                axios.post("/question", {
                    title: this.question.title,
                    body: this.question.body

                }).then((response) => {
                    this.show = false;
                    this.questionSended = true;

                }).catch(error => {
                    console.log(error.response)
                });
            },
            onReset(){
                this.question.title = "";
                this.question.body = "";
            },
            returnToDashboard(){
                window.location.href = "/dashboard"
            }
        }
    }
</script>

<style scoped>

</style>