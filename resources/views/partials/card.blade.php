<div class="card">
    <div class="position-relative title-hover">
        <img src="{{ $el['thumb'] }}" alt="{{ $el['series'] }}">
        <div class="position-absolute opacity-0 d-flex justify-content-center w-100 titolo-prezzo">{{ $el['price'] }}
        </div>
        <div class="position-absolute opacity-0 d-flex justify-content-center w-100 type ">{{ $el['type'] }}
        </div>
    </div>
    <span class="span-el">{{ $el['title'] }}</span>
</div>
