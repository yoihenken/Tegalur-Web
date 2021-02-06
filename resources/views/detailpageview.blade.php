@extends('template.base')
@section('content')
    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <h2 class="mt-0">{{ $list['title'] }}</h2>
                    <hr class="divider my-4" />
                    <br><br>
                </div>
                
                @switch($type)
                    @case("NEWS")
                        <div class="col-lg-12 text-center">
                            <img src="{{ $list['img'] }}">
                        </div>
                        <div class="col-lg-10 mt-5 text-justify">
                            <table align="center">
                                <tr>
                                    <td><b>Tanggal &nbsp;</b></td>
                                    <td>&nbsp; : &nbsp;</td>
                                    <td>&nbsp; {{$list['tanggal']}} </td>
                                </tr>
                                <tr>
                                    <td><b>Penulis &nbsp;</b></td>
                                    <td>&nbsp; : &nbsp;</td>
                                    <td>&nbsp; {{$list['penulis']}} </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-lg-10 mt-5 text-justify">
                            {{$list['isi']}}
                        </div>
                        @break
                    @case("EVENT")
                        <div class="col-lg-12 text-center mb-2">
                            <img height="80%" width="60%" src="{{ $list['image'] }}">
                        </div>
                        <div class="col-lg-10 text-justify">
                            {{ $list['content'] }}
                        </div>    
                        @break
                    @default
                @endswitch
            </div>
        </div>
    </section>
@endsection