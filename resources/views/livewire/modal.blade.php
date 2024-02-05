<div x-data="{ open: false }" @keydown.escape="open = false" class="relative z-50">
    <button @click="open = !open" class="{{ $btnClasses }}">{{ $btnLabel }}</button>
    <div class="fixed top-0 left-0 w-full h-full" x-show="open" style="background: rgba(30, 30, 30, 0.70);">
        <div class="bg-white fixed px-6 py-10 rounded-xl top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[320px] lg:w-[500px] {{ $customClasses }}">
            <div class="absolute top-3 right-3 cursor-pointer" @click="open = false">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 64 64">
                    <path d="M 17 15 C 16.48825 15 15.976437 15.195438 15.585938 15.585938 C 14.804937 16.366937 14.804937 17.633063 15.585938 18.414062 L 29.171875 32 L 15.585938 45.585938 C 14.804938 46.366938 14.804937 47.633063 15.585938 48.414062 C 15.976937 48.805062 16.488 49 17 49 C 17.512 49 18.023062 48.805062 18.414062 48.414062 L 32 34.828125 L 45.585938 48.414062 C 45.976938 48.805062 46.488 49 47 49 C 47.512 49 48.023063 48.805062 48.414062 48.414062 C 49.195063 47.633062 49.195062 46.366937 48.414062 45.585938 L 34.828125 32 L 48.414062 18.414062 C 49.195063 17.633063 49.195062 16.366937 48.414062 15.585938 C 47.633062 14.804937 46.366937 14.804937 45.585938 15.585938 L 32 29.171875 L 18.414062 15.585938 C 18.023563 15.195437 17.51175 15 17 15 z"></path>
                </svg>
            </div>
           <div>
               @foreach($content as $item)

                   @switch($item['type'])

                       @case('text')
                           <div class="mb-8">
                               {!! $item['data']['content'] !!}
                           </div>
                       @break

                      @case('image')
                            <div class="mb-8">
                                 <img class="rounded" src="{{ $item['data']['image'] }}" alt="{{ $item['data']['alt'] }}">
                            </div>
                       @break

                      @case('link')
                            <div class="text-center">
                                <a class="px-4 py-2 rounded {{ $item['data']['customClasses'] }}" href="{{ $item['data']['link'] }}" class="text-blue-500">{{ $item['data']['label'] }}</a>
                            </div>
                        @break


                   @endswitch

               @endforeach
           </div>
        </div>
    </div>
</div>
