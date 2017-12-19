<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="{{mix('/css/app.css')}}" rel="stylesheet" type="text/css">       
    </head>
    <body class="font-sans bg-grey-lighter">

        <!-- Start Navigation-->
        <div class="">
            <!--Top Nav-->
            <div class="bg-blue-dark">            
                <div class="container mx-auto px-4">
                    <div class="flex items-center py-4 sm:justify-between">
                        <div class="w-1/4 sm:hidden">  
                            <svg class="fill-current text-white h-10 w-10" version="1.1" id="Menu" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
                            <path d="M16.4,9H3.6C3.048,9,3,9.447,3,10c0,0.553,0.048,1,0.6,1h12.8c0.552,0,0.6-0.447,0.6-1S16.952,9,16.4,9z
                                M16.4,13H3.6C3.048,13,3,13.447,3,14c0,0.553,0.048,1,0.6,1h12.8c0.552,0,0.6-0.447,0.6-1S16.952,13,16.4,13z M3.6,7h12.8
                                C16.952,7,17,6.553,17,6s-0.048-1-0.6-1H3.6C3.048,5,3,5.447,3,6S3.048,7,3.6,7z"/>
                            </svg>
                        </div>
                        <div class="w-1/2 sm:w-auto text-center text-white text-2xl font-medium">
                            Cointoad
                        </div>
                        <div class="w-1/4 sm:w-auto sm:flex text-right">
                            <div class="flex">
                                <img class="h-8 w-8 rounded-full inline-block" src="https://avatars0.githubusercontent.com/u/4724832?s=460&v=4" alt="">
                            </div>
                            <div class="hidden sm:block sm:flex sm:items-center ml-2">
                                <span class="text-white text-sm mr-1">Adam Huang </span>
                                <div>
                                    <svg class="fill-current text-white h-4 w-4 block opacity-50" version="1.1" id="Chevron_small_down" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                        y="0px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
                                    <path d="M13.418,7.859c0.271-0.268,0.709-0.268,0.978,0c0.27,0.268,0.272,0.701,0,0.969l-3.908,3.83
                                        c-0.27,0.268-0.707,0.268-0.979,0l-3.908-3.83c-0.27-0.267-0.27-0.701,0-0.969c0.271-0.268,0.709-0.268,0.978,0L10,11L13.418,7.859z
                                        "/>
                                    </svg>                                                                                        
                                </div>
                            </div>                      
                        </div>
                    </div>
                </div>
            </div>

            <!-- Secondary nav-->
           <div class="hidden bg-blue-dark sm:block sm:bg-white sm:border-b">
                <div class="container mx-auto px-4">
                    <div class="sm:flex">
                        <div class="flex -mb-px mr-6">
                            <a href="#" class="no-underline text-white sm:text-blue-dark flex items-center py-4 border-b border-blue-dark">
                                <svg  class="fill-current h-6 w-6 mr-2" id="Grid" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 20 20">                         
                                    <path d="M8,4H5C4.447,4,4,4.447,4,5v3c0,0.552,0.447,1,1,1h3c0.553,0,1-0.448,1-1V5C9,4.448,8.553,4,8,4z M15,4h-3
        c-0.553,0-1,0.447-1,1v3c0,0.552,0.447,1,1,1h3c0.553,0,1-0.448,1-1V5C16,4.448,15.553,4,15,4z M8,11H5c-0.553,0-1,0.447-1,1v3
        c0,0.552,0.447,1,1,1h3c0.553,0,1-0.448,1-1v-3C9,11.448,8.553,11,8,11z M15,11h-3c-0.553,0-1,0.447-1,1v3c0,0.552,0.447,1,1,1h3
        c0.553,0,1-0.448,1-1v-3C16,11.448,15.553,11,15,11z"/>
                                </svg>
                            
                                DashBoard
                            </a>
                        </div>
                        <div class="flex -mb-px  mr-6">
                            <a href="#" class="no-underline text-white opacity-50 sm:text-grey-dark sm:opacity-100 flex items-center py-4 border-b border-transparent hover:opacity-100 sm:hover:border-grey-dark ">
                                <svg  class="fill-current h-6 w-6 mr-2" id="Grid" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 20 20">                         
                                    <path d="M8,4H5C4.447,4,4,4.447,4,5v3c0,0.552,0.447,1,1,1h3c0.553,0,1-0.448,1-1V5C9,4.448,8.553,4,8,4z M15,4h-3
        c-0.553,0-1,0.447-1,1v3c0,0.552,0.447,1,1,1h3c0.553,0,1-0.448,1-1V5C16,4.448,15.553,4,15,4z M8,11H5c-0.553,0-1,0.447-1,1v3
        c0,0.552,0.447,1,1,1h3c0.553,0,1-0.448,1-1v-3C9,11.448,8.553,11,8,11z M15,11h-3c-0.553,0-1,0.447-1,1v3c0,0.552,0.447,1,1,1h3
        c0.553,0,1-0.448,1-1v-3C16,11.448,15.553,11,15,11z"/>
                                </svg>
                                Buy/Sell
                            </a>
                        </div>
                        <div class="flex -mb-px mr-6">
                            <a href="#" class="no-underline text-white opacity-50 sm:text-grey-dark sm:opacity-100 flex items-center py-4 border-b border-transparent hover:opacity-100 sm:hover:border-grey-dark ">
                                <svg  class="fill-current h-6 w-6 mr-2" id="Grid" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 20 20">                         
                                    <path d="M8,4H5C4.447,4,4,4.447,4,5v3c0,0.552,0.447,1,1,1h3c0.553,0,1-0.448,1-1V5C9,4.448,8.553,4,8,4z M15,4h-3
        c-0.553,0-1,0.447-1,1v3c0,0.552,0.447,1,1,1h3c0.553,0,1-0.448,1-1V5C16,4.448,15.553,4,15,4z M8,11H5c-0.553,0-1,0.447-1,1v3
        c0,0.552,0.447,1,1,1h3c0.553,0,1-0.448,1-1v-3C9,11.448,8.553,11,8,11z M15,11h-3c-0.553,0-1,0.447-1,1v3c0,0.552,0.447,1,1,1h3
        c0.553,0,1-0.448,1-1v-3C16,11.448,15.553,11,15,11z"/>
                                </svg>
                                Accounts
                            </a>
                        </div>
                        <div class="flex -mb-px mr-6">
                            <a href="#" class="no-underline text-white opacity-50 sm:text-grey-dark sm:opacity-100 flex items-center py-4 border-b border-transparent hover:opacity-100 sm:hover:border-grey-dark ">
                                <svg  class="fill-current h-6 w-6 mr-2" id="Grid" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 20 20">                         
                                    <path d="M8,4H5C4.447,4,4,4.447,4,5v3c0,0.552,0.447,1,1,1h3c0.553,0,1-0.448,1-1V5C9,4.448,8.553,4,8,4z M15,4h-3
        c-0.553,0-1,0.447-1,1v3c0,0.552,0.447,1,1,1h3c0.553,0,1-0.448,1-1V5C16,4.448,15.553,4,15,4z M8,11H5c-0.553,0-1,0.447-1,1v3
        c0,0.552,0.447,1,1,1h3c0.553,0,1-0.448,1-1v-3C9,11.448,8.553,11,8,11z M15,11h-3c-0.553,0-1,0.447-1,1v3c0,0.552,0.447,1,1,1h3
        c0.553,0,1-0.448,1-1v-3C16,11.448,15.553,11,15,11z"/>
                                </svg>
                                Tools
                            </a>
                        </div>
                        <div class="flex -mb-px">
                            <a href="#" class="no-underline text-white opacity-50 sm:text-grey-dark sm:opacity-100 flex items-center py-4 border-b border-transparent hover:opacity-100 sm:hover:border-grey-dark ">
                                <svg  class="fill-current h-6 w-6 mr-2" id="Grid" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 20 20">                         
                                    <path d="M8,4H5C4.447,4,4,4.447,4,5v3c0,0.552,0.447,1,1,1h3c0.553,0,1-0.448,1-1V5C9,4.448,8.553,4,8,4z M15,4h-3
        c-0.553,0-1,0.447-1,1v3c0,0.552,0.447,1,1,1h3c0.553,0,1-0.448,1-1V5C16,4.448,15.553,4,15,4z M8,11H5c-0.553,0-1,0.447-1,1v3
        c0,0.552,0.447,1,1,1h3c0.553,0,1-0.448,1-1v-3C9,11.448,8.553,11,8,11z M15,11h-3c-0.553,0-1,0.447-1,1v3c0,0.552,0.447,1,1,1h3
        c0.553,0,1-0.448,1-1v-3C16,11.448,15.553,11,15,11z"/>
                                </svg>
                                Setting
                            </a>
                        </div>
                    </div>
                </div>
           </div>
        </div>
        <!--End Navigation-->
       
        <div class="container mx-auto md:px-4 pt-6 pb-8">
            <!--Start Price Chart-->
            <div class="bg-white border-t border-b xm:border-l xm:border-r md:rounded shadow mb-6">
                <div class="border-b px-6">
                    <div class="flex justify-between -mb-px">
                        <div class="md:hidden text-blue-dark py-4 text-lg">
                            Price Charts
                        </div>

                        <div class="hidden md:flex">
                            <button type="button" class="appearance-none py-4 text-blue-dark border-b border-blue-dark mr-4">
                                Bitcond &middot; CA$21,380.01
                            </button>
                            <button type="button" class="appearance-none py-4 text-grey-dark border-b border-transparent hover:border-grey-dark  mr-4">
                                Ethereum &middot; CA$884.81
                            </button>
                            <button type="button" class="appearance-none py-4 text-grey-dark border-b border-transparent hover:border-grey-dark">
                                Litecoin &middot; CA$356.85
                            </button>
                        </div>
                        <div class="flex text-sm">
                            <button type="button" class="appearance-none py-4 text-grey-dark border-b border-transparent hover:border-grey-dark mr-3">
                                1H
                            </button>
                            <button type="button" class="appearance-none py-4 text-grey-dark border-b border-transparent hover:border-grey-dark mr-3">
                               1D
                            </button>
                            <button type="button" class="appearance-none py-4 text-grey-dark border-b border-transparent hover:border-grey-dark mr-3">
                                1W
                            </button>
                            <button type="button" class="appearance-none py-4 text-blue-dark border-b border-blue-dark mr-3">
                              1M
                            </button>
                            <button type="button" class="appearance-none py-4 text-grey-dark border-b border-transparent hover:border-grey-dark mr-3">
                                1Y
                            </button>
                            <button type="button" class="appearance-none py-4 text-grey-dark border-b border-transparent hover:border-grey-dark">
                                ALL
                            </button>
                        </div>
                    </div>
                </div>
                <div class="flex items-center px-6 md:hidden">
                    <div class="flex-grow flex-no-shrink py-6">
                        
                        <div class="text-grey-darker mb-2">
                            <span class="text-3xl align-top">CA</span> 
                            <span class="text-5xl">$21,404</span>
                            <span class="text-3xl  align-top">.74</span>
                        </div>
                        <div class="text-green-light  text-sm">
                            &uarr; CA $12,955.35(154.15%)
                        </div>
                    </div>
                    <div class="inline-block relative flex-shrink w-32">
                          <select class="block appearance-none w-full bg-white border border-grey-light hover:border-grey px-4 py-2 pr-8 rounded ">
                                    <option>BTC</option>
                                    <option>ETH</option>
                                    <option>LTC</option>
                                </select>
                                <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                </div>
                    </div>
                </div>

                <div class="hidden md:flex">
                    <div class="w-1/3 text-center py-6">
                        <div class="border-r">
                            <div class="text-grey-darker mb-2">
                                <span class="text-3xl align-top">CA</span> 
                                <span class="text-5xl">$21,404</span>
                                <span class="text-3xl  align-top">.74</span>
                            </div>
                            <div class="uppercase text-grey">
                                Bitcoin Price
                            </div>
                        </div>
                    </div>
                    <div class="w-1/3 text-center py-6">
                        <div class="border-r">
                            <div class="text-grey-darker mb-2">
                                <span class="text-3xl align-top"> <span class="text-green align-top">+</span> CA</span> 
                                <span class="text-5xl">$12,998</span>
                                <span class="text-3xl  align-top">.48    </span>
                            </div>
                            <div class="uppercase text-grey">
                               Since Last Month(CAD)
                            </div>
                        </div>
                    </div>
                    <div class="w-1/3 text-center py-6">
                        <div>
                            <div class="text-grey-darker mb-2">
                                <span class="text-3xl align-top"><span class="text-green align-top">+</span></span> 
                                <span class="text-5xl">154.47</span>
                                <span class="text-3xl  align-top">%</span>
                            </div>
                            <div class="uppercase text-grey">
                                Since Last Month(%)
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Price Chart-->
            <!--Start Card Part-->
            <div class="flex flex-wrap -mx-4">
                <div class="w-full mb-6 md:mb-0 md:w-1/2 px-4 flex flex-col ">
                    <div class="bg-white rounded border flex-grow flex flex-col shadow">
                        <div class="border-b">
                            <div class="flex justify-between px-6  -mb-px">
                                <h3 class="text-blue-dark py-4 font-normal text-large">Your Portfolio</h3>
                                <div class="">
                                    <button type="button" class="appearance-none py-4 text-blue-dark border-b border-blue-dark  mr-3">
                                        List
                                    </button>
                                    <button type="button" class="appearance-none py-4 text-grey-dark border-b border-transparent hover:border-grey-dark">
                                        Chart
                                    </button>                             
                                </div> 
                            </div>
                        </div> 
                        
                            <div class="flex flex-grow px-6 py-6 text-grey-darker text-lg items-center border-b">
                                <div class="w-1/4 flex  items-center ">
                                    <div class="rounded-full bg-orange inline-flex mr-3">
                                        <svg version="1.1" class="fill-current w-8 h-8 text-white"  id="Github" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 20 20" xml:space="preserve">
                                        <path  d="M13.18,11.309c-0.718,0-1.3,0.807-1.3,1.799c0,0.994,0.582,1.801,1.3,1.801s1.3-0.807,1.3-1.801
                                            C14.479,12.116,13.898,11.309,13.18,11.309z M17.706,6.626c0.149-0.365,0.155-2.439-0.635-4.426c0,0-1.811,0.199-4.551,2.08
                                            c-0.575-0.16-1.548-0.238-2.519-0.238c-0.973,0-1.945,0.078-2.52,0.238C4.74,2.399,2.929,2.2,2.929,2.2
                                            C2.14,4.187,2.148,6.261,2.295,6.626C1.367,7.634,0.8,8.845,0.8,10.497c0,7.186,5.963,7.301,7.467,7.301
                                            c0.342,0,1.018,0.002,1.734,0.002c0.715,0,1.392-0.002,1.732-0.002c1.506,0,7.467-0.115,7.467-7.301
                                            C19.2,8.845,18.634,7.634,17.706,6.626z M10.028,16.915H9.972c-3.771,0-6.709-0.449-6.709-4.115c0-0.879,0.31-1.693,1.047-2.369
                                            C5.537,9.304,7.615,9.9,9.972,9.9c0.01,0,0.02,0,0.029,0c0.01,0,0.018,0,0.027,0c2.357,0,4.436-0.596,5.664,0.531
                                            c0.735,0.676,1.045,1.49,1.045,2.369C16.737,16.466,13.8,16.915,10.028,16.915z M6.821,11.309c-0.718,0-1.3,0.807-1.3,1.799
                                            c0,0.994,0.582,1.801,1.3,1.801c0.719,0,1.301-0.807,1.301-1.801C8.122,12.116,7.54,11.309,6.821,11.309z"/>
                                        </svg>
                                    </div>
                                    <span class="text-lg">Bitcoin</span>
                                </div>
                                <div class="w-1/4 flex items-center">
                                    <div class="bg-orange h-2 rounded-full flex-1"> </div>
                                    <div>100%</div>
                                </div>
                                <div class="w-1/4 ">
                                    <div class="text-right">
                                        0.0010BTC
                                    </div>
                                    
                                </div>
                                <div class="w-1/4 ">
                                    <div class="text-right text-grey">
                                        CA$21.23
                                    </div>
                                </div>
                            </div>
                        
                            <div class="flex flex-grow px-6 py-6 text-grey-darker text-lg items-center border-b">
                                <div class="w-1/4 flex  items-center ">
                                    <div class="rounded-full bg-orange inline-flex mr-3">
                                        <svg version="1.1" class="fill-current w-8 h-8 text-white"  id="Github" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 20 20" xml:space="preserve">
                                        <path  d="M13.18,11.309c-0.718,0-1.3,0.807-1.3,1.799c0,0.994,0.582,1.801,1.3,1.801s1.3-0.807,1.3-1.801
                                            C14.479,12.116,13.898,11.309,13.18,11.309z M17.706,6.626c0.149-0.365,0.155-2.439-0.635-4.426c0,0-1.811,0.199-4.551,2.08
                                            c-0.575-0.16-1.548-0.238-2.519-0.238c-0.973,0-1.945,0.078-2.52,0.238C4.74,2.399,2.929,2.2,2.929,2.2
                                            C2.14,4.187,2.148,6.261,2.295,6.626C1.367,7.634,0.8,8.845,0.8,10.497c0,7.186,5.963,7.301,7.467,7.301
                                            c0.342,0,1.018,0.002,1.734,0.002c0.715,0,1.392-0.002,1.732-0.002c1.506,0,7.467-0.115,7.467-7.301
                                            C19.2,8.845,18.634,7.634,17.706,6.626z M10.028,16.915H9.972c-3.771,0-6.709-0.449-6.709-4.115c0-0.879,0.31-1.693,1.047-2.369
                                            C5.537,9.304,7.615,9.9,9.972,9.9c0.01,0,0.02,0,0.029,0c0.01,0,0.018,0,0.027,0c2.357,0,4.436-0.596,5.664,0.531
                                            c0.735,0.676,1.045,1.49,1.045,2.369C16.737,16.466,13.8,16.915,10.028,16.915z M6.821,11.309c-0.718,0-1.3,0.807-1.3,1.799
                                            c0,0.994,0.582,1.801,1.3,1.801c0.719,0,1.301-0.807,1.301-1.801C8.122,12.116,7.54,11.309,6.821,11.309z"/>
                                        </svg>
                                    </div>
                                    <span  class="text-lg">Ethereum</span>
                                </div>
                                <div class="w-1/4 flex items-center">
                                    <div class="bg-grey h-2 w-2 rounded-full mr-2"> </div>
                                    <div>0%</div>
                                </div>
                                <div class="w-1/4 ">
                                    <div class="text-right">
                                        0.0000ETC
                                    </div>
                                    
                                </div>
                                <div class="w-1/4 ">
                                    <div class="text-right text-grey">
                                        CA$0.00
                                    </div>
                                </div>
                            </div>
                        
                            <div class="flex flex-grow px-6 py-6 text-grey-darker text-lg items-center border-b">
                                <div class="w-1/4 flex  items-center ">
                                    <div class="rounded-full bg-orange inline-flex mr-3">
                                        <svg version="1.1" class="fill-current w-8 h-8 text-white"  id="Github" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 20 20" xml:space="preserve">
                                        <path  d="M13.18,11.309c-0.718,0-1.3,0.807-1.3,1.799c0,0.994,0.582,1.801,1.3,1.801s1.3-0.807,1.3-1.801
                                            C14.479,12.116,13.898,11.309,13.18,11.309z M17.706,6.626c0.149-0.365,0.155-2.439-0.635-4.426c0,0-1.811,0.199-4.551,2.08
                                            c-0.575-0.16-1.548-0.238-2.519-0.238c-0.973,0-1.945,0.078-2.52,0.238C4.74,2.399,2.929,2.2,2.929,2.2
                                            C2.14,4.187,2.148,6.261,2.295,6.626C1.367,7.634,0.8,8.845,0.8,10.497c0,7.186,5.963,7.301,7.467,7.301
                                            c0.342,0,1.018,0.002,1.734,0.002c0.715,0,1.392-0.002,1.732-0.002c1.506,0,7.467-0.115,7.467-7.301
                                            C19.2,8.845,18.634,7.634,17.706,6.626z M10.028,16.915H9.972c-3.771,0-6.709-0.449-6.709-4.115c0-0.879,0.31-1.693,1.047-2.369
                                            C5.537,9.304,7.615,9.9,9.972,9.9c0.01,0,0.02,0,0.029,0c0.01,0,0.018,0,0.027,0c2.357,0,4.436-0.596,5.664,0.531
                                            c0.735,0.676,1.045,1.49,1.045,2.369C16.737,16.466,13.8,16.915,10.028,16.915z M6.821,11.309c-0.718,0-1.3,0.807-1.3,1.799
                                            c0,0.994,0.582,1.801,1.3,1.801c0.719,0,1.301-0.807,1.301-1.801C8.122,12.116,7.54,11.309,6.821,11.309z"/>
                                        </svg>
                                    </div>
                                    <span class="text-lg">LiteCoin</span>
                                </div>
                                <div class="w-1/4 flex items-center">
                                    <div class="bg-grey h-2 w-2 rounded-full mr-2"> </div>
                                    <div>0%</div>
                                </div>
                                <div class="w-1/4 ">
                                    <div class="text-right">
                                        0.0000LTC
                                    </div>
                                    
                                </div>
                                <div class="w-1/4 ">
                                    <div class="text-right text-grey">
                                        CA$0.00
                                    </div>
                                </div>
                            </div>
                        
                        <div class="px-6 py-4">
                            <div class="text-center text-grey">
                                Total Balance &asymp; CA$21.34
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 px-4">
                    <div class="bg-white rounded border  shadow">
                        <div class="border-b">
                            <div class="flex justify-between px-6  -mb-px">
                                <h3 class="text-blue-dark py-4 font-normal text-large">Recent Activity</h3>
                            </div>
                        </div> 
                        <div class="">
                            <div class="text-center px-6 py-4">
                                <div class="py-8">
                                    <div class="mb-4">
                                        <svg class="inline-block fill-current  text-grey h-16 w-16" version="1.1" id="Rocket" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
                                        <path d="M11.933,13.069c0,0,7.059-5.094,6.276-10.924c-0.017-0.127-0.059-0.213-0.112-0.268
                                            c-0.054-0.055-0.137-0.098-0.263-0.115C12.137,0.961,7.16,8.184,7.16,8.184C2.842,7.667,3.156,8.528,1.186,13.26
                                            c-0.377,0.902,0.234,1.213,0.904,0.959c0.67-0.252,2.148-0.811,2.148-0.811l2.59,2.648c0,0-0.546,1.514-0.793,2.199
                                            c-0.248,0.686,0.055,1.311,0.938,0.926C11.597,17.165,12.439,17.487,11.933,13.069z M12.942,7.153c-0.598-0.613-0.598-1.604,0-2.217
                                            c0.598-0.611,1.567-0.611,2.166,0c0.598,0.611,0.598,1.603,0,2.217C14.509,7.764,13.539,7.764,12.942,7.153z"/>
                                        </svg>
                                    </div>
                                    <p class="text-2xl text-grey-darker mb-4">No Buy Or Sell Yet</p>
                                    <p class="text-grey-dark max-w-xs mx-auto mb-4">You have successfully linked a payment and can start buying digital currency</p>
                                    <div>
                                        <button type="button" class="bg-blue-dark text-white px-6 py-4 rounded border border-blue-dark">Buy Now </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                        
                    </div>            
                </div>
            </div>
            <!--End Card part-->


        </div>
        
    </body>
</html>
