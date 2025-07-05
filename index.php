<?php
get_header();
?>
    <div id="side-bar" class="fixed top-0 z-[99] flex h-full w-full select-none items-start justify-start overflow-auto duration-300 translate-x-full">
        <div id="side-bar2" class="fixed left-0 top-0 z-[97] h-screen w-0 bg-transparent opacity-10"></div>
        <div class=" z-[97] flex min-h-screen w-[300px] overflow-scroll bg-white px-[16px] pb-[80px] pt-[30px]">
            <div class=" relative flex h-full w-full flex-col items-start ">
                <div class="w-full">
                    <a href="#">
                        <img alt="vgna main logo" loading="lazy" width="148" height="35" decoding="async" data-nimg="1" style="color:transparent" src="<?php echo THEME_DIR; ?>/src/img/dgland_main_logo.png">
                    </a>
                </div>
                <a href="./goldenoffer.html">
                    <div class="flex mt-5 h-[40px] w-full flex-row items-center gap-[10px] border-light_grey text-[16px] font-bold text-dark_grey">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11.6241 24C11.2237 24 10.8215 23.871 10.4872 23.6129L8.35666 21.9665L5.64757 22.0574C4.79536 22.0828 4.04233 21.5431 3.80723 20.7344L3.06155 18.163L0.815303 16.6601C0.11186 16.1894 -0.178331 15.3099 0.111862 14.5194L1.0357 12.0043L0.111862 9.48197C-0.178331 8.69147 0.110023 7.81192 0.815303 7.34125L3.05787 5.84565L3.80723 3.26878C4.04049 2.46011 4.79903 1.91675 5.64757 1.94582L8.35115 2.03851L10.489 0.388438C11.1594 -0.129479 12.0943 -0.129479 12.7628 0.388438L14.8933 2.03487L17.6024 1.94401C18.4565 1.91493 19.2077 2.45829 19.4428 3.26697L20.1885 5.83838L22.4347 7.34125C23.1381 7.81192 23.4283 8.69147 23.1381 9.48197L22.2143 11.997L23.1381 14.5194C23.4283 15.3099 23.14 16.1894 22.4347 16.6601L20.1921 18.1557L19.4409 20.7326C19.2058 21.5413 18.4491 22.081 17.6006 22.0555L14.8989 21.9629L12.761 23.6129C12.4267 23.8692 12.0245 24 11.6241 24ZM8.34931 20.1438C8.76072 20.1438 9.16111 20.2801 9.4862 20.5309L11.6167 22.1773L13.7601 20.5309C14.1017 20.2674 14.5315 20.1293 14.9613 20.1438L17.663 20.2365L18.4197 17.6578C18.5391 17.2453 18.8036 16.8873 19.1618 16.6474L21.4043 15.1518L20.4842 12.6258C20.3354 12.2224 20.3354 11.779 20.4842 11.3755L21.408 8.86229L19.1618 7.35397C18.8018 7.11409 18.5391 6.75427 18.4197 6.34176L17.6741 3.77035L14.9613 3.85576C14.526 3.8703 14.1017 3.734 13.7601 3.46868L11.6296 1.82225C11.6259 1.81862 11.6204 1.81862 11.6167 1.82225L9.4862 3.46868C9.14458 3.73218 8.71664 3.8703 8.28502 3.85576L5.58329 3.76308L4.82658 6.34176C4.7072 6.75427 4.44272 7.11409 4.08457 7.35397L1.842 8.84956L2.76217 11.3755C2.91094 11.779 2.91094 12.2224 2.76217 12.6258L1.83833 15.1409L4.08457 16.6492C4.44455 16.8891 4.7072 17.2489 4.82658 17.6596L5.57227 20.231L8.28502 20.1456C8.30523 20.1456 8.32727 20.1438 8.34931 20.1438Z" fill="#E10A0A"></path><path d="M7.64667 16.8062C7.44191 16.8062 7.23716 16.7279 7.08039 16.5727C6.76845 16.2608 6.76845 15.7537 7.08039 15.4417L15.0372 7.48493C15.3491 7.17299 15.8562 7.17299 16.1682 7.48493C16.4801 7.79687 16.4801 8.30396 16.1682 8.6159L8.21136 16.5727C8.05619 16.7295 7.85143 16.8062 7.64667 16.8062Z" fill="#E10A0A"></path><path d="M9.25283 11.1814C7.94429 11.1814 6.87891 10.116 6.87891 8.80751C6.87891 7.49898 7.94429 6.43359 9.25283 6.43359C10.5614 6.43359 11.6267 7.49898 11.6267 8.80751C11.6267 10.116 10.5614 11.1814 9.25283 11.1814ZM9.25283 8.03487C8.82571 8.03487 8.47858 8.382 8.47858 8.80911C8.47858 9.23623 8.82571 9.58336 9.25283 9.58336C9.67994 9.58336 10.0271 9.23623 10.0271 8.80911C10.0271 8.382 9.67994 8.03487 9.25283 8.03487Z" fill="#E10A0A"></path><path d="M14.0087 17.5645C12.7001 17.5645 11.6348 16.4991 11.6348 15.1906C11.6348 13.882 12.7001 12.8167 14.0087 12.8167C15.3172 12.8167 16.3826 13.882 16.3826 15.1906C16.3826 16.4991 15.3172 17.5645 14.0087 17.5645ZM14.0087 14.4179C13.5816 14.4179 13.2344 14.7651 13.2344 15.1922C13.2344 15.6193 13.5816 15.9664 14.0087 15.9664C14.4358 15.9664 14.7829 15.6193 14.7829 15.1922C14.7829 14.7651 14.4342 14.4179 14.0087 14.4179Z" fill="#E10A0A"></path></svg>
                        <span> پیشنهاد ویژه</span>
                    </div>
                </a>
                <a class="w-full" href="./mag.html">
                    <div class="flex h-[52px] flex-row items-center gap-[10px] border-t w-full border-light_grey text-[16px] font-bold text-dark_grey">
                        <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.251 8.03525V6.71692L11.2485 7.37609L10.251 8.03525Z" stroke="#E10C14" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M4.41797 6.09277H6.24964" stroke="#E10C14" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M4.41797 8.39105H5.50297" stroke="#E10C14" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M8 5.02525C8 4.57814 8.17761 4.14934 8.49377 3.83319C8.80992 3.51703 9.23872 3.33942 9.68583 3.33942H13.495" stroke="#E10C14" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M7.99988 5.02525C7.99988 4.57814 7.82227 4.14934 7.50611 3.83319C7.18996 3.51703 6.76116 3.33942 6.31405 3.33942H2.50488" stroke="#E10C14" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M7.99988 5.02525C7.99988 4.57814 7.82227 4.14934 7.50611 3.83319C7.18996 3.51703 6.76116 3.33942 6.31405 3.33942H2.50488V11.0861H6.31405C6.76116 11.0861 7.18996 11.2637 7.50611 11.5799C7.82227 11.896 7.99988 12.3248 7.99988 12.7719C7.99988 12.3248 8.1775 11.896 8.49365 11.5799C8.80981 11.2637 9.23861 11.0861 9.68572 11.0861H13.4949V3.33942H9.68572C9.23861 3.33942 8.80981 3.51703 8.49365 3.83319C8.1775 4.14934 7.99988 4.57814 7.99988 5.02525Z" stroke="#E10C14" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                        <span>مجله وی‌جی‌نا</span>
                    </div>
                </a>
                <a class="w-full" href="#">
                    <div class="flex h-[52px] flex-row items-center gap-[10px] border-t w-full border-light_grey text-[16px] font-bold text-dark_grey">
                        <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13 11.0091V14.0091H3V11.0091" stroke="#E10A0A" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path><path d="M2 5.00909V7.27242C2 8.23191 2.8741 9.00909 3.95324 9.00909H4.04676C5.1259 9.00909 6 8.22871 6 7.27242" stroke="#E10A0A" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path><path d="M10 7.27277C10 8.23225 9.1259 9.00944 8.04676 9.00944H7.95324C6.8741 9.00944 6 8.22906 6 7.27277" stroke="#E10A0A" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path><path d="M10 7.27277C10 8.22906 10.8741 9.00944 11.9532 9.00944H12.0468C13.1259 9.00944 14 8.23225 14 7.27277V5.00909" stroke="#E10A0A" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path><path d="M14 5.00909H2L4.05862 2.00909H11.9414L14 5.00909Z" stroke="#E10A0A" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                        <span>شعب وی‌جی‌نا</span>
                    </div>
                </a>
                <a class="w-full" href="#">
                    <div class="flex h-[52px] flex-row items-center gap-[10px] border-t w-full border-light_grey text-[16px] font-bold text-dark_grey">
                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M2.01591 0C1.04311 0 0.443359 0.878062 0.443359 1.70964V12.2657C0.443359 12.5669 0.623565 12.8389 0.900943 12.9563C1.17832 13.0737 1.49905 13.0139 1.71534 12.8042L4.45712 10.1468C4.46255 10.1415 4.46677 10.1384 4.46942 10.1367H4.55664V11.4427C4.55664 12.3112 5.26069 13.0152 6.12919 13.0152H12.7323C12.7493 13.0152 12.7657 13.0212 12.7787 13.032L15.5205 15.3098C15.7442 15.4956 16.0551 15.5354 16.3184 15.4118C16.5816 15.2883 16.7498 15.0237 16.7498 14.7329V5.68485C16.7498 4.81636 16.0457 4.1123 15.1772 4.1123H12.6365V1.70964C12.6365 0.878062 12.0367 0 11.0639 0H2.01591ZM12.6365 5.6123V8.42711C12.6365 9.25869 12.0367 10.1367 11.0639 10.1367H6.05664V11.4427C6.05664 11.4827 6.08912 11.5152 6.12919 11.5152H12.7323C13.0994 11.5152 13.4549 11.6436 13.7372 11.8782L15.2498 13.1347V5.68485C15.2498 5.64479 15.2173 5.6123 15.1772 5.6123H12.6365ZM5.33237 8.63675H11.0558C11.0599 8.63406 11.0668 8.62847 11.0761 8.61758C11.104 8.58508 11.1365 8.52007 11.1365 8.42711V1.70964C11.1365 1.61667 11.104 1.55167 11.0761 1.51917C11.0668 1.50828 11.0599 1.50268 11.0558 1.5H2.02399C2.01992 1.50268 2.01305 1.50828 2.00372 1.51917C1.97586 1.55167 1.94336 1.61667 1.94336 1.70964V10.4943L3.41317 9.06969C3.68979 8.80157 4.05915 8.63675 4.46077 8.63675H5.28091C5.28945 8.63646 5.29803 8.63631 5.30664 8.63631C5.31525 8.63631 5.32383 8.63646 5.33237 8.63675ZM2.02831 1.49783C2.02833 1.49794 2.02752 1.4984 2.02583 1.49887C2.02745 1.49795 2.0283 1.49772 2.02831 1.49783ZM11.0515 1.49783C11.0515 1.49772 11.0524 1.49795 11.054 1.49887C11.0523 1.4984 11.0515 1.49794 11.0515 1.49783ZM11.0515 8.63892C11.0515 8.63881 11.0523 8.63835 11.054 8.63788C11.0524 8.63878 11.0516 8.63902 11.0515 8.63892ZM6.98913 2.39453C7.30751 2.39472 7.5883 2.45935 7.83147 2.58843C8.07483 2.71769 8.26285 2.89333 8.39556 3.11534C8.52602 3.32962 8.59534 3.58192 8.59462 3.83987C8.59847 4.02745 8.55941 4.21309 8.48102 4.37969C8.41016 4.52783 8.31922 4.66324 8.21135 4.78126C8.10713 4.8935 7.92015 5.08243 7.65039 5.34804C7.58734 5.41007 7.52749 5.47596 7.47114 5.54538C7.43215 5.59268 7.39847 5.64497 7.37083 5.70113C7.34906 5.74615 7.3316 5.79354 7.31872 5.84253C7.30673 5.88986 7.28849 5.97218 7.26452 6.09064C7.22336 6.34172 7.09308 6.46725 6.8737 6.46725C6.82068 6.46875 6.76792 6.45862 6.71849 6.43745C6.66906 6.41627 6.62395 6.38448 6.5858 6.34392C6.50798 6.26188 6.46907 6.13998 6.46907 5.97821C6.45897 5.63878 6.57139 5.30876 6.78173 5.06034C6.9026 4.91935 7.03001 4.78532 7.16343 4.65878C7.30378 4.52359 7.40522 4.42157 7.46775 4.35273C7.52983 4.28471 7.58298 4.20748 7.62564 4.12326C7.66835 4.03914 7.69052 3.94427 7.69 3.84791C7.69126 3.75567 7.6744 3.66421 7.64059 3.57981C7.60677 3.4954 7.55679 3.42003 7.49407 3.35886C7.36344 3.22615 7.19513 3.1598 6.98913 3.1598C6.74769 3.15961 6.56999 3.22653 6.45605 3.36058C6.3421 3.49463 6.24561 3.69197 6.16658 3.9526C6.09206 4.22547 5.95059 4.36191 5.74215 4.36191C5.68412 4.36314 5.6265 4.35102 5.57298 4.32632C5.51945 4.30163 5.4712 4.2649 5.43131 4.21849C5.3469 4.12307 5.30469 4.01981 5.30469 3.90872C5.30451 3.67925 5.37139 3.44682 5.50531 3.21143C5.63923 2.97623 5.83447 2.78128 6.09102 2.62658C6.34757 2.47188 6.64694 2.39453 6.98913 2.39453ZM6.71735 6.83009C6.7782 6.80577 6.84331 6.79402 6.90879 6.79554V6.79815C6.97317 6.79724 7.03709 6.80929 7.09675 6.83361C7.15641 6.85793 7.21062 6.89401 7.25615 6.93972C7.30168 6.98544 7.33762 7.03985 7.36184 7.09975C7.38606 7.15965 7.39807 7.22382 7.39716 7.28846C7.39716 7.44295 7.34801 7.56364 7.24969 7.65053C7.1568 7.73626 7.03496 7.7834 6.90879 7.78242C6.78028 7.78411 6.65577 7.73764 6.55957 7.65209C6.46004 7.5652 6.41028 7.44356 6.41028 7.28716C6.40878 7.22194 6.42084 7.15712 6.4457 7.09684C6.47055 7.03656 6.50766 6.98215 6.55464 6.93708C6.60116 6.8908 6.6565 6.85441 6.71735 6.83009Z" fill="#E10A0A"></path></svg>
                        <span>پرسش های متداول</span>
                    </div>
                </a>
                <a class="w-full" href="#">
                    <div class="flex h-[52px] flex-row items-center gap-[10px] border-t w-full border-light_grey text-[16px] font-bold text-dark_grey">
                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.5 16.625C13.435 16.625 16.625 13.435 16.625 9.5C16.625 5.56497 13.435 2.375 9.5 2.375C5.56497 2.375 2.375 5.56497 2.375 9.5C2.375 13.435 5.56497 16.625 9.5 16.625Z" stroke="#E10A0A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M9.5 8.7085V12.6668" stroke="#E10A0A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M9.46094 6.3335H9.5401V6.41266H9.46094V6.3335Z" stroke="#E10A0A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                        <span> راهنمای خرید</span>
                    </div>
                </a>
                <a class="w-full" href="#">
                    <div class="flex h-[52px] flex-row items-center gap-[10px] border-t w-full border-light_grey text-[16px] font-bold text-dark_grey">
                        <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.56836 8.17621L7.56836 1" stroke="#E10A0A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M5.57422 2.99339L7.56761 1L9.561 2.99339" stroke="#E10A0A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M1.98681 13.0602H13.1498C13.5902 13.0602 13.9472 12.7776 13.9472 12.429L13.9472 6.11659C13.9472 5.76797 13.5902 5.48535 13.1498 5.48535L1.98681 5.48535C1.54644 5.48535 1.18945 5.76797 1.18945 6.11659L1.18945 12.429C1.18945 12.7776 1.54644 13.0602 1.98681 13.0602Z" stroke="#E10A0A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                        <span>شرایط بازگشت کالا</span>
                    </div>
                </a>
                <a class="w-full" href="#">
                    <div class="flex h-[52px] flex-row items-center gap-[10px] border-t w-full border-light_grey text-[16px] font-bold text-dark_grey">
                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.72908 16.5433L9.99537 17.2445L9.99538 17.2445L9.72908 16.5433ZM9.26961 16.5433L9.00332 17.2445L9.00332 17.2445L9.26961 16.5433ZM3.95768 3.125H15.041V1.625H3.95768V3.125ZM15.0827 3.16667V8.04718H16.5827V3.16667H15.0827ZM3.91602 8.04718V3.16667H2.41602V8.04718H3.91602ZM15.0827 8.04718C15.0827 13.3751 10.5633 15.4242 9.46279 15.8422L9.99538 17.2445C11.168 16.7991 16.5827 14.4067 16.5827 8.04718H15.0827ZM2.41602 8.04718C2.41602 14.4067 7.83075 16.7991 9.00332 17.2445L9.53591 15.8422C8.43536 15.4242 3.91602 13.3751 3.91602 8.04718H2.41602ZM9.46279 15.8422C9.46994 15.8395 9.48282 15.8362 9.49935 15.8362C9.51588 15.8362 9.52875 15.8395 9.5359 15.8422L9.00332 17.2445C9.32547 17.3668 9.67323 17.3668 9.99537 17.2445L9.46279 15.8422ZM15.041 3.125C15.064 3.125 15.0827 3.14365 15.0827 3.16667H16.5827C16.5827 2.31523 15.8925 1.625 15.041 1.625V3.125ZM3.95768 1.625C3.10624 1.625 2.41602 2.31523 2.41602 3.16667H3.91602C3.91602 3.14365 3.93467 3.125 3.95768 3.125V1.625Z" fill="#E10A0A"></path><path d="M12.4053 7.65533C12.6982 7.36244 12.6982 6.88756 12.4053 6.59467C12.1124 6.30178 11.6376 6.30178 11.3447 6.59467L12.4053 7.65533ZM8.70833 10.2917L8.178 10.822C8.31866 10.9626 8.50942 11.0417 8.70833 11.0417C8.90725 11.0417 9.09801 10.9626 9.23866 10.822L8.70833 10.2917ZM7.65533 8.178C7.36244 7.88511 6.88756 7.88511 6.59467 8.178C6.30178 8.4709 6.30178 8.94577 6.59467 9.23866L7.65533 8.178ZM11.3447 6.59467L8.178 9.76134L9.23866 10.822L12.4053 7.65533L11.3447 6.59467ZM9.23866 9.76134L7.65533 8.178L6.59467 9.23866L8.178 10.822L9.23866 9.76134Z" fill="#E10A0A"></path></svg>
                        <span>حریم خصوصی</span>
                    </div>
                </a>
                <a class="w-full" href="#">
                    <div class="flex h-[52px] flex-row items-center gap-[10px] border-t w-full border-light_grey text-[16px] font-bold text-dark_grey">
                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M17.0421 14.6458L10.186 2.77083C9.88134 2.24306 9.11955 2.24306 8.81484 2.77083L1.95881 14.6458C1.65409 15.1736 2.03498 15.8333 2.64441 15.8333H16.3565C16.9659 15.8333 17.3468 15.1736 17.0421 14.6458Z" stroke="#E10A0A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M9.46094 12.6665H9.5401V12.7457H9.46094V12.6665Z" stroke="#E10A0A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M9.5 7.125V10.2917" stroke="#E10A0A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                        <span>شرایط و قوانین</span>
                    </div>
                </a>
                <a class="w-full" href="#">
                    <a href="./installment.html" class="flex h-[52px] flex-row items-center gap-[10px] border-t w-full border-light_grey text-[16px] font-bold text-dark_grey">
                        <svg class="text-red-500" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_10152_59209)"><path d="M20.9941 5.46872C20.973 4.04259 19.8813 3.00147 18.4576 3.00098C14.1532 3.00049 9.84826 3.00098 5.54335 3C5.35281 3 5.16423 3.01277 4.97859 3.055C3.82698 3.31675 3.00244 4.34903 3.00146 5.53895C2.999 8.45358 2.99998 11.3682 3.00195 14.2828C3.00244 14.4351 3.01766 14.5883 3.03878 14.7396C3.20084 15.9211 4.21887 16.8842 5.39111 16.9013C7.04413 16.9259 8.69764 16.9107 10.3511 16.9063C10.7116 16.9053 11.0539 16.6273 11.1521 16.2836C11.243 15.9678 11.0878 15.6088 10.771 15.4035C10.6227 15.3073 10.4611 15.2704 10.2839 15.2709C8.69813 15.2734 7.1119 15.2709 5.52616 15.2734C5.14507 15.2739 4.89462 15.0833 4.72617 14.7602C4.64121 14.5971 4.63679 14.4199 4.63679 14.2416C4.63728 12.4658 4.63925 10.69 4.63336 8.91471C4.63286 8.76297 4.66675 8.72466 4.82095 8.72515C7.20913 8.73055 9.59732 8.72908 11.9855 8.72908C14.3737 8.72908 16.7741 8.73105 19.1682 8.72466C19.3357 8.72417 19.3666 8.77033 19.3632 8.92552C19.3524 9.39058 19.3563 9.85614 19.3602 10.3212C19.3637 10.7681 19.7531 11.1782 20.1725 11.1845C20.5875 11.1914 20.998 10.7823 20.999 10.3364C21.0034 8.71386 21.0177 7.09129 20.9941 5.46872ZM19.1883 7.09571C16.7874 7.09178 14.3864 7.09276 11.9855 7.09276C9.58455 7.09276 7.22043 7.09129 4.83814 7.0962C4.68345 7.09669 4.62746 7.07017 4.63286 6.89976C4.64711 6.46564 4.64956 6.03004 4.63434 5.59542C4.61813 5.12201 4.99284 4.63092 5.60179 4.63337C9.86447 4.65007 14.1272 4.64221 18.3903 4.64221C19.0022 4.64221 19.3568 4.99482 19.3588 5.60672C19.3602 6.04772 19.3519 6.48872 19.3632 6.92972C19.3671 7.07557 19.3185 7.09571 19.1883 7.09571ZM21.6993 16.9102C21.44 18.2784 20.7422 19.3656 19.5851 20.1357C18.6383 20.7657 17.5884 21.0378 16.4451 20.9219C15.3524 20.8114 14.3928 20.395 13.6022 19.6402C12.426 18.5175 11.902 17.1341 12.0886 15.5091C12.2369 14.2205 12.8341 13.1587 13.833 12.3406C14.9198 11.4507 16.1775 11.0917 17.5727 11.2813C18.822 11.4512 19.8459 12.0459 20.6557 13.0085C21.246 13.7112 21.5844 14.5274 21.7273 15.4295C21.7376 15.4934 21.7111 15.5837 21.8162 15.6019C21.7455 15.5027 21.7646 15.3824 21.7474 15.2729C21.3285 12.5856 18.5981 10.7082 15.9334 11.2788C13.3114 11.8401 11.6412 14.2868 12.0749 16.9318C12.4427 19.1736 14.439 20.9214 16.7191 20.9971C19.0017 21.0727 21.0245 19.5896 21.6355 17.387C21.7076 17.1263 21.7563 16.8586 21.8162 16.5939C21.6718 16.6592 21.7194 16.8026 21.6993 16.9102Z" fill="currentColor"></path><path d="M19.357 16.0382C19.3732 16.5411 19.0992 16.8716 18.6145 16.9021C18.3159 16.9212 18.0148 16.906 17.7148 16.906V16.9094C17.4579 16.9094 17.2011 16.9119 16.9438 16.9089C16.3972 16.9026 16.0903 16.5976 16.0873 16.0544C16.0849 15.528 16.0834 15.0015 16.0878 14.4756C16.0932 13.8494 16.6196 13.4831 17.2119 13.6879C17.5341 13.7993 17.7172 14.0665 17.7271 14.454C17.733 14.6868 17.733 14.9195 17.7266 15.1518C17.7236 15.2466 17.7492 15.278 17.8474 15.2756C18.0861 15.2682 18.3252 15.2697 18.5634 15.2741C19.0255 15.2824 19.3428 15.5904 19.357 16.0382Z" fill="currentColor"></path><path d="M21.7477 15.2733C21.3288 12.5861 18.5984 10.7086 15.9337 11.2793C13.3118 11.8406 11.6416 14.2872 12.0752 16.9322C12.443 19.1741 14.4393 20.9219 16.7194 20.9975C19.002 21.0731 21.0249 19.59 21.6358 17.3875C21.708 17.1267 21.7566 16.8591 21.8165 16.5944V15.6024C21.7458 15.5032 21.7649 15.3828 21.7477 15.2733ZM16.9046 19.3592C15.1052 19.3573 13.6349 17.8884 13.6344 16.092C13.6344 14.2921 15.1229 12.8076 16.9198 12.8164C18.7172 12.8252 20.1831 14.302 20.1777 16.0984C20.1718 17.9012 18.7069 19.3612 16.9046 19.3592Z" fill="currentColor"></path><path d="M20.9941 5.46872C20.973 4.04259 19.8813 3.00147 18.4576 3.00098C14.1532 3.00049 9.84826 3.00098 5.54335 3C5.35281 3 5.16423 3.01277 4.97859 3.055C3.82698 3.31675 3.00244 4.34903 3.00146 5.53895C2.999 8.45358 2.99998 11.3682 3.00195 14.2828C3.00244 14.4351 3.01766 14.5883 3.03878 14.7396C3.20084 15.9211 4.21887 16.8842 5.39111 16.9013C7.04413 16.9259 8.69764 16.9107 10.3511 16.9063C10.7116 16.9053 11.0539 16.6273 11.1521 16.2836C11.243 15.9678 11.0878 15.6088 10.771 15.4035C10.6227 15.3073 10.4611 15.2704 10.2839 15.2709C8.69813 15.2734 7.1119 15.2709 5.52616 15.2734C5.14507 15.2739 4.89462 15.0833 4.72617 14.7602C4.64121 14.5971 4.63679 14.4199 4.63679 14.2416C4.63728 12.4658 4.63925 10.69 4.63336 8.91471C4.63286 8.76297 4.66675 8.72466 4.82095 8.72515C7.20913 8.73055 9.59732 8.72908 11.9855 8.72908C14.3737 8.72908 16.7741 8.73105 19.1682 8.72466C19.3357 8.72417 19.3666 8.77033 19.3632 8.92552C19.3524 9.39058 19.3563 9.85614 19.3602 10.3212C19.3637 10.7681 19.7531 11.1782 20.1725 11.1845C20.5875 11.1914 20.998 10.7823 20.999 10.3364C21.0034 8.71386 21.0177 7.09129 20.9941 5.46872ZM19.1883 7.09571C16.7874 7.09178 14.3864 7.09276 11.9855 7.09276C9.58455 7.09276 7.22043 7.09129 4.83814 7.0962C4.68345 7.09669 4.62746 7.07017 4.63286 6.89976C4.64711 6.46564 4.64956 6.03004 4.63434 5.59542C4.61813 5.12201 4.99284 4.63092 5.60179 4.63337C9.86447 4.65007 14.1272 4.64221 18.3903 4.64221C19.0022 4.64221 19.3568 4.99482 19.3588 5.60672C19.3602 6.04772 19.3519 6.48872 19.3632 6.92972C19.3671 7.07557 19.3185 7.09571 19.1883 7.09571Z" fill="currentColor"></path><path d="M19.357 16.0382C19.3732 16.5411 19.0992 16.8716 18.6145 16.9021C18.3159 16.9212 18.0148 16.906 17.7148 16.906V16.9094C17.4579 16.9094 17.2011 16.9119 16.9438 16.9089C16.3972 16.9026 16.0903 16.5976 16.0873 16.0544C16.0849 15.528 16.0834 15.0015 16.0878 14.4756C16.0932 13.8494 16.6196 13.4831 17.2119 13.6879C17.5341 13.7993 17.7172 14.0665 17.7271 14.454C17.733 14.6868 17.733 14.9195 17.7266 15.1518C17.7236 15.2466 17.7492 15.278 17.8474 15.2756C18.0861 15.2682 18.3252 15.2697 18.5634 15.2741C19.0255 15.2824 19.3428 15.5904 19.357 16.0382Z" fill="currentColor"></path><path d="M19.357 16.0382C19.3732 16.5411 19.0992 16.8716 18.6145 16.9021C18.3159 16.9212 18.0148 16.906 17.7148 16.906V16.9094C17.4579 16.9094 17.2011 16.9119 16.9438 16.9089C16.3972 16.9026 16.0903 16.5976 16.0873 16.0544C16.0849 15.528 16.0834 15.0015 16.0878 14.4756C16.0932 13.8494 16.6196 13.4831 17.2119 13.6879C17.5341 13.7993 17.7172 14.0665 17.7271 14.454C17.733 14.6868 17.733 14.9195 17.7266 15.1518C17.7236 15.2466 17.7492 15.278 17.8474 15.2756C18.0861 15.2682 18.3252 15.2697 18.5634 15.2741C19.0255 15.2824 19.3428 15.5904 19.357 16.0382Z" fill="currentColor"></path></g><defs><clipPath id="clip0_10152_59209"><rect width="18.8162" height="18" fill="currentColor" transform="translate(3 3)"></rect></clipPath></defs></svg>
                        <span>خرید اقساطی</span>
                    </a>
                </a>
            </div>
        </div>
    </div>
    <section class="w-full lg:h-[300px] xl:h-[400px] mt-[124px] lg:mt-[200px]">
        <div class="swiper swiper-banner h-full">
            <div class="swiper-wrapper w-full h-full">
                <div class="swiper-slide w-full h-full">
                    <a href="#"><img class="hidden lg:block w-full h-full object-cover" src="<?php echo THEME_DIR; ?>/src/img/DESKTOPSLIDE-1.webp" alt=""></a>
                    <a href="#"><img class="block lg:hidden w-full h-full object-cover" src="<?php echo THEME_DIR; ?>/src/img/MOBILESLIDE-1.webp" alt=""></a>
                </div>
                <div class="swiper-slide w-full h-full">
                    <a href="#"><img class="hidden lg:block w-full h-full object-cover" src="<?php echo THEME_DIR; ?>/src/img/DESKTOPSLIDE-2.jpg" alt=""></a>
                    <a href="#"><img class="block lg:hidden w-full h-full object-cover" src="<?php echo THEME_DIR; ?>/src/img/MOBILESLIDE-2.jpg" alt=""></a>
                </div>
                <div class="swiper-slide w-full h-full">
                    <a href="#"><img class="hidden lg:block w-full h-full object-cover" src="<?php echo THEME_DIR; ?>/src/img/DESKTOPSLIDE-3.webp" alt=""></a>
                    <a href="#"><img class="block lg:hidden w-full h-full object-cover" src="<?php echo THEME_DIR; ?>/src/img/MOBILESLIDE-3.webp" alt=""></a>
                </div>
                <div class="swiper-slide w-full h-full">
                    <a href="#"><img class="hidden lg:block w-full h-full object-cover" src="<?php echo THEME_DIR; ?>/src/img/DESKTOPSLIDE-4.webp" alt=""></a>
                    <a href="#"><img class="block lg:hidden w-full h-full object-cover" src="<?php echo THEME_DIR; ?>/src/img/MOBILESLIDE-4.webp" alt=""></a>
                </div>
                <div class="swiper-slide w-full h-full">
                    <a href="#"><img class="hidden lg:block w-full h-full object-cover" src="<?php echo THEME_DIR; ?>/src/img/DESKTOPSLIDE-5.webp" alt=""></a>
                    <a href="#"><img class="block lg:hidden w-full h-full object-cover" src="<?php echo THEME_DIR; ?>/src/img/MOBILESLIDE-5.webp" alt=""></a>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <section class="w-full">
        <div class="flex flex-col items-center">
            <div class="h-[94px] flex flex-col justify-center items-center gap-2">
                <h2 class="text-[20px] md:text-[22px] font-normal">دسته بندی های پربازدید</h2>
                <svg width="46" height="4" viewBox="0 0 46 4" fill="none" xmlns="http://www.w3.org/2000/svg"><line x1="46" y1="1.99609" y2="1.99609" stroke="#E10A0A" stroke-width="3"></line></svg>
            </div>
            <div class="swiper swiper-circle w-full lg:w-[1024px] xl:w-[1280px] h-[181px] overflow-hidden">
                <div class="swiper-wrapper !flex !justify-between">
                        <a class="swiper-slide !flex !flex-col items-center justify-center gap-4" href="#">
                            <img class="w-[90px] lg:w-[130px] h-[90px] lg:h-[130px]" src="<?php echo THEME_DIR; ?>/src/img/DESKTOPSECTIONBANNER-mobile.jpeg" alt="">
                            <p class="text-[12px] sm:text-[14px] font-semibold">گوشی موبایل</p>
                        </a>
                        <a class="swiper-slide !flex !flex-col items-center justify-center gap-4" href="#">
                            <img class="w-[90px] lg:w-[130px] h-[90px] lg:h-[130px]" src="<?php echo THEME_DIR; ?>/src/img/DESKTOPSECTIONBANNER-laptop.jpeg" alt="">
                            <p class="text-[12px] sm:text-[14px] font-semibold">لپتاپ</p>
                        </a>
                        <a class="swiper-slide !flex !flex-col items-center justify-center gap-4" href="#">
                            <img class="w-[90px] lg:w-[130px] h-[90px] lg:h-[130px]" src="<?php echo THEME_DIR; ?>/src/img/DESKTOPSECTIONBANNER-Headphone.jpeg" alt="">
                            <p class="text-[12px] sm:text-[14px] font-semibold">هدفون و هندزفری</p>
                        </a>
                        <a class="swiper-slide !flex !flex-col items-center justify-center gap-4" href="#">
                            <img class="w-[90px] lg:w-[130px] h-[90px] lg:h-[130px]" src="<?php echo THEME_DIR; ?>/src/img/DESKTOPSECTIONBANNER-speaker.jpeg" alt="">
                            <p class="text-[12px] sm:text-[14px] font-semibold">اسپیکر و بلندگو</p>
                        </a>
                        <a class="swiper-slide !flex !flex-col items-center justify-center gap-4" href="#">
                            <img class="w-[90px] lg:w-[130px] h-[90px] lg:h-[130px]" src="<?php echo THEME_DIR; ?>/src/img/DESKTOPSECTIONBANNER-clock.jpeg" alt="">
                            <p class="text-[12px] sm:text-[14px] font-semibold">ساعت هوشمند</p>
                        </a>
                        <a class="swiper-slide !flex !flex-col items-center justify-center gap-4" href="#">
                            <img class="w-[90px] lg:w-[130px] h-[90px] lg:h-[130px]" src="<?php echo THEME_DIR; ?>/src/img/DESKTOPSECTIONBANNER-save.jpeg" alt="">
                            <p class="text-[12px] sm:text-[14px] font-semibold">تجهیزات ذخیره سازی</p>
                        </a>
                        <a class="swiper-slide !flex !flex-col items-center justify-center gap-4" href="#">
                            <img class="w-[90px] lg:w-[130px] h-[90px] lg:h-[130px]" src="<?php echo THEME_DIR; ?>/src/img/DESKTOPSECTIONBANNER-powerbank.jpeg" alt="">
                            <p class="text-[12px] sm:text-[14px] font-semibold">شارژر و پاوربانک</p>
                        </a>
                </div>
            </div>
        </div>
    </section>
    <section class="w-full mt-5 lg:mt-10">
        <div class="w-full lg:w-[1024px] xl:w-[1280px] mx-auto flex flex-col lg:flex-row justify-center items-center gap-4 px-[10px] lg:px-0">
            <a class="w-full lg:w-[504px] xl:w-[632px] h-[80px] xl:h-[104px]" href="#">
                <img class="hidden lg:block w-full h-full rounded-[10px]" src="<?php echo THEME_DIR; ?>/src/img/DESKTOPSECTIONBANNER-job.jpeg" alt="">
                <img class="block lg:hidden w-full h-full rounded-[10px]" src="<?php echo THEME_DIR; ?>/src/img/MOBILESECTIONBANNER-job.jpeg" alt="">
            </a>
            <a class="w-full lg:w-[504px] xl:w-[632px] h-[80px] xl:h-[104px]" href="#">
                <img class="hidden lg:block w-full h-full rounded-[10px]" src="<?php echo THEME_DIR; ?>/src/img/DESKTOPSECTIONBANNER-digital.jpeg" alt="">
                <img class="block lg:hidden w-full h-full rounded-[10px]" src="<?php echo THEME_DIR; ?>/src/img/MOBILESECTIONBANNER-digital.jpeg" alt="">
            </a>
        </div>
    </section>
    <section class="w-full bg-[#d20707] mt-[30px]">
        <div class="flex items-center justify-center h-[65px] lg:h-[88px] gap-1">
            <img src="<?php echo THEME_DIR; ?>/src/img/big_white_golden_offer.svg" alt="">
            <h2 class="text-[26px] font-normal text-white">تخفیف تایم</h2>
        </div>
        <div class="swiper swiper-card w-full lg:w-[1024px] xl:w-[1280px] h-[302px] lg:h-[402px] !pb-[20px] !px-[10px] lg:px-0">
            <div class="swiper-wrapper !w-max">
                <a href="#" class="swiper-slide bg-white lg:bg-black rounded-[10px] lg:rounded-[28px] !w-[185px] lg:!w-[242px] !h-[288px] lg:!h-[362px] relative group !flex !flex-col items-center gap-2 lg:gap-2.5 ">
                    <div class="absolute bg-white hidden lg:block rounded-[28px] w-[242px] h-[362px] lg:group-hover:h-[282px] duration-500 z-0"></div>
                    <img class="w-[136px] lg:w-[179px] h-[136px] lg:h-[179px] lg:group-hover:-mt-[15px] duration-500 z-10 mt-0 lg:mt-[35px] relative object-contain" src="<?php echo THEME_DIR; ?>/src/img/PrdImages-pro.gif" alt="">
                    <div class="shadow-product hidden lg:block h-[0px] w-[180px] duration-500 lg:group-hover:mt-[18px] lg:group-hover:h-[25px] lg:group-hover:rotate-1"></div>
                    <p class="text-[13px] font-medium text-center z-10 px-[10px] line-clamp-2 mt-[15px] lg:mt-0">هدفون بلوتوثی اپل مدل AirPods Pro (2nd generation 2023)</p>
                    <div class="flex w-full px-[10px] items-center justify-between z-10 mt-[20px]">
                        <span class="w-[30px] h-[30px] rounded-full flex justify-center items-center bg-[#e10a0a] lg:group-hover:bg-white duration-300">
                            <p class="text-[12px] font-bold text-white lg:group-hover:text-[#e10a0a] duration-300">%8</p>
                        </span>
                        <span>
                            <div class="flex text-[#b9b9b9] lg:group-hover:text-white text-[12px] lg:text-[13px] font-normal gap-1 ">
                                <p class="line-through">22,749,000</p>
                                <span>تومان</span>
                            </div>
                            <div class="flex text-[#e10b0b] lg:group-hover:text-white duration-300 gap-1 text-[16px] lg:text-[20px] font-bold">
                                <p>21,749,000</p>
                                <span>تومان</span>
                            </div>
                        </span>
                    </div>
                </a>
                <a href="#" class="swiper-slide bg-white lg:bg-black rounded-[10px] lg:rounded-[28px] !w-[185px] lg:!w-[242px] !h-[288px] lg:!h-[362px] relative group !flex flex-col items-center gap-2 lg:gap-2.5">
                    <div class="absolute bg-white hidden lg:block rounded-[28px] w-[242px] h-[362px] lg:group-hover:h-[282px] duration-500 z-0"></div>
                    <img class="w-[136px] lg:w-[179px] h-[136px] lg:h-[179px] lg:group-hover:-mt-[15px] duration-500 z-10 mt-0 lg:mt-[35px]" src="<?php echo THEME_DIR; ?>/src/img/PrdImages-pro.gif" alt="">
                    <div class=" shadow-product hidden lg:block h-[0px] w-[180px] duration-500 lg:group-hover:mt-[18px] lg:group-hover:h-[25px] lg:group-hover:rotate-1"></div>
                    <p class="text-[13px] font-medium text-center z-10 px-[10px] line-clamp-2 mt-[15px] lg:mt-0">هدفون بلوتوثی اپل مدل AirPods Pro (2nd generation 2023)</p>
                    <div class="flex w-full px-[10px] items-center justify-between z-10 mt-[20px]">
                        <span class="w-[30px] h-[30px] rounded-full flex justify-center items-center bg-[#e10a0a] lg:group-hover:bg-white duration-300">
                            <p class="text-[12px] font-bold text-white lg:group-hover:text-[#e10a0a] duration-300">%8</p>
                        </span>
                        <span>
                            <div class="flex text-[#b9b9b9] lg:group-hover:text-white text-[12px] lg:text-[13px] font-normal gap-1">
                                <p class="line-through">22,749,000</p>
                                <span>تومان</span>
                            </div>
                            <div class="flex text-[#e10b0b] lg:group-hover:text-white duration-300 gap-1 text-[16px] lg:text-[20px] font-bold">
                                <p>21,749,000</p>
                                <span>تومان</span>
                            </div>
                        </span>
                    </div>
                </a>
                <a href="#" class="swiper-slide bg-white lg:bg-black rounded-[10px] lg:rounded-[28px] !w-[185px] lg:!w-[242px] !h-[288px] lg:!h-[362px] relative group !flex flex-col items-center gap-2 lg:gap-2.5">
                    <div class="absolute bg-white hidden lg:block rounded-[28px] w-[242px] h-[362px] lg:group-hover:h-[282px] duration-500 z-0"></div>
                    <img class="w-[136px] lg:w-[179px] h-[136px] lg:h-[179px] lg:group-hover:-mt-[15px] duration-500 z-10 mt-0 lg:mt-[35px]" src="<?php echo THEME_DIR; ?>/src/img/PrdImages-pro.gif" alt="">
                    <div class=" shadow-product hidden lg:block h-[0px] w-[180px] duration-500 lg:group-hover:mt-[18px] lg:group-hover:h-[25px] lg:group-hover:rotate-1"></div>
                    <p class="text-[13px] font-medium text-center z-10 px-[10px] line-clamp-2 mt-[15px] lg:mt-0">هدفون بلوتوثی اپل مدل AirPods Pro (2nd generation 2023)</p>
                    <div class="flex w-full px-[10px] items-center justify-between z-10 mt-[20px]">
                        <span class="w-[30px] h-[30px] rounded-full flex justify-center items-center bg-[#e10a0a] lg:group-hover:bg-white duration-300">
                            <p class="text-[12px] font-bold text-white lg:group-hover:text-[#e10a0a] duration-300">%8</p>
                        </span>
                        <span>
                            <div class="flex text-[#b9b9b9] lg:group-hover:text-white text-[12px] lg:text-[13px] font-normal gap-1">
                                <p class="line-through">22,749,000</p>
                                <span>تومان</span>
                            </div>
                            <div class="flex text-[#e10b0b] lg:group-hover:text-white duration-300 gap-1 text-[16px] lg:text-[20px] font-bold">
                                <p>21,749,000</p>
                                <span>تومان</span>
                            </div>
                        </span>
                    </div>
                </a>
                <a href="#" class="swiper-slide bg-white lg:bg-black rounded-[10px] lg:rounded-[28px] !w-[185px] lg:!w-[242px] !h-[288px] lg:!h-[362px] relative group !flex flex-col items-center gap-2 lg:gap-2.5">
                    <div class="absolute bg-white hidden lg:block rounded-[28px] w-[242px] h-[362px] lg:group-hover:h-[282px] duration-500 z-0"></div>
                    <img class="w-[136px] lg:w-[179px] h-[136px] lg:h-[179px] lg:group-hover:-mt-[15px] duration-500 z-10 mt-0 lg:mt-[35px]" src="<?php echo THEME_DIR; ?>/src/img/PrdImages-pro.gif" alt="">
                    <div class=" shadow-product hidden lg:block h-[0px] w-[180px] duration-500 lg:group-hover:mt-[18px] lg:group-hover:h-[25px] lg:group-hover:rotate-1"></div>
                    <p class="text-[13px] font-medium text-center z-10 px-[10px] line-clamp-2 mt-[15px] lg:mt-0">هدفون بلوتوثی اپل مدل AirPods Pro (2nd generation 2023)</p>
                    <div class="flex w-full px-[10px] items-center justify-between z-10 mt-[20px]">
                        <span class="w-[30px] h-[30px] rounded-full flex justify-center items-center bg-[#e10a0a] lg:group-hover:bg-white duration-300">
                            <p class="text-[12px] font-bold text-white lg:group-hover:text-[#e10a0a] duration-300">%8</p>
                        </span>
                        <span>
                            <div class="flex text-[#b9b9b9] lg:group-hover:text-white text-[12px] lg:text-[13px] font-normal gap-1">
                                <p class="line-through">22,749,000</p>
                                <span>تومان</span>
                            </div>
                            <div class="flex text-[#e10b0b] lg:group-hover:text-white duration-300 gap-1 text-[16px] lg:text-[20px] font-bold">
                                <p>21,749,000</p>
                                <span>تومان</span>
                            </div>
                        </span>
                    </div>
                </a>
                <a href="#" class="swiper-slide bg-white lg:bg-black rounded-[10px] lg:rounded-[28px] !w-[185px] lg:!w-[242px] !h-[288px] lg:!h-[362px] relative group !flex flex-col items-center gap-2 lg:gap-2.5">
                    <div class="absolute bg-white hidden lg:block rounded-[28px] w-[242px] h-[362px] lg:group-hover:h-[282px] duration-500 z-0"></div>
                    <img class="w-[136px] lg:w-[179px] h-[136px] lg:h-[179px] lg:group-hover:-mt-[15px] duration-500 z-10 mt-0 lg:mt-[35px]" src="<?php echo THEME_DIR; ?>/src/img/PrdImages-pro.gif" alt="">
                    <div class=" shadow-product hidden lg:block h-[0px] w-[180px] duration-500 lg:group-hover:mt-[18px] lg:group-hover:h-[25px] lg:group-hover:rotate-1"></div>
                    <p class="text-[13px] font-medium text-center z-10 px-[10px] line-clamp-2 mt-[15px] lg:mt-0">هدفون بلوتوثی اپل مدل AirPods Pro (2nd generation 2023)</p>
                    <div class="flex w-full px-[10px] items-center justify-between z-10 mt-[20px]">
                        <span class="w-[30px] h-[30px] rounded-full flex justify-center items-center bg-[#e10a0a] lg:group-hover:bg-white duration-300">
                            <p class="text-[12px] font-bold text-white lg:group-hover:text-[#e10a0a] duration-300">%8</p>
                        </span>
                        <span>
                            <div class="flex text-[#b9b9b9] lg:group-hover:text-white text-[12px] lg:text-[13px] font-normal gap-1">
                                <p class="line-through">22,749,000</p>
                                <span>تومان</span>
                            </div>
                            <div class="flex text-[#e10b0b] lg:group-hover:text-white duration-300 gap-1 text-[16px] lg:text-[20px] font-bold">
                                <p>21,749,000</p>
                                <span>تومان</span>
                            </div>
                        </span>
                    </div>
                </a>
                <a href="#" class="swiper-slide bg-white lg:bg-black rounded-[10px] lg:rounded-[28px] !w-[185px] lg:!w-[242px] !h-[288px] lg:!h-[362px] relative group !flex flex-col items-center gap-2 lg:gap-2.5">
                    <div class="absolute bg-white hidden lg:block rounded-[28px] w-[242px] h-[362px] lg:group-hover:h-[282px] duration-500 z-0"></div>
                    <img class="w-[136px] lg:w-[179px] h-[136px] lg:h-[179px] lg:group-hover:-mt-[15px] duration-500 z-10 mt-0 lg:mt-[35px]" src="<?php echo THEME_DIR; ?>/src/img/PrdImages-pro.gif" alt="">
                    <div class=" shadow-product hidden lg:block h-[0px] w-[180px] duration-500 lg:group-hover:mt-[18px] lg:group-hover:h-[25px] lg:group-hover:rotate-1"></div>
                    <p class="text-[13px] font-medium text-center z-10 px-[10px] line-clamp-2 mt-[15px] lg:mt-0">هدفون بلوتوثی اپل مدل AirPods Pro (2nd generation 2023)</p>
                    <div class="flex w-full px-[10px] items-center justify-between z-10 mt-[20px]">
                        <span class="w-[30px] h-[30px] rounded-full flex justify-center items-center bg-[#e10a0a] lg:group-hover:bg-white duration-300">
                            <p class="text-[12px] font-bold text-white lg:group-hover:text-[#e10a0a] duration-300">%8</p>
                        </span>
                        <span>
                            <div class="flex text-[#b9b9b9] lg:group-hover:text-white text-[12px] lg:text-[13px] font-normal gap-1">
                                <p class="line-through">22,749,000</p>
                                <span>تومان</span>
                            </div>
                            <div class="flex text-[#e10b0b] lg:group-hover:text-white duration-300 gap-1 text-[16px] lg:text-[20px] font-bold">
                                <p>21,749,000</p>
                                <span>تومان</span>
                            </div>
                        </span>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <section class="w-full mt-[15px]">
        <div class="w-full lg:w-[1024px] xl:w-[1280px] mx-auto">
            <div class="h-[60px] lg:h-[94px] flex flex-col justify-center items-center gap-2">
                <h2 class="text-[20px] lg:text-[22px] font-normal">گوشی موبایل</h2>
                <svg width="46" height="4" viewBox="0 0 46 4" fill="none" xmlns="http://www.w3.org/2000/svg"><line x1="46" y1="1.99609" y2="1.99609" stroke="#E10A0A" stroke-width="3"></line></svg>
            </div>
            <div class="swiper swiper-banner1 !h-[198px] lg:!h-[255px] xl:h-[275px] !px-[10px] lg:!px-0">
                <div class="swiper-wrapper !flex !justify-between">
                    <a class="swiper-slide !w-[286px] lg:!w-[325px] xl:!w-[395px] !h-full" href="#"><img class="rounded-[15px] w-full h-full" src="<?php echo THEME_DIR; ?>/src/img/DESKTOPSECTIONBANNER-flag.jpeg" alt=""></a>
                    <a class="swiper-slide !w-[286px] lg:!w-[325px] xl:!w-[395px] !h-full" href="#"><img class="rounded-[15px] w-full h-full" src="<?php echo THEME_DIR; ?>/src/img/DESKTOPSECTIONBANNER-medium.jpeg" alt=""></a>
                    <a class="swiper-slide !w-[286px] lg:!w-[325px] xl:!w-[395px] !h-full" href="#"><img class="rounded-[15px] w-full h-full" src="<?php echo THEME_DIR; ?>/src/img/DESKTOPSECTIONBANNER-10.jpeg" alt=""></a>
                </div>
            </div>
        </div>
    </section>
    <div class="w-full h-[82px] hidden lg:block bg-[#f6f5f5] mt-[50px]"></div>
    <section class="w-full mt-[15px]">
        <div class="w-full lg:w-[1024px] xl:w-[1280px] mx-auto">
            <div class="h-[60px] lg:h-[94px] flex flex-col justify-center items-center gap-2">
                <h2 class="text-[20px] lg:text-[22px] font-normal">صوتی و تصویری</h2>
                <svg width="46" height="4" viewBox="0 0 46 4" fill="none" xmlns="http://www.w3.org/2000/svg"><line x1="46" y1="1.99609" y2="1.99609" stroke="#E10A0A" stroke-width="3"></line></svg>
            </div>
            <div class="swiper swiper-banner2 !h-[198px] lg:!h-[255px] xl:h-[275px] !px-[10px] lg:!px-0">
                <div class="swiper-wrapper !flex !justify-between">
                    <a class="swiper-slide !w-[286px] lg:!w-[325px] xl:!w-[395px] !h-full" href="#"><img class="rounded-[15px] w-full h-full" src="<?php echo THEME_DIR; ?>/src/img/DESKTOPSECTIONBANNER-handfree.jpeg" alt=""></a>
                    <a class="swiper-slide !w-[286px] lg:!w-[325px] xl:!w-[395px] !h-full" href="#"><img class="rounded-[15px] w-full h-full" src="<?php echo THEME_DIR; ?>/src/img/DESKTOPSECTIONBANNER-speak.jpeg" alt=""></a>
                    <a class="swiper-slide !w-[286px] lg:!w-[325px] xl:!w-[395px] !h-full" href="#"><img class="rounded-[15px] w-full h-full" src="<?php echo THEME_DIR; ?>/src/img/DESKTOPSECTIONBANNER-jbl.jpeg" alt=""></a>
                </div>
            </div>
        </div>
    </section>
    <section class="w-full mt-[20px] h-[240px] lg:h-[350px] px-[10px] lg:px-0">
        <div class="w-full lg:w-[1024px] xl:w-[1280px] h-full mx-auto">
            <img class="w-full h-full hidden lg:block" src="<?php echo THEME_DIR; ?>/src/img/DESKTOPSECTIONBANNER-mobile1.png" alt="">
            <img class="w-full h-full block lg:hidden" src="<?php echo THEME_DIR; ?>/src/img/MOBILESECTIONBANNER-mobile.png" alt="">
        </div>
    </section>
    <section class="w-full mt-[15px]">
        <div class="w-full lg:w-[1024px] xl:w-[1280px] mx-auto">
            <div class="h-[60px] lg:h-[94px] flex flex-col justify-center items-center gap-2">
                <h2 class="text-[20px] lg:text-[22px] font-normal">کامپیوتر و لپ تاپ</h2>
                <svg width="46" height="4" viewBox="0 0 46 4" fill="none" xmlns="http://www.w3.org/2000/svg"><line x1="46" y1="1.99609" y2="1.99609" stroke="#E10A0A" stroke-width="3"></line></svg>
            </div>
            <div class="swiper swiper-banner-computer !h-[198px] lg:!h-[255px] xl:h-[275px] !px-[10px] lg:!px-0">
                <div class="swiper-wrapper !flex !justify-between">
                    <a class="swiper-slide !w-[286px] lg:!w-[325px] xl:!w-[395px] !h-full" href="#"><img class="rounded-[15px] w-full h-full" src="<?php echo THEME_DIR; ?>/src/img/DESKTOPSECTIONBANNER-gaming.jpeg" alt=""></a>
                    <a class="swiper-slide !w-[286px] lg:!w-[325px] xl:!w-[395px] !h-full" href="#"><img class="rounded-[15px] w-full h-full" src="<?php echo THEME_DIR; ?>/src/img/DESKTOPSECTIONBANNER-office.jpeg" alt=""></a>
                    <a class="swiper-slide !w-[286px] lg:!w-[325px] xl:!w-[395px] !h-full" href="#"><img class="rounded-[15px] w-full h-full" src="<?php echo THEME_DIR; ?>/src/img/DESKTOPSECTIONBANNER-student.jpeg" alt=""></a>
                </div>
            </div>
        </div>
    </section>
    <section class="w-full h-auto mt-[30px]">
        <div class="flex items-center justify-center gap-1">
            <img src="<?php echo THEME_DIR; ?>/src/img/red_title_wing.svg" alt="">
            <h3 class="text-[20px] font-normal">محبوب ترین های لوازم جانبی</h3>
            <img src="<?php echo THEME_DIR; ?>/src/img/red_title_wing.svg" alt="">
        </div>
        <div class="w-full h-[335px] lg:h-[470px] mx-auto bg-[#f6f5f5] pt-[10px] lg:pt-[40px] mt-[25px] px-[10px] lg:px-0">
            <div class="swiper swiper-card2 lg:w-[1024px] xl:w-[1280px] mx-auto h-full mt-[15px]">
                <div class="swiper-wrapper">
                    <a href="#" class="swiper-slide bg-white rounded-[10px] lg:rounded-[28px] !w-[181px] lg:!w-[240px] !h-[288px] lg:!h-[388px] relative group !flex !flex-col items-center gap-2 lg:gap-2.5 ">
                        <img class="w-[136px] lg:w-[179px] h-[136px] lg:h-[179px] lg:group-hover:-mt-[15px] duration-500 z-10 mt-0 lg:mt-[35px] relative object-contain" src="<?php echo THEME_DIR; ?>/src/img/PrdImages-pro.gif" alt="">
                        <div class="shadow-product hidden lg:block h-[0px] w-[180px] duration-500 lg:group-hover:mt-[18px] lg:group-hover:h-[32px] lg:group-hover:rotate-1"></div>
                        <p class="text-[13px] font-medium text-center z-10 px-[10px] line-clamp-2 mt-[15px] lg:mt-0">هدفون بلوتوثی اپل مدل AirPods Pro (2nd generation 2023)</p>
                        <div class="flex w-full px-[10px] items-center justify-between z-10 mt-[20px]">
                            <span class="w-[30px] h-[30px] rounded-full flex justify-center items-center bg-[#e10a0a] duration-300">
                                <p class="text-[12px] font-bold text-white duration-300">%8</p>
                            </span>
                            <span>
                                <div class="flex text-[#b9b9b9] text-[12px] lg:text-[13px] font-normal gap-1 ">
                                    <p class="line-through">22,749,000</p>
                                    <span>تومان</span>
                                </div>
                                <div class="flex text-[#e10b0b] duration-300 gap-1 text-[16px] lg:text-[20px] font-bold">
                                    <p>21,749,000</p>
                                    <span>تومان</span>
                                </div>
                            </span>
                        </div>
                    </a>
                    <a href="#" class="swiper-slide bg-white rounded-[10px] lg:rounded-[28px] !w-[181px] lg:!w-[240px] !h-[288px] lg:!h-[388px] relative group !flex !flex-col items-center gap-2 lg:gap-2.5 ">
                        <img class="w-[136px] lg:w-[179px] h-[136px] lg:h-[179px] lg:group-hover:-mt-[15px] duration-500 z-10 mt-0 lg:mt-[35px] relative object-contain" src="<?php echo THEME_DIR; ?>/src/img/PrdImages-pro.gif" alt="">
                        <div class="shadow-product hidden lg:block h-[0px] w-[180px] duration-500 lg:group-hover:mt-[18px] lg:group-hover:h-[32px] lg:group-hover:rotate-1"></div>
                        <p class="text-[13px] font-medium text-center z-10 px-[10px] line-clamp-2 mt-[15px] lg:mt-0">هدفون بلوتوثی اپل مدل AirPods Pro (2nd generation 2023)</p>
                        <div class="flex w-full px-[10px] items-center justify-between z-10 mt-[20px]">
                            <span class="w-[30px] h-[30px] rounded-full flex justify-center items-center bg-[#e10a0a] duration-300">
                                <p class="text-[12px] font-bold text-white duration-300">%8</p>
                            </span>
                            <span>
                                <div class="flex text-[#b9b9b9] text-[12px] lg:text-[13px] font-normal gap-1 ">
                                    <p class="line-through">22,749,000</p>
                                    <span>تومان</span>
                                </div>
                                <div class="flex text-[#e10b0b] duration-300 gap-1 text-[16px] lg:text-[20px] font-bold">
                                    <p>21,749,000</p>
                                    <span>تومان</span>
                                </div>
                            </span>
                        </div>
                    </a>
                    <a href="#" class="swiper-slide bg-white rounded-[10px] lg:rounded-[28px] !w-[181px] lg:!w-[240px] !h-[288px] lg:!h-[388px] relative group !flex !flex-col items-center gap-2 lg:gap-2.5 ">
                        <img class="w-[136px] lg:w-[179px] h-[136px] lg:h-[179px] lg:group-hover:-mt-[15px] duration-500 z-10 mt-0 lg:mt-[35px] relative object-contain" src="<?php echo THEME_DIR; ?>/src/img/PrdImages-pro.gif" alt="">
                        <div class="shadow-product hidden lg:block h-[0px] w-[180px] duration-500 lg:group-hover:mt-[18px] lg:group-hover:h-[32px] lg:group-hover:rotate-1"></div>
                        <p class="text-[13px] font-medium text-center z-10 px-[10px] line-clamp-2 mt-[15px] lg:mt-0">هدفون بلوتوثی اپل مدل AirPods Pro (2nd generation 2023)</p>
                        <div class="flex w-full px-[10px] items-center justify-between z-10 mt-[20px]">
                            <span class="w-[30px] h-[30px] rounded-full flex justify-center items-center bg-[#e10a0a] duration-300">
                                <p class="text-[12px] font-bold text-white duration-300">%8</p>
                            </span>
                            <span>
                                <div class="flex text-[#b9b9b9] text-[12px] lg:text-[13px] font-normal gap-1 ">
                                    <p class="line-through">22,749,000</p>
                                    <span>تومان</span>
                                </div>
                                <div class="flex text-[#e10b0b] duration-300 gap-1 text-[16px] lg:text-[20px] font-bold">
                                    <p>21,749,000</p>
                                    <span>تومان</span>
                                </div>
                            </span>
                        </div>
                    </a>
                    <a href="#" class="swiper-slide bg-white rounded-[10px] lg:rounded-[28px] !w-[181px] lg:!w-[240px] !h-[288px] lg:!h-[388px] relative group !flex !flex-col items-center gap-2 lg:gap-2.5 ">
                        <img class="w-[136px] lg:w-[179px] h-[136px] lg:h-[179px] lg:group-hover:-mt-[15px] duration-500 z-10 mt-0 lg:mt-[35px] relative object-contain" src="<?php echo THEME_DIR; ?>/src/img/PrdImages-pro.gif" alt="">
                        <div class="shadow-product hidden lg:block h-[0px] w-[180px] duration-500 lg:group-hover:mt-[18px] lg:group-hover:h-[32px] lg:group-hover:rotate-1"></div>
                        <p class="text-[13px] font-medium text-center z-10 px-[10px] line-clamp-2 mt-[15px] lg:mt-0">هدفون بلوتوثی اپل مدل AirPods Pro (2nd generation 2023)</p>
                        <div class="flex w-full px-[10px] items-center justify-between z-10 mt-[20px]">
                            <span class="w-[30px] h-[30px] rounded-full flex justify-center items-center bg-[#e10a0a] duration-300">
                                <p class="text-[12px] font-bold text-white duration-300">%8</p>
                            </span>
                            <span>
                                <div class="flex text-[#b9b9b9] text-[12px] lg:text-[13px] font-normal gap-1 ">
                                    <p class="line-through">22,749,000</p>
                                    <span>تومان</span>
                                </div>
                                <div class="flex text-[#e10b0b] duration-300 gap-1 text-[16px] lg:text-[20px] font-bold">
                                    <p>21,749,000</p>
                                    <span>تومان</span>
                                </div>
                            </span>
                        </div>
                    </a>
                    <a href="#" class="swiper-slide bg-white rounded-[10px] lg:rounded-[28px] !w-[181px] lg:!w-[240px] !h-[288px] lg:!h-[388px] relative group !flex !flex-col items-center gap-2 lg:gap-2.5 ">
                        <img class="w-[136px] lg:w-[179px] h-[136px] lg:h-[179px] lg:group-hover:-mt-[15px] duration-500 z-10 mt-0 lg:mt-[35px] relative object-contain" src="<?php echo THEME_DIR; ?>/src/img/PrdImages-pro.gif" alt="">
                        <div class="shadow-product hidden lg:block h-[0px] w-[180px] duration-500 lg:group-hover:mt-[18px] lg:group-hover:h-[32px] lg:group-hover:rotate-1"></div>
                        <p class="text-[13px] font-medium text-center z-10 px-[10px] line-clamp-2 mt-[15px] lg:mt-0">هدفون بلوتوثی اپل مدل AirPods Pro (2nd generation 2023)</p>
                        <div class="flex w-full px-[10px] items-center justify-between z-10 mt-[20px]">
                            <span class="w-[30px] h-[30px] rounded-full flex justify-center items-center bg-[#e10a0a] duration-300">
                                <p class="text-[12px] font-bold text-white duration-300">%8</p>
                            </span>
                            <span>
                                <div class="flex text-[#b9b9b9] text-[12px] lg:text-[13px] font-normal gap-1 ">
                                    <p class="line-through">22,749,000</p>
                                    <span>تومان</span>
                                </div>
                                <div class="flex text-[#e10b0b] duration-300 gap-1 text-[16px] lg:text-[20px] font-bold">
                                    <p>21,749,000</p>
                                    <span>تومان</span>
                                </div>
                            </span>
                        </div>
                    </a>
                    <a href="#" class="swiper-slide bg-white rounded-[10px] lg:rounded-[28px] !w-[181px] lg:!w-[240px] !h-[288px] lg:!h-[388px] relative group !flex !flex-col items-center gap-2 lg:gap-2.5 ">
                        <img class="w-[136px] lg:w-[179px] h-[136px] lg:h-[179px] lg:group-hover:-mt-[15px] duration-500 z-10 mt-0 lg:mt-[35px] relative object-contain" src="<?php echo THEME_DIR; ?>/src/img/PrdImages-pro.gif" alt="">
                        <div class="shadow-product hidden lg:block h-[0px] w-[180px] duration-500 lg:group-hover:mt-[18px] lg:group-hover:h-[32px] lg:group-hover:rotate-1"></div>
                        <p class="text-[13px] font-medium text-center z-10 px-[10px] line-clamp-2 mt-[15px] lg:mt-0">هدفون بلوتوثی اپل مدل AirPods Pro (2nd generation 2023)</p>
                        <div class="flex w-full px-[10px] items-center justify-between z-10 mt-[20px]">
                            <span class="w-[30px] h-[30px] rounded-full flex justify-center items-center bg-[#e10a0a] duration-300">
                                <p class="text-[12px] font-bold text-white duration-300">%8</p>
                            </span>
                            <span>
                                <div class="flex text-[#b9b9b9] text-[12px] lg:text-[13px] font-normal gap-1 ">
                                    <p class="line-through">22,749,000</p>
                                    <span>تومان</span>
                                </div>
                                <div class="flex text-[#e10b0b] duration-300 gap-1 text-[16px] lg:text-[20px] font-bold">
                                    <p>21,749,000</p>
                                    <span>تومان</span>
                                </div>
                            </span>
                        </div>
                    </a>
                    <a href="#" class="swiper-slide bg-white rounded-[10px] lg:rounded-[28px] !w-[181px] lg:!w-[240px] !h-[288px] lg:!h-[388px] relative group !flex !flex-col items-center gap-2 lg:gap-2.5 ">
                        <img class="w-[136px] lg:w-[179px] h-[136px] lg:h-[179px] lg:group-hover:-mt-[15px] duration-500 z-10 mt-0 lg:mt-[35px] relative object-contain" src="<?php echo THEME_DIR; ?>/src/img/PrdImages-pro.gif" alt="">
                        <div class="shadow-product hidden lg:block h-[0px] w-[180px] duration-500 lg:group-hover:mt-[18px] lg:group-hover:h-[32px] lg:group-hover:rotate-1"></div>
                        <p class="text-[13px] font-medium text-center z-10 px-[10px] line-clamp-2 mt-[15px] lg:mt-0">هدفون بلوتوثی اپل مدل AirPods Pro (2nd generation 2023)</p>
                        <div class="flex w-full px-[10px] items-center justify-between z-10 mt-[20px]">
                            <span class="w-[30px] h-[30px] rounded-full flex justify-center items-center bg-[#e10a0a] duration-300">
                                <p class="text-[12px] font-bold text-white duration-300">%8</p>
                            </span>
                            <span>
                                <div class="flex text-[#b9b9b9] text-[12px] lg:text-[13px] font-normal gap-1 ">
                                    <p class="line-through">22,749,000</p>
                                    <span>تومان</span>
                                </div>
                                <div class="flex text-[#e10b0b] duration-300 gap-1 text-[16px] lg:text-[20px] font-bold">
                                    <p>21,749,000</p>
                                    <span>تومان</span>
                                </div>
                            </span>
                        </div>
                    </a>
                    <a href="#" class="swiper-slide bg-white rounded-[10px] lg:rounded-[28px] !w-[181px] lg:!w-[240px] !h-[288px] lg:!h-[388px] relative group !flex !flex-col items-center gap-2 lg:gap-2.5 ">
                        <img class="w-[136px] lg:w-[179px] h-[136px] lg:h-[179px] lg:group-hover:-mt-[15px] duration-500 z-10 mt-0 lg:mt-[35px] relative object-contain" src="<?php echo THEME_DIR; ?>/src/img/PrdImages-pro.gif" alt="">
                        <div class="shadow-product hidden lg:block h-[0px] w-[180px] duration-500 lg:group-hover:mt-[18px] lg:group-hover:h-[32px] lg:group-hover:rotate-1"></div>
                        <p class="text-[13px] font-medium text-center z-10 px-[10px] line-clamp-2 mt-[15px] lg:mt-0">هدفون بلوتوثی اپل مدل AirPods Pro (2nd generation 2023)</p>
                        <div class="flex w-full px-[10px] items-center justify-between z-10 mt-[20px]">
                            <span class="w-[30px] h-[30px] rounded-full flex justify-center items-center bg-[#e10a0a] duration-300">
                                <p class="text-[12px] font-bold text-white duration-300">%8</p>
                            </span>
                            <span>
                                <div class="flex text-[#b9b9b9] text-[12px] lg:text-[13px] font-normal gap-1 ">
                                    <p class="line-through">22,749,000</p>
                                    <span>تومان</span>
                                </div>
                                <div class="flex text-[#e10b0b] duration-300 gap-1 text-[16px] lg:text-[20px] font-bold">
                                    <p>21,749,000</p>
                                    <span>تومان</span>
                                </div>
                            </span>
                        </div>
                    </a>
                    <a href="#" class="swiper-slide bg-white rounded-[10px] lg:rounded-[28px] !w-[181px] lg:!w-[240px] !h-[288px] lg:!h-[388px] relative group !flex !flex-col items-center gap-2 lg:gap-2.5 ">
                        <img class="w-[136px] lg:w-[179px] h-[136px] lg:h-[179px] lg:group-hover:-mt-[15px] duration-500 z-10 mt-0 lg:mt-[35px] relative object-contain" src="<?php echo THEME_DIR; ?>/src/img/PrdImages-pro.gif" alt="">
                        <div class="shadow-product hidden lg:block h-[0px] w-[180px] duration-500 lg:group-hover:mt-[18px] lg:group-hover:h-[32px] lg:group-hover:rotate-1"></div>
                        <p class="text-[13px] font-medium text-center z-10 px-[10px] line-clamp-2 mt-[15px] lg:mt-0">هدفون بلوتوثی اپل مدل AirPods Pro (2nd generation 2023)</p>
                        <div class="flex w-full px-[10px] items-center justify-between z-10 mt-[20px]">
                            <span class="w-[30px] h-[30px] rounded-full flex justify-center items-center bg-[#e10a0a] duration-300">
                                <p class="text-[12px] font-bold text-white duration-300">%8</p>
                            </span>
                            <span>
                                <div class="flex text-[#b9b9b9] text-[12px] lg:text-[13px] font-normal gap-1 ">
                                    <p class="line-through">22,749,000</p>
                                    <span>تومان</span>
                                </div>
                                <div class="flex text-[#e10b0b] duration-300 gap-1 text-[16px] lg:text-[20px] font-bold">
                                    <p>21,749,000</p>
                                    <span>تومان</span>
                                </div>
                            </span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-[#2a2a2a] h-auto">
        <div class="lg:w-[1024px] xl:w-[1280px] mx-auto h-[110px] lg:h-[160px] flex justify-center items-center">
            <div class="h-[52px] lg:h-[110px]">
            <img class="hidden lg:block w-full h-full" src="<?php echo THEME_DIR; ?>/src/img/bestSellsDesktop.png" alt="">
            <img class="block lg:hidden w-full h-full object-cover" src="<?php echo THEME_DIR; ?>/src/img/bestSellsMobile.png" alt="">
            </div>
        </div>
        <div class="relative flex w-full justify-center">
            <div class="absolute flex w-full flex-col items-center gap-[80px] ">
                <div class="h-[32px] w-full bg-line_Product "></div>
                <div class="h-[30px] w-full bg-line_Product opacity-90"></div>
                <div class="h-[28px] w-full bg-line_Product opacity-80"></div>
                <div class="h-[26px] w-full bg-line_Product opacity-70 hidden lg:block"></div>
            </div>
        </div>
        <div class="swiper swiper-card3 lg:w-[1024px] xl:w-[1280px] mx-auto h-[300px] lg:h-[410px] !px-[10px] lg:!px-0">
            <div class="swiper-wrapper !flex !justify-between">
                <a href="#" class="swiper-slide bg-white !w-[181px] lg:!w-[240px] !h-[278px] lg:!h-[388px] !flex !flex-col items-center rounded-[21px] relative">
                    <div class="relative w-[146px] lg:w-[200px] h-[146px] lg:h-[200px] lg:mt-4"><img class="w-full h-full" src="<?php echo THEME_DIR; ?>/src/img/PrdImages-515064d6-A05.jpeg" alt=""></div>
                    <p class="line-clamp-2 text-[13px] font-medium px-[10px] text-center mt-[10px] lg:mt-[25px]">گوشی موبایل سامسونگ مدل Galaxy A05s 4G دو سیم کارت ظرفیت 64 گیگابایت و رم 4 گیگابایت</p>
                    <div class="w-full px-[15px] flex justify-between items-center mt-[20px] lg:mt-[40px]">
                        <div class="w-[25px] lg:w-[34px] h-[25px] lg:h-[34px] bg-[#e10a0a] lg:text-[16px] text-[12px] font-bold lg:font-semibold text-white flex justify-center items-center rounded-full">
                            <p>%11</p>
                        </div>
                        <div class="flex flex-col items-end">
                            <p class="text-[14px] font-semibold text-[#a6a6a6] line-through">1,750,000 تومان</p>
                            <p class="text-[18px] font-bold text-[#e10a0a]">1,560,000 تومان</p>
                        </div>
                    </div>
                </a>
                <a href="#" class="swiper-slide bg-white !w-[181px] lg:!w-[240px] !h-[278px] lg:!h-[388px] !flex !flex-col items-center rounded-[21px] relative">
                    <div class="relative w-[146px] lg:w-[200px] h-[146px] lg:h-[200px] lg:mt-4"><img class="w-full h-full" src="<?php echo THEME_DIR; ?>/src/img/PrdImages-515064d6-A05.jpeg" alt=""></div>
                    <p class="line-clamp-2 text-[13px] font-medium px-[10px] text-center mt-[10px] lg:mt-[25px]">گوشی موبایل سامسونگ مدل Galaxy A05s 4G دو سیم کارت ظرفیت 64 گیگابایت و رم 4 گیگابایت</p>
                    <div class="w-full px-[15px] flex justify-between items-center mt-[20px] lg:mt-[40px]">
                        <div class="w-[25px] lg:w-[34px] h-[25px] lg:h-[34px] bg-[#e10a0a] lg:text-[16px] text-[12px] font-bold lg:font-semibold text-white flex justify-center items-center rounded-full">
                            <p>%11</p>
                        </div>
                        <div class="flex flex-col items-end">
                            <p class="text-[14px] font-semibold text-[#a6a6a6] line-through">1,750,000 تومان</p>
                            <p class="text-[18px] font-bold text-[#e10a0a]">1,560,000 تومان</p>
                        </div>
                    </div>
                </a>
                <a href="#" class="swiper-slide bg-white !w-[181px] lg:!w-[240px] !h-[278px] lg:!h-[388px] !flex !flex-col items-center rounded-[21px] relative">
                    <div class="relative w-[146px] lg:w-[200px] h-[146px] lg:h-[200px] lg:mt-4"><img class="w-full h-full" src="<?php echo THEME_DIR; ?>/src/img/PrdImages-515064d6-A05.jpeg" alt=""></div>
                    <p class="line-clamp-2 text-[13px] font-medium px-[10px] text-center mt-[10px] lg:mt-[25px]">گوشی موبایل سامسونگ مدل Galaxy A05s 4G دو سیم کارت ظرفیت 64 گیگابایت و رم 4 گیگابایت</p>
                    <div class="w-full px-[15px] flex justify-between items-center mt-[20px] lg:mt-[40px]">
                        <div class="w-[25px] lg:w-[34px] h-[25px] lg:h-[34px] bg-[#e10a0a] lg:text-[16px] text-[12px] font-bold lg:font-semibold text-white flex justify-center items-center rounded-full">
                            <p>%11</p>
                        </div>
                        <div class="flex flex-col items-end">
                            <p class="text-[14px] font-semibold text-[#a6a6a6] line-through">1,750,000 تومان</p>
                            <p class="text-[18px] font-bold text-[#e10a0a]">1,560,000 تومان</p>
                        </div>
                    </div>
                </a>
                <a href="#" class="swiper-slide bg-white !w-[181px] lg:!w-[240px] !h-[278px] lg:!h-[388px] !flex !flex-col items-center rounded-[21px] relative">
                    <div class="relative w-[146px] lg:w-[200px] h-[146px] lg:h-[200px] lg:mt-4"><img class="w-full h-full" src="<?php echo THEME_DIR; ?>/src/img/PrdImages-515064d6-A05.jpeg" alt=""></div>
                    <p class="line-clamp-2 text-[13px] font-medium px-[10px] text-center mt-[10px] lg:mt-[25px]">گوشی موبایل سامسونگ مدل Galaxy A05s 4G دو سیم کارت ظرفیت 64 گیگابایت و رم 4 گیگابایت</p>
                    <div class="w-full px-[15px] flex justify-between items-center mt-[20px] lg:mt-[40px]">
                        <div class="w-[25px] lg:w-[34px] h-[25px] lg:h-[34px] bg-[#e10a0a] lg:text-[16px] text-[12px] font-bold lg:font-semibold text-white flex justify-center items-center rounded-full">
                            <p>%11</p>
                        </div>
                        <div class="flex flex-col items-end">
                            <p class="text-[14px] font-semibold text-[#a6a6a6] line-through">1,750,000 تومان</p>
                            <p class="text-[18px] font-bold text-[#e10a0a]">1,560,000 تومان</p>
                        </div>
                    </div>
                </a>
                <a href="#" class="swiper-slide bg-white !w-[181px] lg:!w-[240px] !h-[278px] lg:!h-[388px] !flex !flex-col items-center rounded-[21px] relative">
                    <div class="relative w-[146px] lg:w-[200px] h-[146px] lg:h-[200px] lg:mt-4"><img class="w-full h-full" src="<?php echo THEME_DIR; ?>/src/img/PrdImages-515064d6-A05.jpeg" alt=""></div>
                    <p class="line-clamp-2 text-[13px] font-medium px-[10px] text-center mt-[10px] lg:mt-[25px]">گوشی موبایل سامسونگ مدل Galaxy A05s 4G دو سیم کارت ظرفیت 64 گیگابایت و رم 4 گیگابایت</p>
                    <div class="w-full px-[15px] flex justify-between items-center mt-[20px] lg:mt-[40px]">
                        <div class="w-[25px] lg:w-[34px] h-[25px] lg:h-[34px] bg-[#e10a0a] lg:text-[16px] text-[12px] font-bold lg:font-semibold text-white flex justify-center items-center rounded-full">
                            <p>%11</p>
                        </div>
                        <div class="flex flex-col items-end">
                            <p class="text-[14px] font-semibold text-[#a6a6a6] line-through">1,750,000 تومان</p>
                            <p class="text-[18px] font-bold text-[#e10a0a]">1,560,000 تومان</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="flex justify-center w-full pb-4 z-50">
            <div class="w-[252px] h-[48px] bg-[#e10a0a] rounded-[12px] text-white text-[14px] font-medium flex justify-center items-center">
                <p>مشاهده همه</p>
            </div>
        </div>
    </section>
    <div class="w-full h-[155px] flex flex-col gap-[20px]">
        <div class="h-[60px] flex items-center justify-center gap-3">
            <h3 class="text-[20px] font-normal text-[#888888]">برندهای برتر</h3>
        </div>
        <div class="!w-full lg:!w-[1024px] xl:!w-[1280px] mx-auto overflow-hidden h-[51px] justify-center px-[10px] lg:px-0">
            <div class="swiper !h-full swiper-title">
                <div class="w-full !h-full !flex swiper-wrapper">
                    <div class="swiper-slide !w-[141px] !h-[50px] overflow-hidden rounded-[8px]  border border-white px-[10px]">
                        <div class="relative mx-[20px] flex h-[50px] min-w-[120px] items-center justify-center">
                            <div class="relative h-[40px] min-w-[120px]">
                                <img alt="" loading="lazy" decoding="async" data-nimg="fill" class="px-4" style="position: absolute; height: 100%; width: 100%; inset: 0px; object-fit: contain; color: transparent;" sizes="120px" src="<?php echo THEME_DIR; ?>/src/img/DESKTOPSECTIONBANNER-samsung.png">
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide !w-[141px] !h-[50px] overflow-hidden rounded-[8px]  border border-white px-[10px]">
                        <div class="relative mx-[20px] flex h-[50px] min-w-[120px] items-center justify-center">
                            <div class="relative h-[40px] min-w-[120px]">
                                <img alt="" loading="lazy" decoding="async" data-nimg="fill" class="px-4" style="position: absolute; height: 100%; width: 100%; inset: 0px; object-fit: contain; color: transparent;" sizes="120px" src="<?php echo THEME_DIR; ?>/src/img/DESKTOPSECTIONBANNER-nokia.png">
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide !w-[141px] !h-[50px] overflow-hidden rounded-[8px]  border border-white px-[10px]">
                        <div class="relative mx-[20px] flex h-[50px] min-w-[120px] items-center justify-center">
                            <div class="relative h-[40px] min-w-[120px]">
                                <img alt="" loading="lazy" decoding="async" data-nimg="fill" class="px-4" style="position: absolute; height: 100%; width: 100%; inset: 0px; object-fit: contain; color: transparent;" sizes="120px" src="<?php echo THEME_DIR; ?>/src/img/DESKTOPSECTIONBANNER-e4942181-Apple.png">
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide !w-[141px] !h-[50px] overflow-hidden rounded-[8px]  border border-white px-[10px]">
                        <div class="relative mx-[20px] flex h-[50px] min-w-[120px] items-center justify-center">
                            <div class="relative h-[40px] min-w-[120px]">
                                <img alt="" loading="lazy" decoding="async" data-nimg="fill" class="px-4" style="position: absolute; height: 100%; width: 100%; inset: 0px; object-fit: contain; color: transparent;" sizes="120px" src="<?php echo THEME_DIR; ?>/src/img/DESKTOPSECTIONBANNER-san-disk.png">
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide !w-[141px] !h-[50px] overflow-hidden rounded-[8px]  border border-white px-[10px]">
                        <div class="relative mx-[20px] flex h-[50px] min-w-[120px] items-center justify-center">
                            <div class="relative h-[40px] min-w-[120px]">
                                <img alt="" loading="lazy" decoding="async" data-nimg="fill" class="px-4" style="position: absolute; height: 100%; width: 100%; inset: 0px; object-fit: contain; color: transparent;" sizes="120px" src="<?php echo THEME_DIR; ?>/src/img/DESKTOPSECTIONBANNER-Anker.png">
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide !w-[141px] !h-[50px] overflow-hidden rounded-[8px]  border border-white px-[10px]">
                        <div class="relative mx-[20px] flex h-[50px] min-w-[120px] items-center justify-center">
                            <div class="relative h-[40px] min-w-[120px]">
                                <img alt="" loading="lazy" decoding="async" data-nimg="fill" class="px-4" style="position: absolute; height: 100%; width: 100%; inset: 0px; object-fit: contain; color: transparent;" sizes="120px" src="<?php echo THEME_DIR; ?>/src/img/DESKTOPSECTIONBANNER-Razer.png">
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide !w-[141px] !h-[50px] overflow-hidden rounded-[8px]  border border-white px-[10px]">
                        <div class="relative mx-[20px] flex h-[50px] min-w-[120px] items-center justify-center">
                            <div class="relative h-[40px] min-w-[120px]">
                                <img alt="" loading="lazy" decoding="async" data-nimg="fill" class="px-4" style="position: absolute; height: 100%; width: 100%; inset: 0px; object-fit: contain; color: transparent;" sizes="120px" src="<?php echo THEME_DIR; ?>/src/img/DESKTOPSECTIONBANNER-Promate.png">
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide !w-[141px] !h-[50px] overflow-hidden rounded-[8px]  border border-white px-[10px]">
                        <div class="relative mx-[20px] flex h-[50px] min-w-[120px] items-center justify-center">
                            <div class="relative h-[40px] min-w-[120px]">
                                <img alt="" loading="lazy" decoding="async" data-nimg="fill" class="px-4" style="position: absolute; height: 100%; width: 100%; inset: 0px; object-fit: contain; color: transparent;" sizes="120px" src="<?php echo THEME_DIR; ?>/src/img/DESKTOPSECTIONBANNER-Jbl.png">
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide !w-[141px] !h-[50px] overflow-hidden rounded-[8px]  border border-white px-[10px]">
                        <div class="relative mx-[20px] flex h-[50px] min-w-[120px] items-center justify-center">
                            <div class="relative h-[40px] min-w-[120px]">
                                <img alt="" loading="lazy" decoding="async" data-nimg="fill" class="px-4" style="position: absolute; height: 100%; width: 100%; inset: 0px; object-fit: contain; color: transparent;" sizes="120px" src="<?php echo THEME_DIR; ?>/src/img/DESKTOPSECTIONBANNER-xiaomi.png">
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide !w-[141px] !h-[50px] overflow-hidden rounded-[8px]  border border-white px-[10px]">
                        <div class="relative mx-[20px] flex h-[50px] min-w-[120px] items-center justify-center">
                            <div class="relative h-[40px] min-w-[120px]">
                                <img alt="" loading="lazy" decoding="async" data-nimg="fill" class="px-4" style="position: absolute; height: 100%; width: 100%; inset: 0px; object-fit: contain; color: transparent;" sizes="120px" src="<?php echo THEME_DIR; ?>/src/img/DESKTOPSECTIONBANNER-harman.png">
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide !w-[141px] !h-[50px] overflow-hidden rounded-[8px]  border border-white px-[10px]">
                        <div class="relative mx-[20px] flex h-[50px] min-w-[120px] items-center justify-center">
                            <div class="relative h-[40px] min-w-[120px]">
                                <img alt="" loading="lazy" decoding="async" data-nimg="fill" class="px-4" style="position: absolute; height: 100%; width: 100%; inset: 0px; object-fit: contain; color: transparent;" sizes="120px" src="<?php echo THEME_DIR; ?>/src/img/DESKTOPSECTIONBANNER-sony.png">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="lg:w-[1024px] xl:w-[1280px] mx-auto mb-[16px] flex w-full flex-col items-center text-text-40 mt-2 px-[10px] lg:px-0">
        <div class="relative flex w-full flex-col items-center rounded-[16px] border border-[#e8eaed]">
            <div id="text-box" class="mb-[16px] mt-[16px] flex w-11/12 flex-col items-start overflow-hidden duration-75 h-[240px]">
                <div class=" flex w-full flex-col items-start">
                    <h1 class="mt-[16px] text-[14px] font-semibold"> خرید گوشی</h1>
                    <p class="mt-[8px] text-[14px] font-normal leading-[30px] lg:leading-[27px]">خرید گوشی و خرید اینترنتی گوشی در این روزها، می‌تواند زمان زیادی از شما بگیرد. در هنگام خرید گوشی موبایل باید به نکات متعددی مانند<!-- --> 
                        <a target="_blank" class="text-[#0085ff] underline underline-offset-4" rel="noopener noreferrer" href="#">خرید گوشی موبایل</a>، امکانات گوشی موبایل، ضمانت گوشی موبایل و رجیستری گوشی موبایل در کنار اصالت فروشگاه موبایل دقت کرد. مهم‌‎ترین عامل اثرگذار در تصمیم گیری ما، قیمت روز گوشی موبایل می‌باشد. شما می‌توانید از طریق خرید اینترنتی گوشی از<!-- --> 
                        <a target="_blank" class="text-[#0085ff] underline underline-offset-4" rel="noopener noreferrer" href="#">فروشگاه اینترنتی موبایل<!-- --> </a> <!-- -->یا خرید حضوری از شعب وی‌جی‌نا اقدام به خرید گوشی سامسونگ، خرید گوشی شیائومی و سایر برندها کنید.</p>
                    </div>
                    <div class=" flex w-full flex-col items-start">
                        <h2 class="mt-[16px] text-[19px] lg:text-[14px] font-semibold">فروشگاه اینترنتی موبایل</h2>
                        <p class="mt-[8px] text-[14px] font-normal leading-[30px] lg:leading-[27px]">خرید گوشی موبایل از فروشگاه اینترنتی موبایل، یکی از سریع‌ترین راه‌ها به شمار می‌آید. در زمان خرید اینترنتی گوشی موبایل، باید به نکاتی مانند نشان نماد الکترونیکی، پروتکل SSL و درگاه امن پرداخت فروشگاه اینترنتی توجه کنید. قبل از خرید موبایل، نظرات کاربران را بررسی کنید. این نظرات می‌تواند به شما درک بهتری از تجربه خرید دیگران و کیفیت سرویس‌دهی آن فروشگاه اینترنتی بدهد. مورد بعدی که می‌بایست به آن دقت شود اصالت کالای دیجیتال است.</p>
                    </div>
                    <div class=" flex w-full flex-col items-start">
                        <h2 class="mt-[16px] text-[19px] lg:text-[14px] font-semibold">خرید اقساطی گوشی</h2>
                        <p class="mt-[8px] text-[14px] font-normal leading-[30px] lg:leading-[27px]">این‌ روزها خرید اقساطی گوشی به دلیل نوسان قیمت گوشی موبایل بهترین راه خرید گوشی محسوب می‌شود. وی‌جی‌نا با فراهم کردن امکان خرید قسطی گوشی موبایل، خرید قسطی لپ تاپ و سایر کالاهای دیجیتال، شرایطی آسان را برای خرید جدیدترین محصولات دیجیتال فراهم کرده است. شما می‌توانید به دو روش حضوری و آنلاین گوشی مورد نظر خود را به صورت قسطی خریداری نمایید. در روش آنلاین کافیست به صفحه ویژه<!-- --> 
                            <a target="_blank" class="text-[#0085ff] underline underline-offset-4" rel="noopener noreferrer" href="#">خرید قسطی کالای دیجیتال</a> <!-- -->وی‌جی‌نا و برای خرید حضوری گوشی موبایل کافیست به یکی از شعب وی‌جی‌نا مراجعه کنید تا خرید خود را در سریعترین زمان ممکن و با شرایطی آسان انجام دهید.</p>
                        </div>
                        <div class=" flex w-full flex-col items-start">
                            <h2 class="mt-[16px] text-[19px] lg:text-[14px] font-semibold">خرید گوشی سامسونگ</h2>
                            <p class="mt-[8px] text-[14px] font-normal leading-[30px] lg:leading-[27px]">
                                <a target="_blank" class="text-[#0085ff] underline underline-offset-4" rel="noopener noreferrer" href="#">خرید گوشی سامسونگ</a> <!-- -->همیشه یکی از انتخاب‌های اول خریداران موبایل در ایران است. این محبوبیت به دلایل متعددی مثل به‌روزرسانی‌های نرم‌افزاری منظم گوشی‌های سامسونگ، امنیت و پشتیبانی قوی گوشی سامسونگ می‌باشد که خیال شما را تا سال‌ها راحت می‌کند. به‌عنوان مثال جدیدترین گوشی سامسونگ یعنی گلکسی اس ۲۴، گلکسی اس ۲۴ پلاس و گلکسی اس ۲۴ اولترا تا هفت سال پشتیبانی نرم‌افزاری دریافت خواهند کرد. اگر به‌دنبال خرید گوشی اقتصادی سامسونگ هستید یا انتخاب شما گوشی میان‌رده سامسونگ است و یا قصد خرید گوشی پرچمدار سامسونگ را دارید، وی‌جی‌نا خرید آنلاین گوشی موبایل سامسونگ و خرید حضوری گوشی موبایل سامسونگ را برای شما با قیمت مناسب و ضمانت معتبر فراهم کرده است.</p>
                            </div>
                            <div class=" flex w-full flex-col items-start">
                                <h2 class="mt-[16px] text-[19px] lg:text-[14px] font-semibold">خرید گوشی شیائومی<!-- --> </h2>
                                <p class="mt-[8px] text-[14px] font-normal leading-[30px] lg:leading-[27px]">شیائومی برندی است که کار خود را در چین آغاز کرد و خیلی زود به یکی از غول‌های تکنولوژی در دنیا تبدیل شد. گوشی‌ شیائومی همیشه به مناسب بودن قیمت معروف بوده‌ و خریداران معمولا برای خرید گوشی هوشمند با امکانات خوب و قیمت مناسب به سراغ این برند می‌روند؛ اما شیائومی تنها گوشی اقتصادی یا گوشی ارزان قیمت تولید نمی‌کند. چند سالی است که به گوشی های شیائومی، گوشی‌ پرچمدار نیز اضافه شده است تا این برند به رقیبی جدی برای گوشی آیفون و گوشی سری اس سامسونگ تبدیل شود.<!-- --> 
                                    <a target="_blank" class="text-[#0085ff] underline underline-offset-4" rel="noopener noreferrer" href="#">قیمت گوشی شیائومی</a> <!-- -->همانند سایر مدل‌ها در وی‌جی‌نا همواره به‌روز است و شما می‌توانید مدل دلخواه خود را با گارانتی ۱۸ ماهه معتبر خریداری کنید.</p>
                            </div>
                                <div class=" flex w-full flex-col items-start">
                                    <h2 class="mt-[16px] text-[19px] lg:text-[14px] font-semibold">خرید گوشی اپل </h2>
                                    <p class="mt-[8px] text-[14px] font-normal leading-[30px] lg:leading-[27px]">شرکت اپل با ورود به دنیای تلفن‌های همراه، معنای گوشی هوشمند را برای همه تعریف کرد. از سال ۲۰۰۷ که اولین آیفون معرفی شد، هر ساله کمپانی‌های بزرگ منتظر رونمایی آیفون جدید هستند تا قابلیت‌های جدید این گوشی را بررسی و مدلی قابل رقابتی را به بازار عرضه کنند.<!-- --> 
                                        <a target="_blank" class="text-[#0085ff] underline underline-offset-4" rel="noopener noreferrer" href="#">قیمت گوشی آیفون<!-- --> </a> <!-- -->همیشه از سایر برندها بالاتر بوده اما طرفدارانش معمولا تا سال‌ها به آن وفادار می‌مانند. از لیست قیمت آیفون در فروشگاه اینترنتی وی‌جی‌نا می‌توانید انواع گوشی آیفون از مدل‌های آیفون ۱۳ ، آیفون 13 پرو ، آیفون ۱۳ پرومکس گرفته تا آیفون SE را مشاهده کنید و با خیالی راحت از رجیستری آیفون و همینطور ۱۸ ماه ضمانت، آیفون مورد نظر خود را سفارش دهید.</p>
                                    </div>
                                    <div class=" flex w-full flex-col items-start"><h2 class="mt-[16px] text-[19px] lg:text-[14px] font-semibold">خرید گوشی هواوی </h2>
                                        <p class="mt-[8px] text-[14px] font-normal leading-[30px] lg:leading-[27px]">هواوی در طول سال‌های فعالیت خود ثابت کرده است که یکی از نوآوران عرصه تکنولوژی به حساب می‌آید. کاربران گوشی های هواوی می‌دانند که این برند حساسیت ویژه‌ای روی دوربین گوشی های خود دارد. فرقی نمی‌کند شما گوشی اقتصادی هواوی را داشته باشید یا گوشی میان رده هوآوی یا گوشی پرچمدار هواوی، همیشه می‌توانید از دوربین باکیفیت گوشی خود لذت ببرید.<!-- --> 
                                            <a target="_blank" class="text-[#0085ff] underline underline-offset-4" rel="noopener noreferrer" href="#">قیمت گوشی هواوی</a> <!-- -->را همیشه می‌توانید از صفحه گوشی هواوی در سایت وی‌جی‌نا مشاهده و با ضمانت معتبر بخرید.</p>
                                        </div>
                                        <div class=" flex w-full flex-col items-start">
                                            <h2 class="mt-[16px] text-[19px] lg:text-[14px] font-semibold">فروشگاه موبایل، کالای دیجیتال و لوازم جانبی وی‌جی‌نا</h2>
                                            <p class="mt-[8px] text-[14px] font-normal leading-[30px] lg:leading-[27px]">فروشگاه اینترنتی وی‌جی‌نا، اولین و بزرگترین فروشگاه اینترنتی و حضوری کالای دیجیتال در ایران است. از خرید گوشی موبایل یا خرید لپ ‌تاپ تا خرید اسپیکر یا خرید ساعت هوشمند را می‌توانید از فروشگاه اینترنتی وی‌جی‌نا انجام دهید. وی‌جی‌نا علاوه بر فروشگاه اینترنتی، امکان خرید حضوری از شعب خود (۱۰ شعبه در کشور) را فراهم کرده است. شما می‌توانید از یکی از دو روش ذکر شده انواع گوشی‌های سامسونگ، شیائومی، اپل، نوکیا، انواع تبلت، انواع لپتاپ، انواع<!-- --> 
                                                <a target="_blank" class="text-[#0085ff] underline underline-offset-4" rel="noopener noreferrer" href="#">هدفون و هندزفری<!-- --> </a>، انواع<!-- --> 
                                                <a target="_blank" class="text-[#0085ff] underline underline-offset-4" rel="noopener noreferrer" href="#">ساعت هوشمند<!-- --> </a>، انواع<!-- --> 
                                                <a target="_blank" class="text-[#0085ff] underline underline-offset-4" rel="noopener noreferrer" href="#">تلویزیون<!-- --> </a>، انواع<!-- --> 
                                                <a target="_blank" class="text-[#0085ff] underline underline-offset-4" rel="noopener noreferrer" href="#">اسپیکر<!-- --> </a> <!-- -->و<!-- --> <a target="_blank" class="text-[#0085ff] underline underline-offset-4" rel="noopener noreferrer" href="#">ساندبار<!-- --> </a>، گجت‌های هوشمند و سایر کالاهای دیجیتال را با بهترین قیمت و معتبر ترین گارانتی خریداری کنید. همچنین اگر قصد خرید اینترنتی را دارید می‌توانید تمامی کالاهای دیجیتال را در هر ساعتی از شبانه‌روز و با ارسال سریع از سایت وی‌جی‌نا سفارش دهید.</p>
                                            </div>
                                        </div>
                                        <div id="shadow1" class="absolute bottom-[16px] z-10 flex  w-full select-none flex-row items-end justify-start gap-[4px] px-[56px] text-[14px] duration-75 h-[140px] gradient-active text-[#0085ff]">
                                            <div id="show-all" class="flex items-center cursor-pointer">
                                                <span class="h-[20px] cursor-pointer font-semibold">مشاهده بیشتر</span>
                                                <span id="show-svg" class="h-[20px]  duration-75 -rotate-180 text-[#0085ff] ">
                                            </div>
                                            
                                                <span class="rotate-180">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M4 10L8 6L12 10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </span>
                                        </span>
                                    </div>
                                </div>
    </div>
    
    <?php
    get_footer();
    ?>