<template>
    <app-layout title="Media">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Media
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <section class="my-4">
                    <secondary-button @click="openPanel('create')" >Aggiungi un nuovo media</secondary-button>
                </section>

                <!-- SUCCESS MESSAGE SECTION -->

                <div v-if="successMessage" class="alert flex flex-row items-center bg-green-200 p-5 rounded border-b-2 border-green-300">
                    <div class="alert-icon flex items-center bg-green-100 border-2 border-green-500 justify-center h-10 w-10 flex-shrink-0 rounded-full">
                        <span class="text-green-500">
                            <svg fill="currentColor"
                                viewBox="0 0 20 20"
                                class="h-6 w-6">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </span>
                    </div>
                    <div class="alert-content ml-4">
                        <div class="alert-title font-semibold text-lg text-green-800">
                            Success
                        </div>
                        <div class="alert-description text-sm text-green-600">
                            {{successMessage}}
                        </div>
                    </div>
                </div>

                <!-- MESSAGGIO DI ERRORE -->
                <slide-over :panelStatus="panelStatus" @statusPanel="closePanel()">
                    <template v-slot:title>{{ titlePanel }}</template>
                    <template v-slot:content>
                        <div v-if="Object.keys(errors).length > 0" class="alert flex flex-row items-center bg-red-200 p-5 rounded border-b-2 border-red-300">
                            <div class="alert-icon flex items-center bg-red-100 border-2 border-red-500 justify-center h-10 w-10 flex-shrink-0 rounded-full">
                                <span class="text-red-500">
                                    <svg fill="currentColor"
                                        viewBox="0 0 20 20"
                                        class="h-6 w-6">
                                        <path fill-rule="evenodd"
                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </span>
                            </div>
                            <div class="alert-content ml-4">
                                <div class="alert-title font-semibold text-lg text-red-800">
                                    Error
                                </div>
                                <div class="alert-description text-sm text-red-600">
                                    {{errors[Object.keys(errors)[0]]}}
                                </div>
                            </div>
                        </div>
                            <!-- Slide Over Per Creazione -->
                            <div class="p-4 border rounded-md border-gray-200" v-if="!isModify">
                                <div class="grid lg:grid-cols-3 gap-6">
                                    <div>
                                        <miac-label>nome</miac-label>
                                        <input class="border-gray-300 focus:border-green-miac focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" type="text" id="name" name="name" v-model="form.name"><br><br>
                                        <miac-label>descrizione breve (alt) - IT</miac-label>
                                        <input class="border-gray-300 focus:border-green-miac focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" type="text" id="name" name="name" v-model="form.alt.it"><br><br>
                                    </div>
                                    <div>
                                        <miac-label>nome</miac-label>
                                        <input class="border-gray-300 rounded-md shadow-sm" type="text" id="name" name="name" v-model="form.name" readonly><br><br>
                                        <miac-label>descrizione breve (alt) - EN</miac-label>
                                        <input class="border-gray-300 focus:border-green-miac focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" type="text" id="name" name="name" v-model="form.alt.en"><br><br>
                                    </div>
                                    <div>
                                        <miac-label>nome</miac-label>
                                        <input class="border-gray-300 rounded-md shadow-sm" type="text" id="name" name="name" v-model="form.name" readonly><br><br>
                                        <miac-label>descrizione breve (alt) - FR</miac-label>
                                        <input class="border-gray-300 focus:border-green-miac focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" type="text" id="name" name="name" v-model="form.alt.fr"><br><br>
                                    </div>
                                </div>
                                <div class="bg-white space-y-6 ">
                                    <div class="grid grid-cols-3 gap-6">
                                        <div class="col-span-6 sm:col-span-4">
                                            <miac-label>upload file</miac-label>
                                            <div class="custom-file mt-1 mb-4">
                                                <input type="file"
                                                    name="media"
                                                    @input="form.file = $event.target.files[0]"
                                                    class="custom-file-input"
                                                    id="media">
                                            </div>
                                        </div>
                                    </div>
                                </div><br>
                                <miac-button @click="addItem()">Aggiungi</miac-button>
                            </div>

                           <!-- Slide Over Per Modifica -->
                            <div class="p-4 border rounded-md border-gray-200" v-if="isModify">
                                <div class="grid lg:grid-cols-3 gap-6">
                                    <div>
                                        <miac-label>nome</miac-label>
                                        <input class="border-gray-300 focus:border-green-miac focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" type="text" id="name" name="name" v-model="form.name"><br><br>
                                        <miac-label>descrizione breve (alt) - IT</miac-label>
                                        <input class="border-gray-300 focus:border-green-miac focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" type="text" id="name" name="name" v-model="form.alt.it"><br><br>
                                    </div>
                                    <div>
                                        <miac-label>nome</miac-label>
                                        <input class="border-gray-300 rounded-md shadow-sm" type="text" id="name" name="name" v-model="form.name" readonly><br><br>
                                        <miac-label>descrizione breve (alt) - EN</miac-label>
                                        <input class="border-gray-300 focus:border-green-miac focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" type="text" id="name" name="name" v-model="form.alt.en"><br><br>
                                    </div>
                                    <div>
                                        <miac-label>nome</miac-label>
                                        <input class="border-gray-300 rounded-md shadow-sm" type="text" id="name" name="name" v-model="form.name" readonly><br><br>
                                        <miac-label>descrizione breve (alt) - FR</miac-label>
                                        <input class="border-gray-300 focus:border-green-miac focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" type="text" id="name" name="name" v-model="form.alt.fr"><br><br>
                                    </div>
                                </div>
                                <div class="flex flex-row">
                                    <div class="bg-white space-y-6 ">
                                        <div class="grid grid-cols-3 gap-6">
                                            <div class="col-span-6 sm:col-span-4">
                                                <miac-label>upload file</miac-label>
                                                <div class="custom-file mt-1 mb-4">
                                                    <input type="file"
                                                        name="media"
                                                        @input="form.file = $event.target.files[0]"
                                                        class="custom-file-input"
                                                        id="media">
                                                </div>
                                            </div>
                                        </div>
                                    </div><br>
                                    <div id="immagine-principale" class="border-rounded" :style="{backgroundImage: 'url(/'+form.url+')'}" style="width:18rem; height:12rem; background-size: cover; border-radius: 8px;">
                                    </div>
                                </div>
                                <miac-button @click="modifyItem()">Modifica</miac-button>
                            </div>
                        <!-- </form> -->
                    </template>
                </slide-over>

                <!-- Tabella Lista Items -->
                <div class="bg-white overflow-hidden shadow-xl p-6 sm:rounded-lg" v-if="items.length > 0">
                    <table class="table-auto w-full border border-green-800 p-4 sm:rounded-lg">
                        <thead class="bg-green-miac text-white">
                            <tr class="">
                                <th>nome</th>
                                <th>url</th>
                                <th>descrizione</th>
                                <th>EN</th>
                                <th>FR</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody v-if="items.length > 0">
                            <tr  class="text-center py-3" v-for="item in items" :key="item.id">
                                <td class="p-2">
                                    {{ item.name }}
                                </td>
                                <td class="p-2">
                                    {{ item.url }}
                                </td>
                                <td class="p-2">
                                    {{ item.alt['it'] }}
                                </td>
                                <td class="p-2">
                                     <div v-if="item.alt['en']">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 64 64"><path d="M63.985 57.087a6.896 6.896 0 0 1-6.896 6.896H6.896A6.897 6.897 0 0 1 0 57.087V6.896A6.898 6.898 0 0 1 6.896 0h50.192a6.897 6.897 0 0 1 6.896 6.896v50.191z" fill="#37b34a"/><path d="M46.14 9.387c-4.714 4.716-9.43 9.432-14.14 14.15c-4.716-4.714-9.432-9.431-14.15-14.15c-5.454-5.455-13.912 3-8.457 8.459c4.714 4.712 9.432 9.43 14.14 14.14c-4.712 4.714-9.431 9.432-14.14 14.14c-5.453 5.455 3 13.91 8.457 8.46c4.714-4.717 9.43-9.433 14.15-14.15c4.716 4.716 9.428 9.43 14.14 14.15c5.455 5.452 13.91-3.01 8.46-8.458c-4.717-4.716-9.433-9.43-14.15-14.15l14.15-14.15c5.452-5.453-3-13.912-8.46-8.458" fill="#fff"/></svg>
                                     </div>
                                     <div v-else>
                                         <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 64 64"><path fill="#ec1c24" d="M50.592 2.291L32 20.884C25.803 14.689 19.604 8.488 13.406 2.291c-7.17-7.17-18.284 3.948-11.12 11.12c6.199 6.193 12.4 12.395 18.592 18.592A32589.37 32589.37 0 0 1 2.286 50.595c-7.164 7.168 3.951 18.283 11.12 11.12c6.197-6.199 12.396-12.399 18.593-18.594l18.592 18.594c7.17 7.168 18.287-3.951 11.12-11.12c-6.199-6.199-12.396-12.396-18.597-18.594c6.2-6.199 12.397-12.398 18.597-18.596c7.168-7.166-3.949-18.284-11.12-11.11"/></svg>
                                     </div>
                                </td>
                                <td class="p-2">
                                     <div v-if="item.alt['fr']">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 64 64"><path d="M63.985 57.087a6.896 6.896 0 0 1-6.896 6.896H6.896A6.897 6.897 0 0 1 0 57.087V6.896A6.898 6.898 0 0 1 6.896 0h50.192a6.897 6.897 0 0 1 6.896 6.896v50.191z" fill="#37b34a"/><path d="M46.14 9.387c-4.714 4.716-9.43 9.432-14.14 14.15c-4.716-4.714-9.432-9.431-14.15-14.15c-5.454-5.455-13.912 3-8.457 8.459c4.714 4.712 9.432 9.43 14.14 14.14c-4.712 4.714-9.431 9.432-14.14 14.14c-5.453 5.455 3 13.91 8.457 8.46c4.714-4.717 9.43-9.433 14.15-14.15c4.716 4.716 9.428 9.43 14.14 14.15c5.455 5.452 13.91-3.01 8.46-8.458c-4.717-4.716-9.433-9.43-14.15-14.15l14.15-14.15c5.452-5.453-3-13.912-8.46-8.458" fill="#fff"/></svg>
                                     </div>
                                     <div v-else>
                                         <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 64 64"><path fill="#ec1c24" d="M50.592 2.291L32 20.884C25.803 14.689 19.604 8.488 13.406 2.291c-7.17-7.17-18.284 3.948-11.12 11.12c6.199 6.193 12.4 12.395 18.592 18.592A32589.37 32589.37 0 0 1 2.286 50.595c-7.164 7.168 3.951 18.283 11.12 11.12c6.197-6.199 12.396-12.399 18.593-18.594l18.592 18.594c7.17 7.168 18.287-3.951 11.12-11.12c-6.199-6.199-12.396-12.396-18.597-18.594c6.2-6.199 12.397-12.398 18.597-18.596c7.168-7.166-3.949-18.284-11.12-11.11"/></svg>
                                     </div>
                                </td>
                                <td class="p-2">
                                    <miac-button @click="editItem(item.id)">modifica</miac-button>
                                </td>
                                <td class="p-2">
                                    <danger-button @click="deleteItem(item.id)">cancella</danger-button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import { defineComponent } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import Welcome from "@/Jetstream/Welcome.vue";
