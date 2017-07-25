<div class="section row" id="section9">
    <div class="col-md-12 starter-section">
        <div class="col-md-12">
            @if($locale == 'ru')
                <img src="/img/headers/prog.svg" class="img-headers" alt="">
            @else
                <img src="/img/headers/en/schedule.svg" class="img-headers" alt="">
            @endif
        </div>
        <div class="col-md-12 programm-table">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item tab-item"> <a class="nav-link program-day active" href="#day1" role="tab" data-toggle="tab">День 1</a> </li>
                <li class="nav-item tab-item"> <a class="nav-link program-day" href="#day2" role="tab" data-toggle="tab">День 2</a> </li>
                <li class="nav-item tab-item"> <a class="nav-link program-day" href="#day3" role="tab" data-toggle="tab">День 3</a> </li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="day1">
                    <table class="table">
                        <tr>
                            <td></td>
                            <td>12.00</td>
                            <td>13.00</td>
                            <td>14.00</td>
                            <td>15.00</td>
                            <td>16.00</td>
                            <td>17.00</td>
                            <td>18.00</td>
                            <td>19.00</td>
                            <td>20.00</td>
                            <td>21.00</td>
                        </tr>
                        <tr>
                            <td>Main Stage</td>
                            <td>
                                <a href="#program" class="event-odd event-onehour event-white event-hover md-trigger"  data-modal="modal-2">Как формируется вкус виски<span class="icon-add">+</span></a>
                            </td>
                            <td>
                                <!-- <a href="#program" class="event-odd event-onehour event-yellow event-hover md-trigger" data-modal="modal-2">
                                  Реагировать – не значит действовать<span class="icon-add">+</span></a> -->
                            </td>
                            <td></td>
                            <td></td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td>      <a href="#pr" class="md-trigger" data-modal="modal-3">
                                    <button class="event-odd event-onehour event-white event-hover">Секреты и реальная история старинных классических рецептов<span class="icon-add">+</span></button></a>
                            </td>
                            <td> </td>
                        </tr>
                        <tr>
                            <td>Barometer education</td>
                            <td>
                                <button class="event-odd event-onehour event-white event-hover md-trigger" data-modal="modal-2">Как создавать продающие фотографии коктейлей, если ты не фотограф<span class="icon-add">+</span></button>
                            </td>
                            <td> </td>
                            <td> </td>
                            <td>
                                <button class="event-even event-twohours event-white event-hover">Как создавать продающие...<span class="icon-add">+</span></button>
                            </td>
                            <td> </td>
                            <td></td>
                            <td> </td>
                            <td>
                                <button class="event-even event-twohours event-white event-hover">Как создавать продающие...<span class="icon-add">+</span></button>
                            </td>
                            <td> </td>
                            <td> </td>
                        </tr>
                        <tr>
                            <td>Barometer school</td>
                            <td>
                                <button class="darknessmyfriend event-odd event-threehours event-white event-hover">Как создавать продающие...<span class="icon-add">+</span></button>
                            </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                        </tr>
                        <tr>
                            <td>Barometer Pro</td>
                            <td> </td>
                            <td> </td>
                            <td>
                                <button class="darknessmyfriend event-even event-threehours event-white event-hover">Взгляд на Джонни Уокер...<span class="icon-add">+</span></button>
                            </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                        </tr>
                        <tr>
                            <td>Degustation room #1</td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td>
                                <button class="darknessmyfriend event-odd event-white event-hover event-threehours">Как создавать продающие Как создавать продающие Как создавать продающие Как создавать продающие <span class="icon-add">+</span></button>
                            </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                        </tr>
                        <tr>
                            <td>Degustation room #2</td>
                            <td>
                                <button class="darknessmyfriend event-even event-onehour event-white event-hover">Как создавать продающие...<span class="icon-add">+</span></button>
                            </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td>
                                <button class="darknessmyfriend event-odd event-white event-hover event-threehours">В стремлении к совершенству <span class="icon-add">+</span></button>
                            </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                        </tr>
                    </table>

                    <div id="accordion" class="accordion-tabs" role="tablist" aria-multiselectable="true">
                        <div class="card">
                            <div class="card-header" role="tab" id="headingOne">
                                <h5 class="mb-0"> <a data-toggle="collapse" data-parent="#accordion" href="#day1-1" aria-expanded="true" aria-controls="day1-1"> Main stage 1 </a> </h5> </div>
                            <div id="day1-1" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                                <div class="card-block">
                                    <table class="table-bl">
                                        <tr>
                                            <td><span class="program-time">14.20 - 15.20</span></td>
                                            <td>
                                                <button class="event-even event-onehour event-yellow event-hover md-trigger" data-modal="modal-2">Как создавать продающие...<span class="icon-add">+</span></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span class="program-time">19.00 - 21.00</span></td>
                                            <td>
                                                <button class="event-even event-threehours event-white event-hover">Как создавать создавать создавать продающие...<span class="icon-add">+</span></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span class="program-time">19.00 - 21.00</span></td>
                                            <td>
                                                <button class="event-even event-threehours event-yellow event-hover">Как создавать создавать создавать продающие...<span class="icon-add">+</span></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span class="program-time">19.00 - 21.00</span></td>
                                            <td>
                                                <button class="event-even event-threehours event-white event-hover">Как создавать создавать создавать продающие...<span class="icon-add">+</span></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span class="program-time">19.00 - 21.00</span></td>
                                            <td>
                                                <button class="event-even event-threehours event-yellow event-hover">Как создавать создавать создавать продающие...<span class="icon-add">+</span></button>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="headingTwo">
                                <h5 class="mb-0"> <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#day1-2" aria-expanded="false" aria-controls="day1-2"> Education 1 </a> </h5> </div>
                            <div id="day1-2" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="card-block">
                                    <table class="table-bl">
                                        <tr>
                                            <td><span class="program-time">14.20 - 15.20</span></td>
                                            <td>
                                                <button class="event-even event-onehour event-yellow event-hover">Как создавать продающие...<span class="icon-add">+</span></button>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="headingThree">
                                <h5 class="mb-0"> <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#day1-3" aria-expanded="false" aria-controls="day1-3"> School 1 </a> </h5> </div>
                            <div id="day1-3" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="card-block">
                                    <table class="table-bl">
                                        <tr>
                                            <td><span class="program-time">14.20 - 15.20</span></td>
                                            <td>
                                                <button class="event-even event-onehour event-yellow event-hover">Как создавать продающие...<span class="icon-add">+</span></button>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="headingThree">
                                <h5 class="mb-0"> <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#day1-4" aria-expanded="false" aria-controls="day1-4"> Pro 1 </a> </h5> </div>
                            <div id="day1-4" class="collapse" role="tabpanel" aria-labelledby="headingFour">
                                <div class="card-block">
                                    <table class="table-bl">
                                        <tr>
                                            <td><span class="program-time">14.20 - 15.20</span></td>
                                            <td>
                                                <button class="event-even event-onehour event-yellow event-hover">Как создавать продающие...<span class="icon-add">+</span></button>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="day2">
                    <table class="table">
                        <tr>
                            <td></td>
                            <td><span class="program-time">12.00</span></td>
                            <td><span class="program-time">13.00</span></td>
                            <td><span class="program-time">14.00</span></td>
                            <td><span class="program-time">15.00</span></td>
                            <td><span class="program-time">16.00</span></td>
                            <td><span class="program-time">17.00</span></td>
                            <td><span class="program-time">18.00</span></td>
                            <td><span class="program-time">19.00</span></td>
                            <td><span class="program-time">20.00</span></td>
                            <td><span class="program-time">21.00</span></td>
                        </tr>
                        <tr>
                            <td>main stage</td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td>
                                <button class="event-even event-onehour event-yellow event-hover">Как создавать продающие...<span class="icon-add">+</span></button>
                            </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                        </tr>
                        <tr>
                            <td>education</td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td>
                                <button class="event-even event-twohours event-white event-hover">Как создавать продающие...<span class="icon-add">+</span></button>
                            </td>
                            <td> </td>
                            <td></td>
                            <td> </td>
                            <td>
                                <button class="event-even event-twohours event-white event-hover">Как создавать продающие...<span class="icon-add">+</span></button>
                            </td>
                            <td> </td>
                            <td> </td>
                        </tr>
                        <tr>
                            <td>school</td>
                            <td>
                                <button class="event-odd event-threehours event-white event-hover">Как создавать продающие...<span class="icon-add">+</span></button>
                            </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                        </tr>
                        <tr>
                            <td>pro</td>
                            <td> </td>
                            <td> </td>
                            <td>
                                <button class="event-even event-threehours event-yellow event-hover">Взгляд на Джонни Уокер...<span class="icon-add">+</span></button>
                            </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                        </tr>
                        <tr>
                            <td>degustation #1</td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td>
                                <button class="event-odd event-yellow event-hover event-threehours">Как создавать продающие <span class="icon-add">+</span></button>
                            </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                        </tr>
                        <tr>
                            <td>degustation #2</td>
                            <td>
                                <button class="event-even event-onehour event-yellow event-hover">Как создавать продающие...<span class="icon-add">+</span></button>
                            </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td>
                                <button class="event-odd event-yellow event-hover event-threehours">В стремлении к совершенству <span class="icon-add">+</span></button>
                            </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                        </tr>
                    </table>
                    <div id="accordion" class="accordion-tabs" role="tablist" aria-multiselectable="true">
                        <div class="card">
                            <div class="card-header" role="tab" id="headingOne">
                                <h5 class="mb-0"> <a data-toggle="collapse" data-parent="#accordion" href="#day2-1" aria-expanded="true" aria-controls="day2-1"> Main stage </a> </h5> </div>
                            <div id="day2-1" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                                <div class="card-block">
                                    <table class="table-bl">
                                        <tr>
                                            <td><span class="program-time"><span class="program-time"><span class="program-time"><span class="program-time">14.20 - 15.20</span></td>
                                            <td>
                                                <button class="event-even event-onehour event-yellow event-hover">Как создавать продающие...<span class="icon-add">+</span></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span class="program-time"><span class="program-time"><span class="program-time"><span class="program-time">19.00 - 21.00</span></td>
                                            <td>
                                                <button class="event-even event-threehours event-yellow event-hover">Как создавать создавать создавать продающие...<span class="icon-add">+</span></button>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="headingTwo">
                                <h5 class="mb-0"> <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#day2-2" aria-expanded="false" aria-controls="day2-2"> Education </a> </h5> </div>
                            <div id="day2-2" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="card-block">
                                    <table class="table-bl">
                                        <tr>
                                            <td><span class="program-time"><span class="program-time"><span class="program-time">14.20 - 15.20</span></td>
                                            <td>
                                                <button class="event-even event-onehour event-yellow event-hover">Как создавать продающие...<span class="icon-add">+</span></button>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="headingThree">
                                <h5 class="mb-0"> <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#day2-3" aria-expanded="false" aria-controls="day2-3"> School </a> </h5> </div>
                            <div id="day2-3" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="card-block">
                                    <table class="table-bl">
                                        <tr>
                                            <td><span class="program-time"><span class="program-time"><span class="program-time">14.20 - 15.20</span></td>
                                            <td>
                                                <button class="event-even event-onehour event-yellow event-hover">Как создавать продающие...<span class="icon-add">+</span></button>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="headingThree">
                                <h5 class="mb-0"> <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#day2-4" aria-expanded="false" aria-controls="day2-4"> Pro </a> </h5> </div>
                            <div id="day2-4" class="collapse" role="tabpanel" aria-labelledby="headingFour">
                                <div class="card-block">
                                    <table class="table-bl">
                                        <tr>
                                            <td><span class="program-time"><span class="program-time">14.20 - 15.20</span></td>
                                            <td>
                                                <button class="event-even event-onehour event-yellow event-hover">Как создавать продающие...<span class="icon-add">+</span></button>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="day3">
                    <table class="table">
                        <tr>
                            <td></td>
                            <td><span class="program-time"><span class="program-time">12.00</span></td>
                            <td><span class="program-time"><span class="program-time">13.00</span></td>
                            <td><span class="program-time"><span class="program-time">14.00</span></td>
                            <td><span class="program-time"><span class="program-time">15.00</span></td>
                            <td><span class="program-time"><span class="program-time">16.00</span></td>
                            <td><span class="program-time"><span class="program-time">17.00</span></td>
                            <td><span class="program-time"><span class="program-time">18.00</span></td>
                            <td><span class="program-time"><span class="program-time">19.00</span></td>
                            <td><span class="program-time"><span class="program-time">20.00</span></td>
                            <td><span class="program-time"><span class="program-time">21.00</span></td>
                        </tr>
                        <tr>
                            <td>main stage</td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td>
                                <button class="event-even event-onehour event-yellow event-hover">Как создавать продающие...<span class="icon-add">+</span></button>
                            </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                        </tr>
                        <tr>
                            <td>education</td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td>
                                <button class="event-even event-twohours event-white event-hover">Как создавать продающие...<span class="icon-add">+</span></button>
                            </td>
                            <td> </td>
                            <td></td>
                            <td> </td>
                            <td>
                                <button class="event-even event-twohours event-white event-hover">Как создавать продающие...<span class="icon-add">+</span></button>
                            </td>
                            <td> </td>
                            <td> </td>
                        </tr>
                        <tr>
                            <td>school</td>
                            <td>
                                <button class="event-odd event-threehours event-white event-hover">Как создавать продающие...<span class="icon-add">+</span></button>
                            </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                        </tr>
                        <tr>
                            <td>pro</td>
                            <td> </td>
                            <td> </td>
                            <td>
                                <button class="event-even event-threehours event-yellow event-hover">Взгляд на Джонни Уокер...<span class="icon-add">+</span></button>
                            </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                        </tr>
                        <tr>
                            <td>degustation #1</td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td>
                                <button class="event-odd event-yellow event-hover event-threehours">Как создавать продающие <span class="icon-add">+</span></button>
                            </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                        </tr>
                        <tr>
                            <td>degustation #2</td>
                            <td>
                                <button class="event-even event-onehour event-yellow event-hover">Как создавать продающие...<span class="icon-add">+</span></button>
                            </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td>
                                <button class="event-odd event-yellow event-hover event-threehours">В стремлении к совершенству <span class="icon-add">+</span></button>
                            </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                        </tr>
                    </table>
                    <div id="accordion" class="accordion-tabs" role="tablist" aria-multiselectable="true">
                        <div class="card">
                            <div class="card-header" role="tab" id="headingOne">
                                <h5 class="mb-0"> <a data-toggle="collapse" data-parent="#accordion" href="#day3-1" aria-expanded="true" aria-controls="day3-1"> Main stage </a> </h5> </div>
                            <div id="day3-1" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                                <div class="card-block">
                                    <table class="table-bl">
                                        <tr>
                                            <td><span class="program-time">14.20 - 15.20</span></td>
                                            <td>
                                                <button class="event-even event-onehour event-yellow event-hover">Как создавать продающие...<span class="icon-add">+</span></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span class="program-time">19.00 - 21.00</span></td>
                                            <td>
                                                <button class="event-even event-threehours event-yellow event-hover">Как создавать создавать создавать продающие...<span class="icon-add">+</span></button>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="headingTwo">
                                <h5 class="mb-0"> <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#day3-2" aria-expanded="false" aria-controls="day3-2"> Education </a> </h5> </div>
                            <div id="day3-2" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="card-block">
                                    <table class="table-bl">
                                        <tr>
                                            <td><span class="program-time">14.20 - 15.20</span></td>
                                            <td>
                                                <button class="event-even event-onehour event-yellow event-hover">Как создавать продающие...<span class="icon-add">+</span></button>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="headingThree">
                                <h5 class="mb-0"> <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#day3-3" aria-expanded="false" aria-controls="day3-3"> School </a> </h5> </div>
                            <div id="day3-3" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="card-block">
                                    <table class="table-bl">
                                        <tr>
                                            <td><span class="program-time">14.20 - 15.20</span></td>
                                            <td>
                                                <button class="event-even event-onehour event-yellow event-hover">Как создавать продающие...<span class="icon-add">+</span></button>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="headingThree">
                                <h5 class="mb-0"> <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#day3-4" aria-expanded="false" aria-controls="day3-4"> Pro </a> </h5> </div>
                            <div id="day3-4" class="collapse" role="tabpanel" aria-labelledby="headingFour">
                                <div class="card-block">
                                    <table class="table-bl">
                                        <tr>
                                            <td><span class="program-time">14.20 - 15.20</span></td>
                                            <td>
                                                <button class="event-even event-onehour event-yellow event-hover">Как создавать продающие...<span class="icon-add">+</span></button>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="md-modal md-effect-1" id="modal-2">
                    <div class="md-content program-modal">
                        <div class="col-md-12 program-info-modal">
                            <div class="wrapping-label">
                                <p class="premium-program-modal">PREMIUM</p>
                            </div>
                            <div class="col-md-12"><h4 class="program-heading-modal">Step by step: Образование для бармена</h4></div>
                            <div class="col-md-1 program-translate-modal">
                                <p class="program-time-modal">14.30 - 16.30</p>
                            </div>
                            <div class="col-md-7 program-description-modal">
                                <p>Алекс Кратена - настоящая звезда мировой барной индустрии. До ноября 2015 года он руководиллондонским баром Artesian, который четыре года подряд возглавлял рейтинг «50 лучших баров мира».Согласитесь, результат впечатляющий! Для BAROMETER Алекс подготовил лекцию, как превратить своё дело в бренд,который будет востребован в современном мире. Для владельцев и руководителей баров, бар-менеджеров и тех,кто стремится ими стать, − must visit!</p>
                            </div>
                            <div class="col-md-1 program-translate-modal">
                                <p class="program-modal-speaker">SPEAKER</p>
                            </div>
                            <div class="col-md-3 program-img-modal"><img src="/img/Alex-Kratena-1.png" class="img-fluid program-modal-img">
                                <h4 class="program-name-modal">Алекс Кратена</h4><span class="position-modal">Position</span></div>
                            <button class="md-close"></button>
                        </div>
                    </div>
                </div>

                <div class="md-modal md-effect-1" id="modal-3">
                    <div class="md-content program-modal">
                        <div class="col-md-12 program-normal-modal">
                            <div class="wrapping-label-normal">
                                {{--<p class="premium-program-modal">PREMIUM</p>--}}
                            </div>
                            <div class="col-md-12"><h4 class="program-heading-modal">Step by step: Образование для бармена</h4></div>
                            <div class="col-md-1 program-translate-modal">
                                <p class="program-time-modal">14.30 - 16.30</p>
                            </div>
                            <div class="col-md-7 program-description-modal">
                                <p>Алекс Кратена - настоящая звезда мировой барной индустрии. До ноября 2015 года он руководиллондонским баром Artesian, который четыре года подряд возглавлял рейтинг «50 лучших баров мира».Согласитесь, результат впечатляющий! Для BAROMETER Алекс подготовил лекцию, как превратить своё дело в бренд,который будет востребован в современном мире. Для владельцев и руководителей баров, бар-менеджеров и тех,кто стремится ими стать, − must visit!</p>
                            </div>
                            <div class="col-md-1 program-translate-modal">
                                <p class="program-modal-speaker">SPEAKER</p>
                            </div>
                            <div class="col-md-3 program-img-modal"><img src="/img/Alex-Kratena-1.png" class="img-fluid program-modal-img">
                                <h4 class="program-name-modal">Алекс Кратена</h4><span class="position-modal">Position</span></div>
                            <button class="md-close"></button>
                        </div>
                    </div>
                </div>
                <div class="md-overlay"></div>

            </div>
            <!-- <script>
                $('.tab-item > a').click(function (e) {
                    e.preventDefault()
                    $(this).tabpanel('show')
                })
            </script> -->
        </div>
    </div>
    <a href="#" class="buybutton md-trigger" data-modal="modal-5">
        <div class="circle-pop"></div>
        <span class="bilettext">@lang('static.header.buy_ticket')</span>
    </a>
</div>
