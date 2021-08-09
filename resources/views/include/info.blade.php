<div class="info-gundar">
    <div class="flex__container">
        <a href="http://staffsite.gunadarma.ac.id/" target="_blank">Staffsite</a>
        <a href="https://studentsite.gunadarma.ac.id/" target="_blank">Studensite</a>
        <a href="http://career.gunadarma.ac.id/" target="_blank">CareerCenter</a>
        @auth
            @if (auth()->user()->role != 'student')
                <a href="http://international.gunadarma.ac.id/web/admin/" target="_blank">AdminSite</a>
            @endif
        @endauth
    </div>
</div>