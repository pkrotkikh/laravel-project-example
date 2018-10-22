@extends('site.layout.main')

@section('content')

    <div class="page_content bg_gray">
        @include('site.layout._client_information')

        <div class="uo_body">
            <div class="wrapper">
                <div class="uofb cf">

                    @include('site.layout._add_new_address_form')

                    @include('site.layout._my_addresses')

                </div>
            </div>
        </div>
    </div>

@endsection