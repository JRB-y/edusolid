<template>
    <div>
        <!-- step level -->
        <div class="row" v-if="step === 1">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h2>Niveau de scolarité</h2>
                </div>
                <div class="form-group">
                    <!-- <label for="level">Niveau de scolarité</label> -->
                    <select name="level_id" v-model="level" class="form-control" @change="selectLevel()">
                        <option disabled value="0">Niveau de scolarité</option>
                        <option value="1">Collège</option>
                        <option value="2">Lycée</option>
                        <option value="3">Université</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- step 2  annee (-->
        <div class="row" v-if="step == 2">

            <!-- select année college -->
            <div class="col-md-12" v-if="level == 1">
                <div class="section-title text-center">
                    <h2>Année Collège</h2>
                </div>
                <div class="form-group">
                    <!-- <label for="level"></label> -->
                    <select name="level_id" v-model="annee" class="form-control" @change="selectLevel()">
                        <option disabled value="0">Niveau</option>
                        <option value="7">7 éme</option>
                        <option value="8">8 éme</option>
                        <option value="9">9 éme</option>
                    </select>
                </div>
            </div>

            <!-- select année lycée -->
            <div class="col-md-12" v-if="level == 2">
                <div class="section-title text-center">
                    <h2>Niveau Lycée</h2>
                </div>
                <div class="form-group">
                    <select name="level_id" v-model="annee" class="form-control" @change="selectLevel()">
                        <option disabled value="0">Niveau</option>
                        <option value="1">1 ére</option>
                        <option value="2">2 éme</option>
                        <option value="3">3 éme</option>
                        <option value="4">4 éme</option>
                    </select>
                </div>
            </div>

            <!-- select type université -->
            <div class="col-md-12" v-if="level == 3">
                <div class="form-group">
                    <div class="section-title text-center">
                        <h2>Type</h2>
                    </div>
                    <select name="level_id" v-model="type" class="form-control" @change="selectLevel()">
                        <option disabled value="0">Type</option>
                        <option value="1">Ingénierie</option>
                        <option value="2">Licence Appliquée</option>
                        <option value="3">Licence Fondamental</option>
                        <option value="4">Master de recherche</option>
                        <option value="5">Master Professionel</option>
                        <option value="6">Préparatoire</option>
                    </select>
                </div>
            </div>

        </div>

        <!-- step 3 -->
        <div class="row" v-if="step === 3">
            <!-- 2eme , 3eme ou 4eme -->
            <div class="col-md-12" v-if="(annee == 2 || annee == 3 || annee == 4) && type == 0 ">
                <div class="form-group">
                     <div class="section-title text-center">
                        <h2>Section</h2>
                    </div>
                    <select name="level_id" v-model="section" class="form-control" @change="selectLevel()">
                        <option disabled value="0">Séction</option>
                        <option value="1">Science</option>
                        <option value="2">Math</option>
                        <option value="3">Informatique</option>
                        <option value="4">Lettre</option>
                        <option value="5">Technique</option>
                    </select>
                </div>
            </div>

            <!-- Universitée année -->
            <div class="col-md-12" v-if="type != 0">
                <div class="form-group">
                    <div class="section-title text-center">
                        <h2>Année d'université</h2>
                    </div>
                    <select name="level_id" v-model="annee" class="form-control" @change="selectLevel()">
                        <option disabled value="0">Séction</option>
                        <option value="1">1 ére</option>
                        <option value="2">2 éme</option>
                        <option value="3" v-if="type == 1 || type == 2 || type == 3">3 éme</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- step 4 -->
        <div class="row" v-if="step === 4">
            <!-- section ingénieur -->
            <div class="col-md-12" v-if="type == 1">
                <div class="form-group">
                     <div class="section-title text-center">
                        <h2>Ingénieur</h2>
                    </div>
                    <select name="level_id" v-model="section" class="form-control" @change="selectLevel()">
                        <option disabled value="0">Séction</option>
                        <option value="3">Informatique</option>
                    </select>
                </div>
            </div>
            <!-- Licence appliquée -->
            <div class="col-md-12" v-if="type == 2">
                <div class="form-group">
                    <div class="section-title text-center">
                        <h2>Licence Appliquée</h2>
                    </div>
                    <select name="level_id" v-model="section" class="form-control" @change="selectLevel()">
                        <option disabled value="0">Séction</option>
                        <option value="6">Droit des Ressources Humaines</option>
                        <option value="7">Comptabilité</option>
                        <option value="8">Droit de l'Entreprise et des affaires</option>
                        <option value="9">Contentieux administratif et fiscal</option>
                        <option value="10">Droit privé</option>
                        <option value="11">Droit Public</option>
                        <option value="12">Anglais</option>
                        <option value="13">Francais</option>
                        <option value="14">Géographie</option>
                        <option value="15">Métiers du livre</option>
                        <option value="16">Métiers de patrimoine</option>
                        <option value="3">Informatique</option>
                        <option value="17">Réseaux informatiques</option>
                        <option value="18">Sciences et Technologies de l'Information et de la Communication (STIC)</option>
                        <option value="19">Energétique</option>
                        <option value="20">Electronique, Electrotechnique et Automatique (EEA)</option>
                        <option value="21">Physique</option>
                    </select>
                </div>
            </div>

            <!-- Licence Fondamental -->
            <div class="col-md-12" v-if="type == 3">
                <div class="form-group">
                    <div class="section-title text-center">
                        <h2>Licence Fondamental</h2>
                    </div>
                    <select name="level_id" v-model="section" class="form-control" @change="selectLevel()">
                        <option disabled value="0">Séction</option>
                        <!-- master de recherche -->
                        <option value="22">Sciences Politiques</option>
                        <option value="8">Droit de l'Entreprise et des affaires</option>
                         <option value="23">Economie</option>
                        <option value="24">Gestion</option>
                        <option value="10">Droit privé</option>
                        <option value="11">Droit Public</option>
                    </select>
                </div>
            </div>

            <!-- master de recherhce -->
            <div class="col-md-12" v-if="type == 4">
                <div class="form-group">
                    <div class="section-title text-center">
                        <h2>Master de recherche</h2>
                    </div>
                    <select name="level_id" v-model="section" class="form-control" @change="selectLevel()">
                        <option disabled value="0">Séction</option>
                         <!-- master de recherche -->
                         <option value="10">Droit privé</option>
                        <option value="11">Droit Public</option>
                        <option value="25">Histoire contemporaine</option>
                        <option value="26">Histoire moderne</option>
                        <option value="27">Histoire ancienne</option>
                    </select>
                </div>
            </div>

            <!-- master professionnel -->
            <div class="col-md-12" v-if="type == 5">
                <div class="form-group">
                    <div class="section-title text-center">
                        <h2>Master Professionnel</h2>
                    </div>
                    <select name="level_id" v-model="section" class="form-control" @change="selectLevel()">
                        <option disabled value="0">Séction</option>
                        <option value="8">Droit de l'Entreprise et des affaires</option>
                        <option value="28">Droit des Collectivités Locales</option>
                    </select>
                </div>
            </div>

            <!-- Préparatoire -->
            <div class="col-md-12" v-if="type == 6">
                <div class="form-group">
                    <div class="section-title text-center">
                        <h2>Préparatoire</h2>
                    </div>
                    <select name="level_id" v-model="section" class="form-control" @change="selectLevel()">
                        <option disabled value="0">Séction</option>
                        <option value="29">Math - Physique (MP)</option>
                        <option value="30">Physique - Chimie (MC)</option>
                    </select>
                </div>
            </div>

          
        </div>

        <!-- submit -->
        <div class="row">
            <div class="col-md-12">
                <button type="button" class="btn-common bg-main-green pull-right" 
                    v-if="(step == 3 && level == 1 && annee >= 7) || (level == 2 && annee ==1) || (step == 4 && section != 0 && level <3) || step >= 5"
                    @click="submit()">Envoyer</button>
                <button type="button" :disabled="step == 1" class="btn-common btn-secondary pull-right"
                    @click="stepBack()">Revenir</button>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name: 'StudentCompleteProfile',
    data: function() {
        return {
            level: 0,
            annee: 0,
            type: 0,
            section: 0,
            step: 1
        }
    },
    methods: {
        selectLevel(){
            console.log(this.level);
            this.step ++;
        },
        stepBack(){
            if(this.step > 1){
                this.step--;
                if(this.step == 1){
                    this.level = 0;
                    this.section = 0;
                    this.type = 0;
                    this.annee = 0;
                }
            }
        },
        submit(){
            axios.post('/profile/student/level-complete', {
                level: this.level,
                annee: this.annee,
                type: this.type,
                section: this.section,
                step: this.step
            })
            .then(function () {
                window.location.href = "/profile"
            })
            .catch(function (error) {
                console.log(error);
            });
        }
    }
}
</script>