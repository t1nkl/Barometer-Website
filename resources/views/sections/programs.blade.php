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

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="tablist" role="tablist">
                @foreach($fest_days as $fest_day)
                    @if($loop->iteration == 1)
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#fest_day{{ $loop->iteration }}" role="tab">{{explode("(",$fest_day)[0]}}</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#fest_day{{ $loop->iteration }}" role="tab">{{explode("(",$fest_day)[0]}}</a>
                        </li>
                    @endif
                @endforeach
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                @foreach($fest_days as $fest_day)
                    @if($loop->iteration == 1)
                        <div class="tab-pane active" id="fest_day{{ $loop->iteration }}" role="tabpanel">
                            <div id="timetable{{ $loop->iteration }}" class="timetable"></div>
                        </div>
                    @else
                        <div class="tab-pane" id="fest_day{{ $loop->iteration }}" role="tabpanel">
                            <div id="timetable{{ $loop->iteration }}" class="timetable"></div>
                        </div>
                    @endif
                @endforeach
            </div>

        </div>

        @foreach($fest_days as $fest_date => $fest_day)
            @foreach($programs as $program)
                @if($fest_date == \Date::parse($program->day)->format('d-m-Y'))
                    @if($program->type == 'Premium')
                        <div class="md-modal md-effect-1" id="modal-{{ $program->id }}">
                            <div class="md-content program-modal">
                                <div class="col-md-12 program-info-modal">
                                    <div class="wrapping-label">
                                        <p class="premium-program-modal">PREMIUM</p>
                                    </div>
                                    <div class="col-md-12"><h4 class="program-heading-modal">{{ $program->title }}</h4></div>
                                    <div class="col-md-1 program-translate-modal">
                                        <p class="program-time-modal">{{ \Date::parse($program->start_date)->format('H:i') }} - {{ \Date::parse($program->end_date)->format('H:i') }}</p>
                                    </div>
                                    <div class="col-md-7 program-description-modal">
                                        <p>{{ $program->content }}</p>
                                    </div>
                                    <div class="col-md-1 program-translate-modal">
                                        <p class="program-modal-speaker">SPEAKER</p>
                                    </div>
                                    <div class="col-md-3 program-img-modal"><img src="/{{ $program->speaker->image }}" class="img-fluid program-modal-img">
                                        <h4 class="program-name-modal">{{ $program->speaker->title }}</h4><span class="position-modal">{{ $program->speaker->position }}</span></div>
                                    <button class="md-close"></button>
                                </div>
                            </div>
                        </div>
                        <div class="md-overlay"></div>
                    @else
                        <div class="md-modal md-effect-1" id="modal-{{ $program->id }}">
                            <div class="md-content program-modal">
                                <div class="col-md-12 program-normal-modal">
                                    <div class="wrapping-label-normal">
                                    </div>
                                    <div class="col-md-12"><h4 class="program-heading-modal">{{ $program->title }}</h4></div>
                                    <div class="col-md-1 program-translate-modal">
                                        <p class="program-time-modal">{{ \Date::parse($program->start_date)->format('H:i') }} - {{ \Date::parse($program->end_date)->format('H:i') }}</p>
                                    </div>
                                    <div class="col-md-7 program-description-modal">
                                        <p>{{ $program->content }}</p>
                                    </div>
                                    <div class="col-md-1 program-translate-modal">
                                        <p class="program-modal-speaker">SPEAKER</p>
                                    </div>
                                    <div class="col-md-3 program-img-modal"><img src="/{{ $program->speaker->image }}" class="img-fluid program-modal-img">
                                        <h4 class="program-name-modal">{{ $program->speaker->title }}</h4><span class="position-modal">{{ $program->speaker->position }}</span></div>
                                    <button class="md-close"></button>
                                </div>
                            </div>
                        </div>
                        <div class="md-overlay"></div>
                    @endif
                @endif
            @endforeach
        @endforeach

    </div>
    <a href="#" class="buybutton md-trigger" data-modal="modal-buy-ticket">
        <div class="circle-pop"></div>
        <span class="bilettext">@lang('static.header.buy_ticket')</span>
    </a>
</div>
