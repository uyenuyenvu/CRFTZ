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
    <section class="designSlide site">
        <div class="swiper" id="mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{{ asset('images/slide/sl0.png') }}">
                    <div class="small-text">(01)</div>
                    <div class="title-slide">
                        MODERN
                    </div>
                    <div class="des-slide">
                        白/黒/グレー/ベージュといったトレンドカラーを軸に洗練を感じる建材でまとめるデザインスタイル。一流アパレル店を彷彿とさせるトーンとテクスチャーを自由な光表現で装飾し実現。
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/slide/sl1.png') }}">
                    <div class="small-text">(02)</div>
                    <div class="title-slide">
                        VINTAGE
                    </div>
                    <div class="des-slide">
                        木材など温かみのある材質を軸に年月の変化を荘厳なデザインで暮らしに取り入れるスタイル。 いつ帰ってきても変わらない安心感と落ち着きを、発展と共存させる細部までの色調演出や照明デザインを。
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/slide/sl7.png') }}">
                    <div class="small-text">(03)</div>
                    <div class="title-slide">
                        RESORT
                    </div>
                    <div class="des-slide">
                        一足踏み入れると自分だけのオアシス。贅沢なリラックスを有機的なデザインでまとめたスタイル。 空間の贅沢な活用と解放を軸に、毎日のやすらぎを統一されたトーンと"自分専用の間取り"で実現。
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/slide/sl2.png') }}">
                    <div class="small-text">(04)</div>
                    <div class="title-slide">
                        TRADITIONAL
                    </div>
                    <div class="des-slide">
                        伝統的なデザインを現代技術で再現する古今融合スタイル。落ち着きの中に遊び心を。 現代的な質感の建材とアンティークの融合で革新と伝統を実現。
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/slide/sl3.png') }}">
                    <div class="small-text">(05)</div>
                    <div class="title-slide">
                        NATURAL
                    </div>
                    <div class="des-slide">
                        緑を取り入れた暮らしを。近代デザインの住宅空間をナチュラルテクスチャーのデザインで統一。 時間やシーンに合わせた自然光の活用から、暮らしやすいユニバーサルデザインで実現。
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/slide/sl4.png') }}">
                    <div class="small-text">(06)</div>
                    <div class="title-slide">
                        URBAN
                    </div>
                    <div class="des-slide">
                        最新IOTと共存する都会の暮らしを、生活様式に合わせてまとめるスタイル。 最新の海外建材を用いた自由なカラーリングとオーダーメイド家具(カウンター/テーブルetc)でのデザイン表現で実現。
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/slide/sl6.png') }}">
                    <div class="small-text">(07)</div>
                    <div class="title-slide">
                        CONTEMPOLARY
                    </div>
                    <div class="des-slide">
                        デザインの取捨選択を行い、主題となるデザインテーマをミニアルに表現するスタイル。 自分だけの秘密基地を、自分ならではの好みと狙いでまとめ、オンリーワンの空間を。
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
