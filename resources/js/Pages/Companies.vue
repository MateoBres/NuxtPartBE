
<template>
    <app-layout title="Company">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Aziende
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <section class="my-4">
                    <secondary-button @click="openPanel('create')" >Aggiungi una nuova azienda</secondary-button>
                </section>
                <!-- Slide Over Per Creazione e Modifica -->
                <slide-over :panelStatus="panelStatus" @statusPanel="closePanel()">
                    <template v-slot:title>{{ titlePanel }}</template>
                    <template v-slot:content>
                        <div class="p-4 border rounded-md border-gray-200" v-if="!isModify">
                            <miac-label>nome</miac-label>
                            <input class="border-gray-300 focus:border-green-miac focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" type="text" id="name" name="name" v-model="company.name"><br><br>
                            <miac-button @click="addItem()">Aggiungi</miac-button>
                        </div>
                        <div class="p-4 border rounded-md border-gray-200" v-if="isModify">
                            <miac-label>nome</miac-label>
                            <input class="border-gray-300 focus:border-green-miac focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" type="text" id="name" name="name" v-model="company.name"><br><br>
                            <miac-button @click="modifyItem()">Modifica</miac-button>
                        </div>
                    </template>
                </slide-over>

                <!-- Tabella Lista Items -->
                <div class="bg-white overflow-hidden shadow-xl p-6 sm:rounded-lg" v-show="items.length > 0">
                    <table class="table-auto w-full border border-green-800 p-4 sm:rounded-lg">
                        <thead class="bg-green-miac text-white">
                            <tr class="">
                                <th>nome</th>
                                <th>slug</th>
                                <th>descrizione</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr  class="text-center py-3" v-for="item in items" v-bind:key="item.id">
                                <td class="p-2">
                                    {{ item.name }}
                                </td>
                                <td class="p-2"></td>
                                <td class="p-2"></td>
                                <td class="p-2">
                                    <miac-button @click="openPanel('modify')">modifica</miac-button>
                                </td>
                                <td class="p-2">
                                    <danger-button>cancella</danger-button>
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
    props: ['districts'],
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
            titlePanel : 'Aggiungi una nuova Provicia',
            items: [],
            company : {
                name : null,
            }
        }
    },
    methods: {
        openPanel(status){
            this.provice = null
            if(status==="modify"){
                this.titlePanel = 'Modifica i dati della azienda';
                this.isModify = true
            }else{
                this.titlePanel = 'Aggiungi una nuova azienda';
                this.isModify = false
            }
            this.panelStatus = true
        },
        closePanel(){
            this.panelStatus = false
            console.log(this.panelStatus)
        },
        addItem(){
            console.log('aggiungi')
            let addingCompany = this.company
            this.items.push(addingCompany)
            this.closePanel()
        },
        modifyItem(){
            console.log('modifica')
        }
    }
});
</script>
