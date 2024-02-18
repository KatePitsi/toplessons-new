<div class="top-menu text-right my-auto">

    <div class="text-xs inline pr-0 md:pr-4 lg:pr-0 text-[#282749]" x-data="{ isHovered: false }" x-on:mouseover="isHovered = true" x-on:mouseout="isHovered = false">
        <a href="<?php echo home_url(); ?>" class="text-xs">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-9 h-9 inline p-1.5 border-solid border rounded-full border-black">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
            </svg>
        </a>
    </div>
    <div class="text-xs inline px-4 text-[#282749] hidden lg:inline" x-data="{ isHovered: false }" x-on:mouseover="isHovered = true" x-on:mouseout="isHovered = false">
        <a href="<?php echo get_field('contact_details_footer_button  ', 'option'); ?>" class="text-xs">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-9 h-9 inline p-1.5 border-solid border rounded-full border-black">
                <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
            </svg>
        </a>
        <span x-bind:class="{ 'hidden': !isHovered }" class="fond-bold text-base bg-gray-200 p-6 max-w-md mx-auto fixed top-[5rem] block right-24">Επικοινώνησε μαζί μας!</span>
    </div>
    <div class="text-xs inline pr-4 xl:pr-0 text-[#282749] hidden lg:inline" x-data="{ isHovered: false }" x-on:mouseover="isHovered = true" x-on:mouseout="isHovered = false">
        <a href="<?php echo get_field('contact_details_hero_calculate_page  ', 'option'); ?>" class="text-xs">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-9 h-9 inline p-1.5 border-solid border rounded-full border-black">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 15.75V18m-7.5-6.75h.008v.008H8.25v-.008zm0 2.25h.008v.008H8.25V13.5zm0 2.25h.008v.008H8.25v-.008zm0 2.25h.008v.008H8.25V18zm2.498-6.75h.007v.008h-.007v-.008zm0 2.25h.007v.008h-.007V13.5zm0 2.25h.007v.008h-.007v-.008zm0 2.25h.007v.008h-.007V18zm2.504-6.75h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V13.5zm0 2.25h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V18zm2.498-6.75h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V13.5zM8.25 6h7.5v2.25h-7.5V6zM12 2.25c-1.892 0-3.758.11-5.593.322C5.307 2.7 4.5 3.65 4.5 4.757V19.5a2.25 2.25 0 002.25 2.25h10.5a2.25 2.25 0 002.25-2.25V4.757c0-1.108-.806-2.057-1.907-2.185A48.507 48.507 0 0012 2.25z" />
            </svg>
        </a>
        <span x-bind:class="{ 'hidden': !isHovered }" class="fond-bold text-base bg-gray-200 p-6 max-w-md mx-auto fixed top-[5rem] block right-24">Συμπληρώστε την φόρμα για άμεση κοστολόγηση!</span>
    </div>
    <div class="text-xs inline px-4 text-[#282749] hidden xl:inline" x-data="{ isHovered: false }" x-on:mouseover="isHovered = true" x-on:mouseout="isHovered = false">
        <a href="<?php echo get_field('contact_details_address_url', 'option'); ?>" class="text-xs">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-9 h-9 inline p-1.5 border-solid border rounded-full border-black">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
            </svg>
        </a>
        <span x-bind:class="{ 'hidden': !isHovered }" class="fond-bold text-base bg-gray-200 p-6 max-w-md mx-auto fixed top-[5rem] block right-20">Εδώ μπορείς να μας βρείς!</span>
    </div>

    <div class="text-xs inline pr-4 text-[#282749] hidden md:inline" x-data="{ isHovered: false }" x-on:mouseover="isHovered = true" x-on:mouseout="isHovered = false">
        <a href="tel:<?php echo get_field('contact_details_phone', 'option'); ?>" class="text-xs">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-9 h-9 inline p-1.5 border-solid border rounded-full border-black">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14.25 9.75v-4.5m0 4.5h4.5m-4.5 0l6-6m-3 18c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 014.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 00-.38 1.21 12.035 12.035 0 007.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 011.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 01-2.25 2.25h-2.25z" />
            </svg>
        </a>
        <span x-bind:class="{ 'hidden': !isHovered }" class="fond-bold text-base bg-gray-200 p-6 max-w-md mx-auto fixed top-[5rem] block right-16">Τηλεφωνησέ μας!</span>
    </div>
    <div class="text-xs inline pr-4 text-[#282749]" x-data="{ isHovered: false }" x-on:mouseover="isHovered = true" x-on:mouseout="isHovered = false">
        <a href="tel:<?php echo get_field('contact_details_mobile', 'option'); ?>" class="text-xs">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-9 h-9 inline p-1.5 border-solid border rounded-full border-black">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
            </svg>
        </a>
        <span x-bind:class="{ 'hidden': !isHovered }" class="fond-bold text-base bg-gray-200 p-6 max-w-md mx-auto fixed top-[5rem] block right-0 md:right-10">Τηλεφωνησέ μας!</span>
    </div>
    <div class="text-xs inline pr-4 text-[#282749] hidden xl:inline" x-data="{ isHovered: false }" x-on:mouseover="isHovered = true" x-on:mouseout="isHovered = false">
        <a href="mailto:<?php echo get_field('contact_details_email', 'option'); ?>" class="text-xs">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-9 h-9 inline p-1.5 border-solid border rounded-full border-black">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
            </svg>
        </a>
        <span x-bind:class="{ 'hidden': !isHovered }" class="fond-bold text-base bg-gray-200 p-6 max-w-md mx-auto fixed top-[5rem] block right-0">Στείλε μας email!</span>
    </div>
</div>