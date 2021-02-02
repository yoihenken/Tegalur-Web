@extends('template.base')
@section('content')
    <!-- Content-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="mt-0">Pariwisata</h2>
                    <hr class="divider my-4" />

                    @forelse ($list as $item)
                    <a href=""><img src="">{{ $item['title'] }}</a><br>
                    @empty
                    <h4>Data not found</h4>
                    @endforelse
                </div>
            </div>
        </div>
    </section>
@endsection