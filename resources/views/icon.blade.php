<div class="gunadarma__icons">
    <div class="container">
        <div class="row row-cols-2 row-cols-lg-4 gx-md-5 gx-4 gy-0 justify-content-between">
            <div class="col">
                <div class="gunadarma__icon">
                    <div class="iconBox">
                        <img src="{{ Storage::url($icon1->thumbnail) }}" alt="medal" />
                    </div>
                    <div class="content">
                        <p>{{$title1->value}}</p>
                        <p>{{$content1->value}}</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="gunadarma__icon">
                    <div class="iconBox">
                        <img src="{{ Storage::url($icon2->thumbnail) ?? asset('assets/images/icons/medal.png') }}" alt="medal" />
                    </div>
                    <div class="content">
                        <p>{{$title2->value}}</p>
                        <p>{{$content2->value}}</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="gunadarma__icon">
                    <div class="iconBox">
                        <img src="{{ Storage::url($icon3->thumbnail) }}" alt="medal" />
                    </div>
                    <div class="content">
                        <p>{{$title3->value}}</p>
                        <p>{{$content3->value}}</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="gunadarma__icon">
                    <div class="iconBox">
                        <img src="{{ Storage::url($icon4->thumbnail) }}" alt="medal" />
                    </div>
                    <div class="content">
                        <p>{{$title4->value}}</p>
                        <p>{{$content4->value}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
