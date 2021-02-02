@extends('template.base')
@section('content')
    <!-- Content-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    @switch($type)
                        @case("TOURISM")
                            <h2 class="mt-0">Pariwisata</h2>
                            @break
                        @case("CULINARY")
                            <h2 class="mt-0">Kuliner</h2>
                            @break
                        @case("SOUVENIR")
                            <h2 class="mt-0">Oleh-oleh</h2>
                            @break
                        @case("LODGING")
                            <h2 class="mt-0">Penginapan</h2>    
                            @break
                        @default
                            
                    @endswitch

                    <hr class="divider my-4" />

                    @forelse ($list as $item)
                    <a href="">
                        <img src="">
                        {{ $item['title'] }}
                    </a>
                    <br>
                    @empty
                    <h4>Data not found</h4>
                    @endforelse
                </div>
            </div>
        </div>
    </section>
@endsection