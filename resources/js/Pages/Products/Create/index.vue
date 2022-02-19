<template>
    <div>
        <app-layout title="Create product">
            <h1
                class="text-center text-2xl font-bold leading-7 text-gray-300 sm:text-3xl sm:truncate py-4 bg-gradient-to-l from-indigo-500 to-indigo-800"
            >
                Add new product
            </h1>
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div
                        class="bg-white overflow-hidden shadow-xl sm:rounded-lg"
                    >
                        <form @submit.prevent="submit" class="mb-6">
                            <div
                                class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7"
                            >
                                <div class="grid grid-cols-1">
                                    <label
                                        class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold"
                                        >Name</label
                                    >
                                    <input
                                        id="name"
                                        v-model="form.name"
                                        class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                        type="text"
                                        placeholder="Name"
                                    />
                                </div>

                                <div class="grid grid-cols-1">
                                    <label
                                        class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold"
                                        >Description</label
                                    >
                                    <input
                                        id="description"
                                        v-model="form.description"
                                        class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                        type="text"
                                        placeholder="Description"
                                    />
                                </div>

                                <div class="grid grid-cols-1">
                                    <label
                                        class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold"
                                        >Price</label
                                    >
                                    <input
                                        id="price"
                                        v-model="form.price"
                                        class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                        placeholder="Price"
                                        type="number" step="any"
                                    />
                                </div>                                

                                <div class="grid grid-cols-1">
                                    <label
                                        class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold"
                                        >Product type</label
                                    >
                                    <select
                                        class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                        aria-label="Select product type" v-model="form.product_type_id"
                                    >
                                        <option selected disabled>
                                            Open this select menu
                                        </option>
                                        <option
                                            v-for="productType in productTypes"
                                            v-bind:value="productType.id"
                                            :key="productType.id"
                                        >
                                            {{ productType.name }}
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <div
                                class="flex justify-end md:gap-8 gap-4 pt-5 pb-5 pr-5"
                            >
                                <Link
                                    :href="route('products.index')"
                                    class="w-auto bg-gray-500 hover:bg-gray-700 rounded-lg shadow-xl font-medium text-white px-4 py-2"
                                    type="button"
                                >
                                    Cancel
                                </Link>
                                <button
                                    type="submit"
                                    class="w-auto bg-indigo-800 hover:bg-indigo-800 rounded-lg shadow-xl font-medium text-white px-4 py-2"
                                >
                                    Save
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </app-layout>
    </div>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Link } from "@inertiajs/inertia-vue3";

export default {
    props: {
        productTypes: Array,
    },
    name: "ProductForm",
    components: {
        AppLayout,
        Link,
    },
    data() {
        return {
            form: {
                product_type_id: null,
                name: null,
                description: null,
                price: null,
            },
        };
    },
    methods: {
        submit() {
            this.$inertia.post(route("products.store"), this.form);
        },
    },
};
</script>
