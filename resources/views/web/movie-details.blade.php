@extends('web.template.main')
@section('title', $pelicula->titulo)
@section('content')
    <div class="review-content">
        <!-- COPIAR CONTENIDO DE ESTA ETIQUETA DE "reviews.blade.php" -->
        <div class="top-header span_top">
            <div class="logo">
                <a href="index.html"><img src="{{ asset('web/images/logo.png') }} " alt="" /></a>
                <p>Movie Theater</p>
            </div>
            <div class="search v-search">
                <form>
                    <input type="text" value="Search.." onfocus="this.value = '';"
                        onblur="if (this.value == '') {this.value = 'Search..';}" />
                    <input type="submit" value="">
                </form>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="reviews-section">
            <h3 class="head">Movie Reviews</h3>
            <div class="col-md-9 reviews-grids">
                <div class="review">
                    <!-- COPIAR DE "reviews.blade.php" TODA LA ETIQUETA "review" -->
                    <div class="movie-pic">
                        <a href="single.html">
                            <img src="{{ asset('imagenes/pelicula/' . $pelicula->imagenes[0]->nombre) }} " alt="" />
                        </a>
                    </div>
                    <div class="review-info">
                        <a class="span" href="single.html">{{ $pelicula->titulo }}</a>
                        <p class="dirctr">Estreno
                            {{ Carbon\Carbon::parse($pelicula->estreno)->isoFormat('D [de] MMMM [de] YYYY') }}
                        </p>
                        <p class="ratingview">Critic's Rating:</p>
                        <div class="rating">
                            <span>☆</span>
                            <span>☆</span>
                            <span>☆</span>
                            <span>☆</span>
                            <span>☆</span>
                        </div>
                        <p class="ratingview">
                            &nbsp;3.5/5
                        </p>
                        <div class="clearfix"></div>
                        <p class="ratingview c-rating">Avg Readers' Rating:</p>
                        <div class="rating c-rating">
                            <span>☆</span>
                            <span>☆</span>
                            <span>☆</span>
                            <span>☆</span>
                            <span>☆</span>
                        </div>
                        <p class="ratingview c-rating">
                            &nbsp; 3.3/5</p>
                        <div class="clearfix"></div>
                        <div class="yrw">
                            <div class="dropdown-button">
                                <select class="dropdown" tabindex="9" data-settings='{"wrapperClass":"flat"}'>
                                    <option value="0">Your rating</option>
                                    <option value="1">1.Poor</option>
                                    <option value="2">1.5(Below average)</option>
                                    <option value="3">2.Average</option>
                                    <option value="4">2.5(Above average)</option>
                                    <option value="5">3.Watchable</option>
                                    <option value="6">3.5(Good)</option>
                                    <option value="7">4.5(Very good)</option>
                                    <option value="8">5.Outstanding</option>
                                </select>
                            </div>
                            <div class="rtm text-center">
                                <a href="#">REVIEW THIS MOVIE</a>
                            </div>
                            <div class="wt text-center">
                                <a href="#">WATCH THIS TRAILER</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <table class="table">
                            <tr>
                                <td>CAST:</td>
                                <td>
                                    Will Smith, Margot Robbie, Adrian Martinez, Rodrigo Santoro, BD Wong, Robert Taylor
                                </td>
                            </tr>
                            <tr>
                                <td>DIRECTORES:</td>
                                <td>
                                    @foreach ($pelicula->directores as $director)
                                        {{ $director->nombre }},
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <td>GENERO:</td>
                                <td>
                                    {{ $pelicula->genero->genero }}
                                </td>
                            </tr>
                            <tr>
                                <td>DURATION:</td>
                                <td>1 hour 45 minutes</td>
                            </tr>
                        </table>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <h4 style="margin-top: 20px; margin-bottom: 10px;">RESUMEN</h4>
                <div>{!! $pelicula->resumen !!}</div>
            </div>
            <div class="col-md-3 side-bar">
                <x-genero-list titulo="Todos los Géneros" :mostrar-contador="true" />
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
@endsection
