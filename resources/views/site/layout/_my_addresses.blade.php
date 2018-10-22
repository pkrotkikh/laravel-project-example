<div class="r_col">
    <h2>My Addresses</h2>

    <div class="uo_adr_list">
        @foreach($addresses as $address)
            <div class="item">

                <h3>{{$address->name}}</h3>

                <p>{{$address->city}},
                    {{$address->area}}
                    @if($address->street != null), {{$address->street}}@endif
                    @if($address->house != null), {{$address->house}}.@endif
                    @if($address->additional_information != null)<br>{{$address->additional_information}}.@endif<br/>
                </p>

                <div class="actbox">
                    <a href="{{route('user.address.delete',['userAddress'=>$address->id])}}" class="bcross"></a>
                </div>
            </div>
        @endforeach
    </div>
</div>