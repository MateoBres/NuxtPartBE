<template>
  <TransitionRoot as="template" :show="open">
    <Dialog as="div" class="fixed inset-0 overflow-hidden" @close="closePanel()">
      <div class="absolute inset-0 overflow-hidden">
        <TransitionChild as="template" enter="ease-in-out duration-500" enter-from="opacity-0" enter-to="opacity-100" leave="ease-in-out duration-500" leave-from="opacity-100" leave-to="opacity-0">
          <DialogOverlay class="absolute inset-0 bg-gray-500 bg-opacity-75 transition-opacity mt-36" />
        </TransitionChild>
        <div class="absolute inset-y-0 right-0 pl-10 max-w-full flex mt-36">
          <TransitionChild as="template" enter="transform transition ease-in-out duration-500 sm:duration-700" enter-from="translate-x-full" enter-to="translate-x-0" leave="transform transition ease-in-out duration-500 sm:duration-700" leave-from="translate-x-0" leave-to="translate-x-full">
            <div class="relative w-screen max-w-7xl">
              <TransitionChild as="template" enter="ease-in-out duration-500" enter-from="opacity-0" enter-to="opacity-100" leave="ease-in-out duration-500" leave-from="opacity-100" leave-to="opacity-0">
                <div class="absolute top-0 left-0 -ml-8 pt-4 pr-2 flex sm:-ml-10 sm:pr-4">

                    <button type="button" class="rounded-md text-gray-300 hover:text-white focus:outline-none focus:ring-2 focus:ring-white" @click="closePanel()">
                        <span class="sr-only">Close panel</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                        <!-- <XIcon size="1.5x" class="h-6 w-6" aria-hidden="true" /> -->
                    </button>
                </div>
              </TransitionChild>
              <div class="h-full flex flex-col py-6 bg-white shadow-xl overflow-y-scroll">
                <div class="px-4 sm:px-6">
                  <DialogTitle class="text-lg font-medium text-gray-900">
                    <slot name="title"></slot>
                  </DialogTitle>
                </div>
                <div class="mt-6 relative flex-1 px-4 sm:px-6">
                  <!-- Replace with your content -->
                  <!-- <div class="absolute inset-0 px-4 sm:px-6">
                    <div class="h-full border-2 border-dashed border-gray-200" aria-hidden="true" />
                  </div> -->
                  <slot name="content"></slot>
                  <!-- /End replace -->
                </div>
              </div>
            </div>
          </TransitionChild>
        </div>
      </div>
    </Dialog>
  </TransitionRoot>
</template>

<script>
import { ref } from 'vue'
import { Dialog, DialogOverlay, DialogTitle, TransitionChild, TransitionRoot } from '@headlessui/vue'
// import { XIcon } from '@vue-hero-icons/outline'

export default {
  components: {
    Dialog,
    DialogOverlay,
    DialogTitle,
    TransitionChild,
    TransitionRoot,
    // XIcon,
  },
  props: ['panelStatus'],
  data(){
      return {
          open : false
      }
  },
  watch: {
    panelStatus: function(newVal, oldVal) { // watch it
      console.log('Prop changed: ', newVal, ' | was: ', oldVal)
      this.open = newVal
    }
  },
  methods:{
      closePanel(){
          console.log('click on close')
          this.open = false;
          this.$emit('statusPanel', false)
      }
  }

//   setup() {
//     const open = ref(true)

//     return {
//       open,
//     }
//   },
}
</script>
