@extends('template')

@section('isicontent')
    
    <div class="webgl-content">
      <div id="unityContainer" style="width: 1280px; height: 720px"></div>
      <div class="footer">
        <div class="webgl-logo"></div>
        <div class="fullscreen" onclick="unityInstance.SetFullscreen(1)"></div>
        <div class="title">AvaCreator</div>
      </div>
    </div>
@endsection