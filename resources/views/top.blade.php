@extends('layouts.master')
@section('content')
    <section class="who-we-are site">
        <div class="who-we-are__top">
            <div class="top--line"></div>
            <div class="top--content">
                <div class="top--content__text">Who</div>
                <div class="top--content__text">We</div>
                <div class="top--content__text">Are</div>
            </div>
        </div>
        <div class="who-we-are__header position-relative">
            <div class="who-we-are__header__sub-title position-absolute">(クラフターズ)</div>
            <span class="who-we-are__header__title">EXPERIENCE THE ART OF DESIGN RENOVATION</span>
        </div>

        <div class="who-we-are__content">
            <div class="who-we-are__content-left item">

            </div>
            <div class="who-we-are__content-right item">
                <div class="who-we-are__content__title">
                    フルリノベーションなら クラフターズ
                </div>
                <div class="who-we-are__content__text">
                    CRFTZ(クラフターズ)はフルデザインリノベーションの専門家として、一人一人にデザイナーズ・ハウスを創り上げることに情熱を注いでいます。 人生で多くの時間を過ごすお家だからこそ、こだわりと理想を詰め込んだ作品を最高のデザインで。 洗練されたアートを熟練の匠と実現するCRFTZは、住まいのコンセプトからリノベーションの完成までのプロセス全体を丁寧にサポートし、新しい暮らしの可能性を広げます。一流デザイナー陣により有機的/無機的なデザインからヴィンテージ/モダンのスタイルまで、お客様一人一人の理想を抽出。オーダーメイドオリジナル家具も対応。
                </div>
                <div class="who-we-are__content__btn">
                    <a href="#" class="button">View more <img src="{{ asset('images/Union.svg') }}" alt="next-icon"></a>
                </div>
            </div>
        </div>
    </section>
    <section class="features-one site">
        <div class="features-one__header">
            <div class="features-one__header__sub-title position-absolute">(フルリノベーション)</div>
            <span class="features-one__header__title">YOUR SPACE WITH THE DESIGN.</span>

        </div>
        <div class="features-one__content">
            <div class="features-one__content--image">
                <img src="{{ asset('images/feature.png') }}" alt="feature">
            </div>
        </div>
    </section>
    <section class="model-room">
        <div class="model-room__top site">
            <div class="top--line"></div>
            <div class="top--content">
                <div class="top--content__text">Model</div>
                <div class="top--content__text">Room</div>
                <div class="top--content__text">Model</div>
            </div>
        </div>
        <div class="model-room__header site">
            <div class="header__text">
                設備や商品のサンプルだけでなく、リフォーム完成後の全体イメージを確認してみたいという声にお応えすべく、マンションの一室をまるごとリフォームし、モデルルームの準備を進めていますので、ご紹介します。完全予約制となっています。
            </div>
        </div>
        <div class="model-room__content ">
            <div class="site model-room__main">
                <div class="model-room__list">
                    <div class="model-room__item item">
                        <div class="model-room__item--left">
                            <div class="item__header">
                                <div class="item__header--title">AOYAMA</div>
                                <div class="item__header--sub-title">青山モデルルーム</div>
                            </div>
                            <div class="item__btn">
                                <a href="#">COMING SOON <img src="{{ asset('images/arrow-black.svg') }}"
                                                             alt="arrow"></a>
                            </div>
                        </div>
                        <div class="model-room__item--right position-relative">
                            <div class="item__image">
                                <img src="{{ asset('images/open.png') }}" alt="open">
                            </div>
                        </div>
                    </div>
                    <div class="model-room__item item">
                        <div class="model-room__item--left">
                            <div class="item__header">
                                <div class="item__header--title">AOYAMA</div>
                                <div class="item__header--sub-title">青山モデルルーム</div>
                            </div>
                            <div class="item__btn">
                                <a href="#">COMING SOON <img src="{{ asset('images/arrow-black.svg') }}"
                                                             alt="arrow"></a>
                            </div>
                        </div>
                        <div class="model-room__item--right position-relative">
                            <div class="item__image">
                                <img src="{{ asset('images/open.png') }}" alt="open">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="model-room__image">
                    <img src="{{ asset('images/model-room.png') }}" alt="model-room">
                </div>
            </div>
        </div>
    </section>
    <section class="faq site">
        <div class="faq__top">
            <div class="top--line"></div>
            <div class="top--content">
                <div class="top--content__text">FAQ</div>
                <div class="top--content__text">FAQ</div>
                <div class="top--content__text">FAQ</div>
            </div>
        </div>
        <div class="faq__content faq__list">
            <div class="faq__item">
                <p class="faq__item--btn">
                    <a data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
                       aria-controls="collapseExample">
                        <span class="btn-text">商業施設やPRイベントの内装は可能ですか？</span>
                        <img src="{{ asset('images/plus.svg') }}" alt="plus">

                    </a>
                </p>
                <div class="collapse" id="collapseExample">
                    <div class="faq__item--text">
                        Some placeholder content for the collapse component. This panel is hidden by default but
                        revealed when the user activates the relevant trigger.
                    </div>
                </div>
            </div>
            <div class="faq__item">
                <p class="faq__item--btn">
                    <a data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false"
                       aria-controls="collapseExample2">
                        <span class="btn-text">リフォーム/リノベーションの相場はどれくらいですか？</span>
                        <img src="{{ asset('images/plus.svg') }}" alt="plus">

                    </a>
                </p>
                <div class="collapse" id="collapseExample2">
                    <div class="faq__item--text">
                        Some placeholder content for the collapse component. This panel is hidden by default but
                        revealed when the user activates the relevant trigger.
                    </div>
                </div>
            </div>
            <div class="faq__item">
                <p class="faq__item--btn">
                    <a data-bs-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false"
                       aria-controls="collapseExample3">
                        <span class="btn-text">リフォーム/リノベーションにかかる期間はどのくらいですか？</span>
                        <img src="{{ asset('images/plus.svg') }}" alt="plus">

                    </a>
                </p>
                <div class="collapse" id="collapseExample3">
                    <div class="faq__item--text">
                        Some placeholder content for the collapse component. This panel is hidden by default but
                        revealed when the user activates the relevant trigger.
                    </div>
                </div>
            </div>
            <div class="faq__item">
                <p class="faq__item--btn">
                    <a data-bs-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false"
                       aria-controls="collapseExample4">
                        <span class="btn-text">デザインのアイディアがない場合でも相談できますか？</span>
                        <img src="{{ asset('images/plus.svg') }}" alt="plus">

                    </a>
                </p>
                <div class="collapse" id="collapseExample4">
                    <div class="faq__item--text">
                        Some placeholder content for the collapse component. This panel is hidden by default but
                        revealed when the user activates the relevant trigger.
                    </div>
                </div>
            </div>
            <div class="faq__item">
                <p class="faq__item--btn">
                    <a data-bs-toggle="collapse" href="#collapseExample5" role="button" aria-expanded="false"
                       aria-controls="collapseExample5">
                        <span class="btn-text">中古マンションのリノベーションは可能ですか？</span>
                        <img src="{{ asset('images/plus.svg') }}" alt="plus">

                    </a>
                </p>
                <div class="collapse" id="collapseExample5">
                    <div class="faq__item--text">
                        Some placeholder content for the collapse component. This panel is hidden by default but
                        revealed when the user activates the relevant trigger.
                    </div>
                </div>
            </div>
            <div class="faq__item">
                <p class="faq__item--btn">
                    <a data-bs-toggle="collapse" href="#collapseExample6" role="button" aria-expanded="false"
                       aria-controls="collapseExample6">
                        <span class="btn-text">施工保証やアフターサービスはありますか？</span>
                        <img src="{{ asset('images/plus.svg') }}" alt="plus">

                    </a>
                </p>
                <div class="collapse" id="collapseExample6">
                    <div class="faq__item--text">
                        Some placeholder content for the collapse component. This panel is hidden by default but
                        revealed when the user activates the relevant trigger.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="phone-contact">
        <a href="tel:03-6822-6906" class="button">
            <div class="phone-contact__content">
                <div class="phone-contact__content--title">電話でお問い合わせ</div>
                <div class="phone-contact__content--number">
                    (03-6822-6906)
                </div>
            </div>
            <div class="phone-contact__icon">
                <img src="{{ asset('images/phone.svg') }}" alt="phone">
            </div>
        </a>
    </div>

@endsection
