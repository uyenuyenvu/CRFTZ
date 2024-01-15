@extends('layouts.master')
@section('content')
    <section class="who-we-are site">
        <div class="who-we-are__header position-relative">
            <div class="who-we-are__header__sub-title position-absolute">(クラフターズ)</div>
            <span class="who-we-are__header__title">EXPERIENCE THE ART OF DESIGN RENOVATION</span>
        </div>

        <div class="who-we-are__image">

            <img src="{{asset('images/company.png')}}" alt="company">
        </div>

        <div class="who-we-are__content company">
            <div class="item">
                <div class="who-we-are__content__title">
                    フルリノベーションなら クラフターズ
                </div>
                <div class="who-we-are__content__text">
                    <p>
                        CRFTZ(クラフターズ)はフルデザインリノベーションの専門家として、一人一人にデザイナーズ・ハウスを創り上げることに情熱を注いでいます。 人生で多くの時間を過ごすお家だからこそ、こだわりと理想を詰め込んだ作品を最高のデザインで。 洗練されたアートを熟練の匠と実現するCRFTZは、住まいのコンセプトからリノベーションの完成までのプロセス全体を丁寧にサポートし、新しい暮らしの可能性を広げます。一流デザイナー陣により有機的/無機的なデザインからヴィンテージ/モダンのスタイルまで、お客様一人一人の理想を抽出。オーダーメイドオリジナル家具も対応。
                    </p>
                    <p>
                        まるで一流商業内装のようなクオリティを一人一人の住まいに。 海外の建材の独占輸入や、弊社独自の職人ネットワークで「妥協のないデザイン」を追求し、オリジナル家具やオーダーメイドアート造作まで対応し、空間の演出を細部に至るまで設計しています。
                    </p>
                    <p>
                        提案から完成まで寄り添うワンクライアント・ワンチーム体制で日本の不動産市場にアート革命を。
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="values">
        <div class="values__main site">
            <div class="values__main--title">
                <div class="main-title">VALUES</div>
                <div class="main-sub-title">(私たちの価値)</div>
            </div>
            <div class="values__main--list values__list">
                <div class="values__item">
                    <div class="values__item--header">
                        <span class="values__item--header--number">
                            01
                        </span>
                        <span class="values__item--header--title">匠の技</span>
                    </div>
                    <div class="values__item--content">
                        <div class="values__item--content--title">プロ達だから安心。</div>
                        <div class="values__item--content--text">
                            ニューヨークで活躍していた大御所から、国内精鋭事務所出の新進気鋭のデザイナーまで。お客様の理想とするスタイルに合わせて、得意なデザイナーをアサインしクオリティを担保。 系統を突き詰めたデザイナーの手腕と、建材を知り尽くしたデザインコーディネーターの2名で理想を図面に詰め込みます。また、弊社独自の職人ネットワークで高い技術力を持つ職人を直接起用。中間コストを削減し、完成まで高い品質でお届けいたします。
                        </div>
                    </div>
                </div>
                <div class="values__item">
                    <div class="values__item--header">
                        <span class="values__item--header--number">
                            02
                        </span>
                        <span class="values__item--header--title">オリジナル建材</span>
                    </div>
                    <div class="values__item--content">
                        <div class="values__item--content--title">内装素材は唯一無二。</div>
                        <div class="values__item--content--text">
                            海外のデザイン建材/高級資材を国内でCRFTZが代理窓口として販売。商品数300以上。 内装の仕上がりを決める壁紙/タイル/ブロックなどのプロだからこそのこだわりと自由なデザイン選択肢の幅でオンリーワンのデザインクオリティを提供します。
                        </div>
                    </div>
                </div>
                <div class="values__item">
                    <div class="values__item--header">
                        <span class="values__item--header--number">
                            03
                        </span>
                        <span class="values__item--header--title">アート/オーダーメイド家具</span>
                    </div>
                    <div class="values__item--content">
                        <div class="values__item--content--title">自ら創出する。</div>
                        <div class="values__item--content--text">
                            デザインを叶えるキッチンカウンターがない。飾り棚もイメージと違う。 そんな時もCRFTZなら問題ありません。提携工房でのオーダーメイド家具やアートに対応。創りたいデザインを諦めないトップデザイナー達のこだわりを暮らしに。
                        </div>
                    </div>
                </div>

                <div class="values__item">
                    <div class="values__item--header">
                        <span class="values__item--header--number">
                            04
                        </span>
                        <span class="values__item--header--title">光デザイン</span>
                    </div>
                    <div class="values__item--content">
                        <div class="values__item--content--title">照明は内装のお化粧。</div>
                        <div class="values__item--content--text">
                            最後に決められがちな照明はデザインの重要なエッセンス。反射や溢れる光を計算し、照明効果を最大限にデザインへ。照明担当者による自然光/テープライト/
                            埋め込みライト含め様々な光の演出を検討し、最終デザインへと仕上げます。朝も夜も、理想のデザインで暮らす幸せを。
                        </div>
                    </div>
                </div>


                <div class="values__item">
                    <div class="values__item--header">
                        <span class="values__item--header--number">
                            05
                        </span>
                        <span class="values__item--header--title">音響デザイン</span>
                    </div>
                    <div class="values__item--content">
                        <div class="values__item--content--title">音と暮らす。</div>
                        <div class="values__item--content--text">
                            音楽が好きな方や、室内でビジネスをされるお客様には最高品質の音響設備を実装。 プロの音楽家が監修しメーカーを選定、空間全体の音の演出を実施。滞在時間を感じさせない演出も、会話が通るのに音楽が心地よい演出も、CRFTZならでは。
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="members site">
        <div class="members__header">
            Member
        </div>
        <div class="members__images">
            <div class="members__images--list">
                <div class="members__images--item">
                    <div class="members__images--item--thumbnail">
                        <img class="thumb" src="{{asset('images/member1.jpg')}}" alt="member2">
                        <div class="item-description" id="item-description-1">
                            <div class="text-des">
                                <p>
                                    慶應義塾大学/UCLA卒業後、P&G
                                    Japanに入社し、シニアブランドマネージャーを歴任。 東アジアマーケット
                                    マーケティング部新人王を受賞し、2021年にRemain in,Inc.創業後、同社CMOに就任。 
                                </p>
                                <p>
                                    2023年 6月 CRFTZ,Inc.を共同創業。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="members__images--item--name">
                        Daiki Yamaguchi
                    </div>
                </div>
                <div class="members__images--item">
                    <div class="members__images--item--thumbnail">
                        <img class="thumb" src="{{asset('images/member2.png')}}" alt="member2">
                        <div class="item-description" id="item-description-2">
                            <div class="text-des">
                                <p>
                                    慶應義塾大学/UCLA卒業後、P&G
                                    Japanに入社し、シニアブランドマネージャーを歴任。 東アジアマーケット
                                    マーケティング部新人王を受賞し、2021年にRemain in,Inc.創業後、同社CMOに就任。 
                                </p>
                                <p>
                                    2023年 6月 CRFTZ,Inc.を共同創業。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="members__images--item--name">
                        Naoto Motoyama
                    </div>
                </div>
            </div>
        </div>
        <div class="members__profileÍ"></div>
    </section>
    <section class="profile site">
        <div class="profile__header">
            Profile
        </div>
        <div class="profile__content">
            <div class="profile__content--item">
                <div class="profile__content--item--title">
                    会社名
                </div>
                <div class="profile__content--item--text">
                    株式会社クラフターズ
                </div>
            </div>
            <div class="profile__content--item">
                <div class="profile__content--item--title">
                    代表取締役
                </div>
                <div class="profile__content--item--text">
                    山口 大輝 <br>
                    元山 直人
                </div>
            </div>
            <div class="profile__content--item">
                <div class="profile__content--item--title">
                    設立
                </div>
                <div class="profile__content--item--text">
                    2023/9/25
                </div>
            </div>
            <div class="profile__content--item">
                <div class="profile__content--item--title">
                    設立
                </div>
                <div class="profile__content--item--text">
                    〒107-0062 <br>
                    東京都港区南青山3-3-3 <br>
                    リビエラ南青山ビルA402 <br>
                </div>
            </div>
            <div class="profile__content--item">
                <div class="profile__content--item--title">
                    電話番号
                </div>
                <div class="profile__content--item--text">
                    03-6824-2212
                </div>
            </div>
            <div class="profile__content--item">
                <div class="profile__content--item--title">
                    メールアドレス
                </div>
                <div class="profile__content--item--text">
                    info@crftz.com
                </div>
            </div>
            <div class="profile__content--item">
                <div class="profile__content--item--title">
                    事業内容
                </div>
                <div class="profile__content--item--text">
                    ・マンション/戸建の全面リフォーム  <br>
                    ・テナントオフィス・店舗の改装  <br>
                    ・新築住宅の設計/施工 ・建材の販売  <br>
                    ・オーダーメイド家具の製造/販売  <br>
                    ・資金計画のサポート
                </div>
            </div>
        </div>
    </section>
@endsection
