@extends('layout')
@section('conteudo')
    <div class="container">
        <div class="row  justify-content-center">
                <ul class="image-grid col-lg-9 col-md-9 col-sm-12">
                  <li class="image-grid__item">
                      <a class="grid-item" href="https://medium.com/@vinicius.satoj/case-study-ux-ui-alpargatas-42bd0e70b851" target="_blank">
                      <div class="grid-item__image" style="background-image: url({{ URL::to('/') }}/img/projetos/Alpargatas/thumbnail_alpargatas.jpg)"></div>
                      </a>
                  </li>
                    <li class="image-grid__item">
                        <a class="grid-item" style="text-decoration:none" href="/projetos/NightNights">
                        <div class="grid-item__image" style="background-image: url({{ URL::to('/') }}/img/projetos/nightnights/thumbnail_nighnights2.png)"></div>
                        </a>
                    </li>
                    <li class="image-grid__item">
                        <a class="grid-item" href="/projetos/ImobiliariaCanal">
                        <div class="grid-item__image" style="background-image: url({{ URL::to('/') }}/img/projetos/imobiliaria_canal/thumbnail_ImobiliariaCanal2.png)"></div>
                        </a>
                    </li>
                    <li class="image-grid__item">
                        <a class="grid-item" href="/projetos/netshoes">
                        <div class="grid-item__image" style="background-image: url({{ URL::to('/') }}/img/projetos/netshoes/thumbnail_netshoes.jpg)"></div>
                        </a>
                    </li>

                </ul>
        </div>
    </div>
@endsection
