@extends('layouts.app')

@section('main')
    <div class="container my-5 mt-1">
        <div class="py-lg-2">&nbsp;</div>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-6">
                <div class="card shadow border-0 p-5">
                    {{-- <div class="card-header">{{ __('Login') }}</div> --}}
                    <h1 class="h3 text-center">{{ __('Login') }}</h1>
                    <div class="card-body text-center">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="row mb-3">
                                <label for="email"
                                       class="col-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                                <div class="col-md-8">
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                       class="col-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-8">
                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember"
                                               id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0 ">
                                <div class="col-md-10 d-flex justify-content-center ">
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link p-1  h6 text-center"
                                           href="{{ route('password.request') }}">
                                            <p class="h6 text-start btn-link pt-2"> {{ __('Forgot Your Password?') }}</p>
                                        </a>
                                    @endif
                                    <button type="submit" class="btn Explore  p-2 m-1 mx-3">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <section class="col-lg-5 col-s-0 ">
                <svg class="animated" id="freepik_stories-company" xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 750 500" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                     xmlns:svgjs="http://svgjs.com/svgjs">
                    <style>svg#freepik_stories-company:not(.animated) .animable {
                            opacity: 0;
                        }

                        svg#freepik_stories-company.animated #freepik--speech-bubbles--inject-2 {
                            animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) fadeIn, 1.5s Infinite linear floating;
                            animation-delay: 0s, 1s;
                        }

                        @keyframes fadeIn {
                            0% {
                                opacity: 0;
                            }
                            100% {
                                opacity: 1;
                            }
                        }

                        @keyframes floating {
                            0% {
                                opacity: 1;
                                transform: translateY(0px);
                            }
                            50% {
                                transform: translateY(-10px);
                            }
                            100% {
                                opacity: 1;
                                transform: translateY(0px);
                            }
                        }        </style>
                    <g id="freepik--background-complete--inject-2" class="animable"
                       style="transform-origin: 383.56px 255.365px;">
                        <path
                            d="M416.76,231.25s0-.93,0-2.7,0-4.4,0-7.83c0-6.85,0-16.89-.07-29.7,0-25.59-.08-62.22-.14-106.41l.27.27-184.29.05h0l.32-.32c0,52.94,0,103,0,146.64l-.29-.28,133.14.14,37.71.07,10,0,2.57,0h.89l-.85,0h-2.55l-9.94,0-37.64.07-133.33.15h-.28v-.29c0-43.67,0-93.7,0-146.64v-.32h.33l184.29.06H417v.26c-.06,44.26-.1,80.94-.14,106.58,0,12.78-.05,22.8-.06,29.64,0,3.4,0,6,0,7.78S416.76,231.25,416.76,231.25Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 324.64px 157.775px;" id="elh64pnkg5xxo"
                            class="animable"></path>
                        <rect x="256.28" y="111.79" width="6.66" height="74.43"
                              style="fill: rgb(224, 224, 224); transform-origin: 259.61px 149.005px;" id="el3yk5j3acsto"
                              class="animable"></rect>
                        <rect x="269.14" y="137.07" width="6.66" height="49.15"
                              style="fill: rgb(235, 235, 235); transform-origin: 272.47px 161.645px;" id="elp5wxrn3cv2n"
                              class="animable"></rect>
                        <rect x="282.01" y="121.04" width="6.66" height="65.55"
                              style="fill: rgb(224, 224, 224); transform-origin: 285.34px 153.815px;" id="el3ivl7cey8id"
                              class="animable"></rect>
                        <rect x="294.88" y="114.66" width="6.66" height="71.55"
                              style="fill: rgb(235, 235, 235); transform-origin: 298.21px 150.435px;" id="el8jtkgw8sbu8"
                              class="animable"></rect>
                        <rect x="307.74" y="138.58" width="6.66" height="47.64"
                              style="fill: rgb(224, 224, 224); transform-origin: 311.07px 162.4px;" id="elxh3eha5y2a"
                              class="animable"></rect>
                        <rect x="320.61" y="147.92" width="6.66" height="38.29"
                              style="fill: rgb(235, 235, 235); transform-origin: 323.94px 167.065px;" id="el16kulylvu3h"
                              class="animable"></rect>
                        <rect x="333.47" y="119.43" width="6.66" height="66.79"
                              style="fill: rgb(224, 224, 224); transform-origin: 336.8px 152.825px;" id="elv6ia1qhchoi"
                              class="animable"></rect>
                        <rect x="346.34" y="131.47" width="6.66" height="54.75"
                              style="fill: rgb(235, 235, 235); transform-origin: 349.67px 158.845px;" id="eljswgc5wxu9"
                              class="animable"></rect>
                        <rect x="359.21" y="121.85" width="6.66" height="64.37"
                              style="fill: rgb(224, 224, 224); transform-origin: 362.54px 154.035px;" id="ell566s5qbyqd"
                              class="animable"></rect>
                        <rect x="372.07" y="142.36" width="6.66" height="43.85"
                              style="fill: rgb(235, 235, 235); transform-origin: 375.4px 164.285px;" id="elcdy23qvo8v5"
                              class="animable"></rect>
                        <rect x="384.94" y="134.02" width="6.66" height="52.2"
                              style="fill: rgb(224, 224, 224); transform-origin: 388.27px 160.12px;" id="eltfjwehswhw"
                              class="animable"></rect>
                        <path
                            d="M394.32,191.4c0,.15-31.61.27-70.59.27s-70.61-.12-70.61-.27,31.61-.27,70.61-.27S394.32,191.25,394.32,191.4Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 323.72px 191.4px;" id="el09q14amuiefo"
                            class="animable"></path>
                        <path d="M265.78,197.26a45.42,45.42,0,0,1-9.89,0,43.81,43.81,0,0,1,9.89,0Z"
                              style="fill: rgb(224, 224, 224); transform-origin: 260.835px 197.255px;"
                              id="elt09s2d3yher" class="animable"></path>
                        <path
                            d="M282.19,197.56a32.52,32.52,0,0,1-5.91.27,32.43,32.43,0,0,1-5.91-.27,31.85,31.85,0,0,1,5.91-.28A31.94,31.94,0,0,1,282.19,197.56Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 276.28px 197.555px;" id="elmn6x2qjb3wa"
                            class="animable"></path>
                        <path
                            d="M296.18,197.56a32.43,32.43,0,0,1-5.91.27,32.52,32.52,0,0,1-5.91-.27,31.94,31.94,0,0,1,5.91-.28A31.85,31.85,0,0,1,296.18,197.56Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 290.27px 197.555px;" id="elizpxsmkbyba"
                            class="animable"></path>
                        <path d="M310.17,197.56a64.82,64.82,0,0,1-11.82,0,62.51,62.51,0,0,1,11.82,0Z"
                              style="fill: rgb(224, 224, 224); transform-origin: 304.26px 197.555px;" id="elkzlmf8683cg"
                              class="animable"></path>
                        <path d="M324.17,197.56a64.82,64.82,0,0,1-11.82,0,62.51,62.51,0,0,1,11.82,0Z"
                              style="fill: rgb(224, 224, 224); transform-origin: 318.26px 197.555px;" id="ellh4b76rmgfd"
                              class="animable"></path>
                        <path d="M338.16,197.56a64.82,64.82,0,0,1-11.82,0,62.51,62.51,0,0,1,11.82,0Z"
                              style="fill: rgb(224, 224, 224); transform-origin: 332.25px 197.555px;" id="elu9ugmoef1hs"
                              class="animable"></path>
                        <path d="M352.15,197.56a64.82,64.82,0,0,1-11.82,0,62.51,62.51,0,0,1,11.82,0Z"
                              style="fill: rgb(224, 224, 224); transform-origin: 346.24px 197.555px;" id="el7le2x2ubvec"
                              class="animable"></path>
                        <path d="M366.14,197.56a64.82,64.82,0,0,1-11.82,0,62.51,62.51,0,0,1,11.82,0Z"
                              style="fill: rgb(224, 224, 224); transform-origin: 360.23px 197.555px;" id="el95lrimuvfwu"
                              class="animable"></path>
                        <path d="M380.14,197.56a64.93,64.93,0,0,1-11.83,0,62.62,62.62,0,0,1,11.83,0Z"
                              style="fill: rgb(224, 224, 224); transform-origin: 374.225px 197.555px;"
                              id="elpfrjjwmp14b" class="animable"></path>
                        <path d="M394.13,197.56a64.82,64.82,0,0,1-11.82,0,62.51,62.51,0,0,1,11.82,0Z"
                              style="fill: rgb(224, 224, 224); transform-origin: 388.22px 197.555px;" id="eluy2c3cl2xu"
                              class="animable"></path>
                        <rect x="226.55" y="83.74" width="195.43" height="5.51"
                              style="fill: rgb(235, 235, 235); transform-origin: 324.265px 86.495px;" id="elaexnohoalra"
                              class="animable"></rect>
                        <path
                            d="M594.69,368.21a25.48,25.48,0,0,0-10.85-3.74c-1.77-.18-3.71-.13-5.13.95-.3.23-.6.56-.53.93a1.15,1.15,0,0,0,.5.65,15.53,15.53,0,0,0,16,1.21"
                            style="fill: rgb(224, 224, 224); transform-origin: 586.43px 367.133px;" id="elk684d4bsphe"
                            class="animable"></path>
                        <path
                            d="M594.41,367.9a53.48,53.48,0,0,1-7-6.16,17.75,17.75,0,0,1-4.39-8.13,3.26,3.26,0,0,1,.35-2.72c5.58,4.37,10,10,11,17"
                            style="fill: rgb(224, 224, 224); transform-origin: 588.639px 359.395px;" id="eluf08836bzuf"
                            class="animable"></path>
                        <path
                            d="M594.63,368.17a25.39,25.39,0,0,1,.13-9.2,12.43,12.43,0,0,1,4.9-7.6c1,2.26.55,4.86-.13,7.22a35.11,35.11,0,0,1-4.86,10.23"
                            style="fill: rgb(224, 224, 224); transform-origin: 597.258px 360.095px;" id="elmckdm4ov08"
                            class="animable"></path>
                        <path
                            d="M600.1,378a16,16,0,0,0-8.7,4.4,16.49,16.49,0,0,0-5,8.54c3.26-.2,6-2.5,8-5.08s3.4-5.4,5.6-7.81"
                            style="fill: rgb(224, 224, 224); transform-origin: 593.25px 384.47px;" id="elznuveax88m"
                            class="animable"></path>
                        <path d="M601.29,379.55a21.5,21.5,0,0,1,2.48-20.3,25.81,25.81,0,0,1-2.48,20.3"
                              style="fill: rgb(224, 224, 224); transform-origin: 602.31px 369.4px;" id="elousy4j993ha"
                              class="animable"></path>
                        <path
                            d="M608.53,388.16a15.54,15.54,0,0,0-14.84,8.54,1.16,1.16,0,0,0-.1,1.16,1.09,1.09,0,0,0,1,.29c2.92-.19,5.51-1.95,7.65-3.95s4-4.32,6.36-6.05"
                            style="fill: rgb(224, 224, 224); transform-origin: 601.04px 393.153px;" id="el7i78955c4z6"
                            class="animable"></path>
                        <path
                            d="M608.3,387.69a27.55,27.55,0,0,1-.28-15.43c.55-2,1.46-4.08,3.3-5a.64.64,0,0,1,.5-.09.65.65,0,0,1,.32.37,9.27,9.27,0,0,1,.77,4.42,27.22,27.22,0,0,1-.69,4.49c-.58,2.74-.89,5.68-2.39,8a17.74,17.74,0,0,0-1,1.77c-.29.6-.29.81-.55,1.29"
                            style="fill: rgb(224, 224, 224); transform-origin: 609.993px 377.422px;" id="el0g1oresxxkd"
                            class="animable"></path>
                        <path
                            d="M627.45,390.54a19.86,19.86,0,0,1,3.49-16.36,1.26,1.26,0,0,1,1-.64c.62.06.79.9.76,1.52a29.63,29.63,0,0,1-5.24,15.48"
                            style="fill: rgb(224, 224, 224); transform-origin: 629.827px 382.04px;" id="elxczd2xclee"
                            class="animable"></path>
                        <path
                            d="M629.17,391.72a23.81,23.81,0,0,0,19.54-4,15.88,15.88,0,0,0-10.58-1.3,15.11,15.11,0,0,0-9,5.27"
                            style="fill: rgb(224, 224, 224); transform-origin: 638.92px 389.193px;" id="elots7cby7y2"
                            class="animable"></path>
                        <path
                            d="M630.63,388.13a22.57,22.57,0,0,1,17.73-10.25,11,11,0,0,1-5.8,6.41,32.43,32.43,0,0,1-8.51,2.49c-1.13.22-2.69.46-3.42,1.35"
                            style="fill: rgb(224, 224, 224); transform-origin: 639.495px 383.005px;" id="el0ume8druauue"
                            class="animable"></path>
                        <path
                            d="M627.81,370.69a50.78,50.78,0,0,0,2.27-10.38A17.29,17.29,0,0,0,628,350a22.6,22.6,0,0,0-.3,21"
                            style="fill: rgb(224, 224, 224); transform-origin: 627.722px 360.5px;" id="elotq06mk40yq"
                            class="animable"></path>
                        <path d="M639.36,364.86c4-7.29,12.2-13.12,20.48-13.93-3.2,7.95-11.91,14.1-20.48,13.93"
                              style="fill: rgb(224, 224, 224); transform-origin: 649.6px 357.897px;" id="elaiw91fsuft8"
                              class="animable"></path>
                        <path
                            d="M636.84,366.29c6,.91,11.08,4.73,16.67,7a7.49,7.49,0,0,0,3.77.73,3,3,0,0,0,1.84-5.22,8,8,0,0,0-2.73-1.66c-6.09-2.54-12.62-2.6-19-1.06"
                            style="fill: rgb(224, 224, 224); transform-origin: 648.474px 369.544px;" id="elgnffpma1byv"
                            class="animable"></path>
                        <path
                            d="M633.38,370.48c1.35.39,1.81,1.09,2.89,2a31.08,31.08,0,0,0,12.64,6.5c.48.12,1.11.17,1.35-.27s0-.84-.33-1.18a17.31,17.31,0,0,0-7.63-5.18c-2.92-1.09-5.44-2.4-8.92-2.12"
                            style="fill: rgb(224, 224, 224); transform-origin: 641.869px 374.628px;" id="eljl62b3sc85"
                            class="animable"></path>
                        <path
                            d="M629.47,345.14a23.93,23.93,0,0,0,18.34,6.24,1.26,1.26,0,0,0,.83-.3c.47-.5-.09-1.28-.63-1.7-5.39-4.2-11.92-5.94-18.54-4.24"
                            style="fill: rgb(224, 224, 224); transform-origin: 639.143px 347.984px;" id="elujp0a6wcjw"
                            class="animable"></path>
                        <path
                            d="M634.1,343.45A25.54,25.54,0,0,1,657,339.67a18.2,18.2,0,0,1-10.91,4.79,34.61,34.61,0,0,1-12-1"
                            style="fill: rgb(224, 224, 224); transform-origin: 645.545px 341.536px;" id="elwq6ex7gz7mo"
                            class="animable"></path>
                        <path
                            d="M632.26,331.8c-.53-5.38-.19-9.63-.56-15,0-.43-.12-.95-.53-1.11s-1,.48-1.21,1.05a17.22,17.22,0,0,0,2.29,15"
                            style="fill: rgb(224, 224, 224); transform-origin: 630.713px 323.733px;" id="el7lv6x9wfn5f"
                            class="animable"></path>
                        <path
                            d="M631.87,332.4a31.74,31.74,0,0,0,8.92-8.67c1.76-2.41,3.24-5.3,2.84-8.25a8.53,8.53,0,0,0-6.43,3.19,18,18,0,0,0-3.28,6.6c-.71,2.36-1.21,4.8-2,7.13"
                            style="fill: rgb(224, 224, 224); transform-origin: 637.783px 323.94px;" id="elud5l3psbgr"
                            class="animable"></path>
                        <path
                            d="M640.63,330A71.61,71.61,0,0,0,662.57,317c-2.62-1-5.62-.42-8.24.64a25.91,25.91,0,0,0-13.81,12.24"
                            style="fill: rgb(224, 224, 224); transform-origin: 651.545px 323.241px;" id="el4bo6ckajs1q"
                            class="animable"></path>
                        <path
                            d="M634.34,335.34a44.77,44.77,0,0,0,12.18.06,51.82,51.82,0,0,0,11.37-3.78,1.34,1.34,0,0,0,.78-.59.89.89,0,0,0-.28-1,2.28,2.28,0,0,0-1-.45,21,21,0,0,0-12.29.73,56.5,56.5,0,0,0-10.79,5"
                            style="fill: rgb(224, 224, 224); transform-origin: 646.517px 332.387px;" id="el8yv1xhdtvfb"
                            class="animable"></path>
                        <path
                            d="M611.21,345.32a21.5,21.5,0,0,1-.2-17.83c1.68,2.56,1.89,5.82,1.58,8.87s-1.24,6.18-1.3,9.24"
                            style="fill: rgb(224, 224, 224); transform-origin: 610.942px 336.545px;" id="el4au46fwawwk"
                            class="animable"></path>
                        <path
                            d="M600.17,339.76a24.85,24.85,0,0,0-18.49,7.87,17.26,17.26,0,0,0,10.12-1.88,50.71,50.71,0,0,0,8.68-5.8"
                            style="fill: rgb(224, 224, 224); transform-origin: 591.08px 343.755px;" id="el6ujescc9sab"
                            class="animable"></path>
                        <path
                            d="M592.75,337.27c-3.38-.27-6.63-.69-9.87.31a11.81,11.81,0,0,0-7.52,6.37,17.82,17.82,0,0,0,9.25-1.74,53.36,53.36,0,0,0,8.14-4.94"
                            style="fill: rgb(224, 224, 224); transform-origin: 584.055px 340.478px;" id="elj1ob420ny5"
                            class="animable"></path>
                        <path
                            d="M603.74,337.39c-3-2-6.16-4-9.69-4.84s-7.64-.22-10.1,2.45c2.86,1.68,6.33,1.88,9.65,1.87s7.39,0,10.51,1.07"
                            style="fill: rgb(224, 224, 224); transform-origin: 594.03px 335.07px;" id="elc3ybx08qujh"
                            class="animable"></path>
                        <path d="M603.75,337.55c-5.19-5.1-7.16-14.26-5.07-21.22a32.29,32.29,0,0,1,5.07,21.22"
                              style="fill: rgb(224, 224, 224); transform-origin: 600.902px 326.94px;" id="el6t962kt0v5h"
                              class="animable"></path>
                        <path
                            d="M618,323.11c1-2.28,1.66-4.67,2.54-7a20.14,20.14,0,0,1,3.63-6.43,9.56,9.56,0,0,1,6.43-3.33,25.89,25.89,0,0,1-12.48,16.78"
                            style="fill: rgb(224, 224, 224); transform-origin: 624.3px 314.74px;" id="elmqet91qmx9g"
                            class="animable"></path>
                        <path
                            d="M615.44,326.12c-1.62-2.23-3.49-5.26-5.68-6.93a9.53,9.53,0,0,0-7.74-2,18,18,0,0,0,13.42,9"
                            style="fill: rgb(224, 224, 224); transform-origin: 608.73px 321.613px;" id="elh57byrcbk14"
                            class="animable"></path>
                        <path
                            d="M616,323.29A38.6,38.6,0,0,1,613.4,315a12.9,12.9,0,0,1,1.3-8.43c2.85,5.38,3.77,11.16,1.41,16.78"
                            style="fill: rgb(224, 224, 224); transform-origin: 615.319px 314.96px;" id="elp335ya0s7hm"
                            class="animable"></path>
                        <path
                            d="M618.05,306.57c1.62-5.34,6.51-9.28,11.79-11.08a4.31,4.31,0,0,1,2.06-.31,1.78,1.78,0,0,1,1.52,1.27c.2.91-.55,1.72-1.26,2.33a40.21,40.21,0,0,1-14.11,7.79"
                            style="fill: rgb(224, 224, 224); transform-origin: 625.751px 300.865px;" id="elwqiypoua9go"
                            class="animable"></path>
                        <path
                            d="M618.11,302.2a38.45,38.45,0,0,1,1.54-10.2c1.12-3.26,3.28-6.32,6.42-7.75.53,3.48-1,6.94-2.85,9.93s-4.08,5.82-5.19,9.15"
                            style="fill: rgb(224, 224, 224); transform-origin: 622.103px 293.79px;" id="el8pe7dmhxs1"
                            class="animable"></path>
                        <path
                            d="M618,304.57c-1.34-3.89-1.47-8.84-3.8-12.23-1.63-2.37-4.24-4-5.65-6.49a9.91,9.91,0,0,0,.33,7.37,21.45,21.45,0,0,0,4.31,6.17c1.73,1.85,3.2,3.23,4.81,5.18"
                            style="fill: rgb(224, 224, 224); transform-origin: 612.997px 295.21px;" id="elgoeyklswieg"
                            class="animable"></path>
                        <path
                            d="M618.05,419.17c-.1,0-.19-26-.2-58s.07-58,.18-58,.19,26,.2,58S618.16,419.17,618.05,419.17Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 618.04px 361.17px;" id="el3cms7djh3sr"
                            class="animable"></path>
                        <path
                            d="M640.74,341.41a6.08,6.08,0,0,1-1,.36l-2.68.91c-2.27.77-5.38,1.89-8.76,3.27s-6.49,2.6-8.29,4.16a6,6,0,0,0-1.66,2.2c-.26.61-.31,1-.34,1s0-.1,0-.27a3.76,3.76,0,0,1,.19-.76,5.84,5.84,0,0,1,1.63-2.35,14.76,14.76,0,0,1,3.59-2.24c1.44-.67,3-1.37,4.73-2.06,3.39-1.39,6.52-2.47,8.81-3.18,1.15-.36,2.08-.62,2.73-.8A4.63,4.63,0,0,1,640.74,341.41Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 629.368px 347.36px;" id="elvu2nr1l4u9d"
                            class="animable"></path>
                        <path
                            d="M648.18,323.14a2.27,2.27,0,0,1-.28.29l-.83.79L644,327l-10.35,9.22c-4,3.59-7.53,7-10,9.62-1.22,1.29-2.17,2.36-2.82,3.11l-.75.86c-.18.19-.27.29-.28.28a1.31,1.31,0,0,1,.22-.33c.16-.21.38-.52.7-.91.62-.77,1.54-1.87,2.73-3.19a131.05,131.05,0,0,1,9.9-9.72c4-3.59,7.74-6.81,10.42-9.14l3.19-2.73.88-.73A1.51,1.51,0,0,1,648.18,323.14Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 633.99px 336.615px;" id="elfsisxh50vni"
                            class="animable"></path>
                        <path
                            d="M629.25,339.91c-.11,0,.73-2,1.58-4.46s1.24-4.54,1.35-4.52a15.05,15.05,0,0,1-1,4.64,28,28,0,0,1-1.26,3.12A4.65,4.65,0,0,1,629.25,339.91Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 630.71px 335.42px;" id="elg75ole73gcq"
                            class="animable"></path>
                        <path
                            d="M618.08,355.63a6,6,0,0,1-.63-.73l-1.59-2c-1.34-1.73-3.19-4.12-5.27-6.74s-4-5-5.37-6.66l-1.63-2a4.42,4.42,0,0,1-.56-.77,5.25,5.25,0,0,1,.67.68c.42.45,1,1.11,1.73,1.94,1.43,1.65,3.38,4,5.46,6.6s3.89,5,5.18,6.81c.65.89,1.16,1.61,1.5,2.12A4.15,4.15,0,0,1,618.08,355.63Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 610.555px 346.18px;" id="elm37dhwhupz"
                            class="animable"></path>
                        <path
                            d="M613.1,349.24a9.09,9.09,0,0,1-2.08-3.9,11,11,0,0,1-.47-3.93h.16c-.07.3-.13.46-.16.46s0-.18,0-.49l.16,0a17.76,17.76,0,0,0,.67,3.82A28.88,28.88,0,0,0,613.1,349.24Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 611.814px 345.31px;" id="el6oq915hjcdj"
                            class="animable"></path>
                        <path
                            d="M606.68,341.16a7.26,7.26,0,0,0-1.45-.84,9.65,9.65,0,0,0-4-.32,25.54,25.54,0,0,0-4.07.65,13.38,13.38,0,0,1-1.67.41,5.39,5.39,0,0,1,1.6-.66,18.55,18.55,0,0,1,4.11-.78,8.9,8.9,0,0,1,4.17.45A2.61,2.61,0,0,1,606.68,341.16Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 601.085px 340.352px;" id="elmdrpuov793"
                            class="animable"></path>
                        <path
                            d="M605.16,339.21c0,.05-.85-.34-2.23-.82a23.06,23.06,0,0,0-5.56-1.14,22.73,22.73,0,0,0-5.67.29c-1.44.26-2.31.52-2.33.46a2.31,2.31,0,0,1,.59-.25,14,14,0,0,1,1.69-.47,19.8,19.8,0,0,1,5.75-.4,19.43,19.43,0,0,1,5.62,1.27,13.77,13.77,0,0,1,1.59.72C605,339.06,605.17,339.18,605.16,339.21Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 597.265px 338.018px;" id="elmhlonlsotap"
                            class="animable"></path>
                        <path
                            d="M618,330.93a47.12,47.12,0,0,1-1.63-5.65,45.07,45.07,0,0,1-1.26-5.74,46.43,46.43,0,0,1,1.63,5.65A47.25,47.25,0,0,1,618,330.93Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 616.555px 325.235px;" id="el2qq5bqnrk7c"
                            class="animable"></path>
                        <path
                            d="M618.13,330.93a26.05,26.05,0,0,0-1.8-3.38,15,15,0,0,0-2.65-2.74,2.35,2.35,0,0,1,1,.53,8.38,8.38,0,0,1,1.94,2A7.57,7.57,0,0,1,618.13,330.93Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 615.905px 327.87px;" id="eldv9k6du637"
                            class="animable"></path>
                        <path
                            d="M618.05,405.33s-.11-.62-.41-1.73a24.72,24.72,0,0,0-1.73-4.49,62.32,62.32,0,0,0-9.2-13c-2.06-2.35-4.05-4.56-5.75-6.68a48.23,48.23,0,0,1-4.1-5.92,27.52,27.52,0,0,1-2.07-4.39c-.19-.55-.33-1-.41-1.26a2.93,2.93,0,0,1-.11-.45s.23.59.65,1.65a33.13,33.13,0,0,0,2.17,4.32,49.77,49.77,0,0,0,4.14,5.83c1.7,2.1,3.7,4.3,5.76,6.66A58.94,58.94,0,0,1,616.15,399a22.57,22.57,0,0,1,1.64,4.58,13.1,13.1,0,0,1,.23,1.3A1.78,1.78,0,0,1,618.05,405.33Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 606.162px 386.37px;" id="elbkhn0tmpayj"
                            class="animable"></path>
                        <path
                            d="M638.55,382.18a11.53,11.53,0,0,1-1.07.6,23.5,23.5,0,0,0-2.79,1.84A33,33,0,0,0,631,388c-1.28,1.36-2.61,2.93-4,4.62-2.7,3.39-5.22,6.39-6.73,8.78-.77,1.19-1.33,2.19-1.7,2.89a7.7,7.7,0,0,1-.59,1.08,1.61,1.61,0,0,1,.1-.3c.08-.2.19-.49.36-.85a29,29,0,0,1,1.6-3,97.76,97.76,0,0,1,6.67-8.87c1.35-1.7,2.69-3.27,4-4.63a30.07,30.07,0,0,1,3.75-3.31,20.32,20.32,0,0,1,2.88-1.76c.36-.18.65-.29.84-.37S638.55,382.16,638.55,382.18Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 628.265px 393.772px;" id="elqri43aartdc"
                            class="animable"></path>
                        <path
                            d="M639,389.69a16.1,16.1,0,0,1-2.27.33,29.48,29.48,0,0,0-5.38,1.06,16.16,16.16,0,0,0-4.82,2.53c-1.12.86-1.64,1.57-1.69,1.53s.09-.21.33-.53a10,10,0,0,1,1.19-1.21,14.67,14.67,0,0,1,4.87-2.68,24.8,24.8,0,0,1,5.48-1A12.2,12.2,0,0,1,639,389.69Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 631.915px 392.396px;" id="el41za660kfa9"
                            class="animable"></path>
                        <path
                            d="M625.45,394.31c-.12-.07.91-1.63,1.7-3.73s.92-4,1.05-4a3.41,3.41,0,0,1,0,1.22,12.29,12.29,0,0,1-.66,2.87,13.34,13.34,0,0,1-1.31,2.63A3.71,3.71,0,0,1,625.45,394.31Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 626.848px 390.445px;" id="el882kp1ldoag"
                            class="animable"></path>
                        <path
                            d="M645.19,362a1.49,1.49,0,0,1-.36.19l-1.07.49c-.47.2-1,.45-1.67.79s-1.39.67-2.17,1.14l-1.24.7c-.43.25-.86.54-1.31.83-.91.55-1.83,1.23-2.8,1.93a53.63,53.63,0,0,0-5.86,5.15,52.67,52.67,0,0,0-4.94,6c-.67,1-1.32,1.94-1.84,2.87-.27.46-.55.89-.78,1.33l-.66,1.26c-.44.8-.76,1.56-1.07,2.21s-.55,1.23-.73,1.7l-.45,1.08a1.3,1.3,0,0,1-.18.37,2.22,2.22,0,0,1,.11-.39c.1-.29.23-.66.38-1.11s.38-1.07.68-1.73.59-1.44,1-2.25c.21-.4.42-.83.65-1.28s.5-.88.76-1.35c.52-.94,1.16-1.9,1.82-2.91a46.43,46.43,0,0,1,10.88-11.26c1-.69,1.92-1.37,2.85-1.91.45-.28.89-.57,1.32-.82l1.26-.68c.79-.46,1.55-.79,2.21-1.1s1.23-.56,1.7-.74l1.1-.42A1.91,1.91,0,0,1,645.19,362Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 631.625px 376.02px;" id="elmwddwsy74uo"
                            class="animable"></path>
                        <path
                            d="M629,372.88a2.63,2.63,0,0,1,.89-1.33,5.66,5.66,0,0,1,3.59-1.38,9.86,9.86,0,0,1,3.79.74,5.16,5.16,0,0,1,1.43.7,9.79,9.79,0,0,1-1.52-.45,11.5,11.5,0,0,0-3.68-.61,5.84,5.84,0,0,0-3.44,1.2A11,11,0,0,0,629,372.88Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 633.85px 371.525px;" id="elanzp21avxu7"
                            class="animable"></path>
                        <path
                            d="M626.54,375.38a12.88,12.88,0,0,0,1-3.32,13.19,13.19,0,0,0-.23-3.46s.25.33.43,1a7.12,7.12,0,0,1,.18,2.55,7,7,0,0,1-.76,2.43C626.86,375.11,626.58,375.41,626.54,375.38Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 627.251px 371.991px;" id="elg35swbiakd6"
                            class="animable"></path>
                        <path d="M600.12,409.05c.56,9.92,3.55,20,8.15,30.21h20c4.38-10.1,7.17-20.17,7.66-30.21Z"
                              style="fill: rgb(224, 224, 224); transform-origin: 618.025px 424.155px;"
                              id="elgksb76b8kt5" class="animable"></path>
                        <path
                            d="M632.69,425.1c0,.11-6.58.19-14.7.19s-14.71-.08-14.71-.19,6.58-.18,14.71-.18S632.69,425,632.69,425.1Z"
                            style="fill: rgb(250, 250, 250); transform-origin: 617.985px 425.105px;" id="el8ar9ckju8zi"
                            class="animable"></path>
                        <path
                            d="M632.24,428.7c0,.1-6.17.19-13.78.19s-13.79-.09-13.79-.19,6.17-.19,13.79-.19S632.24,428.59,632.24,428.7Z"
                            style="fill: rgb(250, 250, 250); transform-origin: 618.455px 428.7px;" id="elfr36dm2o2yb"
                            class="animable"></path>
                        <path d="M608.59,415.56a56,56,0,0,1,0,9.22,59.12,59.12,0,0,1,0-9.22Z"
                              style="fill: rgb(250, 250, 250); transform-origin: 608.595px 420.17px;" id="elfz3yasybex"
                              class="animable"></path>
                        <path d="M619.31,415.56a60,60,0,0,1,0,9.54,60,60,0,0,1,0-9.54Z"
                              style="fill: rgb(250, 250, 250); transform-origin: 619.31px 420.33px;" id="ellj3zx5lp3eq"
                              class="animable"></path>
                        <path d="M629.37,415.48a65.84,65.84,0,0,1,0,9.73,62.38,62.38,0,0,1,0-9.73Z"
                              style="fill: rgb(250, 250, 250); transform-origin: 629.365px 420.345px;" id="elzc57jmyxwb"
                              class="animable"></path>
                        <path
                            d="M635.3,415.56c0,.11-7.73.19-17.25.19s-17.25-.08-17.25-.19,7.72-.18,17.25-.18S635.3,415.46,635.3,415.56Z"
                            style="fill: rgb(250, 250, 250); transform-origin: 618.05px 415.565px;" id="el8oddh6gw9uy"
                            class="animable"></path>
                        <path
                            d="M216.87,267.78s-6.25-.45-5.67,13.56a160.74,160.74,0,0,0,2,21.49s-.19,3.11-2.6,2.5-6.93-3.64-9.17-1.38S200,309.89,203,314.13s9.48,13.77,10.06,14.63.79,2.44-.92,2.29-13.22-4.06-14.75,1.52,9,16,10.11,17.12,1.19,1.89.74,2.59-4.21-1-7.53-1.95-7.34-1.52-8,1.77,4,12.92,21.36,23l8.34,4.16,7.89-5c16.24-11.81,19.88-21.85,18.95-25.06s-4.89-2.27-8.09-1-6.77,3.35-7.3,2.7-.53-1.38.47-2.65,10.43-12.66,8.35-18.05-13.14-.36-14.83,0-1.61-1.28-1.14-2.18,5.9-11,8.54-15.57,3.1-8.18.56-10.28-6.66,1.44-9,2.28-2.83-2.22-2.83-2.22a161.85,161.85,0,0,0-.15-21.58c-.83-14-7.15-12.87-7.15-12.87"
                            style="fill: rgb(235, 235, 235); transform-origin: 221.017px 323.509px;" id="el4kytimek6d6"
                            class="animable"></path>
                        <path
                            d="M217.37,280.33l0,.29c0,.21,0,.5.07.86.05.78.12,1.89.22,3.31.19,2.88.44,7,.72,12.18.57,10.29,1.24,24.51,1.93,40.21s1.32,29.93,1.83,40.22c.26,5.14.47,9.3.62,12.19.07,1.43.13,2.54.17,3.31,0,.37,0,.66,0,.86a2.25,2.25,0,0,1,0,.3,2.25,2.25,0,0,1,0-.29c0-.21,0-.5-.07-.86,0-.78-.13-1.89-.22-3.31-.19-2.88-.44-7-.72-12.18-.58-10.29-1.24-24.51-1.93-40.22s-1.32-29.92-1.83-40.21c-.26-5.14-.48-9.3-.62-12.19-.07-1.43-.13-2.54-.17-3.31,0-.37,0-.66,0-.86A2.25,2.25,0,0,1,217.37,280.33Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 220.15px 337.195px;" id="el4ny0xqig4s3"
                            class="animable"></path>
                        <path
                            d="M207.61,308.44a2.82,2.82,0,0,1,.52.43c.32.29.77.73,1.32,1.27,1.1,1.09,2.58,2.64,4.18,4.37l4.08,4.47,1.24,1.34a2.81,2.81,0,0,1,.44.52s-.2-.14-.53-.43-.77-.73-1.31-1.28c-1.09-1.1-2.55-2.66-4.15-4.4l-4.11-4.43L208,309A2.82,2.82,0,0,1,207.61,308.44Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 213.5px 314.64px;" id="elgv52yugxju5"
                            class="animable"></path>
                        <path
                            d="M220.21,320.56c-.06-.06,3-3.25,6.81-7.13s7-7,7-6.91-3,3.26-6.81,7.14S220.28,320.63,220.21,320.56Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 227.115px 313.54px;" id="el8x7z0rd3w5w"
                            class="animable"></path>
                        <path
                            d="M220.18,344.73a3,3,0,0,1,.58-.37l1.63-.91c1.38-.78,3.28-1.85,5.33-3.11s3.87-2.46,5.18-3.34l1.56-1a3.57,3.57,0,0,1,.59-.36s-.17.18-.52.46-.86.66-1.5,1.12c-1.28.93-3.09,2.16-5.15,3.42s-4,2.31-5.38,3c-.71.36-1.28.64-1.68.82A2.58,2.58,0,0,1,220.18,344.73Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 227.615px 340.185px;" id="el62nl3bo40zo"
                            class="animable"></path>
                        <path
                            d="M206.36,336.28a2,2,0,0,1,.58.27c.36.19.88.48,1.51.84,1.27.72,3,1.73,4.93,2.87s3.64,2.19,4.88,3c.62.38,1.12.7,1.46.93a2.36,2.36,0,0,1,.51.37,2.72,2.72,0,0,1-.58-.27c-.36-.19-.87-.48-1.51-.84-1.27-.72-3-1.73-4.93-2.87s-3.63-2.19-4.87-3c-.62-.39-1.12-.7-1.46-.93A2.76,2.76,0,0,1,206.36,336.28Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 213.295px 340.42px;" id="elr9gv095wry"
                            class="animable"></path>
                        <path
                            d="M203.62,357.61a4.23,4.23,0,0,1,.73.35l2,1.07c1.63.92,3.87,2.2,6.34,3.64s4.69,2.75,6.3,3.72l1.89,1.16a4.22,4.22,0,0,1,.67.46,4.17,4.17,0,0,1-.74-.36l-1.94-1.07c-1.63-.91-3.87-2.2-6.34-3.63s-4.69-2.76-6.3-3.72l-1.89-1.16A4.22,4.22,0,0,1,203.62,357.61Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 212.585px 362.81px;" id="elpgaj1latmim"
                            class="animable"></path>
                        <path
                            d="M221.14,367.64a4.89,4.89,0,0,1,.73-.49l2-1.23c1.71-1,4.07-2.49,6.63-4.16s4.84-3.23,6.49-4.38l2-1.35a4.55,4.55,0,0,1,.73-.47,3.82,3.82,0,0,1-.66.57c-.44.34-1.08.84-1.89,1.43-1.61,1.2-3.88,2.8-6.44,4.47s-4.95,3.09-6.69,4.08c-.88.5-1.59.89-2.08,1.15A4.94,4.94,0,0,1,221.14,367.64Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 230.43px 361.6px;" id="elohr723ay3wo"
                            class="animable"></path>
                        <polygon points="233.68 382.03 210.6 382.03 218.13 439.04 226.14 439.04 233.68 382.03"
                                 style="fill: rgb(224, 224, 224); transform-origin: 222.14px 410.535px;"
                                 id="el6xmpxdcgjvj" class="animable"></polygon>
                        <path
                            d="M211.8,389s0,.08.12.2a1.49,1.49,0,0,0,.56.4,2.78,2.78,0,0,0,2.44-.3c.93-.51,1.74-1.52,3-2a6.58,6.58,0,0,1,4.24.09,18.11,18.11,0,0,1,3.95,1.91,28.38,28.38,0,0,0,3.21,1.73,9.1,9.1,0,0,0,2.37.68,5,5,0,0,0,.67.05.64.64,0,0,0,.24,0,12.45,12.45,0,0,1-3.17-1,29.3,29.3,0,0,1-3.14-1.78,17.5,17.5,0,0,0-4-2,6.76,6.76,0,0,0-4.48-.05,5.84,5.84,0,0,0-1.68,1,13.33,13.33,0,0,1-1.32,1,2.77,2.77,0,0,1-2.25.39A2.32,2.32,0,0,1,211.8,389Z"
                            style="fill: rgb(245, 245, 245); transform-origin: 222.2px 389.172px;" id="el0aqf7o9uffrf"
                            class="animable"></path>
                        <path
                            d="M212.64,399.54s.18-.23.54-.61a5,5,0,0,1,1.85-1.17,8.2,8.2,0,0,1,3.21-.48,33.74,33.74,0,0,1,4,.54,13.73,13.73,0,0,0,4.11.17,11.22,11.22,0,0,0,3.24-.92,9.81,9.81,0,0,0,1.94-1.16,2.94,2.94,0,0,0,.62-.55,22.41,22.41,0,0,1-2.67,1.47,12.07,12.07,0,0,1-3.17.82,14.19,14.19,0,0,1-4-.2,29.52,29.52,0,0,0-4.06-.52,8.09,8.09,0,0,0-3.32.58,4.78,4.78,0,0,0-1.85,1.32,2.75,2.75,0,0,0-.35.51C212.66,399.47,212.63,399.53,212.64,399.54Z"
                            style="fill: rgb(245, 245, 245); transform-origin: 222.394px 397.45px;" id="elxhijib4nbd"
                            class="animable"></path>
                        <path
                            d="M231.06,405.16a1.83,1.83,0,0,0-.63-.33,7,7,0,0,0-1.92-.41,12.43,12.43,0,0,0-2.89.17c-1.07.17-2.23.47-3.44.72a14.21,14.21,0,0,1-3.43.39,7.39,7.39,0,0,1-2.73-.59,6.12,6.12,0,0,1-2.07-1.54,1.6,1.6,0,0,0,.39.6,4.75,4.75,0,0,0,1.57,1.18,7.3,7.3,0,0,0,2.82.7,13.82,13.82,0,0,0,3.53-.37c1.22-.26,2.37-.56,3.42-.75a12.77,12.77,0,0,1,2.82-.24A10.47,10.47,0,0,1,231.06,405.16Z"
                            style="fill: rgb(245, 245, 245); transform-origin: 222.505px 404.812px;" id="elyi3ctmbkzjm"
                            class="animable"></path>
                        <path
                            d="M214.68,413.07a3.68,3.68,0,0,1,2.24-.23,11.44,11.44,0,0,1,2.34.87,8.68,8.68,0,0,0,3.05.84,9.09,9.09,0,0,0,5.52-1.28,8,8,0,0,0,1.37-1,2.49,2.49,0,0,0,.41-.49,22,22,0,0,1-1.92,1.31,9.38,9.38,0,0,1-5.35,1.14c-2.19-.13-3.86-1.43-5.38-1.6a3.4,3.4,0,0,0-1.74.15C214.83,412.88,214.67,413.05,214.68,413.07Z"
                            style="fill: rgb(245, 245, 245); transform-origin: 222.145px 413.183px;" id="el4urbamfldo"
                            class="animable"></path>
                        <path
                            d="M216,424a4.48,4.48,0,0,0,1.93-.38c1.16-.39,2.59-1.28,4.27-1.95a7,7,0,0,1,2.45-.51,4.44,4.44,0,0,1,2,.45,4.5,4.5,0,0,1,1.43,1.23s0-.2-.22-.49a3.19,3.19,0,0,0-1.08-1,4.59,4.59,0,0,0-2.09-.57,7,7,0,0,0-2.59.51c-1.74.69-3.13,1.61-4.24,2.05S216,424,216,424Z"
                            style="fill: rgb(245, 245, 245); transform-origin: 222.04px 422.391px;" id="elbqduijuae8"
                            class="animable"></path>
                        <path
                            d="M217.1,429.1a4.92,4.92,0,0,0,1.46.47,25.76,25.76,0,0,0,3.65.62,27.37,27.37,0,0,0,3.7.11,6.2,6.2,0,0,0,1.53-.18c0-.12-2.34,0-5.19-.31S217.12,429,217.1,429.1Z"
                            style="fill: rgb(245, 245, 245); transform-origin: 222.27px 429.703px;" id="el22wnzrpdf1w"
                            class="animable"></path>
                        <rect x="471.79" y="105.73" width="104.24" height="93.26"
                              style="fill: rgb(250, 250, 250); transform-origin: 523.91px 152.36px;" id="elhfkhyrwl4lb"
                              class="animable"></rect>
                        <path
                            d="M576,199s0-.6,0-1.73,0-2.82,0-5c0-4.38,0-10.78-.06-18.93,0-16.29-.07-39.58-.12-67.6l.24.24L471.8,106h0l.28-.28c0,33.93,0,65.86,0,93.26l-.24-.25,75.39.13,21.27.06,5.63,0,1.45,0h0l-1.43,0-5.58,0-21.21.06-75.55.12h-.25V199c0-27.4,0-59.33,0-93.26v-.28h.29l104.23,0h.24v.24c0,28.08-.09,51.42-.12,67.75,0,8.13,0,14.51-.06,18.88,0,2.16,0,3.82,0,4.95S576,199,576,199Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 523.94px 152.28px;" id="elv0rwydjfqfe"
                            class="animable"></path>
                        <path
                            d="M511.76,122.3c0,.15-5.49.28-12.26.28s-12.25-.13-12.25-.28,5.48-.28,12.25-.28S511.76,122.15,511.76,122.3Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 499.505px 122.3px;" id="elrw3f6ui8qmp"
                            class="animable"></path>
                        <path
                            d="M555.93,129.3c0,.16-15.08.28-33.67.28s-33.66-.12-33.66-.28,15.07-.28,33.66-.28S555.93,129.15,555.93,129.3Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 522.265px 129.3px;" id="elqrihx9o4ys8"
                            class="animable"></path>
                        <rect x="487.43" y="141.16" width="4.39" height="4.39"
                              style="fill: rgb(224, 224, 224); transform-origin: 489.625px 143.355px;"
                              id="elf8wqrtb7kau" class="animable"></rect>
                        <rect x="498.24" y="141.16" width="4.39" height="4.39"
                              style="fill: rgb(224, 224, 224); transform-origin: 500.435px 143.355px;"
                              id="el0lw3rmistoia" class="animable"></rect>
                        <rect x="509.25" y="140.96" width="4.39" height="4.39"
                              style="fill: rgb(224, 224, 224); transform-origin: 511.445px 143.155px;" id="elmg5wpk172r"
                              class="animable"></rect>
                        <rect x="519.86" y="141.16" width="4.39" height="4.39"
                              style="fill: rgb(224, 224, 224); transform-origin: 522.055px 143.355px;" id="elkjikz9h96i"
                              class="animable"></rect>
                        <rect x="530.67" y="141.16" width="4.39" height="4.39"
                              style="fill: rgb(224, 224, 224); transform-origin: 532.865px 143.355px;" id="elxudtcdnkor"
                              class="animable"></rect>
                        <rect x="541.48" y="141.16" width="4.39" height="4.39"
                              style="fill: rgb(224, 224, 224); transform-origin: 543.675px 143.355px;"
                              id="el34vkvxtxwx6" class="animable"></rect>
                        <rect x="552.29" y="141.16" width="4.39" height="4.39"
                              style="fill: rgb(235, 235, 235); transform-origin: 554.485px 143.355px;"
                              id="el7uast4vyju7" class="animable"></rect>
                        <rect x="487.43" y="150.5" width="4.39" height="4.39"
                              style="fill: rgb(235, 235, 235); transform-origin: 489.625px 152.695px;"
                              id="elewljf17t3gc" class="animable"></rect>
                        <rect x="498.24" y="150.5" width="4.39" height="4.39"
                              style="fill: rgb(224, 224, 224); transform-origin: 500.435px 152.695px;" id="eli2dp1wyjzr"
                              class="animable"></rect>
                        <rect x="509.05" y="150.5" width="4.39" height="4.39"
                              style="fill: rgb(235, 235, 235); transform-origin: 511.245px 152.695px;"
                              id="eld7vyd0xnfyr" class="animable"></rect>
                        <rect x="519.86" y="150.5" width="4.39" height="4.39"
                              style="fill: rgb(224, 224, 224); transform-origin: 522.055px 152.695px;"
                              id="elj5r93rv4ldo" class="animable"></rect>
                        <rect x="530.67" y="150.5" width="4.39" height="4.39"
                              style="fill: rgb(224, 224, 224); transform-origin: 532.865px 152.695px;"
                              id="elm644aa3jftj" class="animable"></rect>
                        <rect x="541.68" y="150.3" width="4.39" height="4.39"
                              style="fill: rgb(224, 224, 224); transform-origin: 543.875px 152.495px;" id="elsys0s3tuuw"
                              class="animable"></rect>
                        <rect x="552.29" y="150.5" width="4.39" height="4.39"
                              style="fill: rgb(224, 224, 224); transform-origin: 554.485px 152.695px;"
                              id="ela6mlit7io06" class="animable"></rect>
                        <rect x="487.43" y="159.84" width="4.39" height="4.39"
                              style="fill: rgb(224, 224, 224); transform-origin: 489.625px 162.035px;"
                              id="ell3gkxusfprl" class="animable"></rect>
                        <rect x="498.44" y="159.64" width="4.39" height="4.39"
                              style="fill: rgb(224, 224, 224); transform-origin: 500.635px 161.835px;"
                              id="elttz2o03idgo" class="animable"></rect>
                        <rect x="509.05" y="159.84" width="4.39" height="4.39"
                              style="fill: rgb(224, 224, 224); transform-origin: 511.245px 162.035px;"
                              id="eldr9xzjou1nn" class="animable"></rect>
                        <rect x="519.86" y="159.84" width="4.39" height="4.39"
                              style="fill: rgb(235, 235, 235); transform-origin: 522.055px 162.035px;" id="elvj0kya9b5o"
                              class="animable"></rect>
                        <rect x="530.67" y="159.84" width="4.39" height="4.39"
                              style="fill: rgb(224, 224, 224); transform-origin: 532.865px 162.035px;" id="ely8d59tcy1d"
                              class="animable"></rect>
                        <rect x="541.48" y="159.84" width="4.39" height="4.39"
                              style="fill: rgb(224, 224, 224); transform-origin: 543.675px 162.035px;" id="elvmz5gq29au"
                              class="animable"></rect>
                        <rect x="552.29" y="159.84" width="4.39" height="4.39"
                              style="fill: rgb(224, 224, 224); transform-origin: 554.485px 162.035px;"
                              id="eld8clcrlr30j" class="animable"></rect>
                        <rect x="487.43" y="169.17" width="4.39" height="4.39"
                              style="fill: rgb(224, 224, 224); transform-origin: 489.625px 171.365px;" id="elyul5q1xzha"
                              class="animable"></rect>
                        <rect x="498.24" y="169.17" width="4.39" height="4.39"
                              style="fill: rgb(224, 224, 224); transform-origin: 500.435px 171.365px;" id="elbdbs4bc4u2"
                              class="animable"></rect>
                        <rect x="509.05" y="169.17" width="4.39" height="4.39"
                              style="fill: rgb(224, 224, 224); transform-origin: 511.245px 171.365px;"
                              id="el6jrzjsvudac" class="animable"></rect>
                        <rect x="520.06" y="168.97" width="4.39" height="4.39"
                              style="fill: rgb(224, 224, 224); transform-origin: 522.255px 171.165px;" id="elhkkj1q97fy"
                              class="animable"></rect>
                        <rect x="530.67" y="169.17" width="4.39" height="4.39"
                              style="fill: rgb(224, 224, 224); transform-origin: 532.865px 171.365px;"
                              id="elekjt6x5j256" class="animable"></rect>
                        <rect x="541.48" y="169.17" width="4.39" height="4.39"
                              style="fill: rgb(235, 235, 235); transform-origin: 543.675px 171.365px;"
                              id="elpnmq170ns1l" class="animable"></rect>
                        <rect x="552.29" y="169.17" width="4.39" height="4.39"
                              style="fill: rgb(224, 224, 224); transform-origin: 554.485px 171.365px;" id="elb6g1znterr"
                              class="animable"></rect>
                        <rect x="487.43" y="178.51" width="4.39" height="4.39"
                              style="fill: rgb(224, 224, 224); transform-origin: 489.625px 180.705px;" id="eleej7oh7zfd"
                              class="animable"></rect>
                        <rect x="498.24" y="178.51" width="4.39" height="4.39"
                              style="fill: rgb(235, 235, 235); transform-origin: 500.435px 180.705px;"
                              id="el25qo2dbgtwa" class="animable"></rect>
                        <rect x="509.05" y="178.51" width="4.39" height="4.39"
                              style="fill: rgb(224, 224, 224); transform-origin: 511.245px 180.705px;" id="el9gh74adofa"
                              class="animable"></rect>
                        <rect x="519.86" y="178.51" width="4.39" height="4.39"
                              style="fill: rgb(224, 224, 224); transform-origin: 522.055px 180.705px;" id="elo82q42kf41"
                              class="animable"></rect>
                        <rect x="530.67" y="178.51" width="4.39" height="4.39"
                              style="fill: rgb(224, 224, 224); transform-origin: 532.865px 180.705px;"
                              id="elly49106tj7j" class="animable"></rect>
                        <rect x="541.68" y="178.31" width="4.39" height="4.39"
                              style="fill: rgb(224, 224, 224); transform-origin: 543.875px 180.505px;"
                              id="elsyvm7bn49eq" class="animable"></rect>
                        <rect x="552.29" y="178.51" width="4.39" height="4.39"
                              style="fill: rgb(224, 224, 224); transform-origin: 554.485px 180.705px;" id="eltmumqvt3gt"
                              class="animable"></rect>
                        <rect x="627.88" y="71.36" width="87.31" height="144.52"
                              style="fill: rgb(224, 224, 224); transform-origin: 671.535px 143.62px;" id="eltrxmu6pjcao"
                              class="animable"></rect>
                        <rect x="624.98" y="71.36" width="87.31" height="144.52"
                              style="fill: rgb(235, 235, 235); transform-origin: 668.635px 143.62px;" id="el4bh7w3tpq0x"
                              class="animable"></rect>
                        <rect x="628.7" y="74.29" width="79.87" height="138.66"
                              style="fill: rgb(250, 250, 250); transform-origin: 668.635px 143.62px;" id="eluv93kf8k25h"
                              class="animable"></rect>
                        <rect x="643.9" y="92.31" width="49.11" height="102.62"
                              style="fill: rgb(235, 235, 235); transform-origin: 668.455px 143.62px;" id="elh0983me49ko"
                              class="animable"></rect>
                        <path
                            d="M643.9,158.62c-.11-9.59,8.51-19,18-20.29,4.53-.63,9.34.26,13.57-1.47,7.55-3.1,9.95-13.13,17.55-16.1l.34,74.17H643.9Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 668.63px 157.845px;" id="eljnli5aeokz"
                            class="animable"></path>
                        <polygon
                            points="85.95 360.01 85.95 385.21 122.8 385.21 163.44 385.21 163.44 360.01 85.95 360.01"
                            style="fill: rgb(245, 245, 245); transform-origin: 124.695px 372.61px;" id="el8ehdwkcmn1b"
                            class="animable"></polygon>
                        <polygon points="82.7 352.97 82.7 360.01 166.14 360.01 166.14 352.97 122.8 352.97 82.7 352.97"
                                 style="fill: rgb(224, 224, 224); transform-origin: 124.42px 356.49px;"
                                 id="el792v4p3rsbh" class="animable"></polygon>
                        <polygon
                            points="124.42 385.21 163.44 385.21 163.44 360.01 166.14 360.01 166.14 352.97 122.8 352.97 122.8 359.36 124.42 385.21"
                            style="fill: rgb(224, 224, 224); transform-origin: 144.47px 369.09px;" id="elv0rcd5g0028"
                            class="animable"></polygon>
                        <rect x="96.79" y="364.07" width="15.71" height="3.79"
                              style="fill: rgb(224, 224, 224); transform-origin: 104.645px 365.965px;"
                              id="elwhctady2fal" class="animable"></rect>
                        <rect x="94.77" y="372.61" width="20.18" height="8.01"
                              style="fill: rgb(255, 255, 255); transform-origin: 104.86px 376.615px;" id="el6a8aaz4fr6r"
                              class="animable"></rect>
                        <path
                            d="M175.07,439.37,173.45,94.3h-6.68v68H149.51l-.32-68h-6.68v68H83.14l-.32-68H76.14v68H58.93l-.32-68H51.93V439.37h8.31L60,393.06H76.14v46.31h8.31l-.22-46.31h58.28v46.31h8.31l-.22-46.31h16.17v46.31Zm-107.43-92-6-25.57H73.93Zm8.5-24v60.42l-7.23-31Zm0-87.82-7.23-31,7.23-29.43Zm-1.3,5.55H59.93l7.65-31.13Zm-7.2-42L60.8,169.8h14Zm-1.33,5.41-7,28.68L59,173.08ZM59.7,324.38l6.61,28.36L60,378.62Zm7.88,33.78L74,385.51H60.85Zm-7.67-43.94,0-.24-.21,0-.31-65.44h16.8v65.63Zm23.64-65.63h59v65.63H83.86Zm74.19-38.67L165,241.05H150.09Zm-7.91,21.59-.26-56.6,6.9,29.59Zm16.94,6-7.7-33,7.7-31.33Zm0,3.44v.11h-.47Zm0,84.17v56.74l-6.8-29.1Zm-8.06,22.22-6-25.57H165Zm-.91-148.24L151,169.8h14Zm9,49.5v65.63H151l-.06-.24-.69.16-.31-65.55Zm-9.39,104.15-6.84,27.84-.28-58.34Zm1.26,5.42L165,385.51H151.92ZM142.51,169.8v71.25h-59l-.34-71.25ZM85.26,385.51H84.19l-.3-63.75h58.62v63.75Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 113.5px 266.835px;" id="elmvtdvldh2gt"
                            class="animable"></path>
                        <rect x="126.3" y="189.91" width="11.04" height="51.43"
                              style="fill: rgb(224, 224, 224); transform-origin: 131.82px 215.625px;" id="elj7ggxevt5d"
                              class="animable"></rect>
                        <path d="M134.22,229a2.19,2.19,0,1,1-2.18-2.19A2.19,2.19,0,0,1,134.22,229Z"
                              style="fill: rgb(250, 250, 250); transform-origin: 132.03px 229px;" id="el412khwtlnlw"
                              class="animable"></path>
                        <rect x="130.25" y="203.54" width="3.38" height="21.02"
                              style="fill: rgb(250, 250, 250); transform-origin: 131.94px 214.05px;" id="el0bsicqxixjcm"
                              class="animable"></rect>
                        <rect x="115.09" y="189.91" width="11.04" height="51.43"
                              style="fill: rgb(235, 235, 235); transform-origin: 120.61px 215.625px;" id="elsansko54kva"
                              class="animable"></rect>
                        <path d="M123,229a2.19,2.19,0,1,1-2.18-2.19A2.19,2.19,0,0,1,123,229Z"
                              style="fill: rgb(250, 250, 250); transform-origin: 120.81px 229px;" id="elj6pywdooc9p"
                              class="animable"></path>
                        <rect x="119.04" y="203.54" width="3.38" height="21.02"
                              style="fill: rgb(250, 250, 250); transform-origin: 120.73px 214.05px;" id="elv06mhazwp2h"
                              class="animable"></rect>
                        <rect x="104.41" y="189.91" width="11.04" height="51.43"
                              style="fill: rgb(245, 245, 245); transform-origin: 109.93px 215.625px;" id="elktndj7tfy9b"
                              class="animable"></rect>
                        <path d="M112.34,229a2.19,2.19,0,1,1-2.19-2.19A2.19,2.19,0,0,1,112.34,229Z"
                              style="fill: rgb(224, 224, 224); transform-origin: 110.15px 229px;" id="elbk6udl7yugd"
                              class="animable"></path>
                        <rect x="108.37" y="203.54" width="3.38" height="21.02"
                              style="fill: rgb(224, 224, 224); transform-origin: 110.06px 214.05px;" id="el1qytlkgvvpo"
                              class="animable"></rect>
                        <polygon points="90.76 240.56 104.02 195.32 99.45 193.31 85.85 238.92 90.76 240.56"
                                 style="fill: rgb(245, 245, 245); transform-origin: 94.935px 216.935px;"
                                 id="el0m5vv85xeh4p" class="animable"></polygon>
                        <polygon points="71.12 314.21 71.12 306.43 126.12 306.43 126.3 314.21 71.12 314.21"
                                 style="fill: rgb(245, 245, 245); transform-origin: 98.71px 310.32px;"
                                 id="el1ss0owy9fie" class="animable"></polygon>
                        <path d="M126.15,307.7s-48.79.36-51.94,1.1c-.68.16-1.37,3.16,0,3.43s51.94.69,51.94.69Z"
                              style="fill: rgb(255, 255, 255); transform-origin: 99.7853px 310.31px;" id="eluluydslc2he"
                              class="animable"></path>
                        <polygon points="77.51 306.12 77.51 298.33 121.08 298.33 121.22 306.12 77.51 306.12"
                                 style="fill: rgb(235, 235, 235); transform-origin: 99.365px 302.225px;"
                                 id="elr4y8gc68syb" class="animable"></polygon>
                        <path d="M121.1,299.6S82.46,300,80,300.71c-.54.16-1.09,3.15,0,3.43s41.14.68,41.14.68Z"
                              style="fill: rgb(250, 250, 250); transform-origin: 100.256px 302.21px;" id="elluzqo65dh6d"
                              class="animable"></path>
                        <polygon points="77.31 298.43 77.31 290.64 120.88 290.64 121.02 298.43 77.31 298.43"
                                 style="fill: rgb(224, 224, 224); transform-origin: 99.165px 294.535px;"
                                 id="elde8dwaymwpm" class="animable"></polygon>
                        <path d="M120.91,291.91s-38.65.36-41.15,1.1c-.54.16-1.09,3.16,0,3.43s41.15.69,41.15.69Z"
                              style="fill: rgb(250, 250, 250); transform-origin: 100.021px 294.52px;" id="el3ons34y2rax"
                              class="animable"></path>
                        <rect x="131.25" y="111.82" width="11.04" height="51.43"
                              style="fill: rgb(245, 245, 245); transform-origin: 136.77px 137.535px;" id="el3pcs03x8xfe"
                              class="animable"></rect>
                        <path d="M139.17,150.91a2.19,2.19,0,1,1-2.18-2.18A2.18,2.18,0,0,1,139.17,150.91Z"
                              style="fill: rgb(224, 224, 224); transform-origin: 136.98px 150.92px;" id="el40c7enjboj8"
                              class="animable"></path>
                        <rect x="135.21" y="125.45" width="3.38" height="21.02"
                              style="fill: rgb(224, 224, 224); transform-origin: 136.9px 135.96px;" id="el4k8spl9t728"
                              class="animable"></rect>
                        <rect x="120.04" y="111.82" width="11.03" height="51.43"
                              style="fill: rgb(235, 235, 235); transform-origin: 125.555px 137.535px;" id="el5972dg7yk9"
                              class="animable"></rect>
                        <path d="M128,150.91a2.19,2.19,0,1,1-2.18-2.18A2.19,2.19,0,0,1,128,150.91Z"
                              style="fill: rgb(250, 250, 250); transform-origin: 125.81px 150.92px;" id="ell21nkj21l2"
                              class="animable"></path>
                        <rect x="124" y="125.45" width="3.37" height="21.02"
                              style="fill: rgb(250, 250, 250); transform-origin: 125.685px 135.96px;" id="eliqsk7foursf"
                              class="animable"></rect>
                        <rect x="109.36" y="111.82" width="11.04" height="51.43"
                              style="fill: rgb(224, 224, 224); transform-origin: 114.88px 137.535px;" id="elt1hnea04opp"
                              class="animable"></rect>
                        <path d="M117.29,150.91a2.19,2.19,0,1,1-2.19-2.18A2.19,2.19,0,0,1,117.29,150.91Z"
                              style="fill: rgb(250, 250, 250); transform-origin: 115.1px 150.92px;" id="el3zpvy30y9wi"
                              class="animable"></path>
                        <rect x="113.32" y="125.45" width="3.38" height="21.02"
                              style="fill: rgb(250, 250, 250); transform-origin: 115.01px 135.96px;" id="el4ylq9baocl6"
                              class="animable"></rect>
                    </g>
                    <g id="freepik--Floor--inject-2" class="animable" style="transform-origin: 380px 439px;">
                        <path
                            d="M724.26,439c0,.15-154.14.26-344.24.26S35.74,439.11,35.74,439s154.11-.26,344.28-.26S724.26,438.82,724.26,439Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 380px 439px;" id="elneplxnnm9j"
                            class="animable"></path>
                    </g>
                    <g id="freepik--speech-bubbles--inject-2" class="animable animator-active"
                       style="transform-origin: 319.367px 200.486px;">
                        <path d="M71.6,191.07l-5.11-9a24.1,24.1,0,1,0-5.77,6.42h0Z"
                              style="fill: rgb(250, 250, 250); transform-origin: 46.7351px 169.431px;" id="elrwzi9pu9d"
                              class="animable"></path>
                        <path
                            d="M71.6,191.07l-10.92-2.44a.14.14,0,0,1-.1-.16l0-.05h0l.19.18a24.18,24.18,0,0,1-11.58,4.91,21.89,21.89,0,0,1-3.83.2c-.65,0-1.32-.06-2-.11l-2-.31a24.37,24.37,0,0,1-19.21-19,24.8,24.8,0,0,1,.28-10.76,24,24,0,0,1,5.19-10,24.4,24.4,0,0,1,9.32-6.65,24.72,24.72,0,0,1,10.84-1.66,23.93,23.93,0,0,1,9.95,2.94A24.59,24.59,0,0,1,69.19,162.3a26.19,26.19,0,0,1,1,7.86,24,24,0,0,1-3.63,12V182l5,9.07c-.43-.75-2-3.38-5.22-8.94a.12.12,0,0,1,0-.13,24.05,24.05,0,0,0,3.48-11.85,26,26,0,0,0-1.07-7.73,24.23,24.23,0,0,0-11.31-13.83,23.2,23.2,0,0,0-9.75-2.86,24.18,24.18,0,0,0-10.62,1.64A23.84,23.84,0,0,0,28,153.89a23.44,23.44,0,0,0-5.08,9.73,24.26,24.26,0,0,0-.29,10.54,24,24,0,0,0,18.8,18.72l2,.31c.67.06,1.33.08,2,.12a21.23,21.23,0,0,0,3.77-.18,23.93,23.93,0,0,0,11.47-4.74.12.12,0,0,1,.18,0,.12.12,0,0,1,0,.16h0l-.07-.21Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 46.6454px 169.44px;" id="elhegnc7podr"
                            class="animable"></path>
                        <path
                            d="M39.26,166.9c0-2.17,1.3-3.55,3.16-3.55s3.15,1.36,3.15,3.55-1.29,3.56-3.15,3.56S39.26,169.08,39.26,166.9Zm4.49,0c0-1.38-.53-2-1.33-2s-1.33.68-1.33,2,.55,2,1.33,2S43.75,168.29,43.75,166.9ZM50,163.49h2.16L43.48,176.4H41.31Zm-2.1,9.5c0-2.18,1.31-3.56,3.15-3.56s3.17,1.38,3.17,3.56-1.31,3.56-3.17,3.56S47.91,175.16,47.91,173Zm4.48,0c0-1.37-.53-2.05-1.33-2.05s-1.33.67-1.33,2.05.55,2,1.33,2S52.39,174.35,52.39,173Z"
                            style="fill: rgb(126, 87, 194); transform-origin: 46.74px 169.95px;" id="el83z6am0tgrn"
                            class="animable"></path>
                        <path d="M299.91,267.37l5.11-9a24.07,24.07,0,1,1,5.77,6.43h0Z"
                              style="fill: rgb(250, 250, 250); transform-origin: 324.754px 245.77px;" id="eljm9cx1d6io"
                              class="animable"></path>
                        <path
                            d="M299.91,267.37l10.86-2.69-.07.21h0a.15.15,0,0,1,0-.19.15.15,0,0,1,.16,0,23.94,23.94,0,0,0,11.47,4.75,21.25,21.25,0,0,0,3.77.17c.65,0,1.31-.05,2-.11l2-.31a24.54,24.54,0,0,0,8-3.17,23.73,23.73,0,0,0,10.51-26.09,23.42,23.42,0,0,0-5.08-9.74,23.74,23.74,0,0,0-9.12-6.51A24.15,24.15,0,0,0,323.78,222,23.44,23.44,0,0,0,314,224.9a24.08,24.08,0,0,0-11.3,13.83,25.4,25.4,0,0,0-1.07,7.73,23.88,23.88,0,0,0,3.48,11.85.13.13,0,0,1,0,.12c-3.25,5.57-4.78,8.2-5.22,8.94.42-.75,1.89-3.42,5-9.06v.13a23.92,23.92,0,0,1-3.62-12,25.88,25.88,0,0,1,1-7.86,24.52,24.52,0,0,1,11.46-14.13,23.84,23.84,0,0,1,9.95-2.95,24.59,24.59,0,0,1,10.84,1.67,24.19,24.19,0,0,1,9.32,6.65,23.94,23.94,0,0,1,5.19,10,24.3,24.3,0,0,1-18.93,29.79l-2,.31c-.67.05-1.34.07-2,.1a21,21,0,0,1-3.83-.2,24,24,0,0,1-11.57-4.9l.18-.18h0a.13.13,0,0,1,0,.18l-.05,0Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 324.828px 245.736px;" id="elh3dbul5ra6d"
                            class="animable"></path>
                        <path d="M337.1,245.66l0,0-.07.07.11.1Z"
                              style="fill: rgb(38, 50, 56); transform-origin: 337.085px 245.745px;" id="elgm8ovrb84wd"
                              class="animable"></path>
                        <polygon points="337.23 246.15 336.81 245.77 337.22 245.38 337.23 246.15"
                                 style="fill: rgb(38, 50, 56); transform-origin: 337.02px 245.765px;" id="el1teu0mc0o1f"
                                 class="animable"></polygon>
                        <path
                            d="M337.29,245.66c-1.58-1.46-3-2.77-4.06-3.71l-1.25-1.1a2.41,2.41,0,0,0-.49-.38,2.77,2.77,0,0,0,.41.46c.33.31.72.7,1.19,1.16,1,.95,2.37,2.25,3.9,3.68l.07-.07,0,0v.21l-.11-.1c-1.53,1.46-2.91,2.8-3.91,3.78l-1.18,1.19a3.36,3.36,0,0,0-.41.46,2.13,2.13,0,0,0,.48-.39l1.25-1.12c1-1,2.47-2.3,4-3.79l0,0,.1-.1Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 334.37px 245.855px;" id="elus8dgkex16"
                            class="animable"></path>
                        <path
                            d="M331.49,251.33a.15.15,0,0,1-.09,0c-.1-.11,0-.18.41-.64l1.19-1.19c1-1,2.34-2.29,3.81-3.69-1.44-1.34-2.79-2.61-3.8-3.59L331.82,241c-.45-.46-.52-.53-.42-.64s.17,0,.66.37l1.25,1.1c1.07,1,2.44,2.22,3.88,3.55l0,0v.05l.15.14.2.19-.23.23a.57.57,0,0,0-.11.11v.05l0,0c-1.45,1.39-2.83,2.69-3.89,3.66l-1.24,1.13C331.7,251.22,331.57,251.33,331.49,251.33Zm5.5-5.39-2.21,2.13L337,246Zm-2.17-2.38c.67.64,1.41,1.32,2.17,2h0Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 334.45px 245.828px;" id="elfdyfhaczpek"
                            class="animable"></path>
                        <path
                            d="M318.92,240.93a2.28,2.28,0,0,0,.41-.46,3.69,3.69,0,0,0-.48.39L317.6,242c-1,1-2.46,2.3-4,3.79l0,0-.11.1.11.1c1.57,1.46,3,2.77,4.06,3.71l1.25,1.1a3,3,0,0,0,.48.38,2.91,2.91,0,0,0-.41-.45l-1.19-1.17c-1-1-2.37-2.25-3.9-3.67l-.07.06,0,0v-.2l.11.1c1.54-1.47,2.92-2.81,3.91-3.79Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 316.44px 245.825px;" id="eln2st7wst7s"
                            class="animable"></path>
                        <path
                            d="M319.34,251.33c-.09,0-.22-.11-.57-.41l-1.26-1.1c-1.05-.95-2.42-2.2-3.88-3.55l0,0v-.06l-.15-.14-.2-.19.24-.23.11-.1v-.06l0,0c1.46-1.39,2.83-2.68,3.89-3.66l1.24-1.13c.49-.43.56-.48.66-.38s.05.17-.41.64l-1.18,1.19c-1,1-2.37,2.31-3.82,3.7,1.47,1.35,2.81,2.62,3.81,3.58l1.19,1.17c.46.47.51.52.41.63S319.37,251.33,319.34,251.33Zm-5.52-5.23,2.18,2c-.67-.63-1.4-1.32-2.17-2Zm0-.38h0l2.21-2.12Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 316.372px 245.803px;" id="elf71h5kfutlf"
                            class="animable"></path>
                        <path d="M313.73,246l0,0,.07-.06-.11-.1Z"
                              style="fill: rgb(38, 50, 56); transform-origin: 313.745px 245.92px;" id="el65cyy2o3wsm"
                              class="animable"></path>
                        <polygon points="313.6 246.29 313.6 245.52 314.01 245.91 313.6 246.29"
                                 style="fill: rgb(38, 50, 56); transform-origin: 313.805px 245.905px;"
                                 id="elyovy2lxkl4r" class="animable"></polygon>
                        <path
                            d="M322.45,253.73c.07,0,1.46-3.52,3.11-7.92s2.92-8,2.85-8-1.46,3.51-3.11,7.91S322.38,253.7,322.45,253.73Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 325.43px 245.77px;" id="eluy0ke0fpxwb"
                            class="animable"></path>
                        <path
                            d="M322.46,253.86h0c-.14-.06-.25-.1,2.78-8.18,1.1-2.95,3-7.9,3.17-8l0,0,.06,0c.14,0,.24.09-2.78,8.17-.8,2.13-1.56,4.12-2.15,5.62C322.7,253.58,322.58,253.86,322.46,253.86Zm4.22-11.44c-.38,1-.8,2.11-1.26,3.34l-1.24,3.34c.38-1,.8-2.1,1.26-3.33S326.32,243.41,326.68,242.42Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 325.465px 245.77px;" id="el2eyjracli09"
                            class="animable"></path>
                        <path d="M391.05,176.82l-5.1-9a24.14,24.14,0,1,0-5.78,6.42h0Z"
                              style="fill: rgb(250, 250, 250); transform-origin: 366.16px 155.139px;" id="el9cfghajnq1"
                              class="animable"></path>
                        <path
                            d="M391.05,176.82l-10.92-2.44a.13.13,0,0,1-.09-.15.14.14,0,0,1,0-.06h0l.18.19a24,24,0,0,1-11.58,4.9,21.72,21.72,0,0,1-3.82.2c-.66,0-1.33,0-2-.11l-2-.31a24.22,24.22,0,0,1-18.92-29.78,23.75,23.75,0,0,1,5.18-9.95,24.4,24.4,0,0,1,9.32-6.66A24.79,24.79,0,0,1,367.23,131a23.84,23.84,0,0,1,9.95,3,24.48,24.48,0,0,1,7.35,6.28,24.75,24.75,0,0,1,4.11,7.84,26.27,26.27,0,0,1,1,7.86,24,24,0,0,1-3.63,12v-.12c3.11,5.64,4.58,8.3,5,9.06-.43-.75-2-3.38-5.21-8.94a.15.15,0,0,1,0-.13,23.85,23.85,0,0,0,3.48-11.85,25.75,25.75,0,0,0-1.07-7.73A24.16,24.16,0,0,0,377,134.34a23.58,23.58,0,0,0-9.76-2.86,24.12,24.12,0,0,0-10.61,1.64,23.69,23.69,0,0,0-9.12,6.52,23.32,23.32,0,0,0-5.08,9.73,24.26,24.26,0,0,0-.29,10.54,24,24,0,0,0,18.79,18.72l2,.31c.66.06,1.32.08,2,.12a21.29,21.29,0,0,0,3.77-.17,24,24,0,0,0,11.46-4.75.15.15,0,0,1,.19,0,.15.15,0,0,1,0,.16h0l-.08-.2Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 366.099px 155.205px;" id="el7ihjuxhjlk4"
                            class="animable"></path>
                        <polygon
                            points="365.04 150.69 368.68 149.48 372.32 148.28 371.55 152.03 370.77 155.79 368.79 154.03 360.26 163.61 358.49 162.03 367.02 152.45 365.04 150.69"
                            style="fill: rgb(38, 50, 56); transform-origin: 365.405px 155.945px;" id="el0v9akuw1blz"
                            class="animable"></polygon>
                        <path d="M567.08,198.53l5.11-9A24.18,24.18,0,1,1,578,196v0Z"
                              style="fill: rgb(250, 250, 250); transform-origin: 592.026px 176.873px;"
                              id="elslkgxytx9sd" class="animable"></path>
                        <path
                            d="M567.08,198.53l10.86-2.69-.07.2h0a.13.13,0,0,1,0-.18.15.15,0,0,1,.16,0,23.86,23.86,0,0,0,11.46,4.75,21.25,21.25,0,0,0,3.77.17c.65,0,1.31-.06,2-.11l2-.32a23.79,23.79,0,0,0,18.5-29.26,23.32,23.32,0,0,0-5.08-9.73,23.8,23.8,0,0,0-9.12-6.52A24.28,24.28,0,0,0,591,153.19a23.44,23.44,0,0,0-9.76,2.87,24.08,24.08,0,0,0-11.3,13.83,25.67,25.67,0,0,0-1.07,7.73,23.88,23.88,0,0,0,3.48,11.85.13.13,0,0,1,0,.12c-3.25,5.57-4.78,8.2-5.22,8.94.42-.75,1.89-3.42,5-9.06v.13a24.12,24.12,0,0,1-3.62-12,26.19,26.19,0,0,1,1-7.86A24.44,24.44,0,0,1,581,155.64a23.84,23.84,0,0,1,9.95-2.95,24.59,24.59,0,0,1,10.84,1.67,24.22,24.22,0,0,1,9.33,6.65,23.75,23.75,0,0,1,5.18,10,24.64,24.64,0,0,1,.28,10.76,24.39,24.39,0,0,1-11.06,15.84,24.68,24.68,0,0,1-8.14,3.19l-2.05.3c-.67.06-1.34.07-2,.11a21.72,21.72,0,0,1-3.82-.2,24,24,0,0,1-11.58-4.9l.18-.18h0a.14.14,0,0,1,0,.18l-.06,0Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 592.062px 176.925px;" id="elpfvpv47tetd"
                            class="animable"></path>
                        <path
                            d="M588.24,174.87h1.38l3-4.22v-2.77s2.14-.13,1.89,3.5,0,2.7,0,2.7,4.56,0,4.93.41.4,4.81.45,7.27a2.65,2.65,0,0,1-1.88,2.67,2.07,2.07,0,0,1-.49.07c-1.14,0-6.94-.93-6.94-.93h-2.39Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 594.042px 176.19px;" id="elymaogdanvz"
                            class="animable"></path>
                        <polygon points="584.26 174.11 585.12 183.6 587.49 183.6 587.49 174.3 584.26 174.11"
                                 style="fill: rgb(38, 50, 56); transform-origin: 585.875px 178.855px;"
                                 id="el2l0o8bflwrz" class="animable"></polygon>
                    </g>
                    <g id="freepik--characters-6--inject-2" class="animable"
                       style="transform-origin: 613.302px 298.14px;">
                        <path
                            d="M658,224.78l-3.62,6.8s-1.89,3.78-3.15,6a5.58,5.58,0,0,0-.79,3.94L638,256.15s-1.1,1.58-2.2,1.58-1.26,2-1.26,2L617,271l3.49,9.06s.29,3,1,3,22.64-8.19,25-9.29,12-15.28,12-15.28l1.32-37.43C657.83,221.72,658,224.78,658,224.78Z"
                            style="fill: rgb(126, 87, 194); transform-origin: 638.405px 252.06px;" id="el7jrmewgk1ym"
                            class="animable"></path>
                        <path
                            d="M659.24,174.78a14.65,14.65,0,0,1,14-14.09l.75,0c8.19.12,12.67,7.15,12.32,15.33l-.06,32.76s-12.8,7.55-13.28,7.8l-5.71,4.1.06-18.41s-7.9-.88-8.34-8.73C658.78,189.72,659,181.88,659.24,174.78Z"
                            style="fill: rgb(170, 101, 80); transform-origin: 672.616px 190.685px;" id="ell1qyrgds18"
                            class="animable"></path>
                        <path d="M667.27,202.23a19.1,19.1,0,0,0,10.16-3.46s-2.18,5.76-10,5.39Z"
                              style="fill: rgb(114, 60, 49); transform-origin: 672.35px 201.474px;" id="el11pouvtlwk7"
                              class="animable"></path>
                        <path
                            d="M661.22,180.33a1.13,1.13,0,0,0,1.13,1.09,1.09,1.09,0,0,0,1.12-1.06,1.13,1.13,0,0,0-1.13-1.09A1.09,1.09,0,0,0,661.22,180.33Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 662.345px 180.345px;" id="el4wph8idk1vu"
                            class="animable"></path>
                        <path
                            d="M661.1,178.55c.14.14,1-.53,2.17-.57s2.12.51,2.24.36-.09-.33-.49-.59a3.06,3.06,0,0,0-1.8-.47,2.9,2.9,0,0,0-1.72.64C661.14,178.22,661,178.49,661.1,178.55Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 663.306px 177.922px;" id="elt634bpamcvm"
                            class="animable"></path>
                        <path
                            d="M673.2,180.33a1.13,1.13,0,0,0,1.13,1.09,1.08,1.08,0,0,0,1.12-1.06,1.13,1.13,0,0,0-1.13-1.09A1.09,1.09,0,0,0,673.2,180.33Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 674.325px 180.345px;" id="elvwwu0c8t1ph"
                            class="animable"></path>
                        <path
                            d="M673,178.26c.14.14,1-.52,2.17-.57s2.12.51,2.25.36-.09-.33-.49-.59a3.1,3.1,0,0,0-1.81-.47,3,3,0,0,0-1.72.64C673,177.93,672.9,178.2,673,178.26Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 675.211px 177.633px;" id="elql4ul0rc5xf"
                            class="animable"></path>
                        <path
                            d="M669,187.4a7.85,7.85,0,0,0-2-.27c-.31,0-.6-.06-.66-.27a1.55,1.55,0,0,1,.16-.93c.26-.75.53-1.55.81-2.38a39.94,39.94,0,0,0,1.78-6.23,41.89,41.89,0,0,0-2.27,6.07l-.78,2.4a1.78,1.78,0,0,0-.1,1.22.75.75,0,0,0,.52.42,1.72,1.72,0,0,0,.53,0A7.51,7.51,0,0,0,669,187.4Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 667.483px 182.402px;" id="elk5b9z2acyh"
                            class="animable"></path>
                        <path
                            d="M672.56,188.08c-.19,0-.14,1.31-1.22,2.29s-2.48.89-2.48,1.08.32.24.91.23a3.31,3.31,0,0,0,2.08-.83,2.82,2.82,0,0,0,.94-1.91C672.81,188.39,672.65,188.07,672.56,188.08Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 670.826px 189.88px;" id="elfhumhxwfp3f"
                            class="animable"></path>
                        <path
                            d="M672.45,173.55c.14.32,1.33.11,2.76.22s2.58.45,2.76.14c.08-.14-.14-.44-.61-.74a4.49,4.49,0,0,0-2.07-.62,4.56,4.56,0,0,0-2.13.34C672.65,173.12,672.39,173.39,672.45,173.55Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 675.214px 173.286px;" id="ele3njr8gg18g"
                            class="animable"></path>
                        <path
                            d="M661.39,175c.22.26,1-.06,2-.11s1.86.1,2-.19-.07-.42-.45-.66a2.83,2.83,0,0,0-1.68-.38,2.87,2.87,0,0,0-1.61.62C661.39,174.62,661.29,174.91,661.39,175Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 663.393px 174.375px;" id="eli7u8rp7mw0q"
                            class="animable"></path>
                        <path
                            d="M685.38,181.86c.13-.06,5.33-1.83,5.39,3.55s-5.35,4.32-5.36,4.17S685.38,181.86,685.38,181.86Z"
                            style="fill: rgb(170, 101, 80); transform-origin: 688.075px 185.649px;" id="elaqahdva3xyr"
                            class="animable"></path>
                        <path
                            d="M686.56,187.54s.09.07.25.14a1,1,0,0,0,.7,0,2.36,2.36,0,0,0,1-2.1,3,3,0,0,0-.28-1.33,1.08,1.08,0,0,0-.71-.71.46.46,0,0,0-.55.26c-.07.15,0,.26-.07.27s-.11-.09-.07-.31a.55.55,0,0,1,.21-.34.67.67,0,0,1,.51-.15,1.31,1.31,0,0,1,1,.83,3.12,3.12,0,0,1,.34,1.49,2.43,2.43,0,0,1-1.34,2.34,1,1,0,0,1-.86-.13C686.57,187.67,686.54,187.55,686.56,187.54Z"
                            style="fill: rgb(114, 60, 49); transform-origin: 687.725px 185.62px;" id="elj3x9tdy219p"
                            class="animable"></path>
                        <path
                            d="M681.2,166l-22.37,1.42a10.33,10.33,0,0,1,3.13-3.94,17.53,17.53,0,0,1,10-4.07c3.65-.21,11.27,3.93,14,6.34,2.2,1.92,2.26,3.67,2.26,3.67.45,2.89-1,6.26-1.56,9.13-.28,1.49-.74,6-.74,6h0c-1.23,0-1.73-.92-1.59-2.14l0-4.8a7.24,7.24,0,0,1-2.56-8.35C682.12,168.82,682.71,166.79,681.2,166Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 673.568px 171.976px;" id="el21v7xek89aa"
                            class="animable"></path>
                        <path
                            d="M686.13,166.09a6.64,6.64,0,0,0-7-8,19.36,19.36,0,0,1-3.11.35c-1.95-.13-3.51-1.62-5.33-2.3a6.85,6.85,0,0,0-8,2.75c-.63,1-1,2.32-2,3a12.64,12.64,0,0,1-3,.94,5,5,0,0,0-3.14,5.07,5.86,5.86,0,0,0,3.78,4.79,7.23,7.23,0,0,0,6.17-.69c1.65-1,3.1-2.68,5-2.7s3.83,1.79,5.78,1.32a5.57,5.57,0,0,0,2.5-1.84,4.58,4.58,0,0,1,2.61-1.65c1.05-.1,1.65,1.32,1.32,2.31l4.38-3.39"
                            style="fill: rgb(38, 50, 56); transform-origin: 670.403px 164.423px;" id="elid8ukk4bzp"
                            class="animable"></path>
                        <path
                            d="M659.15,164.6a.46.46,0,0,0,0,.08,1.86,1.86,0,0,0,.14.21,3.73,3.73,0,0,0,.67.7,4,4,0,0,0,1.36.72,3.78,3.78,0,0,0,2,0,4,4,0,0,0,2.09-1.3,25.57,25.57,0,0,0,1.45-2.43,3.27,3.27,0,0,1,1-1,3.1,3.1,0,0,1,1.47-.39,3.31,3.31,0,0,1,1.54.35,2.8,2.8,0,0,1,1.18,1.11,15.53,15.53,0,0,0,.85,1.47,1.85,1.85,0,0,0,1.47.82,2.76,2.76,0,0,0,1.54-.52,6,6,0,0,0,1.15-1,4.9,4.9,0,0,1,2.15-1.67,2.83,2.83,0,0,1,2.28.43,4,4,0,0,1,1.29,1.48,6.5,6.5,0,0,1,.53,1.42,9.11,9.11,0,0,1,.18.95l.06.33s0,0,0-.09,0-.14,0-.25-.06-.55-.15-1a6.32,6.32,0,0,0-.5-1.46,4,4,0,0,0-1.32-1.55,3,3,0,0,0-2.4-.48,5.25,5.25,0,0,0-2.26,1.71,5.29,5.29,0,0,1-1.11,1,2.63,2.63,0,0,1-1.43.48,1.67,1.67,0,0,1-1.3-.74c-.32-.43-.54-1-.84-1.46a3,3,0,0,0-1.26-1.18,3.51,3.51,0,0,0-1.64-.37,3.26,3.26,0,0,0-1.57.42,3.4,3.4,0,0,0-1.11,1.09,26.29,26.29,0,0,1-1.42,2.42,3.89,3.89,0,0,1-2,1.28,3.71,3.71,0,0,1-2,0,4,4,0,0,1-1.35-.67A4.91,4.91,0,0,1,659.15,164.6Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 671.349px 163.707px;" id="elcmoqlgqhfl"
                            class="animable"></path>
                        <path
                            d="M655.09,164.85a1.4,1.4,0,0,0-.07.43,3.4,3.4,0,0,0,.16,1.2,4.24,4.24,0,0,0,.91,1.54,4.86,4.86,0,0,0,1.82,1.22,7.31,7.31,0,0,0,3.93.28,11.13,11.13,0,0,0,1.16-.28,2.11,2.11,0,0,0,.41-.16s-.61.14-1.6.29A7.71,7.71,0,0,1,658,169a5,5,0,0,1-1.76-1.15,4.39,4.39,0,0,1-.9-1.46A5,5,0,0,1,655.09,164.85Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 659.213px 167.259px;" id="elnhaswaxqmzp"
                            class="animable"></path>
                        <path d="M677.2,410.9l4.32,15s-13.76,9.41-13.23,12.25l29.31-7.33-5.78-23.58Z"
                              style="fill: rgb(126, 87, 194); transform-origin: 682.938px 422.695px;" id="eliuqwfsqoki"
                              class="animable"></path>
                        <path
                            d="M690.26,422.32a1.23,1.23,0,0,1,1.17,1.16,1.19,1.19,0,0,1-1.14,1.17,1.31,1.31,0,0,1-1.23-1.24,1.23,1.23,0,0,1,1.32-1.08"
                            style="fill: rgb(224, 224, 224); transform-origin: 690.245px 423.485px;" id="elz9fljc407q8"
                            class="animable"></path>
                        <g id="el091d3wurq7ww">
                            <g style="opacity: 0.6; transform-origin: 682.907px 433.27px;" class="animable">
                                <path d="M697.6,430.78l-.68-2.35-27.84,7.91s-1.17.89-.79,1.77Z"
                                      style="fill: rgb(255, 255, 255); transform-origin: 682.907px 433.27px;"
                                      id="elo8a2wkfdrwf" class="animable"></path>
                            </g>
                        </g>
                        <path d="M681,425.83c0,.14.78,0,1.6.31s1.34.79,1.46.7-.3-.86-1.3-1.19S680.94,425.7,681,425.83Z"
                              style="fill: rgb(38, 50, 56); transform-origin: 682.538px 426.185px;" id="elf2ngyqp6hph"
                              class="animable"></path>
                        <path
                            d="M678.25,427.87c0,.14.68.23,1.32.71s.94,1.09,1.08,1.05,0-.87-.78-1.46S678.22,427.73,678.25,427.87Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 679.474px 428.688px;" id="eljoude92c56b"
                            class="animable"></path>
                        <path d="M677.42,432c.14,0,.16-.77-.4-1.46s-1.31-.83-1.34-.7.48.45.94,1S677.28,432,677.42,432Z"
                              style="fill: rgb(38, 50, 56); transform-origin: 676.591px 430.898px;" id="elqfx7q1stojo"
                              class="animable"></path>
                        <path
                            d="M680.4,422.31c.09.11.7-.25,1.52-.4s1.52-.05,1.56-.19-.69-.5-1.66-.31S680.3,422.21,680.4,422.31Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 681.935px 421.843px;" id="eloeppyqp6a7l"
                            class="animable"></path>
                        <path d="M687.47,414.42l.68,15.55s-15.58,5.92-15.74,8.81l30.21-.24-.06-24.28Z"
                              style="fill: rgb(126, 87, 194); transform-origin: 687.515px 426.52px;" id="elmjn4xuc8q48"
                              class="animable"></path>
                        <path
                            d="M697.48,428.59a1.24,1.24,0,0,1,.87,1.4,1.19,1.19,0,0,1-1.39.87,1.3,1.3,0,0,1-.9-1.49,1.22,1.22,0,0,1,1.53-.74"
                            style="fill: rgb(224, 224, 224); transform-origin: 697.202px 429.726px;" id="elrg9fbyd7rv"
                            class="animable"></path>
                        <g id="elwhy31q5jme9">
                            <g style="opacity: 0.6; transform-origin: 687.509px 437.435px;" class="animable">
                                <path d="M702.62,438.54l-.1-2.45-28.92,1.14s-1.34.6-1.19,1.55Z"
                                      style="fill: rgb(255, 255, 255); transform-origin: 687.509px 437.435px;"
                                      id="elpt4h8qsolc" class="animable"></path>
                            </g>
                        </g>
                        <path
                            d="M687.66,429.82c0,.15.74.21,1.47.68s1.13,1.09,1.26,1-.09-.91-1-1.46S687.63,429.69,687.66,429.82Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 689.042px 430.592px;" id="eluq2ka8bs2ge"
                            class="animable"></path>
                        <path
                            d="M684.5,431.16c0,.14.61.39,1.12,1s.65,1.28.8,1.27.23-.84-.41-1.6S684.5,431,684.5,431.16Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 685.512px 432.26px;" id="el0yqbng2mslam"
                            class="animable"></path>
                        <path
                            d="M682.73,435c.14,0,.34-.71-.05-1.52s-1.08-1.12-1.14-1,.37.56.68,1.22S682.59,435,682.73,435Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 682.221px 433.728px;" id="el45y1j3u205g"
                            class="animable"></path>
                        <path
                            d="M687.9,426.26c.06.14.74-.07,1.57,0s1.49.31,1.56.18-.55-.65-1.53-.7S687.83,426.15,687.9,426.26Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 689.465px 426.107px;" id="elswrnad60wg"
                            class="animable"></path>
                        <path
                            d="M706.16,300.6v12.29l-3.3,47.92s2,23.25,3.31,36.37c1.1,11.39-.69,31.24-.69,31.24H686.25l-6.88-66.19L675.1,321l-7.43-18.79Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 687.099px 364.51px;" id="eldirxveac0nl"
                            class="animable"></path>
                        <polygon
                            points="654.52 302.79 659.21 369.59 678.66 419.64 679.55 422.65 691.04 419.88 682.5 301.44 654.52 302.79"
                            style="fill: rgb(38, 50, 56); transform-origin: 672.78px 362.045px;" id="eltczr4uw79i"
                            class="animable"></polygon>
                        <path
                            d="M675.15,321.45a2,2,0,0,0,0,.28c0,.2,0,.47,0,.82,0,.73.06,1.78.1,3.13.08,2.72.27,6.66.55,11.52.58,9.72,1.66,23.13,3.35,37.89s3.49,28.09,4.83,37.73c.68,4.81,1.24,8.7,1.62,11.42.2,1.33.35,2.37.46,3.1,0,.34.09.61.12.8a2.52,2.52,0,0,0,.06.28,1.18,1.18,0,0,0,0-.28l-.09-.81c-.09-.73-.22-1.78-.39-3.11-.36-2.72-.87-6.62-1.51-11.43-1.27-9.65-3.07-23-4.73-37.74s-2.8-28.16-3.45-37.87c-.31-4.86-.54-8.79-.66-11.51-.07-1.34-.13-2.39-.17-3.13l-.05-.81A1.07,1.07,0,0,0,675.15,321.45Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 680.697px 374.935px;" id="elfmkiwe0h2t4"
                            class="animable"></path>
                        <path
                            d="M691.65,301.82a2.18,2.18,0,0,0,.08.7,10.67,10.67,0,0,0,.54,1.86,12.31,12.31,0,0,0,9.58,7.7,11.6,11.6,0,0,0,1.93.13,2.15,2.15,0,0,0,.71-.08c0-.06-1,0-2.6-.3a13.18,13.18,0,0,1-5.64-2.6,13,13,0,0,1-3.74-5C691.87,302.81,691.71,301.8,691.65,301.82Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 698.069px 307.016px;" id="els6wkt4b6yw"
                            class="animable"></path>
                        <path d="M673.93,304.73a1,1,0,1,0,1-1A1,1,0,0,0,673.93,304.73Z"
                              style="fill: rgb(69, 90, 100); transform-origin: 674.93px 304.73px;" id="el5o1krnxciru"
                              class="animable"></path>
                        <path
                            d="M657,314.07a6.28,6.28,0,0,0,1.36-1.27,15.63,15.63,0,0,0,2.42-3.79,15.81,15.81,0,0,0,1.21-4.32,6.27,6.27,0,0,0,0-1.86c-.06,0-.1.71-.29,1.82a18.76,18.76,0,0,1-1.29,4.22,17.89,17.89,0,0,1-2.29,3.76A18.37,18.37,0,0,0,657,314.07Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 659.53px 308.45px;" id="elua1qsqabo4"
                            class="animable"></path>
                        <path
                            d="M667.14,211.66a15.8,15.8,0,0,1-1.07,2.65,5.89,5.89,0,0,1-1.62,2.38c-.07-.07.64-1.1,1.27-2.54A8.22,8.22,0,0,1,667.14,211.66Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 665.793px 214.175px;" id="elionixlouitl"
                            class="animable"></path>
                        <path
                            d="M670.2,210.74l16-13.46,3.36,5.17s13.94,10.21,16.59,13.1l-3.49,46.39s3.73,24.39,4,26.31S709.06,307,709.06,307c.28,3.19-2.34,7.06-2.88,7.06,0,0-2.7-3.22-5.58-3s-22.47,5.53-22.47,5.53l-23.8-5.29,2.53-46.87-.44-30.27,3.36-13.1,4.69-4.68,2.8-7.33s.88,9.35,1,9S670.2,210.74,670.2,210.74Z"
                            style="fill: rgb(126, 87, 194); transform-origin: 681.705px 256.935px;" id="el1hfsdrc87tz"
                            class="animable"></path>
                        <path
                            d="M689.12,203.27a5.55,5.55,0,0,1-.64.87c-.44.54-1.09,1.31-1.92,2.23-1.65,1.86-4.07,4.29-6.69,7-1.3,1.35-2.51,2.65-3.56,3.88l-.13.14-.13-.13c-1.77-1.76-3-3.44-4-4.56l-1.15-1.3a2.83,2.83,0,0,1-.4-.48,2.63,2.63,0,0,1,.49.4c.29.27.71.69,1.22,1.24,1,1.08,2.35,2.73,4.11,4.45H676c1.05-1.25,2.25-2.57,3.55-3.92,2.63-2.73,5.07-5.12,6.77-6.92.86-.9,1.53-1.64,2-2.15A5.78,5.78,0,0,1,689.12,203.27Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 679.81px 210.33px;" id="el9khpwu58hnb"
                            class="animable"></path>
                        <path
                            d="M662.1,287.63v-.18c0-.14,0-.31,0-.53,0-.5.06-1.18.11-2,.12-1.8.29-4.35.49-7.49.44-6.32,1.08-15.06,1.84-24.7s1.53-18.37,2.15-24.68c.31-3.16.6-5.71.81-7.47.12-.85.21-1.53.28-2,0-.21.06-.39.08-.53a1.37,1.37,0,0,1,0-.17s0,.06,0,.18,0,.31,0,.53c0,.49-.12,1.17-.21,2-.16,1.8-.4,4.34-.69,7.47-.55,6.32-1.27,15-2,24.69s-1.45,18.34-2,24.69c-.25,3.14-.46,5.68-.61,7.48-.08.86-.14,1.54-.19,2,0,.21,0,.38-.05.53S662.11,287.63,662.1,287.63Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 664.974px 252.755px;" id="elrret6dtff7a"
                            class="animable"></path>
                        <path
                            d="M679.34,297.4c-.05.1-5-2.57-11.05-6s-10.91-6.2-10.86-6.3,5,2.58,11.05,6S679.39,297.31,679.34,297.4Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 668.385px 291.25px;" id="eldaaoppuhj8"
                            class="animable"></path>
                        <path
                            d="M663.67,313.45a4.26,4.26,0,0,1,0-1c0-.7.09-1.57.14-2.62.1-2.22.12-5.28.08-8.66s-.06-6.46,0-8.68c0-1,0-1.93,0-2.63a4.33,4.33,0,0,1,.07-1,5.73,5.73,0,0,1,.08,1c0,.7.06,1.58.1,2.63.06,2.22.12,5.28.15,8.67s0,6.47-.18,8.68c-.08,1.11-.18,2-.27,2.63A5,5,0,0,1,663.67,313.45Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 663.97px 301.155px;" id="eluw1zkmyh43"
                            class="animable"></path>
                        <g id="eljg4r7qvj2aq">
                            <g style="opacity: 0.3; transform-origin: 689.469px 251.42px;" class="animable">
                                <path
                                    d="M687.5,255.46a113.32,113.32,0,0,0,.53-17.23c1.73,4.65,2.53,12.65,3.53,17.56l-2,8.82h0A13.42,13.42,0,0,1,687.5,255.46Z"
                                    id="els8x83zznbpd" class="animable"
                                    style="transform-origin: 689.469px 251.42px;"></path>
                            </g>
                        </g>
                        <g id="elm94sr3amme">
                            <g style="opacity: 0.3; transform-origin: 677.895px 212.565px;" class="animable">
                                <path
                                    d="M668.53,217.82c.06-.13.11-.26.17-.4a19.45,19.45,0,0,1,1.7-3.1,55.27,55.27,0,0,1,5.21,5.5c2.39-2.49,4.78-5,6.94-7.69a57.82,57.82,0,0,0,4.71-6.82l-11.09,11.83-6-6.4Z"
                                    id="el4a2hgp1be0a" class="animable"
                                    style="transform-origin: 677.895px 212.565px;"></path>
                            </g>
                        </g>
                        <path
                            d="M684.17,220a2.83,2.83,0,0,1,.38-.72,12.52,12.52,0,0,1,1.37-1.74,27.21,27.21,0,0,1,2.4-2.24,11.45,11.45,0,0,1,3.4-2.19,9.66,9.66,0,0,1,4-.41,26.06,26.06,0,0,1,3.24.49c.92.17,1.66.32,2.17.43a4.55,4.55,0,0,1,.78.2,2.76,2.76,0,0,1-.81-.06c-.52-.06-1.27-.16-2.18-.3s-2-.34-3.23-.41a9.67,9.67,0,0,0-3.87.42,11.86,11.86,0,0,0-3.3,2.1c-.95.78-1.78,1.51-2.43,2.16C684.81,219,684.22,220,684.17,220Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 693.04px 216.322px;" id="elpkmlqzozil"
                            class="animable"></path>
                        <path
                            d="M706.13,215.55s4.11,6.55,4.75,9.74,2.24,36.89,1.6,37.53a16.79,16.79,0,0,1-1.76,1.43s3.68.8,2.56,2.72a33,33,0,0,1-2.24,3.35s-.55,6.23-1.23,6.39-4.56,2.35-4.56,2.35-9.12-2.34-13.61-8.07c-1.72-2.2-2.12-6.38-2.12-6.38l.89-6.61a29.17,29.17,0,0,0-.17-9.6l-4.43-19.75s-3.08-8.69,2.47-12.24S704,212,706.13,215.55Z"
                            style="fill: rgb(126, 87, 194); transform-origin: 699.225px 246.169px;" id="elqu1zbrj8ct"
                            class="animable"></path>
                        <path
                            d="M710.9,264.12s-.19.12-.56.24a5.49,5.49,0,0,1-1.67.25,3,3,0,0,1-1.15-.29,9.31,9.31,0,0,1-1.16-.67c-.78-.52-1.57-1.14-2.44-1.74-1.75-1.21-3.38-2.23-4.56-3a13.52,13.52,0,0,1-1.87-1.28,12.74,12.74,0,0,1,2,1c1.22.7,2.88,1.68,4.64,2.9.88.61,1.68,1.25,2.42,1.77a4.64,4.64,0,0,0,2.13,1,7,7,0,0,0,1.61-.13A2.82,2.82,0,0,1,710.9,264.12Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 704.195px 261.12px;" id="elsusr72oabi"
                            class="animable"></path>
                        <path
                            d="M711,270.32a1.67,1.67,0,0,1-.71.17,3.84,3.84,0,0,1-2-.36,31.93,31.93,0,0,1-5.54-3.49,53,53,0,0,1-4.85-4.36c-.59-.59-1.06-1.08-1.38-1.42a3,3,0,0,1-.46-.56,20.09,20.09,0,0,1,2,1.78c1.22,1.13,2.91,2.7,4.9,4.26a41.46,41.46,0,0,0,5.41,3.55,4.07,4.07,0,0,0,1.85.45A4.9,4.9,0,0,1,711,270.32Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 703.53px 265.403px;" id="elk8mq22zokwa"
                            class="animable"></path>
                        <g id="elimqseflzlrf">
                            <g style="opacity: 0.3; transform-origin: 704.239px 262.086px;" class="animable">
                                <path
                                    d="M697.65,257.83a13.4,13.4,0,0,0,2.71,2.87l4.75,4.15c.91.79,2,1.64,3.19,1.47a4,4,0,0,0,1.66-.78c.46-.32,1-.79.84-1.34a4.7,4.7,0,0,1-4-.43,11.68,11.68,0,0,1-1.45-1.18,35.91,35.91,0,0,0-7.61-4.67"
                                    id="el2zbk3j8buuc" class="animable"
                                    style="transform-origin: 704.239px 262.086px;"></path>
                            </g>
                        </g>
                        <path
                            d="M691.64,271s-2.73,42.07-3,43-2.94,3.72-3.55,4.24-4.51,12.56-4.51,12.56,1.56,1.48,2.69,0a4.73,4.73,0,0,0,1.13-2.6s.89,4.08,1.48,4.34a4.42,4.42,0,0,0,1.9,0l.34-1.3s.35,1.7,1.39,1.41,1.67-1.76,1.67-1.76.1,1.8,1.28,1.39,1.49-2.12,1.49-2.12,2.87.47,3.07-.4,1.5-3.9,1.5-3.9V314.69l6-35.9S695.2,273,691.64,271Z"
                            style="fill: rgb(170, 101, 80); transform-origin: 692.55px 301.842px;" id="elxcorz6k97kq"
                            class="animable"></path>
                        <path
                            d="M711,270.32a3.9,3.9,0,0,1,0,.82l-.24,2.33c-.06.51-.12,1.06-.18,1.67a3.09,3.09,0,0,1-.21,1,1.8,1.8,0,0,1-.75.82l-4.28,2.3-.08,0-.08,0a46,46,0,0,1-6.51-3.44c-2.28-1.38-4.69-2.92-7.18-4.61h0a5.22,5.22,0,0,1-1.72-3,10.61,10.61,0,0,1-.3-3.47,32.76,32.76,0,0,1,.49-3.5c.22-1.13.35-2.24.47-3.35a36.75,36.75,0,0,0,0-6.38,62.05,62.05,0,0,0-1.9-10.68c-.78-3-1.52-5.39-2-7.05l-.56-1.92a3,3,0,0,1-.17-.68,3.57,3.57,0,0,1,.27.65c.17.48.38,1.11.66,1.89.55,1.64,1.35,4,2.17,7a59.17,59.17,0,0,1,2,10.73,37.7,37.7,0,0,1,0,6.47c-.17,2.25-.77,4.52-1,6.83a10.5,10.5,0,0,0,.28,3.32,4.93,4.93,0,0,0,1.47,2.68h0c2.47,1.69,4.88,3.24,7.14,4.63a46.14,46.14,0,0,0,6.39,3.47h-.15l4.3-2.23a1.48,1.48,0,0,0,.65-.66,2.89,2.89,0,0,0,.2-.89c.09-.61.16-1.16.23-1.67.14-1,.26-1.73.34-2.31A5.12,5.12,0,0,1,711,270.32Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 698.411px 255.22px;" id="el02l5z6bt8nxf"
                            class="animable"></path>
                        <path
                            d="M656.42,229.44c.14,0,.28,9.84.31,22s-.07,22-.21,22-.28-9.83-.31-22S656.27,229.44,656.42,229.44Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 656.47px 251.44px;" id="elhmmq66ppwk7"
                            class="animable"></path>
                        <path
                            d="M667.16,217.88a10.64,10.64,0,0,1-1-3.93l-.07-.54.48.1a13,13,0,0,1-1.93,2.93,13.22,13.22,0,0,1,1.48-3.19l.38-.69.11.79.06.53A30.58,30.58,0,0,1,667.16,217.88Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 665.9px 215.22px;" id="eldkzel0rugkp"
                            class="animable"></path>
                        <path
                            d="M549.3,176.81c1.76-.13,3,1.73,3.44,3.44s.59,3.63,1.81,4.89,3.56,1.53,5,2.85a4.8,4.8,0,0,1,1.35,3.54,9.27,9.27,0,0,1-1,3.74,9.1,9.1,0,0,0-1.09,2.94,12.26,12.26,0,0,0,.49,3.22,8.48,8.48,0,0,1-4.76,8.92,5.44,5.44,0,0,0,2.42,1.43c-1.09,1.45-3.27,1.33-5,1a44.3,44.3,0,0,1-14.56-5.94"
                            style="fill: rgb(38, 50, 56); transform-origin: 549.152px 194.897px;" id="els1oyv9s70r"
                            class="animable"></path>
                        <path
                            d="M550.85,190.19c-.23-5.15-5.68-10.39-10.82-9.94l-16.68,2.87v2.77l-.13,35.73,19.41,8.47-.3-13.41s6.59-1,8.11-9.52C551.2,202.9,551.11,195.91,550.85,190.19Z"
                            style="fill: rgb(255, 190, 157); transform-origin: 537.129px 205.156px;" id="elfs2kxnyss4s"
                            class="animable"></path>
                        <path
                            d="M548.85,195.81a1.1,1.1,0,0,1-1.08,1.09,1.05,1.05,0,0,1-1.11-1,1.1,1.1,0,0,1,1.08-1.09A1,1,0,0,1,548.85,195.81Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 547.755px 195.853px;" id="el8cc146xuwi"
                            class="animable"></path>
                        <path
                            d="M549.27,193.8c-.14.14-1-.49-2.15-.51s-2.06.56-2.18.41.08-.32.46-.59a3.07,3.07,0,0,1,1.76-.51,2.88,2.88,0,0,1,1.7.59C549.22,193.47,549.34,193.73,549.27,193.8Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 547.097px 193.21px;" id="elb1bpl30zyx6"
                            class="animable"></path>
                        <path
                            d="M537.78,195.76a1.11,1.11,0,0,1-1.08,1.1,1.05,1.05,0,0,1-1.12-1,1.1,1.1,0,0,1,1.08-1.09A1.05,1.05,0,0,1,537.78,195.76Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 536.68px 195.815px;" id="elcjcre4245v9"
                            class="animable"></path>
                        <path
                            d="M537.63,193.81c-.14.14-1-.49-2.14-.51s-2.06.56-2.19.41.08-.32.47-.59a3,3,0,0,1,1.75-.5,2.85,2.85,0,0,1,1.7.58C537.58,193.49,537.7,193.75,537.63,193.81Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 535.455px 193.224px;" id="ely1txetl8td"
                            class="animable"></path>
                        <path
                            d="M541.77,202.66a8.48,8.48,0,0,1,1.93-.31c.3,0,.59-.08.64-.29a1.47,1.47,0,0,0-.18-.89c-.27-.74-.56-1.51-.85-2.32a37.65,37.65,0,0,1-1.9-6.06,40.28,40.28,0,0,1,2.38,5.89l.81,2.33a1.76,1.76,0,0,1,.14,1.19.78.78,0,0,1-.51.43,1.6,1.6,0,0,1-.51.06A7.25,7.25,0,0,1,541.77,202.66Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 543.098px 197.766px;" id="el9p46i0kzedc"
                            class="animable"></path>
                        <path d="M542.34,216.68a21.81,21.81,0,0,1-11.43-3.27s2.94,6.05,11.54,5.4Z"
                              style="fill: rgb(235, 153, 110); transform-origin: 536.68px 216.134px;" id="el6kwdsuwm3nj"
                              class="animable"></path>
                        <path
                            d="M541.22,205.51a2.14,2.14,0,0,0-1.9-.83,1.93,1.93,0,0,0-1.35.7,1.23,1.23,0,0,0-.12,1.41,1.43,1.43,0,0,0,1.54.42,4.52,4.52,0,0,0,1.53-.88,1.22,1.22,0,0,0,.34-.34.38.38,0,0,0,0-.44"
                            style="fill: rgb(126, 87, 194); transform-origin: 539.506px 205.978px;" id="el5c0sqvn6n5q"
                            class="animable"></path>
                        <path
                            d="M538.27,203.42c.2,0,.18,1.28,1.26,2.21s2.45.81,2.46,1-.31.25-.89.25a3.18,3.18,0,0,1-2.05-.76,2.76,2.76,0,0,1-1-1.85C538,203.73,538.19,203.41,538.27,203.42Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 540.016px 205.15px;" id="elijh4di2prak"
                            class="animable"></path>
                        <path
                            d="M538,189.18c-.12.32-1.3.15-2.69.29s-2.52.5-2.7.21.12-.44.58-.74a4.4,4.4,0,0,1,2-.67,4.54,4.54,0,0,1,2.1.29C537.82,188.77,538.07,189,538,189.18Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 535.284px 189.019px;" id="el2j5ve9vf6fr"
                            class="animable"></path>
                        <path
                            d="M548.89,190.36c-.21.27-1,0-2-.05s-1.81.14-2-.14.06-.41.42-.65a2.71,2.71,0,0,1,1.64-.41,2.78,2.78,0,0,1,1.59.56C548.88,190,549,190.24,548.89,190.36Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 546.877px 189.791px;" id="el9unirx3fd6"
                            class="animable"></path>
                        <path
                            d="M554,187.21a5.82,5.82,0,0,1-.88-3.6,33.91,33.91,0,0,0,.11-3.77,8,8,0,0,0-6.81-7c-4.41-.39-8,3.3-8,3.3h0a3.17,3.17,0,0,0-.37-.51,5.75,5.75,0,0,0-2.79-1.62,6.48,6.48,0,0,0-4.45.11c-1.15.52-2,1.52-3.24,2s-2.84.2-4.26.37c-3.09.36-5.56,3-6.69,5.86A32.75,32.75,0,0,0,515,192.6a9.42,9.42,0,0,0-1.73,2.89c-.56,2,.48,4,1.41,5.83a14.27,14.27,0,0,1,1,2.23,5.92,5.92,0,0,1,0,1.33,2.73,2.73,0,0,1-2.11,2.6,11.39,11.39,0,0,0,7.06,3,5.41,5.41,0,0,1-1.94,3.23,8,8,0,0,0,10.6-8.05c-.13-2-1-3.88-.7-5.82s1.5-3.41,2.2-5.16a9,9,0,0,0,.62-3.08,5.62,5.62,0,0,0,.85-2.16c.34-2.09-.7-4.21-.58-6.3a3.08,3.08,0,0,1,.35-.58,3.83,3.83,0,0,1,2.74-1.12,14.89,14.89,0,0,0,2.91-.3,4,4,0,0,0,2.89,1.44c2,0,5.67-.33,6.37,1.77a10.52,10.52,0,0,0,2.66,4.67c1.33,1.19,2.36,1.93,4.15,1.85s3.69-.84,3.59-2.63A2.74,2.74,0,0,1,554,187.21Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 535.228px 193.48px;" id="el9eh4ksdqkp"
                            class="animable"></path>
                        <path
                            d="M558.37,187.38s0,.1-.16.26a2.42,2.42,0,0,1-.65.59,3.57,3.57,0,0,1-3.15.37,3.28,3.28,0,0,1-1.74-1.45,6.38,6.38,0,0,1-.8-2.45c-.13-.89-.13-1.82-.24-2.76a5.78,5.78,0,0,0-.84-2.68,5.49,5.49,0,0,0-4.8-2.11,9.43,9.43,0,0,0-4.3,1.42,28.33,28.33,0,0,0-2.59,1.76,4.85,4.85,0,0,1-1,.65,5,5,0,0,1,.84-.81,21.76,21.76,0,0,1,2.53-1.92,9.55,9.55,0,0,1,4.47-1.58,7.15,7.15,0,0,1,2.81.42,5,5,0,0,1,2.44,1.88,6.14,6.14,0,0,1,.92,2.92c.1,1,.1,1.89.21,2.75a6,6,0,0,0,.69,2.29,3,3,0,0,0,1.5,1.33,3.51,3.51,0,0,0,2.92-.2A7.17,7.17,0,0,0,558.37,187.38Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 548.235px 182.734px;" id="elapiu6qsm3rs"
                            class="animable"></path>
                        <path
                            d="M514.32,208.29a3.18,3.18,0,0,0,1.73-.64,2.6,2.6,0,0,0,1-1.84,2.44,2.44,0,0,0-.22-1.28,8.38,8.38,0,0,0-.82-1.3,3.6,3.6,0,0,1-.75-1.64,3.55,3.55,0,0,1,.48-1.91,7.29,7.29,0,0,0,.74-1.79,5.58,5.58,0,0,0-.05-2c-.11-.71-.29-1.44-.35-2.23a8.08,8.08,0,0,1,.17-2.39,8.67,8.67,0,0,1,2.4-4.37,12.34,12.34,0,0,1,4.31-2.47,12.56,12.56,0,0,0,3.92-2.11c1.08-.92,1.43-2.3,2.22-3.4a4.69,4.69,0,0,1,3.15-1.88,4.4,4.4,0,0,1,3,.59,4.69,4.69,0,0,1,1.59,1.63,4.21,4.21,0,0,1,.51,1.35,1.46,1.46,0,0,1,0,.5,6.27,6.27,0,0,0-.72-1.74,4.62,4.62,0,0,0-1.57-1.49,4.16,4.16,0,0,0-2.76-.48,4.37,4.37,0,0,0-2.85,1.77c-.71,1-1.07,2.46-2.24,3.5-2.26,2.12-5.84,2.29-8.2,4.61a8.09,8.09,0,0,0-2.26,4.1,7.43,7.43,0,0,0-.17,2.24,20.3,20.3,0,0,0,.33,2.19,6.26,6.26,0,0,1,0,2.2,7.81,7.81,0,0,1-.8,1.9,3.06,3.06,0,0,0-.47,1.67,3.25,3.25,0,0,0,.65,1.47,9.26,9.26,0,0,1,.83,1.37,3,3,0,0,1,.2,1.45,2.8,2.8,0,0,1-2.5,2.48C514.49,208.35,514.32,208.31,514.32,208.29Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 525.846px 192.667px;" id="elv23bwtmr6k"
                            class="animable"></path>
                        <path
                            d="M550.81,175.52c0,.08-.74-.42-2-.82a8.29,8.29,0,0,0-9.26,2.89c-.82,1.06-1.1,1.87-1.19,1.84a4.53,4.53,0,0,1,.89-2.05,8.06,8.06,0,0,1,9.68-3A4.52,4.52,0,0,1,550.81,175.52Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 544.585px 176.619px;" id="el9qqg1n8glqn"
                            class="animable"></path>
                        <path
                            d="M534.83,424.91l-.51.61s6.93,12.9,5.39,15L519.09,423.1l6.07-6.63A15.42,15.42,0,0,0,534.83,424.91Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 529.512px 428.495px;" id="el7dfebhl1ar3"
                            class="animable"></path>
                        <g id="el7b8pfumy0ic">
                            <g style="opacity: 0.6; transform-origin: 524.941px 421.356px;" class="animable">
                                <path
                                    d="M525.4,420.43a1.09,1.09,0,0,0-1.39.47,1,1,0,0,0,.45,1.38,1.16,1.16,0,0,0,1.47-.5,1.1,1.1,0,0,0-.63-1.39"
                                    style="fill: rgb(255, 255, 255); transform-origin: 524.941px 421.356px;"
                                    id="elmdjo7j9y0ue" class="animable"></path>
                            </g>
                        </g>
                        <g id="elgac1fp597v9">
                            <g style="opacity: 0.6; transform-origin: 529.554px 431px;" class="animable">
                                <path d="M519.09,423.1l1.46-1.59,19.23,17.25s.58,1.17-.07,1.73Z"
                                      style="fill: rgb(255, 255, 255); transform-origin: 529.554px 431px;"
                                      id="ellchv11a2cfj" class="animable"></path>
                            </g>
                        </g>
                        <path
                            d="M534.34,425.64c-.08.1-.63-.28-1.39-.37s-1.39.1-1.45,0,.58-.58,1.51-.45S534.44,425.57,534.34,425.64Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 532.924px 425.227px;" id="els69k7r6azhg"
                            class="animable"></path>
                        <path
                            d="M535.75,428.36c-.06.12-.64-.08-1.34.06s-1.18.5-1.27.41.32-.71,1.19-.86S535.83,428.26,535.75,428.36Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 534.442px 428.392px;" id="el8cuz1zcfk9y"
                            class="animable"></path>
                        <path d="M534.8,432c-.11-.06.17-.68.9-1s1.38-.16,1.35,0-.57.17-1.16.45S534.91,432.06,534.8,432Z"
                              style="fill: rgb(38, 50, 56); transform-origin: 535.914px 431.411px;" id="ell40wtv4owfj"
                              class="animable"></path>
                        <path
                            d="M562.43,306.67s8.65,64.54,8.65,69.28-7.28,61.45-7.28,61.45L551.45,432l2.47-54.78-9.48-65.37Z"
                            style="fill: rgb(255, 190, 157); transform-origin: 557.76px 372.035px;" id="elyq1s3ra0mw"
                            class="animable"></path>
                        <path
                            d="M564.29,431.56l0,.8s13.67,5.15,13.87,7.72l-26.92.44.22-9A15.39,15.39,0,0,0,564.29,431.56Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 564.7px 436.02px;" id="elc2fn2efd57"
                            class="animable"></path>
                        <g id="elypxjj003yu">
                            <g style="opacity: 0.6; transform-origin: 554.532px 435.385px;" class="animable">
                                <path
                                    d="M554.26,434.38a1.1,1.1,0,0,0-.74,1.27,1.06,1.06,0,0,0,1.25.74,1.15,1.15,0,0,0,.77-1.34,1.08,1.08,0,0,0-1.38-.63"
                                    style="fill: rgb(255, 255, 255); transform-origin: 554.532px 435.385px;"
                                    id="elvm41v4ftnr" class="animable"></path>
                            </g>
                        </g>
                        <g id="elwipamyem8y">
                            <g style="opacity: 0.6; transform-origin: 564.725px 439.445px;" class="animable">
                                <path d="M551.26,440.52l.06-2.15,25.78.36s1.21.51,1.08,1.35Z"
                                      style="fill: rgb(255, 255, 255); transform-origin: 564.725px 439.445px;"
                                      id="els54t36m9lw9" class="animable"></path>
                            </g>
                        </g>
                        <path
                            d="M564.41,432.44c0,.13-.66.2-1.3.63s-1,1-1.1.94.06-.81.85-1.32S564.43,432.31,564.41,432.44Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 563.197px 433.169px;" id="elpem6ubqwmmh"
                            class="animable"></path>
                        <path
                            d="M567.25,433.56c0,.12-.53.36-1,.92s-.56,1.15-.69,1.15-.23-.75.33-1.44S567.24,433.43,567.25,433.56Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 566.354px 434.568px;" id="elbzarh31dpt"
                            class="animable"></path>
                        <path
                            d="M568.91,436.91c-.12,0-.31-.62,0-1.35s.94-1,1-.91-.32.5-.58,1.1S569,436.89,568.91,436.91Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 569.329px 435.772px;" id="elpwgqa35rw5m"
                            class="animable"></path>
                        <polygon
                            points="540.03 366.39 541.34 373.35 536.83 380.19 524.39 418.6 534.32 425.52 562.59 375.22 540.03 366.39"
                            style="fill: rgb(255, 190, 157); transform-origin: 543.49px 395.955px;" id="elddzwose5q3b"
                            class="animable"></polygon>
                        <path
                            d="M526,289v2.1s-4.66,14.67-4.45,24.1,12.43,28.12,12.43,28.12l3.63,34.29,35.06.22-10.26-73.59-1.63-17.84Z"
                            style="fill: rgb(126, 87, 194); transform-origin: 547.107px 332.115px;" id="el21prj92bcdp"
                            class="animable"></path>
                        <path
                            d="M522.59,220.15l.09,2.28s-4.53,4.53-6,9.26-.55,41.82-1.09,46.18,4.18,10.73,10.18,11.28l38.91-2.91a7.26,7.26,0,0,0,4.18-5.64c.73-4.36-25-54.85-24.21-53.06l-2.38-5.67S530,217.41,522.59,220.15Z"
                            style="fill: rgb(235, 235, 235); transform-origin: 542.212px 254.205px;" id="eldd13y4ispt"
                            class="animable"></path>
                        <path
                            d="M560.67,288.33a1.91,1.91,0,0,1,.22.72,10.55,10.55,0,0,1,.17,2.06,9.78,9.78,0,0,1-.53,3,8.42,8.42,0,0,1-2,3.22,7.34,7.34,0,0,1-3.27,1.93,6.53,6.53,0,0,1-3.1.05,5.3,5.3,0,0,1-1.91-.83c-.41-.28-.58-.49-.56-.51a9,9,0,0,0,2.54,1,6.5,6.5,0,0,0,2.9-.16,7.1,7.1,0,0,0,3-1.83,9.19,9.19,0,0,0,2.52-5.9C560.8,289.4,560.58,288.34,560.67,288.33Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 555.375px 293.901px;" id="el60u01q1xp5n"
                            class="animable"></path>
                        <path
                            d="M557.32,377a.63.63,0,0,1-.05-.22c0-.19-.06-.4-.1-.67l-.33-2.56c-.27-2.28-.65-5.49-1.11-9.44-.91-8-2.09-19-3.3-31.18s-2.2-23.22-2.86-31.22c-.31-4-.56-7.19-.74-9.48-.07-1.08-.13-1.94-.17-2.57,0-.27,0-.49,0-.68a.88.88,0,0,1,0-.23,1.16,1.16,0,0,1,.05.23l.08.67c.06.63.15,1.49.26,2.57.22,2.28.53,5.5.9,9.46.78,8,1.84,19,3,31.2s2.33,23.17,3.14,31.19c.4,4,.72,7.17.95,9.46.1,1.08.18,1.94.23,2.57l.05.67A.68.68,0,0,1,557.32,377Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 552.991px 332.875px;" id="elhboiv3z5rph"
                            class="animable"></path>
                        <path
                            d="M526.18,327.05c0-.05.66-.05,1.83-.18a6.9,6.9,0,0,0,2-.54l2.6-1.17a11.57,11.57,0,0,0,5.28-4.87,9.57,9.57,0,0,0,1-4.12,39.62,39.62,0,0,0-.2-4.68c-.13-1.61-.25-3.18-.37-4.7,0-.76-.11-1.5-.16-2.24a3.49,3.49,0,0,0-.57-1.89A2,2,0,0,0,536,302l-1.93,0-3.46,0-5-.09-1.36-.05a1.58,1.58,0,0,1-.48-.06,2.7,2.7,0,0,1,.48,0l1.36-.05,5-.07,3.46,0H536a2.51,2.51,0,0,1,2,.79,3.93,3.93,0,0,1,.68,2.15c.06.73.12,1.48.18,2.24.12,1.52.25,3.09.38,4.7a38.18,38.18,0,0,1,.19,4.75,9.91,9.91,0,0,1-1.11,4.32,11.76,11.76,0,0,1-5.54,5c-1,.42-1.86.8-2.65,1.11a6.92,6.92,0,0,1-2.13.48c-.6,0-1.06,0-1.37,0A1.61,1.61,0,0,1,526.18,327.05Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 531.605px 314.447px;" id="elfv0xwsrd99h"
                            class="animable"></path>
                        <path
                            d="M536.87,227.28s-6.16,2.52-7.56,9,.32,14.3,2.82,19.07S549,276.07,549,276.07s15.34,10.55,17.58,10,26.08-2.19,26.08-2.19V270.74l-26.08-3.08S547.49,234,544.29,230.93A14.66,14.66,0,0,0,536.87,227.28Z"
                            style="fill: rgb(235, 235, 235); transform-origin: 560.734px 256.685px;" id="elk9p250hhtfs"
                            class="animable"></path>
                        <path
                            d="M592.24,272.91l8.57.83,6.92,1.13,6.18,7.11s1.39,3,.37,3.59c-.44.23-1.83-.25-1.83-.25s-.1,1.69-.84,2.18-1.88-.36-1.88-.36.44,1.21-.31,1.76-2.47-.45-2.47-.45-.21,1.28-.62,1.12-8.08-7.59-8.08-7.59l-4.62-.61-1.39.45Z"
                            style="fill: rgb(255, 190, 157); transform-origin: 603.447px 281.247px;" id="ell4a67wd9ix"
                            class="animable"></path>
                        <path
                            d="M606.1,288.53a4.26,4.26,0,0,0-1.74-.18,1.29,1.29,0,0,0,.78-1.6,2,2,0,0,0-1.42-1.26,5,5,0,0,0-2-.05,1.07,1.07,0,0,0,.1-1.46,3,3,0,0,0-1.35-.89l-1.25-.14-.75-.72c-.57.66-1.35,2.16-.86,2.89a2.07,2.07,0,0,0,2.31.79,2.73,2.73,0,0,0,3,3.27,1.28,1.28,0,0,0,.41,1.2,2.59,2.59,0,0,0,1.18.59,2.74,2.74,0,0,0,1.58,0,1.35,1.35,0,0,0,1-1.15A1.44,1.44,0,0,0,606.1,288.53Z"
                            style="fill: rgb(170, 101, 80); transform-origin: 602.273px 286.658px;" id="elk4dly8l2a9"
                            class="animable"></path>
                        <path
                            d="M608.44,280.24a7.75,7.75,0,0,1,4.06,5.51c-.14.05-.68-1.41-1.81-2.92S608.35,280.37,608.44,280.24Z"
                            style="fill: rgb(235, 153, 110); transform-origin: 610.468px 282.996px;" id="elx9q7y1c7xf"
                            class="animable"></path>
                        <path
                            d="M604.35,284.25c0-.05.3.1.68.39a6,6,0,0,1,1.28,1.38,5.82,5.82,0,0,1,.7,1.75c.1.46.12.76,0,.78s-.51-1.09-1.19-2.25S604.22,284.37,604.35,284.25Z"
                            style="fill: rgb(235, 153, 110); transform-origin: 605.715px 286.395px;" id="elqbipzi5slu"
                            class="animable"></path>
                        <path
                            d="M605.51,274.51a26.79,26.79,0,0,1-4-2.89c-.53-.71-.85-1.92,0-2.59l6,2.31,4.56,3,6.44-2.69s3.29,4.86,3.29,6.44.54,3,.06,3.91l-7.19,1.51-6.92-8.61Z"
                            style="fill: rgb(170, 101, 80); transform-origin: 611.522px 276.27px;" id="el9ztzla4weph"
                            class="animable"></path>
                        <path
                            d="M530.78,254.88a6.44,6.44,0,0,1-.48-1.15c-.28-.74-.69-1.82-1.15-3.17a40.13,40.13,0,0,1-1.4-4.83,19.05,19.05,0,0,1-.41-6.17,14.81,14.81,0,0,1,2.07-5.84,16.11,16.11,0,0,1,3.23-3.87,13.35,13.35,0,0,1,2.8-1.93,4.61,4.61,0,0,1,1.15-.48,23.67,23.67,0,0,0-3.7,2.68,17,17,0,0,0-3.07,3.85,14.8,14.8,0,0,0-2,5.65,19.37,19.37,0,0,0,.36,6,47.89,47.89,0,0,0,1.28,4.81c.39,1.29.72,2.37,1,3.23A6,6,0,0,1,530.78,254.88Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 531.921px 241.16px;" id="elg7nov0p69tt"
                            class="animable"></path>
                        <path
                            d="M546.36,234.45a1.16,1.16,0,0,1,.11.14l.29.45c.27.43.65,1,1.12,1.78,1,1.58,2.4,3.86,4.19,6.74l14.73,24-.17-.11,26.08,3.06.23,0v13.67h-.26l-32.74-.48h-.05l-7.44-1.89a4.8,4.8,0,0,1-1.71-.76,6.32,6.32,0,0,1-1.24-1.3c-.74-.89-1.42-1.79-2.06-2.67-2.57-3.52-4.56-6.74-6.23-9.37s-3-4.7-3.9-6.09L536.25,260c-.24-.36-.34-.55-.34-.55s.14.16.4.51.64.86,1.11,1.54c1,1.37,2.31,3.41,4,6s3.72,5.81,6.3,9.29c.65.87,1.33,1.76,2.06,2.64a6.58,6.58,0,0,0,1.18,1.23,4.4,4.4,0,0,0,1.58.69l7.45,1.84h0l32.73.4-.26.26V270.74l.23.26-26.08-3.11-.11,0-.05-.09L551.84,243.7l-4.08-6.81-1.06-1.81-.26-.47C546.38,234.51,546.35,234.45,546.36,234.45Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 564.425px 259.315px;" id="elfogf5hz1aeg"
                            class="animable"></path>
                        <path
                            d="M544.13,226.37c0,.08-1.11-.65-3-1.53a26.63,26.63,0,0,0-15.63-2.27c-2,.32-3.25.71-3.28.62a3.65,3.65,0,0,1,.84-.35,17.52,17.52,0,0,1,2.38-.63,24.21,24.21,0,0,1,15.86,2.3,17.76,17.76,0,0,1,2.1,1.28C543.9,226.14,544.15,226.34,544.13,226.37Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 533.176px 224.067px;" id="elmmlanq9skge"
                            class="animable"></path>
                        <path
                            d="M610,287.49a19.89,19.89,0,0,1-1.55-2.35,19.62,19.62,0,0,1-1.64-2.29c.09-.11,1.16.66,2.07,2A5.13,5.13,0,0,1,610,287.49Z"
                            style="fill: rgb(235, 153, 110); transform-origin: 608.405px 285.165px;" id="el2j7z4413scd"
                            class="animable"></path>
                    </g>
                    <g id="freepik--character-4--inject-2" class="animable"
                       style="transform-origin: 419.991px 292.863px;">
                        <path d="M406.66,413.36l.35,25.25-31.41.6c.12-3,16.26-9.34,16.26-9.34L391,413.7Z"
                              style="fill: rgb(69, 90, 100); transform-origin: 391.305px 426.285px;" id="eludtcqswblmi"
                              class="animable"></path>
                        <path
                            d="M401.55,428.32a1.28,1.28,0,0,1,.91,1.45,1.23,1.23,0,0,1-1.42.92,1.35,1.35,0,0,1-1-1.54,1.27,1.27,0,0,1,1.59-.79"
                            style="fill: rgb(38, 50, 56); transform-origin: 401.249px 429.505px;" id="el3wdkcu5stls"
                            class="animable"></path>
                        <path d="M407,438.51l0-2.55-30.19,1.72s-1.38.65-1.2,1.63Z"
                              style="fill: rgb(38, 50, 56); transform-origin: 391.297px 437.635px;" id="elwr8rtnxsmb"
                              class="animable"></path>
                        <path
                            d="M391.35,429.72c0,.15.77.21,1.54.68s1.18,1.12,1.32,1.06-.11-.95-1-1.51S391.31,429.58,391.35,429.72Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 392.798px 430.518px;" id="elmwr0d18eedb"
                            class="animable"></path>
                        <path
                            d="M388.08,431.14c0,.15.64.4,1.17,1s.7,1.32.85,1.31.23-.88-.45-1.66S388.08,431,388.08,431.14Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 389.141px 432.261px;" id="elxal2c3qvwpn"
                            class="animable"></path>
                        <path
                            d="M386.28,435.12c.14,0,.34-.74-.07-1.57s-1.13-1.15-1.19-1,.39.57.71,1.26S386.13,435.11,386.28,435.12Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 385.734px 433.817px;" id="elhco5jgzwcl"
                            class="animable"></path>
                        <path
                            d="M391.55,426c.07.14.77-.09,1.64,0s1.55.3,1.63.17-.59-.67-1.61-.71S391.48,425.89,391.55,426Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 393.186px 425.834px;" id="el13y1avjax52"
                            class="animable"></path>
                        <path
                            d="M392.23,422.27a2.94,2.94,0,0,0,1.57,0,6.8,6.8,0,0,0,1.64-.54,6.65,6.65,0,0,0,.9-.49,2.14,2.14,0,0,0,.46-.38.67.67,0,0,0,.06-.82.84.84,0,0,0-.68-.34,2,2,0,0,0-.59.1,5.55,5.55,0,0,0-1,.35,5.26,5.26,0,0,0-1.43,1c-.72.69-1,1.27-.9,1.29s.41-.43,1.14-1a6.22,6.22,0,0,1,1.39-.82,5.94,5.94,0,0,1,.9-.3c.33-.09.61-.1.7.05s0,.08,0,.17a1.24,1.24,0,0,1-.34.28,8.16,8.16,0,0,1-.83.49,8.38,8.38,0,0,1-1.51.61A11.6,11.6,0,0,0,392.23,422.27Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 394.601px 421.07px;" id="elb86tusxheow"
                            class="animable"></path>
                        <path
                            d="M392.44,422.48a2.55,2.55,0,0,0,.38-1.52,4.84,4.84,0,0,0-.25-1.72,4.93,4.93,0,0,0-.42-.95,1.27,1.27,0,0,0-1-.77.72.72,0,0,0-.65.45,1.91,1.91,0,0,0-.15.58,3.41,3.41,0,0,0,0,1.06,3.62,3.62,0,0,0,.7,1.61c.63.8,1.27,1,1.28.92s-.49-.36-1-1.14a3.55,3.55,0,0,1-.53-1.47,4,4,0,0,1,0-.91c0-.33.17-.6.29-.57s.43.24.56.5a5.28,5.28,0,0,1,.74,2.41C392.5,421.89,392.35,422.46,392.44,422.48Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 391.567px 420px;" id="el6e1oceqmpsf"
                            class="animable"></path>
                        <path d="M419.49,413.36l-.35,25.25,31.42.6c-.13-3-16.27-9.34-16.27-9.34l.89-16.17Z"
                              style="fill: rgb(69, 90, 100); transform-origin: 434.85px 426.285px;" id="elyaanpw481g"
                              class="animable"></path>
                        <path
                            d="M424.6,428.32a1.28,1.28,0,0,0-.91,1.45,1.24,1.24,0,0,0,1.43.92,1.37,1.37,0,0,0,1-1.54,1.28,1.28,0,0,0-1.59-.79"
                            style="fill: rgb(38, 50, 56); transform-origin: 424.904px 429.506px;" id="eldkun46mabfc"
                            class="animable"></path>
                        <path d="M419.14,438.51l0-2.55,30.19,1.72s1.38.65,1.2,1.63Z"
                              style="fill: rgb(38, 50, 56); transform-origin: 434.843px 437.635px;" id="el26oh4pyt94k"
                              class="animable"></path>
                        <path
                            d="M434.8,429.72c0,.15-.77.21-1.54.68s-1.17,1.12-1.31,1.06.1-.95,1-1.51S434.84,429.58,434.8,429.72Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 433.357px 430.518px;" id="elmyvw8q2yizs"
                            class="animable"></path>
                        <path
                            d="M438.07,431.14c0,.15-.63.4-1.17,1s-.69,1.32-.85,1.31-.23-.88.45-1.66S438.07,431,438.07,431.14Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 437.006px 432.261px;" id="eleyc9nvetngi"
                            class="animable"></path>
                        <path
                            d="M439.87,435.12c-.14,0-.34-.74.07-1.57s1.13-1.15,1.2-1-.39.57-.72,1.26S440,435.11,439.87,435.12Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 440.422px 433.817px;" id="elznfpocupszd"
                            class="animable"></path>
                        <path
                            d="M434.6,426c-.07.14-.77-.09-1.64,0s-1.55.3-1.62.17.58-.67,1.6-.71S434.68,425.89,434.6,426Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 432.97px 425.834px;" id="el0ba6ly2e9puq"
                            class="animable"></path>
                        <path
                            d="M433.92,422.27a2.94,2.94,0,0,1-1.57,0,6.8,6.8,0,0,1-1.64-.54,7.21,7.21,0,0,1-.89-.49,2,2,0,0,1-.47-.38.67.67,0,0,1-.06-.82.85.85,0,0,1,.68-.34,2,2,0,0,1,.59.1,5.27,5.27,0,0,1,1,.35,5.48,5.48,0,0,1,1.44,1c.71.69.95,1.27.9,1.29s-.42-.43-1.15-1a6,6,0,0,0-1.39-.82,5.94,5.94,0,0,0-.9-.3c-.33-.09-.61-.1-.7.05s0,.08,0,.17a1.3,1.3,0,0,0,.35.28,7.09,7.09,0,0,0,.82.49,8.38,8.38,0,0,0,1.51.61A11,11,0,0,1,433.92,422.27Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 431.549px 421.07px;" id="el742d9bk2x7x"
                            class="animable"></path>
                        <path
                            d="M433.72,422.48c-.06,0-.35-.53-.39-1.52a5.07,5.07,0,0,1,.25-1.72,4.93,4.93,0,0,1,.42-.95,1.27,1.27,0,0,1,1-.77.71.71,0,0,1,.64.45,2.3,2.3,0,0,1,.16.58,3.58,3.58,0,0,1-.73,2.67c-.63.8-1.27,1-1.28.92s.49-.36,1-1.14a3.55,3.55,0,0,0,.53-1.47,3.09,3.09,0,0,0,0-.91c0-.33-.17-.6-.29-.57s-.43.24-.56.5a5.5,5.5,0,0,0-.41.85,5.9,5.9,0,0,0-.33,1.56C433.65,421.89,433.8,422.46,433.72,422.48Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 434.579px 420px;" id="elc098iriyp8j"
                            class="animable"></path>
                        <path
                            d="M446.1,267.21l-48.36,4.88v3.66l-4.25,7.33s-4.39,4.4-1.25,12.57v5.24s-.38,3.14-1.13,6.28-.8,120.44-.8,120.44l18.3,1.32,12.72-118.41L419.14,429.7l19-1,15.25-140.35h0Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 421.85px 348.455px;" id="elq4ney5ylged"
                            class="animable"></path>
                        <path
                            d="M421.46,313.38a4.64,4.64,0,0,1-.12-1.16c0-.86-.11-1.92-.18-3.16-.19-2.79-.44-6.42-.72-10.43s-.51-7.77-.57-10.44c0-1.34,0-2.43,0-3.18a5.64,5.64,0,0,1,.08-1.16,4.55,4.55,0,0,1,.12,1.16c.05.86.11,1.91.18,3.16.19,2.79.44,6.41.72,10.43s.51,7.76.57,10.44c0,1.34,0,2.43,0,3.17A6.17,6.17,0,0,1,421.46,313.38Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 420.704px 298.615px;" id="elh5y9zusa3v7"
                            class="animable"></path>
                        <path
                            d="M432.2,275c-.15,0-.05-1.41-.3-3.09s-.72-3-.58-3a5.57,5.57,0,0,1,1.1,3A5.42,5.42,0,0,1,432.2,275Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 431.922px 271.955px;" id="el9rzb7e6kxeg"
                            class="animable"></path>
                        <path d="M436.3,273.63a12.22,12.22,0,0,1-.46-5,6,6,0,0,1,.49,2.48A6.29,6.29,0,0,1,436.3,273.63Z"
                              style="fill: rgb(69, 90, 100); transform-origin: 436.101px 271.13px;" id="elejimpk3sxcg"
                              class="animable"></path>
                        <path
                            d="M404.48,277.49a4.75,4.75,0,0,1-.42-2.89,4.81,4.81,0,0,1,.9-2.79c.14.06-.26,1.28-.38,2.83S404.63,277.46,404.48,277.49Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 404.491px 274.65px;" id="eld1uh345bolo"
                            class="animable"></path>
                        <path
                            d="M408.55,276.81a7,7,0,0,1-.16-2.63,6.89,6.89,0,0,1,.37-2.6,7,7,0,0,1,.16,2.62A6.92,6.92,0,0,1,408.55,276.81Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 408.655px 274.195px;" id="el2mztaei68yj"
                            class="animable"></path>
                        <path
                            d="M398.82,277.94a18.8,18.8,0,0,1-6.36,6.82c-.1-.12,1.48-1.49,3.23-3.36S398.69,277.86,398.82,277.94Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 395.638px 281.349px;" id="elx43ygxdv51p"
                            class="animable"></path>
                        <path
                            d="M453.51,287.1a8.33,8.33,0,0,1-2-1.29,24.3,24.3,0,0,1-7.16-9,8.08,8.08,0,0,1-.8-2.26,48.72,48.72,0,0,0,4.25,6.87A49.4,49.4,0,0,0,453.51,287.1Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 448.53px 280.825px;" id="elnqmdad55u"
                            class="animable"></path>
                        <path
                            d="M423.44,273.24s.11-.12.37-.15a1.61,1.61,0,0,1,1.06.3,1.86,1.86,0,0,1,.82,1.46,1.86,1.86,0,0,1-3.22,1.13,1.84,1.84,0,0,1-.27-1.64,1.66,1.66,0,0,1,.63-.91c.23-.14.38-.14.39-.12s-.51.31-.67,1.11a1.6,1.6,0,0,0,.29,1.26,1.32,1.32,0,0,0,1.44.3,1.29,1.29,0,0,0,.93-1.14,1.51,1.51,0,0,0-.56-1.15A2.16,2.16,0,0,0,423.44,273.24Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 423.902px 274.831px;" id="elzl97lhtp1ep"
                            class="animable"></path>
                        <path
                            d="M409.63,235.13l-10.58,3.08L400,228l.63-29s-3.12,1.26-6.06,2.58a10.28,10.28,0,0,0-5.89,7.34c-2.16,10.55-7.13,34.95-7.53,37.68-.57,3.88,1.48,11.08,6.72,12.07,3.94.74,23.71-13.9,23.71-13.9Z"
                            style="fill: rgb(126, 87, 194); transform-origin: 396.319px 228.849px;" id="el13xt1ld0p2xp"
                            class="animable"></path>
                        <path
                            d="M412.42,191l-3,4.07L400.62,199l-1.26,35.93-3.49,21.84s-1.49,11.69-.4,13.4a6.66,6.66,0,0,0,2.1,2.07l48.36-4.88.74-.45a7.08,7.08,0,0,0,3.41-6.75l-3.28-34.11,4.75-12.45,2.05-10.13-16.91-7.24-3.19-1.39-2.95-5Z"
                            style="fill: rgb(126, 87, 194); transform-origin: 424.336px 231.04px;" id="eln9obj1afwm"
                            class="animable"></path>
                        <path
                            d="M453.6,203.48a23.65,23.65,0,0,1,3.78,7.88c1.29,4.76,1.46,14.95,1.46,14.95s6,17.62,5.52,19.42l-.51,1.8s.64,6.56-2.7,8.74-2.22,3.2-6.43,3.35-10.93-4.89-10.93-4.89L446.37,244l.43-18Z"
                            style="fill: rgb(126, 87, 194); transform-origin: 454.089px 231.552px;" id="el4vb3yc14c1a"
                            class="animable"></path>
                        <path
                            d="M396.94,254.7a6.73,6.73,0,0,1,1.14-.62l3.2-1.55c2.73-1.31,6.56-3.1,10.94-5.12l-.14.29c-.3-1.26-.6-2.55-.92-3.88-.82-3.53-1.58-6.85-2.25-9.72l.31.16-7.41,2.82-2.1.75a3.76,3.76,0,0,1-.76.23,2.89,2.89,0,0,1,.71-.36l2-.87,7.34-3a.23.23,0,0,1,.3.12v0l2.31,9.7c.31,1.33.61,2.63.91,3.88a.26.26,0,0,1-.15.29c-4.38,2-8.24,3.74-11,5l-3.27,1.41A7.12,7.12,0,0,1,396.94,254.7Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 404.733px 244.256px;" id="elt8wxqcozd5l"
                            class="animable"></path>
                        <path
                            d="M401.49,217.44c.14,0-.14,4.58-.62,10.22a96.45,96.45,0,0,1-1.14,10.17c-.14,0,.14-4.59.62-10.22A96,96,0,0,1,401.49,217.44Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 400.61px 227.635px;" id="eltopasv6ehc9"
                            class="animable"></path>
                        <path
                            d="M420.52,198.24c.11.08-1.19,1.79-2.43,4.53l-.14.29-.24-.21-2.23-1.94c-1.69-1.48-3.2-2.84-4.27-3.84a11.9,11.9,0,0,1-1.67-1.7,10,10,0,0,1,1.91,1.42c1.14.94,2.68,2.25,4.37,3.73l2.21,2-.38.08a20.65,20.65,0,0,1,1.91-3.22A4.57,4.57,0,0,1,420.52,198.24Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 415.033px 199.215px;" id="eleq3trfyvnlj"
                            class="animable"></path>
                        <path d="M424.72,202.85a6,6,0,0,1-2.12-2,6.06,6.06,0,0,1-1.41-2.52,59.87,59.87,0,0,1,3.53,4.48Z"
                              style="fill: rgb(38, 50, 56); transform-origin: 422.955px 200.59px;" id="el92pqrjd34s"
                              class="animable"></path>
                        <path
                            d="M433.22,194.8a32.8,32.8,0,0,1-4.16,4.19,34.07,34.07,0,0,1-4.51,3.8,32.8,32.8,0,0,1,4.16-4.19A34.07,34.07,0,0,1,433.22,194.8Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 428.885px 198.795px;" id="el915u6hckbke"
                            class="animable"></path>
                        <path
                            d="M447.12,216.11a77.69,77.69,0,0,1-.25,8.9,74.06,74.06,0,0,1-.77,8.87,77.68,77.68,0,0,1,.25-8.9A74.06,74.06,0,0,1,447.12,216.11Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 446.61px 224.995px;" id="elqkmvvzq080b"
                            class="animable"></path>
                        <path
                            d="M399.05,238a9.61,9.61,0,0,1-2.29.65c-1.43.34-3.43.68-5.56,1.31a18.3,18.3,0,0,0-5.1,2.38,18.53,18.53,0,0,1-1.93,1.37,7.51,7.51,0,0,1,1.72-1.66,15.48,15.48,0,0,1,5.16-2.59,45,45,0,0,1,5.64-1.17A12.17,12.17,0,0,1,399.05,238Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 391.61px 240.855px;" id="el8hrwwssbr1"
                            class="animable"></path>
                        <path
                            d="M459.24,251.69c-.08,0-.23-.53-.68-1.3a6.15,6.15,0,0,0-5.73-3.1c-.88,0-1.43.21-1.45.13s.48-.36,1.42-.5a5.77,5.77,0,0,1,3.59.65,5.84,5.84,0,0,1,2.49,2.65A2.53,2.53,0,0,1,459.24,251.69Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 455.312px 249.276px;" id="ell6dyf5ik0rp"
                            class="animable"></path>
                        <path
                            d="M459.77,257.3A4.1,4.1,0,0,1,457.7,259a8.82,8.82,0,0,1-6.43.31,18.19,18.19,0,0,1-5.58-3.28,9,9,0,0,1-1.9-1.88c0-.06.81.62,2.13,1.59a21.22,21.22,0,0,0,5.51,3.07,9,9,0,0,0,6.12-.15A9.45,9.45,0,0,0,459.77,257.3Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 451.78px 256.96px;" id="eltdlntl3pi4a"
                            class="animable"></path>
                        <path
                            d="M401.1,214.93c-.08,0-.16-.74-.5-1.88a12.77,12.77,0,0,0-5.52-7.19,14.87,14.87,0,0,1-1.69-1,4.84,4.84,0,0,1,1.87.66,11,11,0,0,1,3.65,3.09,11.14,11.14,0,0,1,2,4.33A4.55,4.55,0,0,1,401.1,214.93Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 397.263px 209.895px;" id="ela44h92xyxj"
                            class="animable"></path>
                        <path
                            d="M451.8,204.24c.13.1-1.17,1.95-2.48,4.41s-2.13,4.57-2.27,4.52a14.73,14.73,0,0,1,1.81-4.77A14.91,14.91,0,0,1,451.8,204.24Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 449.429px 208.705px;" id="elfe43cxruzea"
                            class="animable"></path>
                        <path
                            d="M423,269.08a5.54,5.54,0,0,1-.05-.71c0-.51,0-1.18-.06-2,0-1.82-.09-4.34-.14-7.44-.12-6.28-.29-15-.55-24.54s-.58-18.26-.81-24.54c-.11-3.1-.2-5.62-.27-7.44,0-.84,0-1.51-.05-2a4.77,4.77,0,0,1,0-.71,3.27,3.27,0,0,1,.09.7c0,.51.09,1.19.15,2,.11,1.81.26,4.34.44,7.43.33,6.28.69,14.95,1,24.54s.38,18.27.39,24.56c0,3.09,0,5.62,0,7.44,0,.84,0,1.51,0,2A3,3,0,0,1,423,269.08Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 422.098px 234.39px;" id="el0a4ou7whymp"
                            class="animable"></path>
                        <g id="elzptkfp31wdi">
                            <g style="opacity: 0.3; transform-origin: 415.11px 201.505px;" class="animable">
                                <path
                                    d="M420.19,198.93a26.34,26.34,0,0,0-2.28,4.12c-2.74-2.12-5.33-4.83-7.88-7.17a45.21,45.21,0,0,0,8.12,11.25A28,28,0,0,0,420.19,198.93Z"
                                    id="elfhnj1vfoaz" class="animable"
                                    style="transform-origin: 415.11px 201.505px;"></path>
                            </g>
                        </g>
                        <g id="elt8s6cr8x9wi">
                            <g style="opacity: 0.3; transform-origin: 427.105px 200.402px;" class="animable">
                                <path d="M421.45,198.8s2.47,6,3.1,6.59,8.21-10,8.21-10l-8.43,7.1Z" id="elemd1yce1ovb"
                                      class="animable" style="transform-origin: 427.105px 200.402px;"></path>
                            </g>
                        </g>
                        <g id="eld1nqazt7e3">
                            <g style="opacity: 0.3; transform-origin: 392.073px 240.36px;" class="animable">
                                <path
                                    d="M390.49,238.22a10.76,10.76,0,0,0-3.84,1,4.27,4.27,0,0,0-2.32,3.07.71.71,0,0,0,.18.68c.26.19.62,0,.89-.16,3.92-2.52,8.89-4.6,13.55-4.76l.89-.34A49.71,49.71,0,0,0,390.49,238.22Z"
                                    id="eli670stvhp4" class="animable"
                                    style="transform-origin: 392.073px 240.36px;"></path>
                            </g>
                        </g>
                        <path
                            d="M401.68,203.15c-.14,0-.31-.32-.36-.76s0-.8.15-.82.31.32.36.75S401.82,203.13,401.68,203.15Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 401.574px 202.36px;" id="elyeq2pl6jn1"
                            class="animable"></path>
                        <path
                            d="M407.67,209.77c-.14,0-.3-.45-.36-1s0-1.06.15-1.07.31.44.37,1S407.81,209.75,407.67,209.77Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 407.569px 208.735px;" id="elr12gawz21md"
                            class="animable"></path>
                        <path
                            d="M414.94,216.07c-.14,0-.33-.33-.41-.79s0-.86.1-.89.32.33.41.79S415.08,216.05,414.94,216.07Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 414.791px 215.229px;" id="elbjscuk7gmav"
                            class="animable"></path>
                        <path
                            d="M405.67,221.23c-.14,0-.21-.52-.15-1.13s.22-1.09.36-1.08.22.52.16,1.13S405.82,221.24,405.67,221.23Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 405.779px 220.125px;" id="elb9rwhg3oqqk"
                            class="animable"></path>
                        <path d="M411.14,226c-.14,0-.31-.37-.36-.87s0-.9.15-.92.31.37.36.86S411.28,225.94,411.14,226Z"
                              style="fill: rgb(255, 255, 255); transform-origin: 411.034px 225.105px;" id="elnm7q41rj8l"
                              class="animable"></path>
                        <path
                            d="M417.76,233.31c-.14,0-.28-.55-.31-1.25s.06-1.26.21-1.27.28.55.31,1.25S417.91,233.31,417.76,233.31Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 417.71px 232.05px;" id="eltl404s1vieq"
                            class="animable"></path>
                        <path
                            d="M405.25,233.63c-.14,0-.23-.35-.2-.76s.17-.72.31-.71.24.35.21.75S405.4,233.64,405.25,233.63Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 405.31px 232.895px;" id="elgwxcp1xjkvs"
                            class="animable"></path>
                        <ellipse cx="413.98" cy="239.15" rx="0.26" ry="0.89"
                                 style="fill: rgb(255, 255, 255); transform-origin: 413.98px 239.15px;"
                                 id="elforxi4a5c99" class="animable"></ellipse>
                        <path
                            d="M415.13,255.49c-.14,0-.26-.23-.26-.52s.12-.53.26-.53.26.24.26.53S415.28,255.49,415.13,255.49Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 415.13px 254.965px;" id="elukvpr0lz1kd"
                            class="animable"></path>
                        <path
                            d="M399.89,262.22c-.14,0-.21-.54-.15-1.18s.22-1.15.36-1.13.22.54.16,1.18S400,262.23,399.89,262.22Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 399.999px 261.065px;" id="ely7h14t8npo"
                            class="animable"></path>
                        <path
                            d="M406.83,267.05c-.14,0-.26-.37-.26-.84s.12-.84.26-.84.26.38.26.84S407,267.05,406.83,267.05Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 406.83px 266.21px;" id="el2iwtj96mvzo"
                            class="animable"></path>
                        <path
                            d="M418.08,265.9c-.14,0-.34-.2-.46-.55s-.1-.67,0-.71.34.2.45.54S418.21,265.85,418.08,265.9Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 417.851px 265.268px;" id="elsawmljv0bv"
                            class="animable"></path>
                        <path
                            d="M407.78,257.49c-.15,0-.24-.49-.21-1.07s.17-1,.31-1,.24.48.21,1.06S407.92,257.5,407.78,257.49Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 407.83px 256.455px;" id="elaujpzp9e6kr"
                            class="animable"></path>
                        <path
                            d="M417.66,244.24c-.15,0-.26-.25-.26-.57s.11-.58.26-.58.26.26.26.58S417.8,244.24,417.66,244.24Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 417.66px 243.665px;" id="el1hai7jwgy51"
                            class="animable"></path>
                        <path
                            d="M404.54,244.34c-.14,0-.37-.38-.52-.93s-.14-1,0-1.06.36.38.51.93S404.68,244.31,404.54,244.34Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 404.278px 243.342px;" id="el4li5swuesys"
                            class="animable"></path>
                        <path
                            d="M388.23,254.55c-.13.06-.42-.23-.65-.67s-.32-.84-.19-.91.41.23.65.66S388.35,254.48,388.23,254.55Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 387.809px 253.759px;" id="elkyylp3y83kc"
                            class="animable"></path>
                        <path d="M393.9,245.09c-.14,0-.3-.35-.36-.81s0-.86.15-.88.31.35.37.81S394,245.07,393.9,245.09Z"
                              style="fill: rgb(255, 255, 255); transform-origin: 393.797px 244.245px;"
                              id="el7bonc46il8x" class="animable"></path>
                        <path
                            d="M388.33,248.87c-.1.1-.5-.15-.87-.56s-.6-.81-.5-.91.5.15.88.56S388.44,248.77,388.33,248.87Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 387.647px 248.135px;" id="elruu35jp6trh"
                            class="animable"></path>
                        <path
                            d="M398.53,249.29c-.15,0-.24-.35-.21-.75s.17-.73.31-.72.24.35.21.75S398.67,249.3,398.53,249.29Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 398.58px 248.555px;" id="elabmaxv5b2p"
                            class="animable"></path>
                        <ellipse cx="397.58" cy="232" rx="0.26" ry="0.47"
                                 style="fill: rgb(255, 255, 255); transform-origin: 397.58px 232px;" id="el84t6gle9yk"
                                 class="animable"></ellipse>
                        <path
                            d="M387.07,233.73c-.14,0-.16-.48,0-1s.32-.92.46-.89.16.48,0,1S387.21,233.77,387.07,233.73Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 387.3px 232.786px;" id="el0tygvq85hyna"
                            class="animable"></path>
                        <path d="M392,231.42c.14,0,.28.34.31.77s-.06.8-.2.81-.29-.34-.32-.77S391.87,231.43,392,231.42Z"
                              style="fill: rgb(255, 255, 255); transform-origin: 392.05px 232.21px;" id="el4ytotfqwicb"
                              class="animable"></path>
                        <path
                            d="M389.38,224.06c.14,0,.33.33.42.8s0,.86-.1.89-.33-.33-.42-.8S389.24,224.09,389.38,224.06Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 389.536px 224.906px;" id="elr80swnisfy"
                            class="animable"></path>
                        <path
                            d="M397,222.59c.13.06-.09.9-.49,1.89s-.85,1.74-1,1.69.09-.9.49-1.89S396.82,222.54,397,222.59Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 396.251px 224.38px;" id="eldrtmnstr79u"
                            class="animable"></path>
                        <path
                            d="M392.84,217.86c.14,0,.24.35.21.76s-.18.72-.32.71-.23-.35-.2-.75S392.7,217.85,392.84,217.86Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 392.79px 218.595px;" id="elsc5kgzgilof"
                            class="animable"></path>
                        <path
                            d="M392.64,208.93c.13-.05.36.21.51.59s.15.72,0,.77-.36-.21-.51-.59S392.51,209,392.64,208.93Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 392.899px 209.61px;" id="el12hyt969m1qo"
                            class="animable"></path>
                        <path
                            d="M397.69,215.13c-.14,0-.37-.33-.52-.82s-.15-.93,0-1,.37.33.51.82S397.82,215.09,397.69,215.13Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 397.422px 214.216px;" id="elwdfc61e8d7"
                            class="animable"></path>
                        <path d="M411,214.5c.15,0,.24.41.21.91s-.17.88-.31.88-.24-.42-.21-.91S410.89,214.49,411,214.5Z"
                              style="fill: rgb(255, 255, 255); transform-origin: 410.95px 215.395px;" id="ele5xkabc27q"
                              class="animable"></path>
                        <path
                            d="M402.31,207.56c.13-.06.4.26.46.74s-.11.86-.25.84-.21-.37-.26-.77S402.18,207.62,402.31,207.56Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 402.5px 208.347px;" id="elbrflphnd1c7"
                            class="animable"></path>
                        <path
                            d="M419.34,220.81c.14,0,.21.36.15.77s-.22.72-.36.7-.21-.37-.15-.78S419.2,220.79,419.34,220.81Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 419.235px 221.545px;" id="el90fuxq9wgr"
                            class="animable"></path>
                        <path
                            d="M405,227.64c-.13.05-.34-.17-.45-.49s-.1-.62,0-.67.34.17.46.49S405.18,227.59,405,227.64Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 404.795px 227.06px;" id="eloath3hq8ee"
                            class="animable"></path>
                        <path
                            d="M412.64,232.37c.14,0,.28.38.31.88s-.08.9-.22.9-.28-.38-.3-.88S412.5,232.37,412.64,232.37Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 412.691px 233.26px;" id="el4jhmqjqipks"
                            class="animable"></path>
                        <path
                            d="M415.55,224.59c.15,0,.24.26.21.55s-.17.51-.31.5-.24-.26-.21-.55S415.41,224.58,415.55,224.59Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 415.5px 225.115px;" id="elsga82w5h2sj"
                            class="animable"></path>
                        <path d="M417.13,207.25c.14,0,.16.4,0,.8s-.32.71-.46.67-.16-.4,0-.81S417,207.21,417.13,207.25Z"
                              style="fill: rgb(255, 255, 255); transform-origin: 416.9px 207.985px;" id="elt57rap9ofqa"
                              class="animable"></path>
                        <path
                            d="M410.82,203.36c.14,0,.33.22.41.56s0,.66-.09.7-.32-.22-.41-.57S410.69,203.39,410.82,203.36Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 410.974px 203.992px;" id="elp5guw4e6bds"
                            class="animable"></path>
                        <path
                            d="M407.46,199.26c.12-.08.36.07.53.33s.22.53.1.61-.36-.06-.53-.32S407.34,199.34,407.46,199.26Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 407.775px 199.73px;" id="eloyjksc2g78"
                            class="animable"></path>
                        <path
                            d="M412.19,193.9c.14,0,.32.22.41.57s0,.65-.09.69-.33-.22-.41-.57S412.05,193.93,412.19,193.9Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 412.347px 194.532px;" id="elkx1xa05phm"
                            class="animable"></path>
                        <path
                            d="M415.66,194.84c.14,0,.28.24.31.56s-.06.59-.21.6-.28-.24-.31-.55S415.52,194.86,415.66,194.84Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 415.71px 195.42px;" id="elz513awkf8q"
                            class="animable"></path>
                        <path d="M417.13,199.68c.13.06.14.3,0,.54s-.31.36-.44.3-.14-.31,0-.54S417,199.61,417.13,199.68Z"
                              style="fill: rgb(255, 255, 255); transform-origin: 416.91px 200.099px;" id="elcpt9fvufwne"
                              class="animable"></path>
                        <path
                            d="M424.4,198.3c-.13.07-.41-.23-.74-.58s-.61-.64-.54-.77.53,0,.92.41S424.53,198.25,424.4,198.3Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 423.782px 197.606px;" id="elozmw8k2m59"
                            class="animable"></path>
                        <path d="M427.33,196.84c-.14,0-.3-.09-.36-.3s0-.4.15-.44.29.1.35.3S427.46,196.8,427.33,196.84Z"
                              style="fill: rgb(255, 255, 255); transform-origin: 427.219px 196.467px;"
                              id="el4ka9we3p12j" class="animable"></path>
                        <path
                            d="M430.69,194.21c-.14,0-.24-.26-.21-.55s.17-.51.32-.5.23.26.2.55S430.83,194.23,430.69,194.21Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 430.74px 193.685px;" id="el61l8lqf3x1l"
                            class="animable"></path>
                        <path
                            d="M425.75,207.77c-.14,0-.33-.35-.41-.85s0-.91.09-.93.33.35.42.84S425.89,207.75,425.75,207.77Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 425.601px 206.88px;" id="el5w95ooy8wtv"
                            class="animable"></path>
                        <path
                            d="M431.64,203.57c-.14,0-.37-.33-.52-.82s-.15-.93,0-1,.37.33.51.82S431.77,203.53,431.64,203.57Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 431.372px 202.656px;" id="elmjlm2en13b"
                            class="animable"></path>
                        <path
                            d="M436.37,202.73c-.14,0-.16-.48-.05-1s.33-.92.47-.89.16.48,0,1S436.51,202.76,436.37,202.73Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 436.576px 201.785px;" id="elhmkkrgcldvi"
                            class="animable"></path>
                        <path
                            d="M428.59,206.93c-.14,0-.31-.27-.36-.64s0-.7.15-.73.3.27.36.65S428.73,206.91,428.59,206.93Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 428.486px 206.244px;" id="elj7xphmws1bj"
                            class="animable"></path>
                        <path
                            d="M434.8,210.4c-.14,0-.28-.34-.31-.77s.06-.8.21-.81.28.34.31.77S434.94,210.39,434.8,210.4Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 434.75px 209.61px;" id="elgajwhhjquc"
                            class="animable"></path>
                        <path
                            d="M426.8,215.55c-.14,0-.24-.48-.21-1.06s.17-1.05.31-1,.24.48.21,1.06S426.94,215.56,426.8,215.55Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 426.85px 214.518px;" id="eldxcv6107j3"
                            class="animable"></path>
                        <path
                            d="M431.85,216.29c-.15,0-.29-.21-.32-.5s.07-.54.21-.56.28.21.31.5S432,216.27,431.85,216.29Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 431.79px 215.759px;" id="elcfafo87219o"
                            class="animable"></path>
                        <path
                            d="M427.33,222.28c-.15,0-.26-.45-.26-1s.11-1,.26-1,.26.45.26,1S427.47,222.28,427.33,222.28Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 427.33px 221.28px;" id="el7fm3l9w0v7u"
                            class="animable"></path>
                        <path d="M431,225.43c-.15,0-.31-.32-.37-.75s0-.81.16-.83.3.32.36.76S431.15,225.41,431,225.43Z"
                              style="fill: rgb(255, 255, 255); transform-origin: 430.89px 224.64px;" id="eln8ow68nc67"
                              class="animable"></path>
                        <path
                            d="M427.09,229.63c-.15,0-.21-.39-.15-.82s.22-.77.37-.75.2.38.14.82S427.23,229.65,427.09,229.63Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 427.196px 228.845px;" id="el3lvac8cl79m"
                            class="animable"></path>
                        <path
                            d="M431.53,233.31c-.15,0-.25-.37-.36-.8s-.19-.8-.06-.88.44.24.57.75S431.67,233.32,431.53,233.31Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 431.387px 232.464px;" id="elm5mpcfs0dbl"
                            class="animable"></path>
                        <path
                            d="M426.7,238.67c-.15,0-.29-.41-.32-.93s.07-1,.21-1,.28.41.31.93S426.84,238.67,426.7,238.67Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 426.64px 237.705px;" id="elbce3x9m2e7b"
                            class="animable"></path>
                        <path
                            d="M431.85,241.2c-.13.06-.47-.33-.76-.88s-.42-1-.29-1.12.46.33.75.88S432,241.13,431.85,241.2Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 431.328px 240.193px;" id="elppomsne2nyb"
                            class="animable"></path>
                        <path
                            d="M428.27,244.88c-.14,0-.21-.35-.15-.73s.22-.66.36-.64.21.34.16.72S428.41,244.9,428.27,244.88Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 428.377px 244.195px;" id="elogqjgh3uwi"
                            class="animable"></path>
                        <path d="M437.71,247c-.14,0-.33-.51-.42-1.17s0-1.23.1-1.25.33.51.42,1.18S437.85,247,437.71,247Z"
                              style="fill: rgb(255, 255, 255); transform-origin: 437.554px 245.79px;" id="elmlamyouv77"
                              class="animable"></path>
                        <path
                            d="M444.46,245.72c-.14,0-.37-.46-.52-1.1s-.15-1.18,0-1.22.38.46.52,1.1S444.6,245.68,444.46,245.72Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 444.196px 244.559px;" id="el6g0byk189p8"
                            class="animable"></path>
                        <path d="M439.73,239.2c-.14,0-.21-.47-.15-1s.22-1,.36-1,.21.48.15,1S439.87,239.21,439.73,239.2Z"
                              style="fill: rgb(255, 255, 255); transform-origin: 439.835px 238.2px;" id="eljyvlt1uurv"
                              class="animable"></path>
                        <path
                            d="M437,231.11c-.14,0-.35-.5-.47-1.17s-.1-1.23.05-1.25.35.5.46,1.16S437.14,231.08,437,231.11Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 436.783px 229.9px;" id="ellyvrwllr3li"
                            class="animable"></path>
                        <path d="M442.57,228.27c-.14,0-.33-.41-.42-1s0-1,.1-1,.33.41.42,1S442.71,228.25,442.57,228.27Z"
                              style="fill: rgb(255, 255, 255); transform-origin: 442.414px 227.27px;" id="elqnoxqwin4lo"
                              class="animable"></path>
                        <path
                            d="M438.56,222.17c-.13,0-.13-.51,0-1.07s.37-1,.51-.93.13.52,0,1.07S438.7,222.21,438.56,222.17Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 438.817px 221.168px;" id="el458s79dqmvx"
                            class="animable"></path>
                        <path
                            d="M434.58,220.28c-.13-.06-.05-.55.06-1.13s.21-1.07.36-1.08.28.53.15,1.18S434.71,220.34,434.58,220.28Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 434.858px 219.178px;" id="el3d0qn4a4xeb"
                            class="animable"></path>
                        <path
                            d="M443.51,214.92c-.14,0-.35-.52-.47-1.22s-.09-1.28,0-1.3.35.52.47,1.22S443.65,214.9,443.51,214.92Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 443.284px 213.66px;" id="eleabvwbhaam"
                            class="animable"></path>
                        <path
                            d="M439.11,211.35c-.14,0-.16-.48,0-1s.32-.92.46-.89.16.48.05,1S439.25,211.38,439.11,211.35Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 439.344px 210.405px;" id="el6rhm60m68h"
                            class="animable"></path>
                        <path
                            d="M441.11,204.43c-.09-.12.2-.47.64-.79s.85-.48.94-.37-.2.47-.64.79S441.19,204.54,441.11,204.43Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 441.9px 203.85px;" id="eledzjli38gj"
                            class="animable"></path>
                        <path
                            d="M445,207.88c-.14,0-.26-.66-.26-1.47s.12-1.48.26-1.48.27.66.27,1.48S445.13,207.88,445,207.88Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 445.005px 206.405px;" id="eli2ebo7ftanm"
                            class="animable"></path>
                        <path
                            d="M452,216.81c-.13.07-.53-.45-.74-1.21s-.14-1.41,0-1.42.3.58.5,1.28S452.16,216.74,452,216.81Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 451.593px 215.498px;" id="el73rotx8baae"
                            class="animable"></path>
                        <path
                            d="M455.6,212.61c-.14,0-.24-.49-.21-1.07s.17-1,.32-1,.23.49.2,1.07S455.74,212.61,455.6,212.61Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 455.65px 211.575px;" id="el7wwyksipdrc"
                            class="animable"></path>
                        <path
                            d="M454.53,225.22c-.14,0-.33-.65-.41-1.5s-.05-1.53.1-1.55.33.66.41,1.5S454.68,225.21,454.53,225.22Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 454.375px 223.695px;" id="elay7j2yncokw"
                            class="animable"></path>
                        <path
                            d="M450.77,227.32c-.15,0-.36-.52-.47-1.22s-.1-1.28.05-1.3.35.52.46,1.22S450.91,227.3,450.77,227.32Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 450.555px 226.06px;" id="ellfaq0hs4hof"
                            class="animable"></path>
                        <path
                            d="M454.65,233c-.09.11-.44,0-.79-.33s-.56-.61-.47-.72.45,0,.8.32S454.75,232.89,454.65,233Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 454.022px 232.475px;" id="elac5pbe3hgq"
                            class="animable"></path>
                        <path
                            d="M458.65,232.47c-.14,0-.42-.49-.62-1.19s-.25-1.29-.12-1.33.42.49.62,1.19S458.79,232.43,458.65,232.47Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 458.282px 231.209px;" id="el5gt39ty1cg9"
                            class="animable"></path>
                        <path
                            d="M449.61,234.26c-.14,0-.26-.47-.26-1s.12-1.05.26-1.05.26.47.26,1.05S449.75,234.26,449.61,234.26Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 449.61px 233.235px;" id="el37v397vg7kq"
                            class="animable"></path>
                        <path
                            d="M451.92,240.67c-.12.08-.49-.25-.84-.74s-.54-1-.42-1.05.5.25.84.75S452,240.59,451.92,240.67Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 451.282px 239.778px;" id="el2gfxpe3jwdu"
                            class="animable"></path>
                        <path
                            d="M455.81,239.62c-.13.08-.56-.4-1-1.07s-.64-1.27-.52-1.34.55.4,1,1.07S455.93,239.55,455.81,239.62Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 455.05px 238.416px;" id="el0hwari680xsb"
                            class="animable"></path>
                        <path d="M459.8,239.62c-.14,0-.15-.5-.21-1s-.12-1,0-1.06.45.37.51,1S459.94,239.66,459.8,239.62Z"
                              style="fill: rgb(255, 255, 255); transform-origin: 459.815px 238.588px;" id="eloftz0x9cmz"
                              class="animable"></path>
                        <path
                            d="M461.18,247.83c-.12-.09.08-.55.3-1.11s.38-1,.53-1,.2.57-.05,1.19S461.29,247.91,461.18,247.83Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 461.639px 246.78px;" id="el3y8bucgyllp"
                            class="animable"></path>
                        <path
                            d="M457.49,245.82c-.08-.11.15-.44.53-.73s.75-.43.84-.32-.15.44-.53.73S457.58,245.94,457.49,245.82Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 458.177px 245.297px;" id="ellthbskxprs"
                            class="animable"></path>
                        <path
                            d="M455.81,254.34c-.1.09-.47-.13-.82-.51s-.55-.76-.44-.86.47.13.82.51S455.92,254.24,455.81,254.34Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 455.18px 253.653px;" id="elo2c86r91n2"
                            class="animable"></path>
                        <path
                            d="M448.94,253.4c-.14,0-.15-.55,0-1.16s.36-1.08.5-1.05.14.55,0,1.16S449.08,253.43,448.94,253.4Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 449.188px 252.295px;" id="eltcdd3pvwbn"
                            class="animable"></path>
                        <path
                            d="M445.72,251.39c-.07.13-.58,0-1.13-.35s-.94-.68-.87-.8.58,0,1.13.35S445.79,251.27,445.72,251.39Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 444.72px 250.817px;" id="elam3ornmf4dt"
                            class="animable"></path>
                        <path
                            d="M449.73,245.62c-.14,0-.18-.39-.09-.8s.27-.71.41-.68.19.39.1.8S449.87,245.65,449.73,245.62Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 449.894px 244.88px;" id="elzua6ty0nnd"
                            class="animable"></path>
                        <path d="M452.13,208.4c.12.08-.05.55-.49.95s-.91.54-1,.42.24-.44.63-.8S452,208.32,452.13,208.4Z"
                              style="fill: rgb(255, 255, 255); transform-origin: 451.396px 209.099px;" id="els5n98zxy7c"
                              class="animable"></path>
                        <path
                            d="M449.61,220.28c-.14,0-.26-.45-.26-1s.12-1,.26-1,.26.45.26,1S449.75,220.28,449.61,220.28Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 449.61px 219.28px;" id="eleobaq41k7m9"
                            class="animable"></path>
                        <path
                            d="M399.35,241.43c-.15,0-.24-.42-.21-.93s.18-.9.32-.89.24.42.2.93S399.49,241.44,399.35,241.43Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 399.402px 240.52px;" id="elya8idtdm15e"
                            class="animable"></path>
                        <path
                            d="M394.19,254.15c-.14,0-.21-.41-.15-.88s.22-.84.36-.83.21.42.15.89S394.33,254.17,394.19,254.15Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 394.295px 253.295px;" id="el8u1bt9849g5"
                            class="animable"></path>
                        <path
                            d="M382.32,247.31c-.14-.05,0-.68,0-1.45s-.05-1.39.09-1.44.46.6.43,1.46S382.44,247.37,382.32,247.31Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 382.55px 245.866px;" id="el44lf623y89"
                            class="animable"></path>
                        <path
                            d="M387.34,237.79c-.13.06-.42-.36-.51-1s.05-1.08.19-1.07.24.46.32,1S387.48,237.74,387.34,237.79Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 387.113px 236.758px;" id="ell7m0c10hhz9"
                            class="animable"></path>
                        <path d="M394,237.47c-.14,0-.23-.26-.2-.56s.17-.52.31-.51.24.27.21.56S394.12,237.49,394,237.47Z"
                              style="fill: rgb(255, 255, 255); transform-origin: 394.06px 236.935px;" id="elzbq1loncodf"
                              class="animable"></path>
                        <path
                            d="M403.39,248.27c-.14,0-.33-.22-.42-.58s0-.67.09-.7.33.22.42.58S403.53,248.24,403.39,248.27Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 403.23px 247.629px;" id="elmuqfry0fhx"
                            class="animable"></path>
                        <path
                            d="M406.92,239.5c-.14,0-.35-.32-.47-.79s-.1-.88,0-.92.35.32.46.79S407.05,239.47,406.92,239.5Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 406.686px 238.643px;" id="elpo1sp35f39"
                            class="animable"></path>
                        <path
                            d="M400,219.29c-.14,0-.23-.52-.2-1.14s.17-1.11.31-1.11.24.52.21,1.14S400.11,219.3,400,219.29Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 400.06px 218.165px;" id="elozbtwj21ri"
                            class="animable"></path>
                        <path
                            d="M388.73,215.44c-.13-.05-.05-.62,0-1.3s.14-1.25.29-1.27.32.59.22,1.33S388.86,215.49,388.73,215.44Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 388.965px 214.156px;" id="elp6jbunlmgve"
                            class="animable"></path>
                        <path
                            d="M396.86,202.18c.08.12-.29.48-.82.81s-1,.49-1.1.36.29-.48.82-.81S396.79,202.06,396.86,202.18Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 395.898px 202.767px;" id="el3hjwjm7189n"
                            class="animable"></path>
                        <path
                            d="M404.88,215.44c-.14,0-.3-.35-.36-.82s0-.87.15-.89.31.35.36.82S405,215.42,404.88,215.44Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 404.771px 214.585px;" id="elrwf7vn5ew7k"
                            class="animable"></path>
                        <path
                            d="M420,214.58c-.14,0-.23-.56-.2-1.24s.17-1.22.31-1.22.24.57.21,1.25S420.11,214.59,420,214.58Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 420.06px 213.35px;" id="el4yq8unsiphj"
                            class="animable"></path>
                        <path
                            d="M419.22,260.25c-.14,0-.31-.53-.37-1.21s0-1.24.16-1.25.3.53.36,1.21S419.36,260.24,419.22,260.25Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 419.109px 259.02px;" id="elncluzpjeujm"
                            class="animable"></path>
                        <path d="M412.8,263c-.15,0-.29-.34-.32-.78s.07-.81.21-.82.28.34.31.78S412.94,263,412.8,263Z"
                              style="fill: rgb(255, 255, 255); transform-origin: 412.74px 262.2px;" id="eltl8djrg2sbc"
                              class="animable"></path>
                        <path d="M401,270.3c-.14,0-.35-.32-.46-.79s-.1-.88,0-.92.34.32.46.79S401.17,270.27,401,270.3Z"
                              style="fill: rgb(255, 255, 255); transform-origin: 400.785px 269.443px;"
                              id="ellgpyhrat96p" class="animable"></path>
                        <path
                            d="M402.21,255.65c-.14-.05-.14-.4-.2-.79s-.14-.73,0-.81.47.21.54.74S402.34,255.71,402.21,255.65Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 402.247px 254.846px;" id="elmim6vubuy1g"
                            class="animable"></path>
                        <path d="M414.94,269c-.14,0-.33-.28-.42-.69s0-.78.1-.81.32.28.41.7S415.08,269,414.94,269Z"
                              style="fill: rgb(255, 255, 255); transform-origin: 414.781px 268.249px;" id="elx0jqwdutsp"
                              class="animable"></path>
                        <path
                            d="M414.4,249.88c-.14,0-.26-.75-.26-1.66s.12-1.66.26-1.66.26.74.26,1.66S414.55,249.88,414.4,249.88Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 414.4px 248.22px;" id="elcb6gfi8szl"
                            class="animable"></path>
                        <path d="M419.32,253c-.14,0-.16-.51,0-1.07s.33-1,.47-1,.16.5,0,1.07S419.46,253,419.32,253Z"
                              style="fill: rgb(255, 255, 255); transform-origin: 419.555px 251.965px;"
                              id="ell4qftjo89zq" class="animable"></path>
                        <path
                            d="M425.84,257.68c-.14,0-.39-.53-.57-1.27s-.21-1.37-.07-1.4.4.54.58,1.28S426,257.65,425.84,257.68Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 425.526px 256.344px;" id="elik7ilak61l"
                            class="animable"></path>
                        <path d="M433,254.37c-.14,0-.33-.39-.42-.93s0-1,.1-1,.33.39.42.92S433.17,254.34,433,254.37Z"
                              style="fill: rgb(255, 255, 255); transform-origin: 432.848px 253.405px;"
                              id="elryacvudw6b8" class="animable"></path>
                        <path
                            d="M432.59,261.43c-.14,0-.31-.48-.37-1.1s0-1.14.16-1.15.3.48.36,1.1S432.73,261.41,432.59,261.43Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 432.479px 260.305px;" id="el1v7p3s1xo2jj"
                            class="animable"></path>
                        <path
                            d="M428.52,263.78c-.14,0-.33-.36-.42-.86s0-.93.1-1,.33.36.41.87S428.66,263.75,428.52,263.78Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 428.358px 262.846px;" id="eloqtmtipm5ih"
                            class="animable"></path>
                        <path
                            d="M425.52,267.31c-.12.06-.42-.31-.48-.87s.13-1,.27-.95.18.43.24.89S425.66,267.25,425.52,267.31Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 425.319px 266.401px;" id="el6nvq5h46off"
                            class="animable"></path>
                        <path
                            d="M437.18,265.7c-.14,0-.26-.55-.26-1.23s.12-1.23.26-1.23.26.56.26,1.23S437.32,265.7,437.18,265.7Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 437.18px 264.47px;" id="elqjocl40f4qn"
                            class="animable"></path>
                        <path d="M445,264.85c-.15,0-.31-.45-.37-1s0-1.09.15-1.1.31.45.37,1S445.13,264.83,445,264.85Z"
                              style="fill: rgb(255, 255, 255); transform-origin: 444.889px 263.8px;" id="el7zfao5nrw8"
                              class="animable"></path>
                        <path
                            d="M442.43,259.61c-.14,0-.28-.52-.31-1.17s.06-1.18.21-1.18.28.51.31,1.16S442.58,259.6,442.43,259.61Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 442.38px 258.435px;" id="elkgeamnkw3ql"
                            class="animable"></path>
                        <path
                            d="M437.29,258.75c-.15,0-.29-.46-.32-1.05s.07-1.08.21-1.09.28.47.31,1.06S437.43,258.75,437.29,258.75Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 437.23px 257.68px;" id="elwfgrs2q45xc"
                            class="animable"></path>
                        <path
                            d="M439.11,253.08c-.15,0-.26-.23-.26-.53s.11-.53.26-.53.26.23.26.53S439.25,253.08,439.11,253.08Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 439.11px 252.55px;" id="el1xdqb8ui13x"
                            class="animable"></path>
                        <g id="elegbm2x8d58f">
                            <g style="opacity: 0.3; transform-origin: 422.82px 250.62px;" class="animable">
                                <path
                                    d="M449.49,258.19a2.09,2.09,0,0,0-1.05-1.14l-7.57-4.87c-2.23-1.44-4.56-2.91-7.19-3.29-2.8-.4-5.59.47-8.37,1a2.42,2.42,0,0,1-2.13-.32c-.78-.75-.29-2-.2-3.1.23-2.56-2.3-4.72-4.87-5s-6.54,2.26-6.54,2.26c.26.07,1.09,3.63,1.09,3.63l-16.54,7.82a69.49,69.49,0,0,0,10.24-2.4,19.67,19.67,0,0,0,8.45-4.58c.73-.7,1.66-1.55,2.6-1.18a1.88,1.88,0,0,1,.88,2.09c-.12.81-.52,1.56-.64,2.37a3.71,3.71,0,0,0,3.4,4.11c2.15.09,4.08-1.74,6.21-1.46,1.82.25,3.05,1.91,4.62,2.85,3.9,2.33,9.19-.06,13.33,1.81a7.83,7.83,0,0,0,2.54,1C448.66,259.84,449.71,259.08,449.49,258.19Z"
                                    id="elxnhek9rdam" class="animable"
                                    style="transform-origin: 422.82px 250.62px;"></path>
                            </g>
                        </g>
                        <path d="M412,245.21l-.07,0Z"
                              style="fill: rgb(248, 173, 145); transform-origin: 411.965px 245.21px;" id="elfi8k68d3yuc"
                              class="animable"></path>
                        <path d="M412,245.23Z" style="fill: rgb(248, 173, 145); transform-origin: 412px 245.23px;"
                              id="el57uyj0ut2nf" class="animable"></path>
                        <path
                            d="M430.05,228l-8.69,1-11.11,7.87,1.77,8.37a60.88,60.88,0,0,0,6-2.63c1-.63.83-2.55.83-2.55l1.47.7s.89,1.92,1.6,3.58,2.43.51,2.43.51l.12-1.79c1,.9,2.31,0,2.31,0l.25-6.58-2.62-3,2.88.13a17.86,17.86,0,0,1,3.51,2.54c1.79,1.66,4.16-.37,4.16-.37l-5.24-5.37.83.32s3.32,2.05,4.67,2.05,1.53-1.66,1.53-1.66Z"
                            style="fill: rgb(255, 190, 157); transform-origin: 423.5px 236.62px;" id="el4g0kkdhn927"
                            class="animable"></path>
                        <path
                            d="M418.15,236c0-.06.63-.33,1.67-.12a13,13,0,0,1,1.73.52,4.37,4.37,0,0,1,1.94,1.2,4,4,0,0,1,.8,2.15c.07.69,0,1.29.07,1.79,0,1,.17,1.6.1,1.63s-.37-.57-.47-1.6c-.06-.51-.08-1.12-.18-1.76a3.87,3.87,0,0,0-.72-1.88,4.19,4.19,0,0,0-1.71-1.08c-.62-.25-1.17-.47-1.64-.61A11.77,11.77,0,0,0,418.15,236Z"
                            style="fill: rgb(235, 153, 110); transform-origin: 421.313px 239.486px;" id="ela4fm78uahjq"
                            class="animable"></path>
                        <path
                            d="M434.07,234.88a39.92,39.92,0,0,1-4.65-4.38l.15.08-.22,0a38.87,38.87,0,0,0-6.54.14,5.22,5.22,0,0,1,1.88-.53,18.1,18.1,0,0,1,4.72-.13l.22,0h.09l.07.06A39.87,39.87,0,0,1,434.07,234.88Z"
                            style="fill: rgb(235, 153, 110); transform-origin: 428.44px 232.422px;" id="elrx289265nr"
                            class="animable"></path>
                        <polygon points="432.18 235.41 421.03 251.57 444.62 247.85 456.84 230.63 432.18 235.41"
                                 style="fill: rgb(38, 50, 56); transform-origin: 438.935px 241.1px;" id="el8ycs57fo9s"
                                 class="animable"></polygon>
                        <path
                            d="M420.76,251.74l11.35-16.44h.05l25-4.84L444.69,248h-.05Zm11.5-16.21-11,15.87,23.26-3.67,12-16.91Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 438.96px 241.1px;" id="elh2d8jem4gxt"
                            class="animable"></path>
                        <path
                            d="M452.85,238c.07.13.3.34,0,1.32a5.83,5.83,0,0,1-.58,1.41v4.43l-1,2.59h.86a3.09,3.09,0,0,1,.45,2.92,5.59,5.59,0,0,1-3.07,3,14.42,14.42,0,0,1-3.9,1L435,252.05l-8.18-2.82a.66.66,0,0,1-.44-.59L425,247.52s-.09-.83,1.17-1.24,4.83.8,5,.9,3,.49,3,.49a41,41,0,0,0-5.7-2s-.92-3,2.19-2.48a30.44,30.44,0,0,1,6.63,2.19l2.24.95,1-.46-.73-1.22s-3.41-3.34-3.46-3.5-.92-1.18-.14-1.71A3.54,3.54,0,0,1,440,240c1,1,4.43,4.29,4.43,4.29a4.2,4.2,0,0,1,1.42-.15,3.89,3.89,0,0,0,2.61-1.66c.11-.38.12-2.33,1.14-3.5S452.41,237.19,452.85,238Z"
                            style="fill: rgb(255, 190, 157); transform-origin: 438.999px 246.151px;" id="elpciemst321k"
                            class="animable"></path>
                        <path
                            d="M405.1,164.55a3.4,3.4,0,0,1-1.69-5.36,7.33,7.33,0,0,0,1.14-1.42c.52-1.21-.42-2.59-.19-3.88a3.62,3.62,0,0,1,2.51-2.42,13.58,13.58,0,0,0,3.36-1.38c.9-.66,1.49-1.67,2.34-2.39a4.86,4.86,0,0,1,4.4-.95c1.55.44,2.84,1.64,4.44,1.82a19.6,19.6,0,0,0,3.47-.38,5.83,5.83,0,0,1,5.84,4.36,6.92,6.92,0,0,0,1.25,3c.95,1.18,2.6,1.57,3.34,2.89a3.38,3.38,0,0,1,0,2.63,8.63,8.63,0,0,0-.62,2.62,3.2,3.2,0,0,0,2.49,3,3.22,3.22,0,0,1-1.66,2,3.71,3.71,0,0,0,2,.46,6.58,6.58,0,0,1-3.46,3.77,6.5,6.5,0,0,1-5.12.07"
                            style="fill: rgb(224, 224, 224); transform-origin: 420.1px 160.028px;" id="eld0odzr5hytl"
                            class="animable"></path>
                        <path
                            d="M430.69,170.27c.13-.06,5.15-1.62,5.08,3.53s-5.24,4-5.24,3.87S430.69,170.27,430.69,170.27Z"
                            style="fill: rgb(255, 190, 157); transform-origin: 433.15px 173.936px;" id="elhdvdywl6ug8"
                            class="animable"></path>
                        <path
                            d="M432.13,175.74s.09.06.24.14a.88.88,0,0,0,.67,0,2.22,2.22,0,0,0,1.06-2,3,3,0,0,0-.24-1.29,1.05,1.05,0,0,0-.66-.7.46.46,0,0,0-.53.24c-.08.15,0,.25-.07.26s-.11-.09-.07-.3a.62.62,0,0,1,.21-.32.7.7,0,0,1,.5-.13,1.29,1.29,0,0,1,.93.82,3.17,3.17,0,0,1,.29,1.44,2.33,2.33,0,0,1-1.35,2.2,1,1,0,0,1-.82-.15C432.14,175.87,432.11,175.75,432.13,175.74Z"
                            style="fill: rgb(235, 153, 110); transform-origin: 433.293px 173.883px;" id="elupjk79ui32l"
                            class="animable"></path>
                        <path
                            d="M404.59,180.79c-.11-3.64.28-11.15.71-17.94a14,14,0,0,1,13.76-13.15l.73,0c7.85.32,12,7.17,11.42,15l-.68,25.87-9.63,7.61-8.47-6.77-.06-2S404.81,188.32,404.59,180.79Z"
                            style="fill: rgb(255, 190, 157); transform-origin: 417.917px 173.94px;" id="el35v9dz1v67p"
                            class="animable"></path>
                        <path d="M412.36,189.36a17.52,17.52,0,0,0,9.77-3s-2.17,5.55-9.7,5Z"
                              style="fill: rgb(235, 153, 110); transform-origin: 417.245px 188.879px;" id="eln4orn88mi"
                              class="animable"></path>
                        <path
                            d="M407.12,169a1.08,1.08,0,0,0,1.06,1.07,1,1,0,0,0,1.09-1,1.08,1.08,0,0,0-1.06-1.07A1,1,0,0,0,407.12,169Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 408.195px 169.035px;" id="ele8crhoqhbr"
                            class="animable"></path>
                        <path
                            d="M418.8,168.72a1.09,1.09,0,0,0,1.06,1.07,1,1,0,0,0,1.09-1,1.07,1.07,0,0,0-1.05-1.07A1,1,0,0,0,418.8,168.72Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 419.875px 168.755px;" id="elim41z5pkup"
                            class="animable"></path>
                        <path
                            d="M406.91,166.84c.14.13.94-.48,2.1-.5s2,.55,2.14.4-.08-.31-.45-.57a2.88,2.88,0,0,0-1.72-.5,2.81,2.81,0,0,0-1.66.57C407,166.52,406.85,166.77,406.91,166.84Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 409.045px 166.263px;" id="el1p4wjswsvf7"
                            class="animable"></path>
                        <path
                            d="M418.55,166.37c.15.13.91-.54,2.07-.63s2,.42,2.16.27-.1-.31-.49-.55a3,3,0,0,0-1.75-.39,2.83,2.83,0,0,0-1.63.68C418.58,166.05,418.48,166.31,418.55,166.37Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 420.678px 165.723px;" id="elh871y49027f"
                            class="animable"></path>
                        <path
                            d="M414.31,175.18a8.3,8.3,0,0,0-1.88-.3c-.3,0-.58-.08-.63-.28a1.43,1.43,0,0,1,.18-.88l.83-2.27a38.79,38.79,0,0,0,1.86-5.92,38.84,38.84,0,0,0-2.33,5.76c-.28.79-.54,1.55-.8,2.28a1.72,1.72,0,0,0-.13,1.16.7.7,0,0,0,.49.42,1.6,1.6,0,0,0,.51.06A6.89,6.89,0,0,0,414.31,175.18Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 413.016px 170.396px;" id="elifiyacafnro"
                            class="animable"></path>
                        <path
                            d="M417.73,175.93c-.19,0-.17,1.24-1.23,2.15s-2.4.8-2.4,1,.3.24.87.24a3.12,3.12,0,0,0,2-.74,2.78,2.78,0,0,0,.95-1.81C418,176.23,417.82,175.92,417.73,175.93Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 416.02px 177.625px;" id="el9g8shnlsjyl"
                            class="animable"></path>
                        <path
                            d="M418,161.46c.14.3,1.28,0,2.65.06s2.49.29,2.65,0c.06-.14-.16-.42-.63-.68a4.62,4.62,0,0,0-4,0C418.2,161.05,418,161.32,418,161.46Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 420.655px 161.024px;" id="ele0hud2x1o5a"
                            class="animable"></path>
                        <path
                            d="M407.08,163.73c.21.26,1,0,2-.06s1.77.15,1.95-.13-.05-.4-.41-.64a2.65,2.65,0,0,0-1.6-.4,2.71,2.71,0,0,0-1.55.55C407.09,163.33,407,163.6,407.08,163.73Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 409.073px 163.168px;" id="elu6lybjpeiy"
                            class="animable"></path>
                        <path
                            d="M413.53,149.09c2.62-1.14,5.34-.69,8.18-.37a13,13,0,0,1,6.11,2.18,11.57,11.57,0,0,1,4.76,8.87,33.27,33.27,0,0,1-.75,10.19l-.28-.06a5,5,0,0,1,.13,2.62,1.69,1.69,0,0,1-2,1.21c-1-.38-1-1.69-1-2.72a73,73,0,0,0-.33-10.45c-.24-2.6-1.84-5.73-3.91-6.89-4.66-2.58-8.1,0-9.67.63-2.58-2.05-5.33-.73-6.8,1.19C408.4,152.67,410.9,150.24,413.53,149.09Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 420.329px 161.064px;" id="el8q4joc0pkjx"
                            class="animable"></path>
                        <path
                            d="M434.18,157.38c0,.16-.3.36-.92.45a6,6,0,0,1-2.58-.29,13.69,13.69,0,0,1-3.35-1.66c-1.14-.75-2.29-1.61-3.5-2.3a7.79,7.79,0,0,0-3.49-1.13,7.28,7.28,0,0,0-3,.51c-1.67.65-2.53,1.57-2.83,1.35-.07,0-.09-.15-.06-.32a2.15,2.15,0,0,1,.26-.67,5.52,5.52,0,0,1,1.82-1.89,7.43,7.43,0,0,1,3.78-1.24,7.68,7.68,0,0,1,2.4.28,10.62,10.62,0,0,1,2.3,1,29.3,29.3,0,0,1,3.61,2.59,22.43,22.43,0,0,0,2.72,1.91,13.7,13.7,0,0,0,2,.94C433.85,157.07,434.17,157.2,434.18,157.38Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 424.308px 154.024px;" id="elvp62332oh3"
                            class="animable"></path>
                        <path
                            d="M434.36,161.58a2.84,2.84,0,0,1-1,.21,6.43,6.43,0,0,1-2.4-.29,6.32,6.32,0,0,1-2.12-1.18,2.76,2.76,0,0,1-.67-.74,6.85,6.85,0,0,1,.78.61,7.54,7.54,0,0,0,2.08,1.08,7.13,7.13,0,0,0,2.32.34C434,161.61,434.35,161.54,434.36,161.58Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 431.265px 160.693px;" id="elc7fhmvawmoh"
                            class="animable"></path>
                        <path
                            d="M436.63,166.74a1.75,1.75,0,0,1-.4-.09c-.24-.08-.6-.2-1-.38a16.07,16.07,0,0,1-5.86-4.15,10.88,10.88,0,0,1-.69-.85,1.24,1.24,0,0,1-.22-.34s.39.41,1,1.07a19.3,19.3,0,0,0,2.71,2.33,21.15,21.15,0,0,0,3.09,1.79C436.1,166.5,436.64,166.7,436.63,166.74Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 432.545px 163.835px;" id="eljv41qv2tb8s"
                            class="animable"></path>
                        <path
                            d="M418.67,148.05s-.44.19-1.12.51a7,7,0,0,0-2.35,1.7,4.17,4.17,0,0,0-1,2.66,5.69,5.69,0,0,0,.19,1.19s-.08-.09-.17-.29a3.1,3.1,0,0,1-.2-.9,4.08,4.08,0,0,1,1-2.81,6.29,6.29,0,0,1,2.46-1.71A4.63,4.63,0,0,1,418.67,148.05Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 416.344px 151.08px;" id="elqvxabkthamk"
                            class="animable"></path>
                        <path
                            d="M415.88,146.42s-.39.28-.92.83a5.54,5.54,0,0,0-1.39,2.57,5.45,5.45,0,0,0,.17,2.91c.24.73.52,1.12.48,1.15a.92.92,0,0,1-.22-.27,4.54,4.54,0,0,1-.43-.82,5.16,5.16,0,0,1,1.27-5.67,4.77,4.77,0,0,1,.73-.56C415.76,146.45,415.87,146.4,415.88,146.42Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 414.543px 150.148px;" id="elcye483dn37t"
                            class="animable"></path>
                        <path
                            d="M431.56,171a2.81,2.81,0,0,1-1.7-.56,2.87,2.87,0,0,1-1.21-1.34,15.55,15.55,0,0,0,1.34,1.13A14,14,0,0,0,431.56,171Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 430.105px 170.05px;" id="elfwp9g5dzbyk"
                            class="animable"></path>
                        <path
                            d="M431.87,172a3.61,3.61,0,0,1-3.33-1.76,9.86,9.86,0,0,0,1.53,1.13A11.84,11.84,0,0,0,431.87,172Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 430.205px 171.124px;" id="eltq8q7agpv3l"
                            class="animable"></path>
                        <path
                            d="M407.35,156.63a1.37,1.37,0,0,1-.68-.23,3.45,3.45,0,0,1-1.23-1.24,3.42,3.42,0,0,1-.46-1.68,1.49,1.49,0,0,1,.13-.71,5.47,5.47,0,0,1,0,.7,4.09,4.09,0,0,0,.5,1.57,3.8,3.8,0,0,0,1.12,1.21C407.12,156.49,407.37,156.59,407.35,156.63Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 406.164px 154.7px;" id="el6xw3see8efo"
                            class="animable"></path>
                        <path
                            d="M408.12,155.14a4.79,4.79,0,0,1-1.19-1.51,4.54,4.54,0,0,1-.69-1.78c.07,0,.39.76.91,1.66S408.18,155.09,408.12,155.14Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 407.182px 153.495px;" id="el0hx3us3l5nkm"
                            class="animable"></path>
                        <path
                            d="M425.51,166.6a1.67,1.67,0,0,1-.81.51,1.64,1.64,0,0,1-.94.17c0-.06.39-.18.86-.36A3.42,3.42,0,0,1,425.51,166.6Z"
                            style="fill: rgb(235, 153, 110); transform-origin: 424.635px 166.946px;" id="elxjmx8w74g1"
                            class="animable"></path>
                        <path
                            d="M426.32,167.73a2.88,2.88,0,0,1-1.12,0,2.93,2.93,0,0,1-1.11-.18,3.28,3.28,0,0,1,1.12,0A3.33,3.33,0,0,1,426.32,167.73Z"
                            style="fill: rgb(235, 153, 110); transform-origin: 425.205px 167.643px;" id="eleeppq7z2zmm"
                            class="animable"></path>
                        <path
                            d="M406.72,168.52c0,.06-.27.11-.62.11s-.61,0-.61-.09.27-.11.61-.11S406.72,168.47,406.72,168.52Z"
                            style="fill: rgb(235, 153, 110); transform-origin: 406.105px 168.53px;" id="elwjl3fe8kgh"
                            class="animable"></path>
                        <path
                            d="M406.43,167.94c0,.05-.26,0-.52-.2s-.46-.32-.43-.37.27,0,.53.2S406.46,167.89,406.43,167.94Z"
                            style="fill: rgb(235, 153, 110); transform-origin: 405.955px 167.655px;" id="ell09zad43bld"
                            class="animable"></path>
                        <path
                            d="M418.33,157.68s-.36.11-.93.34-1.31.6-2.17,1a5.9,5.9,0,0,1-2.34.55,2.53,2.53,0,0,1-.72-.09.73.73,0,0,1-.26-.09s.38.07,1,0a6.63,6.63,0,0,0,2.26-.6c.85-.36,1.62-.74,2.21-.92A2.93,2.93,0,0,1,418.33,157.68Z"
                            style="fill: rgb(235, 153, 110); transform-origin: 415.12px 158.625px;" id="elwchq3500gce"
                            class="animable"></path>
                        <path
                            d="M416.8,157.51a5.53,5.53,0,0,1-2.29.77,5.68,5.68,0,0,1-2.41-.08c0-.07,1.08.07,2.38-.12S416.78,157.45,416.8,157.51Z"
                            style="fill: rgb(235, 153, 110); transform-origin: 414.45px 157.938px;" id="elbvt1yvq5op7"
                            class="animable"></path>
                        <path
                            d="M419.18,176.21c-.05,0-.23-.41-.71-.61a2.49,2.49,0,0,0-1,0s.08-.11.27-.17a1.13,1.13,0,0,1,1.32.53C419.2,176.08,419.21,176.21,419.18,176.21Z"
                            style="fill: rgb(235, 153, 110); transform-origin: 418.332px 175.795px;" id="el9cobbcw0wl7"
                            class="animable"></path>
                        <path
                            d="M420.16,176c-.05,0-.17-.48-.66-.78a2.39,2.39,0,0,0-1-.29s.1-.09.31-.1a1.26,1.26,0,0,1,.78.22,1.29,1.29,0,0,1,.52.62C420.2,175.85,420.19,176,420.16,176Z"
                            style="fill: rgb(235, 153, 110); transform-origin: 419.341px 175.414px;" id="elai4jsggs6y8"
                            class="animable"></path>
                        <path
                            d="M408.39,171.62a4.48,4.48,0,0,1,.52-.07,3.87,3.87,0,0,0,1.39-.49,4.17,4.17,0,0,0,.82-.64,4,4,0,0,0,.71-1,3.7,3.7,0,0,0,.39-1.31c0-.48,0-1,0-1.53l.09.09h-8.86l.1-.09a10.61,10.61,0,0,0,.05,1.71,3.73,3.73,0,0,0,.54,1.43,4,4,0,0,0,1.95,1.59,4.54,4.54,0,0,0,1.66.26h.45l.16,0-.16,0h-.45a4.2,4.2,0,0,1-1.7-.21,4,4,0,0,1-2.05-1.61,3.94,3.94,0,0,1-.58-1.49,11.11,11.11,0,0,1-.07-1.74v-.1h9.06v.1c0,.53,0,1,0,1.55a4,4,0,0,1-.43,1.36,4.15,4.15,0,0,1-.75,1,4.35,4.35,0,0,1-.86.64,3.72,3.72,0,0,1-1.44.45,2,2,0,0,1-.4,0Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 407.876px 169.02px;" id="elrwci1l54uwa"
                            class="animable"></path>
                        <path
                            d="M420.87,171.62a5,5,0,0,1,.53-.07,3.87,3.87,0,0,0,1.39-.49,4.17,4.17,0,0,0,.82-.64,4.33,4.33,0,0,0,.71-1,3.7,3.7,0,0,0,.39-1.31c.05-.48,0-1,0-1.53l.1.09H416l.09-.09a13.55,13.55,0,0,0,.05,1.71,4,4,0,0,0,2.49,3,4.6,4.6,0,0,0,1.66.26h.46l.15,0-.15,0h-.46a4.2,4.2,0,0,1-1.7-.21,4,4,0,0,1-2-1.61,3.78,3.78,0,0,1-.58-1.49,11.11,11.11,0,0,1-.07-1.74v-.1h9.05v.1c0,.53,0,1,0,1.55a3.94,3.94,0,0,1-.42,1.36,3.94,3.94,0,0,1-1.62,1.65,3.73,3.73,0,0,1-1.43.45,2,2,0,0,1-.4,0Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 420.461px 169.01px;" id="elang3unwj7r"
                            class="animable"></path>
                        <path
                            d="M415.9,167.78s-.16-.18-.44-.41a2.3,2.3,0,0,0-1.29-.48,2.18,2.18,0,0,0-1.32.43c-.29.21-.43.4-.46.38s.08-.24.37-.5a2.11,2.11,0,0,1,1.41-.51,2.06,2.06,0,0,1,1.38.57C415.83,167.54,415.92,167.77,415.9,167.78Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 414.144px 167.235px;" id="el79gwjnz9n1e"
                            class="animable"></path>
                        <path
                            d="M432.45,169.68a10.06,10.06,0,0,1-1.12-.22c-.7-.16-1.65-.36-2.71-.56s-2-.35-2.73-.46a6.29,6.29,0,0,1-1.13-.2,5.53,5.53,0,0,1,1.15.06c.7.07,1.68.2,2.74.4a26.38,26.38,0,0,1,2.71.62A5.38,5.38,0,0,1,432.45,169.68Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 428.605px 168.956px;" id="elmjfb1vpy9d"
                            class="animable"></path>
                        <path
                            d="M408.08,171.14a2.49,2.49,0,0,1-1-.08A4.58,4.58,0,0,1,405,170a3.89,3.89,0,0,1-1.16-2,2,2,0,0,1,0-1s0,.37.18.94a4.13,4.13,0,0,0,1.16,1.91,4.87,4.87,0,0,0,2,1.09C407.71,171.08,408.08,171.1,408.08,171.14Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 405.928px 169.079px;" id="el8co3mmvqry"
                            class="animable"></path>
                        <path
                            d="M420.74,170.9a2.93,2.93,0,0,1-.93-.1,5.1,5.1,0,0,1-2.09-.87,3,3,0,0,1-1.19-1.92,2.18,2.18,0,0,1,0-.7.62.62,0,0,1,.09-.24,4.8,4.8,0,0,0,0,.91,3.08,3.08,0,0,0,1.16,1.79,5.87,5.87,0,0,0,2,.89A6.51,6.51,0,0,1,420.74,170.9Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 418.621px 168.987px;" id="el3kwhbl7ntm8"
                            class="animable"></path>
                        <path
                            d="M421.85,195.08s-.09,0-.22-.08a1.09,1.09,0,0,1-.37-.52,4.44,4.44,0,0,1-.18-.91,1.23,1.23,0,0,0-.47-.88,10.13,10.13,0,0,1-1-.46,1.57,1.57,0,0,1-.54-.79,1.07,1.07,0,0,1,0-.85,2.21,2.21,0,0,0,.1.81,1.33,1.33,0,0,0,.51.67c.25.2.64.22,1,.45a1,1,0,0,1,.4.48,1.94,1.94,0,0,1,.14.55,5.81,5.81,0,0,0,.14.88A1.14,1.14,0,0,0,421.85,195.08Z"
                            style="fill: rgb(235, 153, 110); transform-origin: 420.416px 192.835px;" id="eluhb2d0976b"
                            class="animable"></path>
                        <path
                            d="M423.59,194.52a1.29,1.29,0,0,1-.74-.48,1.87,1.87,0,0,1-.43-.87,1.85,1.85,0,0,1,0-.58c0-.2.07-.4.07-.59a1.09,1.09,0,0,0-.49-.9,4.21,4.21,0,0,1-.37-.36,1.1,1.1,0,0,1-.22-.41.78.78,0,0,1,.07-.66c.12-.13.21-.13.22-.12a.7.7,0,0,0-.15.17.67.67,0,0,0,0,.56,1,1,0,0,0,.21.35,4.27,4.27,0,0,0,.37.33,2.69,2.69,0,0,1,.4.42,1.05,1.05,0,0,1,.17.63c0,.22-.06.41-.08.6a1.79,1.79,0,0,0,0,.52,1.88,1.88,0,0,0,.37.82A3.29,3.29,0,0,0,423.59,194.52Z"
                            style="fill: rgb(235, 153, 110); transform-origin: 422.479px 192.033px;" id="elc78358isxyr"
                            class="animable"></path>
                    </g>
                    <g id="freepik--character-3--inject-2" class="animable"
                       style="transform-origin: 313.229px 331.606px;">
                        <rect x="261" y="377.01" width="4.04" height="61.95"
                              style="fill: rgb(38, 50, 56); transform-origin: 263.02px 407.985px;" id="elxb7hlde8p7q"
                              class="animable"></rect>
                        <rect x="311.62" y="377.01" width="4.04" height="61.95"
                              style="fill: rgb(38, 50, 56); transform-origin: 313.64px 407.985px;" id="el2h6ghnbra92"
                              class="animable"></rect>
                        <rect x="259.31" y="370.23" width="59.09" height="7.8"
                              style="fill: rgb(69, 90, 100); transform-origin: 288.855px 374.13px;" id="elvp7mypjc1e"
                              class="animable"></rect>
                        <g id="elkkr0gaxledr">
                            <rect x="249.68" y="303.36" width="8.96" height="73.27"
                                  style="fill: rgb(69, 90, 100); transform-origin: 254.16px 339.995px; transform: rotate(-15.0049deg);"
                                  class="animable"></rect>
                        </g>
                        <path d="M326.7,400.55,310.42,419l22.8,20.36c1.81-2.3-6.08-17.2-6.08-17.2l10.91-11.37Z"
                              style="fill: rgb(126, 87, 194); transform-origin: 324.235px 419.955px;" id="elgdwja9injpv"
                              class="animable"></path>
                        <path
                            d="M321,414.83a1.26,1.26,0,0,0-1.6.49,1.2,1.2,0,0,0,.47,1.58,1.33,1.33,0,0,0,1.69-.52,1.26,1.26,0,0,0-.67-1.6"
                            style="fill: rgb(38, 50, 56); transform-origin: 320.456px 415.868px;" id="elxbt1ll2wor"
                            class="animable"></path>
                        <path d="M310.49,418.88l1.63-1.87,21.17,20.42s.61,1.36-.14,2Z"
                              style="fill: rgb(38, 50, 56); transform-origin: 322.007px 428.22px;" id="el3h9eec8jm7c"
                              class="animable"></path>
                        <path
                            d="M327.62,422.33c-.11.11-.71-.34-1.58-.47s-1.57.08-1.64-.06.68-.63,1.73-.45S327.73,422.25,327.62,422.33Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 326.015px 421.829px;" id="el9z84fh6xwyj"
                            class="animable"></path>
                        <path
                            d="M329.12,425.46c-.07.13-.72-.12-1.52,0s-1.35.53-1.46.43.39-.8,1.38-1S329.22,425.35,329.12,425.46Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 327.627px 425.379px;" id="elux4oljdy4kc"
                            class="animable"></path>
                        <path
                            d="M327.92,429.53c-.12-.07.22-.76,1.05-1.11s1.57-.14,1.54,0-.65.17-1.33.47S328.05,429.62,327.92,429.53Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 329.204px 428.885px;" id="elr2vf2llwlu"
                            class="animable"></path>
                        <path
                            d="M329.82,419.46c-.14.06-.52-.55-1.18-1.06s-1.34-.76-1.31-.91.85-.12,1.63.5S330,419.43,329.82,419.46Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 328.602px 418.439px;" id="el9mlsptnpio"
                            class="animable"></path>
                        <path
                            d="M331.69,416.27c0,.05-.54-.27-1.14-1a7.2,7.2,0,0,1-.86-1.43,8,8,0,0,1-.35-.94,1.83,1.83,0,0,1-.1-.58.64.64,0,0,1,.47-.63.84.84,0,0,1,.72.18,1.8,1.8,0,0,1,.37.44,5.62,5.62,0,0,1,.5.88,5.14,5.14,0,0,1,.43,1.63,2.71,2.71,0,0,1-.15,1.53c-.09,0,0-.59-.21-1.48a6.21,6.21,0,0,0-.51-1.48,6.56,6.56,0,0,0-.47-.79c-.19-.28-.39-.46-.55-.41s-.07,0-.09.15a2,2,0,0,0,.08.42,8.59,8.59,0,0,0,1,2.3A13,13,0,0,1,331.69,416.27Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 330.509px 414.011px;" id="elwvucqqavll9"
                            class="animable"></path>
                        <path
                            d="M331.4,416.31a2.47,2.47,0,0,1,.69-1.38,5.08,5.08,0,0,1,1.27-1.11,5.47,5.47,0,0,1,.91-.43,1.26,1.26,0,0,1,1.24.07.73.73,0,0,1,.19.75,1.94,1.94,0,0,1-.25.52,3.68,3.68,0,0,1-.69.77,3.41,3.41,0,0,1-1.54.74c-1,.2-1.56-.08-1.53-.13a13.85,13.85,0,0,0,1.44-.22,3.56,3.56,0,0,0,1.32-.75,3.17,3.17,0,0,0,.57-.68c.18-.27.26-.55.15-.61a.9.9,0,0,0-.74,0,4.85,4.85,0,0,0-.83.37,5.29,5.29,0,0,0-1.24.94C331.73,415.82,331.48,416.34,331.4,416.31Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 333.567px 414.785px;" id="elnx6ttxjbye"
                            class="animable"></path>
                        <path d="M355.05,413.36l-.35,25.25,31.41.6c-.12-3-16.26-9.34-16.26-9.34l.89-16.17Z"
                              style="fill: rgb(126, 87, 194); transform-origin: 370.405px 426.285px;" id="eljyy1gp8uxv"
                              class="animable"></path>
                        <path
                            d="M360.16,428.32a1.3,1.3,0,0,0-.92,1.45,1.24,1.24,0,0,0,1.43.92,1.36,1.36,0,0,0,1-1.54,1.28,1.28,0,0,0-1.59-.79"
                            style="fill: rgb(38, 50, 56); transform-origin: 360.456px 429.506px;" id="elzhuempmfshb"
                            class="animable"></path>
                        <path d="M354.7,438.51l0-2.55,30.19,1.72s1.38.65,1.2,1.63Z"
                              style="fill: rgb(38, 50, 56); transform-origin: 370.403px 437.635px;" id="el7kqyqo6ygbh"
                              class="animable"></path>
                        <path
                            d="M370.36,429.72c0,.15-.78.21-1.54.68s-1.18,1.12-1.32,1.06.11-.95,1-1.51S370.4,429.58,370.36,429.72Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 368.912px 430.518px;" id="eln31k1miwnzn"
                            class="animable"></path>
                        <path
                            d="M373.63,431.14c0,.15-.64.4-1.17,1s-.7,1.32-.85,1.31-.23-.88.44-1.66S373.63,431,373.63,431.14Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 372.568px 432.261px;" id="elh680noq2mv8"
                            class="animable"></path>
                        <path
                            d="M375.43,435.12c-.14,0-.34-.74.07-1.57s1.13-1.15,1.19-1-.39.57-.71,1.26S375.58,435.11,375.43,435.12Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 375.976px 433.817px;" id="eldgc5o66ya0u"
                            class="animable"></path>
                        <path
                            d="M370.15,426c-.06.14-.76-.09-1.63,0s-1.55.3-1.63.17.59-.67,1.61-.71S370.23,425.89,370.15,426Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 368.52px 425.834px;" id="el5ry2rrm639g"
                            class="animable"></path>
                        <path
                            d="M369.48,422.27a3,3,0,0,1-1.58,0,6.74,6.74,0,0,1-1.63-.54,6.65,6.65,0,0,1-.9-.49,2.45,2.45,0,0,1-.47-.38.68.68,0,0,1,0-.82.84.84,0,0,1,.68-.34,2,2,0,0,1,.59.1,5.45,5.45,0,0,1,2.4,1.33c.72.69,1,1.27.9,1.29s-.41-.43-1.14-1a6.46,6.46,0,0,0-1.39-.82,5.94,5.94,0,0,0-.9-.3c-.33-.09-.61-.1-.7.05s0,.08,0,.17a1.24,1.24,0,0,0,.34.28,8,8,0,0,0,.82.49,9,9,0,0,0,1.51.61A11.49,11.49,0,0,1,369.48,422.27Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 367.126px 421.06px;" id="ellftpl2tvtk"
                            class="animable"></path>
                        <path
                            d="M369.27,422.48a2.46,2.46,0,0,1-.38-1.52,5,5,0,0,1,.24-1.72,5.63,5.63,0,0,1,.42-.95,1.29,1.29,0,0,1,1-.77.72.72,0,0,1,.65.45,1.91,1.91,0,0,1,.15.58,3.41,3.41,0,0,1,0,1.06,3.62,3.62,0,0,1-.7,1.61c-.63.8-1.27,1-1.29.92s.49-.36,1-1.14a3.7,3.7,0,0,0,.53-1.47,3.49,3.49,0,0,0,0-.91c0-.33-.16-.6-.29-.57s-.42.24-.56.5a5.43,5.43,0,0,0-.4.85,6,6,0,0,0-.34,1.56C369.2,421.89,369.36,422.46,369.27,422.48Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 370.137px 420px;" id="elqyltdgnsljc"
                            class="animable"></path>
                        <path
                            d="M261.57,264l6,10.38,8.34,8.33,4.9-6.73,0-6.78,0-5.68s7.55-1,7.77-8.57c.11-3.63-.28-11.13-.71-17.92a14,14,0,0,0-13.76-13.14h-.73c-7.84.32-13,7.12-12.45,14.94l.56,25.18"
                            style="fill: rgb(255, 190, 157); transform-origin: 274.744px 253.3px;" id="elbyq4ozbl2qq"
                            class="animable"></path>
                        <path
                            d="M285.73,242a1.06,1.06,0,0,1-1.05,1.06,1,1,0,0,1-1.09-1,1.07,1.07,0,0,1,1.05-1.07A1,1,0,0,1,285.73,242Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 284.66px 242.025px;" id="elxydtexog0tb"
                            class="animable"></path>
                        <path
                            d="M286.39,240.3c-.14.14-.94-.48-2.1-.49s-2,.54-2.14.4.08-.32.46-.58a2.92,2.92,0,0,1,1.71-.49,2.87,2.87,0,0,1,1.67.56C286.34,240,286.45,240.24,286.39,240.3Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 284.257px 239.73px;" id="elk25xn4efy5f"
                            class="animable"></path>
                        <path
                            d="M274.9,242a1.06,1.06,0,0,1-1,1.06,1,1,0,0,1-1.1-1,1.08,1.08,0,0,1,1.06-1.07A1,1,0,0,1,274.9,242Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 273.85px 242.027px;" id="elxqrck7hojz7"
                            class="animable"></path>
                        <path
                            d="M274.87,239.78c-.12.15-1-.38-2.14-.27s-1.94.77-2.08.64,0-.33.39-.63a3,3,0,0,1,1.65-.68,2.82,2.82,0,0,1,1.71.39C274.78,239.47,274.93,239.71,274.87,239.78Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 272.74px 239.497px;" id="elm5gxhdaa3r"
                            class="animable"></path>
                        <path
                            d="M279,249.37a7.21,7.21,0,0,1,1.88-.31c.3,0,.58-.08.63-.28a1.6,1.6,0,0,0-.18-.88l-.84-2.26a38.79,38.79,0,0,1-1.86-5.92,37.73,37.73,0,0,1,2.33,5.75c.28.8.55,1.55.8,2.28a1.73,1.73,0,0,1,.14,1.16.74.74,0,0,1-.5.42,1.93,1.93,0,0,1-.5.07A8,8,0,0,1,279,249.37Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 280.287px 244.581px;" id="el1yhebrwyit"
                            class="animable"></path>
                        <path
                            d="M275.53,250.11c.19,0,.17,1.25,1.23,2.15s2.39.8,2.4,1-.3.24-.87.25a3.08,3.08,0,0,1-2-.74,2.69,2.69,0,0,1-1-1.81C275.3,250.41,275.44,250.1,275.53,250.11Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 277.225px 251.81px;" id="elj8wpv3j6a1"
                            class="animable"></path>
                        <path
                            d="M274.79,236c-.09.32-1.25.25-2.6.5s-2.41.7-2.61.43.08-.44.5-.77a4.55,4.55,0,0,1,4-.71C274.56,235.59,274.83,235.82,274.79,236Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 272.154px 236.139px;" id="el54dlmwohk2b"
                            class="animable"></path>
                        <path
                            d="M285.9,237.34c-.21.26-1,0-2-.06s-1.77.15-1.95-.13c-.08-.13.05-.39.41-.64a2.85,2.85,0,0,1,3.15.15C285.89,236.94,286,237.21,285.9,237.34Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 283.931px 236.78px;" id="elpwya50f9rqe"
                            class="animable"></path>
                        <path
                            d="M265.37,227.19c-.36-.2-1.9,1.51-2.2,1.8-1.74,1.67-2.38,4.71-2.51,7.12A26,26,0,0,0,261,243c.06.3.27,1.53.27,1.53.33.27.77,2.94,1.2,3,.6,0,1-4.1,1.12-4.42a19,19,0,0,1,.4-2.78,26.12,26.12,0,0,0,.69-4.47c0-2.1.69-5.23.71-7.32C265.38,228.1,265.72,227.37,265.37,227.19Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 263.049px 237.352px;" id="elo0q2fncp2h"
                            class="animable"></path>
                        <path
                            d="M263.82,230.33a15.28,15.28,0,0,1,9.1-6,4,4,0,0,1,2.5.08,7.61,7.61,0,0,1,1.24.89,2,2,0,0,0,1.4.48.91.91,0,0,0,.8-1.07,13.19,13.19,0,0,0-16.21,5.54"
                            style="fill: rgb(38, 50, 56); transform-origin: 270.763px 227.056px;" id="elo4xthxhzb5l"
                            class="animable"></path>
                        <path d="M265.28,230l-4.23,3.31a17.91,17.91,0,0,0-.37,2.46l4.23-2.8Z"
                              style="fill: rgb(224, 224, 224); transform-origin: 262.98px 232.885px;" id="elgxhizyis8ib"
                              class="animable"></path>
                        <path
                            d="M262.37,244.38c-.13-.06-5.14-1.62-5.07,3.53s5.23,4,5.24,3.86S262.37,244.38,262.37,244.38Z"
                            style="fill: rgb(255, 190, 157); transform-origin: 259.92px 248.044px;" id="el8bbo41vlfyo"
                            class="animable"></path>
                        <path
                            d="M260.94,249.84s-.09.06-.24.14a.88.88,0,0,1-.67,0,2.22,2.22,0,0,1-1.06-2,3,3,0,0,1,.23-1.28,1.06,1.06,0,0,1,.67-.7.44.44,0,0,1,.53.24c.07.14,0,.24.07.25s.11-.09.06-.3a.57.57,0,0,0-.2-.32.65.65,0,0,0-.5-.12,1.25,1.25,0,0,0-.93.81,3,3,0,0,0-.29,1.44,2.33,2.33,0,0,0,1.34,2.2.93.93,0,0,0,.82-.15C260.93,250,261,249.85,260.94,249.84Z"
                            style="fill: rgb(235, 153, 110); transform-origin: 259.784px 247.989px;" id="elkoz4pqv4axe"
                            class="animable"></path>
                        <path d="M281,263.42a18.11,18.11,0,0,1-10.09-3.06s2.24,5.72,10,5.16Z"
                              style="fill: rgb(235, 153, 110); transform-origin: 275.955px 262.959px;" id="eluut2e0042s"
                              class="animable"></path>
                        <path
                            d="M265.64,351.56s2.38,15,4.15,18.5,27.91.4,27.91.4l56.94,1.5L354,426.31l20.48.54,1.4-65.1c0-7-2.46-11.94-8.28-13.76-9.05-2.84-21.52-4-25.53-4.5-6.1-.79-29.22-1.7-29.22-1.7L311.08,339Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 320.76px 382.925px;" id="elu7aau9sa91d"
                            class="animable"></path>
                        <path
                            d="M370.28,374.38l-33.79,46.81-17.95-14L342.28,377l-52.22-14.23,2.09-17.92,15.32,1s48.85,6.1,55.18,8.07c.43.13.88.29,1.33.46A13.41,13.41,0,0,1,370.28,374.38Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 331.313px 383.02px;" id="elon5wbi5gpdf"
                            class="animable"></path>
                        <path
                            d="M335.16,343c0,.15-6.58,0-14.68-.33s-14.66-.71-14.66-.86,6.58,0,14.68.34S335.16,342.84,335.16,343Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 320.49px 342.405px;" id="eltg1xfx1adt"
                            class="animable"></path>
                        <path
                            d="M354,426.31a.6.6,0,0,1,0-.23c0-.19,0-.42,0-.7,0-.65,0-1.53,0-2.65,0-2.36,0-5.68,0-9.77.09-8.29.21-19.66.33-32.22,0-3,.08-5.95.12-8.79l.23.26c-10.44-.87-19.63-1.27-26.2-1.46l-7.73-.19-2.07-.05a3.94,3.94,0,0,1-.72-.05,4.9,4.9,0,0,1,.72,0l2.07,0c1.82,0,4.45,0,7.74,0,6.57.1,15.78.43,26.24,1.28l.23,0V372c0,2.83-.07,5.78-.11,8.79-.18,12.56-.35,23.93-.48,32.22-.08,4.08-.15,7.41-.2,9.76l-.09,2.66q0,.41,0,.69A.72.72,0,0,1,354,426.31Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 336.46px 398.378px;" id="elffjjgutsbwm"
                            class="animable"></path>
                        <path d="M369.29,325.7c.72-1.05,8.74-43.21,8.74-43.21h-1.7l-8.45,40.38h-41v3Z"
                              style="fill: rgb(38, 50, 56); transform-origin: 352.455px 304.18px;" id="el9adhrih0j66"
                              class="animable"></path>
                        <path
                            d="M341.61,313.3a16.24,16.24,0,0,1,3.29-3.14c.46-.15,8.72-3.59,8.87-3.21s1.15,2.27-.54,3.16l-1.3.44,4.75.38s5.27,3.9,5.19,4.74-.76,1.37-1.22,1,1.23,2.68,1.23,2.68,0,1.3-.69,1.07a6.36,6.36,0,0,1-1.76-1.45s1,1.6.69,1.91-1.84.38-2,0-.38-1.07-.38-1.07l-.92.07v1.26l-15.93,1.11Z"
                            style="fill: rgb(235, 153, 110); transform-origin: 351.385px 314.585px;" id="elk8i804fyfa"
                            class="animable"></path>
                        <path
                            d="M280.79,273.49c0,1.38,28.32,37.14,28.32,37.14S342,311.81,342,312.4s-2.16,9.25-2.16,9.25l-40.16.7L268.81,287.2Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 305.405px 297.92px;" id="el7y6d3rdp6r"
                            class="animable"></path>
                        <path
                            d="M260.57,267.38s-12.78,9.45-14.58,19.14S261,332,261,332l3,18.2a1.63,1.63,0,0,0,2.17,1.27L311.65,339c.85-.31-.34-4.83-.71-5.65C305,320.1,300,308.57,289.32,298.05l-8.35-27-20-7.28Z"
                            style="fill: rgb(235, 235, 235); transform-origin: 278.902px 307.67px;" id="eldkrxtr9n1km"
                            class="animable"></path>
                        <path
                            d="M248.34,290s4.33,12.6,5.12,14.17c.61,1.23,21.38,19.36,30.36,27.17a11.08,11.08,0,0,0,9.37,2.51l43.52-8.44L336,314.11l-40.79.65-17.52-26s-1.77-7.48-6.49-10.43-15.94-.79-18.5,2.95A44.66,44.66,0,0,0,248.34,290Z"
                            style="fill: rgb(235, 235, 235); transform-origin: 292.525px 305.502px;" id="elwg5fo2b3wgl"
                            class="animable"></path>
                        <path
                            d="M295.18,314.76a13.77,13.77,0,0,0-2.17,3.7,26,26,0,0,0-.84,4.24,7.19,7.19,0,0,1,.34-4.42,7.91,7.91,0,0,1,1.62-2.73C294.69,315,295.15,314.71,295.18,314.76Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 293.575px 318.727px;" id="elwt6l2039c"
                            class="animable"></path>
                        <path
                            d="M268.81,277.39a3.08,3.08,0,0,1,1.08.23,7.58,7.58,0,0,1,2.62,1.88c2,2.07,4.17,5.66,6.19,10.57l0,0,16.68,24.6-.18-.1,40.79-.43h.25v.24c.24,3.51.49,7.23.74,11v.22l-.21.05c-1.63.4-3.39.75-5.16,1.12-14,2.84-27.36,5.26-39.49,7.88a7.4,7.4,0,0,1-4.53-1A28.91,28.91,0,0,1,284,331l-6.68-5.3-12-9.52c-3.62-2.94-7.13-5.4-9.49-8.34a27.59,27.59,0,0,1-4.46-8.42c-.86-2.48-1.36-4.45-1.7-5.79-.15-.65-.28-1.16-.36-1.52s-.11-.52-.11-.52.06.17.16.51l.42,1.51c.37,1.32.89,3.29,1.78,5.74a28,28,0,0,0,4.49,8.3c2.35,2.88,5.86,5.31,9.5,8.24l12,9.47,6.69,5.28a29.38,29.38,0,0,0,3.59,2.58,7,7,0,0,0,4.25,1c12-2.64,25.46-5.08,39.44-7.92,1.76-.37,3.52-.72,5.14-1.12l-.2.27c-.25-3.77-.5-7.49-.73-11l.26.24-40.8.35h-.11l-.07-.1c-6.65-9.92-12.31-18.37-16.55-24.68v0h0c-2-4.89-4.13-8.5-6-10.56a7.71,7.71,0,0,0-2.54-1.92A6.85,6.85,0,0,0,268.81,277.39Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 293.09px 306.039px;" id="eljzqlepepbjg"
                            class="animable"></path>
                        <polygon
                            points="281.22 273.49 281.29 272.15 283.79 276.97 283.79 280.62 281.36 278.68 281.22 273.49"
                            style="fill: rgb(126, 87, 194); transform-origin: 282.505px 276.385px;" id="elz77pzj8o8dm"
                            class="animable"></polygon>
                        <path
                            d="M281.22,271.27a7.58,7.58,0,0,1,.09,1.51c0,1,0,2.34,0,4v.3l-.29-.12c-2.17-.9-4.92-2.07-7.9-3.36-3.58-1.55-6.81-3-9.14-4-1.17-.53-2.11-1-2.75-1.28a4.76,4.76,0,0,1-1-.54,5.21,5.21,0,0,1,1.06.35l2.81,1.13c2.37,1,5.62,2.35,9.21,3.9,3,1.29,5.71,2.5,7.86,3.47l-.29.18c.05-1.69.1-3.08.15-4A6.59,6.59,0,0,1,281.22,271.27Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 270.773px 272.43px;" id="elfk2o3i20ofl"
                            class="animable"></path>
                        <path
                            d="M282.5,279.59c-.1.71,6.89,17.91,6.89,17.91s11.17,14.12,12.24,16.79h2.93l-14.77-17.71-6-17Z"
                            style="fill: rgb(126, 87, 194); transform-origin: 293.529px 296.935px;" id="elj5q00bqxxfl"
                            class="animable"></path>
                        <path
                            d="M361,319.77l-.17-1.68-6.74-4.4-8.28-1.4-6.37,4-3-.24.46,8,1,0a9.61,9.61,0,0,0,3.33.9c2.18.24,5.16-1.44,5.16-1.44l4-2.78,3-1.17,2.42,1.1a8.9,8.9,0,0,1,.35,1.19c0,.3.9.6,1.36.56s.5-1.13.5-1.13l-.76-2.23,1.16.88Z"
                            style="fill: rgb(255, 190, 157); transform-origin: 348.72px 318.632px;" id="el4m3qych1ahr"
                            class="animable"></path>
                    </g>
                    <g id="freepik--Desk--inject-2" class="animable" style="transform-origin: 403.31px 382.305px;">
                        <rect x="349.38" y="330.35" width="6.77" height="108.52"
                              style="fill: rgb(224, 224, 224); transform-origin: 352.765px 384.61px;" id="el9afwg2kw2ps"
                              class="animable"></rect>
                        <path
                            d="M356.15,438.87s0-.2,0-.57,0-.94,0-1.64c0-1.46,0-3.57,0-6.29,0-5.47-.05-13.36-.08-23.14,0-19.54-.06-46.63-.11-76.88l.26.26h-6.77l.26-.26c0,50.47-.07,93.36-.18,108.52l-.08-.09,5.07.05,1.27,0,.43,0-.4,0-1.25,0-5.12,0h-.08v-.09c-.1-15.16-.17-58.05-.17-108.52v-.26h7.29v.26c0,30.32-.08,57.48-.11,77.08,0,9.75-.06,17.62-.07,23.07,0,2.69,0,4.79,0,6.23l0,1.61C356.17,438.69,356.15,438.87,356.15,438.87Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 352.845px 384.415px;" id="elgidifm8ys2"
                            class="animable"></path>
                        <rect x="453.62" y="330.44" width="6.77" height="108.52"
                              style="fill: rgb(224, 224, 224); transform-origin: 457.005px 384.7px;" id="elxjvhjz7l72"
                              class="animable"></rect>
                        <path
                            d="M460.39,439s0-.2,0-.57l0-1.64c0-1.46,0-3.57,0-6.29,0-5.46-.05-13.36-.08-23.13,0-19.55-.07-46.64-.11-76.89l.26.26h-6.77l.26-.26c0,50.47-.08,93.36-.18,108.52l-.08-.08,5.07.05,1.27,0h.43l-.4,0-1.26,0-5.11.05h-.09V439c-.1-15.16-.17-58-.17-108.52v-.26h7.29v.26c0,30.32-.08,57.48-.11,77.08,0,9.75-.06,17.62-.08,23.07,0,2.69,0,4.79,0,6.23,0,.69,0,1.23,0,1.61S460.39,439,460.39,439Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 457.075px 384.62px;" id="el5a5uiixjqoy"
                            class="animable"></path>
                        <rect x="311.73" y="325.59" width="183.16" height="6.61"
                              style="fill: rgb(69, 90, 100); transform-origin: 403.31px 328.895px;" id="elew59tssd7xf"
                              class="animable"></rect>
                    </g>
                    <g id="freepik--character-5--inject-2" class="animable"
                       style="transform-origin: 498.15px 336.314px;">
                        <g id="el3397w9ezjs6">
                            <rect x="563.68" y="377.01" width="4.04" height="61.95"
                                  style="fill: rgb(38, 50, 56); transform-origin: 565.7px 407.985px; transform: rotate(180deg);"
                                  class="animable"></rect>
                        </g>
                        <g id="elj5f0j4ju45">
                            <rect x="513.06" y="377.01" width="4.04" height="61.95"
                                  style="fill: rgb(38, 50, 56); transform-origin: 515.08px 407.985px; transform: rotate(180deg);"
                                  class="animable"></rect>
                        </g>
                        <g id="elna4er1wnwln">
                            <rect x="510.33" y="370.23" width="59.09" height="7.8"
                                  style="fill: rgb(69, 90, 100); transform-origin: 539.875px 374.13px; transform: rotate(180deg);"
                                  class="animable"></rect>
                        </g>
                        <polygon points="560.76 374.22 569.41 378.03 588.38 305.76 579.72 303.44 560.76 374.22"
                                 style="fill: rgb(69, 90, 100); transform-origin: 574.57px 340.735px;"
                                 id="eltjic5th1k7n" class="animable"></polygon>
                        <path
                            d="M587.63,248.29a2.37,2.37,0,0,0-.49-1.18,5.61,5.61,0,0,0-3.48-2.25,10,10,0,0,0,3.18-2.2,3.82,3.82,0,0,0,.92-3.61,4.53,4.53,0,0,0-2.79-2.46,8,8,0,0,0-5.22-.37,5.5,5.5,0,0,0-3.73,3.5l1.65,4.28a9.46,9.46,0,0,0,1.93,4.65,2.13,2.13,0,0,0,1.93,1.06,1.61,1.61,0,0,0,1.14-1.46,4.84,4.84,0,0,0-.36-1.94,9,9,0,0,0,3.31,2.9,1.66,1.66,0,0,0,1.47.19A1.16,1.16,0,0,0,587.63,248.29Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 581.954px 242.829px;" id="elp1lx27s6y8h"
                            class="animable"></path>
                        <path
                            d="M578.6,242.41a9.71,9.71,0,0,0,2.31,1.85,9.48,9.48,0,0,0,2.91.54c0,.07-.31.23-.89.3a4.32,4.32,0,0,1-4-1.82C578.63,242.8,578.54,242.44,578.6,242.41Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 581.201px 243.767px;" id="el5vei9rq5zjp"
                            class="animable"></path>
                        <path
                            d="M588.3,239.49a14.88,14.88,0,0,1-1.61-.45,8.75,8.75,0,0,0-7.5,1.57,14.57,14.57,0,0,1-1.3,1.06,3.47,3.47,0,0,1,1.07-1.34,7.92,7.92,0,0,1,7.83-1.64A3.38,3.38,0,0,1,588.3,239.49Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 583.095px 239.975px;" id="els95voj97amf"
                            class="animable"></path>
                        <path
                            d="M578.13,243.57a2.7,2.7,0,0,0,0-1,7,7,0,0,0-1.49-3.8.79.79,0,0,0-.63-.31c-.38,0-.54.53-.48.91a4.5,4.5,0,0,1,.21,1.13l.65,2.76a1.37,1.37,0,0,0,.34.82.87.87,0,0,0,.83.27A1,1,0,0,0,578.13,243.57Z"
                            style="fill: rgb(126, 87, 194); transform-origin: 576.847px 241.415px;" id="eljbax85c7xa"
                            class="animable"></path>
                        <path
                            d="M575.56,262.85a55,55,0,0,0,2.72-9.19,19.45,19.45,0,0,0-.45-9.5c-.15-.46-1.49-3.56-2-3.52s.45,2.89.27,3.19a16.43,16.43,0,0,0-2.17,9.53,43.62,43.62,0,0,0,1.61,9.49"
                            style="fill: rgb(38, 50, 56); transform-origin: 576.273px 251.745px;" id="el4tjgy476416"
                            class="animable"></path>
                        <path
                            d="M566.05,289.34a9.15,9.15,0,0,0,9.23-8.83l1-29.85c.53-8-3.7-15-11.72-15.3h-.75a14.37,14.37,0,0,0-14,13.5c-.41,6.94-.78,14.63-.66,18.35.26,7.7,8,8.73,8,8.73s0,1.79-.06,4.05a9.13,9.13,0,0,0,9,9.34Z"
                            style="fill: rgb(183, 136, 118); transform-origin: 562.726px 262.35px;" id="elw6iq3qxpghl"
                            class="animable"></path>
                        <path d="M557.09,276a18.55,18.55,0,0,0,10-3.17s-2.33,5.65-10,5.12Z"
                              style="fill: rgb(153, 80, 55); transform-origin: 562.09px 275.408px;" id="el6z8mmxy44lq"
                              class="animable"></path>
                        <path
                            d="M552,254.45a1.1,1.1,0,0,0,1.09,1.08,1.05,1.05,0,0,0,1.11-1,1.1,1.1,0,0,0-1.08-1.09A1.06,1.06,0,0,0,552,254.45Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 553.1px 254.485px;" id="elju2l8xvxoq"
                            class="animable"></path>
                        <path
                            d="M551.48,252c.14.14,1-.49,2.15-.52s2.06.56,2.19.41-.09-.32-.47-.59a3,3,0,0,0-1.76-.5,2.88,2.88,0,0,0-1.7.59C551.53,251.7,551.42,252,551.48,252Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 553.661px 251.409px;" id="elhsi1sgszpuk"
                            class="animable"></path>
                        <path
                            d="M563.24,254.3a1.11,1.11,0,0,0,1.09,1.09,1.06,1.06,0,0,0,1.11-1,1.1,1.1,0,0,0-1.08-1.09A1.06,1.06,0,0,0,563.24,254.3Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 564.34px 254.345px;" id="elezf57f2pnnv"
                            class="animable"></path>
                        <path
                            d="M563.09,252.27c.14.14,1-.5,2.14-.52s2.07.56,2.19.41-.08-.32-.46-.59a3,3,0,0,0-1.76-.5,2.85,2.85,0,0,0-1.7.59C563.14,251.94,563,252.2,563.09,252.27Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 565.259px 251.679px;" id="el1sx2b92x2th"
                            class="animable"></path>
                        <path
                            d="M559,261.45a7.59,7.59,0,0,0-1.93-.31c-.3,0-.59-.07-.64-.28a1.5,1.5,0,0,1,.18-.9l.85-2.32a40.42,40.42,0,0,0,1.88-6.06,40.37,40.37,0,0,0-2.37,5.89q-.42,1.23-.81,2.34a1.81,1.81,0,0,0-.13,1.19.78.78,0,0,0,.51.43,2.5,2.5,0,0,0,.51.06A7.46,7.46,0,0,0,559,261.45Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 557.661px 256.558px;" id="ellwzah0zcb2s"
                            class="animable"></path>
                        <path
                            d="M562.53,262.2c-.19,0-.17,1.28-1.25,2.21s-2.45.82-2.45,1,.31.25.88.25a3.2,3.2,0,0,0,2.06-.76,2.78,2.78,0,0,0,1-1.86C562.77,262.5,562.62,262.19,562.53,262.2Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 560.8px 263.93px;" id="el1eq3o2ylklt"
                            class="animable"></path>
                        <path
                            d="M563.05,247.46c.13.32,1.31.15,2.7.28s2.52.5,2.7.21c.08-.14-.12-.44-.58-.75a4.49,4.49,0,0,0-2-.65,4.38,4.38,0,0,0-2.1.29C563.25,247.05,563,247.31,563.05,247.46Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 565.755px 247.292px;" id="eli0rgxgjtgf"
                            class="animable"></path>
                        <path
                            d="M551.89,248.08c.22.27,1,0,2-.06s1.81.14,2-.14-.06-.41-.43-.65a2.69,2.69,0,0,0-1.64-.41,2.72,2.72,0,0,0-1.58.57C551.91,247.68,551.8,248,551.89,248.08Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 553.908px 247.505px;" id="elboj3vde62jo"
                            class="animable"></path>
                        <path
                            d="M575.76,256.37c.13-.06,5.26-1.67,5.21,3.6s-5.34,4.12-5.35,4S575.76,256.37,575.76,256.37Z"
                            style="fill: rgb(183, 136, 118); transform-origin: 578.295px 260.125px;" id="elhnva0566qur"
                            class="animable"></path>
                        <path
                            d="M577.25,262s.09.07.25.14a.91.91,0,0,0,.68,0,2.28,2.28,0,0,0,1.08-2,3.11,3.11,0,0,0-.24-1.32,1.06,1.06,0,0,0-.69-.71.45.45,0,0,0-.54.24c-.07.15,0,.25-.07.26s-.11-.09-.07-.3a.64.64,0,0,1,.21-.33.73.73,0,0,1,.51-.13,1.27,1.27,0,0,1,1,.83,3.05,3.05,0,0,1,.31,1.47,2.38,2.38,0,0,1-1.37,2.26,1,1,0,0,1-.84-.15C577.26,262.09,577.23,262,577.25,262Z"
                            style="fill: rgb(153, 80, 55); transform-origin: 578.464px 260.145px;" id="elz83jky46ntm"
                            class="animable"></path>
                        <path
                            d="M553.36,240.21c-.85-.49,1.77-3.2,3.88-4.11,3.2-1.37,8-2.16,11-1.28,3.5,1.07,6.39,2.88,8.09,6.11a20.71,20.71,0,0,1,2.11,10.63,6.3,6.3,0,0,1-.8,3.21c-.76,1.15-2.19,1.85-2.16,3.46a2.22,2.22,0,0,1-.58,1.6c-1,1-2.14,0-2.67-1-1.11-2.09-1.19-4.55-1.25-6.92a15.51,15.51,0,0,1,.43-5c.28-.88.71-1.7.94-2.59a3.18,3.18,0,0,0-.32-2.63,3.94,3.94,0,0,0-.42-.45,5.5,5.5,0,0,0-5.43-1.14c-3,1-8.09,2.45-9.39,1.42a8.05,8.05,0,0,1-2.31-2.44Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 565.842px 247.347px;" id="elpogeqplvh1o"
                            class="animable"></path>
                        <path
                            d="M567.93,234.1a11.61,11.61,0,0,0-8.91.31,6,6,0,0,0-3.24,3.44,3.44,3.44,0,0,0,1.64,4.12l.1.07c2.24.8,3.7.53,6-.2,1.9-.61,3.6-1.75,5.5-2.35a10.64,10.64,0,0,1,6.27-.06A17.52,17.52,0,0,0,567.93,234.1Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 565.447px 237.943px;" id="el85v5fznf8cr"
                            class="animable"></path>
                        <path
                            d="M574.67,238.65a7.37,7.37,0,0,0-2.55-.55,7.25,7.25,0,0,0-2.75.56,21.65,21.65,0,0,0-3.12,1.61,23.27,23.27,0,0,1-3.17,1.68,8.18,8.18,0,0,1-2.9.63,3.78,3.78,0,0,1-2.6-.71,8,8,0,0,0,2.59.34,8.16,8.16,0,0,0,2.72-.7,28.58,28.58,0,0,0,3.1-1.69,18.89,18.89,0,0,1,3.21-1.61,7.35,7.35,0,0,1,2.93-.48A3.68,3.68,0,0,1,574.67,238.65Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 566.125px 240.161px;" id="elulmaj8svup8"
                            class="animable"></path>
                        <path
                            d="M572.48,236.88a8.59,8.59,0,0,0-2.36-.36,8,8,0,0,0-2.51.55,15.25,15.25,0,0,0-2.79,1.53c-1,.63-1.85,1.28-2.72,1.79a11.73,11.73,0,0,1-2.43,1.16,4.49,4.49,0,0,1-2.45.29,17.69,17.69,0,0,0,2.33-.64,27.39,27.39,0,0,0,5-3,14.45,14.45,0,0,1,2.91-1.55,7.44,7.44,0,0,1,2.68-.46A3.54,3.54,0,0,1,572.48,236.88Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 564.85px 239.04px;" id="elr5kgyt1cgvc"
                            class="animable"></path>
                        <path d="M577.83,243.7a9.88,9.88,0,0,1-6.87,7.38,15.33,15.33,0,0,0,6.87-7.38Z"
                              style="fill: rgb(69, 90, 100); transform-origin: 574.395px 247.39px;" id="elrlwyenely8"
                              class="animable"></path>
                        <path
                            d="M578.42,247.43a2.23,2.23,0,0,1-.27,1.43,5.85,5.85,0,0,1-2.37,2.57,11.27,11.27,0,0,1-3.24,1.26,3.63,3.63,0,0,1-1.41.2,4.4,4.4,0,0,1,1.31-.55,16.79,16.79,0,0,0,3.07-1.35,6.59,6.59,0,0,0,2.32-2.3C578.25,248,578.33,247.42,578.42,247.43Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 574.787px 250.163px;" id="elsbgbiu7z0pg"
                            class="animable"></path>
                        <path
                            d="M560.18,235c.05.05-.24.4-.7.95a10.84,10.84,0,0,0-1.56,2.27,5.35,5.35,0,0,0-.55,2.61c0,.69.23,1.11.15,1.15s-.36-.35-.51-1.1a4.69,4.69,0,0,1,.44-2.89,7.89,7.89,0,0,1,1.76-2.29C559.75,235.17,560.13,234.92,560.18,235Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 558.566px 238.484px;" id="elpfsjsalj4lj"
                            class="animable"></path>
                        <path
                            d="M556.47,237.42a14.56,14.56,0,0,0,0,2.42,14.42,14.42,0,0,0,.91,2.25c-.07.12-1.12-.65-1.42-2.14A2.76,2.76,0,0,1,556.47,237.42Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 556.613px 239.761px;" id="el7ixmadgkb5e"
                            class="animable"></path>
                        <path d="M451.15,414l-10.82,25.27L409.21,425.1c1.53-2.89,20.35-1.54,20.35-1.54l6.71-16.3Z"
                              style="fill: rgb(126, 87, 194); transform-origin: 430.18px 423.265px;" id="elqw304gdezub"
                              class="animable"></path>
                        <path
                            d="M439.8,426.58a1.41,1.41,0,0,1,.22,1.85,1.35,1.35,0,0,1-1.84.24,1.48,1.48,0,0,1-.22-2,1.39,1.39,0,0,1,1.93,0"
                            style="fill: rgb(224, 224, 224); transform-origin: 438.969px 427.604px;" id="el0ohubf3darbh"
                            class="animable"></path>
                        <path d="M440.33,439.25l1.23-2.62-30.45-12.46s-1.66,0-1.94,1Z"
                              style="fill: rgb(224, 224, 224); transform-origin: 425.365px 431.71px;" id="elx21nsclenrh"
                              class="animable"></path>
                        <path
                            d="M429.13,423.17c-.07.15.66.57,1.19,1.4s.63,1.64.8,1.65.34-1-.32-2S429.16,423,429.13,423.17Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 430.2px 424.669px;" id="el4eqr0zbd7qr"
                            class="animable"></path>
                        <path
                            d="M425.25,423c-.1.14.44.69.66,1.57s.06,1.63.22,1.69.64-.75.34-1.84S425.32,422.89,425.25,423Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 425.902px 424.623px;" id="el6yk9lxddzhg"
                            class="animable"></path>
                        <path
                            d="M421.62,426.1c.12.09.68-.57.67-1.58s-.58-1.66-.7-1.57.12.75.11,1.58S421.47,426,421.62,426.1Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 421.923px 424.525px;" id="eljcewwdszgms"
                            class="animable"></path>
                        <path
                            d="M431.07,419.62c0,.17.79.28,1.62.73s1.38,1,1.52.93-.26-.93-1.25-1.45S431.05,419.47,431.07,419.62Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 432.653px 420.38px;" id="elr16jf6guwu"
                            class="animable"></path>
                        <path
                            d="M433.49,416.27a3.23,3.23,0,0,0,1.56.7,8.17,8.17,0,0,0,1.86.24,8.59,8.59,0,0,0,1.11-.07,2.17,2.17,0,0,0,.64-.15.71.71,0,0,0,.43-.78.92.92,0,0,0-.5-.65,2.21,2.21,0,0,0-.62-.18,5.58,5.58,0,0,0-1.12-.11,6,6,0,0,0-1.87.29c-1,.34-1.53.8-1.49.85s.61-.24,1.6-.45a7.06,7.06,0,0,1,1.74-.16,7.3,7.3,0,0,1,1,.13c.37.07.65.19.67.38s0,.09-.11.16a2.18,2.18,0,0,1-.47.11,9.88,9.88,0,0,1-2.81,0A12,12,0,0,0,433.49,416.27Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 436.294px 416.24px;" id="elmtgw5dekhx9"
                            class="animable"></path>
                        <path
                            d="M433.59,416.58s.59-.36,1.09-1.32a5.59,5.59,0,0,0,.57-1.81,5.9,5.9,0,0,0,0-1.12,1.41,1.41,0,0,0-.64-1.24.8.8,0,0,0-.85.14,2.37,2.37,0,0,0-.42.5,3.64,3.64,0,0,0-.47,1,3.81,3.81,0,0,0-.07,1.91c.24,1.08.79,1.55.83,1.51a14.16,14.16,0,0,1-.43-1.58,4,4,0,0,1,.18-1.69,3.51,3.51,0,0,1,.44-.89c.19-.3.44-.51.55-.42s.3.43.31.75a5.79,5.79,0,0,1,0,1,6.34,6.34,0,0,1-.4,1.7C433.94,416,433.51,416.52,433.59,416.58Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 433.994px 413.803px;" id="elsu0efdxdwcl"
                            class="animable"></path>
                        <path
                            d="M427.82,386.76,450,329.85c3.23-6.58,7.54-9.09,15-7.12L524.78,336l36.37,25.83s-2.45,10.1-7.42,11.76c-1.36.45-81.36-.66-81.36-.66L450,420.55l-17-8.3L442.4,392Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 494.485px 371.313px;" id="elgqxaxjj8v0f"
                            class="animable"></path>
                        <path
                            d="M518.37,346.24l-.26,0-.78.05-3,.14-11,.41-36.25,1.17-2.1.06.23-.16-12.88,32.4-3.93,9.73c-.46,1.12-.83,2-1.09,2.63-.12.28-.22.5-.29.68s-.11.23-.12.22,0-.08.07-.24l.24-.7c.25-.64.58-1.53,1-2.66.9-2.35,2.19-5.68,3.77-9.79,3.26-8.3,7.75-19.73,12.74-32.46l.06-.16H465l2.09-.06,36.26-1,11-.25,3,0h1Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 482.633px 369.906px;" id="elh8622g4v8ha"
                            class="animable"></path>
                        <path
                            d="M465,362.89a68.75,68.75,0,0,1,6.39,10A34.33,34.33,0,0,1,468,368,33.58,33.58,0,0,1,465,362.89Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 468.195px 367.89px;" id="el1btk3sepajt"
                            class="animable"></path>
                        <path
                            d="M472.73,358.1a8.58,8.58,0,0,1,.38,2.15,42.38,42.38,0,0,1,.19,5.26,41.35,41.35,0,0,1-.45,5.25,8,8,0,0,1-.48,2.13c-.16,0,.32-3.31.41-7.39S472.57,358.11,472.73,358.1Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 472.826px 365.495px;" id="el4bvf4n6ulvv"
                            class="animable"></path>
                        <path
                            d="M520.67,335.14l15.4-16.63s3.82-14.91,5.69-19,15.1-19.39,15.1-19.39l18.09-6s11.19,16.68,10.07,30.25-23.87,57.4-23.87,57.4a16.36,16.36,0,0,1-5.3,1.09c-2.91,0-11.72-4-17.61-6.88a22.52,22.52,0,0,1-8.94-7.82Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 552.884px 318.49px;" id="elzfrazvjh8u"
                            class="animable"></path>
                        <path
                            d="M555.85,363c-2.86,0-11.18-3.75-17.66-6.89a22.66,22.66,0,0,1-9-7.87l-8.68-13.12.07-.07L536,318.45c.19-.76,3.88-15,5.69-19s14.58-18.8,15.12-19.42l0,0h0L575,274l0,.08c.12.17,11.2,16.87,10.09,30.33s-23.65,57-23.88,57.45l0,0,0,0A16.48,16.48,0,0,1,555.85,363Zm-35-27.85,8.57,12.95a22.38,22.38,0,0,0,8.9,7.78c5.28,2.56,14.59,6.87,17.55,6.87a16.08,16.08,0,0,0,5.21-1.07c.81-1.57,22.75-44.1,23.83-57.31,1.07-12.9-9.16-28.83-10-30.09l-18,5.93c-.62.71-13.27,15.37-15.07,19.33s-5.64,18.84-5.68,19l0,.06Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 552.839px 318.5px;" id="elspwrbyl8ptm"
                            class="animable"></path>
                        <path
                            d="M529.76,348.88c3.27,2.72,19.19,3.18,26.75,1.67s5.88-3.89,7.75-8.89S571,318.05,571,306.1s-9.36-19.72-11.31-20.83-6.61,3.33-9.28,7.5-4,38.33-4,38.33l-25.67,4.76,2,11.29Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 545.87px 318.25px;" id="elkq46ch5xdrh"
                            class="animable"></path>
                        <path
                            d="M545.61,351.51c-6.74,0-13.77-.78-15.9-2.52l-7.18-1.74,0-.08-2-11.41.12,0L546.22,331c.1-2.42,1.42-34.22,4-38.3s7.37-8.73,9.45-7.54c2.26,1.29,11.37,9.06,11.37,20.94,0,11.7-4.69,30.25-6.69,35.6a25.63,25.63,0,0,0-.9,3.12c-.69,2.92-1.1,4.68-7,5.85A61.26,61.26,0,0,1,545.61,351.51Zm-22.87-4.46,7.1,1.73c3.14,2.61,18.8,3.22,26.64,1.64,5.69-1.14,6.07-2.74,6.76-5.66a23.76,23.76,0,0,1,.91-3.15c2-5.33,6.67-23.85,6.67-35.51s-9-19.45-11.24-20.72c-1.8-1-6.37,3.17-9.12,7.46-2.62,4.09-4,37.93-4,38.27v.1h-.1L520.82,336Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 545.785px 318.242px;" id="elgu6vx30416"
                            class="animable"></path>
                        <path
                            d="M549.09,298.6s0,.2,0,.59-.07,1-.12,1.71c-.11,1.53-.28,3.73-.49,6.53-.46,5.68-1.11,13.8-1.91,23.69v.16l-.16,0-25.66,4.79.2-.29c.63,3.61,1.29,7.41,2,11.3l-.19-.21c3.5.91,7.18,1.87,11,2.62a57.5,57.5,0,0,0,16.25,1.26,27.93,27.93,0,0,0,7.55-1.57,9.78,9.78,0,0,0,5.41-4.65,31.23,31.23,0,0,0,2.11-6.73c.54-2.24,1.07-4.42,1.57-6.53,1-4.22,1.83-8.17,2.48-11.79a109.79,109.79,0,0,0,1.88-17.32c0-2.06,0-3.66,0-4.74q0-.78,0-1.23a2.35,2.35,0,0,1,0-.43,2,2,0,0,1,0,.42c0,.3.05.71.08,1.23.08,1.09.13,2.69.12,4.75a104.62,104.62,0,0,1-1.72,17.38c-.62,3.64-1.45,7.6-2.42,11.83q-.75,3.17-1.54,6.54a31.7,31.7,0,0,1-2.13,6.84,9.49,9.49,0,0,1-2.33,3,12.28,12.28,0,0,1-3.33,1.93,28.25,28.25,0,0,1-7.69,1.62A57.63,57.63,0,0,1,533.56,350c-3.8-.76-7.49-1.72-11-2.63l-.16,0,0-.16c-.67-3.89-1.33-7.69-2-11.3l0-.24.25-.05,25.68-4.71-.17.18c.87-9.88,1.58-18,2.08-23.67.26-2.8.47-5,.61-6.52.08-.73.13-1.3.18-1.71S549.09,298.6,549.09,298.6Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 545.806px 323.591px;" id="ely99bb2hxz3i"
                            class="animable"></path>
                        <path
                            d="M568.33,290.86c-.07.07-.79-.69-2.2-1.55a12.43,12.43,0,0,0-12.25-.49c-1.48.74-2.26,1.44-2.31,1.36s.14-.22.5-.53a10,10,0,0,1,1.63-1.16,11.9,11.9,0,0,1,12.63.51,10.15,10.15,0,0,1,1.54,1.29C568.2,290.63,568.35,290.84,568.33,290.86Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 559.947px 288.892px;" id="elkot2bo5n7tf"
                            class="animable"></path>
                        <path
                            d="M450,420.55l.09-.25.3-.69,1.21-2.67c1.08-2.35,2.64-5.73,4.58-10l15.93-34.2.07-.14h.16l19.68-.09,51.14-.11H552a6.11,6.11,0,0,0,3.4-.82,8.49,8.49,0,0,0,2.29-1.92,13.16,13.16,0,0,0,2-3.62l.35-1a1.8,1.8,0,0,1,.14-.35,2.9,2.9,0,0,1-.09.36c-.07.27-.17.62-.3,1.06a12.42,12.42,0,0,1-2,3.72,8.25,8.25,0,0,1-2.32,2,6.27,6.27,0,0,1-3.52.9l-8.83.07-51.14.26-19.68.07.23-.15c-6.49,13.75-12.1,25.64-16.1,34.13-2,4.2-3.6,7.56-4.72,9.89l-1.28,2.64-.34.67A1.41,1.41,0,0,1,450,420.55Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 505.09px 392.62px;" id="eljz1pmzmokt"
                            class="animable"></path>
                        <path
                            d="M501.77,330.87a.87.87,0,0,1-.28,0l-.82-.15-3.14-.65L486,327.55l-17.24-3.76-2.47-.54c-.82-.21-1.66-.4-2.51-.54a16.44,16.44,0,0,0-5.24-.1,9.75,9.75,0,0,0-4.84,2.26,15,15,0,0,0-3.36,4.48v0l-1.1,2.86c-5.87,15.08-11.17,28.72-15,38.63-1.93,4.91-3.51,8.9-4.61,11.69-.54,1.35-1,2.41-1.27,3.17-.15.33-.26.6-.35.81s-.13.28-.13.28a1.19,1.19,0,0,1,.08-.29c.08-.22.17-.5.3-.84.28-.77.68-1.84,1.18-3.2l4.46-11.75c3.82-9.93,9.07-23.59,14.88-38.68l1.11-2.86v0h0a15.29,15.29,0,0,1,3.48-4.63,10.3,10.3,0,0,1,5.09-2.37,16.88,16.88,0,0,1,5.41.12c.87.15,1.71.34,2.54.55l2.47.56L486,327.2l11.53,2.64,3.12.74.81.2Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 464.825px 354.399px;" id="elo96wb2llvl9"
                            class="animable"></path>
                        <path d="M446.93,393.61l-7.21,21.44-31.79-12.59c1.39-3,20.25-2.55,20.25-2.55l4.1-11.54Z"
                              style="fill: rgb(126, 87, 194); transform-origin: 427.43px 401.71px;" id="elwaf3p4dbyse"
                              class="animable"></path>
                        <path
                            d="M438.56,402.43a1.42,1.42,0,0,1,.31,1.84,1.35,1.35,0,0,1-1.82.32,1.47,1.47,0,0,1-.32-1.95,1.4,1.4,0,0,1,1.93-.13"
                            style="fill: rgb(224, 224, 224); transform-origin: 437.787px 403.498px;" id="elekxr5hjgp9"
                            class="animable"></path>
                        <path d="M439.72,415.05l1.09-2.67-31-10.94s-1.66.06-1.89,1.12Z"
                              style="fill: rgb(224, 224, 224); transform-origin: 424.365px 408.245px;"
                              id="eloblxjf4e0xc" class="animable"></path>
                        <path
                            d="M427.73,399.55c-.06.15.69.53,1.26,1.33s.71,1.62.88,1.61.29-1-.41-1.95S427.75,399.39,427.73,399.55Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 428.864px 400.995px;" id="elvrvbnsdnyql"
                            class="animable"></path>
                        <path
                            d="M423.85,399.6c-.1.14.47.67.74,1.54s.14,1.62.3,1.67.6-.78.25-1.85S423.91,399.46,423.85,399.6Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 424.555px 401.193px;" id="eljp7r6n8poyl"
                            class="animable"></path>
                        <path
                            d="M420.37,402.85c.13.08.66-.61.59-1.61s-.65-1.64-.77-1.53.16.73.19,1.56S420.23,402.77,420.37,402.85Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 420.563px 401.277px;" id="el3el2hgiij6j"
                            class="animable"></path>
                        <path
                            d="M429.49,395.91c0,.17.81.24,1.66.64s1.43,1,1.56.86-.3-.92-1.31-1.38S429.46,395.76,429.49,395.91Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 431.111px 396.586px;" id="el68ade4j1hpl"
                            class="animable"></path>
                        <path
                            d="M431.74,392.44a3.32,3.32,0,0,0,1.6.62,7.57,7.57,0,0,0,1.87.15,8.79,8.79,0,0,0,1.1-.12,2.22,2.22,0,0,0,.63-.19.71.71,0,0,0,.4-.79.91.91,0,0,0-.54-.63,2,2,0,0,0-.63-.15,6.15,6.15,0,0,0-1.12-.06,5.91,5.91,0,0,0-1.85.39c-1,.39-1.49.87-1.45.92s.6-.27,1.57-.53a6.77,6.77,0,0,1,1.74-.24,6.11,6.11,0,0,1,1,.08c.37,0,.66.16.68.34s0,.09-.1.16a1.57,1.57,0,0,1-.46.14,10,10,0,0,1-1,.15,10.25,10.25,0,0,1-1.77,0A10.78,10.78,0,0,0,431.74,392.44Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 434.547px 392.241px;" id="el1p6ivh9eu5f"
                            class="animable"></path>
                        <path
                            d="M431.86,392.74c0,.05.57-.39,1-1.37a5.62,5.62,0,0,0,.47-1.83,5.37,5.37,0,0,0,0-1.13,1.43,1.43,0,0,0-.7-1.2.78.78,0,0,0-.84.18,2.59,2.59,0,0,0-.4.52A3.84,3.84,0,0,0,431,389a3.92,3.92,0,0,0,0,1.91c.29,1.07.87,1.52.9,1.47a13.25,13.25,0,0,1-.5-1.55,3.85,3.85,0,0,1,.09-1.7,3.29,3.29,0,0,1,.39-.91c.19-.32.42-.54.53-.45a1,1,0,0,1,.35.74,5.56,5.56,0,0,1-.27,2.73C432.18,392.17,431.78,392.68,431.86,392.74Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 432.121px 389.95px;" id="el403vw6812dy"
                            class="animable"></path>
                        <path d="M482.88,284c-.29.67,1.68,44.47,1.68,44.47l31,17.8,2.24-2.2L488,326.51l-2.21-42.6Z"
                              style="fill: rgb(38, 50, 56); transform-origin: 500.325px 315.09px;" id="elcofiu43378v"
                              class="animable"></path>
                        <path
                            d="M520.67,335.86l-7.84-6-12.48,3s.18,1.1,1.79,1.63l3.38-.53-6.24,4.27a3.45,3.45,0,0,0,2.41,2.41,6.18,6.18,0,0,1,3.12,2.23l3.21,3.38h8.55l5.81-.58-1.71-9.8Z"
                            style="fill: rgb(183, 136, 118); transform-origin: 510.83px 338.055px;" id="elolm4pk66ca"
                            class="animable"></path>
                    </g>
                    <g id="freepik--character-2--inject-2" class="animable"
                       style="transform-origin: 182.325px 289.098px;">
                        <path
                            d="M207.65,168.72a1.27,1.27,0,0,0,.51-2.12c.65-.36.47-1.38,0-1.92s-1.23-.87-1.63-1.5a1.52,1.52,0,0,0,1.82-1.31,1.24,1.24,0,0,0,.78-2.27c.7-.06.64-1.21.06-1.59a14.37,14.37,0,0,0-2-.66,8.14,8.14,0,0,0-4.35-2.55l2.84-2.12a1.49,1.49,0,0,0,.57-.6c.25-.56-.19-1.19-.66-1.59A6.68,6.68,0,0,0,202,149c-.41,0-.94,0-1.08.41a6,6,0,0,0-2.87-.32,2.28,2.28,0,0,0-1.54.47,4.43,4.43,0,0,1,1-1.27,1.93,1.93,0,0,0,.65-1.44c-.05-.54-.7-1-1.15-.71.5-.23.43-1,0-1.4a2.53,2.53,0,0,0-1.59-.4c-.38,0-.88.06-1,.43a1.08,1.08,0,0,0-2-.16,1.35,1.35,0,0,0-1.94.15,1.73,1.73,0,0,0-2.45.91l1.51-2.53c.29-.48.33-1.37-.22-1.31a1.21,1.21,0,0,0,.86-1.78,2.05,2.05,0,0,0-2.07-.86l-.69,1a1.57,1.57,0,0,0-2.4,1.75.81.81,0,0,0-1.2.24,2.4,2.4,0,0,0-.23,1.36,1.34,1.34,0,0,0-2.08,1.11,4.31,4.31,0,0,0-2.28-.47,1.55,1.55,0,0,0-2-2.2,1.53,1.53,0,0,0-2-1.24c-.25-.92-1.46-1.6-2.19-1s-.35,1.84.11,2.71l1.52,2.83-4.94-2.65a.87.87,0,0,0-.49-.14c-.24,0-.41.24-.62.35a5.28,5.28,0,0,1-1,.17c-.87.27-.86,1.6-.26,2.29a22.21,22.21,0,0,0,2.19,1.63l-2.2.41a2.23,2.23,0,0,0-2.89-1.51c-.3-.81-1.38-.92-2.25-.88a3.15,3.15,0,0,0-2.17.64,2.15,2.15,0,0,0,0,2.72,6.25,6.25,0,0,0,2.39,1.7c-.15.65-1,.85-1.66.76a4.12,4.12,0,0,0-2-.13c-.86.33-1.22,1.43-2.08,1.74a4,4,0,0,0-.78.26,1.59,1.59,0,0,0-.53,1c-.11.48-.21.95-.32,1.43a1.72,1.72,0,0,0-.06.71c.16.78,1.24,1,2,.65a9.62,9.62,0,0,1,2.14-1,5.93,5.93,0,0,0-2.69,2.07c-.58,1-.34,2.55.74,2.94s2.18-.56,3-1.41,1.95-1.75,3-1.26"
                            style="fill: rgb(38, 50, 56); transform-origin: 182.336px 153.938px;" id="el93hyge2edme"
                            class="animable"></path>
                        <path
                            d="M206.06,168a1.41,1.41,0,0,1,2.13,1.23,2.95,2.95,0,0,1,1.1,5.08c-.65.54-1.94.56-2.07-.27a2.3,2.3,0,0,1-1.63,1.4,2.21,2.21,0,0,1-.89,3.14,2.36,2.36,0,0,1-.41,3.91A1.81,1.81,0,1,1,201,184a3.83,3.83,0,0,1-1.2,1.8,1.33,1.33,0,0,1-1.91-.32,2.49,2.49,0,0,1-3.54,1.49,1.6,1.6,0,0,1-3.15.55l-4.14.32a14.87,14.87,0,0,1-2.75,0A7.39,7.39,0,0,1,181,186.7a2.52,2.52,0,0,0-1-.5,2.62,2.62,0,0,0-1.24.31,6.71,6.71,0,0,1-6.48-1,3.5,3.5,0,0,0-.9-.59,3,3,0,0,0-1.23-.07,12.48,12.48,0,0,1-3-.17,3.21,3.21,0,0,1-2.23-1.21c-.47-.74-.1-2,.77-2a1.88,1.88,0,0,0-.6-1.53,1.12,1.12,0,0,0-1.53.07.82.82,0,0,0,.48,1.29,1.68,1.68,0,0,1-2.53-1.19,2.26,2.26,0,0,1,2.07-2.28,5,5,0,0,1-.28-2.49,1.86,1.86,0,0,1-2.48.5,3.21,3.21,0,0,1-1.93,1.65,1.91,1.91,0,0,1-2.19-1,1.37,1.37,0,0,1,1.15-1.87,1.64,1.64,0,0,1,1.24-2.49,2.57,2.57,0,0,1,1.32-2.83,1.33,1.33,0,0,1-2-.57c-.46.88-1.76.79-2.65.36a1.79,1.79,0,0,1-1.27-1.84,2,2,0,0,1,.63-1.24,5,5,0,0,1,3-1,13.36,13.36,0,0,0,.92-4.23,2.56,2.56,0,0,1-2.77-1.84l6-3.72s13.86-2.14,14.36-2.14S206.14,168,206.14,168a1.66,1.66,0,0,0,2.48-.45,2.69,2.69,0,0,0-.24-2.75,8,8,0,0,0-2.12-2,3.94,3.94,0,0,0,2.61-.82,1.45,1.45,0,0,0,.39-1.6c-.33-.8-1.25-.75-1.85-1.2a3.54,3.54,0,0,1-.76-1.06"
                            style="fill: rgb(38, 50, 56); transform-origin: 182.406px 170.932px;" id="el1pfkkoqa4hp"
                            class="animable"></path>
                        <path
                            d="M167.34,164.89c.34-4.95,3.67-11,8.6-10.45l15.38,4a2.91,2.91,0,0,1,2.58,3l-1.58,33.23,3.58,1.78s-3.83,2.15-3.8,2.16-3.56,10.47-13.72,7.22c-2-.65-2.93-2.86-3.32-5.13H175c0-.27-3.36-2.84-3.36-3.1,0,.26,3.31-1.88,3.31-1.88v-.9c0-3,0-4.23,0-4.2s-6.32-1.1-7.57-9.36C166.7,177.12,167,170.39,167.34,164.89Z"
                            style="fill: rgb(183, 136, 118); transform-origin: 181.436px 180.431px;" id="elu9mrgunz6m9"
                            class="animable"></path>
                        <path
                            d="M169.06,170.42a1,1,0,0,0,1,1.07,1,1,0,0,0,1.1-1,1.06,1.06,0,0,0-1-1.07A1,1,0,0,0,169.06,170.42Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 170.109px 170.455px;" id="el4kizho0046l"
                            class="animable"></path>
                        <path
                            d="M168.78,168.4c.13.14.93-.45,2.07-.44s2,.59,2.1.45-.08-.31-.44-.58a2.9,2.9,0,0,0-1.67-.53,2.87,2.87,0,0,0-1.66.52C168.83,168.09,168.71,168.34,168.78,168.4Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 170.869px 167.866px;" id="el5fs0c6h70m5"
                            class="animable"></path>
                        <path
                            d="M180,170.38a1.06,1.06,0,0,0,1,1.08,1,1,0,0,0,1.1-1,1.07,1.07,0,0,0-1-1.08A1,1,0,0,0,180,170.38Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 181.05px 170.42px;" id="elc8zqoblrosu"
                            class="animable"></path>
                        <path
                            d="M180,168.69c.13.14.94-.45,2.08-.44s2,.59,2.09.45-.07-.31-.43-.58a2.89,2.89,0,0,0-1.68-.53,2.83,2.83,0,0,0-1.65.52C180,168.38,179.91,168.63,180,168.69Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 182.081px 168.156px;" id="elr2lnqosc2y"
                            class="animable"></path>
                        <path
                            d="M175.78,177.11a8,8,0,0,0-1.85-.35c-.29,0-.56-.09-.61-.29a1.49,1.49,0,0,1,.2-.86c.28-.7.57-1.44.87-2.21a38.86,38.86,0,0,0,2-5.78,38,38,0,0,0-2.44,5.61q-.44,1.17-.84,2.22a1.68,1.68,0,0,0-.15,1.14.69.69,0,0,0,.47.43,2,2,0,0,0,.49.08A7,7,0,0,0,175.78,177.11Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 174.655px 172.394px;" id="el53fs2s9d1oj"
                            class="animable"></path>
                        <path d="M174.9,190.59A21.06,21.06,0,0,0,186,187.71s-2.72,5.66-11,4.83Z"
                              style="fill: rgb(153, 80, 55); transform-origin: 180.45px 190.167px;" id="el8bufo0ol52p"
                              class="animable"></path>
                        <path
                            d="M175.65,179.68a2.89,2.89,0,0,1,2.36-1.26,1.75,1.75,0,0,1,1.47,2.73,1.79,1.79,0,0,1-1.89.69,4.19,4.19,0,0,1-1.7-1.07,1.39,1.39,0,0,1-.36-.44.59.59,0,0,1,.05-.59"
                            style="fill: rgb(153, 80, 55); transform-origin: 177.627px 180.157px;" id="eljyeq8f0zur"
                            class="animable"></path>
                        <path
                            d="M179.13,177.92c-.19,0-.2,1.23-1.26,2.1s-2.38.72-2.39.89.29.25.84.27a3.11,3.11,0,0,0,2-.68,2.72,2.72,0,0,0,1-1.76C179.35,178.22,179.21,177.91,179.13,177.92Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 177.402px 179.55px;" id="elm4bfu1csfo"
                            class="animable"></path>
                        <path
                            d="M179.47,166.06c.11.31,1.25.17,2.59.34s2.41.54,2.59.27-.11-.43-.54-.73a4.44,4.44,0,0,0-1.92-.69,4.26,4.26,0,0,0-2,.23C179.67,165.67,179.43,165.91,179.47,166.06Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 182.085px 165.991px;" id="elhpsmron7z2h"
                            class="animable"></path>
                        <path
                            d="M169.22,165.11c.2.26,1,0,1.93,0s1.74.18,1.92-.09,0-.39-.39-.63a2.65,2.65,0,0,0-1.56-.44,2.7,2.7,0,0,0-1.54.51C169.24,164.71,169.13,165,169.22,165.11Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 171.165px 164.587px;" id="el0a6t2jrlei2k"
                            class="animable"></path>
                        <path
                            d="M193.93,169.87a1.38,1.38,0,0,1-.39,1.58,1,1,0,0,1-1.35-.37c-.36.48-1.19,0-1.08-.64-.44.25-1-.35-.89-.91-.52.2-.82-.64-1.1-1.2a8.1,8.1,0,0,0-.53-.85,5.83,5.83,0,0,1-.86-3.12,5.73,5.73,0,0,1-1-3.05l-.25-2.05-.39-.48a1.11,1.11,0,0,1-.73,1.07,2.41,2.41,0,0,1-1.25,0l-1.23-.24-.76.23a3.17,3.17,0,0,1-.22,2,2,2,0,0,1-.71,1.12.58.58,0,0,1-.81-.62.65.65,0,0,1-1-.15,2.15,2.15,0,0,1-.28-1.27,5.45,5.45,0,0,1,1-3l-2.12,2a1.07,1.07,0,0,1-.52.32.58.58,0,0,1-.6.63,1.49,1.49,0,0,1-.8-.54c-.52-.54-1.07-1.47-.61-2.08a.47.47,0,0,1-.21-.68l-2.41,1.85c.24-.14.51.24.45.55a1.27,1.27,0,0,1-.5.72,1.89,1.89,0,0,1,.29,1.15c.43-.4,1.09.33.95.95a1.37,1.37,0,0,1-1.28,1,1,1,0,0,1-1.08-.7c-.53.11-1-.62-.86-1.22-.38.26-.72-.43-.75-1a7.46,7.46,0,0,1,.42-2.82c0,.14-.14.25-.24.18a.21.21,0,0,1,0-.32l-1.35,3.33a7.85,7.85,0,0,0-.74,2.78c0,.39,0,.94-.38,1a.48.48,0,0,1-.26-.07,5,5,0,0,1-2.2-2.53,3.94,3.94,0,0,1-.34-1.17,16.86,16.86,0,0,1,.33-2.53,10.55,10.55,0,0,1,.07-1.13,3.57,3.57,0,0,1,.87-1.48c1.3-1.51,2.68-3.08,4.42-3.7,1.07-.37,2.21-.36,3.28-.73a18.45,18.45,0,0,0,1.92-.89,16.41,16.41,0,0,1,8.39-1.18,13.48,13.48,0,0,1,4.65,1.08,16.15,16.15,0,0,1,4.37,3.34,25,25,0,0,1,5.15,6.89,12.11,12.11,0,0,1,1.24,6.81c-.34,2.34-1.78,4.53-3.74,5l-.77-.88"
                            style="fill: rgb(38, 50, 56); transform-origin: 182.341px 161.11px;" id="elvhpq3vr6yz"
                            class="animable"></path>
                        <path
                            d="M191.68,171.45c.11,0,4.59-1.48,4.55,3.13s-4.66,3.62-4.66,3.49S191.68,171.45,191.68,171.45Z"
                            style="fill: rgb(183, 136, 118); transform-origin: 193.9px 174.736px;" id="els1k74hshyb"
                            class="animable"></path>
                        <path
                            d="M193,176.33s.08.06.21.12a.76.76,0,0,0,.6,0,2,2,0,0,0,.94-1.77,2.65,2.65,0,0,0-.22-1.15.89.89,0,0,0-.59-.62.41.41,0,0,0-.48.21c-.06.13,0,.22-.06.23s-.1-.08-.06-.27a.54.54,0,0,1,.19-.29.59.59,0,0,1,.44-.11,1.13,1.13,0,0,1,.83.72,2.72,2.72,0,0,1,.27,1.29,2.09,2.09,0,0,1-1.19,2,.86.86,0,0,1-.73-.13C193,176.45,193,176.34,193,176.33Z"
                            style="fill: rgb(170, 101, 80); transform-origin: 194.037px 174.697px;" id="eldp1veiue1o"
                            class="animable"></path>
                        <path
                            d="M176.61,170a8.41,8.41,0,0,1,.21-1.32A5.4,5.4,0,0,1,183.9,165a5.11,5.11,0,0,1,1.35.74,5,5,0,0,1,1.13,1.13,5.31,5.31,0,0,1,0,6.34,4.71,4.71,0,0,1-1.13,1.14,4.8,4.8,0,0,1-1.35.73,5.41,5.41,0,0,1-2.82.24,5.24,5.24,0,0,1-2.27-1,5.38,5.38,0,0,1-2-2.95,8.24,8.24,0,0,1-.21-1.33,1.88,1.88,0,0,0,0,.35,2.27,2.27,0,0,0,0,.42,3.72,3.72,0,0,0,.1.58,5.51,5.51,0,0,0,4.3,4.1,5.56,5.56,0,0,0,2.92-.23,5,5,0,0,0,1.41-.75,5.28,5.28,0,0,0,1.18-1.18,5.54,5.54,0,0,0,1.08-3.29,5.63,5.63,0,0,0-1.08-3.29,5.71,5.71,0,0,0-2.59-1.93,5.5,5.5,0,0,0-5.24.82,5.43,5.43,0,0,0-2,3.06,3.43,3.43,0,0,0-.1.57,2.43,2.43,0,0,0,0,.42A1.88,1.88,0,0,0,176.61,170Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 182.08px 170.039px;" id="el27ed6xcc0di"
                            class="animable"></path>
                        <path
                            d="M163.61,170a8.41,8.41,0,0,1,.21-1.32A5.4,5.4,0,0,1,170.9,165a5.11,5.11,0,0,1,1.35.74,5,5,0,0,1,1.13,1.13,5.31,5.31,0,0,1,0,6.34,4.71,4.71,0,0,1-1.13,1.14,4.8,4.8,0,0,1-1.35.73,5.41,5.41,0,0,1-2.82.24,5.24,5.24,0,0,1-2.27-1,5.38,5.38,0,0,1-2-2.95,8.24,8.24,0,0,1-.21-1.33,1.88,1.88,0,0,0,0,.35,2.27,2.27,0,0,0,0,.42,3.72,3.72,0,0,0,.1.58,5.51,5.51,0,0,0,4.3,4.1,5.56,5.56,0,0,0,2.92-.23,5,5,0,0,0,1.41-.75,5.28,5.28,0,0,0,1.18-1.18,5.54,5.54,0,0,0,1.08-3.29,5.63,5.63,0,0,0-1.08-3.29,5.71,5.71,0,0,0-2.59-1.93,5.5,5.5,0,0,0-5.24.82,5.43,5.43,0,0,0-2,3.06,3.43,3.43,0,0,0-.1.57,2.43,2.43,0,0,0,0,.42A1.88,1.88,0,0,0,163.61,170Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 169.08px 170.039px;" id="elt9qntxxl268"
                            class="animable"></path>
                        <path
                            d="M174.29,168.76c0,.06.55-.16,1.24-.18s1.22.15,1.24.1a1.85,1.85,0,0,0-1.25-.3A1.9,1.9,0,0,0,174.29,168.76Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 175.53px 168.569px;" id="elfbsci4liyx"
                            class="animable"></path>
                        <path
                            d="M187.57,170.58a8.7,8.7,0,0,0,2.3.59,9.41,9.41,0,0,0,2.37.17c0-.06-1.05-.17-2.34-.38S187.59,170.53,187.57,170.58Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 189.905px 170.964px;" id="el0qvy1oyds0w"
                            class="animable"></path>
                        <path
                            d="M177.18,169.18a3,3,0,0,0,.06,1,6.39,6.39,0,0,0,.9,2.32,5.63,5.63,0,0,0,1.74,1.79,1.24,1.24,0,0,0,1,.22,2.35,2.35,0,0,1-.93-.34,6.26,6.26,0,0,1-1.64-1.78,7.33,7.33,0,0,1-.94-2.24C177.24,169.57,177.22,169.18,177.18,169.18Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 179.021px 171.858px;" id="elf5zwp9m9ygv"
                            class="animable"></path>
                        <path
                            d="M165.29,172.69a7.07,7.07,0,0,0-.44-.86,4.1,4.1,0,0,1-.36-1,3.21,3.21,0,0,1,0-1.24,6.46,6.46,0,0,1,.65-2.2c.28-.52.56-.77.53-.79s-.08,0-.21.16a2.69,2.69,0,0,0-.45.56,5.89,5.89,0,0,0-.73,2.24,3.41,3.41,0,0,0,0,1.32,3.9,3.9,0,0,0,.42,1A3.34,3.34,0,0,0,165.29,172.69Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 164.944px 169.642px;" id="elfxkvfxuwga7"
                            class="animable"></path>
                        <path
                            d="M194.93,177.91s.12.06.3.19a1.58,1.58,0,0,1,.53.77,1.33,1.33,0,0,1-.28,1.29,1.56,1.56,0,0,1-1.53.45,1.66,1.66,0,0,1-.84-2.52,2.06,2.06,0,0,1,.71-.65c.2-.11.32-.14.32-.16a.8.8,0,0,0-.36.09,1.9,1.9,0,0,0-.79.63,1.79,1.79,0,0,0-.32,1.46,1.82,1.82,0,0,0,1.22,1.35,1.73,1.73,0,0,0,1.73-.52,1.44,1.44,0,0,0,.35-.75,1.54,1.54,0,0,0-.69-1.5A.62.62,0,0,0,194.93,177.91Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 194.306px 179.073px;" id="elu1z5x1sfzeq"
                            class="animable"></path>
                        <path
                            d="M175.82,156.83a1.15,1.15,0,0,1-.31-.6.79.79,0,0,1,.2-.69.87.87,0,0,1,.88-.23l.2.07-.09-.19a.9.9,0,0,1,.25-1,.88.88,0,0,1,1.14,0l.15-.14a.45.45,0,0,1-.06-.12.51.51,0,0,1,.07-.43.58.58,0,0,1,.38-.24,1,1,0,0,1,.46,0,1.25,1.25,0,0,0,.52.12c.22,0,.31-.21.43-.28a1.86,1.86,0,0,1,.35-.22,1.89,1.89,0,0,1,.74-.17,2,2,0,0,1,1.08.26c.23.13.33.24.35.23a.94.94,0,0,0-.31-.3,2,2,0,0,0-1.12-.34,2,2,0,0,0-1.21.39c-.13.1-.23.23-.34.24a1.63,1.63,0,0,1-.44-.12,1.13,1.13,0,0,0-.55,0,.8.8,0,0,0-.51.32.71.71,0,0,0-.1.62.52.52,0,0,0,.1.18l.15-.14a1.06,1.06,0,0,0-1.69,1.2l.11-.12a1,1,0,0,0-1,.3.91.91,0,0,0-.21.81.89.89,0,0,0,.26.47A.35.35,0,0,0,175.82,156.83Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 178.989px 154.695px;" id="elc04b8at3woi"
                            class="animable"></path>
                        <path
                            d="M170.67,158.16a1.38,1.38,0,0,1-.39-.58,1,1,0,0,1,0-.78,1.13,1.13,0,0,1,.81-.59h.15l-.1-.12a1.26,1.26,0,0,1-.35-1.12.69.69,0,0,1,.41-.47.54.54,0,0,1,.61.08l.59.63-.43-.75a1.08,1.08,0,0,1-.06-.9,1,1,0,0,1,.72-.61,1.09,1.09,0,0,1,.69.07l.24.12-.1-.25a.67.67,0,0,1,.58-.81,1.7,1.7,0,0,1,1.09.27l.2.11-.07-.22a.79.79,0,0,1,.25-.74,1.38,1.38,0,0,1,.71-.31,3.57,3.57,0,0,1,1.32,0,5.54,5.54,0,0,1,1.11.4s-.08-.08-.26-.18a3.42,3.42,0,0,0-.82-.33,3.57,3.57,0,0,0-1.38-.07,1.53,1.53,0,0,0-.79.34.94.94,0,0,0-.32.91l.14-.11a2,2,0,0,0-1.22-.3,1,1,0,0,0-.6.36.73.73,0,0,0-.13.73l.14-.13a1.24,1.24,0,0,0-1.69.65,1.28,1.28,0,0,0,.08,1.07l.16-.12a.76.76,0,0,0-.83-.12.89.89,0,0,0-.52.6,1.43,1.43,0,0,0,.42,1.28l0-.13a1.22,1.22,0,0,0-.9.69,1.12,1.12,0,0,0,0,.86,1.06,1.06,0,0,0,.32.45C170.6,158.14,170.67,158.17,170.67,158.16Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 174.347px 154.567px;" id="elvrqap63416"
                            class="animable"></path>
                        <path
                            d="M159.57,159.12a.81.81,0,0,1,.27-.56,1,1,0,0,1,.69-.25,3.06,3.06,0,0,1,1,.23l.12,0,0-.12a.89.89,0,0,1,.73-.87,2.61,2.61,0,0,1,1.46.24l.65.24-.55-.41a.73.73,0,0,1,0-1.06,1.67,1.67,0,0,1,1.29-.3h.06l.41,0-.34-.23a.78.78,0,0,1,.09-1.24,1.18,1.18,0,0,1,1.32.13l.43.33-.29-.46a1.77,1.77,0,0,1,0-1.81,1.65,1.65,0,0,1,1.22-.78,1.92,1.92,0,0,1,1,.12c.22.09.32.17.33.16a.36.36,0,0,0-.07-.07,1,1,0,0,0-.23-.14,1.83,1.83,0,0,0-1-.19,1.8,1.8,0,0,0-1.35.81,2,2,0,0,0,0,2l.14-.12a1.37,1.37,0,0,0-1.55-.15,1,1,0,0,0-.45.75.9.9,0,0,0,.35.84l.07-.19h-.06a1.84,1.84,0,0,0-1.45.37,1,1,0,0,0-.31.68.75.75,0,0,0,.28.67l.09-.17a2.81,2.81,0,0,0-1.58-.22,1.06,1.06,0,0,0-.83,1.06l.1-.08a3.1,3.1,0,0,0-1-.21,1.11,1.11,0,0,0-.75.31.67.67,0,0,0-.22.45A.42.42,0,0,0,159.57,159.12Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 164.515px 155.596px;" id="elwgu7sftlw2k"
                            class="animable"></path>
                        <path
                            d="M165.39,148.56s.08.06.27.1a3.72,3.72,0,0,0,.81,0,2.47,2.47,0,0,1,1.16.17.75.75,0,0,1,.4.51.53.53,0,0,1-.21.61l.14.1c0-.27.37-.44.67-.62a3.45,3.45,0,0,1,1-.41,1.21,1.21,0,0,1,1,.15.81.81,0,0,1,.43.76l0,.26.19-.17a2.3,2.3,0,0,1,1.35-.56,2.61,2.61,0,0,1,1.17.17,3.59,3.59,0,0,1,.89.57,1,1,0,0,0-.18-.23,2.19,2.19,0,0,0-.67-.45,2.59,2.59,0,0,0-1.22-.22,2.47,2.47,0,0,0-1.47.57l.16.09a1,1,0,0,0-.51-1,1.46,1.46,0,0,0-1.14-.19,3.7,3.7,0,0,0-1,.45,3.12,3.12,0,0,0-.45.29.77.77,0,0,0-.31.47l0,.19.17-.09a.73.73,0,0,0,.3-.83.89.89,0,0,0-.51-.6,2.35,2.35,0,0,0-1.24-.15,4.25,4.25,0,0,1-.79,0Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 170.025px 149.337px;" id="el9ehp8jr9z1j"
                            class="animable"></path>
                        <path
                            d="M175.68,144.57a2.66,2.66,0,0,1,.55.08,1.22,1.22,0,0,1,.52.33,1.18,1.18,0,0,1,.33.69v.12l.1,0a.68.68,0,0,1,.76.43,2,2,0,0,1,0,1.14l-.06.41.25-.33,0-.06a.88.88,0,0,1,.72-.29,1,1,0,0,1,.67.29,1.56,1.56,0,0,1,.42,1.23,3.06,3.06,0,0,1-.23.9,1.48,1.48,0,0,0-.13.32s.09-.09.2-.29a2.44,2.44,0,0,0,.31-.92,1.69,1.69,0,0,0-.43-1.37,1.15,1.15,0,0,0-1.69,0l-.05.07.19.07a2.17,2.17,0,0,0-.07-1.26.86.86,0,0,0-1-.51l.11.08a1.26,1.26,0,0,0-.41-.79,1.38,1.38,0,0,0-.59-.32,1.13,1.13,0,0,0-.43,0C175.73,144.54,175.68,144.56,175.68,144.57Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 177.893px 147.194px;" id="elrpqjhvuji2"
                            class="animable"></path>
                        <path
                            d="M184.76,150.88a.57.57,0,0,0,.27-.07,1.54,1.54,0,0,0,.63-.44,1.8,1.8,0,0,0,.47-1,.93.93,0,0,1,.14-.57c.12-.14.37-.24.53-.48a1,1,0,0,0-.27-1.4V147a3.47,3.47,0,0,0,.89-1.23,1.44,1.44,0,0,0,.14-.57s-.08.2-.25.52a3.8,3.8,0,0,1-.9,1.14l-.1.08.1.07a.85.85,0,0,1,.2,1.13c-.1.18-.33.26-.51.46a1.13,1.13,0,0,0-.17.68,1.72,1.72,0,0,1-.39,1A2.91,2.91,0,0,1,184.76,150.88Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 186.16px 148.04px;" id="elphcgr16ho6"
                            class="animable"></path>
                        <path
                            d="M187.43,152.7s.06,0,.18,0a2.75,2.75,0,0,0,2-.92h-.13a1.81,1.81,0,0,0,1.22.64,1.76,1.76,0,0,0,.78-.09,1.14,1.14,0,0,0,.66-.52,1.5,1.5,0,0,0,.08-.3.5.5,0,0,1,.13-.19,1.49,1.49,0,0,1,.48-.21,1.81,1.81,0,0,0,.54-.22.57.57,0,0,0,.29-.51l-.13.09a1.86,1.86,0,0,0,1.27,0,2.08,2.08,0,0,0,.83-.52,1.65,1.65,0,0,0,.34-.54,1.16,1.16,0,0,0,.06-.22,2.74,2.74,0,0,1-.48.68,2,2,0,0,1-.8.45,1.76,1.76,0,0,1-1.15,0l-.14-.06v.15a.4.4,0,0,1-.21.34,1.45,1.45,0,0,1-.48.18,1.56,1.56,0,0,0-.56.25.72.72,0,0,0-.2.29,2.83,2.83,0,0,1-.07.28,1,1,0,0,1-.54.41,1.82,1.82,0,0,1-.69.09,1.65,1.65,0,0,1-1.1-.56l-.07-.08-.07.08a2.88,2.88,0,0,1-1.42.89C187.68,152.69,187.43,152.68,187.43,152.7Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 191.73px 150.945px;" id="ellrb9knz8tia"
                            class="animable"></path>
                        <path
                            d="M203.85,159.09s0,0,0-.07,0-.12,0-.21a2.07,2.07,0,0,0-.1-.83,5.1,5.1,0,0,0-.56-1.17,4.17,4.17,0,0,0-.46-.66,1.5,1.5,0,0,0-.36-.28.54.54,0,0,0-.51,0l.13.08a1.38,1.38,0,0,0-2.26-1.2l.17.08a.94.94,0,0,0-.39-.78.9.9,0,0,0-.88-.11,1,1,0,0,0-.41.31l.19.07a.61.61,0,0,0-.22-.49.84.84,0,0,0-.47-.19,1.83,1.83,0,0,0-.89.22l.12,0a1.42,1.42,0,0,0-.9-.62,2.07,2.07,0,0,0-1,0,5.06,5.06,0,0,0-1.56.78l.11.09a.36.36,0,0,0,0-.36.67.67,0,0,0-.25-.2,1.11,1.11,0,0,0-.56-.08,3,3,0,0,0-.83.25,2.37,2.37,0,0,0-.46.28,1.22,1.22,0,0,0-.15.12s.22-.15.65-.32a3,3,0,0,1,.81-.21.84.84,0,0,1,.48.09c.16.07.29.22.22.37l-.12.23.23-.14a5.43,5.43,0,0,1,1.53-.73,1.91,1.91,0,0,1,.92,0,1.29,1.29,0,0,1,.78.55l0,.07.08,0a1.76,1.76,0,0,1,.79-.21c.25,0,.52.23.5.47l0,.36.22-.3a.72.72,0,0,1,.31-.23.68.68,0,0,1,.69.08.78.78,0,0,1,.31.6v.23l.17-.14a1.19,1.19,0,0,1,2,1v.18L202,156c.23-.13.5.05.67.23a4.39,4.39,0,0,1,.46.63,5,5,0,0,1,.58,1.12A2.54,2.54,0,0,1,203.85,159.09Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 197.606px 156.134px;" id="elopg7fnh300c"
                            class="animable"></path>
                        <path
                            d="M202.69,165.19s0,0,.11-.14a3,3,0,0,0,.24-.41,1.45,1.45,0,0,0,.16-.77,1.08,1.08,0,0,0-.15-.47.79.79,0,0,0-.46-.35l0,.11a1,1,0,0,0,0-1,1,1,0,0,0-1.07-.46l.09.15a.78.78,0,0,0,0-.93,1.16,1.16,0,0,0-.89-.41c-.17,0-.33,0-.46,0a.4.4,0,0,1-.29-.25,1.68,1.68,0,0,0-.27-.45.89.89,0,0,0-.49-.27,5.22,5.22,0,0,0-1.11,0,1.16,1.16,0,0,1-.89-.26,2.77,2.77,0,0,1-.29-.4,1.1,1.1,0,0,0-.42-.32,1.12,1.12,0,0,0-1,.05l.13.13a.82.82,0,0,0-.12-1,1.14,1.14,0,0,0-.78-.38,3.69,3.69,0,0,0-1.36.17,5.21,5.21,0,0,0-.81.32c-.18.1-.27.16-.26.17a9,9,0,0,1,1.1-.39,3.82,3.82,0,0,1,1.31-.12,1,1,0,0,1,.67.34.65.65,0,0,1,.1.75l-.23.33.35-.2a.9.9,0,0,1,.8,0,1,1,0,0,1,.34.26,4.23,4.23,0,0,0,.3.42,1.1,1.1,0,0,0,.49.28,2.62,2.62,0,0,0,.55.05,5.32,5.32,0,0,1,1.06,0,.74.74,0,0,1,.39.21,1.93,1.93,0,0,1,.24.41.59.59,0,0,0,.43.35,4.16,4.16,0,0,0,.5,0,1,1,0,0,1,.74.33.61.61,0,0,1,0,.69l-.17.22.26-.07a.83.83,0,0,1,.89.36.87.87,0,0,1,0,.87l0,.09.1,0a.79.79,0,0,1,.53.7,1.51,1.51,0,0,1-.12.71C202.8,165,202.67,165.18,202.69,165.19Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 197.751px 161.271px;" id="elhwlz3q2wfsp"
                            class="animable"></path>
                        <path
                            d="M202.34,177.85s.08,0,.2-.06a1.33,1.33,0,0,0,.48-.38,1.48,1.48,0,0,0,.35-.88,1.58,1.58,0,0,0-.43-1.16v.11a2.8,2.8,0,0,0,.54-1,1.18,1.18,0,0,0-.05-.67.85.85,0,0,0-.49-.51l0,.18a1.21,1.21,0,0,0,.52-1.09,1.28,1.28,0,0,0-.22-.68,1.16,1.16,0,0,0-.53-.43.39.39,0,0,1-.3-.38,1.64,1.64,0,0,0-.14-.61,2.16,2.16,0,0,0-.78-.83l-.78-.56a3.47,3.47,0,0,0-1.27-.59,1.55,1.55,0,0,0-.38,0c-.09,0-.14,0-.14,0a4.81,4.81,0,0,1,.5.09,3.58,3.58,0,0,1,1.2.63l.77.58a1.93,1.93,0,0,1,.7.77,1.39,1.39,0,0,1,.12.55.59.59,0,0,0,.12.34.72.72,0,0,0,.29.21,1.08,1.08,0,0,1,.21,1.84l-.18.11.2.07a.82.82,0,0,1,.42.95,3,3,0,0,1-.49,1l0,.06,0,.05a1.51,1.51,0,0,1,.41,1,1.44,1.44,0,0,1-.29.82A2,2,0,0,1,202.34,177.85Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 201.213px 173.074px;" id="elawgs028q9nh"
                            class="animable"></path>
                        <path
                            d="M195.83,172.44a.68.68,0,0,0,.28-.06,2.7,2.7,0,0,0,.73-.38,2.8,2.8,0,0,0,.83-1,1.07,1.07,0,0,0,.14-.8.55.55,0,0,0-.32-.36.44.44,0,0,0-.5.09l.15.09a1.37,1.37,0,0,0,.15-.8.72.72,0,0,0-.25-.39.56.56,0,0,0-.48-.07.85.85,0,0,1-.36.05c-.07,0-.09-.12-.08-.27a1.24,1.24,0,0,0-.35-.88,1.38,1.38,0,0,0-1.42-.41l.13.12a1.17,1.17,0,0,0-.21-1.14.72.72,0,0,0-.57-.18.53.53,0,0,0-.46.34l.18,0a2.77,2.77,0,0,0-.36-1.51,2.8,2.8,0,0,0-.78-.92,2.84,2.84,0,0,0-.67-.38.88.88,0,0,0-.26-.06,4.3,4.3,0,0,1,.87.53,3,3,0,0,1,.71.9,2.72,2.72,0,0,1,.31,1.43l-.05.76.22-.72c.08-.25.52-.29.72-.08a1,1,0,0,1,.16.95l0,.19.18-.07a1.17,1.17,0,0,1,1.19.36,1,1,0,0,1,.3.73.74.74,0,0,0,0,.25.31.31,0,0,0,.2.22.86.86,0,0,0,.47,0,.38.38,0,0,1,.32,0,.49.49,0,0,1,.18.28,1.23,1.23,0,0,1-.13.69l-.19.5.35-.41c.14-.16.48,0,.52.2a1,1,0,0,1-.11.68,2.81,2.81,0,0,1-.76.95A4.27,4.27,0,0,1,195.83,172.44Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 194.592px 167.98px;" id="el7faxqais5e6"
                            class="animable"></path>
                        <path
                            d="M185.4,159.61a1.7,1.7,0,0,0,.62-.25,1.73,1.73,0,0,0,.55-.49,1.1,1.1,0,0,0,.21-.9.85.85,0,0,0-.09-.22l0,.15a1,1,0,0,0,.51-.69,1,1,0,0,0-.13-.68c-.23-.33-.5-.36-.5-.34s.21.11.38.42a.85.85,0,0,1,.07.56.82.82,0,0,1-.43.54l-.09,0,0,.1a.44.44,0,0,1,.06.16,1,1,0,0,1-.16.75,2.09,2.09,0,0,1-.47.47C185.61,159.46,185.38,159.58,185.4,159.61Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 186.306px 157.898px;" id="eljs220y0c7si"
                            class="animable"></path>
                        <path
                            d="M180.56,157.37a1.25,1.25,0,0,1-.15-.76.87.87,0,0,1,.49-.66.92.92,0,0,1,1,.16l.14.12,0-.18a1.59,1.59,0,0,1,.24-.61.79.79,0,0,1,.52-.37c.33,0,.7.26.61.54l.2,0a1.56,1.56,0,0,1,.57-1,1.46,1.46,0,0,1,.89-.34,2.47,2.47,0,0,1,.87.15s-.06-.06-.2-.13a1.58,1.58,0,0,0-.67-.15,1.66,1.66,0,0,0-1,.33,1.76,1.76,0,0,0-.66,1.15l.19,0a.57.57,0,0,0-.2-.6.87.87,0,0,0-.63-.2,1,1,0,0,0-.67.47,1.86,1.86,0,0,0-.25.69L182,156a1.1,1.1,0,0,0-1.2-.16,1,1,0,0,0-.54.79,1,1,0,0,0,.12.61A.51.51,0,0,0,180.56,157.37Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 183.096px 155.755px;" id="elj7kjbr1p04l"
                            class="animable"></path>
                        <path d="M173.3,413.41l.34,24.95-31,.58c.12-3,16.07-9.22,16.07-9.22l-.87-16Z"
                              style="fill: rgb(126, 87, 194); transform-origin: 158.14px 426.175px;" id="elophbppeknn"
                              class="animable"></path>
                        <g id="elsf0651z0ri">
                            <g style="opacity: 0.6; transform-origin: 167.944px 429.359px;" class="animable">
                                <path
                                    d="M168.24,428.19a1.27,1.27,0,0,1,.91,1.43,1.23,1.23,0,0,1-1.41.91,1.33,1.33,0,0,1-1-1.52,1.25,1.25,0,0,1,1.57-.78"
                                    style="fill: rgb(38, 50, 56); transform-origin: 167.944px 429.359px;"
                                    id="ela6qopmov0mh" class="animable"></path>
                            </g>
                        </g>
                        <path d="M173.64,438.26l0-2.52-29.83,1.69s-1.37.64-1.19,1.61Z"
                              style="fill: rgb(38, 50, 56); transform-origin: 158.122px 437.39px;" id="elda9vogd545b"
                              class="animable"></path>
                        <path
                            d="M158.16,429.57c0,.15.77.2,1.53.68s1.16,1.1,1.3,1-.11-.94-1-1.49S158.13,429.43,158.16,429.57Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 159.593px 430.333px;" id="elmxj28ouztd8"
                            class="animable"></path>
                        <path
                            d="M154.93,431c0,.15.63.4,1.16,1s.69,1.31.84,1.3.23-.87-.44-1.65S154.93,430.83,154.93,431Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 155.982px 432.109px;" id="ely5f9wa3533"
                            class="animable"></path>
                        <path
                            d="M153.16,434.91c.14,0,.33-.74-.07-1.56s-1.12-1.14-1.18-1,.38.56.7,1.24S153,434.89,153.16,434.91Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 152.617px 433.614px;" id="eldfdos5ljyhd"
                            class="animable"></path>
                        <path
                            d="M158.37,425.9c.07.14.76-.08,1.61,0s1.54.3,1.61.17-.57-.66-1.58-.7S158.29,425.79,158.37,425.9Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 159.98px 425.739px;" id="elt0ehidw3t6s"
                            class="animable"></path>
                        <path
                            d="M159,422.21a3,3,0,0,0,1.55,0,6.91,6.91,0,0,0,1.62-.53,7.75,7.75,0,0,0,.88-.49,1.91,1.91,0,0,0,.47-.38.65.65,0,0,0,.05-.8.81.81,0,0,0-.67-.34,2.36,2.36,0,0,0-.58.09,6.37,6.37,0,0,0-1,.35,6.06,6.06,0,0,0-1.42,1c-.7.68-.94,1.25-.89,1.28s.41-.43,1.14-1a5.7,5.7,0,0,1,1.37-.81,4.64,4.64,0,0,1,.89-.29c.32-.1.6-.1.69,0s0,.08,0,.18a1.75,1.75,0,0,1-.34.27c-.27.18-.55.34-.81.48a8.31,8.31,0,0,1-1.5.61A9,9,0,0,0,159,422.21Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 161.342px 421.031px;" id="elyu8z1vnvnvh"
                            class="animable"></path>
                        <path
                            d="M159.24,422.42a2.4,2.4,0,0,0,.38-1.51,4.93,4.93,0,0,0-.24-1.7,5.39,5.39,0,0,0-.41-.93,1.29,1.29,0,0,0-1-.77.71.71,0,0,0-.64.45,1.93,1.93,0,0,0-.15.57,3.34,3.34,0,0,0,0,1.05,3.64,3.64,0,0,0,.69,1.59c.62.79,1.26,1,1.27.91s-.48-.36-1-1.12a3.55,3.55,0,0,1-.52-1.46,3,3,0,0,1,0-.89c0-.34.16-.6.29-.57s.42.24.55.5a4.86,4.86,0,0,1,.4.83,5.84,5.84,0,0,1,.33,1.55C159.31,421.83,159.16,422.4,159.24,422.42Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 158.383px 419.965px;" id="el7kowesdllg"
                            class="animable"></path>
                        <path d="M197.2,413.78l-.23,25-31.05-.13c.2-3,16.28-8.85,16.28-8.85l-.5-16Z"
                              style="fill: rgb(38, 50, 56); transform-origin: 181.56px 426.28px;" id="elz3jolwvqlvs"
                              class="animable"></path>
                        <g id="elbc409qhe7ua">
                            <g style="opacity: 0.6; transform-origin: 191.508px 429.606px;" class="animable">
                                <path
                                    d="M191.81,428.44a1.28,1.28,0,0,1,.87,1.46,1.22,1.22,0,0,1-1.43.87,1.34,1.34,0,0,1-.91-1.54,1.26,1.26,0,0,1,1.58-.75"
                                    style="fill: rgb(69, 90, 100); transform-origin: 191.508px 429.606px;"
                                    id="eljza786sqenf" class="animable"></path>
                            </g>
                        </g>
                        <path d="M197,438.63l0-2.52-29.86,1s-1.38.61-1.22,1.58Z"
                              style="fill: rgb(69, 90, 100); transform-origin: 181.454px 437.4px;" id="els1ns2ifxnel"
                              class="animable"></path>
                        <path
                            d="M181.7,429.59c0,.15.76.22,1.51.71s1.14,1.13,1.27,1.07-.08-.93-1-1.51S181.67,429.45,181.7,429.59Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 183.107px 430.414px;" id="eli4uin609sxb"
                            class="animable"></path>
                        <path
                            d="M178.44,430.92c0,.15.62.41,1.13,1.05s.66,1.33.81,1.32.25-.86-.4-1.65S178.44,430.78,178.44,430.92Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 179.466px 432.076px;" id="elp9nyvi3uzui"
                            class="animable"></path>
                        <path
                            d="M176.57,434.81c.14,0,.35-.72,0-1.55s-1.09-1.17-1.16-1,.37.57.68,1.26S176.42,434.8,176.57,434.81Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 176.082px 433.514px;" id="elsut9v0g2pcr"
                            class="animable"></path>
                        <path
                            d="M182,425.93c.06.14.76-.07,1.62,0s1.52.33,1.6.2-.56-.67-1.57-.73S181.92,425.81,182,425.93Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 183.61px 425.78px;" id="elojh4rinw44h"
                            class="animable"></path>
                        <path
                            d="M182.74,422.25a3,3,0,0,0,1.56,0,6.86,6.86,0,0,0,1.63-.49,8.54,8.54,0,0,0,.89-.47,1.69,1.69,0,0,0,.47-.37.65.65,0,0,0,.08-.8.82.82,0,0,0-.67-.35,1.73,1.73,0,0,0-.58.08,5.22,5.22,0,0,0-2.4,1.26c-.73.66-1,1.23-.92,1.26s.42-.43,1.15-1a6,6,0,0,1,1.39-.78,5.92,5.92,0,0,1,.9-.27c.33-.09.6-.09.69.06s0,.08,0,.17a1.44,1.44,0,0,1-.34.27,8.72,8.72,0,0,1-.83.47,10,10,0,0,1-1.5.57A11.32,11.32,0,0,0,182.74,422.25Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 185.106px 421.07px;" id="elg3p76dv0k7a"
                            class="animable"></path>
                        <path
                            d="M182.94,422.47a2.51,2.51,0,0,0,.42-1.5,4.85,4.85,0,0,0-.21-1.7,4.53,4.53,0,0,0-.39-.95,1.28,1.28,0,0,0-1-.79.75.75,0,0,0-.65.43,2.35,2.35,0,0,0-.16.57,3.53,3.53,0,0,0,.65,2.66c.6.8,1.24,1,1.25.94s-.48-.37-.94-1.15a3.4,3.4,0,0,1-.48-1.46,3,3,0,0,1,0-.9c.05-.33.17-.6.3-.56s.41.25.54.51a5.19,5.19,0,0,1,.38.84A5.71,5.71,0,0,1,183,421C183,421.88,182.86,422.45,182.94,422.47Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 182.136px 420px;" id="el2ima0r7rrfe"
                            class="animable"></path>
                        <path d="M197.2,413.78l-.23,25-31.05-.13c.2-3,16.28-8.85,16.28-8.85l-.5-16Z"
                              style="fill: rgb(126, 87, 194); transform-origin: 181.56px 426.28px;" id="el57bn9rc1pjb"
                              class="animable"></path>
                        <path
                            d="M191.81,428.44a1.28,1.28,0,0,1,.87,1.46,1.22,1.22,0,0,1-1.43.87,1.34,1.34,0,0,1-.91-1.54,1.26,1.26,0,0,1,1.58-.75"
                            style="fill: rgb(38, 50, 56); transform-origin: 191.508px 429.606px;" id="elvmgw94l7ung"
                            class="animable"></path>
                        <path d="M197,438.63l0-2.52-29.86,1s-1.38.61-1.22,1.58Z"
                              style="fill: rgb(38, 50, 56); transform-origin: 181.454px 437.4px;" id="elhb3rogpgvx9"
                              class="animable"></path>
                        <path
                            d="M181.7,429.59c0,.15.76.22,1.51.71s1.14,1.13,1.27,1.07-.08-.93-1-1.51S181.67,429.45,181.7,429.59Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 183.107px 430.414px;" id="eleibrwbn4la6"
                            class="animable"></path>
                        <path
                            d="M178.44,430.92c0,.15.62.41,1.13,1.05s.66,1.33.81,1.32.25-.86-.4-1.65S178.44,430.78,178.44,430.92Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 179.466px 432.076px;" id="elgrdzo9et51"
                            class="animable"></path>
                        <path
                            d="M176.57,434.81c.14,0,.35-.72,0-1.55s-1.09-1.17-1.16-1,.37.57.68,1.26S176.42,434.8,176.57,434.81Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 176.082px 433.514px;" id="eli8hxqhsyl9"
                            class="animable"></path>
                        <path
                            d="M182,425.93c.06.14.76-.07,1.62,0s1.52.33,1.6.2-.56-.67-1.57-.73S181.92,425.81,182,425.93Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 183.61px 425.78px;" id="eltus49jpgjt"
                            class="animable"></path>
                        <path
                            d="M182.74,422.25a3,3,0,0,0,1.56,0,6.86,6.86,0,0,0,1.63-.49,8.54,8.54,0,0,0,.89-.47,1.69,1.69,0,0,0,.47-.37.65.65,0,0,0,.08-.8.82.82,0,0,0-.67-.35,1.73,1.73,0,0,0-.58.08,5.22,5.22,0,0,0-2.4,1.26c-.73.66-1,1.23-.92,1.26s.42-.43,1.15-1a6,6,0,0,1,1.39-.78,5.92,5.92,0,0,1,.9-.27c.33-.09.6-.09.69.06s0,.08,0,.17a1.44,1.44,0,0,1-.34.27,8.72,8.72,0,0,1-.83.47,10,10,0,0,1-1.5.57A11.32,11.32,0,0,0,182.74,422.25Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 185.106px 421.07px;" id="elbzxirlgrba"
                            class="animable"></path>
                        <path
                            d="M182.94,422.47a2.51,2.51,0,0,0,.42-1.5,4.85,4.85,0,0,0-.21-1.7,4.53,4.53,0,0,0-.39-.95,1.28,1.28,0,0,0-1-.79.75.75,0,0,0-.65.43,2.35,2.35,0,0,0-.16.57,3.53,3.53,0,0,0,.65,2.66c.6.8,1.24,1,1.25.94s-.48-.37-.94-1.15a3.4,3.4,0,0,1-.48-1.46,3,3,0,0,1,0-.9c.05-.33.17-.6.3-.56s.41.25.54.51a5.19,5.19,0,0,1,.38.84A5.71,5.71,0,0,1,183,421C183,421.88,182.86,422.45,182.94,422.47Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 182.136px 420px;" id="el1uw5w0u5j9x"
                            class="animable"></path>
                        <path
                            d="M209.41,286.39s-1.66-8.26-3.79-12.72-8.07-15.34-8.07-15.34L170.63,260l6.57,69.25,2.26,94.35,18.89.65,1-4.39c4.33-8.11,4-53.63,4-53.63s6.12-46.83,7-53.67S209.41,286.39,209.41,286.39Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 190.61px 341.29px;" id="elbz6khcqkl14"
                            class="animable"></path>
                        <path
                            d="M154.82,280.4S146.21,339,145.29,349s12.23,75.59,12.23,75.59l17.85-.43-2.75-73.36,7.87-43.29L170.63,260l-13.75-.2Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 162.867px 342.195px;" id="elemk4iuzchyg"
                            class="animable"></path>
                        <path
                            d="M172.36,261.47c.14,0,1.34,15.73,2.68,35.15s2.3,35.18,2.15,35.19-1.34-15.73-2.67-35.15S172.21,261.48,172.36,261.47Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 174.775px 296.64px;" id="el4nai5nndtcx"
                            class="animable"></path>
                        <path
                            d="M175.7,263a2.33,2.33,0,0,0-.54,1.08,1.48,1.48,0,0,0,.33,1.15,1.34,1.34,0,0,0,2.21-.79,1.49,1.49,0,0,0-.46-1.1c-.55-.52-1.11-.41-1.11-.5s.12-.1.36-.12a1.58,1.58,0,0,1,1,.34,1.78,1.78,0,0,1,.71,1.4,1.78,1.78,0,0,1-3.05,1.08,1.77,1.77,0,0,1-.33-1.53,1.54,1.54,0,0,1,.55-.88C175.55,263,175.69,263,175.7,263Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 176.483px 264.4px;" id="elwtjgezumtgi"
                            class="animable"></path>
                        <rect x="161.7" y="198.12" width="38.52" height="61.69"
                              style="fill: rgb(224, 224, 224); transform-origin: 180.96px 228.965px;" id="el6faann80v2m"
                              class="animable"></rect>
                        <path
                            d="M175.14,191.91l-3.66,2.74s-15.7,4.39-17.52,5.4-2.48,3.71-3,5.74-2.48,34.57-2.48,34.57-1.66,1.52-1.49,2.36a34.61,34.61,0,0,1,0,4.27l11.41-5,.83,11.71-7.6,15.45,2.31,1.68s-2.81,14.84-2,20.41,2.48,6.07,2.48,6.07,4.7-10,6.36-14.84c1.18-3.42,5.09-17.3,7-24.31a51.29,51.29,0,0,0,1.6-8.26l5-45Z"
                            style="fill: rgb(126, 87, 194); transform-origin: 161.059px 244.61px;" id="elru44mc2wxoe"
                            class="animable"></path>
                        <path
                            d="M157.53,236.32c-.14,0-.57-5.29-1-11.82s-.59-11.85-.44-11.85.57,5.28,1,11.82S157.67,236.31,157.53,236.32Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 156.808px 224.485px;" id="elk0bk6yx02jg"
                            class="animable"></path>
                        <g id="el5aev7uo8gej">
                            <g style="opacity: 0.3; transform-origin: 156.212px 225.765px;" class="animable">
                                <path
                                    d="M156.31,215.71a29.9,29.9,0,0,0,1.06,20.11C157.38,229.09,156.83,222.43,156.31,215.71Z"
                                    id="elvduf7ujkdo" class="animable"
                                    style="transform-origin: 156.212px 225.765px;"></path>
                            </g>
                        </g>
                        <path
                            d="M165.87,265.31a3.86,3.86,0,0,1-.07-.74c0-.53-.06-1.24-.11-2.12-.07-1.91-.17-4.57-.29-7.82s-.23-7.25-.37-11.6c-.06-2.19-.13-4.48-.2-6.85a48.3,48.3,0,0,1,.11-7.39,10.44,10.44,0,0,1,1.16-3.63,23.44,23.44,0,0,0,1.75-3.12,2.75,2.75,0,0,0,.16-1.59,2.61,2.61,0,0,0-.85-1.32,7.7,7.7,0,0,1-1.2-1.27,3.35,3.35,0,0,1-.5-1.69,10.28,10.28,0,0,1,.6-3.2c.29-1,.57-2,.85-2.89.54-1.86,1.06-3.59,1.53-5.18.93-3.13,1.7-5.67,2.24-7.5.27-.84.48-1.51.64-2a3.12,3.12,0,0,1,.26-.69,5.49,5.49,0,0,1-.16.72c-.14.52-.32,1.21-.54,2.06L168.79,205c-.45,1.6-.94,3.34-1.47,5.2-.26.94-.54,1.9-.82,2.9a10,10,0,0,0-.56,3.05,2.79,2.79,0,0,0,.43,1.44,7,7,0,0,0,1.14,1.18,3.18,3.18,0,0,1,1,1.56,3.33,3.33,0,0,1-.17,1.88,25.52,25.52,0,0,1-1.77,3.21,9.86,9.86,0,0,0-1.11,3.44,49.72,49.72,0,0,0-.11,7.31c.06,2.37.12,4.66.17,6.85.1,4.35.18,8.28.26,11.6s.09,5.92.12,7.82c0,.89,0,1.59,0,2.13A3.48,3.48,0,0,1,165.87,265.31Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 168.159px 230.01px;" id="el84kkm23ohtm"
                            class="animable"></path>
                        <path
                            d="M192.29,191.18s.31,5.7-.65,8.84S182.78,237,183,242.25s7.59,39.09,9.09,44.59S198,300,204.73,301.57a8.87,8.87,0,0,0,9.82-4.14l-4-24.34,2.69-1.37-4.81-7.86-.55-7-2-25L212.43,201l-14.13-5.39Z"
                            style="fill: rgb(126, 87, 194); transform-origin: 198.773px 246.508px;" id="els7q95mt2kja"
                            class="animable"></path>
                        <path
                            d="M188.36,262.28a3.57,3.57,0,0,1,.1-.69c.09-.49.22-1.14.37-1.95.36-1.75.85-4.18,1.46-7.16,1.3-6.09,3.06-14.4,5-23.58a16.16,16.16,0,0,0,.33-6.71c-.2-1-.76-2.1-.52-3.3a2.7,2.7,0,0,1,.95-1.42,7.74,7.74,0,0,0,1.09-1,4.86,4.86,0,0,0,.85-2.67c.06-.94,0-1.88,0-2.79-.06-1.8-.12-3.49-.18-5-.09-3-.17-5.52-.22-7.3l0-2a3.14,3.14,0,0,1,0-.7,5.58,5.58,0,0,1,.08.69c0,.51.08,1.17.13,2,.1,1.78.23,4.26.39,7.29.08,1.55.16,3.24.25,5.05,0,.9.11,1.84.05,2.83a5.2,5.2,0,0,1-.92,2.93c-.67.88-1.74,1.32-1.93,2.27s.29,2,.53,3.08a16.56,16.56,0,0,1-.32,6.92c-2,9.17-3.84,17.48-5.17,23.56-.67,3-1.23,5.38-1.62,7.12-.2.8-.35,1.44-.47,1.94A2.71,2.71,0,0,1,188.36,262.28Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 193.434px 229.145px;" id="el99l9cuawtnn"
                            class="animable"></path>
                        <path
                            d="M213.14,271.6a8.33,8.33,0,0,1-1.75,1.19c-1.12.67-2.7,1.53-4.49,2.4s-3.44,1.59-4.65,2.06a7.49,7.49,0,0,1-2,.65c0-.14,2.89-1.43,6.44-3.17S213.06,271.47,213.14,271.6Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 206.695px 274.746px;" id="el51ezwxwuaxe"
                            class="animable"></path>
                        <path
                            d="M208.45,263.83a20.83,20.83,0,0,1-8.08,3.58,31.32,31.32,0,0,1,4-1.84A31.5,31.5,0,0,1,208.45,263.83Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 204.41px 265.62px;" id="elqrlsi1vsk1j"
                            class="animable"></path>
                        <g id="el595afbxgq2n">
                            <g style="opacity: 0.3; transform-origin: 195.047px 228.125px;" class="animable">
                                <path
                                    d="M196.28,229.32a11.42,11.42,0,0,0,2.12-7.24,8.25,8.25,0,0,1,.95-5.46,14.6,14.6,0,0,0,.35-7.37,45.19,45.19,0,0,0-1.89-7.34s.28,3.87.45,7.6c.14,3.12.34,6.06-1.08,7.29-3.13,2.68-1.84,3.82-1.52,4.69s.86,1.54.37,4.55-5.95,28.3-5.95,28.3Z"
                                    id="el9a5x0z51hcq" class="animable"
                                    style="transform-origin: 195.047px 228.125px;"></path>
                            </g>
                        </g>
                        <g id="elgk81xjfi07d">
                            <g style="opacity: 0.3; transform-origin: 200.292px 249.545px;" class="animable">
                                <path
                                    d="M208.4,257.76a24,24,0,0,0-7-14.47,10.53,10.53,0,0,0-3.42-2.48,6.93,6.93,0,0,0-5,.31l-.82,4.66c.5-.54,2.07-1.16,2.61-.67a5.13,5.13,0,0,1,1.1,1.88,3.2,3.2,0,0,0,1.32,1.69c.9.45,2,.07,3,.38a3.11,3.11,0,0,1,1.73,1.74c.35.76.52,1.59.8,2.38a9.48,9.48,0,0,0,4.59,5.25c.3.15.7.28.94.05A.86.86,0,0,0,208.4,257.76Z"
                                    id="eld9wb1e79alq" class="animable"
                                    style="transform-origin: 200.292px 249.545px;"></path>
                            </g>
                        </g>
                        <g id="el1kz5wrpooh5">
                            <g style="opacity: 0.3; transform-origin: 205.344px 276.183px;" class="animable">
                                <path
                                    d="M210.42,273.35c.38,1.52-.4,2.72-1.48,3.84a6.36,6.36,0,0,1-4.21,1.82,9.86,9.86,0,0,1-4.56-.94Z"
                                    id="elwy4rr42h2ss" class="animable"
                                    style="transform-origin: 205.344px 276.183px;"></path>
                            </g>
                        </g>
                        <g id="elyoa0v1svcxo">
                            <g style="opacity: 0.3; transform-origin: 164.527px 231.1px;" class="animable">
                                <path
                                    d="M168.29,220.57c-.09-1.38-1.59-1.39-2.27-2.59-1-1.73-.4-3.18.29-5a55.54,55.54,0,0,0,1.91-6.29c-1,2.07-2.61,3.79-3.81,5.76s-2,4.4-1.22,6.56a7.71,7.71,0,0,1,.92,2.79c-.05,1.17-1,2.07-1.66,3a10.22,10.22,0,0,0-1.69,5.71,30.44,30.44,0,0,0,.65,6c1.16,6.68,2.83,12.32,4,19l-.3-25a9.6,9.6,0,0,1,.79-4.85C166.67,224.25,168.39,222.15,168.29,220.57Z"
                                    id="elovsycurmf7" class="animable"
                                    style="transform-origin: 164.527px 231.1px;"></path>
                            </g>
                        </g>
                        <path
                            d="M214.55,261.89c4-1.05,6.37-2.8,6.51-4.18s1.33-6.17.89-7.81S218.3,225,218.3,225s1.74-3.45,1.15-6.29c0,0,1.61-1.35-.3-4.5a45.65,45.65,0,0,1-3.37-7.35s-1.52-5.48-3.35-5.87l-6.54,30.84,5.63,25.87Z"
                            style="fill: rgb(126, 87, 194); transform-origin: 213.969px 231.44px;" id="elyo05zcndxkf"
                            class="animable"></path>
                        <path
                            d="M211,202.53c.08,0-.71,1.59-1.72,4.21a52.1,52.1,0,0,0-2.84,10.54,53.46,53.46,0,0,0-.54,10.91c.16,2.8.44,4.51.35,4.53a6.2,6.2,0,0,1-.28-1.19,33.12,33.12,0,0,1-.43-3.32,45.78,45.78,0,0,1,3.4-21.61,31.37,31.37,0,0,1,1.43-3A5.24,5.24,0,0,1,211,202.53Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 208.19px 217.625px;" id="el0imbo72y9p8"
                            class="animable"></path>
                        <path d="M216.75,226c0,.15-1.58.37-3.38,1.14s-3.08,1.72-3.18,1.6a8.49,8.49,0,0,1,6.56-2.74Z"
                              style="fill: rgb(38, 50, 56); transform-origin: 213.47px 227.372px;" id="elm9lymbpkowg"
                              class="animable"></path>
                        <path
                            d="M221.18,248.38a20.37,20.37,0,0,0-4.52-3.38,19.7,19.7,0,0,0-5.44-1.48,4,4,0,0,1,1.7-.09,11.17,11.17,0,0,1,4,1.11A11.06,11.06,0,0,1,220.2,247,4.06,4.06,0,0,1,221.18,248.38Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 216.2px 245.879px;" id="elvm15lar55tm"
                            class="animable"></path>
                        <polygon points="196.88 229.04 178 229.04 181.44 243.11 194.16 243.11 196.88 229.04"
                                 style="fill: rgb(69, 90, 100); transform-origin: 187.44px 236.075px;"
                                 id="el580g3ethmpd" class="animable"></polygon>
                        <path
                            d="M196.68,229.06a10.11,10.11,0,0,1-2.57,1.13,21.94,21.94,0,0,1-13.38.13,9.77,9.77,0,0,1-2.58-1.08c0-.19,4,1.61,9.28,1.53S196.63,228.87,196.68,229.06Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 187.415px 230.174px;" id="el3ogoeeku087"
                            class="animable"></path>
                        <path
                            d="M196.19,230.11a2.6,2.6,0,0,1,2.68.59,4.43,4.43,0,0,1,1.27,2.59,6.73,6.73,0,0,1-1.43,5.26,6.42,6.42,0,0,1-4.85,2.31l.69-2.63a6.83,6.83,0,0,0,3-1.77,3.49,3.49,0,0,0,.85-3.3,2.24,2.24,0,0,0-2.78-1.48l.24-2.22"
                            style="fill: rgb(69, 90, 100); transform-origin: 197.039px 235.16px;" id="elfmco2gke1aq"
                            class="animable"></path>
                        <path
                            d="M196.88,229a1.28,1.28,0,0,0,.91,1.68,4.58,4.58,0,0,0,2.33,0l.64,3,3.5-.26a49.4,49.4,0,0,0-2.66-5.3,2.12,2.12,0,0,0-1.37-.38Z"
                            style="fill: rgb(183, 136, 118); transform-origin: 200.532px 230.707px;" id="el0t1yk2nmspoe"
                            class="animable"></path>
                        <path
                            d="M205.89,235.54c-.13-.11-.95-2-1.63-2.06s-6.41,0-6.41,0-1.29.62-1.46,1.37-.17,2.18.43,2.13,2.82,0,2.82,0l-.13.91s-2.43,0-2.95.39-1.75,1.79-1.24,2.36a5.94,5.94,0,0,0,1.93,1s-.43-.18-.43.43a3.62,3.62,0,0,0,.38,1.36s.51,2.09,1.56,2.14,3.45,1.57,3.45,1.57a21.93,21.93,0,0,1,2.18,3.27c.43,1.05,1.28,7.42,6,10.13l1.2.66a5.33,5.33,0,0,0,7.73-3.4v-.06c.39-1.83,1.84-5,.82-6.5s-2.61-2.36-5.44-3.4-7.44-7.29-7.44-7.29S206.57,236.15,205.89,235.54Z"
                            style="fill: rgb(183, 136, 118); transform-origin: 207.848px 247.653px;" id="elbqp2wv6d2o"
                            class="animable"></path>
                        <path
                            d="M204,237.34a22.8,22.8,0,0,1-3.68,0,12,12,0,0,1-3.66-.39,14.47,14.47,0,0,1,3.68-.13C202.39,236.88,204.05,237.17,204,237.34Z"
                            style="fill: rgb(153, 80, 55); transform-origin: 200.331px 237.086px;" id="elhmqk1qgox3d"
                            class="animable"></path>
                        <path
                            d="M203.81,237.39a17.23,17.23,0,0,1-3.47.58,13.27,13.27,0,0,1-3.52.2,10.87,10.87,0,0,1,3.46-.72C202.21,237.22,203.81,237.22,203.81,237.39Z"
                            style="fill: rgb(153, 80, 55); transform-origin: 200.315px 237.739px;" id="elym6uk6iqkxb"
                            class="animable"></path>
                        <path
                            d="M203.12,240.81a7.66,7.66,0,0,1-3.16.74,7.8,7.8,0,0,1-3.25-.13,15.15,15.15,0,0,1,3.2-.39A15.12,15.12,0,0,1,203.12,240.81Z"
                            style="fill: rgb(153, 80, 55); transform-origin: 199.915px 241.231px;" id="eldyw92tsudgg"
                            class="animable"></path>
                        <path
                            d="M203.18,244.07a10.11,10.11,0,0,1-5.63-.12,11,11,0,0,1,2.82-.06A10.76,10.76,0,0,1,203.18,244.07Z"
                            style="fill: rgb(153, 80, 55); transform-origin: 200.365px 244.119px;" id="elqvyepz3nu5p"
                            class="animable"></path>
                        <path
                            d="M204.72,244.87c.13-.07.42.55,0,1.17a1.18,1.18,0,0,1-.7.53c-.22.05-.37,0-.38-.07s.39-.31.65-.74S204.58,244.91,204.72,244.87Z"
                            style="fill: rgb(153, 80, 55); transform-origin: 204.289px 245.727px;" id="elbfythsnfrzp"
                            class="animable"></path>
                        <path
                            d="M205.73,241.46c.05,0,.23,0,.41.31a1.92,1.92,0,0,1,.31,1.15,1.94,1.94,0,0,1-.4,1.13c-.2.24-.39.32-.43.27s.29-.64.31-1.42S205.62,241.56,205.73,241.46Z"
                            style="fill: rgb(153, 80, 55); transform-origin: 206.035px 242.897px;" id="elmvn1sqsawk"
                            class="animable"></path>
                        <path
                            d="M205.9,237.9c.1-.1.64.48.62,1.39s-.59,1.48-.69,1.37.16-.64.17-1.38S205.77,238,205.9,237.9Z"
                            style="fill: rgb(153, 80, 55); transform-origin: 206.164px 239.281px;" id="elqpurtxpk62"
                            class="animable"></path>
                        <path
                            d="M204.37,233.54a14.39,14.39,0,0,1-3.39.08,14.81,14.81,0,0,1-3.39-.16,9.08,9.08,0,0,1,3.39-.36A9.25,9.25,0,0,1,204.37,233.54Z"
                            style="fill: rgb(153, 80, 55); transform-origin: 200.98px 233.376px;" id="elrrgupyx75x9"
                            class="animable"></path>
                        <path
                            d="M147,247a16.18,16.18,0,0,0,.1,5.42c.61,2,3.26,6.29,5.07,6.63a2.78,2.78,0,0,0,.77,0,6.07,6.07,0,0,0,5.4-5.63l.24-2.8s2.44-.36,2.79-1.75a3.57,3.57,0,0,0,0-2.17s1.61-1.92,1.12-3.48c0,0,2.51-2.07,1.53-3.2,0,0-1.25-.43-1.74,0a1.31,1.31,0,0,0-1.37-1.3s-.19-3.16-2-2.9-2.1,3.28-2.1,3.28a11.91,11.91,0,0,0-2.81.41c-.6.3-2.46,4.35-2.46,4.35l.05,1.09Z"
                            style="fill: rgb(183, 136, 118); transform-origin: 155.533px 247.441px;" id="eloa5bxl0x39e"
                            class="animable"></path>
                        <path
                            d="M154.84,243.46c0-.09.9-.18,2.31-.55a11.76,11.76,0,0,0,2.37-.89,8,8,0,0,0,1.25-.78,4,4,0,0,0,1-1.09.66.66,0,0,0-.33-1,3,3,0,0,0-1.38-.05l-2.58.21a9.85,9.85,0,0,1-2.39.06,11,11,0,0,1,2.35-.42l2.57-.32a3.26,3.26,0,0,1,1.63.05,1.23,1.23,0,0,1,.7.7,1.26,1.26,0,0,1-.11,1,4.14,4.14,0,0,1-1.21,1.25,7.84,7.84,0,0,1-1.34.81,10.36,10.36,0,0,1-2.5.82A6.8,6.8,0,0,1,154.84,243.46Z"
                            style="fill: rgb(153, 80, 55); transform-origin: 158.618px 241.018px;" id="elpd01bz4xmng"
                            class="animable"></path>
                        <path
                            d="M155.23,242.81c0,.06-.22,0-.43-.18a1.52,1.52,0,0,1-.46-1,1.57,1.57,0,0,1,.33-1c.18-.22.36-.28.4-.23s-.25.59-.21,1.25S155.32,242.7,155.23,242.81Z"
                            style="fill: rgb(153, 80, 55); transform-origin: 154.791px 241.608px;" id="elpggj5evk39c"
                            class="animable"></path>
                        <path
                            d="M162.91,243c.11.08-.6,1.11-2,1.77a3.61,3.61,0,0,1-2.6.44c0-.15,1.13-.3,2.37-.91S162.79,242.85,162.91,243Z"
                            style="fill: rgb(153, 80, 55); transform-origin: 160.616px 244.134px;" id="elxvelmmg6bj"
                            class="animable"></path>
                        <path
                            d="M161.65,246.4c.13.06-.55,1.16-2,1.61a2.8,2.8,0,0,1-2.55-.17,16.6,16.6,0,0,0,2.39-.33A17.14,17.14,0,0,0,161.65,246.4Z"
                            style="fill: rgb(153, 80, 55); transform-origin: 159.383px 247.32px;" id="el9ae5sqpoax9"
                            class="animable"></path>
                        <path
                            d="M155,248.51c0,.07-.22.09-.54,0a1.77,1.77,0,0,1-1.14-.72,1.14,1.14,0,0,1,0-1.4c.28-.29.56-.24.56-.17s-.16.16-.26.39a.89.89,0,0,0,.09.89C154.17,248.16,155,248.34,155,248.51Z"
                            style="fill: rgb(153, 80, 55); transform-origin: 154.04px 247.368px;" id="elmaejbxeh8t"
                            class="animable"></path>
                        <path
                            d="M157.15,250.56c0,.06-.1.23-.42.36a1.37,1.37,0,0,1-1.33-.23,1.15,1.15,0,0,1-.36-1.31c.16-.35.4-.42.43-.36s-.05.21-.07.46a.9.9,0,0,0,.34.81C156.33,250.78,157.1,250.42,157.15,250.56Z"
                            style="fill: rgb(153, 80, 55); transform-origin: 156.057px 250.001px;" id="eln4i5zm96x9r"
                            class="animable"></path>
                        <path
                            d="M153.87,245.63c0,.06-.21.2-.62.16a1.67,1.67,0,0,1-1.28-.87,1.72,1.72,0,0,1,0-1.55c.18-.37.41-.49.46-.44s-.05.24-.12.56a1.82,1.82,0,0,0,.15,1.18,1.65,1.65,0,0,0,.9.76C153.63,245.54,153.86,245.55,153.87,245.63Z"
                            style="fill: rgb(153, 80, 55); transform-origin: 152.828px 244.358px;" id="el8c94381yryk"
                            class="animable"></path>
                    </g>
                    <g id="freepik--character-1--inject-2" class="animable"
                       style="transform-origin: 96.7791px 300.111px;">
                        <polygon
                            points="79.76 209.87 83.61 209.36 106.59 209.47 111.24 235.96 102.92 240.57 83.61 226.51 79.76 209.87"
                            style="fill: rgb(255, 190, 157); transform-origin: 95.5px 224.965px;" id="el69pno5nsgoa"
                            class="animable"></polygon>
                        <path
                            d="M79.76,209.87s-10,2.49-12,4.7S56.65,253,58.45,256.8s13,2.41,13,2.41l6,5.61,38.91-3.41,3.4-10.63,10.43-5.21s-4.58-26.08-10.39-31.7a16.68,16.68,0,0,0-13.27-4.4l-2.22,22.26Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 94.203px 237.092px;" id="ely0tic0aasnm"
                            class="animable"></path>
                        <path
                            d="M122.86,251.86c-.1,0,.39-1.58.65-4.16a26.6,26.6,0,0,0,.07-4.53,27,27,0,0,0-3-10.64,27.12,27.12,0,0,0-2.4-3.84c-1.56-2.07-2.78-3.14-2.71-3.22a4.21,4.21,0,0,1,.88.72,9.19,9.19,0,0,1,1,.94,15.11,15.11,0,0,1,1.17,1.33,26,26,0,0,1,2.54,3.85,25.89,25.89,0,0,1,3,10.83,24.66,24.66,0,0,1-.18,4.61,16.25,16.25,0,0,1-.31,1.74,8.71,8.71,0,0,1-.33,1.3A4.3,4.3,0,0,1,122.86,251.86Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 119.782px 238.665px;" id="el5y7jpjgnts9"
                            class="animable"></path>
                        <path
                            d="M130.25,245.57s3.8,12.14,2.47,17.25-4.86,9.1-8.43,6.44c-2.49-1.84-8.73-9.18-8.73-9.18l4.26-9.3,9.9-4.94"
                            style="fill: rgb(255, 190, 157); transform-origin: 124.281px 257.839px;" id="elduai41meapp"
                            class="animable"></path>
                        <path d="M88.32,399.31,68,413.86l18,25.32c2.31-1.87-2.13-18.41-2.13-18.41L97.26,412Z"
                              style="fill: rgb(38, 50, 56); transform-origin: 82.63px 419.245px;" id="elrx56cwvsmo"
                              class="animable"></path>
                        <g id="ely8evpzqq0ef">
                            <g style="opacity: 0.6; transform-origin: 78.6528px 413.067px;" class="animable">
                                <path
                                    d="M79.43,412.16a1.28,1.28,0,0,0-1.69.12,1.22,1.22,0,0,0,.11,1.68,1.33,1.33,0,0,0,1.78-.14,1.26,1.26,0,0,0-.3-1.73"
                                    style="fill: rgb(69, 90, 100); transform-origin: 78.6528px 413.067px;"
                                    id="elzsof98tj7f" class="animable"></path>
                            </g>
                        </g>
                        <path d="M68.12,413.8l2-1.48,16.35,25s.3,1.48-.59,1.91Z"
                              style="fill: rgb(69, 90, 100); transform-origin: 77.3193px 425.775px;" id="elvzffv21s22"
                              class="animable"></path>
                        <path
                            d="M84.3,421.09c-.12.08-.62-.5-1.45-.82s-1.57-.29-1.61-.43.82-.48,1.81-.06S84.44,421,84.3,421.09Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 82.7829px 420.337px;" id="elwx7kul0c3sd"
                            class="animable"></path>
                        <path
                            d="M85.09,424.52c-.1.11-.69-.27-1.51-.32s-1.46.22-1.54.1.56-.71,1.58-.63S85.21,424.44,85.09,424.52Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 83.5695px 424.101px;" id="elat4nrxwsnsd"
                            class="animable"></path>
                        <path d="M83,428.29c-.1-.1.39-.71,1.29-.87s1.59.22,1.52.35-.68,0-1.42.17S83.08,428.4,83,428.29Z"
                              style="fill: rgb(69, 90, 100); transform-origin: 84.401px 427.848px;" id="elanrwozj93i4"
                              class="animable"></path>
                        <path
                            d="M87.13,418.75c-.15,0-.38-.66-.92-1.33s-1.15-1.05-1.09-1.19.87.07,1.5.86S87.27,418.74,87.13,418.75Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 86.1583px 417.47px;" id="el7tfn0o3q85m"
                            class="animable"></path>
                        <path
                            d="M89.71,416s-.48-.4-.9-1.27a7.16,7.16,0,0,1-.53-1.62,7.57,7.57,0,0,1-.13-1,1.74,1.74,0,0,1,0-.59.66.66,0,0,1,.61-.53.82.82,0,0,1,.67.34,1.9,1.9,0,0,1,.27.53,5.43,5.43,0,0,1,.29,1,5.6,5.6,0,0,1,.06,1.71,2.54,2.54,0,0,1-.5,1.48c-.08,0,.11-.59.13-1.51a5.65,5.65,0,0,0-.46-2.47c-.12-.32-.28-.55-.44-.53s-.09,0-.13.13a1.5,1.5,0,0,0,0,.43,7.12,7.12,0,0,0,.09,1,8.22,8.22,0,0,0,.4,1.56A13.12,13.12,0,0,1,89.71,416Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 89.107px 413.52px;" id="el4j3cvbv62el"
                            class="animable"></path>
                        <path
                            d="M89.41,416s.22-.59,1-1.21a5,5,0,0,1,2.51-1,1.29,1.29,0,0,1,1.22.35.73.73,0,0,1,0,.78,2,2,0,0,1-.37.46,3.48,3.48,0,0,1-.86.61,3.62,3.62,0,0,1-1.69.39,2,2,0,0,1-1.49-.48c0-.09.58.17,1.48.1a3.56,3.56,0,0,0,1.47-.44,3.08,3.08,0,0,0,.72-.54c.24-.23.39-.49.29-.57a.88.88,0,0,0-.73-.15,5.06,5.06,0,0,0-.91.17,5.51,5.51,0,0,0-1.44.66C89.85,415.57,89.48,416,89.41,416Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 91.8315px 415.071px;" id="elggqhhuhtx2v"
                            class="animable"></path>
                        <path d="M79.05,414.06,79.28,439l31.05-.13c-.19-3-16.28-8.85-16.28-8.85l.51-16Z"
                              style="fill: rgb(38, 50, 56); transform-origin: 94.69px 426.51px;" id="elh3pl1blqnfl"
                              class="animable"></path>
                        <g id="el3andnkwzmpp">
                            <g style="opacity: 0.6; transform-origin: 84.7473px 429.885px;" class="animable">
                                <path
                                    d="M84.44,428.72a1.27,1.27,0,0,0-.87,1.45,1.22,1.22,0,0,0,1.43.88,1.33,1.33,0,0,0,.92-1.54,1.27,1.27,0,0,0-1.59-.75"
                                    style="fill: rgb(69, 90, 100); transform-origin: 84.7473px 429.885px;"
                                    id="el17p25gp3mhh" class="animable"></path>
                            </g>
                        </g>
                        <path d="M79.28,438.91l0-2.52,29.85,1s1.39.61,1.23,1.58Z"
                              style="fill: rgb(69, 90, 100); transform-origin: 94.8264px 437.68px;" id="el5i31e1jkrzo"
                              class="animable"></path>
                        <path
                            d="M94.55,429.87c0,.15-.76.22-1.5.71s-1.14,1.13-1.28,1.07.08-.93,1-1.51S94.58,429.73,94.55,429.87Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 93.1411px 430.694px;" id="el6ozl25gx876"
                            class="animable"></path>
                        <path
                            d="M97.81,431.2c0,.15-.62.41-1.13,1.05s-.66,1.32-.81,1.32-.25-.87.4-1.65S97.81,431.06,97.81,431.2Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 96.7844px 432.357px;" id="elgzb6ghd8l1h"
                            class="animable"></path>
                        <path
                            d="M99.68,435.09c-.14,0-.35-.72,0-1.56s1.1-1.16,1.16-1-.37.57-.68,1.25S99.83,435.07,99.68,435.09Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 100.167px 433.79px;" id="elcogvn6m8tjk"
                            class="animable"></path>
                        <path
                            d="M94.26,426.21c-.06.14-.76-.07-1.61,0s-1.53.34-1.61.21.56-.67,1.57-.73S94.34,426.09,94.26,426.21Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 92.6497px 426.07px;" id="eluxjwwnch35c"
                            class="animable"></path>
                        <path
                            d="M93.51,422.53a3,3,0,0,1-1.56,0,7.51,7.51,0,0,1-1.63-.49,8.54,8.54,0,0,1-.89-.47,2.36,2.36,0,0,1-.47-.37.64.64,0,0,1-.07-.8.79.79,0,0,1,.66-.35,2,2,0,0,1,.58.07,6.49,6.49,0,0,1,1,.33,5.61,5.61,0,0,1,1.44.94c.72.66,1,1.23.92,1.26s-.42-.43-1.16-1a5.83,5.83,0,0,0-1.39-.78,6.14,6.14,0,0,0-.89-.27c-.33-.09-.61-.09-.7.06s0,.08,0,.17a1.33,1.33,0,0,0,.35.27,6.76,6.76,0,0,0,.82.46,8.18,8.18,0,0,0,1.5.57A11.62,11.62,0,0,1,93.51,422.53Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 91.1458px 421.35px;" id="el8msunkidri5"
                            class="animable"></path>
                        <path
                            d="M93.31,422.75a2.56,2.56,0,0,1-.41-1.5,5.15,5.15,0,0,1,.2-1.71,4.68,4.68,0,0,1,.39-.94,1.28,1.28,0,0,1,1-.79.74.74,0,0,1,.65.43,1.7,1.7,0,0,1,.16.57,3.37,3.37,0,0,1,0,1.05,3.59,3.59,0,0,1-.66,1.61c-.6.8-1.23,1-1.25.94s.48-.38.94-1.15a3.6,3.6,0,0,0,.49-1.46,3,3,0,0,0,0-.9c0-.33-.17-.6-.29-.56s-.42.24-.55.51a6.23,6.23,0,0,0-.38.84,5.71,5.71,0,0,0-.29,1.56C93.23,422.16,93.39,422.72,93.31,422.75Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 94.1172px 420.28px;" id="eljgue4n5zsym"
                            class="animable"></path>
                        <path d="M79.05,414.06,79.28,439l31.05-.13c-.19-3-16.28-8.85-16.28-8.85l.51-16Z"
                              style="fill: rgb(38, 50, 56); transform-origin: 94.69px 426.51px;" id="ellp44euvo8xg"
                              class="animable"></path>
                        <g id="elr8o8n3qm0p8">
                            <g style="opacity: 0.6; transform-origin: 84.7473px 429.885px;" class="animable">
                                <path
                                    d="M84.44,428.72a1.27,1.27,0,0,0-.87,1.45,1.22,1.22,0,0,0,1.43.88,1.33,1.33,0,0,0,.92-1.54,1.27,1.27,0,0,0-1.59-.75"
                                    style="fill: rgb(69, 90, 100); transform-origin: 84.7473px 429.885px;"
                                    id="elh1bqxz4d2fm" class="animable"></path>
                            </g>
                        </g>
                        <path d="M79.28,438.91l0-2.52,29.85,1s1.39.61,1.23,1.58Z"
                              style="fill: rgb(69, 90, 100); transform-origin: 94.8264px 437.68px;" id="elsgnf910242"
                              class="animable"></path>
                        <path
                            d="M94.55,429.87c0,.15-.76.22-1.5.71s-1.14,1.13-1.28,1.07.08-.93,1-1.51S94.58,429.73,94.55,429.87Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 93.1411px 430.694px;" id="el0x9oz0lkyjpk"
                            class="animable"></path>
                        <path
                            d="M97.81,431.2c0,.15-.62.41-1.13,1.05s-.66,1.32-.81,1.32-.25-.87.4-1.65S97.81,431.06,97.81,431.2Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 96.7844px 432.357px;" id="elqr1zexfpqa"
                            class="animable"></path>
                        <path
                            d="M99.68,435.09c-.14,0-.35-.72,0-1.56s1.1-1.16,1.16-1-.37.57-.68,1.25S99.83,435.07,99.68,435.09Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 100.167px 433.79px;" id="eliogoltke1b"
                            class="animable"></path>
                        <path
                            d="M94.26,426.21c-.06.14-.76-.07-1.61,0s-1.53.34-1.61.21.56-.67,1.57-.73S94.34,426.09,94.26,426.21Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 92.6497px 426.07px;" id="elyncu98e3e6"
                            class="animable"></path>
                        <path
                            d="M93.51,422.53a3,3,0,0,1-1.56,0,7.51,7.51,0,0,1-1.63-.49,8.54,8.54,0,0,1-.89-.47,2.36,2.36,0,0,1-.47-.37.64.64,0,0,1-.07-.8.79.79,0,0,1,.66-.35,2,2,0,0,1,.58.07,6.49,6.49,0,0,1,1,.33,5.61,5.61,0,0,1,1.44.94c.72.66,1,1.23.92,1.26s-.42-.43-1.16-1a5.83,5.83,0,0,0-1.39-.78,6.14,6.14,0,0,0-.89-.27c-.33-.09-.61-.09-.7.06s0,.08,0,.17a1.33,1.33,0,0,0,.35.27,6.76,6.76,0,0,0,.82.46,8.18,8.18,0,0,0,1.5.57A11.62,11.62,0,0,1,93.51,422.53Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 91.1458px 421.35px;" id="el3nhe9yh4dxa"
                            class="animable"></path>
                        <path
                            d="M93.31,422.75a2.56,2.56,0,0,1-.41-1.5,5.15,5.15,0,0,1,.2-1.71,4.68,4.68,0,0,1,.39-.94,1.28,1.28,0,0,1,1-.79.74.74,0,0,1,.65.43,1.7,1.7,0,0,1,.16.57,3.37,3.37,0,0,1,0,1.05,3.59,3.59,0,0,1-.66,1.61c-.6.8-1.23,1-1.25.94s.48-.38.94-1.15a3.6,3.6,0,0,0,.49-1.46,3,3,0,0,0,0-.9c0-.33-.17-.6-.29-.56s-.42.24-.55.51a6.23,6.23,0,0,0-.38.84,5.71,5.71,0,0,0-.29,1.56C93.23,422.16,93.39,422.72,93.31,422.75Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 94.1172px 420.28px;" id="el3ajvvw3sfj1"
                            class="animable"></path>
                        <path
                            d="M81,268.39a44.49,44.49,0,0,0-6.49,9.12C72.33,282,71,292.63,71,292.63s-6,13.38-5.1,20.23,7,53.67,7,53.67-.3,45.52,4,53.63l1,4.38,17.5-3.1h0l1-2.41,2.66-89.48L110,268.79Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 87.904px 346.465px;" id="elr49fzp0xhan"
                            class="animable"></path>
                        <path
                            d="M88.83,286.67a2.36,2.36,0,0,1-.12-.71c0-.46-.08-1.13-.09-2a57.73,57.73,0,0,1,.39-6.44c.28-2.44.54-4.64.74-6.4a23.06,23.06,0,0,1,.34-2.64,12.88,12.88,0,0,1,0,2.67c-.11,1.65-.35,3.92-.62,6.41s-.46,4.76-.51,6.41S88.9,286.67,88.83,286.67Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 89.3897px 277.575px;" id="elpd4umsecw6k"
                            class="animable"></path>
                        <path
                            d="M92.07,275.9a12,12,0,0,1-.87-3.62,11.52,11.52,0,0,1-.1-3.72,28.31,28.31,0,0,1,.52,3.67A28.32,28.32,0,0,1,92.07,275.9Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 91.5323px 272.23px;" id="el40zclsvjg0w"
                            class="animable"></path>
                        <path
                            d="M103.31,272.3c-.07,0,0-.57-.67-1a1.28,1.28,0,0,0-1.2-.12,1.24,1.24,0,0,0,0,2.32,1.28,1.28,0,0,0,1.19-.17,2,2,0,0,0,.64-1s.07.13,0,.37a1.41,1.41,0,0,1-.49.9,1.58,1.58,0,0,1-1.51.3,1.63,1.63,0,0,1-1.11-1.51,1.62,1.62,0,0,1,1.06-1.55,1.56,1.56,0,0,1,1.51.25,1.41,1.41,0,0,1,.53.87C103.37,272.17,103.34,272.31,103.31,272.3Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 101.749px 272.361px;" id="elxz8q48u19wd"
                            class="animable"></path>
                        <path
                            d="M97.82,371a3.14,3.14,0,0,1,0,.49v1.4c0,1.22,0,3-.08,5.15-.1,4.34-.34,10.34-.63,17s-.48,12.62-.57,17c0,2.13-.08,3.87-.1,5.14,0,.57,0,1,0,1.4a3.83,3.83,0,0,1,0,.49,1.91,1.91,0,0,1,0-.49c0-.36,0-.83,0-1.4,0-1.21,0-3,0-5.14,0-4.35.17-10.35.45-17s.56-12.56.75-16.95c.09-2.13.16-3.87.22-5.14,0-.57,0-1,.07-1.4A1.61,1.61,0,0,1,97.82,371Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 97.1771px 395.035px;" id="el8bvc3h2f60f"
                            class="animable"></path>
                        <path
                            d="M121.43,280.68s8.62,58.59,9.54,68.59S96.27,412,96.27,412l-16-17.47,23.37-43.46-7.87-43.28,10.57-38.69,13.75-.21Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 105.629px 340.445px;" id="elm9xanuyw9df"
                            class="animable"></path>
                        <path
                            d="M74.26,406.14a9.94,9.94,0,0,0,.12,1.27c.11.84.31,2.07.6,3.65.58,3.17,1.53,7.77,2.8,13.51l0,.12.12,0,17.51-3.07.13,0v-.14c.49-12,1.07-26.37,1.69-41.76.65-16.57,1.25-31.93,1.74-44.54v0c1.31-10.13,2.4-18.5,3.15-24.36L103,304l.21-1.78c0-.4,0-.61,0-.61s0,.21-.1.61-.15,1-.26,1.77c-.22,1.57-.54,3.85-.94,6.76-.79,5.85-1.93,14.22-3.29,24.34h0c-.51,12.6-1.13,28-1.8,44.53-.6,15.4-1.17,29.76-1.63,41.77l.13-.16-17.49,3.15.15.1c-1.3-5.74-2.29-10.33-2.91-13.49-.31-1.58-.54-2.8-.67-3.63-.07-.41-.11-.73-.14-.94S74.26,406.14,74.26,406.14Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 88.7283px 363.15px;" id="elo110g4zbmek"
                            class="animable"></path>
                        <path
                            d="M77.51,264.82s-8.06,9.46-11.73,16.41c-8.4,15.89-5.4,79.79-5.4,79.79l74.88-1.1-8.19-66.12a143,143,0,0,0-5.76-26.1l-2.62-8.17Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 97.5596px 310.275px;" id="elhr9taurmbiq"
                            class="animable"></path>
                        <path
                            d="M108.64,177.9a14.13,14.13,0,0,0-14-13h-.73c-7.88.44-11.91,7.39-11.24,15.25L84,211.67a1.45,1.45,0,0,0,.82,1.23l17.69,8.3-.55-16.55s7.58-1.16,7.69-8.73C109.68,192.26,109.18,184.72,108.64,177.9Z"
                            style="fill: rgb(255, 190, 157); transform-origin: 96.1247px 193.05px;" id="elq508dqai3k"
                            class="animable"></path>
                        <path d="M102,204.64a18.38,18.38,0,0,1-9.91-2.92s2.32,5.45,9.88,4.78Z"
                              style="fill: rgb(235, 153, 110); transform-origin: 97.045px 204.139px;" id="elxzx7315x40e"
                              class="animable"></path>
                        <path
                            d="M106.53,182.8a1.08,1.08,0,0,1-1,1.09,1,1,0,0,1-1.12-1,1.09,1.09,0,0,1,1-1.09A1,1,0,0,1,106.53,182.8Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 105.47px 182.845px;" id="eldgqlz4hk5ai"
                            class="animable"></path>
                        <path
                            d="M107.08,181.21c-.14.14-1-.47-2.12-.46s-2,.58-2.14.43.07-.31.44-.58a3,3,0,0,1,1.72-.53,2.79,2.79,0,0,1,1.68.55C107,180.89,107.14,181.15,107.08,181.21Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 104.935px 180.65px;" id="elyzsbc0byf5a"
                            class="animable"></path>
                        <path
                            d="M95.49,183a1.08,1.08,0,0,1-1,1.09,1,1,0,0,1-1.11-1,1.08,1.08,0,0,1,1-1.09A1,1,0,0,1,95.49,183Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 94.435px 183.045px;" id="eloz9pwmhbb9l"
                            class="animable"></path>
                        <path
                            d="M95.56,181.21c-.13.14-1-.47-2.11-.46s-2,.58-2.15.43.08-.31.45-.58a3,3,0,0,1,1.72-.53,2.84,2.84,0,0,1,1.68.55C95.51,180.89,95.63,181.15,95.56,181.21Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 93.4163px 180.65px;" id="el5uoetvix5re"
                            class="animable"></path>
                        <path
                            d="M99.77,190.43a8,8,0,0,1,1.89-.33c.3,0,.58-.09.63-.3a1.48,1.48,0,0,0-.2-.88c-.27-.72-.56-1.47-.87-2.26a39.9,39.9,0,0,1-2-5.92,38.26,38.26,0,0,1,2.43,5.75l.84,2.28a1.72,1.72,0,0,1,.15,1.16.79.79,0,0,1-.49.44,1.93,1.93,0,0,1-.5.06A7,7,0,0,1,99.77,190.43Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 100.95px 185.617px;" id="elx0885n9r06i"
                            class="animable"></path>
                        <path
                            d="M95.87,177.23c-.11.32-1.27.17-2.64.33s-2.47.53-2.65.25.11-.44.56-.74a4.33,4.33,0,0,1,2-.69,4.59,4.59,0,0,1,2.07.25C95.67,176.83,95.92,177.08,95.87,177.23Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 93.2011px 177.132px;" id="elm7d34jujmx"
                            class="animable"></path>
                        <path
                            d="M106.58,178.23c-.2.26-1,0-2,0s-1.78.18-2-.1c-.09-.13,0-.4.4-.65a2.83,2.83,0,0,1,3.17.11C106.56,177.83,106.67,178.1,106.58,178.23Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 104.579px 177.696px;" id="elv96fmykogkg"
                            class="animable"></path>
                        <path d="M83.88,185.75c-.13-.06-5.2-1.55-5,3.63s5.32,4,5.32,3.8S83.88,185.75,83.88,185.75Z"
                              style="fill: rgb(255, 190, 157); transform-origin: 81.5371px 189.471px;"
                              id="el6y6d6hmv706" class="animable"></path>
                        <path
                            d="M82.85,191.27s-.08.07-.24.14a.87.87,0,0,1-.67,0,2.23,2.23,0,0,1-1.09-2,3,3,0,0,1,.21-1.3,1.07,1.07,0,0,1,.66-.71.47.47,0,0,1,.54.23c.07.14,0,.25.07.26s.11-.09.06-.31a.54.54,0,0,0-.21-.31.65.65,0,0,0-.5-.12,1.27,1.27,0,0,0-.92.83,3,3,0,0,0-.27,1.45,2.35,2.35,0,0,0,1.38,2.2,1,1,0,0,0,.82-.16C82.85,191.39,82.87,191.28,82.85,191.27Z"
                            style="fill: rgb(235, 153, 110); transform-origin: 81.6701px 189.399px;" id="elnrgtilt9cak"
                            class="animable"></path>
                        <path
                            d="M87.15,170.36l21.6.47a9.93,9.93,0,0,0-3.18-3.67,17,17,0,0,0-9.77-3.52c-3.53-.06-10.69,4.23-13.25,6.66-2,1.94-2,3.63-2,3.63-.33,2.79,1.24,6,1.86,8.73.32,1.41.94,5.7.94,5.7h0c1.19,0,1.64-1,1.46-2.12l-.23-4.62a7,7,0,0,0,2.13-8.14C86.38,173.06,85.73,171.14,87.15,170.36Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 94.6275px 176px;" id="el1it4mpwv283j"
                            class="animable"></path>
                        <path
                            d="M91.69,186.73a.13.13,0,0,1-.16-.11.13.13,0,0,1,.1-.16.13.13,0,0,1,.16.11A.13.13,0,0,1,91.69,186.73Z"
                            style="fill: rgb(170, 101, 80); transform-origin: 91.66px 186.595px;" id="eltx94qtpgsqg"
                            class="animable"></path>
                        <path d="M93.91,186.23c-.07,0-.14,0-.16-.13s0-.17.1-.18.14,0,.16.13S94,186.22,93.91,186.23Z"
                              style="fill: rgb(170, 101, 80); transform-origin: 93.8795px 186.074px;" id="el961udaymf6"
                              class="animable"></path>
                        <path d="M95.41,186.2c-.07,0-.14-.08-.15-.19s0-.22.1-.23.14.08.15.2S95.48,186.19,95.41,186.2Z"
                              style="fill: rgb(170, 101, 80); transform-origin: 95.3842px 185.99px;" id="elxxh8jrgvxxh"
                              class="animable"></path>
                        <path
                            d="M92.78,188.13c-.07,0-.13,0-.13-.08s.06-.08.13-.08.13,0,.13.08S92.85,188.13,92.78,188.13Z"
                            style="fill: rgb(170, 101, 80); transform-origin: 92.78px 188.05px;" id="elpjnzi8yjl7"
                            class="animable"></path>
                        <path
                            d="M94.82,187.66a.13.13,0,0,1-.14-.13.14.14,0,0,1,.11-.16.14.14,0,0,1,.14.14A.12.12,0,0,1,94.82,187.66Z"
                            style="fill: rgb(170, 101, 80); transform-origin: 94.806px 187.515px;" id="ellmaufrlszlc"
                            class="animable"></path>
                        <path d="M105.43,186.42a.15.15,0,0,1-.05-.29.13.13,0,0,1,.15.12A.14.14,0,0,1,105.43,186.42Z"
                              style="fill: rgb(170, 101, 80); transform-origin: 105.409px 186.274px;" id="eltonc9tnim4c"
                              class="animable"></path>
                        <path
                            d="M107,186.28a.14.14,0,0,1-.14-.15.14.14,0,0,1,.11-.17c.07,0,.13.06.14.15S107,186.28,107,186.28Z"
                            style="fill: rgb(170, 101, 80); transform-origin: 106.983px 186.12px;" id="el1wfhok1rz96"
                            class="animable"></path>
                        <path
                            d="M104.1,186.45a.12.12,0,0,1-.15-.08.12.12,0,0,1,.1-.14.13.13,0,0,1,.15.09A.12.12,0,0,1,104.1,186.45Z"
                            style="fill: rgb(170, 101, 80); transform-origin: 104.074px 186.341px;" id="elhhf0d3h6lb"
                            class="animable"></path>
                        <path d="M105.22,188a.15.15,0,0,1-.12-.27.13.13,0,0,1,.17.08A.14.14,0,0,1,105.22,188Z"
                              style="fill: rgb(170, 101, 80); transform-origin: 105.161px 187.863px;" id="elnni116x2hu"
                              class="animable"></path>
                        <path
                            d="M106.51,187.71a.1.1,0,0,1-.09-.13.11.11,0,0,1,.15-.07.1.1,0,0,1,.09.13A.11.11,0,0,1,106.51,187.71Z"
                            style="fill: rgb(170, 101, 80); transform-origin: 106.54px 187.61px;" id="el0hrvy7oyzjaa"
                            class="animable"></path>
                        <path
                            d="M82.41,170.6a6.39,6.39,0,0,1,6.38-7.94,20.42,20.42,0,0,0,3,.22,15.55,15.55,0,0,1,4.29-.33c2.08.2,5.12,1.53,6.64,1.83s2.56-1.31,2.56-1.31c.1.8-.07,1.41-.67,1.71,1.58.15,2.8-1.71,2.8-1.71a2.48,2.48,0,0,1-.72,2.52,11.64,11.64,0,0,0,2.93,1.51s2.08.29,1.79-.87c0,0,3.61,4.89-2,9.66-1.57,1.33-4.16.58-6-.43-1.63-.9-3.09-2.45-4.95-2.39s-3.62,1.87-5.51,1.5a5.45,5.45,0,0,1-2.49-1.67,4.27,4.27,0,0,0-2.57-1.48c-1-.06-1.9.38-1.54,1.33l-4-2.15"
                            style="fill: rgb(38, 50, 56); transform-origin: 97.3859px 169.563px;" id="el17q3uawmepl"
                            class="animable"></path>
                        <path
                            d="M99.66,193.83a2.24,2.24,0,0,0-.93-1.84,2,2,0,0,0-2-.11,1.77,1.77,0,0,0-.87,1.82,2.08,2.08,0,0,0,3.08,1.23,1.5,1.5,0,0,0,.71-1.27"
                            style="fill: rgb(126, 87, 194); transform-origin: 97.7487px 193.446px;" id="el9zowtxnhqf"
                            class="animable"></path>
                        <path
                            d="M96.4,191.73c.16,0,.32,1.08,1.38,1.74s2.24.37,2.27.52-.24.25-.74.34a2.79,2.79,0,0,1-1.88-.38,2.41,2.41,0,0,1-1.09-1.46C96.23,192,96.32,191.73,96.4,191.73Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 98.1706px 193.046px;" id="el2sbgwseyzso"
                            class="animable"></path>
                        <path
                            d="M108.49,175.87l.11.42a13.87,13.87,0,0,0,4-4.43,6.89,6.89,0,0,0,.42-5.82,4.64,4.64,0,0,0-4.83-2.83,3.44,3.44,0,0,0-5.21-1.58,6.75,6.75,0,0,1-1.6,1.15c-1,.35-2-.25-3-.63a5.56,5.56,0,0,0-2.76-.39,3.65,3.65,0,0,0-2.4,1.34,3.76,3.76,0,0,0-.11,4,5.92,5.92,0,0,0,3.34,2.53,14.4,14.4,0,0,0,4.24.55"
                            style="fill: rgb(38, 50, 56); transform-origin: 103.031px 168.641px;" id="elxuq1rrlizx"
                            class="animable"></path>
                        <path
                            d="M61.73,257.84s1.62,10.94,2.07,12.27,4.12,4.49,6.78,4.71,10.31,0,14-3.22c5.31-4.57,9.66-18.7,9.66-18.7l6.28,1.74s7.28,6.2,8.48,5.33-.21-2.13-.21-2.13l-4-4.38s6.67,5,7.43,5.48,2-.29,1.68-1.18-6.29-5.94-6.29-5.94,7.2,4.5,8.3,4.76c.78.18,1.79-.45,1.35-1.34s-9-7.12-9-7.12,9.21,1.63,9.74,1.69c.8.1,1.59-1.4.55-1.84s-15.43-5.64-15.43-5.64,3.86-3.86,3.71-5.94a4.11,4.11,0,0,0-1-2.82s-.19-.62-1.58,1.92a8.23,8.23,0,0,1-4.65,4.28c-1.93.78-11.72,4.49-11.72,4.49L71.49,259.21Z"
                            style="fill: rgb(255, 190, 157); transform-origin: 90.3889px 254.192px;" id="elycdtvjdvell"
                            class="animable"></path>
                        <path
                            d="M75.64,240.77a9,9,0,0,1,.24,2.23,48.86,48.86,0,0,1-.09,5.41,47.36,47.36,0,0,1-.68,5.36,9.26,9.26,0,0,1-.55,2.18c-.16,0,.42-3.39.71-7.58S75.48,240.78,75.64,240.77Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 75.2246px 248.36px;" id="elqgrr8iu2ko"
                            class="animable"></path>
                        <polygon
                            points="120.41 250.87 115.41 266.08 127.04 262.04 131.72 246.55 131.3 245.76 120.41 250.87"
                            style="fill: rgb(69, 90, 100); transform-origin: 123.565px 255.92px;" id="elb59gcc2gbn9"
                            class="animable"></polygon>
                        <path
                            d="M120.94,243.77a2.87,2.87,0,0,0,1.8,3.77,26.32,26.32,0,0,0,5.54,1.25v2.43l-7.06,2.94s-.64-.06-1.34-.1a6.42,6.42,0,0,0-2,.13c-.31.27-1.06,1.23.33,1.71a17.47,17.47,0,0,0,3.09.7l-4.72,0s-1.53,1.91,1.12,2.4a11,11,0,0,1,2.73.68l-4.82-.37a1.75,1.75,0,0,0,.83,1.95c1.2.88,4,.8,4,.8h7.92l6.12-6.2a4.94,4.94,0,0,0,.86-2.94c-.08-1.68-.08-1.84-.55-2.23s-4.46-3.92-4.46-3.92L123.81,245Z"
                            style="fill: rgb(255, 190, 157); transform-origin: 125.449px 252.916px;" id="elpvrcfs7tpnr"
                            class="animable"></path>
                        <path
                            d="M107.69,342.92a3.35,3.35,0,0,1,0-.59q0-.66,0-1.68c0-1.46-.05-3.58-.12-6.19-.15-5.22-.54-12.43-1.42-20.35s-2.13-15-3.15-20.15c-.51-2.57-1-4.63-1.26-6.06l-.35-1.65a2.32,2.32,0,0,1-.08-.58,2.85,2.85,0,0,1,.18.56c.12.42.26,1,.44,1.62.38,1.42.87,3.47,1.43,6,1.11,5.11,2.4,12.23,3.3,20.17s1.22,15.17,1.27,20.4c0,2.62,0,4.74,0,6.2l-.07,1.68A2.27,2.27,0,0,1,107.69,342.92Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 104.62px 314.295px;" id="elrdp9gxnh3q9"
                            class="animable"></path>
                    </g>
                    <defs>
                        <filter id="active" height="200%">
                            <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2"></feMorphology>
                            <feFlood flood-color="#32DFEC" flood-opacity="1" result="PINK"></feFlood>
                            <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>
                            <feMerge>
                                <feMergeNode in="OUTLINE"></feMergeNode>
                                <feMergeNode in="SourceGraphic"></feMergeNode>
                            </feMerge>
                        </filter>
                        <filter id="hover" height="200%">
                            <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2"></feMorphology>
                            <feFlood flood-color="#ff0000" flood-opacity="0.5" result="PINK"></feFlood>
                            <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>
                            <feMerge>
                                <feMergeNode in="OUTLINE"></feMergeNode>
                                <feMergeNode in="SourceGraphic"></feMergeNode>
                            </feMerge>
                            <feColorMatrix type="matrix"
                                           values="0   0   0   0   0                0   1   0   0   0                0   0   0   0   0                0   0   0   1   0 "></feColorMatrix>
                        </filter>
                    </defs>
                </svg>
            </section>
        </div>
        <div class="m-4 text-center pt-4">
            <p>Do not have an account? <a href="{{ route('register') }}">Register</a></p>
        </div>
    </div>
@endsection
