<template>    
    <section class="
        flex
        items-center
        px-24
        py-6
        justify-between
    ">
        <div 
        class="
            h-24
            w-24
            rounded-full
            border-double
            border-8
        "
        :class="background">
    
        </div>
        <p class="text-xl font-extrabold text-gray-800 mx-1">
            <slot></slot>
        </p>        
    </section>
</template>

<script>
export default {
    props: [
        'background',
    ]
}

</script>