<template>
    <Head title="Welcome" />
    <div class="relative bg-white overflow-hidden h-screen min-h-screen">
        <div class="pt-16 pb-80 sm:pt-24 sm:pb-40 lg:pt-40 lg:pb-48">
            <div
                class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 sm:static"
            >
                <div class="sm:max-w-lg">
                    <h1
                        class="text-4xl font font-extrabold tracking-tight text-gray-900 sm:text-6xl"
                    >
                        CRUD Products Application
                    </h1>
                    <p class="mt-4 text-xl text-gray-500">
                        Lorem ipsum dolor, sit amet consectetur adipisicing
                        elit. Id praesentium, voluptas atque accusamus expedita
                        ab unde, voluptate nesciunt neque necessitatibus
                        voluptatibus sint tempore? Praesentium libero distinctio
                        corporis rerum nam totam.
                        <br>
                        <br>
                        Email: adminlaravel@gmail.com
                        <br>
                        Password: 12345678
                    </p>
                </div>
                <div>
                    <div class="mt-10">
                        <!-- Decorative image grid -->
                        <div
                            aria-hidden="true"
                            class="pointer-events-none lg:absolute lg:inset-y-0 lg:max-w-7xl lg:mx-auto lg:w-full"
                        >
                            <div
                                class="absolute transform sm:left-1/2 sm:top-0 sm:translate-x-8 lg:left-1/2 lg:top-1/2 lg:-translate-y-1/2 lg:translate-x-8"
                            >
                                <div
                                    class="flex items-center space-x-6 lg:space-x-8"
                                >
                                    <div
                                        class="flex-shrink-0 grid grid-cols-1 gap-y-6 lg:gap-y-8"
                                    >
                                        <div
                                            class="w-44 h-64 rounded-lg overflow-hidden sm:opacity-0 lg:opacity-100"
                                        >
                                            <img
                                                src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-01.jpg"
                                                alt=""
                                                class="w-full h-full object-center object-cover"
                                            />
                                        </div>
                                        <div
                                            class="w-44 h-64 rounded-lg overflow-hidden"
                                        >
                                            <img
                                                src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-02.jpg"
                                                alt=""
                                                class="w-full h-full object-center object-cover"
                                            />
                                        </div>
                                    </div>
                                    <div
                                        class="flex-shrink-0 grid grid-cols-1 gap-y-6 lg:gap-y-8"
                                    >
                                        <div
                                            class="w-44 h-64 rounded-lg overflow-hidden"
                                        >
                                            <img
                                                src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-03.jpg"
                                                alt=""
                                                class="w-full h-full object-center object-cover"
                                            />
                                        </div>
                                        <div
                                            class="w-44 h-64 rounded-lg overflow-hidden"
                                        >
                                            <img
                                                src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-04.jpg"
                                                alt=""
                                                class="w-full h-full object-center object-cover"
                                            />
                                        </div>
                                        <div
                                            class="w-44 h-64 rounded-lg overflow-hidden"
                                        >
                                            <img
                                                src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-05.jpg"
                                                alt=""
                                                class="w-full h-full object-center object-cover"
                                            />
                                        </div>
                                    </div>
                                    <div
                                        class="flex-shrink-0 grid grid-cols-1 gap-y-6 lg:gap-y-8"
                                    >
                                        <div
                                            class="w-44 h-64 rounded-lg overflow-hidden"
                                        >
                                            <img
                                                src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-06.jpg"
                                                alt=""
                                                class="w-full h-full object-center object-cover"
                                            />
                                        </div>
                                        <div
                                            class="w-44 h-64 rounded-lg overflow-hidden"
                                        >
                                            <img
                                                src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-07.jpg"
                                                alt=""
                                                class="w-full h-full object-center object-cover"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div v-if="canLogin">
                            <Link
                                v-if="$page.props.user"
                                :href="route('dashboard')"
                                class="inline-block text-center bg-indigo-600 border border-transparent rounded-md py-3 px-8 font-medium text-white hover:bg-indigo-700"
                            >
                                Dashboard
                            </Link>

                            <template v-else>
                                <Link
                                    :href="route('login')"
                                    class="inline-block text-center bg-indigo-600 border border-transparent rounded-md py-3 px-8 font-medium text-white hover:bg-indigo-700"
                                >
                                    Log in
                                </Link>
                            </template>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.bg-gray-100 {
    background-color: #f7fafc;
    background-color: rgba(247, 250, 252, var(--tw-bg-opacity));
}

.border-gray-200 {
    border-color: #edf2f7;
    border-color: rgba(237, 242, 247, var(--tw-border-opacity));
}

.text-gray-400 {
    color: #cbd5e0;
    color: rgba(203, 213, 224, var(--tw-text-opacity));
}

.text-gray-500 {
    color: #a0aec0;
    color: rgba(160, 174, 192, var(--tw-text-opacity));
}

.text-gray-600 {
    color: #718096;
    color: rgba(113, 128, 150, var(--tw-text-opacity));
}

.text-gray-700 {
    color: #4a5568;
    color: rgba(74, 85, 104, var(--tw-text-opacity));
}

.text-gray-900 {
    color: #1a202c;
    color: rgba(26, 32, 44, var(--tw-text-opacity));
}

@media (prefers-color-scheme: dark) {
    .dark\:bg-gray-800 {
        background-color: #2d3748;
        background-color: rgba(45, 55, 72, var(--tw-bg-opacity));
    }

    .dark\:bg-gray-900 {
        background-color: #1a202c;
        background-color: rgba(26, 32, 44, var(--tw-bg-opacity));
    }

    .dark\:border-gray-700 {
        border-color: #4a5568;
        border-color: rgba(74, 85, 104, var(--tw-border-opacity));
    }

    .dark\:text-white {
        color: #fff;
        color: rgba(255, 255, 255, var(--tw-text-opacity));
    }

    .dark\:text-gray-400 {
        color: #cbd5e0;
        color: rgba(203, 213, 224, var(--tw-text-opacity));
    }
}
</style>

<script>
import { defineComponent } from "vue";
import { Head, Link } from "@inertiajs/inertia-vue3";

export default defineComponent({
    components: {
        Head,
        Link,
    },

    props: {
        canLogin: Boolean,
        canRegister: Boolean,
        laravelVersion: String,
        phpVersion: String,
    },
});
</script>
