@extends('layouts.master')
@section('content')
    <section class="who-we-are site">
        <div class="title-design">
            <div class="small-text">
                (デザイン)
            </div>
            <div class="title-main">
                DESIGN
            </div>
        </div>
        <div class="who-we-are__top">
            <div class="top--line">
                <hr>
                <div class="dots">
                    <div class="item-dot"></div>
                    <div class="item-dot"></div>
                    <div class="item-dot"></div>
                    <div class="item-dot mb-hide"></div>
                    <div class="item-dot mb-hide"></div>
                </div>
            </div>
            <div class="top--content">
                <div class="top--content__text">DESIGN</div>
                <div class="top--content__text">DESIGN</div>
                <div class="top--content__text">DESIGN</div>
            </div>
        </div>
    </section>
    <section class="planet site">
        <div class="title-planet">
            時代も、テイストも思いのまま。<br> 理想のデザインをその道の <br class="mb-show"> スペシャリストで。
        </div>
        <div class="planet-chart">
            <img src="{{ asset('images/design/planet.png') }}" alt="" class="bg-planet">
            <div class="item-planet">
                <div class="layout-animation">
                    <img src="{{ asset('images/design/natural.svg') }}" alt="" class="image-1">
                    <img src="{{ asset('images/design/urban.svg') }}" alt="" class="image-2">
                    <img src="{{ asset('images/design/contermponary.svg') }}" alt="" class="image-3">
                    <img src="{{ asset('images/design/modern.svg') }}" alt="" class="image-4">
                    <img src="{{ asset('images/design/traditional.svg') }}" alt="" class="image-5">
                    <img src="{{ asset('images/design/vintage.svg') }}" alt="" class="image-6">
                    <img src="{{ asset('images/design/resort.svg') }}" alt="" class="image-7">
                </div>
            </div>
        </div>
    </section>
    <section class="site">
        <div class="design-desciption">
            <div class="title-description">
                あなたのこだわりを 実現します
            </div>
            <div class="content-description">
                あらゆる住まいのデザインを時代/テイストで区分し、大枠の7つのスタイルからカラー/素材/ 光にこだわりあなただけの理想のスタイルを。スタイルの組み合わせやオリジナル家具の制作など最後まで高いデザイン性を追求した提案を実現。<br> アート、アパレルなど様々な背景のデザインコーディネーターが寄り添ってプランを完成させます。
            </div>
        </div>
    </section>
    <section class="style-block site">
        <div class="title-style">
            STYLES
        </div>
        <div class="small-text">（デザインスタイル）</div>
    </section>

@endsection
