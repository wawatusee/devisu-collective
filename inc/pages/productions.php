<section id="portfolio">
    <a href="#id01">Ouvrir la fenêtre modale</a>
        <h2>PORTFOLIO</h2>
        <div id="id01" class="modal">
            <div class="modal-dialog">
                <div class="modal-content">
                <header class="container"> 
                    <a href="#" class="closebtn">×</a>
                </header>
                <div class="container">
                <video id="playervideo" controls width="640" height="480" poster="img/content/thumbs-videos/mariamateaser.jpg" autoplay muted>
                     <source src="videos/MARIAMA-TEASER-FINAL-FINAL-1.2.mp4" type="video/mp4">
                </video>
                    </div>

                </div>
            </div>
        </div> 
            <video id="playervideo" controls width="640" height="480" poster="img/content/thumbs-videos/mariamateaser.jpg" autoplay muted>
                <source src="videos/MARIAMA-TEASER-FINAL-FINAL-1.2.mp4" type="video/mp4">
            </video>
            <?php require_once("../src/model/portfolio_model.php");
            $portfolioData=new PortfolioModel("../json/portfolio.json");
            $contentPortfolio=$portfolioData->getPortfolio();
            require_once("../src/view/portfolio_view.php");
            $portfolioView=new PortfolioView;
            echo $portfolioView->getView($contentPortfolio->showcase);
            ?>
</section>
<script src="js/portfolio.js"></script>