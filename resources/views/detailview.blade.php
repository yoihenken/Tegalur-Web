@extends('template.base')
@section('content')
    
    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="mt-0">{{ $list['title'] }}</h2>
                    <hr class="divider my-4" />
                    <img src="{{ $list['image'] }}">
                    <br><br>
                    @switch($type)
                        @case("TOURISM")
                                <p>
                                    <b>Address</b> <br>
                                    {{ $list['address'] }} <br><br>
                                    {{ $list['content'] }}
                                </p>
                            @break
                        @case("CULINARY")
                                <p>
                                    <b>Address</b> <br>
                                    {{ $list['address'] }} <br><br>
                                    {{ $list['content'] }}
                                </p>    
                            @break
                        @case("SOUVENIR")
                                <p>
                                    {{ $list['content'] }}
                                </p>
                            @break
                        @case("LODGING")
                            <table style="text-align: start">
                                <tr>
                                    <td>Address </td>
                                    <td> : </td>
                                    <td> {{ $list['address'] }}</td>
                                </tr>
                                <tr>
                                    <td>Telp. </td>
                                    <td> : </td>
                                    <td> {{ $list['phone'] }}</td>
                                </tr>
                                <tr>
                                    <td>Price </td>
                                    <td> : </td>
                                    <td> {{ $list['price'] }} </td>
                                </tr>
                                <tr>
                                    <td>Website </td>
                                    <td> : </td>
                                    <td> {{ $list['website'] }} </td>
                                </tr>
                            </table>
                            <br><br>
                            <p>
                                {{ $list['content'] }}
                            </p>
                            @break
                        @default
                            
                    @endswitch
                </div>
            </div>
        </div>
    </section>
@endsection