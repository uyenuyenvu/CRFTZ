@extends('layouts.master')
@section('content')
    <div class='contact'>
        <div class="contact__header">
            <div class='contact__header__title'>
                <div class="title-sub">
                    (サポート)
                </div>
                <div class="title-text">
                    CONTACT
                </div>
            </div>
        </div>
        <div class="top-line">
            <div class="index" id="event">1 
                <div class="text">(入力)</div>
            </div>
            <div class="index">2 
                <div class="text">(確認)</div>
            </div>
            <div class="index">3 
                <div class="text">(完了)</div>
            </div>
            <div class="line"></div>
        </div>
        <div class="form-input">
            <div class="item">
                <div class="item-title">
                    お問合せ項目
                </div>
                <select>
                    <option value="1">選択してください</option>
                    <option value="2">リノベーションの相談</option>
                    <option value="3">その他についてご相談</option>
                </select>
                <div class="item-title" id="hidden-pc">
                    お名前
                </div>
                <input type="text" class="item-input" placeholder="例) 姓 名">
            </div>
            <div class="item">
                <div class="item-title">
                    電話番号
                </div>
                <input type="text" class="item-input" placeholder="例) 00-0000-0000">
            </div>
            <div class="item">
                <div class="item-title">
                    メールアドレス
                </div>
                <input type="text" class="item-input" placeholder="例) info@gmail.com">
            </div>
            <div class="item">
                <div class="item-title">
                    お問合せ内容
                </div>
                <textarea class="item-textarea" rows="16" cols="500" placeholder="お問い合わせ内容を記入ください。"></textarea>
            </div>
            <div class="attention">
                お客様の個人情報の利用目的などについて、ご送信前に必ず<span>プライバシーに関するポリシー</span>をご確認頂きご送信ください。 ご入力いただいた個人情報は、弊社の個人情報保護方針及び個人情報の取扱い方針に従い、厳重に管理いたします。
            </div>
            <div class="opinion">
                <input type="checkbox" id="opinion-input"/>
                <label for="opinion-input">個人情報の取り扱いについて同意する</label>
            </div>
            <div class="send">SEND</div>
        </div>
    </div>

@endsection
