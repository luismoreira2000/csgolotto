<?php include('head.php'); ?>
<body>
 
<div class="wrapper">
<?php include('header.php'); ?>
<div class="content" role="main">
<div class="container">
<div class="content-box shown">
<div class="content-main">
<div class="content-main-inner">
    <div class="about">
        <div class="about-top">
            <div class="about-title">Fair Game!</div>
        </div>
        <div class="about-content">
            <article class="about-article">
             <p>Each cent is a ticket</p>

                <p>At the beginning of each round, our system takes a completely randomly long integer from 0 to 1 (for example 0.073185018861535), encrypts it through MD5, and displays it in encrypted form in the early rounds
(<a target="_blank" href="https://wikipedia.org/wiki/MD5">What is md5?</a>)</p>

                <p>
Then, when the round is over, the system shows the number, which was encrypted properly initially and multiplies it by the Bank.
 <a target="_blank" href="http://www.md5online.org/md5-encrypt.html">Test it</a></p>

                <p>For example, in the late rounds Bank was 5,000 rubles (500,000 cents), you will need to multiply by the number 0.07318501886153 Bank 500,000 cents (it figures that we have taken as an example) and get the number 36592.509430765. Round it up to the whole, and get 36593. That is, in the round will win a man whose ticket №36593.</p>

                <p>Therefore, the sum of a large deposit you make - the more tickets you get, and thus higher chance to get the winning ticket.
</p>

                <p>That's all. The principle of fair play is that we can not know what will be the bank at the end of the game, and randomly number to multiply by the bank we give at the beginning of the round and therefore even if we strongly wanted this, it would never have been able to do frontman winner.</p>
                <p align="center">CHECK THE WINNER</p>
                <input class="fair" type="text" name="hashround" id="hashround" placeholder="Hash">
                 <input class="fair" type="text" name="numround" id="numround" placeholder="Number">
                 <input class="fair" type="text" name="numtickets" id="numtickets" placeholder="Winner tickets">
                 <input class="fair fair-btn" type="button" value="Check">

            </article>
        </div>
    </div>
    <!-- promo end -->

    <!-- promo no token -->
    <div class="token-block promo hidden">
        <!-- jackpot -->
        <div class="jackpot">
            <!-- form-get-link -->
            <div class="form-get-link">
                <h4>Внимание! Необходимо ввести ссылку на обмен. <a class="trade-link" href="http://steamcommunity.com/id/id/tradeoffers/privacy#trade_offer_access_url" target="_blank">( Где взять ссылку? )</a></h4>
                <div class="form-line">
                    <div class="wrap-input"><input type="text" name="link" placeholder="Например: https://steamcommunity.com/tradeoffer/new/?partner=226107091&amp;token=pWn1337k"></div>
                </div>
                <div class="buttons">
                    <div class="btn-yellow save-link">Запомнить ссылку</div>
                    <p>Обязательно <a href="http://steamcommunity.com/id/id/edit/settings" target="_blank" class="openinv-link">откройте инвентарь</a> в Steam для получения приза! </p>
                </div>
            </div>
            <!-- form-get-link end -->
        </div>
        <!-- jackpot end -->
    </div>
    <!-- promo end -->

    <div class="game">
    <p class="steampowered"></span><font color="#FFFFFF">Powered by Steam, a registered trademark of Valve Corporation.</p>
</div>
</div>
</div>
<?php include('sidebar.php'); ?>
</div>
</div>
</div>
</div>

</body>
</html>