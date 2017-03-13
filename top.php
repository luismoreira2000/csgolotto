<?php include('head.php'); ?>
<body id="top-page">
 
<div class="wrapper">
<?php include('header.php'); ?>
<div class="content" role="main">
<div class="container">
<div class="content-box shown">
<div class="content-main">
<div class="content-main-inner">
<div class="best best-all">
        <div class="best-top">
            <div class="best-title">TOP PLAYERS</div>
        </div>
        <div class="ladder">
    <div class="infos">
        <div class="infos-columns">
            <div class="column-25">
                <div class="column-inner">
                    <div class="infos-item">
                        <div class="infos-item-value" id="count-top">0</div>
                        <div class="infos-item-title">Players </div>
                    </div>
                </div>
            </div>
            <div class="column-25">
                <div class="column-inner">
                    <div class="infos-item">
                        <div class="infos-item-value">~<span id="inf10">0 $.</span></div>
                        <div class="infos-item-title">Biggest win today</div>
                    </div>
                </div>
            </div>
            <div class="column-25">
                <div class="column-inner">
                    <div class="infos-item">
                        <div class="infos-item-value" id="inf7">0</div>
                        <div class="infos-item-title">Games today</div>
                    </div>
                </div>
            </div>
            <div class="column-25">
                <div class="column-inner">
                    <div class="infos-item">
                        <div class="infos-item-value" id="inf3">0</div>
                        <div class="infos-item-title">Unique players today</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="best-content">
        <div class="def-table best-table">
            <table>
                <thead>
                <tr>
                    <th class="col-place"><span>Number</span></th>
                    <th class="col-image"></th>
                    <th class="col-rank">Rank</th>
                    <th class="col-nick">Steam nick</th>
                    <th class="col-wincount">Win jackpots</th>
                    <th class="col-prize">Total win ($)</th>
                </tr>
                </thead>
                <tbody id="top-tbody">
                </tbody>
            </table>
            <div class="best-all-bg-left" style="height: 186px;"></div>
            <div class="best-all-bg-right" style="height: 186px;"></div>
        </div>
    </div>
</div>
    </div>
    <!-- promo end -->

    <!-- promo no token -->
    <div class="token-block promo hidden">
        <!-- jackpot -->
        <div class="jackpot">
            <!-- form-get-link -->
            <div class="form-get-link">
                <h4>Attention! It is necessary to introduce a tradelink. <a class="trade-link" href="http://steamcommunity.com/id/id/tradeoffers/privacy#trade_offer_access_url" target="_blank">( Where is it? )</a></h4>
                <div class="form-line">
                    <div class="wrap-input"><input type="text" name="link" placeholder="Например: https://steamcommunity.com/tradeoffer/new/?partner=226107091&amp;token=pWn1337k"></div>
                </div>
                <div class="buttons">
                    <div class="btn-yellow save-link">Save link</div>
                    <p>You must open your <a href="http://steamcommunity.com/id/id/edit/settings" target="_blank" class="openinv-link">Steam inventory</a>to get the price! </p>
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
