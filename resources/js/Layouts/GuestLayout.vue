<template>
  <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-with-opacity">
    
    <div>
      <Link href="/">
        <ApplicationLogo class="w-20 h-20 fill-current text-gray-500" />
      </Link>
    </div>

    <div class="absolute top-3 left-5">
  <img src='/storage/images/TECNO.png' alt="ITTS" class="object-cover" style="width: 220px; height: 80px;" />
</div>

<div style="position: absolute; top: 80%; left: 50%; transform: translate(-50%, -50%);">
  <img src='/storage/images/ITTS.png' alt="ITTS" class="object-cover" style="width: 100px; height: 110px;" />
</div>


    <div
  class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white bg-opacity-25 shadow-md overflow-hidden sm:rounded-lg"

>
      <slot />
    </div>
  </div>
</template>

<style scoped>
.bg-with-opacity {
  background: #172554; 
  opacity: 0.9;
  color: #ffffff; 
  
}
</style>