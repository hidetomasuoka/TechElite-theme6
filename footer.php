</main>

    <div class="scrollPc">
        <a href="#" target="_blank"><img src="../img/parts/side_line.svg" alt=""></a>
    </div>

    <div class="scrollSp">
        <div class="apply">
            <a href="#" target="_blank"><span class="apply__title">事前申し込みはこちら（無料）</span><img src="../img/line.png" alt=""></a>
        </div>
    </div>

    <footer class="footer">
        <div class="limited-width">
            <div class="footer__exhibit">
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSdphU7Vu9xdSpRV0xaVSt9C6MpHUYG3OsTh7Vuqj8sGyInYqA/viewform" target="_blank">出展希望企業はこちら</a>
            </div>
            <div class="footer__wrap">
                <span class="footer__wrap__company">運営会社</span>
                <img src="../img/stocksun_logo.png" alt="">
                <a href="#" target="_blank" class="footer__wrap__policy">個人情報保護方針</a>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script>
        $(function() {
            $('#readMore').on('click', function() {
                $(this).hide();
                $('.exhibitor__list').addClass('opened');
            })
        });
    </script>
</body>

</html>
