<aside class="sidebar-left" role="complementary">
    <!-- navigation  -->
    <nav class="navigation">
        <div class="title">Menu</div>
        <ul class="navigation-list">
            <li>
                <a href="/">
                    <div class="image">
                        <span class="icon-sensor"></span>
                    </div>
                    <div class="text">Play</div>
                </a>
            </li>
            <li>
                <a href="/about.php">
                    <div class="image">
                        <span class="icon-dialogue"></span>
                    </div>
                    <div class="text">About</div>
                </a>
            </li>
            <li><a href="/top.php">
                <div class="image">
                    <span class="icon-star"></span>
                </div>
                 <div class="text">Top Players</div>
            </a></li>
            <li><a href="/history.php">
                <div class="image">
                    <span class="icon-book"></span>
                </div>
                <div class="text">Game History</div>
            </a></li>
            <li><a href="/fair.php">
                <div class="image">
                    <span class="icon-star"></span>
                </div>
                <div class="text">Round Check</div>
            </a></li>
           <?php if (isset($_SESSION['steamid'])) {
                $exit_class = '';
            } else {
                $exit_class = 'hidden';
            }
            ?>
            <li><a href="settings-page.php" class=" <?php echo $exit_class; ?>">
                <div class="image">
                    <span class="icon-tools"></span>
                </div>
                <div class="text">Мои Настройки</div>
            </a></li>
            <li>
                <a href="steamauth/logout.php" class="action-logout <?php echo $exit_class; ?>">
                    <div class="image">
                        <span class="icon-off"></span>
                    </div>
                    <div class="text">Выйти</div>
                </a>
            </li>
        </ul>
    </nav>
    <!-- navigation end -->

   <div class="side-banner">
        <a href="http://steamcommunity.com/id/user/edit" target="_blank"><img src="/img/banner_prize.png"></a>
        <p class="bonus_en" style="display: block;">Add <span class="side-bonus-name">Your Site Name</span> to your <a href="https://steamcommunity.com/id/user/edit" target="_blank">Steam</a> nickname and get <img class="percent" src="/img/5percent.png"> <span class="side-bonus-game-price">bonus</span> to your win amount</p>
    </div>                  <div class="side-last-winner">
        <div class="title">Last Winner:</div>
        <div class="player-image" id="winner-avatar">
            <img src="img/test.jpg" alt="">
        </div>
        <div class="name" id="winner-name">Example</div>
    </div>
    <div class="side-last-winner-bottom">
        <div class="captions">
            Win:<br>
            Chance:
        </div>
        <div class="numbers">
            <div class="sum"> <span id="winner-money">?</span></div>
			<div class="chance"><span id="winner-chance">0</span></div>
        </div>
    </div>
   
<!-- side-support -->
    <div class="side-support">
        <a href="mailto:#" target="_blank">Tech support</a>
    </div>
    <!-- side-support end -->

<div class="opskins">
        Pricing provided by: 
        <img src="/img/steamanalyst.png" alt="steamanalyst"/>
    </div>
</aside>