<?php
$links = [
    'DC COMICS' => ['Characters', 'Comics', 'Movies', 'TV', 'Games', 'Videos', 'News'],
    'SHOP' => ['Shop DC', 'Shop DC Collectibles'],
    'DC' => ['Term of Use', 'Privacy', 'Ad Choise', 'Advertising', 'Jobs', 'Subscriptions', 'Talent', 'CPSC Certificates', 'Ratings', 'Shop Help', 'Contactr Us'],
    'SITES' => ['Characters', 'Comics', 'Movies', 'TV', 'Games', 'Videos', 'News'],
];
?>

<footer>
    <div class="bg-footer">
        <div class="rightlinks">
            <div class=" linksbox">
                <div>
                    @foreach ($links as $key => $values)
                        @if ($key == 'DC COMICS')
                            <h4>{{ $key }}</h4>
                            <ul>
                                @foreach ($values as $val)
                                    <li><a href="">{{ $val }}</a></li>
                                @endforeach
                            </ul>
                        @endif
                        @if ($key == 'SHOP')
                            <h4>{{ $key }}</h4>
                            <ul>
                                @foreach ($values as $val)
                                    <li><a href="">{{ $val }}</a></li>
                                @endforeach
                            </ul>
                        @endif
                    @endforeach
                </div>
                <div>
                    @foreach ($links as $key => $values)
                        @if ($key == 'DC')
                            <h4>{{ $key }}</h4>
                            <ul>
                                @foreach ($values as $val)
                                    <li><a href="">{{ $val }}</a></li>
                                @endforeach
                            </ul>
                        @endif
                    @endforeach
                </div>
                <div>
                    @foreach ($links as $key => $values)
                        @if ($key == 'SITES')
                            <h4>{{ $key }}</h4>
                            <ul>
                                @foreach ($values as $val)
                                    <li><a href="">{{ $val }}</a></li>
                                @endforeach
                            </ul>
                        @endif
                    @endforeach
                </div>

            </div>
            <div class="copyright">
                <p class="m-0">All site contnet TM and c 2020 DC Entertainment, unless otherwise <a
                        href="">noted here</a>.All
                    right reseved.</p>
                <a class="m-0" href="">Cookies Setting</a>
            </div>
        </div>
        <div class="flogo">
            <img src="{{ asset('images/dc-logo-bg.png') }}" alt="">
        </div>
    </div>
</footer>
