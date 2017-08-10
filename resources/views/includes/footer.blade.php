<!-- Модальное окно ( КУПИТЬ БИЛЕТ ) -->
<div class="md-modal md-effect-1 buy-ticket-section-modal" id="modal-buy-ticket">
    <div class="md-content buy-ticket-modal">
        <div class="col-md-12 buy-ticket-block">
            <div class="ticket-close">
                <button class="md-close"></button>
            </div>
            <form action="javascript:nestocontactticket()" class="form-buy-ticket" id="contactformticket">
                <div class=" col-md-12">
                    <input type="text" class="form-ticket-name inputText" name="name" placeholder="@lang('static.modal_form.name')" required>
                </div>
                <div class=" col-md-12">
                    <input type="text" class="form-ticket-city inputText" name="city" placeholder="@lang('static.modal_form.city')">
                </div>
                <div class=" col-md-6">
                    <input type="text" class="form-ticket-organization inputText" name="organization" placeholder="@lang('static.modal_form.organization')">
                </div>
                <div class=" col-md-6">
                    <input type="text" class="form-ticket-position inputText" name="position" placeholder="@lang('static.modal_form.position')">
                </div>
                <div class=" col-md-12">
                    <input type="text" class="form-ticket-phone inputText" name="phone" placeholder="@lang('static.modal_form.phone')" required>
                </div>
                <div class=" col-md-12">
                    <input type="email" class="form-ticket-email inputText" name="email" placeholder="E-mail" required>
                </div>
                <button type="submit" class="buy-ticket-button-modal">@lang('static.modal_form.buy')</button>
            </form>
            <div class="nesto-message">
                <h2 class="nesto-ticket-response"></h2>
            </div>
        </div>
    </div>
</div>
<div class="md-overlay"></div>

<!-- Модальное окно ( СТАТЬ УЧАСТНИКОМ ) -->
<div class="md-modal md-effect-1 buy-ticket-section-modal" id="modal-become-member">
    <div class="md-content buy-ticket-modal">
        <div class="col-md-12 buy-ticket-block">
            <div class="ticket-close">
                <button class="md-close"></button>
            </div>
            <form action="javascript:nestocontactbar()" class="form-buy-ticket" id="contactformbar">
                <div class="col-md-12">
                    <input type="text" class="form-member-name inputText" name="name" placeholder="@lang('static.modal_form.name')" required>
                </div>
                <div class="col-md-12">
                    <input type="text" class="form-member-city inputText" name="city" placeholder="@lang('static.modal_form.city')">
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-member-organization inputText" name="organization" placeholder="@lang('static.modal_form.organization')">
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-member-position inputText" name="position" placeholder="@lang('static.modal_form.position')">
                </div>
                <div class="col-md-12">
                    <input type="text" class="form-member-phone inputText" name="phone" placeholder="@lang('static.modal_form.phone')" required>
                </div>
                <div class="col-md-12">
                    <input type="email" class="form-member-email inputText" name="email" placeholder="E-mail" required>
                </div>
                <button type="submit" class="buy-ticket-button-modal">@lang('static.modal_form.member')</button>
            </form>
            <div class="nesto-message">
                <h2 class="nesto-member-response"></h2>
            </div>
        </div>
    </div>
</div>
<div class="md-overlay"></div>
