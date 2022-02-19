<template>
    <app-layout title="Dashboard">
        <h1
            class="text-center text-2xl font-bold leading-7 text-gray-300 sm:text-3xl sm:truncate py-4 bg-gradient-to-l from-indigo-500 to-indigo-800"
        >
            Dashboard
        </h1>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <section class="text-gray-600 body-font">
                    <div class="container px-5 py-24 mx-auto">
                        <div class="flex flex-wrap w-full mb-8">
                            <div class="w-full mb-6 lg:mb-0">
                                <h1
                                    class="sm:text-4xl text-5xl font-medium title-font mb-2 text-gray-900"
                                >
                                    Statistic
                                </h1>
                                <div
                                    class="h-1 w-20 bg-indigo-500 rounded"
                                ></div>
                            </div>
                        </div>
                        <div class="flex flex-wrap -m-4 text-center">
                            <div class="p-4 sm:w-1/4 w-1/2">
                                <div
                                    class="bg-indigo-500 rounded-lg p-2 xl:p-6"
                                >
                                    <h2
                                        class="title-font font-medium sm:text-4xl text-3xl text-white"
                                    >
                                        {{ this.$props.data.categories }}
                                    </h2>
                                    <p
                                        class="leading-relaxed text-gray-100 font-bold"
                                    >
                                        Categories
                                    </p>
                                </div>
                            </div>
                            <div class="p-4 sm:w-1/4 w-1/2">
                                <div
                                    class="bg-indigo-500 rounded-lg p-2 xl:p-6"
                                >
                                    <h2
                                        class="title-font font-medium sm:text-4xl text-3xl text-white"
                                    >
                                       {{ this.$props.data.productTypes }}
                                    </h2>
                                    <p
                                        class="leading-relaxed text-gray-100 font-bold"
                                    >
                                        Product Types
                                    </p>
                                </div>
                            </div>
                            <div class="p-4 sm:w-1/4 w-1/2">
                                <div
                                    class="bg-indigo-500 rounded-lg p-2 xl:p-6"
                                >
                                    <h2
                                        class="title-font font-medium sm:text-4xl text-3xl text-white"
                                    >
                                        {{ this.$props.data.products }}
                                    </h2>
                                    <p
                                        class="leading-relaxed text-gray-100 font-bold"
                                    >
                                        Products
                                    </p>
                                </div>
                            </div>
                            <div class="p-4 sm:w-1/4 w-1/2">
                                <div
                                    class="bg-indigo-500 rounded-lg p-2 xl:p-6"
                                >
                                    <h2
                                        class="title-font font-medium sm:text-4xl text-3xl text-white"
                                    >
                                        {{ this.$props.data.users }}
                                    </h2>
                                    <p
                                        class="leading-relaxed text-gray-100 font-bold"
                                    >
                                        Users
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </app-layout>
</template>

<script>
import { defineComponent } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";

export default defineComponent({
    props:['data'],
    components: {
        AppLayout,
    },
});
</script>
