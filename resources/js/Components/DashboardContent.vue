<template>
    <div>
        <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
            <div>
                <jet-application-logo class="block h-12 w-auto" />
            </div>

            <div class="mt-8 text-2xl">Welcome to your Miac application!</div>
        </div>

        <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">
            <div class="p-6">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-miac" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>

                    <div
                        class="
                            ml-4
                            text-lg text-gray-600
                            leading-7
                            font-semibold
                        "
                    >
                        <Link :href="route('infos.index')">Informazioni - Gestione Home page</Link>
                    </div>
                </div>

                <div class="ml-12">
                    <Link href="#nogo">
                        <div
                            class="
                                mt-3
                                flex
                                items-center
                                text-sm
                                font-semibold
                                text-green-miac
                            "
                        >
                            <div>Aggiungi, modifica e cancella</div>

                            <div class="ml-1 text-green-miac">
                                <svg
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                    class="w-4 h-4"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd"
                                    ></path>
                                </svg>
                            </div>
                        </div>
                    </Link>
                </div>
            </div>

            <div class="p-6 border-t border-gray-200 md:border-t-0 md:border-l">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-green-miac"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                    </svg>
                    <div
                        class="
                            ml-4
                            text-lg text-gray-600
                            leading-7
                            font-semibold
                        "
                    >
                        <Link :href="route('district')">Province</Link>
                    </div>
                </div>

                <div class="ml-12">
                    <Link :href="route('district')">
                        <div
                            class="
                                mt-3
                                flex
                                items-center
                                text-sm
                                font-semibold
                                text-green-miac
                            "
                        >
                            <div>Aggiungi, modifica e cancella</div>

                            <div class="ml-1 text-green-miac">
                                <svg
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                    class="w-4 h-4"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd"
                                    ></path>
                                </svg>
                            </div>
                        </div>
                    </Link>
                </div>
            </div>

            <div class="p-6 border-t border-gray-200">
                <div class="flex items-center">
                    <svg class="w-8 h-8 text-green-miac" viewBox="0 0 61 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0)">
                            <path d="M54.9688 54.673L55.7323 28.891L29.7748 12.2085L3.81738 28.891L4.58084 54.673H54.9688Z" stroke="#34A300" stroke-width="2.5" stroke-miterlimit="10"/>
                            <path d="M0.763428 21.9289L29.7747 2.59242L59.5 22.5" stroke="#34A300" stroke-width="2.5" stroke-miterlimit="10" stroke-linecap="round"/>
                            <path d="M43.1352 29.8389H16.4143V46.1422H43.1352V29.8389Z" stroke="#34A300" stroke-width="2" stroke-miterlimit="10"/>
                            <path d="M16.4143 29.8389L43.1352 46.1422" stroke="#34A300" stroke-width="2" stroke-miterlimit="10"/>
                            <path d="M16.4143 46.1422L43.1352 29.8389" stroke="#34A300" stroke-width="2" stroke-miterlimit="10"/>
                        </g>
                        <defs>
                        <clipPath id="clip0">
                        <rect width="61" height="56" fill="white"/>
                        </clipPath>
                        </defs>
                    </svg>
                    <div
                        class="
                            ml-4
                            text-lg text-gray-600
                            leading-7
                            font-semibold
                        "
                    >
                        <Link :href="route('companies')">Aziende</Link>
                    </div>
                </div>

                <div class="ml-12">
                    <Link :href="route('companies')">
                        <div
                            class="
                                mt-3
                                flex
                                items-center
                                text-sm
                                font-semibold
                                text-green-miac
                            "
                        >
                            <div>Aggiungi, modifica e cancella</div>

                            <div class="ml-1 text-green-miac">
                                <svg
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                    class="w-4 h-4"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd"
                                    ></path>
                                </svg>
                            </div>
                        </div>
                    </Link>
                </div>
            </div>

            <div class="p-6 border-t border-gray-200 md:border-l">
                <div class="flex items-center">
                    <svg class="w-8 h-8 text-gray-600" viewBox="0 0 60 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M27.743 2.75082C28.6508 0.416393 32.0862 0.416393 32.9968 2.75082L38.8691 18.6106C39.2804 19.6616 40.3272 20.3614 41.496 20.3614H55.9269C58.5935 20.3614 59.7566 23.5975 57.6602 25.1824L47.3909 34.1909C46.9309 34.5357 46.5947 35.0137 46.4306 35.5563C46.2665 36.099 46.2829 36.6783 46.4774 37.2113L50.2277 52.7087C51.1412 55.198 48.1852 57.3361 45.9498 55.8038L32.0011 47.1741C31.5234 46.8468 30.9538 46.6711 30.3699 46.6711C29.7861 46.6711 29.2164 46.8468 28.7387 47.1741L14.79 55.8038C12.5575 57.3361 9.59864 55.1953 10.5121 52.7087L14.2624 37.2113C14.4569 36.6783 14.4733 36.099 14.3092 35.5563C14.1451 35.0137 13.8089 34.5357 13.3489 34.1909L3.0796 25.1824C0.980343 23.5975 2.14912 20.3614 4.81006 20.3614H19.241C19.8092 20.3632 20.3646 20.1968 20.8337 19.8842C21.3027 19.5715 21.6634 19.1274 21.8679 18.6106L27.7402 2.75082H27.743Z" stroke="#34A300" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <div
                        class="
                            ml-4
                            text-lg text-gray-600
                            leading-7
                            font-semibold
                        "
                    >
                        <Link :href="route('projects')">Progetti</Link>
                    </div>
                </div>

                <div class="ml-12">
                    <Link :href="route('projects')">
                        <div
                            class="
                                mt-3
                                flex
                                items-center
                                text-sm
                                font-semibold
                                text-green-miac
                            "
                        >
                            <div>Aggiungi, modifica e cancella</div>

                            <div class="ml-1 text-green-miac">
                                <svg
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                    class="w-4 h-4"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd"
                                    ></path>
                                </svg>
                            </div>
                        </div>
                    </Link>
                </div>
            </div>

            <div class="p-6 border-t border-gray-200">
                <div class="flex items-center">
                    <svg class="w-8 h-8 text-gray-600" viewBox="0 0 64 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 42.1702L22.1646 10.1796L27.8903 16.3823L36.8523 3L61 42.7562H2V42.1702Z" stroke="#34A300" stroke-width="2.5" stroke-miterlimit="10"/>
                        <path d="M13.2026 25.7109L19.1275 27.9086L27.3925 23.9526L34.4127 28.3482L40.1385 23.9526L48.6026 27.0784L50.0465 26.1504" stroke="#34A300" stroke-width="2.5" stroke-miterlimit="10"/>
                    </svg>
                    <div
                        class="
                            ml-4
                            text-lg text-gray-600
                            leading-7
                            font-semibold
                        "
                    >
                        <Link :href="route('territories')">Territori</Link>
                    </div>
                </div>

                <div class="ml-12">
                    <Link :href="route('territories')">
                        <div
                            class="
                                mt-3
                                flex
                                items-center
                                text-sm
                                font-semibold
                                text-green-miac
                            "
                        >
                            <div>Aggiungi, modifica e cancella</div>

                            <div class="ml-1 text-green-miac">
                                <svg
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                    class="w-4 h-4"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd"
                                    ></path>
                                </svg>
                            </div>
                        </div>
                    </Link>
                </div>
            </div>

            <div class="p-6 border-t border-gray-200 md:border-l">
                <div class="flex items-center">
                   <svg
                        class="w-8 h-8 text-gray-600"
                        viewBox="0 0 60 59"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <g clip-path="url(#clip0)">
                            <path
                                d="M58.7904 30.8794H1.20972V41.8179H58.7904V30.8794Z"
                                stroke="#34A300"
                                stroke-width="2.5"
                                stroke-miterlimit="10"
                            />
                            <path
                                d="M9.00003 38.6719C10.1224 38.6719 11.0323 37.7617 11.0323 36.639C11.0323 35.5164 10.1224 34.6062 9.00003 34.6062C7.87765 34.6062 6.96777 35.5164 6.96777 36.639C6.96777 37.7617 7.87765 38.6719 9.00003 38.6719Z"
                                fill="#34A300"
                            />
                            <path
                                d="M50.4195 38.6719C51.5419 38.6719 52.4517 37.7617 52.4517 36.639C52.4517 35.5164 51.5419 34.6062 50.4195 34.6062C49.2971 34.6062 48.3872 35.5164 48.3872 36.639C48.3872 37.7617 49.2971 38.6719 50.4195 38.6719Z"
                                fill="#34A300"
                            />
                            <path
                                d="M58.7904 46.8515H1.20972V57.79H58.7904V46.8515Z"
                                stroke="#34A300"
                                stroke-width="2.5"
                                stroke-miterlimit="10"
                            />
                            <path
                                d="M9.00003 54.644C10.1224 54.644 11.0323 53.7338 11.0323 52.6112C11.0323 51.4885 10.1224 50.5783 9.00003 50.5783C7.87765 50.5783 6.96777 51.4885 6.96777 52.6112C6.96777 53.7338 7.87765 54.644 9.00003 54.644Z"
                                fill="#34A300"
                            />
                            <path
                                d="M50.4195 54.644C51.5419 54.644 52.4517 53.7338 52.4517 52.6112C52.4517 51.4885 51.5419 50.5783 50.4195 50.5783C49.2971 50.5783 48.3872 51.4885 48.3872 52.6112C48.3872 53.7338 49.2971 54.644 50.4195 54.644Z"
                                fill="#34A300"
                            />
                            <path
                                d="M8.70962 30.8794C8.70962 30.8794 6.04833 16.2141 13.1128 8.61526C13.1128 8.61526 27.7741 12.5357 32.9516 30.8794"
                                stroke="#34A300"
                                stroke-width="2"
                                stroke-miterlimit="10"
                            />
                            <path
                                d="M16.7902 30.8794L13.1128 8.61526C13.1128 8.61526 22.7902 22.0706 25.1612 30.8794"
                                stroke="#34A300"
                                stroke-width="2"
                                stroke-miterlimit="10"
                                stroke-linejoin="round"
                            />
                            <path
                                d="M8.66138 18.8761C8.66138 18.8761 12.0001 18.8277 23.2259 14.6169"
                                stroke="#34A300"
                                stroke-width="2"
                                stroke-miterlimit="10"
                            />
                            <path
                                d="M8.66138 28.653C8.66138 28.653 19.5969 23.813 29.6614 22.7482"
                                stroke="#34A300"
                                stroke-width="2"
                                stroke-miterlimit="10"
                            />
                            <path
                                d="M54.3872 30.9762C54.3872 30.9762 58.113 9.48646 49.984 1.35521C49.984 1.35521 35.3227 5.27563 30.1453 23.6194"
                                stroke="#34A300"
                                stroke-width="2"
                                stroke-miterlimit="10"
                            />
                            <path
                                d="M46.016 30.9762L50.0322 1.35521C50.0322 1.35521 37.6451 19.6505 35.8547 30.9762"
                                stroke="#34A300"
                                stroke-width="2"
                                stroke-miterlimit="10"
                                stroke-linejoin="round"
                            />
                            <path
                                d="M54.4839 11.6161C54.4839 11.6161 51.1452 11.5677 39.9194 7.35686"
                                stroke="#34A300"
                                stroke-width="2"
                                stroke-miterlimit="10"
                            />
                            <path
                                d="M55.1613 21.393C55.1613 21.393 43.5 16.5529 33.4839 15.4881"
                                stroke="#34A300"
                                stroke-width="2"
                                stroke-miterlimit="10"
                            />
                            <path
                                d="M30.6292 22.1673C30.6292 22.1673 43.1614 28.5078 54.7259 28.653"
                                stroke="#34A300"
                                stroke-width="2"
                                stroke-miterlimit="10"
                            />
                        </g>
                        <defs>
                            <clipPath id="clip0">
                                <rect width="60" height="59" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                    <div
                        class="
                            ml-4
                            text-lg text-gray-600
                            leading-7
                            font-semibold
                        "
                    >
                        <Link :href="route('products.index')">Prodotti</Link>
                    </div>
                </div>

                <div class="ml-12">
                    <Link :href="route('products.index')">
                        <div
                            class="
                                mt-3
                                flex
                                items-center
                                text-sm
                                font-semibold
                                text-green-miac
                            "
                        >
                            <div>Aggiungi, modifica e cancella</div>

                            <div class="ml-1 text-green-miac">
                                <svg
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                    class="w-4 h-4"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd"
                                    ></path>
                                </svg>
                            </div>
                        </div>
                    </Link>
                </div>
            </div>

            <div class="p-6 border-t border-gray-200">
                <div class="flex items-center">
                    <svg class="w-8 h-8 text-gray-600" viewBox="0 0 65 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0)">
                        <path d="M25.3566 21.5228C21.9709 29.6117 15.7038 34.6942 11.3337 32.8807C6.96352 31.0673 6.14712 23.0738 9.53279 14.9848C12.1501 8.7332 15.3436 1.07376 15.3436 1.07376L31.4316 7.51628C31.4316 7.51628 28.7422 13.4338 25.3566 21.5228Z" stroke="#34A300" stroke-width="2" stroke-miterlimit="10"/>
                        <path d="M10.5413 12.551L26.5091 18.7787" stroke="#34A300" stroke-width="2" stroke-miterlimit="10"/>
                        <path d="M17.3847 23.1692C18.0477 23.1692 18.5853 22.635 18.5853 21.9761C18.5853 21.3172 18.0477 20.7831 17.3847 20.7831C16.7216 20.7831 16.1841 21.3172 16.1841 21.9761C16.1841 22.635 16.7216 23.1692 17.3847 23.1692Z" fill="#34A300"/>
                        <path d="M13.6628 27.4642C14.5248 27.4642 15.2236 26.7698 15.2236 25.9132C15.2236 25.0567 14.5248 24.3623 13.6628 24.3623C12.8008 24.3623 12.1021 25.0567 12.1021 25.9132C12.1021 26.7698 12.8008 27.4642 13.6628 27.4642Z" fill="#34A300"/>
                        <path d="M18.1049 5.98915L15.9438 10.5228" stroke="#34A300" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"/>
                        <path d="M10.8295 34L5.13867 46.9566" stroke="#34A300" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"/>
                        <path d="M1 46.3579L5 47.8579L9 49.3579" stroke="#34A300" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"/>
                        <path d="M39.9075 28.0846C43.1971 36.1974 49.4162 41.3514 53.8103 39.5857C58.2045 37.82 59.0929 29.8265 55.8033 21.7137C53.2581 15.4382 50.1365 7.75488 50.1365 7.75488L33.9766 14.0065C33.9766 14.0065 36.6179 19.9718 39.9075 28.0846Z" stroke="#34A300" stroke-width="2" stroke-miterlimit="10"/>
                        <path d="M54.7949 19.2798L38.7791 25.3406" stroke="#34A300" stroke-width="2" stroke-miterlimit="10"/>
                        <path d="M47.8556 29.8265C48.5187 29.8265 49.0562 29.2923 49.0562 28.6334C49.0562 27.9745 48.5187 27.4403 47.8556 27.4403C47.1926 27.4403 46.655 27.9745 46.655 28.6334C46.655 29.2923 47.1926 29.8265 47.8556 29.8265Z" fill="#34A300"/>
                        <path d="M51.5293 34.1692C52.3913 34.1692 53.09 33.4748 53.09 32.6182C53.09 31.7616 52.3913 31.0672 51.5293 31.0672C50.6673 31.0672 49.9685 31.7616 49.9685 32.6182C49.9685 33.4748 50.6673 34.1692 51.5293 34.1692Z" fill="#34A300"/>
                        <path d="M47.3032 12.6464L49.4163 17.2039" stroke="#34A300" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"/>
                        <path d="M54.2908 39.3709L59.8375 52.3753" stroke="#34A300" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"/>
                        <path d="M64 51L56 54" stroke="#34A300" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"/>
                        </g>
                        <defs>
                        <clipPath id="clip0">
                        <rect width="65" height="55" fill="white"/>
                        </clipPath>
                        </defs>
                    </svg>

                    <div
                        class="
                            ml-4
                            text-lg text-gray-600
                            leading-7
                            font-semibold
                        "
                    >
                        <Link :href="route('events')">Eventi - Iniziative</Link>
                    </div>
                </div>

                <div class="ml-12">
                    <Link :href="route('events')">
                        <div
                            class="
                                mt-3
                                flex
                                items-center
                                text-sm
                                font-semibold
                                text-green-miac
                            "
                        >
                            <div>Aggiungi, modifica e cancella</div>
                            <div class="ml-1 text-green-miac">
                                <svg
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                    class="w-4 h-4"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd"
                                    ></path>
                                </svg>
                            </div>
                        </div>
                    </Link>
                </div>
            </div>

            <div class="p-6 border-t border-gray-200 md:border-l">
                <div class="flex items-center">
                    <svg class="w-8 h-8 text-gray-600" viewBox="0 0 49 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23.7531 51.1667C25.3129 52.7265 25.4136 55.343 22.3442 58.4627C19.2748 61.5824 12.5322 62.4881 12.5322 62.4881C12.5322 62.4881 13.6392 55.9972 16.7589 52.8775C19.8786 49.7578 22.2435 49.6571 23.7531 51.1667Z" stroke="#34A300" stroke-width="2" stroke-miterlimit="10"/>
                        <path d="M28.3324 50.8649C26.7726 52.4247 26.6719 55.0413 29.7413 58.161C32.8107 61.2807 39.5533 62.1864 39.5533 62.1864C39.5533 62.1864 38.4966 55.6954 35.3769 52.5757C32.2572 49.456 29.8923 49.3554 28.3324 50.8649Z" stroke="#34A300" stroke-width="2" stroke-miterlimit="10"/>
                        <path d="M11.2242 24.448V32.5995H39.8046V23.9952C39.8046 23.9952 50.0191 22.5863 46.5472 12.1202C46.5472 12.1202 42.3708 4.47192 34.2194 7.49098C34.2194 7.49098 31.2003 1 24.4577 1C17.7152 1 14.4948 4.72351 14.042 6.58526C14.042 6.58526 9.16116 4.01906 5.68924 6.58526C2.21732 9.15147 1.26128 10.51 1.00969 14.938C0.758103 19.366 5.43765 24.2468 11.2242 24.448Z" stroke="#34A300" stroke-width="2" stroke-miterlimit="10"/>
                        <path d="M39.4523 32.9517C39.4523 40.6 33.1626 46.789 25.4136 46.789C17.6647 46.789 11.375 40.6 11.375 32.9517" stroke="#34A300" stroke-width="2" stroke-miterlimit="10"/>
                    </svg>

                    <div
                        class="
                            ml-4
                            text-lg text-gray-600
                            leading-7
                            font-semibold
                        "
                    >
                        <Link :href="route('recipes')">Ricette</Link>
                    </div>
                </div>

                <div class="ml-12">
                    <Link :href="route('recipes')">
                        <div
                            class="
                                mt-3
                                flex
                                items-center
                                text-sm
                                font-semibold
                                text-green-miac
                            "
                        >
                            <div>Aggiungi, modifica e cancella</div>
                            <div class="ml-1 text-green-miac">
                                <svg
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                    class="w-4 h-4"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd"
                                    ></path>
                                </svg>
                            </div>
                        </div>
                    </Link>
                </div>
            </div>

            <div class="p-6 border-t border-gray-200">
                <div class="flex items-center">
                    <svg  class="w-8 h-8 text-gray-600" viewBox="0 0 59 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.7769 56.8734C8.89783 52.8391 2 43.4259 2 32.4438C2 18.2679 13.5743 6.66951 28.1884 5.88507" stroke="#34A300" stroke-width="2.5" stroke-miterlimit="10" stroke-linecap="round"/>
                        <path d="M23.9794 12.1045L22.8688 11.208L27.6037 6.05316L21.875 1.85084L22.8103 0.730225L31.0461 5.70181L23.9794 12.1045Z" fill="#34A300"/>
                        <path d="M42.2758 8.68658C51.3365 13.057 57.5328 22.078 57.5328 32.4438C57.5328 46.6196 45.9585 58.2181 31.3445 59.0025" stroke="#34A300" stroke-width="2.5" stroke-miterlimit="10" stroke-linecap="round"/>
                        <path d="M35.5538 52.783L36.6645 53.6795L31.9295 58.8344L37.6582 63.0368L36.7229 64.1574L28.9712 58.8344L35.5538 52.783Z" fill="#34A300"/>
                        <path d="M26.8555 47.4114C26.8555 47.4114 31.4308 34.2548 41.6907 31.0653" stroke="#34A300" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"/>
                        <path d="M29.2815 42.0957C29.2815 42.0957 25.9539 27.4107 37.9469 26.0153C37.9469 26.0153 46.8204 25.5502 49.4547 25.5502C49.4547 25.5502 47.3057 27.6101 45.8499 33.391C44.3941 39.172 40.5119 44.4213 29.2815 42.0957Z" stroke="#34A300" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"/>
                        <path d="M10.3562 21.8955C10.3562 21.8955 11.9506 27.012 13.6837 29.7364C15.0009 31.7298 20.1308 35.2516 24.2209 33.391C28.311 31.5305 24.2209 23.4903 20.8934 22.8258C17.5658 22.0949 10.3562 21.8955 10.3562 21.8955Z" stroke="#34A300" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"/>
                        <path d="M19.6455 28.0752C19.6455 28.0752 29.2122 36.4476 29.6282 41.2319" stroke="#34A300" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"/>
                    </svg>

                    <div
                        class="
                            ml-4
                            text-lg text-gray-600
                            leading-7
                            font-semibold
                        "
                    >
                        <Link :href="route('values')">Valori</Link>
                    </div>
                </div>


                <div class="ml-12">
                    <Link :href="route('values')">
                        <div
                            class="
                                mt-3
                                flex
                                items-center
                                text-sm
                                font-semibold
                                text-green-miac
                            "
                        >
                            <div>Aggiungi, modifica e cancella</div>
                            <div class="ml-1 text-green-miac">
                                <svg
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                    class="w-4 h-4"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd"
                                    ></path>
                                </svg>
                            </div>
                        </div>
                    </Link>
                </div>
            </div>

            <div class="p-6 border-t border-gray-200">
                <div class="flex items-center">
                    <svg  class="w-8 h-8 text-gray-600" viewBox="0 0 59 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.7769 56.8734C8.89783 52.8391 2 43.4259 2 32.4438C2 18.2679 13.5743 6.66951 28.1884 5.88507" stroke="#34A300" stroke-width="2.5" stroke-miterlimit="10" stroke-linecap="round"/>
                        <path d="M23.9794 12.1045L22.8688 11.208L27.6037 6.05316L21.875 1.85084L22.8103 0.730225L31.0461 5.70181L23.9794 12.1045Z" fill="#34A300"/>
                        <path d="M42.2758 8.68658C51.3365 13.057 57.5328 22.078 57.5328 32.4438C57.5328 46.6196 45.9585 58.2181 31.3445 59.0025" stroke="#34A300" stroke-width="2.5" stroke-miterlimit="10" stroke-linecap="round"/>
                        <path d="M35.5538 52.783L36.6645 53.6795L31.9295 58.8344L37.6582 63.0368L36.7229 64.1574L28.9712 58.8344L35.5538 52.783Z" fill="#34A300"/>
                        <path d="M26.8555 47.4114C26.8555 47.4114 31.4308 34.2548 41.6907 31.0653" stroke="#34A300" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"/>
                        <path d="M29.2815 42.0957C29.2815 42.0957 25.9539 27.4107 37.9469 26.0153C37.9469 26.0153 46.8204 25.5502 49.4547 25.5502C49.4547 25.5502 47.3057 27.6101 45.8499 33.391C44.3941 39.172 40.5119 44.4213 29.2815 42.0957Z" stroke="#34A300" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"/>
                        <path d="M10.3562 21.8955C10.3562 21.8955 11.9506 27.012 13.6837 29.7364C15.0009 31.7298 20.1308 35.2516 24.2209 33.391C28.311 31.5305 24.2209 23.4903 20.8934 22.8258C17.5658 22.0949 10.3562 21.8955 10.3562 21.8955Z" stroke="#34A300" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"/>
                        <path d="M19.6455 28.0752C19.6455 28.0752 29.2122 36.4476 29.6282 41.2319" stroke="#34A300" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"/>
                    </svg>

                    <div
                        class="
                            ml-4
                            text-lg text-gray-600
                            leading-7
                            font-semibold
                        "
                    >
                        <Link :href="route('media.index')">Media</Link>
                    </div>
                </div>


                <div class="ml-12">
                    <Link :href="route('media.index')">
                        <div
                            class="
                                mt-3
                                flex
                                items-center
                                text-sm
                                font-semibold
                                text-green-miac
                            "
                        >
                            <div>Aggiungi, modifica e cancella</div>
                            <div class="ml-1 text-green-miac">
                                <svg
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                    class="w-4 h-4"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd"
                                    ></path>
                                </svg>
                            </div>
                        </div>
                    </Link>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { defineComponent } from "vue";
import JetApplicationLogo from "@/Jetstream/ApplicationLogo.vue";
import { Link } from '@inertiajs/inertia-vue3';

export default defineComponent({
    components: {
        JetApplicationLogo, Link
    },
});
</script>
