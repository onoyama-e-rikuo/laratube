<template>
        <nav class="flex items-center justify-between p-6">
            <router-link to="/" class="text-pink-400 mr-6">
                <span class="font-semibold text-xl">
                    Laratube
                </span>
            </router-link>
            <div class="w-full flex items-center w-auto">
                <div class="text-sm flex-grow text-gray-600">
                    <router-link
                        to="/builtwith"
                        class="ml-12 mr-6"
                    >
                        Built With...
                    </router-link>
                    <a
                        href="https://github.com/onoyama-e-rikuo/laratube"
                        target="_blank"
                        class="mr-4"
                    >
                        GitHub
                    </a>
                </div>
                <div>
                    <a
                        href="https://www.wantedly.com/users/125586722"
                        target="_blank"
                        class="text-sm px-4 py-2 border rounded text-gray-600 border-gray-600 hover:text-white hover:bg-pink-600 hover:border-pink-600"
                    >
                        Contact
                    </a>
                </div>
            </div>
        </nav>
</template>

