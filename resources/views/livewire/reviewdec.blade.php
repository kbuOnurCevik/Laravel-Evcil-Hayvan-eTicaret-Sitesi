@if(session()->has('message'))
    <div class="alert alert-success">
        {{session('message')}}
    </div>
@endif

<form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact"
      wire:submit.prevent="store">
    @csrf

    <div class="col-lg-12">
        <div class="row row-20 row-md-30">


            <div class="col-sm-12">
                <div class="form-wrap">
                    <p style="color: #0d0a0a"><strong>Konu Giriniz.</strong></p>
                    <input class="form-input" wire:model="subject" type="text" placeholder="Konu"/>
                    @error('subject')<span class="text-danger">{{$message}}</span>@enderror
                </div>
            </div>


            <div class="col-sm-12">
                <div class="form-wrap">
                    <p style="color: #0d0a0a"><strong>Yorum Giriniz.</strong></p>
                    <input class="form-input" type="text" wire:model="review" placeholder="Yorum">
                    @error('review')<span class="text-danger">{{$message}}</span>@enderror
                </div>
            </div>

        </div>
    </div>


    <br>
    @auth
        <button class="button button-lg button-primary button-zakaria" style="background-color:#0f6848;color: #FFFFFF" type="submit">Comment</button>
    @else
        <a href="/home" class="button button-lg button-primary button-zakaria">For Submit Your Review, Please Login</a>
    @endauth


</form>
