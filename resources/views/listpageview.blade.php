@extends('template.base')
@section('content')
    <!-- Content-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    {{-- Title --}}
                    @switch($type)
                        @case("NEWS")
                            <h2 class="mt-0">Berita</h2>
                            @break
                        @case("EVENT")
                            <h2 class="mt-0">Event</h2>
                            @break
                        @default
                    @endswitch
                    <hr class="divider my-4" />
                </div>
                <div class="col-lg-12">
                    {{-- List Content --}}
                    <div class="row">
                        @forelse ($list as $index=>$item)
                            <div class="col mb-3">
                                <a href="/{{strtolower($type)}}/{{$current}}/{{$index}}">
                                    <div class="card p-2" style="width: 20rem;">
                                        
                                        @switch($type)
                                            @case("NEWS")
                                                <img width = 100%; height = 100%  style="object-fit: contain;" src="{{$item['img']}}">
                                                @break
                                            @case("EVENT")
                                                <img width = 100%; height = 100%  style="object-fit: contain;" src="{{$item['image']}}">
                                                @break
                                            @default
                                        @endswitch

                                        <div class ="card-title mt-3 text-center"> 
                                            <h6>{{ $item['title'] }}</h6>
                                        </div>
                                        <div class="card-subtitle text-muted">
                                            <p style="font-size: 10pt"> {{$item['date']}} </p>
                                        </div>
                                    </div>   
                                </a> 
                            </div>                
                        @empty
                            <h4>Data not found</h4>
                        @endforelse
                    </div>
                </div>
                <div class="col-lg-8">
                    <nav aria-label="page navigation">
                        <ul class="pagination pagination-md justify-content-center">
                            
                            {{-- First Page --}}
                            @if ($current == 1)
                                <li class="page-item active"><a class="page-link" href="/{{strtolower($type)}}/1/#contact">First</a></li>    
                            @else
                                <li class="page-item"><a class="page-link" href="/{{strtolower($type)}}/1/#contact">First</a></li>
                            @endif
                            
                            {{-- Mid Page --}}
                            @php
                               $currentF = 2;
                               $currentL = 6;
                            @endphp

                            @if ($current >= $currentL && $current <= $last-2)
                                @php
                                    $currentF = $current - 2;     
                                    $currentL = $current + 2;
                                @endphp
                            @elseif($current >= $currentL && $current >= $last-2)
                                @php
                                    $currentF = $current - 2;
                                    $currentL = $last - 1;
                                @endphp
                            @endif

                            @for ($i = $currentF; $i <= $currentL; $i++)
                                @if ($i == $current)
                                    <li class="page-item active" aria-current="page"><a class="page-link" href="/{{strtolower($type)}}/{{$i}}/#contact">{{$i}}</a></li>        
                                @else 
                                    <li class="page-item" aria-current="page"><a class="page-link" href="/{{strtolower($type)}}/{{$i}}/#contact">{{$i}}</a></li>
                                @endif
                            @endfor
                            
                            {{-- Last Page --}}
                            @if ($current == $last)
                                <li class="page-item active"><a class="page-link" href="/{{strtolower($type)}}/{{$last}}/#contact">Last</a></li>    
                            @else
                                <li class="page-item"><a class="page-link" href="/{{strtolower($type)}}/{{$last}}/#contact">Last</a></li>    
                            @endif
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
@endsection