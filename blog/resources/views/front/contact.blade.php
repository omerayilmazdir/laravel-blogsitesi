@extends('front.layouts.master')
@section('title','İletişim')
@section('bg','https://startbootstrap.github.io/startbootstrap-clean-blog/assets/img/contact-bg.jpg')
@section('content')
    <div class="col-md-8 ">
        @if(session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
        @endif
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
       @endif
        <p>Bizimle iletişime geçebilirsiniz.</p>
        <div class="my-5">
            <form method="post" action="{{route('contact.post')}}">
                @csrf
                <div class="control-group">
                    <div class="form-group controls">
                        <label for="name">Ad Soyad</label>
                        <input class="form-control" name="name" type="text" value="{{old('name')}}" placeholder="Ad soyadınız..." required/>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group controls">
                        <label for="email">Email Adresi</label>
                        <input class="form-control" name="email" type="email" value="{{old('email')}}" placeholder="Email adresiniz..." required/>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group col-xs-12 controls">
                        <label>Konu</label>
                        <select class="form-control" name="topic">
                            <option @if(old('topic')=='Bilgi') selected @endif>Bilgi</option>
                            <option @if(old('topic')=='Destek') selected @endif>Destek</option>
                            <option @if(old('topic')=='Genel') selected @endif>Genel</option>
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group controls">
                        <label for="message">Mesajınız</label>
                        <textarea class="form-control" name="message" value="{{old('message')}}" placeholder="Mesajınız..."></textarea>
                    </div>
                </div>
                <br/>
                <div id="succes"></div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" id="sendMessageButton">Gönder</button>
                </div>
            </form>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card card-default">
            <div class="card-body">
                Panel Content
            </div>
            Örnek ÖRNEK örnek
        </div>
    </div>
@endsection

