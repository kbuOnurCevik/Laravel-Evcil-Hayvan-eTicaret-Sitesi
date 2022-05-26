<div>
    <input wire:model="search" name="search" type="text" class="input to-search" list="mylist"
           placeholder="Ürün Ara"/>

    <button class="to-search-form-submit fl-bigmug-line-search74"
            type="submit"></button>

    @if(!empty($query))
        <datalist id="mylist">
            @foreach($datalist as $rs)
                <option value="{{$rs->title}}">{{$rs->category->title}}</option>
            @endforeach
        </datalist>
    @endif

</div>
