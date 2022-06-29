<div class="footer flex-shrink-0 bottom-0  w-full flex flex-wrap bg-BlueSapphire-500">
    <div class="footer__container-1 rounded-xl flex-1 text-CafeAuLait-800 bg-KhakiWeb-100 m-2 p-2">
        <div class="mx-2 my-3">
            <div class="mb-2">
                <h3 class="text-2xl font-semibold">
                    Contacts
                </h3>
            </div>
            <div class="mb-1">
                <span class="font-semibold">Address:</span>
                <span class="">8 Monaro Drive, D'Aguilar, Queensland, 4514 Australia </span>
            </div>
            <div class="mb-1">
                <span class="font-semibold">Tel:</span>
                <span class="">(03) 5353 6078 </span>
            </div>
            <div class="mb-1">
                <span class="font-semibold">Email:</span>
                <span class="">aaron.dalao@example.com</span>
            </div>


        </div>
    </div>

    <div class="footer__container-2  rounded-xl flex-1 text-CafeAuLait-800 bg-KhakiWeb-100 m-2 p-2">
        <div class="mx-2 my-3">
            <div class="mb-2">
                <h3 class="text-2xl font-semibold">
                    About me
                </h3>
            </div>

            <div class="">
                <p class="">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae enim eget sem interdum vehicula
                    non id tellus. Phasellus aliquam arcu ante, ac ullamcorper sem maximus at. Donec euismod blandit
                    lacus sed pharetra. Quisque imperdiet nisi elit, id consequat lectus viverra quis.
                </p>
            </div>
        </div>
    </div>

    <div class="footer__container-3 rounded-xl flex-1 text-CafeAuLait-800 bg-KhakiWeb-100 m-2 p-2">
        <div class="mx-2 my-3">
            <div class="mb-2">
                <h3 class="text-2xl font-semibold">
                    Socials
                </h3>
            </div>
            <div class="mb-3 pb-3">
                <a href="https://www.linkedin.com/in/aaron-john-dave-garcia-dalao/"
                   class="transition ease-in-out delay-100 hover:bg-blue-100 hover:text-CafeAuLait-300 duration-200 hover:shadow-inner">
                    <i class="fa-brands fa-linkedin  fa-xl"></i>
                </a>
                <a href="https://github.com/aarondalao?tab=repositories"
                   class="transition ease-in-out delay-100 hover:bg-blue-100 hover:text-CafeAuLait-300 duration-200 hover:shadow-inner">
                    <i class="fa-brands fa-github  fa-xl"></i>
                </a>
                <a href="https://www.facebook.com/"
                   class="transition ease-in-out delay-100 hover:bg-blue-100 hover:text-CafeAuLait-300 duration-200 hover:shadow-inner">
                    <i
                        class="fa-brands fa-facebook fa-xl"></i>
                </a
                ><a href="https://www.instagram.com/"
                    class="transition ease-in-out delay-100 hover:bg-blue-100 hover:text-CafeAuLait-300 duration-200 hover:shadow-inner">
                    <i class="fa-brands fa-instagram-square fa-xl"></i>
                </a>
            </div>

            <div class="mt-2">
                <form action="">
                    <label for=""><strong> Sign up for emailist</strong></label>
                    <input type="email">
                    <button
                        class="p-2 rounded-md bg-PewterBlue-500 transition ease-in-out delay-100 hover:bg-blue-100
                        hover:text-stone-600 duration-200 hover:shadow-inner"
                        type="submit">Sign me up
                    </button>
                </form>
            </div>
        </div>
    </div>


    <div class="w-full m-2 p-2  ">
        <div class="mx-auto my-2 p3 w-full">
            <div class="w-52 mx-auto text-CafeAuLait-200 text-center">
                <ul class="">
                    {{--  Privacy policy and sitemaps links not working          --}}
                    <a href="">
                        <div
                            class="transition ease-in-out delay-100 hover:bg-blue-100 hover:text-CafeAuLait-300 duration-200 hover:shadow-inner">
                            <li class="">Privacy Policy</li>
                        </div>
                    </a>
                    <a href="">
                        <div
                            class="transition ease-in-out delay-100 hover:bg-blue-100 hover:text-CafeAuLait-300 duration-200 hover:shadow-inner">
                            <li class="">Sitemap</li>
                        </div>
                    </a>
                    <a href="{{ route('termsOfUse') }}">
                        <div
                            class="transition ease-in-out delay-100 hover:bg-blue-100 hover:text-CafeAuLait-300 duration-200 hover:shadow-inner">
                            <li class="">Terms of Use</li>
                        </div>
                    </a>
                    <li class="my-6"> &copy; Aaron Dalao/Adrian Gould All rights reserved.</li>
                </ul>
            </div>
            <div class="">
                <span class="font-semibold"></span>
            </div>
        </div>
    </div>
</div>
