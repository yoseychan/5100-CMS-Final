</div>

<?php 
$year = date('Y');
?>

<footer>
    <div class="footer">
        <div class="left">
            <p class="logo">Petstagram</p>
        </div>
        <div class="right"> 
            <div class="ficon" >
                <a href="https://twitter.com/pewdiepie" class="icon" target="_blank"><i class="fab fa-twitter "></i></a>
                <a href="https://www.facebook.com/PewDiePie/" class="icon" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href="https://www.youtube.com/user/PewDiePie" class="icon" target="_blank"><i class="fab fa-youtube"></i></a>
            </div>
            <div class="footnav"> 
                <a href="/" class="spec">Home</a>
                <a href="/about" class="spec">About</a>
                <a href="/contact" class="spec">Contact</a> 
                <a href="/" class="spec">Terms & conditions</a>
            </div>
        </div>   
    </div>
    <p class="logotext"> All rights reserved &copy; <?= $year ?></p>
</footer>
<script src="/js/app.js"></script>
</body>
</html>