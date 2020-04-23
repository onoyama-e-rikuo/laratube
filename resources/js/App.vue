<template>
    <div class="flex flex-col h-screen">
        <header>
            <Navbar />
        </header>
        <Menubar class="mb-4" />
        <main class="container m-auto">
            <RouterView />
        </main>
        <footer class="items-end">
            <Footer />
        </footer>
    </div>
</template>

<script>
import Navbar from "./components/Navbar.vue";
import Footer from "./components/Footer.vue";
import Menubar from "./components/Menubar.vue";

export default {
    components: {
        Navbar,
        Footer,
        Menubar,
    }
};
</script>