import SlideOver from "@/Components/SlideOver.vue";
import SecondaryButton from "@/Jetstream/SecondaryButton.vue";
import Label from "@/Jetstream/Label.vue";
import Button from "@/Jetstream/Button.vue";
import DangerButton from "@/Jetstream/DangerButton.vue";



export default defineComponent({
    props: ['media', 'items', 'successMessage', 'errors'],
    components: {
        AppLayout,
        Welcome,
        SlideOver,
        SecondaryButton,
        DangerButton,
        'miacLabel' : Label,
        'miacButton': Button
    },
    data(){
        return{
            panelStatus : false,
            isModify : false,
            titlePanel : 'Aggiungi un nuovo media',
            form : this.$inertia.form({
                name : null,
                alt : {
                    it: '',
                    en: '',
                    fr:''
                },
                file: null,
                url: null
            }),
        }
    },
    methods: {
        openPanel(status){
            if(status==="modify"){
                this.titlePanel = 'Modifica i dati del media';
                this.isModify = true
            }else{
                this.titlePanel = 'Aggiungi un nuovo media';
                this.isModify = false
            }
            this.panelStatus = true
        },
        closePanel(){
            this.panelStatus = false
            setTimeout(() => { this.$inertia.visit(route('media.index'))}, 1000);
        },
        addItem(){
            this.$inertia.post('/media', this.form, {
                onSuccess: () => {
                this.form.reset()
                this.closePanel()
                },
                onError: (errors) => {
                console.log(errors);
                },
            })
        },
        deleteItem(itemId){
            this.$inertia.delete(`/media/${itemId}`, {
                onError: (errors) => {
                console.log(errors);
                },
            })
        },
        editItem(itemId) {
            this.openPanel('modify')
            let url = `/media/${itemId}/edit`
            this.$inertia.get(url, this.media, {
                preserveState: true,
                onSuccess: () => {
                    console.log('*****media', this.media)
                    this.form.name = this.media.name
                    this.form.alt = this.media.alt
                    this.form.url = this.media.url
                }
            })
        },

        modifyItem(){
            console.log('***form info***', this.form)
            if(this.form.file){
                this.form.url=null;
            }
            console.log('***form info senza url***', this.form)
            this.$inertia.post(`/mediaedit/${this.media.id}`, this.form, {
                onSuccess: () => {
                this.closePanel()
                this.form.reset()
                },
                onError: (errors) => {
                console.log(errors);
                },
            })
        }
    }
});
</script>
