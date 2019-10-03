<template>
    <div>
        <ContactsList endpoint="/api/birthdays"/>
        <!--<ContentLoading/>-->
    </div>
</template>

<script>
    import ContactsList from '../components/ContactsList';
    import ContentLoading from "./ContentLoading";
    export default {
        name: "ContactsIndex",

        components: {
            ContentLoading,
            ContactsList,
        }
    }
</script>
