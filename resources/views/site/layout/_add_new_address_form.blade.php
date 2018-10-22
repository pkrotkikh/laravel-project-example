<div class="l_col adrs">
    <h2>Add New Address</h2>

    <form action="{{route('user.address.create')}}" method="POST">
        {{ csrf_field() }}

        @if($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif

        <div class="field">
            <label>Name *</label>
            <input type="text" name="name" value="{{old('name')}}" palceholder="" class="vl_empty"/>
        </div>
        <div class="field">
            <label>Your city *</label>
            <select name="city" class="vl_empty">
                <option class="plh">{{old('city')}}</option>
                <option>City 1</option>
                <option>City 2</option>
            </select>
        </div>
        <div class="field">
            <label>Your area *</label>
            <select name="area">
                <option class="plh">{{old('area')}}</option>
                <option>Area 1</option>
                <option>Area 2</option>
            </select>
        </div>

        <div class="field">
            <label>Street</label>
            <input type="text" name="street" value="{{old('street')}}" palceholder="" class="vl_empty"/>
        </div>
        <div class="field">
            <label>House # </label>
            <input type="text" name="house" value="{{old('house')}}" palceholder="House Name / Number"/>
        </div>

        <div class="field">
            <label class="pos_top">Additional information</label>
            <textarea name="additional_information">{{old('additional_information')}}</textarea>
        </div>

        <div class="field">
            <input type="submit" value="add address" class="green_btn"/>
        </div>
    </form>
</div>