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
        <form action="{{route('send-contact-mail')}}" method="post" id="contact-form"
              data-notification="{{Session::has('notify')}}"
              data-notification-type='{{ Session::get('notify.type', '')  }}'
              data-notification-message='{{ Session::get('notify.message') }}'
            {{ Session::forget('notify')}}
        >
            @csrf
            <div class="form-input">
                <div class="item">
                    <div class="item-title">
                        お問合せ項目
                    </div>

                    <select name="subject" id="input-subject">
                        <option value="">選択してください</option>
                        <option value="リノベーションの相談"
                                @if(old('subject') == 'リノベーションの相談') selected @endif>リノベーションの相談
                        </option>
                        <option value="その他についてご相談"
                                @if(old('subject') == 'その他についてご相談') selected @endif>その他についてご相談
                        </option>
                    </select>
                    @error('subject')
                    <div id="error-subject" class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror

                    <div class="item-title" id="hidden-pc">
                        お名前
                    </div>
                    <input type="text" name="name" class="item-input" id="input-name" placeholder="例) 姓 名"
                           value="{{old('name')}}">
                    @error('name')
                    <div id="error-name" class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="item">
                    <div class="item-title">
                        電話番号
                    </div>
                    <input type="text" name="phone" id="input-phone" class="item-input" placeholder="例) 00-0000-0000"
                           value="{{old('phone')}}">
                    @error('phone')
                    <div id="error-phone" class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="item">
                    <div class="item-title">
                        メールアドレス
                    </div>
                    <input type="text" name="email" id="email-email" class="item-input" placeholder="例) info@gmail.com"
                           value="{{old('email')}}">
                    @error('email')
                    <div id="error-email" class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="item">
                    <div class="item-title">
                        お問合せ内容
                    </div>
                    <textarea class="item-textarea" name="content" rows="16" cols="500" id="input-content"
                              placeholder="お問い合わせ内容を記入ください。">{{old('content')}}</textarea>
                    @error('content')
                    <div id="error-contact" class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="attention">
                    お客様の個人情報の利用目的などについて、ご送信前に必ず<span>プライバシーに関するポリシー</span>をご確認頂きご送信ください。
                    ご入力いただいた個人情報は、弊社の個人情報保護方針及び個人情報の取扱い方針に従い、厳重に管理いたします。
                </div>
                <div class="opinion">
                    <input type="checkbox" id="opinion-input" name="confirm"/>
                    <label for="opinion-input">個人情報の取り扱いについて同意する</label>
                </div>
                <div class="text-center">
                    <button class="send" id="btn-submit" type="button">SEND</button>
                </div>
            </div>

        </form>
    </div>

@endsection
@section('script_custom')
    @vite('resources/js/contact.js')
@endsection
