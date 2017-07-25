<!-- Модальное окно ( КУПИТЬ БИЛЕТ ) -->
<div class="md-modal md-effect-1 buy-ticket-section-modal" id="modal-buy-ticket">
    <div class="md-content buy-ticket-modal">
        <div class="col-md-12 buy-ticket-block">
            <form action="javascript:nestocontactticket()" class="form-buy-ticket" id="contactformticket">
                <div class="form-ticket-name col-md-12">
                    <input type="text" class="form-name inputText" name="name" id="name" placeholder="Имя" required>
                </div>
                <div class="form-ticket-city col-md-12">
                    <input type="text" class="form-city inputText" name="city" id="city" placeholder="Город">
                </div>
                <div class="form-ticket-company col-md-6">
                    <input type="text" class="form-company inputText" name="organization" id="organization" placeholder="Организация">
                </div>
                <div class="form-ticket-position col-md-6">
                    <input type="text" class="form-position inputText" name="position" id="position" placeholder="Должность">
                </div>
                <div class="form-ticket-phone col-md-12">
                    <input type="tel" pattern='[\+]\d{2}[\(]\d{3}[\)]\d{3}[\-]\d{2}\-]\d{2}' class="form-phone inputText" name="phone" id="phone" placeholder="Телефон" required>
                </div>
                <div class="form-ticket-mail col-md-12">
                    <input type="email" class="form-mail inputText" name="email" id="email" placeholder="E-mail">
                </div>
                <button type="submit" id="nesto-submit" class="buy-ticket-button-modal">Купить</button>
            </form>
                <div class="nesto-message">
                    <h2 class="nesto-response" id="h2"></h2>
                </div>
            <div class="ticket-close">
                <button class="md-close"></button>
            </div>
        </div>
    </div>
</div>
<div class="md-overlay"></div>

<!-- Модальное окно ( СТАТЬ УЧАСТНИКОМ ) -->
<div class="md-modal md-effect-1 buy-ticket-section-modal" id="modal-become-member">
    <div class="md-content buy-ticket-modal">
        <div class="col-md-12 buy-ticket-block">
            <form action="javascript:nestocontactbar()" class="form-buy-ticket" id="contactformbar">
                <div class="form-ticket-name col-md-12">
                    <input type="text" class="form-name inputText" name="name" id="name" placeholder="Имя" required>
                </div>
                <div class="form-ticket-city col-md-12">
                    <input type="text" class="form-city inputText" name="city" id="city" placeholder="Город">
                </div>
                <div class="form-ticket-company col-md-6">
                    <input type="text" class="form-company inputText" name="organization" id="organization" placeholder="Организация">
                </div>
                <div class="form-ticket-position col-md-6">
                    <input type="text" class="form-position inputText" name="position" id="position" placeholder="Должность">
                </div>
                <div class="form-ticket-phone col-md-12">
                    <input type="tel" pattern='[\+]\d{2}[\(]\d{3}[\)]\d{3}[\-]\d{2}\-]\d{2}' class="form-phone inputText" name="phone" id="phone" placeholder="Телефон" required>
                </div>
                <div class="form-ticket-mail col-md-12">
                    <input type="email" class="form-mail inputText" name="email" id="email" placeholder="E-mail">
                </div>
                <button type="submit" id="nesto-submit" class="buy-ticket-button-modal">Купить</button>
            </form>
            <div class="nesto-message">
                <h2 class="nesto-response" id="h2"></h2>
            </div>
            <div class="ticket-close">
                <button class="md-close"></button>
            </div>
        </div>
    </div>
</div>
<div class="md-overlay"></div>