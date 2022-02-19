<template>
    <app-layout title="Product">
        <h1
            class="text-center text-2xl font-bold leading-7 text-gray-300 sm:text-3xl sm:truncate py-4 bg-gradient-to-l from-indigo-500 to-indigo-800"
        >
            Products
        </h1>
        <div class="py-12">
            <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
                <div class="grid justify-items-center mb-2">
                    <Link
                        :href="route('products.create')"
                        class="flex-shrink-0 bg-blue-500 text-white text-base font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-blue-200 cursor-pointer"
                        >Add new product</Link
                    >
                </div>
                <div class="bg-white overflow-hidden shadow-x1 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-800">
                            <tr>
                                <th
                                    scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider"
                                >
                                    ID
                                </th>
                                <th
                                    scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider"
                                >
                                    Name
                                </th>
                                <th
                                    scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider"
                                >
                                    Description
                                </th>
                               <th
                                    scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider"
                                >
                                    Price
                                </th>                                
                                <th
                                    scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider"
                                >
                                    Product Type
                                </th>
                                <th
                                    scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider"
                                >
                                    Created at
                                </th>
                                <th
                                    scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider"
                                >
                                    Updated at
                                </th>
                                <th
                                    scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider"
                                >
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr
                                v-for="product in products"
                                :key="product.id"
                            >
                                <td
                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"
                                >
                                    {{ product.id }}
                                </td>
                                <td
                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"
                                >
                                    {{ product.name }}
                                </td>
                                <td
                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"
                                >
                                    {{ product.description }}
                                </td>
                                <td
                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"
                                >
                                    $ {{ product.price }}
                                </td>                                
                                <td
                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"
                                >
                                    {{ product.product_type.name }}
                                </td>
                                <td
                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"
                                >
                                    {{ format_date(product.created_at) }}
                                </td>
                                <td
                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"
                                >
                                    {{ format_date(product.updated_at) }}
                                </td>
                                <td class="px-6 py-4 text-sm font-medium">
                                    <Link
                                        :href="
                                            route(
                                                'products.edit',
                                                product.id
                                            )
                                        "
                                        class="text-indigo-600 hover:text-indigo-900"
                                        >Edit</Link
                                    >

                                    <button
                                        v-on:click="message(product.name)"
                                        class="text-red-700 hover:text-indigo-900 px-3"
                                    >
                                        Delete
                                    </button>
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
import AppLayout from "@/Layouts/AppLayout.vue";
import { Link } from "@inertiajs/inertia-vue3";
import moment from "moment";
import Swal from "sweetalert2";

export default {
    name: "ProductList",
    props: {
        products: Array,
    },
    components: {
        AppLayout,
        Link,
    },
        methods: {
        format_date(value) {
            if (value) {
                return moment(String(value)).format("YYYY-MM-DD");
            }
        },
        message(pt) {
            Swal.fire({
                position: "center",
                icon: "success",
                title: `Theoretically <b>${pt}</b> was deleted, for demo reasons it is not deleted`,
                showConfirmButton: false,
                timer: 3000,
            });
        },
    },
};
</script>
