{{-- Plain-HTML copy of the Vue solutions pages, for crawlers that do not run JavaScript (rendered inside <noscript>). --}}
@php($labels = $data['labels'])
<header>
    <a href="/">{{ $labels['home'] }}</a> / <a href="/solutions">{{ $labels['solutions'] }}</a>
</header>
<main>
@if ($page)
    <h1>{{ $page['h1'] }}</h1>
    <p>{{ $page['lead'] }}</p>

    <h2>{{ $labels['problem'] }}</h2>
    @foreach ($page['problem']['paragraphs'] as $p)
        <p>{{ $p }}</p>
    @endforeach

    <h2>{{ $labels['costs'] }}</h2>
    <ul>
        @foreach ($page['costs']['items'] as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>

    <h2>{{ $labels['approach'] }}</h2>
    <ol>
        @foreach ($page['approach']['steps'] as $step)
            <li><h3>{{ $step['title'] }}</h3><p>{{ $step['text'] }}</p></li>
        @endforeach
    </ol>

    <h2>{{ $labels['tech'] }}</h2>
    <p>{{ $page['tech']['intro'] }}</p>
    <ul>
        @foreach ($page['tech']['items'] as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>

    <h2>{{ $labels['faq'] }}</h2>
    @foreach ($page['faq'] as $faq)
        <h3>{{ $faq['q'] }}</h3>
        <p>{{ $faq['a'] }}</p>
    @endforeach

    <h2>{{ $labels['related'] }}</h2>
    <ul>
        @foreach ($page['related'] as $rel)
            <li><a href="/solutions/{{ $rel }}">{{ $data['pages'][$rel]['card_title'] }}</a>: {{ $data['pages'][$rel]['summary'] }}</li>
        @endforeach
    </ul>
@else
    <h1>{{ $data['index']['hero_title'] }}</h1>
    <p>{{ $data['index']['hero_description'] }}</p>
    <p>{{ $data['index']['intro'] }}</p>
    <ul>
        @foreach ($data['order'] as $slug)
            <li><a href="/solutions/{{ $slug }}">{{ $data['pages'][$slug]['card_title'] }}</a>: {{ $data['pages'][$slug]['summary'] }}</li>
        @endforeach
    </ul>
@endif
    <h2>{{ $labels['cta_title'] }}</h2>
    <p>{{ $labels['cta_text'] }}</p>
    <p><a href="/contact">{{ $labels['cta_button'] }}</a></p>
</main>
